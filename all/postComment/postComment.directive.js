(function () {
    angular
        .module('mainUi')
        .directive('postComment', function() {

        return {
            restrict: 'E',
            replace: true,
            link: linker,
            scope: {
                destination: '=',
                onSubmission: '&'
            },
            templateUrl: 'postComment/postComment.html'
        };

        function linker(scope, element) {
            var destinationArray = scope.destination;

            function submit(value) {
                var copy = angular.copy(value);
                destinationArray.push(copy);
                scope.replyForm.content = '';

                // Call directive on submission function
                scope.onSubmission();
            }

            scope.submit = submit;
        }

    });
})();
