<?php
/* 

======================
Admin page
======================
*/


function add_admin_page(){
    
    // Generate alfa admin page
    // In below function
    // param 1 = Title of page and unique page id also
    // param 2 = Page menu title
    // param 3 = Authority to access page
    // param 4 = slug of page (It dispays in page url)
    // param 5 = callback fnction name
    // param 6 = icon of page menu (can add custom icon also)
    // for custom icon use (get_template_directory_uri().'/img/icon.png')
    // param 7 = number to specify order of menu in admin panel
    add_menu_page('Alfa Sidebar Options','Alfa','manage_options','alfa_admin','alfa_sidebar_settings_page','dashicons-admin-tools',110);

    // Generate alfa admin subpages
    // In below function to add subpage
    // param 1 = slug of parent page
    // param 2 = page name or page id
    // param 3 = page menu name
    // param 4 = authority
    // param 5 = subpage slug
    // param 6 = callback function name
    // first submenu page should have page id, slug and callback function same as parent page to avoid repitition.
    add_submenu_page('alfa_admin','Alfa Sidebar Options','Sidebar','manage_options','alfa_admin','alfa_sidebar_settings_page');
    add_submenu_page('alfa_admin','Alfa CSS Options','Custom CSS','manage_options','alfa_admin_css','alfa_theme_css_page');
    add_submenu_page( 'alfa_admin', 'Alfa Theme Options', 'Theme Options', 'manage_options', 'alfa_theme_options', 'alfa_theme_support_page' );
    add_submenu_page( 'alfa_admin', 'Alfa Contact Form', 'Custom Contact', 'manage_options', 'alfa_contact_form', 'alfa_contact_form_page' );
	
	

    // Activate custom settings
    // This settings will generate only after creation of custom pages.
    add_action('admin_init','alfa_custom_settings');
}

add_action('admin_menu','add_admin_page');

function alfa_custom_settings(){

// Sidebar Options

    // Register setting
    //param 1 = setting options group name or id
    //param 2 = option name 
    register_setting('alfa-setting-group','profile_picture');
    register_setting('alfa-setting-group','first_name');
    register_setting('alfa-setting-group','last_name');
    register_setting('alfa-setting-group','user_desc');
    register_setting('alfa-setting-group','twitter_handler','alfa_sanitize_twitter_handler');
    register_setting('alfa-setting-group','facebook_handler','alfa_sanitize_facebook_handler');
    register_setting('alfa-setting-group','gplus_handler','alfa_sanitize_gplus_handler');
    
    // Add section
    //param1 = section id
    //param2 = Section heading to be displayed on page
    //param3 = callback function 
    //param4 = admin parent page name
    add_settings_section('alfa-sidebar-options','Sidebar Options','alfa_sidebar_options','alfa_admin');
    
    // add first name field
    //param1 = field id
    //param2 = field label to be displayed on page
    //param3 = callback function 
    //param4 = admin parent page name
    //peram5 = parent option name in which field to be added.
    add_settings_field('sidebar-profile-picture','Profile Picture','sidebar_profile_picture','alfa_admin','alfa-sidebar-options');
    add_settings_field('sidebar-fname','First Name','sidebar_first_name','alfa_admin','alfa-sidebar-options');
    add_settings_field('sidebar-lname','Last Name','sidebar_last_name','alfa_admin','alfa-sidebar-options');
    add_settings_field('sidebar-user-desc','User Description','sidebar_user_desc','alfa_admin','alfa-sidebar-options');
    add_settings_field('sidebar-twitter','Twitter Handler','sidebar_twitter','alfa_admin','alfa-sidebar-options');
    add_settings_field('sidebar-facebook','Facebook Handler','sidebar_facebook','alfa_admin','alfa-sidebar-options');
    add_settings_field('sidebar-gplus','Google+ Handler','sidebar_gplus','alfa_admin','alfa-sidebar-options');


//Theme Support Options

	register_setting('alfa-support','post_formats');
	register_setting('alfa-support','custom_header');
	register_setting('alfa-support','custom_background');

    add_settings_section('alfa-theme-options','Theme Options','alfa_theme_options','alfa_theme_options');

    add_settings_field('post-formats','Post Formats','alfa_post_formats','alfa_theme_options','alfa-theme-options');
    add_settings_field('custom-header','Custom Header','alfa_custom_header','alfa_theme_options','alfa-theme-options');
    add_settings_field('custom-background','Custom Background','alfa_custom_background','alfa_theme_options','alfa-theme-options');

// Custom contact form settings
	register_setting('alfa-contact-form','activate_form');
    add_settings_section('alfa-custom-contact','Contact Form','alfa_custom_contact','alfa_contact_form');

    add_settings_field('activate-form','Contact Form','alfa_contact','alfa_contact_form','alfa-custom-contact');


}


// Alfa Contact form options

    function alfa_custom_contact(){
    echo "Activate and deactivate contact form.";
  }

  function alfa_contact() {
    $form = get_option( 'activate_form' );
    $checked = ( $form == 1 ? 'checked' : '' );
    $output .= '<label><input type="checkbox" id="activate-form" name="activate_form" value="1" '.$checked.' />Activate custom contact form</label><br>';

    echo $output;
}




// Theme support options functionsss



function alfa_theme_options(){
    echo "Activate and deactivate specific theme support options.";
  }

function alfa_post_formats() {
    $options = get_option( 'post_formats' );
    $formats = array( 'aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat' );
    $output = '';
    foreach ( $formats as $format ){
        $checked = ( @$options[$format] == 1 ? 'checked' : '' );
        $output .= '<label><input type="checkbox" id="'.$format.'" name="post_formats['.$format.']" value="1" '.$checked.' /> '.$format.'</label><br>';
    }
    echo $output;
}

function alfa_custom_header() {
    $options = get_option( 'custom_header' );
    $checked = ( $options == 1 ? 'checked' : '' );
    $output .= '<label><input type="checkbox" id="custom-header" name="custom_header" value="1" '.$checked.' />Activate custom header</label><br>';

    echo $output;
}
function alfa_custom_background() {
    $options = get_option( 'custom_background' );
    $checked = ( $options == 1 ? 'checked' : '' );
    $output .= '<label><input type="checkbox" id="custom-background" name="custom_background" value="1" '.$checked.' />Activate custom background</label><br>';

    echo $output;
}



// Sidebar Options Functions

function sidebar_profile_picture(){
    
   $picture = get_option( 'profile_picture' );
   if(empty($picture)){
       echo '<input type="button" class="button button-secondary" value="Upload Profile Picture" id="upload-button">';
       echo '<input type="hidden" id="profile-picture" name="profile_picture" value="" />';
   }
   else{
	echo '<input type="button" class="button button-secondary" value="Replace Profile Picture" id="upload-button">';
    echo '<input type="hidden" id="profile-picture" name="profile_picture" value="'.$picture.'" /> </t>';
    echo '<input type="button" class="button button-secondary" id="remove-profile-picture" value="Remove" />';

   }
}

function sidebar_first_name(){
    
    $fname = esc_attr(get_option('first_name'));
    echo '<input type="text" name="first_name" value="'.$fname.'" placeholder="First Name" />';
}

function sidebar_last_name(){
    
    $lname = esc_attr(get_option('last_name'));
    echo '<input type="text" name="last_name" value="'.$lname.'" placeholder="Last Name" />';
}

function sidebar_user_desc(){
    
    $user_desc = esc_attr(get_option('user_desc'));
    echo '<input type="text" name="user_desc" value="'.$user_desc.'" placeholder="User Description" />';
}

function sidebar_twitter(){
    $twitter = esc_attr(get_option('twitter_handler'));
    echo '<input type="text" name="twitter_handler" value="'.$twitter.'" placeholder="Twitter Handler" />';
    echo '<p class="description"> Enter twitter username without @ character.</p>';
}


function sidebar_facebook(){
    $facebook = esc_attr(get_option('facebook_handler'));
    echo '<input type="text" name="facebook_handler" value="'.$facebook.'" placeholder="Facebook Handler" />';
    echo '<p class="description"> Enter Facebook username without @ character.</p>';
}

function sidebar_gplus(){
    $gplus = esc_attr(get_option('gplus_handler'));
    echo '<input type="text" name="gplus_handler" value="'.$gplus.'" placeholder="Google+ Handler" />';
    echo '<p class="description"> Enter Google+ username without @ character.</p>';
}

// Sanitization of inputs
// snitize function removes all special chars in string
function alfa_sanitize_twitter_handler($input){
    $output = sanitize_text_field($input);
    $output = str_replace('@','',$output);
    return $output;
}

function alfa_sanitize_facebook_handler($input){
    $output = sanitize_text_field($input);
    $output = str_replace('@','',$output);
    return $output;
}

function alfa_sanitize_gplus_handler($input){
    $output = sanitize_text_field($input);
    $output = str_replace('@','',$output);
    return $output;
}


function alfa_sidebar_options(){
    
}

// Template page functions

function alfa_theme_support_page(){
    
    // including template file
    require_once(get_template_directory().'/includes/templates/alfa-theme-support.php');
}

function alfa_sidebar_settings_page(){
    
    // including template file
    require_once(get_template_directory().'/includes/templates/theme-settings.php');
}

function alfa_theme_css_page(){
    
}

function alfa_contact_form_page(){
    
    // including template file
    require_once(get_template_directory().'/includes/templates/custom-contact.php');
}


?>
