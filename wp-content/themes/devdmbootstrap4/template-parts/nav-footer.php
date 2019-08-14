<?php /*if ( has_nav_menu( 'footer_menu' ) ) : */?>

    <div class="container dropup dmbs-footer-nav-container">
        <div class="row">
            <nav class="navbar navbar-expand-lg dmbs-footer-navbar col-sm-12" style="background-color:#932a0c;">
                

                <div class="row" style="color:#ffffff;">
                    <div class="col-sm-3">
                    <p class="text-left">
                    Chanmyay Yeiktha Canada
                    19640 Silverhope Rd, Hope BC, Canada, V0X-1L2
                    </p>
 
                    </div>
                    <div class="col-sm-6 text-center">
                    <img class="smsc_logo_img"  
                    
                    src="<?php echo get_template_directory_uri(); ?>/images/logo-300x300.png" 
                         
                    alt="Logo">
                    <p class="text-center">

                    Non- Profit Orginization Registeration Number . S -53043
                    Copyright © Satipatthana Meditation Society of Canada
                    </p>
                    </div>
                    <div class="col-sm-3">
                    <p class="text-right">
                        Made with love, Dāna  &amp; Mettā by Sumi Kim, Min Min Thein, Pengfei Shen &amp; AyeMin.
                    </p>
</div>

                </div>


                <!-- Toggle Button -->
                <button class="navbar-toggler dmbs-footer-nav-mobile-toggle" type="button" data-toggle="collapse" data-target="#footer-nav-content" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="fa fa-bars"></span> <?php esc_html_e('Menu','devdmbootstrap4'); ?>
                </button>

                <!-- Nav Content -->
                <div class="collapse navbar-collapse" id="footer-nav-content">
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
                            'theme_location'    => 'footer_menu',
                            'depth'             => 2,
                            'container'         => '',
                            'container_class'   => '',
                            'menu_class'        => 'dmbs-footer-nav navbar-nav mr-auto',
                            'walker'            => $dmbswalker
                        )
                    );*/
                    ?>
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

<?php /*endif;*/ ?>