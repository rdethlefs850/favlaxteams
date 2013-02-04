<?php 
//Display message if there is one in session data
if(isset($_SESSION['message'])) {
	//Display the message
	echo "<div class=\"alert alert-{$_SESSION['message']['type']}\">{$_SESSION['message']['text']}</div>";
	
	//Remove the message from session 
	unset($_SESSION['message']);
}

include("views/$p.php");