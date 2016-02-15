(function() {
        angular
            .module('mainUi')
            .directive('advanceSearch', advanceSearch)

        function advanceSearch() {
            return {
                restrict: 'E',
                link: linker,
                scope: {},
                replace: true,
                controller: 'advanceSearchCtrl',
                controllerAs: 'vm',
                bindToController: true,
                templateUrl: 'advanceSearch/advanceSearch.html'
            }
        }

        function linker(scope, element, attrs) {

        }
})();
