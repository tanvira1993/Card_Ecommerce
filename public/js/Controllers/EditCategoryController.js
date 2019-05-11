/* Setup blank page controller */
angular.module('EcommerceApp').controller('EditCategoryController', ['$scope', '$rootScope', '$location', '$timeout', '$http', '$stateParams',
	function($scope, $rootScope, $location, $timeout, $http,$stateParams) {
		$scope.$on('$viewContentLoaded', function() {
        // initialize core components

        $scope.id = $stateParams.id;
        $scope.categoryListById = function(){

        	$http({
        		method: 'get',
        		url: 'api/categoryListById/' + $scope.id,
        	}).then(function (response) {
        		$scope.editcategoryInfo = response.data.data;

        	}, function (response) {


        	});
        	
        }


        $scope.validateEditCategory = function (){
        	var formStatus = true;

        	for ( var input in $scope.editcategoryInfo) {

        		if(input === 'categories_name'){
        			if (!!$scope.EditCategoryCreateForm[input].$error.required) {
        				$scope.EditCategoryCreateForm[input].$setDirty(true);
        				formStatus = false;
        			}
        		}
        	}
        	

        	return formStatus;
        }


        $scope.editCategory = function(){

        	if($scope.validateEditCategory()){
        		toastr.info("'info', 'Loading!', 'Please wait.'")
        		$http({
        			method: 'post',
        			url: 'api/editCategory/'  +$scope.id,
        			data:$scope.editcategoryInfo
        		}).then(function (response) {
        			$scope.editcategoryInfo=null;

        			swal({
        				title: 'Done!',
        				text: 'Category Edited Successfully.',
        				type: 'success'
        			}, function () {

        				$location.path("/manageCategoryList");

        				if (!$scope.$$phase)
        					$scope.$apply();
        			});

        		}, function (response) {

        			toastr.error("Could not be Edited")
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
        $scope.categoryListById();

    });
	}]);
