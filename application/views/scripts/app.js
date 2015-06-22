/**
 * Created by rvest on 6/21/2015.
 */
var app = angular.app("orderApp", [['ui.select']]);

app.controller("searchProductCtrl", function($scope, $resource) {
    var res = $resource("http://localhost:8181/?q=:search", {date: "@search"}).query("");
    res.$promise.then(
        function(products) {
            $scope.products = products;
        },
        function() {

        }
    )
});
