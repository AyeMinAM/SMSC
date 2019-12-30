<?php get_header(); 

/*
Template Name: retreats Page
*/
?>
 
<?php get_template_part('template-parts/head'); ?>

<?php get_template_part('template-parts/nav','header'); ?>

<div class="container">
<div class="title-bg">
            <div class="header-home">
                            <h1 class="smsc-header">Meditation Retreats</h1>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/divider-line.png" class="smsc_img_divider_line" alt="divider">
            </div>
        </div>
</div>

<div class="container">
         <section>
            <div class="card card-smsc">
              <div class="row">
                 <div class="col-md-6 padding-adjust">
                  <div class="card-img-bottom smsc_header_img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/residential-retreat.jpg">
                  </div>
                </div>
                <div class="col-md-6 vertical-center">
                  <div class="card-block">
<<<<<<< HEAD
                    <h4 class="card-title">Residential Retreat</h4>
                    <p class="card-text">Residential Retreats are usually held once a month, mostly on long weekends of the month at Chanmyay Yeiktha Retreat Center in Hope, BC. It is announced on the Upcoming Events page. You may also send an email request to sign up for e-mail notifications.
=======
                    <h4 class="card-title">Residential Retreats</h4>
                    <p class="card-text">A Residential Retreat is usually held once a month, primarily on long weekends, at the Chanmyay Yeiktha Retreat Centre in Hope, BC. Announcements are posted on our “Upcoming Events” page. You may also send us an email to sign up for notifications via email.

>>>>>>> 01579bc07d630d7c85e2369ea31e2de4cf9b0b6a
</p>
                    <div class="col text-center">
                    <a href="<?php echo get_site_url(); ?>/residential" class="btn btn-lg btn-outline">
                    View details</a> 
                    </div>
                  </div>
                </div>
               
              </div>
            </div>
        </section>

        <div class="row">
            <div class="col-sm-12 text-center">
            <img src="<?php echo get_template_directory_uri(); ?>/images/divider.png" class="smsc_img_divider" alt="divider">           
            </div>
        </div>

         <section>
            <div class="card card-smsc">
              <div class="row">
                <div class="col-md-6 order-md-12 padding-adjust-left">
                  <div class="card-img-bottom-odd-card smsc_header_img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/annual-retreat.jpg">
                  </div>
                </div>
                <div class="col-md-6 vertical-center order-md-1 ">
                  <div class="card-block-odd-card">
<<<<<<< HEAD
                    <h4 class="card-title">Annual Retreat</h4>
                    <p class="card-text">Annual Retreats are usually held in summer of each year for 9 to 17 days, at Chanmyay Yeiktha Retreat Center in Hope, BC. Pre-registration and acceptance are required due to limited space.
=======
                    <h4 class="card-title">Annual Retreats</h4>
                    <p class="card-text">Annual Retreats are usually held in the summer of each year, these last from 9 to 17 days on average.  Pre-registration and acceptance are required for these due to limited accommodation space.

>>>>>>> 01579bc07d630d7c85e2369ea31e2de4cf9b0b6a
</p>
                    <div class="col text-center">
                    <a href="<?php echo get_site_url(); ?>/annual" class="btn btn-lg btn-outline">
                    View details</a> 
                    </div>
                  </div>
                </div>
               
              </div>
            </div>
        </section>

</div>


<?php get_template_part('template-parts/nav','footer'); ?>

<?php get_footer(); ?>