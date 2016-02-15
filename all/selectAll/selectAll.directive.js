(function() {
        angular
            .module('mainUi')
            .directive('selectAll', selectAll)

        function selectAll() {
            return {
                restrict: 'E',
                link: linker,
                replace: true,
                scope: {
                    optionsList: '=',
                },
                template: '<input type="checkbox" class="hide" ng-model="allSelected" ng-change="selectToggle()">'
            }
        }

        function linker(scope, element, attrs) {
            scope.allSelected = false;

            function selectToggle() {
                angular.forEach(scope.optionsList, function (val, index) {
                    val.isSelected = scope.allSelected;
                });
            }

            function checkSelectAll() {
                var allSet = true,
                    allClear = true;

                angular.forEach(scope.optionsList, function (cb, index) {
                    if (cb.isSelected) {
                        allClear = false;
                    } else {
                        allSet = false;
                    }
                });


                element.prop('indeterminate', false);
                if (allSet) {
                    scope.allSelected = true;
                } else if (allClear) {
                    scope.allSelected = false;
                } else {
                    scope.allSelected = false;
                    element.prop('indeterminate', true);
                    element.addClass('asdsad');
                }
            }

            scope.selectToggle = selectToggle;
            scope.optionsList.checkSelectAll = checkSelectAll;
        }
})();
