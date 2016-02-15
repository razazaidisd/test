(function(){
	angular
	.module('mainUi')
	.directive('lolliBoard', function(){
		return{
			restrict: 'E',
			templateUrl: 'lolliBoard/lolliBoard.html',
			scope: {
				data: "="
			}
		}
	});
})();