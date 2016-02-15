(function(){
    angular
        .module('mainUi')
        .directive('searchSidebar', function(){
            return{
                restrict: 'E',
                templateUrl: 'search-sidebar/searchSidebar.html',
                scope: {
                    data: "="
                }
            }
        });
})();