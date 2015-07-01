/**
 * Created by rvest on 6/21/2015.
 */
//var orderApp = angular.module("orderApp", ['ui.select', 'ngResource', 'ngSanitize', 'ui.bootstrap']);
var orderApp = angular.module("orderApp", ['ui.select', 'ngResource']);
orderApp.controller("searchProductCtrl", function ($scope, $resource, $sce) {

    var res = $resource("http://localhost:8081/products/?q=", {}).query();
    res.$promise.then(
        function (products) {
            $scope.products = products;
            ////only get 3 at a time
            //for (var i=0; i < products.length; i++) {
            //    $scope.addSlide(products[i].name);
            //}
        },
        function (status) {
            console.log(status);
        }
    );
    $scope.trustAsHtml = function (value) {
        return $sce.trustAsHtml(value);
    };

    //$scope.slides = [];
    //$scope.addSlide = function(text) {
    //    var newWidth = 600 +  $scope.slides.length + 1;
    //    $scope.slides.push({
    //        image: 'assets/images/thumb1.jpg',
    //        text: text
    //    });
    //};

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