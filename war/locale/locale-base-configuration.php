<?php 

	include( '../php/includes/objectify.php' );
	
	/**
	 * The current version number of the content and cache manifest,
	 * must be updated every time the content of the book is
	 * changed.
	 */
	define( 'SITE_VERSION', $versionnumber);
	define( 'SITE_VERSION_SUFFIX', '?v=' . SITE_VERSION );
	
	/**
	 * An expression that matches all development hosts.
	 * When the application runs on a development host,
	 * it will use unminified JavaScript and CSS.
	 */
	define( 'DEVELOPMENT_HOSTS_EXPRESSION', "/localhost/is" );
	
	/**
	 * A list of static image assets used throughout the site,
	 * that may require replacements depending on locale.
	 * 
	 * The items in this array will be used as a foundation for
	 * the IMAGE_ASSETS constant which is defined in the
	 * individual locale configuration files.
	 */
	define( 'DEFAULT_IMAGE_ASSETS', array(
    'logo-style' => '',
		'front-cover' => '/css/images/front-cover.jpg',
		'back-cover' => '/css/images/back-cover.jpg',
		'back-cover-flipped' => '/css/images/back-cover-flipped.jpg',
		'left-page' => '/css/images/left-page.jpg',
		'left-page-flipped' => '/css/images/left-page-flipped.jpg',
		'right-page' => '/css/images/right-page.jpg'
	) );
	
	/**
	 * In JavaScript, a solid colored block is drawn behind the
	 * book to ensure the edge is anti-aliased, this is mainly
	 * visible when dragging a hard cover. This is the color 
	 * that will be used.
	 */
	define( 'DEFAULT_SOLID_BOOK_COLOR', '#5873a0' );
	
?>