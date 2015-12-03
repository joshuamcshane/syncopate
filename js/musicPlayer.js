var audio = new Audio(), playbtn, mutebtn, seekslider, volumeslider, shufflebtn, replaybtn, skipbtn, seeking=false, seekto, curtimetext, durtimetext;


var playlist = new Array( '../audio/Something.mp3', 
'../audio/Photograph.mp3',
'../audio/Letter Home.mp3',
'../audio/Slow Ride.mp3',
'../audio/Tricks.mp3',
'../audio/Blank Space.mp3',
'../audio/Flawless.mp3',
'../audio/Hey Ya!.mp3',
'../audio/Liquor Store Blues.mp3',
'../audio/Take It All.mp3',
'../audio/Tiptoe.mp3',
'../audio/The Kids Dont Stand A Chance.mp3'
);
var k = 0;
function initAudioPlayer(){
	audio.src = playlist[k];
	audio.loop = true;
	
	// Set object references
	playbtn = document.getElementById("playpausebtn");
	mutebtn = document.getElementById("mutebtn");
	shufflebtn = document.getElementById("shufflebtn");
	replaybtn = document.getElementById("replaybtn");
	skipbtn = document.getElementById("skipbtn");
	prevbtn = document.getElementById("prevbtn");
	shufflebtn = document.getElementById("shufflebtn");
	seekslider = document.getElementById("seekslider");
	volumeslider = document.getElementById("volumeslider");
	curtimetext = document.getElementById("curtimetext");
	durtimetext = document.getElementById("durtimetext");
	// Add Event Handling
	playbtn.addEventListener("click",playPause);
	mutebtn.addEventListener("click", mute);
	skipbtn.addEventListener("click", skip);
	prevbtn.addEventListener("click", prev);
	replaybtn.addEventListener("click", replay);
	shufflebtn.addEventListener("click", shuffle);
	seekslider.addEventListener("mousedown", function(event){ seeking=true; seek(event); });
	seekslider.addEventListener("mousemove", function(event){ seek(event); });
	seekslider.addEventListener("mouseup",function(){ seeking=false; });
	volumeslider.addEventListener("mousemove", setvolume);
	audio.addEventListener("timeupdate", function(){ seektimeupdate(); });
	// Functions
	function playPause(){
		if(audio.paused){
		    audio.play();
		    playbtn.style.background = "url(../images/pause.png) no-repeat";
	    } else {
		    audio.pause();
		    playbtn.style.background = "url(../images/rsz_1play.png) no-repeat";
	    }
	}
	function mute(){
		if(audio.muted){
		    audio.muted = false;
		    mutebtn.style.background = "url(../images/speaker.png) no-repeat";
	    } else {
		    audio.muted = true;
		    mutebtn.style.background = "url(../images/mute.png) no-repeat";
	    }
	}
	function skip(){
		if (k==k.length){
			k=0;
			audio.src = playlist[k];
			audio.play();
			}
		else{
			k++;
			audio.src = playlist[k];
			audio.play();
		}
	}
	function prev(){
		if (k<1){
			k=k.length();
			audio.src = playlist[k];
			audio.play();
			}
		else{
			k--;
			audio.src = playlist[k];
			audio.play();
		}
	}
	function replay(){
	audio.currentTime = 0;
	}
	
	function shuffle(){
	k = Math.floor((Math.random() * 12));
	audio.src = playlist[k];
	audio.play();
	}
	function seek(event){
	    if(seeking){
		    seekslider.value = event.clientX - seekslider.offsetLeft;
	        seekto = audio.duration * (seekslider.value / 100);
	        audio.currentTime = seekto;
	    }
    }
	function setvolume(){
	    audio.volume = volumeslider.value / 100;
		if (audio.volume >= .5){
		mutebtn.style.background = "url(../images/speaker.png) no-repeat";
		}
		if (audio.volume < .5){
		mutebtn.style.background = "url(../images/lowspeaker.png) no-repeat";
			if (audio.volume < .1){
				mutebtn.style.background = "url(../images/mute.png) no-repeat";
			}
		}
	}
	function seektimeupdate(){
		var nt = audio.currentTime * (100 / audio.duration);
		seekslider.value = nt;
		var curmins = Math.floor(audio.currentTime / 60);
	    var cursecs = Math.floor(audio.currentTime - curmins * 60);
	    var durmins = Math.floor(audio.duration / 60);
	    var dursecs = Math.floor(audio.duration - durmins * 60);
		if(cursecs < 10){ cursecs = "0"+cursecs; }
	    if(dursecs < 10){ dursecs = "0"+dursecs; }
	    if(curmins < 10){ curmins = "0"+curmins; }
	    if(durmins < 10){ durmins = "0"+durmins; }
		curtimetext.innerHTML = curmins+":"+cursecs;
	    durtimetext.innerHTML = durmins+":"+dursecs;
	}
}
window.addEventListener("load", initAudioPlayer);
