<?php

/* Config.php, contains all of the function and global variable definitions for the main API script */

$countryCodes = array(
  'AF' => 'Afghanistan',
	'AX' => 'Åland Islands',
	'AL' => 'Albania',
	'DZ' => 'Algeria',
	'AS' => 'American Samoa',
	'AD' => 'Andorra',
	'AO' => 'Angola',
	'AI' => 'Anguilla',
	'AQ' => 'Antarctica',
	'AG' => 'Antigua and Barbuda',
	'AR' => 'Argentina',
	'AM' => 'Armenia',
	'AW' => 'Aruba',
	'AU' => 'Australia',
	'AT' => 'Austria',
	'AZ' => 'Azerbaijan',
	'BS' => 'Bahamas',
	'BH' => 'Bahrain',
	'BD' => 'Bangladesh',
	'BB' => 'Barbados',
	'BY' => 'Belarus',
	'BE' => 'Belgium',
	'BZ' => 'Belize',
	'BJ' => 'Benin',
	'BM' => 'Bermuda',
	'BT' => 'Bhutan',
	'BO' => 'Bolivia, Plurinational State of',
	'BA' => 'Bosnia and Herzegovina',
	'BW' => 'Botswana',
	'BV' => 'Bouvet Island',
	'BR' => 'Brazil',
	'IO' => 'British Indian Ocean Territory',
	'BN' => 'Brunei Darussalam',
	'BG' => 'Bulgaria',
	'BF' => 'Burkina Faso',
	'BI' => 'Burundi',
	'KH' => 'Cambodia',
	'CM' => 'Cameroon',
	'CA' => 'Canada',
	'CV' => 'Cape Verde',
	'KY' => 'Cayman Islands',
	'CF' => 'Central African Republic',
	'TD' => 'Chad',
	'CL' => 'Chile',
	'CN' => 'China',
	'CX' => 'Christmas Island',
	'CC' => 'Cocos (Keeling) Islands',
	'CO' => 'Colombia',
	'KM' => 'Comoros',
	'CG' => 'Congo',
	'CD' => 'Congo, the Democratic Republic of the',
	'CK' => 'Cook Islands',
	'CR' => 'Costa Rica',
	'CI' => "Côte d'Ivoire",
	'HR' => 'Croatia',
	'CU' => 'Cuba',
	'CY' => 'Cyprus',
	'CZ' => 'Czech Republic',
	'DK' => 'Denmark',
	'DJ' => 'Djibouti',
	'DM' => 'Dominica',
	'DO' => 'Dominican Republic',
	'EC' => 'Ecuador',
	'EG' => 'Egypt',
	'SV' => 'El Salvador',
	'GQ' => 'Equatorial Guinea',
	'ER' => 'Eritrea',
	'EE' => 'Estonia',
	'ET' => 'Ethiopia',
	'FK' => 'Falkland Islands (Malvinas)',
	'FO' => 'Faroe Islands',
	'FJ' => 'Fiji',
	'FI' => 'Finland',
	'FR' => 'France',
	'GF' => 'French Guiana',
	'PF' => 'French Polynesia',
	'TF' => 'French Southern Territories',
	'GA' => 'Gabon',
	'GM' => 'Gambia',
	'GE' => 'Georgia',
	'DE' => 'Germany',
	'GH' => 'Ghana',
	'GI' => 'Gibraltar',
	'GR' => 'Greece',
	'GL' => 'Greenland',
	'GD' => 'Grenada',
	'GP' => 'Guadeloupe',
	'GU' => 'Guam',
	'GT' => 'Guatemala',
	'GG' => 'Guernsey',
	'GN' => 'Guinea',
	'GW' => 'Guinea-Bissau',
	'GY' => 'Guyana',
	'HT' => 'Haiti',
	'HM' => 'Heard Island and McDonald Islands',
	'VA' => 'Holy See (Vatican City State)',
	'HN' => 'Honduras',
	'HK' => 'Hong Kong',
	'HU' => 'Hungary',
	'IS' => 'Iceland',
	'IN' => 'India',
	'ID' => 'Indonesia',
	'IR' => 'Iran, Islamic Republic of',
	'IQ' => 'Iraq',
	'IE' => 'Ireland',
	'IM' => 'Isle of Man',
	'IL' => 'Israel',
	'IT' => 'Italy',
	'JM' => 'Jamaica',
	'JP' => 'Japan',
	'JE' => 'Jersey',
	'JO' => 'Jordan',
	'KZ' => 'Kazakhstan',
	'KE' => 'Kenya',
	'KI' => 'Kiribati',
	'KP' => "Korea, Democratic People's Republic of",
	'KR' => 'Korea, Republic of',
	'KW' => 'Kuwait',
	'KG' => 'Kyrgyzstan',
	'LA' => "Lao People's Democratic Republic",
	'LV' => 'Latvia',
	'LB' => 'Lebanon',
	'LS' => 'Lesotho',
	'LR' => 'Liberia',
	'LY' => 'Libyan Arab Jamahiriya',
	'LI' => 'Liechtenstein',
	'LT' => 'Lithuania',
	'LU' => 'Luxembourg',
	'MO' => 'Macao',
	'MK' => 'Macedonia, the former Yugoslav Republic of',
	'MG' => 'Madagascar',
	'MW' => 'Malawi',
	'MY' => 'Malaysia',
	'MV' => 'Maldives',
	'ML' => 'Mali',
	'MT' => 'Malta',
	'MH' => 'Marshall Islands',
	'MQ' => 'Martinique',
	'MR' => 'Mauritania',
	'MU' => 'Mauritius',
	'YT' => 'Mayotte',
	'MX' => 'Mexico',
	'FM' => 'Micronesia, Federated States of',
	'MD' => 'Moldova, Republic of',
	'MC' => 'Monaco',
	'MN' => 'Mongolia',
	'ME' => 'Montenegro',
	'MS' => 'Montserrat',
	'MA' => 'Morocco',
	'MZ' => 'Mozambique',
	'MM' => 'Myanmar',
	'NA' => 'Namibia',
	'NR' => 'Nauru',
	'NP' => 'Nepal',
	'NL' => 'Netherlands',
	'AN' => 'Netherlands Antilles',
	'NC' => 'New Caledonia',
	'NZ' => 'New Zealand',
	'NI' => 'Nicaragua',
	'NE' => 'Niger',
	'NG' => 'Nigeria',
	'NU' => 'Niue',
	'NF' => 'Norfolk Island',
	'MP' => 'Northern Mariana Islands',
	'NO' => 'Norway',
	'OM' => 'Oman',
	'PK' => 'Pakistan',
	'PW' => 'Palau',
	'PS' => 'Palestinian Territory, Occupied',
	'PA' => 'Panama',
	'PG' => 'Papua New Guinea',
	'PY' => 'Paraguay',
	'PE' => 'Peru',
	'PH' => 'Philippines',
	'PN' => 'Pitcairn',
	'PL' => 'Poland',
	'PT' => 'Portugal',
	'PR' => 'Puerto Rico',
	'QA' => 'Qatar',
	'RE' => 'Réunion',
	'RO' => 'Romania',
	'RU' => 'Russian Federation',
	'RW' => 'Rwanda',
	'BL' => 'Saint Barthélemy',
	'SH' => 'Saint Helena',
	'KN' => 'Saint Kitts and Nevis',
	'LC' => 'Saint Lucia',
	'MF' => 'Saint Martin (French part)',
	'PM' => 'Saint Pierre and Miquelon',
	'VC' => 'Saint Vincent and the Grenadines',
	'WS' => 'Samoa',
	'SM' => 'San Marino',
	'ST' => 'Sao Tome and Principe',
	'SA' => 'Saudi Arabia',
	'SN' => 'Senegal',
	'RS' => 'Serbia',
	'SC' => 'Seychelles',
	'SL' => 'Sierra Leone',
	'SG' => 'Singapore',
	'SK' => 'Slovakia',
	'SI' => 'Slovenia',
	'SB' => 'Solomon Islands',
	'SO' => 'Somalia',
	'ZA' => 'South Africa',
	'GS' => 'South Georgia and the South Sandwich Islands',
	'ES' => 'Spain',
	'LK' => 'Sri Lanka',
	'SD' => 'Sudan',
	'SR' => 'Suriname',
	'SJ' => 'Svalbard and Jan Mayen',
	'SZ' => 'Swaziland',
	'SE' => 'Sweden',
	'CH' => 'Switzerland',
	'SY' => 'Syrian Arab Republic',
	'TW' => 'Taiwan, Province of China',
	'TJ' => 'Tajikistan',
	'TZ' => 'Tanzania, United Republic of',
	'TH' => 'Thailand',
	'TL' => 'Timor-Leste',
	'TG' => 'Togo',
	'TK' => 'Tokelau',
	'TO' => 'Tonga',
	'TT' => 'Trinidad and Tobago',
	'TN' => 'Tunisia',
	'TR' => 'Turkey',
	'TM' => 'Turkmenistan',
	'TC' => 'Turks and Caicos Islands',
	'TV' => 'Tuvalu',
	'UG' => 'Uganda',
	'UA' => 'Ukraine',
	'AE' => 'United Arab Emirates',
	'GB' => 'United Kingdom',
	'US' => 'United States',
	'UM' => 'United States Minor Outlying Islands',
	'UY' => 'Uruguay',
	'UZ' => 'Uzbekistan',
	'VU' => 'Vanuatu',
	'VE' => 'Venezuela, Bolivarian Republic of',
	'VN' => 'Viet Nam',
	'VG' => 'Virgin Islands, British',
	'VI' => 'Virgin Islands, U.S.',
	'WF' => 'Wallis and Futuna',
	'EH' => 'Western Sahara',
	'YE' => 'Yemen',
	'ZM' => 'Zambia',
	'ZW' => 'Zimbabwe'
	);

	$countries = array_flip($countryCodes);

	/*******************************************************************************************/
	/* Initial vars, pull programs and organize all the continents and US states for fallbacks */
	/*******************************************************************************************/

	$eastEurope = array('BY','BG','CZ','HU','MD','PL','RO','RU','SK','UA');
	$northEurope = array('AX','DK','EE','FO','FI','GG','IS','IE','JE','LV','LT','IM','NO','SJ');
	$westEurope = array('AT','BE','FR','DE','LI','LU','MC','NL','CH');

	$asia = array('AF','AM','AZ','BH','BD','BT','BN','KH','CN','CX','CC','IO','GE','HK','IN','ID','IR','IQ','IL','JP','JO','KZ','KP','KR','KW','KG','LA','LB','MO','MY','MV','MN','MM','NP','OM','PK','PH','QA','SA','SG','LK','SY','TW','TJ','TH','TR','TM','AE','UZ','VN','YE');

	$southAmerica = array('AR','BO','BR','CL','CO','EC','FK','GF','GY','GY','PY','PE','SR','UY','VE');

	// US cities below, organized by region

	$northeast = array('Maine', 'New Hampshire', 'Vermont', 'Massachusetts', 'Rhode Island', 'Connecticut', 'New York', 'Pennsylvania', 'New Jersey');
	$midwest = array('Wisconsin', 'Michigan', 'Illinois', 'Indiana', 'Kentucky', 'Ohio', 'Missouri', 'North Dakota', 'South Dakota', 'Nebraska', 'Kansas', 'Minnesota', 'Iowa');
	$south = array('Delaware', 'Maryland', 'District of Columbia', 'Virginia', 'West Virginia', 'North Carolina', 'South Carolina', 'Georgia', 'Florida','Tennessee', 'Mississippi', 'Alabama');
	$south2 = array('Oklahoma', 'Texas', 'Arkansas', 'Louisiana');
	$west = array('Idaho', 'Montana', 'Wyoming', 'Nevada', 'Utah', 'Colorado', 'Arizona', 'New Mexico', 'Alaska', 'Washington', 'Oregon', 'California', 'Hawaii');
	
	
/* Function declarations below */
	
function getSchedule($url){
	$content = file_get_contents($url);
	if(strlen($content)>0){
		$xml = new DOMDocument();
		@$xml->loadHTML($content);

		$x = new DOMXpath($xml);
		$forms = $x->evaluate('//form[@method="post"]');

			$i = 0;
		$mainArray = array();

		foreach($forms as $form){

			$categories = $x->evaluate('.//a[@class="eventtitle"]',$form);
			foreach($categories as $category){
				$res = $category->textContent;
				$res = ucwords(strtolower($res));
			}

			$variants = $x->evaluate('.//a[@class="Variant"]',$form);
			$j = 0;
			
			foreach($variants as $variant){

				$full = $variant->textContent;

				$splitDate = explode(':',$full);
				$date = $splitDate[0];
				$location = trim($splitDate[1]);

				$mainArray['events'][$i]['program'][$j]['title'] = $res;
				$mainArray['events'][$i]['program'][$j]['location'] = $location;
				$mainArray['events'][$i]['program'][$j]['time'] = $date;
				
				$j++;
			}

			$i++;
		}

		$json = json_encode($mainArray);
		$json = str_replace('\u00a0',' ',$json);
	}

	return $json;
}

	
function sortCityData($programs,$userLocation,$countries,$cGroup){

	$cityMatch = array();
	$i = 0;

	foreach($programs['events'] as $event){

		if(is_array($event['program'])){
			foreach($event['program'] as $item){

				// Sort through, grab the country code and city name

				$eventLocation = explode(',',$item['location']);
				$len = count($eventLocation);

				// Check if it's a US event (city + state, len = 3) or international, (city + country, len 2)

				if($len<3){
					$eventCityFull = $eventLocation[0];
					$eventCountryName = $eventLocation[1];
				} else {
					$eventCityFull = $eventLocation[1];
					$eventCountryName = $eventLocation[2];
				}


				// Trim any whitespace from city name / country name

				if($eventCityFull[0] == ' '){
					$eventCityFull = trim($eventCityFull);
				}

				if($eventCountryName[0] == ' '){
					$eventCountryName = trim($eventCountryName);
				}

				if($eventCountryName == 'USA'){
					$eventCountryName = 'United States';
				}

				$eventCountryCode = getCountry($eventCountryName,$countries);

				// Handle Washington DC issue and other misc issues

				if($eventCityFull == 'Washington DC'){
					$eventCity = 'DC';
				} else {
					$eventCity = $eventCityFull;
				}

				if($userLocation['city'] == 'District of Columbia'){
					$userLocation['city'] = 'DC';
				}

				// Store everything in an key/value array for easy access later on

				$eventLocation = array(
					'city' => $eventCity,
					'country' => $eventCountryCode
					);

				if(count($cGroup)>2){

					if(in_array($eventLocation['country'],$cGroup)){
						$cityMatch['events'][$i]['program']['title'] = $item['title'];
						$cityMatch['events'][$i]['program']['location'] = $item['location'];
						$cityMatch['events'][$i]['program']['time'] = $item['time'];
						$i++;
					}

				} else {
					
					if($eventLocation['city'] == $userLocation['city']){
						$cityMatch['events'][$i]['program']['title'] = $item['title'];
						$cityMatch['events'][$i]['program']['location'] = $item['location'];
						$cityMatch['events'][$i]['program']['time'] = $item['time'];
						$i++;
					}
					
				}
			}

		}
	}
	return $cityMatch;
}
		
function getCountry($code,$countries) {
	//  $code = strtoupper($code);
	if (array_key_exists($code, $countries)) {
		return $countries[$code];
	}
	return false;
}
	

?>
