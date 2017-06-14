<?php

    




/***********************************
 * Template Name: image upload *
 ***********************************/
get_header();


 ?>

<style>
.huge_it_slideshow_image_wrap_2 {
    display:none;
}
</style>
<?php

// Check that the nonce is valid, and the user can edit this post.
if ( 
	isset( $_POST['my_image_upload_nonce'], $_POST['post_id'] ) 
	&& wp_verify_nonce( $_POST['my_image_upload_nonce'], 'my_image_upload' )
	)
) {
	// The nonce was valid and the user has the capabilities, it is safe to continue.

	// These files need to be included as dependencies when on the front end.
	require_once( ABSPATH . 'wp-admin/includes/image.php' );
	require_once( ABSPATH . 'wp-admin/includes/file.php' );
	require_once( ABSPATH . 'wp-admin/includes/media.php' );
	
	// Let WordPress handle the upload.
	// Remember, 'my_image_upload' is the name of our file input in our form above.
	$attachment_id = media_handle_upload( 'my_image_upload', $_POST['post_id'] );
	
	if ( is_wp_error( $attachment_id ) ) {
		echo "Error in uploading";
	} else {
		// The image was uploaded successfully!
        echo "successfull uploading".$attachment_id;
	}

} else {

	// The security check failed, maybe show the user an error.
    echo "Security check failed";
}

// Update portfolio profile photo

$user_id = get_current_user_id();
$port_post = array(
                
                'post_type'		=> 'portfolio_home',
                'post_status'	=> 'publish'
            ); 

$posts = get_posts( $port_post);
foreach( $posts as $post ) :
    $id = get_the_ID();
    $value = get_post_meta($id, 'user_id',true);
    if ($value==$user_id){
        update_post_meta($id, 'profile_picture',$attachment_id);
    }
     
endforeach;

?>

<script>
    //window.location = "http://localhost/wordpress/portfolio-form/";
</script>

<?php 
/*
    $user_id = get_current_user_id();
    $flag = '0';
    $port_post = array(
                    'post_type'		=> 'portfolio_home',
                    'post_status'	=> 'publish'
                ); 

    $posts = get_posts( $port_post);
    foreach( $posts as $post ) :
        $id = get_the_ID();
        $value = get_post_meta($id, 'user_id',true);
        if ($value==$user_id){
            $flag = '1';
            break;
        }
        
    endforeach;

    if($flag =='1'){
            echo "<br><hr><h1>User Id :".$user_id." => Has Portfolio.id".$id;
    }
    if($flag =='0'){
            echo "<br><hr><h1>User Id :".$user_id." => Dont Have Portfolio.";
    }

    echo "<br> File array";
    print_r($_POST['my_image_upload_nonce']);
    var_dump($_POST['my_image_upload_nonce']);
    echo $_POST['my_image_upload_nonce'];

*/

 ?>



