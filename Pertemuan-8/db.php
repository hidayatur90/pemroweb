<?php
define("HOST","localhost");
define("USER","root");
define("PASS","");
define("DB","sakila");

$db = mysqli_connect(HOST,USER,PASS, DB);
if ($db->connect_error) {
    die("Connection Lost");
}


