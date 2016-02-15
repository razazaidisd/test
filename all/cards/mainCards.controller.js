(function(){
    angular
        .module('mainUi')
        .controller('mainCards', function($modal) {
            var mc = this;

            mc.companyCard = {
            title: "Microsoft Corporation",
            mainImage: "../images/events-cards2.jpg",
            headerImage: "../images/microsoft-transparent.png",
            headerInfo: '10 Jobs & 500 employees',
            button: "Ace",
            subInfo: [{
                title: 'Company',
                info: 'Microsoft Corporation',
            }, {
                title: 'Size',
                info: 'Medium',
            }, {
                title: 'Employees',
                info: '10000',
            }, {
                title: 'Jobs',
                info: '132',
            }, {
                icon: 'fa-map-marker',
                title: 'Location',
                info: 'Dubai, UAE',
            }]
        };

        mc.companyCardConfig = {
            actions : [
                {
                    title: "Ace",
                    icon: "fa-map-marker",
                    class: "button"
                }
            ]
        };

        mc.academicCard = {
            title: "Business Administration",
            mainImage: "../images/events-cards2.jpg",
            headerImage: "../images/oxford-uni.png",
            headerInfo: '500 Programs & 10,000 Students',
            button: "Ace",
            subInfo: [{
                title: 'Category',
                info: 'Computer Software',
            }, {
                title: 'Location',
                icon: 'fa-map-marker',
                info: 'Dubai, UAE'
            }, {
                title: '',
                info: '12,500 Students & Alumini'
            }]
        };

        mc.academicCardConfig = {
            actions : [
                {
                    title: "Ace",
                    icon: "fa-map-marker",
                    class: "button"
                }
            ]
        };


        mc.academicCardConfig = {
            actions : [
                {
                    title: "Ace",
                    icon: "fa-map-marker",
                    class: "button"
                }
            ]
        };

        

        mc.peopleCard = [
            {
                title: "Lionel Messi",
                mainImage: "../images/events-cards2.jpg",
                headerImage: "",
                headerInfo: '500 Aces',
                subInfo: [{
                    title: 'Software Engineer',
                    info: '',
                },
                {
                    title: '',
                    info: 'Microsoft Corporation',
                }, {
                    title: 'Location',
                    icon: 'fa-map-marker',
                    info: 'Dubai, UAE'
                }]
            },
            {
                title: "Lionel Messi",
                mainImage: "../images/events-cards2.jpg",
                headerImage: "",
                headerInfo: '500 Aces',
                subInfo: [{
                    title: 'Software Engineer',
                    info: '',
                },
                {
                    title: '',
                    info: 'Microsoft Corporation',
                }, {
                    title: 'Location',
                    icon: 'fa-map-marker',
                    info: 'Dubai, UAE'
                }]
            },
            {
                title: "Lionel Messi",
                mainImage: "../images/events-cards2.jpg",
                headerImage: "",
                headerInfo: '500 Aces',
                subInfo: [{
                    title: 'Software Engineer',
                    info: '',
                },
                {
                    title: '',
                    info: 'Microsoft Corporation',
                }, {
                    title: 'Location',
                    icon: 'fa-map-marker',
                    info: 'Dubai, UAE'
                }]
            }
        ];

        var myModal = $modal({template: 'wallPost/sharePost.html', show: false});
        var showModal = function() {
               
            myModal.$promise.then(myModal.show);
  
              };
        mc.peopleCardConfig = {
            actions : [
                {
                    title: "Bond",
                    icon: "fa-map-marker",
                    class: "button",
                    action: showModal,
                },
                {
                    title: "Message",
                    icon: "fa-map-marker",
                    class: "button-border"
                }
            ]
        };

        mc.jobCard = [
        {
            title: "Full Stack Developer",
            mainImage: "../images/events-cards2.jpg",
            headerImage: "../images/beats-apple.png",
            headerInfo: 'Microsoft',
            headerSubInfo: ' Computer Software',
            button: 'Apply',
            subInfo: [{
                title: 'Company',
                info: 'Microsoft Corporation',
            }, {
                title: 'Published Date',
                info: '27th Sept, 2015'
            },{
                title: 'Location',
                icon: 'fa-map-marker',
                info: 'Dubai, UAE'
            }]
        },
        {
            title: "PHP Developer",
            mainImage: "../images/events-cards2.jpg",
            headerImage: "../images/beats-apple.png",
            headerInfo: 'Microsoft',
            headerSubInfo: ' Computer Software',
            button: 'Apply',
            subInfo: [{
                title: 'Company',
                info: 'Microsoft Corporation',
            }, {
                title: 'Published Date',
                info: '27th Sept, 2015'
            },{
                title: 'Location',
                icon: 'fa-map-marker',
                info: 'Dubai, UAE'
            }]
        },
        {
            title: "UX Developer",
            mainImage: "../images/events-cards2.jpg",
            headerImage: "../images/beats-apple.png",
            headerInfo: 'Microsoft',
            headerSubInfo: ' Computer Software',
            button: 'Apply',
            subInfo: [{
                title: 'Company',
                info: 'Microsoft Corporation',
            }, {
                title: 'Published Date',
                info: '27th Sept, 2015'
            },{
                title: 'Location',
                icon: 'fa-map-marker',
                info: 'Dubai, UAE'
            }]
        }
        ];

        var messageModal = function(){
            console.log("ahmer");
        };

        mc.jobCardConfig = {
            actions : [
                {
                    title: "Apply",
                    icon: "fa-map-marker",
                    class: "button",
                    action: messageModal
                },
                {
                    title: "Save",
                    icon: "fa-map-marker",
                    class: "button-border"
                }
            ]
        };


        mc.eventCard = {
            title: "Annual Farewell Event",
            mainImage: "../images/events-cards2.jpg",
            headerImage: "../images/event-cover.jpg",
            headerInfo: 'Event Name',
            headerSubInfo: 'organized by PEPSI',
            button: 'Attend',
            subInfo: [{
                title: 'Date',
                info: '10-12-2015 - 15-10-2015',
            }, {
                title: 'Registration Close',
                info: '25th September, 2015'
            },{
                title: 'Category',
                info: 'Business',
            },{
                title: 'Organizer',
                info: 'Dubai Event Managment',
            },{
                title: 'Location',
                icon: 'fa-map-marker',
                info: 'Dubai, UAE'
            }]
        };

        mc.eventCardConfig = {
            actions : [
                {
                    title: "Attend",
                    icon: "fa-map-marker",
                    class: "button"
                },
                {
                    title: "Save",
                    icon: "fa-map-marker",
                    class: "button-border"
                }
            ]
        };

        mc.elearningCard = {
            title: "Learning AngularJS Development",
            mainImage: "../images/events-cards2.jpg",
            headerImage: "../images/people_search.jpg",
            headerInfo: 'Harvard University',
            headerSubInfo: 'Science & Cooking',
            button: 'View Details',
            subInfo: [{
                title: 'Instructor',
                info: 'John Smith',
            }, {
                title: 'Organizer',
                info: 'Oxford University'
            },{
                title: 'Registration Close',
                info: '10-12-2015',
            },{
                title: 'Location',
                icon: 'fa-map-marker',
                info: 'Dubai, UAE'
            }]
        };

        mc.elearningCardConfig = {
            actions : [
                {
                    title: "View Details",
                    icon: "fa-map-marker",
                    class: "button-border"
                }
            ]
        };

        mc.communityCard = {
            title: "Information Tehcnology Community",
            mainImage: "../images/events-cards2.jpg",
            headerImage: "",
            headerInfo: '',
            headerSubInfo: '',
            button: 'Join',
            subInfo: [{
                title: 'Jobs',
                info: '28',
            }, {
                title: 'Projects',
                info: '145'
            },{
                title: 'Companies',
                info: '53',
            },{
                title: 'Members',
                info: '28',
            },{
                title: 'Events',
                info: '145',
            },{
                title: 'Location',
                icon: 'fa-map-marker',
                info: 'Dubai, UAE'
            }]
        };

        mc.communityCardConfig = {
            actions : [
                {
                    title: "Join",
                    icon: "fa-map-marker",
                    class: "button"
                },
                {
                    title: "Follow",
                    icon: "fa-map-marker",
                    class: "button-border"
                }
            ]
        };
        });
})();
