angular.module('EcommerceApp').controller('AddressCreateController', ['$scope', '$rootScope', '$location', '$timeout', '$http', function($scope, $rootScope, $location, $timeout, $http) {
    $scope.$on('$viewContentLoaded', function() {
        // initialize core components

        $scope.addressInfo = {
            address: null,
            defaultAddress: null,
            phoneNo: null
        };


        $scope.validateAddress = function (){
            var formStatus = true;

            for ( var input in $scope.addressInfo) {

                if(input === 'address'|| input ==='defaultAddress'|| input ==='phoneNo'){
                    if (!!$scope.AddressCreateForm[input].$error.required) {
                        $scope.AddressCreateForm[input].$setDirty(true);
                        formStatus = false;
                    }
                }
            }


            return formStatus;
        }




        $scope.createAddress = function(){

            if($scope.validateAddress()){
                toastr.info("'info', 'Loading!', 'Please wait.'")
                $http({
                    method: 'post',
                    url: 'api/addressCreate',
                    data:$scope.addressInfo
                }).then(function (response) {
                    $scope.addressInfo=null;

                    swal({
                        title: 'Done!',
                        text: 'Address Created Successfully.',
                        type: 'success'
                    }, function () {

                        $location.path("/manageAddressBook");

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
