(function() {
    angular
        .module('mainUi')
        .controller('sidebarListingView', function() {
            var mc = this;

            mc.jobWidgetConfig = {
                headerTitle: 'Jobs',
                headerIcon: 'fa fa-certificate',
                addLink: '#',
                addIcon: 'fa fa-plus',
                viewLink: '#',
                maxItems: 3,
                actions: [{
                    buttonTitle: 'Bond',
                    buttonIcon: 'fa fa-plus'
                }],
            };
            mc.jobWidgetData = [
                {
                    title: 'Full Stack Developer Required',
                    image: 'images/company-logos/instagram.png',
                    link: '#',
                    subInfo: [{
                        icon: 'fa fa-calendar',
                        info: 'Apply date: 1st Nov, 2015'
                    }, {
                        icon: 'fa fa-location-arrow',
                        info: '45 Buston Street, Boston, USA.'
                    }],
                }, {
                    title: 'Senior Graphic Designer',
                    image: 'images/company-logos/facebook.png',
                    link: '#',
                    subInfo: [{
                        icon: 'fa fa-calendar',
                        info: 'Apply date: 1st Nov, 2015'
                    }, {
                        icon: 'fa fa-location-arrow',
                        info: '45 Buston Street, Boston, USA.'
                    }],
                }, {
                    title: 'Full Stack Developer Required',
                    image: 'images/company-logos/dropbox.png',
                    link: '#',
                    subInfo: [{
                        icon: 'fa fa-calendar',
                        info: 'Apply date: 1st Nov, 2015'
                    }, {
                        icon: 'fa fa-location-arrow',
                        info: '45 Buston Street, Boston, USA.'
                    }],
                }, {
                    title: 'Full Stack Developer Required',
                    image: 'images/company-logos/instagram.png',
                    link: '#',
                    subInfo: [{
                        icon: 'fa fa-calendar',
                        info: 'Apply date: 1st Nov, 2015'
                    }, {
                        icon: 'fa fa-location-arrow',
                        info: '45 Buston Street, Boston, USA.'
                    }],
                }, {
                    title: 'Senior Graphic Designer',
                    image: 'images/company-logos/facebook.png',
                    link: '#',
                    subInfo: [{
                        icon: 'fa fa-calendar',
                        info: 'Apply date: 1st Nov, 2015'
                    }, {
                        icon: 'fa fa-location-arrow',
                        info: '45 Buston Street, Boston, USA.'
                    }],
                }, {
                    title: 'Full Stack Developer Required',
                    image: 'images/company-logos/dropbox.png',
                    link: '#',
                    subInfo: [{
                        icon: 'fa fa-calendar',
                        info: 'Apply date: 1st Nov, 2015'
                    }, {
                        icon: 'fa fa-location-arrow',
                        info: '45 Buston Street, Boston, USA.'
                    }],
                }
            ];

            mc.postWidgetConfig = {
                headerTitle: 'Post',
                headerIcon: 'fa fa-clone',
                viewLink: '#',
                maxItems: 3
            };
            mc.postWidgetData = [{
                post: "Save Harmison wrote on Omar's Wall.",
                image: 'images/profile-photo.jpg'
            }, {
                post: "Save Harmison wrote on Omar's Wall.",
                image: 'images/profile-photo.jpg'
            }, {
                post: "Save Harmison wrote on Omar's Wall.",
                image: 'images/profile-photo.jpg'
            }, {
                post: "Save Harmison wrote on Omar's Wall.",
                image: 'images/profile-photo.jpg'
            }, {
                post: "Save Harmison wrote on Omar's Wall.",
                image: 'images/profile-photo.jpg'
            }, {
                post: "Save Harmison wrote on Omar's Wall.",
                image: 'images/profile-photo.jpg'
            }];

            mc.eventWidgetConfig = {
                headerTitle: 'Event',
                headerIcon: 'fa fa-calendar',
                viewLink: '#',
                maxItems: 3,
                actionDropdown: {
                    ddIcon: 'fa fa-angle-down',
                    ddList: [{
                        link: '#',
                        text: 'Option 1',
                        icon: 'fa fa-retweet'
                    }, {
                        link: '#',
                        text: 'Option 2',
                        icon: 'fa fa-retweet'
                    }]
                },
            };
            mc.eventWidgetData = [{
                title: 'Wordpress and Hackers',
                image: 'images/events-cards4.jpg',
                link: '#',
                subInfo: [{
                    icon: 'fa fa-calendar-check-o',
                    info: '25-27 Jan 2016'
                }, {
                    icon: 'fa fa-map-marker',
                    info: '45 Buston Street, Boston, USA.'
                }],
            }, {
                title: 'Apple Inc Recruitment Drive',
                image: 'images/events-cards2.jpg',
                link: '#',
                subInfo: [{
                    icon: 'fa fa-calendar-check-o',
                    info: '25-27 Jan 2016'
                }, {
                    icon: 'fa fa-map-marker',
                    info: '45 Buston Street, Boston, USA.'
                }],
            }, {
                title: 'Global Village 2015-2016',
                image: 'images/events-cards1.jpg',
                link: '#',
                subInfo: [{
                    icon: 'fa fa-calendar-check-o',
                    info: '3 Nov 2015 to 9 Apr 2016'
                }, {
                    icon: 'fa fa-map-marker',
                    info: '45 Buston Street, Boston, USA.'
                }],
            }, {
                title: 'Wordpress and Hackers',
                image: 'images/events-cards4.jpg',
                link: '#',
                subInfo: [{
                    icon: 'fa fa-calendar-check-o',
                    info: '25-27 Jan 2016'
                }, {
                    icon: 'fa fa-map-marker',
                    info: '45 Buston Street, Boston, USA.'
                }],
            }, {
                title: 'Apple Inc Recruitment Drive',
                image: 'images/events-cards2.jpg',
                link: '#',
                subInfo: [{
                    icon: 'fa fa-calendar-check-o',
                    info: '25-27 Jan 2016'
                }, {
                    icon: 'fa fa-map-marker',
                    info: '45 Buston Street, Boston, USA.'
                }],
            }, {
                title: 'Global Village 2015-2016',
                image: 'images/events-cards1.jpg',
                link: '#',
                subInfo: [{
                    icon: 'fa fa-calendar-check-o',
                    info: '3 Nov 2015 to 9 Apr 2016'
                }, {
                    icon: 'fa fa-map-marker',
                    info: '45 Buston Street, Boston, USA.'
                }],
            }];

            mc.peopleWidgetConfig = {
                headerTitle: 'People',
                headerIcon: 'fa fa-users',
                viewLink: '#',
                maxItems: 3,
                actions: [{
                    buttonTitle: 'Bond',
                    buttonIcon: 'fa fa-plus'
                }],
                actionDropdown: {
                    ddIcon: 'fa fa-angle-down',
                    ddList: [{
                        link: '#',
                        text: 'Option 1',
                        icon: 'fa fa-retweet'
                    }, {
                        link: '#',
                        text: 'Option 2',
                        icon: 'fa fa-retweet'
                    }]
                },
            };
            mc.peopleWidgetData = [{
                title: 'Iqrar Raza',
                image: 'images/profile-pic.jpg',
                link: '#',
                time: '5m',
                subInfo: [{
                    info: 'Sr. Front end developer'
                }],
            }, {
                title: 'Ahmer Khan',
                image: 'images/user-image-7.jpg',
                link: '#',
                subInfo: [{
                    info: 'Front end developer'
                }],
            }, {
                title: 'Waqar Ali',
                image: 'images/profile-photo.jpg',
                link: '#',
                subInfo: [{
                    info: 'Front end developer'
                }],
            }, {
                title: 'Iqrar Raza',
                image: 'images/profile-pic.jpg',
                link: '#',
                subInfo: [{
                    info: 'Sr. Front end developer'
                }],
            }, {
                title: 'Ahmer Khan',
                image: 'images/user-image-7.jpg',
                link: '#',
                subInfo: [{
                    info: 'Front end developer'
                }],
            }, {
                title: 'Waqar Ali',
                image: 'images/profile-photo.jpg',
                link: '#',
                subInfo: [{
                    info: 'Front end developer'
                }],
            }];
        });
})();
