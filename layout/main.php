<?php 
// Display message if there is one in session data
if(isset($_SESSION['error'])) {
	
	echo "<div class = \"alert alert-{$_SESSION['error']['type']}\">{$_SESSION['error']['text']}</div>";
	
	unset($_SESSION['error']);
}

//Store the 'p' parameter from the QS into a variable
if(isset($_GET['p'])) {
	$p = $_GET['p'];
} else {
	$p = 'list_gum';
}

include("views/$p.php");