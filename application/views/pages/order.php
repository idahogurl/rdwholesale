<!DOCTYPE html>
<html lang="en" ng-app="orderApp">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"
    <title></title>

    <link href="../../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="../../assets/css/select.min.css" rel="stylesheet" type="text/css"/>
    <link href="../../assets/css/app.css" rel="stylesheet" type="text/css"/>

    <script src="../../assets/scripts/jquery-1.9.1.min.js" type="application/javascript"></script>
    <script src="../../assets/scripts/bootstrap.min.js" type="application/javascript"></script>
    <script src="../../assets/scripts/angular/angular.min.js" type="application/javascript"></script>
    <script src="../../assets/scripts/angular/angular-resource.min.js" type="application/javascript"></script>
    <script src="../../assets/scripts/angular/angular-sanitize.min.js"></script>
    <script src="../../assets/scripts/select.min.js" type="application/javascript"></script>
    <script src="../../assets/scripts/app.js" type="application/javascript"></script>

</head>
<body>

    <form ng-controller="searchProductCtrl" ng-submit="submitForm()">

        <ui-select ng-model="product.name" theme="bootstrap" style="width: 300px;">
            <ui-select-match placeholder="Select a product (type to search)">{{product.name}}</ui-select-match>

            <ui-select-choices repeat="product.name as product in products  | filter: $select.search"
                               refresh="refreshProducts($select.search)" refresh-delay="0">
                <div ng-bind-html="trustAsHtml((product.name | highlight: $select.search))"></div>
            </ui-select-choices>
        </ui-select>
        {{$selected.selected.name}}
</form>
</body>
</html>

