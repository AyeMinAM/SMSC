<?php get_header(); 

/*
Template Name: Contact Us Page
*/
?>
 
<?php get_template_part('template-parts/head'); ?>
<?php get_template_part('template-parts/nav','header'); ?>

<!--KMMT code-->
<!-- <div class="container-fluid">
    <div class="row" style="margin-top:20px;" >
         <div class="col-sm-12 text-center">
                    <span class = "label label_prg_events_title">
                    Contact Us</span>
          </div>
    
    </div>

    <form id="sendEmail" method="post"  class="form-horizontal" action="" >

    <div class="row" style="margin-top:20px;">  

        <div class="col-sm-6">
             
        <div class="input-group mb-3">
            <input id="inputfullname" name="inputfullname"  type="text" class="form-control" placeholder="Full Name" aria-label="FullName" aria-describedby="basic-addon1">
        </div>

        <div class="input-group mb-3">
            <input type="text" id="inputemail" name="inputemail"  class="form-control" placeholder="Email" aria-label="Email" aria-describedby="basic-addon2">
            <div class="input-group-append">
                <span class="input-group-text" id="basic-addon2">@example.com</span>
            </div>
        </div>

        <div class="input-group mb-3">
            <input type="text" id="inputphone" name="inputphone"  class="form-control" placeholder="Phone Number" aria-label="PhNumber" aria-describedby="basic-addon1">
        </div>
 

        <div class="input-group">
            <textarea class="form-control" id="inputmessage" name="inputmessage"  placeholder="Message" aria-label="Message" rows="7"></textarea>
        </div>
        <br>
        <button type="submit" class="btn btn-register">Submit</button>

         </div>
    </form>

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
</div> -->
<!--AM code-->
<div class="container">
   <div class="card-smsc teacher-smsc-bg">
        <div class="smsc-header-container">
                <h1 class="smsc-header">Contact Us</h1>
                <img src="<?php echo get_template_directory_uri(); ?>/images/divider-line.png" class="smsc_img_divider_line img-fluid" alt="divider">
        </div>

    <div class="row">  
        
        <div class=" col-lg-6 col-md-12 col-sm-12">
            <form id="sendEmail" method="post" class="form-horizontal">
                <div class="input-group">
                    <input id="inputfullname" name="inputfullname" type="text" class="form-control" placeholder="Full Name" aria-label="FullName" aria-describedby="basic-addon1">
                </div>
                <div class="input-group T-margin-1">
                    <input type="text" class="form-control" id="inputemail" name="inputemail" placeholder="Email" aria-label="Email" aria-describedby="basic-addon2">
                </div>
                <div class="input-group T-margin-1">
                    <input type="text" id="inputphone" name="inputphone" class="form-control" placeholder="Phone Number" aria-label="PhNumber" aria-describedby="basic-addon1">
                </div>
                <div class="input-group T-margin-1">
                    <textarea class="form-control" id="inputmessage" name="inputmessage"  placeholder="Message" aria-label="Message" rows="7"></textarea>
                </div>
                <br>
                <div class="text-center">
                    <button type="submit" class="btn btn-register">Submit</button>
                </div>
            </form>
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


<div id="dialog" title="Info">
        <div class="progress-label">Loading...</div>
        <div id="progressbar"></div>
</div>


<script>

 
    jQuery(document).ready(function () {


        dialog = $( "#dialog" ).dialog({
        autoOpen: false,
        closeOnEscape: false,
        resizable: false,
        open: function() {
        }
      });
 
     
    
    $(document).ajaxStart(function(){
        dialog.dialog( "open" );
    });

    $(document).ajaxComplete(function(){
        dialog
        .dialog( "close" );
    });


    
    jQuery( "#sendEmail" ).validate( {
        ignore: ":hidden",
        submitHandler: function (form) {

            $.ajax({
                 type: "POST",
                 url: '<?php echo admin_url("admin-ajax.php") ?>',
                 data: $(form).serialize()  + '&action=sendEmail' ,
                 error: function () {
                    $( "<div title='Alert'>There is error in your submission. Please try to submit again or contact with Administrator</div>" ).dialog({
                    modal: true,
                    height: 200,
			        width: 600,
                    open: function( event, ui ) {
                            //center the dialog within the viewport (i.e. visible area of the screen)
                        var top = Math.max(jQuery(window).height() / 2 - jQuery(this)[0].offsetHeight / 2, 0);
                        var left = Math.max(jQuery(window).width() / 2 - jQuery(this)[0].offsetWidth / 2, 0);
                        jQuery(this).parent().css('top', top + "px");
                        jQuery(this).parent().css('left', left + "px");
                        jQuery(this).parent().css('position', 'fixed');                
                    },
                    buttons: {
                        Ok: function() {
                            
                            $( this ).dialog( "close" );
                           

                        }
                    }
                    });
                 },
                 success: function () {

                    $( "<div title=''>You have submitted successfully!</div>" ).dialog({
                    modal: true,
                    height: 200,
			        width: 600,
                    open: function( event, ui ) {
                            //center the dialog within the viewport (i.e. visible area of the screen)
                        var top = Math.max(jQuery(window).height() / 2 - jQuery(this)[0].offsetHeight / 2, 0);
                        var left = Math.max(jQuery(window).width() / 2 - jQuery(this)[0].offsetWidth / 2, 0);
                        jQuery(this).parent().css('top', top + "px");
                        jQuery(this).parent().css('left', left + "px");
                        jQuery(this).parent().css('position', 'fixed');                
                    },
                    buttons: {
                        Ok: function() {
                            $( this ).dialog( "close" );
                        }
                    }
                    });

                  
                 }
             });
           
             return false; // required to block normal submit since you used ajax
         },
				rules: {
					inputfullname: "required",
					inputemail: {
						required: true,
						email: true
                    },
                    inputphone:{
						required: true,
						regx: /^[+]*[(]{0,1}[0-9]{1,4}[)]{0,1}[-\s\./0-9]*$/
                    },
                    inputmessage:"required" 
				},
				messages: {
					inputfullname: "Please enter your name.",
                    inputmessage: "Please enter your message.",
                    inputphone:"Please enter your valid phone number.",
					inputemail: "Please enter a valid email address.",
				},
				errorElement: "div",
				errorPlacement: function ( error, element ) {
                    // Add the `help-block` class to the error element
 					error.addClass( "help-block" );

					// Add `has-feedback` class to the parent div.form-group
					// in order to add icons to inputs
 
					if ( element.prop( "type" ) === "checkbox" ) {
						error.insertAfter( element.parent( "label" ) );
					} else {
						error.insertAfter( element.parent( "div" ) );
					}

					 
				},
				success: function ( label, element ) {
					 
				},
				highlight: function ( element, errorClass, validClass ) {
					$( element ).addClass( "is-invalid" )
				},
				unhighlight: function ( element, errorClass, validClass ) {
					$( element ).removeClass( "is-invalid" );
 				}
			} );

    });
</script>

<?php get_template_part('template-parts/nav','footer'); ?>

<?php get_footer(); ?>



