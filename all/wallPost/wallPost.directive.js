(function () {
    angular
        .module('mainUi')
        .directive('wallPost', function() {

        return {
            restrict: 'E',
            replace: true,
            link: linker,
            scope: {
                postData: '=',
                postConfig: '='
            },
            templateUrl: 'wallPost/wallPost.html'
        };

        function linker(scope, element) {
            function mainComment() {
                console.log('mainComment');
            }

            function subComment() {
                console.log('subComment');
            }

            scope.mainComment = mainComment;
            scope.subComment = subComment;
        }
    });
})();
