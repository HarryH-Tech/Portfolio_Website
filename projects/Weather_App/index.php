<!DOCTYPE html>
<html>	
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<style>
		<?php require './styles/weather_styles.css'; ?>
	</style>
	<link rel='icon' href='styles/images/icon.jpg'>
	<title>What's The Weather</title>
</head>
	
<body>
	<h1 id='title'>
		🌦️ What's The Weather? 🌦️
	</h1>
	
	<div id='form_container'>
		<form method='post'>
			<label for='city_query'> City: </label>
			<input id="city_name" type='text' name='city_query' autofocus>
			<br><br>
			<input class='btn btn-primary' id='submit_button' type='submit'>
		</form>
	</div>
	
	
	<?php
		// If submit button clicked
		if(isset($_POST['city_query'])) {
			
			/* Check that server response code is 200 and 
			that a vlid city was entered in the search bar */
			$city_query = $_POST['city_query'];
			$API_Key = 'd257adb8fd88f23011c53b14bddfda58';
			$url="http://api.openweathermap.org/data/2.5/weather?q=".$city_query."&&lang=en&units=metric&cnt=7&appid=".$API_Key;
			function get_http_response_code($url) {
				$headers = get_headers($url);
				return substr($headers[0], 9, 3);
			}
			$get_http_response_code = get_http_response_code($url);
			
			// If server response is ok and city was valid
			if ($get_http_response_code == 200 && !empty($_POST['city_query'])) {		

				//curl init and API request 
				$ch = curl_init();
				curl_setopt($ch, CURLOPT_HEADER, 0);
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
				curl_setopt($ch, CURLOPT_URL, $url);
				curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
				curl_setopt($ch, CURLOPT_VERBOSE, 0);
				curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
				$response = curl_exec($ch);
				curl_close($ch);
				
				//get data from API response
				$data = json_decode($response);
				$currentTime = time();
				$description=$data->weather[0]->description;
				$temp_max=$data->main->temp_max;
				$temp_min=$data->main->temp_min;
				$humidity=$data->main->humidity;
				$today = date("F j, Y, g:i a");
				$cityname = $data->name; 
		
				//Check which image to show according to the max temperature
				if($temp_max <= 10) {
					$image = "ice";
				} else if($temp_max <= 17 && $temp_max > 10) {
					$image = "mild";
				} else if($temp_max <= 25 && $temp_max > 17) {
					$image = "warm";
				} else if($temp_max <= 33 && $temp_max > 25) {
					$image = "hot";
				} else {
					$image = "very_hot";
				}
				
				//Print card and data
				echo "<div class='container'>";
				echo "<div class='card'>";
				echo "<div class='row'>";
				echo "<div class='col m8'>";
				echo "<div class='card-body'>";
				echo "<p id='date'><b>Today's Date".":</b> ".$today."</p>";
				echo "<p id='city'><b>".$cityname.":</b> ".$description."</p>";
				echo "<p id='max_temp'><b>Temp Max:</b> ".$temp_max."&deg;C</p>";
				echo "<p id='min_temp'><b>Temp Min:</b> ".$temp_min."&deg;C</p>";
				echo "<p id='humidity'><b>Humidity:</b> ".$humidity."%</p><br>";	
				echo "<div class='card-image'>";
				echo "<img alt='Weather image' src='./styles/images/".$image.".png' class='weather_image'>";
				echo "</div";
				echo "</div";
				echo "</div";
				echo "</div";
				echo "</div";
				echo "</div";
			}
			//Error responses
			else if($get_http_response_code != 200) {
				echo "<div id='server_error'>Sorry, either there's a problem with the server at the moment or the city you entered is not available at the moment. Sorry for any inconvenience caused. Please try again later.</div>";
			} else {
				echo "<script type='text/javascript'>alert('Please enter a search term before clicking submit. Thank you!');</script>";
			}
		}
	?>
</body>
</html>