<?php 
//Read all lines of the CSV file into an array
$lines = file('data/teams.csv',FILE_IGNORE_NEW_LINES);
?>
<h2>Teams</h2>
<table class="table table-hover">
<thead>
	<tr>
		<th>Team</th>
		<th>Ranking</th>
		<th># Games</th>
		<th></th>
	</tr>
</thead>
<?php 
//Read all lines of the CSV file into an array
$lines = file('data/teams.csv',FILE_IGNORE_NEW_LINES); //File function in php returns an array of all lines in the file listed

//Counter variable for line number
$i = 0;

//Iterate over the array of lines
foreach($lines as $line) {
	$parts = explode(',',$line);
	$team = $parts[0];
	$ranking = $parts[1];
	$num_games = $parts[2];
	echo '<tr>';
	echo "<td>$team</td>";
	echo "<td>$ranking</td>";
	echo "<td>$num_games</td>";
	echo "<td><a href=\"./?p=form_edit_team&team=$i\">Edit</a> <a href=\"./actions/delete_team.php?linenum=$i\">Delete</a></td>";
	echo '</tr>';
	
	$i++; //Increment line number
}
?>
</table>