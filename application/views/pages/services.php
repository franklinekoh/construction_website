<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<!-- Start Blog banner  -->

  <section id="mu-blog-banner">
    <div class="container">
      <div class="mu-blog-banner-area">
        <h2>Services/<?= $services[0]['portfolio_category']?> </h2>
        <ol class="breadcrumb">
            <li><a href="<?= base_url('index')?>">Home</a></li>          
          <li class="active">Services/<?= $services[0]['portfolio_category']?> </li>
        </ol>
      </div>
    </div>
  </section>
  <!-- End Blog banner -->  
  <!-- Start Blog -->
  <section id="mu-blog">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-blog-area">
            <div class="row">
              <div class="col-md-8 col-sm-8">
                <div class="mu-blog-content mu-blog-details">
                  <!-- Start Single blog item -->
                  <article class="mu-news-single">
                      <h2>We are the <span style="color: red;">best</span> in <span style="color: red;"><?= $services[0]['portfolio_category']?></span> nation wide!</h2>
                    <figure class="mu-news-img">
                        <img src="<?= base_url('assets/img/news/'. $services[0]['services_img'])?>" alt="img">                     
                    </figure>
                    <div class="mu-news-single-content">                      

                        <blockquote style="font-size: 20px;">
                          <p><?= $services[0]['write_up']?></p>
                      </blockquote>    
                      
                    </div>
                    <div class="mu-news-single-bottom">
                      <div class="row">
                       
                        <div class="col-md-6">
                          <div class="mu-news-single-social">
                            <ul class="mu-news-single-socialnav">
                              <li>SHARE :</li>
                              <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                              <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                              <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                              <li><a href="#"><span class="fa fa-youtube"></span></a></li>
                              <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </article>
                  <!-- End Single blog item -->                  
                </div>

                <div class="row">
                  <div class="col-md-12">
                    <div class="mu-blog-related-post">
                      <div class="mu-title"> 
                          <a href="<?= base_url('contactus/'.$services[0]['portfolio_category'].'/'.$services[0]['id'] )?>">
                              <blockquote style="background-color: whitesmoke;">
                            <span class="mu-subtitle">Contact us</span>
                          </blockquote>
                              </a>
          
                       </div>
                    </div>
                  </div>
                </div>
                <!-- End related news -->

              </div>
              <!-- Start Blog Sidebar -->
              <div class="col-md-4 col-sm-4">             
                <aside class="mu-blog-sidebar">
                  <!-- Blog Sidebar Single -->
                  <div class="mu-blog-sidebar-single">
                    <h3>Other services</h3>
                    <ul class="mu-catg-nav">
                        <?php 
                         switch ($services[0]['portfolio_category']) {
                             case 'Mechanical Engineering production':
?>
                        <li><a href="<?= base_url('services/Metal fabrication/2')?>">Metal fabrication</a></li>
                      <li><a href="<?= base_url('services/Engineering foundry/3')?>">Engineering foundry</a></li>
                      <li><a href="<?= base_url('services/Drop forging and blacksmithing/4')?>">Drop forging and blacksmithing</a></li>
                      <li><a href="<?= base_url('services/Civil Engineering/5')?>">Civil Engineering</a></li>
                       <li><a href="<?= base_url('vision/wastetoenergy')?>">Afro-reliant and alternative power generation</a></li>
                        <?php
                                 break;
                             case 'Metal fabrication':
                                 ?>
                      <li><a href="<?= base_url('services/Mechanical engineering production/1')?>">Mechanical engineering production</a></li>
                      <li><a href="<?= base_url('services/Engineering foundry/3')?>">Engineering foundry</a></li>
                      <li><a href="<?= base_url('services/Drop forging and blacksmithing/4')?>">Drop forging and blacksmithing</a></li>
                        <li><a href="<?= base_url('services/Civil Engineering/5')?>">Civil Engineering</a></li>
                       <li><a href="<?= base_url('vision/wastetoenergy')?>">Afro-reliant and alternative power generation</a></li>
                      <?php
                                 break;
                             case 'Engineering foundry':
                                 ?>
                      <li><a href="<?= base_url('services/Mechanical engineering production/1')?>">Mechanical engineering production</a></li>
                      <li><a href="<?= base_url('services/Metal fabrication/2')?>">Metal fabrication</a></li>
                      <li><a href="<?= base_url('services/Drop forging and blacksmithing/4')?>">Drop forging and blacksmithing</a></li>
                       <li><a href="<?= base_url('services/Civil Engineering/5')?>">Civil Engineering</a></li>
                       <li><a href="<?= base_url('vision/wastetoenergy')?>">Afro-reliant and alternative power generation</a></li>
                      <?php
                                 break;
                             case 'Drop forging and blacksmithing':
                                 ?>
                      <li><a href="<?= base_url('services/Mechanical engineering production/1')?>">Mechanical engineering production</a></li>
                      <li><a href="<?= base_url('services/Metal fabrication/2')?>">Metal fabrication</a></li>
                      <li><a href="<?= base_url('services/Engineering foundry/3')?>">Engineering foundry</a></li>
                        <li><a href="<?= base_url('services/Civil Engineering/5')?>">Civil Engineering</a></li>
                       <li><a href="<?= base_url('vision/wastetoenergy')?>">Afro-reliant and alternative power generation</a></li>
                      <?php
                                 break;
                             case 'Afro-reliant and alternative power generation':
                                 ?>
                       <li><a href="<?= base_url('services/Mechanical engineering production/1')?>">Mechanical engineering production</a></li>
                      <li><a href="<?= base_url('services/Metal fabrication/2')?>">Metal fabrication</a></li>
                      <li><a href="<?= base_url('services/Engineering foundry/3')?>">Engineering foundry</a></li>
                      <li><a href="<?= base_url('services/Drop forging and blacksmithing/4')?>">Drop forging and blacksmithing</a></li>
                      <li><a href="<?= base_url('services/Civil Engineering/5')?>">Civil Engineering</a></li>
                      <?php
                               
                                 break;
                              case 'Civil Engineering':
                                  ?>
                      <li><a href="<?= base_url('services/Mechanical engineering production/1')?>">Mechanical engineering production</a></li>
                      <li><a href="<?= base_url('services/Metal fabrication/2')?>">Metal fabrication</a></li>
                      <li><a href="<?= base_url('services/Engineering foundry/3')?>">Engineering foundry</a></li>
                      <li><a href="<?= base_url('services/Drop forging and blacksmithing/4')?>">Drop forging and blacksmithing</a></li>
                      <li><a href="<?= base_url('vision/wastetoenergy')?>">Afro-reliant and alternative power generation</a></li>
                      <?php
                                  break;
                             default:
                                 ?>
                       <li><a href="<?= base_url('services/Mechanical engineering production/1')?>">Mechanical engineering production</a></li>
                      <li><a href="<?= base_url('services/Metal fabrication/2')?>">Metal fabrication</a></li>
                      <li><a href="<?= base_url('services/Engineering foundry/3')?>">Engineering foundry</a></li>
                      <li><a href="<?= base_url('services/Drop forging and blacksmithing/4')?>">Drop forging and blacksmithing</a></li>
                      <li><a href="<?= base_url('services/Civil Engineering/5')?>">Civil Engineering</a></li>
                      <li><a href="<?= base_url('vision/wastetoenergy')?>">Afro-reliant and alternative power generation</a></li>
                      <?php
                                 break;
                         }
                         ?>
                     
                    </ul>
                  </div>
               
                  <!-- End Blog Sidebar Single -->
                  <!-- Blog Sidebar Single -->
                  
                  <?php
//                  randomizing the banner image for waste to energy
                  $img = array('2.jpg','5.jpg','7.jpg','8.jpg','9.jpg','12.jpg','1705-lee-county-waste-to-energy-expansion-3084.jpg','AD-process-diagram2.jpg','body-0-1389384020876.png','diagram1.png','efw_diagram_large(1).jpg','Keppel Seghers Tuas WTE Picture.jpg','mckay-bay-aerial.jpg','top-5-things-to-know-about-the-energy-from-waste-process-covanta4recovery_process.jpg');
                  $i = rand(0, count($img)-1);
                  $selectedImg = "$img[$i]";
                  
                  ?>
                  <div class="mu-blog-sidebar-single">   
                      <h3>Waste to Energy</h3>
                    <a href="<?= base_url('vision/wastetoenergy')?>" class="mu-sidebar-add">
                      <img src="<?= base_url('assets/img/waste_energy/'.$selectedImg)?>" alt="img">
                    </a><br>
                       <div class="mu-news-single-bottom">
                           <a class="mu-readmore-btn" href="<?= base_url('vision/wastetoenergy')?>">Read More</a>
                                </div>
                  </div>
                  <!-- End Blog Sidebar Single -->
                </aside>
              </div>
              <!-- End Blog Sidebar -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Blog -->
