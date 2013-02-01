<?php 
// Display message if there is one in session data
if(isset($_SESSION['message'])) {
	
	echo "<div class = \"alert alert-{$_SESSION['message']['type']}\">{$_SESSION['message']['text']}</div>";
	
	unset($_SESSION['message']);
}

//Store the 'p' parameter from the QS into a variable
if(isset($_GET['p'])) {
	$p = $_GET['p'];
} else {
	$p = 'list_gum';
}

include("views/$p.php");