<?php
require_once $_SERVER["DOCUMENT_ROOT"]."/_config.php";

$response = array(
    "header" => array(
        "result" => "fail",
        "message" => "403"
    ),
    "body" => array()
);

header('Content-type: application/json');
echo json_encode($response);

exit();
?>