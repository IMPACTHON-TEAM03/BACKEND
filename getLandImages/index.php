<?php
require_once $_SERVER["DOCUMENT_ROOT"]."/_config.php";

if( !isset($_GET["land_idx"]) || !is_numeric($_GET["land_idx"]) ) {
    $response = array(
        "header" => array(
            "result" => "fail",
            "message" => "필수 파라미터가 누락되었습니다."
        ),
        "body" => array()
    );
    goto response_handling;
}

try {
    $pdo = new PDO(
        "mysql:host="._db_address.";dbname="._db_name.";charset=utf8mb4",
        _db_id,_db_pwd,
        array(
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_EMULATE_PREPARES => false
        )
    );

    $stmt = $pdo->prepare("SELECT COUNT(*) FROM `land_images` WHERE `land_idx` = :land_idx");
    $stmt->bindValue(':land_idx', $_GET["land_idx"]);
    $stmt->execute();
    $result_cnt = $stmt->fetchColumn();

    if($result_cnt <= 0) {
        $response = array(
            "header" => array(
                "result" => "fail",
                "message" => "이미지를 찾을 수 없습니다."
            ),
            "body" => array()
        );
        goto response_handling;
    }

    $stmt = $pdo->prepare("SELECT * FROM `land_images` WHERE `land_idx` = :land_idx");
    $stmt->bindValue(':land_idx', $_GET["land_idx"]);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if($result) {
        $urls = array();
        foreach($result as $column) {
            array_push($urls, $column["image_url"]);
        }

        $response = array(
            "header" => array(
                "result" => "success",
                "message" => null
            ),
            "body" => array(
                "urls" => $urls
            )
        );
        goto response_handling;
    } else {
        $response = array(
            "header" => array(
                "result" => "fail",
                "message" => "데이터베이스 오류가 발생했습니다."
            ),
            "body" => array()
        );
        goto response_handling;
    }

} catch (PDOException $e) {
    $response = array(
        "header" => array(
            "result" => "fail",
            "message" => "데이터베이스 오류가 발생했습니다."
        ),
        "body" => array(
            "e" => $e
        )
    );
    goto response_handling;
}

response_handling:
header('Content-type: application/json');
header('Access-Control-Allow-Origin: *');
echo json_encode($response, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);

// idx: 고유번호 (int)
// region: 짧은 지역
// price: 금액 (int)
// hasGarden: 텃밭 존재 여부 (boolean)
// nearbyTransportation: 주변 교통수단 (stringfied array)
// source: 정보 출처
// location: 주소
// landArea: 대지면적
// totalFloorArea: 연면
// buildingArea: 건축면 (NULLABLE)
// usableArea: 전용면적 (NULLABLE)
// rooms: 방 개수 (int)
// baths: 화장실 개수 (int)
// facing: 방향
// longitude: 경도 (float)
// latitude: 위도 (float)