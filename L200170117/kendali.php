<html>
<head>
<title>variabel</title>
<body>
<H1>Nilai</H1>
<form method='post' action='kendali.php'>
<p>Masukkan Nilai Angka (0-100) : <input
type='text' name='nilai' size='3'></p>
<p><input type='submit' value='proses'
name='submit'></p>
</form>
<?php
error_reporting (E_ALL ^ E_NOTICE);
$nilai = $_POST['nilai'];
$submit = $_POST['submit'];
if($submit){
    $huruf='"nilai kosong/belum diisi"';
}elseif($nilai<=20){
    $huruf='E';
}elseif($nilai<=40){
    $huruf='D';
}elseif($nilai<=60){
    $huruf='C';
}elseif($nilai<=80){
    $huruf='B';
}elseif($nilai<=100){
    $huruf='A';
}else{
    $huruf='"Nilai yang dimasukkan salah!"';
}
echo"Nilai angka adalah $nilai</br>";
echo"Maka nilai huruf adalah $huruf";
?>
</body>
</head>
</html>