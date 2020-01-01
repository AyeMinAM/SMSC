<?php get_header(); 

/*
Template Name: mprograms Page
*/
?>
 
<?php get_template_part('template-parts/head'); ?>

<?php get_template_part('template-parts/nav','header'); ?>

<div class="container">
<div class="title-bg">
            <div class="header-home">
                            <h1 class="smsc-header">Our Meditation Programs</h1>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/divider-line.png" class="smsc_img_divider_line" alt="divider">
            </div>
        </div>
</div>

<div class="container">
        <!--first card-->
        <section>
            <div class="card card-smsc">
              <div class="row">
                 <div class="col-md-6 padding-adjust">
                  <div class="card-img-bottom smsc_header_img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/classes-beginner.jpg">
                  </div>
                </div>
                <div class="col-md-6 vertical-center">
                  <div class="card-block">
                    <h4 class="card-title">Beginner Classes</h4>
                    <p class="card-text">The Mindfulness-Insight course for beginners is an introduction to the meditation practice.  This class is for both beginners and experienced practitioners that have no previous exposure to the Pure Vipassana Meditation method (Mahasi tradition). The program consists of six weekly sessions, 2 hours long, involving guided meditation and lectures about the practice with questions and answers. This course is offered several times a year. </p>
                    <div class="col text-center">
                    <a href="<?php echo get_site_url(); ?>/Beginner" class="btn btn-lg btn-outline">
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
        <!--second card-->
         <section>
            <div class="card card-smsc">
              <div class="row">
                <div class="col-md-6 order-md-12 padding-adjust-left">
                  <div class="card-img-bottom-odd-card smsc_header_img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/Intermediate-classes.jpg">
                  </div>
                </div>
                <div class="col-md-6 vertical-center order-md-1 ">
                  <div class="card-block-odd-card">
                    <h4 class="card-title">Intermediate Classes</h4>
                    <p class="card-text">The intermediate class is held weekly on Tuesday evenings and is also 2 hours long.  It involves a 60 minute meditation time, followed by a Dhamma talk (lecture about the practice) followed by a question and answer session. The intermediate class is an ongoing year-round program.

 </p>
                    <div class="col text-center">
                    <a href="<?php echo get_site_url(); ?>/Intermediate" class="btn btn-lg btn-outline">
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

        <!--third card-->
         <section>
            <div class="card card-smsc">
              <div class="row">
                 <div class="col-md-6 padding-adjust">
                  <div class="card-img-bottom smsc_header_img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/residential-retreat.jpg">
                  </div>
                </div>
                <div class="col-md-6 vertical-center">
                  <div class="card-block">
                    <h4 class="card-title">Residential Retreats</h4>
                    <p class="card-text">A Residential Retreat is usually held once a month, primarily on long weekends, at the Chanmyay Yeiktha Retreat Centre in Hope, BC. Announcements are posted on our “Upcoming Events” page. You may also send us an email to sign up for notifications via email.

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
                    <h4 class="card-title">Annual Retreats</h4>
                    <p class="card-text">Annual Retreats are usually held in the summer of each year, these last from 9 to 17 days on average.  They are held at the Chanmyay Yeiktha Retreat Centre in Hope, B.C.  Pre-registration and acceptance are required for these due to limited accommodation space.
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