var app = angular.module('myApp', []);
app.controller('firstControllerObj', function ($scope) {
    $scope.firstModelObj = {
        firstName: "chiris"
    };
});
app.controller('secondControllerObj', function ($scope) {
    $scope.secondModelObj = {
        lastName: "Hemsworth"
    };
    $scope.getFullName = function () {
        return $scope.firstModelObj.lastName + "" + $scope.secondModelObj.lastName;
    };
});
app.controller('thirdControllerObj', function ($scope) {
    $scope.thirdModelObj = {
        middleName: "Whitelaw",
        lastName: "pine"
    };
    $scope.getFullName = function () {
        return $scope.firstModelObj.firstName + "" + $scope.thirdModelObj.middleName + "" + $scope.thirdModelObj.lastName;
    };
});