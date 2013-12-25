<?php 

import com.googlecode.objectify.ObjectifyService;
import com.googlecode.objectify.Objectify;
import com.fi.twentythings.Locale;

require_once('../includes/auth.php');

/**
 * get the locales from the datastore and add them to a select
 */
function locale_codes_dropdown() {

	$obj_service = new Java('com.googlecode.objectify.ObjectifyService');
	$localeclass = java_class('com.fi.twentythings.Locale');
	ObjectifyService::register($localeclass);	
	
	$localeField = 'locale';
	
	$locales = $obj_service->ofy()->load()->type($localeclass)->list();
	
	foreach( $locales as $locale ) {
        echo '<p><a href="/cmseditlocale?locale='.$locale->getId().'">'.$locale->getId().'</a></p>'."\n";                
    }
}

?>

<!doctype html>
<html lang="en">

	<head>
		<meta charset="utf-8"> 
		<title>20 Things CMS</title>
		<link type="text/css" rel="stylesheet" href="../../css/cms.css" />
	</head>

	<body>

		<?php require_once('./cmsnav.php'); ?>

		<h1>Select Locale</h1>		
		
		<div id="wrap">
		
			<!-- Select Locale -->
			<form id="selectLocale" class="section" action="cmseditlocale">
				<br />
				<p>
				<?locale_codes_dropdown();?>
			</form>
			
			<!-- Create Locale -->

		</div>
		
	</body>

</html>

