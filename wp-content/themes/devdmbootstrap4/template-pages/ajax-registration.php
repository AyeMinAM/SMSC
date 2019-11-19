<?php get_header(); 

/*
Template Name: Ajax register
*/
?>
 
<?php get_template_part('template-parts/head'); ?>

<?php get_template_part('template-parts/nav','header'); ?>

<div id= "divbody" class="container">
    <div class="row"  >

  <!-- Multi step form --> 
<section class="col-sm-12 multi_step_form" >  
  <form id="msform" enctype="multipart/form-data" > 
  
    <!-- progressbar -->
    <ul id="progressbar">
      <li class="active">Personal Information</li>  
      <li>Additional Information</li> 
      <li>Meal and Medical Information</li>
      <li>Policy, Agreement and Submission</li>

    </ul>
 
    <!-- fieldsets -->
<div id="container">

    <fieldset class="box" id="1">
         <!-- Tittle -->
    <div class="tittle">
      <h2>Online Application Form for the Meditation Retreat</h2>
    </div>
    
    <div class="col-sm-12">
        
        <p class="text-justify">
        
        It is essential to have previous experience in Mahasi Meditation Method and 
        to strictly adhere to the 9 precepts and retreat schedule.  
        Signed application needs to be received before coming to the center.  
        Final-acceptance by SMSC required. (If you have no access to 
        sign on-line can sign on arrival to the Retreat Center)</p>
    
    </div>
    
    <h3>1. Personal Information</h3>

      <div class="form-row"> 
        <div class="form-group col-md-6">  
        <input type="text" class="form-control"   id="inputfirstname" name="inputfirstname" placeholder="First Name"> 
        </div>  
        <div class="form-group col-md-6"> 
        <input type="text" class="form-control" id="inputlastname" name="inputlastname" placeholder="Last Name">
        </div> 
      </div> 
 
      <div class="form-row"> 
        <div class="form-group col-md-1">
            Gender  
        </div>  
         <div class="form-group col-md-10">
          
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="rdo_gender" id="rdo_male" value="Male">
                <label class="form-check-label" >Male</label>
            </div>
            <div id="div_female_label" class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="rdo_gender" id="rdo_female" value="Female">
                <label  class="form-check-label" >Female</label>
            </div>
            


        </div>  
      </div> 

 
      <div class="form-row"> 
        <div class="form-group col-md-12">  
        <input type="text" class="form-control"   id="inputaddline1" name="inputaddline1" placeholder="Address line 1">
        </div>  
       
      </div> 

      <div class="form-row"> 
        <div class="form-group col-md-12"> 
        <input type="text" class="form-control" id="inputaddline2" name="inputaddline2" placeholder="Address line 2">
        </div> 
      </div> 

      <div class="form-row"> 
        <div class="form-group col-md-6">  
        <input type="text" class="form-control"   id="inputpcode" name="inputpcode" placeholder="Postal Code"> 
        </div>  
        <div class="form-group col-md-6"> 
        <input type="text" class="form-control" id="inputprovince" name="inputprovince" placeholder="Province/Territory">
        </div> 
      </div> 

      <div class="form-row"> 
        <div class="form-group col-md-6">  
            <input type="text" class="form-control"   id="inputcity" name="inputcity" placeholder="City"> 
        </div>  
        <div class="form-group col-md-6"> 
            <select id="selectcountry" name="selectcountry" style="width:100%">
                <option value="Select Country">Select Country</option>
                <?php global $wpdb;
                $result = $wpdb->get_results("SELECT * FROM wp_country order by Name");
                foreach($result as $wp_country){?> 
                    <option value="<?php echo $wp_country->Code; ?>">
                        <?php echo  $wp_country->Name; ?>
                    </option>
                <?php
                }
                ?> 
            </select>
            <div id="error_selectcountry"> </div>
        </div> 
      </div>

      <div class="form-row"> 
        <div class="form-group col-md-6">  
        <input type="tel" class="form-control"   id="inputphone" name="inputphone" placeholder="Phone"> 
        </div>  
        <div class="form-group col-md-6"> 
        <input type="email" class="form-control" id="inputemail" name="inputemail" placeholder="Email">
        </div> 
      </div> 

      <div class="form-row"> 
        <div class="form-group col-md-6">  
        <input type="text" class="form-control"   id="input_occupation" name="input_occupation" placeholder="Occupation"> 
        </div>  
        <div class="form-group col-md-6"> 
        <input type="text" class="form-control" id="inputDOB" name="inputDOB" placeholder="Date of Birth">
        </div> 
      </div> 

        <div class="form-group col-md-12">
            Please provide one of the identification documents. <br>
            (Driver license for Canadians and valid passport page with photo on it for oversea yogis.)  
        </div>  
        <div class="form-row"> 
            <div class="form-group col-md-6">  
                <input type="text" class="form-control"   id="input_driver_no" name="input_driver_no" placeholder="Canadian Driver License No."> 
            </div>  
        </div> 
        <div class="form-row"> 
             <div class="form-group col-md-4"> 
                <input type="text" class="form-control" id="input_passport" name="input_passport" placeholder="Passport No.">
            </div> 
            <div class="form-group col-md-3">  
                <input type="text" class="form-control"   id="input_date_issue" name="input_date_issue" placeholder="Date of Issue"> 
            </div>  
            <div class="form-group col-md-5"> 
                <select id="select_origin_country" name="select_origin_country" style="width:100%">
                    <option value="Select Origin Country">Select Origin Country</option>

                    <?php global $wpdb;
                    $result = $wpdb->get_results("SELECT * FROM wp_country order by Name");
                    foreach($result as $wp_country){?> 
                        <option value="<?php echo $wp_country->Code; ?>">
                            <?php echo  $wp_country->Name; ?>
                        </option>
                    <?php
                    }
                    ?> 
                </select>
                <div id="error_select_origin_country"> </div>

            </div>      
        </div> 
        <div class="form-row"> 
        <div class="form-group col-md-6"> 
            
            <div class="custom-file">
            <div style='display:none'><a href=javascript:void(0) class="upload-info-button upload-info-button--first">Get first file info</a></div>
            
                <div id="custom-file-container-image" class=custom-file-container data-upload-id=myFirstImage><label>Upload Government issued photo ID<a
                        href=javascript:void(0) class=custom-file-container__image-clear
                        title="Clear Image">&times;</a></label> <label class=custom-file-container__custom-file><input
                        type=file class=custom-file-container__custom-file__custom-file-input id=customFile name=customFile accept=image/*
                        aria-label="Choose File"> <input type=hidden name=MAX_FILE_SIZE value=2097152> <span
                        class=custom-file-container__custom-file__custom-file-control></span></label>
                    <div class=custom-file-container__image-preview></div>
                </div>
            </div> 
            <div id="error_customFile"></div>
         </div> 
          
        </div>
        <button type="button" class="next action-button">Continue</button> 

        <div class="text-center btnDiv">
         </div> 
    </fieldset>
    <fieldset class="box" id="2">
    <h3>2. Additional Information</h3>

    <div class="form-row"> 
        <div class="form-group col-md-12">
            Request retreat period  
        </div> 
    </div> 



    <div class="form-row"> 
        <div class="form-group col-md-6">  
        <input type="text" class="form-control"   id="inputRetreatFrom" name="inputRetreatFrom" placeholder="From"> 
        </div>  
        <div class="form-group col-md-6"> 
        <input type="text" class="form-control" id="inputRetreatTo" name="inputRetreatTo" placeholder="To">
        </div> 
      </div> 

      <div class="form-row"> 
        <div class="form-group col-md-12">
        Emergency Contact  
        </div> 
      </div> 
<div class="form-row"> 


  <div class="form-group col-md-6">  
  <input type="text" class="form-control"   id="input_e_firstname" name="input_e_firstname" placeholder="First Name"> 
  </div>  
  <div class="form-group col-md-6"> 
  <input type="text" class="form-control" id="input_e_lastname" name="input_e_lastname" placeholder="Last Name">
  </div> 
</div> 

<div class="form-row"> 
  <div class="form-group col-md-12">  
  <input type="text" class="form-control"   id="input_e_relationship" name="input_e_relationship" placeholder="Relationship to you">
  </div>  
</div> 


<div class="form-row"> 
  <div class="form-group col-md-12">  
  <input type="text" class="form-control"   id="input_e_addline1" name="input_e_addline1" placeholder="Address line 1">
  </div>  
 
</div> 

<div class="form-row"> 
  <div class="form-group col-md-12"> 
  <input type="text" class="form-control" id="input_e_addline2" name="input_e_addline2" placeholder="Address line 2">
  </div> 
</div> 

<div class="form-row"> 
  <div class="form-group col-md-6">  
  <input type="text" class="form-control"   id="input_e_pcode" name="input_e_pcode" placeholder="Postal Code"> 
  </div>  
  <div class="form-group col-md-6"> 
  <input type="text" class="form-control" id="input_e_province" name="input_e_province" placeholder="Province/Territory">
  </div> 
</div> 

<div class="form-row"> 
  <div class="form-group col-md-6">  
  <input type="text" class="form-control"   id="input_e_city" name="input_e_city" placeholder="City"> 
  </div>  
    <div class="form-group col-md-6"> 
        <select id="select_e_country" name="select_e_country" style="width:100%">
                    <option value="Select Country">Select Country</option>
                    <?php global $wpdb;
                    $result = $wpdb->get_results("SELECT * FROM wp_country order by Name");
                    foreach($result as $wp_country){?> 
                        <option value="<?php echo $wp_country->Code; ?>">
                            <?php echo  $wp_country->Name; ?>
                        </option>
                    <?php
                    }
                    ?> 
        </select>
        <div id="error_select_e_country"> </div>

    </div> 
</div> 

<div class="form-row"> 
  <div class="form-group col-md-6">  
  <input type="tel" class="form-control"   id="input_e_phone" name="input_e_phone" placeholder="Phone"> 
  </div>  
  <div class="form-group col-md-6"> 
  <input type="email" class="form-control" id="input_e_email" name="input_e_email" placeholder="Email">
  </div> 
</div> 

<div class="form-row"> 
    <div class="form-group col-md-12">
      Most recent meditation retreats attend (Theravada and non-Theravada), up to 5 retreats.   
    </div> 
</div> 

<div class="form-row"> 

  <div class="form-group col-md-12">  
   
  <textarea class="form-control rounded-0" id="txt_retreats" name="txt_retreats" rows="3"></textarea>

  </div>  
 
</div> 
  
 
      <button type="button" class="action-button previous previous_button">Back</button> 
      <button type="button" class="next action-button">Continue</button>  

    </fieldset>  

    <fieldset class="box" id="3">
    <h3>3. Meal and Medical Information</h3>

    <div class="form-row"> 
    <div class="form-group col-md-12">
      Please answer a few more questions about meals and medical insurance so that we can provide you best based on your needs. 
      All fields are mandatory
    </div> 
    </div> 
<div class="form-row"> 
  <div class="form-group col-md-2">
      Are you Vegetarian?  
  </div>  
   <div class="form-group col-md-8">
      <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="radio_vegetarian"  value="1">
          <label class="form-check-label" >Yes</label>
      </div>
      <div id="div_vegetarian" class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="radio_vegetarian" value="0">
          <label    class="form-check-label" >No</label>
      </div>
  </div>  
</div> 

<div class="form-row"> 
        <div class="form-group col-md-12">
        Do you have food or other allergies? If yes, please specify. 

        </div> 
        <div class="form-group col-md-8">
      <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="radio_allergies"  value="1">
          <label class="form-check-label" >Yes</label>
      </div>
      <div id="div_allergies" class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="radio_allergies"  value="0">
          <label    class="form-check-label" >No</label>
      </div>
  </div>  
</div> 

<div class="form-row"> 

  <div class="form-group col-md-12">  
   
  <textarea class="form-control rounded-0" id="txtfood_allergy" name="txtfood_allergy" rows="3"></textarea>

  </div>  
 
</div> 

<div class="form-row"> 
    <div class="form-group col-md-12">
    Do you have BC or any other type of health insurance? Please specify type of health insurance. 
    <br>
    (It is imperative to have health insurance.) 
    </div> 
</div> 

<div class="form-row"> 
  <div class="form-group col-md-12">  
   
  <textarea class="form-control rounded-0" id="txt_insurance" name="txt_insurance" rows="3"></textarea>

  </div>  
 
</div> 


<div class="form-row"> 
    <div class="form-group col-md-12">
      Do you have any physical or mental health issue SMSC should be made aware?. 
    </div> 
</div> 

<div class="form-row"> 
 
   <div class="form-group col-md-10">
      <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="radio_issue_MP"    value="1">
          <label class="form-check-label" >Yes</label>
      </div>
      <div id="div_issue_mp" class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="radio_issue_MP"  value="0">
          <label class="form-check-label" >No</label>
      </div>
  </div>  
</div> 


<div class="form-row"> 
        <div class="form-group col-md-12">
        If yes, please specify
        </div> 
</div> 

<div class="form-row"> 
  <div class="form-group col-md-12">  
   
  <textarea class="form-control rounded-0" id="txt_issue_MP" name="txt_issue_MP" rows="3"></textarea>

  </div>  
 
</div> 

 
    <button type="button" class="action-button previous previous previous_button">Back</button> 
    <button type="button" class="next action-button">Continue</button>  

    </fieldset>  
    <fieldset  class="box" id="4">

    <h3>4. Policy and agreement</h3>

    <div class="form-row"> 
        <div class="form-group col-md-12">
            Please read this carefully before you submit this form online.  
        </div> 
    </div> 

    <div class="form-row"> 
        <div class="form-group col-sm-0">
            1.  
        </div>  
         <div class="form-group col-md-10">
            I agree to abide to the following rules and structure : 
        </div>  
    </div> 

    <div class="form-row"> 
        <div class="form-group col-sm-0">
           
        </div>  
         <div class="form-group col-md-10">
         - Practice Mindfulness-Insight (Mahasi Tradition) only 
        </div>  
    </div>
    <div class="form-row"> 
        <div class="form-group col-sm-0">
           
        </div>  
         <div class="form-group col-md-10">
         - Strictly adhere to Nine Precepts
        </div>  
    </div>

    <div class="form-row"> 
        <div class="form-group col-sm-0">
           
        </div>  
         <div class="form-group col-md-10">
         - Maintain Noble Silence
        </div>  
    </div>

    <div class="form-row"> 
        <div class="form-group col-sm-0">
           
        </div>  
         <div class="form-group col-md-10">
         - Slow down all actions and behavior at all time 
        </div>  
    </div>

    <div class="form-row"> 
        <div class="form-group col-sm-0">
           
        </div>  
         <div class="form-group col-md-10">
         - Follow retreat schedule  
        </div>  
    </div>

    <div class="form-row"> 
        <div class="form-group col-sm-0">
           
        </div>  
         <div class="form-group col-md-10">
         - Anyone who becomes a disturbance to the retreat will be asked to leave  
        </div>  
    </div>
    
    <div class="form-row"> 
        <div class="form-group col-sm-0">
           2.  
        </div>  
         <div class="form-group col-md-10">
            I am aware that I may be photographed or videotaped at retreat for sharing among SMSC 
            participants, yogis and SMSC Dhamma friends. 
        </div>  
    </div> 


    <div class="form-row"> 
        <div class="form-group col-sm-0">
           3.  
        </div>  
         <div class="form-group col-md-10">
         I agree to keep my personal information on the SMSC file. 
        </div>  
    </div> 
 
      <div class="form-row"> 
         <div class="form-group col-md-10">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="radio_save"   value="1">
                <label class="form-check-label" >Yes</label>
            </div>
            <div id="div_save" class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="radio_save" id="rdo_female" value="0">
                <label class="form-check-label" >No</label>
            </div>
        </div>  
      </div> 

      <div class="form-row"> 
        <div class="form-group col-md-12">
        If "No", you will need to fill up this form at every future retreat you attend.
        </div> 
    </div> 

      <div class="form-row"> 
        <div class="form-group col-md-12">
        BY SUBMITTING THIS ELECTRONIC APPLICATION I WAIVE ALL FORM OF LIABILITY TOWARDS SMSC, ITS STAFF AND VOLUNTEERS FOR THIS RETREAT AND ALL OTHER RETREATS I WILL BE ATTENDING AT SMSC.
        </div> 
    </div> 



      <div class="form-row"> 
        <div class="form-group col-md-6">  
        <input type="text" class="form-control"   id="input_ack_firstname" name="input_ack_firstname" placeholder="First Name"> 
        </div>  
        <div class="form-group col-md-6"> 
        <input type="text" class="form-control" id="input_ack_lastname" name="input_ack_lastname" placeholder="Last Name">
        </div> 
      </div> 


      <div class="form-row"> 
        <div class="form-group col-md-6">  
        <input type="text" class="form-control" id="input_ack_date" name="input_ack_date" placeholder="Date">
        </div> 
      </div> 




    <button type="button" class="action-button previous previous previous previous_button">Back</button> 

    <button id="registerSubmit" type="submit" class="btn action-button">Submit</button>
    <div id="message"> </div>

    </fieldset>  
</div>

  </form>  
</section> 
<!-- End Multi step form -->   
</div>
 
</div>
 
<style>

 
   

</style>

<script>

 
jQuery(document).ready(function () 
{


    function adjustBox() {
            var H = 0;
            $("div").each(function (i) {
                var h = $(".box").eq(i).height();
                if (h > H) H = h;
            });
            $(".box").height(H+200);
    }; 
    //adjustBox();
  
    $(document).ajaxStart(function(){
        
    });

    $(document).ajaxComplete(function(){
        
    });
 
    jQuery( "#chk_agree" ).checkboxradio();



 
    $('#inputRetreatFrom').datetimepicker({
        format: 'DD/MM/YYYY' 
    });


    $('#inputRetreatTo').datetimepicker({
        format: 'DD/MM/YYYY' 
    });


   $('#inputDOB').datetimepicker({
        format: 'DD/MM/YYYY',
        maxDate : 'now'
    });


    $('#input_date_issue').datetimepicker({
        format: 'DD/MM/YYYY'
    });

    $('#input_ack_date').datetimepicker({
        format: 'DD/MM/YYYY'
    });


    var form = $("#msform");

    function submit() 
    {
            

            var loadingText = '<i class="fa fa-circle-o-notch fa-spin"></i> Submitting...';
                if ($("#registerSubmit").html() !== loadingText) {
                    $("#registerSubmit").data('original-text', $("#registerSubmit").html());
                    $("#registerSubmit").html(loadingText);
                }

            $("#registerSubmit").attr("disabled", true);
 
            console.log($(form).serialize());


            $.ajax({
                type: "POST",
                url: '<?php echo admin_url("admin-ajax.php") ?>',
                data: $(form).serialize()  + '&action=registerSubmit' ,
                error: function () {
                $("#registerSubmit").attr("disabled", false);

                $('.btn').html($("#registerSubmit").data('original-text'));

                $( "#message" ).html('<div class="alert alert-danger" role="alert">There is error in your submission. Please try to submit again or contact with Administrator</div>');

                
                },
                success: function () {


                    $("#registerSubmit").attr("disabled", false);

                    //$( "#message" ).html('<div class="alert alert-success" role="alert">You have submitted successfully!</div>');

                    $('.btn').html($("#registerSubmit").data('original-text'));

                    $.ajax({

                    type: "GET",
                    url: "<?php echo esc_url( get_permalink( get_page_by_title('successful') ) ); ?>" ,
                    success: function(data) {
                        // data is ur summary
                        $('#divbody').html(data);
                    }

                    });

             

                }
            });
        
    }
 



    $('#selectcountry').select2();

    $('#select_origin_country').select2();
 

    $('#select_e_country').select2();


    var DateField = function(config) {
        jsGrid.Field.call(this, config);
    };
 
    DateField.prototype = new jsGrid.Field({
        sorter: function(date1, date2) {
            return new Date(date1) - new Date(date2);
        },
 
        itemTemplate: function(value) {
            return new Date(value).toDateString();
        },
        insertTemplate: function(value) {
            return this._insertPicker = $("<input>").datepicker(
                { defaultDate: new Date() ,
                  changeMonth: true,
                changeYear: true,
                   showButtonPanel: true,
                   dateFormat: 'MM yy',
                   onClose: function(dateText, inst) { 
                $(this).datepicker('setDate', new Date(inst.selectedYear, inst.selectedMonth, 1));
            }
                });
        },
 
        editTemplate: function(value) {
            return this._editPicker = $("<input>").datepicker(

                { 
                    changeMonth: true,
                    changeYear: true,
                    showButtonPanel: true,
                    dateFormat: 'MM yy',
                    onClose: function(dateText, inst) { 
                $(this).datepicker('setDate', new Date(inst.selectedYear, inst.selectedMonth, 1));
            }
                }
            ).datepicker("setDate", new Date(value));
        },
 
        insertValue: function() {
            return this._insertPicker.datepicker("getDate").toISOString();
        },
 
        editValue: function() {
            return this._editPicker.datepicker("getDate").toISOString();
        }
    });


    var clients = [
       
    ];
 
     
 
    jsGrid.fields.DateField = DateField;

    var jsGridData = $("#jsGrid").jsGrid({
        width: "100%",
        height: "90%",
        paging: true,
        pageSize: 15,
        inserting: true,
        editing: true,
        sorting: true,
        paging: true,
 
        data: clients,
 
        fields: [
            { type: "control" },
            { name: "TypeRetreat", title: "Type of Retreat", type: "text", width: 150, validate: "required" },
            { name: "Teacher", type: "text", width: 200,validate: "required"},
            { name: "Location", type: "text", width: 200,validate: "required" },
             { name: "WhenMMYY",  title: "When(month, Year)", type: "DateField", width: 100, align: "center" },
            { name: "Duration",title: "Duration(How many days?)", type: "text",width: 100  }
           
        ]
    });

    

    $.validator.addMethod("regx", function(value, element, regexpr) {          
    return regexpr.test(value);
    }, "Please enter a valid phone number.");


    $.validator.addMethod("regxDate", function(value, element, regexpr) {          
    return regexpr.test(value);
    }, "Please enter a valid date format.");

 
    $.validator.addMethod("checkCountry", function(value) {
		return value !== "Select Country";
	}, 'Please select Country');
 
 

    
    $.validator.addMethod("checkDriverNo", function(value) {

       if($.trim($("#input_passport").val())=="") 
       {
            return $.trim($("#input_driver_no").val())!="";
      
       }
       else
       {
           return true; 
       }
	}, 'Please enter Canadian Driver License No. or Passport No.');
 

    $.validator.addMethod("checkPassportNo", function(value) {

    if($.trim($("#input_driver_no").val())=="") 
    {
        return $.trim($("#input_passport").val())!="";

    }
    else
    {
        return true; 
    }
    }, 'Please enter Canadian Driver License No. or Passport No.');



    $.validator.addMethod("checkFoodAllergy", function(value) {
    
    

    console.log( $('input[name=radio_allergies]:checked', '#msform').val());


    if($('input[name=radio_allergies]:checked', '#msform').val()=="1") 
    {
        return $.trim($("#txtfood_allergy").val())!="";

    }
    else
    {
        return true; 
    }
    }, 'Please specify food or other allergies.');



    $.validator.addMethod("checkIssueMP", function(value) {

        console.log( $('input[name=radio_issue_MP]:checked', '#msform').val());


    if($('input[name=radio_issue_MP]:checked', '#msform').val()=="1") 
    {
        return $.trim($("#txt_issue_MP").val())!="";

    }
    else
    {
        return true; 
    }
    }, 'Please specify any physical or mental health issue.');




    
    $.validator.addMethod("checkIssueDate", function(value) {

    if($.trim($("#input_passport").val())!="") 
    {
        if($.trim($("#input_date_issue").val())!="") 
        {
            regexpr = /^(0[1-9]|[12][0-9]|3[01])[- /.](0[1-9]|1[012])[- /.](19|20)\d\d$/
            return regexpr.test(value);
        }
        else
            return false; 

    }
    else
    {
        return true; 
    }
    }, 'Please enter valid date of issue');



    $.validator.addMethod("checkOriginCountry", function(value) {

    if($.trim($("#input_passport").val())!="") 
    {
        return value != "Select Origin Country"; 

    }
    else
    {
        return true; 
    }
    }, 'Please select Origin Country');



    $.validator.addMethod("greaterThan", 
    function(value, element, params) {

        if($.trim($(params).val())!="") 
        {
            var start =  moment(value, "DD/MM/YYYY");
            var end =  moment($(params).val(), "DD/MM/YYYY");

             console.log(start >= end);
            return start >= end;
        }
        else
        return true; 

       
        
    },'Must be greater than {0}.');


    $.validator.addMethod("lessThan", 
    function(value, element, params) {

        if($.trim($(params).val())!="") 
        {
            var start =  moment(value, "DD/MM/YYYY");
            var end =  moment($(params).val(), "DD/MM/YYYY");

            console.log(start <= end);
            return start <= end;
        }
        else
        return true; 

      
    },'Must be less than {0}.');




    //* Form js
    function verificationForm(){
        //jQuery time
        var current_fs, next_fs, previous_fs; //fieldsets
        var left, opacity, scale; //fieldset properties which we will animate
        var animating; //flag to prevent quick multi-click glitches

        $(".next").click(function () {
 
            current_fs = $(this).parent();
           
            next_fs = $(this).parent().next();

            

            form.validate(
                        {
                        debug: true,
                        ignore: ':hidden',
                        submitHandler: function (form) {
                            return false; 
                        },
                        rules: {
                            inputfirstname: {
                                required: true,
                                maxlength: 100,
                            },
                            inputlastname: {
                                required: true,
                                maxlength: 100,
                            },
                            rdo_gender: "required" ,
                            inputaddline1:{
                                required: true,
                                maxlength: 255,
                            },
                            inputprovince:"required",
                            inputcity:"required",
                            inputphone: { required: true,
                            regx: /^[+]*[(]{0,1}[0-9]{1,4}[)]{0,1}[-\s\./0-9]*$/ },
                            inputemail: {
                                required: true,
                                email: true
                            },
                            inputDOB: {
                                required: true,
                                regxDate: /^(0[1-9]|[12][0-9]|3[01])[- /.](0[1-9]|1[012])[- /.](19|20)\d\d$/
                            }, 
                            selectcountry: "checkCountry" ,
                            customFile: {
                                required: true
                            },
                            input_driver_no: "checkDriverNo" ,
                            input_passport: "checkPassportNo" ,
                            input_date_issue:"checkIssueDate", 
                            select_origin_country:"checkOriginCountry",
                            inputRetreatFrom: {
                                required: true,
                                regxDate: /^(0[1-9]|[12][0-9]|3[01])[- /.](0[1-9]|1[012])[- /.](19|20)\d\d$/,
                                lessThan:"#inputRetreatTo"
                            }, 
                            inputRetreatTo: {
                                required: true,
                                regxDate: /^(0[1-9]|[12][0-9]|3[01])[- /.](0[1-9]|1[012])[- /.](19|20)\d\d$/,
                                greaterThan:"#inputRetreatFrom"

                            }, 
                            input_e_firstname: {
                                required: true,
                                maxlength: 100,
                            },
                            input_e_lastname: {
                                required: true,
                                maxlength: 100,
                            },
                            input_e_relationship:{
                                required: true,
                                maxlength: 100,
                            },
                            input_e_addline1:{
                                required: true,
                                maxlength: 255,
                            },
                            input_e_province:"required",
                            input_e_city:"required",
                            select_e_country: "checkCountry",
                            input_e_phone: { required: true,
                            regx: /^[+]*[(]{0,1}[0-9]{1,4}[)]{0,1}[-\s\./0-9]*$/ },
                            input_e_email: {
                                required: true,
                                email: true
                            }, 
                            radio_vegetarian:"required",
                            radio_allergies:"required",
                            radio_issue_MP:"required",
                            txtfood_allergy:"checkFoodAllergy",
                            txt_issue_MP:"checkIssueMP",
                            radio_save:"required",
                            input_ack_firstname:"required",
                            input_ack_lastname:"required",
                            input_ack_date: {
                                required: true,
                                regxDate: /^(0[1-9]|[12][0-9]|3[01])[- /.](0[1-9]|1[012])[- /.](19|20)\d\d$/
                            }, 

                        },
                        messages: {
                            inputfirstname: {
                                required: "Please enter your First Name",
                                maxlength: 'First Name is too long and it is allow only less than or equal to 100'
                            },
                            inputlastname: {
                                required: "Please enter your Last Name",
                                maxlength: 'Last Name is too long and it is allow only less than or equal to 100'
                            },
                            inputaddline1: "Please enter Address line 1",
                            inputprovince:"Please enter Province/Territory",
                            inputcity:"Please enter City",
                            inputemail: "Please enter a valid email address",
                            customFile: "Please upload government issued photo",
                            inputDOB: "Please enter Date of Birth",
                            inputphone: "Please enter your valid phone number",
                            inputRetreatFrom: "Please enter valid the start date of retreat",
                            inputRetreatTo: "Please enter valid the end date of retreat",
                            input_e_firstname: {
                                required: "Please enter your First Name",
                                maxlength: 'First Name is too long and it is allow only less than or equal to 100'
                            },
                            input_e_lastname: {
                                required: "Please enter your Last Name",
                                maxlength: 'Last Name is too long and it is allow only less than or equal to 100'
                            },
                            input_e_relationship: "Please enter relationship to you", 
                            input_e_addline1: "Please enter Address line 1",
                            input_e_province:"Please enter Province/Territory",
                            input_e_city:"Please enter City",
                            input_e_email: "Please enter a valid email address",
                            input_e_phone: "Please enter your valid phone number",
                            input_ack_firstname:"Please enter your sign for First Name",
                            input_ack_lastname:"Please enter your sign for First Name",
                            input_ack_date:"Please enter valid sign date"

                        } 
                        ,  errorPlacement: function(error, element) {
                            if (element.attr("name") == "rdo_gender") {
                                error.insertAfter("#div_female_label");
                            } else if (element.attr("name") == "selectedcountry") {
                            
                                error.insertAfter("#error_selectcountry");
                    
                            } else if (element.attr("name") == "customFile") {
                                error.insertAfter("#error_customFile");

                            }
                            else if (element.attr("name")=="selectcountry")
                            {
                                error.insertAfter("#error_selectcountry");  

                            } else if (element.attr("name")=="select_origin_country")
                            {

                                error.insertAfter("#error_select_origin_country");  
                            } 
                            else if (element.attr("name") == "select_e_country") {
                            
                            error.insertAfter("#error_select_e_country");
                
                            } else if (element.attr("name") == "radio_vegetarian") {
                                error.insertAfter("#div_vegetarian");
                            }
                            else if (element.attr("name") == "radio_allergies") {
                                error.insertAfter("#div_allergies");
                            }
                            else if (element.attr("name") == "radio_issue_MP") {
                                error.insertAfter("#div_issue_mp");
                            }
                            else if (element.attr("name") == "radio_save") {
                                error.insertAfter("#div_save");
                            }
                            else {
                                error.insertAfter(element);
                            }
                        }
                    });

           if (form.valid() == true){

                //alert($('fieldset:visible').attr('id'));

                  //activate next step on progressbar using the index of next_fs
                $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

                //show the next fieldset
                next_fs.show();
                current_fs.hide();
 
            }
           
        });

        $(".previous").click(function () {

            current_fs = $(this).parent();
            previous_fs = $(this).parent().prev();

            //de-activate current step on progressbar
            $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

            //show the previous fieldset
            previous_fs.show();
            current_fs.hide();

        });

       
    }
     
    /*Function Calls*/  
    verificationForm ();

    $("form").submit(function(){
        if (form.valid() == true){
            submit();
        }
        
    });

 
});

</script>




<?php get_template_part('template-parts/nav','footer'); ?>

<?php get_footer(); ?>