(function () {
    angular
        .module('mainUi')
        .directive('toggleButton', function($timeout){
        return {
            restrict: 'E',
            scope: {
                buttonConfig : "=",
                completeState: "&"
            },
            template: '<a href="javascript:;" class="button-rainbow" ng-click="clickEvent()">{{ title }} <i class="fa {{ icon }}"></i></a>',
            replace: true,
            link: function(scope, element) {
                toggleState();
                function clickEvent(){
                    console.log('Clicked ' + scope.title);
                    scope.title = scope.buttonConfig.loadingState.title;
                    scope.icon = scope.buttonConfig.loadingState.icon;

                    $timeout(function() {
                        toggleState();
                    }, 1000).then(function(){
                        scope.completeState();
                    });
                }
                function toggleState(){
                    if(scope.buttonConfig.state){
                        scope.title = scope.buttonConfig.trueState.title;
                        scope.icon = scope.buttonConfig.trueState.icon;
                        scope.buttonConfig.state = false;
                    }
                    else{
                        scope.title = scope.buttonConfig.falseState.title;
                        scope.icon = scope.buttonConfig.falseState.icon;
                        scope.buttonConfig.state = true;
                    }
                }
                scope.clickEvent = clickEvent;
            }
        }
    });
})();
