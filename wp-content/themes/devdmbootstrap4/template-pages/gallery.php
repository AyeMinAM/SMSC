<?php get_header(); 

/*
Template Name: Gallery Page
*/
?>
 
<?php get_template_part('template-parts/head'); ?>

<?php get_template_part('template-parts/nav','header'); ?>



<div class="container">

<!-- main slider carousel -->
<div class="row" style="margin-top:20px;">
    <div class="col-lg-8 offset-lg-2" id="slider">
            <div id="myCarousel" class="carousel slide">
                <!-- main slider carousel items -->
                <div class="carousel-inner">
                    <div class="active item carousel-item" data-slide-number="0">
                        <img src="http://placehold.it/1200x480&amp;text=one" class="img-fluid">
                    </div>
                    <div class="item carousel-item" data-slide-number="1">
                        <img src="http://placehold.it/1200x480/888/FFF" class="img-fluid">
                    </div>
                    <div class="item carousel-item" data-slide-number="2">
                        <img src="http://placehold.it/1200x480&amp;text=three" class="img-fluid">
                    </div>
                    <div class="item carousel-item" data-slide-number="3">
                        <img src="http://placehold.it/1200x480&amp;text=four" class="img-fluid">
                    </div>
                    <div class="item carousel-item" data-slide-number="4">
                        <img src="http://placehold.it/1200x480&amp;text=five" class="img-fluid">
                    </div>
                    <div class="item carousel-item" data-slide-number="5">
                        <img src="http://placehold.it/1200x480&amp;text=six" class="img-fluid">
                    </div>
                    <div class="item carousel-item" data-slide-number="6">
                        <img src="http://placehold.it/1200x480&amp;text=seven" class="img-fluid">
                    </div>
                    <div class="item carousel-item" data-slide-number="7">
                        <img src="http://placehold.it/1200x480&amp;text=eight" class="img-fluid">
                    </div>

                    <a class="carousel-control left pt-3" href="#myCarousel" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
                    <a class="carousel-control right pt-3" href="#myCarousel" data-slide="next"><i class="fa fa-chevron-right"></i></a>

                </div>
                <!-- main slider carousel nav controls -->


                <ul class="carousel-indicators list-inline">
                    <li class="list-inline-item active">
                        <a id="carousel-selector-0" class="selected" data-slide-to="0" data-target="#myCarousel">
                            <img src="http://placehold.it/80x60&amp;text=one" class="img-fluid">
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a id="carousel-selector-1" data-slide-to="1" data-target="#myCarousel">
                            <img src="http://placehold.it/80x60&amp;text=two" class="img-fluid">
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a id="carousel-selector-2" data-slide-to="2" data-target="#myCarousel">
                            <img src="http://placehold.it/80x60&amp;text=three" class="img-fluid">
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a id="carousel-selector-3" data-slide-to="3" data-target="#myCarousel">
                            <img src="http://placehold.it/80x60&amp;text=four" class="img-fluid">
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a id="carousel-selector-4" data-slide-to="4" data-target="#myCarousel">
                            <img src="http://placehold.it/80x60&amp;text=five" class="img-fluid">
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a id="carousel-selector-5" data-slide-to="5" data-target="#myCarousel">
                            <img src="http://placehold.it/80x60&amp;text=six" class="img-fluid">
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a id="carousel-selector-6" data-slide-to="6" data-target="#myCarousel">
                            <img src="http://placehold.it/80x60&amp;text=seven" class="img-fluid">
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a id="carousel-selector-7" data-slide-to="7" data-target="#myCarousel">
                            <img src="http://placehold.it/80x60&amp;text=eight" class="img-fluid">
                        </a>
                    </li>
                </ul>
        </div>
    </div>

</div>
<!--/main slider carousel-->
</div>


<?php get_template_part('template-parts/nav','footer'); ?>

<?php get_footer(); ?>