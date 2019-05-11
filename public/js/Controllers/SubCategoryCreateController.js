/* Setup blank page controller */
angular.module('EcommerceApp').controller('SubCategoryCreateController', ['$scope', '$rootScope', '$location', '$timeout', '$http', function($scope, $rootScope, $location, $timeout, $http) {
	$scope.$on('$viewContentLoaded', function() {
        // initialize core components

        $scope.categoryList = function(){

        	$http({
        		method: 'get',
        		url: 'api/categoryList',
        	}).then(function (response) {
        		$scope.categoryList = response.data.data;

        	}, function (response) {


        	});
        	
        }
        $scope.subCategoryInfo = {
        	idCategory: null,
        	subCategoryName: null,
        	subCategoryInfo : null
        };

        $scope.validateSubCategory = function (){
        	var formStatus = true;

        	for ( var input in $scope.subCategoryInfo) {

        		if(input === 'subCategoryName' || input === 'idCategory' ){
        			if (!!$scope.SubSubCategoryCreateForm[input].$error.required) {
        				$scope.SubSubCategoryCreateForm[input].$setDirty(true);
        				formStatus = false;
        			}
        		}
        	}
        	

        	return formStatus;
        } 

        $scope.createSubCategory = function(){

        	if($scope.validateSubCategory()){
        		toastr.info("'info', 'Loading!', 'Please wait.'")
        		$http({
        			method: 'post',
        			url: 'api/createSubCategory',
        			data:$scope.subCategoryInfo
        		}).then(function (response) {
        			$scope.subCategoryInfo=null;

        			swal({
        				title: 'Done!',
        				text: 'Sub Category Created Successfully.',
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

        
        $scope.categoryList();

    });
}]);