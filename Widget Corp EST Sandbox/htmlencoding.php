<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>HTML encoding</title>
	</head>
	<body>
		
		<?php
			$linktext = "<Click> & learn more";
		?>

		<a href="">
			<?php echo htmlspecialchars($linktext); ?>
		</a>
		<br />

		<?php
		
			$text = "™£•“—é";
			echo htmlentities($text);
		// This function is identical to htmlspecialchars() in all ways, 
		// except with htmlentities(), all characters which have HTML
		// character entity equivalents are translated into these entities.
		 
		?>
		
		<br />
		<?php // What to use when

		$url_page = "php/created/page/url.php";
		$param1 = "This is a string with < >";
		$param2 = "&#?*$[]+ are bad characters";
		$linktext = "<Click> & learn more";

		$url = "http://localhost/";
		$url .= rawurlencode($url_page);
		$url .= "?" . "param1=" . urlencode($param1);
		$url .= "&" . "param2=" . urlencode($param2);
		?>
		<!-- 
		Returns a string in which all non-alphanumeric characters 
		except -_. have been replaced with a percent (%) sign followed
		by two hex digits and spaces encoded as plus (+) signs
		-->
		<a href="<?php echo htmlspecialchars($url); ?>">
		  <?php echo htmlspecialchars($linktext); ?>
		</a>
		<!-- Certain characters have special significance in HTML, 
		and should be represented by HTML entities if they are to preserve
		their meanings. This function returns a string with these
		conversions made. If you require all input substrings that have
		associated named entities to be translated, use htmlentities() 
		instead. -->
		
	</body>
</html>
