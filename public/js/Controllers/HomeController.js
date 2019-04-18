/* Setup blank page controller */
angular.module('EcommerceApp').controller('HomeController', ['$scope', '$rootScope', '$location', '$timeout', '$http','$window',
	function($scope, $rootScope, $location, $timeout, $http,$window) {
		$scope.$on('$viewContentLoaded', function() {
			
			//$scope.idUserRole= (localStorage.getItem('idUserRole'));
			//console.log((localStorage.getItem('idUserRole')));

			
		});
	}]);
