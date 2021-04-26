<html>
<head>
	<title>Tutorial Membuat Radio Button di PHP MySQL</title>
</head>
<body>
	<h3>Form Input Radio Button</h3>
		<form action="kuesioner.php" method="POST"> 
			<table border="0">
				<tr>
					<td>1. Sejauh pemahaman Anda, seberapa mudah aplikasi ini digunakan?</td>
				</tr>
				<tr>
					<td><input type="radio" name="jawaban" value="Sangat Sulit" checked />Sangat Sulit</td>
				</tr>
				<tr>
					<td><input type="radio" name="jawaban" value="Sulit"/>Sulit</td>
				</tr>
				<tr>
					<td><input type="radio" name="jawaban" value="Biasa"/>Biasa</td>
				</tr>
				<tr>
					<td><input type="radio" name="jawaban" value="Mudah"/>Mudah</td>
				</tr>
				<tr>
					<td><input type="radio" name="jawaban" value="Sangat Mudah"/>Sangat Mudah</td>
				</tr>
				<tr>
					<td>&nbsp;</td>
				</tr>
				<tr>
					<td><input type="submit" name="jawab" value="Jawab"/></td>
				</tr>
			</table>
		</form>
</body>
</html>