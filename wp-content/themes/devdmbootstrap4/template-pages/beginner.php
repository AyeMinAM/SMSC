<?php get_header();
/*
Template Name: Beginner Page
*/
?>
<?php get_template_part('template-parts/head'); ?>
<?php get_template_part('template-parts/nav','header'); ?>

<div class="container-fluid">
    <div class="row">
         <div class="lazy col-sm-12 smsc_beginner_img" data-src="<?php echo get_template_directory_uri(); ?>/images/classes-beginner.jpg">
            <div class="text-center header-class-title-height">
                      <span class="header-class-title">
                      Mindfulness Insight Meditation Classes</br>
                      for Beginner 
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
    <div class="row programs-info-table">
        <div class="col-sm-6">
            <?php
                // Start the loop.
            while ( have_posts() ) : the_post(); 
            ?>
            <div class="row programs-info-row">
                 <div class="col-sm-2"> </div>
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
                 <div class="col-sm-2"> </div>
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
                 <div class="col-sm-2"> </div>
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
            <div class="row programs-info-row">
                 <div class="col-sm-2"> </div>
                 <div class="col">
                             <span class = "label label_schedule_title">
                             Prerequisite
                             </span> 
            </div>
            </div>  
            <div class="row ">
                 <div class="col-sm-2"> </div>
                    <div class="col">
                             <span class = "label label_schedule_info">
                             <?php echo get_post_meta( get_the_ID(), 'Prerequisite', true ); ?></span>
                    </div>
            </div>
           
            <?php           
            endwhile;  
            ?>
        </div>


        <div class="col-sm-6">
        <?php
                // Start the loop.
            while ( have_posts() ) : the_post(); 
            ?>
              
            <div class="row programs-info-row">
                 <div class="col-sm-2"></div>
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
                 <div class="col-sm-2"></div>
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
            </div>
            <?php           
            endwhile;  
            ?>
         
        </div>
    </div> <!--the end of header and customized option.-->
    
    
    <div class="row" style="margin-top:20px;">
        <div class="col-sm-12 text-center">
        <img src="<?php echo get_template_directory_uri(); ?>/images/divider.png" class="smsc_img_divider" alt="divider">           
        </div>
    </div>
</div>

<div class="container">
    <div class="row">  
        <div class="col-sm-8 card-smsc-description">
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
        </div>
        <div class="col-sm-4 text-center">
          <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/smsc-proverb.jpg">
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
                    <div class="card-o-programs-img-bottom smsc_header_img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/Intermediate-classes.jpg">
                    </div>
                    <div class="vertical-center">
                      <div class="card-block">
                        <h4 class="card-title">Intermediate Class</h4>
                        <p class="card-o-programs-text">Ambitioni dedisse scripsisse iudicaretur. Cras mattis iudicium purus sit amet fermentum. Donec sed odio operae, eu vulputate felis rhoncus. Praeterea iter est quasdam res quas ex communi. At nos hinc posthac, sitientis piros Afros. (word counts here)</p>
                        <div class="col text-center">
                        <a href="<?php echo get_site_url(); ?>/intermediate" class="btn btn-lg btn-outline">
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
                            <h4 class="card-title">Residential Reteat</h4>
                            <p class="card-o-programs-text">Ambitioni dedisse scripsisse iudicaretur. Cras mattis iudicium purus sit amet fermentum. Donec sed odio operae, eu vulputate felis rhoncus. Praeterea iter est quasdam res quas ex communi.(word counts here)</p>
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
                          <h4 class="card-title">Annual Retreat</h4>
                          <p class="card-o-programs-text">Ambitioni dedisse scripsisse iudicaretur. Cras mattis iudicium purus sit amet fermentum. Donec sed odio operae, eu vulputate felis rhoncus. Praeterea iter est quasdam res quas ex communi. (word counts here) Ambitioni dedisse scripsisse iudicaretur. Cras mattis iudicium purus sit amet fermentum. Donec sed odio operae, eu vulputate felis rhoncus. Praeterea iter est quasdam res quas ex communi. (word counts here)</p>
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

<!--  <div class="row">
        <div class="col">

             <div class="row">
                <img class="col" style="width:350px;height:233px" src="<?php echo get_template_directory_uri(); ?>/images/classes-intermediate.jpg"  
                 alt="Intermediate">
              </div>
              <div class="row">
                <span class = "col label label_title_beginner" style="margin-top:10px;">
                    Intermediate</span>
                
              </div>
              <div class="row">
                <div class="col">
                    <p class="text-justify">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo</p>
                </div>
              </div>


                <div class="row">
                <div class="col text-center">
                    <a href="#" class="btn btn-lg btn-beginner">
                    Register</a> 
                    </div>

 
                </a>    
                </div>        
        </div>
        <div class="col">
        
        <div class="row">
        <img class="col" style="width:350px;height:233px" src="<?php echo get_template_directory_uri(); ?>/images/retreat-daily.jpg"  
         alt="Retreat Daily">
         </div>
        <div class="row">
        <span class = "col label label_title_beginner" style="margin-top:10px;">
        Day Retreat</span>
        
        </div>
        <div class="row">
        <div class="col">
            <p class="text-justify">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo</p>
        </div>
        </div>


        <div class="row">
        <div class="col text-center">
            <a href="#" class="btn btn-lg btn-beginner">
            Register</a> 
            </div>


        </a>    
        </div>        

        </div>
        <div class="col">
            
        <div class="row">
        <img class="col" style="width:350px;height:233px" src="<?php echo get_template_directory_uri(); ?>/images/retreat-monthly.jpg"  
         alt="Monthly Retreat">
         </div>
        <div class="row">
        <span class = "col label label_title_beginner" style="margin-top:10px;">
            Monthly Retreat</span>
        
        </div>
        <div class="row">
        <div class="col">
            <p class="text-justify">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo</p>
        </div>
        </div>


        <div class="row">
        <div class="col text-center">
            <a href="#" class="btn btn-lg btn-beginner">
            Register</a> 
            </div>


        </a>    
        </div>                   
        </div>
</div> -->
<!--other classes and retreats-->


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
