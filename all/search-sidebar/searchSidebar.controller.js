(function(){
    angular
        .module('mainUi')
        .controller('searchSidebar', function(){
            var mc = this;
            
            mc.searching= {
                icon: 'glyphicon glyphicon-user',
                title: 'People',
                selectedIcon : '',
                // options: ['All', 'Job Seeker', 'Professional', 'Freelancer', 'Volunteer', 'Interns / Student', 'Mystery Shoppers', 'Recruiters', 'Entrepreneur'],
                
                model: {},
                fields: [
                    {
                        key: 'filter',
                        type: 'select',
                        templateOptions: {
                        options: [
                                {name: 'All', value: 'all'},
                                {name: 'Job Seeker', value: 'job-seeker'},
                                {name: 'Professional', value: 'professional'},
                                {name: 'Freelancer', value: 'freelancer'},
                                {name: 'Volunteer', value: 'volunteer'},
                                {name: 'Interns / Student', value: 'student'},
                                {name: 'Mystery Shoppers', value: 'mystery'},
                                {name: 'Recruiters', value: 'recruiters'},
                                {name: 'Entrepreneur', value: 'entrepreneur'}

                            ]
                        }
                    },
                    {
                        key: 'keyword',
                        type: 'input',
                        templateOptions: {
                        label: 'Keyword',
                        placeholder: 'type keyword'
                        },
                    },
                    {
                        key: 'firstName',
                        type: 'input',
                        templateOptions: {
                        label: 'First Name',
                        placeholder: 'enter first name'
                        }
                    },
                    {
                        key: 'lastName',
                        type: 'input',
                        templateOptions: {
                        label: 'Last Name',
                        placeholder: 'enter last name'
                        }
                    },
                    {
                        key: 'title',
                        type: 'input',
                        templateOptions: {
                        label: 'Title',
                        placeholder: 'enter title'
                        }
                    },
                    {
                        template: '<h4>Advance Professional Filter</h4><hr />',
                        hideExpression: "model.filter != 'professional'"
                    },
                    {
                        template: '<h4>Advance Job Seeker Filter</h4><hr />',
                        hideExpression: "model.filter != 'job-seeker'"
                    },
                    {
                        template: '<h4>Advance Freelancer Filter</h4><hr />',
                        hideExpression: "model.filter != 'freelancer'"
                    },
                    {
                        template: '<h4>Advance Volunteer Filter</h4><hr />',
                        hideExpression: "model.filter != 'volunteer'"
                    },
                    {
                        template: '<h4>Advance Intern / Student Filter</h4><hr />',
                        hideExpression: "model.filter != 'student'"
                    },
                    {
                        template: '<h4>Advance Mystery Filter</h4><hr />',
                        hideExpression: "model.filter != 'mystery'"
                    },
                    {
                        template: '<h4>Advance Entrepreneur Filter</h4><hr />',
                        hideExpression: "model.filter != 'entrepreneur'"
                    },
                    {
                        key: 'visaStatus',
                        type: 'input',
                        templateOptions: {
                            label: 'Visa Status',
                            placeholder: 'enter visa status',
                        },
                        hideExpression: "model.filter != 'professional' && model.filter != 'job-seeker' && model.filter != 'student'"
                    },
                    {
                        key: 'salaryLevel',
                        type: 'input',
                        templateOptions: {
                            label: 'Salary Level',
                            placeholder: 'enter salary',
                        },
                        hideExpression: "model.filter != 'professional' && model.filter != 'job-seeker' && model.filter != 'student'"
                    },
                    {
                        key: 'quaification',
                        type: 'input',
                        templateOptions: {
                            label: 'Qualification',
                            placeholder: 'Qualification',
                        },
                        hideExpression: "model.filter != 'professional' && model.filter != 'job-seeker' && model.filter != 'student'"
                    },
                    {
                        key: 'certification',
                        type: 'input',
                        templateOptions: {
                            label: 'Certification',
                            placeholder: 'Certification',
                        },
                        hideExpression: "model.filter != 'professional' && model.filter != 'job-seeker' && model.filter != 'student'"
                    },
                    {
                        key: 'mysteryShopper',
                        type: 'input',
                        templateOptions: {
                            label: 'Mystery Shopper',
                            placeholder: 'Mystery Shopper',
                        },
                        hideExpression: "model.filter != 'professional' && model.filter != 'job-seeker' && model.filter != 'student'"
                    },
                    {
                        key: 'interestedIn',
                        type: 'input',
                        templateOptions: {
                            label: 'Interested In',
                            placeholder: 'Interested In',
                        },
                        hideExpression: "model.filter != 'professional' && model.filter != 'job-seeker' && model.filter != 'student'"
                    },
                    {
                        key: 'seniorityLevel',
                        type: 'input',
                        templateOptions: {
                            label: 'Seniority Level',
                            placeholder: 'Seniority Level',
                        },
                        hideExpression: "model.filter != 'professional' && model.filter != 'student'"
                    },
                    {
                        key: 'whenJoined',
                        type: 'input',
                        templateOptions: {
                            label: 'When Joined',
                            placeholder: 'When Joined',
                        },
                        hideExpression: "model.filter != 'professional' && model.filter != 'job-seeker' && model.filter != 'student'"
                    },
                    {
                      key: 'typeOfWork',
                      type: 'multiCheckbox',
                      templateOptions: {
                        label: 'Type of work',
                        options: [
                            {id: 1, title : "Build a website"}, 
                            {id: 2, title : "Create Mockages"},
                            {id: 3, title : "Using Wordpress"}
                        ],
                        valueProp: 'id',
                        labelProp: 'title'
                      },
                      hideExpression: "model.filter != 'freelancer'"
                    },
                    {
                        key: 'salaryRange',
                        type: 'input',
                        templateOptions: {
                            label: 'Salary Range',
                            placeholder: 'Salary Range'
                        },
                        hideExpression: "model.filter != 'freelancer'"
                    },
                    {
                        key: 'mysteryType',
                        type: 'multiCheckbox',
                        templateOptions: {
                        label: 'Type',
                        options: [
                            {id: 1, title : "Visit"}, 
                            {id: 2, title : "Call"},
                            {id: 3, title : "Website"}
                        ],
                        valueProp: 'id',
                        labelProp: 'title'
                      },
                      hideExpression: "model.filter != 'mystery'"
                    },
                    {
                        key: 'mysteryReq',
                        type: 'multiCheckbox',
                        templateOptions: {
                        label: 'Mystery Required',
                        options: [
                            {id: 1, title : "Specific Market"}, 
                            {id: 2, title : "Organization"},
                            {id: 3, title : "People"}
                        ],
                        valueProp: 'id',
                        labelProp: 'title'
                      },
                      hideExpression: "model.filter != 'mystery'"
                    },
                    {
                      key: 'scenerios',
                      type: 'multiCheckbox',
                      templateOptions: {
                        label: 'Scenerios',
                        options: [
                            {id: 1, title : "All"}, 
                            {id: 2, title : "Price Audit"},
                            {id: 3, title : "Children"},
                            {id: 4, title : "Disability"}
                        ],
                        valueProp: 'id',
                        labelProp: 'title'
                      },
                      hideExpression: "model.filter != 'volunteer' && model.filter != 'mystery'"
                    },
                    {
                        key: 'publication',
                        type: 'multiCheckbox',
                        templateOptions: {
                        label: 'No. of Publication',
                        options: [
                            {id: 1, title : "5"}, 
                            {id: 2, title : "10"},
                            {id: 3, title : "15"}
                        ],
                        valueProp: 'id',
                        labelProp: 'title'
                      },
                      hideExpression: "model.filter != 'entrepreneur'"
                    },
                    {
                        key: 'followers',
                        type: 'multiCheckbox',
                        templateOptions: {
                        label: 'No. of Followers',
                        options: [
                            {id: 1, title : "50"}, 
                            {id: 2, title : "100"},
                            {id: 3, title : "500"},
                            {id: 3, title : "1000"}
                        ],
                        valueProp: 'id',
                        labelProp: 'title'
                      },
                      hideExpression: "model.filter != 'entrepreneur'"
                    },
                    {
                        template: '<hr>'
                    },
                    {
                        key: 'language',
                        type: 'input',
                        templateOptions: {
                        label: 'Language',
                        placeholder: 'enter language'
                        }
                    },
                    {
                      key: 'gender',
                      type: 'radio',
                      templateOptions: {
                        label: 'Gender',
                        options: [
                          {
                            name: 'Male',
                            value: "male"
                          },
                          {
                            name: 'Female',
                            value: "female"
                          }
                        ]
                      }
                    },
                    {
                      key: 'companySize',
                      type: 'multiCheckbox',
                      templateOptions: {
                        label: 'Company Size',
                        options: [
                            {id: 1, title : "All"}, 
                            {id: 2, title : "11-50"},
                            {id: 3, title : "51-200"},
                            {id: 4, title : "201-500"},
                            {id: 5, title : "501-1000+"}
                        ],
                        valueProp: 'id',
                        labelProp: 'title'
                      }
                    },
                    {
                      key: 'industry',
                      type: 'multiCheckbox',
                      templateOptions: {
                        label: 'Industry',
                        options: [
                            {id: 1, title : "All"}, 
                            {id: 2, title : "Construction"},
                            {id: 3, title : "Management Consulting"},
                            {id: 4, title : "Import & Export"},
                            {id: 5, title : "Sports"},
                            {id: 6, title : "International Trade & Development"}
                        ],
                        valueProp: 'id',
                        labelProp: 'title'
                      }
                    },
                    {
                      key: 'company',
                      type: 'multiCheckbox',
                      templateOptions: {
                        label: 'Company',
                        options: [
                            {id: 1, title : "All"}, 
                            {id: 2, title : "EPSN"},
                            {id: 3, title : "Information Technology"},
                            {id: 4, title : "Management Consulting"},
                            {id: 5, title : "Microsoft"},
                            {id: 6, title : "IBM"}
                        ],
                        valueProp: 'id',
                        labelProp: 'title'
                      }
                    },
                    {
                      key: 'school',
                      type: 'multiCheckbox',
                      templateOptions: {
                        label: 'School',
                        options: [
                            {id: 1, title : "All"}, 
                            {id: 2, title : "APSN"},
                            {id: 3, title : "Secondary School"},
                            {id: 4, title : "Primary School"},
                            {id: 5, title : "High School"},
                            {id: 6, title : "College"},
                            {id: 7, title : "University"}
                        ],
                        valueProp: 'id',
                        labelProp: 'title'
                      }
                    },
                    {
                      key: 'lolliRate',
                      type: 'multiCheckbox',
                      templateOptions: {
                        label: 'lolliRate',
                        options: [
                            {id: 1, title : "All"}, 
                            {id: 2, title : "< 1"},
                            {id: 3, title : "1-2"},
                            {id: 4, title : "3-4"},
                            {id: 5, title : "4-5"}
                        ],
                        valueProp: 'id',
                        labelProp: 'title'
                      }
                    },
                    {
                      key: 'lolliBoard',
                      type: 'multiCheckbox',
                      templateOptions: {
                        label: 'lolliBoard',
                        options: [
                            {id: 1, title : "Any"}, 
                            {id: 2, title : "Available"},
                            {id: 3, title : "Hired"}
                        ],
                        valueProp: 'id',
                        labelProp: 'title'
                      }
                    },
                    {
                      key: 'relationship',
                      type: 'multiCheckbox',
                      templateOptions: {
                        label: 'Relationship',
                        options: [
                            {id: 1, title : "Any"}, 
                            {id: 2, title : "Bounded"},
                            {id: 3, title : "Unbounded"},
                            {id: 4, title : "Community Members"}
                        ],
                        valueProp: 'id',
                        labelProp: 'title'
                      }
                    },
                    {
                      key: 'joinDate',
                      type: 'input',
                      templateOptions: {
                        label: 'Join Date',
                        placeholder: 'Type join date'
                      }
                    },
                    {
                      key: 'skills',
                      type: 'multiCheckbox',
                      templateOptions: {
                        label: 'Skills',
                        options: [
                            {id: 1, title : "PHP Development"}, 
                            {id: 2, title : "NodeJS Development"}
                        ],
                        valueProp: 'id',
                        labelProp: 'title'
                      },
                      expressionProperties: {
                          'templateOptions.disabled': 'model.skills'
                        }
                    },
                    {
                      key: 'nationality',
                      type: 'multiCheckbox',
                      templateOptions: {
                        label: 'Nationality',
                        options: [
                            {id: 1, title : "Pakistani"}, 
                            {id: 2, title : "Russian"},
                            {id: 2, title : "Canadian"}
                        ],
                        valueProp: 'id',
                        labelProp: 'title'
                      },
                      expressionProperties: {
                          'templateOptions.disabled': 'model.nationality'
                        }
                    },
                    {
                      key: 'experience',
                      type: 'multiCheckbox',
                      templateOptions: {
                        label: 'Year of experience',
                        options: [
                            {id: 1, title : "<1"}, 
                            {id: 2, title : "1-2"},
                            {id: 2, title : "2-3"},
                            {id: 2, title : "3-4"},
                            {id: 2, title : "4-5"},
                            {id: 2, title : "5+"}
                        ],
                        valueProp: 'id',
                        labelProp: 'title'
                      },
                      expressionProperties: {
                          'templateOptions.disabled': 'model.experience'
                        }
                    },
                    {
                      key: 'function',
                      type: 'multiCheckbox',
                      templateOptions: {
                        label: 'Function',
                        options: [
                            {id: 1, title : "Administration"}, 
                            {id: 2, title : "Accounting"},
                            {id: 2, title : "Finance"},
                            {id: 2, title : "Computer Science"}
                        ],
                        valueProp: 'id',
                        labelProp: 'title'
                      },
                      expressionProperties: {
                          'templateOptions.disabled': 'model.function'
                        }
                    },
                    {
                      key: 'profileCompletion',
                      type: 'multiCheckbox',
                      templateOptions: {
                        label: 'Profile Completion',
                        options: [
                            {id: 1, title : "All"}, 
                            {id: 2, title : "less than 40%"},
                            {id: 2, title : "lesss than 80&"},
                            {id: 2, title : "100%"}
                        ],
                        valueProp: 'id',
                        labelProp: 'title'
                      },
                      expressionProperties: {
                          'templateOptions.disabled': 'model.profileCompletion'
                        }
                    }
                ]
            
                
            };
            
            
            // vm.originalFields = angular.copy(vm.fields);

            // function definition
            function onSubmit() {
                alert(JSON.stringify(mc.model), null, 2);
            }
        });
})();