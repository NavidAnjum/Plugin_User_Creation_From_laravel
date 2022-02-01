<?php
/*
Plugin Name:  Create User
Plugin URI:   https://www.laravelaura.com 
Description:  You can create user from laravel dashboard. 
Version:      1.0
Author:       Navid 
Author URI:   https://www.laravelaura.com
License:      GPL2
License URI:  https://www.gnu.org/licenses/gpl-2.0.html
Text Domain:  Create_User
Domain Path:  /languages
*/
 
function SWP_Whatsapp_btn() {
    
    if(isset($_GET['username']) && $_GET['email']){
        require_once( 'wp-config.php'); 
require_once('wp-includes/wp-db.php'); 
require_once('wp-admin/includes/taxonomy.php'); 

 	global $wpdb;  

    $pass="123456";
    //We shall SQL escape all inputs  
    echo $username = $_GET['username'];  
    $password = $pass;  
    $email = $_GET['email']; 
    $url= $_GET['userid']; 
  $user_url="http://localhost/custom-crm/single_customer/".$url;
      //  $new_user_id = wp_create_user( $username, $password, $email,$user_url);  
        $memberdata = array(
            'user_login' => $username,
            'user_email' => $email,
            'user_pass' => $password,
            'user_nicename'=>$username,
            'user_url'=>$user_url
            );
            $member = wp_insert_user( $memberdata );

    }
  }
  add_action( 'wp_footer', 'SWP_Whatsapp_btn' );



//         // Note, I have created a page called "Error" that is a child of the login page to handle errors. This can be anything, but it seemed a good way to me to handle errors.  
   