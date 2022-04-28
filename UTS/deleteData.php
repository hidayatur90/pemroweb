<?php
require_once("db_config.php");
 
$id = $_GET['id'];

$result = mysqli_query($db, "DELETE FROM uts WHERE id=$id");
 
header("Location:index.php");
?>