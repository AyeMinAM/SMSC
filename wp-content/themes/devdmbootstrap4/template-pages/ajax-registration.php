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
<section class="col-sm-12 multi_step_form">  
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
      <p>Download the form  <a href="http://example.com/files/myfile.pdf" target="_blank">here</a>   if you want to fill out on paper</p>
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
    <fieldset>
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
                <input class="form-check-input" type="radio" name="rdo_male" id="rdo_male" value="Male">
                <label class="form-check-label" >Male</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="rdo_female" id="rdo_female" value="Female">
                <label class="form-check-label" >Female</label>
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
        <input type="text" class="form-control" id="inputcountry" name="inputcountry" placeholder="Country">
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
            <div class="form-group col-md-6"> 
                <input type="text" class="form-control" id="input_passport" name="input_passport" placeholder="Passport No.">
            </div> 
        </div> 
        <div class="form-row"> 
            <div class="form-group col-md-6">  
                <input type="text" class="form-control"   id="input_date_issue" name="input_date_issue" placeholder="Date of Issue"> 
            </div>  
            <div class="form-group col-md-6"> 
            <div class="custom-file">
          <input type="file" class="custom-file-input" id="upload">
          <label class="custom-file-label" for="upload">Upload Government issued photo ID</label>
        </div> 
             </div> 
        </div> 

       <button type="button" class="next action-button">Continue</button>  
    </fieldset>
    <fieldset>
    <h3>1. Additional Information</h3>

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
          <input class="form-check-input" type="radio" name="rdo_male" id="rdo_male" value="Male">
          <label class="form-check-label" >Male</label>
      </div>
      <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="rdo_female" id="rdo_female" value="Female">
          <label class="form-check-label" >Female</label>
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
  <input type="text" class="form-control" id="inputcountry" name="inputcountry" placeholder="Country">
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
      <div class="form-group col-md-6"> 
          <input type="text" class="form-control" id="input_passport" name="input_passport" placeholder="Passport No.">
      </div> 
  </div> 
  <div class="form-row"> 
      <div class="form-group col-md-6">  
          <input type="text" class="form-control"   id="input_date_issue" name="input_date_issue" placeholder="Date of Issue"> 
      </div>  
      <div class="form-group col-md-6"> 
      <div class="custom-file">
    <input type="file" class="custom-file-input" id="upload">
    <label class="custom-file-label" for="upload">Upload Government issued photo ID</label>
  </div> 
       </div> 
  </div> 

 
      <button type="button" class="action-button previous previous_button">Back</button> 
      <button type="button" class="next action-button">Continue</button>  

    </fieldset>  
    <fieldset>
    <button type="button" class="action-button previous previous previous_button">Back</button> 
    <button type="button" class="next action-button">Continue</button>  

    </fieldset>  
    <fieldset>
    <button type="button" class="action-button previous previous previous previous_button">Back</button> 

    <a href="#" class="action-button">Finish</a> 

    </fieldset>  

  </form>  
</section> 
<!-- End Multi step form -->   
</div>

 
    <div class="row" style="margin-top:20px;" >
         <div class="col-sm-12 text-center">
                    <span class = "label label_prg_events_title">
                    Application Form for the Meditation Retreat, SMSC</span>
          </div>
    
    </div>
    
    <div class="row" style="margin-top:20px;" >

        <div class="col-sm-13">
        
        <p class="text-justify">
        
        It is essential to have previous experience in Mahasi Meditation Method and to strictly adhere to the 9 precepts and retreat schedule.  Signed application needs to be received before coming to the center.  Final-acceptance by SMSC required.          </p>
    
            
        <p class="text-justify">

        I, THE UNDERSIGNED WAIVE ANY AND ALL FORM OF LIABILITY TOWARDS SMSC, ITS STAFF AND VOLUNTEERS FOR THIS RETREAT AND ALL OTHER RETREAT I WILL BE ATTENDING AT SMSC.   I have read the rules and structure of SMSC retreat and agree to follow. I am aware that I may be photographed or videotaped only for the purpose of sharing the merit of SMSC retreat participants.        </div>
    </div>
    
    
    <div class="row" style="margin-top:20px;">
        <div class="col-sm-12 text-center">
        <img src="<?php echo get_template_directory_uri(); ?>/images/divider.png" class="smsc_img_divider" alt="divider">           
        </div>
    </div>

    <div class="row" style="margin-top:20px;">
                    <div class="col-sm-13">
                             <span class = "label label_prg_events_title">
                             MEDITATION RETREATS ATTENDED (THERAVADA AND NON THERAVADA):</span>
                    </div> 
    </div>

    <div class="row" style="margin-top:20px;"> </div>

 
   
    
    <!-- <form id="registerForm" method="post"  class="form-horizontal" action="" > -->
 
    <div id="jsGrid"></div>   


    <fieldset>

        <div class="row" style="margin-top:20px;" >
            <div class="col-sm-12 text-center">
                        <span class = "label label_prg_events_title">
                        Personal Information Form</span>
            </div>
        </div>
    

 								 
 

        <div class="row" style="margin-top:20px;">
    
            <label class="col-sm-3 control-label" for="inputfirstname">
                FIRST NAME:
                

            </label>
        
            <div class="col-sm-8 text-center">
                <input type="text" class="form-control"   id="inputfirstname" name="inputfirstname" placeholder="Jane">
            </div>  
                        
        </div>  
    
        <div class="row" style="margin-top:20px;">
        
            <label class="col-sm-3 control-label" for="inputlastname">
            LAST NAME:
                

            </label>
        

            <div class="col-sm-8 text-center">
            </div>  
        </div> 

        <div class="row" style="margin-top:20px;">
            <div class="col-sm-3">
                <p class="text-justify">FULL ADDRESS:
                </p>

            </div>
            <div class="col-sm-8 text-center">
            <textarea class="form-control rounded-0" id="txtaddress" name="txtaddress" rows="3"></textarea>

    
            </div>  
        </div> 




        <div class="row" style="margin-top:20px;">
            <div class="col-sm-3">
                <p class="text-justify">PHONE:
                </p>

            </div>
            <div class="col-sm-8 text-center">
            <input class="form-control" type="tel" placeholder="1-(555)-555-5555" id="inputtelnumber" name="inputtelnumber">

    
            </div>  
        </div> 

    
        <div class="row" style="margin-top:20px;">
            <div class="col-sm-3">
                <p class="text-justify">EMAIL:
                </p>

            </div>
            <div class="col-sm-8 text-center">
            <input class="form-control" type="email" placeholder="bootstrap@example.com" id="inputemail" name="inputemail">

            </div>  
        </div> 
        <div class="row" style="margin-top:20px;">
            <div class="col-sm-3">
                <p class="text-justify">DATES OF RETREAT:
                </p>

            </div>
            <div class="col-sm-4">
            FROM:<input type="text" class="form-control" id="inputStart" name="inputStart" >

            </div>
    
            <div class="col-sm-4">
            TO:<input   type="text" class="form-control" id="inputEnd" name="inputEnd">

            </div>
        </div> 

        <div class="row" style="margin-top:20px;">
            <div class="col-sm-8">
                <p class="text-justify">DATE OF BIRTH & ID (Canadian Drivers Licence; Passport Number and Country)
                </p>

            </div>
            
        </div> 

        <div class="row" style="margin-top:-5px;">
            <div class="col-sm-3">
            
            </div>
            <div class="col-sm-4">
            <input type="text" class="form-control" id="inputDOB" name="inputDOB">

            </div>
    
            <div class="col-sm-4">
            <input type="text" class="form-control" id="inputId" name="inputId">

            </div>
        </div> 

        <div class="row" style="margin-top:20px;">
            <div class="col-sm-3">
                <p class="text-justify">OCCUPATION:
                </p>

            </div>
            <div class="col-sm-8 text-center">
                <input type="text" class="form-control" id="inputOccupation" name="inputOccupation">
            </div>  
        </div> 

        <div class="row" style="margin-top:20px;">
            <div class="col-sm-3">
                <p class="text-justify">ARE YOU VEGETARIAN?
                </p>

            </div>
            <div class="col-sm-8">
                <select  style="width: 400px" id="select_veget" name="select_veget">
                    <option value="">select</option>
                    <option value="1">Yes</option>
                    <option value="2">No</option>
                </select>        

            </div>  
        </div> 
 

        <div class="row" style="margin-top:20px;">
            <div class="col-sm-3">
                FOOD ALLERGY (Please indicate):
                

            </div>
            <div class="col-sm-8 text-center">
            
        
            <textarea class="form-control rounded-0" id="txtfood_allergy" name="txtfood_allergy" rows="3"></textarea>

            </div>  
        </div> 


        <div class="row" style="margin-top:20px;">
            <div class="col-sm-8">
                <p class="text-justify">FULL NAME AND RELATIONTHIP OF EMERGENCY CONTACT:
                </p>

            </div>
    
        </div> 
 


        <div class="row" style="margin-top:20px;">
            <div class="col-sm-3">
                    NAME
            </div>
    
            <div class="col-sm-8">
                <input type="text" class="form-control" id="inputeme_name" name="inputeme_name" >
            </div>


        </div> 

    
         


        <div class="row" style="margin-top:20px;">
            <div class="col-sm-3">
                <p class="text-justify">FULL ADDRESS:
                </p>

            </div>
            <div class="col-sm-8 text-center">
                <textarea class="form-control rounded-0" id="inputeme_address" name="inputeme_address" rows="3"></textarea>
            </div>  
        </div> 

        <div class="row" style="margin-top:20px;">
            <div class="col-sm-3">
                <p class="text-justify">PHONE:
                </p>

            </div>
            <div class="col-sm-8 text-center">
            <input class="form-control" type="tel" placeholder="1-(555)-555-5555" id="inputeme_telnumber" name="inputeme_telnumber">

            </div>  
        </div> 

    
        <div class="row" style="margin-top:20px;">
            <div class="col-sm-3">
                <p class="text-justify">EMAIL:
                </p>

            </div>
            <div class="col-sm-8 text-center">
                <!-- <input class="form-control" type="email" placeholder="test@example.com" id="eme_email"> -->
                <input class="form-control" type="email" placeholder="test@example.com" id="inputeme_email" name="inputeme_email">
            </div>  
        </div> 

  
        <div class="row" style="margin-top:20px;">
            <div class="col-sm-8">
                <p class="text-justify">Do you have medical insurance of BC or traveling medical insurance for overseas yogis?    
                </p>

            </div>
            
        </div>

        <div class="row" style="margin-top:-5px;">
            <div class="col-sm-3">
        
            </div>
            <div class="col-sm-8">
                <select  style="width: 400px" id="select_minsurance" name="select_minsurance">
                    <option value="">select</option>
                    <option value="1">Yes</option>
                    <option value="2">No</option>
                </select>        

            </div>  
        </div> 

    

        <div class="row" style="margin-top:20px;">
            <div class="col-sm-8">
                <p class="text-justify">Do you have any other kind of medical insurance? Please specify.    
                </p>

            </div>
            
        </div>

        <div class="row" style="margin-top:-5px;">
            <div class="col-sm-3">
        
            </div>
            <div class="col-sm-8 text-center">
            
            <textarea class="form-control rounded-0" id="txtother_minsurance" name="txtother_minsurance" rows="3"></textarea>

            </div>  
        </div> 


    

        <div class="row" style="margin-top:20px;">
            <div class="col-sm-8">
                <p class="text-justify">Do you have any physical or mental health issues that the meditation centre should be aware of to ensure your health and safety and that of other yogis and instructors?   
                </p>

            </div>
            
        </div>

        <div class="row" style="margin-top:-5px;">
            <div class="col-sm-3">
        
            </div>
            <div class="col-sm-8">
                <select style="width: 400px" id="select_mental_issue" name="select_mental_issue">
                    <option value="">select</option>
                    <option value="1">Yes</option>
                    <option value="2">No</option>
                </select>        
            </div>  
        </div> 
 
        <div class="row" style="margin-top:20px;">
            <div class="col-sm-8">
                <p class="text-justify">If yes please describe briefly.    
                </p>

            </div>
            
        </div>

        <div class="row" style="margin-top:-5px;">
            <div class="col-sm-3">
        
            </div>
            <div class="col-sm-8 text-center">
            
            <textarea class="form-control rounded-0" id="txtmental_issue" name="txtmental_issue" rows="3"></textarea>

            </div>  
        </div> 


    

        <div class="row" style="margin-top:20px;" >
            <div class="col-sm-12 text-center">
                        <span class = "label label_prg_events_title">
                        ** PLEASE TAKE THIS FORM WITH YOU WHEN YOU LEAVE THE RETREAT CENTRE **</span>
            </div>
        </div>


        <div class="row" style="margin-top:20px;" >
            <div class="col-sm-12 text-center">
                        <span class = "label label_prg_events_title">
                        ** AND REUSE FOR NEXT RETREAT **</span>
            </div>
        </div>

        <div class="row" style="margin-top:20px;" >
            <div class="col-sm-12 text-center">
                        <span class = "label label_prg_events_title">
                        *** Alternatively with your permission this information is kept on file at SMSC for use in your future retreats. ****</span>
            </div>
        </div>


        <div class="row" style="margin-top:20px;" >
            <div class="col-sm-12 text-center">
                  <input class="form-check-input" type="checkbox" value="" id="chk_agree" name='chk_agree' />
                <label class="form-check-label label_prg_events_title" for="chk_agree" >
                    Agree to terms and conditions
                </label>
                <div class="invalid-feedback">
                    You must agree before submitting.
                </div>
                <p>
                <br>
                <button class="btn btn-primary btn-lg" style="padding: 20px 80px;font-size:20px; border-radius: 10px;"  type="submit">Submit</button>

            </div>
        </div>
    

        <div class="row" style="margin-top:20px;">
            <div class="col-sm-12 text-center">
            <img src="<?php echo get_template_directory_uri(); ?>/images/divider.png" class="smsc_img_divider" alt="divider">           
            </div>
        </div>
    </fieldset>
    <!-- </form> -->
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


    jQuery( "#inputStart" ).datepicker({ dateFormat: 'dd-mm-yy' , defaultDate: new Date()});


    jQuery( "#inputEnd" ).datepicker({dateFormat: 'dd-mm-yy' , defaultDate: new Date()});

    jQuery( "#inputDOB" ).datepicker({dateFormat: 'dd-mm-yy' , defaultDate: new Date()});

    

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
					inputfirstname: "required",
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
            if (animating) return false;
            animating = true;

            current_fs = $(this).parent();
            next_fs = $(this).parent().next();

            //activate next step on progressbar using the index of next_fs
            $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

            //show the next fieldset
            next_fs.show();
            //hide the current fieldset with style
            current_fs.animate({
                opacity: 0
            }, {
                step: function (now, mx) {
                    //as the opacity of current_fs reduces to 0 - stored in "now"
                    //1. scale current_fs down to 80%
                    scale = 1 - (1 - now) * 0.2;
                    //2. bring next_fs from the right(50%)
                    left = (now * 50) + "%";
                    //3. increase opacity of next_fs to 1 as it moves in
                    opacity = 1 - now;
                    current_fs.css({
                        'transform': 'scale(' + scale + ')',
                        'position': 'absolute'
                    });
                    next_fs.css({
                        'left': left,
                        'opacity': opacity
                    });
                },
                duration: 800,
                complete: function () {
                    current_fs.hide();
                    animating = false;
                },
                //this comes from the custom easing plugin
                easing: 'easeInOutBack'
            });
        });

        $(".previous").click(function () {
            if (animating) return false;
            animating = true;

            current_fs = $(this).parent();
            previous_fs = $(this).parent().prev();

            //de-activate current step on progressbar
            $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

            //show the previous fieldset
            previous_fs.show();
            //hide the current fieldset with style
            current_fs.animate({
                opacity: 0
            }, {
                step: function (now, mx) {
                    //as the opacity of current_fs reduces to 0 - stored in "now"
                    //1. scale previous_fs from 80% to 100%
                    scale = 0.8 + (1 - now) * 0.2;
                    //2. take current_fs to the right(50%) - from 0%
                    left = ((1 - now) * 50) + "%";
                    //3. increase opacity of previous_fs to 1 as it moves in
                    opacity = 1 - now;
                    current_fs.css({
                        'left': left
                    });
                    previous_fs.css({
                        'transform': 'scale(' + scale + ')',
                        'opacity': opacity
                    });
                },
                duration: 800,
                complete: function () {
                    current_fs.hide();
                    animating = false;
                },
                //this comes from the custom easing plugin
                easing: 'easeInOutBack'
            });
        });

        $(".submit").click(function () {
            return false;
        })
    }; 
    
    //* Add Phone no select
    function phoneNoselect(){
        if ( $('#msform').length ){   
            $("#phone").intlTelInput(); 
            $("#phone").intlTelInput("setNumber", "+880"); 
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