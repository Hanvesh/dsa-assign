<?php
$json = file_get_contents("inverted.txt");
$arr=array();
$json1=str_replace(array("?","!",",",";",":","."), "", $json);
$lines = explode("\n", $json1);
foreach ($lines as $line){
    $ags = explode(" ",$line);
    foreach($ags as $a) {
        if (!array_search($a, $arr)) {
            array_push($arr, $a);
            break;
        }
    }
}
$json = json_encode($arr);
file_put_contents("a-z.txt",print_r($arr,true));