<? 

include('functions.php');
		
/**************************************************************************************/



$op = @sanitize($_REQUEST['op']);
switch($op) {
	default:
		echo'<h3>Add countries to blocked list of countries:</h3>';
		display_select_countries($countryList);
		echo'<h3>Actual list of blocked countries:</h3>';
		print_blocked_countries();
		print_insert_code();
	break; break;	
	case "adding":
		if(isset($_POST["countries"])) {
			update_forbidden_countries($_POST['countries']);
			echo "<h3>Added.</h3>New list of blocked countries:<br><br>";
			print_blocked_countries();			
			print_insert_code();
			echo "<br><br><a href=control_panel.php><b>Go back</b></a><br>";
		}
	break;
	case "monitor": 		
		if(check_block_country()){
			echo "oh.";
			//header('Location: '.$GLOBALS['REDIRECT_URL'].'');
			//exit;
		}
	break;
}




?>