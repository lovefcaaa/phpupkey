<?php
/*
* PHP upgrade key
*
* PHP upgrade key points difference is distributed under GPL 2
* Copyright (C) 2014 lovefcaaa <https://github.com/lovefcaaa>
*
* This library is free software; you can redistribute it and/or
* modify it under the terms of the GNU Lesser General Public
* License as published by the Free Software Foundation; either
* version 2 of the License, or any later version.
*/
/************************************** php5.4: http://cn2.php.net/manual/zh/migration54.incompatible.php **************************************/

// 5.4.0 	This function has been DEPRECATED as of PHP 5.3.0 and REMOVED as of PHP 5.4.0.
// http://cn2.php.net/manual/zh/function.session-register.php#refsect1-function.session-register-description
var_dump(function_exists("session_register"));

// 5.4.0 	This function has been DEPRECATED as of PHP 5.3.0 and REMOVED as of PHP 5.4.0.
// http://cn2.php.net/manual/zh/function.session-is-registered.php#refsect1-function.session-is-registered-description
var_dump(function_exists("session_is_registered"));

// 5.4.0 	This function has been DEPRECATED as of PHP 5.3.0 and REMOVED as of PHP 5.4.0.
// http://cn2.php.net/manual/en/function.session-unregister.php#refsect1-function.session-unregister-description
var_dump(function_exists("session_unregister"));

// 5.4.0 	This function has been DEPRECATED as of PHP 5.3.0 and REMOVED as of PHP 5.4.0.
// http://cn2.php.net/manual/en/function.import-request-variables.php#refsect1-function.import-request-variables-description
var_dump(function_exists("import_request_variables"));

// 5.4.0 	This function has been DEPRECATED as of PHP 5.3.0 and REMOVED as of PHP 5.4.0.
// http://cn2.php.net/manual/en/function.define-syslog-variables.php#refsect1-function.define-syslog-variables-returnvalues
var_dump(function_exists("define_syslog_variables"));

// 5.4.0 	This function has been DEPRECATED as of PHP 5.3.0 and REMOVED as of PHP 5.4.0.
// http://cn2.php.net/manual/en/function.mysqli-bind-param.php#refsect1-function.mysqli-bind-param-description
var_dump(function_exists("mysqli_bind_param"));
var_dump(function_exists("mysqli_bind_result"));
var_dump(function_exists("mysqli_client_encoding"));
var_dump(function_exists("mysqli_fetch"));
var_dump(function_exists("mysqli_param_count"));
var_dump(function_exists("mysqli_get_metadata"));
var_dump(function_exists("mysqli_send_long_data"));
var_dump(function_exists("mysqli::client_encoding"));
var_dump(function_exists("mysqli_stmt::stmt"));

// 5.4.0 	Always returns FALSE because the magic quotes feature was removed from PHP. 
// http://cn2.php.net/manual/en/function.get-magic-quotes-gpc.php#refsect1-function.get-magic-quotes-gpc-changelog
var_dump(get_magic_quotes_gpc());

// 5.4.0 	Always returns FALSE because the magic quotes feature was removed from PHP. 
// http://cn2.php.net/manual/en/function.get-magic-quotes-runtime.php#refsect1-function.get-magic-quotes-runtime-changelog
var_dump(get_magic_quotes_runtime());

// 5.4.0 	Removed from PHP, and generates a fatal E_CORE_ERROR level error when enabled. 
// http://cn2.php.net/manual/zh/features.safe-mode.php#features.safe-mode
var_dump(ini_get("safe_mode"));

// 5.4.0 	php.ini
// http://cn2.php.net/manual/en/ini.core.php
var_dump(ini_get("y2k_compliance"));
var_dump(ini_get("allow_call_time_pass_reference"));
var_dump(ini_get("zend.ze1_compatibility_mode"));
var_dump(ini_get("register_globals"));
var_dump(ini_get("register_long_arrays"));

// 5.4.0 	And as of PHP 5.4.0, call-time pass-by-reference was removed, so using it will raise a fatal error. 
// http://cn2.php.net/manual/en/language.references.pass.php
function tf(&$var){$var++;}$v=1;tf(&$v);

// 5.4.0 	break 0; is no longer valid. In previous versions it was interpreted the same as break 1;.Removed the ability to pass in variables (e.g., $num = 2; break $num;) as the numerical argument. 
// http://cn2.php.net/manual/en/control-structures.break.php#control-structures.break
$a=0;switch ($a) {case 0:break $a;}

// 5.4.0 	Prior to PHP 5.4.0, this would only work if the TZ environment variable was not set. 
// http://cn2.php.net/manual/en/datetime.configuration.php#datetime.configuration
var_dump(ini_set("date.timezone","Europe/Whatever"));

// 5.4.0 	Checking non-numeric offsets of strings now returns FALSE. 
// http://cn2.php.net/manual/en/function.isset.php#refsect1-function.isset-changelog
$str="abc";var_dump(isset($str["x"]));

// 5.4.0 	Converting an array to a string will now generate an E_NOTICE level error, but the result of the cast will still be the string "Array". 
// http://cn2.php.net/manual/en/book.array.php
var_dump(array(1)."ABC");

// 5.4.0 	Function array dereferencing has been added, e.g. foo()[0]. 
// http://php.net/manual/en/migration54.new-features.php
function foo($_GET, $_POST){}

// 5.4.0 	Previous versions issued E_WARNING and returned FALSE for empty arrays. 
// http://cn2.php.net/manual/en/function.array-combine.php
var_dump(array_combine(array(),array()));

// 5.4.0 	The constants ENT_SUBSTITUTE, ENT_DISALLOWED, ENT_HTML401, ENT_XML1, ENT_XHTML and ENT_HTML5 were added. 
// http://cn2.php.net/manual/en/function.htmlspecialchars.php#refsect1-function.htmlspecialchars-changelog
var_dump(htmlspecialchars("中文", ENT_COMPAT,"GBK", true));


/************************************** php5.5: http://cn2.php.net/manual/zh/migration55.incompatible.php **************************************/

// 5.5.0 	The "Z" code was added with equivalent functionality to "a" for Perl compatibility. 
// http://php.net/manual/zh/function.pack.php#refsect1-function.pack-changelog
print_r( unpack("Z3", pack("C3",80,72,80)."") );

// 5.5.0 	php_logo_guid() has been removed from PHP. 
// http://cn2.php.net/manual/zh/function.php-logo-guid.php#refsect1-function.php-logo-guid-changelog
print_r( php_logo_guid() );


