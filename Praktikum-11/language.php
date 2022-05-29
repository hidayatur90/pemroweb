<?php

require_once('db_con.php');

$db = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);
if($db->connect_error){
    http_response_code(500);
    die("Connection Failed: {$db->connect_error}");
}

$query = "SELECT * FROM language ORDER BY name";
$sql = $db->query($query);
$data = [];

while($row = $sql->fetch_assoc()){
    array_push($data, $row);
}

header("Content-Type: application/json");
echo json_encode($data);

?>