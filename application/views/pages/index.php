
  <!-- Start slider  -->
  <section id="mu-slider">
    <div class="mu-slider-area"> 
      <!-- Top slider -->
      <div class="mu-top-slider">
      
        
            <?php
            foreach ($services as $key => $value) {
                ?>
            <!-- Top slider single slide -->
        <div class="mu-top-slider-single">
            <img src="<?= base_url('assets/img/slider/'.$value['slider_img'])?>" alt="img">
            <div class="mu-top-slider-content">
            <h2 class="mu-slider-title"><?= $value['portfolio_category']?></h2>
            <p><?= substr($value['write_up'], 0, 55)?> ...</p>           
            <a href="<?= base_url('services/'.$value['portfolio_category'].'/'. $value['portfolio_id'])?>" class="mu-readmore-btn">READ MORE</a>
          </div>   
            </div>
            <!--/Top slider single slide-->
            <?php
            }
            ?>

        </div>
      </div>
    </div>
  </section>
  <!-- End slider  -->

  <!-- Start About us -->
  <section id="mu-about-us">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-about-us-area">
            <div class="mu-title">
              <span class="mu-subtitle">Discover</span>
              <h2>ABOUT US</h2>
              <i class="fa fa-spoon"></i>              
              <span class="mu-title-bar"></span>
            </div>
            <div class="row">
              <div class="col-md-6">
                  <div class="mu-about-us-left" style="font-size: 19px;">
                 <p>We specialize in Engineering Design and Fabrication outfit with excellent knowledge of Engineering, 
                     majoring in Design and Fabrication and production in Mechanical, Civil Engineering Construction,
                     Electrical Installation and Engineering Foundry.</p> 
                 <div class="mu-title">
                 <span class="mu-subtitle">Services</span>
                 </div>
                  <ul>
                      <a href="<?= base_url('services/Mechanical engineering production/1')?>" style=""><li>Mechanical Engineering Production</li></a>
                      <a href="<?= base_url('services/Metal fabrication/2')?>"><li>Metal Fabrication</li></a>
                      <a href="<?= base_url('services/Engineering foundry/3')?>"><li>Engineering Foundry</li></a>                    
                      <a href="<?= base_url('services/Civil Engineering/5')?>"><li>Civil Engineering</li></a>
                      <a href="<?= base_url('services/Drop forging and blacksmithing/4')?>"><li>Drop Forging and Blacksmithing</li></a>
                      <a href="<?= base_url('services/Afro-reliant and alternative power generation/6')?>"><li>Afro-reliant and alternative power generation</li></a>
                  </ul>
                  <p> We also major in new infrastructures construction, repairs of old production plants. 
                      We are highly empowered to handle any metal fabrication jobs, structure steel works, 
                      including ware-houses, factory and office buildings.
                        We have over 30 years working experience in all industrial services,
                        mostly production companies with consortium of partners in civil, electrical, hydraulic and automobile engineers. 
                    </p>  
                </div>
              </div>
              <div class="col-md-6">
                <div class="mu-about-us-right">                
                 <ul class="mu-abtus-slider">                 

                 <?php
                 foreach ($abtImg as $key => $value) {
    ?>
                   <li><img src="<?=  base_url('assets/img/about-us/'. $value['about_img'])?>" alt="img"></li>
                   <?php
}?>
                 </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End About us -->

  <!-- Start Counter Section -->
  <section id="mu-counter">
    <div class="mu-counter-overlay">
        
      <div class="container">
          
        <div class="row">
            <div class="mu-title">
              <span class="mu-subtitle">Partners</span>
            </div>
          <div class="col-md-12">
              
            <div class="mu-counter-area">
                
            <ul class="mu-counter-nav">
             
              <li class="col-md-4 col-sm-4 col-xs-12">
                <div class="mu-single-counter">
                  <span>Metal Mate </span>
                  <p>Nigeria Limited</p>
                </div>
              </li>
               <li class="col-md-4 col-sm-4 col-xs-12">
                <div class="mu-single-counter">
                  <span>God’s Will </span>
                  <p>Technical Construction Ltd. </p>
                </div>
              </li>
               <li class="col-md-4 col-sm-4 col-xs-12">
                <div class="mu-single-counter">
                  <span>Sanmi </span>
                  <p>Construction Co. Ltd.</p>
                </div>
              </li>
            </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Counter Section --> 

  <!-- Start Restaurant Menu -->
  <section id="mu-restaurant-menu">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-restaurant-menu-area">
            <div class="mu-title">
              <span class="mu-subtitle">Company</span>
              <h2>PORTFOLIO</h2>
              <i class="fa fa-spoon"></i>              
              <span class="mu-title-bar"></span>
            </div>
            <div class="mu-restaurant-menu-content">
              <ul class="nav nav-tabs mu-restaurant-menu">
                  <li class="active" id="mecheng" value="1" onclick="fetch_select(1)" ><a href="#breakfast" data-toggle="tab" >Mechanical engineering production</a></li>
                  <li id="metfab" value="2" onclick="fetch_select(2)"><a href="#meals" data-toggle="tab">Metal fabrications</a></li>
                  <li id="engfoung" value="3" onclick="fetch_select(3)"><a href="#snacks" data-toggle="tab" >Engineering foundry</a></li>
                  <li id="dropforg" value="4" onclick="fetch_select(4)"><a href="#desserts" data-toggle="tab">Drop forging and blacksmithing</a></li>
                <li><a href="#drinks" data-toggle="tab">Civil Engineering</a></li>
              </ul>

              <!-- Tab panes -->
                           <!-- Tab panes -->
              <div class="tab-content">
                <div class="tab-pane fade in active" id="breakfast">
                  <div class="mu-tab-content-area">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="mu-tab-content-left">
                          <ul class="mu-menu-item-nav">
                            <li>
                              <div class="media">
                                <div class="media-left">
                                  
                                    <img class="media-object" src="<?= base_url('assets/img/menu/gasflowp.jpg')?>" alt="img">
                             
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a>Automatic gas flow valve </a></h4>
                                  <span class="mu-menu-price">kunleinvestment limited</span>
                                  
                                </div>
                              </div>
                            </li>
                             <li>
                              <div class="media">
                                <div class="media-left">
                              
                                    <img class="media-object" src="<?= base_url('assets/img/menu/repairp.jpg')?>" alt="img">
                               
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a>Repair job at dangote Ibese deputy direector operation (Dangote cement at Ibese)</a></h4>
                                  <span class="mu-menu-price">kunleinvestment limited</span>
                                 
                                </div>
                              </div>
                            </li>

                          </ul>   
                        </div>
                      </div>
                     <div class="col-md-6">
                       <div class="mu-tab-content-right">
                          <ul class="mu-menu-item-nav">
                            <li>
                              <div class="media">
                                <div class="media-left">
                                
                                    <img class="media-object" src="<?= base_url('assets/img/menu/ramp.jpg')?>" alt="img">
                                 
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a>RAM for vertical cement meal</a></h4>
                                  <span class="mu-menu-price">KunleInvestment Limited</span>
                                
                                </div>
                              </div>
                            </li>
                             <li>
                              <div class="media">
                                <div class="media-left">
                                 
                                    <img class="media-object" src="<?= base_url('assets/img/menu/rotorp.jpg')?>" alt="img">
                                
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a>Rotor for vertical cement mill (dis-assemble)</a></h4>
                                  <span class="mu-menu-price">KunleInvestment Limited</span>
                              
                                </div>
                              </div>
                            </li>

                          </ul>   
                       </div>
                     </div>
                   </div>
                 </div>
                </div>
                <div class="tab-pane fade " id="meals">
                  <div class="mu-tab-content-area">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="mu-tab-content-left">
                          <ul class="mu-menu-item-nav">
                            <li>
                              <div class="media">
                                <div class="media-left">
                                
                                    <img class="media-object" src="<?= base_url('assets/img/menu/fuelp.jpg')?>" alt="img">
                               
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a> Fuel haulagging trucks</a></h4>
                                  <span class="mu-menu-price">Kunleinvestment Limited</span>
                               
                                </div>
                              </div>
                            </li>
                             <li>
                              <div class="media">
                                <div class="media-left">
                              
                                    <img class="media-object" src="<?= base_url('assets/img/menu/maizep.jpg')?>" alt="img">
                                
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a> Maize sheller de-garmer</a></h4>
                                  <span class="mu-menu-price">Kunleinvestment Limited</span>
                            
                                </div>
                              </div>
                            </li>
                             
                          </ul>   
                        </div>
                      </div>
                     <div class="col-md-6">
                       <div class="mu-tab-content-right">
                          <ul class="mu-menu-item-nav">
                            <li>
                              <div class="media">
                                <div class="media-left">
                                 
                                    <img class="media-object" src="<?= base_url('assets/img/menu/murtalap.jpg')?>" alt="img">
                               
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a> Murtala Mohammed international airport turbine generator house </a></h4>
                                  <span class="mu-menu-price">Kunleinvestment Limited</span>
                                  
                                </div>
                              </div>
                            </li>
                             <li>
                              <div class="media">
                                <div class="media-left">
                                
                                    <img class="media-object" src="<?= base_url('assets/img/menu/cilop.jpg')?>" alt="img">
                                 
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a>Cement storage silo 60 tons/ 30 tons</a></h4>
                                  <span class="mu-menu-price">Kunleinvestment Limited</span>
                                  
                                </div>
                              </div>
                            </li>
                          
                          </ul>   
                       </div>
                     </div>
                   </div>
                 </div>
                </div>
                <div class="tab-pane fade " id="snacks">
                  <div class="mu-tab-content-area">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="mu-tab-content-left">
                          <ul class="mu-menu-item-nav">
                            <li>
                              <div class="media">
                                <div class="media-left">
                                 
                                    <img class="media-object" src="<?= base_url('assets/img/menu/feedp.jpg')?>" alt="img">
                                
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a>Feed mill for poultry</a></h4>
                                  <span class="mu-menu-price">Kunleinvestment Limited</span>
                                  
                                </div>
                              </div>
                            </li>
                             <li>
                              <div class="media">
                                <div class="media-left">
                                 
                                    <img class="media-object" src="<?= base_url('assets/img/menu/lift out - furnacep.jpg')?>" alt="img">
                               
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a>Lift out-furnace</a></h4>
                                  <span class="mu-menu-price">Kunleinvestment Limited</span>
                                 
                                </div>
                              </div>
                            </li>
                          
                          </ul>   
                        </div>
                      </div>
                     <div class="col-md-6">
                       <div class="mu-tab-content-right">
                          <ul class="mu-menu-item-nav">
                            <li>
                              <div class="media">
                                <div class="media-left">
                                
                                    <img class="media-object" src="<?= base_url('assets/img/menu/kilnp.jpg')?>" alt="img">
                                 
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a>Kiln girth gear guard fabrication & installation job</a></h4>
                                  <span class="mu-menu-price">Kunleinvestment Limited</span>
                                 
                                </div>
                              </div>
                            </li>
                             <li>
                              <div class="media">
                                <div class="media-left">
                                 
                                    <img class="media-object" src="<?= base_url('assets/img/menu/gasp.jpg')?>" alt="img">
                               
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a> LAFARGE Gas turbing generator installation lafarge</a></h4>
                                  <span class="mu-menu-price">Kunleinvestment Limited</span>
                               
                                </div>
                              </div>
                            </li>
                        
                          </ul>   
                       </div>
                     </div>
                   </div>
                 </div>
                </div>
                <div class="tab-pane fade " id="desserts">
                  <div class="mu-tab-content-area">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="mu-tab-content-left">
                          <ul class="mu-menu-item-nav">
                            <li>
                              <div class="media">
                                <div class="media-left">
                              
                                    <img class="media-object" src="<?= base_url('assets/img/menu/mill.jpg')?>" alt="img">
                                
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a>Cement</a></h4>
                                  <span class="mu-menu-price">Kunleinvestment Limited</span>
                               
                                </div>
                              </div>
                            </li>
                             <li>
                              <div class="media">
                                <div class="media-left">
                                
                                    <img class="media-object" src="<?= base_url('assets/img/menu/mill.jpg')?>" alt="img">
                              
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a>Gas turbing generator installation lafarge</a></h4>
                                  <span class="mu-menu-price">Kunleinvestment Limited</span>
                                
                                </div>
                              </div>
                            </li>
                       
                          </ul>   
                        </div>
                      </div>
                     <div class="col-md-6">
                       <div class="mu-tab-content-right">
                          <ul class="mu-menu-item-nav">
                            <li>
                              <div class="media">
                                <div class="media-left">
                                 
                                    <img class="media-object" src="<?= base_url('assets/img/menu/wastep.jpg')?>" alt="img">
                                
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a> Waste cement recycle plant</a></h4>
                                  <span class="mu-menu-price">Kunleinvestment Limited</span>
                              
                                </div>
                              </div>
                            </li>
                    
                          </ul>   
                       </div>
                     </div>
                   </div>
                 </div>
                </div>
                <div class="tab-pane fade " id="drinks">
                  <div class="mu-tab-content-area">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="mu-tab-content-left">
                          <ul class="mu-menu-item-nav">
                            <li>
                              <div class="media">
                                <div class="media-left">
                                 
                                    <img class="media-object" src="<?= base_url('assets/img/menu/DSC02296.jpg')?>" alt="img">
                                
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading">Water drainage system at redeem church God ministry</h4>
                                  <span class="mu-menu-price">Kunle investment limited</span>
                                  
                                </div>
                              </div>
                            </li>
                             <li>
                              <div class="media">
                                <div class="media-left">
                                 
                                    <img class="media-object" src="<?= base_url('assets/img/menu/murtalap.jpg')?>" alt="img">
                                 
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"> Murtala mohammed airport turbine generator house</h4>
                                  <span class="mu-menu-price">kunle investment limited</span>
                                  
                                </div>
                              </div>
                            </li>
                            
                          </ul>   
                        </div>
                      </div>
                     <div class="col-md-6">
                       <div class="mu-tab-content-right">
                          <ul class="mu-menu-item-nav">
                            <li>
                              <div class="media">
                                <div class="media-left">
                                
                                    <img class="media-object" src="<?= base_url('assets/img/menu/DSC02275.jpg')?>" alt="img">
                               
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading">Water channel</h4>
                                  <span class="mu-menu-price">kunle investment limited</span>
                                 
                                </div>
                              </div>
                            </li>
                          
                          </ul>   
                       </div>
                     </div>
                   </div>
                 </div>
                </div>
              </div>
            </div>
         
                    
                      
                     
                              </div>
                            </li>
                          </ul>   
                       </div>
                     </div>
                   </div>
                 </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Restaurant Menu -->

  <!-- Start Reservation section -->
  <section id="mu-reservation">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-reservation-area">
            <div class="mu-title">
              <span class="mu-subtitle"> COMPANY</span>
              <h2>Profile</h2>
              <i class="fa fa-spoon"></i>              
              <span class="mu-title-bar"></span>
            </div>
              <div class="mu-reservation-content" style="font-size: 20px; font-style: italic;">
                <p>The society can only be graded by the amount of technology deployed for its development. Hence Nigeria appellation as a third world country
                is as a result of our inability to use technology to process our available raw materials. The trends can only change if we develop to the level where
                we can use own technology to both produce and process our raw materials to exportable products, feed our nation population and provide enough energy to power
                our economy.</p>
              <p>We specialize in engineering design and fabrication outfit with excellent knowledge of engineering, major in Design and Fabrication and production in Mechanical, Civil Engineering Construction, Electrical Installation and Engineering Foundry.
Our Chief Executive officer and Technical Director is an Industrially Trained Technologist,a product of Lafarge Cement Company Technology School, and city and Guilds of London Institute, Full Technology in Mechanical Engineering (H.N.D) in engineering.
He had over thirty years of experience in Industrial Plant Design and Fabrication and Services as Mechanical Draughtsman Auto cad compliance and as Research Officer Federal Institute of Industrial Research. He is equally a Training Officer who had produced technically sound staffs for Lafarge Cement Plant both at Ewekoro and Sagamu.
</p>
<p>We our company major on Machine Design and Fabrication, Industrial structures design and fabrication and occasional services of production plants. We have a lot of experience on water services plant and maintenance. Air compressors services and maintenance. Fan and Blower services and maintenance.
This and many more in area of concept and innovative technology on Engineering knowledge application to difficult problem in Nation building.
</p>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>  
  <!-- End Reservation section -->

  <!-- Start Gallery -->
  <section id="mu-gallery">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-gallery-area">
            <div class="mu-title">
              <span class="mu-subtitle">Discover</span>
              <h2>Our Gallery</h2>
              <i class="fa fa-spoon"></i>              
              <span class="mu-title-bar"></span>
            </div>
            <div class="mu-gallery-content">
              <div class="mu-gallery-top">
                <!-- Start gallery menu -->
                <ul>
                  <li class="filter active" data-filter="all">All</li>
                  <li class="filter" data-filter=".food">Mechanical engineering production</li>
                  <li class="filter" data-filter=".drink">Metal fabrications</li>
                  <li class="filter" data-filter=".restaurant">Engineering foundry</li>
                  <li class="filter" data-filter=".dinner">Drop forging and blacksmithing</li><br><br>
                  <li class="filter" data-filter=".dessert">Civil Engineering</li>
                </ul>
              </div>
              <!-- Start gallery image -->
              <div class="mu-gallery-body" id="mixit-container">
                <!-- start single gallery image -->
                
                <?php
                                                foreach ($GI_mech as $key => $value) {
                                             ?>
                 <div class="mu-single-gallery col-md-4 mix food">
                  <div class="mu-single-gallery-item">
                    <figure class="mu-single-gallery-img">
                      <a href="#"><img alt="img" src="<?=  base_url('assets/img/gallery/small/'. $value['gallery_img'])?>"></a>
                    </figure>
                    <div class="mu-single-gallery-info">
                      <a href="<?=  base_url('assets/img/gallery/small/'. $value['gallery_img'])?>" data-fancybox-group="gallery" class="fancybox">
                        <img src="<?=  base_url('assets/img/plus.png')?>" alt="plus icon img">
                      </a>
                    </div>                  
                  </div>
                </div>
                
                <?php
                                                }
                ?>
               
                
                
               <?php
                                                foreach ($GI_fab as $key => $value) {
                                             ?>
                 <div class="mu-single-gallery col-md-4 mix drink">
                  <div class="mu-single-gallery-item">
                    <figure class="mu-single-gallery-img">
                      <a href="#"><img alt="img" src="<?=  base_url('assets/img/gallery/small/'. $value['gallery_img'])?>"></a>
                    </figure>
                    <div class="mu-single-gallery-info">
                      <a href="<?=  base_url('assets/img/gallery/small/'. $value['gallery_img'])?>" data-fancybox-group="gallery" class="fancybox">
                        <img src="<?=  base_url('assets/img/plus.png')?>" alt="plus icon img">
                      </a>
                    </div>                  
                  </div>
                </div>
                
                <?php
                                                }
                ?>  
                
                
                 <?php
                                                foreach ($GI_foundry as $key => $value) {
                                             ?>
                 <div class="mu-single-gallery col-md-4 mix restaurant">
                  <div class="mu-single-gallery-item">
                    <figure class="mu-single-gallery-img">
                      <a href="#"><img alt="img" src="<?=  base_url('assets/img/gallery/small/'. $value['gallery_img'])?>"></a>
                    </figure>
                    <div class="mu-single-gallery-info">
                      <a href="<?=  base_url('assets/img/gallery/small/'. $value['gallery_img'])?>" data-fancybox-group="gallery" class="fancybox">
                        <img src="<?=  base_url('assets/img/plus.png')?>" alt="plus icon img">
                      </a>
                    </div>                  
                  </div>
                </div>
                
                <?php
                                                }
                ?>   
                
                
                <!-- End single gallery image -->
                <?php
                                                foreach ($GI_forg as $key => $value) {
                                             ?>
                 <div class="mu-single-gallery col-md-4 mix dinner">
                  <div class="mu-single-gallery-item">
                    <figure class="mu-single-gallery-img">
                      <a href="#"><img alt="img" src="<?=  base_url('assets/img/gallery/small/'. $value['gallery_img'])?>"></a>
                    </figure>
                    <div class="mu-single-gallery-info">
                      <a href="<?=  base_url('assets/img/gallery/small/'. $value['gallery_img'])?>" data-fancybox-group="gallery" class="fancybox">
                        <img src="<?=  base_url('assets/img/plus.png')?>" alt="plus icon img">
                      </a>
                    </div>                  
                  </div>
                </div>
                
                <?php
                                                }
                ?>

                <!-- End single gallery image -->      
                  <!-- End single gallery image -->
                <?php
                                                foreach ($GI_civil as $key => $value) {
                                             ?>
                 <div class="mu-single-gallery col-md-4 mix dessert">
                  <div class="mu-single-gallery-item">
                    <figure class="mu-single-gallery-img">
                      <a href="#"><img alt="img" src="<?=  base_url('assets/img/gallery/small/'. $value['gallery_img'])?>"></a>
                    </figure>
                    <div class="mu-single-gallery-info">
                      <a href="<?=  base_url('assets/img/gallery/small/'. $value['gallery_img'])?>" data-fancybox-group="gallery" class="fancybox">
                        <img src="<?=  base_url('assets/img/plus.png')?>" alt="plus icon img">
                      </a>
                    </div>                  
                  </div>
                </div>
                
                <?php
                                                }
                ?>

                <!-- End single gallery image --> 
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Gallery -->
  
  <!-- Start Client Testimonial section -->
  <section id="mu-client-testimonial">
    <div class="mu-overlay">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="mu-client-testimonial-area">
              <div class="mu-title">
                <span class="mu-subtitle">Clients</span>
                <h2>Job executed update</h2>
                <i class="fa fa-spoon"></i>              
                <span class="mu-title-bar"></span>
              </div>
              <!-- testimonial content -->
              <div class="mu-testimonial-content">
                <!-- testimonial slider -->
                <ul class="mu-testimonial-slider">
                  <li>
                    <div class="mu-testimonial-single">                   
                      <div class="mu-testimonial-info">
     
                      </div>
                      <div class="mu-testimonial-bio">
                          <p>- Asaka Cement Limestone Extender Project -</p> <br>  
                        <p>-Year : 2005 -</p>
                      </div>
                        
                    </div>
                  </li>
                   <li>
                    <div class="mu-testimonial-single">                   
                      <div class="mu-testimonial-info">
                       
                      </div>
                      <div class="mu-testimonial-bio">
                          <p>- Portland Cement Parking Plant Construction And Parker Installation -</p><br>
                          <p>- Year: 2008 -</p>
                      </div>
                    </div>
                  </li>
                   <li>
                    <div class="mu-testimonial-single">                   
                      <div class="mu-testimonial-info">
                      
                      </div>
                      <div class="mu-testimonial-bio">
                          <p>- Muritala Muhammed Airport, - Turbine Generator House Structure (Ikeja) -</p><br>
                          <p>- Year: 2011 -</p>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="mu-testimonial-single">                   
                      <div class="mu-testimonial-info">
                       
                      </div>
                      <div class="mu-testimonial-bio">
                          <p>- Construction Of Cassava Processing Plant Sagamu  -</p><br>
                          <p>- Year: 1998 -</p>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="mu-testimonial-single">                   
                      <div class="mu-testimonial-info">
                       
                      </div>
                      <div class="mu-testimonial-bio">
                          <p>- Construction Of Cassava Processing Plant To Starch Ogbomosho  -</p><br>
                          <p>- Year: 1999 -</p>
                      </div>
                    </div>
                  </li>
                    <li>
                    <div class="mu-testimonial-single">                   
                      <div class="mu-testimonial-info">
                        
                      </div>
                      <div class="mu-testimonial-bio">
                          <p>- Road Construction Project Civil -</p><br>
                          <p>- Year: 2010-</p>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="mu-testimonial-single">                   
                      <div class="mu-testimonial-info">
                      
                      </div>
                      <div class="mu-testimonial-bio">
                          <p>- Nylon Processing Equipment Fabrication 1992  -</p><br>
                          <p>- Year: 2000-</p>
                      </div>
                    </div>
                  </li>
                   <li>
                    <div class="mu-testimonial-single">                   
                      <div class="mu-testimonial-info">
                       
                      </div>
                      <div class="mu-testimonial-bio">
                          <p>- Agro-Processing Equipment Fabrication 1990  -</p><br>
                          <p>- Year: 2013-</p>
                      </div>
                    </div>
                  </li>
                     <li>
                    <div class="mu-testimonial-single">                   
                      <div class="mu-testimonial-info">
                       
                      </div>
                      <div class="mu-testimonial-bio">
                          <p>- Production Specialist Machines On Cement Processing E.G. Dryer – Oven And Foundry Plant, Including Rotary/Lift-Out Furnace  -</p><br>
                          <p>- Year: 2000 -</p>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="mu-testimonial-single">                   
                      <div class="mu-testimonial-info">
                      
                      </div>
                      <div class="mu-testimonial-bio">
                          <p>- Vertical Cement Mill Shaft & Roller Replacement Dangote Ibese -</p><br>
                          <p>- Year: 2013-</p>
                      </div>
                    </div>
                  </li>
                  <li>
                   <div class="mu-testimonial-single">                   
                      <div class="mu-testimonial-info">
                      
                      </div>
                      <div class="mu-testimonial-bio">
                          <p>- Kiln Girth Gear Guard Fabrication Sagamu Works -</p><br>
                          <p>- Year: 2013-</p>
                      </div>
                    </div>
                  </li> <li>
                    <div class="mu-testimonial-single">                   
                      <div class="mu-testimonial-info">
                        
                      </div>
                      <div class="mu-testimonial-bio">
                          <p>- Kiln Girth Gear Guard Fabrication Sagamu Works -</p><br>
                          <p>- Year: 2013-</p>
                      </div>
                    </div>
                  </li>
                    <li>
                   <div class="mu-testimonial-single">                   
                      <div class="mu-testimonial-info">
                       
                      </div>
                      <div class="mu-testimonial-bio">
                          <p>- Reclaim hoper for west africa portland cement -</p><br>
                          <p>- Year: 1996 -</p>
                      </div>
                    </div>
                  </li>
                    <li>
                   <div class="mu-testimonial-single">                   
                      <div class="mu-testimonial-info">
                      
                      </div>
                      <div class="mu-testimonial-bio">
                          <p>- New packer installation for sagamu plant 2010 -</p><br>
                          <p>- Year: 2010 -</p>
                      </div>
                    </div>
                  </li>
                    <li>
                   <div class="mu-testimonial-single">                   
                      <div class="mu-testimonial-info">
                        
                      </div>
                      <div class="mu-testimonial-bio">
                          <p>- Cement silo dangote cement plant, Ibese, Obajana and Benue cement plants -</p><br>
                          <p>- Year: 2012 -</p>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Client Testimonial section -->

  <!-- Start Subscription section -->
  <section id="mu-subscription">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-subscription-area">
              <form action="<?= base_url('clients/newsletter')?>" class="mu-subscription-form" method="POST">
            
                  <input type="text" placeholder="Type Your Email Address" name="subcribe" required="" value="">
              <button class="mu-readmore-btn" type="Submit" >SUBSCRIBE</button>
            </form>            
          </div>
        </div>
      </div>
    </div>    
  </section>
  <!-- End Subscription section -->

  <!-- Start Chef Section -->
  <section id="mu-chef">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-chef-area">
            <div class="mu-title">
              <span class="mu-subtitle">BOARD OF</span>
              <h2>DIRECTORS</h2>
              <i class="fa fa-spoon"></i>              
              <span class="mu-title-bar"></span>
            </div>
            <div class="mu-chef-content">
              <ul class="mu-chef-nav">
                <li>
                  <div class="mu-single-chef">
                    <figure class="mu-single-chef-img">
                        <img src="<?= base_url('')?>assets/img/chef/chef-6.jpg" alt="chef img">
                    </figure>
                    <div class="mu-single-chef-info">
                      <h4>ENGR. ELIJAH OGUNKUNLE</h4>
                      <span>TECHNICAL DIRECTOR</span>
                    </div>
                    <div class="mu-single-chef-social">
                      <a href="#"><i class="fa fa-facebook"></i></a>
                      <a href="#"><i class="fa fa-twitter"></i></a>
                      <a href="#"><i class="fa fa-google-plus"></i></a>
                      <a href="#"><i class="fa fa-linkedin"></i></a>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="mu-single-chef">
                    <figure class="mu-single-chef-img">
                      <img src="<?=  base_url('')?>assets/img/chef/chef-2.jpg" alt="chef img">
                    </figure>
                    <div class="mu-single-chef-info">
                      <h4>ENGR. LAYI AIYEOLA</h4>
                      <span>CIVIL ENGINEER</span>
                    </div>
                    <div class="mu-single-chef-social">
                      <a href="#"><i class="fa fa-facebook"></i></a>
                      <a href="#"><i class="fa fa-twitter"></i></a>
                      <a href="#"><i class="fa fa-google-plus"></i></a>
                      <a href="#"><i class="fa fa-linkedin"></i></a>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="mu-single-chef">
                    <figure class="mu-single-chef-img">
                      <img src="<?=  base_url('')?>assets/img/chef/chef-3.jpg" alt="chef img">
                    </figure>
                    <div class="mu-single-chef-info">
                      <h4>SAMSON NESI</h4>
                      <span>BUILDER</span>
                    </div>
                    <div class="mu-single-chef-social">
                      <a href="#"><i class="fa fa-facebook"></i></a>
                      <a href="#"><i class="fa fa-twitter"></i></a>
                      <a href="#"><i class="fa fa-google-plus"></i></a>
                      <a href="#"><i class="fa fa-linkedin"></i></a>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="mu-single-chef">
                    <figure class="mu-single-chef-img">
                      <img src="<?=  base_url('')?>assets/img/chef/chef-5.jpg" alt="chef img">
                    </figure>
                    <div class="mu-single-chef-info">
                      <h4>GBENGA OTUSANYE</h4>
                      <span>ARCHITECT</span>
                    </div>
                    <div class="mu-single-chef-social">
                      <a href="#"><i class="fa fa-facebook"></i></a>
                      <a href="#"><i class="fa fa-twitter"></i></a>
                      <a href="#"><i class="fa fa-google-plus"></i></a>
                      <a href="#"><i class="fa fa-linkedin"></i></a>
                    </div>
                  </div>
                </li>  
                <li>
                  <div class="mu-single-chef">
                    <figure class="mu-single-chef-img">
                      <img src="<?=  base_url('')?>assets/img/chef/chef-6.jpg" alt="chef img">
                    </figure>
                    <div class="mu-single-chef-info">
                     <h4>ENGR. ELIJAH OGUNKUNLE</h4>
                      <span>TECHNICAL DIRECTOR</span>
                    </div>
                    <div class="mu-single-chef-social">
                      <a href="#"><i class="fa fa-facebook"></i></a>
                      <a href="#"><i class="fa fa-twitter"></i></a>
                      <a href="#"><i class="fa fa-google-plus"></i></a>
                      <a href="#"><i class="fa fa-linkedin"></i></a>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="mu-single-chef">
                    <figure class="mu-single-chef-img">
                      <img src="<?=  base_url('')?>assets/img/chef/chef-2.jpg" alt="chef img">
                    </figure>
                    <div class="mu-single-chef-info">
                       <h4>ENGR. LAYI AIYEOLA</h4>
                      <span>CIVIL ENGINEER</span>
                    </div>
                    <div class="mu-single-chef-social">
                      <a href="#"><i class="fa fa-facebook"></i></a>
                      <a href="#"><i class="fa fa-twitter"></i></a>
                      <a href="#"><i class="fa fa-google-plus"></i></a>
                      <a href="#"><i class="fa fa-linkedin"></i></a>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="mu-single-chef">
                    <figure class="mu-single-chef-img">
                      <img src="<?=  base_url('')?>assets/img/chef/chef-3.jpg" alt="chef img">
                    </figure>
                    <div class="mu-single-chef-info">
                     <h4>SAMSON NESI</h4>
                      <span>BUILDER</span>
                    </div>
                    <div class="mu-single-chef-social">
                      <a href="#"><i class="fa fa-facebook"></i></a>
                      <a href="#"><i class="fa fa-twitter"></i></a>
                      <a href="#"><i class="fa fa-google-plus"></i></a>
                      <a href="#"><i class="fa fa-linkedin"></i></a>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="mu-single-chef">
                    <figure class="mu-single-chef-img">
                      <img src="<?=  base_url('')?>assets/img/chef/chef-5.jpg" alt="chef img">
                    </figure>
                    <div class="mu-single-chef-info">
                       <h4>GBENGA OTUSANYE</h4>
                      <span>ARCHITECT</span>
                    </div>
                    <div class="mu-single-chef-social">
                      <a href="#"><i class="fa fa-facebook"></i></a>
                      <a href="#"><i class="fa fa-twitter"></i></a>
                      <a href="#"><i class="fa fa-google-plus"></i></a>
                      <a href="#"><i class="fa fa-linkedin"></i></a>
                    </div>
                  </div>
                </li>                      
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Chef Section -->

  <!-- Start  section -->
  <section id="mu-contact">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-contact-area">
            <div class="mu-title">
              <span class="mu-subtitle">Get In Touch</span>
              <h2>Contact Us</h2>
              <i class="fa fa-spoon"></i>              
              <span class="mu-title-bar"></span>
            </div>
            <div class="mu-contact-content">
              <div class="row">
                <div class="col-md-6">
                  <div class="mu-contact-left">
                      <form class="mu-contact-form" method="POST" action="<?= base_url('contactform')?>">
                      
                      <div class="form-group">
                        <label for="name">Your Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Name" name="name" required="" value="<?php echo set_value('name');?>">
                      </div>
                      <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control" id="email" placeholder="Email" name="email" required="" value="<?php echo set_value('email');?>">
                      </div>    
                        <div class="form-group">
                        <label for="email">Phone</label>
                        <input type="text" class="form-control" id="phone" placeholder="Phone number" name="phone" required="" value="<?php echo set_value('phone');?>">
                      </div> 
                      <div class="form-group">
                        <label for="subject">Subject</label>
                        <input type="text" class="form-control" id="subject" placeholder="Subject" name="subject" required="" value="<?php echo set_value('subject');?>">
                      </div>
                      <div class="form-group">
                        <label for="message">Message</label>                        
                        <textarea class="form-control" id="message" cols="20" rows="10" placeholder="Type Your Message" name="message" required="" value="<?php echo set_value('message');?>"></textarea>
                      </div>    
                     
                      <button type="submit" class="mu-send-btn">Send Message</button>
                    </form>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="mu-contact-right">
                    <div class="mu-contact-widget">
                      <h3>Office Address</h3>
                      <p>Kunle Investment LTD,beside ministry of agriculture, mechanical village, sagamu/benin expressway, Ogun State, Nigeria</p>
                      <address>
                        <p><i class="fa fa-phone"></i><?= $this->phone?></p>
                        <p><i class="fa fa-phone"></i><?= $this->phone1?></p>
                        <p><i class="fa fa-envelope-o"></i><?= $this->email2?></p>
                        <p><i class="fa fa-map-marker"></i>Ogun State, Nigeria</p>
                      </address>
                    </div>
                    <div class="mu-contact-widget">
                      <h3>Open Hours</h3>                      
                      <address>
                        <p><span>Monday - Friday</span> 9.00 am to 12 pm</p>
                        <p><span>Saturday</span> 9.00 am to 10 pm</p>
                        <p><span>Sunday</span> 10.00 am to 12 pm</p>
                      </address>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Contact section -->

  <!-- Start Map section -->
  <section id="mu-map">
    <iframe src="https://www.google.com/maps/embed/v1/place?q=%20mechanic%20shed%2C%20Ogun%20State%2C%20Nigeria&key=AIzaSyB9bDcm5V-A1HnlTs8ZlfSS24qP2dITaKY" width="100%" height="100%" frameborder="0"allowfullscreen></iframe>
  </section>
  <!-- End Map section -->