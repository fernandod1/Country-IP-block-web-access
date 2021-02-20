<? 
include('functions.php');
if(check_block_country()){
	header('Location: '.$GLOBALS['REDIRECT_URL'].'');
	exit;
} 
?>