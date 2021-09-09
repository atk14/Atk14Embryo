<?php
/**
 * Either some parts of ATK14 system (i.e. mailing subsystem) or some third party libs
 * could be configured by constants or variables.
 * 
 * This file is the right place to do such configuration.
 *
 * You can inspect all ATK14 application`s constants in atk14/default_settings.php
 * 
 * All the application constants should be inspected by calling:
 *	$ ./scripts/dump_settings
 * 
 * A certain constant should be inspected this way:
 *	$ ./scripts/dump_settings DEFAULT_EMAIL
 */

definedef("DEFAULT_EMAIL","your@email.com");
definedef("ATK14_ADMIN_EMAIL",DEFAULT_EMAIL); // the address for sending error reports and so on...

definedef("ATK14_APPLICATION_NAME","ATK14 embryo");
definedef("ATK14_APPLICATION_DESCRIPTION","Yet another application running on ATK14 Framework");

definedef("ATK14_HTTP_HOST",PRODUCTION ? "embryo.atk14.net" : "atk14embryo.localhost");

date_default_timezone_set('Europe/Prague');


if(DEVELOPMENT || TEST){
	// a place for development and testing environment settings

	ini_set("display_errors","1");
}

if(PRODUCTION){
	// a place for production environment settings

	if(php_sapi_name()!="cli"){
		ini_set("display_errors","0");
	}
}
