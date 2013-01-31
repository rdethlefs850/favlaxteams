<h2>Add a Team</h2>
<form class="form-horizontal" action="actions/add_team.php" method="post">
	<div class="control-group">
		<label class="control-label" for="inputEmail">Team Name</label>
		<div class="controls">
		<?php echo input('team_name','required')?>
		</div>
	</div>

	<div class="control-group">
		<label class="control-label" for="inputEmail">Ranking</label>
		<div class="controls">
		<?php echo input('team_ranking','required')?>
		</div>
	</div>

	<div class="control-group">
		<label class="control-label" for="inputEmail"># Games</label>
		<div class="controls">
		<?php echo input('team_numgames','required')?>
		</div>
	</div>

	<div class="form-actions">
		<button type="submit" class="btn btn-success">Add Team</button>
		<button type="button" class="btn">Cancel</button>
	</div>
</form>
