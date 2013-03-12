<?php 
//Display message if there is one in session data
if(isset($_SESSION['message'])) {
	//Display the message
	echo "<div class=\"alert alert-{$_SESSION['message']['type']}\">{$_SESSION['message']['text']}</div>";
	
	//Remove the message from session 
	unset($_SESSION['message']);
}

//Store the 'p' parameter form the query string into a variable
if(isset($_GET['p'])) {
	$p = $_GET['p'];
} else {
	$p = 'list_cars';
}

include("views/$p.php");