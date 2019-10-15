<?php get_header(); 

/*
Template Name: Library Page
*/
?>
 
<?php get_template_part('template-parts/head'); ?>

<?php get_template_part('template-parts/nav','header'); ?>

<div class="container">
    <div class="card-smsc teacher-smsc-bg">
            <div class="smsc-header-container" style="margin-top:2rem;">
                    <h1 class="smsc-header">Dhamma Library</h1>
                    <img src="http://localhost:8888/SMSC/wp-content/themes/devdmbootstrap4/images/divider-line.png" class="smsc_img_divider_line img-fluid" alt="divider">
            </div>  

            <div class="row">
                <div class="col-sm-12">
                <p class="text-justify">Buddha-Dhamma is available everywhere in this electronic age, as are Pali texts, commentaries, sub-commentaries and various Dhamma books and videos by world renowned Buddhist teachers and meditation masters. The SMSC will not and cannot try or attempt to be comparable to such treasures.</p> 

                <p class="text-justify">

                The SMSC Dhamma library contains some of the Dhamma talks as given by our Spiritual Advisor Chanmyay Sayadawgyi and the resident teacher Sa-yar Myat at beginner, intermediate and advanced meditation classes. This library is an attempt to portray the essence of the SMSC organization and its operations.</p>
                </div>
            </div>
            <div class="row justify-content-md-center">
                    <div class="col-lg-2">
                        <div class="text-center">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/icon-sound.png"  style="width:50px;" alt="beginner">
                                <h4 class="card-title">Sound Resources</h4>
                        </div>                        
                    </div>
                    <div class="col-lg-7">   
                        <div class="resources-text-container">
                                <div class="resources-text">
                                    <div id="summary">
                                    <p class="collapse" id="collapseSummary">
                                        <a class="resource-links" href="sounds/vipassana_med1.mp3">
                                        1.&nbspHow to Practice Insight Meditation through Mindfulness I </a> </br>
                                         <a class="resource-links" href="sounds/vipassana_med2.mp3">              
                                        2.&nbspHow to Practice Insight Meditation through Mindfulness II </a><br>
                                         <a class="resource-links" href="sounds/vipassana_med3.mp3">                       
                                        3.&nbspHow to Practice Insight Meditation through Mindfulness III</a><br>
                                         <a class="resource-links" href="sounds/vipassana_med4.mp3">
                                        4.&nbspWhat Is Vipassana (Insight)</a><br>
                                         <a class="resource-links" href="sounds/vipassana_med5.mp3">
                                        5.&nbspPurification of Moral Conduct and Mind (Five Mental Hinderences)</a><br>
                                         <a class="resource-links" href="sounds/vipassana_med6.mp3">              
                                        6.&nbspPurification of Mind (Five Controlling Mental FaculitiesI)</a><br>
                                         <a class="resource-links" href="sounds/vipassana_med7.mp3">                         
                                        7.&nbspPurification of Mind (Five Controlling Mental FaculitiesII)</a><br>
                                         <a class="resource-links" href="sounds/vipassana_med8.mp3">
                                        8.&nbspPurification of Mind (Absorption, Access and Momentary concentration)</a><br>
                                         <a class="resource-links" href="sounds/vipassana_med9.mp3">
                                        9.&nbspPurification of View (Specific and Common Characteristics of Body-Mind Process)</a><br>
                                         <a class="resource-links" href="sounds/vipassana_med10.mp3">
                                        10.&nbspPurification of View (Discerning and Unsatisfactory nature of Body-Mind process)</a><br>
                                         <a class="resource-links" href="sounds/vipassana_med11.mp3">
                                        11.&nbspPurification by Overcoming Doubt (Causal Relation of Body-Mind process I)</a><br>
                                        <a class="resource-links" href="sounds/vipassana_med12.mp3">
                                        12.&nbspPurification by Overcoming Doubt (Causal Relation of Body-Mind process II)</a><br>
                                        <a class="resource-links" href="sounds/vipassana_med13.mp3">
                                        13.&nbspPurification by Overcoming Doubt (Causal Relation of Body-Mind process III)</a><br>
                                        <a class="resource-links" href="sounds/vipassana_med14.mp3">
                                        14.&nbspPurification by Overcoming Doubt (Causal Relation of Body-Mind process lV)</a><br>
                                        <a class="resource-links" href="sounds/vipassana_med15.mp3">
                                        15.Purification by Overcoming Doubt (Causal Relation of Body-Mind process V)</a><br>
                                        <a class="resource-links" href="sounds/vipassana_med16.mp3">
                                        16.&nbspThe Way of Deliverance (The Four Noble Truth l)</a><br>
                                        <a class="resource-links" href="sounds/vipassana_med17.mp3">
                                        17.&nbspThe Way of Deliverance (The Four Noble Truth ll)</a><br>
                                        <a class="resource-links" href="sounds/vipassana_med18.mp3">
                                        18.&nbspThe Way of Deliverance (The Four Noble Truth Ill)</a><br>
                                        <a class="resource-links" href="sounds/vipassana_med19.mp3">
                                        19.&nbspClear Comprehension of Mind and Matter (The Five Aggregates)</a><br>
                                        <a class="resource-links" href="sounds/vipassana_med20.mp3">
                                        20.&nbspSeven Benefits of Mindfulness-Insight Meditation</a><br>                                                                                      
        </p>
        <a class="resource-links collapsed" data-toggle="collapse" href="#collapseSummary" aria-expanded="false" aria-controls="collapseSummary"></a>
      </div>
                                                                     
                                                                       
                                                                
                                                    </div><!--resource text-->
                                                </div><!-- resouce container-->
                                    </div><!--second col-->
            </div><!--end of row-->
    </div><!-- end of card-->
</div><!--end of container-->












  <!--   <div class="row" style="margin-top:20px;">
        <div class="col-sm-12 text-center">
        <img src="<?php echo get_template_directory_uri(); ?>/images/divider.png" class="smsc_img_divider" alt="divider">           
        </div>
    </div>
    

    <div class="row" style="margin-top:20px;">
        <div class="col-sm-12">
        <span class = "label label_schedule_title">
        Chants</span>
        </div>
        <div class="col-sm-12">
            
            <div class="row" style="margin-top:20px;">
                <div class="col text-center">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/icon-chants.png"  class="img-rounded"  alt="beginner">
                </div>
                
                <div class="col-sm-10">
                    <p class="text-justify">
                        <a href="#" >Chant of Metta</a> <br>
                        <a href="#" >SMSC meditation format with chanting</a> <br>
                    
                        <span class="collapse" id="chant_details">
                            
                        </span>
                        <a  href="#" data-toggle="collapse" data-target="#chant_details">click for more &raquo;</a>
                    </p>
                </div>      
            </div>
        </div>
    </div>

    <div class="row" style="margin-top:20px;">
        <div class="col-sm-12 text-center">
        <img src="<?php echo get_template_directory_uri(); ?>/images/divider.png" class="smsc_img_divider" alt="divider">           
        </div>
    </div>

    <div class="row" style="margin-top:20px;">
        <div class="col-sm-12">
        <span class = "label label_schedule_title">
        Websites</span>
        </div>
        <div class="col-sm-12">
            
            <div class="row" style="margin-top:20px;">
                <div class="col text-center">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/group-3.png"  class="img-rounded"  alt="beginner">
                </div>
                
                <div class="col-sm-10">
                    
                        <a href="#" >Mahasi Sayadaw</a> <br>
                        <p class="text-justify">
                        The most eminent Burmese Theravada Buddhist monk and meditation master who had a significant impact on the teaching of Vipassana (Insight) meditation in the West and throughout Asia.
                        </p>

                        <a href="#" >Chanmyay Satipatthana Vihara</a> <br>
                        <p class="text-justify">
                        Satipatthana Vipassana Association (Springfield, Illinois, USA) dedicated to propagate Theravada Buddhism keeping Pure Insight Meditation (Mahasi Tradition) as central theme
                        </p>

                    
                        <span class="collapse" id="website_details">
                            
                        </span>
                        <a  href="#" data-toggle="collapse" data-target="#website_details">click for more &raquo;</a>
                 </div>      
            </div>
        </div>
    </div>

    <div class="row" style="margin-top:20px;">
        <div class="col-sm-12 text-center">
        <img src="<?php echo get_template_directory_uri(); ?>/images/divider.png" class="smsc_img_divider" alt="divider">           
        </div>
    </div> -->


<?php get_template_part('template-parts/nav','footer'); ?>

<?php get_footer(); ?>