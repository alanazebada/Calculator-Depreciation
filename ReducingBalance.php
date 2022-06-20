<!DOCTYPE html>
<!--
Template Name: Chillaid
Author: <a href="https://www.os-templates.com/">OS Templates</a>
Author URI: https://www.os-templates.com/
Copyright: OS-Templates.com
Licence: Free to use under our free template licence terms
Licence URI: https://www.os-templates.com/template-terms
-->
<html lang="">
<!-- To declare your language - read more here: https://www.w3.org/International/questions/qa-html-language-declarations -->
<head>
<title>Tugas Perancangan Sistem Enterprise</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<link rel="shortcut icon" href="images/navicon.png" type="image/x-icon">
</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row1">
  <header id="header" class="hoc clear">
    <div id="logo" class="fl_left"> 
      <!-- ################################################################################################ -->
      <h1 class="logoname"><a href="index.html">Calculator<span>Depreciation</span></a></h1>
      <!-- ################################################################################################ -->
    </div>
    <nav id="mainav" class="fl_right"> 
      <!-- ################################################################################################ -->
      <ul class="clear">
        <li class="active"><a href="index.html">Home</a></li>
    </nav>
  </header>
</div>
<center>
<div class="container bg-dark text-white">
    <?php
    $nbv=null;
    $rv=null;
    $rate=null;
    if (isset($_GET['nbv'])) {
        $nbv=$_GET['nbv'];
        $rv=$_GET['rv'];
        $rate=$_GET['rate'];
        $rt=$rate/100;
        $result=($nbv-$rv)*$rt;
    }
    ?>
    <div class="rows">
        <form action="ReducingBalance.php" method="get">
            <h2><b><center> Reducing Balance Depreciation </center></b></h2>
            <div class="form-group">
                <label>Net Book Value  :</label>
                <input type="number" name="nbv" class="form-control" value="<?php echo $nbv; ?>" required>
            </div>
            <br>
            <div class="form-group">
                <label>Residual Value :</label>
                <input type="number" name="rv" class="form-control" value="<?php echo $rv; ?>"  required>
            </div>
            <br>
            <div class="form-group">
                <label>Rate(%) :</label>
                <input type="number" name="rate" class="form-control" value="<?php echo $rate; ?>"  required>
            </div>
            <br>
            <button type="button" class="btn btn-danger" onclick="location.href='?'">Clear</button>
            <button type="submit" class="btn btn-primary">Enter</button>
            </br>
        </form>
        <br>
        <?php
        if (isset($_GET['nbv'])) {
            echo "<h1><strong>Depreciation : $result</strong></h1>" ;
        }
        ?>
    </div>

</html>