<?php
define("HOST","localhost");
define("USER","root");
define("PASS","");
define("DB","pertemuan5");

$db = new mysqli(HOST,USER,PASS, DB);
if ($db->connect_error) {
    die("Koneksi Gagal");
}