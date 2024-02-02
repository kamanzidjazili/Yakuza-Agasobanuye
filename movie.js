// let playButton = document.querySelector('.play-movie');
// let video = document.querySelector('.video-container');
// let closebtn = document.querySelector('.close-video');
// let myvideo = document.querySelector('#myvideo');

// playButton.onclick = () => {
//     video.classList.add("show-video");
//     myvideo.play();
// };
// closebtn.onclick = () => {
//     video.classList.remove("show-video");
//     myvideo.pause();
// };


let player = document.getElementById('video_player');
let play_pause_btn = document.getElementById('play_pause_btn');
let current_duration = document.getElementById('current_duration');
let total_duration = document.getElementById('total_duration');
let progress_bar = document.getElementById('progress_bar');
let skip_backward = document.getElementById('skip_backward');
let skip_forward = document.getElementById('skip_forward');

let fullscreen = document.getElementById('fullscreen');
let video = document.querySelector('.main');

player_status = 0;

function play_pause() {
    if (player_status == 0) {
        player.play();
        player_status = 1;
        timer = setInterval(update_player, 1000);
        play_pause_btn.innerHTML = '<i class="fas fa-pause" aria-hidden+"true"><i/>';
    }else{
        player.pause();
        player_status = 0;
        play_pause_btn.innerHTML = '<i class="fas fa-play" aria-hidden+"true"><i/>';
    }
}
play_pause_btn.addEventListener('click', play_pause);

function update_player(){
    current_duration.innerHTML = "0" + ":" + Math.floor(player.currentTime);
    const percent = (player.currentTime / player.duration) * 100;
    if (player.ended) {
        player_status = 0;
        play_pause_btn.innerHTML = '<i class="fas fa-repeat" aria-hidden="true"><i/>';
    }
}

function skip(){
    player.currentTime += parseFloat(this.dataset.skip);
    update_player();
}
skip_forward.addEventListener('click', skip);


function skip2(){
    player.currentTime += parseFloat(this.dataset.skip);
    update_player();
}
skip_backward.addEventListener('click', skip2);

player.oncanplay = (e) =>{
    total_duration.innerHTML = "0" + ":" + Math.floor(player.duration);
}

var screen = 0;
fullscreen.onclick = function(){
    if (screen==0) {
        video.style.width = '100%';
        video.style.height = '100vh';
        video.style.padding = '0px';
        screen = 1;
    }else{
        video.style.width = '';
        video.style.height = '';
        video.style.padding = '';
        screen = 0;
    }
}