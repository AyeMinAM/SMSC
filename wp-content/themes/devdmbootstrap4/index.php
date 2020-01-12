<?php get_header(); ?>

<?php get_template_part('template-parts/head'); ?>

<?php get_template_part('template-parts/nav','header'); ?>


<div class="container-fluid lazy smsc_header_img" data-src="<?php echo get_template_directory_uri(); ?>/images/hero-header.jpg">
    <!-- <div class="lazy col-sm-12 smsc_header_img" data-src="<?php echo get_template_directory_uri(); ?>/images/hero-header.jpg">
    </div> -->
    <span class="slogan">
        <ul>
            <li>Strive with Diligence</li>
            <li>Live in Mindfulness</li>
            <li>Rejoice in Heedfulness</li>
        </ul>
        <img src="<?php echo get_template_directory_uri(); ?>/images/divider-white.png" class="smsc_img_divier_white" alt="divider">  
        <div>
        <a href="<?php echo get_site_url(); ?>/mprogram/" class="btn btn-lg btn-outline">
                Our Meditation Programs</a>
        </div>
    </span><!--the end of slogan-->
</div>

        <!-- <div   class="col-sm-12 smsc_header_img lazy"     > -->
<!-- <div class="container">
        <div class="row" style="margin-top:200px;">
            <div class="col-sm-7"></div>
            <div  class="col-sm-5 text-center"> 

                    <span class = "label label_prg_header">
                            Strive with Diligence</span>
            </div>
        </div>
        <div class="row">
                <div class="col-sm-7"></div>
                <div  class="col-sm-5 text-center"> 

                            <span class = "label label_prg_header">
                            Live in Mindfulness</span>
                </div>
        </div>


        <div class="row">
                    <div class="col-sm-7"></div>
                    <div  class="col-sm-5 text-center"> 
                            <span class = "label label_prg_header">
                        Rejoice in Heedfulness</span>
                    </div>
        </div>
        <div class="row">
                    <div class="col-sm-7"></div>
                    <div  class="col-sm-5 text-center"> 
                    <img src="<?php echo get_template_directory_uri(); ?>/images/divider-white.png" class="smsc_img_divier_white" alt="divider">           

                    </div>
        </div>
        <div class="row">
            <div class="col-sm-7"></div>
            <div  class="col-sm-5 text-center"> 


                <a href="<?php echo get_site_url(); ?>/mprogram/" class="btn btn-lg btn-outline">
                Our Meditation Programs</a>
            </div>

        </div> -->
    
    <div class="container">
        <!--title-->
        <div class="title-bg">
            <div class="header-home">
                            <h1 class="smsc-header">Programs & Events</h1>
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
                  <div class="card-img-bottom smsc_card_img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/classes-beginner.jpg">
                  </div>
                </div>
                <div class="col-md-6 vertical-center">
                  <div class="card-block">
                    <h4 class="card-title">Meditation Classes</h4>
                    <p class="card-text">The SMSC operates on a year-round basis. We offer weekly Mindfulness-Insight meditation courses for beginners and intermediate level practitioners. Beginner classes commence every 3 months and Intermediate classes are year-round and held weekly on Tuesday evenings.</p>
                    <p>All classes are offered free of charge, but donations are always appreciated. As we are a registered charitable organization, all donors will be issued receipts for income tax purposes.</p>
                    <div class="col text-center">
                    <a href="<?php echo get_site_url(); ?>/classes/" class="btn btn-lg btn-outline">
                    Find out more</a> 
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
                  <div class="card-img-bottom-odd-card smsc_card_img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/residential-retreat.jpg">
                  </div>
                </div>
                <div class="col-md-6 vertical-center order-md-1 ">
                  <div class="card-block-odd-card">
                    <h4 class="card-title">Meditation Retreats</h4>

                    <p class="card-text">Residential Retreats are offered 8 times a year, primarily on long weekends, at the Chanmyay Yeiktha Retreat Centre in Hope, BC.  Announcements are posted on our “Upcoming Events” page under SMSC community. You may also send us an email to sign up for notifications via email.</p>

                    <p>Annual Retreats are usually held in the summer of each year, these last from 9 to 17 days on average.  Pre-registration and acceptance are required for these due to limited accommodation space.</p>
                    <div class="col text-center">
                    <a href="<?php echo get_site_url(); ?>/retreats/" class="btn btn-lg btn-outline">
                    Find out more</a> 
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
                  <div class="card-img-bottom smsc_card_img_events" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/events.jpg">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="card-block-events">
                    <h4 class="card-title">Events</h4>

                    <p class="card-text">Special events are announced on our "Upcoming Events" page under SMSC Community. If you wish to be notified by email, please send us an email to receive notifications.</p>
                    
                    <div class="col text-center">
                    <a href="<?php echo get_site_url(); ?>/upcomingevents/" class="btn btn-lg btn-outline">
                    Find out more</a> 
                    </div>
                  </div>
                </div>
               
              </div>
            </div>
        </section>


 
   <!--  <div class="row">
        <div class="col-sm-6 text-center">
            <img 
            width="460" height="345"
            data-src="<?php echo get_template_directory_uri(); ?>/images/classes-beginner.jpg"  class="img-rounded smsc_img_beginner lazy"  alt="beginner">
        </div>
        <div class="col-sm-6">
            <div class="row">
                    <div class="col">
                             <span class = "label label_prg_events_title">
                             Classes</span>
                    </div>
            </div>
             

            <div class="row" style="margin-top:20px;" >
                    <div class="col">
                    <p class="text-justify">Ambitioni dedisse scripsisse iudicaretur. Cras mattis iudicium purus sit amet fermentum. Donec sed odio operae, eu vulputate felis rhoncus. Praeterea iter est quasdam res quas ex communi. At nos hinc posthac, sitientis piros Afros. Petierunt uti sibi concilium totius Galliae in diem certam indicere. Cras mattis iudicium purus sit amet fermentum.</p>
                    </div>

                    
            </div>
            <div class="row" style="margin-top:20px;">
                    <div class="col text-center">
                    <a href="<?php echo get_site_url(); ?>/classes/" class="btn btn-lg btn-outline">
                    Register</a> 
                    </div>
            </div>
        </div>
    </div> -->
    
   <!--  <div class="row" style="margin-top:20px;margin-bottom:20px;">
        <div class="col-sm-12 text-center">
        <img src="<?php echo get_template_directory_uri(); ?>/images/divider.png" class="smsc_img_divider" alt="divider">           
        </div>
    </div> -->

   <!--  <div class="row">
        <div class="col-sm-6">
            <div class="row" >
                    <div class="col">
                             <span class = "label label_prg_events_title">
                             Retreats</span>
                    </div>
            </div>
             

            <div class="row" style="margin-top:20px;">
                    <div class="col">
                    <p class="text-justify">Ambitioni dedisse scripsisse iudicaretur. Cras mattis iudicium purus sit amet fermentum. Donec sed odio operae, eu vulputate felis rhoncus. Praeterea iter est quasdam res quas ex communi. At nos hinc posthac, sitientis piros Afros. Petierunt uti sibi concilium totius Galliae in diem certam indicere. Cras mattis iudicium purus sit amet fermentum.</p>
                    </div>

                    
            </div>
            <div class="row" style="margin-top:20px;">
                    <div class="col text-center">
                    <a href="<?php echo get_site_url(); ?>/retreat/" class="btn btn-lg btn-outline">
                    Register</a> 
                    </div>
            </div>
        </div>
        <div class="col-sm-6 text-center">
             
            <img  width="460" height="345"
           data-src="<?php echo get_template_directory_uri(); ?>/images/retreat-daily.jpg" class="img-rounded smsc_img_beginner lazy" alt="retreat">
        </div>
    </div> -->
    
   <!--  <div class="row">
        <div class="col-sm-6 text-center">
            <img   width="460" height="345"
            data-src="<?php echo get_template_directory_uri(); ?>/images/events-02.jpg" class="img-rounded smsc_img_beginner lazy" alt="events">
        </div>
        <div class="col-sm-6">
            <div class="row">
                    <div class="col">
                             <span class = "label label_prg_events_title">
                             Events</span>
                    </div>
            </div>
             

            <div class="row" style="margin-top:20px;">
                    <div class="col">
                    <p class="text-justify">Ambitioni dedisse scripsisse iudicaretur. Cras mattis iudicium purus sit amet fermentum. Donec sed odio operae, eu vulputate felis rhoncus. Praeterea iter est quasdam res quas ex communi. At nos hinc posthac, sitientis piros Afros. Petierunt uti sibi concilium totius Galliae in diem certam indicere. Cras mattis iudicium purus sit amet fermentum.</p>
                    </div>

                    
            </div>
            <div class="row" style="margin-top:20px;">
                    <div class="col text-center">
                    <a href="#" class="btn btn-lg btn-outline">
                    Find out more</a> 
                    </div>
            </div>
        </div>
    </div> -->
    
    <div class="row">
        <div class="col-sm-12 text-center">
        <img src="<?php echo get_template_directory_uri(); ?>/images/divider.png" class="smsc_img_divider" alt="divider">           
        </div>
    </div>

    <div class="row">
        <h4 class = "label smsc-title" style="padding:0 1rem;">Check out our social media for news and update about our events and programs.
        </h4>
    </div>
    <div class="row" style="margin-top:20px;">
       <!--  <div class="col-md-4 text-center">
            <a class="btn social-media-button" href="https://www.meetup.com/en-AU/Mindfulness-Insight-Vipassana/" target="_blank" role="button" >
                    <h4 class = "col label smsc-title T-padding-5">SMSC on Meetup</span></h4>
                    <img class="col social-media-icons"src="<?php echo get_template_directory_uri(); ?>/images/meetup.png" alt="Facebook">
            </a>            
        </div> -->
         <div class="col-md-6 text-center">
            <a class="btn social-media-button" href="https://www.facebook.com/people/Chanmyay-Yeikthabc/100006727365131" target="_blank" role="button" >
                    <h4 class = "col label smsc-title T-padding-5">SMSC on Facebook</span></h4>
                    <img class="col social-media-icons" src="<?php echo get_template_directory_uri(); ?>/images/icons8-facebook-480.png"  alt="Facebook">
            </a>            
        </div>

        <div class="col-md-6 text-center">
            <a class="btn social-media-button" href="https://www.youtube.com/user/ChanmyayYeikthaBC" target="_blank" role="button" >
                    <h4 class = "col label smsc-title T-padding-5">SMSC on Youtube</span></h4>
                    <img class="col social-media-icons" src="<?php echo get_template_directory_uri(); ?>/images/icons8-play-button-480.png"  
                 alt="Youtube">
                </a>            
        </div>
    </div>


        <?php get_template_part( 'template-parts/sidebar', 'left' ); ?>

        <?php $dmbsColumnSize = devdmbootstrap_column_size('main'); ?>
      
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

