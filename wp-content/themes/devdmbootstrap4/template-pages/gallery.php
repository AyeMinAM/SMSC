<?php get_header(); 

/*
Template Name: Gallery Page
*/
?>
 
<?php get_template_part('template-parts/head'); ?>

<?php get_template_part('template-parts/nav','header'); ?>



<div class="container-fluid">
<?php  
 

 if ($dir = opendir(get_template_directory().'/gallery')) {
	$images = array();
	while (false !== ($file = readdir($dir))) {
		if ($file != "." && $file != "..") {
			$images[] = $file; 
		}
	}
	closedir($dir);
}

 
?>


<!-- main slider carousel -->
<div class="row" style="margin-top:20px;">
    <div class="col-lg-8 offset-lg-2" id="slider">
            <div id="myCarousel" class="carousel slide">
                <!-- main slider carousel items -->
                <div class="carousel-inner">
                    <?php 
                        $slideNo = 0; 
                        $active = "active";
                        foreach($images as $image) {
                             
                    ?> 
                    <div class="<?php echo $active;?> item carousel-item" data-slide-number="<?php echo $slideNo; ?>">
                        <img src="<?php echo get_template_directory_uri().'/gallery/'.$image ; ?>" class="img-fluid">
                    </div>
                     <?php
                            $slideNo +=1; 
                            $active = "";  
                        }
                     ?>

                    <a class="carousel-control left pt-3" href="#myCarousel" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
                    <a class="carousel-control right pt-3" href="#myCarousel" data-slide="next"><i class="fa fa-chevron-right"></i></a>

                </div>
                <!-- main slider carousel nav controls -->


                <ul class="carousel-indicators list-inline">
                    <?php 
                        $slideNo = 0; 
                        $active = "active";
                        $selected = "class='selected'";
                        foreach($images as $image) {
                             
                    ?> 
                    <li class="list-inline-item <?php echo $active;?>">
                        <a id="carousel-selector-0" <?php echo $selected;?> data-slide-to="<?php echo $slideNo; ?>" data-target="#myCarousel">
                            <img src="<?php echo get_template_directory_uri().'/gallery/'.$image ; ?>" class="img-fluid">
                        </a>
                    </li>
                    <?php
                            $slideNo +=1; 
                            $active = "";  
                            $selected = ""; 
                        }
                     ?>
                     
                </ul>
        </div>
    </div>

</div>
<!--/main slider carousel-->
</div>


<?php get_template_part('template-parts/nav','footer'); ?>

<?php get_footer(); ?>