
<?php get_header(); 

/*
Template Name: Upcoming Events Page
*/
?>
 
<?php get_template_part('template-parts/head'); ?>

<?php get_template_part('template-parts/nav','header'); ?>

<div class="container">
         <div class="smsc-header-container" style="margin-top:2rem;">
            <h1 class="smsc-header">Upcoming Events</h1>
            <img src="<?php echo get_template_directory_uri(); ?>/images/divider-line.png" class="smsc_img_divider_line img-fluid" alt="divider">
        </div>   
    
  
    <div class="row" style="margin-top:20px;">  
    <iframe src="https://calendar.google.com/calendar/embed?height=600&amp;wkst=1&amp;bgcolor=%23ffffff&amp;ctz=America%2FVancouver&amp;showTitle=0&amp;mode=MONTH&amp;showCalendars=1&amp;src=c21zYy5jYW5hZGFAZ21haWwuY29t&amp;color=%23039BE5" style="border-width:0" width="100%" height="600" frameborder="0" scrolling="no"></iframe>     </div>     
    </div>

<?php get_template_part('template-parts/nav','footer'); ?>

<?php get_footer(); ?>
 