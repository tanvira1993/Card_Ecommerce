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
					<h1>Create Category</h1>
					<h4>Category Information</h4>
					<form id="register-form" class="form-horizontal" name="CategoryCreateForm" novalidate>

						<div class="has-success" ng-class="{'has-error': CategoryCreateForm.name.$dirty &amp;&amp;CategoryCreateForm.name.$error.required ,  'has-success': CategoryCreateForm.name.$valid}">
							<p>Category Name <span class="star">*</span></p>
							<input type="text" name="categoryName" ng-model="categoryInfo.categoryName" class="form-control ng-not-empty ng-dirty ng-valid-parse ng-valid ng-valid-required ng-touched" placeholder="" required="">
						</div>
						
						
						<div class="has-success" ng-class="{'has-error': CategoryCreateForm.name.$dirty &amp;&amp;CategoryCreateForm.name.$error.required ,  'has-success': CategoryCreateForm.name.$valid}">
							<p>Category Info </p>
							<input type="text" name="categoryInfo" ng-model="categoryInfo.categoryInfo" class="form-control ng-not-empty ng-dirty ng-valid-parse ng-valid ng-valid-required ng-touched" placeholder="" required="">
						</div>
						

						

						<div>

							<button type="submit" ng-click="createCategory()" class="register">Save</button>
						</div>
					</form>
				</div>
				<pre>
					@{{categoryInfo | json}}
				</pre>

			</div>
			<div class="col-md-3 col-sm-3 col-xs-12">
				<img src="frontend/images/banner-wishlist.jpg" />
			</div>

		</div>
	</section>
</main><!--Main index : End-->


