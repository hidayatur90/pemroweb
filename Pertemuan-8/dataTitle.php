<?php
require_once("./db.php");

$search = $_GET["search"];

$sql = "SELECT * FROM film
            WHERE 
        title LIKE '%{$search}%'";

$result = $db->query($sql);

$data = [];
while ($row = $result->fetch_assoc()) {
    array_push($data, $row);
}
header("Content-Type: aplication/json");
echo json_encode($data);

