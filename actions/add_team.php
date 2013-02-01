<?php session_start(); ?>
<?php //Validate that each piece of info was provided
if($_POST['team_name'] != '' && $_POST['team_ranking'] != '' && $_POST['team_numgames'] != '') {
	
	//Add this team to the CSV file
	//1 Open the file for writing
	$f = fopen('../data/teams.csv','a');
	
	//2 Write the new team's info to the file
	fwrite($f,"\n{$_POST['team_name']},{$_POST['team_ranking']},{$_POST['team_numgames']}");
	//3 Close the file
	fclose($f);
	
	//Redirect to list of teams
	header('Location:../?p=list_teams');
	
} else {
	//Store submitted data into session data
	$_SESSION['POST'] = $_POST;
	
	//Store error message in session data
	$_SESSION['message'] = 'Please enter all required information';
	
	//Redirect to the form
	header('Location:../?p=form_add_team');
}
