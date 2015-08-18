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

define("DB_SERVER", "localhost");
define("DB_USER", "widget_cms");
define("DB_PASS", "secretpassword");
define("DB_NAME", "widget_corp");

  // 1. Create a database connection
$connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
  // Test if connection succeeded
  if(mysqli_connect_errno()) {
    die("Database connection failed: " .  mysqli_connect_error() . " (" . mysqli_connect_errno() . ")");
  }

  $query = "DELETE FROM pages WHERE id = {$id} LIMIT 1";
  $result = mysqli_query($connection, $query);