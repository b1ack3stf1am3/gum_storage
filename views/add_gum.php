<h2>Add Gum To Vault</h2>
<form class="form-horizontal" action="actions/add_gum.php" method="post">
	<div class="control-group">
	    <label class="control-label" for="brand">Brand</label>
	    <div class="controls">
	   		<?php  echo input('brand','required')?>
	    </div>
	 </div>
	 <div class="control-group">
	    <label class="control-label" for="quantity">Quantity</label>
	    <div class="controls">
	    	<?php  echo input('quantity','required')?>
	    </div>
	 </div>
	 <div class="control-group">
	    <label class="control-label" for="rank">Rank</label>
	    <div class="controls">
	    	<?php  echo input('rank','required')?>
	    </div>
	 </div>
	 <div class="form-actions">
	 	<button type="submit" class="btn btn-small btn-primary" type="button">Add Band</button>
  		<button type="button" class="btn btn-small" type="button">Cancel</button>
	 </div>
</form>