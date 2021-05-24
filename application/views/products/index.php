<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="utf-8">
        <title><?=$title?> :: CIBL</title>
        <link rel="icon" href="assets/img/favicon.ico" type="image/gif" sizes="16x16"> 
		<base href="<?=base_url();?>">
        <!-- bootstrap -->
        <link rel="stylesheet" href="assets/vendors/bootstrap/css/bootstrap.min.css">
		
        <!-- custom css  -->
        <link rel="stylesheet" href="assets/css/style.css">
	
    </head>
    
    <body>
        <div ng-app="taskOne" ng-controller="productCtrl">
            <div class="container">
                <div class="row py-3 mt-3">
                    <div class="col-md-10 offset-md-1">
                        <div class="row">
                            <div class="col-md-12">
                                <h5 class="font-weight-bold">Product&nbsp;List:</h5>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6 mb-3">
                                <div class="input-group">
                                    <input name="search" ng-model="keyword" type="text"class="form-control" placeholder="Search Product Here ..." id="searchInput">
                                    <div class="input-group-append">
                                        <button class="btn btn-info" type="button" id="searchBtn" ng-click="searchProducts()">Search</button>
                                    </div>
                                </div>    
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-12">
                                <div class="table-responsive">
                                    <table ng-show="productEmpt" class="table table-bordered table-hover" id="productTable">
                                        <tbody>
                                            <tr>
                                                <td colspan="6">
                                                    <p class="text-center">No Product Found ...</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    <table ng-show="productAll" class="table table-bordered table-hover" id="productTable">
                                        <thead class="bg-success text-white">
                                            <th>#</th>
                                            <th>Product&nbsp;Name</th>
                                            <th>Product&nbsp;Category</th>
                                            <th>Stock&nbsp;Amount</th>
                                            <th>Selling&nbsp;Price</th>
                                            <th>Cost&nbsp;Price</th>
                                        </thead>
                                     
                                        <tbody>
                                            <tr ng-repeat="(key, p) in products | orderBy:'-id'">
                                                <td>{{ key+1 }}</td>
                                                <td>
                                                <?php $product_id = "{{ p.product_id }}";  ?>
                                                    <a ng-href="<?php echo base_url('index.php/products/view/'.$product_id)?>">{{ p.product_name }}</a>
                                                </td>
                                                <td>{{ p.category_name }}</td>
                                                <td>{{ p.stock }}</td>
                                                <td>{{ p.selling_price }}</td>
                                                <td>{{ p.cost_price }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-6 mb-3">
                                <div class="input-group">
                                    <input name="offlineKeyword" ng-model="offlineKeyword" type="text"class="form-control" placeholder="Search Product Here ..." id="searchInput" ng-change="offProducts()">
                                </div>    
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="table-responsive">
                               
                                    <table ng-show="offlineProductsDiv" class="table table-bordered table-hover" id="productTable">
                                        <thead class="bg-secondary text-white">
                                            <th>#</th>
                                            <th>Product&nbsp;Name</th>
                                            <th>Product&nbsp;Category</th>
                                            <th>Stock&nbsp;Amount</th>
                                            <th>Selling&nbsp;Price</th>
                                            <th>Cost&nbsp;Price</th>
                                        </thead>
                                     
                                        <tbody>
                                            <tr ng-repeat="(key, p) in offlineProducts | filter: offlineKeyword | orderBy:'-id'">
                                                <td>{{ key+1 }}</td>
                                                <td>
                                                    <?php $product_id = "{{ p.product_id }}";  ?>
                                                    <a ng-href="<?php echo base_url('index.php/products/view/'.$product_id)?>">{{ p.product_name }}</a>
                                                </td>
                                                <td>{{ p.category_name }}</td>
                                                <td>{{ p.stock }}</td>
                                                <td>{{ p.selling_price }}</td>
                                                <td>{{ p.cost_price }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- jquery slim js  -->
        <script src="assets/vendors/jquery/jquery.slim.min.js"></script>

        <!-- bootstrap js  -->
        <script src="assets/vendors/bootstrap/js/bootstrap.min.js"></script>

        <!-- angular js  -->
        <script src="assets/vendors/angular/angular.min.js"></script>

        <!-- page js  -->
        <script src="assets/js/page/product.js"></script>
        
    </body>
</html