<h1>Alfa Theme Support</h1>

<?php 
	
	//$picture = get_option( 'profile_picture' );

?>

            <!-- Throw settings error if any and show success messages -->
            <?php settings_errors(); ?>

            <!-- options.php is the page where wp sends all forms data -->
            <form method="post" action="options.php">
            <!--  call registered setting 
                  param = settings id
            -->
            <?php settings_fields('alfa-support'); ?> 
            
            <!--  call registered settings section 
                  param = page id
            -->
            <?php do_settings_sections('alfa_theme_options'); ?> 
            
            <?php submit_button(); ?>  
            </form>
    