<html>
<head>
<title>bilangan</title>
</head>
<body>
<form method='post' action='tugas2.php'>
<p>Nilai A adalah : <input type='text' name='A' size='3'></p>
<p><input type='submit' value='cek' name='submit'></p>
</form>
<?php
error_reporting (E_ALL ^ E_NOTICE);
$a = $_POST['A'];
$submit = $_POST['submit'];
if($submit){
    $a1=$a%2;
    if($a1=='1'){
    echo"jadi nilai A adalah bilangan ganjil";
}
else{
    echo"jadi nilai A adalah bilangan genap";
}
}
?>
</body>
</html>