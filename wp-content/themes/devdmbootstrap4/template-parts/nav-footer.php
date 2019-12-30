<?php /*if ( has_nav_menu( 'footer_menu' ) ) : */?>
    <div class="container-fluid" style="background-color:#932a0c;">
    <div class="container dropup dmbs-footer-nav-container">
        <footer class="row">
            <nav class="navbar navbar-expand-lg dmbs-footer-navbar col-sm-12 align-top">
                
                    <div class="col-md-4 col-sm-12">
                        <div class="footer-left">
                            <div>Address:</div>
                            <div>Chanmyay Yeiktha Canada</div>
                            <div>19640 Silverhope Rd, Hope BC</div>
                            <div>Canada, V0X 1L2</div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-12 footer-middle">
                        <img class="smsc_logo_footer"  src="<?php echo get_template_directory_uri(); ?>/images/logo-300x300.png" 
                         alt="Logo">
                        <div class="footer-middle-text">
                        <div>Not-for-Profit Organization Registration No. S -53043</div>
                        <div>Copyright © Satipatthana Meditation Society of Canada</div>
                        </div>
                    </div>

                    <div class=" col-md-4 col-sm-12">
                        <div class="footer-right">
                            <div>Made with Love, Dāna  &amp; Mettā by</div>
                            <div>Sumi K, Min Min T</div>
                            <div>P. Shen &amp; Aye M.</div>
                        </div>
                    </div>

        </footer>


                <!-- Toggle Button -->
             <!--    <button class="navbar-toggler dmbs-footer-nav-mobile-toggle" type="button" data-toggle="collapse" data-target="#footer-nav-content" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="fa fa-bars"></span> <?php esc_html_e('Menu','devdmbootstrap4'); ?>
                </button> -->

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