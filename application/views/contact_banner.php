 <?php if(isset($success)){ ?>
<div class="alert alert-success" role="alert">Thank's for your request, Specdream team will connect with you soon...</div>
<?php } ?>
<section class="banner-area-wraper">
    <div class="banner-slider-area">
        <div class="banner-slider owl-carousel">
            <div class="single-banner-slider" style="background-image: url(<?php echo base_url();?>assets/images/sd/support.svg);">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5 mr-auto">
                            <div class="agency-banner-content banner-style2">
                                <h1 class="banner-title">Contact us</h1>
                                <p>Feel Free, Our Team of Support are available 24/7</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="banner-overlay-bg">
        <img src="<?php echo base_url();?>assets/images/sd/b1.svg" alt="Banner1" class="banner-image1">
        <img src="<?php echo base_url();?>assets/images/sd/b2.svg" alt="Banner2" class="banner-image2">
        <img src="<?php echo base_url();?>assets/images/sd/dots.svg" alt="Dots" class="banner-dots banner-dots1">
        <img src="<?php echo base_url();?>assets/images/sd/dots.svg" alt="Dots1" class="banner-dots banner-dots2">
    </div>
</section>
<style type="text/css">
  .alert.alert-success {
        text-align: center;
        position: fixed;
        width: 100%;
    }
</style>