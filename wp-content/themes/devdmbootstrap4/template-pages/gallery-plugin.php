<?php get_header(); 

/*
Template Name: Gallery Plugin Page
*/
?>
 
<?php get_template_part('template-parts/head'); ?>

<?php get_template_part('template-parts/nav','header'); ?>



<div class="container">


<!-- main slider carousel -->
<div class="row" style="margin-top:20px;">
<?php echo do_shortcode('[URIS id=301]'); ?>
</div>
<!--/main slider carousel-->
</div>


<?php get_template_part('template-parts/nav','footer'); ?>

<?php get_footer(); ?>