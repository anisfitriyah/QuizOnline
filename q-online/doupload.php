<?php include = ("koneksi.php") ?>
<?php 
$namafolder= "../images/"; //tempat menyimpan file 
if (!empty($_FILES["nama_file"]["tmp_name"])) {     
$jdeskripsi=$_FILES['deskripsi']['type'];     
$file_gambar=$_POST['file_gambar'];     
if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/gif" || $jenis_gambar=="image/png")     {                    
$gambar = $namafolder . basename($_FILES['nama_file']['name']);                
if (move_uploaded_file($_FILES['nama_file']['tmp_name'], $gambar)) {             
echo "Gambar berhasil dikirim ".$gambar;             
$sql="insert into galeri (deskripsi, file_gambar) values ('{$}','{$gambar}')";             
$result = mysqli_query ($koneksi, $sql);        
} else {            
echo "Gambar gagal dikirim";         
}    
} else {         
echo "Jenis gambar yang anda kirim salah. Harus .jpg .gif .png";    
} 
} else {     
echo "Anda belum memilih gambar"; 
}
 
?>