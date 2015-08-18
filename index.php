<?php

if (isset($_POST['firstname'])) {
	$fn = $_POST['firstname'];
	echo "Your first name is " . $fn;
} else {

echo "<form action='index.php' method='POST'>";
echo 'First Name:';
echo "<input type='text' name='firstname' value='Jose'>";
echo "<input type='submit' value='submit'>";
echo "</form>";
}
