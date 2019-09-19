<?php if (get_theme_mod('devdmbootstrap4_show_header_setting', 1)) : ?>

    <div class="dmbs-header" style="background-color:#932a0c">
        <div class="row">
            <?php
                $dmbsCustomLogoUrl = devdmbootstrap4_custom_logo();
                print_r($dmbsCustomLogoUrl);
                $dmbsHeaderText    = get_theme_mod('header_text', 1)
            ?>
            <?php if (!empty($dmbsCustomLogoUrl)) : ?>
                <div class="col-sm-<?php echo ($dmbsHeaderText == 0 ? '12' : '4'); ?> my-auto dmbs-header-left">
                    <a class="dmbs-logo-link" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                        <img class="dmbs-logo-image" src="<?php echo esc_url($dmbsCustomLogoUrl); ?>" alt="<?php bloginfo('name'); ?>" />
                    </a>
                </div>
            <?php endif; ?>

            <?php if ($dmbsHeaderText == 1) : ?>
                <div class="col-sm-<?php echo (!empty($dmbsCustomLogoUrl) ? "8" : "12"); ?> my-auto dmbs-header-right" >

                    <?php if (is_front_page() || is_home()) : ?>
                        <h1 class="smsc_header_title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
                    <?php else: ?>
                        <h2 class="smsc_header_title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h2>
                    <?php endif; ?>

                    <h4 class="dmbs-header-description"><?php bloginfo( 'description' ); ?></h4>

                </div>
            <?php endif; ?>
            
        </div>
        <!-- <div class="row">

                 <div class="col-sm-12">
                    <a href="https://www.meetup.com/" target="_blank" class="float-right smsc_logo_space">
                    <img class="meetup_logo"   src="<?php echo get_template_directory_uri(); ?>/images/icon-meeetup.png" >
                    </a>
                    
                    <a href="https://www.youtube.com/" target="_blank" class="float-right smsc_logo_space">
                    <img class="youtube_logo"   src="<?php echo get_template_directory_uri(); ?>/images/icon-youtube.png" >
                    </a>
                    <a href="https://www.facebook.com/"  target="_blank" class="float-right smsc_logo_space">
                        <img class="fb_logo"   src="<?php echo get_template_directory_uri(); ?>/images/icon-facebook.png" >
                    </a>

                </div>
            </div> -->
    </div>

<?php endif; ?>
