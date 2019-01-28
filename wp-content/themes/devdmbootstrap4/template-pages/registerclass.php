<?php get_header(); 

/*
Template Name: Register Class Page
*/
?>
 
<?php get_template_part('template-parts/head'); ?>

<?php get_template_part('template-parts/nav','header'); ?>

<div class="container">

 

    <div class="row" style="margin-top:20px;" >
         <div class="col-sm-12 text-center">
                    <span class = "label label_prg_events_title">
                    Register</span>
          </div>
    
    </div>
  
 
    <div class="row" style="margin-top:20px;">  
        <div class="col-sm-12">
             
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
 
        <select class="custom-select my-1 mr-sm-2"   >
            <option selected>Pick a program</option>
            <option value="1">Begineer</option>
            <option value="2">Intermediate</option>
        </select>


        <div class="input-group">
            <textarea class="form-control"  placeholder="Write a few words about your previous meditation experience" aria-label="Message" rows="7"></textarea>
        </div>
        <br>
             

         </div>
         
     </div>

     <div class="row" style="margin-top:20px;" >
         <div class="col-sm-12 text-center">
         <button type="submit" class="btn btn-register">Register</button>

          </div>
    </div>
  


       
</div>

<?php get_template_part('template-parts/nav','footer'); ?>

<?php get_footer(); ?>