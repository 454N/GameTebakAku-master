
<!doctype html>
 
<html lang="id">
  <head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Tebak Siapakah Aku?</title>
  <link rel="shortcut icon" href="../../img/game.png">
 <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
</head>
<style>
.navbar {
    padding-top: 1px;
    padding-bottom: 1px;
    border: 0;
    border-radius: 0;
    margin-bottom: 0;
    font-size: 12px;
    letter-spacing: 5px;
	
}
#main{
	margin-right:14%;
}
p{
	color:#ffffff;
	font-size:20px;
}
#header1{
	margin-left:43%;
}
#logo{
	margin-top:-10px;
	margin-bottom:18px;
	margin-left:30px;
}
</style>
<div style="position: relative; width: 100%">
<center>
<nav class="navbar navbar-default">

     <div id="logo"><a class="navbar-brand" href=""><img src="../../img/log3.png" style="float:left"></a></div>
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
		<li><a href="../../home.php">BERANDA</a></li>
        <li><a href="../../about.php">TENTANG</a></li>
        <li><a href="../../contact.php">KONTAK</a></li>
        <li><a href="../../privacy.php">PRIVASI</a></li>
		</ul>
    </div>
  </div>
</nav>


<body style="background-image:url(../../img/background.png)"width="100%" height="90%">
<form align="center" method="POST">

<div id="header1"><img src="../../img/game.png" style="float:left"><img src="../../img/logo.png" style="float:right"></div>
</br></br></br></br></br></br></br></br></br></br></br></br></br></br>
<?php
session_start();
$nilaidua1 = $_SESSION['nilaidua1'];
$nilaidua2 = $_SESSION['nilaidua2'];
$nilaidua3 = $_SESSION['nilaidua3'];
$nilaidua4 = $_SESSION['nilaidua4'];
$nilaidua5 = $_SESSION['nilaidua5'];
$nilaidua6 = $_SESSION['nilaidua6'];
$nilaidua7 = $_SESSION['nilaidua7'];
$nilaidua8 = $_SESSION['nilaidua8'];
$nilaidua9 = $_SESSION['nilaidua9'];


switch ($nilaidua9) {
  case '10':
  case '0':
    break;
  
  default:
  header('location: gametebakgambar9.php');    
    break;
}

include "../pilihan2.php";
include "../jawaban.php";

pilihan10();

if (isset($_POST['proses'])) {
  $convert = $_POST['masuk'] ;

  $masuk = strtoupper($convert);

if ($masuk == $pdua10) {
  $nilai = 10;
  $_SESSION['nilaidua10'] = $nilai;
  header('location: gametebakgambar-nilaileveldua.php');
} elseif ($masuk == false) {
   echo "<p class='bg-info'>Anda Belum Memasukan Jawaban</p>";
} else {
  $nilai = 0;
  $_SESSION['nilaidua10'] = $nilai;
  header('location: gametebakgambar-nilaileveldua.php');

}
}
include "backsound.html";
include "../../pengaturan/footer.html";
?>

