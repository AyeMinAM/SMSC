<?php /* if ( has_nav_menu( 'main_menu' ) ) :*/ ?>
 

<style>

.topnav {
  overflow: hidden;
  background-color:  #932a0c;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

 

.topnav .icon {
  display: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 17px;    
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}


.dropdown-content {
  display: none;
  position: absolute;
  background-color:  #932a0c;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.topnav a:hover, .dropdown:hover .dropbtn {
  background-color: #555;
  color: white;
}

.dropdown-content a:hover {
  background-color: #C8C8C8;
  color: black;
}

.dropdown:hover .dropdown-content {
  display: block;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child), .dropdown .dropbtn {
    display: none;
  }
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
  .topnav.responsive .dropdown {float: none;}
  .topnav.responsive .dropdown-content {position: relative;}
  .topnav.responsive .dropdown .dropbtn {
    display: block;
    width: 100%;
    text-align: left;
  }
}
</style>
 
<div class="topnav" id="myTopnav">
  <a class="active" href="<?php echo get_home_url(); ?>">Home <span class="sr-only">(current)</span></a>
  <div class="dropdown">
    <button class="dropbtn">Meditation Programs 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
        <a class="dropdown-item" href="<?php echo esc_url( get_permalink( get_page_by_title('beginner') ) ); ?>">Beginner</a>
        <div class="dropdown-divider" ></div>
        <a class="dropdown-item" href="<?php echo esc_url( get_permalink( get_page_by_title('intermediate') ) ); ?>">Intermediate</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="<?php echo esc_url( get_permalink( get_page_by_title('dayretreat') ) ); ?>">Day Retreat</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="<?php echo esc_url( get_permalink( get_page_by_title('monthlyretreat') ) ); ?>">Monthly Retreat</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="<?php echo esc_url( get_permalink( get_page_by_title('annualretreat') ) ); ?>">Annual Retreat</a> 
    </div>                          
</div>
                        
<div class="dropdown">
    <button class="dropbtn"> SMSC Community 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
        <a class="dropdown-item" href="<?php echo esc_url( get_permalink( get_page_by_title('upcomingevents') ) ); ?>">Upcoming Events</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="<?php echo esc_url( get_permalink( get_page_by_title('gallery') ) ); ?>">Photo Gallery</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="<?php echo esc_url( get_permalink( get_page_by_title('volunteer') ) ); ?>">Volunteers</a>                  
    </div>
  </div> 
  <a href="#img">
  <img class="smsc_logo_img" src="<?php echo get_template_directory_uri(); ?>/images/logo-300x300.png" alt="Logo">
  </a>
  <div class="dropdown">
    <button class="dropbtn"> About 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
    <a class="dropdown-item" href="<?php echo esc_url( get_permalink( get_page_by_title('aboutsmsc') ) ); ?>">About SMSC</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="<?php echo esc_url( get_permalink( get_page_by_title('teacher') ) ); ?>">The Teachers</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="<?php echo esc_url( get_permalink( get_page_by_title('project') ) ); ?>">The Project</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="<?php echo esc_url( get_permalink( get_page_by_title('pastactivities') ) ); ?>">Past Activities</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="<?php echo esc_url( get_permalink( get_page_by_title('contactus') ) ); ?>">Contact SMSC</a>                
    </div>
  </div> 

 

  <a href="<?php echo get_site_url(); ?>/library/">Library</a>

  <a href="#donation"><button class="btn navbar-btn button-donation smsc_margin" >Donation</button></a>
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>

 

<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
 

jQuery(document).ready(function () {

    
    jQuery('.lazy').lazy({

      beforeLoad: function(element){

            console.log('image "' +  element.data('src')  + '" is about to be loaded');
      },
      afterLoad: function(element) {
             console.log('image "' + element.data('src') + '" was loaded successfully');
      },
      onError: function(element) {
            console.log('image "' +  element.data('src') + '" could not be loaded');
      },
      onFinishedAll: function() {
             console.log('lazy instance is about to be destroyed')
      }
  });

});
</script>




<?php /* endif; */?>
 