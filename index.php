<?php
require_once $_SERVER["DOCUMENT_ROOT"]."/_config.php";

$response = array(
    "header" => array(
        "result" => "success",
        "message" => "hello world"
    ),
    "body" => array()
);

header('Content-type: application/json');
echo json_encode($response);
?>