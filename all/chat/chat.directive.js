(function () {
    angular
        .module('mainUi')
        .directive('chat', function() {

        return {
            restrict: 'E',
            replace: true,
            scope: {},
            controller: 'chatView',
            controllerAs: 'chat',
            bindToController: true,
            templateUrl: 'chat/chat.html'
        };
    });
})();
