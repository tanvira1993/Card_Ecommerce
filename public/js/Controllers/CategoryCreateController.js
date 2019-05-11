/* Setup blank page controller */
angular.module('EcommerceApp').controller('CategoryCreateController', ['$scope', '$rootScope', '$location', '$timeout', '$http', function($scope, $rootScope, $location, $timeout, $http) {
	$scope.$on('$viewContentLoaded', function() {
        // initialize core components
        
        $scope.categoryInfo = {
        	categoryName: null,
        	categoryInfo: null
        };


        $scope.validateCategory = function (){
        	var formStatus = true;

        	for ( var input in $scope.categoryInfo) {

        		if(input === 'categoryName'){
        			if (!!$scope.CategoryCreateForm[input].$error.required) {
        				$scope.CategoryCreateForm[input].$setDirty(true);
        				formStatus = false;
        			}
        		}
        	}
        	

        	return formStatus;
        }

        $scope.createCategory = function(){

        	if($scope.validateCategory()){
        		toastr.info("'info', 'Loading!', 'Please wait.'")
        		$http({
        			method: 'post',
        			url: 'api/createCategory',
        			data:$scope.categoryInfo
        		}).then(function (response) {
        			$scope.categoryInfo=null;

        			swal({
        				title: 'Done!',
        				text: 'Category Created Successfully.',
        				type: 'success'
        			}, function () {

        				$location.path("/manageCategoryList");

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
