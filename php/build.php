<?php


$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $Pencarian = test_input($_POST["Pencarian"]);
   $Macet = test_input($_POST["Macet"]);
   $Kecelakaan = test_input($_POST["Kecelakaan"]);
   $Tutup = test_input($_POST["Tutup"]);
   $Algoritma = test_input($_POST["Algoritma"]);
}

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
			 $myFile = "ListCategories.txt";
$fh = fopen($myFile, 'w') or die("can't open file");
$enter = "\n";
fwrite($fh, $Pencarian);
fwrite($fh, $enter);
fwrite($fh, $Macet);
fwrite($fh, $enter);
fwrite($fh, $Kecelakaan);
fwrite($fh, $enter);
fwrite($fh, $Tutup);
fwrite($fh, $enter);
fwrite($fh, $Algoritma);
fclose($fh);

$result = shell_exec("java -jar StringMatching.jar");


$url = 'hasil.php';
header("Location: $url");
?>