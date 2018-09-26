<?php

$input = count($_POST['makanan']);
for($i=0; $i<$input; $i++){
	echo$_POST['makanan'][$i]."<br>";
}

$input =array($_POST['genre']);
foreach ($_POST['genre'] as $input){
	echo "genre : ".$input."<br>";
}
echo"<br>";

$input =array($_POST['wisata']);
foreach ($_POST['wisata'] as $input){
	echo "wisata : ".$input."<br>";
}

$file= $_FILES['dokumen'];
$nama_file= $file['name'];
$nama_tmp = $file['tmp_name'];
$upload_dir ="upload/";
move_uploaded_file($nama_tmp,$upload_dir.$nama_file);
echo"File berhasil diupload."
?>
<img src="upload/<?php echo $nama_file; ?>">
<a href="TAlogin.html"><input type="submit" name="delete" value="delete"></a>