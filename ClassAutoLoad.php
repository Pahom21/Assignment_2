<?php
    require_once "constants.php";
    require_once "forms.php";
    require_once "dbconnection.php";
    require_once "DatabaseReader.php";

    spl_autoload_register(function($classname){
        $basedir=__DIR__;
        $classfile = $basedir.'/'.$classname.'.php';

        if(file_exists($classfile)){
            require_once $classfile;
        }
    });

   

    // Use the constants from constants.php
    $dbobj= new dbconnection(DBTYPE, HOSTNAME, DBNAME, HOSTUSER, HOSTPASS);
    $formobj = new forms();
    $procobj = new processes();
    $dbreader = new DatabaseReader($dbobj->getConnection());


    $procobj->process_signin($dbobj);
?>
