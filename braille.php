<h1>Braille Converter</h1>
<form action="">
	<h3>Type here in Braille letters</h3>
	<textarea style="font-family: 'Braille-1lA2'; width: 100%; height: 200px; font-size: 32px" name="id"></textarea>
	<input onclick="txtConvert(this.form);" type="button" value="Convert" title="convert"/>
	<p></p>
	<h3>Text conversion</h3>
	<textarea style="width: 100%; height: 200px; font-size: 32px; " name="source"></textarea>
</form>

<script language="JavaScript">
function txtConvert(form){
var firstTxt = form.id.value;
var secTxt = form.source;
secTxt.value = firstTxt;
}
</script>