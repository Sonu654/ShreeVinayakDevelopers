<section id="aboutUs">
    <div class="container">
        <div class="heading text-center"> 
            <!-- Heading -->
            <h2>About Us</h2>
            <?php echo $about; ?>
        </div>
        <div class="row feature design">
            <div class="area1 columns right">
                <h3>Clean and Modern Design.</h3>
                <?php echo $design; ?>
                <a href="#" class="btn">Request Quote</a>
            </div>
            <div class="area2 columns feature-media left"> <img src="<?php echo base_url(); ?>Assets/images/feature-img-1.png" alt="" width="100%"> </div>
        </div>
        <div class="row dataTxt">	
            <div class="col-md-4 col-sm-6">
                <h4>What We Do?</h4>
                <?php echo $what_we; ?>
                <br>
            </div>

            <div class="col-md-4 col-sm-6">

                <h4>Why Choose Us?</h4>



                <?php echo $why_us; ?>
                <!-- Accordion starts -->
            </div>

            <div class="col-md-4 col-sm-6">
                <img src="<?php echo base_url(); ?>Assets/images/img.jpg" alt="" width="100%">
            </div>

        </div>
    </div>
</section> 
<section id="work" class="page-section page">
    <div class="container text-center">
        <div class="heading">
            <h2>Projects</h2>
                <?php echo $projects;?>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div id="portfolio">
                    <ul class="filters list-inline">
                        <li> <a class="active" data-filter="*" href="#">All</a> </li>
                        <li> <a data-filter=".photography" href="#">Commercial Plots</a> </li>
                        <li> <a data-filter=".branding" href="#">Residential Plots</a> </li>
                        <!--  <li> <a data-filter=".web" href="#"></a> </li>-->
                    </ul>
                    <ul class="items list-unstyled clearfix animated fadeInRight showing" data-animation="fadeInRight" style="position: relative; height: 438px;">
                        <li class="item branding" style="position: absolute; left: 0px; top: 0px;"> 

                            <figure class="effect-bubba">
                                <img src="<?php echo base_url(); ?>Assets/images/banner-1.jpg" alt="banner-1"/>
                                <figcaption>
                                    <h2>Trends</h2> 
                                    <a href="<?php echo base_url(); ?>Assets/images/banner-1.jpg" class="fancybox">View more</a> 
                                </figcaption>			
                            </figure> 

                        </li>




                        <li class="item photography" style="position: absolute; left: 292px; top: 0px;"> 
                            <figure class="effect-bubba">
                                <img src="<?php echo base_url(); ?>Assets/images/banner-2.jpg" alt="img02"/>
                                <figcaption>
                                    <h2>Trends</h2> 
                                    <a href="<?php echo base_url(); ?>Assets/images/banner-2.jpg" class="fancybox">View more</a> 
                                </figcaption>			
                            </figure> 
                        </li>
                        <li class="item branding" style="position: absolute; left: 585px; top: 0px;"> 
                            <figure class="effect-bubba">
                                <img src="<?php echo base_url(); ?>Assets/images//banner-3.jpg" alt="img02"/>
                                <figcaption>
                                    <h2>Trends</h2> 
                                    <a href="<?php echo base_url(); ?>Assets/images/banner-3.jpg" class="fancybox">View more</a> 
                                </figcaption>			
                            </figure>  
                        </li>
                        <li class="item photography" style="position: absolute; left: 877px; top: 0px;"> 
                            <figure class="effect-bubba">
                                <img src="<?php echo base_url(); ?>Assets/images/banner-4.jpg" alt="img02"/>
                                <figcaption>
                                    <h2>Trends</h2> 
                                    <a href="<?php echo base_url(); ?>Assets/images/banner-4.jpg" class="fancybox">View more</a> 
                                </figcaption>			
                            </figure>  
                        </li>
                        <li class="item photography" style="position: absolute; left: 0px; top: 219px;"> 
                            <figure class="effect-bubba">
                                <img src="<?php echo base_url(); ?>Assets/images/banner-5.jpg" alt="img02"/>
                                <figcaption>
                                    <h2>Trends</h2> "
                                    <a href="<?php echo base_url(); ?>Assets/images/banner-5.jpg" class="fancybox">View more</a> 
                                </figcaption>			
                            </figure> 
                        </li>
                        <li class="item web" style="position: absolute; left: 292px; top: 219px;"> 
                            <figure class="effect-bubba">
                                <img src="<?php echo base_url(); ?>Assets/images/banner-10.jpg" alt="img02"/>
                                <figcaption>
                                    <h2>Trends</h2> 
                                    <a href="<?php echo base_url(); ?>Assets/images/banner-10.jpg" class="fancybox">View more</a> 
                                </figcaption>			
                            </figure> 
                        </li>
                        <li class="item photography" style="position: absolute; left: 585px; top: 219px;">
                            <figure class="effect-bubba">
                                <img src="<?php echo base_url(); ?>Assets/images/banner-12.jpg" alt="img02"/>
                                <figcaption>
                                    <h2>Trends</h2> 
                                    <a href="<?php echo base_url(); ?>Assets/images/banner-12.jpg" class="fancybox">View more</a> 
                                </figcaption>			
                            </figure> 
                        </li>
                        <li class="item web" style="position: absolute; left: 877px; top: 219px;">
                            <figure class="effect-bubba">
                                <img src="<?php echo base_url(); ?>Assets/images/banner-13.jpg" alt="img02"/>
                                <figcaption>
                                    <h2>Trends</h2> 
                                    <a href="<?php echo base_url(); ?>Assets/images/banner-13.jpg" class="fancybox">View more</a> 
                                </figcaption>			
                            </figure> 
                        </li>
                        <li class="item web" style="position: absolute; left: 877px; top: 219px;">
                            <figure class="effect-bubba">
                                <img src="<?php echo base_url(); ?>Assets/images/banner-11.jpg" alt="img02"/>
                                <figcaption>
                                    <h2>Trends</h2> 
                                    <a href="<?php echo base_url(); ?>Assets/images/banner-11.jpg" class="fancybox">View more</a> 
                                </figcaption>     
                            </figure> 
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--<section id="plans" class="page-section">
  <div class="container">
    <div class="heading text-center"> 
<!-- Heading
<h2>Price</h2>
<p>At lorem Ipsum available, but the majority have suffered alteration in some form by injected humour.</p>
</div>
<div class="row flat">
<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
  <ul class="plan plan1">
    <li class="plan-name">Basic </li>
    <li class="plan-price"> <strong>$29</strong> / month </li>
    <li> <strong>5GB</strong> Storage </li>
    <li> <strong>1GB</strong> RAM </li>
    <li> <strong>400GB</strong> Bandwidth </li>
    <li> <strong>10</strong> Email Address </li>
    <li> <strong>Forum</strong> Support </li>
    <li class="plan-action"> <a href="#" class="btn btn-danger btn-lg">Signup</a> </li>
  </ul>
</div>
<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
  <ul class="plan plan2 featured">
    <li class="plan-name">Standard </li>
    <li class="plan-price"> <strong>$39</strong> / month </li>
    <li> <strong>5GB</strong> Storage </li>
    <li> <strong>1GB</strong> RAM </li>
    <li> <strong>400GB</strong> Bandwidth </li>
    <li> <strong>10</strong> Email Address </li>
    <li> <strong>Forum</strong> Support </li>
    <li class="plan-action"> <a href="#" class="btn btn-danger btn-lg">Signup</a> </li>
  </ul>
</div>
<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
  <ul class="plan plan3">
    <li class="plan-name">Advanced </li>
    <li class="plan-price"> <strong>$199</strong> / month </li>
    <li> <strong>50GB</strong> Storage </li>
    <li> <strong>8GB</strong> RAM </li>
    <li> <strong>1024GB</strong> Bandwidth </li>
    <li> <strong>Unlimited</strong> Email Address </li>
    <li> <strong>Forum</strong> Support </li>
    <li class="plan-action"> <a href="#" class="btn btn-danger btn-lg">Signup</a> </li>
  </ul>
</div>
<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
  <ul class="plan plan4">
    <li class="plan-name">Mighty </li>
    <li class="plan-price"> <strong>$999</strong> / month </li>
    <li> <strong>50GB</strong> Storage </li>
    <li> <strong>8GB</strong> RAM </li>
    <li> <strong>1024GB</strong> Bandwidth </li>
    <li> <strong>Unlimited</strong> Email Address </li>
    <li> <strong>Forum</strong> Support </li>
    <li class="plan-action"> <a href="#" class="btn btn-danger btn-lg">Signup</a> </li>
  </ul>
</div>
</div>
</div>
</section> --> <?php /*
                  <section id="team" class="page-section">
                  <div class="container">
                  <div class="heading text-center">
                  <!-- Heading -->
                  <h2>Team</h2>
                  <p>At variations of passages of Lorem Ipsum available, but the majority have suffered alteration..</p>
                  </div>
                  <!-- Team Member's Details -->
                  <div class="team-content">
                  <div class="row">
                  <div class="col-md-3 col-sm-6 col-xs-12">
                  <!-- Team Member -->
                  <div class="team-member pDark">
                  <!-- Image Hover Block -->
                  <div class="member-img">
                  <!-- Image  -->
                  <img class="img-responsive" src="<?php echo base_url(); ?>Assets/images/photo-1.jpg" alt=""> </div>
                  <!-- Member Details -->
                  <div class="team-title">
                  <h4>John Doe</h4>
                  <!-- Designation -->
                  <span class="pos">CEO</span>
                  </div>
                  <div class="team-socials"> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-google-plus"></i></a> <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-dribbble"></i></a> <a href="#"><i class="fa fa-github"></i></a> </div>
                  </div>
                  </div>
                  <div class="col-md-3 col-sm-6 col-xs-12">
                  <!-- Team Member -->
                  <div class="team-member pDark">
                  <!-- Image Hover Block -->
                  <div class="member-img">
                  <!-- Image  -->
                  <img class="img-responsive" src="<?php echo base_url(); ?>Assets/images/photo-2.jpg" alt=""> </div>
                  <!-- Member Details -->
                  <h4>Larry Doe</h4>
                  <!-- Designation -->
                  <span class="pos">Art Director</span>
                  <div class="team-socials"> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-google-plus"></i></a> <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-dribbble"></i></a> <a href="#"><i class="fa fa-github"></i></a> </div>
                  </div>
                  </div>
                  <div class="col-md-3 col-sm-6 col-xs-12">
                  <!-- Team Member -->
                  <div class="team-member pDark">
                  <!-- Image Hover Block -->
                  <div class="member-img">
                  <!-- Image  -->
                  <img class="img-responsive" src="<?php echo base_url(); ?>Assets/images/photo-3.jpg" alt=""> </div>
                  <!-- Member Details -->
                  <h4>Ranith Kays</h4>
                  <!-- Designation -->
                  <span class="pos">Manager</span>
                  <div class="team-socials"> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-google-plus"></i></a> <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-dribbble"></i></a> <a href="#"><i class="fa fa-github"></i></a> </div>
                  </div>
                  </div>
                  <div class="col-md-3 col-sm-6 col-xs-12">
                  <!-- Team Member -->
                  <div class="team-member pDark">
                  <!-- Image Hover Block -->
                  <div class="member-img">
                  <!-- Image  -->
                  <img class="img-responsive" src="<?php echo base_url(); ?>Assets/images/photo-4.jpg" alt=""> </div>
                  <!-- Member Details -->
                  <h4>Joan Ray</h4>
                  <!-- Designation -->
                  <span class="pos">Creative</span>
                  <div class="team-socials"> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-google-plus"></i></a> <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-dribbble"></i></a> <a href="#"><i class="fa fa-github"></i></a> </div>
                  </div>
                  </div>
                  </div>
                  </div>
                  </div>
                  <!--/.container-->
                  </section> */ ?>
<section id="contactUs" class="contact-parlex">
    <div class="parlex-back">
        <div class="container">
            <div class="row">
                <div class="heading text-center"> 
                    <!-- Heading -->
                    <h2>Contact Us</h2>
                    <p>Use this page if you have a question, need advertising information, or have an issue with a specific location. You can also call us  if you need a faster response.</p>
                </div>
            </div>
            <div class="row mrgn30">
                <form method="post" action="<?php echo site_url('Vinayak/MailUs'); ?>" id="contactfrm" role="form">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Enter name" title="Please enter your name (at least 2 characters)" required="required">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="Enter email" title="Please enter a valid email address" required="required">
                        </div>
                        <div class="form-group">
                            <label for="comments">Comments</label>
                            <textarea name="comment" class="form-control" id="comments" cols="3" rows="5" required="required" placeholder="Enter your message�" title="Please enter your message (at least 10 characters)"></textarea>
                            <button name="submit" type="submit" class="btn btn-lg btn-primary" id="submit">Submit</button>
                        </div>
                        <div class="result"></div>
                    </div>
                </form>
            </div>
        </div>
        <!--/.container--> 
    </div>
</section>
