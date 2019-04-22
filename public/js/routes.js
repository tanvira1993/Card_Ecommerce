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

        .state('admin', {
            url: "/admin",
            templateUrl: "/admin",
            data: {pageTitle: 'Admin'},
            controller: "AdminController",
            resolve: {
                deps: ['$ocLazyLoad', function ($ocLazyLoad) {
                    return $ocLazyLoad.load({
                        name: 'EcommerceApp',
                        insertBefore: '#ng_load_plugins_before', // load the above css files before a LINK element with this ID. Dynamic CSS files must be loaded between core and theme css files
                        files: [
                            'js/Controllers/AdminController.js'
                        ]
                    });
                }]
            }
        })


}]);
