(function() {
    angular
        .module('mainUi')
        .controller('manageListCardView', function() {
            var mcv = this;

            mcv.jobsData = [
                {
                    title: 'IT Systems Senior Officer – Business Analyst',
                    subitems: [
                        {
                            name: 'Dropbox'
                        }, {
                            label: 'Category',
                            name: 'IT Industry'
                        }, {
                            label: 'Course Price',
                            name: '$250'
                        }, {
                            label: 'Location',
                            name: 'Brooklyn, New York'
                        }
                    ],
                    pageUrl: '#ITSystemsSeniorOfficer',
                    icon: '/company-logos/dropbox.png',
                    status: '236 applicants',
                    statusColor: 'green',
                }, {
                    title: 'Digital User Experience',
                    subitems: [
                        {
                            name: 'Dropbox'
                        }, {
                            label: 'Category',
                            name: 'IT Industry'
                        }, {
                            label: 'Course Price',
                            name: '$250'
                        }, {
                            label: 'Location',
                            name: 'Alabama, New York'
                        }
                    ],
                    pageUrl: '#DigitalUserExperience',
                    icon: '/company-logos/google-drive.png',
                    status: '476 applicants',
                    statusColor: 'blue',
                }, {
                    title: 'Network Administrator',
                    subitems: [
                        {
                            name: 'Dropbox'
                        }, {
                            label: 'Category',
                            name: 'IT Industry'
                        }, {
                            label: 'Course Price',
                            name: '$250'
                        }, {
                            label: 'Location',
                            name: 'Salima, Village Lebanon'
                        }
                    ],
                    pageUrl: '#NetworkAdministrator',
                    icon: '/company-logos/airbnb.png',
                    status: '36 applicants',
                    statusColor: 'orange',
                }, {
                    title: 'Senior Web Developer',
                    subitems: [
                        {
                            name: 'Dropbox'
                        }, {
                            label: 'Category',
                            name: 'IT Industry'
                        }, {
                            label: 'Course Price',
                            name: '$250'
                        }, {
                            label: 'Location',
                            name: 'Dubai, United Arab Emirates'
                        }
                    ],
                    pageUrl: '#SeniorWebDeveloper',
                    icon: '/company-logos/twitter.png',
                    status: '25,236 applicants',
                    statusColor: 'blue',
                }, {
                    title: 'Digital User Experience',
                    subitems: [
                        {
                            name: 'Dropbox'
                        }, {
                            label: 'Category',
                            name: 'IT Industry'
                        }, {
                            label: 'Course Price',
                            name: '$250'
                        }, {
                            label: 'Location',
                            name: 'California, United States'
                        }
                    ],
                    pageUrl: '#DigitalUserExperience',
                    icon: '/company-logos/google-drive.png',
                    status: '476 applicants',
                    statusColor: 'blue',
                }
            ];

        });
})();
