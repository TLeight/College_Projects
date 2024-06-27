<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="keywords" content="Average Temperature Calculator">
		<meta name="description" content="Average Temperature Calculator">
		<!-- add title here -->
		<title>Weekly Average Temperature Calculator</title>
		<!-- add link to css file here -->
		<link rel="stylesheet" type="text/css" href="css/temp.css">
  </head>
  <body>
    <!-- add header elements here -->
    <h1>Weekly Average Temperature Calculator</h1>
    
    <p><img class="noshow, scale-image" src="images/weather.png" alt="Daily weather"></p>
    
    <!-- add PHP code here -->
    <?php
      // get seven data fields from form
      $monday= substr(filter_input(INPUT_POST, 'monday', FILTER_SANITIZE_NUMBER_INT),0,4);
      $tuesday= substr(filter_input(INPUT_POST, 'tuesday', FILTER_SANITIZE_NUMBER_INT),0,4);
      $wednesday= substr(filter_input(INPUT_POST, 'wednesday', FILTER_SANITIZE_NUMBER_INT),0,4);
      $thursday= substr(filter_input(INPUT_POST, 'thursday', FILTER_SANITIZE_NUMBER_INT),0,4);
      $friday= substr(filter_input(INPUT_POST, 'friday', FILTER_SANITIZE_NUMBER_INT),0,4);
      $saturday= substr(filter_input(INPUT_POST, 'saturday', FILTER_SANITIZE_NUMBER_INT),0,4);
      $sunday= substr(filter_input(INPUT_POST, 'sunday', FILTER_SANITIZE_NUMBER_INT),0,4);
      
      
      // calculate computer fahrenheit and centigrade averages and store in variables
      $average = (($monday + $tuesday + $wednesday + $thursday + $friday + $saturday + $sunday)/7);

      $Centigrade = ($average - 32) * (5/9);
      
      // create a custom message using a variable to store the message depending on temperature
      echo"<p>Average weekly temperature in Fahrenheit " . round($average,0);

      // echo messages and temps calculated above, matching screen shot
      if ($average >= 95) {
        echo": That is hot </p>";
      }elseif ($average >= 70) {
        echo": That is warm </p>";
      }elseif ($average >= 40) {
        echo": That is chilly </p>";
      }else {
        echo": That is cold </p>";
      }

      echo"<p>Here is the average weekly temperature in Centigrade " . round($Centigrade,0);

      if ($Centigrade >= 95) {
        echo": That is hot </p>";
      }elseif ($Centigrade >= 70) {
        echo": That is warm </p>";
      }elseif ($Centigrade >= 40) {
        echo": That is chilly </p>";
      }else {
        echo": That is cold </p>";
      }

    ?>
    <!-- add link here to weather web site -->
    <p><a href="https://www.theweathernetwork.com/us/weather/michigan/dearborn">Todays weather in Dearborn. Michigan</a></p>
    <hr>
    <!-- add footer -->
    <footer>
      <p>Tyler Leight &copy; 2022 HFC CIS 122</p>
    </footer>
    
    
  </body>
</html>