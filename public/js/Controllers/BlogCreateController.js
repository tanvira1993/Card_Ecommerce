/* Setup blank page controller */
angular.module('EcommerceApp').controller('BlogCreateController', ['$scope', '$rootScope', '$location', '$timeout', '$http', function($scope, $rootScope, $location, $timeout, $http) {
	$scope.$on('$viewContentLoaded', function() {
        
        $scope.BlogInfo = {
        	blogheadline: null,
        	body : null
        };

        $scope.validateBlog = function (){
        	var formStatus = true;

        	for ( var input in $scope.BlogInfo) {

        		if(input === 'blogheadline' || input === 'body' ){
        			if (!!$scope.BlogCreateForm[input].$error.required) {
        				$scope.BlogCreateForm[input].$setDirty(true);
        				formStatus = false;
        			}
        		}
        	}
        	

        	return formStatus;
        }
        
        $scope.blogCreate = function(){
        	if($scope.validateBlog()){
        		toastr.info("'info', 'Loading!', 'Please wait.'")
        		$http({
        			method: 'post',
        			url: 'api/blogCreate',
        			data:$scope.BlogInfo
        		}).then(function (response) {
        			$scope.BlogInfo=null;

        			swal({
        				title: 'Done!',
        				text: 'Blog Created Successfully.',
        				type: 'success'
        			}, function () {

        				$location.path("/home");

        				if (!$scope.$$phase)
        					$scope.$apply();
        			});

        		}, function (response) {

        			toastr.error("Could not be Created")
        			swal({
        				title: response.data.heading,
        				text: response.data.message,
        				html:true,
        				type: 'error'
        			});
        		});
        	}

        	else{
        		toastr.error("Required Fields are empty")
        	}
        }
        
    });
}]);
