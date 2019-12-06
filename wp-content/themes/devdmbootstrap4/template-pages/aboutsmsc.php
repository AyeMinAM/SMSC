<?php get_header(); 

/*
Template Name: About SMSC Page
*/
?>
 
<?php get_template_part('template-parts/head'); ?>

<?php get_template_part('template-parts/nav','header'); ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-13">
            <img style="width: 100%" src="<?php echo get_template_directory_uri(); ?>/images/about-group-photo.jpg" class="img-to-fit" >
        </div>
    </div>
</div>

<div class="container">
    <div class="card-smsc about-smsc-bg">
        <div class="smsc-header-container">
            <h1 class="smsc-header">About SMSC</h1>
            <img src="<?php echo get_template_directory_uri(); ?>/images/divider-line.png" class="smsc_img_divider_line img-fluid" alt="divider">
        </div>   
        <p class="text-justify"><strong>The Satipatthana Meditation Society of Canada (SMSC)</strong> is a Buddhist organization based in Vancouver, British Columbia.  The Society is incorporated under the Society Act in British Columbia and holds registered not-for-profit charitable status through the Canada Revenue Agency.</p>

        <p class="text-justify">The purpose of the Society is to practice and discuss Theravada Buddhism with serious practitioners and to promote and provide education to anyone interested in exploring Theravada Buddhism.  The Society's approach is built around Satipatthana Vipassana (Pure Vipassana) meditation, which is commonly known in the West as Insight Through Mindfulness meditation.  The Society offers weekly educational classes with sitting and walking meditation and monthly/annual residential retreats as the primary formats of communication available to interested parties.
</p>

       <!--  <img src="<?php echo get_template_directory_uri(); ?>/images/divider-flower.png" class="divider-flower"> -->

       <!--  <h4 class="label smsc-title" style="margin-bottom:1rem">Our Practise</h4> -->

        <p class="text-justify">The Satipatthana Vipassana meditation that the Society adheres to is directly based on the Four Foundations of Mindfulness, as taught by the Buddha in the Satipatthana Discourse.  The late Mula Mingun Sayadaw framed this technique and the late Mahasi Sayadaw of Myanmar popularized this tradition in 1960's and 70's to the world outside of Myanmar.  The practice is the pure Vipassana method, rather than the mixed (Samatha-Vipassana) method.  Even those with no previous meditation experience can experience beneficial results in a relatively short period of time if they are earnest and hard working.  Mahasi Sayadaw's chief disciples, the late Sayadaws U Khundala, U late Sayadaw U Pandita, the late Sayadaw U Silananda and Sayadawgyi U Janaka Bhivamsa continued to spread this technique throughout the world from the 1980's to the present.
 </p>

        <p class="text-justify">
        Generosity, morality, mindfulness, concentration and intuitive understanding are the main pillars of the practice. The SMSC welcomes people of all faiths and ethnic backgrounds. A genuine belief in the necessity for loving kindness and compassion in the world is the only prerequisite required. 
        </p>

       <img src="<?php echo get_template_directory_uri(); ?>/images/divider-flower.png" class="divider-flower"> 
    </div>
</div>
    

<!-- <div class="container">  
    <div class="row" style="margin-top:20px;">
        <div class="col-sm-12 text-center">
        <img src="<?php echo get_template_directory_uri(); ?>/images/divider.png" class="smsc_img_divider" alt="divider">           
        </div>
    </div>
    <div class="row" style="margin-top:20px;">
            <div class="row">
                    <div class="col-sm-12">
                             <span class = "label label_prg_events_title">
                             Our Pracitse</span>
                    </div>
            </div>
            <div class="row" style="margin-top:20px;">
                    <div class="col-sm-9">
                    
                    </div>
                    <div class="col-sm-3 text-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/retreat-annual.jpg"  class="img-rounded smsc_img_beginner"  alt="beginner">
                    </div>
            </div>      
    </div>
    <div class="row" style="margin-top:20px;">
            <div class="row">
                    <div class="col-sm-12">
                             <span class = "label label_prg_events_title">
                             Our Vision</span>
                    </div>
            </div>
            <div class="row" style="margin-top:20px;">
                    <div class="col-sm-9">
                    <p class="text-justify">The satipatthana vipassana meditation that the Society adheres to is directly based on the Four Foundations of Mindfulness taught by the Buddha in the Satipatthana Discourse. The late Venerable Mahasi Sayadaw of Myanmar popularized this tradition in 1960&apos;s and 70&apos;s to the world outside of Myanmar. The practice is the pure Vipassana method, rather than the mixed (Samatha-Vipassana) method. Even those with no previous meditation experience can experience results in a relatively short period of time if they are earnest and hard working. Mahasi Sayadaw&apos;s chief disciples, the Venerable Sayadaws U Khundala, U Pandita, the late U Silananda and U Janaka continued to spread this technique throughout the world from the 1980&apos;s to the present time. 
                    </p>
                    <p class="text-justify">
                    Generosity, morality, mindfulness, concentration and intuitive understanding are the main pillars of the practice. The SMSC welcomes people of all faiths and ethnic backgrounds. A genuine belief in the necessity for loving kindness and compassion in the world is the only prerequisite required. 
	
                    </p>
                    </div>
                    <div class="col-sm-3 text-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/retreat-annual.jpg"  class="img-rounded smsc_img_beginner"  alt="beginner">
                    </div>

                    
            </div>      
    </div>
    <div class="row" style="margin-top:20px;">
        <div class="col-sm-12 text-center">
        <img src="<?php echo get_template_directory_uri(); ?>/images/divider.png" class="smsc_img_divider" alt="divider">           
        </div>
    </div>
</div> -->

<?php get_template_part('template-parts/nav','footer'); ?>

<?php get_footer(); ?>