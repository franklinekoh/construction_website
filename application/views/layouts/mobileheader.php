<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title><?= isset($title)? $title: untitled?></title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?=  base_url('assets/img/favicon.png')?>" type="image/x-icon">

    <!-- Font awesome -->
    <link href="<?=  base_url('assets/css/font-awesome.css')?>" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="<?=  base_url('assets/css/bootstrap.css')?>" rel="stylesheet">   
    <!-- Slick slider -->
    <link rel="stylesheet" type="text/css" href="<?=  base_url('assets/css/slick.css')?>">    
    <!-- Date Picker -->
    <link rel="stylesheet" type="text/css" href="<?=  base_url('assets/css/bootstrap-datepicker.css')?>">    
    <!-- Fancybox slider -->
    <link rel="stylesheet" href="<?=  base_url('assets/css/jquery.fancybox.css')?>" type="text/css" media="screen" /> 
    <!-- Theme color -->
    <link id="switcher" href="<?=  base_url('assets/css/theme-color/red-theme.css')?>" rel="stylesheet">     

    <!-- Main style sheet -->
    <link href="<?=  base_url('style.css')?>" rel="stylesheet">    

   
    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Tangerine' rel='stylesheet' type='text/css'>        
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Prata' rel='stylesheet' type='text/css'>
    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <!--<body>-->  
  <!-- Pre Loader -->
  <div id="aa-preloader-area">
    <div class="mu-preloader">
      <img src="<?=  base_url('assets/img/loader.gif')?>" alt="">
    </div>
  </div>
  <!--START SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#">
      <i class="fa fa-angle-up"></i>
      <span>Top</span>
    </a>
  <!-- END SCROLL TOP BUTTON -->

  <!-- Start header section -->
  <header id="mu-header">  
    <nav class="navbar navbar-default mu-main-navbar" role="navigation">  
      <div class="container">
        <div class="navbar-header">
          <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- LOGO -->                                                        
          <a class="navbar-brand" href="<?= base_url('index')?>"><img src="<?=  base_url('assets/img/logo.png')?>" alt="Logo img" style=""></a> 
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul id="top-menu" class="nav navbar-nav navbar-right mu-main-nav">
            <li><a href="#mu-slider">HOME</a></li>
            <li><a href="#mu-about-us">ABOUT US</a></li>                       
            <li><a href="#mu-restaurant-menu">PORTFOLIO</a></li>                       
            <li><a href="#mu-reservation">COMPANY PROFILE</a></li>                       
            <li><a href="#mu-gallery">GALLERY</a></li>
            <li><a href="#mu-chef">BOARD OF DIRECTORS</a></li>
            <li><a href="#mu-contact">CONTACT</a></li> 
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="">SERVICES <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">                
                <li><a href="#mu-about-us">MECHANICAL ENGINEERING PRODUCTION</a></li>
                <li><a href="#mu-about-us">METAL FABRICATION</a></li>
                <li><a href="#mu-about-us">ENGINEERING FOUNDRY</a></li>    
                <li><a href="#mu-about-us">DROP FORGING AND BLACKSMITHING</a></li> 
                <li><a href="#mu-about-us">CIVIL ENGINEERING</a></li>
                <li><a href="#mu-about-us">AFRO-RELIANT AND ALTERNATIVE POWER GENERATION</a></li>
              </ul>
            </li>
          </ul>                            
        </div><!--/.nav-collapse -->       
      </div>          
    </nav> 
  </header>
  <!-- End header section -->
  <?php

if ($this->session->flashdata('error')!= '') {?>
<div class="container">
    <?php
    echo '<div class="alert alert-danger">' . $this->session->flashdata('error') .'</div>';?> 
</div>
 <?php } if ($this->session->flashdata('success') != '') { ?>
        <div class="container">
            <?php 
            echo '
            <div class="alert alert-success">' . $this->session->flashdata('success') . '</div>';?>
        </div>
            <?php 
    
}

?>
 