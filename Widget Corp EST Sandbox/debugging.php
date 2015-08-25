<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>Debugging</title>
	</head>
	<body>
		<?php
			$number = 99;
			$string = "Bug?";
			$array = array(1 => "Homepage", 2 => "About Us", 3 => "Services");
			
			var_dump($number);
			var_dump($string);
			var_dump($array);
		
		?>
		<br />
		<pre>
		<?php
			// print_r(get_defined_vars());
		?>
		</pre>
		<br />
		<?php

			function say_hello_to($word) {
		    echo "Hello {$word}!<br />";
				var_dump(debug_backtrace());
			}

			say_hello_to('Everyone');
			/*
			 Returns an array of associative arrays. The possible returned elements are as follows:
			Possible returned elements from debug_backtrace() Name 	Type 	Description
function 	string 	The current function name. See also __FUNCTION__.
line 	integer 	The current line number. See also __LINE__.
file 	string 	The current file name. See also __FILE__.
class 	string 	The current class name. See also __CLASS__
object 	object 	The current object.
type 	string 	The current call type. If a method call, "->" is returned. If a static method call, "::" is returned. If a function call, nothing is returned.
args 	array 	If inside a function, this lists the functions arguments. If inside an included file, this lists the included file name(s). 
			 */


		?>
	</body>
</html>
