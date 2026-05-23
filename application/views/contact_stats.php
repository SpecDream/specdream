<div class="agency-contactus">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="agency-section-title text-center style4">
                    <h4 class="main-title"> Request Demo & Price or Send your query now</h4>
                    <span class="line"></span>
                </div>
            </div>
        </div>        
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="from-wraper">
                    <form action="<?php echo base_url('request') ?>" id="form-contact" class="contact-form style2" method="post" onsubmit="return submitCaptchaForm();">
                         <?php if(isset($success)){ ?>
                        <div class="alert alert-success" role="alert">Thank's for your request, Specdream team will connect with you soon...</div>
                        <?php } ?>
                        <input type="hidden" id="ip" value="" name="ip" >
                        <input type="hidden" id="address" value="" name="address" >
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="text" required placeholder="Your Name" name="name" id="xs_contact_name" class="form-control">
                            </div>
                            <div class="col-lg-6">
                                <input type="email" required placeholder="Email" name="email" id="xs_contact_email" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <input type="text" placeholder="Where you find your business?" name="business" id="xs_contact_number" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <input type="text" required placeholder="Subject" name="subject" id="xs_contact_subject" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <textarea name="message" required id="x_contact_massage" placeholder="Your Message... *" class="form-control" cols="30" rows="10"></textarea>
                            </div>
                        </div>
                        
                        <div class="g-recaptcha" data-sitekey="6Leg5REqAAAAAKyRmvHuQVT9N8NK26A7h5tnvCWL" data-callback="verifyCaptcha"></div>
                        <div id="g-recaptcha-error"></div>
                        
                        <!--<div class="g-recaptcha" id="rcaptcha"  data-sitekey="6Leg5REqAAAAAKyRmvHuQVT9N8NK26A7h5tnvCWL"></div>
                        <span id="captcha" style="color:red" /></span>--> <!-- this will show captcha errors -->

                        <div class="btn-wraper">
                            <input type="submit" name="submit" id="" class="btn btn-primary" value="Submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="xs-section-padding contact-info-area" data-scrollax-parent="true">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-lg-6">
                <div class="contact-info2">
                    <div class="agency-section-title">
                        <h4 class="main-title">Send your queries to us</h4>
                    </div>
                    <p>Our team of experts are available around the clock, send your queries we will answer your queries as soon as possible</p>
                    <ul class="contact-info-list">
                        <li>
                            <strong>Address</strong>
                            <div class="list-content">
                                <a href="#" target="_blank">
54 ponnagaram broad way
Madurai
625016
IN
.</a>
                            </div>
                        </li>
                        <li>
                            <strong>Phone</strong>
                            <div class="list-content">
                                <a href="tel:+91 7448426793">+91 7448426793</a>
                            </div>
                        </li>
                        <li>
                            <strong>Email</strong>
                            <div class="list-content">
                                <a href="mailto:specdream.com@gmail.com">specdream.com@gmail.com</a>
                            </div>
                        </li>
                    </ul>
                    <ul class="social-list version-2">
                <li><a href="https://www.facebook.com/Specdream/" class="facebook"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="https://twitter.com/specdream" class="twitter"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="https://www.linkedin.com/company/specdream-technologies" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="https://www.instagram.com/specdream/" class="instagram"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="contact-info-image-wraper">
                    <div class="contact-info-image">
                        <img src="<?php echo base_url();?>assets/images/sd/team.svg" alt="Team">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="xs-map">
    <div id="xs-map"></div>
</div>


