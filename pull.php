<?php 

require_once('config.php');

if(isset($_POST['city']) && isset($_POST['country'])){
  
		// Retrieve POST variables and program data

		$userCity = strip_tags($_POST['city']);
		$userCountry = strip_tags($_POST['country']);
		
		$programs = json_decode(getSchedule('http://realsocialdynamics.com/shop.asp?Group=1&Referer=true'),true);
		
		// Default to London for British users
		
		if($userCountry=='GB'){
			$userCity = 'London';
		}

		// Store user information in key/value array

		$userLocation = array(
			'city' => $userCity,
			'country' => $userCountry
			);
			
		// Define the country group variable if necessary (international viewers)

		if(in_array($userLocation['country'],$eastEurope)){
			$cGroup = $eastEurope;
		} else if(in_array($userLocation['country'],$northEurope)){
			$cGroup = $northEurope;
		} else if(in_array($userLocation['country'],$westEurope)){
			$cGroup = $westEurope;
		} else if(in_array($userLocation['country'],$asia)){
			$cGroup = $asia;
		} else if(in_array($userLocation['country'],$southAmerica)){
			$cGroup = $southAmerica;
		} else {
			$cGroup = array($userLocation['country']);
		}
		
		// Perform an initial sort
		
		$cityMatches = sortCityData($programs,$userLocation,$countries,$cGroup);

		if(empty($cityMatches)){
			
			// If the matches are empty (US results), redefine based on region and pull nearby events */
			
			if(in_array($userCity,$northeast)){
				echo json_encode(sortCityData($programs,array('New York','US'),$countries,$cGroup));
			} else if(in_array($userCity,$midwest)){
				echo json_encode(sortCityData($programs,array('Illinois','US'),$countries,$cGroup));
			} else if(in_array($userCity,$south)){
				echo json_encode(sortCityData($programs,array('Florida','US'),$countries,$cGroup));	
			} else if(in_array($userCity,$south2)){
				echo json_encode(sortCityData($programs,array('Texas','US'),$countries,$cGroup));
			} else {
				echo json_encode(sortCityData($programs,array('California','US'),$countries,$cGroup));
			}

		} else {
			
			echo json_encode($cityMatches); // Return a JSON object
			
		}
		
} else {
	
	// This is the standard GET request, returns all programs
	
	$program_json = getSchedule('http://realsocialdynamics.com/shop.asp?Group=1&Referer=true');
	echo $program_json;		
}

?>
