/* Setup Rounting For All Pages */
EcommerceApp.config(['$stateProvider', '$urlRouterProvider', function($stateProvider, $urlRouterProvider) {
    // Redirect any unmatched url
    $urlRouterProvider.otherwise("/home");

    $stateProvider

    // Dashboard
    
    //Added by Tanvir

    .state('home', {
        url: "/home",
        templateUrl: "/home",
        data: {pageTitle: 'Home'},
        controller: "HomeController",
        resolve: {
            deps: ['$ocLazyLoad', function ($ocLazyLoad) {
                return $ocLazyLoad.load({
                    name: 'EcommerceApp',
                    insertBefore: '#ng_load_plugins_before', // load the above css files before a LINK element with this ID. Dynamic CSS files must be loaded between core and theme css files
                    files: [
                    'js/Controllers/HomeController.js'
                    ]
                });
            }]
        }
    })

    .state('wishList', {
        url: "/wishList",
        templateUrl: "/wishList",
        data: {pageTitle: 'Wish List'},
        controller: "WishListController",
        resolve: {
            deps: ['$ocLazyLoad', function ($ocLazyLoad) {
                return $ocLazyLoad.load({
                    name: 'EcommerceApp',
                        insertBefore: '#ng_load_plugins_before', // load the above css files before a LINK element with this ID. Dynamic CSS files must be loaded between core and theme css files
                        files: [
                        'js/Controllers/WishListController.js'
                        ]
                    });
            }]
        }
    })

    .state('aboutUs', {
        url: "/aboutUs",
        templateUrl: "/aboutUs",
        data: {pageTitle: 'About Us'},
        controller: "AboutUsController",
        resolve: {
            deps: ['$ocLazyLoad', function ($ocLazyLoad) {
                return $ocLazyLoad.load({
                    name: 'EcommerceApp',
                        insertBefore: '#ng_load_plugins_before', // load the above css files before a LINK element with this ID. Dynamic CSS files must be loaded between core and theme css files
                        files: [
                        'js/Controllers/AboutUsController.js'
                        ]
                    });
            }]
        }
    })

    .state('login', {
        url: "/login",
        templateUrl: "/login",
        data: {pageTitle: 'Login'},
        controller: "LoginController",
        resolve: {
            deps: ['$ocLazyLoad', function ($ocLazyLoad) {
                return $ocLazyLoad.load({
                    name: 'EcommerceApp',
                        insertBefore: '#ng_load_plugins_before', // load the above css files before a LINK element with this ID. Dynamic CSS files must be loaded between core and theme css files
                        files: [
                        'js/Controllers/LoginController.js'
                        ]
                    });
            }]
        }
    })

    .state('register', {
        url: "/register",
        templateUrl: "/register",
        data: {pageTitle: 'Register'},
        controller: "RegisterController",
        resolve: {
            deps: ['$ocLazyLoad', function ($ocLazyLoad) {
                return $ocLazyLoad.load({
                    name: 'EcommerceApp',
                        insertBefore: '#ng_load_plugins_before', // load the above css files before a LINK element with this ID. Dynamic CSS files must be loaded between core and theme css files
                        files: [
                        'js/Controllers/RegisterController.js'
                        ]
                    });
            }]
        }
    })

    .state('categoryList', {
        url: "/categoryList",
        templateUrl: "/categoryList",
        data: {pageTitle: 'Category List'},
        controller: "CategoryListController",
        resolve: {
            deps: ['$ocLazyLoad', function ($ocLazyLoad) {
                return $ocLazyLoad.load({
                    name: 'EcommerceApp',
                        insertBefore: '#ng_load_plugins_before', // load the above css files before a LINK element with this ID. Dynamic CSS files must be loaded between core and theme css files
                        files: [
                        'js/Controllers/CategoryListController.js'
                        ]
                    });
            }]
        }
    })
    .state('contact', {
        url: "/contact",
        templateUrl: "/contact",
        data: {pageTitle: 'Contact'},
        controller: "ContactController",
        resolve: {
            deps: ['$ocLazyLoad', function ($ocLazyLoad) {
                return $ocLazyLoad.load({
                    name: 'EcommerceApp',
                        insertBefore: '#ng_load_plugins_before', // load the above css files before a LINK element with this ID. Dynamic CSS files must be loaded between core and theme css files
                        files: [
                        'js/Controllers/ContactController.js'
                        ]
                    });
            }]
        }
    })

    .state('detail', {
        url: "/detail",
        templateUrl: "/detail",
        data: {pageTitle: 'Detail'},
        controller: "DetailController",
        resolve: {
            deps: ['$ocLazyLoad', function ($ocLazyLoad) {
                return $ocLazyLoad.load({
                    name: 'EcommerceApp',
                        insertBefore: '#ng_load_plugins_before', // load the above css files before a LINK element with this ID. Dynamic CSS files must be loaded between core and theme css files
                        files: [
                        'js/Controllers/DetailController.js'
                        ]
                    });
            }]
        }
    })

    .state('faq', {
        url: "/faq",
        templateUrl: "/faq",
        data: {pageTitle: 'Faq'},
        controller: "FaqController",
        resolve: {
            deps: ['$ocLazyLoad', function ($ocLazyLoad) {
                return $ocLazyLoad.load({
                    name: 'EcommerceApp',
                        insertBefore: '#ng_load_plugins_before', // load the above css files before a LINK element with this ID. Dynamic CSS files must be loaded between core and theme css files
                        files: [
                        'js/Controllers/FaqController.js'
                        ]
                    });
            }]
        }
    })

    .state('cart', {
        url: "/cart",
        templateUrl: "/cart",
        data: {pageTitle: 'Cart'},
        controller: "CartController",
        resolve: {
            deps: ['$ocLazyLoad', function ($ocLazyLoad) {
                return $ocLazyLoad.load({
                    name: 'EcommerceApp',
                        insertBefore: '#ng_load_plugins_before', // load the above css files before a LINK element with this ID. Dynamic CSS files must be loaded between core and theme css files
                        files: [
                        'js/Controllers/CartController.js'
                        ]
                    });
            }]
        }
    })

    .state('categoryGrid', {
        url: "/categoryGrid",
        templateUrl: "/categoryGrid",
        data: {pageTitle: 'Category Grid'},
        controller: "CategoryGridController",
        resolve: {
            deps: ['$ocLazyLoad', function ($ocLazyLoad) {
                return $ocLazyLoad.load({
                    name: 'EcommerceApp',
                        insertBefore: '#ng_load_plugins_before', // load the above css files before a LINK element with this ID. Dynamic CSS files must be loaded between core and theme css files
                        files: [
                        'js/Controllers/CategoryGridController.js'
                        ]
                    });
            }]
        }
    })

    .state('accountOrder', {
        url: "/accountOrder",
        templateUrl: "/accountOrder",
        data: {pageTitle: 'Account Order'},
        controller: "AccountOrderController",
        resolve: {
            deps: ['$ocLazyLoad', function ($ocLazyLoad) {
                return $ocLazyLoad.load({
                    name: 'EcommerceApp',
                        insertBefore: '#ng_load_plugins_before', // load the above css files before a LINK element with this ID. Dynamic CSS files must be loaded between core and theme css files
                        files: [
                        'js/Controllers/AccountOrderController.js'
                        ]
                    });
            }]
        }
    })

    .state('checkout', {
        url: "/checkout",
        templateUrl: "/checkout",
        data: {pageTitle: 'Checkout'},
        controller: "CheckoutController",
        resolve: {
            deps: ['$ocLazyLoad', function ($ocLazyLoad) {
                return $ocLazyLoad.load({
                    name: 'EcommerceApp',
                        insertBefore: '#ng_load_plugins_before', // load the above css files before a LINK element with this ID. Dynamic CSS files must be loaded between core and theme css files
                        files: [
                        'js/Controllers/CheckoutController.js'
                        ]
                    });
            }]
        }
    })

    .state('accountAddress', {
        url: "/accountAddress",
        templateUrl: "/accountAddress",
        data: {pageTitle: 'Account Address'},
        controller: "AccountAddressController",
        resolve: {
            deps: ['$ocLazyLoad', function ($ocLazyLoad) {
                return $ocLazyLoad.load({
                    name: 'EcommerceApp',
                        insertBefore: '#ng_load_plugins_before', // load the above css files before a LINK element with this ID. Dynamic CSS files must be loaded between core and theme css files
                        files: [
                        'js/Controllers/AccountAddressController.js'
                        ]
                    });
            }]
        }
    })

    .state('accountInformation', {
        url: "/accountInformation",
        templateUrl: "/accountInformation",
        data: {pageTitle: 'Account Information'},
        controller: "AccountInformationController",
        resolve: {
            deps: ['$ocLazyLoad', function ($ocLazyLoad) {
                return $ocLazyLoad.load({
                    name: 'EcommerceApp',
                        insertBefore: '#ng_load_plugins_before', // load the above css files before a LINK element with this ID. Dynamic CSS files must be loaded between core and theme css files
                        files: [
                        'js/Controllers/AccountInformationController.js'
                        ]
                    });
            }]
        }
    })
    .state('accountNewsletter', {
        url: "/accountNewsletter",
        templateUrl: "/accountNewsletter",
        data: {pageTitle: 'Account Newsletter'},
        controller: "AccountNewsletterController",
        resolve: {
            deps: ['$ocLazyLoad', function ($ocLazyLoad) {
                return $ocLazyLoad.load({
                    name: 'EcommerceApp',
                        insertBefore: '#ng_load_plugins_before', // load the above css files before a LINK element with this ID. Dynamic CSS files must be loaded between core and theme css files
                        files: [
                        'js/Controllers/AccountNewsletterController.js'
                        ]
                    });
            }]
        }
    })


    .state('accountDashboard', {
        url: "/accountDashboard",
        templateUrl: "/accountDashboard",
        data: {pageTitle: 'Account Dashboard'},
        controller: "AccountDashboardController",
        resolve: {
            deps: ['$ocLazyLoad', function ($ocLazyLoad) {
                return $ocLazyLoad.load({
                    name: 'EcommerceApp',
                        insertBefore: '#ng_load_plugins_before', // load the above css files before a LINK element with this ID. Dynamic CSS files must be loaded between core and theme css files
                        files: [
                        'js/Controllers/AccountDashboardController.js'
                        ]
                    });
            }]
        }
    })



}]);
