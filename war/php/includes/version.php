<?php 

require_once('../../locale/locale.php');
require_once('../../locale/' . LOCALE_CONFIGURATION);
	
//Include the flexible cross origin policy for this request
include_once( '../includes/cors.php' );
 	
echo get_version_number();	
?>