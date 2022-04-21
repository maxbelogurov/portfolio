const canvas = document.getElementById('canvas');
let alertBox = document.querySelector('.alert-box');
let modal = document.querySelector('.modal');
let goScore = document.querySelector('.game-over__score')
const ctx = canvas.getContext('2d');
canvas.setAttribute('width', '840px');
canvas.setAttribute('height', '480px');
const pix = 20;
let mouseХ;
let mouseY;
let route;
let speed = 150;
let interval5 = 1; //переменая для изменения скорости

//отображаем счёт и лучший результат
let scoreBox = document.querySelector('.score-count');
let boardResultScore = document.querySelector('.board-result-score');
let boardResultSpeed = document.querySelector('.board-result-speed');
let score = 0;
scoreBox.innerHTML = score;


//работаем с Local Storage
//Local Storage: записываем данные при game over
function addResultToLocalStorage() {
    if (!localStorage[0]) {
        localStorage[0] = score;
        localStorage[1] = 160 - speed;
    } else if (score > localStorage[0]) {
        localStorage[0] = score;
        localStorage[1] = 160 - speed;
    }
}
//Local Storage: читаем данные при старте игры
function readResultToLocalStorage() {
    if (localStorage[0]) {
        boardResultScore.innerHTML = localStorage[0];
        boardResultSpeed.innerHTML = localStorage[1];
    } 
}
readResultToLocalStorage();

//делаем рандом для мышки
function mouseRandom() {
    mouseХ = pix * Math.floor(Math.random() * 840 / pix);
    mouseY = pix * Math.floor(Math.random() * 460 / pix);
    ctx.fillStyle = "#f15a23";
    ctx.fillRect(mouseХ, mouseY, pix, pix);
};
mouseRandom();

//рисуем змею
let snake = [];
let snakeX = 420;
let snakeY = 220;
snake[0] = {x: snakeX, y: snakeY}
let snakeTail;
ctx.fillStyle = "#23c51a";
ctx.fillRect(snakeX, snakeY, pix, pix);

//остановка игры
function stopGame() {
    clearInterval(startInterval);
    route = undefined;
    goScore.innerHTML = `You score: ${score}`
    modal.classList.add('active');
    addResultToLocalStorage();
}

// cтарт игры
let startGame = () => {
    ctx.fillStyle = "#23c51a"; 
    if (route === 'left') {snakeX -= pix;}
    if (route === 'right') {snakeX += pix;}
    if (route === 'up') {snakeY -= pix;}
    if (route === 'down') {snakeY += pix;}
    
    if (route !== undefined) {
        snake.unshift({x: snakeX, y: snakeY});
        for (let i in snake) {
            ctx.fillRect(snake[i].x, snake[i].y, pix, pix);    
        }  
        snakeTail = snake.pop();
        ctx.clearRect(snakeTail.x, snakeTail.y, pix, pix);
        alertBox.classList.add('hidden')
    }
    //если съели мышь, рисуем новую
    if (snake[0].x === mouseХ && snake[0].y === mouseY ) {
        snake.unshift({x: snakeX, y: snakeY});
        scoreBox.innerHTML = ++score;
        mouseRandom();
    }
    //проверяем чтобы мышь не нарисовалась на змею
    for (let key in snake) {
        if (snake[key].x === mouseХ && snake[key].y === mouseY) {
            mouseRandom();
        }
    }

    //game over
    if (snakeX < 0 || snakeX >= 840 || snakeY < 0 || snakeY >= 480) stopGame();
    for(let i = 2; i < snake.length; i++) {
        if (snake[0].x == snake[i].x && snake[0].y == snake[i].y) { stopGame() }
    }
    
    if (interval5 === score) {
        interval5++;
        if (interval5 % 5 === 0) {
            speed -= 5;
            clearTimeout(startInterval)
            startInterval = setInterval(startGame, speed);
        }
    }

};

//запуск игры
let startInterval = setInterval(startGame, speed);

//отробатываем нажатие кнопок управления
window.addEventListener("keydown", function(event) {
    if(event.key === 'ArrowLeft' && route !== 'right') {route = 'left'}
    else if (event.key === 'ArrowRight' && route !== 'left') {route = 'right'}
    else if (event.key === 'ArrowUp' && route !== 'down') {route = 'up'}
    else if (event.key === 'ArrowDown' && route !== 'up') {route = 'down'}
});

//меняем ползунок Score и вертим стрелку спидометра
let speedArrow = document.querySelector('.speed-arrow');
setInterval( () => { 
    document.querySelector('.timeline').style.width = score + '%';
    speedArrow.style.setProperty('transform', 'rotate(' + (160 - speed) + 'deg)')
}, 100);

//запуск игры по кнопке new game
let startBtn = document.getElementById('start');
startBtn.addEventListener('click', () => {
    location.reload()
})
