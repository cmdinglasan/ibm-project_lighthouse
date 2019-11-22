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
  
  $('.speak-btn').click(function(){
    var text = $('.convertedTxt').val();
    var msg = new SpeechSynthesisUtterance();
    var voices = window.speechSynthesis.getVoices();
    msg.voice = voices[$('#voicelist').val()];
    msg.text = text;

    msg.onend = function(e) {
      $('.pause-btn').addClass('hidden');
      $('.play-btn').removeClass('hidden');
    };
    $('#instructions').text(speechSynthesis.speaking);
    $('.play-btn').click(function() {
        speechSynthesis.speak(msg);
        $(this).addClass('hidden');
    });
    $('.pause-btn').click(function() {
        $(this).removeClass('hidden');
    }); 
    $('.stop-btn').click(function() {
        speechSynthesis.cancel();
    }); 
    if(speechSynthesis.speaking) {
      $('.pause-btn').removeClass('hidden');
    }
  })
});