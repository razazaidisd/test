(function() {
    angular
        .module('mainUi')
        .directive('dashboard', function() {

            return {
                restrict: 'E',
                replace: true,
                templateUrl: 'dashboard/dashboard.html'
            };

        });
})();
