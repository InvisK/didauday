var app = angular.module('didauday',[]);

app.controller('HomeController' ,function($scope,$http){
    $http.get('http://localhost/didauday/home').success(function(response){
        $scope.services = response;

    });

    $scope.modal = function(state,id){
        $scope.state = state;
        if(state == 'detail'){
            $http.get('http://localhost/didauday/detail/' + id).success(function(res){
                $scope.detail = res;
                console.log(res);
            });
        }
        console.log(state,id);
       $("#m-a-a").modal('show');
    }
});