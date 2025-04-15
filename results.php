<?php
	// get the base and height from the textfields
	$base = $_POST['base'];
	$height = $_POST['height'];

	// calculate the area
	$volume = (1/3) * $height * $base
?>
<h3>Results:</h3>
The volume of a triangular pyramid is <?php echo "$volume" ?>cm<sup>3</sup>.