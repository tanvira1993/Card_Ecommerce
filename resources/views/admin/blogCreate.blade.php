<!--Main index : End-->
<main class="main">
	<section class="header-page">
		<div class="container">
			<div class="row">
				<div class="col-sm-3 hidden-xs">
					<h1 class="mh-title">Blog Create Panel</h1>
				</div>
				<div class="breadcrumb-w col-sm-9">
					<span class="hidden-xs">You are here:</span>
					<ul class="breadcrumb">
						<li>
							<a ui-sref="home">Home</a>
						</li>
						<li>
							<span>Blog Create Panel</span>
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
					<h1>Create Blog</h1>
					<h4>Blog Information</h4>
					<form id="register-form" class="form-horizontal" name="BlogCreateForm" novalidate>

						<div class="has-success" ng-class="{'has-error': BlogCreateForm.name.$dirty &amp;&amp;BlogCreateForm.name.$error.required ,  'has-success': BlogCreateForm.name.$valid}">
							<p>Blog Headline <span class="star">*</span></p>
							<input type="text" name="blogheadline" ng-model="BlogInfo.blogheadline" class="form-control ng-not-empty ng-dirty ng-valid-parse ng-valid ng-valid-required ng-touched" placeholder="" required="">
						</div>
						
						
						<div class="has-success" ng-class="{'has-error': BlogCreateForm.name.$dirty &amp;&amp;BlogCreateForm.name.$error.required ,  'has-success': BlogCreateForm.name.$valid}">
							<p>Blog Body <span class="star">*</span></p>
							<input type="text" name="body" ng-model="BlogInfo.body" class="form-control ng-not-empty ng-dirty ng-valid-parse ng-valid ng-valid-required ng-touched" placeholder="" required="">
						</div>
						

						<br>
						

						<div>

							<button type="submit" ng-click="blogCreate()" class="register">Save</button>
						</div>
					</form>
				</div>
				<pre>
					@{{BlogInfo | json}}
				</pre>

			</div>
			<div class="col-md-3 col-sm-3 col-xs-12">
				<img src="frontend/images/banner-wishlist.jpg" />
			</div>

		</div>
	</section>
</main><!--Main index : End-->


