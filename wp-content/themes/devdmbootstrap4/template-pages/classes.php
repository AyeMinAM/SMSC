<?php get_header(); 

/*
<<<<<<< HEAD
Template Name: Classes Page
=======
Template Name: classes Page
>>>>>>> f6117e66978393e502370689ada8e961ca8e4d60
*/
?>
 
<?php get_template_part('template-parts/head'); ?>

<?php get_template_part('template-parts/nav','header'); ?>


<div class="container">
<div class="title-bg">
            <div class="header-home">
                            <h1 class="smsc-header">Meditation Classes</h1>
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
                    <h4 class="card-title">Beginner Class</h4>
<<<<<<< HEAD
                    <p class="card-text">Mindfulness-Insight Course for Beginners Classes are an introduction to the meditation practice, to both beginners and the experienced practitioners with no previous exposure to the Pure Vipassana Meditation method (Mahasi tradition). The program consists of six weekly sessions, 2-hour long, involving guided meditation and lectures about the practice with questions and answers. This course is offered several times a year.</p>
=======
                    <p class="card-text">The Mindfulness-Insight course for beginners is an introduction to the meditation practice.  This class is for both beginners and experienced practitioners that have no previous exposure to the Pure Vipassana Meditation method (Mahasi tradition). The program consists of six weekly sessions, 2 hours long, involving guided meditation and lectures about the practice with questions and answers. This course is offered several times a year.</p>
>>>>>>> 01579bc07d630d7c85e2369ea31e2de4cf9b0b6a
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
                    <h4 class="card-title">Intermediate Class</h4>
<<<<<<< HEAD
                    <p class="card-text">Intermediate Weekly Class is 2-hour long, involving a 60-minute meditation time and a Dhamma talk (lecture about the practice with a Q and A period). The Intermediate class is year-round, weekly on Tuesday evenings.</p>
=======
                    <p class="card-text">The Intermediate class is held weekly on Tuesday evenings and is also 2 hours long.  It involves a 60 minute meditation time, followed by a Dhamma talk (lecture about the practice with a Q and A period). The intermediate class is an ongoing year-round program.</p>
>>>>>>> 01579bc07d630d7c85e2369ea31e2de4cf9b0b6a
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
</div>


<?php get_template_part('template-parts/nav','footer'); ?>

<?php get_footer(); ?>