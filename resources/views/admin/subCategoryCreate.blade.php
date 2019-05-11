<!--Main index : End-->
<main class="main">
	<section class="header-page">
		<div class="container">
			<div class="row">
				<div class="col-sm-3 hidden-xs">
					<h1 class="mh-title">Sub Category Create Panel</h1>
				</div>
				<div class="breadcrumb-w col-sm-9">
					<span class="hidden-xs">You are here:</span>
					<ul class="breadcrumb">
						<li>
							<a ui-sref="home">Home</a>
						</li>
						<li>
							<span>Sub Category Create Panel</span>
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
					<h1>Create Sub Category</h1>
					<h4>Sub Category Information</h4>
					<form id="register-form" class="form-horizontal" name="SubSubCategoryCreateForm" novalidate>

						<div class="has-success" ng-class="{'has-error': SubCategoryCreateForm.name.$dirty &amp;&amp;SubCategoryCreateForm.name.$error.required ,  'has-success': SubCategoryCreateForm.name.$valid}"> 
							<p>Select Category<span class="star">*</span></p>
							<select name="idCategory" id="idCategory" ng-model="subCategoryInfo.idCategory" class="form-control   ng-not-empty ng-dirty ng-valid-parse ng-valid ng-valid-required ng-touched">
								<option value="">Select Category</option>
								<option ng-repeat="(key, value) in categoryList" value="@{{value.id_categories}}">@{{value.categories_name}}</option>
							</select>
							
						</div>
						<br>

						<div class="has-success" ng-class="{'has-error': SubCategoryCreateForm.name.$dirty &amp;&amp;SubCategoryCreateForm.name.$error.required ,  'has-success': SubCategoryCreateForm.name.$valid}">
							<p>Sub Category Name <span class="star">*</span></p>
							<input type="text" name="subCategoryName" ng-model="subCategoryInfo.subCategoryName" class="form-control ng-not-empty ng-dirty ng-valid-parse ng-valid ng-valid-required ng-touched" placeholder="" required="">
						</div>
						
						
						<div class="has-success" ng-class="{'has-error': SubCategoryCreateForm.name.$dirty &amp;&amp;SubCategoryCreateForm.name.$error.required ,  'has-success': SubCategoryCreateForm.name.$valid}">
							<p>Sub Category Info </p>
							<input type="text" name="subCategoryInfo" ng-model="subCategoryInfo.subCategoryInfo" class="form-control ng-not-empty ng-dirty ng-valid-parse ng-valid ng-valid-required ng-touched" placeholder="" required="">
						</div>
						
						<div>

							<button type="submit" ng-click="createSubCategory()" class="register">Save</button>
						</div>
					</form>
				</div>
				<pre>
					@{{subCategoryInfo | json}}
				</pre>

			</div>
			<div class="col-md-3 col-sm-3 col-xs-12">
				<img src="frontend/images/banner-wishlist.jpg" />
			</div>

		</div>
	</section>
</main><!--Main index : End-->


