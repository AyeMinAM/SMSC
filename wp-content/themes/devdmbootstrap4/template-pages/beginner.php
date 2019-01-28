<?php get_header(); 

/*
Template Name: Beginner Page
*/
?>
 
<?php get_template_part('template-parts/head'); ?>

<?php get_template_part('template-parts/nav','header'); ?>

<div class="container">

    <div class="row ">
        <div class="col-sm-12 smsc_beginner_img" >
 
        <div class="row" style="margin-top:150px;">
            <div  class="col-sm-12 text-center"> 

                    <span class = "label label_beginner">
                    Mindfulness Insight Meditation Classes </span>
            </div>
        </div>
        <div class="row" style="margin-top:20px;">
                <div  class="col-sm-12 text-center"> 

                            <span class = "label label_beginner">
                            for Beginner</span>
                </div>
        </div>

        <div class="row" style="margin-top:20px;">
                    <div  class="col-sm-12 text-center"> 
                    <img src="<?php echo get_template_directory_uri(); ?>/images/divider.png" class="divider_beginner" alt="divider">           

                    </div>
        </div>
        <div class="row" style="margin-top:20px;">
            <div  class="col-sm-12 text-center"> 

                <a href="<?php echo esc_url( get_permalink( get_page_by_title('registerclass') ) ); ?>" class="btn btn-lg btn-register">
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
                    
                            <i class = "icon icon ion-ios-calendar" style="font-size: 40px;color:#932a0c;"></i>
                              <span class = "label label_schedule_info">
                             <?php echo get_post_meta( get_the_ID(), 'ScheduleDate', true ); ?></span>
                    </div>
            </div>
            <div class="row" style="margin-top:10px;">
                 <div class="col-sm-2"> </div>
                    <div class="col">
                            <i class = "icon icon ion-ios-timer" style="font-size: 40px;color:#932a0c;"></i>

                             <span class = "label label_schedule_info">
                             <?php echo get_post_meta( get_the_ID(), 'ScheduleTime', true ); ?></span>
                    </div>
            </div>
            <div class="row" style="margin-top:10px;">
                 <div class="col-sm-2"> </div>
                    <div class="col">
                    
                            <i class = "icon icon ion-ios-circle-filled" style="font-size: 40px;color:#932a0c;"></i>

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
                            <i class = "icon icon ion-ios-stopwatch" style="font-size: 40px;color:#932a0c;"></i>

                             <span class = "label label_schedule_info">
                             <?php echo get_post_meta( get_the_ID(), 'Duration', true ); ?></span>
                    </div>
            </div>
            <div class="row" style="margin-top:10px;">
                 <div class="col-sm-2"> </div>
                    <div class="col">
                             <i class = "icon icon ion-ios-location" style="font-size: 40px;color:#932a0c;"></i>

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

        <div class="col-sm-4 text-center smsc_beginner_saffu_img">
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
                    Book</a> 
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
            Book</a> 
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
            Book</a> 
            </div>


        </a>    
        </div>                   
        </div>
    </div>
</div>

<?php get_template_part('template-parts/nav','footer'); ?>

<?php get_footer(); ?>