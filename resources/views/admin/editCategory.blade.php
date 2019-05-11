<!--Main index : End-->
<main class="main">
	<section class="header-page">
		<div class="container">
			<div class="row">
				<div class="col-sm-3 hidden-xs">
					<h1 class="mh-title">Edit Category Panel</h1>
				</div>
				<div class="breadcrumb-w col-sm-9">
					<span class="hidden-xs">You are here:</span>
					<ul class="breadcrumb">
						<li>
							<a ui-sref="home">Home</a>
						</li>
						<li>
							<span>Edit Category Panel</span>
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
					<h1>Edit Category</h1>
					<h4>Category Information</h4>
					<form id="register-form" class="form-horizontal" name="EditCategoryCreateForm" novalidate>

						<div class="has-success" ng-class="{'has-error': EditCategoryCreateForm.name.$dirty &amp;&amp;EditCategoryCreateForm.name.$error.required ,  'has-success': EditCategoryCreateForm.name.$valid}">
							<p>Category Name <span class="star">*</span></p>
							<input type="text" name="categories_name" ng-model="editcategoryInfo.categories_name" class="form-control ng-not-empty ng-dirty ng-valid-parse ng-valid ng-valid-required ng-touched" placeholder="" required="">
						</div>
						
						
						<div class="has-success" ng-class="{'has-error': EditCategoryCreateForm.name.$dirty &amp;&amp;EditCategoryCreateForm.name.$error.required ,  'has-success': EditCategoryCreateForm.name.$valid}">
							<p>Category Info </p>
							<input type="text" name="categories_info" ng-model="editcategoryInfo.categories_info" class="form-control ng-not-empty ng-dirty ng-valid-parse ng-valid ng-valid-required ng-touched" placeholder="" required="">
						</div>
						

						

						<div>

							<button type="submit" ng-click="editCategory()" class="register">Update</button>
						</div>
					</form>
				</div>
				<pre>
					@{{editcategoryInfo | json}}
				</pre>

			</div>
			<div class="col-md-3 col-sm-3 col-xs-12">
				<img src="frontend/images/banner-wishlist.jpg" />
			</div>

		</div>
	</section>
</main><!--Main index : End-->


