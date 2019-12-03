<div class="speech-recognition">
	<div class="container">
		<span>Text Recognition</span><br/>
		<span id="support">Empty</span><br/>

		<textarea placeholder="talk" id="transcript"></textarea	>
		<button class="btn btn-primary" id="speechToText">Talk</button>
		<div class="content-transcript"></div>
		<div class="console"></div>

		<script>
		var assistTone = document.createElement('audio');
    	assistTone.setAttribute('src', 'sample-files/siri.mp3');
    	var assistEnd = document.createElement('audio');
    	assistEnd.setAttribute('src','sample-files/siriEnd.mp3');
		var com = 'lighthouse ';
		var enable = 'enable ';
		var disable = 'disable ';
		var braille = [com + 'go to braille', com + 'translate braille', com + 'braille translate', com + 'grill translate'];
		var home = [com + 'go home', com + 'go to home', com + 'select home'];
		var menu = [com + 'menu'];
		var convert = [com + 'go to convert', com + 'convert image to audio'];
		var contrastCmd = ['dark mode'];
		var enableContrast = [com + enable + 'dark mode'];
		var disableContrast = [com + disable + 'dark mode'];
		var cancelSynthesis = [com + 'cancel speaking', com + 'cancel synthesis']

		// Speech Synthesis Defaults
		var msg = new SpeechSynthesisUtterance();
 		var voices = window.speechSynthesis.getVoices();
  		msg.voice = voices[$('#voicelist').val()];

		if ('SpeechRecognition' in window) {
		  $('#support').text('Supported in Firefox only');
		} else if ('webkitSpeechRecognition' in window) {
		  $('#support').text('Supported in Chrome only'); 
		};

		window.SpeechRecognition = window.webkitSpeechRecognition || window.SpeechRecognition;
		var recognition = new window.SpeechRecognition();
		/* if ('SpeechRecognition' in window) {
		  $('#support').text('Supported');
		} else {
		  $('#support').text('Not Supported');
		}; */

		// Start of Speech Recognition
		$(function() {
			var text = 'Welcome to the project Lighthouse. Press the space key to operate and say lighthouse before each command';
		    msg.text = text;
			$('#speech-result').text(text);
		    speechSynthesis.speak(msg);
			recognition.start();
		});

		function recognize() {
			speechSynthesis.cancel();
			$('.speech-recognition-box').addClass('active');
			$('#speech-status').text('Currently Recording');
			assistTone.play();
			// Results
			recognition.onstart = function(event) {
			};
			recognition.onend = function(event) {
				$('.speech-recognition-box').removeClass('active');
				$('#speech-status').text('Finished Recording');
				assistEnd.play();
			};
			recognition.onresult = function(event) {$('.speech-recognition-box').addClass('with-result'); 
			    var last = event.results.length - 1;
			    var sentence = event.results[last][0].transcript;
			      $('#transcript').text(sentence);
			      $('#speech-result').text(sentence);
			      $('#support').text('Confidence Level: ' + event.results[0][0].confidence);

			var resultTrans = $('#transcript').text();
			var showResult = $('.content-transcript');
			      // Resulting Commands
			    /* if(resultTrans == 'ok lighthouse show support') {
			      showResult.text('Show Support [check]');
			    } else if(resultTrans == 'ok lighthouse go to braille' || resultTrans == 'ok lighthouse translate braille' || resultTrans == 'ok lighthouse braille translate') {
			      showResult.text('Go to Braille [check]');
			    }; */

			// Braille Commands
			if (jQuery.inArray(resultTrans, braille)!='-1') {
			    showResult.prepend('<br/> Go to Braille ' + braille.indexOf(resultTrans) + ' [check]');
			    $('[href="#braille"]').tab('show');
			} 

			// Home Commands
			else if (jQuery.inArray(resultTrans, home)!='-1') {
			    $('[href="#home"]').tab('show');
			}

			// Speech Synthesis Commands
			else if (jQuery.inArray(resultTrans, cancelSynthesis)!='-1') {
      			speechSynthesis.cancel();
			}

			// Convert Image to Audio Commands
			else if (jQuery.inArray(resultTrans, convert)!='-1') {
      			$('[href="#convert"]').tab('show');
			}

			// Menu Commands
			else if (jQuery.inArray(resultTrans, menu)!='-1') {
			    var text = $('.nav-item').text();
			    msg.text = text;
			    speechSynthesis.speak(msg);
		    } 

		    // Contrast Commands
		    else if(jQuery.inArray(resultTrans, enableContrast)!='-1') {
			    $('body').addClass('darkmd');
				$(this).addClass('active');	
		    } else if(jQuery.inArray(resultTrans, disableContrast)!='-1') {
		    	$('body').removeClass('darkmd');
				$(this).removeClass('active');	
		    } 

		    // Default when no command
		    else {
		    	showResult.prepend('<br/> Command not found. Please try again.');
		    };

			};

			// Start Recognition
			recognition.start();
		};

		$(document).on('touchstart', function() {
			recognize();
		});

		Mousetrap.bind('space', function(e) {
			speechSynthesis.cancel();
			recognize();
		});

		$('#speechToText').on('click', function(e) {
			recognize();
		});

		</script>
	</div>
</div>