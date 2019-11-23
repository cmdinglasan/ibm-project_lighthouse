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
			 				<kbd>7</kbd> &nbsp; <kbd>8</kbd> &nbsp; <br/>
			 				<kbd>4</kbd> &nbsp; <kbd>5</kbd> &nbsp; <br/>
			 				<kbd>1</kbd> &nbsp; <kbd>2</kbd> &nbsp; <br/>
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
Mousetrap.bind('s', function(e) {
    $(".btn-two,.btn-four,.btn-five,.btn-six").removeClass("active");
    $(".btn-one,.btn-three").addClass("active");
    $(".braille-area").append("a");
});
Mousetrap.bind('s d', function(e) {
  	$(".btn-two,.btn-four,.btn-five,.btn-six").removeClass("active");
  	$(".btn-one,.btn-three").addClass("active");
  	$(".braille-area").append("b");
});
Mousetrap.bind('d+s', function(e) {
  	$(".btn-three,.btn-four,.btn-five,.btn-six").removeClass("active");
  	$(".btn-one,.btn-two").addClass("active");
  	$(".braille-area").append("c");
});
Mousetrap.bind('7 8+5', function(e) {
  	$(".btn-three,.btn-five,.btn-six").removeClass("active");
  	$(".btn-one,.btn-two,.btn-four").addClass("active");
  	$(".braille-area").append("d");
});
Mousetrap.bind('e', function(e) {
  	$(".btn-two,.btn-three,.btn-five,.btn-six").removeClass("active");
  	$(".btn-one,.btn-four").addClass("active");
  	$(".braille-area").append("e");
});
Mousetrap.bind('f', function(e) {
  	$(".btn-one,.btn-two,.btn-three,.btn-four,.btn-five,.btn-six").removeClass("active");
  	$(".btn-one,.btn-two,.btn-three,.btn-four,.btn-five,.btn-six").addClass("active");
  	$(".braille-area").append("f");
});
Mousetrap.bind('g', function(e) {
  	$(".btn-one,.btn-two,.btn-three,.btn-four,.btn-five,.btn-six").removeClass("active");
  	$(".btn-one,.btn-two,.btn-three,.btn-four,.btn-five,.btn-six").addClass("active");
  	$(".braille-area").append("g");
});
Mousetrap.bind('h', function(e) {
  	$(".btn-one,.btn-two,.btn-three,.btn-four,.btn-five,.btn-six").removeClass("active");
  	$(".btn-one,.btn-two,.btn-three,.btn-four,.btn-five,.btn-six").addClass("active");
  	$(".braille-area").append("h");
});
Mousetrap.bind('i', function(e) {
  	$(".btn-one,.btn-two,.btn-three,.btn-four,.btn-five,.btn-six").removeClass("active");
  	$(".btn-one,.btn-two,.btn-three,.btn-four,.btn-five,.btn-six").addClass("active");
  	$(".braille-area").append("i");
});
Mousetrap.bind('j', function(e) {
  	$(".btn-one,.btn-two,.btn-three,.btn-four,.btn-five,.btn-six").removeClass("active");
  	$(".btn-one,.btn-two,.btn-three,.btn-four,.btn-five,.btn-six").addClass("active");
  	$(".braille-area").append("j");
});
Mousetrap.bind('k', function(e) {
  	$(".btn-one,.btn-two,.btn-three,.btn-four,.btn-five,.btn-six").removeClass("active");
  	$(".btn-one,.btn-two,.btn-three,.btn-four,.btn-five,.btn-six").addClass("active");
  	$(".braille-area").append("k");
});
Mousetrap.bind('l', function(e) {
  	$(".btn-one,.btn-two,.btn-three,.btn-four,.btn-five,.btn-six").removeClass("active");
  	$(".btn-one,.btn-two,.btn-three,.btn-four,.btn-five,.btn-six").addClass("active");
  	$(".braille-area").append("l");
});
Mousetrap.bind('m', function(e) {
  	$(".btn-one,.btn-two,.btn-three,.btn-four,.btn-five,.btn-six").removeClass("active");
  	$(".btn-one,.btn-two,.btn-three,.btn-four,.btn-five,.btn-six").addClass("active");
  	$(".braille-area").append("m");
});
Mousetrap.bind('n', function(e) {
  	$(".btn-one,.btn-two,.btn-three,.btn-four,.btn-five,.btn-six").removeClass("active");
  	$(".btn-one,.btn-two,.btn-three,.btn-four,.btn-five,.btn-six").addClass("active");
  	$(".braille-area").append("n");
});
Mousetrap.bind('o', function(e) {
  	$(".btn-one,.btn-two,.btn-three,.btn-four,.btn-five,.btn-six").removeClass("active");
  	$(".btn-one,.btn-two,.btn-three,.btn-four,.btn-five,.btn-six").addClass("active");
  	$(".braille-area").append("o");
});
Mousetrap.bind('p', function(e) {
  	$(".btn-one,.btn-two,.btn-three,.btn-four,.btn-five,.btn-six").removeClass("active");
  	$(".btn-one,.btn-two,.btn-three,.btn-four,.btn-five,.btn-six").addClass("active");
  	$(".braille-area").append("p");
});
Mousetrap.bind('q', function(e) {
  	$(".btn-one,.btn-two,.btn-three,.btn-four,.btn-five,.btn-six").removeClass("active");
  	$(".btn-one,.btn-two,.btn-three,.btn-four,.btn-five,.btn-six").addClass("active");
  	$(".braille-area").append("q");
});
Mousetrap.bind('r', function(e) {
  	$(".btn-one,.btn-two,.btn-three,.btn-four,.btn-five,.btn-six").removeClass("active");
  	$(".btn-one,.btn-two,.btn-three,.btn-four,.btn-five,.btn-six").addClass("active");
  	$(".braille-area").append("r");
});
Mousetrap.bind('t', function(e) {
  	$(".btn-one,.btn-two,.btn-three,.btn-four,.btn-five,.btn-six").removeClass("active");
  	$(".btn-one,.btn-two,.btn-three,.btn-four,.btn-five,.btn-six").addClass("active");
  	$(".braille-area").append("t");
});
Mousetrap.bind('u', function(e) {
  	$(".btn-one,.btn-two,.btn-three,.btn-four,.btn-five,.btn-six").removeClass("active");
  	$(".btn-one,.btn-two,.btn-three,.btn-four,.btn-five,.btn-six").addClass("active");
  	$(".braille-area").append("u");
});
Mousetrap.bind('v', function(e) {
  	$(".btn-one,.btn-two,.btn-three,.btn-four,.btn-five,.btn-six").removeClass("active");
  	$(".btn-one,.btn-two,.btn-three,.btn-four,.btn-five,.btn-six").addClass("active");
  	$(".braille-area").append("v");
});
Mousetrap.bind('w', function(e) {
  	$(".btn-one,.btn-two,.btn-three,.btn-four,.btn-five,.btn-six").removeClass("active");
  	$(".btn-one,.btn-two,.btn-three,.btn-four,.btn-five,.btn-six").addClass("active");
  	$(".braille-area").append("w");
});
Mousetrap.bind('x', function(e) {
  	$(".btn-one,.btn-two,.btn-three,.btn-four,.btn-five,.btn-six").removeClass("active");
  	$(".btn-one,.btn-two,.btn-three,.btn-four,.btn-five,.btn-six").addClass("active");
  	$(".braille-area").append("x");
});
Mousetrap.bind('y', function(e) {
  	$(".btn-one,.btn-two,.btn-three,.btn-four,.btn-five,.btn-six").removeClass("active");
  	$(".btn-one,.btn-two,.btn-three,.btn-four,.btn-five,.btn-six").addClass("active");
  	$(".braille-area").append("y");
});
Mousetrap.bind('z', function(e) {
    $(".btn-two,.btn-three,").removeClass("active");
    $(".btn-one,.btn-four,.btn-five,.btn-six").addClass("active");
    $(".braille-area").append("z");
});
</script>


<script type="text/javascript">/* $(document).bind('keydown', '8', function(){
 $(".btn-three,.btn-four,.btn-five,.btn-six").removeClass("active");
 $(".btn-one,.btn-two").addClass("active");
 $(".braille-area").append("c");
}); */
</script>
