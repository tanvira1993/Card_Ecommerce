<!--Main index : End-->
<main class="main">
    <section class="header-page">
        <div class="container">
            <div class="row">
                <div class="col-sm-3 hidden-xs">
                    <h1 class="mh-title">Category Create Panel</h1>
                </div>
                <div class="breadcrumb-w col-sm-9">
                    <span class="hidden-xs">You are here:</span>
                    <ul class="breadcrumb">
                        <li>
                            <a ui-sref="home">Home</a>
                        </li>
                        <li>
                            <span>Category Create Panel</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="pr-main" id="pr-register">
        <div class="container">
            <div class="col-md-9 col-sm-9 col-xs-12">
                <div class="col-md-6 col-sm-6 col-xs-12 left">
                    <h1>Create Address</h1>
                    <h4>Address Information</h4>
                    <form id="register-form" class="form-horizontal" name="AddressCreateForm" novalidate>

                        <div class="has-success" ng-class="{'has-error': AddressCreateForm.name.$dirty &amp;&amp;AddressCreateForm.name.$error.required ,  'has-success': AddressCreateForm.name.$valid}">
                            <p>Address <span class="star">*</span></p>
                            <input type="text" name="address" ng-model="addressInfo.address" class="form-control ng-not-empty ng-dirty ng-valid-parse ng-valid ng-valid-required ng-touched" placeholder="" required="">
                        </div>


                        <div class="has-success" ng-class="{'has-error': AddressCreateForm.name.$dirty &amp;&amp;AddressCreateForm.name.$error.required ,  'has-success': AddressCreateForm.name.$valid}">
                            <p>Default Address <span class="star">*</span></p>
                            <input type="text" name="defaultAddress" ng-model="addressInfo.defaultAddress" class="form-control ng-not-empty ng-dirty ng-valid-parse ng-valid ng-valid-required ng-touched" placeholder="" required="">
                        </div>


                        <div class="has-success" ng-class="{'has-error': AddressCreateForm.name.$dirty &amp;&amp;AddressCreateForm.name.$error.required ,  'has-success': AddressCreateForm.name.$valid}">
                            <p>Phone No <span class="star">*</span></p>
                            <input type="text" name="phoneNo" ng-model="addressInfo.phoneNo" class="form-control ng-not-empty ng-dirty ng-valid-parse ng-valid ng-valid-required ng-touched" placeholder="" required="">
                        </div>


                        {{--<div class="has-success" ng-class="{'has-error': CategoryCreateForm.name.$dirty &amp;&amp;CategoryCreateForm.name.$error.required ,  'has-success': CategoryCreateForm.name.$valid}">
                            <p>Category Info </p>
                            <input type="text" name="categoryInfo" ng-model="categoryInfo.categoryInfo" class="form-control ng-not-empty ng-dirty ng-valid-parse ng-valid ng-valid-required ng-touched" placeholder="" required="">
                        </div>--}}




                        <div>

                            <button type="submit" ng-click="createAddress()" class="register">Save</button>
                        </div>
                    </form>
                </div>
                <pre>
					@{{addressInfo | json}}
				</pre>

            </div>
            <div class="col-md-3 col-sm-3 col-xs-12">
                <img src="frontend/images/banner-wishlist.jpg" />
            </div>

        </div>
    </section>
</main><!--Main index : End-->


