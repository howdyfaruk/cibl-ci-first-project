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
        <div ng-app="productApp" ng-controller="productDetailsCtrl">
            <div class="container">
                <div class="card my-3" id="productsDiv">
                    <div class="card-header">
                        <h5 class="font-weight-bold text-center">Product&nbsp;Details</h5>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 py-3">
                                <ul class="list-group">
                                    <li class="list-group-item"><b>Product Name :  </b>{{ product.product_name }}</li>
                                    <li class="list-group-item"><b>Product SKU : </b>{{ product.sku }}</li>
                                    <li class="list-group-item"><b>Category : </b>{{ product.category_id }}</li>
                                    <li class="list-group-item"><b>Product Type : </b>{{ product.product_type_id }}</li>
                                    <li class="list-group-item"><b>Brand : </b>{{ product.brand_id }}</li>
                                    <li class="list-group-item"><b>Product Class : </b>{{ product.product_class_id }}</li>

                                    <li class="list-group-item"><b>Size : </b>{{ product.size }}</li>
                                    <li class="list-group-item"><b>Color : </b>{{ product.color }}</li>
                                    <li class="list-group-item"><b>Sleeve Length : </b>{{ product.sleeve_length }}</li>
                                    <li class="list-group-item"><b>Body Fitting : </b>{{ product.body_fitting }}</li>
                                    <li class="list-group-item"><b>Gender : </b>{{ product.gender }}</li>
                                    
                                    <li class="list-group-item"><b>Discount : </b>{{ product.discount_id }}</li>
                                    <li class="list-group-item"><b>Stock Amount : </b>{{ product.stock }}</li>
                                    <li class="list-group-item"><b>Selling Price :</b> {{ product.selling_price }}</li>
                                    <li class="list-group-item"><b>Cost Price :</b> {{ product.cost_price }}</li>
                                    <li class="list-group-item"><b>USD Price :</b> {{ product.usd_price }}</li>
                                    <li class="list-group-item"><b>Audio Product Price :</b> {{ product.audio_product_price }}</li>
                                    <li class="list-group-item"><b>Hard Cover Price :</b> {{ product.hardcover_price }}</li>
                                    <li class="list-group-item"><b>E Product Price :</b> {{ product.eproduct_price }}</li>
                                    <li class="list-group-item"><b>Country :</b> {{ product.country }}</li>

                                    <li class="list-group-item">
                                        <img class="img-fluid" ng-src="http://27.147.135.164/ecomm/assets/uploads/files/{{product.picture}}" alt="picture">
                                    </li>
                                    <li class="list-group-item">
                                        <a href="http://27.147.135.164/ecomm/assets/uploads/files/{{ product.product }}">Product </a>
                                        <!-- <b>Product :</b> {{ product.product }} -->
                                    </li>
                                </ul>
                            </div>

                            <div class="col-md-6 py-3">
                                <ul class="list-group">  
                                    <li class="list-group-item"><b>Total Reviews :</b> {{ product.total_reviews }}</li>
                                    <li class="list-group-item"><b>Review & Rating :</b> {{ product.review_rating }}</li>
                                    <li class="list-group-item"><b>User ID : </b>{{ product.user_id }}</li>
                                    <li class="list-group-item"><b>Publisher ID : </b>{{ product.publisher_id }}</li>
                                    <li class="list-group-item"><b>Author ID : </b>{{ product.author_id }}</li>
                                    <li class="list-group-item"><b>ISBN :</b> {{ product.isbn }}</li>
                                    <li class="list-group-item"><b>Language :</b> {{ product.language }}</li>
                                    <li class="list-group-item"><b>Cover :</b> {{ product.cover }}</li>
                                    <li class="list-group-item"><b>ISSN :</b> {{ product.issn }}</li>
                                    <li class="list-group-item"><b>Additional Author :</b> {{ product.additional_author }}</li>
                                    <li class="list-group-item"><b>Translator :</b> {{ product.translator }}</li>
                                    <li class="list-group-item"><b>Distributor :</b> {{ product.distributor }}</li>
                                    <li class="list-group-item"><b>Designer :</b> {{ product.designer }}</li>
                                    <li class="list-group-item"><b>Editor :</b> {{ product.editor }}</li>
                                    <li class="list-group-item"><b>Share Editor :</b> {{ product.shar_e_editor }}</li>
                                    <li class="list-group-item"><b>Edition :</b> {{ product.edition }}</li>
                                    <li class="list-group-item"><b>Total Page :</b> {{ product.total_page }}</li>

                                    <li class="list-group-item"><b>Popular? :</b> {{ product.is_popular }}</li>
                                    <li class="list-group-item"><b>Best Seller :</b> {{ product.is_best_seller }}</li>
                                    <li class="list-group-item"><b>New? :</b> {{ product.is_new }}</li>
                                    <li class="list-group-item"><b>Published? :</b> {{ product.is_published }}</li>
                                    <li class="list-group-item"><b>Published Time :</b> {{ product.published_at }}</li>
                                    <li class="list-group-item"><b>Updated Time :</b> {{ product.updated }}</li>

                                    
                                    <li class="list-group-item"><b>Discount Price :</b> {{ product.discount_price }}</li>
                                    <li class="list-group-item"><b>Discount :</b> {{ product.discount }}</li>
                                    <li class="list-group-item"><b>Expiry Date :</b> {{ product.expiry_date }}</li>
                                    <li class="list-group-item"><b>Discount Type :</b> {{ product.discount_type }}</li>
                                    
                                    <li class="list-group-item"><b>Review List :</b> {{ product.reviewList }}</li>
                                    <li class="list-group-item"><b>Translator :</b> {{ product.translator }}</li>
                                    <li class="list-group-item"><b>Type :</b> {{ product.type }}</li>
                                    <li class="list-group-item">
                                        <a href="http://27.147.135.164/ecomm/assets/uploads/files/{{ product.product_preview }}">Product Preview</a>
                                        <!-- <b>Product Preview :</b> {{ product.product_preview }} -->
                                    </li>
                                </ul>
                            </div>

                            <div class="col-md-6 py-3">
                                <ul class="list-group">
                                    <li class="list-group-item"><b>First Name :</b> {{ product.first_name }}</li>
                                    <li class="list-group-item"><b>Last Name :</b> {{ product.last_name }}</li>
                                    <li class="list-group-item"><b>Author Name :</b> {{ product.author_name }}</li>
                                    <li class="list-group-item"><b>Category Name :</b> {{ product.category_name }}</li>
                                    <li class="list-group-item"><b>Publisher Name :</b> {{ product.publisher_name }}</li>

                                    <li class="list-group-item"><b>Phone :</b> {{ product.phone }}</li>
                                    <li class="list-group-item"><b>Email :</b> {{ product.email }}</li>
                                    <li class="list-group-item"><b>Address :</b> {{ product.address }}</li>
                                    <li class="list-group-item"><b>Bio :</b> {{ product.bio }}</li>
                                    
                                    <li class="list-group-item"><b>Account Status :</b> {{ product.account_status }}</li>
                                    <li class="list-group-item"><b>IP Address :</b> {{ product.ipAddress }}</li>
                                    <li class="list-group-item"><b>Created By :</b> {{ product.createdBy }}</li>
                                    <li class="list-group-item"><b>Updated By :</b> {{ product.updatedBy }}</li>
                                    <li class="list-group-item"><b>Created :</b> {{ product.created }}</li>
                                </ul>
                            </div>

                            <div class="col-md-6 py-3">
                                <ul class="list-group">
                                    <li class="list-group-item"><b>Description :</b> {{ product.description }}</li>
                                   
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card my-3" id="distributorsDiv">
                    <div class="card-header">
                        <h5 class="font-weight-bold text-center">Distributors:</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 py-3" ng-repeat="distributor in distributors">
                                <ul class="list-group">
                                    <li class="list-group-item"><b>Distributor ID :</b> {{ distributor.id }}</li>
                                    <li class="list-group-item"><b> Type :</b> {{ distributor.type }}</li>
                                    <li class="list-group-item"><b> Name :</b> {{ distributor.name }}</li>
                                    <li class="list-group-item"><b> Phone :</b> {{ distributor.phone }}</li>
                                    <li class="list-group-item"><b> Email :</b> {{ distributor.email }}</li>
                                    <li class="list-group-item"><b> Address :</b> {{ distributor.address }}</li>
                                    <li class="list-group-item"><b> Bio :</b> {{ distributor.bio }}</li>
                                    <li class="list-group-item">
                                        <img class="img-fluid" ng-src="http://27.147.135.164/ecomm/assets/uploads/{{distributor.picture}}" alt="picture">
                                    </li>
                                    <li class="list-group-item"><b> Picture :</b> {{ distributor.picture }}</li>
                                    <li class="list-group-item"><b> Account Status :</b> {{ distributor.account_status }}</li>
                                    <li class="list-group-item"><b> IP Address :</b> {{ distributor.ipAddress }}</li>
                                    <li class="list-group-item"><b> Created By :</b> {{ distributor.createdBy }}</li>
                                    <li class="list-group-item"><b> Updated By :</b> {{ distributor.updatedBy }}</li>
                                    <li class="list-group-item"><b> Created Time :</b> {{ distributor.created }}</li>
                                    <li class="list-group-item"><b> Updated Time :</b> {{ distributor.updated }}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card my-3" id="editorsDiv">
                    <div class="card-header">
                        <h5 class="font-weight-bold text-center">Editors:</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 py-3" ng-repeat="editor in editors">
                                <ul class="list-group">
                                    <li class="list-group-item"><b>Editor ID :</b> {{ editor.id }}</li>
                                    <li class="list-group-item"><b> Type :</b> {{ editor.type }}</li>
                                    <li class="list-group-item"><b> Name :</b> {{ editor.name }}</li>
                                    <li class="list-group-item"><b> Phone :</b> {{ editor.phone }}</li>
                                    <li class="list-group-item"><b> Email :</b> {{ editor.email }}</li>
                                    <li class="list-group-item"><b> Address :</b> {{ editor.address }}</li>
                                    <li class="list-group-item"><b> Bio :</b> {{ editor.bio }}</li>
                                    <li class="list-group-item">
                                        <img class="img-fluid" ng-src="http://27.147.135.164/ecomm/assets/uploads/files/{{editor.picture}}" alt="picture">
                                    </li>
                                
                                    <li class="list-group-item"><b> Account Status :</b> {{ editor.account_status }}</li>
                                    <li class="list-group-item"><b> IP Address :</b> {{ editor.ipAddress }}</li>
                                    <li class="list-group-item"><b> Created By :</b> {{ editor.createdBy }}</li>
                                    <li class="list-group-item"><b> Updated By :</b> {{ editor.updatedBy }}</li>
                                    <li class="list-group-item"><b> Created Time :</b> {{ editor.created }}</li>
                                    <li class="list-group-item"><b> Updated Time :</b> {{ editor.updated }}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card my-3" id="designersDiv">
                    <div class="card-header">
                        <h5 class="font-weight-bold text-center">Designers:</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 py-3" ng-repeat="designer in designers">
                                <ul class="list-group">
                                   
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card my-3" id="reviewsDiv">
                    <div class="card-header">
                        <h5 class="font-weight-bold text-center">Reviews:</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 py-3" ng-repeat="review in reviews">
                                <ul class="list-group">
                                   
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card my-3" id="authorsDiv">
                    <div class="card-header">
                        <h5 class="font-weight-bold text-center">Authors:</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 py-3" ng-repeat="author in authors">
                                <ul class="list-group">
                                   
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card my-3" id="translatorsDiv">
                    <div class="card-header">
                        <h5 class="font-weight-bold text-center">Translators:</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 py-3" ng-repeat="translator in translators">
                                <ul class="list-group">
                                   
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card my-3" id="shareEditorsDiv">
                    <div class="card-header">
                        <h5 class="font-weight-bold text-center">Share Editors:</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 py-3" ng-repeat="shareEditor in shareEditors">
                                <ul class="list-group">
                                   
                                </ul>
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

      
        <script src="assets/js/page/product-details.js"></script>
    </body>
</html> 