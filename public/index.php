<?php 
//Report all PHP errors
error_reporting (E_ALL);
ini_set("display_errors", 1);

//Start session
session_name('sanggar_oop2');
session_start();

require_once'../app/init.php';


$app = new App;

