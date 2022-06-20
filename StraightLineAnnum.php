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
<div class="container bg-dark text-white">
    <?php
        $cost   = null;
        $rv     = null;
        $uv     = null;
        if (isset($_GET['cost'])) {
            $cost       = $_GET['cost'];
            $rv         = $_GET['rv'];
            $uv         = $_GET['uv'];
            $result     = ($cost-$rv)/$uv;
        }
    ?>
    <center>
    <h2><strong>Straight Line Depreciation : Depreciation per Annum </strong></h2>
    <div class="rows">
        <form action="StraightLineAnnum.php" method="get">
            <div class="form-group">
                <label>Cost($) :</label>
                <input type="number" name="cost" class="form-control" padding-right:10000px; value="<?php echo $cost; ?>" required>
            </div>
            <br>
            <div class="form-group">
                <label>Residu Value($) :</label>
                <input type="number" name="rv" class="form-control" value="<?php echo $rv; ?>"  required>
            </div>
            <br>
            <div class="form-group">
                <label>Useful Value(Years) :</label>
                <input type="number" name="uv" class="form-control" value="<?php echo $uv; ?>"  required>
            </div>
            <br>
            <button type="button" class="btn btn-danger" onclick="location.href='?'">Clear</button>
            <button type="submit" class="btn btn-primary">Enter</button>
            </br>
        </form>
        <br>

        <?php
            if (isset($_GET['cost'])) {
                $result = "$" .$result;
                echo "<h1><strong>Depreciation per Annum : <br>$result</strong></h1>";
            }
        ?>
    </div>
    <h2><strong><a href="StraightLineMonth.php">Depreciation per Month ?</a></strong></h2>
</div>
<center>
</center>
</html>