const cvs = document.getElementById("canvas"),
      ctx = cvs.getContext("2d");
      bird = new Image();
      bg = new Image();
      fg = new Image();
      pipeUp = new Image();
      pipeBottom = new Image();
      stopButton = document.getElementById("stopButton");
      playButton = document.getElementById('playButton');

bird.src = "img/bird.png";
bg.src = "img/bg.png";
fg.src = "img/fg.png";
pipeUp.src = "img/pipeNorth.png";
pipeBottom.src = "img/pipeSouth.png";

// Звуковые файлы
const fly = new Audio();
const scoreAudio = new Audio();
fly.src = 'audio/fly.mp3';
scoreAudio.src = 'audio/score.mp3';

let gap = 90;

// Создание блоков
let pipe = [];

pipe[0] = {
x : cvs.width,
y : 0
}

// координаты птички(позиция)
let xPos = 10;
let yPos = 150;
let grav = 1.5;

// Счет игры
let score = 0;

// Анимационный идентификатор
let animationId;

function stopGame() {
    cancelAnimationFrame(animationId);
    stopButton.style.display = 'none';
    playButton.style.display = 'block';
}

function resumeGame() {
    draw();
    stopButton.style.display = 'block';
    playButton.style.display = 'none';
}

stopButton.addEventListener('click', stopGame);
playButton.addEventListener('click', resumeGame);

// При нажатии на какую-либо кнопку
document.addEventListener('keydown', moveUp);
document.addEventListener('click', moveUp);

function moveUp() {
    yPos -= 25;
    fly.play();
    }

    function draw() {
    ctx.drawImage(bg, 0, 0);

    for (let i = 0; i < pipe.length; i++) {
        ctx.drawImage(pipeUp, pipe[i].x, pipe[i].y);
        ctx.drawImage(pipeBottom, pipe[i].x, pipe[i].y + pipeUp.height + gap);

        pipe[i].x--;

        if (pipe[i].x === 125) {
            pipe.push({
                x : cvs.width,
                y : Math.floor(Math.random() * pipeUp.height) - pipeUp.height
            });
        }

        // Отслеживание столкновений с объектами
        if (xPos + bird.width >= pipe[i].x && xPos <= pipe[i].x + pipeUp.width && (yPos <= pipe[i].y + pipeUp.height || yPos + bird.height >= pipe[i].y + pipeUp.height + gap) 
        || yPos + bird.heigth >= cvs.height - fg.height) {
            location.reload();
        }

        if (pipe[i].x === 5) {
            score++;
            scoreAudio.play();
        }
    }
        ctx.drawImage(fg, 0, cvs.height - fg.height);
        ctx.drawImage(bird, xPos, yPos);

        yPos += grav;
        ctx.fillStyle = "#000";
        ctx.font = '24px Verdana';
        ctx.fillText("Счет: " + score, 10, cvs.height - 20);
        animationId = requestAnimationFrame(draw);
}

pipeBottom.onload = draw;