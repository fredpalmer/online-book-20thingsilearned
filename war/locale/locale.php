<?php 
	
	// Include the flexible cross origin policy for this request
	include_once( '../php/includes/cors.php' );
	include( '../php/includes/objectify.php' );
	
	global $langcode;
		
	session_start();
	
	const LANGUAGE_SESSION_NAME = 'twentythingslocale';
	const LANGUAGE_CHANGE_QUERY = 'language';
	const LANGUAGE_ECHO_QUERY = 'echo';

	/**
	* defining an array of Locale arrays containing values for each Locale name, Locale code, and the paths to the files containing further Locale info.
	*/
	define( 'LOCALES', array(	
		array(
			'name' => 'English',
			'code' => 'en-US',
			'pages' => 'en-US/pages/',
			'strings' => 'en-US/strings.php',
			'configuration' => 'en-US/configuration.php'
		)
	) );
	
  if (!isset ($langcode)) {
  	// Get locale at position defined in request param
	$locale = constant('LOCALES')[$_REQUEST['locale']];
  } else {
    // Default to the first language in the list
	$locale = getLocaleByLanguageCode( $langcode );
  }
	

  
  // GLobal locale values
  define( 'LOCALE_NAME', $locale['name'] );
  define( 'LOCALE_CODE', $locale['code'] );
  define( 'LOCALE_PAGES', $locale['pages'] );
  define( 'LOCALE_STRINGS', $locale['strings'] );
  define( 'LOCALE_CONFIGURATION', $locale['configuration'] );
  
  include( LOCALE_STRINGS );
	
	/**
	 * 
	 */
	function getLocaleByLanguageCode( $code ) {
		foreach( LOCALES as $key => $value ) {
			if( strtolower( $value['code'] ) === strtolower( $code ) ) {
				return $value;
			}
		}
		
		return NULL;
	}
?>