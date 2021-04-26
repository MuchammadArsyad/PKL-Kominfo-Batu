<?php
$host="localhost";
$user="root";
$password="";
$db="user_level";

$kon = mysqli_connect($host,$user,$password,$db);
if (!$kon){
	  die("Koneksi gagal:".mysqli_connect_error());
}
?>






<!-- <?php
// isi nama host, username mysql, dan password mysql anda
$koneksi = new mysqli('localhost', 'root', '', 'user_level');
?> -->
