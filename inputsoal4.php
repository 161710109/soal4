<?php
require_once 'soal4.php';

$bio = new ayam ('kukuruyuk','2kg','bangkok');
echo"<br />";
echo"suara ayam  :".$bio->get_suara();
echo"<br />";
echo"berat ayam :".$bio->get_berat();
echo"<br />";
echo"jenis ayam :".$bio->get_jenis();
echo"<br />";
?>