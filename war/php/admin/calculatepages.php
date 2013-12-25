<?php

import com.fi.twentythings.Article;
import com.fi.twentythings.Locale;
import com.fi.twentythings.Page;
import com.googlecode.objectify.Objectify;
import com.googlecode.objectify.ObjectifyService;

require_once('../includes/auth.php');

/*if(!isset($_REQUEST['locale'])) {
	echo 'Must set locale.';
	return;
}

require('../../locale/locale.php');*/
	
$localeclass = java_class('com.fi.twentythings.Locale');			
		
$articleclass = java_class('com.fi.twentythings.Article');	

$pageclass = java_class('com.fi.twentythings.Page');

ObjectifyService::register($localeclass);		
	
ObjectifyService::register($articleclass);

ObjectifyService::register($pageclass);	
	
$obj_service = new Java('com.googlecode.objectify.ObjectifyService');		
			

/**
 * Returns the Objectify instance
 */
function ofy() {
	global $obj_service;

	return $obj_service->ofy();
}

$locales = ofy()->load()->type($localeclass)->list();

foreach ($locales as $locale) {
	$articles = ofy()->load()->type($articleclass)->filter('locale', $locale->getId())->list();
	foreach ($articles as $article) {
		echo 'locale is '.$locale;		
		$pagecount = ofy()->load()->type($pageclass)->filter('locale', $locale->getId())->filter('stub', $article->getStub())->count();
		echo 'pagecount is '.$pagecount;
		$article->setNumberOfPages($pagecount);
		ofy()->save()->entity($article);	
	}
	
}

?>