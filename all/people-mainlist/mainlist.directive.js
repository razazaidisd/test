
(function() {
    angular
        .module('mainUi')
        .directive('mainList', function() {
            return {
                restrict: 'E',
                scope: {},
                replace: true,
                controller: 'mainlist',
                controllerAs: 'ml',
                bindToController: true,
                templateUrl: 'people-mainlist/mainlist.html',
            }
        });
})();
