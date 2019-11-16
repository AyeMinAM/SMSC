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
            Satipatthana Meditation Society of Canada (SMSC) is a registered charitable organization approved by Revenue Canada in 2008. Through the generous donations of many individuals as well as large contributions from members and Dhamma practitioners, the Society was able to acquire a property in Hope, BC as of November, 2012. It is located an hour and a half drive from Vancouver. It has one third of an acre land and a 2000 sq.ft building. The building has been renovated so that it will be conducive for meditation. Three resident yogis live and maintain the Centre. It is a stepping-stone until we can purchase a larger building and larger land suitable to use for weekend, 10 days and longer term retreats. World-renowned Meditation masters of the Mahasi tradition will be invited to guide retreats whenever possible.
            </p>
            <p class="text-justify">
             SMSC solely depends on donations to operate the society and maintain the retreat center. If you wish to participate in this meritorious deed you are encouraged to contact the SMSC through info(at)satipatthana.ca. As the SMSC is a registered Canadian charitable organization, receipts will be issued to all donors, and Canadian resident donors are able to claim tax deductions for their contributions.
            </p>
            <p class="text-justify">
             The retreat center is named Chanmyay Yeiktha, Canada in honor to our spiritual Advisor and teacher Chanmyay Sayadawgyi Ashin Janaka Bhivamsa of Chanmyay Yeiktha, Yangon, Myanmar. He came and officially opened the center on June 29, 2014. The center shall operate with his guidance.
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