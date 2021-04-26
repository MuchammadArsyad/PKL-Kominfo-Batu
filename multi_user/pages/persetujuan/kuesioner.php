<?php
	include "koneksi.php";
	if ($_POST['jawab'] == "Jawab") {
	$jawaban	=$_POST['jawaban'];
	
	$link = mysqli_connect('localhost', 'root', '', 'user_level');
	mysqli_query($link, "INSERT INTO persetujuan (jawaban) VALUES ('$jawaban')");
	$id = mysqli_insert_id($link);
	// $insert =mysqli_query("INSERT INTO persetujuan (jawaban) VALUES ('$jawaban')");
		if($insert){
			?>
			<script language="JavaScript">
				alert('Jawaban berhasil dikirim!');
				document.location.href="pages/persetujuan/index.php";
			</script>
		<?php
		}
		else {
			echo "<b>Oops!</b> 404 Error Server.";
		}
	}
?>l.