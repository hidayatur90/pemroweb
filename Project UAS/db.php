<?php
define("HOST","localhost");
define("USER","root");
define("PASS","");
define("DB","books");

$db = mysqli_connect(HOST,USER,PASS, DB);
if ($db->connect_error) {
    die("Connection Lost");
}


