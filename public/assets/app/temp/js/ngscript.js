var app = angular.module('didauday',[]);

app.controller('HomeController' ,function($scope,$http){
    $http.get('http://localhost/didauday/home').success(function(response){
        $scope.services = response;
    });
});