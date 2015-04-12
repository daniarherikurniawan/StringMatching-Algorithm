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
  <!-- Other JS plugins can be included here -->

  <script>
    $(document).foundation();
  </script>

</head>

<body>


<br> <br>
<h1> STRETCHING </h1>

<br><br>

<nav class="top-bar" data-topbar>
  <ul class="title-area">
    <li class="name">
      <h1><a href="#">HOME</a></h1>
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

<center>
<br><br>
<form method="post" action="build.php"> 
  <div class="row">
    <div class="small-8">
      <div class="row">
Pencarian Twitter:<br><br><input type="text" name="Pencarian" placeholder="Cari">
    </div>
      </div>
    </div>

  <div class="row">
    <div class="small-8">
      <div class="row">
Keyword Macet:<br><br><input type="text" name="Macet" placeholder="Keyword">
    </div>
      </div>
    </div>

  <div class="row">
    <div class="small-8">
      <div class="row">
Keyword Kecelakaan:<br><br><input type="text" name="Kecelakaan" placeholder="Keyword"> 
    </div>
      </div>
    </div>

  <div class="row">
    <div class="small-8">
      <div class="row">

Keyword Tutup:<br><br><input type="text" name="Tutup" placeholder="Keyword">

    </div>
      </div>
    </div>

Algoritma: 
<input type="radio" name="Algoritma" value="BM">Boyer-Moore
<input type="radio" name="Algoritma" value="KMP">KMP	
<br><br>
<li><input class ="button" type="submit" value="Analisis" style="width:100px; height: 35px;margin:0;padding: 5px 15px;"> </li>
</form>
<br>



<br><br>





<center>





</body>
</html>