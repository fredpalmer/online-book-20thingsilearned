<?php

import com.fi.twentythings.Article;
import com.fi.twentythings.Locale;
import com.fi.twentythings.Page;
import com.fi.twentythings.Version;
import com.googlecode.objectify.Objectify;
import com.googlecode.objectify.ObjectifyService;
			
global $ofy, $obj_service, $localeclass, $articleclass, $pageclass, $versionclass, $loc, $langcode;

$localeclass = java_class('com.fi.twentythings.Locale');
$articleclass = java_class('com.fi.twentythings.Article');
$pageclass = java_class('com.fi.twentythings.Page');
$versionclass = java_class('com.fi.twentythings.Version');

ObjectifyService::register($localeclass);	
ObjectifyService::register($articleclass);	
ObjectifyService::register($pageclass);
ObjectifyService::register($versionclass);		

$obj_service = new Java('com.googlecode.objectify.ObjectifyService');
$ofy = $obj_service->begin();	
//$loc = $ofy->query($localeclass)->filter('id', getBrowserLanguage())->get();


	echo 'in delete';
	$ofy->delete($localeclass, $key)->filter('id',;
	$version->setVersion(($version->getVersion())+1);	
	$ofy->put($version);


?>