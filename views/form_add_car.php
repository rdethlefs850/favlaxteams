<h2>Add a Car</h2>
<form class="form-horizontal" action="actions/add_car.php" method="post">
	<div class="control-group">
		<label class="control-label" for="inputEmail">Car Name</label>
		<div class="controls">
		<?php echo input('car_name','required')?>
		</div>
	</div>

	<div class="control-group">
		<label class="control-label" for="inputEmail">Brand</label>
		<div class="controls">
		<?php echo input('car_brand','required')?>
		</div>
	</div>

	<div class="control-group">
		<label class="control-label" for="inputEmail">Car Speed</label>
		<div class="controls">
		<?php echo input('car_speed','required')?>
		</div>
	</div>

	<div class="form-actions">
		<button type="submit" class="btn btn-success">Add Car</button>
		<button type="button" class="btn" onclick= "window.history.go(-1)">Cancel</button>
	</div>
</form>
