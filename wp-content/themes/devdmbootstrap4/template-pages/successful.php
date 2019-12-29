
 
 <?php get_header(); 

/*
Template Name: successful Class Page
*/
?>
<style>
  .successfully-message{
  font-family: "OpenSans", sans-serif;
}

a, a:hover, a:active{
   color:#93210c;
}


.thankyou{
  font-size: 2rem;
}

.email-confirm{
  font-style: italic;
  font-size: 1rem;
  padding-top: 1rem;
}

.btn-donation{
    padding: 0.5rem 2.5rem;
    font-size: 16px;
    font-weight: normal;
    font-style: normal;
    font-stretch: normal;
    line-height: normal;
    letter-spacing: normal;
    text-align: center;
    color: #ffffff;
    background-color: #ff9933;
    border-radius:0.25rem;
  }
  .jumbotron{
    background-color: #fff;
    box-shadow: 0 1px 11px 0 rgba(0, 0, 0, 0.17);
    border: none;
    border-radius: .5rem;
    padding: 3rem;
  }
</style>
 
 <div class="jumbotron text-xs-center">
 <!--  <h1 class="display-3">Thank You!</h1>
  <div class="alert alert-success" role="alert">You have submitted successfully!</div>
 -->
  <div class="successfully-message">
    <div class="thankyou">Thank you.</div>
    <div>You have submitted successfully!</div>
    <div class="email-confirm">Please check your email for confirmation.</div>
  </div>
  
  <hr>
  <p>
    If you have any questions, please <a href="<?php echo esc_url( get_permalink( get_page_by_title('contactus') ) ); ?>">Contact us.</a>
  </p>
  <div class="">
    <p>If you would like to donate, please go to </p>
    <a class="btn-donation" href="<?php echo get_site_url(); ?>/donation" role="button">Donation</a>
  </div>
</div>
 