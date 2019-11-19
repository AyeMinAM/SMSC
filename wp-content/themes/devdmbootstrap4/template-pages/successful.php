
 
 <?php get_header(); 

/*
Template Name: successful Class Page
*/
?>
 
 <div class="jumbotron text-xs-center">
  <div class="alert alert-success" role="alert">You have submitted successfully!</div>
  <h1 class="display-3">Thank You!</h1>
  <p class="lead"><strong>Please check your email</strong> for confirmation.</p>
  <hr>
  <p>
    Having trouble? <a href="<?php echo esc_url( get_permalink( get_page_by_title('contactus') ) ); ?>">Contact us</a>
  </p>
  <p class="lead">
    <a class="btn btn-primary btn-sm" href="<?php echo get_site_url(); ?>/donation" role="button">Donation</a>
  </p>
</div>
 