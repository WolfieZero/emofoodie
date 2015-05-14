<!doctype html>
<!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
<html class="no-js" lang="en" >
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emo Foodie</title>
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Maven+Pro:400,700">

    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/components/foundation/css/normalize.css">
    <link rel="stylesheet" href="/components/foundation/css/foundation.css">
    <link rel="stylesheet" href="/style/css/app.css">

    <script src="/components/modernizr/modernizr.js"></script>
    <script src="/components/angular/angular.js"></script>
    <script src="/components/angular-resource/angular-resource.js"></script>
    <script src="/components/angular-foundation/mm-foundation.js"></script>
    <script src="/script/src/app.js"></script>
</head>
<body ng-app="emoFoodie">

    <div class"sticky">
        <nav class="tab-bar">
            <div class="left-small"><a role="button" href="#idOfRightMenu" class="left-off-canvas-toggle menu-icon" ><span></span></a></div>
            <div class="middle tab-bar-section">Emo Foodie</div>
            <div class="right-small text-center"><a href="#" style="color: #fff;" data-reveal-id="add-log"><i class="fa fa-pencil-square-o fa-lg"></i></a></div>
        </nav>
    </div>

    <div id="add-log" class="reveal-modal" data-reveal aria-labelledby="Add log entry" aria-hidden="true" role="dialog">
        <div ng-include src="'template/log-add.php'"></div>
        <a class="close-reveal-modal" aria-label="Close">&#215;</a>
    </div>

    <div class="row logs" ng-controller="ViewLogController as viewLog">
        <article class="log column" ng-repeat="log in viewLog.items">
            <div class="log__container">

                <div class="row">
                    <div class="small-3 column">
                        <div class="log__title">Feeling: </div>
                    </div>
                    <div class="small-9 column">
                        <div class="log__title">
                            <span ng-repeat="emotion in log.emotions" class="round label emotion">
                                {{emotion.emotion}}
                            </span>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="small-3 column">
                        <div class="log__title">Food: </div>
                    </div>
                    <div class="small-9 column">
                        <div class="foods">
                            <span ng-repeat="food in log.foods" class="round label food">
                                {{food.food}}
                            </span>
                        </div>
                    </div>
                </div>

                <div class="note" ng-show="log.note">{{log.note}}</div>

            </div>
        </article>
    </div>

    <script src="/components/jquery/dist/jquery.js"></script>
    <script src="/components/fastclick/lib/fastclick.js"></script>
    <script src="/components/foundation/js/foundation.js"></script>
    <script src="/script/src/display.js"></script>
</body>
</html>
