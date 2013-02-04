<?php session_start(); ?>
<pre><?php print_r($_POST) ?></pre>
<?php 
if( $_POST['brand'] != '' &&
	$_POST['quantity'] != '' &&
	$_POST['rank'] != '') {
	
	$f = fopen('../data/gum.csv','a');
	fwrite($f,"\n{$_POST['brand']},{$_POST['quantity']},{$_POST['rank']},");
	fclose($f);
	
	$_SESSION['message'] = array(
			'text' => 'Your gum has been safely added to ower vault.',
			'type' => 'sucsess'
	);
	header('Location:../?p=list_gum');
} else {
	$_SESSION['POST'] = $_POST;
	header('Location:../?p=add_gum');
	$_SESSION['message'] = array(
			'text' => 'Please completly fill the form.',
			'type' => 'error'
	);
}