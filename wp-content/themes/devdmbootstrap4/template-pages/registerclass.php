<?php get_header(); 

/*
Template Name: Register Class Page
*/
?>
 
<?php get_template_part('template-parts/head'); ?>

<?php get_template_part('template-parts/nav','header'); ?>

<div class="container" style="margin-top:1rem;">
    
        <div class="row justify-content-md-center">
            <div class="col-lg-8 col-sm-12">
                <div class="card-smsc">
                    <div class="form-register-class-padding">
                        <h4 class="label smsc-title">Online registeration form for meditation classes.</h4>
                    <form id="registerSimple" method="post"  class="form-horizontal" action="" >
                  
                                <div class="input-group T-margin-1">
                                    <input id="inputfirstname" name="inputfirstname" type="text" class="form-control" placeholder="First Name" aria-label="FullName" aria-describedby="basic-addon1">
                                </div>
                        
                        
                                <div class="input-group T-margin-1">
                                    <input id="inputlastname" name="inputlastname" type="text" class="form-control" placeholder="Last Name" aria-label="FullName" aria-describedby="basic-addon1">
                                </div>
                       

                        <div class="input-group T-margin-1">
                            <input id="inputemail" name="inputemail"  type="text" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="basic-addon2">
                        </div>

                        <div class="input-group T-margin-1">
                            <input id="inputphone" name="inputphone"  type="text" class="form-control" placeholder="Phone Number" aria-label="PhNumber" aria-describedby="basic-addon1">
                        </div>

                        <div class="input-group T-margin-1">
                            <select class="custom-select my-1 mr-sm-2" id="select_program" name="select_program"  >
                                <option value="">Pick a program</option>
                                <option value="1">Beginner</option>
                                <option value="2">Intermediate</option>
                            </select>
                        </div>

                        <div class="input-group T-margin-1">
                            <textarea class="form-control" id="inputmessage" name="inputmessage"  placeholder="Write a few words about your previous meditation experience" aria-label="Message" rows="7"></textarea>
                        </div>
                        <br>
                         <div class="col-sm-12 text-center">
                         <div id="message"> </div>

                         <button id="registerSubmit" type="submit" class="btn btn-register">Register</button>

                    </div>
                </form> 
            </div>
            </div><!--shadow-->
        </div>  <!--column-->
    </div> <!--row-->
</div> <!--container-->




 

<script>
    jQuery(document).ready(function () {

        
     
    
    $(document).ajaxStart(function(){
     });

    $(document).ajaxComplete(function(){
         
    });


        $.validator.addMethod("regx", function(value, element, regexpr) {          
        return regexpr.test(value);
        }, "Please enter a valid phone number.");


        jQuery( "#registerSimple" ).validate( {
        ignore: ":hidden",
        submitHandler: function (form) {

            var loadingText = '<i class="fa fa-circle-o-notch fa-spin"></i> Submitting...';
            if ($("#registerSubmit").html() !== loadingText) {
                $("#registerSubmit").data('original-text', $("#registerSubmit").html());
                $("#registerSubmit").html(loadingText);
            }

            $("#registerSubmit").attr("disabled", true);


     
            $.ajax({
                 type: "POST",
                 url: '<?php echo admin_url("admin-ajax.php") ?>',
                 data: $(form).serialize()  + '&action=registerSimple' ,
                 error: function () {
                   
                    $("#registerSubmit").attr("disabled", false);

                    $('.btn').html($("#registerSubmit").data('original-text'));

                    $( "#message" ).html('<div class="alert alert-danger" role="alert">There is error in your submission. Please try to submit again or contact with Administrator</div>');


                 },
                 success: function () {

                    $("#registerSubmit").attr("disabled", false);

 
                    $( "#message" ).html('<div class="alert alert-success" role="alert">You have submitted successfully!</div>');

                    $('.btn').html($("#registerSubmit").data('original-text'));


                    $('#inputfirstname').val("");
                    $('#inputlastname').val("");
                    $('#inputemail').val("");
                    $('#select_program').prop('selectedIndex',0);
                    $('#inputphone').val("")
                    $('#inputmessage').val("");

 
                 }
             });
           
             return false; // required to block normal submit since you used ajax
         },
				rules: {
					inputfirstname: "required",inputlastname: "required",
					inputemail: {
						required: true,
						email: true
                    },
                    inputphone:{
						required: true,
						regx: /^[+]*[(]{0,1}[0-9]{1,4}[)]{0,1}[-\s\./0-9]*$/
                    },
                    select_program:"required",
                    inputmessage:"required" 
				},
				messages: {
                    inputfullname: "Please enter your name",
                    inputphone:"Please enter your valid phone number.",
                    inputmessage: "Please enter your message",
                    select_program:  "Please select a program",
					inputemail: "Please enter a valid email address",
				},
				errorElement: "em",
				errorPlacement: function ( error, element ) {
                    // Add the `help-block` class to the error element
 					error.addClass( "help-block" );

					// Add `has-feedback` class to the parent div.form-group
					// in order to add icons to inputs
 
					if ( element.prop( "type" ) === "checkbox" ) {
						error.insertAfter( element.parent( "label" ) );
					} else {
						// error.insertAfter( element );
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