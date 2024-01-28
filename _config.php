<?php
error_reporting( E_ALL );
ini_set( "display_errors", 1 );
mysqli_report(MYSQLI_REPORT_STRICT | MYSQLI_REPORT_ALL);

date_default_timezone_set("Asia/Seoul");

if(empty($_SERVER['HTTPS']) || $_SERVER['HTTPS'] !== "on") {
    $location = 'https:/' . $_SERVER["HTTP_HOST"] . $_SERVER['REQUEST_URI'];
    header('HTTP/1.1 301 Moved Permanently');
    header('Location: ' . $location);
    exit();
}

// if(!session_id()) {
//     session_start();
//     if( !isset($_SESSION['login']) ) $_SESSION['login'] = false;
// }

define("_db_address", "localhost");
define("_db_name", "impacton2024");
if(true) {
    define("_db_id", "");
    define("_db_pwd", "");
}

define("_main_domain", "impacton-api.gdre.dev");

function error_then_exit($error) {
    if($error == 500) {
        require_once $_SERVER["DOCUMENT_ROOT"]."/errorpage/500.php";
    } else if($error == 403) {
        require_once $_SERVER["DOCUMENT_ROOT"]."/errorpage/403.php";
    } else {
        require_once $_SERVER["DOCUMENT_ROOT"]."/errorpage/404.php";
    }
}

?>