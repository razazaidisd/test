(function(){
    angular
        .module('mainUi')
        .controller('wallPostView', function($modal, $scope) {
            var mc = this;

            var privacyModal = $modal({scope: $scope, templateUrl: 'wallPost/privacySetting.html', show: false});

            var editAction = function(){
                console.log('Edit action performed');
            };
            var deleteAction = function(){
                console.log('Delete action performed');
            };
            var toggleAction = function(){
                console.log('Toggle post action performed');
            };
            var privacyAction = function(){
                privacyModal.$promise.then(privacyModal.show);
            };

            var acePost = function(ace){
                if(ace.postHasAced === true) {
                    --ace.postCount.ace;
                    ace.postHasAced = false;
                } else {
                    ++ace.postCount.ace;
                    ace.postHasAced = true;
                }
            };
            var aceComment = function(aceComment){
                if(aceComment.commentHasAced === true) {
                    --aceComment.commentCount.ace;
                    aceComment.commentHasAced = false;
                } else {
                    ++aceComment.commentCount.ace;
                    aceComment.commentHasAced = true;
                }
            };
            var aceReply = function(aceReply){
                if(aceReply.commentHasAced === true) {
                    --aceReply.replyCount.ace;
                    aceReply.commentHasAced = false;
                } else {
                    ++aceReply.replyCount.ace;
                    aceReply.commentHasAced = true;
                }
            };

            var sharePost = function(share){
                ++share.postCount.share;
            };
            var replyComment = function(comment){
                console.log('Reply action performed');
            };

            mc.wallPostConfig = {
                settings: [
                    {
                        icon: 'fa fa-edit',
                        title: 'Edit',
                        action: editAction
                    }, {
                        icon: 'fa fa-trash-o',
                        title: 'Delete',
                        action: deleteAction
                    }, {
                        icon: 'fa fa-eye-slash',
                        title: 'Hide on wall',
                        action: toggleAction
                    }, {
                        icon: 'fa fa-lock',
                        title: 'Customize Privacy',
                        action: privacyAction
                    }
                ],
                postActions: {
                    acePost: acePost,
                    sharePost: sharePost
                },
                commentActions: {
                    aceComment: aceComment,
                    replyComment: replyComment,
                },
                replyActions: {
                    aceReply: aceReply
                }
            };

            mc.wallPostData = [
                {
                    postType: 'updates',
                    header: {
                        image: 'user-image-1.jpg',
                        title: 'Atif Aslam',
                        link: '#',
                        activity: 'Posted a Status',
                        time: 'few seconds',
                    },
                    postBody: {
                        bodyText: "Sed do eiusmod tempor incididunt <a href='javascript:;'>asd</a> ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut",
                    },
                    postHasAced: false,
                    postCount: {
                        ace: 2,
                        comment: 6,
                        share: 3
                    },
                    postComments: [
                        {
                            title: 'Jonathan Ive',
                            image: 'jonathan_ive.jpg',
                            link: '#',
                            time: '4 hours ago',
                            content: 'Mauris posuere nisi vitae aliquam condimentum. Praesent congue turpis diam, sit amet posuere eros fermentum id. Curabitur sed velit arcu',
                            commentHasAced: true,
                            commentCount: {
                                ace: 21,
                                reply: 2
                            },
                            reply: [
                                {
                                    title: 'Bill Gates',
                                    image: 'cor_admin.jpg',
                                    link: '#',
                                    time: '1hr',
                                    content: 'Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,',
                                    replyCount: {
                                        ace: 11,
                                    }
                                }, {
                                    title: 'Jonathan Ive',
                                    image: 'jonathan_ive.jpg',
                                    link: '#',
                                    time: '40m',
                                    content: 'Mauris posuere nisi vitae aliquam condimentum. Praesent congue turpis diam, sit amet posuere eros fermentum id. Curabitur sed velit arcu',
                                    replyCount: {
                                        ace: 1152,
                                    }
                                }, {
                                    title: 'Bill Gates',
                                    image: 'cor_admin.jpg',
                                    link: '#',
                                    time: '13m',
                                    content: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                                    replyCount: {
                                        ace: 4,
                                    }
                                }, {
                                    title: 'Jonathan Ive',
                                    image: 'jonathan_ive.jpg',
                                    link: '#',
                                    time: 'few seconds',
                                    content: 'Mauris posuere nisi vitae aliquam condimentum. Praesent congue turpis diam, sit amet posuere eros fermentum id. Curabitur sed velit arcu',
                                    replyCount: {
                                        ace: 0,
                                    }
                                }
                            ]
                        }, {
                            title: 'Bill Gates',
                            image: 'cor_admin.jpg',
                            link: '#',
                            time: '1 hour ago',
                            content: 'Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,',
                            commentHasAced: true,
                            commentCount: {
                                ace: 5,
                                reply: 1
                            },
                            reply: [
                                {
                                    title: 'Bill Gates',
                                    image: 'cor_admin.jpg',
                                    link: '#',
                                    time: '1hr',
                                    content: 'Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,',
                                    replyCount: {
                                        ace: 11,
                                    }
                                }
                            ]
                        }
                    ]
                }
                // , {
                //     postType: 'question',
                // }, {
                //     postType: 'idea',
                // }, {
                //     postType: 'discuss',
                // }, {
                //     postType: 'news',
                // }, {
                //     postType: 'announcement',
                // }
            ];
        });
})();
