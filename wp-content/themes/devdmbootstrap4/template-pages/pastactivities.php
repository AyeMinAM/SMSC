<?php get_header(); 

/*
Template Name: Past Activities Page
*/
?>
 
<?php get_template_part('template-parts/head'); ?>

<?php get_template_part('template-parts/nav','header'); ?>
<?php 


$args = array(
     );
   
    $posts = get_posts( $args );
   
 


?>

<div class="container">

 

    <div class="row" style="margin-top:20px;" >
         <div class="col-sm-12 text-center">
                    <span class = "label label_prg_events_title">
                    Our Past Activities Archives</span>
          </div>
    
    </div>
  
 
    <div class="row" style="margin-top:20px;">  

    <div class="col-sm-12">

    <div id="accordion" class="accordion">
        <div class="card mb-0">
        <?php
        $slideNo = 1; 
        foreach( $posts as $post ) 
        { 
            
            ?>
            <h5 class="card-header">
                <a data-toggle="collapse" href="#collapse_<?php echo $slideNo; ?>" aria-expanded="true" aria-controls="collapse-example" id="heading-example" class="d-block">
                    <?php echo $post->post_title; ?>
                    <i class="fa fa-chevron-down pull-right"></i>

                </a>
             </h5>
            <div id="collapse_<?php echo $slideNo; ?>" class="collapse show" aria-labelledby="heading-example">
                <div class="card-body">
                        <?php echo $post->post_content; ?>
                </div>
            </div>
 
        <?php 
            
            $slideNo +=1; 
        } ?>
        </div>


    </div>

  
    
    </div>

       
</div>

<?php get_template_part('template-parts/nav','footer'); ?>

<?php get_footer(); ?>