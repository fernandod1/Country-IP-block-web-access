<? 

$REDIRECT_URL= "https://www.disney.es";

$FILENAME_DATABASE="blocked_countries.txt";

/* ----------- DO NOT MODIFY UNDER THIS LINE ------------- */


$countryList = array(
	'AF' => 'Afghanistan',
	'AX' => 'Aland Islands',
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
	'BS' => 'Bahamas the',
	'BH' => 'Bahrain',
	'BD' => 'Bangladesh',
	'BB' => 'Barbados',
	'BY' => 'Belarus',
	'BE' => 'Belgium',
	'BZ' => 'Belize',
	'BJ' => 'Benin',
	'BM' => 'Bermuda',
	'BT' => 'Bhutan',
	'BO' => 'Bolivia',
	'BA' => 'Bosnia and Herzegovina',
	'BW' => 'Botswana',
	'BV' => 'Bouvet Island (Bouvetoya)',
	'BR' => 'Brazil',
	'IO' => 'British Indian Ocean Territory (Chagos Archipelago)',
	'VG' => 'British Virgin Islands',
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
	'KM' => 'Comoros the',
	'CD' => 'Congo',
	'CG' => 'Congo the',
	'CK' => 'Cook Islands',
	'CR' => 'Costa Rica',
	'CI' => 'Cote d\'Ivoire',
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
	'FO' => 'Faroe Islands',
	'FK' => 'Falkland Islands (Malvinas)',
	'FJ' => 'Fiji the Fiji Islands',
	'FI' => 'Finland',
	'FR' => 'France, French Republic',
	'GF' => 'French Guiana',
	'PF' => 'French Polynesia',
	'TF' => 'French Southern Territories',
	'GA' => 'Gabon',
	'GM' => 'Gambia the',
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
	'IR' => 'Iran',
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
	'KP' => 'Korea',
	'KR' => 'Korea',
	'KW' => 'Kuwait',
	'KG' => 'Kyrgyz Republic',
	'LA' => 'Lao',
	'LV' => 'Latvia',
	'LB' => 'Lebanon',
	'LS' => 'Lesotho',
	'LR' => 'Liberia',
	'LY' => 'Libyan Arab Jamahiriya',
	'LI' => 'Liechtenstein',
	'LT' => 'Lithuania',
	'LU' => 'Luxembourg',
	'MO' => 'Macao',
	'MK' => 'Macedonia',
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
	'FM' => 'Micronesia',
	'MD' => 'Moldova',
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
	'AN' => 'Netherlands Antilles',
	'NL' => 'Netherlands the',
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
	'PS' => 'Palestinian Territory',
	'PA' => 'Panama',
	'PG' => 'Papua New Guinea',
	'PY' => 'Paraguay',
	'PE' => 'Peru',
	'PH' => 'Philippines',
	'PN' => 'Pitcairn Islands',
	'PL' => 'Poland',
	'PT' => 'Portugal, Portuguese Republic',
	'PR' => 'Puerto Rico',
	'QA' => 'Qatar',
	'RE' => 'Reunion',
	'RO' => 'Romania',
	'RU' => 'Russian Federation',
	'RW' => 'Rwanda',
	'BL' => 'Saint Barthelemy',
	'SH' => 'Saint Helena',
	'KN' => 'Saint Kitts and Nevis',
	'LC' => 'Saint Lucia',
	'MF' => 'Saint Martin',
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
	'SK' => 'Slovakia (Slovak Republic)',
	'SI' => 'Slovenia',
	'SB' => 'Solomon Islands',
	'SO' => 'Somalia, Somali Republic',
	'ZA' => 'South Africa',
	'GS' => 'South Georgia and the South Sandwich Islands',
	'ES' => 'Spain ES',
	'LK' => 'Sri Lanka',
	'SD' => 'Sudan',
	'SR' => 'Suriname',
	'SJ' => 'Svalbard & Jan Mayen Islands',
	'SZ' => 'Swaziland',
	'SE' => 'Sweden',
	'CH' => 'Switzerland, Swiss Confederation',
	'SY' => 'Syrian Arab Republic',
	'TW' => 'Taiwan',
	'TJ' => 'Tajikistan',
	'TZ' => 'Tanzania',
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
	'US' => 'United States of America',
	'UM' => 'United States Minor Outlying Islands',
	'VI' => 'United States Virgin Islands',
	'UY' => 'Uruguay, Eastern Republic of',
	'UZ' => 'Uzbekistan',
	'VU' => 'Vanuatu',
	'VE' => 'Venezuela',
	'VN' => 'Vietnam',
	'WF' => 'Wallis and Futuna',
	'EH' => 'Western Sahara',
	'YE' => 'Yemen',
	'ZM' => 'Zambia',
	'ZW' => 'Zimbabwe'
);

function select_print_option($element, $key, $forbidden_codes)
{
	$found=false;
	foreach ($forbidden_codes as $each) {
		if(($key==$each)&&($found==false)){
			$selected='selected';
			$found=true;
		}
	}
    echo "<option value=$key $selected>. $element</option>\n";
}

function display_select_countries($countryList){
	$forbidden_codes=explode(",",read_forbidden_countries_code());
	echo'<form action="control_panel.php?op=adding" method="post">
		<select name="countries[]" multiple size=10>';
	array_walk($countryList, 'select_print_option', $forbidden_codes);
	echo'</select><br>
		<input type="submit" class="btn btn-default" value="Block selected countries">
		</form><br>
		<font size=1>(To select several countries, just keep pressed "Ctrl" key when selecting countries)</font>
		';
}

function countrycode_to_country( $code, $countryList ){
    $code = strtoupper($code); 	
    if( @!$countryList[$code] ) return $code;
    else return $countryList[$code];
}


function print_insert_code(){
	echo'<font color=blue><b>Paste following code inside first line of php pages you want to block access from some countries:</b></font><br><br>
	<input type="text" size=70 value="<&#63; include($_SERVER[&apos;DOCUMENT_ROOT&apos;].&apos;/countries_monitoring.php&apos;); &#63;>">	';	
}


function get_countrycode_from_ip(){
	$countrycode="";
	$html=@file_get_contents("http://api.hostip.info/get_html.php?ip=".get_user_ip_addr());	
	if( preg_match( '!\(([^\)]+)\)!', $html, $match ) ){
		$countrycode = $match[1];
	}
	return $countrycode;	
}

function get_user_ip_addr(){
    if(!empty($_SERVER['HTTP_CLIENT_IP'])){
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    }elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }else{
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}

function sanitize($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}

function read_forbidden_countries_code(){
	$filename=$GLOBALS['FILENAME_DATABASE'];	
	if (file_exists($filename)){
		$data=@file_get_contents($filename);
    }else{
        $data="Error: database file '.$filename.' does not exists. Just create it manually.";
    }
	return $data;
}

function check_block_country(){
	$banned=false;
	$code=get_countrycode_from_ip();
	$forbidden_codes=explode(",",read_forbidden_countries_code());
	foreach ($forbidden_codes as $each) {
		if(($code==$each)&&($banned==false)){
			$banned=true;
		}
	}

	return $banned;
}

function update_forbidden_countries($data){
	$filename=$GLOBALS['FILENAME_DATABASE'];
	
	foreach ($data as $each) {
		@$save.=$each.',';
	}
    if(file_put_contents($filename,$save)){
		$data="Blocked list countries list updated!
		
		";
	}else{
		$data= '<br><p>Error when trying to write to '.$filename.'. Give writing permission (chmod 666) fo filename.</p>';
	}
	return $data;
}

function print_blocked_countries(){
	$forbidden_codes=explode(",",read_forbidden_countries_code());
	foreach ($forbidden_codes as $each) {
		echo countrycode_to_country($each,$GLOBALS['countryList']).'<br>';
	}
}

?>