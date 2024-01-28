<?php
exit();

require_once $_SERVER["DOCUMENT_ROOT"]."/_config.php";

// rawData = {};
// for(let i=0; i<document.querySelector(".detail_box--summary tbody").children.length; i++) {
//     let item = document.querySelector(".detail_box--summary tbody").children[i];
//     for(let j=0; j<item.querySelectorAll("th").length; j++) {
//         rawData[item.querySelectorAll("th")[j].textContent] = item.querySelectorAll("td")[j].textContent;
//     }
// }
// let exportData = {
//     "region": null,
//     "price": document.querySelector(".info_article_price .price").textContent,
//     "hasGarden": null,
//     "근처 교통시설": [],
//     "source": "https://new.land.naver.com/houses?articleNo="
// };
// for(key in rawData) {
//     if(key == "소재지") exportData["location"] = rawData[key];
//     else if(key == "대지/연면적") {
//         let data = rawData[key].split("/");
//         exportData["대지면적"] = data[0].startsWith("-")?null:data[0];
//         exportData["연면적"] = data[1].startsWith("-")?null:data[1];
//     } else if(key == "건축/전용면적") {
//         let data = rawData[key].split("/");
//         exportData["건축면적"] = data[0].startsWith("-")?null:data[0];
//         exportData["전용면적"] = data[1].startsWith("-")?null:data[1];
//     } else if(key == "방수/욕실수") {
//         let data = rawData[key].split("/");
//         exportData["rooms"] = data[0].startsWith("-")?null:data[0];
//         exportData["baths"] = data[1].startsWith("-")?null:data[1];
//     } else if(key == "방향") {
//         if(rawData[key].startsWith("남향")) exportData["facing"] = "south";
//         else if(rawData[key].startsWith("남서향")) exportData["facing"] = "southwest";
//         else if(rawData[key].startsWith("남동향")) exportData["facing"] = "southeast";
//         else if(rawData[key].startsWith("동향")) exportData["facing"] = "east";
//         else exportData["facing"] = rawData[key];
//     } else if(key == "매물번호") exportData["source"] += rawData[key];
// }
// json = JSON.stringify(exportData);
// console.log(json);

$data = array(
    array("region"=>"공주","price"=>"600000000","hasGarden"=>true,"근처 교통시설"=>array(),"source"=>"https://new.land.naver.com/houses?articleNo=2404619288","location"=>"충청남도 공주시 정안면 사현리","대지면적"=>"990㎡","연면적"=>"171.75㎡","건축면적"=>"126.85㎡","전용면적"=>"171.75㎡","rooms"=>4,"baths"=>2,"facing"=>"south"),
    array("region"=>"논산","price"=>"290000000","hasGarden"=>true,"근처 교통시설"=>array(),"source"=>"https://new.land.naver.com/houses?articleNo=2401181594","location"=>"충청남도 논산시 가야곡면 병암리","대지면적"=>"1227㎡","연면적"=>"242.44㎡","건축면적"=>null,"전용면적"=>"242.44㎡","rooms"=>6,"baths"=>3,"facing"=>"southeast"),
    array("region"=>"광주","price"=>"320000000","hasGarden"=>true,"근처 교통시설"=>array(),"source"=>"https://new.land.naver.com/houses?articleNo=2401896476","location"=>"경기도 광주시 도척면 방도리","대지면적"=>"334㎡","연면적"=>"55.75㎡","건축면적"=>null,"전용면적"=>null,"rooms"=>2,"baths"=>1,"facing"=>"east"),
    array("region"=>"광주","price"=>"600000000","hasGarden"=>true,"근처 교통시설"=>array(),"source"=>"https://new.land.naver.com/houses?articleNo=2403672454","location"=>"경기도 광주시 도척면 방도리","대지면적"=>"746㎡","연면적"=>"192.32㎡","건축면적"=>"167.67㎡","전용면적"=>null,"rooms"=>5,"baths"=>3,"facing"=>"south"),
    array("region"=>"화성","price"=>"600000000","hasGarden"=>true,"근처 교통시설"=>array(),"source"=>"https://new.land.naver.com/houses?articleNo=2401279865","location"=>"경기도 화성시 장안면 덕다리","대지면적"=>"1004㎡","연면적"=>"196.41㎡","건축면적"=>"115.67㎡","전용면적"=>"1004㎡","rooms"=>5,"baths"=>4,"facing"=>"south"),
    array("region"=>"경주","price"=>"360000000","hasGarden"=>true,"근처 교통시설"=>array(),"source"=>"https://new.land.naver.com/houses?articleNo=2402542813","location"=>"경상북도 경주시 현곡면 라원리","대지면적"=>"550㎡","연면적"=>"81.9㎡","건축면적"=>null,"전용면적"=>null,"rooms"=>3,"baths"=>2,"facing"=>"south"),
    array("region"=>"경주","price"=>"290000000","hasGarden"=>true,"근처 교통시설"=>array(),"source"=>"https://new.land.naver.com/houses?articleNo=2401176745","location"=>"경상북도 경주시 외동읍 제내리","대지면적"=>"917㎡","연면적"=>"62㎡","건축면적"=>"62.81㎡","전용면적"=>null,"rooms"=>2,"baths"=>2,"facing"=>"east"),
    array("region"=>"경주","price"=>"330000000","hasGarden"=>true,"근처 교통시설"=>array(),"source"=>"https://new.land.naver.com/houses?articleNo=2401780481","location"=>"경상북도 경주시 외동읍 괘릉리","대지면적"=>"496㎡","연면적"=>"90.91㎡","건축면적"=>"90.91㎡","전용면적"=>null,"rooms"=>2,"baths"=>1,"facing"=>"southeast"),
    array("region"=>"밀양","price"=>"250000000","hasGarden"=>true,"근처 교통시설"=>array(),"source"=>"https://new.land.naver.com/houses?articleNo=2401812360","location"=>"경상남도 밀양시 상남면 연금리","대지면적"=>"732㎡","연면적"=>"66㎡","건축면적"=>"66㎡","전용면적"=>"66㎡","rooms"=>3,"baths"=>1,"facing"=>"south"),
    array("region"=>"제천","price"=>"600000000","hasGarden"=>true,"근처 교통시설"=>array(),"source"=>"https://new.land.naver.com/houses?articleNo=2402473770","location"=>"충청북도 제천시 수산면 능강리","대지면적"=>"551㎡","연면적"=>"98.27㎡","건축면적"=>"102.23㎡","전용면적"=>null,"rooms"=>2,"baths"=>2,"facing"=>"south"),
    array("region"=>"상주","price"=>"650000000","hasGarden"=>true,"근처 교통시설"=>array(),"source"=>"https://new.land.naver.com/houses?articleNo=2402583398","location"=>"경상북도 상주시 신봉동","대지면적"=>"2212㎡","연면적"=>"146.4㎡","건축면적"=>null,"전용면적"=>null,"rooms"=>3,"baths"=>1,"facing"=>"south"),
    array("region"=>"속초","price"=>"500000000","hasGarden"=>true,"근처 교통시설"=>array(),"source"=>"https://new.land.naver.com/houses?articleNo=2402487512","location"=>"강원도 속초시 도문동","대지면적"=>"567㎡","연면적"=>"124.32㎡","건축면적"=>"93.39㎡","전용면적"=>null,"rooms"=>4,"baths"=>2,"facing"=>"south"),
    array("region"=>"인제","price"=>"360000000","hasGarden"=>true,"근처 교통시설"=>array(),"source"=>"https://new.land.naver.com/houses?articleNo=2400650167","location"=>"강원도 인제군 인제읍 원대리","대지면적"=>"1340㎡","연면적"=>"145.74㎡","건축면적"=>"111.84㎡","전용면적"=>null,"rooms"=>3,"baths"=>2,"facing"=>"south"),
    array("region"=>"평창","price"=>"260000000","hasGarden"=>true,"근처 교통시설"=>array(),"source"=>"https://new.land.naver.com/houses?articleNo=2402840376","location"=>"강원도 평창군 방림면 계촌리","대지면적"=>"810㎡","연면적"=>"82.95㎡","건축면적"=>"68.55㎡","전용면적"=>null,"rooms"=>2,"baths"=>2,"facing"=>"southwest"),
    array("region"=>"영주","price"=>"360000000","hasGarden"=>true,"근처 교통시설"=>array(),"source"=>"https://new.land.naver.com/houses?articleNo=2403928274","location"=>"경상북도 영주시 휴천동","대지면적"=>"684㎡","연면적"=>"99.47㎡","건축면적"=>"93.05㎡","전용면적"=>null,"rooms"=>3,"baths"=>2,"facing"=>"south"),
    array("region"=>"영주","price"=>"160000000","hasGarden"=>true,"근처 교통시설"=>array(),"source"=>"https://new.land.naver.com/houses?articleNo=2402557778","location"=>"경상북도 영주시 봉현면 대촌리","대지면적"=>"392㎡","연면적"=>"92.82㎡","건축면적"=>null,"전용면적"=>null,"rooms"=>3,"baths"=>1,"facing"=>"south"),
    array("region"=>"천안","price"=>"500000000","hasGarden"=>true,"근처 교통시설"=>array(),"source"=>"https://new.land.naver.com/houses?articleNo=2401498481","location"=>"충청남도 천안시 동남구 풍세면 풍서리 637-11","대지면적"=>"545㎡","연면적"=>"235.41㎡","건축면적"=>"143㎡","전용면적"=>null,"rooms"=>4,"baths"=>3,"facing"=>"southeast"),
    array("region"=>"전주","price"=>"450000000","hasGarden"=>true,"근처 교통시설"=>array(),"source"=>"https://new.land.naver.com/houses?articleNo=2400261188","location"=>"전라북도 전주시 완산구 원당동","대지면적"=>"776㎡","연면적"=>"192.67㎡","건축면적"=>"128.24㎡","전용면적"=>null,"rooms"=>4,"baths"=>3,"facing"=>"east"),
    array("region"=>"담양","price"=>"850000000","hasGarden"=>true,"근처 교통시설"=>array(),"source"=>"https://new.land.naver.com/houses?articleNo=2404156856","location"=>"전라남도 담양군 담양읍 담빛리","대지면적"=>"377.6㎡","연면적"=>"198.45㎡","건축면적"=>"123.1㎡","전용면적"=>null,"rooms"=>4,"baths"=>3,"facing"=>"south"),
    array("region"=>"담양","price"=>"1720000000","hasGarden"=>true,"근처 교통시설"=>array(),"source"=>"https://new.land.naver.com/houses?articleNo=2403667524","location"=>"전라남도 담양군 수북면 풍수리","대지면적"=>"2805㎡","연면적"=>"242.9㎡","건축면적"=>"242.9㎡","전용면적"=>null,"rooms"=>4,"baths"=>2,"facing"=>"south")
);

$response = array(
    "header" => array(
        "result" => "success",
        "message" => "데이터베이스 데이터 삽입 완료."
    ),
    "body" => array()
);

try {
    $pdo = new PDO(
        "mysql:host="._db_address.";dbname="._db_name.";charset=utf8mb4",
        _db_id,_db_pwd,
        array(
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_EMULATE_PREPARES => false
        )
    );

    foreach($data as $item) {
        $stmt = $pdo->prepare("INSERT INTO `lands`(`region`, `price`, `hasGarden`, `nearbyTransportation`, `source`, `location`, `landArea`, `totalFloorArea`, `buildingArea`, `usableArea`, `rooms`, `baths`, `facing`) VALUES (:region, :price, :hasGarden, :nearbyTransportation, :source, :location, :landArea, :totalFloorArea, :buildingArea, :usableArea, :rooms, :baths, :facing)");
        $stmt->bindValue(':region', $item["region"]);
        $stmt->bindValue(':price', $item["price"]);
        $stmt->bindValue(':hasGarden', $item["hasGarden"]);
        $stmt->bindValue(':nearbyTransportation', $item["근처 교통시설"]);
        $stmt->bindValue(':source', $item["source"]);
        $stmt->bindValue(':location', $item["location"]);
        $stmt->bindValue(':landArea', $item["대지면적"]);
        $stmt->bindValue(':totalFloorArea', $item["연면적"]);
        $stmt->bindValue(':buildingArea', $item["건축면적"]);
        $stmt->bindValue(':usableArea', $item["전용면적"]);
        $stmt->bindValue(':rooms', $item["rooms"]);
        $stmt->bindValue(':baths', $item["baths"]);
        $stmt->bindValue(':facing', $item["facing"]);
        $result = $stmt->execute();
    
        if($result === false) {
            $response = array(
                "header" => array(
                    "result" => "fail",
                    "message" => "데이터베이스 오류가 발생했습니다."
                ),
                "body" => array(
                    "item" => $item
                )
            );
            goto response_handling;
        }
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
echo json_encode($response, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);