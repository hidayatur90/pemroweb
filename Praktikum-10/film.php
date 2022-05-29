<?php

const DB_HOST = 'localhost';
const DB_USER = '202410101057';
const DB_PASS = 'secret';
const DB_NAME = 'uas202410101057';

sleep(2);
$db = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);
if($db->connect_error){
    http_response_code(500);
    die("Connection Failed: {$db->connect_error}");
}

$begin = isset($_GET['begin']) ? $_GET['begin'] : 0;
$query = "SELECT * FROM film LIMIT {$begin}, 12";
$sql = $db->query($query);
$data = [];

while($row = $sql->fetch_assoc()){
    if(file_exists("assets/{$row['film_id']}.jpg")){
        $row['img'] = "assets/{$row['film_id']}.jpg";
    } else{
        $row['img'] = "assets/no-image.png";
    }
    array_push($data, $row);
}

header("Content-Type: application/json");
echo json_encode($data);

?>