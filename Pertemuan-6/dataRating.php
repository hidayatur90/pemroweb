<?php

require_once("./db.php");

$rating = $_GET["rating"];

if (strlen($rating) > 0)
{
    $sql = "SELECT * FROM pertemuan6
                WHERE 
            rating = '{$rating}'";
}

else if (strlen($rating) == 0)
{
    $sql = "SELECT * FROM pertemuan6";
}

$result = $db->query($sql);

$data = [];
while ($row = $result->fetch_assoc()) {
    array_push($data, $row);
}
header("Content-Type: aplication/json");
echo json_encode($data);

