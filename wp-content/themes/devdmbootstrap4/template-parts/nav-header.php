<?php /* if ( has_nav_menu( 'main_menu' ) ) :*/ ?>

    <div class="dmbs-header-nav-container" style="background-color: #932a0c;" >


        <div class="d-flex container nav-container">
       
            <nav class="navbar navbar-expand-lg dmbs-header-navbar menu-equally-divide">

                <!-- Toggle Button -->
                <button class="navbar-toggler dmbs-header-nav-mobile-toggle" type="button" data-toggle="collapse" data-target="#header-nav-content" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="fa fa-bars"></span> <?php esc_html_e('Menu','devdmbootstrap4'); ?>
                </button>

                <!-- Nav Content -->
                <div class="collapse navbar-collapse" id="header-nav-content">
                
                    <?php
 
                    //grab the Theme Mod Setting for Enabling the Enhanced Menu Walker
                    $loadEnhancedMenu = get_theme_mod('devdmbootstrap4_enhanced_menu_setting', 1);

                    if ($loadEnhancedMenu == 1) {
                        $dmbswalker = new devdmbootstrap_enhanced_nav_walker();
                    } else {
                        $dmbswalker = new devdmbootstrap_nav_walker();
                    }
     
 /*
                    wp_nav_menu( array(
                            'theme_location'    => 'main_menu',
                            'depth'             => 2,
                            'container'         => '',
                            'container_class'   => '',
                            'menu_class'        => 'dmbs-header-nav navbar-nav mr-auto',
                            'walker'            => $dmbswalker,
                            'item_sep' => '&middot;'
                            )
                    );
  */
                    ?>
                    <div class="menu-left">

                    <ul class="nav navbar-nav  ul-equally-divide">
                        <li class="nav-item active smsc_menu_left one-quarter home menu-home-center ">
                            <a class="nav-link" href="<?php echo get_home_url(); ?>">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item dropdown smsc_menu_left one-quarter programs">
                            <a class="nav-link dropdown-toggle" href="#"   role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="nav-text-break">Meditation</span><span >Programs</span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="<?php echo esc_url( get_permalink( get_page_by_title('beginner') ) ); ?>">Beginner</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Intermediate</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Day Retreat</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Monthly Retreat</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Annual Retreat</a>
                            </div>
                        </li>

                        <li class="nav-item dropdown smsc_menu_left one-quarter smsc">
                            <a class="nav-link dropdown-toggle" href="#"   role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="nav-text-break nav-text-break-center">SMSC</span>
                            <span > Community</span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="<?php echo esc_url( get_permalink( get_page_by_title('upcomingevents') ) ); ?>">Upcoming Events</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="<?php echo esc_url( get_permalink( get_page_by_title('gallery') ) ); ?>">Photo Gallery</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="<?php echo esc_url( get_permalink( get_page_by_title('volunteer') ) ); ?>">Volunteers</a>
                             
                            </div>
                        </li>

 

                        
                    </ul>

                   </div>

                    <div class="menu-center"><img class="smsc_logo_img"  
                    
                    src="<?php echo get_template_directory_uri(); ?>/images/logo-300x300.png" 
                         
                    alt="Logo"></div>

                    <div class="menu-right">
                    <ul class="nav navbar-nav navbar-right ul-equally-divide">

                    <li class="nav-item dropdown smsc_menu_right one-quarter about">
                        <a class="nav-link dropdown-toggle" href="#"   role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        About
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="<?php echo esc_url( get_permalink( get_page_by_title('aboutsmsc') ) ); ?>">About SMSC</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="<?php echo esc_url( get_permalink( get_page_by_title('teacher') ) ); ?>">The Teachers</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="<?php echo esc_url( get_permalink( get_page_by_title('project') ) ); ?>">The Project</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="<?php echo esc_url( get_permalink( get_page_by_title('pastactivities') ) ); ?>">Past Activities</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="<?php echo esc_url( get_permalink( get_page_by_title('contactus') ) ); ?>">Contact SMSC</a>
                        </div>
                    </li>
                    <li class="nav-item smsc_menu_right one-quarter library">
                        <a class="nav-link" href="<?php echo get_site_url(); ?>/library/">Library</a>
                    </li>
                    <li class="one-quarter donation">
                        <button class="btn navbar-btn button-donation smsc_margin" >Donation</button>
                    </li>
                    </ul>
                </div>
                </div>

            </nav>
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

<?php /* endif; */?>
 