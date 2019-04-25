/* Setup blank page controller */
angular.module('EcommerceApp').controller('UserRegisterController', ['$scope', '$rootScope', '$location', '$timeout', '$http',
	function($scope, $rootScope, $location, $timeout, $http) {
		$scope.$on('$viewContentLoaded', function() {
        // initialize core components

        $scope.userInfo = {
        	name: null,
        	email: null,
        	pass: null,
        	pass2: null
        };


        $scope.validateAddUser = function (){
        	var formStatus = true;

        	for ( var input in $scope.userInfo) {

        		if(input === 'name' ||  input === 'email' ||  input==='pass'  || input==='pass2'){
        			if (!!$scope.userRegistrationForm[input].$error.required) {
        				$scope.userRegistrationForm[input].$setDirty(true);
        				formStatus = false;
        			}
        		}
        	}
        	$scope.userRegistrationForm['pass2'].$setValidity("isValidcp",true);
        	if($scope.userInfo.pass != $scope.userInfo.pass2){
        		$scope.userRegistrationForm['pass2'].$setValidity("isValidcp",false);
        		formStatus = false;
        	}

        	return formStatus;
        }


        $scope.createUser = function(){

        	if($scope.validateAddUser()){
        		toastr.info("'info', 'Loading!', 'Please wait.'")
        		$http({
        			method: 'post',
        			url: 'api/createUser',
        			data:$scope.userInfo
        		}).then(function (response) {
        			$scope.userInfo=null;

        			swal({
        				title: 'Success!',
        				text: 'User Account Created Successfully.',
        				type: 'success'
        			}, function () {

        				$location.path("/login");

        				if (!$scope.$$phase)
        					$scope.$apply();
        			});

        		}, function (response) {

        			swal({
        				title: response.data.heading,
        				text: response.data.message,
        				html:true,
        				type: 'error'
        			});
        		});
        	}
        }

    });
	}]);
