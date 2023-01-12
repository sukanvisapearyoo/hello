<?php
//this is my CONTROLLER for the hello project

//turn on error reporting
ini_set('display_errors',1);
error_reporting(E_ALL);

//require the autoload file
require_once ('vendor/autoload.php');

//create an instance of the Base class
$f3 = Base ::instance();


//Define a default route ('home page' for hello project)
$f3 -> route ('GET / ', function (){
    echo '<h1>Hello, Fat Free! </h1>';
});
//run fatfree
$f3 ->run();


