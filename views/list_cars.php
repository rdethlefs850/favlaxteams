<?php 
//Read all lines of the CSV file into an array
$lines = file('data/cars.csv',FILE_IGNORE_NEW_LINES);
?>
<h2>Cars</h2>
<table class="table table-hover">
<thead>
	<tr>
		<th>Car</th>
		<th>Ranking</th>
		<th>Car Speed</th>
		<th></th>
	</tr>
</thead>
<?php 
//Read all lines of the CSV file into an array
$lines = file('data/cars.csv',FILE_IGNORE_NEW_LINES); //File function in php returns an array of all lines in the file listed

//Counter variable for line number
$i = 0;

//Iterate over the array of lines
foreach($lines as $line) {
	$parts = explode(',',$line);
	$car = $parts[0];
	$ranking = $parts[1];
	$car_speed = $parts[2];
	echo '<tr>';
	echo "<td>$car</td>";
	echo "<td>$ranking</td>";
	echo "<td>$car_speed</td>";
	echo "<td><a href=\"./?p=form_edit_car&car=$i\">Edit</a> <a class='delete', href=\"./actions/delete_car.php?linenum=$i\">Delete</a></td>";
	echo '</tr>';
	
	$i++; //Increment line number
}
?>
</table>