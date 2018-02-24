<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<head>
<title>Desert Road</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<link rel="icon" href="/favicon.png" type="image/png">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="Content-Language" content="en-us" />
<meta name="ROBOTS" content="ALL" />
<meta http-equiv="imagetoolbar" content="no" />
<meta name="title" content="Desert Road" />
</head>
<body>

<div id="main">

<div id="desertroad_mov">
<img id="desertroad" src="desertroad.jpg" width="800" height="450"  alt="Desert Road" title="No video playback capabilities" />
</div>

<!-- load video -->
<script>
	if(!window.console){ window.console = {log: function(){} }; } 

	function supports_video() {
		var isMSIE = /*@cc_on!@*/0;
		if (isMSIE) {
			return true;
		}
		return !!document.createElement('video').canPlayType;
	}

	if (supports_video() && // do not use video background for iOS
			!(navigator.userAgent.match(/iPhone/i)) && 
			!(navigator.userAgent.match(/iPad/i)) && 
			!(navigator.userAgent.match(/iPod/i))) {
    var el = document.getElementById("desertroad_mov");
	el.innerHTML = ''+
		'<video id="desertroad" poster="desertroad.jpg" loop>'+
        '<source src="desertroad.html5.mp4" type="video/mp4" />'+
        '<source src="desertroad.html5.webm" type="video/webm" />'+
        '<source src="desertroad.html5.ogv" type="video/ogg" />'+
		// no swf, flash objects are always on top and can never be background videos
        '<object width="800" height="450" type="application/x-shockwave-flash" data="test.swf">'+
          '<param name="movie" value="desertroad.html5.swf" />'+
          '<img src="desertroad.jpg" width="800" height="450" alt="test" title="No video playback" />'+
        '</object>'+
		'</video>';
	var vid = document.getElementById("desertroad");
	// chrome bug, video doesn't autostart without controls
    vid.setAttribute('controls', 'true');
    vid.removeAttribute('controls');
	vid.load();
	vid.play();
	}


	// hover video
	document.addEventListener('mouseover', hoverVideo, false);
	var vid = document.getElementById('desertroad');
	function hoverVideo(e) {   
	    if(e.target == vid) {
			console.log('pause');
	        vid.pause();
	        this.addEventListener('mouseout', playVideo, false);
	    }
	}
	function playVideo(e) {
    	if(e.target == vid) {
			console.log('play');
			vid.play();
		}
	}
    function getMousePos(canvas, evt) {
        var rect = canvas.getBoundingClientRect();
        return {
          x: evt.clientX - rect.left,
          y: evt.clientY - rect.top
        };
    }
    //var canvas = document.getElementById('myCanvas');
    //var context = canvas.getContext('2d');

    vid.addEventListener('mousemove', function(evt) {
        var mousePos = getMousePos(vid, evt);
        var rect = vid.getBoundingClientRect();
		vid.currentTime = vid.duration * (mousePos.x / vid.videoWidth);
        //console.log("Mouse position: " + mousePos.x + ',' + mousePos.y + " Video: " + vid.duration + 's ' + vid.videoWidth + 'pix');
    }, false);

</script>


<div id="poembox" class="opaque" onmouseover="this.className='opaque_hi'" onmouseout="this.className='opaque'" >
Alone on this road<br />
Seductive skies caress softly above<br />
Greeted warmly by harsh terrain below<br />
Onward towards uncertain ecstasy<br />
Lovers transcendent<br />
</div>

</div>

<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
var pageTracker = _gat._getTracker("UA-104343-4");
pageTracker._trackPageview();
</script>
</body>
</html>
