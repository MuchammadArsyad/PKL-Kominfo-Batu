<?php
include "koneksi.php";
?>
<!DOCTYPE html>
<html>
<head>
 <title>Upload Berkas </title>
 <style type="text/css">
 body {
  font-family: verdana;
  font-size: 12px;
 }
 a {
  text-decoration: none;
  color: #3050F3;
 }
 a:hover {
  color: #000F5E;
 } 
</style>
</head>
<body>

<h1>Upload Berkas Proposal</h1>
<hr>
<form action="pages/upload/upload.php" method="POST" enctype="multipart/form-data">
<table width="600" border="0">
<tr>
 <td width="100">Judul File</td>
 <td><input type="text" name="judul" placeholder="Judul" required></td>
</tr>
<tr>
 <td width="100">File PDF</td>
 <td><input type="file" name="nama_file" required></td>
</tr>
<tr>
 <td width="100"></td>
 <td><input type="submit" value="Upload File"></td>
</tr>
</table>
</form>



</body>
</html>