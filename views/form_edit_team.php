<?php 
//Read all lines of the CSV file into an array
$lines = file('data/teams.csv',FILE_IGNORE_NEW_LINES);

//Get the line associated with the 'band' parameter in the QS
$team = explode(',',$lines[$_GET['team']]);
?>

<h2>Edit Team</h2>
<form class="form-horizontal" action="actions/edit_team.php" method="post">
	<input type="hidden" name="linenum" value="<?php echo $_GET['team'] ?>" />
	<div class="control-group">
		<label class="control-label" for="inputEmail">Team Name</label>
		<div class="controls">
		<?php echo input('team_name','required', $team[0])?>
		</div>
	</div>

	<div class="control-group">
		<label class="control-label" for="inputEmail">Ranking</label>
		<div class="controls">
		<?php echo input('team_ranking','required', $team[1])?>
		</div>
	</div>

	<div class="control-group">
		<label class="control-label" for="inputEmail"># Games</label>
		<div class="controls">
		<?php echo input('team_numgames','required',$team[2])?>
		</div>
	</div>

	<div class="form-actions">
		<button type="submit" class="btn btn-warning">Edit Team</button>
		<button type="button" class="btn">Cancel</button>
	</div>
</form>

















