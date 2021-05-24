//products 
var app = angular.module('taskOne', []);

app.config(["$locationProvider", function($locationProvider) { $locationProvider.html5Mode(true); }]);

app.controller('productCtrl', function($scope, $http, $location) {
    
    $http({
        method: 'GET',
        url: 'http://27.147.135.164/ecomm/api/products/get_product_list',
        
    })
    .then(function(response){ 
        $scope.offlineProducts = response.data.product_list;
        
    
        if($scope.offlineProducts.length>0){
            $scope.offlineProductsDiv = true;
        }

        else{
            $scope.offlineProductsDiv = false;
        }
    });
    
    $scope.searchProducts = function(keyword) {

        if($scope.keyword != null && $.trim($scope.keyword) != ''){

            var $params = {};

            $params.search = $scope.keyword;
            
            //generate url
            $location.url($location.path()+'?search='+$scope.keyword);
            
            $http({
                method: 'GET',
                url: 'http://27.147.135.164/ecomm/api/products/get_product_list',
                params: $params
            })

            .then(function(response){ 
                $scope.products = response.data.product_list;

                if($scope.products.length>0){
                    $scope.productAll = true;
                    $scope.productEmpt = false;
                }

                else{
                    $scope.productAll = false;
                    $scope.productEmpt = true;
                }
            });
        }
        else{
            $scope.productEmpt = false;
            $scope.productAll = false;
            $location.url($location.path());
            $scope.products = [];
        }
    };
});
