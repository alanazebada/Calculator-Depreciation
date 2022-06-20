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
    $cost   = null;
    $ecbu   = null;
    $rv     = null;
    $fyu    = null;
    if (isset($_GET['cost'])) {
        $cost   = $_GET['cost'];
        $ecbu    = $_GET['ecbu'];
        $rv    = $_GET['rv'];
        $fyu     = $_GET['fyu'];
        $result = ($cost-$rv)*($fyu/$ecbu);
    }
    ?>
    <div class="rows">
        <form action="UnitOfActivityUnitsOfUsage.php" method="get">
            <h2><b><center> Units of Activity Depreciation : Units of Usage</center></b></h2>
            <div class="form-group">
                <label>Costing  :</label>
                <input type="number" name="cost" class="form-control" value="<?php echo $cost; ?>" required>
            </div>
            <br>
            <div class="form-group">
                <label>Estimated Could Be Used :</label>
                <input type="number" name="ecbu" class="form-control" value="<?php echo $ecbu; ?>"  required>
            </div>
            <br>
            <div class="form-group">
                <label>Residu Value :</label>
                <input type="number" name="rv" class="form-control" value="<?php echo $rv; ?>"  required>
            </div>
            <br>
            <div class="form-group">
                <label>First Year Used :</label>
                <input type="number" name="fyu" class="form-control" value="<?php echo $fyu; ?>"  required>
            </div>
            <br>
            <button type="button" class="btn btn-danger" onclick="location.href='?'">Clear</button>
            <button type="submit" class="btn btn-primary">Enter</button>
            </br>
        </form>
        <br>
        <?php
        if (isset($_GET['cost'])) {
            $result = "$" .($result);
            echo "<h1><strong>Depreciation Expense : $result million</strong></h1>" ;
        }
        ?>
    </div>
    <h2><strong><a href="UnitOfActivityUnitsOfProduction.php">Units Of Production Depreciation ?</a></strong></h2>
</div>
    </center>
</html>