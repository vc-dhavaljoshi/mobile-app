<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://unpkg.com/onsenui/css/onsenui.css">
    <link rel="stylesheet" href="https://unpkg.com/onsenui/css/onsen-css-components.min.css">
    <script src="https://unpkg.com/onsenui/js/onsenui.min.js"></script>
    <script src="https://unpkg.com/jquery/dist/jquery.min.js"></script>
</head>
<body>
<!-- First navigation component: Navigator. This will remain always on top of the app. -->
<ons-navigator id="myNavigator" page="splitter.html">
</ons-navigator>


<!-- Second navigation component: Splitter. This will disappear if the first component changes its content. -->
<template id="splitter.html">
    <ons-page>
        <ons-splitter id="mySplitter">
            <ons-splitter-side page="html/menu.html" swipeable width="250px" collapse swipe-target-width="50px">
            </ons-splitter-side>
            <ons-splitter-content page="tabbar.html">
            </ons-splitter-content>
        </ons-splitter>
    </ons-page>
</template>

<!-- Third navigation component: Tabbar. This will disappear if the first or second components change their content. -->
<template id="tabbar.html">
    <ons-page id="tabbarPage">
        <ons-toolbar>
            <div class="left">
                <!-- Toolbar-button with different icons depending on the platform. -->
                <ons-toolbar-button component="button/menu">
                    <ons-icon icon="ion-navicon, material:md-menu" size="32px, material:24px"></ons-icon>
                </ons-toolbar-button>
            </div>
            <div class="center">Todos</div>
            <div class="right">
                <!-- Toolbar-button  only visible for iOS/other. -->
                <ons-if platform="ios other">
                    <ons-toolbar-button component="button/new-task">New</ons-toolbar-button>
                </ons-if>
            </div>
        </ons-toolbar>

        <!-- Floating Action Button only visible for Android. -->
        <ons-if platform="android">
            <ons-fab position="right bottom" component="button/new-task">
                <ons-icon icon="md-edit"></ons-icon>
            </ons-fab>
        </ons-if>

        <!-- Auto-positioned Tabbar: top on Android, bottom on iOS/other. -->
        <ons-tabbar id="myTabbar" position="auto">
            <ons-tab page="html/pending_tasks.html" label="Pending" active>
            </ons-tab>
            <ons-tab page="html/completed_tasks.html" label="Completed">
            </ons-tab>
        </ons-tabbar>
    </ons-page>
</template>

</body>
</html>
