/**
 * Created by rvest on 6/21/2015.
 */
var orderApp = angular.module("orderApp", ['ui.select', 'ngResource']);
orderApp.controller("searchProductCtrl", function ($scope, $resource, $sce) {

    var res = $resource("http://localhost:8081/products/?q=", {}).query();
    res.$promise.then(
        function (products) {
            $scope.products = products;
        },
        function (status) {
            console.log(status);
        }
    );
    $scope.trustAsHtml = function (value) {
        return $sce.trustAsHtml(value);
    };

    $scope.refreshProducts = function (value) {
        var res = $resource("http://localhost:8081/products/?q=:q", {q: value}).query();
        res.$promise.then(
            function (products) {
                $scope.products = products;

            },
            function (status) {
                console.log(status);
            }
        );
    }
    $scope.submitForm = function () {
        alert('here');
    };
});