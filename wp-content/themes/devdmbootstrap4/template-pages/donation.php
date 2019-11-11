<?php get_header(); 

/*
Template Name: donation Page
*/
?>
 
<?php get_template_part('template-parts/head'); ?>

<?php get_template_part('template-parts/nav','header'); ?>

<!-- <div class="container-fluid">
    <div class="row">
        <div class="col-sm-13">
            <img style="width: 100%" src="<?php echo get_template_directory_uri(); ?>/images/the-project.jpg" class="img-to-fit" >
        </div>
    </div>
</div> -->

<div class="container">
    <div class="card-smsc about-smsc-bg">
       <!--  <img src="http://localhost:8888/SMSC/wp-content/themes/devdmbootstrap4/images/pattern-quarter.png"> -->
        <div class="smsc-header-container">
            <h1 class="smsc-header">Donation</h1>
            <img src="http://localhost:8888/SMSC/wp-content/themes/devdmbootstrap4/images/divider-line.png" class="smsc_img_divider_line img-fluid" alt="divider">
        </div>   
            <p class="text-justify">
            The Satipatthana Meditation Society of Canada (SMSC) is a registered non-profit Theravada Buddhist organization. The Society carries on business without purpose of material or monetary gain for its members and any profit or other accretions to the Society is used for promoting its purpose. Through the generosity of members, students, friends, family and the public we are able to offer all our classes and retreats free of charge.
            </p>
            <p>Those wishing to support our endeavours may do so with PayPal:</p>
            
                <div class="donation-container">
                    <!--  <img src="http://localhost:8888/SMSC/wp-content/themes/devdmbootstrap4/images/pattern-quarter.png"> -->
                                <div class="different-donation">
                                            <p>for general donation</p>
                                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
                                                <input type="hidden" name="cmd" value="_s-xclick">
                                                <input type="hidden" name="hosted_button_id" value="J9R72EW48K3ZG">
                                                <input class="btn btn-donate-02" type="image" src="https://www.paypal.com/en_US/i/btn/btn_donate_SM.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                                            </form>
                                 </div>

                                <div class="different-donation">
                                             <p>For the Project</p>
                                             <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
                                                <input type="hidden" name="cmd" value="_s-xclick">
                                                <input type="hidden" name="hosted_button_id" value="233ZK6MB4K9ZU">
                                                <input class="btn btn-donate-02" type="image" src="https://www.paypal.com/en_US/i/btn/btn_donate_SM.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">	
                                            </form>
                                </div>

                                <div class="different-donation"> 
                                             <p>For Membership</p>
                                             <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
                                                <input type="hidden" name="cmd" value="_s-xclick">
                                                <input type="hidden" name="hosted_button_id" value="QE4U9RQLGFTYY">
                                                <input class="btn btn-donate-02" type="image" src="https://www.paypal.com/en_US/i/btn/btn_donate_SM.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                                            </form>
                                    </div>
                </div>
            
                <div>
                    <p class="text-justify">
                     We wish to express our sincere appreciation and gratitude for the ongoing support we receive. It is through this kindness that we are able to continue to practice, discuss, promote and provide education about Theravada Buddhism.
                    </p>
                    <p class="text-justify">
                     Please contact us at:  <a href="mailto:info@satipatthana.ca">info@satipatthana.ca</a> should you have any questions or require further information.
                    </p>
                    <p>Sadhu. Sadhu. Sadhu.</p>
                </div>
        </div><!--card-->
</div><!--container-->

<?php get_template_part('template-parts/nav','footer'); ?>

<?php get_footer(); ?>