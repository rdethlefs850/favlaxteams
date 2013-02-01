<?php
session_start(); 
//Read file into array
$lines = file('../data/teams.csv',FILE_IGNORE_NEW_LINES);

//Delete the line
unset($lines[$_GET['linenum']]);

//Create the string to write the file
$data_string = implode("\n",$lines);

//Write the string to the file, overwriting the current contents
$f = fopen('../data/teams.csv','w');
fwrite($f,$data_string);
fclose($f);

$_SESSION['message'] = array(
		'text' => 'Your team has been deleted.',
		'type' => 'success');

header('location:../?p=list_teams');
?>