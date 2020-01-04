<?php
/**
 * Welcome to DevDmBootstrap4 a simple to use barebones theme for WordPress theme developers wishing to use the Twitter
 * Bootstrap 4.x frontend framework.
 */

/**
 * Setup the theme defaults.
 */
require_once(dirname( __FILE__ ) .'/TCPDF/tcpdf.php');
require_once(dirname( __FILE__ ) .'/TCPDF/config/tcpdf_config_alt.php');

 

if (!function_exists( 'devdmbootstrap_setup' ) ) {
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     */
    function devdmbootstrap_setup()
    {

        // Load up the Text domain.
        load_theme_textdomain('devdmbootstrap4', get_template_directory() . '/languages');

        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');

        // Let WordPress manage the document title.
        add_theme_support('title-tag');

        // Add Theme Support for Custom Background Images and Colors
        add_theme_support( 'custom-background' );

        // Add Theme Support for Customize Selective Refresh Widgets
        add_theme_support( 'customize-selective-refresh-widgets' );

        // Add Theme Support for Custom Header (background) image
        add_theme_support( 'custom-header', array(
            'default-image'          => '',
            'random-default'         => false,
            'width'                  => 1140,
            'height'                 => 150,
            'flex-height'            => true,
            'flex-width'             => true,
            'default-text-color'     => '',
            'header-text'            => false,
            'uploads'                => true,
            'wp-head-callback'       => '',
            'admin-head-callback'    => '',
            'admin-preview-callback' => '',
        ));

        /**
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
         */
        add_theme_support('post-thumbnails');
        //set_post_thumbnail_size(1140, 300, array('center','center'));

        // This theme uses wp_nav_menu() in two locations.
        register_nav_menus(array(
            'main_menu' => esc_html__('Main Menu', 'devdmbootstrap4'),
            'footer_menu' => esc_html__('Footer Menu', 'devdmbootstrap4'),
        ));

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support('html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ));

        // Set the max content width
        if ( ! isset( $content_width ) ) {
            $content_width = 1140;
        }

        /* Add custom-logo theme support */
        add_theme_support( 'custom-logo', array(
            'height'      => 150,
            'width'       => 350,
            'flex-height' => true,
            'flex-width'  => true,
            'header-text' => array( 'site-title', 'site-description' ),
            )
        );

    }

}
add_action( 'after_setup_theme', 'devdmbootstrap_setup' );

/**
 * get the custom logo URL
 */
if (!function_exists('devdmbootstrap4_custom_logo')) {
    function devdmbootstrap4_custom_logo() {

        if ( function_exists( 'the_custom_logo' ) ) {
            $custom_logo_id = get_theme_mod( 'custom_logo' );
            $image          = wp_get_attachment_image_src( $custom_logo_id , 'full' );
            return (!empty($image[0]) ? $image[0] : FALSE);
        }
    }
}

/**
 * Register left and right Sidebar
 */
if (!function_exists( 'devdmbootstrap_widgets_init' ) ) {

    function devdmbootstrap_widgets_init()
    {

        register_sidebar(
            array(
            'name'          => __('Right Sidebar', 'devdmbootstrap4'),
            'id'            => 'dmbs-right-sidebar',
            'description'   => __('Widgets in this area will be shown on all posts and pages.', 'devdmbootstrap4'),
            'before_widget' => '<li id="%1$s" class="widget dmbs-widget dmbs-widget-right %2$s">',
            'after_widget'  => '</li>',
            'before_title'  => '<h3 class="widgettitle dmbs-widget-title dmbs-widget-right-title">',
            'after_title'   => '</h3>',
        ));

        register_sidebar(
            array(
            'name'          => __('Left Sidebar', 'devdmbootstrap4'),
            'id'            => 'dmbs-left-sidebar',
            'description'   => __('Widgets in this area will be shown on all posts and pages.', 'devdmbootstrap4'),
            'before_widget' => '<li id="%1$s" class="widget dmbs-widget dmbs-widget-left %2$s">',
            'after_widget'  => '</li>',
            'before_title'  => '<h3 class="widgettitle dmbs-widget-title dmbs-widget-left-title">',
            'after_title'   => '</h3>',
        ));
    }

}
add_action( 'widgets_init', 'devdmbootstrap_widgets_init' );

/**
 * Include the Bootstrap 4.x Stylesheet and JS
 */
if (!function_exists( 'devdmbootstrap_scripts' ) ) {

    function devdmbootstrap_scripts()
    {
        $wpTheme = wp_get_theme();

        // Enqueue the default Bootstrap 4.x CSS with the name devdmbootstrap4-css
        wp_enqueue_style('devdmbootstrap4-css', get_template_directory_uri() . '/assets/css/devdmbootstrap/devdmbootstrap4.min.css');
 
 

        //wp_enqueue_style('jsgrid-css', get_template_directory_uri() . '/assets/jsgrid-1.5.3/jsgrid.min.css');

        //wp_enqueue_style('file-upload-with-preview-master-css', get_template_directory_uri() . '/assets/file-upload-with-preview-master/main.fcadad1776b0df247bae.css');


        //wp_enqueue_style('jsgrid-theme-css', get_template_directory_uri() . '/assets/jsgrid-1.5.3/jsgrid-theme.min.css');


        wp_enqueue_style('bootstrap-datetimepicker-css', get_template_directory_uri() . '/assets/bootstrap4-datetimepicker/css/bootstrap-datepicker3.standalone.css');


        wp_enqueue_style('select2-css', get_template_directory_uri() . '/assets/select2/select2.min.css');



        wp_enqueue_style('jquery-ui-css', get_template_directory_uri() . '/assets/jquery-ui-1.12.1/jquery-ui.css');

        // wp_enqueue_style('bootstrapValidator-css', get_template_directory_uri() . '/assets/bootstrapValidator/css/bootstrapValidator.min.css');


        wp_enqueue_style('multiform-css', get_template_directory_uri() . '/assets/css/multiform.css');

        // Enqueue the default style.css with the name devdmbootstrap4-stylesheet
        wp_enqueue_style('devdmbootstrap4-stylesheet', get_stylesheet_uri());


        
        

        // Enqueue Font Awesome Icon Set with the name devdmbootstrap4-fontawesome.
        if (get_theme_mod('devdmbootstrap4_fontawesome_setting', 1)) {
            wp_enqueue_style('devdmbootstrap4-fontawesome', get_template_directory_uri() . '/assets/fontawesome-free-5.0.2/web-fonts-with-css/css/fontawesome-all.min.css');

        }


        wp_enqueue_script('moment-js', get_template_directory_uri() . '/assets/js/moment.js', array('jquery'), $wpTheme->get( 'Version' ), true);


        wp_enqueue_style('devdmbootstrap4-ionicons', get_template_directory_uri() . '/assets/ionicons-2.0.1/css/ionicons.min.css');

        
        // Enqueue popper.min.js with the name devdmbootstrap4-popper-js
        wp_enqueue_script('devdmbootstrap4-popper-js', get_template_directory_uri() . '/assets/js/bootstrap4x/popper.min.js', array('jquery'), $wpTheme->get( 'Version' ), true);

        // Enqueue the default Bootstrap 4.x JS with the name devdmbootstrap4-js.
        wp_enqueue_script('devdmbootstrap4-js', get_template_directory_uri() . '/assets/js/bootstrap4x/bootstrap.js', array('jquery'), $wpTheme->get( 'Version' ), true);

  
        wp_enqueue_script('devdmjquery-js', get_template_directory_uri() . '/assets/js/jquery/jquery-3.4.1.min.js', array('jquery'), $wpTheme->get( 'Version' ), true);


        // wp_enqueue_script('devdmbootstable-js', get_template_directory_uri() . '/assets/js/bootstable.js', array('jquery'), $wpTheme->get( 'Version' ), true);
 

        wp_enqueue_script('select2-js', get_template_directory_uri() . '/assets/select2/select2.min.js', array('jquery'), $wpTheme->get( 'Version' ), true);

       // wp_enqueue_script('file-upload-with-preview-master-vendor-js', get_template_directory_uri() . '/assets/file-upload-with-preview-master/vendor.e990ab0e5e609130e9c2.js', array('jquery'), $wpTheme->get( 'Version' ), true);

       // wp_enqueue_script('file-upload-with-preview-master-js', get_template_directory_uri() . '/assets/file-upload-with-preview-master/main.d480810fac21897f41e3.js', array('jquery'), $wpTheme->get( 'Version' ), true);
        
        wp_enqueue_script('bootstrap-datetimepicker-js', get_template_directory_uri() . '/assets/bootstrap4-datetimepicker/js/bootstrap-datepicker.js', array('jquery'), $wpTheme->get( 'Version' ), true);

        wp_enqueue_script('bootstrap-datetimepicker-en-js', get_template_directory_uri() . '/assets/bootstrap4-datetimepicker/locales/bootstrap-datepicker.en-GB.min.js', array('jquery'), $wpTheme->get( 'Version' ), true);

        //wp_enqueue_script('jsgrid-js', get_template_directory_uri() . '/assets/jsgrid-1.5.3/jsgrid.min.js', array('jquery'), $wpTheme->get( 'Version' ), true);


        wp_enqueue_script('jquery-ui-js', get_template_directory_uri() . '/assets/jquery-ui-1.12.1/jquery-ui.js', array('jquery'), $wpTheme->get( 'Version' ), true);

        // wp_enqueue_script('bootstrap-validate-js', get_template_directory_uri() . '/assets/bootstrap-validate/bootstrap-validate.js', array('jquery'), $wpTheme->get( 'Version' ), true);


        wp_enqueue_script('jquery-validate-js', get_template_directory_uri() . '/assets/jquery-validate/jquery.validate.min.js', array('jquery'), $wpTheme->get( 'Version' ), true);

        wp_enqueue_script('jquery-validate-add-js', get_template_directory_uri() . '/assets/jquery-validate/additional-methods.min.js', array('jquery'), $wpTheme->get( 'Version' ), true);



        wp_enqueue_script('db-js', get_template_directory_uri() . '/assets/js/db.js', array('jquery'), $wpTheme->get( 'Version' ), true);


        wp_enqueue_script('jquery-lazy-js', get_template_directory_uri() . '/assets/jquery.lazy/jquery.lazy.min.js', array('jquery'), $wpTheme->get( 'Version' ), true);



        // Enqueue comment-reply
        if ( is_singular() && comments_open() && get_option('thread_comments') ) {
            wp_enqueue_script( 'comment-reply' );
        }
   
    }
}
wp_enqueue_script('jquery');

add_action( 'wp_enqueue_scripts', 'devdmbootstrap_scripts' );

/**
 * Customizer
 */
require_once( get_template_directory() . '/includes/customizer.php');

/**
 * Calculate Column Sizes and return the value when called
 */
if (!function_exists( 'devdmbootstrap_column_size' ) ) {
    function devdmbootstrap_column_size($column = null) {

        $columnSizes = array(
            'left'  => '',
            'right' => '',
            'main'  => '',
        );

        if ($column != null && array_key_exists($column,$columnSizes)) {

            $columnSizes = array(
                'left' => get_theme_mod('devdmbootstrap4_leftsidebar',0),
                'right' => get_theme_mod('devdmbootstrap4_rightsidebar',3),
            );

            $columnSizes['main'] = 12 - ($columnSizes['right'] + $columnSizes['left']);

            return $columnSizes[$column];

        }

        return;
    }
}

/**
 * Nav Walker
 */
 
if (!function_exists( 'devdmbootstrap_nav_walker' ) ) {
    function devdmbootstrap_nav_walker()
    {
        $loadEnhancedMenu = get_theme_mod('devdmbootstrap4_enhanced_menu_setting', 1);

        if ($loadEnhancedMenu == 1) {
            $wpTheme = wp_get_theme();

            // Enqueue the Enhanced Menu System JS with the handle devdmbootstrap4-enhanced-menu-js
            wp_enqueue_script('devdmbootstrap4-enhanced-nav-js', get_template_directory_uri() . '/assets/js/devdmbootstrap4_enhanced_nav.js', array('jquery'), $wpTheme->get('Version'), true);

            require get_template_directory() . '/includes/devdmbootstrap_enhanced_nav_walker.php';
        } else {
            wp_dequeue_script('devdmbootstrap4-enhanced-nav');
            require get_template_directory() . '/includes/devdmbootstrap_nav_walker.php';
        }
    }
} 

add_action('wp_enqueue_scripts','devdmbootstrap_nav_walker');
add_action('wp_ajax_nopriv_registerSubmit', 'registerSubmit');
add_action('wp_ajax_registerSubmit', 'registerSubmit');
add_action('wp_ajax_nopriv_sendEmail', 'sendEmail');
add_action('wp_ajax_sendEmail', 'sendEmail');

add_action('wp_ajax_nopriv_registerSimple', 'registerSimple');
add_action('wp_ajax_registerSimple', 'registerSimple');


function sendEmail(){

    global $wpdb;

    global $phpmailer;

    // (Re)create it, if it's gone missing
    if ( ! ( $phpmailer instanceof PHPMailer ) ) {
        require_once ABSPATH . WPINC . '/class-phpmailer.php';
        require_once ABSPATH . WPINC . '/class-smtp.php';
    }
    $phpmailer = new PHPMailer;

    
    if(IsNullOrEmptyString( $_POST['inputfullname']))
    {
       echo 'Error: Full name is empty.' ;
       die(); 
    }

    if(IsNullOrEmptyString( $_POST['inputemail']))
    {
       echo 'Error: email is empty.' ;
       die(); 
    }
    else
    {

        if(!preg_match("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^",$_POST['inputemail']))
        {
            echo 'Error: email is invalid.' ;
            die(); 

        }

    }

    if(IsNullOrEmptyString( $_POST['inputphone']))
    {
       echo 'Error: phone number is empty.' ;
       die(); 
    }

    if(IsNullOrEmptyString( $_POST['inputmessage']))
    {
       echo 'Error: message is empty.' ;
       die(); 
    }


    
    $inputfullname = $_POST['inputfullname'];
    $inputemail = $_POST['inputemail'];
    $inputphone = $_POST['inputphone'];
    $inputmessage = $_POST['inputmessage'];

    $options_results = $wpdb->get_results( 
        "SELECT * FROM " . $wpdb->prefix . "options WHERE option_name LIKE 'SMTP_%'"
    );
   // error_log(print_r($options_results));


    $host = ''; 
    $username = ''; 
    $password = ''; 
    $BCC = ''; 
    foreach ( $options_results as $result )
    {
       
        switch ($result->option_name) {
            case "SMTP_username":
                $username = $result->option_value;
                break;
            case "SMTP_password":
                $password = $result->option_value;
                break;
            case "SMTP_BCC":
                $BCC = $result->option_value;
                break;
            case "SMTP_host":
                $host = $result->option_value;
                break;
        }
    }


    if ($host !== '' && $username !== ''  && $password !== '' && $BCC !== '')
    {
        error_log($host);

        error_log($username);
        error_log($password);

        error_log($BCC);



        $phpmailer->isSMTP();                    
        $phpmailer->Host = $host;
        $phpmailer->SMTPDebug = 1;
        $phpmailer->SMTPAuth = true;
        $phpmailer->Username = $username;
        $phpmailer->Password =  $password ;
        $phpmailer->SMTPSecure = 'ssl';
        $phpmailer->Port = 465;

        $phpmailer->setFrom($username);

        // Add a recipient
        $phpmailer->addAddress($username);


        if ($BCC != '') {
            $indiBCC = explode(",", $BCC);
          
            foreach ($indiBCC as $key => $value) {
                try {
                    $phpmailer->addBCC($value);
                } catch (phpmailerException $e) {
                    echo 'Error: '. $e->getMessage();
                }
            }
        }


        $phpmailer->Subject = 'Contact Us';


        // Set email format to HTML
        $phpmailer->isHTML(true);

        // Email subject
        $path = get_template_directory_uri() ; 

        $body = file_get_contents($path . '/html_template/email_contactus.html');


        $body = str_replace('{inputfullname}', $inputfullname, $body);
        $body = str_replace('{inputemail}', $inputemail, $body);
        $body = str_replace('{inputphone}', $inputphone, $body);
        $body = str_replace('{inputmessage}', $inputmessage, $body);


        $phpmailer->Body = $body;


        // Email body content
        //$mailContent = sprintf("<h1>Name:%s,Phone:%s</h1> <p>%s</p>",$fullname,$phone,$message); 
           
        //$phpmailer->Body    = $mailContent ;

         
        if(!$phpmailer->send()){

            error_log( 'Message could not be sent.');
            error_log( 'Mailer Error: ' . $phpmailer->ErrorInfo);
            echo 'Error: Mailer->'. $phpmailer->ErrorInfo;

        }else{
            echo 'Success:Message has been sent' ; 
            error_log( 'Message has been sent');

        } 

    }
    else
    {

    echo 'Error: Mailer config is missing' ; 

    }

    die();


}

function IsNullOrEmptyString($str){
    return (!isset($str) || trim($str) === '');
}

function registerSimple(){

    global $wpdb;

    global $phpmailer;

    // (Re)create it, if it's gone missing
    if ( ! ( $phpmailer instanceof PHPMailer ) ) {
        require_once ABSPATH . WPINC . '/class-phpmailer.php';
        require_once ABSPATH . WPINC . '/class-smtp.php';
    }
    $phpmailer = new PHPMailer;
    



    if(IsNullOrEmptyString($_POST['inputfirstname']))
    {
       echo 'Error: first name is empty.' ;
       die();
    }
    
    if(IsNullOrEmptyString( $_POST['inputlastname']))
    {
       echo 'Error: last name is empty.' ;
       die(); 
    }

    if(IsNullOrEmptyString( $_POST['inputemail']))
    {
       echo 'Error: email is empty.' ;
       die(); 
    }
    else
    {

        if(!preg_match("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^",$_POST['inputemail']))
        {
            echo 'Error: email is invalid.' ;
            die(); 

        }

    }

    if(IsNullOrEmptyString( $_POST['inputphone']))
    {
       echo 'Error: phone number is empty.' ;
       die(); 
    }

    if(IsNullOrEmptyString( $_POST['select_program']))
    {
       echo 'Error: program is empty.' ;
       die(); 
    }

    if(IsNullOrEmptyString( $_POST['inputmessage']))
    {
       echo 'Error: message is empty.' ;
       die(); 
    }

    if(IsNullOrEmptyString( $_POST['inputaddress']))
    {
       echo 'Error: address is empty.' ;
       die(); 
    }


    $inputfirstname = $_POST['inputfirstname'];
    $inputlastname = $_POST['inputlastname'];
    $inputemail = $_POST['inputemail'];
    $inputphone = $_POST['inputphone'];
    $select_program =  $_POST['select_program'] = "1" ?  "beginner": "intermediate";
    $inputmessage = $_POST['inputmessage'];
    $inputaddline1 = $_POST['inputaddress'];


    try {
        
        //$wpdb->query( "START TRANSACTION" );

        if($wpdb->insert( $wpdb->prefix . 'register',array(
            'first_name'=>$inputfirstname,
            'last_name'=>$inputlastname,
            'email'=>$inputemail,
            'phone'=>$inputphone,
            'addressline1'=> $inputaddline1,
            'program'=>$select_program,
            'message'=>$inputmessage,
            'inserted_datetime'=> date("Y-m-d H:i:s"),
            'inserted_by'=>$inputemail
        ))===FALSE){
        
            echo "Error:database insert error.";
         
        }
        else 
        {
            error_log("successfully added, row ID is ".$wpdb->insert_id);

           // $wpdb->query( "COMMIT" );

            $options_results = $wpdb->get_results( 
                "SELECT * FROM " . $wpdb->prefix . "options WHERE option_name LIKE 'SMTP_%'"
            );
           // error_log(print_r($options_results));
    
    
            $host = ''; 
            $username = ''; 
            $password = ''; 
            $BCC = ''; 
            foreach ( $options_results as $result )
            {
               
                switch ($result->option_name) {
                    case "SMTP_username":
                        $username = $result->option_value;
                        break;
                    case "SMTP_password":
                        $password = $result->option_value;
                        break;
                    case "SMTP_BCC":
                        $BCC = $result->option_value;
                        break;
                    case "SMTP_host":
                        $host = $result->option_value;
                        break;
                }
            }
    
    
            if ($host !== '' && $username !== ''  && $password !== '' && $BCC !== '')
            {
                error_log($host);
    
                error_log($username);
                error_log($password);
    
    
    
                $phpmailer->isSMTP();                    
                $phpmailer->Host = $host;
                $phpmailer->SMTPDebug = 1;
                $phpmailer->SMTPAuth = true;
                $phpmailer->Username = $username;
                $phpmailer->Password =  $password ;
                $phpmailer->SMTPSecure = 'ssl';
                $phpmailer->Port = 465;
        
                $phpmailer->setFrom($username);
        
                // Add a recipient
                $phpmailer->addAddress($inputemail);

                if ($BCC != '') {
                    $indiBCC = explode(",", $BCC);

                  
                    foreach ($indiBCC as $key => $value) {
                        error_log($value);

                        try {
                            $phpmailer->addBCC(trim($value));
                        } catch (phpmailerException $e) {
                            echo 'Error: '. $e->getMessage();
                        }
                    }
                }

        
                // Add cc or bcc 
         
                // Set email format to HTML
                $phpmailer->isHTML(true);
        
                // Email subject
                $phpmailer->Subject = 'Registration Acknowledgement';
        
                
                // Email body content
                $mailContent = "<h1>Registration Acknowledgement</h1>
                    <p>This is to acknowledge your registration is confirmed.
                    </p>
                    Thanks and regards,<br> 
                    Registration Admin <br>SMSC";
               // $phpmailer->Body    = $mailContent;


                $path = get_template_directory_uri() ; 

                $body = file_get_contents($path . '/html_template/email_small.html');


                $body = str_replace('{inputfirstname}', $inputfirstname, $body);
                $body = str_replace('{inputlastname}', $inputlastname, $body);
                $body = str_replace('{inputemail}', $inputemail, $body);
                $body = str_replace('{inputphone}', $inputphone, $body);
                $body = str_replace('{select_program}', $select_program, $body);
                $body = str_replace('{inputmessage}', $inputmessage, $body);
                $body = str_replace('{inputaddline1}', $inputaddline1, $body);


                $phpmailer->Body = $body;
        
                if(!$phpmailer->send()){
    
                    error_log( 'Message could not be sent.');
                    error_log( 'Mailer Error: ' . $phpmailer->ErrorInfo);
                    echo 'Error: Mailer->'. $phpmailer->ErrorInfo;

                }else{
                    echo 'Success:Message has been sent' ; 
                    error_log( 'Message has been sent');
                }
    
            }
            else
            {
                echo 'Error: Mailer config is missing' ; 
                
            }
 
        }
 

    } catch (Exception $e) {
        // An exception has been thrown
        // We must rollback the transaction
       echo 'Error: '. $e->getMessage();
    }
  
    die();
}



function registerSubmit(){

    global $wpdb;

    global $phpmailer;

    // (Re)create it, if it's gone missing
    if ( ! ( $phpmailer instanceof PHPMailer ) ) {
        require_once ABSPATH . WPINC . '/class-phpmailer.php';
        require_once ABSPATH . WPINC . '/class-smtp.php';
    }
    $phpmailer = new PHPMailer;

 
    $inputemail = $_POST['inputemail'];

/*
    if(!isset($_FILES['fileToUpload'])) {
        echo 'Error:file upload is missing';
        die();
    }  


    $errors     = array();
    $maxsize    = 2097152;
    $acceptable = array(
        'image/jpeg',
        'image/jpg',
        'image/gif',
        'image/png'
    );

    if(($_FILES['fileToUpload']['size'] >= $maxsize) || ($_FILES["fileToUpload"]["size"] == 0)) {
        echo 'Error:File too large. File must be less than 2 megabytes.';
        die();
    }

    if((!in_array($_FILES['fileToUpload']['type'], $acceptable)) && (!empty($_FILES["fileToUpload"]["type"]))) {
        echo 'Error:Invalid file type. Only JPG, GIF and PNG types are accepted.';
        die();
    }


    $temp = explode(".", $_FILES["fileToUpload"]["name"]);



    $newfilename = $useremail .  '.' . end($temp);

    error_log($newfilename);


    move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], dirname( __FILE__ ) . '/uploads/' .  $newfilename);
        
   */

    $useremail= explode("@", $inputemail)[0];


    if(IsNullOrEmptyString($_POST['inputfirstname']))
    {
       echo 'Error: first name is empty.' ;
       die();
    }
    
    if(IsNullOrEmptyString( $_POST['inputlastname']))
    {
       echo 'Error: last name is empty.' ;
       die(); 
    }

    

    if(IsNullOrEmptyString( $_POST['rdo_gender']))
    {
       echo 'Error: Gender is empty.' ;
       die(); 
    }


    if(IsNullOrEmptyString( $_POST['inputaddline1']))
    {
       echo 'Error: Address line 1 is empty.' ;
       die(); 
    }

    if(IsNullOrEmptyString( $_POST['inputprovince']))
    {
       echo 'Error: Province/Territory is empty.' ;
       die(); 
    }


    if(IsNullOrEmptyString( $_POST['inputcity']))
    {
       echo 'Error: City is empty.' ;
       die(); 
    }


    if(IsNullOrEmptyString( $_POST['selectcountry']))
    {
       echo 'Error: Country is empty.' ;
       die(); 
    }
    else if($_POST['selectcountry']=='Select Country')
    {

        echo 'Error: Please select country.' ;
        die(); 
    }
    


    if(IsNullOrEmptyString( $_POST['inputphone']))
    {
       echo 'Error: phone number is empty.' ;
       die(); 
    }
 

    if(IsNullOrEmptyString( $_POST['inputemail']))
    {
       echo 'Error: email is empty.' ;
       die(); 
    }
    else if(!preg_match("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^",$_POST['inputemail']))
    {
        echo 'Error: email is invalid.' ;
        die(); 

    }


/*
    if(IsNullOrEmptyString( $_POST['input_occupation']))
    {
       echo 'Error: Occupation is empty.' ;
       die(); 
    }

    error_log("DOB:" . $_POST['inputDOB']);

*/
    if(IsNullOrEmptyString( $_POST['inputDOB']))
    {
       echo 'Error: YOB is empty.' ;
       die(); 
    }
    else if(!preg_match("/^\d{4}$/",$_POST['inputDOB']))
    {
        echo 'Error: YOB is invalid.' ;
        die(); 

    }
    

    /*
    if(IsNullOrEmptyString($_POST['input_driver_no']) && IsNullOrEmptyString($_POST['input_passport']))
    {
 
           echo 'Error: Please enter Canadian Driver License No. or Passport No.' ;
           die(); 
    }
    else if (IsNullOrEmptyString($_POST['input_driver_no']) && !IsNullOrEmptyString($_POST['input_passport']))
    {
        if(IsNullOrEmptyString($_POST['input_date_issue']))
        {
            echo 'Error: Date of Issue is required.' ;
            die(); 
        } else if(!preg_match("/^([0-9]{1,2})\\/([0-9]{1,2})\\/([0-9]{4})$/",$_POST['input_date_issue']))
        {
                echo 'Error: Date of Issue is invalid.' ;
                die(); 

        }
        


        if(IsNullOrEmptyString($_POST['select_origin_country']))
        {
            echo 'Error: Origin Country is required.' ;
            die(); 
        }
        else if($_POST['select_origin_country']=='Select Origin Country')
        {

            echo 'Error: Please select origin country.' ;
            die(); 
        }
    }
    */


    if(IsNullOrEmptyString($_POST['inputRetreatFrom']))
    {
        echo 'Error: Retreat start date is required.' ;
        die(); 
    } else if(!preg_match("/^([0-9]{1,2})\\/([0-9]{1,2})\\/([0-9]{4})$/",$_POST['inputRetreatFrom']))
    {
        echo 'Error: Retreat start date is invalid.' ;
        die(); 

    }

    if(IsNullOrEmptyString($_POST['inputRetreatTo']))
    {
        echo 'Error: Retreat end date is required.' ;
        die(); 
    } else if(!preg_match("/^([0-9]{1,2})\\/([0-9]{1,2})\\/([0-9]{4})$/",$_POST['inputRetreatTo']))
    {
        echo 'Error: Retreat end date is invalid.' ;
        die(); 
    }


    if ($_POST['inputRetreatFrom'] > $_POST['inputRetreatTo']) 
    {
        echo 'Error: Please enter valid start and end date for retreat.' ;
        die(); 
    }
     

    if(IsNullOrEmptyString( $_POST['input_e_firstname']))
    {
       echo 'Error: Emergency Contact First Name is required.' ;
       die(); 
    }


    if(IsNullOrEmptyString( $_POST['input_e_lastname']))
    {
       echo 'Error: Emergency Contact Last Name is required.' ;
       die(); 
    }


    if(IsNullOrEmptyString( $_POST['input_e_relationship']))
    {
       echo 'Error: Emergency Contact Relationship is required.' ;
       die(); 
    }

    if(IsNullOrEmptyString( $_POST['input_e_addline1']))
    {
       echo 'Error: Emergency Contact Address line 1 is required.' ;
       die(); 
    }

    if(IsNullOrEmptyString( $_POST['input_e_province']))
    {
       echo 'Error: Emergency Contact Province/Territory is required.' ;
       die(); 
    }

    if(IsNullOrEmptyString( $_POST['input_e_city']))
    {
       echo 'Error: Emergency Contact City is required.' ;
       die(); 
    }

    if(IsNullOrEmptyString( $_POST['select_e_country']))
    {
       echo 'Error: Emergency Contact Country is required.' ;
       die(); 
    }
    else if($_POST['select_e_country']=='Select Country')
    {

        echo 'Error: Please select Emergency Contact Country.' ;
        die(); 
    }
    


    if(IsNullOrEmptyString( $_POST['input_e_phone']))
    {
       echo 'Error: Emergency Contact phone number is empty.' ;
       die(); 
    }
 

    if(IsNullOrEmptyString( $_POST['input_e_email']))
    {
       echo 'Error: Emergency Contact email is empty.' ;
       die(); 
    }
    else if(!preg_match("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^",$_POST['input_e_email']))
    {
        echo 'Error: Emergency Contact email is invalid.' ;
        die(); 

    }

    if(IsNullOrEmptyString( $_POST['radio_vegetarian']))
    {
       echo 'Error: Are you Vegetarian? is required to answer.' ;
       die(); 
    }
 

    if(IsNullOrEmptyString( $_POST['radio_allergies']))
    {
       echo 'Error: Do you have food or other allergies? is required to answer.' ;
       die(); 
    }
    else if($_POST['radio_allergies']=='1')
    {
        if(IsNullOrEmptyString( $_POST['txtfood_allergy']))
        {
            echo 'Error: food or other allergies is required.' ;
            die();
        }

    }


    if(IsNullOrEmptyString( $_POST['radio_issue_MP']))
    {
       echo 'Error: Do you have any physical or mental health issue SMSC should be made aware? is required to answer.' ;
       die(); 
    }
    else if($_POST['radio_issue_MP']=='1')
    {
        if(IsNullOrEmptyString( $_POST['txt_issue_MP']))
        {
            echo 'Error: any physical or mental health issue is required.' ;
            die();
        }

    }

    if(IsNullOrEmptyString( $_POST['radio_save']))
    {
       echo 'Error: I agree to keep my personal information on the SMSC file. is required to answer.' ;
       die(); 
    }

    if(IsNullOrEmptyString( $_POST['input_ack_firstname']))
    {
       echo 'Error: sign for first name is required.' ;
       die(); 
    }
    if($_POST['input_ack_firstname']!=$_POST['inputfirstname'])
    {
        echo 'Error: Please check your sign for first name and it must be the same as your first name.' ;
        die(); 

    }
 

    if(IsNullOrEmptyString( $_POST['input_ack_lastname']))
    {
       echo 'Error: sign for last name is required.' ;
       die(); 
    }

    if($_POST['input_ack_lastname']!=$_POST['inputlastname'])
    {
        echo 'Error: Please check your sign for last name and it must be the same as your last name.' ;
        die(); 
        
    }

 
    if(IsNullOrEmptyString($_POST['input_ack_date']))
    {
        echo 'Error: sign date is required.' ;
        die(); 
    } else if(!preg_match("/^([0-9]{1,2})\\/([0-9]{1,2})\\/([0-9]{4})$/",$_POST['input_ack_date']))
    {
        echo 'Error: sign date is invalid.' ;
        die(); 

    }
 
 
    $inputfirstname = $_POST['inputfirstname'];
    $inputlastname = $_POST['inputlastname'];
    $select_gender = $_POST['rdo_gender'];
    $inputaddline1 = $_POST['inputaddline1'];
    $inputaddline2 = $_POST['inputaddline2'];
    $inputpcode = $_POST['inputpcode'];
    $inputprovince = $_POST['inputprovince'];
    $inputcity = $_POST['inputcity'];
    $selectcountry = $_POST['selectcountry'];
    $inputphone = $_POST['inputphone'];
    $input_occupation = $_POST['input_occupation'];
    $inputDOB = $_POST['inputDOB'];
    $input_driver_no = $_POST['input_driver_no'];
    $input_passport = $_POST['input_passport'];
    $input_date_issue = $_POST['input_date_issue'];
    $select_origin_country =  $_POST['select_origin_country'] = "Select Country" ?  "": $_POST['select_origin_country'];

    $inputRetreatFrom = $_POST['inputRetreatFrom'];
    $inputRetreatTo = $_POST['inputRetreatTo'];

    $input_e_firstname = $_POST['input_e_firstname'];
    $input_e_lastname = $_POST['input_e_lastname'];
    $input_e_relationship = $_POST['input_e_relationship'];
    $input_e_addline1 = $_POST['input_e_addline1'];
    $input_e_addline2 = $_POST['input_e_addline2'];
    $input_e_pcode = $_POST['input_e_pcode'];
    $input_e_province = $_POST['input_e_province'];
    $input_e_city = $_POST['input_e_city'];
    $select_e_country = $_POST['select_e_country'];
    $input_e_phone = $_POST['input_e_phone'];
    $input_e_email = $_POST['input_e_email'];
    $txt_retreats = $_POST['txt_retreats'];
    
    $radio_vegetarian =  $_POST['radio_vegetarian'] == "1" ?  "Y": "N";
    $radio_allergies =  $_POST['radio_allergies'] == "1" ?  "Y": "N";

    $txtfood_allergy = $_POST['txtfood_allergy'];

    $txt_insurance = $_POST['txt_insurance'];

    $radio_issue_MP =  $_POST['radio_issue_MP'] == "1" ?  "Y": "N";

    $txt_issue_MP = $_POST['txt_issue_MP'];

    $radio_save =  $_POST['radio_save'] == "1" ?  "Y": "N";

    $input_ack_date = $_POST['input_ack_date'];
    $input_ack_firstname = $_POST['input_ack_firstname'];
    $input_ack_lastname = $_POST['input_ack_lastname'];



    try {
        
        //$wpdb->query( "START TRANSACTION" );

        if($radio_save=="Y")
        {

            error_log("$inputRetreatFrom ".$inputRetreatFrom);

            $inputRetreatFrom = str_replace('/', '-', $inputRetreatFrom );
            $inputRetreatTo = str_replace('/', '-', $inputRetreatTo );
            $input_ack_date = str_replace('/', '-', $input_ack_date );


            if($wpdb->insert($wpdb->prefix . 'register',array(
                'program'=>"retreat",
                'first_name'=>$inputfirstname,
                'last_name'=>$inputlastname,
                'gender'=>$select_gender,
                'addressline1'=>$inputaddline1,
                'addressline2'=>$inputaddline2,
                'postalcode'=>$inputpcode,
                'province_territory'=>$inputprovince,
                'city'=>$inputcity,
                'country'=>$selectcountry,
                'phone'=>$inputphone,
                'email'=>$inputemail,
                'occupation'=>$input_occupation,
                'dob'=>$inputDOB,
                'start_retreat_date'=>date("Y-m-d", strtotime($inputRetreatFrom)) ,
                'end_retreat_date'=>date("Y-m-d",strtotime($inputRetreatTo)),
                'e_first_name'=>$input_e_firstname,
                'e_last_ name'=>$input_e_lastname,
                'e_relationship'=>$input_e_relationship,
                'e_addressline1'=>$input_e_addline1,
                'e_addressline2'=>$input_e_addline2,
                'e_postalcode'=>$input_e_pcode,
                'e_province_territory'=>$input_e_province,
                'e_city'=>$input_e_city,
                'e_country'=>$select_e_country,
                'e_phone'=>$input_e_phone,
                'e_email'=>$input_e_email,
                'attended_retreats'=>$txt_retreats,
                'is_vegetarian'=>$radio_vegetarian,
                'has_allergy'=>$radio_allergies,
                'food_allergy'=>$txtfood_allergy,
                'insurance'=>$txt_insurance,
                'has_issue_MP'=>$radio_issue_MP,
                'MP_health'=>$txt_issue_MP,
                'status'=>$radio_save,
                'ack_date'=>date("Y-m-d",strtotime($input_ack_date)),
                'inserted_datetime'=> date("Y-m-d H:i:s"),
                'inserted_by'=>$inputemail
    
            ))===FALSE){
            
                echo "Error:database insert error.";
                die();
    
            }
            else
            {

                error_log("successfully added, row ID is ".$wpdb->insert_id);

            }
        }
         
 
            $options_results = $wpdb->get_results( 
                "SELECT * FROM " . $wpdb->prefix . "options WHERE option_name LIKE 'SMTP_%'"
            );
          
            $host = ''; 
            $username = ''; 
            $password = ''; 
            $BCC = ''; 
            foreach ( $options_results as $result )
            {
            
                switch ($result->option_name) {
                    case "SMTP_username":
                        $username = $result->option_value;
                        break;
                    case "SMTP_password":
                        $password = $result->option_value;
                        break;
                    case "SMTP_BCC":
                        $BCC = $result->option_value;
                        break;
                    case "SMTP_host":
                        $host = $result->option_value;
                        break;
                }
            }


            if ($host !== '' && $username !== ''  && $password !== '' && $BCC !== '')
            {
                error_log($host);

                error_log($username);
                error_log($password);

                error_log($BCC);



                $phpmailer->isSMTP();                    
                $phpmailer->Host = $host;
                $phpmailer->SMTPDebug = 1;
                $phpmailer->SMTPAuth = true;
                $phpmailer->Username = $username;
                $phpmailer->Password =  $password ;
                $phpmailer->SMTPSecure = 'ssl';
                $phpmailer->Port = 465;
        
                $phpmailer->setFrom($username);
        
                // Add a recipient
                $phpmailer->addAddress($inputemail);
        
                // Add cc or bcc 
                //$phpmailer->addCC($CC);
        
                // Set email format to HTML
                $phpmailer->isHTML(true);
        
                // Email subject
                $phpmailer->Subject = 'Registration Acknowldgement';
        
                // Email body content
                $mailContent = "<h1>Registration Acknowledgement</h1>
                    <p>This is to acknowledge your application to attend the retreat is received. We will contact you soon regarding the outcome.
                    </p>
                    Thanks and regards,<br> 
                    SMSC Admin";
                $phpmailer->Body    = $mailContent;
        
                if(!$phpmailer->send()){

                    error_log( 'Message could not be sent.');
                    error_log( 'Mailer Error: ' . $phpmailer->ErrorInfo);
                    echo 'Error: Mailer->'. $phpmailer->ErrorInfo;



                }else{
                    //echo 'Success:Message has been sent' ; 
                    error_log( 'Message has been sent');

                    $phpmailer->ClearAllRecipients();


                    if ($BCC != '') {
                        $indiBCC = explode(",", $BCC);
                      
                        foreach ($indiBCC as $key => $value) {
                            try {
                                $phpmailer->AddAddress($value);
                            } catch (phpmailerException $e) {
                                echo 'Error: '. $e->getMessage();
                            }
                        }
                    }

                    $path = get_template_directory_uri() ; 

                    $body = file_get_contents($path . '/html_template/email_big.html');


                    $body = str_replace('{inputfirstname}', $inputfirstname, $body);
                    $body = str_replace('{inputlastname}', $inputlastname, $body);
                    $body = str_replace('{select_gender}', $select_gender, $body);
                    $body = str_replace('{inputaddline1}', $inputaddline1, $body);
                    $body = str_replace('{inputaddline2}', $inputaddline2, $body);
                    $body = str_replace('{inputpcode}', $inputpcode, $body);
                    $body = str_replace('{inputprovince}', $inputprovince, $body);
                    $body = str_replace('{inputcity}', $inputcity, $body);

                    $countryName = $wpdb->get_row( 
                        "SELECT * FROM wp_country WHERE Code='" . $selectcountry . "'"
                    );

                    $body = str_replace('{selectcountry}', $countryName->Name, $body);
                    $body = str_replace('{inputphone}', $inputphone, $body);
                    $body = str_replace('{inputemail}', $inputemail, $body);
                    $body = str_replace('{input_occupation}', $input_occupation, $body);
                    $body = str_replace('{inputDOB}', $inputDOB, $body);
                    
                    /*$body = str_replace('{input_driver_no}', $input_driver_no, $body);
                    $body = str_replace('{input_passport}', $input_passport, $body);
                    $body = str_replace('{input_date_issue}', $input_date_issue, $body);

                   if($select_origin_country!="")
                   {
                        $o_countryName = $wpdb->get_row( 
                            "SELECT * FROM wp_country WHERE Code='" . $select_origin_country . "'"
                        );

                        $body = str_replace('{select_origin_country}', $o_countryName->Name, $body);

                   }
                   else
                   {
                        $body = str_replace('{select_origin_country}', '', $body);

                   }
                   
                    $image_path = get_template_directory_uri() . "/uploads/" . $newfilename ; 

                    error_log( 'image_path: ' . $image_path);


 
                    $body = str_replace('{gov_issue_photo}', $image_path, $body);*/
                    $body = str_replace('{inputRetreatFrom}', $inputRetreatFrom, $body);
                    $body = str_replace('{inputRetreatTo}', $inputRetreatTo, $body);
                    $body = str_replace('{input_e_firstname}', $input_e_firstname, $body);
                    $body = str_replace('{input_e_lastname}', $input_e_lastname, $body);
                    $body = str_replace('{input_e_relationship}', $input_e_relationship, $body);
                    $body = str_replace('{input_e_addline1}', $input_e_addline1, $body);
                    $body = str_replace('{input_e_addline2}', $input_e_addline2, $body);
                    $body = str_replace('{input_e_pcode}', $input_e_pcode, $body);
                    $body = str_replace('{input_e_province}', $input_e_province, $body);
                    $body = str_replace('{input_e_city}', $input_e_city, $body);

                    $e_countryName = $wpdb->get_row( 
                        "SELECT * FROM wp_country WHERE Code='" . $select_e_country . "'"
                    );

                    $body = str_replace('{select_e_country}', $e_countryName->Name, $body);
                    $body = str_replace('{input_e_phone}', $input_e_phone, $body);
                    $body = str_replace('{input_e_email}', $input_e_email, $body);
                    $body = str_replace('{txt_retreats}', $txt_retreats, $body);
                    $body = str_replace('{radio_vegetarian}',  ($radio_vegetarian = "Y" ?  "Yes": "No"), $body);
                    $body = str_replace('{radio_allergies}', ($radio_allergies = "Y" ?  "Yes": "No") , $body);
                    $body = str_replace('{txtfood_allergy}', $txtfood_allergy, $body);
                    $body = str_replace('{txt_insurance}', $txt_insurance, $body);
                    $body = str_replace('{radio_issue_MP}', ($radio_issue_MP = "Y" ?  "Yes": "No"), $body);
                    $body = str_replace('{txt_issue_MP}', $txt_issue_MP, $body);
                    $body = str_replace('{radio_save}', ($radio_save = "Y" ?  "Yes": "No") , $body);
                    $body = str_replace('{input_ack_date}', $input_ack_date, $body);
                    $body = str_replace('{input_ack_firstname}', $input_ack_firstname, $body);
                    $body = str_replace('{input_ack_lastname}', $input_ack_lastname, $body);

  

                    $phpmailer->Body = $body;


                    $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

                    // set document information
                    $pdf->SetCreator(PDF_CREATOR);
                    $pdf->SetAuthor('SMSC');
     
                    // set default header data
                    //$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.' 001', PDF_HEADER_STRING, array(0,64,255), array(0,64,128));
                    //$pdf->setFooterData(array(0,64,0), array(0,64,128));
                
                    // set header and footer fonts
                    $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
                    $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
                
                    // set default monospaced font
                    $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);
                
                    // set margins
                    $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
                    $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
                    $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
                
                    // set auto page breaks
                    $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
                
                    // set image scale factor
                    $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
                
                    // set some language-dependent strings (optional)
                    if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
                        require_once(dirname(__FILE__).'/lang/eng.php');
                        $pdf->setLanguageArray($l);
                    }
                
                    // ---------------------------------------------------------
                
                    // set default font subsetting mode
                    $pdf->setFontSubsetting(true);
                
                    // Set font
                    // dejavusans is a UTF-8 Unicode font, if you only need to
                    // print standard ASCII chars, you can use core fonts like
                    // helvetica or times to reduce file size.
                    $pdf->SetFont('helvetica', '', 12, '', true);
                
                    // Add a page
                    // This method has several options, check the source code documentation for more information.
                    $pdf->AddPage();
                
                    // set text shadow effect
                    $pdf->setTextShadow(array('enabled'=>true, 'depth_w'=>0.2, 'depth_h'=>0.2, 'color'=>array(196,196,196), 'opacity'=>1, 'blend_mode'=>'Normal'));
                                
                    
                    // Print text using writeHTMLCell()
                    $pdf->writeHTMLCell(0, 0, '', '', $body, 0, 1, 0, true, '', true);
                
                    // ---------------------------------------------------------
                
                    // Close and output PDF document
                    // This method has several options, check the source code documentation for more information.
                    $filename = dirname( __FILE__ ) . '/GeneratePDF/' . $useremail  . '.pdf'; 
                
                    $pdf->Output($filename , 'F');
                
                    
                    // Email subject
                    $phpmailer->Subject = 'New registration is received';
            
                    // Email body content
                    $mailContent = "<h1>New Registration</h1>
                        <p>Please see the attached file.
                        </p>";
                    $phpmailer->Body    = $mailContent;

                    $phpmailer->AddAttachment($filename);
                

                    if(!$phpmailer->send()){

                        error_log( 'Message could not be sent.');
                        error_log( 'Mailer Error: ' . $phpmailer->ErrorInfo);
                        echo 'Error: Mailer->'. $phpmailer->ErrorInfo;
        
                    }
                    else
                    {
                        echo 'Success:Message has been sent' ; 
                        error_log( 'Message has been sent');    

                    }

                }

            }
            else
            {
                echo 'Error: Mailer config is missing' ; 

            }
      
    

    } catch (Exception $e) {
        // An exception has been thrown
        // We must rollback the transaction
        echo 'Error: '. $e->getMessage();

    }
  
    die();
}

/**
 * Custom Comment Walker
 */
require get_template_directory() . '/includes/devdmbootstrap_comment_walker.php';

/**
 * Utilities
 */
require get_template_directory() . '/includes/utilities.php';
