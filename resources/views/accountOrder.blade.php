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
                            <span>My Order</span>
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
            <div class="row acc-order">
                <!--Account Sidebar: End-->
                <aside class="col-md-3 col-sm-4 col-xs-12 account-sidebar sidebar">
                    <h3 class="acc-title lg">Account</h3>
                    <ul>
                        <li>
                            <a href="myaccount-dashboard.html" title="account dashboard">Account Dashboard</a>
                        </li>
                        <li>
                            <a href="myaccount-information.html" title="account dashboard">Account information</a>
                        </li>
                        <li>
                            <a href="myaccount-address.html" title="account dashboard">Address Book</a>
                        </li>
                        <li class="active">
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
                    <h3 class="acc-title lg">My Orders</h3>
                    <div class="form-edit-info">
                        <table class="data-table" id="my-orders-table">
                            <tr class="">
                                <th>Order #</th>
                                <th>Date</th>
                                <th>Ship To</th>
                                <th class="th_hidden"><span class="nobr">Order Total</span></th>
                                <th class="th_hidden"><span class="nobr">Order Status</span></th>
                                <th>&nbsp;</th>
                            </tr>
                            <tr class="">
                                <td>100000001</td>
                                <td><span class="nobr">8/18/2015</span></td>
                                <td>Cmsmart</td>
                                <td><span class="price">$134.99</span></td>
                                <td class="th_hidden"><em>Pending</em></td>
                                <td class="th_hidden a-center last">
						                <span class="nobr">
						                	<a href="#">View Order</a>
							                <span class="separator">|</span>
							                <a href="#" class="link-reorder">Reorder</a>
							            </span>
                                </td>
                            </tr>
                            <tr class="">
                                <td>100000001</td>
                                <td><span class="nobr">8/18/2015</span></td>
                                <td>Cmsmart</td>
                                <td><span class="price">$134.99</span></td>
                                <td class="th_hidden"><em>Pending</em></td>
                                <td class="th_hidden a-center last">
						                <span class="nobr">
						                	<a href="#">View Order</a>
							                <span class="separator">|</span>
							                <a href="#" class="link-reorder">Reorder</a>
							            </span>
                                </td>
                            </tr>
                        </table>
                    </div>
                </section><!-- Cart main content : End -->
            </div>

        </div>
    </section>
</main><!-- Main Category: End -->
