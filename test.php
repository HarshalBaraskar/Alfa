<?php 


/***********************************
 * Template Name: Php Test *
 ***********************************/



if(isset($_FILES["file"]["type"]))
{
    $validextensions = array("jpeg", "jpg", "png");
    $temporary = explode(".", $_FILES["file"]["name"]);
    $file_extension = end($temporary);
    if ((($_FILES["file"]["type"] == "image/png") || ($_FILES["file"]["type"] == "image/jpg") || ($_FILES["file"]["type"] == "image/jpeg")
    ) && ($_FILES["file"]["size"] < 5000000)//Approx. 100kb files can be uploaded.
    && in_array($file_extension, $validextensions)) {
        if ($_FILES["file"]["error"] > 0)
        {
            echo "Return Code: " . $_FILES["file"]["error"] . "<br/><br/>";
        }
        else
        {

                // The nonce was valid and the user has the capabilities, it is safe to continue.

                // These files need to be included as dependencies when on the front end.
                require_once( ABSPATH . 'wp-admin/includes/image.php' );
                require_once( ABSPATH . 'wp-admin/includes/file.php' );
                require_once( ABSPATH . 'wp-admin/includes/media.php' );
                
                // Let WordPress handle the upload.
                // Remember, 'my_image_upload' is the name of our file input in our form above.
                $attachment_id = media_handle_upload( 'file', 0);
                
                if ( is_wp_error( $attachment_id ) ) {
                    $msg = "Error in uploading";
                } else {
                    // The image was uploaded successfully!
                    $msg = "Image uploaded successfully";
                }
                $response = array('result'=>'success', 'msg'=>$msg,'attachment_id'=>$attachment_id);
                $json_response = json_encode($response);
                echo $json_response;

               
            
        }
}
else
{
echo "<span id='invalid'>***Invalid file Size or Type***<span>";
}
}








?>
    

 



















