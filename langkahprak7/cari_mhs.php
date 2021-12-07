<?php 
include 'koneksi.php';
?>
<h3>Form Pencarian Dengan PHP MAHASISWA</h3>
<form action="" method="get">
<label>Cari :</label>
<input type="text" name="cari">
<input type="submit" value="Cari">
</form>
<?php 
if(isset($_GET['cari'])){
$cari = $_GET['cari'];
echo "<b>Hasil pencarian : ".$cari."</b>";
}
?>
<table border="1">
<tr>
<th>No</th>
<th>NIM</th>
<th>Nama</th>
<th>jkel</th>
<th>alamat</th>
<th>tgllhr</th>
<th>email</th>
</tr>
<a href="lap_mhs.php" target="_BLANK">PRINT</a>
<?php 
if(isset($_GET['cari'])){
$cari = $_GET['cari'];
$sql="select * from mahasiswa where nim like'%".$cari."%'";
$tampil = mysqli_query($con,$sql);
}else{
$sql="select * from mahasiswa";
$tampil = mysqli_query($con,$sql);
}
$no = 1;
while($r = mysqli_fetch_array($tampil)){
?>

<tr>
<td><?php echo $no++; ?></td>
<td><?php echo $r['nim']; ?></td>
<td><?php echo $r['nama']; ?></td>
<td><?php echo $r['jkel']; ?></td>
<td><?php echo $r['alamat']; ?></td>
<td><?php echo $r['tgllhr']; ?></td>
<td><?php echo $r['email']; ?></td>
</tr>
<?php } ?>
</table>