<?php
function str_getcsv($input, $delimiter = ',', $enclosure = '"', $notUsed = null)
{
	$temp = fopen("php://memory", "rw");
	fwrite($temp, $input);
	fseek($temp, 0);
	$r = fgetcsv($temp, 0, $delimiter, $enclosure);
	fclose($temp);
	return $r;
} 

function convert($row) {
	$data = str_getcsv($row);
	$data = array_map("floatval",$data);
	return($data);
    }


function csvToJson($csv) {
    $rows = explode("\n", trim($csv));
    if (count($rows) == 0) $rows = array(array());
    $last = end($rows);
    $csvarr = array("type" => "FeatureCollection", 
			"features" => array(
					array("type" => "Feature",
						"properties" => array("name" => "LIVETRACK"),
						"geometry" => array( "type" => "LineString",
								"coordinates" => array()
						),
					),					
				),
			);
    $csvarr['features'][0]['geometry']['coordinates']= @array_map("convert",$rows);
    $json = json_encode($csvarr);

    return $json;
}

if (isset($_GET['date'])) {
	$ymd = explode("-",$_GET['date']);
	$json = csvToJson(@file_get_contents(date('Y-m-d',mktime(0,0,0,$ymd[1],$ymd[2],$ymd[0])).".txt"));
} else {
	$json = csvToJson(@file_get_contents(date('Y-m-d').".txt"));
}
header('Content-Type: application/json');
header('Cache-Control: no-cache');
echo $json;
?>
