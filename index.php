<form id="form1" name="form1" method="post" action="index.php">
<input type="text" name="text" id="textfield" />
<input type="submit" value="submit" />
</form>

<?php
$text = $_POST['text'];

if ( $text == "hi") {
	echo "hi1";
}
?>
