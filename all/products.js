(function(){
    var app = angular.module('store-module', []);

    app.directive('productPanels', function(){
        return {
            restrict: 'E',
            templateUrl: 'include/product-panels.html',
            controller: function() {
                var vm = this;
                vm.panel = 1;

                vm.selectTab = function(setTab) {
                    vm.panel = setTab;
                };

                vm.isSelected = function(checkTab) {
                    return vm.panel === checkTab;
                };
            },
            controllerAs: 'vt',
        };
    });

    app.controller('ReviewController', function() {
        var vm = this;
        vm.review = {};

        vm.addReview = function(product) {
            vm.review.createdOn  = Date.now();
            product.reviews.push(vm.review);
            vm.review = {};
        };
    });

    app.directive('reviewStar', function(){
        return {
            restrict: 'E',
            templateUrl: 'include/review-star.html'
        };
    });
    app.directive('reviewEmail', function(){
        return {
            restrict: 'E',
            templateUrl: 'include/review-email.html'
        };
    });
    app.directive('reviewDate', function(){
        return {
            restrict: 'E',
            templateUrl: 'include/review-date.html'
        };
    });
    app.directive('reviewComment', function(){
        return {
            restrict: 'E',
            templateUrl: 'include/review-comment.html'
        };
    });

    app.directive('productItem', function(){
        return {
            restrict: 'E',
            scope: {
                abc: '='
            },
            templateUrl: 'include/product-item.html'
        };
    });
})();
