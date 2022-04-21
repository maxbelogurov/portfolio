// BUTTONS
let isPlay = false;
let playNum = 0;
let audio = document.querySelector('audio');
let playBtn = document.querySelector('.play');
let nextBtn = document.querySelector('.play-next');
let prevBtn = document.querySelector('.play-prev');
let playList = ['incontrol','onebyone','troubleinparadise']
let audioTitle = ['In Control','One By One','Trouble In Paradise']
let audioArtist = ['Mahmut Orhan, Ali Arutan, Selin','The Blue Stones','Alice Merton']
function playAudio() {
    if (!isPlay) {
        audio.currentTime;
        audio.play();
        isPlay = true;
    } else {
        audio.pause();
        isPlay = false;
    }
};
function playNextPrev() {
    audio.src = `./assets/audio/${playList[playNum]}.mp3`;
    if (!isPlay) {
        playAudio();
        playBtn.classList.toggle('pause');
    } else {
        audio.play();
        isPlay = true;
    }
}
playBtn.addEventListener('click', () => {
    playAudio();
    playBtn.classList.toggle('pause');
});
function startNext() {
    if (playNum < playList.length - 1) {
        playNum++;
        playNextPrev();
    } else {
        playNum = 0;
        playNextPrev();
    }
}
nextBtn.addEventListener('click', startNext);
prevBtn.addEventListener('click', () => {
    if (playNum <= 0) {
        playNum = playList.length - 1;
        playNextPrev();
    } else {
        playNum--;
        playNextPrev();
    }
});
// TIMELINE, COVER, TITLE
let minutes = 0;
let sec = 0;
const timeLine = document.querySelector('.timeline');
let timeNow = document.querySelector('.time-now');
let timeAll = document.querySelector('.time-all');
let cover = document.querySelector('.cover');
let title = document.querySelector('.title');
let artist = document.querySelector('.artist');
let coverImgNow;
let bgImage = document.body;

//расчитываем общее время песни
function timeSongAll(timeInSec) {
    minutes = Math.trunc(timeInSec/60);
    sec = Math.trunc(timeInSec/60 % 1 * 60);
    if (sec < 10) {sec = '0' + sec};
    return `${minutes}:${sec}`;
}
//вставляем время песни, заголовок, артиста, обложку и фон
function startData() {
    timeAll.innerHTML = timeSongAll(audio.duration);
    title.innerHTML = audioTitle[playNum];
    artist.innerHTML = audioArtist[playNum];
    coverImgNow = `url(./assets/img/${playList[playNum]}.png)`;
    cover.style.backgroundImage = coverImgNow;
    bgImage.style.backgroundImage = coverImgNow;
};
startData()

//меняем время песни, заголовок, артиста, обложку и фон, когда загружена новая песня
audio.ondurationchange = () => startData();

//меняем текущее время песни и timeline при проигрывании. + автопереключение трека на следующий.
setInterval( () => {
    timeNow.innerHTML = timeSongAll(audio.currentTime);
    document.querySelector('.progress').style.width = (audio.currentTime / audio.duration) * 100 + '%';
    if(audio.currentTime === audio.duration) {
        startNext()
    }
}, 250 );
//кликабельный timeline
timeLine.addEventListener('click', (pixel) => {
    audio.currentTime = audio.duration * (pixel.offsetX / timeLine.offsetWidth);
});