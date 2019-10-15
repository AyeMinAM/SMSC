<?php get_header(); 

/*
Template Name: The Teachers Page
*/
?>
 
<?php get_template_part('template-parts/head'); ?>

<?php get_template_part('template-parts/nav','header'); ?>

<div class="container">
    <div class="card-smsc teacher-smsc-bg">
         <div class="smsc-header-container">
        <h1 class="smsc-header">The Teachers</h1>
        <img src="http://localhost:8888/SMSC/wp-content/themes/devdmbootstrap4/images/divider-line.png" class="smsc_img_divider_line img-fluid" alt="divider">
   </div>
  <div class="row">  
        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
            <div class="teacher-img smsc_header_img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/bio-chanmyay-sayadaw.jpg">
            </div>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
           <h4 class="label smsc-title style="margin-bottom:1rem">Chanmyay Sayadaw Ashin Janakabhivamsa</h4>
             <p class="text-justify">
                Chanmyay Sayadaw Ashin Janakabhivamsa is the chief abbot of Chanmyay Yeiktha Meditation Centre, Yangon, Myanmar. The Venerable Sayadaw was born in 1928, became a Samanera (novice monk) at the age of fifteen and received the higher ordination in 1947. He was conferred the rare title of Abhivamsa (a title given only to one who has attained and demonstrated Doctoral level proficiency in the Pali Canon, Commentaries and Sub-commentaries before the age of 27 ) by the Pariyatti Sasana Hita Association of Mandalay in 1952.</p>
              <p class="text-justify">The Venerable Sayadaw practised Vipassana meditation under the instruction of the most Venerable Mahasi Sayadaw in 1953. He was then invited by the State Buddha Sasana Organization in 1954 to be an editor of the Buddhist scriptures.</p>
        </div>
     </div> <!--end of one row-->

      <div class="row">
            <div class="col-sm-12 text-center">
            <img src="<?php echo get_template_directory_uri(); ?>/images/divider.png" class="smsc_img_divider" alt="divider">           
            </div>
      </div>

        <div class="row">  
        <div class="col-lg-6 col-md-12 col-sm-12">
            <div class="teacher-img smsc_header_img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/bio-sayarmyat.jpg">
            </div>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12">
           <h4 class="label smsc-title style="margin-bottom:1rem">Sayar Myat</h4>
           <p class="text-justify">
              Sayar Myat was born and raised as a Buddhist in Myanmar.  He learned and practiced the correct form of Theravada Buddhism and Insight meditation from his principle teacher Sayadawgyi U Janaka Bhivamsa of Yangon, Myanmar, and also from the late Sayadawgyi U Pandita Bhivamsa and the late Sayadawgyi U Silananda Bhivamsa.  He came to Canada in 1974.  
            </p>
            <p class="text-justify">
                Since 1989, he has directed his effort towards the teaching of Theravada Buddhism using Mindfulness Meditation practice as a core principle.  In 1991, he helped found the Not-For-Profit Manawmaya Theravada Buddhist Society (MTBS), and worked  as director, teacher and translator.  Over the years the Society became a place primarily for Myanmar Canadians whose principle language was Burmese. 
            </p>
        </div>
     </div> <!--end of one row-->
      <div class="row">
            <div class="col-sm-12 text-center">
            <img src="<?php echo get_template_directory_uri(); ?>/images/divider.png" class="smsc_img_divider" alt="divider">           
            </div>
      </div>

      <div class="row">  
        <div class="col-lg-6 col-md-12 col-sm-12">
            <div class="teacher-img smsc_header_img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/bio-sayarlay.jpg">
            </div>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12">
           <h4 class="label smsc-title style="margin-bottom:1rem">Sayalay Nana Malini</h4>
           <p class="text-justify">
               Sayalay Nana Malini was born in Bangkor Island Indonesia.  Sayalay’s birth name as a lay person was Jennifer Chew.  She was ordained at Chanmyay Yeiktha, Yangon, Myanmar.  Sayalay’s preceptor monk was Sayadaw U Janaka Bhivamsa.
            </p>
            <p class="text-justify">
                Sayalay participated in her first group meditation in 2001, in Indonesia.  In 2002, she participated annually in meditation groups in Myanmar.  The first one was a week long, and the longest was one year in duration.  Ten years later her honourable teacher U Janaka Bhivamsa told Sayalay Nana Malini that she would receive even more benefits if she could share her knowledge of Vipassana with those who wish to be free from suffering.  Sayalay accepted her honourable teacher’s words, and started teaching meditation in Indonesia, Macao, Hong Kong and Canada. 
            </p>
        </div>
     </div> <!--end of one row-->

      <div class="row">
            <div class="col-sm-12 text-center">
            <img src="<?php echo get_template_directory_uri(); ?>/images/divider.png" class="smsc_img_divider" alt="divider">           
            </div>
      </div>

    <div class="row">  
        <div class="col-lg-6 col-md-12 col-sm-12">
            <div class="teacher-img smsc_header_img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/bio-sean.jpg">
            </div>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12">
           <h4 class="label smsc-title style="margin-bottom:1rem">Sean Pritchard</h4>
            <p class="text-justify">
                Sean Pritchard spent many years as a Buddhist monk in the Burmese Mahasi tradition under the guidance of the Venerable Chanmyay Sayadaw (U Janaka). He traveled worldwide teaching Vipassana and Metta practices to many different cultures and nationalities. He holds a PhD in clinical psychology and has a counselling practice in Vancouver BC. The practices taught at his retreat will provide a lifetime of tools and techniques to gain insight into the inner world and workings of the mind. Both beginners and seasoned meditators will benefit from the supportive and skillful guidance of this well experienced teacher.
            </p>
        </div>
     </div> <!--end of one row-->

  </div><!--end of card-->
</div><!--end of container-->

<?php get_template_part('template-parts/nav','footer'); ?>

<?php get_footer(); ?>