<!-- Start Blog banner  -->
  <section id="mu-blog-banner">
    <div class="container">
      <div class="mu-blog-banner-area">
        <h2>Contact Us</h2>
        <ol class="breadcrumb">
            <li><a href="<?= base_url('index')?>">Home</a></li>          
          <li class="active"><?= $subject?></li>
        </ol>
      </div>
    </div>
  </section>
  <!-- End Blog banner -->  
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
                      <form class="mu-contact-form" method="POST" action="<?= base_url('contact/'.$subject.'/'.$this->uri->segment(3))?>">
                      
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
                        <input type="text" class="form-control" id="subject" disabled="" placeholder="Subject" name="subject" required="" value="<?php echo $subject?>">
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
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia temporibus corporis ea non consequatur porro corrupti hic voluptatibus assumenda, doloribus.</p>
                      <address>
                        <p><i class="fa fa-phone"></i><?= $this->phone?></p>
                        <p><i class="fa fa-phone"></i><?= $this->phone1?></p>
                        <p><i class="fa fa-envelope-o"></i><?= $this->email2?></p>
                        <p><i class="fa fa-map-marker"></i>368 St. Panama City, Florida, USA</p>
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
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9207.358598888495!2d-85.64847801496286!3d30.183918972289003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0x2320479d70eb6202!2sDillard&#39;s!5e0!3m2!1sbn!2sbd!4v1462359735720" width="100%" height="100%" frameborder="0"allowfullscreen></iframe>
  </section>
  <!-- End Map section -->