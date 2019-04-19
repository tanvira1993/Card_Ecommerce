/* Setup Rounting For All Pages */
EcommerceApp.config(['$stateProvider', '$urlRouterProvider', function($stateProvider, $urlRouterProvider) {
    // Redirect any unmatched url
    $urlRouterProvider.otherwise("/index");

    $stateProvider

    // Dashboard
    
    //Added by Tanvir

    .state('index', {
        url: "/index",
        templateUrl: "/index",
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


}]);
