<?php
session_start(); 
//Read file into array
$lines = file('../data/teams.csv',FILE_IGNORE_NEW_LINES);

//Replace line with new values
$lines[$_POST['linenum']] = "{$_POST['team_name']},{$_POST['team_ranking']},{$_POST['team_numgames']}";

//Create the string to write the file
$data_string = implode("\n",$lines);

//Write the string to the file, overwriting the current contents
$f = fopen('../data/teams.csv','w');
fwrite($f,$data_string);
fclose($f);

$_SESSION['message'] = array(
		'text' => 'Your team has been edited.',
		'type' => 'info');

header('Location:../?p=list_teams');

?>