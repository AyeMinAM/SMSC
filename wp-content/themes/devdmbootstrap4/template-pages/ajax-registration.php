<?php get_header(); 

/*
Template Name: Ajax register
*/
?>
 
<?php get_template_part('template-parts/head'); ?>

<?php get_template_part('template-parts/nav','header'); ?>

<div class="container">

 
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

    <div class="row" style="margin-top:20px;">

    <div id="jsGrid"></div>   

    </div>


    <div class="row" style="margin-top:20px;" >
         <div class="col-sm-12 text-center">
                    <span class = "label label_prg_events_title">
                    Personal Information Form</span>
          </div>
    </div>

    <div class="row" style="margin-top:20px;">
        <div class="col-sm-3">
            <p class="text-justify">FIRST NAME:
            </p>

        </div>
        <div class="col-sm-8 text-center">
        <input type="text" class="form-control" id="inputFirstName" placeholder="Jane">
        </div>  
    </div>  
    
    <div class="row" style="margin-top:20px;">
        <div class="col-sm-3">
            <p class="text-justify">LAST NAME:
            </p>

        </div>
        <div class="col-sm-8 text-center">
        <input type="text" class="form-control" id="inputLastName" placeholder="Doe">
        </div>  
    </div> 

    <div class="row" style="margin-top:20px;">
        <div class="col-sm-3">
            <p class="text-justify">GENDER:
            </p>

        </div>
        <div class="col-sm-8 text-center">

        <select class="custom-select">
  <option selected>select Gender</option>
  <option value="1">Male</option>
  <option value="2">Female</option>
</select>

        </div>  
    </div> 

    <div class="row" style="margin-top:20px;">
        <div class="col-sm-3">
            <p class="text-justify">FULL ADDRESS:
            </p>

        </div>
        <div class="col-sm-8 text-center">
        <textarea class="form-control rounded-0" id="address" rows="3"></textarea>

  
        </div>  
    </div> 




    <div class="row" style="margin-top:20px;">
        <div class="col-sm-3">
            <p class="text-justify">PHONE:
            </p>

        </div>
        <div class="col-sm-8 text-center">
        <input class="form-control" type="tel" placeholder="1-(555)-555-5555" id="tel-input">

  
        </div>  
    </div> 

    
    <div class="row" style="margin-top:20px;">
        <div class="col-sm-3">
            <p class="text-justify">EMAIL:
            </p>

        </div>
        <div class="col-sm-8 text-center">
        <input class="form-control" type="email" placeholder="bootstrap@example.com" id="email-input">

        </div>  
    </div> 
    <div class="row" style="margin-top:20px;">
        <div class="col-sm-3">
            <p class="text-justify">DATES OF RETREAT:
            </p>

        </div>
        <div class="col-sm-4">
        FROM:<input type="text" class="form-control" id="selectStart" >

        </div>
 
        <div class="col-sm-4">
        TO:<input type="text" class="form-control" id="selectEnd" >

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
         <input type="text" class="form-control" id="selectDOB" >

        </div>
 
        <div class="col-sm-4">
         <input type="text" class="form-control" id="txtId" >

        </div>
    </div> 

    <div class="row" style="margin-top:20px;">
        <div class="col-sm-3">
            <p class="text-justify">OCCUPATION:
            </p>

        </div>
        <div class="col-sm-8 text-center">
        <input type="text" class="form-control" id="inputOccupation" >
        </div>  
    </div> 

    <div class="row" style="margin-top:20px;">
        <div class="col-sm-3">
            <p class="text-justify">ARE YOU VEGETARIAN?
            </p>

        </div>
        <div class="col-sm-8 text-center">
        <select class="custom-select">
  <option selected>select</option>
  <option value="1">Yes</option>
  <option value="2">No</option>
</select>        </div>  
    </div> 
 

    <div class="row" style="margin-top:20px;">
        <div class="col-sm-3">
             FOOD ALLERGY (Please indicate):
             

        </div>
        <div class="col-sm-8 text-center">
        
    
        <textarea class="form-control rounded-0" id="address" rows="3"></textarea>

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
            <p class="text-justify">FULL ADDRESS:
            </p>

        </div>
        <div class="col-sm-8 text-center">
        <textarea class="form-control rounded-0" id="address" rows="3"></textarea>

  
        </div>  
    </div> 

    <div class="row" style="margin-top:20px;">
        <div class="col-sm-3">
            <p class="text-justify">PHONE:
            </p>

        </div>
        <div class="col-sm-8 text-center">
        <input class="form-control" type="tel" placeholder="1-(555)-555-5555" id="tel-input">

  
        </div>  
    </div> 

    
    <div class="row" style="margin-top:20px;">
        <div class="col-sm-3">
            <p class="text-justify">EMAIL:
            </p>

        </div>
        <div class="col-sm-8 text-center">
        <input class="form-control" type="email" placeholder="bootstrap@example.com" id="email-input">

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
        <div class="col-sm-8 text-center">
        <select class="custom-select">
  <option selected>select</option>
  <option value="1">Yes</option>
  <option value="2">No</option>
</select>        </div>  
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
         
        <textarea class="form-control rounded-0" id="address" rows="3"></textarea>

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
        <div class="col-sm-8 text-center">
        <select class="custom-select">
  <option selected>select</option>
  <option value="1">Yes</option>
  <option value="2">No</option>
</select>        </div>  
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
         
        <textarea class="form-control rounded-0" id="address" rows="3"></textarea>

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
         <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
      <label class="form-check-label" for="invalidCheck">
        Agree to terms and conditions
      </label>
      <div class="invalid-feedback">
        You must agree before submitting.
      </div>
      <p>
        <br>
    <button class="btn btn-primary btn-lg"  type="submit">Submit</button>

          </div>
    </div>
    

    <div class="row" style="margin-top:20px;">
        <div class="col-sm-12 text-center">
        <img src="<?php echo get_template_directory_uri(); ?>/images/divider.png" class="smsc_img_divider" alt="divider">           
        </div>
    </div>

</div>


 
<style>
    /* .ui-datepicker-calendar {
        display: none;
    } */
    </style>
<script>

    jQuery(document).ready(function () {


    jQuery( "#selectStart" ).datepicker({ defaultDate: new Date()});
    jQuery( "#selectEnd" ).datepicker({ defaultDate: new Date()});

    jQuery( "#selectDOB" ).datepicker({ defaultDate: new Date()});

    

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

    $("#jsGrid").jsGrid({
        height: "85%",
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
            { name: "Duration",title: "Duration(How many days?)", type: "text",width: 100,  },
            { type: "control" }
        ]
    });

            
    });

  
</script>




<?php get_template_part('template-parts/nav','footer'); ?>

<?php get_footer(); ?>