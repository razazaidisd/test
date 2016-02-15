(function(){
	angular
	.module('mainUi')
	.directive('lolliAd', function(){
		return{
			restrict: 'E',
			templateUrl: 'lolliBoard/lolliAd-card.html',
			scope: {
				data: "="
			}
		}
	});
})();
