(function(){
	angular
	.module('mainUi')
	.controller('lolliAd', function(){
		var mc = this;

		mc.cause = {
			title: 'American Cancer Society',
			info: 'Hire before Oct 5th 2017',
			image: '../images/events-cards1.jpg',
			subInfo: [
				{
					icon: 'fa-user',
					info: 'Any Gender'
				},
				{
					icon: 'fa-clock-o',
					info: '19+'
				},
				{
					img: '../images/lollibond-ace-119-black.png',
					info: '350k'
				},
				{
					icon: 'fa-globe',
					info: 'New York, USA'
				},
				{
					label: 'Sponsor by: ',
					sponsor: '../images/company-logos/google-drive.png',
					company: 'Google Drive'
				},
				{
					more: 'Google Drive'
				}
			]
		}
		mc.company = {
			title: 'Samsung',
			info: 'Hire before Oct 5th 2017',
			image: '../images/events-cards4.jpg',
			cash: 'Cash Payout 2 Cents / Ace',
			subInfo: [
				{
					icon: 'fa-user',
					info: 'Any Gender'
				},
				{
					icon: 'fa-clock-o',
					info: '19+'
				},
				{
					img: '../images/lollibond-ace-119-black.png',
					info: '350k'
				},
				{
					icon: 'fa-globe',
					info: 'New York, USA'
				},
				{
					label: 'Hires: ',
					info: '98'
				},
				{
					label: 'Available: ',
					info: '22'
				},
				{
					more: 'Google Drive'
				}

			]
		}

		mc.individual = {
			title: 'Jack Swagger',
			info: 'Senior Software Engineer',
			image: '../images/girl-1.png',
			subInfo: [
				{
					img: '../images/icon_corporate_bond.png',
					info: 'Bondinc, Information Technology'
				},
				{
					img: '../images/countries/uae.png',
					info: 'New York, USA'
				},
				{
					label: 'Aces: ',
					info: '568'
				},
				{
					label: 'Bonds: ',
					info: '220'
				},
				{
					label: 'Hires: ',
					info: '569'
				},
				{
					label: 'Rank: ',
					info: '777'
				}
				
			]
		}

		mc.academic = {
			title: 'University of Oxford',
			info: 'High School',
			image: '../images/events-cards3.jpg',
			subInfo: [
				{
					img: '../images/icon_corporate_bond.png',
					info: 'High School'
				},
				{
					img: '../images/countries/uae.png',
					info: 'Dubai, UAE'
				},
				{
					label: 'Members: ',
					info: '568'
				},
				{
					label: 'Followers: ',
					info: '220'
				},
				{
					label: 'EPSN: ',
					info: '569'
				}
			]
		}
	});
})();