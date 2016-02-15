(function() {
    angular
        .module('mainUi')
        .controller('mainlist', function() {
            var mc = this;

            mc.header = {
                title: 'Samsung Galaxy S5 vs Samsung Galaxy S4 - Hands-on',
                desc: 'Lorem ipsum dolor sit amet, tale uvaret suscipiantur sea cu persius docendi usu an, ne has vero detraxit liberavisse. No vix dictas percipitur'
            };

            mc.listData = [{
                title: "Lionel Messi",
                mainImage: "../images/events-cards2.jpg",
                headerImage: "",
                headerInfo: '500 Aces',
                subInfo: [{
                    title: 'Software Engineer',
                    info: '',
                }, {
                    title: '',
                    info: 'Microsoft Corporation',
                }, {
                    title: 'Location',
                    icon: 'fa-map-marker',
                    info: 'Dubai, UAE'
                }]
            }, {
                title: "Lionel Messi",
                mainImage: "../images/events-cards2.jpg",
                headerImage: "",
                headerInfo: '500 Aces',
                subInfo: [{
                    title: 'Software Engineer',
                    info: '',
                }, {
                    title: '',
                    info: 'Microsoft Corporation',
                }, {
                    title: 'Location',
                    icon: 'fa-map-marker',
                    info: 'Dubai, UAE'
                }]
            }, {
                title: "Lionel Messi",
                mainImage: "../images/events-cards2.jpg",
                headerImage: "",
                headerInfo: '500 Aces',
                subInfo: [{
                    title: 'Software Engineer',
                    info: '',
                }, {
                    title: '',
                    info: 'Microsoft Corporation',
                }, {
                    title: 'Location',
                    icon: 'fa-map-marker',
                    info: 'Dubai, UAE'
                }]
            }];

            mc.cardConfig = {
                actions: [{
                    title: "Bond",
                    icon: "fa-map-marker",
                    class: "button",
                }, {
                    title: "Message",
                    icon: "fa-map-marker",
                    class: "button-border"
                }]
            }
        });
})();
