//product details 

var app = angular.module('productApp', []);

app.config(["$locationProvider", function($locationProvider) { $locationProvider.html5Mode(true); }]);

app.controller('productDetailsCtrl', function($scope, $http,  $location) {
    var id = $location.path().split('/').slice(-1)[0];

    $http({
        method: 'GET',
        url: 'http://27.147.135.164/ecomm/api/products/get_product/'+id,
        
    })

    .then(function(response){ 
        $scope.product = response.data.product;
        $scope.distributors = response.data.distributor;
        $scope.reviews = response.data.reviewList;
        $scope.translators = response.data.translator;
        $scope.editors = response.data.editor;
        $scope.shareEditors = response.data.shar_e_editor;
        $scope.authors = response.data.additional_author;
        $scope.designers = response.data.designer;                   
    });
});