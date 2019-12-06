<?php get_header(); 

/*
Template Name: The Project Page
*/
?>
 
<?php get_template_part('template-parts/head'); ?>

<?php get_template_part('template-parts/nav','header'); ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-13">
            <img style="width: 100%" src="<?php echo get_template_directory_uri(); ?>/images/the-project.jpg" class="img-to-fit" >
        </div>
    </div>
</div>

<div class="container">
    <div class="card-smsc about-smsc-bg">
        <div class="smsc-header-container">
            <h1 class="smsc-header">The Project</h1>
            <img src="<?php echo get_template_directory_uri(); ?>/images/divider-line.png" class="smsc_img_divider_line img-fluid" alt="divider">
        </div>   
        <p class="text-justify">
            The Satipatthana Meditation Society of Canada (SMSC) is a registered charitable organization approved by Revenue Canada in 2008.  Through the generous donations of many individuals, as well as large contributions by members and Dhamma practitioners, in 2012 the Society was able to acquire property for a mediation/retreat centre in Hope, BC.  Chanmyay Yeiktha, Canada, has successfully operated since that time.

            </p>
            <p class="text-justify">
             <strong>With the Hope retreat centre now well established, the SMSC is envisioning the launch of a new project: 

            </p>
            <p class="text-justify">
             To locate and acquire a property in either North Vancouver, East Vancouver or Burnaby, BC.  
            </p>
            <p class="text-justify">
                The preferred specifications being a 1,500 to 2,000 sq. ft. facility, ideally consisting of a large hall, a small kitchen, a 3-piece bathroom, and an additional small room for office space.
            </p>
             <p class="text-justify">
                The purpose of this new city meditation centre would be to expand the reach of the Society to conduct:
                    <ul class="new-project">
                        <li>beginner and intermediate meditation classes;</li>
                        <li>day and weekend retreats;</li>
                        <li>weekend Dhamma workshops;</li>
                        <li>advance Dhamma programs. </li>
                    </ul>

            </p></strong>
             <p class="text-justify">
                If you wish to participate in this meritorious deed you are encouraged to contact the SMSC through info(at)satipatthana.ca.  As the SMSC is a registered Canadian charitable organization, receipts will be issued to all donors (Canadian resident donors are able to claim tax deductions for their contributions). 
            </p>
             <p class="text-justify">
                If you wish to participate in this meritorious deed you are encouraged to contact the SMSC through info(at)satipatthana.ca.  As the SMSC is a registered Canadian charitable organization, receipts will be issued to all donors (Canadian resident donors are able to claim tax deductions for their contributions). 
            </p>

            <p>Sadhu. Sadhu. Sadhu.</p>
             <div  class="col-sm-12 text-center"> 

                <a href="#" class="btn btn-lg btn-register">
                Donation</a>
            </div>

    </div>
</div>

<?php get_template_part('template-parts/nav','footer'); ?>

<?php get_footer(); ?>