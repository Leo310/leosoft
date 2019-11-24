<?php
if(isset($_POST["aus"])){
	shell_exec("sudo service motion stop");
	echo "ausgeschaltet";
}

if(isset($_POST["an"])){
	shell_exec("sudo service motion start");
	echo "angeschaltet";
}
?>
