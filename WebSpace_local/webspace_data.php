<?php
$action = $_GET["action"];
$myText = $_POST["mytext"];

if($action = "save") {
  $targetFolder = "/Users/dillonkane/WebSpace_local/";
  file_put_contents($targetFolder."webspace_data.txt", $myText.PHP_EOL, FILE_APPEND);
	echo $myText;
	echo '<p>...Thank you for keeping the party going</p>';
}
?> 