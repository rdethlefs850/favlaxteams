<?php
session_start(); 
//Read file into array
$lines = file('../data/cars.csv',FILE_IGNORE_NEW_LINES);

//Replace line with new values
$lines[$_POST['linenum']] = "{$_POST['car_name']},{$_POST['car_ranking']},{$_POST['car_speed']}";

//Create the string to write the file
$data_string = implode("\n",$lines);

//Write the string to the file, overwriting the current contents
$f = fopen('../data/cars.csv','w');
fwrite($f,$data_string);
fclose($f);

$_SESSION['message'] = array(
		'text' => 'Your car has been edited.',
		'type' => 'info');

header('Location:../?p=list_cars');

?>