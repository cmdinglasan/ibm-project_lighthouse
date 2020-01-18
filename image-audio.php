<?php include 'header.php';?>

<script>
$(document).ready(function() {
  text = 'Welcome to Image to Audio Converter. Ask for assistance for the image to be converted.';
    msg.text = text;
    speechSynthesis.speak(msg);
});
</script>

<div class="site-wrapper">
	<?php include 'search-bar.php'; ?>
	<div class="container">
		
<div class="container-fluid">
	<div class="row">
		<div class="col-md-6">
			<h1>Image</h1><br/>
			<div class="border" style="height: 350px; overflow-y: auto; ">
				<img id="output" style="width:100%;"/>
			</div><br/>
			<input type="file" accept="image/*" name="image" id="file"  class="button" style="display: none;"><label for="file" class="file-img btn btn-primary" style="cursor: pointer;">Upload file</label>

			<button class="convert-txt btn btn-primary" id="convert-txt">Convert Text</button>
		</div>
		<div class="col-md-6">
			<h1>Text</h1><br/>
			<div class="conversionArea">
				<textarea class="border text-fill convertedTxt" id="convertedTxt" style="height: 350px; width: 100%; resize: none;"></textarea>
				<textarea id="ocr_status" disabled></textarea>
			</div>
			<button class="speak-btn btn-md ">
				<i class="fas fa-play"></i>
			</button>
			<button class="resume-btn btn-md hidden">
				<i class="fas fa-play"></i>
			</button>
			<button class="pause-btn btn-md active hidden">
				<i class="fas fa-pause"></i>
			</button>
			<button class="stop-btn btn-md disabled">
				<i class="fas fa-stop"></i>
			</button>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<button class="btn btn-primary firstImg">
				<img src="sample-files/spacingOutText.gif" width="60">
			</button>
			<button class="btn btn-primary secImg">
				<img src="sample-files/convo-1-text-13.png" width="60">
			</button>
			<div id="instructions">Instructions</div>
			<select id="voicelist">
      		</select>
		</div>
	</div>
</div>

<script type="text/javascript">
$(document).ready(function(){
	function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('#output').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#file").change(function(){
        readURL(this);
    });

    // check image
    if ( $("#output").attr("src") == "sample-files/spacingOutText.gif") {
	    $(".text-fill").text("Let's get some indenting and word-spacing going on. And how about some letter-spacing, line-height, and justified text-aligment?");
	}

    // change image script
    $('.firstImg').click(function(){
    	$('#output').attr('src', 'sample-files/spacingOutText.gif');
	    $(".text-fill").text("Let's get some indenting and word-spacing going on. And how about some letter-spacing, line-height, and justified text-aligment?");
    });
    $('.secImg').click(function(){
    	$('#output').attr('src', 'sample-files/convo-1-text-13.png');
	    $(".text-fill").text("Do you mind if I maybe come over? I'm sorry I don't know if it's going to get better soon");
    });
})
</script>

<!-- Using a free CDN -->
<script src='https://cdn.rawgit.com/naptha/tesseract.js/1.0.10/dist/tesseract.js'></script>
<script src="js/ocrad.js"></script>

<!-- script>
function recognize_image(){
	document.getElementById('ocr_status').innerText = "(Recognizing...)"
	OCRAD(document.getElementById("output"), {
		numeric: true
	}, function(text){
		
	})
}
function load_file () {
	var reader = new FileReader();
	reader.onload = function(){
		var img = new Image();
		img.src = reader.result;
		img.onload = function(){
			OCRAD(img, function(text){
				document.getElementById('ocr_status').className = "done";
				document.getElementById('convertedTxt').innerText = text;
			})
		}
	}
	reader.readAsDataURL(document.getElementById('file').files[0])
};
</script -->

<!-- Tesseract OCR -->
<script>
function runOCR(url) {
    Tesseract.recognize(url).then(function(result) {
            document.getElementById("convertedTxt").innerText= result.text;
         }).progress(function(result) {
            document.getElementById("ocr_status").innerText = result["status"] + " (" +(result["progress"] * 100) + "%)";
        });
}
document.getElementById("convert-txt").addEventListener("click", function(e) {
    var url = document.getElementById("output").src;
    runOCR(url);
});
</script>
		
	</div>
</div>

<?php include 'footer.php';?>