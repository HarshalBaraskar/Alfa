



angular.module('portForm', [])
   .controller('HomeCtrl', ['$scope', '$http', function ($scope, $http) {
      
      
      
      // get home portfolio function
      $scope.getHome = function () {
            alert('hi');
            var config = {
                headers : {
                    'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'
                }
            }
            $http.get('http://localhost/wordpress/wp-json/alfa/test', {params:{data:'Home',
                first_name:$scope.first_name,
                last_name:$scope.last_name,
                profession:$scope.profession,
                aboutme_title:$scope.aboutmeTitle,
                aboutme_summary:$scope.aboutmeSummary,
                attachment_id : attachment_id,
                 user_id : userid,}}, config)
            .success(function (data, status, headers, config) {
                $scope.results = data;
                alert(data.msg);
                
            })
            .error(function (data, status, header, config) {
                $scope.results = "Data: " + data +
                    "<hr />status: " + status +
                    "<hr />headers: " + header +
                    "<hr />config: " + config;
            });
      }

      // get experience function
    
    $scope.getExp = function () {
            alert($scope.pos);
            var config = {
                headers : {
                    'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'
                }
            }
            $http.get('http://localhost/wordpress/wp-json/alfa/getExp', {params:{data:'Resume',
                title:$scope.title,
                pos:$scope.pos,
                descr:$scope.descr,
                place:$scope.place,
                location:$scope.location,
                duration:$scope.duration,
                 user_id : userid,}}, config)
            .success(function (data, status, headers, config) {
                $scope.results = data;
                alert(data.msg);
                // set form fields to empty value
                $scope.title = "";
                $scope.pos = "";
                $scope.descr = "";
                $scope.place = "";
                $scope.location = "";
                $scope.duration = "";

            })
            .error(function (data, status, header, config) {
                $scope.results = "Data: " + data +
                    "<hr />status: " + status +
                    "<hr />headers: " + header +
                    "<hr />config: " + config;
            });
      }

      // Function displays experiences

      
    $scope.displayExp = function () {
            
            var config = {
                headers : {
                    'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'
                }
            }
            $http.get('http://localhost/wordpress/wp-json/alfa/displayExp', {params:{data:'Resume',
                 user_id : userid,}}, config)
            .success(function (data, status, headers, config) {
                $scope.results = data;
                $scope.experiences = data.experiences;
                alert(data.msg);
                
            })
            .error(function (data, status, header, config) {
                $scope.results = "Data: " + data +
                    "<hr />status: " + status +
                    "<hr />headers: " + header +
                    "<hr />config: " + config;
            });
      }

      // Delete experience

       
    $scope.deleteExp = function (pos) {

            alert(pos);    
            var config = {
                headers : {
                    'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'
                }
            }
            $http.get('http://localhost/wordpress/wp-json/alfa/deleteExp', {params:{data:'Resume',
                 pos : pos,
                 user_id : userid,}}, config)
            .success(function (data, status, headers, config) {
                $scope.results = data;
                alert(data.msg);
                
            })
            .error(function (data, status, header, config) {
                $scope.results = "Data: " + data +
                    "<hr />status: " + status +
                    "<hr />headers: " + header +
                    "<hr />config: " + config;
            });

      }

      // Edit ecperience

       
    $scope.editExp = function (pos) {

            var labels;
            alert(pos); 
            document.getElementById('collapse1').className="panel-collapse collapse";
            document.getElementById('submit-exp').style.display="none";
            document.getElementById('update-exp').style.display="block";
                    
            var config = {
                headers : {
                    'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'
                }
            }
            $http.get('http://localhost/wordpress/wp-json/alfa/editExp', {params:{data:'Resume',
                 pos : pos,
                 user_id : userid,}}, config)
            .success(function (data, status, headers, config) {
                $scope.results = data;
                alert(data.msg);
                $scope.title = data.title;
                $scope.pos = data.pos;
                $scope.descr = data.descr;
                $scope.place = data.place;
                $scope.location = data.location;
                $scope.duration = data.duration;
                
            })
            .error(function (data, status, header, config) {
                $scope.results = "Data: " + data +
                    "<hr />status: " + status +
                    "<hr />headers: " + header +
                    "<hr />config: " + config;
            });


      }

 // Update ecperience

       
    $scope.updateExp = function (pos) {
             

            var labels;
            document.getElementById('submit-exp').style.display="block";
            document.getElementById('update-exp').style.display="none";
          
            var config = {
                headers : {
                    'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'
                }
            }
            $http.get('http://localhost/wordpress/wp-json/alfa/updateExp', {params:{data:'Resume',
                title:$scope.title,
                pos:$scope.pos,
                descr:$scope.descr,
                place:$scope.place,
                location:$scope.location,
                duration:$scope.duration,
                 user_id : userid,}}, config)
            .success(function (data, status, headers, config) {
                $scope.results = data;
                alert(data.msg); 
                $scope.title = data.title;
                $scope.pos = data.pos;
                $scope.descr = data.descr;
                $scope.place = data.place;
                $scope.location = data.location;
                $scope.duration = data.duration;    
            })
            .error(function (data, status, header, config) {
                $scope.results = "Data: " + data +
                    "<hr />status: " + status +
                    "<hr />headers: " + header +
                    "<hr />config: " + config;
            });

      }

      // Experience functions ends here

      // Technical functios starts here

       // save tech skill function
    
    $scope.saveTechSkill = function () {
            alert($scope.pos);
            var config = {
                headers : {
                    'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'
                }
            }
            $http.get('http://localhost/wordpress/wp-json/alfa/saveTechSkill', {params:{data:'Resume',
                pos:$scope.pos,
                techSkillName:$scope.techSkillName,
                techSkillNumber:$scope.techSkillNumber,
                user_id : userid,}}, config)
            .success(function (data, status, headers, config) {
                $scope.results = data;
                alert(data.msg);
                // set form fields to empty value
                $scope.techSkillName = "";
                $scope.techSkillNumber = "";
                $scope.pos = "";
               
            })
            .error(function (data, status, header, config) {
                $scope.results = "Data: " + data +
                    "<hr />status: " + status +
                    "<hr />headers: " + header +
                    "<hr />config: " + config;
            });
      }

      // Function displays tech Skills

      
    $scope.displayTechSkill = function () {
            
            var config = {
                headers : {
                    'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'
                }
            }
            $http.get('http://localhost/wordpress/wp-json/alfa/displayTechSkill', {params:{data:'Resume',
                 user_id : userid,}}, config)
            .success(function (data, status, headers, config) {
                $scope.results = data;
                $scope.techSkills = data.techSkills;
                alert(data.msg);
                
            })
            .error(function (data, status, header, config) {
                $scope.results = "Data: " + data +
                    "<hr />status: " + status +
                    "<hr />headers: " + header +
                    "<hr />config: " + config;
            });
      }

      // Delete tech Skill

       
    $scope.deleteTechSkill = function (pos) {

            alert(pos);    
            var config = {
                headers : {
                    'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'
                }
            }
            $http.get('http://localhost/wordpress/wp-json/alfa/deleteTechSkill', {params:{data:'Resume',
                 pos : pos,
                 user_id : userid,}}, config)
            .success(function (data, status, headers, config) {
                $scope.results = data;
                alert(data.msg);
                
            })
            .error(function (data, status, header, config) {
                $scope.results = "Data: " + data +
                    "<hr />status: " + status +
                    "<hr />headers: " + header +
                    "<hr />config: " + config;
            });

      }

      // Edit tech Skill

       
    $scope.editTechSkill = function (pos) {

            var labels;
            alert(pos); 
            document.getElementById('collapse3').className="panel-collapse collapse";
            document.getElementById('submit-tech-skill').style.display="none";
            document.getElementById('update-tech-skill').style.display="block";
                    
            var config = {
                headers : {
                    'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'
                }
            }
            $http.get('http://localhost/wordpress/wp-json/alfa/editTechSkill', {params:{data:'Resume',
                 pos : pos,
                 user_id : userid,}}, config)
            .success(function (data, status, headers, config) {
                $scope.results = data;
                alert(data.msg);
                $scope.pos = data.pos;
                $scope.techSkillName = data.techSkillName;
                $scope.techSkillNumber = data.techSkillNumber;
                 
            })
            .error(function (data, status, header, config) {
                $scope.results = "Data: " + data +
                    "<hr />status: " + status +
                    "<hr />headers: " + header +
                    "<hr />config: " + config;
            });


      }

 // Update tech Skill

       
    $scope.updateTechSkill = function (pos) {
             

            var labels;
            document.getElementById('submit-tech-skill').style.display="block";
            document.getElementById('update-tech-skill').style.display="none";
          
            var config = {
                headers : {
                    'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'
                }
            }
            $http.get('http://localhost/wordpress/wp-json/alfa/updateTechSkill', {params:{data:'Resume',
                pos:$scope.pos,
                techSkillName:$scope.techSkillName,
                techSkillNumber:$scope.techSkillNumber,
                user_id : userid,}}, config)
            .success(function (data, status, headers, config) {
                $scope.results = data;
                alert(data.msg); 
                $scope.techSkillName = "";
                $scope.techSkillNumber = "";
                $scope.pos = ""; 
            })
            .error(function (data, status, header, config) {
                $scope.results = "Data: " + data +
                    "<hr />status: " + status +
                    "<hr />headers: " + header +
                    "<hr />config: " + config;
            });

      }

      // Technical functions ends here =======================================================================

      // Language functios starts here =========================================================================

       // save lang skill function
    
    $scope.saveLangSkill = function () {
            alert($scope.pos);
            var config = {
                headers : {
                    'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'
                }
            }
            $http.get('http://localhost/wordpress/wp-json/alfa/saveLangSkill', {params:{data:'Resume',
                pos:$scope.pos,
                langSkillName:$scope.langSkillName,
                langSkillNumber:$scope.langSkillNumber,
                user_id : userid,}}, config)
            .success(function (data, status, headers, config) {
                $scope.results = data;
                alert(data.msg);
                // set form fields to empty value
                $scope.langSkillName = "";
                $scope.langSkillNumber = "";
                $scope.pos = "";
               
            })
            .error(function (data, status, header, config) {
                $scope.results = "Data: " + data +
                    "<hr />status: " + status +
                    "<hr />headers: " + header +
                    "<hr />config: " + config;
            });
      }

      // Function displays tech Skills

      
    $scope.displayLangSkill = function () {
            
            var config = {
                headers : {
                    'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'
                }
            }
            $http.get('http://localhost/wordpress/wp-json/alfa/displayLangSkill', {params:{data:'Resume',
                 user_id : userid,}}, config)
            .success(function (data, status, headers, config) {
                $scope.results = data;
                $scope.langSkills = data.langSkills;
                alert(data.msg);
                
            })
            .error(function (data, status, header, config) {
                $scope.results = "Data: " + data +
                    "<hr />status: " + status +
                    "<hr />headers: " + header +
                    "<hr />config: " + config;
            });
      }

      // Delete tech Skill

       
    $scope.deleteLangSkill = function (pos) {

            alert(pos);    
            var config = {
                headers : {
                    'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'
                }
            }
            $http.get('http://localhost/wordpress/wp-json/alfa/deleteLangSkill', {params:{data:'Resume',
                 pos : pos,
                 user_id : userid,}}, config)
            .success(function (data, status, headers, config) {
                $scope.results = data;
                alert(data.msg);
                
            })
            .error(function (data, status, header, config) {
                $scope.results = "Data: " + data +
                    "<hr />status: " + status +
                    "<hr />headers: " + header +
                    "<hr />config: " + config;
            });

      }

      // Edit tech Skill

       
    $scope.editLangSkill = function (pos) {

            var labels;
            alert(pos); 
            document.getElementById('collapse4').className="panel-collapse collapse";
            document.getElementById('submit-lang-skill').style.display="none";
            document.getElementById('update-lang-skill').style.display="block";
                    
            var config = {
                headers : {
                    'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'
                }
            }
            $http.get('http://localhost/wordpress/wp-json/alfa/editLangSkill', {params:{data:'Resume',
                 pos : pos,
                 user_id : userid,}}, config)
            .success(function (data, status, headers, config) {
                $scope.results = data;
                alert(data.msg);
                $scope.pos = data.pos;
                $scope.langSkillName = data.langSkillName;
                $scope.langSkillNumber = data.langSkillNumber;
                 
            })
            .error(function (data, status, header, config) {
                $scope.results = "Data: " + data +
                    "<hr />status: " + status +
                    "<hr />headers: " + header +
                    "<hr />config: " + config;
            });


      }

 // Update tech Skill

       
    $scope.updateLangSkill = function (pos) {
             

            var labels;
            document.getElementById('submit-lang-skill').style.display="block";
            document.getElementById('update-lang-skill').style.display="none";
          
            var config = {
                headers : {
                    'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'
                }
            }
            $http.get('http://localhost/wordpress/wp-json/alfa/updateLangSkill', {params:{data:'Resume',
                pos:$scope.pos,
                langSkillName:$scope.langSkillName,
                langSkillNumber:$scope.langSkillNumber,
                user_id : userid,}}, config)
            .success(function (data, status, headers, config) {
                $scope.results = data;
                alert(data.msg); 
                $scope.langSkillName = "";
                $scope.langSkillNumber = "";
                $scope.pos = ""; 
            })
            .error(function (data, status, header, config) {
                $scope.results = "Data: " + data +
                    "<hr />status: " + status +
                    "<hr />headers: " + header +
                    "<hr />config: " + config;
            });

      }

        // Language functions ends here =======================================================================

      // Other functios starts here =========================================================================

       // save other skill function
    
    $scope.saveOtherSkill = function () {
            alert($scope.pos);
            var config = {
                headers : {
                    'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'
                }
            }
            $http.get('http://localhost/wordpress/wp-json/alfa/saveOtherSkill', {params:{data:'Resume',
                pos:$scope.pos,
                otherSkillName:$scope.otherSkillName,
                otherSkillNumber:$scope.otherSkillNumber,
                user_id : userid,}}, config)
            .success(function (data, status, headers, config) {
                $scope.results = data;
                alert(data.msg);
                // set form fields to empty value
                $scope.otherSkillName = "";
                $scope.otherSkillNumber = "";
                $scope.pos = "";
               
            })
            .error(function (data, status, header, config) {
                $scope.results = "Data: " + data +
                    "<hr />status: " + status +
                    "<hr />headers: " + header +
                    "<hr />config: " + config;
            });
      }

      // Function displays tech Skills

      
    $scope.displayOtherSkill = function () {
            
            var config = {
                headers : {
                    'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'
                }
            }
            $http.get('http://localhost/wordpress/wp-json/alfa/displayOtherSkill', {params:{data:'Resume',
                 user_id : userid,}}, config)
            .success(function (data, status, headers, config) {
                $scope.results = data;
                $scope.otherSkills = data.otherSkills;
                alert(data.msg);
                
            })
            .error(function (data, status, header, config) {
                $scope.results = "Data: " + data +
                    "<hr />status: " + status +
                    "<hr />headers: " + header +
                    "<hr />config: " + config;
            });
      }

      // Delete tech Skill

       
    $scope.deleteOtherSkill = function (pos) {

            alert(pos);    
            var config = {
                headers : {
                    'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'
                }
            }
            $http.get('http://localhost/wordpress/wp-json/alfa/deleteOtherSkill', {params:{data:'Resume',
                 pos : pos,
                 user_id : userid,}}, config)
            .success(function (data, status, headers, config) {
                $scope.results = data;
                alert(data.msg);
                
            })
            .error(function (data, status, header, config) {
                $scope.results = "Data: " + data +
                    "<hr />status: " + status +
                    "<hr />headers: " + header +
                    "<hr />config: " + config;
            });

      }

      // Edit tech Skill

       
    $scope.editOtherSkill = function (pos) {

            var labels;
            alert(pos); 
            document.getElementById('collapse5').className="panel-collapse collapse";
            document.getElementById('submit-other-skill').style.display="none";
            document.getElementById('update-other-skill').style.display="block";
                    
            var config = {
                headers : {
                    'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'
                }
            }
            $http.get('http://localhost/wordpress/wp-json/alfa/editOtherSkill', {params:{data:'Resume',
                 pos : pos,
                 user_id : userid,}}, config)
            .success(function (data, status, headers, config) {
                $scope.results = data;
                alert(data.msg);
                $scope.pos = data.pos;
                $scope.otherSkillName = data.otherSkillName;
                $scope.otherSkillNumber = data.otherSkillNumber;
                 
            })
            .error(function (data, status, header, config) {
                $scope.results = "Data: " + data +
                    "<hr />status: " + status +
                    "<hr />headers: " + header +
                    "<hr />config: " + config;
            });


      }

 // Update Other Skill

       
    $scope.updateOtherSkill = function (pos) {
             

            var labels;
            document.getElementById('submit-other-skill').style.display="block";
            document.getElementById('update-other-skill').style.display="none";
          
            var config = {
                headers : {
                    'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'
                }
            }
            $http.get('http://localhost/wordpress/wp-json/alfa/updateOtherSkill', {params:{data:'Resume',
                pos:$scope.pos,
                otherSkillName:$scope.otherSkillName,
                otherSkillNumber:$scope.otherSkillNumber,
                user_id : userid,}}, config)
            .success(function (data, status, headers, config) {
                $scope.results = data;
                alert(data.msg); 
                $scope.otherSkillName = "";
                $scope.otherSkillNumber = "";
                $scope.pos = ""; 
            })
            .error(function (data, status, header, config) {
                $scope.results = "Data: " + data +
                    "<hr />status: " + status +
                    "<hr />headers: " + header +
                    "<hr />config: " + config;
            });

      }
       // Others skills ends here ======================================================================

       // Education starts here =========================================================================

       // save edu skill function
    
    $scope.saveEdu = function () {
            alert($scope.pos);
            alert($scope.eduDuration);
            var config = {
                headers : {
                    'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'
                }
            }
            $http.get('http://localhost/wordpress/wp-json/alfa/saveEdu', {params:{data:'Resume',
                pos:$scope.pos,
                eduTitle:$scope.eduTitle,
                eduPlace:$scope.eduPlace,
                eduLocation:$scope.eduLocation,
                eduDuration:$scope.eduDuration,
                user_id : userid,}}, config)
            .success(function (data, status, headers, config) {
                $scope.results = data;
                alert(data.msg);
                // set form fields to empty value
                $scope.eduTitle = "";
                $scope.eduPlace = "";
                $scope.eduLocation = "";
                $scope.eduDuration = "";
                $scope.pos = "";
               
            })
            .error(function (data, status, header, config) {
                $scope.results = "Data: " + data +
                    "<hr />status: " + status +
                    "<hr />headers: " + header +
                    "<hr />config: " + config;
            });
      }

      // Function displays Education

      
    $scope.displayEdu = function () {
            
            var config = {
                headers : {
                    'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'
                }
            }
            $http.get('http://localhost/wordpress/wp-json/alfa/displayEdu', {params:{data:'Resume',
                 user_id : userid,}}, config)
            .success(function (data, status, headers, config) {
                $scope.results = data;
                $scope.edu = data.edu;
                alert(data.msg);
                
            })
            .error(function (data, status, header, config) {
                $scope.results = "Data: " + data +
                    "<hr />status: " + status +
                    "<hr />headers: " + header +
                    "<hr />config: " + config;
            });
      }

      // Delete Education

       
    $scope.deleteEdu = function (pos) {

            alert(pos);    
            var config = {
                headers : {
                    'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'
                }
            }
            $http.get('http://localhost/wordpress/wp-json/alfa/deleteEdu', {params:{data:'Resume',
                 pos : pos,
                 user_id : userid,}}, config)
            .success(function (data, status, headers, config) {
                $scope.results = data;
                alert(data.msg);
                
            })
            .error(function (data, status, header, config) {
                $scope.results = "Data: " + data +
                    "<hr />status: " + status +
                    "<hr />headers: " + header +
                    "<hr />config: " + config;
            });

      }

      // Edit Education

       
    $scope.editEdu = function (pos) {

            var labels;
            alert(pos); 
            document.getElementById('collapse6').className="panel-collapse collapse";
            document.getElementById('submit-edu').style.display="none";
            document.getElementById('update-edu').style.display="block";
                    
            var config = {
                headers : {
                    'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'
                }
            }
            $http.get('http://localhost/wordpress/wp-json/alfa/editEdu', {params:{data:'Resume',
                 pos : pos,
                 user_id : userid,}}, config)
            .success(function (data, status, headers, config) {
                $scope.results = data;
                alert(data.msg);
                $scope.pos = data.pos;
                $scope.eduTitle = data.eduTitle;
                $scope.eduPlace = data.eduPlace;
                $scope.eduLocation = data.eduLocation;
                $scope.eduDuration = data.eduDuration;
                 
            })
            .error(function (data, status, header, config) {
                $scope.results = "Data: " + data +
                    "<hr />status: " + status +
                    "<hr />headers: " + header +
                    "<hr />config: " + config;
            });


      }

 // Update Education

       
    $scope.updateEdu = function (pos) {
             

            var labels;
            document.getElementById('submit-edu').style.display="block";
            document.getElementById('update-edu').style.display="none";
          
            var config = {
                headers : {
                    'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'
                }
            }
            $http.get('http://localhost/wordpress/wp-json/alfa/updateEdu', {params:{data:'Resume',
                pos:$scope.pos,
                eduTitle:$scope.eduTitle,
                eduPlace:$scope.eduPlace,
                eduLocation:$scope.eduLocation,
                eduDuration:$scope.eduDuration,
                user_id : userid,}}, config)
            .success(function (data, status, headers, config) {
                $scope.results = data;
                alert(data.msg); 
                $scope.eduTitle = "";
                $scope.eduPlace = "";
                $scope.eduLocation = "";
                $scope.eduDuration = "";
                $scope.pos = "";
            })
            .error(function (data, status, header, config) {
                $scope.results = "Data: " + data +
                    "<hr />status: " + status +
                    "<hr />headers: " + header +
                    "<hr />config: " + config;
            });

      }


      
       // Achievments starts here =========================================================================

       // save  ach function
    
    $scope.saveAch = function () {
            alert($scope.pos);
            
            var config = {
                headers : {
                    'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'
                }
            }
            $http.get('http://localhost/wordpress/wp-json/alfa/saveAch', {params:{data:'Resume',
                pos:$scope.pos,
                achTitle:$scope.achTitle,
                achDescr:$scope.achDescr,
                user_id : userid,}}, config)
            .success(function (data, status, headers, config) {
                $scope.results = data;
                alert(data.msg);
                // set form fields to empty value
                $scope.achTitle = "";
                $scope.achDescr = "";
                $scope.pos = "";
               
            })
            .error(function (data, status, header, config) {
                $scope.results = "Data: " + data +
                    "<hr />status: " + status +
                    "<hr />headers: " + header +
                    "<hr />config: " + config;
            });
      }

      // Function displays Education

      
    $scope.displayAch = function () {
            
            var config = {
                headers : {
                    'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'
                }
            }
            $http.get('http://localhost/wordpress/wp-json/alfa/displayAch', {params:{data:'Resume',
                 user_id : userid,}}, config)
            .success(function (data, status, headers, config) {
                $scope.results = data;
                $scope.ach = data.ach;
                alert(data.msg);
                
            })
            .error(function (data, status, header, config) {
                $scope.results = "Data: " + data +
                    "<hr />status: " + status +
                    "<hr />headers: " + header +
                    "<hr />config: " + config;
            });
      }

      // Delete Education

       
    $scope.deleteAch = function (pos) {

            alert(pos);    
            var config = {
                headers : {
                    'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'
                }
            }
            $http.get('http://localhost/wordpress/wp-json/alfa/deleteAch', {params:{data:'Resume',
                 pos : pos,
                 user_id : userid,}}, config)
            .success(function (data, status, headers, config) {
                $scope.results = data;
                alert(data.msg);
                
            })
            .error(function (data, status, header, config) {
                $scope.results = "Data: " + data +
                    "<hr />status: " + status +
                    "<hr />headers: " + header +
                    "<hr />config: " + config;
            });

      }

      // Edit Education

       
    $scope.editAch = function (pos) {

            var labels;
            alert(pos); 
            document.getElementById('collapse7').className="panel-collapse collapse";
            document.getElementById('submit-ach').style.display="none";
            document.getElementById('update-ach').style.display="block";
                    
            var config = {
                headers : {
                    'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'
                }
            }
            $http.get('http://localhost/wordpress/wp-json/alfa/editAch', {params:{data:'Resume',
                 pos : pos,
                 user_id : userid,}}, config)
            .success(function (data, status, headers, config) {
                $scope.results = data;
                alert(data.msg);
                $scope.pos = data.pos;
                $scope.achTitle = data.achTitle;
                $scope.achDescr = data.achDescr;
            })
            .error(function (data, status, header, config) {
                $scope.results = "Data: " + data +
                    "<hr />status: " + status +
                    "<hr />headers: " + header +
                    "<hr />config: " + config;
            });


      }

 // Update Education

       
    $scope.updateAch = function (pos) {
             

            var labels;
            document.getElementById('submit-ach').style.display="block";
            document.getElementById('update-ach').style.display="none";
          
            var config = {
                headers : {
                    'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'
                }
            }
            $http.get('http://localhost/wordpress/wp-json/alfa/updateAch', {params:{data:'Resume',
                pos:$scope.pos,
                achTitle:$scope.achTitle,
                achDescr:$scope.achDescr,
                user_id : userid,}}, config)
            .success(function (data, status, headers, config) {
                $scope.results = data;
                alert(data.msg); 
                $scope.achTitle = "";
                $scope.achDescr = "";
                $scope.pos = "";
            })
            .error(function (data, status, header, config) {
                $scope.results = "Data: " + data +
                    "<hr />status: " + status +
                    "<hr />headers: " + header +
                    "<hr />config: " + config;
            });

      }


      
       // Testimonials starts here =========================================================================

       // save  Test function
    
    $scope.saveTest = function () {
            alert($scope.pos);
            
            var config = {
                headers : {
                    'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'
                }
            }
            $http.get('http://localhost/wordpress/wp-json/alfa/saveTest', {params:{data:'Resume',
                pos:$scope.pos,
                testBy:$scope.testBy,
                testDes:$scope.testDes,
                testDescr:$scope.testDescr,
                user_id : userid,}}, config)
            .success(function (data, status, headers, config) {
                $scope.results = data;
                alert(data.msg);
                // set form fields to empty value
                $scope.testBy = "";
                $scope.testDes = "";
                $scope.testDescr = "";
                $scope.pos = "";
               
            })
            .error(function (data, status, header, config) {
                $scope.results = "Data: " + data +
                    "<hr />status: " + status +
                    "<hr />headers: " + header +
                    "<hr />config: " + config;
            });
      }

      // Function displays Education

      
    $scope.displayTest = function () {
            
            var config = {
                headers : {
                    'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'
                }
            }
            $http.get('http://localhost/wordpress/wp-json/alfa/displayTest', {params:{data:'Resume',
                 user_id : userid,}}, config)
            .success(function (data, status, headers, config) {
                $scope.results = data;
                $scope.test = data.test;
                alert(data.msg);
                
            })
            .error(function (data, status, header, config) {
                $scope.results = "Data: " + data +
                    "<hr />status: " + status +
                    "<hr />headers: " + header +
                    "<hr />config: " + config;
            });
      }

      // Delete Education

       
    $scope.deleteTest = function (pos) {

            alert(pos);    
            var config = {
                headers : {
                    'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'
                }
            }
            $http.get('http://localhost/wordpress/wp-json/alfa/deleteTest', {params:{data:'Resume',
                 pos : pos,
                 user_id : userid,}}, config)
            .success(function (data, status, headers, config) {
                $scope.results = data;
                alert(data.msg);
                
            })
            .error(function (data, status, header, config) {
                $scope.results = "Data: " + data +
                    "<hr />status: " + status +
                    "<hr />headers: " + header +
                    "<hr />config: " + config;
            });

      }

      // Edit Education

       
    $scope.editTest = function (pos) {

            var labels;
            alert(pos); 
            document.getElementById('collapse8').className="panel-collapse collapse";
            document.getElementById('submit-test').style.display="none";
            document.getElementById('update-test').style.display="block";
                    
            var config = {
                headers : {
                    'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'
                }
            }
            $http.get('http://localhost/wordpress/wp-json/alfa/editTest', {params:{data:'Resume',
                 pos : pos,
                 user_id : userid,}}, config)
            .success(function (data, status, headers, config) {
                $scope.results = data;
                alert(data.msg);
                $scope.pos = data.pos;
                $scope.testBy = data.testBy;
                $scope.testDes = data.testDes;
                $scope.testDescr = data.testDescr;
            })
            .error(function (data, status, header, config) {
                $scope.results = "Data: " + data +
                    "<hr />status: " + status +
                    "<hr />headers: " + header +
                    "<hr />config: " + config;
            });


      }

 // Update Education

       
    $scope.updateTest = function (pos) {
             

            var labels;
            document.getElementById('submit-test').style.display="block";
            document.getElementById('update-test').style.display="none";
          
            var config = {
                headers : {
                    'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'
                }
            }
            $http.get('http://localhost/wordpress/wp-json/alfa/updateTest', {params:{data:'Resume',
                pos:$scope.pos,
                testBy:$scope.testBy,
                testDes:$scope.testDes,
                testDescr:$scope.testDescr,
                user_id : userid,}}, config)
            .success(function (data, status, headers, config) {
                $scope.results = data;
                alert(data.msg); 
                $scope.testBy = "";
                $scope.testDes = "";
                $scope.testDescr = "";
                $scope.pos = "";
            })
            .error(function (data, status, header, config) {
                $scope.results = "Data: " + data +
                    "<hr />status: " + status +
                    "<hr />headers: " + header +
                    "<hr />config: " + config;
            });

      }


 
       // Services starts here =========================================================================

       // save service function
    
    $scope.saveService = function () {
            alert($scope.pos);
            
            var config = {
                headers : {
                    'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'
                }
            }
            $http.get('http://localhost/wordpress/wp-json/alfa/saveService', {params:{data:'Resume',
                pos:$scope.pos,
                serviceTitle:$scope.serviceTitle,
                serviceDescr:$scope.serviceDescr,
                user_id : userid,}}, config)
            .success(function (data, status, headers, config) {
                $scope.results = data;
                alert(data.msg);
                // set form fields to empty value
                $scope.serviceTitle = "";
                $scope.serviceDescr = "";
                $scope.pos = "";
               
            })
            .error(function (data, status, header, config) {
                $scope.results = "Data: " + data +
                    "<hr />status: " + status +
                    "<hr />headers: " + header +
                    "<hr />config: " + config;
            });
      }

      // Function displays Education

      
    $scope.displayService = function () {
            
            var config = {
                headers : {
                    'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'
                }
            }
            $http.get('http://localhost/wordpress/wp-json/alfa/displayService', {params:{data:'Resume',
                 user_id : userid,}}, config)
            .success(function (data, status, headers, config) {
                $scope.results = data;
                $scope.services = data.services;
                alert(data.msg);
                
            })
            .error(function (data, status, header, config) {
                $scope.results = "Data: " + data +
                    "<hr />status: " + status +
                    "<hr />headers: " + header +
                    "<hr />config: " + config;
            });
      }

      // Delete Education

       
    $scope.deleteService = function (pos) {

            alert(pos);    
            var config = {
                headers : {
                    'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'
                }
            }
            $http.get('http://localhost/wordpress/wp-json/alfa/deleteService', {params:{data:'Resume',
                 pos : pos,
                 user_id : userid,}}, config)
            .success(function (data, status, headers, config) {
                $scope.results = data;
                alert(data.msg);
                
            })
            .error(function (data, status, header, config) {
                $scope.results = "Data: " + data +
                    "<hr />status: " + status +
                    "<hr />headers: " + header +
                    "<hr />config: " + config;
            });

      }

      // Edit Education

       
    $scope.editService = function (pos) {

            var labels;
            alert(pos); 
            document.getElementById('submit-service').style.display="none";
            document.getElementById('update-service').style.display="block";
                    
            var config = {
                headers : {
                    'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'
                }
            }
            $http.get('http://localhost/wordpress/wp-json/alfa/editService', {params:{data:'Resume',
                 pos : pos,
                 user_id : userid,}}, config)
            .success(function (data, status, headers, config) {
                $scope.results = data;
                alert(data.msg);
                $scope.pos = data.pos;
                $scope.serviceTitle = data.serviceTitle;
                $scope.serviceDescr = data.serviceDescr;
            })
            .error(function (data, status, header, config) {
                $scope.results = "Data: " + data +
                    "<hr />status: " + status +
                    "<hr />headers: " + header +
                    "<hr />config: " + config;
            });


      }

 // Update Service

       
    $scope.updateService = function (pos) {
             

            var labels;
            document.getElementById('submit-service').style.display="block";
            document.getElementById('update-service').style.display="none";
          
            var config = {
                headers : {
                    'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'
                }
            }
            $http.get('http://localhost/wordpress/wp-json/alfa/updateService', {params:{data:'Resume',
                pos:$scope.pos,
                serviceTitle:$scope.serviceTitle,
                serviceDescr:$scope.serviceDescr,
                user_id : userid,}}, config)
            .success(function (data, status, headers, config) {
                $scope.results = data;
                alert(data.msg); 
                $scope.serviceTitle = "";
                $scope.serviceDescr = "";
                $scope.pos = "";
            })
            .error(function (data, status, header, config) {
                $scope.results = "Data: " + data +
                    "<hr />status: " + status +
                    "<hr />headers: " + header +
                    "<hr />config: " + config;
            });

      }


      
 
       // Portfolio starts here =========================================================================

       // save Portfolio function
    
    $scope.savePort = function () {
            alert($scope.pos);
            
            var config = {
                headers : {
                    'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'
                }
            }
            $http.get('http://localhost/wordpress/wp-json/alfa/savePort', {params:{data:'Resume',
                pos:$scope.pos,
                portTitle:$scope.portTitle,
                portDescr:$scope.portDescr,
                portProjName:$scope.portProjName,
                portProjClient:$scope.portProjClient,
                portProjDate:$scope.portProjDate,
                portProjDescr:$scope.portProjDescr,
                attachment_id:port_attachment_id,
                user_id : userid,}}, config)
            .success(function (data, status, headers, config) {
                $scope.results = data;
                alert(data.msg);
                // set form fields to empty value
                $scope.portTitle = "";
                $scope.portDescr = "";
                $scope.portProjName = "";
                $scope.portProjClient = "";
                $scope.portProjDate = "";
                $scope.portProjDescr = "";
                $scope.pos = "";
                document.getElementById('port_previewing').src="";
               
            })
            .error(function (data, status, header, config) {
                $scope.results = "Data: " + data +
                    "<hr />status: " + status +
                    "<hr />headers: " + header +
                    "<hr />config: " + config;
            });
      }

      // Function displays Portfolio

      
    $scope.displayPort = function () {
            
            var config = {
                headers : {
                    'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'
                }
            }
            $http.get('http://localhost/wordpress/wp-json/alfa/displayPort', {params:{data:'Resume',
                 user_id : userid,}}, config)
            .success(function (data, status, headers, config) {
                $scope.results = data;
                $scope.port = data.port;
                alert(data.msg);
                
            })
            .error(function (data, status, header, config) {
                $scope.results = "Data: " + data +
                    "<hr />status: " + status +
                    "<hr />headers: " + header +
                    "<hr />config: " + config;
            });
      }

      // Delete Portfolio

       
    $scope.deletePort = function (pos) {

            alert(pos);    
            var config = {
                headers : {
                    'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'
                }
            }
            $http.get('http://localhost/wordpress/wp-json/alfa/deletePort', {params:{data:'Resume',
                 pos : pos,
                 user_id : userid,}}, config)
            .success(function (data, status, headers, config) {
                $scope.results = data;
                alert(data.msg);
                
            })
            .error(function (data, status, header, config) {
                $scope.results = "Data: " + data +
                    "<hr />status: " + status +
                    "<hr />headers: " + header +
                    "<hr />config: " + config;
            });

      }

      // Edit Portfolio

       
    $scope.editPort = function (pos) {

            var labels;
            alert(pos); 
            document.getElementById('submit-portfolio').style.display="none";
            document.getElementById('update-portfolio').style.display="block";
                    
            var config = {
                headers : {
                    'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'
                }
            }
            $http.get('http://localhost/wordpress/wp-json/alfa/editPort', {params:{data:'Resume',
                 pos : pos,
                 user_id : userid,}}, config)
            .success(function (data, status, headers, config) {
                $scope.results = data;
                alert(data.msg);
                $scope.portTitle = data.portTitle;
                $scope.portDescr = data.portDescr;
                $scope.portProjName = data.portProjName;
                $scope.portProjClient = data.portProjClient;
                $scope.portProjDate = data.portProjDate;
                $scope.portProjDescr = data.portProjDescr;
                $scope.pos = data.pos;
                port_attachment_id = data.attachment_id;
                document.getElementById('port_previewing').src=data.image_url[0];;
            })
            .error(function (data, status, header, config) {
                $scope.results = "Data: " + data +
                    "<hr />status: " + status +
                    "<hr />headers: " + header +
                    "<hr />config: " + config;
            });


      }

 // Update Portfolio

       
    $scope.updatePort = function (pos) {
             

            var labels;
            document.getElementById('submit-portfolio').style.display="block";
            document.getElementById('update-portfolio').style.display="none";
          
            var config = {
                headers : {
                    'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'
                }
            }
            $http.get('http://localhost/wordpress/wp-json/alfa/updatePort', {params:{data:'Resume',
                pos:$scope.pos,
                portTitle:$scope.portTitle,
                portDescr:$scope.portDescr,
                portProjName:$scope.portProjName,
                portProjClient:$scope.portProjClient,
                portProjDate:$scope.portProjDate,
                portProjDescr:$scope.portProjDescr,
                attachment_id:port_attachment_id,
                user_id : userid,}}, config)
            .success(function (data, status, headers, config) {
                $scope.results = data;
                alert(data.msg); 
                $scope.portTitle = "";
                $scope.portDescr = "";
                $scope.portProjName = "";
                $scope.portProjClient = "";
                $scope.portProjDate = "";
                $scope.portProjDescr = "";
                $scope.pos = "";
                document.getElementById('port_previewing').src="";
            })
            .error(function (data, status, header, config) {
                $scope.results = "Data: " + data +
                    "<hr />status: " + status +
                    "<hr />headers: " + header +
                    "<hr />config: " + config;
            });

      }


      
       // Blog starts here =========================================================================

       // Blog  function
    
    $scope.saveBlog = function () {
            alert($scope.pos);
            
            var config = {
                headers : {
                    'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'
                }
            }
            $http.get('http://localhost/wordpress/wp-json/alfa/saveBlog', {params:{data:'Resume',
                pos:$scope.pos,
                blogTitle:$scope.blogTitle,
                blogDescr:$scope.blogDescr,
                blogUrl:$scope.blogUrl,
                attachment_id:blog_attachment_id,
                user_id : userid,}}, config)
            .success(function (data, status, headers, config) {
                $scope.results = data;
                alert(data.msg);
                // set form fields to empty value
                $scope.blogTitle = "";
                $scope.blogDescr = "";
                $scope.blogUrl = "";
                $scope.pos = "";
                document.getElementById('blog_previewing').src="";
               
            })
            .error(function (data, status, header, config) {
                $scope.results = "Data: " + data +
                    "<hr />status: " + status +
                    "<hr />headers: " + header +
                    "<hr />config: " + config;
            });
      }

      // Function displays Portfolio

      
    $scope.displayBlog = function () {
            alert('hi');
            var config = {
                headers : {
                    'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'
                }
            }
            $http.get('http://localhost/wordpress/wp-json/alfa/displayBlog', {params:{data:'Resume',
                 user_id : userid,}}, config)
            .success(function (data, status, headers, config) {
                $scope.results = data;
                $scope.blogs = data.blogs;
                alert(data.msg);
                
            })
            .error(function (data, status, header, config) {
                $scope.results = "Data: " + data +
                    "<hr />status: " + status +
                    "<hr />headers: " + header +
                    "<hr />config: " + config;
            });
      }

      // Delete Portfolio

       
    $scope.deleteBlog = function (pos) {

            alert(pos);    
            var config = {
                headers : {
                    'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'
                }
            }
            $http.get('http://localhost/wordpress/wp-json/alfa/deleteBlog', {params:{data:'Resume',
                 pos : pos,
                 user_id : userid,}}, config)
            .success(function (data, status, headers, config) {
                $scope.results = data;
                alert(data.msg);
                
            })
            .error(function (data, status, header, config) {
                $scope.results = "Data: " + data +
                    "<hr />status: " + status +
                    "<hr />headers: " + header +
                    "<hr />config: " + config;
            });

      }

      // Edit Portfolio

       
    $scope.editBlog = function (pos) {

            var labels;
            alert(pos); 
            document.getElementById('submit-blog').style.display="none";
            document.getElementById('update-blog').style.display="block";
                    
            var config = {
                headers : {
                    'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'
                }
            }
            $http.get('http://localhost/wordpress/wp-json/alfa/editBlog', {params:{data:'Resume',
                 pos : pos,
                 user_id : userid,}}, config)
            .success(function (data, status, headers, config) {
                $scope.results = data;
                alert(data.msg);
                $scope.blogTitle = data.blogTitle;
                $scope.blogDescr = data.blogDescr;
                $scope.blogUrl = data.blogUrl;
                $scope.pos = data.pos;
                blog_attachment_id = data.attachment_id;
                document.getElementById('blog_previewing').src=data.image_url[0];;
            })
            .error(function (data, status, header, config) {
                $scope.results = "Data: " + data +
                    "<hr />status: " + status +
                    "<hr />headers: " + header +
                    "<hr />config: " + config;
            });


      }

 // Update Blog

       
    $scope.updateBlog = function (pos) {
             

            var labels;
            document.getElementById('submit-blog').style.display="block";
            document.getElementById('update-blog').style.display="none";
          
            var config = {
                headers : {
                    'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'
                }
            }
            $http.get('http://localhost/wordpress/wp-json/alfa/updateBlog', {params:{data:'Resume',
                pos:$scope.pos,
                blogTitle:$scope.blogTitle,
                blogDescr:$scope.blogDescr,
                blogUrl:$scope.blogUrl,
                attachment_id:blog_attachment_id,
                user_id : userid,}}, config)
            .success(function (data, status, headers, config) {
                $scope.results = data;
                alert(data.msg); 
                $scope.blogTitle = "";
                $scope.blogDescr = "";
                $scope.blogUrl = "";
                $scope.pos = "";
                document.getElementById('blog_previewing').src="";
            })
            .error(function (data, status, header, config) {
                $scope.results = "Data: " + data +
                    "<hr />status: " + status +
                    "<hr />headers: " + header +
                    "<hr />config: " + config;
            });

      }

       
      // save Contact function
      $scope.saveContact = function () {
            alert('hi');
            var config = {
                headers : {
                    'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'
                }
            }
            $http.get('http://localhost/wordpress/wp-json/alfa/saveContact', {params:{data:'Contact',
                contact_email:$scope.contact_email,
                contact_no:$scope.contact_no,
                contact_address:$scope.contact_address,
                 user_id : userid,}}, config)
            .success(function (data, status, headers, config) {
                $scope.results = data;
                alert(data.msg);
                
            })
            .error(function (data, status, header, config) {
                $scope.results = "Data: " + data +
                    "<hr />status: " + status +
                    "<hr />headers: " + header +
                    "<hr />config: " + config;
            });
      }




      // Ready function to load portfolio data on page load ================================================
      angular.element(document).ready(function () {
          
            var config = {
                headers : {
                    'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'
                }
            }
          
            $http.get('http://localhost/wordpress/wp-json/alfa/getPortfolio', {params:{data:'Home',
                
                 user_id : userid,}}, config)
       
            .success(function (data, status, headers, config) {
                // home page
                $scope.results = data;
                console.log('data===========>',data);
                $scope.first_name = data.first_name;
                $scope.last_name  = data.last_name;
                $scope.profession = data.profession;
                $scope.aboutmeTitle = data.about_me_title;
                $scope.aboutmeSummary = data.about_me_summary;
                $scope.image = data.image_url;
                $scope.contact_email = data.contact_email;
                $scope.contact_no = data.contact_no;
                $scope.contact_address = data.contact_address;
                attachment_id = data.attachment_id;
                document.getElementById('previewing').src=data.image_url[0];

                // resume page
                document.getElementById('update-exp').style.display="none";
                document.getElementById('update-tech-skill').style.display="none";
                document.getElementById('update-lang-skill').style.display="none";
                document.getElementById('update-other-skill').style.display="none";
                document.getElementById('update-edu').style.display="none";
                document.getElementById('update-ach').style.display="none";
                document.getElementById('update-test').style.display="none";
                document.getElementById('update-service').style.display="none";
                document.getElementById('update-portfolio').style.display="none";
                document.getElementById('single-port').style.display="none";
                document.getElementById('update-blog').style.display="none";
            })
            .error(function (data, status, header, config) {
                $scope.results = "Data: " + data +
                    "<hr />status: " + status +
                    "<hr />headers: " + header +
                    "<hr />config: " + config;
            });
      
});

    
        

      

  }]);


//*************************************************************************************
  // ajax request to upload profile picture
var attachment_id=0;
var port_attachment_id=0;
var blog_attachment_id=0;

$(document).ready(function (e) {
$("#uploadimage").on('submit',(function(e) {
    alert('inside');
e.preventDefault();
$("#message").empty();
$('#loading').show();
$.ajax({
url: "http://localhost/wordpress/php-test/", // Url to which the request is send
type: "POST",             // Type of request to be send, called as method
data: new FormData(this), // Data sent to server, a set of key/value pairs (i.e. form fields and values)
contentType: false,       // The content type used when sending data to the server.
cache: false,             // To unable request pages to be cached
processData:false,        // To send DOMDocument or non processed data file it is set to false
success: function(data)   // A function to be called if request succeeds
{   
    //alert(data);
    data_str = data.toString();
    //alert(data_str);
    var data_array = JSON.parse(data_str);
    alert(data_array.msg);
    //alert(data_array.attachment_id);
    attachment_id = data_array.attachment_id;
    //alert(attachment_id);
$('#loading').hide();
$("#message").html(data);
}
});
}));


// Function to preview image after validation
$(function() {
$("#file").change(function() {
$("#message").empty(); // To remove the previous error message
var file = this.files[0];
var imagefile = file.type;
alert(imagefile);
var match= ["image/jpeg","image/png","image/jpg"];
if(!((imagefile==match[0]) || (imagefile==match[1]) || (imagefile==match[2])))
{
$('#previewing').attr('src','noimage.png');
$("#message").html("<p id='error'>Please Select A valid Image File</p>"+"<h4>Note</h4>"+"<span id='error_message'>Only jpeg, jpg and png Images type allowed</span>");
return false;
}
else
{
var reader = new FileReader();
reader.onload = imageIsLoaded;
reader.readAsDataURL(this.files[0]);
}
});
});
function imageIsLoaded(e) {
$("#file").css("color","green");
$('#image_preview').css("display", "block");
$('#previewing').attr('src', e.target.result);
$('#previewing').attr('width', '250px');
$('#previewing').attr('height', '230px');
};
});

//****************************************************************************************************;
 // ajax request to upload portfolio picture


$(document).ready(function (e) {
$("#uploadimage_portfolio").on('submit',(function(e) {
    alert('inside');
e.preventDefault();
$("#message").empty();
$('#loading').show();
$.ajax({
url: "http://localhost/wordpress/php-test/", // Url to which the request is send
type: "POST",             // Type of request to be send, called as method
data: new FormData(this), // Data sent to server, a set of key/value pairs (i.e. form fields and values)
contentType: false,       // The content type used when sending data to the server.
cache: false,             // To unable request pages to be cached
processData:false,        // To send DOMDocument or non processed data file it is set to false
success: function(data)   // A function to be called if request succeeds
{   
    //alert(data);
    data_str = data.toString();
    //alert(data_str);
    var data_array = JSON.parse(data_str);
    alert(data_array.msg);
    //alert(data_array.attachment_id);
    port_attachment_id = data_array.attachment_id;
    //alert(attachment_id);
$('#loading').hide();
$("#message").html(data);
}
});
}));


// Function to preview image after validation
$(function() {
$("#port_file").change(function() {
$("#message").empty(); // To remove the previous error message
var file = this.files[0];
var imagefile = file.type;
alert(imagefile);
var match= ["image/jpeg","image/png","image/jpg"];
if(!((imagefile==match[0]) || (imagefile==match[1]) || (imagefile==match[2])))
{
$('#port_previewing').attr('src','noimage.png');
$("#message").html("<p id='error'>Please Select A valid Image File</p>"+"<h4>Note</h4>"+"<span id='error_message'>Only jpeg, jpg and png Images type allowed</span>");
return false;
}
else
{
var reader = new FileReader();
reader.onload = imageIsLoaded;
reader.readAsDataURL(this.files[0]);
}
});
});
function imageIsLoaded(e) {
$("#port_file").css("color","green");
$('#image_preview').css("display", "block");
$('#port_previewing').attr('src', e.target.result);
$('#port_previewing').attr('width', '250px');
$('#port_previewing').attr('height', '230px');
};
});


//****************************************************************************************************;
 // ajax request to upload Blog Image


$(document).ready(function (e) {
$("#uploadimage_blog").on('submit',(function(e) {
    alert('inside');
e.preventDefault();
$("#message").empty();
$('#loading').show();
$.ajax({
url: "http://localhost/wordpress/php-test/", // Url to which the request is send
type: "POST",             // Type of request to be send, called as method
data: new FormData(this), // Data sent to server, a set of key/value pairs (i.e. form fields and values)
contentType: false,       // The content type used when sending data to the server.
cache: false,             // To unable request pages to be cached
processData:false,        // To send DOMDocument or non processed data file it is set to false
success: function(data)   // A function to be called if request succeeds
{   
    alert(data);
    data_str = data.toString();
    //alert(data_str);
    var data_array = JSON.parse(data_str);
    alert(data_array.msg);
    //alert(data_array.attachment_id);
    blog_attachment_id = data_array.attachment_id;
    //alert(attachment_id);
$('#loading').hide();
$("#message").html(data);
}
});
}));


// Function to preview image after validation
$(function() {
$("#blog_file").change(function() {
$("#message").empty(); // To remove the previous error message
var file = this.files[0];
var imagefile = file.type;
alert(imagefile);
var match= ["image/jpeg","image/png","image/jpg"];
if(!((imagefile==match[0]) || (imagefile==match[1]) || (imagefile==match[2])))
{
$('#blog_previewing').attr('src','noimage.png');
$("#message").html("<p id='error'>Please Select A valid Image File</p>"+"<h4>Note</h4>"+"<span id='error_message'>Only jpeg, jpg and png Images type allowed</span>");
return false;
}
else
{
var reader = new FileReader();
reader.onload = imageIsLoaded;
reader.readAsDataURL(this.files[0]);
}
});
});
function imageIsLoaded(e) {
$("#blog_file").css("color","green");
$('#blog_image_preview').css("display", "block");
$('#blog_previewing').attr('src', e.target.result);
$('#blog_previewing').attr('width', '250px');
$('#blog_previewing').attr('height', '230px');
};
});
