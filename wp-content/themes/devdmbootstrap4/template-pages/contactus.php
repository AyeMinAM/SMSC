<?php get_header(); 

/*
Template Name: Contact Us Page
*/
?>
 
<?php get_template_part('template-parts/head'); ?>

<?php get_template_part('template-parts/nav','header'); ?>

<div class="container">
   <div class="card-smsc teacher-smsc-bg">
   <div class="smsc-header-container">
        <h1 class="smsc-header">Contact Us</h1>
        <img src="http://localhost:8888/SMSC/wp-content/themes/devdmbootstrap4/images/divider-line.png" class="smsc_img_divider_line img-fluid" alt="divider">
   </div>

    <div class="row">  
        <div class=" col-lg-6 col-md-12 col-sm-12">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Full Name" aria-label="FullName" aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <span class="input-group-text" id="basic-addon2">@example.com</span>
                </div>
            </div>
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Phone Number" aria-label="PhNumber" aria-describedby="basic-addon1">
            </div>
            <div class="input-group">
                <textarea class="form-control"  placeholder="Message" aria-label="Message" rows="7"></textarea>
            </div>
        <br>
        <div class="text-center">
            <button type="submit" class="btn btn-register">Submit</button>
        </div>
         </div>

        <div class="col-lg-6 col-md-12 col-sm-12">
               <h4 class="card-title mobile-margin">Our Address</h4>
               
                <p>
                Chanmyay Yeiktha Canada <br>
                19640 Silverhope Rd, Hope BC, <br>
                 Canada, V0X-1L2<br>
                <i class="fa fa-envelope" aria-hidden="true"></i> <span style="padding-left:0.5rem">chanmyay.bc@gmail.com</span>
                <br>
                <i class="fa fa-phone" aria-hidden="true"> </i><span style="padding-left:0.5rem">(604)-860-0808</span>

               </p>
               <div class="embed-responsive embed-responsive-1by1">
                    <iframe frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJI6a1iob1g1QRh5R-TMpvOPg&key=AIzaSyBjS9zjK0TuXWc4X_-6-Ejk8JDgZzGLSUk" allowfullscreen></iframe> 
               </div> 

        </div>
     </div>
</div> <!--background-->
</div> <!--container-->

<?php get_template_part('template-parts/nav','footer'); ?>

<?php get_footer(); ?>