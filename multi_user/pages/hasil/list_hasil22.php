<?php
include "koneksi.php";
?>

<hr>
    <b>List File PDF</b>
    <form action="kuesioner.php" method="POST"> 
        <table width="800" border='0' cellpadding="2" cellspacing="1" bgcolor="#000000">
            <tr>
                <th bgcolor="#ffffff">Judul</th>
                <th bgcolor="#ffffff" width="100">View</th>
                <th bgcolor="#ffffff" width="100">Hapus</th>
                <th bgcolor="#ffffff" width="30">Persetujuan</th>
            </tr>
    <?php
            $query = mysqli_query($koneksi,"SELECT * FROM data_file ORDER BY id DESC");
            while($data=mysqli_fetch_array($query))
            {
    ?>
        <tr>
            <td bgcolor="#ffffff"><?php echo $data['judul'];?></td>
            <th bgcolor="#ffffff"><a href="pages/upload/view.php?id=<?php echo $data['id'];?>">Lihat File</a></th>
            <th bgcolor="#ffffff"><a href="pages/upload/hapus.php?id=<?php echo $data['id'];?>">Hapus File</a></th>
            <!-- <th bgcolor="#ffffff"><a href="pages/persetujuan/setuju.php?id=<?php echo $data['id'];?>">Ya </a></th>
            <th bgcolor="#ffffff"><a href="pages/persetujuan/tidak.php?id=<?php echo $data['id'];?>">Tidak</a></th> -->
            <td><input type="radio" name="jawaban" value="Sulit"/>Ya</td>
            <td><input type="radio" name="jawaban" value="Sulit"/>Tidak</td>
        </tr>
    <?php
}
    ?>  
</table>
</body>
</html>