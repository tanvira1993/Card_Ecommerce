<!--Main index : End-->
<main class="main">
    <section class="header-page">
        <div class="container">
            <div class="row">
                <div class="col-sm-3 hidden-xs">
                    <h1 class="mh-title">Login</h1>
                </div>
                <div class="breadcrumb-w col-sm-9">
                    <span class="hidden-xs">You are here:</span>
                    <ul class="breadcrumb">
                        <li>
                            <a href="http://netbaseteam.com/">Home</a>
                        </li>
                        <li>
                            <span>Login</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="pr-main" id="pr-login">
        <div class="container">
            <div class="col-md-9 col-sm-9 col-xs-12">
                <h1 class="ct-header">Login</h1>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <h4>Customers Panel</h4>
                    <p>If you have an account with us, please log in.</p>
                    <form id="login-form" class="form-horizontal" name="loginForm" novalidate>

                        <div class="has-success" ng-class="{'has-error': loginForm.email.$dirty &amp;&amp; loginForm.email.$invalid ,  'has-success': loginForm.email.$valid}">
                            <p>Email Address <span class="star">*</span></p>
                            <input type="text" name="email" ng-model="loginInfo.email" class="form-control ng-not-empty ng-dirty ng-valid-required ng-valid ng-valid-email ng-touched" placeholder="Email" required="">
                            <span class="help-block ng-hide" ng-show="loginForm.email.$dirty &amp;&amp; loginForm.email.$error.email">Your
                            email address is invalid</span>
                        </div>

                        <div class="has-success" ng-class="{'has-error': loginForm.pass.$dirty &amp;&amp; loginForm.pass.$error.required ,  'has-success': loginForm.pass.$valid}">
                            <p>Create a password <span class="star">*</span></p>
                            <input type="password" name="pass" ng-model="loginInfo.pass" class="form-control ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required" placeholder="Password" required="">
                        </div>
                        <button type="submit" ng-click="login()" class="login">Login</button>
                    </form>                    
                </div>
            </div>
            <pre>
                @{{loginInfo | json}}
            </pre>
            <div class="col-md-3 col-sm-3 col-xs-12">
                <img src="frontend/images/banner/login/banner-login.jpg" />
            </div>

        </div>
    </section>
</main><!--Main index : End-->

