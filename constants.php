<?php
    $conf=array();

    $conf['db_type'] = "PDO";             /* Connection Type */
    $conf['db_hostname'] = "localhost";       /* Hostname */
    $conf['db_username'] = "root";       /* Database Username */
    $conf['db_password'] = "";       /* Database User Password */
    $conf['db_name'] = "USERS";             /* Database Name */

    define("DBTYPE", $conf['db_type']);             /* Connection Type */
	define("HOSTNAME", $conf['db_hostname']);       /* Hostname */
	define("HOSTUSER", $conf['db_username']);       /* Database Username */
	define("HOSTPASS", $conf['db_password']);       /* Database User Password */
	define("DBNAME", $conf['db_name']);             /* Database Name */

    

?>