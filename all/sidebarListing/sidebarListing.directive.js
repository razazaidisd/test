(function () {
    angular
        .module('mainUi')
        .directive('sidebarListing', function() {

        return {
            restrict: 'E',
            replace: true,
            link: linker,
            scope: {
                data: '=',
                config: '='
            },
            templateUrl: 'sidebarListing/sidebarListing.html'
        };

        function linker(scope, element, attrs) {
            function remove(item) {
                var index = scope.data.indexOf(item);
                scope.data.splice(index, 1);
            }
            scope.remove = remove;
        }
    });
})();
