/* Setup blank page controller */
angular.module('EcommerceApp').controller('ManageCategoryListController', ['$scope', '$rootScope', '$location', '$timeout', '$http', function($scope, $rootScope, $location, $timeout, $http) {
	$scope.$on('$viewContentLoaded', function() {
        // initialize core components

        $scope.getAllCategoryList = function(){

        	$http({
        		method: 'get',
        		url: 'api/categoryList',
        	}).then(function (response) {
        		$scope.categoryList = response.data.data;

        	}, function (response) {


        	});
        	
        }

        $scope.deleteCategory = function(id){
        	swal({
        		title: "Are you sure?",
        		text: "You will not be able to recover this Category!",
        		type: "warning",
        		showCancelButton: true,
        		confirmButtonClass: "btn-danger",
        		confirmButtonText: "Yes, delete it!",
        		cancelButtonText: "No, cancel!",
        		CancelButtonClass: "btn-danger",
        		closeOnConfirm: false,
        		closeOnCancel: true
        	},
        	function(isConfirm) {
        		if (isConfirm) {

        			$http({
        				method:'delete',
        				url: 'api/categoryDelete/'+id
        			}).then(function(response) {
        				
        				$scope.getAllCategoryList();
        				swal("Deleted!", "Your category has been deleted.", "success");

        			}, function(response) {
        				
        			});

        		} 
        	});


        }
        $scope.getAllCategoryList();

    });
}]);