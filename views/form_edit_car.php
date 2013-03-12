<?php 
//Read all lines of the CSV file into an array
$lines = file('data/cars.csv',FILE_IGNORE_NEW_LINES);

//Get the line associated with the 'band' parameter in the QS
$car = explode(',',$lines[$_GET['car']]);
?>

<h2>Edit Car</h2>
<form class="form-horizontal" action="actions/edit_car.php" method="post">
	<input type="hidden" name="linenum" value="<?php echo $_GET['car'] ?>" />
	<div class="control-group">
		<label class="control-label" for="inputEmail">Car Name</label>
		<div class="controls">
		<?php echo input('car_name','required', $car[0])?>
		</div>
	</div>

	<div class="control-group">
		<label class="control-label" for="inputEmail">Brand</label>
		<div class="controls">
		<?php echo input('car_brand','required', $car[1])?>
		</div>
	</div>

	<div class="control-group">
		<label class="control-label" for="inputEmail">Car Speed</label>
		<div class="controls">
		<?php echo input('car_speed','required',$car[2])?>
		</div>
	</div>

	<div class="form-actions">
		<button type="submit" class="btn btn-warning">Edit Car</button>
		<button type="button" class="btn" onclick= "window.history.go(-1)">Cancel</button>
	</div>
</form>

















