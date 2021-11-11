<?php
$array = [];
function saveData($data)
{
    $dataJson = json_encode($data);
    file_put_contents("used.json",$dataJson);
}
function loadData() {
    $dataJson = file_get_contents("used.json");
    $data = json_decode($dataJson,true);
    return $data;
}
function addData($request) {
    $array = loadData();
    $number = $request["number"];
    array_push($array,$number);
    sapxep($array);
    saveData($array);

}
function sapxep($arr){
    sort($arr);
    print_r($arr);
}

