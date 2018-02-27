<!DOCTYPE html>
<html>

<head>
<title>Anatta Studios: Kundalini</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<link rel="icon" href="/favicon.png" type="image/png">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="Content-Language" content="en-us" />
<meta name="ROBOTS" content="ALL" />
<meta http-equiv="imagetoolbar" content="no" />
<meta name="title" content="Kundalini" />
</head>
<body>
<script src="js/jquery.min.js"></script>

<div id="main">

<div class="media">
	<h1>Kundalini</h1>
	<div id="byline" class="opaque_med" onmouseover="this.className='opaque_hi'" onmouseout="this.className='opaque_med'" >
	an Art Project by Tim Warnock
	</div>

	<p id="main_description">
	Kundalini is a sanskrit word meaning "coiled" or "circular", typically referring to
    a blissful orgasmic energy dormant within the physical body.
	The following is a series of animated paintings exploring Kundalini Tantra through sensual sacred-art 
	renditions.
	</p>
</div>


<div class="media">
	<h2>muladhara</h2>
	<div id="media_box">
		<div id="01_muladhara">
		<img id="muladhara_img" src="media/01_muladhara.jpg"  alt="Mooladhara" title="No video playback capabilities" />
		</div>
	</div>
	<p>
	Right now -- moment-to-moment<br />
	Existence flows from infinite silence<br />
	The emergence of order out of chaos
	</p>
</div>

<div class="media">
	<h2>swadhisthana</h2>
	<div id="media_box">
		<div id="02_swadhisthana">
		<img id="swadhisthana_img" src="media/02_swadhisthana.jpg"  alt="Swadhisthana" title="No video playback capabilities" />
		</div>
	</div>
	<p>
	Pulsating euphoria<br />
	Wet orgasmic magic<br />
	Overwhelming, <br />
	Transcendent pleasure
	</p>
</div>

<div class="media">
	<h2>manipura</h2>
	<div id="media_box">
		<div id="03_manipura">
		<img id="manipura_img" src="media/03_manipura.jpg"  alt="Manipura" title="No video playback capabilities" />
		</div>
	</div>
	<p>
	Letting oneself go<br />
	Lose yourself, Find yourself<br />
	Always the same, letting go<br />
	Letting go completely
	</p>
</div>

<div class="media">
	<h2>anahata</h2>
	<div id="media_box">
		<div id="04_anahata">
		<img id="anahata_img" src="media/04_anahata.jpg"  alt="Anahata" title="No video playback capabilities" />
		</div>
	</div>
	<p>
	All things as they are<br />
	Beautifully and Blissfully connected<br />
	All things, All things are
	</p>
</div>

<div class="media">
	<h2>vishuddha</h2>
	<div id="media_box">
		<div id="05_vishuddha">
		<img id="vishuddha_img" src="media/05_vishuddha.jpg"  alt="Vishuddha" title="No video playback capabilities" />
		</div>
	</div>
	<p>
	Harmonious movement<br />
	One, and only one<br />
	Mingling dance of existence
	</p>
</div>

<div class="media">
	<h2>ajna</h2>
	<div id="media_box">
		<div id="06_ajna">
		<img id="ajna_img" src="media/06_ajna.jpg"  alt="Ajna" title="No video playback capabilities" />
		</div>
	</div>
	<p>
	Beautiful illusions of form and part<br />
	Of movement and beauty, tragedy<br />
	Laughing crying nonsense<br />
	A celebration of form upon form<br />
	Continuous everlasting creation
	</p>
</div>

<div class="media">
	<h2>sahasrara</h2>
	<div id="media_box">
		<div id="07_sahasrara">
		<img id="sahasrara_img" src="media/07_sahasrara.jpg"  alt="Ajna" title="No video playback capabilities" />
		</div>
	</div>
	<p>
	The light of consciousness shines<br />
	Beyond illusions and dreams<br />
	Dissolving perceptions<br />
	All that is, is
	</p>
</div>

<div class="media">
	<h2>samadhi</h2>
	<div id="media_box">
		<div id="08_samadhi">
		<img id="samadhi_img" src="media/08_samadhi.jpg"  alt="Samadhi" title="No video playback capabilities" />
		</div>
	</div>
	<p>
	Dream, said the dreamer dreaming<br />
	Awake, said the dream<br />
	Silence
	</p>
</div>

<!-- load video -->
<script>
	if(!window.console){ window.console = {log: function(){} }; } 

	function supports_video() {
		var isMSIE = /*@cc_on!@*/0;
		if (isMSIE &&
			!(navigator.userAgent.match(/iPhone/i)) && 
			!(navigator.userAgent.match(/iPad/i)) && 
			!(navigator.userAgent.match(/iPod/i)) ) {
			return true;
		}
		return !!document.createElement('video').canPlayType;
	}

    function getMousePos(canvas, evt) {
        var rect = canvas.getBoundingClientRect();
        return {
          x: evt.clientX - rect.left,
          y: evt.clientY - rect.top
        };
    }

	function videoize(mediaBox) {
		if (supports_video() ) {
			(function () {
    			var el = document.getElementById(mediaBox);
				el.innerHTML = ''+
					'<video id="'+ mediaBox +'_mov" poster="media/'+ mediaBox +'.jpg" loop>'+
        			'<source src="media/'+ mediaBox +'.webm" type="video/webm" />'+
        			'<source src="media/'+ mediaBox +'.mp4" type="video/mp4" />'+
        			'<source src="media/'+ mediaBox +'.ogv" type="video/ogg" />'+
        			'<object width="960" height="540" type="application/x-shockwave-flash" data="media/'+ mediaBox +'.swf">'+
          	  	  	  '<param name="movie" value="media/'+ mediaBox +'.swf" />'+
          	  	  	  '<img src="media/'+ mediaBox +'.jpg" width="960" height="540" alt="No video playback" title="No video playback" />'+
        			'</object>'+
					'</video>';

				var video = document.getElementById(mediaBox + "_mov");
				// chrome bug, video doesn't autostart without controls
    			video.setAttribute('controls', 'true');
    			video.removeAttribute('controls');
				video.load();
				video.play();
/*
				// event listeners
				var is_mouseover = false;
    			video.addEventListener("mouseover", function(evt) {
    				is_mouseover = true;
					//video.load();
					video.pause();
					console.log(mediaBox +' pause');
    			}, false);
    			video.addEventListener("mouseout", function(evt) {
    				is_mouseover = false;
					//video.load();
					video.play();
					console.log(mediaBox +' play');
    			}, false);
    			video.addEventListener('mousemove', function(evt) {
    				if (video.readyState) {
        				var rect = video.getBoundingClientRect();
        				var posX = evt.clientX - rect.left;
						video.currentTime = video.duration * (posX / video.videoWidth);
        				//console.log("Mouse position: " + posX + " Video: " + video.duration + 's ' + video.videoWidth + 'pix');
						//console.log("Mouse position: " + mousePos.x + ',' + mousePos.y + " Video: " + video.currentTime + 's');
					}
    			}, false);
*/
				var is_visible = true;
				$(window).scroll(function () {
					if (!is_mouseover) {
						var vid_top = $('#'+mediaBox).offset().top;
						var vid_bottom = vid_top + $('#'+mediaBox).height();
						var win_top = $(window).scrollTop();
						var win_bottom = $(window).height() + win_top;
    					if (vid_top < win_bottom && vid_bottom > win_top) {
							if (!is_visible) {
								console.log(mediaBox + " visible:play");
								is_visible = true;
								video.play();
							}
    					} else {
							if (is_visible) {
								console.log(mediaBox + " invisible:pause");
								is_visible = false;
								video.pause();
							}
    					}
    				}
				})
    		}());
		}
	}

	videoize("01_muladhara");
	videoize("02_swadhisthana");
	videoize("03_manipura");
	videoize("04_anahata");
	videoize("05_vishuddha");
	videoize("06_ajna");
	videoize("07_sahasrara");
	videoize("08_samadhi");

</script>

</div><!--end main-->

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
