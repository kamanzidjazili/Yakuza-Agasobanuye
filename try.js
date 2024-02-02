const container = document.querySelector(".container"),
mainVideo = container.querySelector("video"),
videoTimeline = container.querySelector('.video-timeline'),
progressBar = container.querySelector('.progress-bar'),
skipBackward = container.querySelector('.skip-backward i' ),
skipForward = container.querySelector('.skip-forward i'),
speed_Btn = container.querySelector('.playback-content span'),
speedOption = container.querySelector('.speed-option'),
currentVidTime = container.querySelector('.current-time'),
videoDuration = container.querySelector('.video-duration'),
volumeBtn = container.querySelector('.volume i'),
volumeSlider = container.querySelector('.left input'),
picture = container.querySelector('.pic-in-pic span'),
fullscreen = container.querySelector('.fullscreen i'),
playPauseBtn = container.querySelector(".play-pause i");
let timer;


const hideControls = () =>{
	if (mainVideo.paused) return;
	timer = setTimeout(() =>{
		container.classList.remove("show-controls");
	}, 3000);
}
hideControls();

container.addEventListener('mousemove', ()=>{
	container.classList.add("show-controls");
	clearTimeout(timer);
	hideControls();
});


playPauseBtn.addEventListener("click",()=>{
	mainVideo.paused ? mainVideo.play() : mainVideo.pause();
});

mainVideo.addEventListener('play',()=>{
	playPauseBtn.classList.replace('fa-play', 'fa-pause');
});
mainVideo.addEventListener('pause',()=>{
	playPauseBtn.classList.replace('fa-pause', 'fa-play');
});

mainVideo.addEventListener('timeupdate', e=>{
	let {currentTime, duration} = e.target;
	let percent = (currentTime / duration) * 100;
	progressBar.style.width = `${percent}%`;
	currentVidTime.innerHTML = formatTime(currentTime);
});

mainVideo.addEventListener('loadeddata', e =>{
	videoDuration.innerHTML = formatTime(e.target.duration);
})

skipBackward.addEventListener('click',()=>{
	mainVideo.currentTime -=10;
});

skipForward.addEventListener('click',()=>{
	mainVideo.currentTime +=10;
});

volumeSlider.addEventListener('input',(e)=>{
	mainVideo.volume = e.target.value;
	if (e.target.value == 0) {
		volumeBtn.classList.replace("fa-volume-high" ,"fa-volume-xmark");
	}else{
		volumeBtn.classList.replace("fa-volume-xmark" ,"fa-volume-high");
	}

});

volumeBtn.addEventListener('click',()=>{
	if (!volumeBtn.classList.contains("fa-volume-high")) {
		mainVideo.volume = 0.5;
		volumeBtn.classList.replace("fa-volume-xmark" ,"fa-volume-high");
	}
	else{
		mainVideo.volume = 0.0;
		volumeBtn.classList.replace("fa-volume-high" ,"fa-volume-xmark");
	}
	volumeSlider.value = mainVideo.volume;
});

speed_Btn.addEventListener('click',()=>{
	speedOption.classList.toggle("show");
});
document.addEventListener('click', e =>{
	if (e.target.tagName !== "SPAN" || e.target.className !== "material-symbols-outlined") {
		speedOption.classList.remove("show");
	}
});

speedOption.querySelectorAll("li").forEach(option =>{
	console.log(option);
	option.addEventListener('click',()=>{
		mainVideo.playbackRate = option.dataset.speed;
		speedOption.querySelector('.active').classList.remove("active");
		option.classList.add("active");
	})
});

picture.addEventListener('click',()=>{
	mainVideo.requestPictureInPicture();
});

fullscreen.addEventListener('click',()=>{
	container.classList.toggle("fullscreen");
	if (document.fullscreenElement) {
		fullscreen.classList.replace("fa-compress", "fa-expand");
		return document.exitFullscreen();
	}
	fullscreen.classList.replace("fa-expand", "fa-compress");
		container.requestFullscreen();
})


videoTimeline.addEventListener('click', e =>{
	let timelineWidth = videoTimeline.clientWidth;
	mainVideo.currentTime = (e.offsetX / timelineWidth) * mainVideo.duration;
});

const formatTime = time =>{
	let seconds = Math.floor(time % 60),
	minutes = Math.floor(time / 60) % 60,
	hours = Math.floor(time / 3600);

	seconds = seconds < 10 ? `0${seconds}` : seconds;
	minutes = minutes < 10 ? `0${minutes}` : minutes;
	hours = hours < 10 ? `0${hours}` : hours;

	if (hours == 0) {
		return `${minutes}:${seconds}`;
	}
	return `${hours}:${minutes}:${seconds}`;
}

videoTimeline.addEventListener('mousedown', () =>{
	videoTimeline.addEventListener('mousemove', draggableProgressBar);
});

container.addEventListener('mouseup', () =>{
	videoTimeline.removeEventListener('mousemove', draggableProgressBar);
});

const draggableProgressBar = e =>{
	let timelineWidth = videoTimeline.clientWidth;
	progressBar.style.width = `${e.offsetX}px`;
	mainVideo.currentTime = (e.offsetX / timelineWidth) * mainVideo.duration;
	currentVidTime.innerHTML = formatTime(mainVideo.currentTime);
}

videoTimeline.addEventListener('mousemove', e =>{
	const progressTime = videoTimeline.querySelector("span");
	let offsetX = e.offsetX;
	progressTime.style.left = `${offsetX}px`;
	let timelineWidth = videoTimeline.clientWidth;
	let percent = (e.offsetX / timelineWidth) * mainVideo.duration;
	progressTime.innerText = formatTime(percent);
});



 function search(){
        let filter = document.getElementById('find').value.toUpperCase();

        let item = document.querySelectorAll('.movie-box');

        let l = document.getElementsByTagName('h2');

        for(var i = 0;i<=l.length;i++){
            let a=item[i].getElementsByTagName('h2')[0];

            let value=a.innerHTML || a.innerText || a.textContent;

            if (value.toUpperCase().indexOf(filter) > -1) {
                item[i].style.display="";
            }
            else{
                item[i].style.display="none";
            }

        }

    }



    