<!DOCTYPE html>
<html ng-app="mainUi">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">

    <title>AngularJS Components</title>

    <!-- <script type="text/javascript">

            var addEvent = (function () {
            var filter = function(el, type, fn) {
                for ( var i = 0, len = el.length; i < len; i++ ) {
                    addEvent(el[i], type, fn);
                }
            };
            if ( document.addEventListener ) {
                return function (el, type, fn) {
                    if ( el && el.nodeName || el === window ) {
                        el.addEventListener(type, fn, false);
                    } else if (el && el.length) {
                        filter(el, type, fn);
                    }
                };
            }

            return function (el, type, fn) {
                if ( el && el.nodeName || el === window ) {
                    el.attachEvent('on' + type, function () { return fn.call(el, window.event); });
                } else if ( el && el.length ) {
                    filter(el, type, fn);
                }
            };
        })();

        function closest(el, selector) {
            var matches = el.webkitMatchesSelector ? 'webkitMatchesSelector' : (el.msMatchesSelector ? 'msMatchesSelector' : 'matches');

            while (el.parentElement) {
                if (el[matches](selector)) return el;

                el = el.parentElement;
            }

            return null;
        }

    </script> -->

    <link rel="stylesheet" type="text/css" href="../stylesheets/font-awesome-min.css">
    <link rel="stylesheet" type="text/css" href="../stylesheets/styles.css">
    <link rel="stylesheet" type="text/css" href="css/angular-smilies.min.css">

    <style>
        .tab-nav{
            list-style: none;
        }
        .tab-nav li{
            display: inline;
        }
        .tab-block{
            display: inline-block;
            width: 100%;
        }
        .tab-content:not(:first-child){
            display: none;
        }
        .ta-editor {
            min-height: 300px;
            height: auto;
            overflow: auto;
            font-family: inherit;
            font-size: 100%;
        }
        .ta-hidden-input {
            width: 1px;
            height: 1px;
            border: none;
            margin: 0;
            padding: 0;
            position: absolute;
            top: -10000px;
            left: -10000px;
            opacity: 0;
            overflow: hidden;
        }

        .tag-list li {
            display: inline-block;
        }

        .as-dropdown-button {
            margin-right: 6px;
            width: 70px;
        }

        .search-categories {
            background: transparent;
            border: none;
            border-right: 1px solid rgba(255, 255, 255, 0.1);
        }

        .search-categories span:not(.caret) {
            display: none;
        }

        .custom-checkbox-button > input[type="indeterminate"] + span, .custom-radio-button > input[type="indeterminate"] + span {
            background: black !important;
        }
    </style>
</head>
<body ng-controller="mainController as main" style="background: #f5f5f5;" class="individual">

    <!-- Header -->
    <header class="main-header">
        <div class="mh-top">
            <div class="container">
                <div class="row minimize-gutter">
                    <div class="col-sm-3">
                        <a class="mh-logo" >
                            <img src="../images/lollibond-logo.png" alt="lollibond">
                        </a>
                    </div>
                    <div class="col-sm-6">
                        <advance-search></advance-search>
                    </div>
                </div>
            </div>
        </div>
        <nav class="mh-nav">
            <div class="container">
                <div class="row minimize-gutter">
                    <div class="col-sm-12">
                        <ul class="list-left list-hb mh-lnk">
                            <li ng-repeat="tab in main.tabs" ng-click="main.changeTab($index)">
                                <a href="#" ng-class="{'active': main.activeTab == $index}">{{tab}}</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <div class="main-container">

        <!-- Sidebar Listing -->
        <section ng-if="main.activeTab == 0">
            <div class="container">
                <h2>Sidebar Listing</h2>
                <div class="row" ng-controller="sidebarListingView as sl">
                    <div class="col-md-3">
                        <sidebar-listing data="sl.jobWidgetData" config="sl.jobWidgetConfig"></sidebar-listing>
                    </div>
                    <div class="col-md-3">
                        <sidebar-listing data="sl.eventWidgetData" config="sl.eventWidgetConfig"></sidebar-listing>
                    </div>
                    <div class="col-md-3">
                        <sidebar-listing data="sl.peopleWidgetData" config="sl.peopleWidgetConfig"></sidebar-listing>
                    </div>
                    <div class="col-md-3">
                        <sidebar-listing data="sl.postWidgetData" config="sl.postWidgetConfig"></sidebar-listing>
                    </div>
                </div>
            </div>
        </section>

        <!-- Wall Post -->
        <section ng-if="main.activeTab == 1">
            <div class="container">
                <div class="tab-main" id="myProfile">
                    <h2 class="display-4">Wall Components</h2>
                    <div class="row">
                        <div class="col-md-3"></div>

                        <!-- Wall Post -->
                        <div class="col-md-6" ng-controller="wallPostView as wp">
                            <wall-post post-data="post" ng-repeat="post in wp.wallPostData" post-config="wp.wallPostConfig"></wall-post>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Main Cards component -->
        <section ng-if="main.activeTab == 2">
            <div class="container">
                <div ng-controller="mainCards as cc">
                    <h2>Main Cards</h2>
                    <div class="row minimize-gutter">
                        <div class="col-md-3">
                            <h4>Company Page Card</h4>
                            <main-cards data="cc.companyCard" config="cc.companyCardConfig"></main-cards>
                        </div>
                        <div class="col-md-3">
                            <h4>Academia Page Card</h4>
                            <main-cards data="cc.academicCard" config="cc.academicCardConfig"></main-cards>
                        </div>

                        <div class="col-md-3">
                            <h4>Events Page Card</h4>
                            <main-cards data="cc.eventCard" config="cc.eventCardConfig"></main-cards>
                        </div>
                        <div class="col-md-3">
                            <h4>Community Page Card</h4>
                            <main-cards data="cc.communityCard" config="cc.communityCardConfig"></main-cards>
                        </div>
                        <div class="col-md-3">
                            <h4>E-Learning Page Card</h4>
                            <main-cards data="cc.elearningCard" config="cc.elearningCardConfig"></main-cards>
                        </div>
                    </div>
                    <div class="row minimize-gutter">
                        <h3>Jobs Page Listing</h3>
                        <div class="col-md-3" ng-repeat="item in cc.jobCard">
                            <main-cards data="item" config="cc.jobCardConfig"></main-cards>
                        </div>
                    </div>
                    <div class="row minimize-gutter">
                        <h3>People Page Listing</h3>
                        <div class="col-md-3" ng-repeat="item in cc.peopleCard">
                            <main-cards data="item" config="cc.peopleCardConfig"></main-cards>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Text Editor Component -->
        <section ng-if="main.activeTab == 3">
            <div class="container">
                <h2 class="display-4">Text Editor</h2>
                <div class="row">
                    <div class="col-sm-12">
                        <div text-angular="text-angular" name="htmlcontent" ng-model="main.htmlcontent"></div>
                    </div>
                    <div class="col-sm-12">
                        <h3>Rendered Output</h3>
                        <div ng-bind-html="main.htmlcontent"></div>
                    </div>
                    <div class="col-sm-12">
                        <h3>Output JSON</h3>
                        {{main.htmlcontent}}
                    </div>
                </div>
            </div>
        </section>

        <!-- General Components -->
        <section ng-if="main.activeTab == 4">
            <div class="container">
                <!-- Flexible textarea component -->
                <h2 class="display-4">Flexible Textarea</h2>
                <div class="row">
                    <div class="col-md-3">
                        <textarea lb-flexible-textarea rows="2" placeholder="Please enter text here" class="full-width input-text no-trans"></textarea>
                    </div>
                </div>

                <!-- Toggle Button Component -->
                <h2 class="display-4">Toggle Button</h2>
                <div class="row">
                    <div class="col-md-3">
                        <toggle-button button-config="main.bondButtonConfig" complete-state="main.bondCompleteState()"></toggle-button>
                        <toggle-button button-config="main.followButtonConfig" complete-state="main.followCompleteState()"></toggle-button>
                    </div>
                </div>

                <!-- Add People Tags -->
                <h2 class="display-4">Add People tags</h2>
                <div class="row">
                    <div class="col-sm-12">
                        <tags-input ng-model="main.tags"
                                display-property="name"
                                placeholder="Add people"
                                template="add-people-template.html"></tags-input>
                    </div>
                    <div class="col-sm-12">
                        <h3>Output JSON</h3>
                        {{main.tags}}
                    </div>
                </div>

                <!-- Select All/ Intermediate -->
                <h2 class="display-4">Select All/Intermediate</h2>
                <ul>
                    <li>
                        <label class="custom-checkbox-button">
                            <select-all options-list="main.selectOptions"></select-all>
                            <span>&nbsp;</span>
                            Select All
                        </label>
                    </li>
                    <li ng-repeat="item in main.selectOptions">
                        <label class="custom-checkbox-button">
                            <input type="checkbox" ng-model="item.isSelected" class="hide" ng-change="main.selectOptions.checkSelectAll()">
                            <span>&nbsp;</span>
                            {{ item.title }}
                        </label>
                    </li>
                </ul>
            </div>
        </section>

        <!-- Search cards + search sidebar filters -->
        <section ng-if="main.activeTab == 5">
            <div class="container">
                <h2 class="display-4">Search Cards</h2>
                <div class="row minimize-gutter">
                    <div class="col-md-3" ng-controller="searchSidebar as ss">
                        <search-sidebar data="ss.searching"></search-sidebar>
                    </div>
                    <div class="col-md-6" ng-controller="searchCards as sc">
                        <search-cards data="sc.people" config="sc.peopleConfig"></search-cards>
                        <search-cards data="sc.company" config="sc.companyConfig"></search-cards>
                        <search-cards data="sc.academic" config="sc.academicConfig"></search-cards>
                        <search-cards data="sc.jobs" config="sc.jobsConfig"></search-cards>
                        <search-cards data="sc.events" config="sc.eventsConfig"></search-cards>
                        <search-cards data="sc.elearning" config="sc.elearningConfig"></search-cards>
                        <search-cards data="sc.community" config="sc.communityConfig"></search-cards>
                    </div>
                    <div class="col-md-3"></div>
                </div>
            </div>
        </section>

        <!-- Main List-->
        <section ng-if="main.activeTab == 6">
            <main-list data="ml.header" config="ml.headerConfig"></main-list>
        </section>

        <!-- Gallery Components -->
        <section ng-if="main.activeTab == 7">
            <div class="container">
                <h2>Gallery <small>images/videos/documents</small></h2>
                <div ng-controller="galleryView as gl">
                    <div class="bottom-buffer" ng-repeat="items in gl.gallery">
                        <div class="block-main thumb-type-{{items.type}}">
                            <div class="block-heading">
                                <label class="button button-icon button-xsmall pull-right"><input type="file" class="hide"><i class="fa fa-cloud-upload">&nbsp;</i>Upload Photo</label>
                                <div class="block-title">{{items.title}}</div>
                            </div>
                            <div class="block-padding">
                                <div class="row minimize-gutter">
                                    <div class="col-{{gl.config.colGrid}}-{{gl.config.colSize}}" ng-repeat="single in items.content">
                                        <div class="thumb-box bottom-buffer">
                                            <a href="javascript:;" class="thumb-image" data-template-url="gallery/postModal.html" bs-modal="modal"><img ng-src="../images/{{single.thumb}}" alt=""></a>
                                            <div class="position-bottom-left thumb-text">{{single.caption}}</div>
                                            <a href="javascript:;" ng-if="items.type === 'video'" class="position-center thumb-icon fa fa-play"></a>
                                            <ul class="position-top-right list-left">
                                                <li ng-if="gl.config.delete">
                                                    <a href="javascript:;" class="thumb-action fa fa-trash" ng-click="gl.config.delete()"></a>
                                                </li>
                                                <li ng-if="single.media">
                                                    <a href="{{single.media}}" class="thumb-action fa fa-download" download="{{single.caption}}.{{single.fileType}}" target="_self"></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-xs-2">
                                        <div class="thumb-box bottom-buffer">
                                            <label class="upload-file-box block-minipadding">
                                                <input type="file" class="hide">
                                                <i class="upload-file-icon fa fa-picture-o mt10 mb5"></i>
                                                <div class="upload-file-subtitle">Drag &amp; Drop</div>
                                            </label>
                                            <div class="block-minipadding">
                                                <input type="text" class="input-text input-small" placeholder="Caption">
                                                <div class="position-bottom-right">
                                                    <button type="submit" class="button button-small auto-width fa fa-paper-plane"></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- lolliboard & lolliad -->
        <section ng-if="main.activeTab == 8">
            <div class="container">
                <h2>lolliBoard Public/Private View</h2>
                <div class="row minimize-gutter" ng-controller="lolliBoard as lb">
                    <div class="col-md-3">
                        <lolli-board data='lb.individualPublic'></lolli-board>
                    </div>
                    <div class="col-md-3">
                        <lolli-board data='lb.individualPrivate'></lolli-board>
                    </div>
                </div>
                <h2>lolliAd cards</h2>
                <div class="row minimize-gutter" ng-controller="lolliAd as la">
                    <div class="col-md-6">
                        <lolli-ad data="la.cause"></lolli-ad>
                        <lolli-ad data="la.company"></lolli-ad>
                        <lolli-ad data="la.individual"></lolli-ad>
                        <lolli-ad data="la.academic"></lolli-ad>
                    </div>
                </div>
            </div>
        </section>

        <!-- Banner Components - Banner, Dashboard, Search and Video -->
        <section ng-if="main.activeTab == 9">

            <div class="banner banner-elearning"> <!-- Banner background options : banner-people, banner-companies, banner-acadamia, banner-jobs, banner-events, banner-communities, banner-elearning -->
                <div class="container">
                    <div class="row">

                        <!-- Dashboard -->
                        <div class="col-md-7" ng-controller="dashboardView as dv">

                            <div class="banner-heading font-bold">
                                <a href="#MyLollispace"  class="banner-heading-title">My Lollispace</a>
                            </div>

                            <!-- Dashboard Directive -->
                            <dashboard></dashboard>

                        </div>

                        <!-- Banner Video -->
                        <div class="col-md-5">
                            <video class="display-block" width="100%">
                                <source src="../videoeditor/output/samsung.mp4" type="video/mp4">
                                <source src="../videoeditor/output/samsung.mp4" type="video/ogg">
                                Your browser does not support HTML5 video.
                            </video>
                        </div>

                    </div>
                </div>

                <!-- Banner Search -->
                <div class="banner-search bg-black-67">
                    <div class="container">

                        <!-- Banner Filter -->
                        <div class="row remove-gutter">
                            <div class="col-md-2">

                                <!-- Search category dropdown -->
                                <a href="#" class="banner-search-button" bs-dropdown data-placement="bottom-left">Dropdown</a>
                                <ul class="dropdown-menu dd-arrow-top-left">
                                    <li><a href="#">Option 1</a></li>
                                    <li><a href="#">Option 2</a></li>
                                    <li><a href="#">Option 3</a></li>
                                    <li><a href="#">Option 4</a></li>
                                    <li><a href="#">Option 5</a></li>
                                </ul>
                            </div>
                            <div class="col-md-8">

                                <!-- Search Form actions -->
                                <input type="text" class="banner-search-input" placeholder="Please enter keyword here...">
                                <button type="submit" class="banner-search-submit fa fa-search"></button>

                                <!-- Search filter toggle button -->
                                <a href="javascript:;" class="banner-search-more ver-dotted-menu" ng-click="filterOpen = !filterOpen"><i class="ver-dots"></i></a>

                            </div>
                            <div class="col-md-2">

                                <!-- Creation button -->
                                <a href="#" class="banner-search-button text-center"><i class="fa fa-plus right-buffer"></i>Create New</a>

                            </div>
                        </div>

                        <!-- Search more filters : including link to advance search -->
                        <div class="banner-search-filters block-padding" ng-class="{'show': filterOpen}">
                            <div class="row minimize-gutter">
                                <div class="col-md-3"><input type="text" class="input-text" placeholder="Please enter text here..."></div>
                                <div class="col-md-3"><input type="text" class="input-text" placeholder="Please enter text here..."></div>
                                <div class="col-md-3"><input type="text" class="input-text" placeholder="Please enter text here..."></div>
                                <div class="col-md-3"><input type="text" class="input-text" placeholder="Please enter text here..."></div>
                            </div>
                            <hr>
                            <ul class="list-right">
                                <li>
                                    <button type="submit" class="button button-small">Submit</button>
                                </li>
                                <li>
                                    <button type="reset" class="button-border button-small button-disabled">Cancel</button>
                                </li>
                                <li>
                                    <button type="submit" class="button-border button-small zero-border">Advance Search</button>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>

            </div>

        </section>

        <!-- ManageList Cards -->
        <section ng-if="main.activeTab == 10">
            <div class="container">
                <h2>Managelist Cards</h2>
                <div ng-controller="manageListCardView as mcv">
                    <managelist-card data="mcv.jobsData"></managelist-card>
                </div>
            </div>
        </section>

        <section ng-if="main.activeTab == 11">
            <main-list data="ml.header" config="ml.headerConfig"></main-list>
        </section>
    </div>


    <!-- Chat Module -->
    <chat></chat>

    <!-- Templates -->
    <!-- Add People tags template -->
    <script type="text/ng-template" id="add-people-template.html">
        <div class="tag-company tag-small">
            <div class="user-rounded-thumb user-rounded-20px pull-left">
                <img src="../images/people_search.jpg" alt="">
            </div>
            <span>{{$getDisplayText()}}</span>
            <i class="fa fa-times remove-tag" ng-click="$removeTag()">&nbsp;</i>
        </div>
    </script>

    <!-- Advance Search Template -->
    <script type="text/ng-template" id="typeahead-item.html">
        <ul tabindex="-1" class="typeahead dropdown-menu as-search" ng-show="$isVisible()" role="select">
          <li role="presentation" ng-repeat="match in $matches" ng-class="{active: $index == $activeIndex}">

            <div class="typeahead-group-header" ng-if="match.value.firstInGroup">{{match.value.groupType}}</div>
            <a role="menuitem" tabindex="-1" ng-click="$select($index, $event)" ng-bind="match.label"></a>
          </li>
        </ul>
    </script>

    <!-- Advance Search Dropdown -->
    <script type="text/ng-template" id="as-dropdown.html">
        <ul tabindex="-1" class="dropdown-menu dd-arrow-top-left" ng-show="$isVisible()" role="select">
          <li role="presentation" ng-repeat="match in $matches" ng-class="{active: $isActive($index)}">
            <a class="search-checkbox-box" style="cursor: default;" role="menuitem" tabindex="-1" ng-click="$select($index, $event)">
              <span ng-bind="match.label"></span>
              <i class="{{$iconCheckmark}} pull-right" ng-if="$isMultiple && $isActive($index)"></i>
            </a>
          </li>
        </ul>
    </script>

    <!-- 3rd Party -->
    <script type="text/javascript" src="../js/jquery.min.js"></script>
    <script type="text/javascript" src="../javascripts/bootstrap.min.js"></script>
    <script type="text/javascript" data-semver="2.4.1" src="js/lodash.js"></script>
    <script type="text/javascript" src="../ng/3rdparty/angular/angular.min.js"></script>
    <script type="text/javascript" src="js/textAngular-rangy.min.js"></script>
    <script type="text/javascript" src="js/textAngular-sanitize.min.js"></script>
    <script type="text/javascript" src="js/textAngular.min.js"></script>
    <script type="text/javascript" src="../ng/3rdparty/ng-tags-input/ng-tags-input.js"></script>
    <script type="text/javascript" src="js/angular-strap.min.js"></script>
    <script type="text/javascript" src="js/angular-smilies.min.js"></script>
    <script type="text/javascript" src="js/api-check.js"></script>
    <script type="text/javascript" src="js/formly.js"></script>
    <script type="text/javascript" src="js/angular-formly-templates-bootstrap.js"></script>

    <!-- Custom Scripts -->
    <script type="text/javascript" src="app.js"></script>

    <!-- Flexible Textarea -->
    <script type="text/javascript" src="decorator/lbFlexibleTextarea.directive.js"></script>

    <!-- Sidebar Listing -->
    <script type="text/javascript" src="sidebarListing/sidebarListing.controller.js"></script>
    <script type="text/javascript" src="sidebarListing/sidebarListing.directive.js"></script>

    <!-- Toggle Button -->
    <script type="text/javascript" src="toggleButton/toggleButton.directive.js"></script>

    <!-- Wall Post Listing -->
    <script type="text/javascript" src="wallPost/wallPost.controller.js"></script>
    <script type="text/javascript" src="wallPost/wallPost.directive.js"></script>

    <!-- Select All/Intermediate -->
    <script type="text/javascript" src="selectAll/selectAll.directive.js"></script>

    <!-- Advance Search -->
    <script type="text/javascript" src="advanceSearch/advanceSearch.directive.js"></script>
    <script type="text/javascript" src="advanceSearch/advanceSearch.controller.js"></script>

    <!-- Main Cards -->
    <script type="text/javascript" src="cards/mainCards.controller.js"></script>
    <script type="text/javascript" src="cards/mainCards.directive.js"></script>

    <!-- Search Cards -->
    <script type="text/javascript" src="cards/searchCards.controller.js"></script>
    <script type="text/javascript" src="cards/searchCards.directive.js"></script>

    <!-- People Mainlist -->
    <script type="text/javascript" src="people-mainlist/mainlist.controller.js"></script>
    <script type="text/javascript" src="people-mainlist/mainlist.directive.js"></script>

    <!-- People Mainlist -->
    <script type="text/javascript" src="search-sidebar/searchSidebar.controller.js"></script>
    <script type="text/javascript" src="search-sidebar/searchSidebar.directive.js"></script>

    <!-- Post Comments Listing -->
    <script type="text/javascript" src="postComment/postComment.controller.js"></script>
    <script type="text/javascript" src="postComment/postComment.directive.js"></script>

    <!-- Chat -->
    <script type="text/javascript" src="chat/chat.controller.js"></script>
    <script type="text/javascript" src="chat/chat.directive.js"></script>

    <!-- lolliBoard Cards -->
    <script type="text/javascript" src="lolliBoard/lolliBoard.controller.js"></script>
    <script type="text/javascript" src="lolliBoard/lolliBoard.directive.js"></script>

    <!-- lolliAd Cards -->
    <script type="text/javascript" src="lolliBoard/lolliAd.controller.js"></script>
    <script type="text/javascript" src="lolliBoard/lolliAd.directive.js"></script>

    <!-- Dashboard -->
    <script type="text/javascript" src="dashboard/dashboard.controller.js"></script>
    <script type="text/javascript" src="dashboard/dashboard.directive.js"></script>

    <!-- ManageList Cards -->
    <script type="text/javascript" src="manageList/manageList.controller.js"></script>
    <script type="text/javascript" src="manageList/manageList.directive.js"></script>

    <!-- Gallery -->
    <script type="text/javascript" src="gallery/gallery.controller.js"></script>

    <!-- Custom Scripts -->
    <script type="text/javascript">


        // var tabNav = document.querySelectorAll('.tab-btn');
        // addEvent(tabNav, 'click', function(){
        //
        //     console.log("sadasd");
        //     var currentTab = this;
        //     var currentTabData = currentTab.getAttribute("data-tab");
        //     var tabContainer = closest(currentTab , ".tabination");
        //
        //     var tabToShow = tabContainer.querySelector("div[data-tab-content="+  currentTabData +"]");
        //     tabToShow.style.display = "block";
        //
        //     var a = Array.prototype.filter.call(tabToShow.parentNode.children, function(child){
        //       return child !== tabToShow;
        //     });
        //     for(var i = 0; i< a.length; i++){
        //         a[i].style.display = "none";
        //     }
        // });

        // function abn(el){
        //      var tabNav = document.querySelectorAll(el);
        //     addEvent(tabNav, 'click', function(){
        //
        //         console.log("sadasd");
        //         var currentTab = this;
        //         var currentTabData = currentTab.getAttribute("data-tab");
        //         var tabContainer = closest(currentTab , ".tabination");
        //
        //         var tabToShow = tabContainer.querySelector("div[data-tab-content="+  currentTabData +"]");
        //         tabToShow.style.display = "block";
        //
        //         var a = Array.prototype.filter.call(tabToShow.parentNode.children, function(child){
        //           return child !== tabToShow;
        //         });
        //         for(var i = 0; i< a.length; i++){
        //             a[i].style.display = "none";
        //         }
        //     });
        // }
        // abn(".tab-btn");

    </script>
</body>
</html>
