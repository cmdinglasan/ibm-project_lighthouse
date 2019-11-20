<div class="container-fluid">
	<div class="row">
		<div class="col-md-6">
			<h1>Image</h1><br/>
			<div class="border" style="height: 350px; overflow-y: auto; ">
				<img id="output" style="width:100%;"/>
			</div><br/>
			<input type="file" accept="image/*" name="image" id="file" class="button" style="display: none;"><label for="file" class="file-img btn btn-primary" style="cursor: pointer;">Upload file</label>
		</div>
		<div class="col-md-6">
			<h1>Text</h1><br/>
			<textarea class="border text-fill convertedTxt" style="height: 350px; width: 100%; resize: none;"></textarea>
			<button class="btn btn-primary speak-btn">Speak</button>
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