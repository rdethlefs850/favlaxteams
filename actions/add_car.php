<?php session_start(); ?>
<?php //Validate that each piece of info was provided
if($_POST['car_name'] != '' && $_POST['car_brand'] != '' && $_POST['car_speed'] != '') {
	
	//Add this team to the CSV file
	//1 Open the file for writing
	$f = fopen('../data/cars.csv','a');
	
	//2 Write the new team's info to the file
	fwrite($f,"\n{$_POST['car_name']},{$_POST['car_brand']},{$_POST['car_speed']}");
	//3 Close the file
	fclose($f);
	
	//Redirect to list of teams
	header('Location:../?p=list_cars');
	
} else {
	//Store submitted data into session data
	$_SESSION['POST'] = $_POST;
	
	//Store error message in session data
	$_SESSION['message'] = array (
		'text' => 'Please enter all required information correctly',
		'type' => 'block'
	);
	
	//Redirect to the form
	header('Location:../?p=form_add_car.php');

}