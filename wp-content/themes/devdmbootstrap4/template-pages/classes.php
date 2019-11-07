<?php get_header(); 

/*
Template Name: Classes Page
*/
?>
 
<?php get_template_part('template-parts/head'); ?>

<?php get_template_part('template-parts/nav','header'); ?>

<div class="container-fluid">

<div class="row" style="margin-top:20px;">
        <div class="col-sm-12 text-center">
                             <span class = "label label_prg_events_title">
                        Our Classes</span>
        </div>
    </div>
 
    <div class="row" style="margin-bottom:20px;">
        <div class="col-sm-11 text-center">
            <img src="<?php echo get_template_directory_uri(); ?>/images/divider-line.png" class="smsc_img_divider_line" alt="divider">           
         </div>
    </div>
    <div class="row">
        <div class="col-sm-6 text-center">
            <img src="<?php echo get_template_directory_uri(); ?>/images/classes-beginner.jpg"  class="img-rounded smsc_img_beginner"  alt="beginner">
        </div>
        <div class="col-sm-6">
            <div class="row" >
                    <div class="col">
                             <span class = "label label_prg_events_title">
                             Beginner Classes</span>
                    </div>
            </div>
             

            <div class="row" style="margin-top:20px;">
                    <div class="col">
                    <p class="text-justify">
                    This class will teach the practitioner how to bring mindfulness to one's life by formal sitting, walking as well as through everyday activities. Practicing Mindfulness lowers stress, while increasing patience, contentment and understanding of oneself.	

These classes are 2-hour long, involving several guided meditation periods and a lecture about the practice, with a Q and A period. 
                    </p>
                    </div>

                    
            </div>
            <div class="row" style="margin-top:20px;">
                    <div class="col text-center">
                    <a href="<?php echo esc_url( get_permalink( get_page_by_title('beginner') ) ); ?>" class="btn btn-lg btn-outline">
                    Register</a> 
                    </div>
            </div>
        </div>
    </div>
    

    <div class="row" style="margin-top:20px;">
        <div class="col-sm-12 text-center">
        <img src="<?php echo get_template_directory_uri(); ?>/images/divider.png" class="smsc_img_divider" alt="divider">           
        </div>
    </div>

    <div class="row" style="margin-top:20px;">
       
        <div class="col-sm-6">
            <div class="row">
                    <div class="col">
                             <span class = "label label_prg_events_title">
                             Intermediate Classes</span>
                    </div>
            </div>
             

            <div class="row" style="margin-top:20px;">
                    <div class="col">
                    <p class="text-justify">

                    This class is 2-hour long, involving a 60-minute meditation time and a Dhamma talk (lecture about the practice with a Q and A period). 
                    </p>
                    </div>

             </div>
            <div class="row" style="margin-top:20px;">
                    <div class="col text-center">
                    <a href="<?php echo esc_url( get_permalink( get_page_by_title('intermediate') ) ); ?>" class="btn btn-lg btn-outline">
                    Register</a> 
                    </div>
            </div>
        </div>

        <div class="col-sm-6 text-center">
            <img src="<?php echo get_template_directory_uri(); ?>/images/classes-intermediate.jpg"  class="img-rounded smsc_img_beginner"  alt="beginner">
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
                             Retreats</span>
        </div>
    </div>

    <div class="row" style="margin-top:20px;" >
        <div class="col">

             <div class="row">
                <img class="col" style="width:350px;height:233px" src="<?php echo get_template_directory_uri(); ?>/images/retreat-daily.jpg"  
                 alt="Intermediate">
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
                    <a  href="<?php echo esc_url( get_permalink( get_page_by_title('dayretreat') ) ); ?>" class="btn btn-lg btn-beginner">
                    Register</a> 
                    </div>

 
                </a>    
                </div>        
        </div>
        <div class="col">
        
        <div class="row">
        <img class="col" style="width:350px;height:233px" src="<?php echo get_template_directory_uri(); ?>/images/retreat-monthly.jpg"  
         alt="Retreat Daily">
         </div>
        <div class="row">
        <span class = "col label label_title_beginner" style="margin-top:10px;">
        Monthly Retreat</span>
        
        </div>
        <div class="row">
        <div class="col">
            <p class="text-justify">

            Residential Retreat are usually held once a month, mostly on long weekends of the month at Chanmyay Yeiktha (Peaceful Abode) Retreat Center, at 19640 Silver Hope Rd, Hope, BC. It is announced on the Events page. You may also send an email request to sign up for e-mail notifications.             </p>
        </div>
        </div>


        <div class="row">
        <div class="col text-center">
            <a  href="<?php echo esc_url( get_permalink( get_page_by_title('monthlyretreat') ) ); ?>" class="btn btn-lg btn-beginner">
            Register</a> 
            </div>


        </a>    
        </div>        

        </div>
        <div class="col">
            
        <div class="row">
        <img class="col" style="width:350px;height:233px" src="<?php echo get_template_directory_uri(); ?>/images/retreat-annual.jpg"  
         alt="Monthly Retreat">
         </div>
        <div class="row">
        <span class = "col label label_title_beginner" style="margin-top:10px;">
            Annual Retreat</span>
        
        </div>
        <div class="row">
        <div class="col">
            <p class="text-justify">

            Annual Retreat are held in summer of each year for 9 to 17 days, at Chanmyay Yeiktha Retreat Center. Pre-registration and acceptance is required. Limited space.            </p>
        </div>
        </div>


        <div class="row">
        <div class="col text-center">
            <a href="<?php echo esc_url( get_permalink( get_page_by_title('annualretreat') ) ); ?>" class="btn btn-lg btn-beginner">
            Register</a> 
            </div>


        </a>    
        </div>                   
        </div>
    </div>
</div>

<?php get_template_part('template-parts/nav','footer'); ?>

<?php get_footer(); ?>