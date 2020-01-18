<?php include 'header.php'; ?>

<script>
$(document).ready(function() {
  text = 'Welcome to Online Braille. Start typing using braille.';
    msg.text = text;
    speechSynthesis.speak(msg);
});
</script>

<div class="site-wrapper">
	<div class="container">

<h1>Braille Converter</h1>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#brailleInstructions">
  Instructions
</button>
<form action="">
	<div class="braille">
		<div class="main-braille">
			<h3>Type here in Braille letters</h3>
			<textarea style="font-family: 'Braille-1lA2'; width: 100%; height: 200px; font-size: 32px" name="id" class="braille-area mousetrap" disabled></textarea>
			<input onclick="txtConvert(this.form);" type="button" value="Convert" title="convert" class="convert btn btn-primary"/>
			<input type="button" class="clearTxt btn btn-primary" value="Clear"/>
		</div>
		<div class="braille-btns">
			<div class="braille-btn btn-one"></div>
			<div class="braille-btn btn-two"></div>
			<div class="braille-btn btn-three"></div>
			<div class="braille-btn btn-four"></div>
			<div class="braille-btn btn-five"></div>
			<div class="braille-btn btn-six"></div>
		</div>
	</div>
	<p></p>
	<h3>Text conversion</h3>
	<textarea style="width: 100%; height: 200px; font-size: 32px; " name="source" class="reg-area"></textarea>
</form>

<div class="modal fade" role="dialog" id="brailleInstructions">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Braille Instructions</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		        	<span aria-hidden="true">&times;</span>
		 		</button>
		 	</div>
			 <div class="modal-body">
			 	<div class="container-fluid">
			 		<div class="row">
			 			<div class="col-md-6"><kbd>0</kbd> Convert</div>
			 		</div>
			 		<div class="row">
			 			<div class="col-md-6">
			 				<kbd>F</kbd> &nbsp; <kbd>J</kbd> &nbsp; <br/>
			 				<kbd>D</kbd> &nbsp; <kbd>K</kbd> &nbsp; <br/>
			 				<kbd>S</kbd> &nbsp; <kbd>L</kbd> &nbsp; <br/>
			 			</div>
			 		</div>
			 	</div>
			 </div>
		 </div>
	</div>
</div>

<script language="JavaScript">
function txtConvert(form){
var firstTxt = form.id.value;
var secTxt = form.source;
secTxt.value = firstTxt;
}
</script>

<script type="text/JavaScript">
Mousetrap.bind('f ', function(e) {
    $(".btn-two,.btn-four,.btn-five,.btn-six").removeClass("active");
    $(".btn-one,.btn-three").addClass("active");
    $(".braille-area").append("a");
});
Mousetrap.bind('f s', function(e) {
    $(".braille-area").append("b");
});
Mousetrap.bind('f j', function(e) {
    $(".braille-area").append("c");
});
Mousetrap.bind('j d', function(e) {
    $(".braille-area").append("i");
});
</script>


<script type="text/javascript">/* $(document).bind('keydown', '8', function(){
 $(".btn-three,.btn-four,.btn-five,.btn-six").removeClass("active");
 $(".btn-one,.btn-two").addClass("active");
 $(".braille-area").append("c");
}); */
</script>

		
	</div>
</div>

<?php include 'footer.php'; ?>