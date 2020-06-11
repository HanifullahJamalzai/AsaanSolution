<?php
 
 if(isset($_SESSION['user_pn']))
    {
        redirect('home/home');
    }

$this->load->view('includes/header.php');

?>

<!-- Jomla awal -->
  <section id="cta-1">
    <div class="container">
      <div class="row">
        <div class="cta-info text-center">
          <h3><span class="dec-tec">“</span>AsaanSolution will bring inovation in the World.<span class="dec-tec">”</span> -AsaanSolution team</h3>
        </div>
      </div>
    </div>
  </section>

  <!---->
  <!---->
  <section id="services" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-3 wow fadeInLeft delay-05s">
          <div class="section-title">
            <h2 class="head-title">Services</h2>
            <hr class="botm-line">
            <p class="sec-para">The Satisfaction of our Customers are our goal.</p>
          </div>
        </div>

         <div class="col-md-9">
          <div class="col-md-6 wow fadeInRight delay-02s">
            <div class="icon">
              <i class="fa fa-paint-brush"></i>
            </div>
            <div class="icon-text">
              <h3 class="txt-tl">Graphic Design</h3>
              <p class="txt-para">Our Freelancer Graphic Designers are Expert in Designing and Will satisfied your wishes and needs </p>
            </div>
          </div>
          <div class="col-md-6 wow fadeInRight delay-02s">
            <div class="icon">
              <i class="fa fa-cogs"></i>
            </div>
            <div class="icon-text">
              <h3 class="txt-tl">Excellent Results</h3>
              <p class="txt-para">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum id ligula felis euismod semper. </p>
            </div>
          </div>
          <div class="col-md-6 wow fadeInRight delay-04s">
            <div class="icon">
              <i class="fa fa-mobile"></i>
            </div>
            <div class="icon-text">
              <h3 class="txt-tl">Mobile Applications</h3>
              <p class="txt-para">Today the world are closed with each other by moblie and internet service so the main part of a mobile service is mobile Apps  </p>
            </div>
          </div>
          <div class="col-md-6 wow fadeInRight delay-04s">
            <div class="icon">
              <i class="fa fa-desktop"></i>
            </div>
            <div class="icon-text">
              <h3 class="txt-tl">Web Development</h3>
              <p class="txt-para">We are a team of energetic people for developing websites in particular time, and contain web design, web content development and security configuration </p>
            </div>
          </div>
          <div class="col-md-6 wow fadeInRight delay-06s">
            <div class="icon">
              <i class="fa fa-lightbulb-o"></i>
            </div>
            <div class="icon-text">
              <h3 class="txt-tl">Best Database</h3>
              <p class="txt-para">AsaanSolution trise to provide the best Database for costumers with best database softwares 2019 and here accessibilty for database is prompt  </p>
            </div>
          </div>
          <div class="col-md-6 wow fadeInRight delay-06s">
            <div class="icon">
              <i class="fa fa-clock-o"></i>
            </div>
            <div class="icon-text">
              <h3 class="txt-tl">Save Tons of Time</h3>
              <p class="txt-para">AsaanSolution offers 24hours online services to save time which is valuable for every company</p>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- aks Hawz  -->
  <section class="section-padding parallax bg-image-2 section wow fadeIn delay-08s" id="cta-2"> </section>
  

  <!---->
  <!----> 
  <!-- AsaanSolution Team -->
  <section class="section-padding wow fadeInUp delay-02s" id="team">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-12">
          <div class="section-title">
            <h2 class="head-title">AsaanSolution Team</h2>
            <hr class="botm-line">
            <p class="sec-para">our goal is to provide ease and success...</p>
          </div>
        </div>
        <div class="col-md-9 col-sm-12">
          <div class="col-md-4 col-sm-6 padding-right-zero">
            <div class="portfolio-box design">
              <img id="EPhoto" src="<?php echo $assets;?>/img/port01.jpg" alt="" class="img-responsive">
            </div>
          </div>
          <div class="col-md-4 col-sm-6 padding-right-zero">
            <div class="portfolio-box design">
              <img id="EPhoto" src="<?php echo $assets;?>/img/port02.jpg" alt="" class="img-responsive">
            </div>
          </div>
          <div class="col-md-4 col-sm-6 padding-right-zero">
            <div class="portfolio-box design">
              <img id="EPhoto" src="<?php echo $assets;?>/img/port03.jpg" alt="" class="img-responsive">
            </div>
          </div>
          <div class="col-md-4 col-sm-6 padding-right-zero">
            <div class="portfolio-box design">
              <img id="EPhoto" src="<?php echo $assets;?>/img/port04.jpg" alt="" class="img-responsive">
            </div>
          </div>
          <div class="col-md-4 col-sm-6 padding-right-zero">
            <div class="portfolio-box design">
              <img id="EPhoto" src="<?php echo $assets;?>/img/port05.jpg" alt="" class="img-responsive">
            </div>
          </div>
          <div class="col-md-4 col-sm-6 padding-right-zero">
            <div class="portfolio-box design">
              <img id="EPhoto" src="<?php echo $assets;?>/img/port06.jpg" alt="" class="img-responsive">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!---->
  <!---->
  <!-- sign up -->
  <section class="section-padding wow fadeInUp delay-05s" id="contact">
    <div class="container">
      <div class="row white">
        <div class="col-md-8 col-sm-12">
          <div class="section-title">
            <h2 class="head-title black">Join Us</h2>
            <hr class="botm-line">
          </div>
        </div>

        <div class="col-md-12 col-sm-12">
          <div class="col-md-4 col-sm-6" style="padding-left:0px;">
            <h3 class="cont-title">Sign Up</h3>
            <div id="errormessage"></div>
            <div class="contact-info">
            
               <form action="<?php echo base_url(); ?>home/insert_user" enctype ="multipart/form-data" method="post" role="form" >
                
                <div class="form-group">
                  <input type="text" name="user_name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validation"></div>
                </div>

                <div class="form-group">
                  <input type="email" class="form-control" name="user_email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validation"></div>
                </div>

                <div class="form-group">
                  Profile Photo:
                  <input type="file" class="form-control" name="user_image"></input>
                 
                </div>

                <div class="form-group">
                 Freelancer <input type="checkbox" class="form-control" value = "1" name="user_kind" id="freelancer" />
                 Offer a Job<input type="checkbox" class="form-control" value = "2" name="user_kind" id="offer_project" />
                </div>

                <div class="form-group">
                  <input type="password" name="user_password" class="form-control" id="user_password" placeholder="Password" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <br>
                  <input type="password"  class="form-control" id="user_password" placeholder="Password" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validation"></div>
                </div>

                <button type="submit" value="submit" class="btn btn-send">Create Account</button>
              </form>

            </div>
          </div>

          <!-- Nawishta Hamrah ba Sign UP -->
          <div class="col-md-4 col-sm-6">
            <h3 class="cont-title">Visit Us</h3>
            <div class="location-info">
              <p class="white"><span aria-hidden="true" class="fa fa-map-marker"></span>Kabul Afghanistan Dist 5th, Polytechnic university</p>
              <p class="white"><span aria-hidden="true" class="fa fa-phone"></span>Phone: 0093 779 63 63 60</p>
              <p class="white"><span aria-hidden="true" class="fa fa-envelope"></span>Email: <a href="" class="link-dec">Admin@AsaanSolution.com</a></p>
            </div>
          </div>

          <div class="contact-icon-container hidden-md hidden-sm hidden-xs">
              <span aria-hidden="true" class="fa fa-envelope-o"></span>
            </div>

          <div class="col-md-8 col-sm-9">
          <div class="col-md-4 col-sm-6" style="padding-left:0px;">
            <h3 class="cont-title">Login</h3>
            <div id="errormessage"></div>
            <div class="contact-info">

<!-- Login Page  -->
              <form action="<?php echo base_url();?>home/login_user" target="_blank" method="post" role="form" >
                <div class="form-group">
                  <input type="text" name="user_pn" class="form-control" id="pn" placeholder="PN:****"/>
                  <div class="validation"></div>
                </div>

                <div class="form-group">
                  <input type="password" name="user_password" class="form-control" id="password" placeholder="Password" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validation"></div>
                </div>
                <button type="submit" class="btn btn-send" data-toggle="tooltip" data-placement="bottom" data-html="true" title="<h4>PN & Password</h4><p>Enter your (PN) Private number which given to you after you signed up.</p>">Login</button>
                <br>

               
                
                <a href="#">I dont remember PN</a>
              </form>
            

            </div>
          </div>
          </div>

          </div>
        </div>
      </div>
    </div>
  </section>
 
<?php 
$this->load->view('includes/footer.php');
?>