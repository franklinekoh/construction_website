<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title><?= isset($title)?'services | '. $title: untitled?></title>

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

</head>
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
          <a class="navbar-brand" href="<?= base_url('index')?>"><img src="<?= base_url('assets/img/logo.png')?>" alt="Logo img"></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul id="top-menu" class="nav navbar-nav navbar-right mu-main-nav">
              <li><a href="<?= base_url('index')?>">HOME</a></li>  
              <?php
              if ($title === 'waste to energy') {
                  ?>
               <li class="active" ><a href="" id="link">WASTE TO ENERGY</a></li>
              <?php
              }elseif ($title === 'contact us |waste to energy'){
                  ?>
               <li class="active" ><a href="" id="link">WASTE TO ENERGY</a></li>
              <?php
              }else{
                  ?>
               <li class="active" ><a href="" id="link">SERVICES/<?= strtoupper($services[0]['portfolio_category'])?> </a></li>
               <?php
              }
              ?>
             
          
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
