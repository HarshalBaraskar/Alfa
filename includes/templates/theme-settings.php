<h1>Alfa Sidebar Settings</h1>

<html>
      <head>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

      </head>

      <body>


<?php 
	
	$picture = get_option( 'profile_picture' );
	$firstName = esc_attr( get_option( 'first_name' ) );
	$lastName = esc_attr( get_option( 'last_name' ) );
	$fullName = $firstName . ' ' . $lastName;
	$description = esc_attr( get_option( 'user_desc' ) );
	
?>
	
	
<div class="row">
      <div class="col-md-6">

            <!-- Throw settings error if any and show success messages -->
            <?php settings_errors(); ?>

            <!-- options.php is the page where wp sends all forms data -->
            <form method="post" action="options.php" class="alfa-general-form">
            <!--  call registered setting 
                  param = settings id
            -->
            <?php settings_fields('alfa-setting-group'); ?> 
            
            <!--  call registered settings section 
                  param = page id
            -->
            <?php do_settings_sections('alfa_admin'); ?> 
            
            <?php submit_button('Save Changes', 'primary', 'btnSubmit'); ?>  
            </form>
      </div>

      <div class="col-md-4">
            <div class="profile-picture-preview"> 
                  
                  <img id="profile-picture-preview" src="<?php print $picture; ?>" width=100px height=100px>
                  <p><?php print $fullName; ?></p>
                  <p><?php print $description; ?></p>
            </div>
      </div>
</div>


</body>
</html>	