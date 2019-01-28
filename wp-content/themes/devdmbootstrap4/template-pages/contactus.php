<?php get_header(); 

/*
Template Name: Contact Us Page
*/
?>
 
<?php get_template_part('template-parts/head'); ?>

<?php get_template_part('template-parts/nav','header'); ?>

<div class="container">

 

    <div class="row" style="margin-top:20px;" >
         <div class="col-sm-12 text-center">
                    <span class = "label label_prg_events_title">
                    Contact Us</span>
          </div>
    
    </div>
  
 
    <div class="row" style="margin-top:20px;">  
        <div class="col-sm-6">
             
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
        <button type="submit" class="btn btn-register">Submit</button>

         </div>
        <div class="col-sm-6">
                <span class = "label label_prg_events_title">
               Our Address</span>
               
                <p class="text-justify">
                Chanmyay Yeiktha Canada <br>
                19640 Silverhope Rd, Hope BC, <br>
                 Canada, V0X-1L2<br>
                <i class="fa fa-envelope" aria-hidden="true"> chanmyay.bc@gmail.com</i>
                <br>
                <i class="fa fa-phone" aria-hidden="true"> (604)-860-0808</i>

               </p>

               <iframe width="600" height="450" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJI6a1iob1g1QRh5R-TMpvOPg&key=AIzaSyBjS9zjK0TuXWc4X_-6-Ejk8JDgZzGLSUk" allowfullscreen></iframe>
                
             
        </div>
     </div>

       
</div>

<?php get_template_part('template-parts/nav','footer'); ?>

<?php get_footer(); ?>