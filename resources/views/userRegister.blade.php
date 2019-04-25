<!--Main index : End-->
<main class="main">
	<section class="header-page">
		<div class="container">
			<div class="row">
				<div class="col-sm-3 hidden-xs">
					<h1 class="mh-title">Register</h1>
				</div>
				<div class="breadcrumb-w col-sm-9">
					<span class="hidden-xs">You are here:</span>
					<ul class="breadcrumb">
						<li>
							<a ui-sref="home">Home</a>
						</li>
						<li>
							<span>Register</span>
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
					<h1>Create an Account</h1>
					<h4>Personal Information</h4>
					<form id="register-form" class="form-horizontal" name="userRegistrationForm" novalidate>

						<div class="has-success" ng-class="{'has-error': userRegistrationForm.name.$dirty &amp;&amp;userRegistrationForm.name.$error.required ,  'has-success': userRegistrationForm.name.$valid}">
							<p>Your Name <span class="star">*</span></p>
							<input type="text" name="name" ng-model="userInfo.name" class="form-control ng-not-empty ng-dirty ng-valid-parse ng-valid ng-valid-required ng-touched" placeholder="Name" required="">
						</div>
						
						<div class="has-success" ng-class="{'has-error': userRegistrationForm.email.$dirty &amp;&amp; userRegistrationForm.email.$invalid ,  'has-success': userRegistrationForm.email.$valid}">
							<p>Email Address <span class="star">*</span></p>
							<input type="text" name="email" ng-model="userInfo.email" class="form-control ng-not-empty ng-dirty ng-valid-required ng-valid ng-valid-email ng-touched" placeholder="Email" required="">
							<span class="help-block ng-hide" ng-show="userRegistrationForm.email.$dirty &amp;&amp; userRegistrationForm.email.$error.email">Your
							email address is invalid</span>
						</div>

						<div class="has-success" ng-class="{'has-error': userRegistrationForm.pass.$dirty &amp;&amp; userRegistrationForm.pass.$error.required ,  'has-success': userRegistrationForm.pass.$valid}">
							<p>Create a password <span class="star">*</span></p>
							<input type="password" name="pass" ng-model="userInfo.pass" class="form-control ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required" placeholder="Password" required="">
						</div>

						<div class="has-success" ng-class="{'has-error': userRegistrationForm.pass2.$dirty &amp;&amp; userRegistrationForm.pass2.$error.required ,  'has-success': userRegistrationForm.pass2.$valid}">
							<p>Confirm password <span class="star">*</span></p>
							<input type="password" name="pass2" ng-model="userInfo.pass2" class="form-control ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required" placeholder="Confirm Password" required="">
							<span class="help-block ng-hide" ng-show="signupForm.pass2.$error.isValidcp">Please make sure your passwords match</span>
						</div>

						<div>

							<button type="submit" ng-click="createUser()" class="register">Register</button>
						</div>
					</form>
				</div>
				<pre>
					@{{userInfo | json}}
				</pre>

			</div>
			<div class="col-md-3 col-sm-3 col-xs-12">
				<img src="frontend/images/banner-wishlist.jpg" />
			</div>

		</div>
	</section>
</main><!--Main index : End-->


