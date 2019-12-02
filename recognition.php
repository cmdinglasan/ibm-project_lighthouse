<div class="speech-recognition">
	<div class="container">
		<span>Text Recognition</span><br/>
		<span id="support">Empty</span><br/>

		<textarea placeholder="talk" id="transcript"></textarea	>
		<button class="btn btn-primary" id="speechToText">Talk</button>
		<div class="content-transcript"></div>
		<div class="console"></div>

		<script>
		var com = 'ok lighthouse ';
		var braille = [com + 'go to braille', com + 'translate braille', com + 'braille translate', com + 'grill translate'];
		var menu = [com + 'go home', com + 'go to convert', com + 'go2convert', com + 'go to recognition', com + 'go to courses', com + 'go to access'];

		if ('SpeechRecognition' in window) {
		  $('#support').text('Supported in Firefox only');
		} else if ('webkitSpeechRecognition' in window) {
		  $('#support').text('Supported in Chrome only'); 
		};

		window.SpeechRecognition = window.webkitSpeechRecognition || window.SpeechRecognition;
		/* if ('SpeechRecognition' in window) {
		  $('#support').text('Supported');
		} else {
		  $('#support').text('Not Supported');
		}; */

		// Start of Speech Recognition
		$('#speechToText').on('click', function(e) {
		  var recognition = new webkitSpeechRecognition();
		  // Results
		  recognition.onresult = function(event) { 
		    var last = event.results.length - 1;
		      var sentence = event.results[last][0].transcript;
		      $('#transcript').text(sentence);
		      $('#support').text('Confidence Level: ' + event.results[0][0].confidence);

		  var resultTrans = $('#transcript').text();
		  var showResult = $('.content-transcript');
		      // Resulting Commands
		    /* if(resultTrans == 'ok lighthouse show support') {
		      showResult.text('Show Support [check]');
		    } else if(resultTrans == 'ok lighthouse go to braille' || resultTrans == 'ok lighthouse translate braille' || resultTrans == 'ok lighthouse braille translate') {
		      showResult.text('Go to Braille [check]');
		    }; */

		    // If Command is for Braille
		    if (jQuery.inArray(resultTrans, braille)!='-1') {
		      showResult.prepend('<br/> Go to Braille ' + braille.indexOf(resultTrans) + ' [check]');
		    } else if (jQuery.inArray(resultTrans, menu)!='-1') {
		    	if(menu.indexOf(resultTrans) == 0) {
		    		$('[href="#home"]').tab('show');
		    	} else if(menu.indexOf(resultTrans) == 1 || menu.indexOf(resultTrans) == 2) {
		    		$('[href="#convert"]').tab('show');
		    	} else if(menu.indexOf(resultTrans) == 3) {
		    		$('[href="#recognition"]').tab('show');
		    	} else if(menu.indexOf(resultTrans) == 4) {
		    		$('[href="#courses"]').tab('show');
		    	} else if(menu.indexOf(resultTrans) == 5) {
		    		$('[href="#access"]').tab('show');
		    	} 
		      showResult.prepend('<br/> Menu: ' + menu.indexOf(resultTrans) + ' [check]');
		    } else {
		    	showResult.prepend('<br/> Command not found. Please try again.');
		    };
		  };

		  // Start Recognition
		  recognition.start();
		});

		</script>
	</div>
</div>