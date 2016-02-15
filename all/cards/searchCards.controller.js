(function(){
    angular
        .module('mainUi')
        .controller('searchCards', function() {
            var mc = this;
            mc.people = {
                image: '../images/aca_admin.jpg',
                name: 'John Doe',
                featured: true,
                subInfo: [
                    {
                        title: 'Managing Director',
                        info: ' at Bondinco',
                        icon: '../images/icon_corporate_bond.png'
                    },
                    {
                        title: 'Harvard University',
                        info: '',
                        icon: '../images/icon_academic_bond.png'
                    },
                    {
                        title: '',
                        info: 'Dubai - UAE',
                        icon: '../images/uae-flag.png'
                    }

               ],
               featuredInfo: [
                    {
                        title: 'Past',
                        info: 'Sr. Software Engineer at Bondinco Internet Consulting',
                        icon: 'fa-compass'
                    },
                    {
                        title: 'Posts',
                        info: '<a href="javascript:;">Systems Ltd</a> Participates in IBA Probattle 2015 April 10, 2015 - 225 Views',
                        icon: 'fa-flag'
                    },
                    {
                        title: '',
                        info: 'MVC TL with experience of building websites with Sitecore enterprise CMS & ... April 10, 2015 - 225 Views'
                    }
               ],
               stats: [
                    {
                        image: '../images/ace-button.png',
                        info: '25,252 Aces'
                    },
                    {
                        icon: 'fa-users',
                        info: '6.5k+ Bonds'
                    },
                    {
                        icon: 'fa-share-alt',
                        info: '132 Shares'
                    }
               ]
            };
            mc.peopleConfig = {
                dropdown: [
                    {
                        title: "Refer",
                        func: ''
                    },
                    {
                        title: "Share",
                        func: ''
                    }
                ],
                action: {
                    trueState: {
                        title: 'Bond',
                        icon: 'fa-plus'
                    },
                    falseState: {
                        title: 'Unbond',
                        icon: 'fa-times'
                    },
                    loadingState: {
                        title: 'Loading',
                        icon: 'fa-spinner'
                    },
                    state: true
                },
                actionFunc : function() {
                    console.log('Follow action complete');
                }
            };



            mc.company = {
                image: '../images/microsoft-transparent.png',
                name: 'Apple Inc',
                featured: true,
                subInfo: [
                    {
                        title: 'IT Industry',
                        info: '',
                    },
                    {
                        title: 'Size: ',
                        info: 'Medium',
                    },
                    {
                        title: 'Employees: ',
                        info: '10,000',
                    },
                    {
                        title: '',
                        info: 'Dubai - UAE',
                        icon: '../images/uae-flag.png'
                    }

               ],
               featuredInfo: [
                    {
                        title: 'Status',
                        info: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum http://www.example.com dolor sit amet...',
                        icon: 'fa-compass',
                    },
               ],
               stats: [
                    {
                        image: '../images/ace-button.png',
                        info: '25,252 Aces'
                    },
                    {
                        icon: 'fa-users',
                        info: '6.5k+ Followers'
                    },
                    {
                        icon: 'fa-share-alt',
                        info: '132 Jobs'
                    }
               ]
            },
            mc.companyConfig = {
                dropdown: [
                    {
                        title: "Refer",
                        func: ''
                    },
                    {
                        title: "Share",
                        func: ''
                    }
                ],
                action: {
                    trueState: {
                        title: 'Follow',
                        icon: 'fa-plus'
                    },
                    falseState: {
                        title: 'Unfollow',
                        icon: 'fa-times'
                    },
                    loadingState: {
                        title: 'Loading',
                        icon: 'fa-spinner'
                    },
                    state: true
                },
                actionFunc : function() {
                    console.log('Follow action complete');
                }
            };

            mc.academic = {
                image: '../images/university-thumb.png',
                name: 'Oxford University',
                featured: false,
                subInfo: [
                    {
                        title: 'High School',
                        info: '',
                    },
                    {
                        title: 'Courses | Programs',
                        info: '',
                    },
                    {
                        title: '',
                        info: 'Dubai - UAE',
                        icon: '../images/uae-flag.png'
                    }

               ],
               featuredInfo: [
                    {
                        title: 'Status',
                        info: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum http://www.example.com dolor sit amet...',
                        icon: 'fa-compass'
                    }
               ],
               stats: [
                    {
                        image: '../images/ace-button.png',
                        info: '25k Aces'
                    },
                    {
                        icon: 'fa-users',
                        info: '6.5k+ Members'
                    },
                    {
                        icon: 'fa-share-alt',
                        info: '13k Followers'
                    }
               ]
            },

            mc.academicConfig = {
                dropdown: [
                    {
                        title: "Refer",
                        func: ''
                    },
                    {
                        title: "Share",
                        func: ''
                    }
                ],
                action: {
                    trueState: {
                        title: 'Follow',
                        icon: 'fa-plus'
                    },
                    falseState: {
                        title: 'UnFollow',
                        icon: 'fa-times'
                    },
                    loadingState: {
                        title: 'Loading',
                        icon: 'fa-spinner'
                    },
                    state: true
                },
                actionFunc : function() {
                    console.log('Follow action complete');
                }
            };

            mc.jobs = {
                image: '../images/vid-public-individual.jpg',
                name: 'Operation Manager',
                featured: false,
                subInfo: [
                    {
                        title: 'Director Level',
                        info: '',
                    },
                    {
                        title: 'Microsoft',
                        info: ' - Medium',
                    },
                    {
                        title: 'Posted',
                        info: '15-02-2016',
                    },
                    {
                        title: '',
                        info: 'Dubai - UAE',
                        icon: '../images/uae-flag.png'
                    },
                    {
                        title: '',
                        info: 'view other jobs by microsoft',
                    }

               ],
               stats: [
                    {
                        image: '../images/ace-button.png',
                        info: '25k Aces'
                    },
                    {
                        icon: 'fa-users',
                        info: '25,232 Shares'
                    }
               ]
            },

            mc.jobsConfig = {
                dropdown: [
                    {
                        title: "Refer",
                        func: ''
                    },
                    {
                        title: "Share",
                        func: ''
                    }
                ],
                action: {
                    trueState: {
                        title: 'Apply',
                        icon: 'fa-plus'
                    },
                    falseState: {
                        title: 'Applied',
                        icon: 'fa-check'
                    },
                    loadingState: {
                        title: 'Loading',
                        icon: 'fa-spinner'
                    },
                    state: true
                },
                actionFunc : function() {
                    console.log('Follow action complete');
                }
            };

            mc.events = {
                image: '../images/vid-public-business.jpg',
                name: 'Apple Recruitment Drive',
                featured: false,
                subInfo: [
                    {
                        title: 'Organization: ',
                        info: 'Bond Event Management',
                    },
                    {
                        title: 'Category: ',
                        info: 'Business',
                    },
                    {
                        title: 'Date: ',
                        info: '15-02-2016 - 20-02-2016',
                    },
                    {
                        title: 'Registration Close: ',
                        info: '20-02-2016',
                    },
                    {
                        title: '',
                        info: 'Dubai - UAE',
                        icon: '../images/uae-flag.png'
                    }
               ],
               featuredInfo: [
                    {
                        title: 'Status',
                        info: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum http://www.example.com dolor sit amet...',
                        icon: 'fa-compass'
                    }
               ],
               stats: [
                    {
                        image: '../images/ace-button.png',
                        info: '25k Aces'
                    },
                    {
                        icon: 'fa-users',
                        info: '25,232 Attendees'
                    }
               ]
            },

            mc.eventsConfig = {
                dropdown: [
                    {
                        title: "Refer",
                        func: ''
                    },
                    {
                        title: "Share",
                        func: ''
                    }
                ],
                action: {
                    trueState: {
                        title: 'Attend',
                        icon: 'fa-plus'
                    },
                    falseState: {
                        title: 'Cancel',
                        icon: 'fa-times'
                    },
                    loadingState: {
                        title: 'Loading',
                        icon: 'fa-spinner'
                    },
                    state: true
                },
                actionFunc : function() {
                    console.log('Follow action complete');
                }
            };

            mc.elearning = {
                image: '../images/student.jpg',
                name: 'PHP Development',
                featured: false,
                subInfo: [
                    {
                        title: 'Full Course',
                        info: '',
                    },
                    {
                        title: 'Instructor: ',
                        info: 'John Smith',
                    },
                    {
                        title: 'Organizer: ',
                        info: 'Oxford University',
                    },
                    {
                        title: 'Registration Close: ',
                        info: '20-02-2016',
                    },
                    {
                        title: '',
                        info: 'Dubai - UAE',
                        icon: '../images/uae-flag.png'
                    }
               ],
               featuredInfo: [
                    {
                        title: 'Skills',
                        info: 'Business & Employees Improvement',
                        icon: 'fa-compass'
                    }
               ],
               stats: [
                    {
                        image: '../images/ace-button.png',
                        info: '25k Aces'
                    },
                    {
                        icon: 'fa-users',
                        info: '25,232 Attendees'
                    }
               ]
            };

            mc.elearningConfig = {
                dropdown: [
                    {
                        title: "Refer",
                        func: ''
                    },
                    {
                        title: "Share",
                        func: ''
                    }
                ],
                action: {
                    trueState: {
                        title: 'Attend',
                        icon: 'fa-plus'
                    },
                    falseState: {
                        title: 'Attend',
                        icon: 'fa-check'
                    },
                    loadingState: {
                        title: 'Loading',
                        icon: 'fa-spinner'
                    },
                    state: true
                },
                actionFunc : function() {
                    console.log('Follow action complete');
                }
            };

            mc.community = {
                image: '../images/home_img_03.jpg',
                name: 'Job Seeker',
                featured: true,
                subInfo: [
                    {
                        title: '16325 ',
                        info: 'Members',
                    },
                    {
                        title: '12,628 ',
                        info: 'Projects & Oppertunities',
                    },
                    {
                        title: '563 ',
                        info: 'Jobs',
                    },
                    {
                        title: '202 ',
                        info: 'Companies',
                    },
                    {
                        title: '75 ',
                        info: 'Events',
                    },
                    {
                        title: '',
                        info: 'Dubai - UAE',
                        icon: '../images/uae-flag.png'
                    }
               ],
               featuredInfo: [
                    {
                        title: 'Trends',
                        tags: [
                            "Graphic Design", "Web Design", "PHP Development"
                        ]
                    },
                    // {
                    //     title: 'Skills',
                    //     info: 'Business & Employees Improvement',
                    //     icon: 'fa-compass'
                    // },
               ],
               stats: [
                    {
                        image: '../images/ace-button.png',
                        info: '25k Aces'
                    },
                    {
                        icon: 'fa-users',
                        info: '25,232 Attendees'
                    }
               ]
            };

            mc.communityConfig = {
                dropdown: [
                    {
                        title: "Refer",
                        func: ''
                    },
                    {
                        title: "Share",
                        func: ''
                    }
                ],
                action: {
                    trueState: {
                        title: 'Join',
                        icon: 'fa-plus'
                    },
                    falseState: {
                        title: 'Joined',
                        icon: 'fa-check'
                    },
                    loadingState: {
                        title: 'Loading',
                        icon: 'fa-spinner'
                    },
                    state: true
                },
                actionFunc : function() {
                    console.log('Follow action complete');
                }
            };

        });
})();
