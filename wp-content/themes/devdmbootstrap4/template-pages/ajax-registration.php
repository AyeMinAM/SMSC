<?php get_header(); 

/*
Template Name: Ajax register
*/
?>
 
<?php get_template_part('template-parts/head'); ?>

<?php get_template_part('template-parts/nav','header'); ?>

<div class="container">
    <div class="row"  >

  <!-- Multi step form --> 
<section class="col-sm-12 multi_step_form" >  
  <form id="msform"> 
  
    <!-- progressbar -->
    <ul id="progressbar">
      <li class="active">Personal Information</li>  
      <li>Additional Information</li> 
      <li>Most Recent Meditation Retreats</li> 

      <li>Meal and Medical Information</li>
      <li>Policy, Agreement and Submission</li>

    </ul>
  <!-- Tittle -->
    <div class="tittle">
      <h2>Online Application Form for the Residentail Meditation Retreat</h2>
      <p>Download the form  <a href="http://localhost/SMSC/wp-content/uploads/pdf/Lecture8_student_complete.pdf" target="_blank">here</a>   if you want to fill out on paper</p>
    </div>
    
    <div class="col-sm-12">
        
        <p class="text-justify">
        
        It is essential to have previous experience in Mahasi Meditation Method and 
        to strictly adhere to the 9 precepts and retreat schedule.  
        Signed application needs to be received before coming to the center.  
        Final-acceptance by SMSC required. (If you have no access to 
        sign on-line can sign on arrival to the Retreat Center)</p>
    
    </div>
    
    <!-- fieldsets -->
<div id="container">

    <fieldset class="box">
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
       
            <div class="dropdown hierarchy-select" id="dropdown_country">
                <button type="button" class="btn btn-secondary dropdown-toggle" id="dropdown_country_button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                    <div class="dropdown-menu" aria-labelledby="dropdown_country_button">
                        <div class="hs-searchbox">
                            <input type="text" class="form-control" autocomplete="off">
                        </div>
                        <div class="hs-menu-inner">
                            <a class="dropdown-item" data-value="" data-default-selected="" href="#">Select Country</a>
                            <?php global $wpdb;
                            $result = $wpdb->get_results("SELECT Name FROM wp_country order by Name");
                            foreach($result as $wp_country){?> 
                                <a class="dropdown-item" data-value="<?php echo $wp_country->Code; ?>" href="#">
                                <?php echo  $wp_country->Name; ?>
                                </a>
                            <?php
                            }
                            ?> 
                        </div>
                    </div>
                    <input class="d-none" name="dropdown_country" readonly="readonly" aria-hidden="true" type="text"/>
            </div>
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
            <div class="form-group col-md-4"> 
       
            <div class="dropdown hierarchy-select" id="dropdown_origin_country">
                <button type="button" class="btn btn-secondary dropdown-toggle" id="dropdown_origin_country_button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                    <div class="dropdown-menu" aria-labelledby="dropdown_origin_country_button">
                        <div class="hs-searchbox">
                            <input type="text" class="form-control" autocomplete="off">
                        </div>
                        <div class="hs-menu-inner">
                            <a class="dropdown-item" data-value="" data-default-selected="" href="#">Select Country</a>
                            <?php global $wpdb;
                            $result = $wpdb->get_results("SELECT Name FROM wp_country order by Name");
                            foreach($result as $wp_country){?> 
                                <a class="dropdown-item" data-value="<?php echo $wp_country->Code; ?>" href="#">
                                <?php echo  $wp_country->Name; ?>
                                </a>
                            <?php
                            }
                            ?> 
                        </div>
                    </div>
                    <input class="d-none" name="dropdown_origin_country" readonly="readonly" aria-hidden="true" type="text"/>
            </div>
        </div> 
                
        </div> 
        <div class="form-row"> 
        <div class="form-group col-md-6"> 
            
            <div class="custom-file">
            <div style='display:none'><a href=javascript:void(0) class="upload-info-button upload-info-button--first">Get first file info</a></div>
            
                <div id="custom-file-container-image" class=custom-file-container data-upload-id=myFirstImage><label>Upload Government issued photo ID<a
                        href=javascript:void(0) class=custom-file-container__image-clear
                        title="Clear Image">&times;</a></label> <label class=custom-file-container__custom-file><input
                        type=file class=custom-file-container__custom-file__custom-file-input id=customFile accept=image/*
                        aria-label="Choose File"> <input type=hidden name=MAX_FILE_SIZE value=10485760> <span
                        class=custom-file-container__custom-file__custom-file-control></span></label>
                    <div class=custom-file-container__image-preview></div>
                </div>
            </div> 
         </div> 
          
        </div>
        <button type="button" class="next action-button">Continue</button> 

        <div class="text-center btnDiv">
         </div> 
    </fieldset>
    <fieldset class="box">
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

  <div class="dropdown hierarchy-select" id="dropdown_e_origin_country">
                <button type="button" class="btn btn-secondary dropdown-toggle" id="dropdown_e_origin_country_button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                    <div class="dropdown-menu" aria-labelledby="dropdown_e_origin_country_button">
                        <div class="hs-searchbox">
                            <input type="text" class="form-control" autocomplete="off">
                        </div>
                        <div class="hs-menu-inner">
                            <a class="dropdown-item" data-value="" data-default-selected="" href="#">Select Country</a>
                            <?php global $wpdb;
                            $result = $wpdb->get_results("SELECT Name FROM wp_country order by Name");
                            foreach($result as $wp_country){?> 
                                <a class="dropdown-item" data-value="<?php echo $wp_country->Code; ?>" href="#">
                                <?php echo  $wp_country->Name; ?>
                                </a>
                            <?php
                            }
                            ?> 
                        </div>
                    </div>
                    <input class="d-none" name="dropdown_e_origin_country" readonly="readonly" aria-hidden="true" type="text"/>
</div>

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
  
 
      <button type="button" class="action-button previous previous_button">Back</button> 
      <button type="button" class="next action-button">Continue</button>  

    </fieldset>  
    <fieldset class="box">
    <div class="form-row"> 
    <div class="form-group col-md-12">
      Most recent meditation retreats attend (Theravada and non-Theravada), up to 5 retreats.   
    </div> 
</div> 

    <div id="jsGrid"></div>   


    <button type="button" class="action-button previous previous previous_button">Back</button> 
    <button type="button" class="next action-button">Continue</button>  

    </fieldset>  
    <fieldset class="box">
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
          <input class="form-check-input" type="radio" name="radio_gender" id="rdo_male" value="Male">
          <label class="form-check-label" >Yes</label>
      </div>
      <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="radio_gender" id="rdo_female" value="Female">
          <label    class="form-check-label" >No</label>
      </div>
  </div>  
</div> 

<div class="form-row"> 
        <div class="form-group col-md-12">
        Food Allergy (Please indicate.)  
        </div> 
</div> 

<div class="form-row"> 
  <div class="form-group col-md-12">  
   
  <textarea class="form-control rounded-0" id="txtfood_allergy" name="txtfood_allergy" rows="3"></textarea>

  </div>  
 
</div> 

<div class="form-row"> 
    <div class="form-group col-md-12">
      Do you have BC medical or Travel insurance? (for out-of-country yogis only). 
    </div> 
</div> 

<div class="form-row"> 
 
   <div class="form-group col-md-10">
      <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="optradio" id="rdo_male" value="Male">
          <label class="form-check-label" >Yes</label>
      </div>
      <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="optradio" id="rdo_female" value="Female">
          <label class="form-check-label" >No</label>
      </div>
  </div>  
</div> 


<div class="form-row"> 
        <div class="form-group col-md-12">
        Do you have other medical insurance? Please specify.
        </div> 
</div> 

<div class="form-row"> 
  <div class="form-group col-md-12">  
   
  <textarea class="form-control rounded-0" id="txt_other_insurance" name="txt_other_insurance" rows="3"></textarea>

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
          <input class="form-check-input" type="radio" name="optradio" id="rdo_male" value="Male">
          <label class="form-check-label" >Yes</label>
      </div>
      <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="optradio" id="rdo_female" value="Female">
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
   
  <textarea class="form-control rounded-0" id="txt_other_insurance" name="txt_other_insurance" rows="3"></textarea>

  </div>  
 
</div> 

 
    <button type="button" class="action-button previous previous previous_button">Back</button> 
    <button type="button" class="next action-button">Continue</button>  

    </fieldset>  
    <fieldset  class="box">

    <h3>4. Policy and agreement</h3>

    <div class="form-row"> 
        <div class="form-group col-md-12">
            Please read this waiver form carefully before you submit it online.
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


    <!-- <div class="form-row"> 
        <div class="form-group col-sm-0">
           3.  
        </div>  
         <div class="form-group col-md-10">
           This form will be kept on the SMSC file for future retreats you may 
        attend. However, it will be deleted after current retreat upon request. 
        
        </div>  
    </div>  -->

    <div class="form-row"> 
        <div class="form-group col-md-12">
        3. I agree to keep my personal information on the SMSC file.   

        </div> 
    </div> 
 
      <div class="form-row"> 
         <div class="form-group col-md-10">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="optradio" id="rdo_male" value="Male">
                <label class="form-check-label" >Yes</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="optradio" id="rdo_female" value="Female">
                <label class="form-check-label" >No</label>
            </div>
            <div>
           If no, you will need to fill up this form at every future retreat you attend.
        
        </div>  
        </div>  
      </div> 

      <div class="form-row"> 
        <div class="form-group col-md-12">
                <p class="text-justify">BY SUBMITTING THIS ELECTRONIC APPLICATION  I WAIVE ALL FORM OF LIABILITY TOWARDS SMSC, ITS STAFF AND VOLUNTEERS FOR THIS RETREAT AND ALL OTHER RETREATS I WILL BE ATTENDING AT SMSC.
     
                </p> 
        </div> 
    </div> 
      <!-- <div class="form-row"> 
        <div class="form-group col-md-12">
            I agree that by submitting this application, I am   
            electronically signing this application. 
        </div> 
    </div> 
 -->


      <div class="form-row"> 
        <div class="form-group col-md-6">  
        <input type="text" class="form-control"   id="inputfirstname" name="inputfirstname" placeholder="First Name"> 
        </div>  
        <div class="form-group col-md-6"> 
        <input type="text" class="form-control" id="inputlastname" name="inputlastname" placeholder="Last Name">
        </div> 
      </div> 


      <div class="form-row"> 
        <div class="form-group col-md-6">  
        <input type="text" class="form-control" id="inputDOB" name="inputDOB" placeholder="Date">
        </div> 
      </div> 




    <button type="button" class="action-button previous previous previous previous_button">Back</button> 

    <button href="#" class="action-button">Submit</button> 

    </fieldset>  
</div>

  </form>  
</section> 
<!-- End Multi step form -->   
</div>
 
</div>


<div id="dialog" title="Info">
  <div class="progress-label">Loading...</div>
  <div id="progressbar"></div>
</div>
 
<style>

/* .ui-datepicker-calendar {
        display: none;
    }   */

/* .has-error input[type=text], 
.has-error input[type=email], 
.has-error select {
    border-color: #2f2f2f;
    -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
    box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
} */

.ui-dialog-titlebar-close {
    display: none;
  }
</style>

<script>

 
    jQuery(document).ready(function () {


    function adjustBox() {
            var H = 0;
            $("div").each(function (i) {
                var h = $(".box").eq(i).height();
                if (h > H) H = h;
            });
            $(".box").height(H+200);
    }; 
    //adjustBox();
 
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

    $('#dropdown_country').hierarchySelect({
        hierarchy: false,
        width: 'auto',
        width: 400
    });


    $('#dropdown_origin_country').hierarchySelect({
        hierarchy: false,
        width: 'auto',
        width: 400
    });


    $('#dropdown_e_origin_country').hierarchySelect({
        hierarchy: false,
        width: 'auto',
        width: 400
    });

    

    


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
        paging: true,
        pageSize: 15,
        inserting: true,
        editing: true,
        sorting: true,
        paging: true,
 
        data: clients,
 
        fields: [
            { name: "TypeRetreat", title: "Type of Retreat", type: "text", width: 150, validate: "required" },
            { name: "Teacher", type: "text", width: 200,validate: "required"},
            { name: "Location", type: "text", width: 200,validate: "required" },
             { name: "WhenMMYY",  title: "When(month, Year)", type: "DateField", width: 100, align: "center" },
            { name: "Duration",title: "Duration(How many days?)", type: "text",width: 100  },
            { type: "control" }
        ]
    });

    

    $.validator.addMethod("regx", function(value, element, regexpr) {          
    return regexpr.test(value);
    }, "Please enter a valid phone number.");


    $.validator.addMethod("regxDate", function(value, element, regexpr) {          
    return regexpr.test(value);
    }, "Please enter a valid date format.");

 

    $.validator.addMethod("regxCountry", function(value, element, regexpr) { 
    alert(value);         
    return regexpr.test(value);
    }, "Please select country.");


    jQuery( "#registerForm" ).validate( {
        ignore: ":hidden",
        submitHandler: function (form) {
            var count =  clients.length;

             if(count>0)
            {
                var jsonData = JSON.stringify(clients);

                 var input = $("<input>")
               .attr("type", "hidden")
               .attr("name", "retreatdata").val(jsonData);
               $(form).append(input);

                $.ajax({
                 type: "POST",
                 url: '<?php echo admin_url("admin-ajax.php") ?>',
                 data: $(form).serialize()  + '&action=registerSubmit' ,
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
                            window.location.href = "http://yellowbabykick.com/";
                           

                        }
                    }
                    });
                 },
                 success: function () {

                    $( "<div title='Alert'>You have submitted successfully! Please check your email for acknowledge and wait for the reply.</div>" ).dialog({
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
                            window.location.href = "http://yellowbabykick.com/";
                           

                        }
                    }
                    });

                  
                 }
             });
            }
            else
            {
               
                $( "<div title='Alert'>Please add your history records for MEDITATION RETREATS ATTENDED (THERAVADA AND NON THERAVADA)</div>" ).dialog({
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
 
                // alert("Please add your history records for MEDITATION RETREATS ATTENDED (THERAVADA AND NON THERAVADA)");
            }

            
             return false; // required to block normal submit since you used ajax
         },
				rules: {
					inputfirstname: {
						required: true,
                        maxlength: 1,
                    },
					inputlastname: "required",
					select_gender: "required" ,
                    txtaddress:"required",
                    inputtelnumber:{
						required: true,
						regx: /^[+]*[(]{0,1}[0-9]{1,4}[)]{0,1}[-\s\./0-9]*$/
					},
					inputemail: {
						required: true,
						email: true
					},
                    inputStart: {
						required: true,
						regxDate: /^(0[1-9]|[12][0-9]|3[01])[- /.](0[1-9]|1[012])[- /.](19|20)\d\d$/
					},
                    inputEnd: {
						required: true,
						regxDate: /^(0[1-9]|[12][0-9]|3[01])[- /.](0[1-9]|1[012])[- /.](19|20)\d\d$/
					},
                    inputDOB: {
                        lessThanToday: new Date(),
						required: true,
						regxDate: /^(0[1-9]|[12][0-9]|3[01])[- /.](0[1-9]|1[012])[- /.](19|20)\d\d$/
					},
                    inputId:"required",
                    inputOccupation:"required",
                    select_veget:"required",
                    txtfood_allergy:"required",
                    inputeme_name:"required",
                    inputeme_address:"required",
                    inputeme_telnumber:{
						required: true,
						regx: /^[+]*[(]{0,1}[0-9]{1,4}[)]{0,1}[-\s\./0-9]*$/
					},
                    select_minsurance:"required",
                    txtother_minsurance:"required",
                    select_mental_issue:"required",
                    txtmental_issue:"required",
                    inputeme_email: {
						required: true,
						email: true
					},
					chk_agree: "required"
				},
				messages: {
					inputfirstname: "Please enter your firstname",
					inputlastname: "Please enter your lastname",
					select_gender:  "Please select gender",
                    select_veget: "Please answer for Vegetarian",
                    select_minsurance:  "Please answer for insurance",
                    select_mental_issue:  "Please answer for health and safety",
					inputemail: "Please enter a valid email address",
					chk_agree: "Please accept our policy"
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
						error.insertAfter( element );
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
            
            ;(function($) {
    "use strict";  
    
    //* Form js
    function verificationForm(){
        //jQuery time
        var current_fs, next_fs, previous_fs; //fieldsets
        var left, opacity, scale; //fieldset properties which we will animate
        var animating; //flag to prevent quick multi-click glitches

        $(".next").click(function () {
           // if (animating) return false;
            //animating = true;

            current_fs = $(this).parent();
            next_fs = $(this).parent().next();

          
            var form = $("#msform");
            form.validate({
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
                    dropdown_country_button:
                    {
                        regxCountry:/^\b(?!Select Country)\b\S+$/
                    }
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

                 } 
                ,  errorPlacement: function(error, element) {
                    if (element.attr("name") == "rdo_gender") {
                    error.insertAfter("#div_female_label");
                    } else {
                    error.insertAfter(element);
                    }
                }
            });

           // alert($("#dropdown-country-button").text()); 

         //  if (form.valid() == true){

                  //activate next step on progressbar using the index of next_fs
                $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

                //show the next fieldset
                next_fs.show();
                current_fs.hide();
 
          //  }
           
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

        $(".submit").click(function () {
            return false;
        })
    }; 
    
    //* Add Phone no select
    function phoneNoselect(){
        if ( $('#msform').length ){   
          // $("#inputphone").intlTelInput(); 
        //  $("#inputphone").intlTelInput("setNumber", "+880"); 
        };
    }; 
    //* Select js
    function nice_Select(){
        if ( $('.product_select').length ){ 
            $('select').niceSelect();
        };
    }; 
    /*Function Calls*/  
    verificationForm ();
    phoneNoselect ();
    nice_Select ();
})(jQuery); 

  
});
</script>




<?php get_template_part('template-parts/nav','footer'); ?>

<?php get_footer(); ?>