<?php
session_start();
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

$email = $_POST['email'];
$pass = $_POST['password'];

if (trim($email) === "" or trim($pass) === "") {
    $_SESSION['flash'] = "Почта и пароль должны быть заполнены!";
    header("Location: index.php");
    die();
} else {
    $res = $pdo->prepare("SELECT email FROM users WHERE email = ?");
    $res->execute([$email]);
    if (!($res->fetchColumn())) {
        $_SESSION['flash'] = "Неправильно введена почта или вы не зарегистрированы на сайт.";
        header("Location: index.php");
        die();
    } else {
        $hashing_password = $pdo->prepare("SELECT password FROM users WHERE email = ?");
        $hashing_password->execute([$email]);
        $value = $hashing_password->fetchColumn();
        if (!password_verify($pass, $value)) {
            $_SESSION['flash'] = "Пароль введен неверный!";
            header("Location: index.php");
            die();
        } else {
            $_SESSION['email'] = $email;
            $_SESSION['auth'] = true;
            header("Location: ../closed_pages/main_page/index.php");
            die();
        }
    }
}