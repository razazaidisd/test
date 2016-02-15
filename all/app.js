(function(){
    var app = angular.module('mainUi', ['ngSanitize', 'mgcrea.ngStrap', 'angular-smilies', 'textAngular', 'ngTagsInput', 'formly', 'formlyBootstrap']);

    app.controller('mainController', function() {
        var mc = this;

        // Tabs

        mc.tabs = ['Sidebar Listing', 'Wall Post', 'Main Cards', 'Text Editor', 'General Components', 'Search Cards', 'Mainlist', 'Gallery', 'lolliBoard', 'Dashboard', 'Manage List'];

        mc.activeTab = 0;

        mc.changeTab = function(idx) {
            mc.activeTab = idx;
        };

        // Text Editor Demo
        mc.htmlcontent = '';

        // People tags Demo
        mc.tags = [
            {
                "name": "Ernest Gray"
            }, {
                "name": "Alan Henderson"
            }, {
                "name": "Eric Mitchell"
            }, {
                "name": "Steve Evans"
            }
        ];

        // Select All/Intermediate Demo
        mc.selectOptions = [
            {
                isSelected: false,
                title: 'Option 1'
            }, {
                isSelected: false,
                title: 'Option 2'
            }, {
                isSelected: false,
                title: 'Option 3'
            }
        ];

        mc.bondButtonConfig = {
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
        };

        mc.bondCompleteState = function() {
            console.log('Bond action complete');
        };

        mc.followButtonConfig = {
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
        };

        mc.followCompleteState = function() {
            console.log('Follow action complete');
        };
    });
})();
