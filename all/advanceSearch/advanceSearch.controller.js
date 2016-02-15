(function() {
    angular
        .module('mainUi')
        .controller('advanceSearchCtrl', advanceSearchCtrl)

    function advanceSearchCtrl(filterFilter) {
        var vm = this;

        vm.selectedOption = {
            title: 'All',
            placeholder: 'Search for people, jobs, companies and more...'
        };

        vm.optionsList = [{
            label: '<i class="fa fa-indent">&nbsp;</i><span>All</span>',
            value: {
                title: 'All',
                placeholder: 'Search for people, jobs, companies and more...'
            }
        }, {
            label: '<i class="glyphicon glyphicon-user">&nbsp;</i><span>People</span>',
            value: {
                title: 'People',
                placeholder: 'Search for people...'
            }
        }, {
            label: '<i class="glyphicon glyphicon-object-align-bottom">&nbsp;</i><span>Companies</span>',
            value: {
                title: 'Companies',
                placeholder: 'Search for companies...'
            }
        }, {
            label: '<i class="glyphicon glyphicon-education">&nbsp;</i><span>Acadamia</span>',
            value: {
                title: 'Acadamia',
                placeholder: 'Search for acadamia...'
            }
        }, {
            label: '<i class="glyphicon glyphicon-grain">&nbsp;</i><span>HR lolli</span>',
            value: {
                title: 'HR lolli',
                placeholder: 'Search in HR lolli...'
            }
        }, {
            label: '<i class="glyphicon glyphicon-globe">&nbsp;</i><span>Communities</span>',
            value: {
                title: 'Communities',
                placeholder: 'Search for communities...'
            }
        }, {
            label: '<i class="glyphicon glyphicon-calendar">&nbsp;</i><span>Events</span>',
            value: {
                title: 'Events',
                placeholder: 'Search for events...'
            }
        }, {
            label: '<i class="glyphicon glyphicon-briefcase">&nbsp;</i><span>Jobs</span>',
            value: {
                title: 'Jobs',
                placeholder: 'Search for jobs...'
            }
        }, {
            label: '<i class="glyphicon glyphicon-link">&nbsp;</i><span>E-Learning</span>',
            value: {
                title: 'E-Learning',
                placeholder: 'Search for e-Learning...'
            }
        }, {
            label: '<i class="glyphicon glyphicon-user">&nbsp;</i><span>Contacts</span>',
            value: {
                title: 'Contacts',
                placeholder: 'Search for contacts...'
            }
        }, {
            label: '<i class="glyphicon glyphicon-facetime-video">&nbsp;</i><span>Posts</span>',
            value: {
                title: 'Posts',
                placeholder: 'Search for posts...'
            }
        }, {
            label: '<i class="glyphicon glyphicon-envelope">&nbsp;</i><span>Inbox</span>',
            value: {
                title: 'Inbox',
                placeholder: 'Search for inbox...'
            }
        }, {
            label: '<i class="glyphicon glyphicon-bell">&nbsp;</i><span>Notifications</span>',
            value: {
                title: 'Notifications',
                placeholder: 'Search for notifications...'
            }
        }, {
            label: '<i class="glyphicon glyphicon-book">&nbsp;</i><span>Help Center</span>',
            value: {
                title: 'Help Center',
                placeholder: 'Search in help center...'
            }
        }, {
            label: '<i class="glyphicon glyphicon-list">&nbsp;</i><span>Groups</span>',
            value: {
                title: 'Groups',
                placeholder: 'Search for groups...'
            }
        }, {
            label: '<i class="glyphicon glyphicon-eye-close">&nbsp;</i><span>Departments</span>',
            value: {
                title: 'Departments',
                placeholder: 'Search for departments...'
            }
        }, {
            label: '<i class="lb lb-building">&nbsp;</i><span>EPSN</span>',
            value: {
                title: 'EPSN',
                placeholder: 'Search for EPSN...'
            }
        }, {
            label: '<i class="glyphicon glyphicon-flag">&nbsp;</i><span>APSN</span>',
            value: {
                title: 'APSN',
                placeholder: 'Search for APSN...'
            }
        }, {
            label: '<i class="glyphicon glyphicon-fire">&nbsp;</i><span>Lolliboard</span>',
            value: {
                title: 'Lolliboard',
                placeholder: 'Search for Lolliboard...'
            }
        }];

        vm.selectedUser = '';

        var searchData = [{
            name: 'Waqar Ali',
            groupType: 'People',
            group: 1
        }, {
            name: 'Iqrar Raza',
            groupType: 'People',
            group: 1
        }, {
            name: 'Dell',
            groupType: 'Companies',
            group: 2
        }, {
            name: 'Apple',
            groupType: 'Companies',
            group: 2
        }, {
            name: 'UI/UX Developer',
            groupType: 'Jobs',
            group: 3
        }, {
            name: 'Backend Developer',
            groupType: 'Jobs',
            group: 3
        }, {
            name: '3rd World Congress on Larynx Cancer 2015',
            groupType: 'Communities',
            group: 4
        }, {
            name: 'Some Random Comunity',
            groupType: 'Communities',
            group: 4
        }];

        vm.getUsers = function(search) {
            var filtered = filterFilter(searchData, search);

            var results = _(filtered)
                .groupBy('group')
                .map(function(g) {
                    g[0].firstInGroup = true; // the first item in each group
                    return g;
                })
                .flatten()
                .value();

            return results;
        }
    }
})();
