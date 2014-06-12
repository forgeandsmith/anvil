<?php 
	/*	OPTIONS_PAGE.PHP

		This page should be used to register extra options pages for
		advanced custom fields.

		EXAMPLE:

		register_options_page('Name');
		
	*/

 	if(function_exists("register_options_page"))
	{
		register_options_page('Contact');
		register_options_page('Header');
		register_options_page('Footer');
	}

	/*   END OF OPTIONS_PAGE.PHP   */

?>