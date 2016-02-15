(function () {
    angular
        .module('mainUi')
        .directive('lbFlexibleTextarea', function() {

        return {
            restrict: 'A',
            link: linker,
        };

        function linker(scope, element, attrs) {
            element.css({'overflow': 'hidden', 'resize': 'none'});
            element.bind('keyup input', function() {
                var code = event.keyCode || event.which;

                this.style.height = 0;
                this.style.height = this.scrollHeight + 'px';
                if (code === 13) {
                    if (!event.shiftKey) {
                        event.preventDefault();
                        scope.$apply(attrs.enterSubmit);
                    }
                }
            });
        }
    });
})();
