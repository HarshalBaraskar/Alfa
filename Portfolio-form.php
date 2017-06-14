<?php


/***********************************
 * Template Name: Portfolio Form *
 ***********************************/
get_header();


 ?>
<style>
.huge_it_slideshow_image_wrap_2 {
    display:none;
}
</style>
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/angular-file-upload/2.5.0/angular-file-upload.js"></script>


  <script src="../wp-content/themes/alfa/js/port-form.js"></script>
  <script src="../wp-content/themes/alfa/js/formTab.js"></script>
  <link href="../wp-content/themes/alfa/port.css" rel="stylesheet">

<body onload="openFirstTab(event, 'Home')" ng-app="portForm">
  

<!--Get and set  current user id value-->
<?php 
    $user_id = get_current_user_id();
?>
<script>
    userid = '<?php echo $user_id ;?>';
</script>

<div class='portfolio-form' ng-controller="HomeCtrl">
    <div class="tab">
    <button class="tablinks" onclick="openCity(event, 'Home')"><span class="glyphicon glyphicon-home"></span>&nbsp;&nbsp;&nbsp;Home</button>
    <button class="tablinks" onclick="openCity(event, 'Resume')"><span class="glyphicon glyphicon-file"></span>&nbsp;&nbsp;&nbsp;Resume</button>
    <button class="tablinks" onclick="openCity(event, 'Services')"><span class="glyphicon glyphicon-cog"></span>&nbsp;&nbsp;&nbsp;Services</button>
    <button class="tablinks" onclick="openCity(event, 'Portfolio')"><span class="glyphicon glyphicon-folder-open"></span>&nbsp;&nbsp;&nbsp;Portfolio</button>
    <button class="tablinks" onclick="openCity(event, 'Blog')"><span class="glyphicon glyphicon-book"></span>&nbsp;&nbsp;&nbsp;Blog</button>
    <button class="tablinks" onclick="openCity(event, 'Contact')"><span class="glyphicon glyphicon-phone"></span>&nbsp;&nbsp;&nbsp;Contact</button>
    </div>
    
        <div id="Home" class="tabcontent" >
            <!--
            <ul>
                <li ng-repeat='value in results'>{{value}}</li>
            </ul>
            -->
            <form  id="uploadimage" action="" method="post" enctype="multipart/form-data">
            <br>
            <div class='row'>
                <div class="input-field col s6">             
                     First Name
                    <input type="text" ng-model="first_name" class="form-control" required>
                </div>
                <div class="input-field col s6">
                    Last Name
                    <input type="text" ng-model="last_name" class="form-control" required>         
                </div>
            </div>
            <div class="input-field col s6">
                Profession
                <input type="text" ng-model="profession" class="form-control" required>
            </div> 
            <div class="input-field col s6">
                About Me - Title
                <input type="text" ng-model="aboutmeTitle" class="form-control" required>
            </div> 
            <br>
            <div id='textarea' class="input-field col s6">
                About Me - Summary
                <textarea class="form-control" ng-model="aboutmeSummary" rows="5" id="comment" required></textarea>
            </div>
            <br>
           
     <!--Upload profile picture  -->
            <div class="main">
            <hr>
            <div id="image_preview"><img id="previewing" src="noimage.png" alt="Profile Picture" style="width:250px;height:230px;" /></div>
            <hr id="line">
            <div id="selectImage">
                Upload Photo
                <br>
                <div class='row'>
                    <div class="input-field col s8"> 
                        <input type="file" name="file" id="file" class="form-control" required />
                    </div>
                    <div class="input-field col s4">
                        <button type="submit" class="btn btn-default" value="Upload">Upload</button>
                    </div>
                </div>
            </div>
            </div>
            <!--
            <h4 id='loading' >loading..</h4>
            <div id="message"></div>
            -->

        
            <!-- end upload profile picture -->


            <br><br>
            <button type="button" id='submit-home' ng-click="getHome()" class="btn btn-default">Submit</button>
            </form>
            <br><br>
    


        </div>

    <!--End Portfolio Home-->


        <div id="Resume" class="tabcontent">
            <!--Collapsible panel starts here-->
            <ul>
                <li ng-repeat='value in results'>{{value}}</li>
            </ul>

            <br>
            <div class="panel-group">
                <!--Experience Panel-->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                        <a id='exp-panel' data-toggle="collapse" href="#collapse1" ><i class="material-icons prefix">play_circle_outline</i></a>&nbsp;&nbsp;&nbsp;Experience
                        <button type="button" id='view-exp' class="btn btn-default" data-toggle="modal" data-target="#expModel" ng-click='displayExp()'>View All</button>
                        </h4>
                    </div>
                    <!-- Experience modal popup page  -->

                    <div class="modal fade" id="expModel" role="dialog">
                        <div class="modal-dialog  modal-lg">
                        
                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h6 class="modal-title">Experiences</h6>
                            </div>
                            <div class="modal-body report-modal-body">
                                <table class="table">
                                <thead>
                                <tr>
                                    <th>Position</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Place</th>
                                    <th>Location</th>
                                    <th>Duration</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr ng-repeat="x in experiences">
                                    <td>{{ x.pos }}</td>
                                    <td>{{ x.title }}</td>
                                    <td>{{ x.descr }}</td>
                                    <td>{{ x.place }}</td>
                                    <td>{{ x.location }}</td>
                                    <td>{{ x.duration }}</td>
                                    <td><button data-toggle="collapse" href="#collapse1" ng-click='editExp(x.pos)' data-dismiss="modal"> <span class="glyphicon glyphicon-edit"></button></td>
                                    <td><button ng-click='deleteExp(x.pos)'> <span class="glyphicon glyphicon-trash"></button></td>
                                </tr>
                               
                                </tbody>
                            </table>
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                        
                        </div>
                    </div>
                    <!-- end exp modal  -->
                   
                    <div id="collapse1" class="panel-collapse collapse in">
                        <div class="panel-body">
                            <form ng-submit="getExp()">
                                <div class='row'>
                                    <div class="input-field col s9">
                                        Title
                                        <input type="text" ng-model="title" class="form-control" required>
                                    </div> 
                                    <div class="input-field col s3">
                                        Display Position
                                        <input type="number" ng-model="pos" class="form-control" required>
                                    </div> 
                                </div>
                                <br>
                                <div class="input-field col s6">
                                    Description
                                    <textarea class="form-control" ng-model="descr" rows="5" id="comment" required></textarea>
                                </div>
                                <div class='row'>
                                    <div class="input-field col s4">
                                        Place
                                        <input type="text" ng-model="place" class="form-control" required>
                                    </div>
                                    <div class="input-field col s4">
                                        Location
                                        <input type="text" ng-model="location" class="form-control" required>
                                    </div>
                                    <div class="input-field col s4">
                                        Duration
                                        <input type="text" ng-model="duration" class="form-control" required>
                                    </div>
                                </div>
                    
                                 <button type="submit" id='submit-exp' class="btn btn-default">Add</button>
                                 <a ng-click="updateExp()" id='update-exp' class="btn btn-default">Update</a>

                            </form>
                        </div>
                        <div class="panel-footer"></div>
                    </div>
                </div>
                <br>
                <!--End of Experience panel-->
                <!--Skills Panel-->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                        <a data-toggle="collapse" href="#collapse2"><i class="material-icons prefix">play_circle_outline</i></a>&nbsp;&nbsp;&nbsp;Skills
                        </h4>
                    </div>
                    <div id="collapse2" class="panel-collapse collapse">
                        <div class="panel-body">
                            <!--Technical Skills Panel-->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                    <a data-toggle="collapse" href="#collapse3"><i class="material-icons prefix">play_circle_outline</i></a>&nbsp;&nbsp;&nbsp;Technical Skills
                                    <button type="submit" id='view-tech-skill' class="btn btn-default" data-toggle="modal" data-target="#techSkillModel" ng-click='displayTechSkill()'>View All</button>
                                    </h4>
                                </div>

                                <!-- Technical skill modal popup page  -->

                                <div class="modal fade" id="techSkillModel" role="dialog">
                                    <div class="modal-dialog  modal-lg">
                                    
                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h6 class="modal-title">Technical Skills</h6>
                                        </div>
                                        <div class="modal-body report-modal-body">
                                            <table class="table">
                                            <thead>
                                            <tr>
                                                <th>Sr No</th>
                                                <th>Skill Name</th>
                                                <th>Proficience</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr ng-repeat="x in techSkills">
                                                <td>{{ x.pos }}</td>
                                                <td>{{ x.techSkillName }}</td>
                                                <td>{{ x.techSkillNumber }}</td>
                                                <td><button data-toggle="collapse" href="#collapse3" ng-click='editTechSkill(x.pos)' data-dismiss="modal"> <span class="glyphicon glyphicon-edit"></button></td>
                                                <td><button ng-click='deleteTechSkill(x.pos)'> <span class="glyphicon glyphicon-trash"></button></td>
                                            </tr>
                                        
                                            </tbody>
                                        </table>
                                        </div>
                                        <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                    
                                    </div>
                                </div>
                                <!-- end tech skill modal  -->
                            

                                <div id="collapse3" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <form ng-submit="saveTechSkill()">
                                            <div class='row'>
                                                <div class="input-field col s2">
                                                    Display Position
                                                    <input type="number" ng-model="pos" class="form-control" required>
                                                </div> 
                                                <div class="input-field col s6">
                                                    <div class="form-group">
                                                        Skill Name
                                                        <input type="text" ng-model='techSkillName' class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="input-field col s2">
                                                    <div class="form-group">
                                                        Proficience (%)
                                                        <input type="number" ng-model='techSkillNumber' class="form-control" required>
                                                    </div> 
                                                </div>
                                                <div class="input-field col s3">
                                                    <div class="form-group">
                                                        <button type="submit" id='submit-tech-skill' class="btn btn-default">Add</button>
                                                        <a ng-click="updateTechSkill()" id='update-tech-skill' class="btn btn-default">Update</a>
                                                    </div> 
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!--End of technical skill panel-->
                            <!--Language Panel-->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                    <a data-toggle="collapse" href="#collapse4"><i class="material-icons prefix">play_circle_outline</i></a>&nbsp;&nbsp;&nbsp;Language Skills
                                    <button type="submit" id='view-lang-skill' class="btn btn-default" data-toggle="modal" data-target="#LangSkillModel" ng-click='displayLangSkill()'>View All</button>
                                    </h4>
                                </div>

                                <!-- Lang Skill modal popup page  -->

                                <div class="modal fade" id="LangSkillModel" role="dialog">
                                    <div class="modal-dialog  modal-lg">
                                    
                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h6 class="modal-title">Language Skills</h6>
                                        </div>
                                        <div class="modal-body report-modal-body">
                                            <table class="table">
                                            <thead>
                                            <tr>
                                                <th>Sr No</th>
                                                <th>Language Name</th>
                                                <th>Proficience</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr ng-repeat="x in langSkills">
                                                <td>{{ x.pos }}</td>
                                                <td>{{ x.langSkillName }}</td>
                                                <td>{{ x.langSkillNumber }}</td>
                                                <td><button data-toggle="collapse" href="#collapse4" ng-click='editLangSkill(x.pos)' data-dismiss="modal"> <span class="glyphicon glyphicon-edit"></button></td>
                                                <td><button ng-click='deleteLangSkill(x.pos)'> <span class="glyphicon glyphicon-trash"></button></td>
                                            </tr>
                                        
                                            </tbody>
                                        </table>
                                        </div>
                                        <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                    
                                    </div>
                                </div>
                                <!-- end lang modal  -->
                            

                                <div id="collapse4" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <form ng-submit="saveLangSkill()">
                                            <div class='row'>
                                                <div class="input-field col s2">
                                                    Display Position
                                                    <input type="number" ng-model="pos" class="form-control" required>
                                                </div> 
                                                <div class="input-field col s6">
                                                    <div class="form-group">
                                                        Skill Name
                                                        <input type="text" ng-model="langSkillName" class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="input-field col s3">
                                                    <div class="form-group">
                                                        Proficience (%)
                                                        <input type="number" ng-model="langSkillNumber" class="form-control" required>
                                                    </div> 
                                                </div>
                                                <div class="input-field col s3">
                                                    <div class="form-group">
                                                        <button type="submit" id='submit-lang-skill' class="btn btn-default">Add</button>
                                                        <a ng-click="updateLangSkill()" id='update-lang-skill' class="btn btn-default">Update</a>
                                                    </div> 
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!--End of Language skill panel-->
                            <!--Others Panel starts here-->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                    <a data-toggle="collapse" href="#collapse5"><i class="material-icons prefix">play_circle_outline</i></a>&nbsp;&nbsp;&nbsp;Other Skills
                                    <button type="submit" id='view-lng-skill' class="btn btn-default" data-toggle="modal" data-target="#OtherSkillModel" ng-click='displayOtherSkill()'>View All</button>
                                    </h4>
                                </div>

                                    <!-- Others Skill modal popup page  -->

                                <div class="modal fade" id="OtherSkillModel" role="dialog">
                                    <div class="modal-dialog  modal-lg">
                                    
                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h6 class="modal-title">Language Skills</h6>
                                        </div>
                                        <div class="modal-body report-modal-body">
                                            <table class="table">
                                            <thead>
                                            <tr>
                                                <th>Sr No</th>
                                                <th>Skill Name</th>
                                                <th>Proficience</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr ng-repeat="x in otherSkills">
                                                <td>{{ x.pos }}</td>
                                                <td>{{ x.otherSkillName }}</td>
                                                <td>{{ x.otherSkillNumber }}</td>
                                                <td><button data-toggle="collapse" href="#collapse5" ng-click='editOtherSkill(x.pos)' data-dismiss="modal"> <span class="glyphicon glyphicon-edit"></button></td>
                                                <td><button ng-click='deleteOtherSkill(x.pos)'> <span class="glyphicon glyphicon-trash"></button></td>
                                            </tr>
                                        
                                            </tbody>
                                        </table>
                                        </div>
                                        <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                    
                                    </div>
                                </div>
                                <!-- end lang modal  -->
                            

                                <div id="collapse5" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <form ng-submit="saveOtherSkill()">
                                            <div class='row'>
                                                 <div class="input-field col s2">
                                                    Display Position
                                                    <input type="number" ng-model="pos" class="form-control" required>
                                                </div> 
                                                <div class="input-field col s6">
                                                    <div class="form-group">
                                                        Skill Name
                                                        <input type="text" ng-model="otherSkillName" class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="input-field col s3">
                                                    <div class="form-group">
                                                        Proficience (%)
                                                        <input type="number" ng-model="otherSkillNumber" class="form-control" required>
                                                    </div> 
                                                </div>
                                                <div class="input-field col s3">
                                                    <div class="form-group">
                                                       <button type="submit" id='submit-other-skill' class="btn btn-default">Add</button>
                                                        <a ng-click="updateOtherSkill()" id='update-other-skill' class="btn btn-default">Update</a>
                                                    </div> 
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!--End of Other skill panel-->
                        </div>
                        <div class="panel-footer"></div>
                    </div>
                </div>
                <br>
                <!--End of Skills panel-->

                <!--Education Panel-->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                        <a data-toggle="collapse" href="#collapse6"><i class="material-icons prefix">play_circle_outline</i></a>&nbsp;&nbsp;&nbsp;Education
                        <button type="submit" id='view-edu' class="btn btn-default" data-toggle="modal" data-target="#EduModel" ng-click='displayEdu()'>View All</button>
                        </h4>
                    </div>

                           <!-- Education modal popup page  -->

                                <div class="modal fade" id="EduModel" role="dialog">
                                    <div class="modal-dialog  modal-lg">
                                    
                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h6 class="modal-title">Education</h6>
                                        </div>
                                        <div class="modal-body report-modal-body">
                                            <table class="table">
                                            <thead>
                                            <tr>
                                                <th>Sr No</th>
                                                <th>Title</th>
                                                <th>College/University</th>
                                                <th>Location</th>
                                                <th>Duration</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr ng-repeat="x in edu">
                                                <td>{{ x.pos }}</td>
                                                <td>{{ x.eduTitle }}</td>
                                                <td>{{ x.eduPlace }}</td>
                                                <td>{{ x.eduLocation }}</td>
                                                <td>{{ x.eduDuration }}</td>
                                                <td><button data-toggle="collapse" href="#collapse6" ng-click='editEdu(x.pos)' data-dismiss="modal"> <span class="glyphicon glyphicon-edit"></button></td>
                                                <td><button ng-click='deleteEdu(x.pos)'> <span class="glyphicon glyphicon-trash"></button></td>
                                            </tr>
                                        
                                            </tbody>
                                        </table>
                                        </div>
                                        <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                    
                                    </div>
                                </div>
                                <!-- end education modal  -->
                            

                    <div id="collapse6" class="panel-collapse collapse">
                        <div class="panel-body">
                            <form ng-submit='saveEdu()'>
                                <div class='row'>
                                    <div class="input-field col s9">
                                        Title
                                        <input type="text" ng-model="eduTitle" class="form-control" required>
                                    </div>
                                    <div class="input-field col s3">
                                        Display Position
                                        <input type="number" ng-model="pos" class="form-control" required>
                                    </div>
                                </div> 
                                <br>
                                <div class='row'>
                                    <div class="input-field col s4">
                                        <div class="form-group">
                                            School/College/University
                                            <input type="text" ng-model="eduPlace" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="input-field col s4">
                                        <div class="form-group">
                                            Location
                                            <input type="text" ng-model="eduLocation" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="input-field col s4">
                                        <div class="form-group">
                                            Duration
                                            <input type="text" ng-model="eduDuration" class="form-control" required>
                                        </div> 
                                    </div>
                                </div>
                                <button type="submit" id='submit-edu' class="btn btn-default">Add</button>
                                <a ng-click="updateEdu()" id='update-edu' class="btn btn-default">Update</a>
                    
                            </form>
                        </div>
                        <div class="panel-footer"></div>
                    </div>
                </div>
                <br>
                <!--End of Education panel-->

                <!--Achievements Panel-->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                        <a data-toggle="collapse" href="#collapse7"><i class="material-icons prefix">play_circle_outline</i></a>&nbsp;&nbsp;&nbsp;Achievements
                        <button type="submit" id='view-achiev' class="btn btn-default" data-toggle="modal" data-target="#AchModel" ng-click='displayAch()'>View All</button>
                        </h4>
                    </div>

                    
                           <!-- Achievements modal popup page  -->

                                <div class="modal fade" id="AchModel" role="dialog">
                                    <div class="modal-dialog  modal-lg">
                                    
                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h6 class="modal-title">Achievments</h6>
                                        </div>
                                        <div class="modal-body report-modal-body">
                                            <table class="table">
                                            <thead>
                                            <tr>
                                                <th>Sr No</th>
                                                <th>Title</th>
                                                <th>Description</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr ng-repeat="x in ach">
                                                <td>{{ x.pos }}</td>
                                                <td>{{ x.achTitle }}</td>
                                                <td>{{ x.achDescr }}</td>
                                                <td><button data-toggle="collapse" href="#collapse7" ng-click='editAch(x.pos)' data-dismiss="modal"> <span class="glyphicon glyphicon-edit"></button></td>
                                                <td><button ng-click='deleteAch(x.pos)'> <span class="glyphicon glyphicon-trash"></button></td>
                                            </tr>
                                        
                                            </tbody>
                                        </table>
                                        </div>
                                        <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                    
                                    </div>
                                </div>
                                <!-- end Achievements modal  -->
                            

                    <div id="collapse7" class="panel-collapse collapse">
                        <div class="panel-body">
                            <form ng-submit="saveAch()">
                                <div class="row">
                                    <div class="input-field col s9">
                                        Title
                                        <input type="text" ng-model="achTitle" class="form-control" required>
                                    </div>
                                    <div class="input-field col s3">
                                        Display Position
                                        <input type="number" ng-model="pos" class="form-control" required>
                                    </div>
                                </div> 
                                <br>
                                <div class="input-field col s6">
                                     Description
                                    <input type="text" ng-model="achDescr" class="form-control" required>
                                </div>
                                <br>
                                 <button type="submit" id='submit-ach' class="btn btn-default">Add</button>
                                <a ng-click="updateAch()" id='update-ach' class="btn btn-default">Update</a>
                    
                            </form>
                        </div>
                        <div class="panel-footer"></div>
                    </div>
                </div>
                <br>
                <!--End of Achievements panel-->

                
                <!--Testimonials Panel-->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                        <a data-toggle="collapse" href="#collapse8"><i class="material-icons prefix">play_circle_outline</i></a>&nbsp;&nbsp;&nbsp;Testimonials
                        <button type="submit" id='view-achiev' class="btn btn-default" data-toggle="modal" data-target="#TestModel" ng-click='displayTest()'>View All</button>
                        </h4>
                    </div>

                    
                           <!-- Testimonials modal popup page  -->

                                <div class="modal fade" id="TestModel" role="dialog">
                                    <div class="modal-dialog  modal-lg">
                                    
                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h6 class="modal-title">Testimonials</h6>
                                        </div>
                                        <div class="modal-body report-modal-body">
                                            <table class="table">
                                            <thead>
                                            <tr>
                                                <th>Sr No</th>
                                                <th>By</th>
                                                <th>Designation</th>
                                                <th>Description</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr ng-repeat="x in test">
                                                <td>{{ x.pos }}</td>
                                                <td>{{ x.testBy }}</td>
                                                <td>{{ x.testDes }}</td>
                                                <td>{{ x.testDescr }}</td>
                                                <td><button data-toggle="collapse" href="#collapse8" ng-click='editTest(x.pos)' data-dismiss="modal"> <span class="glyphicon glyphicon-edit"></button></td>
                                                <td><button ng-click='deleteTest(x.pos)'> <span class="glyphicon glyphicon-trash"></button></td>
                                            </tr>
                                        
                                            </tbody>
                                        </table>
                                        </div>
                                        <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                    
                                    </div>
                                </div>
                                <!-- end Achievements modal  -->
                            

                    <div id="collapse8" class="panel-collapse collapse">
                        <div class="panel-body">
                            <form ng-submit="saveTest()">
                                <div class="row">
                                    <div class="input-field col s4">
                                        By
                                        <input type="text" ng-model="testBy" class="form-control" required>
                                    </div>
                                    <div class="input-field col s4">
                                        Designation
                                        <input type="text" ng-model="testDes" class="form-control" required>
                                    </div>
                                    <div class="input-field col s2">
                                        Display Position
                                        <input type="number" ng-model="pos" class="form-control" required>
                                    </div>
                                </div> 
                                <br>
                                <div class="input-field col s6">
                                     Description
                                    <textarea class="form-control" ng-model="testDescr" rows="5" id="comment"></textarea>
                                </div>
                                <br>
                                 <button type="submit" id='submit-test' class="btn btn-default">Add</button>
                                <a ng-click="updateTest()" id='update-test' class="btn btn-default">Update</a>
                    
                            </form>
                        </div>
                        <div class="panel-footer"></div>
                    </div>
                </div>
                <br>
                <!--End of Testimonials panel-->




            </div>
            <br>
            
        </div>

        <div id="Services" class="tabcontent">
            <br>
            <div class="row">
                <div class="input-field col s9">
                    <h5>Services</h5>
                </div>
                <div class="input-field col s3">
                    <button type="submit" ng-click="displayService()" class="btn btn-default" data-toggle="modal" data-target="#ServiceModel" >View All</button>
                </div>
            </div>
              
        <!-- Services modal popup page  -->

            <div class="modal fade" id="ServiceModel" role="dialog">
                <div class="modal-dialog  modal-lg">
                
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h6 class="modal-title">Services</h6>
                    </div>
                    <div class="modal-body report-modal-body">
                        <table class="table">
                        <thead>
                        <tr>
                            <th>Sr No</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr ng-repeat="x in services">
                            <td>{{ x.pos }}</td>
                            <td>{{ x.serviceTitle }}</td>
                            <td>{{ x.serviceDescr }}</td>
                            <td><button data-toggle="collapse" ng-click='editService(x.pos)' data-dismiss="modal"> <span class="glyphicon glyphicon-edit"></button></td>
                            <td><button ng-click='deleteService(x.pos)'> <span class="glyphicon glyphicon-trash"></button></td>
                        </tr>
                    
                        </tbody>
                    </table>
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
                
                </div>
            </div>
            <!-- end Services modal  -->
        

            <hr>
            <form ng-submit="saveService()">
                <div class='row'>
                    <div class="input-field col s9">
                        Title
                        <input type="text" ng-model="serviceTitle" class="form-control" required>
                    </div> 
                    <div class="input-field col s3">
                        Display Position
                        <input type="number" ng-model="pos" class="form-control" required>
                    </div> 
                </div>
                <br>
                <div class="input-field col s6">
                     Description
                    <textarea class="form-control" ng-model="serviceDescr" rows="5" id="comment" required></textarea>
                </div>
                <br>
                <button type="submit" id='submit-service' class="btn btn-default">Add</button>
                <a ng-click="updateService()" id='update-service' class="btn btn-default">Update</a>
                    
            </form>
            <br>
        </div>

        <div id="Portfolio" class="tabcontent">

              <br>
            <div class="row">
                <div class="input-field col s9">
                    <h5>Portfolio</h5>
                </div>
                <div class="input-field col s3">
                    <button type="submit" ng-click="displayPort()" class="btn btn-default" data-toggle="modal" data-target="#PortModel" >View All</button>
                </div>
            </div>
            <hr>
              
        <!-- Portfolio modal popup page  -->

            <div class="modal fade" id="PortModel" role="dialog">
                <div class="modal-dialog  modal-lg">
                
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h6 class="modal-title">Portfolio Items</h6>
                    </div>
                    <div class="modal-body report-modal-body">
                        <table class="table">
                        <thead>
                        <tr>
                            <th>Sr No</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Project Name</th>
                            <th>Client</th>
                            <th>Project Description</th>
                            <th>Date of Completion</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr ng-repeat="x in port">
                            <td>{{ x.pos }}</td>
                            <td>{{ x.portTitle }}</td>
                            <td>{{ x.portDescr }}</td>
                            <td>{{ x.portProjName }}</td>
                            <td>{{ x.portProjClient }}</td>
                            <td>{{ x.portProjDescr }}</td>
                            <td>{{ x.portProjDate }}</td>
                            <td><button data-toggle="collapse" ng-click='editPort(x.pos)' data-dismiss="modal"> <span class="glyphicon glyphicon-edit"></button></td>
                            <td><button ng-click='deletePort(x.pos)'> <span class="glyphicon glyphicon-trash"></button></td>
                        </tr>
                    
                        </tbody>
                    </table>
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
                
                </div>
            </div>
            <!-- end Portfolio  modal  -->
        

            <br>
            <form  id="uploadimage_portfolio" action="" method="post" enctype="multipart/form-data">
            <br>
            <div class='row'>
                <div class="input-field col s9">
                    Title
                    <input type="text" ng-model="portTitle" class="form-control" required>
                </div> 
                <div class="input-field col s3">
                    Display Position
                    <input type="number" ng-model="pos" class="form-control" required>
                </div> 
            </div>
            <div class="input-field col s6">
                Description
                <input type="text" ng-model="portDescr" class="form-control">
            </div>
            <div class='row'>
                <div class="input-field col s4">
                    Project Name
                    <input type="text" ng-model="portProjName" class="form-control" required>
                </div> 
                <div class="input-field col s4">
                    Date of Completion
                    <input type="text" ng-model="portProjDate" class="form-control" required>
                </div> 
                <div class="input-field col s4">
                    Client
                    <input type="text" ng-model="portProjClient" class="form-control" required>
                </div> 
            </div> 
            <div class="input-field col s6">
                Project Details
                <textarea class="form-control" ng-model="portProjDescr" rows="5" id="comment" required></textarea>
            </div>
            
            <br>
           
     <!--Upload portfolio  picture  -->
            <div class="main">
            <hr>
            <div id="image_preview"><img id="port_previewing" src="noimage.png" alt="Project Image" style="width:250px;height:230px;"/></div>
            <hr id="line">
            <div id="selectImage">
                Upload project image
                <br>
                <div class='row'>
                    <div class="input-field col s8"> 
                        <input type="file" name="file" id="port_file" class="form-control" required />
                    </div>
                    <div class="input-field col s4">
                        <button type="submit" class="btn btn-default" value="Upload">Upload</button>
                    </div>
                </div>
            </div>
            </div>
            <!--
            <h4 id='loading' >loading..</h4>
            <div id="message"></div>
            -->

        
            <!-- end upload portfolio picture -->


            <br><br>
            <button type="button" id='submit-portfolio' ng-click="savePort()" class="btn btn-default">Add</button>
            <a ng-click="updatePort()" id='update-portfolio' class="btn btn-default">Update</a>
    
            </form>
            <br><br>
    
            

        </div>

        <!--   Blog form starts here -->
        <div id="Blog" class="tabcontent">
            
              <br>
            <div class="row">
                <div class="input-field col s9">
                    <h5>Blogs</h5>
                </div>
                <div class="input-field col s3">
                    <button type="submit" ng-click="displayBlog()" class="btn btn-default" data-toggle="modal" data-target="#BlogModel" >View All</button>
                </div>
            </div>
            <hr>
              
        <!-- Blog modal popup page  -->

            <div class="modal fade" id="BlogModel" role="dialog">
                <div class="modal-dialog  modal-lg">
                
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h6 class="modal-title">Blogs</h6>
                    </div>
                    <div class="modal-body report-modal-body">
                        <table class="table">
                        <thead>
                        <tr>
                            <th>Sr No</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Blog url</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr ng-repeat="x in blogs">
                            <td>{{ x.pos }}</td>
                            <td>{{ x.blogTitle }}</td>
                            <td>{{ x.blogDescr }}</td>
                            <td>{{ x.blogUrl }}</td>
                            <td><button data-toggle="collapse" ng-click='editBlog(x.pos)' data-dismiss="modal"> <span class="glyphicon glyphicon-edit"></button></td>
                            <td><button ng-click='deleteBlog(x.pos)'> <span class="glyphicon glyphicon-trash"></button></td>
                        </tr>
                    
                        </tbody>
                    </table>
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
                
                </div>
            </div>
            <!-- end Blog  modal  -->
        

            <br>
            <form  id="uploadimage_blog" action="" method="post" enctype="multipart/form-data">
            <br>
            <div class='row'>
                <div class="input-field col s9">
                    Title
                    <input type="text" ng-model="blogTitle" class="form-control" required>
                </div> 
                <div class="input-field col s3">
                    Display Position
                    <input type="number" ng-model="pos" class="form-control" required>
                </div> 
            </div>
            
            <div class="input-field col s6">
                Description
                <textarea class="form-control" ng-model="blogDescr" rows="5" id="comment" required></textarea>
            </div>

            <div class="input-field col s6">
                Blog Url
                <input type="text" ng-model="blogUrl" class="form-control" required>
            </div> 
            
            <br>
           
     <!--Upload Blog Image  -->
            <div class="main">
            <hr>
            <div id="blog_image_preview"><img id="blog_previewing" src="noimage.png" alt="Blog Image" style="width:250px;height:230px;"/></div>
            <hr id="line">
            <div id="selectImage">
                Upload Blog Image
                <br>
                <div class='row'>
                    <div class="input-field col s8"> 
                        <input type="file" name="file" id="blog_file" class="form-control" required />
                    </div>
                    <div class="input-field col s4">
                        <button type="submit" class="btn btn-default" value="Upload">Upload</button>
                    </div>
                </div>
            </div>
            </div>
            <!--
            <h4 id='loading' >loading..</h4>
            <div id="message"></div>
            -->

        
            <!-- end upload portfolio picture -->


            <br><br>
            <button type="button" id='submit-blog' ng-click="saveBlog()" class="btn btn-default">Add</button>
            <a ng-click="updateBlog()" id='update-blog' class="btn btn-default">Update</a>
    
            </form>
            <br><br>
        </div>

        <!-- End of blog form -->

        <div id="Contact" class="tabcontent">
            <div class="input-field col s9">
                    <h5>Contact</h5>
            </div>
            <hr>
            
            <form  action="" method="post">
            <br>
            <div class="input-field col s6">
                Email
                <input type="text" ng-model="contact_email" class="form-control" required>
            </div> 
            <div class="input-field col s6">
                Contact No
                <input type="text" ng-model="contact_no" class="form-control" required>
            </div> 
            <br>
            <div id='textarea' class="input-field col s6">
                Address
                <textarea class="form-control" ng-model="contact_address" rows="5" id="comment" required></textarea>
            </div>
            <br>
           
            <br><br>
            <button type="button" id='submit-contact' ng-click="saveContact()" class="btn btn-default">Submit</button>
            </form>
            <br><br>
        </div>
        <br>
         

</div>

</body>

