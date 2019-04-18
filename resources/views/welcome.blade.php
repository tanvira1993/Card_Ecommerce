<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"  data-ng-app="EcommerceApp">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>E-commerce</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
    html, body {
        background-color: #fff;
        color: #636b6f;
        font-family: 'Nunito', sans-serif;
        font-weight: 200;
        height: 100vh;
        margin: 0;
    }

    .full-height {
        height: 100vh;
    }

    .flex-center {
        align-items: center;
        display: flex;
        justify-content: center;
    }

    .position-ref {
        position: relative;
    }

    .top-right {
        position: absolute;
        right: 10px;
        top: 18px;
    }

    .content {
        text-align: center;
    }

    .title {
        font-size: 84px;
    }

    .links > a {
        color: #636b6f;
        padding: 0 25px;
        font-size: 13px;
        font-weight: 600;
        letter-spacing: .1rem;
        text-decoration: none;
        text-transform: uppercase;
    }

    .m-b-md {
        margin-bottom: 30px;
    }
</style>
</head>
<body ng-controller="AppController">
    <div class="flex-center position-ref full-height">

        <div style="padding: 20px">
            <div ui-view> </div>
        </div>
    </div>
    <script src="js/angular.min.js"></script>
    <script src="js/ocLazyLoad.min.js"></script>
    <script src="js/angular-ui-router.js"></script>
    <script src="js/main.js" type="text/javascript"></script>
    <script src="js/routes.js" type="text/javascript"></script>
</body>
</html>
