(function(){
	angular
		.module('mainUi')
		.directive('mainCards', function(){
			return{
				restrict : "E",
				templateUrl: "cards/mainCards.html",
				replace: true,
				scope: {
					data : "=",
					config: "="
				}
			}
			
		});
})();