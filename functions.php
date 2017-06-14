
<?php

// Calling admin-functions.php file
 require get_template_directory().'/includes/admin-functions.php'; 
 require get_template_directory().'/includes/enqueue.php'; 
 require get_template_directory() . '/includes/theme-support.php';
 require get_template_directory() . '/includes/custom-post-type.php';
 require get_template_directory() . '/wp-bootstrap-navwalker.php';

 // Registering Primary navigation

add_action( 'after_setup_theme', 'wpt_setup' );
    if ( ! function_exists( 'wpt_setup' ) ):
        function wpt_setup() {  
            register_nav_menu( 'primary', __( 'Primary navigation', 'pnav' ) );
        } endif;

// Adding test route

add_filter( 'rest_api_init', 'test_register_routes' );
function test_register_routes( $routes ) {
    
    register_rest_route( 'alfa/', '/test', array(
        'callback' => 'send_test',
        'methods'  => 'GET',
        
    ) );

    register_rest_route( 'alfa/', '/getPortfolio', array(
        'callback' => 'getPortfolio',
        'methods'  => 'GET',
        
    ) );

    register_rest_route( 'alfa/', '/getExp', array(
        'callback' => 'saveExp',
        'methods'  => 'GET',
        
    ) );

    register_rest_route( 'alfa/', '/displayExp', array(
        'callback' => 'displayExp',
        'methods'  => 'GET',
        
    ) );

    register_rest_route( 'alfa/', '/deleteExp', array(
        'callback' => 'deleteExp',
        'methods'  => 'GET',
        
    ) );

    register_rest_route( 'alfa/', '/editExp', array(
        'callback' => 'editExp',
        'methods'  => 'GET',
        
    ) );

    register_rest_route( 'alfa/', '/updateExp', array(
        'callback' => 'updateExp',
        'methods'  => 'GET',
        
    ) );

    // Tech Skill Apis starts here

    register_rest_route( 'alfa/', '/saveTechSkill', array(
        'callback' => 'saveTechSkill',
        'methods'  => 'GET',
        
    ) );

    register_rest_route( 'alfa/', '/displayTechSkill', array(
        'callback' => 'displayTechSkill',
        'methods'  => 'GET',
        
    ) );

    register_rest_route( 'alfa/', '/deleteTechSkill', array(
        'callback' => 'deleteTechSkill',
        'methods'  => 'GET',
        
    ) );

    register_rest_route( 'alfa/', '/editTechSkill', array(
        'callback' => 'editTechSkill',
        'methods'  => 'GET',
        
    ) );

    register_rest_route( 'alfa/', '/updateTechSkill', array(
        'callback' => 'updateTechSkill',
        'methods'  => 'GET',
        
    ) );

    // end of tech skills =====================================

// Lang Skill Apis starts here ================================

    register_rest_route( 'alfa/', '/saveLangSkill', array(
        'callback' => 'saveLangSkill',
        'methods'  => 'GET',
        
    ) );

    register_rest_route( 'alfa/', '/displayLangSkill', array(
        'callback' => 'displayLangSkill',
        'methods'  => 'GET',
        
    ) );

    register_rest_route( 'alfa/', '/deleteLangSkill', array(
        'callback' => 'deleteLangSkill',
        'methods'  => 'GET',
        
    ) );

    register_rest_route( 'alfa/', '/editLangSkill', array(
        'callback' => 'editLangSkill',
        'methods'  => 'GET',
        
    ) );

    register_rest_route( 'alfa/', '/updateLangSkill', array(
        'callback' => 'updateLangSkill',
        'methods'  => 'GET',
        
    ) );
    
    // end of lang skills

    // Other Skill Apis starts here

    register_rest_route( 'alfa/', '/saveOtherSkill', array(
        'callback' => 'saveOtherSkill',
        'methods'  => 'GET',
        
    ) );

    register_rest_route( 'alfa/', '/displayOtherSkill', array(
        'callback' => 'displayOtherSkill',
        'methods'  => 'GET',
        
    ) );

    register_rest_route( 'alfa/', '/deleteOtherSkill', array(
        'callback' => 'deleteOtherSkill',
        'methods'  => 'GET',
        
    ) );

    register_rest_route( 'alfa/', '/editOtherSkill', array(
        'callback' => 'editOtherSkill',
        'methods'  => 'GET',
        
    ) );

    register_rest_route( 'alfa/', '/updateOtherSkill', array(
        'callback' => 'updateOtherSkill',
        'methods'  => 'GET',
        
    ) );
    
    // end of others skills ========================================

    
    // Education Apis starts here ================================

    register_rest_route( 'alfa/', '/saveEdu', array(
        'callback' => 'saveEdu',
        'methods'  => 'GET',
        
    ) );

    register_rest_route( 'alfa/', '/displayEdu', array(
        'callback' => 'displayEdu',
        'methods'  => 'GET',
        
    ) );

    register_rest_route( 'alfa/', '/deleteEdu', array(
        'callback' => 'deleteEdu',
        'methods'  => 'GET',
        
    ) );

    register_rest_route( 'alfa/', '/editEdu', array(
        'callback' => 'editEdu',
        'methods'  => 'GET',
        
    ) );

    register_rest_route( 'alfa/', '/updateEdu', array(
        'callback' => 'updateEdu',
        'methods'  => 'GET',
        
    ) );
    
    // end of Education skills ===========================================

    
    
    // Achievments Apis starts here ================================

    register_rest_route( 'alfa/', '/saveAch', array(
        'callback' => 'saveAch',
        'methods'  => 'GET',
        
    ) );

    register_rest_route( 'alfa/', '/displayAch', array(
        'callback' => 'displayAch',
        'methods'  => 'GET',
        
    ) );

    register_rest_route( 'alfa/', '/deleteAch', array(
        'callback' => 'deleteAch',
        'methods'  => 'GET',
        
    ) );

    register_rest_route( 'alfa/', '/editAch', array(
        'callback' => 'editAch',
        'methods'  => 'GET',
        
    ) );

    register_rest_route( 'alfa/', '/updateAch', array(
        'callback' => 'updateAch',
        'methods'  => 'GET',
        
    ) );
    
    // end of Achievments  ===========================================

    
    // Testimonials Apis starts here ================================

    register_rest_route( 'alfa/', '/saveTest', array(
        'callback' => 'saveTest',
        'methods'  => 'GET',
        
    ) );

    register_rest_route( 'alfa/', '/displayTest', array(
        'callback' => 'displayTest',
        'methods'  => 'GET',
        
    ) );

    register_rest_route( 'alfa/', '/deleteTest', array(
        'callback' => 'deleteTest',
        'methods'  => 'GET',
        
    ) );

    register_rest_route( 'alfa/', '/editTest', array(
        'callback' => 'editTest',
        'methods'  => 'GET',
        
    ) );

    register_rest_route( 'alfa/', '/updateTest', array(
        'callback' => 'updateTest',
        'methods'  => 'GET',
        
    ) );
    
    // end of Testimonials  ===========================================

    
    // Services Apis starts here ================================

    register_rest_route( 'alfa/', '/saveService', array(
        'callback' => 'saveService',
        'methods'  => 'GET',
        
    ) );

    register_rest_route( 'alfa/', '/displayService', array(
        'callback' => 'displayService',
        'methods'  => 'GET',
        
    ) );

    register_rest_route( 'alfa/', '/deleteService', array(
        'callback' => 'deleteService',
        'methods'  => 'GET',
        
    ) );

    register_rest_route( 'alfa/', '/editService', array(
        'callback' => 'editService',
        'methods'  => 'GET',
        
    ) );

    register_rest_route( 'alfa/', '/updateService', array(
        'callback' => 'updateService',
        'methods'  => 'GET',
        
    ) );
    
    // end of Services  ===========================================

     
    // Portfolio Apis starts here ================================

    register_rest_route( 'alfa/', '/savePort', array(
        'callback' => 'savePort',
        'methods'  => 'GET',
        
    ) );

    register_rest_route( 'alfa/', '/displayPort', array(
        'callback' => 'displayPort',
        'methods'  => 'GET',
        
    ) );

    register_rest_route( 'alfa/', '/deletePort', array(
        'callback' => 'deletePort',
        'methods'  => 'GET',
        
    ) );

    register_rest_route( 'alfa/', '/editPort', array(
        'callback' => 'editPort',
        'methods'  => 'GET',
        
    ) );

    register_rest_route( 'alfa/', '/updatePort', array(
        'callback' => 'updatePort',
        'methods'  => 'GET',
        
    ) );
    
    // end of Portfolio  ===========================================

        
    // Blog Apis starts here ================================

    register_rest_route( 'alfa/', '/saveBlog', array(
        'callback' => 'saveBlog',
        'methods'  => 'GET',
        
    ) );

    register_rest_route( 'alfa/', '/displayBlog', array(
        'callback' => 'displayBlog',
        'methods'  => 'GET',
        
    ) );

    register_rest_route( 'alfa/', '/deleteBlog', array(
        'callback' => 'deleteBlog',
        'methods'  => 'GET',
        
    ) );

    register_rest_route( 'alfa/', '/editBlog', array(
        'callback' => 'editBlog',
        'methods'  => 'GET',
        
    ) );

    register_rest_route( 'alfa/', '/updateBlog', array(
        'callback' => 'updateBlog',
        'methods'  => 'GET',
        
    ) );
    
    // end of Blog  ===========================================

    // contact api
    register_rest_route( 'alfa/', '/saveContact', array(
        'callback' => 'saveContact',
        'methods'  => 'GET',
        
    ) );


    // upload image api
    register_rest_route( 'alfa/', '/uploadImage', array(
        'callback' => 'uploadImage',
        'methods'  => 'POST',
        
    ) );


}

// save portfolio home data

function send_test( WP_REST_Request $request ) {
        
        $url = "UrL".$_SERVER['REQUEST_URI'];
        $data=$request['data'];
        if($data=='Home'){
            $first_name= $request['first_name'];
            $last_name=$request['last_name'];
            $profession=$request['profession'];
            $aboutme_title=$request['aboutme_title'];
            $aboutme_summary=$request['aboutme_summary'];
            $attachment_id=$request['attachment_id'];
            $user_id = (int)$request['user_id'];

            // Check if user has portfolio or not
                $flag = '0';
                $port_post =
                //  custom meta query to only get post for current logged in user
                            array(
                                'meta_query' => array(
                                        array(
                                            'key' => 'user_id',
                                            'value' => $user_id
                                        )
                                    ),
                // end of meta query
                                
                                'post_type'		=> 'portfolio_home',
                                'post_status'	=> 'publish'
                            ); 
                //  make sure we have user portfolio available
                $posts          = get_posts($port_post);
                if(empty($posts)){
                    //$msg = "Zero posts returned";              
                }
                else{
                    $flag ='1';
                     $post_id        = $posts[0]->ID;
                }
            

            // User Has Portfolio
            if($flag =='1'){

                // Updating portfolio
                
                update_post_meta($post_id, 'user_id', $user_id);
                update_post_meta($post_id, 'first_name', $first_name);
                update_post_meta($post_id, 'last_name', $last_name);
                update_post_meta($post_id, 'profession', $profession);
                update_post_meta($post_id, 'about_me_title', $aboutme_title);
                update_post_meta($post_id, 'about_me_summary', $aboutme_summary);
                update_post_meta($post_id, 'profile_picture', $attachment_id);
                
                if(!empty($post_id))
                    $msg = "Portfolio updated successfully!";
                else
                    $msg = "Post updation failed! Please try again.";
                    

                $response = new WP_REST_Response( array('result' =>'success','Url'=>$url,'post_id'=>$post_id,'msg'=>$msg,'post_id'=>$post_id,'first_name'=>$first_name,'last_name'=>$last_name,'profession'=>$profession,'aboutme_title'=>$aboutme_title,'aboutme_summary'=>$aboutme_summary, ) );
                    
            }

            
            // User dont have portfolio
            if($flag =='0'){

                        
                /*Create a new portfolio home post*/  
                $port_post = array(
                    'post_title'	=> $first_name." ".$last_name,
                    'post_type'		=> 'portfolio_home',
                    'post_status'	=> 'publish'
                ); 

                $post_id = wp_insert_post( $port_post ); 

                /*Insert custom fields values*/
                update_post_meta($post_id, 'user_id', $user_id);
                update_post_meta($post_id, 'first_name', $first_name);
                update_post_meta($post_id, 'last_name', $last_name);
                update_post_meta($post_id, 'profession', $profession);
                update_post_meta($post_id, 'about_me_title', $aboutme_title);
                update_post_meta($post_id, 'about_me_summary', $aboutme_summary);
                
                if(!empty($post_id))
                    $msg = "Portfolio created successfully!";
                else
                    $msg = "Post creation failed! Please try again.";
                    

                $response = new WP_REST_Response( array('result' =>'success','Url'=>$url,'msg'=>$msg,'post_id'=>$post_id,'first_name'=>$first_name,'last_name'=>$last_name,'profession'=>$profession,'aboutme_title'=>$aboutme_title,'aboutme_summary'=>$aboutme_summary, ) );

            }



            
        }
        else{
            $response = new WP_REST_Response( array('result' =>'fail','Url'=>$url) );
        }

        
    return $response;
}


// Send portfolio data of current data

function getPortfolio( WP_REST_Request $request ) {
        
        $url = "UrL".$_SERVER['REQUEST_URI'];
        $data=$request['data'];
        $user_id = (int)$request['user_id'];
            
    $flag = '0';
    // custom size for profile picture 
    $profile_size =   array('270','334' );

    // get post for user portfolio
    $port_post =
    //  custom meta query to only get post for current logged in user
                 array(
                    'meta_query' => array(
                            array(
                                'key' => 'user_id',
                                'value' => $user_id
                            )
                        ),
    // end of meta query
                    'post_type'  => 'portfolio_home',
                    'post_status' => 'publish'
                ); 
    //  make sure we have user portfolio available
     $posts          = get_posts($port_post);
     if(empty($posts)){
         $response = new WP_REST_Response( array('result' =>'fail','Url'=>$url) );
         die;
     }
     
    //  get mangoes into basket
     $post_id        = $posts[0]->ID;
     $post_meta      = get_post_meta($post_id);  
     $first_name     = $post_meta['first_name'][0];
     $last_name      = $post_meta['last_name'][0];
     $full_name        = $first_name.' '.$last_name;
     $profession       = $post_meta['profession'][0];
     $about_me_title   = $post_meta['about_me_title'][0];
     $about_me_summary = $post_meta['about_me_summary'][0];
     $profile_picture  = $post_meta['profile_picture'][0];
     $contact_email  = $post_meta['email'][0];
     $contact_number  = $post_meta['contact_number'][0];
     $contact_address  = $post_meta['address'][0];
     $image_url =  wp_get_attachment_image_src($profile_picture,$profile_size);
            $response = new WP_REST_Response( 
                array(
                    'result' =>'Success',
                    'first_name' => $first_name,
                    'last_name'  => $last_name,
                    'profession' => $profession,
                    'about_me_title' => $about_me_title,
                    'about_me_summary' => $about_me_summary,
                    'image_url' => $image_url ,
                    'attachment_id' => $profile_picture,
                    'contact_email' => $contact_email,
                    'contact_no' => $contact_number,
                    'contact_address' => $contact_address
                    ) );
   
    return $response;
}


// Save Experiences


function saveExp( WP_REST_Request $request ) {
        
        $url = "UrL".$_SERVER['REQUEST_URI'];
        $data=$request['data'];
        if($data=='Resume'){
            $title= $request['title'];
            $pos= $request['pos'];
            $descr=$request['descr'];
            $place=$request['place'];
            $location=$request['location'];
            $duration=$request['duration'];
            $user_id = (int)$request['user_id'];

            // Check if user has portfolio or not
                $flag = '0';
                $port_post =
                //  custom meta query to only get post for current logged in user
                            array(
                                'meta_query' => array(
                                        array(
                                            'key' => 'user_id',
                                            'value' => $user_id
                                        )
                                    ),
                // end of meta query
                                
                                'post_type'		=> 'portfolio_home',
                                'post_status'	=> 'publish'
                            ); 
                //  make sure we have user portfolio available
                $posts          = get_posts($port_post);
                if(empty($posts)){
                    //$msg = "Zero posts returned";              
                }
                else{
                    $flag ='1';
                     $post_id        = $posts[0]->ID;
                }
            

            // User Has Portfolio
            if($flag =='1'){

                // check if experience already exists then send message to change pos.
                $exists = '';
                $expJson = get_post_meta( $post_id, 'experience1', true);
                $exp_array = json_decode($expJson,true);
                foreach($exp_array as $a){
                    if($a['pos']==$pos){
                        $exists = 'Y';
                    }
                }

                if($exists == 'Y'){
                    $msg = "Display position already exist. Please provide unique display position!";
                }
                else {
                        if(empty(get_post_meta( $post_id, 'experience1', true))){
                        
                        $exp_array= array(
                            array('pos'=>$pos, 'title' => $title, 'descr' => $descr, 'place' => $place,'location' => $location,'duration' => $duration) ,             
                            );
                        $expJson = json_encode($exp_array);
                        update_post_meta($post_id, 'experience1', $expJson);
                        }
                        else{
                            $expJson = get_post_meta( $post_id, 'experience1', true);
                            $exp_array = json_decode($expJson,true);
                            $a = array('pos'=>$pos, 'title' => $title, 'descr' => $descr, 'place' => $place,'location' => $location,'duration' => $duration);
                            array_push($exp_array,$a);
                            $expJson = json_encode($exp_array);
                            update_post_meta($post_id, 'experience1',$expJson);
                        }

                        if(!empty($post_id))
                            $msg = "New experience added successfully!";
                        else
                            $msg = "Post updation failed! Please try again.";
                            
                    }
                               
                

                $response = new WP_REST_Response( array('result' =>'success','Url'=>$url,'post_id'=>$post_id,'msg'=>$msg, 'pos'=>$pos, 'title'=>$title,'descr'=>$descr, 'place' => $place,'location'=>$location,'duration'=>$duration,'exists'=>$exists ) );
                    
            }

            
            
        }
        else{
            $response = new WP_REST_Response( array('result' =>'fail','Url'=>$url) );
        }

        
        
    return $response;
}

// Display Experiences


function displayExp( WP_REST_Request $request ) {

            
        $url = "UrL".$_SERVER['REQUEST_URI'];
        $data=$request['data'];
        if($data=='Resume'){
            $user_id = (int)$request['user_id'];

            // Check if user has portfolio or not
                $flag = '0';
                $port_post =
                //  custom meta query to only get post for current logged in user
                            array(
                                'meta_query' => array(
                                        array(
                                            'key' => 'user_id',
                                            'value' => $user_id
                                        )
                                    ),
                // end of meta query
                                
                                'post_type'		=> 'portfolio_home',
                                'post_status'	=> 'publish'
                            ); 
                //  make sure we have user portfolio available
                $posts          = get_posts($port_post);
                if(empty($posts)){
                    //$msg = "Zero posts returned";              
                }
                else{
                    $flag ='1';
                     $post_id        = $posts[0]->ID;
                }
            

            // User Has Portfolio
            if($flag =='1'){

                // update experience array
                $expJson = get_post_meta( $post_id, 'experience1', true);
                $exp_array = json_decode($expJson,true);    
                    
                          
                if(!empty($post_id))
                    $msg = "Experiences sent successfully!";
                else
                    $msg = "Can not send Experiences! Please try again.";
                    

                $response = new WP_REST_Response( array('result' =>'success','Url'=>$url,'post_id'=>$post_id,'msg'=>$msg,'experiences'=>$exp_array ) );
                    
            }

            
            
        }
        else{
            $response = new WP_REST_Response( array('result' =>'fail','Url'=>$url) );
        }

        
        
    return $response;

        }

// Delete Experiences

function deleteExp( WP_REST_Request $request ) {
        
        $url = "UrL".$_SERVER['REQUEST_URI'];
        $data=$request['data'];
        if($data=='Resume'){
            $pos= (int)$request['pos'];
            $user_id = (int)$request['user_id'];

            // Check if user has portfolio or not
                $flag = '0';
                $port_post =
                //  custom meta query to only get post for current logged in user
                            array(
                                'meta_query' => array(
                                        array(
                                            'key' => 'user_id',
                                            'value' => $user_id
                                        )
                                    ),
                // end of meta query
                                
                                'post_type'		=> 'portfolio_home',
                                'post_status'	=> 'publish'
                            ); 
                //  make sure we have user portfolio available
                $posts          = get_posts($port_post);
                if(empty($posts)){
                    //$msg = "Zero posts returned";              
                }
                else{
                    $flag ='1';
                     $post_id        = $posts[0]->ID;
                }
            

            // User Has Portfolio
            if($flag =='1'){

                // delete experience
        
                $expJson = get_post_meta( $post_id, 'experience1', true);
                $exp_array = json_decode($expJson,true);
               $index = 0;
                foreach($exp_array as $a){
                    if($a['pos']==$pos){
                        array_splice($exp_array,$index,1);
                    }
                    $index = $index + 1;
                }

                $expJson = json_encode($exp_array);
                update_post_meta($post_id, 'experience1',$expJson);
        
                               
                if(!empty($post_id))
                    $msg = "Experience deleted successfully!";
                else
                    $msg = "Experience deletion failed! Please try again.";
                    

                $response = new WP_REST_Response( array('result' =>'success','Url'=>$url,'post_id'=>$post_id,'msg'=>$msg,'pos'=>$pos,) );
                    
            }

            
            
        }
        else{
            $response = new WP_REST_Response( array('result' =>'fail','Url'=>$url) );
        }

        
        
    return $response;
}

// Edit experience


function editExp( WP_REST_Request $request ) {
        
        $url = "UrL".$_SERVER['REQUEST_URI'];
        $data=$request['data'];
        if($data=='Resume'){
            $pos= (int)$request['pos'];
            $user_id = (int)$request['user_id'];

            // Check if user has portfolio or not
                $flag = '0';
                $port_post =
                //  custom meta query to only get post for current logged in user
                            array(
                                'meta_query' => array(
                                        array(
                                            'key' => 'user_id',
                                            'value' => $user_id
                                        )
                                    ),
                // end of meta query
                                
                                'post_type'		=> 'portfolio_home',
                                'post_status'	=> 'publish'
                            ); 
                //  make sure we have user portfolio available
                $posts          = get_posts($port_post);
                if(empty($posts)){
                    //$msg = "Zero posts returned";              
                }
                else{
                    $flag ='1';
                     $post_id        = $posts[0]->ID;
                }
            

            // User Has Portfolio
            if($flag =='1'){

                // select and send experience to edit
        
                $expJson = get_post_meta( $post_id, 'experience1', true);
                $exp_array = json_decode($expJson,true);
               $index = 0;
                foreach($exp_array as $a){
                    if($a['pos']==$pos){
                        $title = $a['title'];
                        $descr = $a['descr'];
                        $place = $a['place'];
                        $location = $a['location'];
                        $duration = $a['duration'];
                        break;
                    }
                }
                               
                if(!empty($post_id))
                    $msg = "Experience edited successfully!";
                else
                    $msg = "Experience edit failed! Please try again.";
                    

                $response = new WP_REST_Response( array('result' =>'success','Url'=>$url,'post_id'=>$post_id,'msg'=>$msg,'pos'=>$pos,'title' => $title, 'descr' => $descr, 'place' => $place, 'location' => $location, 'duration' => $duration) );
                    
            }          
        }
        else{
            $response = new WP_REST_Response( array('result' =>'fail','Url'=>$url) );
        }       
    return $response;
}


// Update Experiences

function updateExp( WP_REST_Request $request ) {
        
        $url = "UrL".$_SERVER['REQUEST_URI'];
        $data=$request['data'];
        if($data=='Resume'){
            $pos= (int)$request['pos'];
            $title= $request['title'];
            $descr=$request['descr'];
            $place=$request['place'];
            $location=$request['location'];
            $duration=$request['duration'];
            $user_id = (int)$request['user_id'];

            // Check if user has portfolio or not
                $flag = '0';
                $port_post =
                //  custom meta query to only get post for current logged in user
                            array(
                                'meta_query' => array(
                                        array(
                                            'key' => 'user_id',
                                            'value' => $user_id
                                        )
                                    ),
                // end of meta query
                                
                                'post_type'		=> 'portfolio_home',
                                'post_status'	=> 'publish'
                            ); 
                //  make sure we have user portfolio available
                $posts          = get_posts($port_post);
                if(empty($posts)){
                    //$msg = "Zero posts returned";              
                }
                else{
                    $flag ='1';
                     $post_id        = $posts[0]->ID;
                }
            

            // User Has Portfolio
            if($flag =='1'){

                // update experience
        
                $expJson = get_post_meta( $post_id, 'experience1', true);
                $exp_array = json_decode($expJson,true);
               $index = 0;
                foreach($exp_array as $a){
                    if($a['pos']==$pos){
                        $exp_array[$index]['title'] = $title;
                        $exp_array[$index]['descr'] = $descr;
                        $exp_array[$index]['place'] = $place;
                        $exp_array[$index]['location'] = $location;
                        $exp_array[$index]['duration'] = $duration;
                        break;
                    }

                    $index++;
                }

                $expJson = json_encode($exp_array);
                update_post_meta($post_id, 'experience1',$expJson);
        
                               
                if(!empty($post_id))
                    $msg = "Experience updated successfully!";
                else
                    $msg = "Experience updation failed! Please try again.";
                    

                $response = new WP_REST_Response( array('result' =>'success','Url'=>$url,'post_id'=>$post_id,'msg'=>$msg,'pos'=>$pos,) );
                    
            }            
        }
        else{
            $response = new WP_REST_Response( array('result' =>'fail','Url'=>$url) );
        }    
    return $response;
}

// Technical skills apis starts here


// Save New Tech Skill


function saveTechSkill( WP_REST_Request $request ) {
        
        $url = "UrL".$_SERVER['REQUEST_URI'];
        $data=$request['data'];
        if($data=='Resume'){
            $techSkillName= $request['techSkillName'];
            $pos= $request['pos'];
            $techSkillNumber=$request['techSkillNumber'];
            $user_id = (int)$request['user_id'];

            // Check if user has portfolio or not
                $flag = '0';
                $port_post = array(
                                'meta_query' => array(
                                        array(
                                            'key' => 'user_id',
                                            'value' => $user_id
                                        )
                                    ),    
                                'post_type'		=> 'portfolio_home',
                                'post_status'	=> 'publish'
                            ); 
                
                $posts          = get_posts($port_post);
                if(empty($posts)){
                    //$msg = "Zero posts returned";              
                }
                else{
                    $flag ='1';
                     $post_id        = $posts[0]->ID;
                }

            // User Has Portfolio
            if($flag =='1'){

                // check if skill pos already exists then send message to change pos.
                $exists = '';
                $expJson = get_post_meta( $post_id, 'technical_skills', true);
                $exp_array = json_decode($expJson,true);
                foreach($exp_array as $a){
                    if($a['pos']==$pos){
                        $exists = 'Y';
                    }
                }

                if($exists == 'Y'){
                    $msg = "Display position already exist. Please provide unique display position!";
                }
                else {
                        if(empty(get_post_meta( $post_id, 'technical_skills', true))){
                        
                        $exp_array= array(
                            array('pos'=>$pos, 'techSkillName' => $techSkillName, 'techSkillNumber' => $techSkillNumber) ,             
                            );
                        $expJson = json_encode($exp_array);
                        update_post_meta($post_id, 'technical_skills', $expJson);
                        }
                        else{
                            $expJson = get_post_meta( $post_id, 'technical_skills', true);
                            $exp_array = json_decode($expJson,true);
                            $a = array('pos'=>$pos, 'techSkillName' => $techSkillName, 'techSkillNumber' => $techSkillNumber);
                            array_push($exp_array,$a);
                            $expJson = json_encode($exp_array);
                            update_post_meta($post_id, 'technical_skills',$expJson);
                        }

                        if(!empty($post_id))
                            $msg = "New Technical Skill added successfully!";
                        else
                            $msg = "Post updation failed! Please try again.";
                            
                    }
                               
                $response = new WP_REST_Response( array('result' =>'success','Url'=>$url,'post_id'=>$post_id,'msg'=>$msg, 'pos'=>$pos,'techSkillName' => $techSkillName, 'techSkillNumber' => $techSkillNumber ) );
                    
            }
        
        }
        else{
            $response = new WP_REST_Response( array('result' =>'fail','Url'=>$url) );
        }
    
    return $response;
}

// Display Tech Skills


function displayTechSkill( WP_REST_Request $request ) {
       
        $url = "UrL".$_SERVER['REQUEST_URI'];
        $data=$request['data'];
        if($data=='Resume'){
            $user_id = (int)$request['user_id'];

            // Check if user has portfolio or not
                $flag = '0';
                $port_post =  array(
                                'meta_query' => array(
                                        array(
                                            'key' => 'user_id',
                                            'value' => $user_id
                                        )
                                    ),                            
                                'post_type'		=> 'portfolio_home',
                                'post_status'	=> 'publish'
                            ); 
                $posts          = get_posts($port_post);
                if(empty($posts)){
                    //$msg = "Zero posts returned";              
                }
                else{
                    $flag ='1';
                     $post_id        = $posts[0]->ID;
                }
            // User Has Portfolio
            if($flag =='1'){
                $expJson = get_post_meta( $post_id, 'technical_skills', true);
                $exp_array = json_decode($expJson,true);    
                    
                          
                if(!empty($post_id))
                    $msg = "Tech Skills sent successfully!";
                else
                    $msg = "Can not send Tech Skills! Please try again.";
                    

                $response = new WP_REST_Response( array('result' =>'success','Url'=>$url,'post_id'=>$post_id,'msg'=>$msg,'techSkills'=>$exp_array ) );
                    
            }                      
        }
        else{
            $response = new WP_REST_Response( array('result' =>'fail','Url'=>$url) );
        }      
    return $response;

}


// Delete Tech Skil
function deleteTechSkill( WP_REST_Request $request ) {
        
        $url = "UrL".$_SERVER['REQUEST_URI'];
        $data=$request['data'];
        if($data=='Resume'){
            $pos= (int)$request['pos'];
            $user_id = (int)$request['user_id'];
            // Check if user has portfolio or not
                $flag = '0';
                $port_post = array(
                                'meta_query' => array(
                                        array(
                                            'key' => 'user_id',
                                            'value' => $user_id
                                        )
                                    ),                             
                                'post_type'		=> 'portfolio_home',
                                'post_status'	=> 'publish'
                            ); 
                $posts          = get_posts($port_post);
                if(empty($posts)){
                    //$msg = "Zero posts returned";              
                }
                else{
                    $flag ='1';
                     $post_id        = $posts[0]->ID;
                }
            // User Has Portfolio
            if($flag =='1'){
                // delete Tech Skill
                $expJson = get_post_meta( $post_id, 'technical_skills', true);
                $exp_array = json_decode($expJson,true);
               $index = 0;
                foreach($exp_array as $a){
                    if($a['pos']==$pos){
                        array_splice($exp_array,$index,1);
                    }
                    $index = $index + 1;
                }

                $expJson = json_encode($exp_array);
                update_post_meta($post_id, 'technical_skills',$expJson);
        
                               
                if(!empty($post_id))
                    $msg = "Technical Skill deleted successfully!";
                else
                    $msg = "Technical Skill deletion failed! Please try again.";
                    

                $response = new WP_REST_Response( array('result' =>'success','Url'=>$url,'post_id'=>$post_id,'msg'=>$msg,'pos'=>$pos,) );
                    
            }      
        }
        else{
            $response = new WP_REST_Response( array('result' =>'fail','Url'=>$url) );
        }

    return $response;
}

// Edit Tech Skill


function editTechSkill( WP_REST_Request $request ) {
        
        $url = "UrL".$_SERVER['REQUEST_URI'];
        $data=$request['data'];
        if($data=='Resume'){
            $pos= (int)$request['pos'];
            $user_id = (int)$request['user_id'];

            // Check if user has portfolio or not
                $flag = '0';
                $port_post = array(
                                'meta_query' => array(
                                        array(
                                            'key' => 'user_id',
                                            'value' => $user_id
                                        )
                                    ),                              
                                'post_type'		=> 'portfolio_home',
                                'post_status'	=> 'publish'
                            ); 
                $posts          = get_posts($port_post);
                if(empty($posts)){
                    //$msg = "Zero posts returned";              
                }
                else{
                    $flag ='1';
                     $post_id        = $posts[0]->ID;
                }
            // User Has Portfolio
            if($flag =='1'){
                // select and send Tech Skill to edit
                $expJson = get_post_meta( $post_id, 'technical_skills', true);
                $exp_array = json_decode($expJson,true);
               $index = 0;
                foreach($exp_array as $a){
                    if($a['pos']==$pos){
                        $pos = (int)$a['pos'];
                        $tech_skill_name = $a['techSkillName'];
                        $tech_skill_number = (int)$a['techSkillNumber'];
                        break;
                    }
                }
                               
                if(!empty($post_id))
                    $msg = "Technical Skill edited successfully!";
                else
                    $msg = "Technical Skill edit failed! Please try again.";
                    

                $response = new WP_REST_Response( array('result' =>'success','Url'=>$url,'post_id'=>$post_id,'msg'=>$msg,'pos'=>$pos,'techSkillName' => $tech_skill_name, 'techSkillNumber' => $tech_skill_number, ) );
                    
            }          
        }
        else{
            $response = new WP_REST_Response( array('result' =>'fail','Url'=>$url) );
        }       
    return $response;
}


// Update Tech Skill

function updateTechSkill( WP_REST_Request $request ) {
        
        $url = "UrL".$_SERVER['REQUEST_URI'];
        $data=$request['data'];
        if($data=='Resume'){
            $pos= (int)$request['pos'];
            $techSkillName= $request['techSkillName'];
            $techSkillNumber=$request['techSkillNumber'];
            $user_id = (int)$request['user_id'];

            // Check if user has portfolio or not
                $flag = '0';
                $port_post = array(
                                'meta_query' => array(
                                        array(
                                            'key' => 'user_id',
                                            'value' => $user_id
                                        )
                                    ),                                
                                'post_type'		=> 'portfolio_home',
                                'post_status'	=> 'publish'
                            ); 
                $posts          = get_posts($port_post);
                if(empty($posts)){
                    //$msg = "Zero posts returned";              
                }
                else{
                    $flag ='1';
                     $post_id        = $posts[0]->ID;
                }
            // User Has Portfolio
            if($flag =='1'){
                // update Tech Skill
                $expJson = get_post_meta( $post_id, 'technical_skills', true);
                $exp_array = json_decode($expJson,true);
               $index = 0;
                foreach($exp_array as $a){
                    if($a['pos']==$pos){
                        $exp_array[$index]['techSkillName'] = $techSkillName;
                        $exp_array[$index]['techSkillNumber'] = $techSkillNumber;
                        break;
                    }

                    $index++;
                }

                $expJson = json_encode($exp_array);
                update_post_meta($post_id, 'technical_skills',$expJson);
        
                               
                if(!empty($post_id))
                    $msg = "Tech Skill updated successfully!";
                else
                    $msg = "Tech Skill updation failed! Please try again.";
                    

                $response = new WP_REST_Response( array('result' =>'success','Url'=>$url,'post_id'=>$post_id,'msg'=>$msg,'pos'=>$pos,) );
                    
            }            
        }
        else{
            $response = new WP_REST_Response( array('result' =>'fail','Url'=>$url) );
        }    
    return $response;
}

// Technical skills apis ends here



// Language skills apis starts here


// Save New Lang Skill


function saveLangSkill( WP_REST_Request $request ) {
        
        $url = "UrL".$_SERVER['REQUEST_URI'];
        $data=$request['data'];
        if($data=='Resume'){
            $langSkillName= $request['langSkillName'];
            $pos= (int)$request['pos'];
            $langSkillNumber=$request['langSkillNumber'];
            $user_id = (int)$request['user_id'];

            // Check if user has portfolio or not
                $flag = '0';
                $port_post = array(
                                'meta_query' => array(
                                        array(
                                            'key' => 'user_id',
                                            'value' => $user_id
                                        )
                                    ),    
                                'post_type'		=> 'portfolio_home',
                                'post_status'	=> 'publish'
                            ); 
                
                $posts          = get_posts($port_post);
                if(empty($posts)){
                    //$msg = "Zero posts returned";              
                }
                else{
                    $flag ='1';
                     $post_id        = $posts[0]->ID;
                }

            // User Has Portfolio
            if($flag =='1'){

                // check if skill pos already exists then send message to change pos.
                $exists = '';
                $expJson = get_post_meta( $post_id, 'language_skills', true);
                $exp_array = json_decode($expJson,true);
                foreach($exp_array as $a){
                    if($a['pos']==$pos){
                        $exists = 'Y';
                    }
                }
                $if = "";

                if($exists == 'Y'){
                    $if = "First";
                    $msg = "Display position already exist. Please provide unique display position!";
                }
                else {
                        if(empty(get_post_meta( $post_id, 'language_skills', true))){
                        
                        $if = "second";
                        $exp_array= array(
                            array('pos'=>$pos, 'langSkillName' => $langSkillName, 'langSkillNumber' => $langSkillNumber) ,             
                            );
                        $expJson = json_encode($exp_array);
                        update_post_meta($post_id, 'language_skills', $expJson);
                        }
                        else{
                            $if = "third";
                            $expJson = get_post_meta( $post_id, 'language_skills', true);
                            $exp_array = json_decode($expJson,true);
                            $a = array('pos'=>$pos, 'langSkillName' => $langSkillName, 'langSkillNumber' => $langSkillNumber);
                            array_push($exp_array,$a);
                            $expJson = json_encode($exp_array);
                            update_post_meta($post_id, 'language_skills',$expJson);
                        }

                        if(!empty($post_id))
                            $msg = "New Language Skill added successfully!";
                        else
                            $msg = "Post updation failed! Please try again.";
                            
                    }
                               
                $response = new WP_REST_Response( array('result' =>'success','Url'=>$url,'post_id'=>$post_id,'msg'=>$msg, 'pos'=>$pos,'langSkillName' => $langSkillName, 'langSkillNumber' => $langSkillNumber,'if'=>$if ) );
                    
            }
        
        }
        else{
            $response = new WP_REST_Response( array('result' =>'fail','Url'=>$url) );
        }
    
    return $response;
}

// Display Lang Skills


function displayLangSkill( WP_REST_Request $request ) {
       
        $url = "UrL".$_SERVER['REQUEST_URI'];
        $data=$request['data'];
        if($data=='Resume'){
            $user_id = (int)$request['user_id'];

            // Check if user has portfolio or not
                $flag = '0';
                $port_post =  array(
                                'meta_query' => array(
                                        array(
                                            'key' => 'user_id',
                                            'value' => $user_id
                                        )
                                    ),                            
                                'post_type'		=> 'portfolio_home',
                                'post_status'	=> 'publish'
                            ); 
                $posts          = get_posts($port_post);
                if(empty($posts)){
                    //$msg = "Zero posts returned";              
                }
                else{
                    $flag ='1';
                     $post_id        = $posts[0]->ID;
                }
            // User Has Portfolio
            if($flag =='1'){
                $expJson = get_post_meta( $post_id, 'language_skills', true);
                $exp_array = json_decode($expJson,true);    
                    
                          
                if(!empty($post_id))
                    $msg = "Language Skills sent successfully!";
                else
                    $msg = "Can not send Language Skills! Please try again.";
                    

                $response = new WP_REST_Response( array('result' =>'success','Url'=>$url,'post_id'=>$post_id,'msg'=>$msg,'langSkills'=>$exp_array ) );
                    
            }                      
        }
        else{
            $response = new WP_REST_Response( array('result' =>'fail','Url'=>$url) );
        }      
    return $response;

}


// Delete Lang Skil
function deleteLangSkill( WP_REST_Request $request ) {
        
        $url = "UrL".$_SERVER['REQUEST_URI'];
        $data=$request['data'];
        if($data=='Resume'){
            $pos= (int)$request['pos'];
            $user_id = (int)$request['user_id'];
            // Check if user has portfolio or not
                $flag = '0';
                $port_post = array(
                                'meta_query' => array(
                                        array(
                                            'key' => 'user_id',
                                            'value' => $user_id
                                        )
                                    ),                             
                                'post_type'		=> 'portfolio_home',
                                'post_status'	=> 'publish'
                            ); 
                $posts          = get_posts($port_post);
                if(empty($posts)){
                    //$msg = "Zero posts returned";              
                }
                else{
                    $flag ='1';
                     $post_id        = $posts[0]->ID;
                }
            // User Has Portfolio
            if($flag =='1'){
                // delete Tech Skill
                $expJson = get_post_meta( $post_id, 'language_skills', true);
                $exp_array = json_decode($expJson,true);
               $index = 0;
                foreach($exp_array as $a){
                    if($a['pos']==$pos){
                        array_splice($exp_array,$index,1);
                    }
                    $index = $index + 1;
                }

                $expJson = json_encode($exp_array);
                update_post_meta($post_id, 'language_skills',$expJson);
        
                               
                if(!empty($post_id))
                    $msg = "Language Skill deleted successfully!";
                else
                    $msg = "Language Skill deletion failed! Please try again.";
                    

                $response = new WP_REST_Response( array('result' =>'success','Url'=>$url,'post_id'=>$post_id,'msg'=>$msg,'pos'=>$pos,) );
                    
            }      
        }
        else{
            $response = new WP_REST_Response( array('result' =>'fail','Url'=>$url) );
        }

    return $response;
}

// Edit Lang Skill


function editLangSkill( WP_REST_Request $request ) {
        
        $url = "UrL".$_SERVER['REQUEST_URI'];
        $data=$request['data'];
        if($data=='Resume'){
            $pos= (int)$request['pos'];
            $user_id = (int)$request['user_id'];

            // Check if user has portfolio or not
                $flag = '0';
                $port_post = array(
                                'meta_query' => array(
                                        array(
                                            'key' => 'user_id',
                                            'value' => $user_id
                                        )
                                    ),                              
                                'post_type'		=> 'portfolio_home',
                                'post_status'	=> 'publish'
                            ); 
                $posts          = get_posts($port_post);
                if(empty($posts)){
                    //$msg = "Zero posts returned";              
                }
                else{
                    $flag ='1';
                     $post_id        = $posts[0]->ID;
                }
            // User Has Portfolio
            if($flag =='1'){
                // select and send Tech Skill to edit
                $expJson = get_post_meta( $post_id, 'language_skills', true);
                $exp_array = json_decode($expJson,true);
               $index = 0;
                foreach($exp_array as $a){
                    if($a['pos']==$pos){
                        $pos = (int)$a['pos'];
                        $lang_skill_name = $a['langSkillName'];
                        $lang_skill_number = (int)$a['langSkillNumber'];
                        break;
                    }
                }
                               
                if(!empty($post_id))
                    $msg = "Language Skill edited successfully!";
                else
                    $msg = "Language Skill edit failed! Please try again.";
                    

                $response = new WP_REST_Response( array('result' =>'success','Url'=>$url,'post_id'=>$post_id,'msg'=>$msg,'pos'=>$pos,'langSkillName' => $lang_skill_name, 'langSkillNumber' => $lang_skill_number, ) );
                    
            }          
        }
        else{
            $response = new WP_REST_Response( array('result' =>'fail','Url'=>$url) );
        }       
    return $response;
}


// Update Lang Skill

function updateLangSkill( WP_REST_Request $request ) {
        
        $url = "UrL".$_SERVER['REQUEST_URI'];
        $data=$request['data'];
        if($data=='Resume'){
            $pos= (int)$request['pos'];
            $langSkillName= $request['langSkillName'];
            $langSkillNumber=$request['langSkillNumber'];
            $user_id = (int)$request['user_id'];

            // Check if user has portfolio or not
                $flag = '0';
                $port_post = array(
                                'meta_query' => array(
                                        array(
                                            'key' => 'user_id',
                                            'value' => $user_id
                                        )
                                    ),                                
                                'post_type'		=> 'portfolio_home',
                                'post_status'	=> 'publish'
                            ); 
                $posts          = get_posts($port_post);
                if(empty($posts)){
                    //$msg = "Zero posts returned";              
                }
                else{
                    $flag ='1';
                     $post_id        = $posts[0]->ID;
                }
            // User Has Portfolio
            if($flag =='1'){
                // update Tech Skill
                $expJson = get_post_meta( $post_id, 'language_skills', true);
                $exp_array = json_decode($expJson,true);
               $index = 0;
                foreach($exp_array as $a){
                    if($a['pos']==$pos){
                        $exp_array[$index]['langSkillName'] = $langSkillName;
                        $exp_array[$index]['langSkillNumber'] = $langSkillNumber;
                        break;
                    }

                    $index++;
                }

                $expJson = json_encode($exp_array);
                update_post_meta($post_id, 'language_skills',$expJson);
        
                               
                if(!empty($post_id))
                    $msg = "Language Skill updated successfully!";
                else
                    $msg = "Language Skill updation failed! Please try again.";
                    

                $response = new WP_REST_Response( array('result' =>'success','Url'=>$url,'post_id'=>$post_id,'msg'=>$msg,'pos'=>$pos,) );
                    
            }            
        }
        else{
            $response = new WP_REST_Response( array('result' =>'fail','Url'=>$url) );
        }    
    return $response;
}

// Language skills apis ends here ==============================================================================





// Other skills apis starts here=================================================================================


// Save New other Skill


function saveOtherSkill( WP_REST_Request $request ) {
        
        $url = "UrL".$_SERVER['REQUEST_URI'];
        $data=$request['data'];
        if($data=='Resume'){
            $otherSkillName= $request['otherSkillName'];
            $pos= $request['pos'];
            $otherSkillNumber=$request['otherSkillNumber'];
            $user_id = (int)$request['user_id'];

            // Check if user has portfolio or not
                $flag = '0';
                $port_post = array(
                                'meta_query' => array(
                                        array(
                                            'key' => 'user_id',
                                            'value' => $user_id
                                        )
                                    ),    
                                'post_type'		=> 'portfolio_home',
                                'post_status'	=> 'publish'
                            ); 
                
                $posts          = get_posts($port_post);
                if(empty($posts)){
                    //$msg = "Zero posts returned";              
                }
                else{
                    $flag ='1';
                     $post_id        = $posts[0]->ID;
                }

            // User Has Portfolio
            if($flag =='1'){

                // check if skill pos already exists then send message to change pos.
                $exists = '';
                $expJson = get_post_meta( $post_id, 'other_skills', true);
                $exp_array = json_decode($expJson,true);
                foreach($exp_array as $a){
                    if($a['pos']==$pos){
                        $exists = 'Y';
                    }
                }

                if($exists == 'Y'){
                    $msg = "Display position already exist. Please provide unique display position!";
                }
                else {
                        if(empty(get_post_meta( $post_id, 'other_skills', true))){
                        
                        $exp_array= array(
                            array('pos'=>$pos, 'otherSkillName' => $otherSkillName, 'otherSkillNumber' => $otherSkillNumber) ,             
                            );
                        $expJson = json_encode($exp_array);
                        update_post_meta($post_id, 'other_skills', $expJson);
                        }
                        else{
                            $expJson = get_post_meta( $post_id, 'other_skills', true);
                            $exp_array = json_decode($expJson,true);
                            $a = array('pos'=>$pos, 'otherSkillName' => $otherSkillName, 'otherSkillNumber' => $otherSkillNumber);
                            array_push($exp_array,$a);
                            $expJson = json_encode($exp_array);
                            update_post_meta($post_id, 'other_skills',$expJson);
                        }

                        if(!empty($post_id))
                            $msg = "New Other Skill added successfully!";
                        else
                            $msg = "Post updation failed! Please try again.";
                            
                    }
                               
                $response = new WP_REST_Response( array('result' =>'success','Url'=>$url,'post_id'=>$post_id,'msg'=>$msg, 'pos'=>$pos,'otherSkillName' => $otherSkillName, 'otherSkillNumber' => $otherSkillNumber ) );
                    
            }
        
        }
        else{
            $response = new WP_REST_Response( array('result' =>'fail','Url'=>$url) );
        }
    
    return $response;
}

// Display Other Skills


function displayOtherSkill( WP_REST_Request $request ) {
       
        $url = "UrL".$_SERVER['REQUEST_URI'];
        $data=$request['data'];
        if($data=='Resume'){
            $user_id = (int)$request['user_id'];

            // Check if user has portfolio or not
                $flag = '0';
                $port_post =  array(
                                'meta_query' => array(
                                        array(
                                            'key' => 'user_id',
                                            'value' => $user_id
                                        )
                                    ),                            
                                'post_type'		=> 'portfolio_home',
                                'post_status'	=> 'publish'
                            ); 
                $posts          = get_posts($port_post);
                if(empty($posts)){
                    //$msg = "Zero posts returned";              
                }
                else{
                    $flag ='1';
                     $post_id        = $posts[0]->ID;
                }
            // User Has Portfolio
            if($flag =='1'){
                $expJson = get_post_meta( $post_id, 'other_skills', true);
                $exp_array = json_decode($expJson,true);    
                    
                          
                if(!empty($post_id))
                    $msg = "Other Skills sent successfully!";
                else
                    $msg = "Can not send Language Skills! Please try again.";
                    

                $response = new WP_REST_Response( array('result' =>'success','Url'=>$url,'post_id'=>$post_id,'msg'=>$msg,'otherSkills'=>$exp_array ) );
                    
            }                      
        }
        else{
            $response = new WP_REST_Response( array('result' =>'fail','Url'=>$url) );
        }      
    return $response;

}


// Delete Other Skil
function deleteOtherSkill( WP_REST_Request $request ) {
        
        $url = "UrL".$_SERVER['REQUEST_URI'];
        $data=$request['data'];
        if($data=='Resume'){
            $pos= (int)$request['pos'];
            $user_id = (int)$request['user_id'];
            // Check if user has portfolio or not
                $flag = '0';
                $port_post = array(
                                'meta_query' => array(
                                        array(
                                            'key' => 'user_id',
                                            'value' => $user_id
                                        )
                                    ),                             
                                'post_type'		=> 'portfolio_home',
                                'post_status'	=> 'publish'
                            ); 
                $posts          = get_posts($port_post);
                if(empty($posts)){
                    //$msg = "Zero posts returned";              
                }
                else{
                    $flag ='1';
                     $post_id        = $posts[0]->ID;
                }
            // User Has Portfolio
            if($flag =='1'){
                // delete Tech Skill
                $expJson = get_post_meta( $post_id, 'other_skills', true);
                $exp_array = json_decode($expJson,true);
               $index = 0;
                foreach($exp_array as $a){
                    if($a['pos']==$pos){
                        array_splice($exp_array,$index,1);
                    }
                    $index = $index + 1;
                }

                $expJson = json_encode($exp_array);
                update_post_meta($post_id, 'other_skills',$expJson);
        
                               
                if(!empty($post_id))
                    $msg = "Other Skill deleted successfully!";
                else
                    $msg = "Other Skill deletion failed! Please try again.";
                    

                $response = new WP_REST_Response( array('result' =>'success','Url'=>$url,'post_id'=>$post_id,'msg'=>$msg,'pos'=>$pos,) );
                    
            }      
        }
        else{
            $response = new WP_REST_Response( array('result' =>'fail','Url'=>$url) );
        }

    return $response;
}

// Edit Other Skill


function editOtherSkill( WP_REST_Request $request ) {
        
        $url = "UrL".$_SERVER['REQUEST_URI'];
        $data=$request['data'];
        if($data=='Resume'){
            $pos= (int)$request['pos'];
            $user_id = (int)$request['user_id'];

            // Check if user has portfolio or not
                $flag = '0';
                $port_post = array(
                                'meta_query' => array(
                                        array(
                                            'key' => 'user_id',
                                            'value' => $user_id
                                        )
                                    ),                              
                                'post_type'		=> 'portfolio_home',
                                'post_status'	=> 'publish'
                            ); 
                $posts          = get_posts($port_post);
                if(empty($posts)){
                    //$msg = "Zero posts returned";              
                }
                else{
                    $flag ='1';
                     $post_id        = $posts[0]->ID;
                }
            // User Has Portfolio
            if($flag =='1'){
                // select and send Tech Skill to edit
                $expJson = get_post_meta( $post_id, 'other_skills', true);
                $exp_array = json_decode($expJson,true);
               $index = 0;
                foreach($exp_array as $a){
                    if($a['pos']==$pos){
                        $pos = (int)$a['pos'];
                        $other_skill_name = $a['otherSkillName'];
                        $other_skill_number = (int)$a['otherSkillNumber'];
                        break;
                    }
                }
                               
                if(!empty($post_id))
                    $msg = "Other Skill edited successfully!";
                else
                    $msg = "Other Skill edit failed! Please try again.";
                    

                $response = new WP_REST_Response( array('result' =>'success','Url'=>$url,'post_id'=>$post_id,'msg'=>$msg,'pos'=>$pos,'otherSkillName' => $other_skill_name, 'otherSkillNumber' => $other_skill_number, ) );
                    
            }          
        }
        else{
            $response = new WP_REST_Response( array('result' =>'fail','Url'=>$url) );
        }       
    return $response;
}


// Update Other Skill

function updateOtherSkill( WP_REST_Request $request ) {
        
        $url = "UrL".$_SERVER['REQUEST_URI'];
        $data=$request['data'];
        if($data=='Resume'){
            $pos= (int)$request['pos'];
            $otherSkillName= $request['otherSkillName'];
            $otherSkillNumber=$request['otherSkillNumber'];
            $user_id = (int)$request['user_id'];

            // Check if user has portfolio or not
                $flag = '0';
                $port_post = array(
                                'meta_query' => array(
                                        array(
                                            'key' => 'user_id',
                                            'value' => $user_id
                                        )
                                    ),                                
                                'post_type'		=> 'portfolio_home',
                                'post_status'	=> 'publish'
                            ); 
                $posts          = get_posts($port_post);
                if(empty($posts)){
                    //$msg = "Zero posts returned";              
                }
                else{
                    $flag ='1';
                     $post_id        = $posts[0]->ID;
                }
            // User Has Portfolio
            if($flag =='1'){
                // update Tech Skill
                $expJson = get_post_meta( $post_id, 'other_skills', true);
                $exp_array = json_decode($expJson,true);
               $index = 0;
                foreach($exp_array as $a){
                    if($a['pos']==$pos){
                        $exp_array[$index]['otherSkillName'] = $otherSkillName;
                        $exp_array[$index]['otherSkillNumber'] = $otherSkillNumber;
                        break;
                    }

                    $index++;
                }

                $expJson = json_encode($exp_array);
                update_post_meta($post_id, 'other_skills',$expJson);
        
                               
                if(!empty($post_id))
                    $msg = "Other Skill updated successfully!";
                else
                    $msg = "Other Skill updation failed! Please try again.";
                    

                $response = new WP_REST_Response( array('result' =>'success','Url'=>$url,'post_id'=>$post_id,'msg'=>$msg,'pos'=>$pos,) );
                    
            }            
        }
        else{
            $response = new WP_REST_Response( array('result' =>'fail','Url'=>$url) );
        }    
    return $response;
}

// Other skills apis ends here ========================================================================================


// Education Apis starts here

function saveEdu( WP_REST_Request $request ) {
        
        $url = "UrL".$_SERVER['REQUEST_URI'];
        $data=$request['data'];
        if($data=='Resume'){
            $pos= (int)$request['pos'];
            $eduTitle= $request['eduTitle'];
            $eduPlace= $request['eduPlace'];
            $eduLocation= $request['eduLocation'];
            $eduDuration= $request['eduDuration'];
            $user_id = (int)$request['user_id'];

            // Check if user has portfolio or not
                $flag = '0';
                $port_post = array(
                                'meta_query' => array(
                                        array(
                                            'key' => 'user_id',
                                            'value' => $user_id
                                        )
                                    ),    
                                'post_type'		=> 'portfolio_home',
                                'post_status'	=> 'publish'
                            ); 
                
                $posts          = get_posts($port_post);
                if(empty($posts)){
                    //$msg = "Zero posts returned";              
                }
                else{
                    $flag ='1';
                     $post_id        = $posts[0]->ID;
                }

            // User Has Portfolio
            if($flag =='1'){

                // check if skill pos already exists then send message to change pos.
                $exists = '';
                $expJson = get_post_meta( $post_id, 'education', true);
                $exp_array = json_decode($expJson,true);
                foreach($exp_array as $a){
                    if($a['pos']==$pos){
                        $exists = 'Y';
                    }
                }

                if($exists == 'Y'){
                    $msg = "Display position already exist. Please provide unique display position!";
                }
                else {
                        if(empty(get_post_meta( $post_id, 'education', true))){
                        
                        $exp_array= array(
                            array('pos'=>$pos, 'eduTitle' => $eduTitle,'eduPlace' => $eduPlace,'eduLocation' => $eduLocation,'eduDuration' => $eduDuration,) ,             
                            );
                        $expJson = json_encode($exp_array);
                        update_post_meta($post_id, 'education', $expJson);
                        }
                        else{
                            $expJson = get_post_meta( $post_id, 'education', true);
                            $exp_array = json_decode($expJson,true);
                            $a = array('pos'=>$pos, 'eduTitle' => $eduTitle,'eduPlace' => $eduPlace,'eduLocation' => $eduLocation,'eduDuration' => $eduDuration,);
                            array_push($exp_array,$a);
                            $expJson = json_encode($exp_array);
                            update_post_meta($post_id, 'education',$expJson);
                        }

                        if(!empty($post_id))
                            $msg = "New Education added successfully!";
                        else
                            $msg = "Post updation failed! Please try again.";
                            
                    }
                               
                $response = new WP_REST_Response( array('result' =>'success','Url'=>$url,'post_id'=>$post_id,'msg'=>$msg, 'pos'=>$pos,'eduTitle' => $eduTitle,'eduPlace' => $eduPlace,'eduLocation' => $eduLocation,'eduDuration' => $eduDuration ) );
                    
            }
        
        }
        else{
            $response = new WP_REST_Response( array('result' =>'fail','Url'=>$url) );
        }
    
    return $response;
}

// Display Education


function displayEdu( WP_REST_Request $request ) {
       
        $url = "UrL".$_SERVER['REQUEST_URI'];
        $data=$request['data'];
        if($data=='Resume'){
            $user_id = (int)$request['user_id'];

            // Check if user has portfolio or not
                $flag = '0';
                $port_post =  array(
                                'meta_query' => array(
                                        array(
                                            'key' => 'user_id',
                                            'value' => $user_id
                                        )
                                    ),                            
                                'post_type'		=> 'portfolio_home',
                                'post_status'	=> 'publish'
                            ); 
                $posts          = get_posts($port_post);
                if(empty($posts)){
                    //$msg = "Zero posts returned";              
                }
                else{
                    $flag ='1';
                     $post_id        = $posts[0]->ID;
                }
            // User Has Portfolio
            if($flag =='1'){
                $expJson = get_post_meta( $post_id, 'education', true);
                $exp_array = json_decode($expJson,true);    
                    
                          
                if(!empty($post_id))
                    $msg = "Education sent successfully!";
                else
                    $msg = "Can not send Education! Please try again.";
                    

                $response = new WP_REST_Response( array('result' =>'success','Url'=>$url,'post_id'=>$post_id,'msg'=>$msg,'edu'=>$exp_array ) );
                    
            }                      
        }
        else{
            $response = new WP_REST_Response( array('result' =>'fail','Url'=>$url) );
        }      
    return $response;

}


// Delete Education
function deleteEdu( WP_REST_Request $request ) {
        
        $url = "UrL".$_SERVER['REQUEST_URI'];
        $data=$request['data'];
        if($data=='Resume'){
            $pos= (int)$request['pos'];
            $user_id = (int)$request['user_id'];
            // Check if user has portfolio or not
                $flag = '0';
                $port_post = array(
                                'meta_query' => array(
                                        array(
                                            'key' => 'user_id',
                                            'value' => $user_id
                                        )
                                    ),                             
                                'post_type'		=> 'portfolio_home',
                                'post_status'	=> 'publish'
                            ); 
                $posts          = get_posts($port_post);
                if(empty($posts)){
                    //$msg = "Zero posts returned";              
                }
                else{
                    $flag ='1';
                     $post_id        = $posts[0]->ID;
                }
            // User Has Portfolio
            if($flag =='1'){
                // delete Tech Skill
                $expJson = get_post_meta( $post_id, 'education', true);
                $exp_array = json_decode($expJson,true);
               $index = 0;
                foreach($exp_array as $a){
                    if($a['pos']==$pos){
                        array_splice($exp_array,$index,1);
                    }
                    $index = $index + 1;
                }

                $expJson = json_encode($exp_array);
                update_post_meta($post_id, 'education',$expJson);
        
                               
                if(!empty($post_id))
                    $msg = "Education deleted successfully!";
                else
                    $msg = "Education deletion failed! Please try again.";
                    

                $response = new WP_REST_Response( array('result' =>'success','Url'=>$url,'post_id'=>$post_id,'msg'=>$msg,'pos'=>$pos,) );
                    
            }      
        }
        else{
            $response = new WP_REST_Response( array('result' =>'fail','Url'=>$url) );
        }

    return $response;
}

// Edit Education


function editEdu( WP_REST_Request $request ) {
        
        $url = "UrL".$_SERVER['REQUEST_URI'];
        $data=$request['data'];
        if($data=='Resume'){
            $pos= (int)$request['pos'];
            $user_id = (int)$request['user_id'];

            // Check if user has portfolio or not
                $flag = '0';
                $port_post = array(
                                'meta_query' => array(
                                        array(
                                            'key' => 'user_id',
                                            'value' => $user_id
                                        )
                                    ),                              
                                'post_type'		=> 'portfolio_home',
                                'post_status'	=> 'publish'
                            ); 
                $posts          = get_posts($port_post);
                if(empty($posts)){
                    //$msg = "Zero posts returned";              
                }
                else{
                    $flag ='1';
                     $post_id        = $posts[0]->ID;
                }
            // User Has Portfolio
            if($flag =='1'){
                // select and send Tech Skill to edit
                $expJson = get_post_meta( $post_id, 'education', true);
                $exp_array = json_decode($expJson,true);
               $index = 0;
                foreach($exp_array as $a){
                    if($a['pos']==$pos){
                        $pos = (int)$a['pos'];
                        $eduTitle = $a['eduTitle'];
                        $eduPlace = $a['eduPlace'];
                        $eduLocation = $a['eduLocation'];
                        $eduDuration = $a['eduDuration'];
                        break;
                    }
                }
                               
                if(!empty($post_id))
                    $msg = "Education edited successfully!";
                else
                    $msg = "Education edit failed! Please try again.";
                    

                $response = new WP_REST_Response( array('result' =>'success','Url'=>$url,'post_id'=>$post_id,'msg'=>$msg,'pos'=>$pos,'eduTitle' => $eduTitle,'eduPlace' => $eduPlace,'eduLocation' => $eduLocation,'eduDuration' => $eduDuration  ) );
                    
            }          
        }
        else{
            $response = new WP_REST_Response( array('result' =>'fail','Url'=>$url) );
        }       
    return $response;
}


// Update Education

function updateEdu( WP_REST_Request $request ) {
        
        $url = "UrL".$_SERVER['REQUEST_URI'];
        $data=$request['data'];
        if($data=='Resume'){
            $pos= (int)$request['pos'];
            $eduTitle= $request['eduTitle'];
            $eduPlace= $request['eduPlace'];
            $eduLocation= $request['eduLocation'];
            $eduDuration= $request['eduDuration'];
            $user_id = (int)$request['user_id'];

            // Check if user has portfolio or not
                $flag = '0';
                $port_post = array(
                                'meta_query' => array(
                                        array(
                                            'key' => 'user_id',
                                            'value' => $user_id
                                        )
                                    ),                                
                                'post_type'		=> 'portfolio_home',
                                'post_status'	=> 'publish'
                            ); 
                $posts          = get_posts($port_post);
                if(empty($posts)){
                    //$msg = "Zero posts returned";              
                }
                else{
                    $flag ='1';
                     $post_id        = $posts[0]->ID;
                }
            // User Has Portfolio
            if($flag =='1'){
                // update Tech Skill
                $expJson = get_post_meta( $post_id, 'education', true);
                $exp_array = json_decode($expJson,true);
               $index = 0;
                foreach($exp_array as $a){
                    if($a['pos']==$pos){
                        $exp_array[$index]['eduTitle'] = $eduTitle;
                        $exp_array[$index]['eduPlace'] = $eduPlace;
                        $exp_array[$index]['eduLocation'] = $eduLocation;
                        $exp_array[$index]['eduDuration'] = $eduDuration;
                        break;
                    }

                    $index++;
                }

                $expJson = json_encode($exp_array);
                update_post_meta($post_id, 'education',$expJson);
        
                               
                if(!empty($post_id))
                    $msg = "Education updated successfully!";
                else
                    $msg = "Education updation failed! Please try again.";
                    

                $response = new WP_REST_Response( array('result' =>'success','Url'=>$url,'post_id'=>$post_id,'msg'=>$msg,'pos'=>$pos,) );
                    
            }            
        }
        else{
            $response = new WP_REST_Response( array('result' =>'fail','Url'=>$url) );
        }    
    return $response;
}

// Education apis ends here ========================================================================================



// Achievments Apis starts here

function saveAch( WP_REST_Request $request ) {
        
        $url = "UrL".$_SERVER['REQUEST_URI'];
        $data=$request['data'];
        if($data=='Resume'){
            $pos= (int)$request['pos'];
            $achTitle= $request['achTitle'];
            $achDescr= $request['achDescr'];
            $user_id = (int)$request['user_id'];

            // Check if user has portfolio or not
                $flag = '0';
                $port_post = array(
                                'meta_query' => array(
                                        array(
                                            'key' => 'user_id',
                                            'value' => $user_id
                                        )
                                    ),    
                                'post_type'		=> 'portfolio_home',
                                'post_status'	=> 'publish'
                            ); 
                
                $posts          = get_posts($port_post);
                if(empty($posts)){
                    //$msg = "Zero posts returned";              
                }
                else{
                    $flag ='1';
                     $post_id        = $posts[0]->ID;
                }

            // User Has Portfolio
            if($flag =='1'){

                // check if skill pos already exists then send message to change pos.
                $exists = '';
                $expJson = get_post_meta( $post_id, 'achievments', true);
                $exp_array = json_decode($expJson,true);
                foreach($exp_array as $a){
                    if($a['pos']==$pos){
                        $exists = 'Y';
                    }
                }

                if($exists == 'Y'){
                    $msg = "Display position already exist. Please provide unique display position!";
                }
                else {
                        if(empty(get_post_meta( $post_id, 'achievments', true))){
                        
                        $exp_array= array(
                            array('pos'=>$pos, 'achTitle' => $achTitle, 'achDescr' => $achDescr,) ,             
                            );
                        $expJson = json_encode($exp_array);
                        update_post_meta($post_id, 'achievments', $expJson);
                        }
                        else{
                            $expJson = get_post_meta( $post_id, 'achievments', true);
                            $exp_array = json_decode($expJson,true);
                            $a = array('pos'=>$pos, 'achTitle' => $achTitle, 'achDescr' => $achDescr,);
                            array_push($exp_array,$a);
                            $expJson = json_encode($exp_array);
                            update_post_meta($post_id, 'achievments',$expJson);
                        }

                        if(!empty($post_id))
                            $msg = "New achievment added successfully!";
                        else
                            $msg = "Post updation failed! Please try again.";
                            
                    }
                               
                $response = new WP_REST_Response( array('result' =>'success','Url'=>$url,'post_id'=>$post_id,'msg'=>$msg, 'pos'=>$pos,'achTitle' => $achTitle, 'achDescr' => $achDescr,) );
                    
            }
        
        }
        else{
            $response = new WP_REST_Response( array('result' =>'fail','Url'=>$url) );
        }
    
    return $response;
}

// Display Achievments


function displayAch( WP_REST_Request $request ) {
       
        $url = "UrL".$_SERVER['REQUEST_URI'];
        $data=$request['data'];
        if($data=='Resume'){
            $user_id = (int)$request['user_id'];

            // Check if user has portfolio or not
                $flag = '0';
                $port_post =  array(
                                'meta_query' => array(
                                        array(
                                            'key' => 'user_id',
                                            'value' => $user_id
                                        )
                                    ),                            
                                'post_type'		=> 'portfolio_home',
                                'post_status'	=> 'publish'
                            ); 
                $posts          = get_posts($port_post);
                if(empty($posts)){
                    //$msg = "Zero posts returned";              
                }
                else{
                    $flag ='1';
                     $post_id        = $posts[0]->ID;
                }
            // User Has Portfolio
            if($flag =='1'){
                $expJson = get_post_meta( $post_id, 'achievments', true);
                $exp_array = json_decode($expJson,true);    
                    
                          
                if(!empty($post_id))
                    $msg = "Achievments sent successfully!";
                else
                    $msg = "Can not send achievment! Please try again.";
                    

                $response = new WP_REST_Response( array('result' =>'success','Url'=>$url,'post_id'=>$post_id,'msg'=>$msg,'ach'=>$exp_array ) );
                    
            }                      
        }
        else{
            $response = new WP_REST_Response( array('result' =>'fail','Url'=>$url) );
        }      
    return $response;

}


// Delete Achievments
function deleteAch( WP_REST_Request $request ) {
        
        $url = "UrL".$_SERVER['REQUEST_URI'];
        $data=$request['data'];
        if($data=='Resume'){
            $pos= (int)$request['pos'];
            $user_id = (int)$request['user_id'];
            // Check if user has portfolio or not
                $flag = '0';
                $port_post = array(
                                'meta_query' => array(
                                        array(
                                            'key' => 'user_id',
                                            'value' => $user_id
                                        )
                                    ),                             
                                'post_type'		=> 'portfolio_home',
                                'post_status'	=> 'publish'
                            ); 
                $posts          = get_posts($port_post);
                if(empty($posts)){
                    //$msg = "Zero posts returned";              
                }
                else{
                    $flag ='1';
                     $post_id        = $posts[0]->ID;
                }
            // User Has Portfolio
            if($flag =='1'){
                // delete Tech Skill
                $expJson = get_post_meta( $post_id, 'achievments', true);
                $exp_array = json_decode($expJson,true);
               $index = 0;
                foreach($exp_array as $a){
                    if($a['pos']==$pos){
                        array_splice($exp_array,$index,1);
                    }
                    $index = $index + 1;
                }

                $expJson = json_encode($exp_array);
                update_post_meta($post_id, 'achievments',$expJson);
        
                               
                if(!empty($post_id))
                    $msg = "Achievment deleted successfully!";
                else
                    $msg = "Achievment deletion failed! Please try again.";
                    

                $response = new WP_REST_Response( array('result' =>'success','Url'=>$url,'post_id'=>$post_id,'msg'=>$msg,'pos'=>$pos,) );
                    
            }      
        }
        else{
            $response = new WP_REST_Response( array('result' =>'fail','Url'=>$url) );
        }

    return $response;
}

// Edit Achievments


function editAch( WP_REST_Request $request ) {
        
        $url = "UrL".$_SERVER['REQUEST_URI'];
        $data=$request['data'];
        if($data=='Resume'){
            $pos= (int)$request['pos'];
            $user_id = (int)$request['user_id'];

            // Check if user has portfolio or not
                $flag = '0';
                $port_post = array(
                                'meta_query' => array(
                                        array(
                                            'key' => 'user_id',
                                            'value' => $user_id
                                        )
                                    ),                              
                                'post_type'		=> 'portfolio_home',
                                'post_status'	=> 'publish'
                            ); 
                $posts          = get_posts($port_post);
                if(empty($posts)){
                    //$msg = "Zero posts returned";              
                }
                else{
                    $flag ='1';
                     $post_id        = $posts[0]->ID;
                }
            // User Has Portfolio
            if($flag =='1'){
                // select and send Tech Skill to edit
                $expJson = get_post_meta( $post_id, 'achievments', true);
                $exp_array = json_decode($expJson,true);
               $index = 0;
                foreach($exp_array as $a){
                    if($a['pos']==$pos){
                        $pos = (int)$a['pos'];
                        $achTitle = $a['achTitle'];
                        $achDescr = $a['achDescr'];
                        
                        break;
                    }
                }
                               
                if(!empty($post_id))
                    $msg = "Achievment edited successfully!";
                else
                    $msg = "Achievment edit failed! Please try again.";
                    

                $response = new WP_REST_Response( array('result' =>'success','Url'=>$url,'post_id'=>$post_id,'msg'=>$msg,'pos'=>$pos,'achTitle' => $achTitle, 'achDescr' => $achDescr, ) );
                    
            }          
        }
        else{
            $response = new WP_REST_Response( array('result' =>'fail','Url'=>$url) );
        }       
    return $response;
}


// Update Achievments

function updateAch( WP_REST_Request $request ) {
        
        $url = "UrL".$_SERVER['REQUEST_URI'];
        $data=$request['data'];
        if($data=='Resume'){
            $pos= (int)$request['pos'];
            $achTitle= $request['achTitle'];
            $achDescr= $request['achDescr'];
            $user_id = (int)$request['user_id'];

            // Check if user has portfolio or not
                $flag = '0';
                $port_post = array(
                                'meta_query' => array(
                                        array(
                                            'key' => 'user_id',
                                            'value' => $user_id
                                        )
                                    ),                                
                                'post_type'		=> 'portfolio_home',
                                'post_status'	=> 'publish'
                            ); 
                $posts          = get_posts($port_post);
                if(empty($posts)){
                    //$msg = "Zero posts returned";              
                }
                else{
                    $flag ='1';
                     $post_id        = $posts[0]->ID;
                }
            // User Has Portfolio
            if($flag =='1'){
                // update Tech Skill
                $expJson = get_post_meta( $post_id, 'achievments', true);
                $exp_array = json_decode($expJson,true);
               $index = 0;
                foreach($exp_array as $a){
                    if($a['pos']==$pos){
                        $exp_array[$index]['achTitle'] = $achTitle;
                        $exp_array[$index]['achDescr'] = $achDescr;
                        
                        break;
                    }

                    $index++;
                }

                $expJson = json_encode($exp_array);
                update_post_meta($post_id, 'achievments',$expJson);
        
                               
                if(!empty($post_id))
                    $msg = "Achievment updated successfully!";
                else
                    $msg = "Achievment updation failed! Please try again.";
                    

                $response = new WP_REST_Response( array('result' =>'success','Url'=>$url,'post_id'=>$post_id,'msg'=>$msg,'pos'=>$pos,) );
                    
            }            
        }
        else{
            $response = new WP_REST_Response( array('result' =>'fail','Url'=>$url) );
        }    
    return $response;
}

// Achievements apis ends here ========================================================================================



// Testimonials Apis starts here

function saveTest( WP_REST_Request $request ) {
        
        $url = "UrL".$_SERVER['REQUEST_URI'];
        $data=$request['data'];
        if($data=='Resume'){
            $pos= (int)$request['pos'];
            $testBy= $request['testBy'];
            $testDes= $request['testDes'];
            $testDescr= $request['testDescr'];
            $user_id = (int)$request['user_id'];

            // Check if user has portfolio or not
                $flag = '0';
                $port_post = array(
                                'meta_query' => array(
                                        array(
                                            'key' => 'user_id',
                                            'value' => $user_id
                                        )
                                    ),    
                                'post_type'		=> 'portfolio_home',
                                'post_status'	=> 'publish'
                            ); 
                
                $posts          = get_posts($port_post);
                if(empty($posts)){
                    //$msg = "Zero posts returned";              
                }
                else{
                    $flag ='1';
                     $post_id        = $posts[0]->ID;
                }

            // User Has Portfolio
            if($flag =='1'){

                // check if skill pos already exists then send message to change pos.
                $exists = '';
                $expJson = get_post_meta( $post_id, 'testimonials', true);
                $exp_array = json_decode($expJson,true);
                foreach($exp_array as $a){
                    if($a['pos']==$pos){
                        $exists = 'Y';
                    }
                }

                if($exists == 'Y'){
                    $msg = "Display position already exist. Please provide unique display position!";
                }
                else {
                        if(empty(get_post_meta( $post_id, 'testimonials', true))){
                        
                        $exp_array= array(
                            array('pos'=>$pos, 'testBy' => $testBy, 'testDes' => $testDes,'testDescr' => $testDescr) ,             
                            );
                        $expJson = json_encode($exp_array);
                        update_post_meta($post_id, 'testimonials', $expJson);
                        }
                        else{
                            $expJson = get_post_meta( $post_id, 'testimonials', true);
                            $exp_array = json_decode($expJson,true);
                            $a = array('pos'=>$pos, 'testBy' => $testBy, 'testDes' => $testDes,'testDescr' => $testDescr);
                            array_push($exp_array,$a);
                            $expJson = json_encode($exp_array);
                            update_post_meta($post_id, 'testimonials',$expJson);
                        }

                        if(!empty($post_id))
                            $msg = "New testimonial added successfully!";
                        else
                            $msg = "Post updation failed! Please try again.";
                            
                    }
                               
                $response = new WP_REST_Response( array('result' =>'success','Url'=>$url,'post_id'=>$post_id,'msg'=>$msg, 'pos'=>$pos,'testBy' => $testBy, 'testDes' => $testDes,'testDescr' => $testDescr) );
                    
            }
        
        }
        else{
            $response = new WP_REST_Response( array('result' =>'fail','Url'=>$url) );
        }
    
    return $response;
}

// Display Testimonials


function displayTest( WP_REST_Request $request ) {
       
        $url = "UrL".$_SERVER['REQUEST_URI'];
        $data=$request['data'];
        if($data=='Resume'){
            $user_id = (int)$request['user_id'];

            // Check if user has portfolio or not
                $flag = '0';
                $port_post =  array(
                                'meta_query' => array(
                                        array(
                                            'key' => 'user_id',
                                            'value' => $user_id
                                        )
                                    ),                            
                                'post_type'		=> 'portfolio_home',
                                'post_status'	=> 'publish'
                            ); 
                $posts          = get_posts($port_post);
                if(empty($posts)){
                    //$msg = "Zero posts returned";              
                }
                else{
                    $flag ='1';
                     $post_id        = $posts[0]->ID;
                }
            // User Has Portfolio
            if($flag =='1'){
                $expJson = get_post_meta( $post_id, 'testimonials', true);
                $exp_array = json_decode($expJson,true);    
                    
                          
                if(!empty($post_id))
                    $msg = "Testimonial sent successfully!";
                else
                    $msg = "Can not send testimonial! Please try again.";
                    

                $response = new WP_REST_Response( array('result' =>'success','Url'=>$url,'post_id'=>$post_id,'msg'=>$msg,'test'=>$exp_array ) );
                    
            }                      
        }
        else{
            $response = new WP_REST_Response( array('result' =>'fail','Url'=>$url) );
        }      
    return $response;

}


// Delete Testimonials
function deleteTest( WP_REST_Request $request ) {
        
        $url = "UrL".$_SERVER['REQUEST_URI'];
        $data=$request['data'];
        if($data=='Resume'){
            $pos= (int)$request['pos'];
            $user_id = (int)$request['user_id'];
            // Check if user has portfolio or not
                $flag = '0';
                $port_post = array(
                                'meta_query' => array(
                                        array(
                                            'key' => 'user_id',
                                            'value' => $user_id
                                        )
                                    ),                             
                                'post_type'		=> 'portfolio_home',
                                'post_status'	=> 'publish'
                            ); 
                $posts          = get_posts($port_post);
                if(empty($posts)){
                    //$msg = "Zero posts returned";              
                }
                else{
                    $flag ='1';
                     $post_id        = $posts[0]->ID;
                }
            // User Has Portfolio
            if($flag =='1'){
                // delete Tech Skill
                $expJson = get_post_meta( $post_id, 'testimonials', true);
                $exp_array = json_decode($expJson,true);
               $index = 0;
                foreach($exp_array as $a){
                    if($a['pos']==$pos){
                        array_splice($exp_array,$index,1);
                    }
                    $index = $index + 1;
                }

                $expJson = json_encode($exp_array);
                update_post_meta($post_id, 'testimonials',$expJson);
        
                               
                if(!empty($post_id))
                    $msg = "Testimonial deleted successfully!";
                else
                    $msg = "Testimonial deletion failed! Please try again.";
                    

                $response = new WP_REST_Response( array('result' =>'success','Url'=>$url,'post_id'=>$post_id,'msg'=>$msg,'pos'=>$pos,) );
                    
            }      
        }
        else{
            $response = new WP_REST_Response( array('result' =>'fail','Url'=>$url) );
        }

    return $response;
}

// Edit Testimonials


function editTest( WP_REST_Request $request ) {
        
        $url = "UrL".$_SERVER['REQUEST_URI'];
        $data=$request['data'];
        if($data=='Resume'){
            $pos= (int)$request['pos'];
            $user_id = (int)$request['user_id'];

            // Check if user has portfolio or not
                $flag = '0';
                $port_post = array(
                                'meta_query' => array(
                                        array(
                                            'key' => 'user_id',
                                            'value' => $user_id
                                        )
                                    ),                              
                                'post_type'		=> 'portfolio_home',
                                'post_status'	=> 'publish'
                            ); 
                $posts          = get_posts($port_post);
                if(empty($posts)){
                    //$msg = "Zero posts returned";              
                }
                else{
                    $flag ='1';
                     $post_id        = $posts[0]->ID;
                }
            // User Has Portfolio
            if($flag =='1'){
                // select and send Tech Skill to edit
                $expJson = get_post_meta( $post_id, 'testimonials', true);
                $exp_array = json_decode($expJson,true);
               $index = 0;
                foreach($exp_array as $a){
                    if($a['pos']==$pos){
                        $pos = (int)$a['pos'];
                        $testBy = $a['testBy'];
                        $testDes = $a['testDes'];
                        $testDescr = $a['testDescr'];
                        
                        break;
                    }
                }
                               
                if(!empty($post_id))
                    $msg = "Testimonial edited successfully!";
                else
                    $msg = "Testimonial edit failed! Please try again.";
                    

                $response = new WP_REST_Response( array('result' =>'success','Url'=>$url,'post_id'=>$post_id,'msg'=>$msg,'pos'=>$pos,'testBy' => $testBy, 'testDes' => $testDes,'testDescr' => $testDescr ) );
                    
            }          
        }
        else{
            $response = new WP_REST_Response( array('result' =>'fail','Url'=>$url) );
        }       
    return $response;
}


// Update Testimonials

function updateTest( WP_REST_Request $request ) {
        
        $url = "UrL".$_SERVER['REQUEST_URI'];
        $data=$request['data'];
        if($data=='Resume'){
            $pos= (int)$request['pos'];
            $testBy= $request['testBy'];
            $testDes= $request['testDes'];
            $testDescr= $request['testDescr'];
            $user_id = (int)$request['user_id'];

            // Check if user has portfolio or not
                $flag = '0';
                $port_post = array(
                                'meta_query' => array(
                                        array(
                                            'key' => 'user_id',
                                            'value' => $user_id
                                        )
                                    ),                                
                                'post_type'		=> 'portfolio_home',
                                'post_status'	=> 'publish'
                            ); 
                $posts          = get_posts($port_post);
                if(empty($posts)){
                    //$msg = "Zero posts returned";              
                }
                else{
                    $flag ='1';
                     $post_id        = $posts[0]->ID;
                }
            // User Has Portfolio
            if($flag =='1'){
                // update Tech Skill
                $expJson = get_post_meta( $post_id, 'testimonials', true);
                $exp_array = json_decode($expJson,true);
               $index = 0;
                foreach($exp_array as $a){
                    if($a['pos']==$pos){
                        $exp_array[$index]['testBy'] = $testBy;
                        $exp_array[$index]['testDes'] = $testDes;
                        $exp_array[$index]['testDescr'] = $testDescr;
                        break;
                    }

                    $index++;
                }

                $expJson = json_encode($exp_array);
                update_post_meta($post_id, 'testimonials',$expJson);
        
                               
                if(!empty($post_id))
                    $msg = "Testimonial updated successfully!";
                else
                    $msg = "Testimonial updation failed! Please try again.";
                    

                $response = new WP_REST_Response( array('result' =>'success','Url'=>$url,'post_id'=>$post_id,'msg'=>$msg,'pos'=>$pos,) );
                    
            }            
        }
        else{
            $response = new WP_REST_Response( array('result' =>'fail','Url'=>$url) );
        }    
    return $response;
}

// Testimonials apis ends here ========================================================================================


// Services Apis starts here ==========================================================================================

function saveService( WP_REST_Request $request ) {
        
        $url = "UrL".$_SERVER['REQUEST_URI'];
        $data=$request['data'];
        if($data=='Resume'){
            $pos= (int)$request['pos'];
            $serviceTitle= $request['serviceTitle'];
            $serviceDescr= $request['serviceDescr'];
            $user_id = (int)$request['user_id'];

            // Check if user has portfolio or not
                $flag = '0';
                $port_post = array(
                                'meta_query' => array(
                                        array(
                                            'key' => 'user_id',
                                            'value' => $user_id
                                        )
                                    ),    
                                'post_type'		=> 'portfolio_home',
                                'post_status'	=> 'publish'
                            ); 
                
                $posts          = get_posts($port_post);
                if(empty($posts)){
                    //$msg = "Zero posts returned";              
                }
                else{
                    $flag ='1';
                     $post_id        = $posts[0]->ID;
                }

            // User Has Portfolio
            if($flag =='1'){

                // check if skill pos already exists then send message to change pos.
                $exists = '';
                $expJson = get_post_meta( $post_id, 'services', true);
                $exp_array = json_decode($expJson,true);
                foreach($exp_array as $a){
                    if($a['pos']==$pos){
                        $exists = 'Y';
                    }
                }

                if($exists == 'Y'){
                    $msg = "Display position already exist. Please provide unique display position!";
                }
                else {
                        if(empty(get_post_meta( $post_id, 'services', true))){
                        
                        $exp_array= array(
                            array('pos'=>$pos, 'serviceTitle' => $serviceTitle, 'serviceDescr' => $serviceDescr,) ,             
                            );
                        $expJson = json_encode($exp_array);
                        update_post_meta($post_id, 'services', $expJson);
                        }
                        else{
                            $expJson = get_post_meta( $post_id, 'services', true);
                            $exp_array = json_decode($expJson,true);
                            $a = array('pos'=>$pos, 'serviceTitle' => $serviceTitle, 'serviceDescr' => $serviceDescr,);
                            array_push($exp_array,$a);
                            $expJson = json_encode($exp_array);
                            update_post_meta($post_id, 'services',$expJson);
                        }

                        if(!empty($post_id))
                            $msg = "New service added successfully!";
                        else
                            $msg = "Post updation failed! Please try again.";
                            
                    }
                               
                $response = new WP_REST_Response( array('result' =>'success','Url'=>$url,'post_id'=>$post_id,'msg'=>$msg, 'pos'=>$pos,'serviceTitle' => $serviceTitle, 'serviceDescr' => $serviceDescr) );
                    
            }
        
        }
        else{
            $response = new WP_REST_Response( array('result' =>'fail','Url'=>$url) );
        }
    
    return $response;
}

// Display Services


function displayService( WP_REST_Request $request ) {
       
        $url = "UrL".$_SERVER['REQUEST_URI'];
        $data=$request['data'];
        if($data=='Resume'){
            $user_id = (int)$request['user_id'];

            // Check if user has portfolio or not
                $flag = '0';
                $port_post =  array(
                                'meta_query' => array(
                                        array(
                                            'key' => 'user_id',
                                            'value' => $user_id
                                        )
                                    ),                            
                                'post_type'		=> 'portfolio_home',
                                'post_status'	=> 'publish'
                            ); 
                $posts          = get_posts($port_post);
                if(empty($posts)){
                    //$msg = "Zero posts returned";              
                }
                else{
                    $flag ='1';
                     $post_id        = $posts[0]->ID;
                }
            // User Has Portfolio
            if($flag =='1'){
                $expJson = get_post_meta( $post_id, 'services', true);
                $exp_array = json_decode($expJson,true);    
                    
                          
                if(!empty($post_id))
                    $msg = "Service sent successfully!";
                else
                    $msg = "Can not send testimonial! Please try again.";
                    

                $response = new WP_REST_Response( array('result' =>'success','Url'=>$url,'post_id'=>$post_id,'msg'=>$msg,'services'=>$exp_array ) );
                    
            }                      
        }
        else{
            $response = new WP_REST_Response( array('result' =>'fail','Url'=>$url) );
        }      
    return $response;

}


// Delete Services
function deleteService( WP_REST_Request $request ) {
        
        $url = "UrL".$_SERVER['REQUEST_URI'];
        $data=$request['data'];
        if($data=='Resume'){
            $pos= (int)$request['pos'];
            $user_id = (int)$request['user_id'];
            // Check if user has portfolio or not
                $flag = '0';
                $port_post = array(
                                'meta_query' => array(
                                        array(
                                            'key' => 'user_id',
                                            'value' => $user_id
                                        )
                                    ),                             
                                'post_type'		=> 'portfolio_home',
                                'post_status'	=> 'publish'
                            ); 
                $posts          = get_posts($port_post);
                if(empty($posts)){
                    //$msg = "Zero posts returned";              
                }
                else{
                    $flag ='1';
                     $post_id        = $posts[0]->ID;
                }
            // User Has Portfolio
            if($flag =='1'){
                // delete Tech Skill
                $expJson = get_post_meta( $post_id, 'services', true);
                $exp_array = json_decode($expJson,true);
               $index = 0;
                foreach($exp_array as $a){
                    if($a['pos']==$pos){
                        array_splice($exp_array,$index,1);
                    }
                    $index = $index + 1;
                }

                $expJson = json_encode($exp_array);
                update_post_meta($post_id, 'services',$expJson);
        
                               
                if(!empty($post_id))
                    $msg = "Service deleted successfully!";
                else
                    $msg = "Service deletion failed! Please try again.";
                    

                $response = new WP_REST_Response( array('result' =>'success','Url'=>$url,'post_id'=>$post_id,'msg'=>$msg,'pos'=>$pos,) );
                    
            }      
        }
        else{
            $response = new WP_REST_Response( array('result' =>'fail','Url'=>$url) );
        }

    return $response;
}

// Edit Services


function editService( WP_REST_Request $request ) {
        
        $url = "UrL".$_SERVER['REQUEST_URI'];
        $data=$request['data'];
        if($data=='Resume'){
            $pos= (int)$request['pos'];
            $user_id = (int)$request['user_id'];

            // Check if user has portfolio or not
                $flag = '0';
                $port_post = array(
                                'meta_query' => array(
                                        array(
                                            'key' => 'user_id',
                                            'value' => $user_id
                                        )
                                    ),                              
                                'post_type'		=> 'portfolio_home',
                                'post_status'	=> 'publish'
                            ); 
                $posts          = get_posts($port_post);
                if(empty($posts)){
                    //$msg = "Zero posts returned";              
                }
                else{
                    $flag ='1';
                     $post_id        = $posts[0]->ID;
                }
            // User Has Portfolio
            if($flag =='1'){
                // select and send Tech Skill to edit
                $expJson = get_post_meta( $post_id, 'services', true);
                $exp_array = json_decode($expJson,true);
               $index = 0;
                foreach($exp_array as $a){
                    if($a['pos']==$pos){
                        $pos = (int)$a['pos'];
                        $serviceTitle = $a['serviceTitle'];
                        $serviceDescr = $a['serviceDescr'];
                        
                        break;
                    }
                }
                               
                if(!empty($post_id))
                    $msg = "Service edited successfully!";
                else
                    $msg = "Service edit failed! Please try again.";
                    

                $response = new WP_REST_Response( array('result' =>'success','Url'=>$url,'post_id'=>$post_id,'msg'=>$msg,'pos'=>$pos,'serviceTitle' => $serviceTitle, 'serviceDescr' => $serviceDescr,) );
                    
            }          
        }
        else{
            $response = new WP_REST_Response( array('result' =>'fail','Url'=>$url) );
        }       
    return $response;
}


// Update Services

function updateService( WP_REST_Request $request ) {
        
        $url = "UrL".$_SERVER['REQUEST_URI'];
        $data=$request['data'];
        if($data=='Resume'){
            $pos= (int)$request['pos'];
            $serviceTitle= $request['serviceTitle'];
            $serviceDescr= $request['serviceDescr'];
            $user_id = (int)$request['user_id'];

            // Check if user has portfolio or not
                $flag = '0';
                $port_post = array(
                                'meta_query' => array(
                                        array(
                                            'key' => 'user_id',
                                            'value' => $user_id
                                        )
                                    ),                                
                                'post_type'		=> 'portfolio_home',
                                'post_status'	=> 'publish'
                            ); 
                $posts          = get_posts($port_post);
                if(empty($posts)){
                    //$msg = "Zero posts returned";              
                }
                else{
                    $flag ='1';
                     $post_id        = $posts[0]->ID;
                }
            // User Has Portfolio
            if($flag =='1'){
                // update Tech Skill
                $expJson = get_post_meta( $post_id, 'services', true);
                $exp_array = json_decode($expJson,true);
               $index = 0;
                foreach($exp_array as $a){
                    if($a['pos']==$pos){
                        $exp_array[$index]['serviceTitle'] = $serviceTitle;
                        $exp_array[$index]['serviceDescr'] = $serviceDescr;
                        break;
                    }

                    $index++;
                }

                $expJson = json_encode($exp_array);
                update_post_meta($post_id, 'services',$expJson);
        
                               
                if(!empty($post_id))
                    $msg = "Service updated successfully!";
                else
                    $msg = "Service updation failed! Please try again.";
                    

                $response = new WP_REST_Response( array('result' =>'success','Url'=>$url,'post_id'=>$post_id,'msg'=>$msg,'pos'=>$pos,) );
                    
            }            
        }
        else{
            $response = new WP_REST_Response( array('result' =>'fail','Url'=>$url) );
        }    
    return $response;
}

// Services apis ends here ========================================================================================




// Portfolio Apis starts here ==========================================================================================

function savePort( WP_REST_Request $request ) {
        
        $url = "UrL".$_SERVER['REQUEST_URI'];
        $data=$request['data'];
        if($data=='Resume'){
            $pos= (int)$request['pos'];
            $portTitle= $request['portTitle'];
            $portDescr= $request['portDescr'];
            $portProjName= $request['portProjName'];
            $portProjDescr= $request['portProjDescr'];
            $portProjClient= $request['portProjClient'];
            $portProjDate= $request['portProjDate'];
            $attachment_id= $request['attachment_id'];
            $user_id = (int)$request['user_id'];

            // Check if user has portfolio or not
                $flag = '0';
                $port_post = array(
                                'meta_query' => array(
                                        array(
                                            'key' => 'user_id',
                                            'value' => $user_id
                                        )
                                    ),    
                                'post_type'		=> 'portfolio_home',
                                'post_status'	=> 'publish'
                            ); 
                
                $posts          = get_posts($port_post);
                if(empty($posts)){
                    //$msg = "Zero posts returned";              
                }
                else{
                    $flag ='1';
                     $post_id        = $posts[0]->ID;
                }

            // User Has Portfolio
            if($flag =='1'){

                // check if skill pos already exists then send message to change pos.
                $exists = '';
                $expJson = get_post_meta( $post_id, 'portfolio', true);
                $exp_array = json_decode($expJson,true);
                foreach($exp_array as $a){
                    if($a['pos']==$pos){
                        $exists = 'Y';
                    }
                }

                if($exists == 'Y'){
                    $msg = "Display position already exist. Please provide unique display position!";
                }
                else {
                        if(empty(get_post_meta( $post_id, 'portfolio', true))){
                        
                        $exp_array= array(
                            array('pos'=>$pos, 'portTitle' => $portTitle, 'portDescr' => $portDescr,'portProjName' => $portProjName,'portProjDescr' => $portProjDescr,'portProjClient' => $portProjClient,'portProjDate' => $portProjDate,'attachment_id'=>$attachment_id) ,             
                            );
                        $expJson = json_encode($exp_array);
                        update_post_meta($post_id, 'portfolio', $expJson);
                        }
                        else{
                            $expJson = get_post_meta( $post_id, 'portfolio', true);
                            $exp_array = json_decode($expJson,true);
                            $a = array('pos'=>$pos, 'portTitle' => $portTitle, 'portDescr' => $portDescr,'portProjName' => $portProjName,'portProjDescr' => $portProjDescr,'portProjClient' => $portProjClient,'portProjDate' => $portProjDate,'attachment_id'=>$attachment_id);
                            array_push($exp_array,$a);
                            $expJson = json_encode($exp_array);
                            update_post_meta($post_id, 'portfolio',$expJson);
                        }

                        if(!empty($post_id))
                            $msg = "New Portfolio Item added successfully!";
                        else
                            $msg = "Post updation failed! Please try again.";
                            
                    }
                               
                $response = new WP_REST_Response( array('result' =>'success','Url'=>$url,'post_id'=>$post_id,'msg'=>$msg, 'pos'=>$pos, 'portTitle' => $portTitle, 'portDescr' => $portDescr,'portProjName' => $portProjName,'portProjDescr' => $portProjDescr,'portProjClient' => $portProjClient,'portProjDate' => $portProjDate,'attachment_id'=>$attachment_id) );
                    
            }
        
        }
        else{
            $response = new WP_REST_Response( array('result' =>'fail','Url'=>$url) );
        }
    
    return $response;
}

// Display Portfolio


function displayPort( WP_REST_Request $request ) {
       
        $url = "UrL".$_SERVER['REQUEST_URI'];
        $data=$request['data'];
        if($data=='Resume'){
            $user_id = (int)$request['user_id'];

            // Check if user has portfolio or not
                $flag = '0';
                $port_post =  array(
                                'meta_query' => array(
                                        array(
                                            'key' => 'user_id',
                                            'value' => $user_id
                                        )
                                    ),                            
                                'post_type'		=> 'portfolio_home',
                                'post_status'	=> 'publish'
                            ); 
                $posts          = get_posts($port_post);
                if(empty($posts)){
                    //$msg = "Zero posts returned";              
                }
                else{
                    $flag ='1';
                     $post_id        = $posts[0]->ID;
                }
            // User Has Portfolio
            if($flag =='1'){
                $expJson = get_post_meta( $post_id, 'portfolio', true);
                $exp_array = json_decode($expJson,true);    
                    
                          
                if(!empty($post_id))
                    $msg = "Portfolio Item sent successfully!";
                else
                    $msg = "Can not send Portfolio! Please try again.";
                    

                $response = new WP_REST_Response( array('result' =>'success','Url'=>$url,'post_id'=>$post_id,'msg'=>$msg,'port'=>$exp_array ) );
                    
            }                      
        }
        else{
            $response = new WP_REST_Response( array('result' =>'fail','Url'=>$url) );
        }      
    return $response;

}


// Delete Portfolio
function deletePort( WP_REST_Request $request ) {
        
        $url = "UrL".$_SERVER['REQUEST_URI'];
        $data=$request['data'];
        if($data=='Resume'){
            $pos= (int)$request['pos'];
            $user_id = (int)$request['user_id'];
            // Check if user has portfolio or not
                $flag = '0';
                $port_post = array(
                                'meta_query' => array(
                                        array(
                                            'key' => 'user_id',
                                            'value' => $user_id
                                        )
                                    ),                             
                                'post_type'		=> 'portfolio_home',
                                'post_status'	=> 'publish'
                            ); 
                $posts          = get_posts($port_post);
                if(empty($posts)){
                    //$msg = "Zero posts returned";              
                }
                else{
                    $flag ='1';
                     $post_id        = $posts[0]->ID;
                }
            // User Has Portfolio
            if($flag =='1'){
                // delete Tech Skill
                $expJson = get_post_meta( $post_id, 'portfolio', true);
                $exp_array = json_decode($expJson,true);
               $index = 0;
                foreach($exp_array as $a){
                    if($a['pos']==$pos){
                        array_splice($exp_array,$index,1);
                    }
                    $index = $index + 1;
                }

                $expJson = json_encode($exp_array);
                update_post_meta($post_id, 'portfolio',$expJson);
        
                               
                if(!empty($post_id))
                    $msg = "Portfolio deleted successfully!";
                else
                    $msg = "Portfolio deletion failed! Please try again.";
                    

                $response = new WP_REST_Response( array('result' =>'success','Url'=>$url,'post_id'=>$post_id,'msg'=>$msg,'pos'=>$pos,) );
                    
            }      
        }
        else{
            $response = new WP_REST_Response( array('result' =>'fail','Url'=>$url) );
        }

    return $response;
}

// Edit Portfolio


function editPort( WP_REST_Request $request ) {
        
        $url = "UrL".$_SERVER['REQUEST_URI'];
        $data=$request['data'];
        if($data=='Resume'){
            $pos= (int)$request['pos'];
            $user_id = (int)$request['user_id'];

            // Check if user has portfolio or not
                $flag = '0';
                $port_post = array(
                                'meta_query' => array(
                                        array(
                                            'key' => 'user_id',
                                            'value' => $user_id
                                        )
                                    ),                              
                                'post_type'		=> 'portfolio_home',
                                'post_status'	=> 'publish'
                            ); 
                $posts          = get_posts($port_post);
                if(empty($posts)){
                    //$msg = "Zero posts returned";              
                }
                else{
                    $flag ='1';
                     $post_id        = $posts[0]->ID;
                }
            // User Has Portfolio
            if($flag =='1'){
                // select and send Tech Skill to edit
                $expJson = get_post_meta( $post_id, 'portfolio', true);
                $exp_array = json_decode($expJson,true);
               $index = 0;
                foreach($exp_array as $a){
                    if($a['pos']==$pos){
                        $pos = (int)$a['pos'];
                        $portTitle = $a['portTitle'];
                        $portDescr = $a['portDescr'];
                        $portProjName = $a['portProjName'];
                        $portProjDescr = $a['portProjDescr'];
                        $portProjClient = $a['portProjClient'];
                        $portProjDate = $a['portProjDate'];
                        $attachment_id = $a['attachment_id'];
                        $image_url =  wp_get_attachment_image_src($attachment_id,$profile_size);
                        break;
                    }
                }
                               
                if(!empty($post_id))
                    $msg = "Portfolio edited successfully!";
                else
                    $msg = "Portfolio edit failed! Please try again.";
                    

                $response = new WP_REST_Response( array('result' =>'success','Url'=>$url,'post_id'=>$post_id,'msg'=>$msg,'pos'=>$pos, 'portTitle' => $portTitle, 'portDescr' => $portDescr,'portProjName' => $portProjName,'portProjDescr' => $portProjDescr,'portProjClient' => $portProjClient,'portProjDate' => $portProjDate,'attachment_id'=>$attachment_id,'image_url'=>$image_url) );
                    
            }          
        }
        else{
            $response = new WP_REST_Response( array('result' =>'fail','Url'=>$url) );
        }       
    return $response;
}


// Update Portfolio

function updatePort( WP_REST_Request $request ) {
        
        $url = "UrL".$_SERVER['REQUEST_URI'];
        $data=$request['data'];
        if($data=='Resume'){
            $pos= (int)$request['pos'];
            $portTitle= $request['portTitle'];
            $portDescr= $request['portDescr'];
            $portProjName= $request['portProjName'];
            $portProjDescr= $request['portProjDescr'];
            $portProjClient= $request['portProjClient'];
            $portProjDate= $request['portProjDate'];
            $attachment_id= $request['attachment_id'];
            $user_id = (int)$request['user_id'];

            // Check if user has portfolio or not
                $flag = '0';
                $port_post = array(
                                'meta_query' => array(
                                        array(
                                            'key' => 'user_id',
                                            'value' => $user_id
                                        )
                                    ),                                
                                'post_type'		=> 'portfolio_home',
                                'post_status'	=> 'publish'
                            ); 
                $posts          = get_posts($port_post);
                if(empty($posts)){
                    //$msg = "Zero posts returned";              
                }
                else{
                    $flag ='1';
                     $post_id        = $posts[0]->ID;
                }
            // User Has Portfolio
            if($flag =='1'){
                // update Tech Skill
                $expJson = get_post_meta( $post_id, 'portfolio', true);
                $exp_array = json_decode($expJson,true);
               $index = 0;
                foreach($exp_array as $a){
                    if($a['pos']==$pos){
                        $exp_array[$index]['portTitle'] = $portTitle;
                        $exp_array[$index]['portDescr'] = $portDescr;
                        $exp_array[$index]['portProjName'] = $portProjName;
                        $exp_array[$index]['portProjDescr'] = $portProjDescr;
                        $exp_array[$index]['portProjClient'] = $portProjClient;
                        $exp_array[$index]['portProjDate'] = $portProjDate;
                        $exp_array[$index]['attachment_id'] = $attachment_id;
                        break;
                    }

                    $index++;
                }

                $expJson = json_encode($exp_array);
                update_post_meta($post_id, 'portfolio',$expJson);
        
                               
                if(!empty($post_id))
                    $msg = "Portfolio updated successfully!";
                else
                    $msg = "Portfolio updation failed! Please try again.";
                    

                $response = new WP_REST_Response( array('result' =>'success','Url'=>$url,'post_id'=>$post_id,'msg'=>$msg,'pos'=>$pos,) );
                    
            }            
        }
        else{
            $response = new WP_REST_Response( array('result' =>'fail','Url'=>$url) );
        }    
    return $response;
}

// Portfolio apis ends here ========================================================================================




// Blog Apis starts here ==========================================================================================

function saveBlog( WP_REST_Request $request ) {
        
        $url = "UrL".$_SERVER['REQUEST_URI'];
        $data=$request['data'];
        if($data=='Resume'){
            $pos= (int)$request['pos'];
            $blogTitle= $request['blogTitle'];
            $blogDescr= $request['blogDescr'];
            $blogUrl= $request['blogUrl'];
            $attachment_id= $request['attachment_id'];
            $user_id = (int)$request['user_id'];

            // Check if user has portfolio or not
                $flag = '0';
                $port_post = array(
                                'meta_query' => array(
                                        array(
                                            'key' => 'user_id',
                                            'value' => $user_id
                                        )
                                    ),    
                                'post_type'		=> 'portfolio_home',
                                'post_status'	=> 'publish'
                            ); 
                
                $posts          = get_posts($port_post);
                if(empty($posts)){
                    //$msg = "Zero posts returned";              
                }
                else{
                    $flag ='1';
                     $post_id        = $posts[0]->ID;
                }

            // User Has Portfolio
            if($flag =='1'){

                // check if skill pos already exists then send message to change pos.
                $exists = '';
                $expJson = get_post_meta( $post_id, 'blogs', true);
                $exp_array = json_decode($expJson,true);
                foreach($exp_array as $a){
                    if($a['pos']==$pos){
                        $exists = 'Y';
                    }
                }

                if($exists == 'Y'){
                    $msg = "Display position already exist. Please provide unique display position!";
                }
                else {
                        if(empty(get_post_meta( $post_id, 'blogs', true))){
                        
                        $exp_array= array(
                            array('pos'=>$pos, 'blogTitle' => $blogTitle, 'blogDescr' => $blogDescr,'blogUrl' => $blogUrl,'attachment_id'=>$attachment_id) ,             
                            );
                        $expJson = json_encode($exp_array);
                        update_post_meta($post_id, 'blogs', $expJson);
                        }
                        else{
                            $expJson = get_post_meta( $post_id, 'blogs', true);
                            $exp_array = json_decode($expJson,true);
                            $a = array('pos'=>$pos, 'blogTitle' => $blogTitle, 'blogDescr' => $blogDescr,'blogUrl' => $blogUrl,'attachment_id'=>$attachment_id);
                            array_push($exp_array,$a);
                            $expJson = json_encode($exp_array);
                            update_post_meta($post_id, 'blogs',$expJson);
                        }

                        if(!empty($post_id))
                            $msg = "New blog added successfully!";
                        else
                            $msg = "Post updation failed! Please try again.";
                            
                    }
                               
                $response = new WP_REST_Response( array('result' =>'success','Url'=>$url,'post_id'=>$post_id,'msg'=>$msg, 'pos'=>$pos, 'portTitle' => $portTitle, 'portDescr' => $portDescr,'portProjName' => $portProjName,'portProjDescr' => $portProjDescr,'portProjClient' => $portProjClient,'portProjDate' => $portProjDate,'attachment_id'=>$attachment_id) );
                    
            }
        
        }
        else{
            $response = new WP_REST_Response( array('result' =>'fail','Url'=>$url) );
        }
    
    return $response;
}

// Display Blog


function displayBlog( WP_REST_Request $request ) {
       
        $url = "UrL".$_SERVER['REQUEST_URI'];
        $data=$request['data'];
        if($data=='Resume'){
            $user_id = (int)$request['user_id'];

            // Check if user has portfolio or not
                $flag = '0';
                $port_post =  array(
                                'meta_query' => array(
                                        array(
                                            'key' => 'user_id',
                                            'value' => $user_id
                                        )
                                    ),                            
                                'post_type'		=> 'portfolio_home',
                                'post_status'	=> 'publish'
                            ); 
                $posts          = get_posts($port_post);
                if(empty($posts)){
                    //$msg = "Zero posts returned";              
                }
                else{
                    $flag ='1';
                     $post_id        = $posts[0]->ID;
                }
            // User Has Portfolio
            if($flag =='1'){
                $expJson = get_post_meta( $post_id, 'blogs', true);
                $exp_array = json_decode($expJson,true);    
                    
                          
                if(!empty($post_id))
                    $msg = "blog sent successfully!";
                else
                    $msg = "Can not send blog! Please try again.";
                    

                $response = new WP_REST_Response( array('result' =>'success','Url'=>$url,'post_id'=>$post_id,'msg'=>$msg,'blogs'=>$exp_array ) );
                    
            }                      
        }
        else{
            $response = new WP_REST_Response( array('result' =>'fail','Url'=>$url) );
        }      
    return $response;

}


// Delete Blog
function deleteBlog( WP_REST_Request $request ) {
        
        $url = "UrL".$_SERVER['REQUEST_URI'];
        $data=$request['data'];
        if($data=='Resume'){
            $pos= (int)$request['pos'];
            $user_id = (int)$request['user_id'];
            // Check if user has portfolio or not
                $flag = '0';
                $port_post = array(
                                'meta_query' => array(
                                        array(
                                            'key' => 'user_id',
                                            'value' => $user_id
                                        )
                                    ),                             
                                'post_type'		=> 'portfolio_home',
                                'post_status'	=> 'publish'
                            ); 
                $posts          = get_posts($port_post);
                if(empty($posts)){
                    //$msg = "Zero posts returned";              
                }
                else{
                    $flag ='1';
                     $post_id        = $posts[0]->ID;
                }
            // User Has Portfolio
            if($flag =='1'){
                // delete Tech Skill
                $expJson = get_post_meta( $post_id, 'blogs', true);
                $exp_array = json_decode($expJson,true);
               $index = 0;
                foreach($exp_array as $a){
                    if($a['pos']==$pos){
                        array_splice($exp_array,$index,1);
                    }
                    $index = $index + 1;
                }

                $expJson = json_encode($exp_array);
                update_post_meta($post_id, 'blogs',$expJson);
        
                               
                if(!empty($post_id))
                    $msg = "blog deleted successfully!";
                else
                    $msg = "blog deletion failed! Please try again.";
                    

                $response = new WP_REST_Response( array('result' =>'success','Url'=>$url,'post_id'=>$post_id,'msg'=>$msg,'pos'=>$pos,) );
                    
            }      
        }
        else{
            $response = new WP_REST_Response( array('result' =>'fail','Url'=>$url) );
        }

    return $response;
}

// Edit Blog


function editBlog( WP_REST_Request $request ) {
        
        $url = "UrL".$_SERVER['REQUEST_URI'];
        $data=$request['data'];
        if($data=='Resume'){
            $pos= (int)$request['pos'];
            $user_id = (int)$request['user_id'];

            // Check if user has portfolio or not
                $flag = '0';
                $port_post = array(
                                'meta_query' => array(
                                        array(
                                            'key' => 'user_id',
                                            'value' => $user_id
                                        )
                                    ),                              
                                'post_type'		=> 'portfolio_home',
                                'post_status'	=> 'publish'
                            ); 
                $posts          = get_posts($port_post);
                if(empty($posts)){
                    //$msg = "Zero posts returned";              
                }
                else{
                    $flag ='1';
                     $post_id        = $posts[0]->ID;
                }
            // User Has Portfolio
            if($flag =='1'){
                // select and send Tech Skill to edit
                $expJson = get_post_meta( $post_id, 'blogs', true);
                $exp_array = json_decode($expJson,true);
               $index = 0;
                foreach($exp_array as $a){
                    if($a['pos']==$pos){
                        $pos = (int)$a['pos'];
                        $blogTitle = $a['blogTitle'];
                        $blogDescr = $a['blogDescr'];
                        $blogUrl = $a['blogUrl'];
                        $attachment_id = $a['attachment_id'];
                        $image_url =  wp_get_attachment_image_src($attachment_id,$profile_size);
                        break;
                    }
                }
                               
                if(!empty($post_id))
                    $msg = "Blog edited successfully!";
                else
                    $msg = "Blog edit failed! Please try again.";
                    

                $response = new WP_REST_Response( array('result' =>'success','Url'=>$url,'post_id'=>$post_id,'msg'=>$msg,'pos'=>$pos, 'blogTitle' => $blogTitle, 'blogDescr' => $blogDescr,'blogUrl' => $blogUrl,'attachment_id'=>$attachment_id,'image_url'=>$image_url) );
                    
            }          
        }
        else{
            $response = new WP_REST_Response( array('result' =>'fail','Url'=>$url) );
        }       
    return $response;
}


// Update Blog

function updateBlog( WP_REST_Request $request ) {
        
        $url = "UrL".$_SERVER['REQUEST_URI'];
        $data=$request['data'];
        if($data=='Resume'){
            $pos= (int)$request['pos'];
            $blogTitle= $request['blogTitle'];
            $blogDescr= $request['blogDescr'];
            $blogUrl= $request['blogUrl'];
            $attachment_id= $request['attachment_id'];
            $user_id = (int)$request['user_id'];

            // Check if user has portfolio or not
                $flag = '0';
                $port_post = array(
                                'meta_query' => array(
                                        array(
                                            'key' => 'user_id',
                                            'value' => $user_id
                                        )
                                    ),                                
                                'post_type'		=> 'portfolio_home',
                                'post_status'	=> 'publish'
                            ); 
                $posts          = get_posts($port_post);
                if(empty($posts)){
                    //$msg = "Zero posts returned";              
                }
                else{
                    $flag ='1';
                     $post_id        = $posts[0]->ID;
                }
            // User Has Portfolio
            if($flag =='1'){
                // update Tech Skill
                $expJson = get_post_meta( $post_id, 'blogs', true);
                $exp_array = json_decode($expJson,true);
               $index = 0;
                foreach($exp_array as $a){
                    if($a['pos']==$pos){
                        $exp_array[$index]['blogTitle'] = $blogTitle;
                        $exp_array[$index]['blogDescr'] = $blogDescr;
                        $exp_array[$index]['blogUrl'] = $blogUrl;
                        $exp_array[$index]['attachment_id'] = $attachment_id;
                        break;
                    }

                    $index++;
                }

                $expJson = json_encode($exp_array);
                update_post_meta($post_id, 'blogs',$expJson);
        
                               
                if(!empty($post_id))
                    $msg = "Blog updated successfully!";
                else
                    $msg = "Blog updation failed! Please try again.";
                    

                $response = new WP_REST_Response( array('result' =>'success','Url'=>$url,'post_id'=>$post_id,'msg'=>$msg,'pos'=>$pos,) );
                    
            }            
        }
        else{
            $response = new WP_REST_Response( array('result' =>'fail','Url'=>$url) );
        }    
    return $response;
}

// Blog apis ends here ========================================================================================

// Contact Api ================================================================================================

function saveContact( WP_REST_Request $request ) {
        
        $url = "UrL".$_SERVER['REQUEST_URI'];
        $data=$request['data'];
        if($data=='Contact'){
            $contact_email= $request['contact_email'];
            $contact_no=$request['contact_no'];
            $contact_address=$request['contact_address'];
            $user_id = (int)$request['user_id'];

            // Check if user has portfolio or not
                $flag = '0';
                $port_post =
                //  custom meta query to only get post for current logged in user
                            array(
                                'meta_query' => array(
                                        array(
                                            'key' => 'user_id',
                                            'value' => $user_id
                                        )
                                    ),
                // end of meta query
                                
                                'post_type'		=> 'portfolio_home',
                                'post_status'	=> 'publish'
                            ); 
                //  make sure we have user portfolio available
                $posts          = get_posts($port_post);
                if(empty($posts)){
                    //$msg = "Zero posts returned";              
                }
                else{
                    $flag ='1';
                     $post_id        = $posts[0]->ID;
                }
            

            // User Has Portfolio
            if($flag =='1'){

                // Updating portfolio
                
                update_post_meta($post_id, 'email', $contact_email);
                update_post_meta($post_id, 'contact_number', $contact_no);
                update_post_meta($post_id, 'address', $contact_address);
        
                
                if(!empty($post_id))
                    $msg = "Contact updated successfully!";
                else
                    $msg = "Post updation failed! Please try again.";
                    

                $response = new WP_REST_Response( array('result' =>'success','Url'=>$url,'post_id'=>$post_id,'msg'=>$msg,'post_id'=>$post_id,'contact_email'=>$contact_email,'contact_no'=>$contact_no,'contact_address'=>$contact_address, ) );
                    
            }

            
            // User dont have portfolio
            if($flag =='0'){

                        
                /*Create a new portfolio home post*/  
                $port_post = array(
                    'post_title'	=> $first_name." ".$last_name,
                    'post_type'		=> 'portfolio_home',
                    'post_status'	=> 'publish'
                ); 

                $post_id = wp_insert_post( $port_post ); 

                /*Insert custom fields values*/
                
                update_post_meta($post_id, 'email', $contact_email);
                update_post_meta($post_id, 'contact_number', $contact_no);
                update_post_meta($post_id, 'address', $contact_address);
           
                if(!empty($post_id))
                    $msg = "Contact created successfully!";
                else
                    $msg = "Post creation failed! Please try again.";
                    

                $response = new WP_REST_Response( array('result' =>'success','Url'=>$url,'msg'=>$msg,'post_id'=>$post_id,'contact_email'=>$contact_email,'contact_no'=>$contact_no,'contact_address'=>$contact_address, ) );

            }

        
            
        }
        else{
            $response = new WP_REST_Response( array('result' =>'fail','Url'=>$url) );
        }

        
    return $response;
}




 ?>


