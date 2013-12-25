<?php

/**
 * Check logged in state
 * 
 */
if( !isset($_COOKIE['f46f703eb202ff76ce8700e6b6b0e678']) || $_COOKIE['f46f703eb202ff76ce8700e6b6b0e678'] !== '3ad6ada94da82d1729d9c826d417b16b' ) {
	$query = isset($_SERVER['QUERY_STRING']) ? '?' . urlencode($_SERVER['QUERY_STRING']) : '';
	 header('Location: /login?ref=' . $_SERVER['SCRIPT_URL'] . $query);
}

?>