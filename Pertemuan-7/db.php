<?php
define("HOST","localhost");
define("USER","202410101057");
define("PASS","secret");
define("DB","uas202410101057");

$db = mysqli_connect(HOST,USER,PASS, DB);
if ($db->connect_error) {
    die("Connection Lost");
}


