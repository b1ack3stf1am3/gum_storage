<pre>$_POST: <?php print_r($_POST)?></pre>


<?php
session_start();

// Read file into array
$lines = file('../data/gum.csv',FILE_IGNORE_NEW_LINES);

// Replace line with new values
$lines[$_POST['linenum']] = "{$_POST['brand']},{$_POST['quantity']},{$_POST['rank']}";

// Create the sring to write the file
$data_string = implode("\n",$lines);

// Write the string to hte file, overwriting the current contents
$f = fopen('../data/gum.csv','w');
fwrite($f,$data_string);
fclose($f);

$_SESSION['message'] = array(
		'text' => 'Your gum has been eaten',
		'type' => 'info'
);
header('Location:../?p=list_gum');
?>