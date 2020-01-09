// Created by Project Lighthouse

var command = $.getJSON("js/test.json", function(data) {
	$(data).each(function() {
		var result = this.commands[0].statement[0].phrase;
		console.log(result);
		$('#displayJSON').html(result);
	});
	// console.log(data.commands[0].statement[0].phrase);
	// $('#displayJSON').text(data.commands[0].statement[0].phrase);
    // return data;
});

var assistTone = document.createElement('audio');
assistTone.setAttribute('src', 'sample-files/siri.mp3');
var assistEnd = document.createElement('audio');
assistEnd.setAttribute('src','sample-files/siriEnd.mp3');
var com = 'lighthouse ';
var enable = 'enable ';
var disable = 'disable ';
var braille = ['go to braille', 'translate braille', 'braille translate', 'grill translate'];
var home = ['go home', 'go to home', 'select home'];
var menu = ['menu'];
var convert = ['go to convert', 'convert image to audio', 'go2convert'];
var contrastCmd = ['dark mode'];
var enableContrast = [enable + 'dark mode'];
var disableContrast = [disable + 'dark mode'];
var cancelSynthesis = ['cancel speaking', 'cancel synthesis'];

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
	text = 'test';
    msg.text = text;
	$('#speech-result').text(text);
    speechSynthesis.speak(msg);
	recognition.start();
	recognition.stop();
});

function recognize() {
	recognition.interimResults = true;
	// Results
	recognition.onstart = function(event) {
		speechSynthesis.cancel();
		$('.speech-recognition-box').addClass('active').removeClass('with-result');
		$('#speech-status').text('Currently Recording');
		assistTone.play();
		$('.voice-assistant').addClass('active').removeClass('error');
	};
	recognition.onend = function(event) {
		$('.speech-recognition-box').removeClass('active');
		$('#speech-status').text('Finished Recording');
		assistEnd.play();
	    $('.voice-assistant').delay(2500).queue(function(){
		  $(this).removeClass("active"); $('#transcript').text(''); $(this).dequeue();
		});

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
			speechSynthesis.cancel();
	    } 

	    else if (resultTrans == "show menu") {
	    	$('.main-header').addClass('active');
	    	$('body').addClass('sidebarOpen');
			var text = "Showing Menu. Option One. Dark Mode is enabled. Option Two. Online Courses (link). Option Three. Online Braille Tool (link). Option Four. Image to Audio Tool (link). Option Five. Speech Recognition Tool (Link)."; msg.text = text;
		    speechSynthesis.speak(msg);
			/* recognize().delay(3500);
			if($('#transcript').text() == "yes") {
				var text = "First option. Dark Mode is enabled. Second. Online Courses (link). Third. Online Braille Tool (link). Fourth. Image to Audio Tool (link). Fifth. Speech Recognition Tool (Link)"; msg.text = text;
		    	speechSynthesis.speak(msg);
			} */
	    }

	    else if (resultTrans == "hide menu") {
	    	if($('.main-header').hasClass('active')) {
		    	$('.main-header').removeClass('active');
				var text = "Hiding Menu"; msg.text = text;
			    speechSynthesis.speak(msg);
	    	} else {
	    		var text = "Menu is already hidden"; msg.text = text;
			    speechSynthesis.speak(msg);
	    	}
	    }

	    // Contrast Commands
	    else if(jQuery.inArray(resultTrans, enableContrast)!='-1') {
		    if(!($('body').hasClass('dark'))) {
				Cookies.set('darkmd','true');
				$('#dark-md').addClass('active');
				$('body').addClass('dark');
				var text = "Enabling Dark Mode"; msg.text = text;
		    	speechSynthesis.speak(msg);
		    }
	    } else if(jQuery.inArray(resultTrans, disableContrast)!='-1') {
		    if($('body').hasClass('dark')) {
				Cookies.set('darkmd','false');
				$('#dark-md').removeClass('active');
				$('body').removeClass('dark');
				var text = "Disabling Dark Mode"; msg.text = text;
		    	speechSynthesis.speak(msg);
			}
	    } 

	    // Default when no command
	    else {
	    	showResult.prepend('<br/> Command not found. Please try again.');
	    	$('.voice-assistant').dequeue().addClass('error');
	    	$('.voice-assistant').delay(1000).queue(function(){
				$('#transcript').text('No command found'); var text = "No command found"; msg.text = text;
		    speechSynthesis.speak(msg); $(this).dequeue();
			});
	    	$('.voice-assistant').delay(5500).queue(function(){
				$(this).removeClass('error'); $(this).dequeue();
			});
	    };


	};
	recognition.onresult = function(event) {
		$('.speech-recognition-box').addClass('with-result'); 
	    var last = event.results.length - 1;
	    var sentence = event.results[last][0].transcript;
	      $('#transcript').text(sentence);
	      $('#support').text('Confidence Level: ' + event.results[0][0].confidence);
	    $('#speech-result').text(sentence);
	    $('.voice-assistant').addClass('active');
	};

	// Start Recognition
	recognition.start();
};

Mousetrap.bind('space', function(e) {
	speechSynthesis.cancel();
	recognize();
});

$(document).ready(function() {
	$('#assistant').click(function(e) {
		recognize();
		$('body').addClass('click');
	});
	$('#speechToText').on('click', function(e) {
		recognize();
	});
});
