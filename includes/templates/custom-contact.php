<h1>Alfa Custom Contact Form</h1>

<?php 
	
	//$picture = get_option( 'profile_picture' );

?>

            <!-- Throw settings error if any and show success messages -->
            <?php 
                settings_errors(); 
                ?>

            <!-- options.php is the page where wp sends all forms data -->
            <form method="post" action="options.php">
            
            <?php 
                settings_fields('alfa-contact-form'); 
               
                do_settings_sections('alfa_contact_form'); 
                
                submit_button(); 
                ?>  
            </form>
    