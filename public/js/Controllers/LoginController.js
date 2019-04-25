/* Setup blank page controller */
angular.module('EcommerceApp').controller('LoginController', ['$scope', '$rootScope', '$location', '$timeout', '$http', function($scope, $rootScope, $location, $timeout, $http) {
	$scope.$on('$viewContentLoaded', function() {
        // initialize core components

        $scope.loginInfo = {
        	email: null,
        	pass: null
        };

        $scope.validateSignin = function (){
        	var formStatus = true;

        	for ( var input in $scope.loginInfo) {

        		if( input === 'email' ||  input==='pass' ){
        			if (!!$scope.loginForm[input].$error.required) {
        				$scope.loginForm[input].$setDirty(true);
        				formStatus = false;
        			}
        		}
        	}

        	return formStatus;
        }

        $scope.loginError = null;

        $scope.login = function(){
        	if ($scope.validateSignin()) {
        		$http({
        			method: 'post',
        			url: 'api/login',
        			data: $scope.loginInfo
        		}).then(function(response) {
        			$scope.loginInfo= null;
        			
        			localStorage.setItem('token', response.data.token);
        			localStorage.setItem('idUser', response.data.userInfo.id_users);
        			localStorage.setItem('idUserRole', response.data.userInfo.id_user_roles);        		

        			$rootScope.token = localStorage.getItem('token');
        			$rootScope.idUser = localStorage.getItem('idUser');
        			$rootScope.idUserRole= localStorage.getItem('idUserRole');
        			toastr.success("Login Success..!!")

        			
        			$location.path('/accountDashboard');
        		}, function(response) {
                    //console.log(response);
                    $scope.loginError = response.data.error;
                    toastr.error("Login Failed..!!")
                });
        	}
        }

    });
}]);
