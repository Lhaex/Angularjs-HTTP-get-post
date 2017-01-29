var MeApp = angular.module('Jr', []);

MeApp.controller('ctrlr', function($scope, $http) {
  $http.get('test.php')
       .then(function(result){
          $scope.y = result.data;                
        });
 
$scope.insertData = function(){
    var config = {
        method : 'POST',
        url: 'insert.php',
        data: {
            'f' : $scope.fname,
            'l' : $scope.lname,
            'c' : $scope.cr
    }
    };
    var request = $http(config);
};
    
});