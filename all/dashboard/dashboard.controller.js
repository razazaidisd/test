(function() {
    angular
        .module('mainUi')
        .controller('dashboardView', function() {
            var dv = this;


            dv.firstTab = 2;
            dv.secondTab = 2;

            dv.setFirstTab = function (tabId) {
                dv.firstTab = tabId;
            };
            dv.isFirstSet = function (tabId) {
                return dv.firstTab === tabId;
            };

            dv.setSecondTab = function (tabId) {
                dv.secondTab = tabId;
            };
            dv.isSecondSet = function (tabId) {
                return dv.secondTab === tabId;
            };


            dv.createdCoursesTab = ['Active', 'Closed', 'Drafts'];
            dv.learningCoursesTab = ['Applied', 'Saved', 'Jobs Notification'];

            dv.createdCourses = [
                {
                    items: [
                        {
                            title: 'IT Systems Senior Officer – Business Analyst',
                            icon: 'company.png',
                            pageUrl: '#ITSystemsSeniorOfficerBusinessAnalyst'
                        }, {
                            title: 'Digital User Experience',
                            icon: 'jobs.png',
                            pageUrl: '#DigitalUserExperience'
                        }, {
                            title: 'IT System and Network Administrator',
                            icon: 'market.png',
                            pageUrl: '#ITSystemandNetworkAdministrator'
                        }, {
                            title: 'Digital User Experience',
                            icon: 'icon_academic_bond.png',
                            pageUrl: '#DigitalUserExperience'
                        }
                    ]
                }, {
                    items: [
                        {
                            title: 'IT System and Network Administrator',
                            icon: 'market.png',
                            pageUrl: '#ITSystemandNetworkAdministrator'
                        }, {
                            title: 'Digital User Experience',
                            icon: 'jobs.png',
                            pageUrl: '#DigitalUserExperience'
                        }, {
                            title: 'IT Systems Senior Officer – Business Analyst',
                            icon: 'company.png',
                            pageUrl: '#ITSystemsSeniorOfficerBusinessAnalyst'
                        }, {
                            title: 'Digital User Experience',
                            icon: 'icon_academic_bond.png',
                            pageUrl: '#DigitalUserExperience'
                        }
                    ]
                }, {
                    items: [
                        {
                            title: 'IT Systems Senior Officer – Business Analyst',
                            icon: 'company.png',
                            pageUrl: '#ITSystemsSeniorOfficerBusinessAnalyst'
                        }, {
                            title: 'IT System and Network Administrator',
                            icon: 'market.png',
                            pageUrl: '#ITSystemandNetworkAdministrator'
                        }, {
                            title: 'Digital User Experience',
                            icon: 'jobs.png',
                            pageUrl: '#DigitalUserExperience'
                        }, {
                            title: 'Digital User Experience',
                            icon: 'icon_academic_bond.png',
                            pageUrl: '#DigitalUserExperience'
                        }
                    ]
                }
            ];
            dv.learningCourses = [
                {
                    items: [
                        {
                            title: 'IT Systems Senior Officer – Business Analyst',
                            icon: 'company.png',
                            pageUrl: '#ITSystemsSeniorOfficerBusinessAnalyst'
                        }, {
                            title: 'Digital User Experience',
                            icon: 'jobs.png',
                            pageUrl: '#DigitalUserExperience'
                        }, {
                            title: 'IT System and Network Administrator',
                            icon: 'market.png',
                            pageUrl: '#ITSystemandNetworkAdministrator'
                        }, {
                            title: 'Digital User Experience',
                            icon: 'icon_academic_bond.png',
                            pageUrl: '#DigitalUserExperience'
                        }
                    ]
                }, {
                    items: [
                        {
                            title: 'IT System and Network Administrator',
                            icon: 'market.png',
                            pageUrl: '#ITSystemandNetworkAdministrator'
                        }, {
                            title: 'Digital User Experience',
                            icon: 'jobs.png',
                            pageUrl: '#DigitalUserExperience'
                        }, {
                            title: 'IT Systems Senior Officer – Business Analyst',
                            icon: 'company.png',
                            pageUrl: '#ITSystemsSeniorOfficerBusinessAnalyst'
                        }, {
                            title: 'Digital User Experience',
                            icon: 'icon_academic_bond.png',
                            pageUrl: '#DigitalUserExperience'
                        }
                    ]
                }, {
                    items: [
                        {
                            title: 'IT Systems Senior Officer – Business Analyst',
                            icon: 'company.png',
                            pageUrl: '#ITSystemsSeniorOfficerBusinessAnalyst'
                        }, {
                            title: 'IT System and Network Administrator',
                            icon: 'market.png',
                            pageUrl: '#ITSystemandNetworkAdministrator'
                        }, {
                            title: 'Digital User Experience',
                            icon: 'jobs.png',
                            pageUrl: '#DigitalUserExperience'
                        }, {
                            title: 'Digital User Experience',
                            icon: 'icon_academic_bond.png',
                            pageUrl: '#DigitalUserExperience'
                        }
                    ]
                }
            ];


        });
})();
