<?php
	$file = file_get_contents('data.txt');
	$array = explode(',', $file);
	$data= array(
    "rValue" => $array[0],
    "led1" => $array[1],
    "led2" => $array[2],
    "led3" => $array[3]
);
 
echo json_encode($data);

?>