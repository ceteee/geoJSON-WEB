<?php
include "php/connection.php";

$sql = 'SELECT * FROM datarelawan ';

$rs = $conn->query($sql);
if (!$rs) {
    echo 'An SQL error occured.\n';
    exit;
}

$geojson = array (
	'type'	=> 'FeatureCollection',
	'features'	=> array()
);

while ($row = mysqli_fetch_assoc($rs)) {
	$properties = $row;
	unset($properties['geoloc']);
	$feature = array(
		'type'	=> 'Feature',
		'geometry' => array(
			'type' => 'Point',
			'coordinates' => array(
					$row['geoloc']
					)
			),
		'properties' => $properties
	);
    array_push($geojson['features'], $feature);
    echo "$row['geoloc']";
}

header('Content-type: application/json');
echo json_encode($geojson, JSON_PRETTY_PRINT);

//for local json files use code below

/*$fp = fopen('data.json', 'w');
fwrite($fp, geoJson($json));
fclose($fp);*/

$conn = NULL;



?>