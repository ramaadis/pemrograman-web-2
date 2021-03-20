<!DOCTYPE html>
<html>
<head>
	<title> Perkalian </title>
</head>
<body>
<?php 
$varT = 12;
$varG = 1;

echo "Tabel Perkalian<br>";
echo ("==============");
echo ("<br>");

for ($i = 0; $i <40;$i++){
    echo "$varT x $varG";
    echo "  =   ";
    echo $hasil= $varT * $varG ;
    echo "<br>";

    $varG += 2;
}


?>
</body>
</html>