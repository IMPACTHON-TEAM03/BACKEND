<?php
require_once $_SERVER["DOCUMENT_ROOT"]."/_config.php";

try {
    $pdo = new PDO(
        "mysql:host="._db_address.";dbname="._db_name.";charset=utf8mb4",
        _db_id,_db_pwd,
        array(
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_EMULATE_PREPARES => false
        )
    );

    $bindValues = array();

    $where_syntax = "WHERE 1";
    if( isset($_GET["cityNm"]) ) {
        $where_syntax .= " AND `cityNm` = :cityNm";
        array_push($bindValues, array(":cityNm", $_GET["cityNm"]));
    }
    if( isset($_GET["dvsnNm"]) ) {
        $where_syntax .= " AND `dvsnNm` = :dvsnNm";
        array_push($bindValues, array(":dvsnNm", $_GET["dvsnNm"]));
    }
    if( isset($_GET["landArea"]) ) { // ㎡
        if(preg_match("/^[0-9]*~[0-9]*$/", $_GET["landArea"])) {
            $landArea = explode("~", $_GET["landArea"]);
            if(!empty($landArea[0])) {
                $where_syntax .= " AND `landArea` >= :landAreaMin";
                array_push($bindValues, array(":landAreaMin", $landArea[0]));
            }
            if(!empty($landArea[1])) {
                $where_syntax .= " AND `landArea` < :landAreaMax";
                array_push($bindValues, array(":landAreaMax", $landArea[1]));
            }
        } else {
            $where_syntax .= " AND `landArea` = :landArea";
            array_push($bindValues, array(":landArea", $_GET["landArea"]));
        }
    }
    if( isset($_GET["price"]) ) {
        if(preg_match("/^[0-9]*~[0-9]*$/", $_GET["price"])) {
            $price = explode("~", $_GET["price"]);
            if(!empty($price[0])) {
                $where_syntax .= " AND `price` >= :priceMin";
                array_push($bindValues, array(":priceMin", $price[0]));
            }
            if(!empty($price[1])) {
                $where_syntax .= " AND `price` < :priceMax";
                array_push($bindValues, array(":priceMax", $price[1]));
            }
        } else {
            $where_syntax .= " AND `price` = :price";
            array_push($bindValues, array(":price", $_GET["price"]));
        }
    }
    if( isset($_GET["baths"]) ) {
        if(preg_match("/^[0-9]*~[0-9]*$/", $_GET["baths"])) {
            $baths = explode("~", $_GET["baths"]);
            if(!empty($baths[0])) {
                $where_syntax .= " AND `baths` >= :bathsMin";
                array_push($bindValues, array(":bathsMin", $baths[0]));
            }
            if(!empty($baths[1])) {
                $where_syntax .= " AND `baths` < :bathsMax";
                array_push($bindValues, array(":bathsMax", $baths[1]));
            }
        } else {
            $where_syntax .= " AND `baths` = :baths";
            array_push($bindValues, array(":baths", $_GET["baths"]));
        }
    }
    if( isset($_GET["rooms"]) ) {
        if(preg_match("/^[0-9]*~[0-9]*$/", $_GET["rooms"])) {
            $rooms = explode("~", $_GET["rooms"]);
            if(!empty($rooms[0])) {
                $where_syntax .= " AND `rooms` >= :roomsMin";
                array_push($bindValues, array(":roomsMin", $rooms[0]));
            }
            if(!empty($rooms[1])) {
                $where_syntax .= " AND `rooms` < :roomsMax";
                array_push($bindValues, array(":roomsMax", $rooms[1]));
            }
        } else {
            $where_syntax .= " AND `rooms` = :rooms";
            array_push($bindValues, array(":rooms", $_GET["rooms"]));
        }
    }

    $stmt = $pdo->prepare("SELECT * FROM `lands` $where_syntax");
    foreach($bindValues as $bindValue) {
        $stmt->bindValue($bindValue[0], $bindValue[1]);
    }
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $response = array(
        "header" => array(
            "result" => "success",
            "message" => null
        ),
        "body" => array(
            "items" => $result
        )
    );
    goto response_handling;

} catch (PDOException $e) {
    $response = array(
        "header" => array(
            "result" => "fail",
            "message" => "데이터베이스 오류가 발생했습니다."
        ),
        "body" => array()
    );
    goto response_handling;
}

response_handling:
header('Content-type: application/json');
header('Access-Control-Allow-Origin: *');
echo json_encode($response, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);