(function() {
    angular
        .module('mainUi')
        .directive('managelistCard', function() {

            return {
                restrict: 'E',
                replace: true,
                scope: {
                    data: '='
                },
                templateUrl: 'manageList/manageList.html'
            };

        });
})();
