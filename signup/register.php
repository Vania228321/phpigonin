<?php
    $host = 'localhost';
    $db = 'my_db';
    $user = 'root';
    $password = '';
    $charset = 'utf8';

    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
    $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // Протоколирование ошибок
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ];

    $pdo = new PDO($dsn, $user, $password, $options);
    session_start();

    function validate_password($password, $repeated_password)
    {
        if (trim($password) !== trim($repeated_password)) {
            return false;
        }

        return true;
    }

    function check_fields_on_full($field)
    {
        if (trim($field) === "") {
            return false;
        }

        return true;
    }

    function validate_email($email)
    {
        $email = filter_var(trim($email), FILTER_SANITIZE_STRING);
        // Санитизация e-mail
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);

        // Валидация e-mail
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
            return false;
        }

        return true;
    }

    function validate_login($login)
    {
        $login = filter_var($login, FILTER_SANITIZE_STRING);
        if (strlen($login) < 5 or strlen($login) > 14) {
            return false;
        }
        return true;
    }

    function validate_length_password($password)
    {
        $password = filter_var($password, FILTER_SANITIZE_STRING);
        if (strlen($password) < 5 or strlen($password) > 14) {
            return false;
        }
        return true;
    }

    $email = $_POST['email'];
    $login = $_POST['login'];
    $password = $_POST['password'];
    $repeated_password = $_POST['repeated_password'];

    if (!check_fields_on_full($email)
        or !check_fields_on_full($login)
        or !check_fields_on_full($password)
        or !check_fields_on_full($repeated_password))
    {
        $_SESSION['flash'] = "Пожалуйста, заполните все поля в форме!";
        header("Location: index.php");
        die();
    } else {
        if (!validate_password($password, $repeated_password) or !validate_length_password($password) or !validate_email($email) or !validate_login($login)) {
            $_SESSION['flash'] = "Данные введены неверно!";
            header("Location: index.php");
            die();
        } else {
            $res = $pdo->prepare("SELECT COUNT(*) FROM users WHERE email = ? or login = ?");
            $res->execute([$email, $login]);
            if ($res->fetchColumn()) {
                $_SESSION['flash'] = "Электронная почта или логин заняты! Повторите попытку!";
                header("Location: index.php");
                die();
            } else {
                $password = password_hash($password, PASSWORD_DEFAULT);
                $res = $pdo->prepare("INSERT INTO users (email, login, password) VALUES (?, ?, ?)");
                if ($res->execute([$email, $login, $password])) {
                    $_SESSION['flash'] = "Вы успешно зарегистрировались!";
                    header("Location: index.php");
                    die();
                } else {
                    $_SESSION['flash'] = "Ошибка регистрации.";
                    header("Location: index.php");
                    die();
                }
            }
        }
    }