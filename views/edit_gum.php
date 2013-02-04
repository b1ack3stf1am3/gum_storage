<?php 
$lines = file('data/gum.csv',FILE_IGNORE_NEW_LINES);

// Get the band associated with the 'band' parameter in the QS
$brand = explode(',',$lines[$_GET['brand']]);

?>

<h2>Eat Your Gum! (edit)</h2>
<form class="form-horizontal" action="actions/edit_gum.php" method="post">
	<input type="hidden" name="linenum" value="<?php  echo $_GET['brand'] ?>" />
	<div class="control-group">
	    <label class="control-label" for="brand">Brand</label>
	    <div class="controls">
	   		<?php  echo input('brand','required',$brand[0])?>
	    </div>
	 </div>
	 <div class="control-group">
	    <label class="control-label" for="quantity">Quantity</label>
	    <div class="controls">
	    	<?php  echo input('quantity','required',$brand[1])?>
	    </div>
	 </div>
	 <div class="control-group">
	    <label class="control-label" for="rank">Rank</label>
	    <div class="controls">
	    	<?php  echo input('rank','required',$brand[2])?>
	    </div>
	 </div>
	 <div class="form-actions">
	 	<button type="submit" class="btn btn-small btn-primary" type="button">Edit</button>
  		<button type="button" class="btn btn-small" type="button">Cancel</button>
	 </div>
</form>