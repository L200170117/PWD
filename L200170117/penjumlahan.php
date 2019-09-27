<html>
<head>
<title>penjumlahan</title>
</head>
<body>
<form method='post' action='penjumlahan.php'>
<p>Nilai A adalah : <input type='text' name='A' size='3'></p>
<p>Nilai B adalah : <input type='text' name='B' size='3'></p>
<p><input type='submit' value='jumlahkan' name='submit'></p>
</form>
<?php
error_reporting (E_ALL ^ E_NOTICE);
$a = $_POST['A'];
$b = $_POST['B'];
$submit = $_POST['submit'];
if($submit){
    $hasil = $a+$b;
    echo"Nilai A $a</br>";
    echo"Nilai B $b</br>";
    echo"jadi nilai A tambah B adalah $hasil";
}
?>
</body>
</html>