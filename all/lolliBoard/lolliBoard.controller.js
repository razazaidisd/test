(function(){
	angular
	.module('mainUi')
	.controller('lolliBoard', function(){
		var mc = this;

		mc.individualPublic= {
			mainImage: '../images/ad2.jpg',
			action: {
				icon: 'fa-play',
				func: doSomething
			},
			title: 'Restaurant Week - Gainsville',
			hire: 'Hire this lolliBoard',
			subInfo: [
				{
					title: 'Hires',
					value: '260,354',
					icon: 'fa-suitcase'
				},
				{
					title: 'Aces',
					value: '154,96',
					image: '../images/lollibond-ace-119-black.png'
				},
				{
					title: 'Views',
					value: '92,563',
					icon: 'fa-eye'
				}
			]
		}
		function doSomething(){
			console.log('Do Something');
		}

		mc.individualPrivate= {
			mainImage: '../images/ad-company.jpg',
			action: {
				icon: 'fa-pencil',
				func: 'doSomething'
			},
			title: 'Restaurant Week - Gainsville',
			hire: 'Hire Own lolliBoard',
			subInfo: [
				{
					title: 'Hires',
					value: '260,354',
					icon: 'fa-suitcase'
				},
				{
					title: 'Aces',
					value: '154,96',
					image: '../images/lollibond-ace-119-black.png'
				},
				{
					title: 'Views',
					value: '92,563',
					icon: 'fa-eye'
				}
			]
		}
	});
		
})();