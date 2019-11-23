/* Speech Recognition 
by http://creative-punch.net/2014/10/intro-html5-speech-synthesis-api/ */

$(function(){
  speechSynthesis.onvoiceschanged = function() {
    var $voicelist = $('#voicelist');
        
    speechSynthesis.getVoices().forEach(function(voice, index) {
      console.log(index, voice.name, voice.default ? '(default)' :'');
      var $option = $('<option>')
      .val(index)
      .html(voice.name + (voice.default ? ' (default)' :''));
      
      $voicelist.append($option);
    });
  }

  var msg = new SpeechSynthesisUtterance();
  var voices = window.speechSynthesis.getVoices();
  msg.voice = voices[$('#voicelist').val()];
  
  $('.speak-btn').click(function(){
    var text = $('.convertedTxt').val();
    msg.text = text;

    msg.onend = function(e) {
      $('#instructions').text('Finished speaking');
      $('.pause-btn').addClass('hidden');
      $('.resume-btn').addClass('hidden');
      $('.stop-btn').addClass('disabled');
      $('.speak-btn').removeClass('hidden');
    };
    msg.onstart = function(e) {
      $('#instructions').text(event.timeStamp);
    }

    speechSynthesis.speak(msg);

    $(this).addClass('hidden');
    $('.stop-btn').removeClass('disabled');
    $('.pause-btn').removeClass('hidden');
  });

  $(document).ready(function() {
    var text = $('#home-tab').text();
    msg.text = text;
    speechSynthesis.speak(msg);
  })

  if($('div#home').hasClass('show')) {
    $(document).ready(function() {
      var text = $('div#home.show').text();
      msg.text = text;
      speechSynthesis.speak(msg);
    });
  };

  // Tab Links
  $('#home-tab').focus(function(){
    var text = $(this).text();
    msg.text = text;
    speechSynthesis.speak(msg);
  });

  $('#braille-tab').focus(function(){
    if(speechSynthesis.speaking){
      var text = $(this).text();
      msg.text = text;
      speechSynthesis.speak(msg);
    };
  });

  $('#courses-tab').focus(function(){
    var text = $(this).text();
    msg.text = text;
    speechSynthesis.speak(msg);
  });

  $('#convert-tab').focus(function(){
    var text = $(this).text();
    msg.text = text;
    speechSynthesis.speak(msg);

    msg.onend = function(e) {
      var text = "Upload your image";
      msg.text = text;
      speechSynthesis.speak(msg);
      speechSynthesis.cancel();
    };
  });

  $('#access-tab').focus(function(){
    var text = $(this).text();
    msg.text = text;
    speechSynthesis.speak(msg);
  });
  // End of tab links

  $('#instructions').text(speechSynthesis.paused);
  $('.pause-btn').click(function(){
    speechSynthesis.pause();
    $(this).addClass('hidden');
    $('.resume-btn').removeClass('hidden');
  });
  $('.resume-btn').click(function(){
    speechSynthesis.resume();
    $('.resume-btn').addClass('hidden');
    $('.pause-btn').removeClass('hidden');
  });
  $('.stop-btn').click(function(){
    speechSynthesis.cancel();
    $('.pause-btn').addClass('hidden');
    $('.speak-btn').removeClass('hidden');
  });
});