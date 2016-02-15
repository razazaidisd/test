(function(){
	angular
		.module('mainUi')
		.directive('searchCards', function(){
			return{
				restrict : "E",
				templateUrl: "cards/searchCards.html",
				replace: true,
				scope: {
					data:"=",
					config: "="
				}
			}
			
		});
})();