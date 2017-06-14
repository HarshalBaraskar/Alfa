

angular.module('portForm', [])
  .controller('ResumeCtrl', ['$scope', '$http', function ($scope, $http) {
      
      
            alert('HI');
            debugger;
      $scope.getExp = function () {
            alert('HI');
            var config = {
                headers : {
                    'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'
                }
            }
            $http.get('http://localhost/wordpress/wp-json/alfa/resume', {params:{data:'Resume',
                title:$scope.title,
                descr:$scope.descr,
                location:$scope.location,
                duration:$scope.duration,
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

    //   angular.element(document).ready(function () {
          
    //         var config = {
    //             headers : {
    //                 'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'
    //             }
    //         }
          
    //         $http.get('http://localhost/wordpress/wp-json/alfa/getPortfolio', {params:{data:'Home',
                
    //              user_id : userid,}}, config)
       
    //         .success(function (data, status, headers, config) {
    //             $scope.results = data;
    //             console.log('data===========>',data);
    //             $scope.first_name = data.first_name;
    //             $scope.last_name  = data.last_name;
    //             $scope.profession = data.profession;
    //             $scope.aboutmeTitle = data.about_me_title;
    //             $scope.aboutmeSummary = data.about_me_summary;
    //             $scope.image = data.image_url;
    //             document.getElementById('previewPic').src=data.image_url[0];
    //         })
    //         .error(function (data, status, header, config) {
    //             $scope.results = "Data: " + data +
    //                 "<hr />status: " + status +
    //                 "<hr />headers: " + header +
    //                 "<hr />config: " + config;
    //         });
      
// });

      

  }]);

