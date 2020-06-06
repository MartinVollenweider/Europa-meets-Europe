<?php 
    require_once("keys.php");
	// Access main data images
    $dataURL = "https://images-api.nasa.gov/search?q=europa&media_type=image";
    $allData = file_get_contents($dataURL);
    $jsonData = json_decode($allData, true);
    $randomImage = mt_rand(0,count($jsonData['collection']['items'])); // number of pics
    $dataURL = $jsonData['collection']['items'][$randomImage]['href']; // fixed URL for Details
    $dataURL = str_replace ("http://", "https://", $dataURL);   

    // Access detail data
    $allData = file_get_contents($dataURL);
    $jsonData = json_decode($allData, true);
    $out = str_replace ("http://", "https://", $jsonData[0]);  // is always 0, the best picture
    //$out = "https://images-assets.nasa.gov/image/PIA20025/PIA20025~orig.jpg";
    // Find out extension jpg or png. Not necessary, always jpg 
    $extension = substr($out, -3);
    if ($extension == "tif" || $extension == "iff" || $extension == "") {
        $imageName = "image.jpg";
    } else {
        $imageName = 'tmpImg/image.'.$extension;
        // copy image to server    
        copy($out, $imageName); 
    }

   // Access main data webcam: Paris, Nerlin, Rome, London, Oslo, Zürich and Chur
	$lat = ["48.858093","52.518623","41.890251","51.505554","59.911491","47.3769", "46.84986"]; 
		$act = mt_rand(0, count($lat)-1 );
    $lon = ["2.294694","13.376198", "12.492373", "-0.075278", "10.757933","8.5417","9.53287"];

    $dataURL = "https://api.windy.com/api/webcams/v2/list/nearby=".$lat[$act].",".$lon[$act].",5?show=webcams:location,image&key=".$keyCam;
    $allData = file_get_contents($dataURL);
    $jsonData = json_decode($allData, true);
    $randomImage = mt_rand(0,count($jsonData['result']['webcams'])); // number of pics
    $dataURL = $jsonData['result']['webcams'][$randomImage]['image']['current']['icon']; // fixed URL for Details
	$camName = str_replace('icon', 'full', $dataURL );

    echo $imageName."&curCam=".$camName."&key=".vPgvq9sLzjWNfMmo2OZEekCcSWYsUuAs;    
?>