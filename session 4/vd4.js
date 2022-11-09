var app = angular.module('myApp', []);
app.controller('firstControllerScope', function ($scope) {
    // Initialize the model variables
    $scope.firstName = "chris";
});
app.controller('secondControllerScope', function ($scope) {
    // Initialize the model variables
    $scope.lastName = "Hemsworth";
    // Define utility function ()
    {
        return $scope.firstName + "" + $scope.lastName;
    };
});
app.controller('thirdControllerScope', function ($scope) {
    // Initialize the model variables
    $scope.middleName = "Whitelaw";
    $scope.lastName = "Pine";
    // Define utility function
    $scope.getFullName = function()
    {
        return $scope.firstName + " " + $scope.middleName + " " + $scope.lastName;
    };
});