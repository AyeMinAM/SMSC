<?php get_header();
/*
Template Name: intermediate Page
*/
?>
<?php get_template_part('template-parts/head'); ?>
<?php get_template_part('template-parts/nav','header'); ?>

<div class="container-fluid">
    <div class="row">
         <div class="lazy col-sm-12 smsc_beginner_img" data-src="<?php echo get_template_directory_uri(); ?>/images/Intermediate-classes.jpg">
            <div class="text-center header-class-title-height">
                      <span class="header-class-title">
                      Intermediate Meditation Class (Weekly)
                      </span>
                      <div style="margin-top:2rem;"> 
                        <a href="<?php echo esc_url( get_permalink( get_page_by_title('registerclass') ) ); ?>" class="btn btn-lg btn-register">
                          Register</a>
                      </div>
            </div>
          </div>
          <div class="row" style="margin-top:20px;">
          </div><!--THE END OF REGISTER BUTTON-->
        </div>
    </div>
</div>

<div class="container">
    <div class="row programs-info-table justify-content-lg-center">
        <div class="col-md-6 col-lg-5">
            <!-- <?php
                // Start the loop.
            while ( have_posts() ) : the_post(); 
            ?> -->
            <div class="row programs-info-row">
              
                    <div class="col row-100">
                              <div class="row-10 row-align-v-middle">
                                <i class = "icon icon ion-ios-calendar" style="font-size:25px;color:#932a0c;"></i>
                              </div>
                              <div class="row-90 row-align-v-middle">
                                <span class = "label label_schedule_info">
                                <?php echo get_post_meta( get_the_ID(), 'ScheduleDate', true ); ?></span>
                             </div>
                    </div>
            </div>
            <div class="row programs-info-row">
                 
                    <div class="col row-100">
                            <div class="row-10 row-align-v-middle">
                              <i class = "icon icon ion-ios-timer" style="font-size: 25px;color:#932a0c;"></i>
                            </div>
                              <div class="row-90 row-align-v-middle">
                               <span class = "label label_schedule_info">
                               <?php echo get_post_meta( get_the_ID(), 'ScheduleTime', true ); ?></span>
                             </div>
                    </div>
            </div>
            <div class="row programs-info-row">
              
                    <div class="col row-100">
                          <div class="row-10 row-align-v-middle">
                            <i class = "icon icon ion-card" style="font-size: 25px;color:#932a0c;"></i>
                          </div>
                          <div class="row-90 row-align-v-middle">
                             <span class = "label label_schedule_info">
                             <?php echo get_post_meta( get_the_ID(), 'Remark', true ); ?></span>
                          </div>
                    </div>
            </div>
            <!-- <div class="row programs-info-row">
                 <div class="col-sm-2"> </div>
                 <div class="col">
                             <span class = "label label_schedule_title">
                             Prerequisite
                             </span> 
                </div>
            </div>  
            <div class="row">
                 <div class="col-sm-2"> </div>
                    <div class="col">
                             <span class = "label label_schedule_info">
                             <?php echo get_post_meta( get_the_ID(), 'Prerequisite', true ); ?></span>
                    </div>
            </div> -->
           
        <!--     <?php           
            endwhile;  
            ?> -->
        </div>


        <div class="col-md-6 col-lg-5">
        <!-- <?php
                // Start the loop.
            while ( have_posts() ) : the_post(); 
            ?> -->
              
            <div class="row programs-info-row">
               
                    <div class="col row-100">
                       <div class="row-10 row-align-v-middle">
                            <i class = "icon icon ion-ios-stopwatch" style="font-size: 25px;color:#932a0c;"></i>
                        </div>
                        <div class="row-90 row-align-v-middle">
                             <span class = "label label_schedule_info">
                             <?php echo get_post_meta( get_the_ID(), 'Duration', true ); ?></span>
                        </div>
                    </div>
            </div>
            <div class="row programs-info-row">
           
                    <div class="col row-100">
                        <div class="row-10 row-align-v-middle">
                             <i class="icon icon ion-ios-location" style="font-size: 25px;color:#932a0c;"></i>
                        </div>
                        <div class="row-90 row-align-v-middle">
                             <span class="label label_schedule_info">
                             <?php echo get_post_meta( get_the_ID(), 'Address', true ); ?></span>
                        </div>
                    </div>
            </div>

             <div class="row programs-info-row">
                 
                    <div class="col row-100">
                        <div class="row-10 row-align-v-middle">
                             <img class="teacher-icon" src="<?php echo get_template_directory_uri(); ?>/images/teacher-icon.png">
                        </div>
                        <div class="row-90 row-align-v-middle">
                             <span class="label label_schedule_info">
                             <?php echo get_post_meta( get_the_ID(), 'teacher', true ); ?></span>
                        </div>
                    </div>
            </div>

        <!--     <div class="row programs-info-row">
                 <div class="col-sm-2"></div>
                 <div class="col">
                             <span class = "label label_schedule_title">
                             Additional Info
                             </span></div>
            </div>  
            <div class="row">
                 <div class="col-sm-2"> </div>
                    <div class="col">
                             <span class = "label label_schedule_info">
                             <?php echo get_post_meta( get_the_ID(), 'Additional_Info', true ); ?></span>
                    </div>
            </div> -->
          <!--   <?php           
            endwhile;  
            ?> -->
        </div>
    </div> <!--the end of header and customized option.-->

    <div class="row programs-info-table-2 justify-content-lg-center">
      <div class="col-md-6 col-lg-5">
            <div class="row programs-info-row">
                
                 <div class="col">
                             <span class = "label label_schedule_title">
                             Prerequisite
                             </span> 
                </div>
            </div>  
            <div class="row">
                
                    <div class="col">
                             <span class = "label label_schedule_info">
                             <?php echo get_post_meta( get_the_ID(), 'Prerequisite', true ); ?></span>
                    </div>
            </div>
        </div><!--the end of sm-6-->
        <div class="col-md-6 col-lg-5">
              <div class="row programs-info-row">
                
                 <div class="col">
                             <span class = "label label_schedule_title">
                             Additional Info
                             </span></div>
            </div>  
            <div class="row">
                
                    <div class="col">
                             <span class = "label label_schedule_info">
                             <?php echo get_post_meta( get_the_ID(), 'Additional_Info', true ); ?></span>
                    </div>
            </div>
        </div><!--the end of sm-6-->
    </div>
    
    <div class="row" style="margin-top:20px;">
        <div class="col-sm-12 text-center">
        <img src="<?php echo get_template_directory_uri(); ?>/images/divider.png" class="smsc_img_divider" alt="divider">           
        </div>
    </div>
</div>

<div class="container">
    <div class="row">  
        <div class="col-md-8">
          <div class="card-smsc-description">
          <h1 class = "smsc-header">Description</h1>
            <div class="row">
                    <div class="col">
                    <p class="text-justify">
                    <?php
                    // Start the loop.
                    while ( have_posts() ) : the_post(); 
                         the_content(); 
                    endwhile;  
                         ?>
                    </p>
                    </div>
            </div>
          </div><!--end card-smsc-description-->
        </div><!--end column-->
        <div class="col-md-4 text-center proverb">
          <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/smsc-proverb-02.jpg">
        </div>
    </div>
    <div class="row" style="margin-top:20px;">
        <div class="col-sm-12 text-center">
        <img src="<?php echo get_template_directory_uri(); ?>/images/divider.png" class="smsc_img_divider" alt="divider">           
        </div>
    </div>
</div>

<div class="container">
        <h1 class="smsc-header" style="margin-bottom: 1rem">Other Programs &amp; Retreats</h1>
        <div class="row">
                 <div class="col-lg-4 col-md-6 col-xs-12">
                  <div class="card card-smsc">
                    <div class="card-o-programs-img-bottom smsc_header_img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/classes-beginner.jpg">
                    </div>
                    <div class="vertical-center">
                      <div class="card-block">
                        <h4 class="card-title">Beginner Classes</h4>
                        <p class="card-o-programs-text justify">Beginners Classes are an introduction to the meditation practice, to both beginners and the experienced practitioners with no previous exposure to Mahasi tradition. The program consists of six weekly sessions, 2-hour long, involving guided meditation and lectures about the practice with Q & A.  This course is offered several times a year.</p>
                        <div class="col text-center">
                        <a href="<?php echo get_site_url(); ?>/beginner" class="btn btn-lg btn-outline">
                        View details</a> 
                        </div>
                      </div>
                  </div><!--vertical center-->
                 </div><!--the end of card-->
                </div> <!--the end of col-md-4-->

                <img src="<?php echo get_template_directory_uri(); ?>/images/divider.png" class="divider-other-programs" alt="divider">  

                <div class="col-lg-4 col-md-6 col-xs-12">
                  <div class="card card-smsc">
                      <div class="card-o-programs-img-bottom smsc_header_img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/residential-retreat.jpg">
                        </div>
                        <div class="vertical-center">
                          <div class="card-block">
                            <h4 class="card-title">Residential Retreats</h4>
                            <p class="card-o-programs-text justify">Residential Retreat are usually held once a month, mostly on long weekends of the month at Chanmyay Yeiktha Retreat Centre in Hope, BC. It is announced on the Upcoming Events page. You may also send an email request to sign up for e-mail notifications.</p>
                            <div class="col text-center">
                            <a href="<?php echo get_site_url(); ?>/residential" class="btn btn-lg btn-outline">
                            View details</a> 
                            </div>
                          </div>
                      </div> <!--vertical center-->
                  </div> <!--the end of card-->
                </div> <!--the end of col-md-4-->

                <img src="<?php echo get_template_directory_uri(); ?>/images/divider.png" class="divider-other-programs" alt="divider">  

                <div class="col-lg-4 col-md-6 col-xs-12">
                  <div class="card card-smsc card-smsc-others-programs-last">
                       <div class="card-o-programs-img-bottom smsc_header_img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/annual-retreat.jpg">
                       </div>
                       <div class="vertical-center">
                        <div class="card-block">
                          <h4 class="card-title justify">Annual Retreats</h4>
                          <p class="card-o-programs-text">Annual Retreat are usually held in summer of each year for 9 to 17 days, at Chanmyay Yeiktha Retreat Centre in Hope, BC. Pre-registration and acceptance is required. Limited space.</p>
                          <div class="col text-center">
                          <a href="<?php echo get_site_url(); ?>/annual" class="btn btn-lg btn-outline">
                          View details</a> 
                          </div>
                        </div>
                     </div> <!--vertical center-->
                  </div><!--the end of card-->
                </div> <!--the end of col-md-4-->

                
               
        </div>
</div>
<script>
jQuery(document).ready(function () {

    
    jQuery('.lazy').lazy({

      beforeLoad: function(element){

            console.log('image "' +  element.data('src')  + '" is about to be loaded');
      },
      afterLoad: function(element) {
             console.log('image "' + element.data('src') + '" was loaded successfully');
      },
      onError: function(element) {
            console.log('image "' +  element.data('src') + '" could not be loaded');
      },
      onFinishedAll: function() {
             console.log('lazy instance is about to be destroyed')
      }
  });

});
</script>


<?php get_template_part('template-parts/nav','footer'); ?>

<?php get_footer(); ?>
