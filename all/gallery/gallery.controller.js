(function(){
    angular
        .module('mainUi')
        .controller('galleryView', function() {
            var mc = this;

            var deleteAction = function() {
                console.log('delete action performed');
            };

            mc.config = {
                colSize: '2',
                colGrid: 'xs',
                delete: deleteAction
            };

            mc.gallery = [
                {
                    title: 'Images',
                    type: 'image',
                    content: [
                        {
                            thumb: 'user-image-1.jpg',
                            media: '../images/user-image-1_large.jpg',
                            caption: 'Atif Aslam',
                            fileType: 'jpg'
                        }, {
                            thumb: 'employee.jpg',
                            media: '../images/user-image-2.jpg',
                            caption: "Genelia d'Souza",
                            fileType: 'jpg'
                        }, {
                            thumb: 'profile-pic.jpg',
                            media: '../images/bond-banner-bg.jpg',
                            caption: 'Fawad',
                            fileType: 'jpg'
                        }
                    ],
                }, {
                    title: 'Videos',
                    type: 'video',
                    content: [
                        {
                            thumb: 'default-video.jpg',
                            media: '../videoeditor/output/output-02-08-15_15-59-32.mp4',
                            caption: 'Atif Aslam',
                            fileType: 'mp4',
                            postContent: "<h3>Duis sapien dui, fringilla et tortor nec</h3><p>Morbi sed interdum enim, quis mattis metus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam ultrices sapien sed leo mattis, a tincidunt ante pellentesque. Donec lorem elit, vestibulum nec ultricies quis, lobortis id leo. Aliquam erat volutpat. Maecenas molestie nibh ut rhoncus molestie. Sed lorem velit, ornare vel magna eu, auctor pulvinar eros. Praesent viverra nibh ut lacus sollicitudin ultrices.</p>"
                        }, {
                            thumb: 'default-video.jpg',
                            media: '../videoeditor/output/output-02-08-15_15-59-32.mp4',
                            caption: "Genelia d'Souza",
                            fileType: 'mp4'
                        }, {
                            thumb: 'default-video.jpg',
                            media: '../videoeditor/output/output-02-08-15_15-59-32.mp4',
                            caption: 'Fawad',
                            fileType: 'mp4'
                        }
                    ],
                }, {
                    title: 'Documents',
                    type: 'document',
                    content: [
                        {
                            thumb: 'ppt-icon.jpg',
                            caption: 'Atif Aslam'
                        }, {
                            thumb: 'pdf-icon.jpg',
                            caption: "Genelia d'Souza"
                        }, {
                            thumb: 'doc-icon.jpg',
                            caption: 'Fawad'
                        }
                    ],
                }
            ];
        });
})();
