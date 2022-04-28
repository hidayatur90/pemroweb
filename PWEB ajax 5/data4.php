<?php

require_once("./db.php");

$keyword = $_GET["keyword"];

$sql = "SELECT * FROM grid_film
            WHERE 
        title LIKE '%{$keyword}%'";

$result = $db->query($sql);

$data = [];
while ($row = $result->fetch_assoc()) {
    array_push($data, $row);
}
header("Content-Type: aplication/json");
echo json_encode($data);

