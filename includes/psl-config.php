<?php
/**
 * These are the database login details -- http://www.wikihow.com/Create-a-Secure-Login-Script-in-PHP-and-MySQL
 */  
define("HOST", "localhost");     // The host you want to connect to.
define("USER", "sec_user");    // The database username. 
define("PASSWORD", "5a496d507c");    // The database password. 
define("DATABASE", "secure_login");    // The database name.
 
define("CAN_REGISTER", "any");
define("DEFAULT_ROLE", "member");
 
define("SECURE", FALSE);    // FOR DEVELOPMENT ONLY!!!!
?>