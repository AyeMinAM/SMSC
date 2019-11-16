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
            <div class="smsc-header-container" style="margin-top:2rem;">
                <h1 class="smsc-header">Our Past Activities Archives</h1>
                <img src="<?php echo get_template_directory_uri(); ?>/images/divider-line.png" class="smsc_img_divider_line img-fluid" alt="divider">
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
                                            <div id="collapse_<?php echo $slideNo; ?>" class="collapse" aria-labelledby="heading-example">
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
    </div> <!--the end of the row-->
</div> <!--the end of container-->

<?php get_template_part('template-parts/nav','footer'); ?>
<?php get_footer(); ?>