<!DOCTYPE html>
<html lang="en-ca">
  <head>
    <!-- Metadata -->
    <meta charset="utf-8">
    <meta name="description" content="Volume of a Triangular Pyramid, in PHP">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Anastasiia Lebedenko">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Code for the favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./favicon-2/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./favicon-2/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./favicon-2/favicon-16x16.png">
    <link rel="manifest" href="./favicon/site.webmanifest">
    <!-- Link to CSS file -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- Title -->
    <title>Volume of a Triangular Pyramid, in PHP</title>
  </head>
  <body>
		<!-- php echo to print the html to the page -->
    <?php 
			echo "<h1>Volume of a Triangular Pyramid, in PHP</h1>";
			echo "<h3>This website will help you calculate the volume of a triangular pyramid.</h3>";
		?>
		<!-- form to get the base and height from the user -->
    <form action="./results.php" method="post" target="results">
      <label for=lblBaseA">Base (cm):</label>
      <input type="text" id="baseA" placeholder="Enter the base (cm)" name="base"><br><br>
      <label for="lblHeight">Height (cm):</label>
      <input type="text" id="height" placeholder="Enter the height (cm)" name="height"><br><br>
      <input type="submit" value="Calculate Volume">
		</form>

			<!-- iframe for the results to show on the web page. -->
			<iframe id="results" name="results">			
				The volume of a triangular pyramid is  " + $volume + cm<sup>3</sup>
	    </iframe>
	</body>
</html>