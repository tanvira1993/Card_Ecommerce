<!--Main category : Begin-->
<main id="main" class="account dashboard">
    <section class="header-page">
        <div class="container">
            <div class="row">
                <div class="col-sm-3 hidden-xs">
                    <h1 class="mh-title">My Account</h1>
                </div>
                <div class="breadcrumb-w col-sm-9">
                    <span class="hidden-xs">You are here:</span>
                    <ul class="breadcrumb">
                        <li>
                            <a href="http://netbaseteam.com/">Home</a>
                        </li>
                        <li>
                            <span>My Account</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="account-content parten-bg">
        <div class="container">
            <!--Account top banner -->
            <div class="row">
                <div class="col-md-12 cart-banner-top hidden-xs">
                    <a href="#" title="cart top banner">
                        <img src="frontend/images/banner/cart/top-banner.jpg" alt="Cart top banner" />
                    </a>
                </div>
            </div><!--Account top banner : End-->
            <div class="row acc-dashboard">
                <!--Account Sidebar: End-->
                <aside class="col-md-3 col-sm-4 col-xs-12 account-sidebar sidebar">
                    <h3 class="acc-title lg">Account</h3>
                    <ul>
                        <li>
                            <a href="myaccount-dashboard.html" title="account dashboard">Account Dashboard</a>
                        </li>
                        <li class="active">
                            <a href="myaccount-information.html" title="account dashboard">Account information</a>
                        </li>
                        <li>
                            <a href="myaccount-address.html" title="account dashboard">Address Book</a>
                        </li>
                        <li>
                            <a href="myaccount-order.html" title="account dashboard">My Orders</a>
                        </li>
                        <li>
                            <a href="wishlist.html" title="account dashboard">Wishlist</a>
                        </li>
                        <li>
                            <a href="myaccount-newsletter.html" title="account dashboard">Newsletter Subscriptions</a>
                        </li>
                    </ul>
                </aside><!--Account Sidebar: End-->
                <!--Account main content : Begin -->
                <section class="account-main col-md-9 col-sm-8 col-xs-12">
                    <h3 class="acc-title lg">Edit Account Information</h3>
                    <div class="form-edit-info">
                        <h4 class="acc-sub-title">Account Information</h4>
                        <form action="#" method="POST" name="edit-acc-info">
                            <div class="form-group">
                                <label for="first-name">First Name<span class="required">*</span></label>
                                <input type="text" class="form-control" id="first-name" placeholder="Le">
                            </div>
                            <div class="form-group">
                                <label for="last-name">Last Name<span class="required">*</span></label>
                                <input type="text" class="form-control" id="first-name" placeholder="Le">
                            </div>
                            <div class="form-group">
                                <label for="email">Email Address<span class="required">*</span></label>
                                <input type="text" class="form-control" id="email" placeholder="admin@netbase.vn">
                            </div>
                            <div class="form-group checkbox-w label-text">
                                <input type="checkbox" id="changePass" name="change-pass" checked>
                                <label for="changePass">
                                    <i class="fa fa-square-o"></i>
                                    <i class="fa fa-check-square-o"></i>
                                    Change Password
                                </label>
                            </div>
                            <div class="account-bottom-action">
                                <a href="#" class="back"><i class="fa fa-chevron-left"></i> Back</a>
                                <button type="submit" class="gbtn btn-edit-acc-info">Save</button>
                            </div>
                        </form>
                    </div>
                </section><!-- Cart main content : End -->
            </div>

        </div>
    </section>
</main><!-- Main Category: End -->
