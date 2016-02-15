(function() {
    angular
        .module('mainUi')
        .controller('chatView', function() {
            var mc = this;

            var toggleChat = function(e) {
                console.log('toggleChat triggered');
                e.stopPropagation();
            };

            var callAction = function(e) {
                console.log('callAction triggered');
                e.stopPropagation();
            };
            var videoAction = function(e) {
                console.log('videoAction triggered');
                e.stopPropagation();
            };
            var settingAction = function(e) {
                console.log('settingAction triggered');
                e.stopPropagation();
            };
            var removeAction = function(e) {
                console.log('removeAction triggered');
                e.stopPropagation();
            };

            var copyObject = function(id) {
                if(!~mc.chatData.indexOf(id)) {
                    mc.chatData.push(id);
                }
            };

            var sendMessage = function(sendText) {
                console.log(sendText);
                mc.chatData[0].chatBody.push(
                    {
                        me: sendText
                    }
                );
                me = '';
            };

            mc.header = {
                limit: 3,
                actions: [
                    {
                        icon: 'fa fa-phone',
                        href: callAction
                    }, {
                        icon: 'fa fa-video-camera',
                        href: videoAction
                    }, {
                        icon: 'fa fa-cog',
                        href: settingAction
                    }, {
                        icon: 'fa fa-times',
                        href: removeAction
                    }
                ]
            };

            mc.data = [
                {
                    title: 'Fawad Khan',
                    designation: 'Front End Developer',
                    image: 'profile-pic.jpg',
                    chatBody: [
                        {
                            sender: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque dapibus ligula nec luctus dictum.'
                        }, {
                            me: 'ac habitasse platea dictumst'
                        }
                    ]
                }, {
                    title: 'Steve Jobs',
                    designation: 'Front End Developer',
                    image: 'steve_jobs.jpg',
                    chatBody: [
                        {
                            me: 'ac habitasse platea dictumst'
                        }, {
                            sender: 'Praesent iaculis arcu non ex molestie sollicitudin'
                        }
                    ]
                }, {
                    title: 'Atif Aslam',
                    designation: 'Front End Developer',
                    image: 'user-image-1.jpg',
                    chatBody: [
                        {
                            sender: 'Praesent iaculis arcu non ex molestie sollicitudin'
                        }, {
                            sender: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque dapibus ligula nec luctus dictum.'
                        }
                    ]
                }, {
                    title: 'Jonathan Ive',
                    designation: 'Designer',
                    image: 'gallery-dummy.jpg',
                    chatBody: [
                        {
                            sender: 'Praesent iaculis arcu non ex molestie sollicitudin'
                        }, {
                            me: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque dapibus ligula nec luctus dictum.'
                        }
                    ]
                }, {
                    title: 'Tom Cruise',
                    designation: 'Actor',
                    image: 'aca_admin.jpg',
                    chatBody: [
                        {
                            sender: 'Praesent iaculis arcu non ex molestie sollicitudin'
                        }, {
                            me: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque dapibus ligula nec luctus dictum.'
                        }
                    ]
                }, {
                    title: 'Bill Gates',
                    designation: 'American Business Magnate',
                    image: 'cor_admin.jpg',
                    chatBody: [
                        {
                            sender: 'Praesent iaculis arcu non ex molestie sollicitudin'
                        }, {
                            me: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque dapibus ligula nec luctus dictum.'
                        }
                    ]
                }, {
                    title: 'Jason Statham',
                    designation: 'Actor',
                    image: 'cor_customer.jpg',
                    chatBody: [
                        {
                            sender: 'Praesent iaculis arcu non ex molestie sollicitudin'
                        }, {
                            me: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque dapibus ligula nec luctus dictum.'
                        }
                    ]
                }
            ];

            mc.chatData = [];

            mc.toggleChat = toggleChat;
            mc.callAction = callAction;
            mc.videoAction = videoAction;
            mc.settingAction = settingAction;
            mc.removeAction = removeAction;
            mc.copyObject = copyObject;
            mc.sendMessage = sendMessage;

        });
})();
