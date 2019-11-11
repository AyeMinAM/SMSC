<?php get_header(); 

/*
Template Name: Annual Retreat2 Page
*/
?>
 
<?php get_template_part('template-parts/head'); ?>

<?php get_template_part('template-parts/nav','header'); ?>

<div class="container-fluid">

    <div class="row ">
         <div class="lazy col-sm-12 smsc_beginner_img" data-src="<?php echo get_template_directory_uri(); ?>/images/classes-beginner.jpg">


        <!-- <div class="col-sm-12 smsc_beginner_img" > -->
 
        <div class="row" style="margin-top:100px;">
            <div  class="col-sm-12 text-center"> 

                    <span class = "label label_beginner">
                    Mindfulness Insight Meditation Retreat </span>
            </div>
        </div>
        <div class="row" style="margin-top:20px;">
                <div  class="col-sm-12 text-center"> 

                            <span class = "label label_beginner">
                            for Annual </span>
                </div>
        </div>

        <div class="row" style="margin-top:20px;">
                    <div  class="col-sm-12 text-center"> 
                    <img src="<?php echo get_template_directory_uri(); ?>/images/divider.png" class="divider_beginner" alt="divider">           

                    </div>
        </div>
        <div class="row" style="margin-top:20px;">
            <div  class="col-sm-12 text-center"> 

                <a href="<?php echo esc_url( get_permalink( get_page_by_title('register_retreat') ) ); ?>" class="btn btn-lg btn-register">
                Register</a>
            </div>

        </div>
    
    <div>
    
    <div class="row" style="margin-top:80px;font-size: 20px;">
        
        <div class="col-sm-6">

            <?php
                // Start the loop.
            while ( have_posts() ) : the_post(); 
            ?>
              
            <div class="row" style="margin-top:20px;">
                 <div class="col-sm-2"> </div>
                    <div class="col">
                    
                            <i class = "icon icon ion-ios-calendar" style="font-size: 25px;color:#932a0c;"></i>
                              <span class = "label label_schedule_info">
                             <?php echo get_post_meta( get_the_ID(), 'ScheduleDate', true ); ?></span>
                    </div>
            </div>
            <div class="row" style="margin-top:10px;">
                 <div class="col-sm-2"> </div>
                    <div class="col">
                            <i class = "icon icon ion-ios-timer" style="font-size: 25px;color:#932a0c;"></i>

                             <span class = "label label_schedule_info">
                             <?php echo get_post_meta( get_the_ID(), 'ScheduleTime', true ); ?></span>
                    </div>
            </div>
            <div class="row" style="margin-top:10px;">
                 <div class="col-sm-2"> </div>
                    <div class="col">
                    
                            <i class = "icon icon ion-ios-circle-filled" style="font-size: 25px;color:#932a0c;"></i>

                             <span class = "label label_schedule_info">
                             <?php echo get_post_meta( get_the_ID(), 'Remark', true ); ?></span>
                    </div>
            </div>
            <div class="row" style="margin-top:10px;">
                 <div class="col-sm-2"> </div>
                 <div class="col">
                             <span class = "label label_schedule_title">
                             Prerequisite
                             </span> 
                </div>
            </div>  
            <div class="row" style="margin-top:10px;">
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
              
            <div class="row" style="margin-top:20px;">
                 <div class="col-sm-2"> </div>
                    <div class="col">
                            <i class = "icon icon ion-ios-stopwatch" style="font-size: 25px;color:#932a0c;"></i>

                             <span class = "label label_schedule_info">
                             <?php echo get_post_meta( get_the_ID(), 'Duration', true ); ?></span>
                    </div>
            </div>
            <div class="row" style="margin-top:10px;">
                 <div class="col-sm-2"> </div>
                    <div class="col">
                             <i class = "icon icon ion-ios-location" style="font-size: 25px;color:#932a0c;"></i>

                             <span class = "label label_schedule_info">
                             <?php echo get_post_meta( get_the_ID(), 'Address', true ); ?></span>
                    </div>
            </div>
 
            <div class="row" style="margin-top:10px;">
                 <div class="col-sm-2"> </div>
                 <div class="col">
                             <span class = "label label_schedule_title">
                             Additional Info
                             </span> 
                </div>
            </div>  
            <div class="row" style="margin-top:10px;">
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

        
    </div>
    
    
    <div class="row" style="margin-top:20px;">
        <div class="col-sm-12 text-center">
        <img src="<?php echo get_template_directory_uri(); ?>/images/divider.png" class="smsc_img_divider" alt="divider">           
        </div>
    </div>


  

    <div class="row" style="margin-top:70px;">
        
        <div class="col-sm-8">
            <div class="row">
                    <div class="col">
                             <span class = "label label_prg_events_title">
                             Description</span>
                    </div>
            </div>
             

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

        <div class="col-sm-3 text-center smsc_beginner_saffu_img" >
            <div class="row">
                <span class = "col label label_beginner" style="margin-top:10px;">
                    “A Jug fills <br> 
                    drop by drop”.</span>
            </div>

            <div class="row">
                <span class = "col label label_beginner_20" style="margin-top:190px;">
                Gautama Buddha</span>
            </div>
        </div>
    </div>
    
    
    <div class="row" style="margin-top:20px;">
        <div class="col-sm-12 text-center">
        <img src="<?php echo get_template_directory_uri(); ?>/images/divider.png" class="smsc_img_divider" alt="divider">           
        </div>
    </div>

    <div class="row" style="margin-top:20px;" >
        <div class="col-sm-12 text-left">
                             <span class = "label label_prg_events_title">
                             Other Programs &amp; Retreats</span>
        </div>
    </div>

    <div class="row" style="margin-top:20px;" >
        <div class="col">

             <div class="row">
                <img class="col" style="width:350px;height:233px" src="<?php echo get_template_directory_uri(); ?>/images/classes-intermediate.jpg"  
                 alt="Intermediate">
                 </div>
                <div class="row">
                <span class = "col label label_title_beginner" style="margin-top:10px;">
                    Beginner</span>
                
                </div>
                <div class="row">
                <div class="col">
                    <p class="text-justify">
                    This class will teach the practitioner how to bring mindfulness to one's life by formal sitting, walking as well as through everyday activities. Practicing Mindfulness lowers stress, while increasing patience, contentment and understanding of oneself.	

These classes are 2-hour long, involving several guided meditation periods and a lecture about the practice, with a Q and A period. 
                            </p>
                </div>
                </div>


                <div class="row">
                <div class="col text-center">
                    <a href="<?php echo esc_url( get_permalink( get_page_by_title('beginner') ) ); ?>" class="btn btn-lg btn-beginner">
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
            <p class="text-justify">
            Residential Retreat are usually held once a month, mostly on long weekends of the month at Chanmyay Yeiktha (Peaceful Abode) Retreat Center, at 19640 Silver Hope Rd, Hope, BC. It is announced on the Events page. You may also send an email request to sign up for e-mail notifications.             </p>
            </p>
        </div>
        </div>


        <div class="row">
        <div class="col text-center">
            <a href="<?php echo esc_url( get_permalink( get_page_by_title('dayretreat') ) ); ?>" class="btn btn-lg btn-beginner">
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
            Montly Retreat</span>
        
        </div>
        <div class="row">
        <div class="col">
            <p class="text-justify">
            Residential Retreat are usually held once a month, mostly on long weekends of the month at Chanmyay Yeiktha (Peaceful Abode) Retreat Center, at 19640 Silver Hope Rd, Hope, BC. It is announced on the Events page. You may also send an email request to sign up for e-mail notifications.             </p>

            </p>
        </div>
        </div>


        <div class="row">
        <div class="col text-center">
            <a href="<?php echo esc_url( get_permalink( get_page_by_title('monthlyretreat') ) ); ?>" class="btn btn-lg btn-beginner">
            Register</a> 
            </div>


        </a>    
        </div>                   
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


</div>

<?php get_template_part('template-parts/nav','footer'); ?>

<?php get_footer(); ?>
