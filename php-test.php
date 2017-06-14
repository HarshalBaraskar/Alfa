


<?php
/*  ================================================================================================ */
/*

echo "Hello World!<br><hr>";
echo "<br>";


$alert_array= array(
                        array('alert' => 'alert', 'email' => 'Test'),
                        array('alert' => 'alert2', 'email' => 'Test2'),
                                              
                        );

print_r($alert_array);
echo "<br>";


$a = array('alert' => 'alert3', 'email' => 'Test3');
array_push($alert_array,$a);
echo "after push<br>";

print_r($alert_array);
echo "<br>";
echo 'alert : '.$alert_array[2]['alert'];
echo "<br>";

 looping through array


foreach($alert_array as $a){
    echo 'Alert :'.$a['alert'].'  email:'.$a['email'];
    echo "<br>";
}


 deleting elements

array_splice($alert_array,1,1);

echo "after delete second<br>";

print_r($alert_array);

echo "<br>get_post_meta<br>";

$b = get_post_meta(161, 'services', true);
$expJson = json_decode($b,true);
echo $b;
echo "<br>";
print_r($expJson);
echo "<br>".$expJson[0]['title'];

echo '<hr>'; */
/*
$pos = 2;
 $expJson = get_post_meta( 161, 'language_skills', true);
                $exp_array = json_decode($expJson,true);
               print_r($exp_array);
               echo "<br>";

                foreach($exp_array as $a){
                    
                    if($a['pos']==$pos){
                        
                        echo "inside";
                        echo "pos : ".$a['pos'];
                        echo "name : ".$a['langSkillName'];
                    }
                    
                }
                echo "<br>";

                print_r($exp_array);


*/



//******************************************************************************************************

// upload image to wp media - html form

?>


    <!--Upload profile picture-->
        
        <form id="featured_upload" method="post" action="http://localhost/wordpress/test" enctype="multipart/form-data">
            <div class="input-field col s6">
                Upload Photo
            </div> 
            <br>
            <div class='row'>
                <div class="input-field col s8">          
                    <input type="file" name="my_image_upload" id="my_image_upload"  onchange="loadFile(event)"  multiple="false" class="form-control" />
                    <input type="hidden" name="post_id" id="post_id" value="55" />
                    <?php wp_nonce_field( 'my_image_upload', 'my_image_upload_nonce' ); ?>
                </div> 
                <div class="input-field col s4">          
                    <input id="submit_my_image_upload" class="btn btn-default" name="submit_my_image_upload" type="submit" value="Upload" />
                </div> 
            </div>
            <br>
            <div class="input-field col s6">          
                <img src="" id='previewPic'>
            </div> 
            <br>
            <br>
        </form>
    <!--end upload profile picture-->

<script>
       
    
 var project date, client, descr, temp, url;
// document.getElementById('single-port').style.display="none";
 function openPort(index,url){
    
     var portJson = <?php echo "'".$portJson."'";  ?>;
    alert(portJson);
    var json = JSON.parse(portJson);
    alert(json.length);
    var i;
    for(i=0; i<json.length; i++)
    {
        //alert(json[i].pos);
        if(index==json[i].pos){
            alert(index);
            alert(url);
            project = json[i].portProjName;
            client = json[i].portProjClient;
            date = json[i].portProjDate;
            descr = json[i].portProjDescr;
            document.getElementById("proj_image").src = url;
        }
    }
document.getElementById('page-portfolio').style.display="none";
document.getElementById('single_port').style.display="block";
// set project details

document.getElementById("project").innerHTML = project;
document.getElementById("date").innerHTML = date;
document.getElementById("client").innerHTML = client;
document.getElementById("descr").innerHTML = descr;


 }