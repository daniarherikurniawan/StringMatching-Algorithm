<!DOCTYPE html>
<html>
<head>

<link href='http://fonts.googleapis.com/css?family=Arvo:700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="foundation.css">
<link rel="stylesheet" type="text/css" href="normalize.css">
<link rel="stylesheet" type="text/css" href="foundation.min.css">
<link rel="stylesheet" type="text/css" href="mystyle.css">
<script src="js/vendor/jquery.js"></script>
  <script src="js/foundation/foundation.js"></script>
  <script src="js/foundation/foundation.topbar.js"></script>
  

  <script>
    $(document).foundation();
  </script>

</head>

<body>


<br> <br>
<h1> HASIL </h1>

<br><br>

<nav class="top-bar" data-topbar>
  <ul class="title-area">
    <li class="name">
      <h1><a href="test.php">HOME</a></h1>
    </li>
    <li class="toggle-topbar menu-icon"><a href="test.php">HOME</a></li>
  </ul>

  <section class="top-bar-section">
    

    <!-- Left Nav Section -->
    <ul class="left">
      <li><a href="perihal.php">PERIHAL</a></li>
    </ul>
  </section>
</nav>

<?php
function startsWith($haystack, $needle)
{
    return $needle === "" || strpos($haystack, $needle) === 0;
}


$file = fopen("Hasil.txt", "r") or exit("Unable to open file!");
//Output a line of the file until the end is reached
$i = 1;

while(!feof($file)) {
	 $string = fgets($file);
	 $words = explode(" ", $string);
	 $twitter = "https://twitter.com/";
	 
	 
	 echo '<div></div>';
			echo '<div class="hasil">';
	 foreach ($words as $str) 
	 {
		if(strlen($str) > 3){
			 if($str[0] == '@')
			 {
				
				echo '<a href="'.$twitter.$str.'" style = "color:white">'.$str.'</a>';
			 }
			 else if($str[0] == '#')
			 {
				echo '<a href="'.$twitter.$str.'" style = "color:white">'.$str.'</a>';
			 }
			 else if(strpos($str, "http") !== FALSE)
			 {
				echo '<a href="'.$str.'" style = "color:white">'.$str.'</a>';
			 }
			 else
			 {
				echo $str;
			 }
			 
			 echo ' ';
		}else{
			echo $str;
			echo ' ';
		}
	}
	echo '<br><br>';
	echo '</div>';
}
fclose($file);
?>








</body>
</html>