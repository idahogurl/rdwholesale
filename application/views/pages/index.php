<!DOCTYPE html>
<html lang="en" ng-app="orderApp">
<head>
    <meta charset="UTF-8">
    <title></title>

    <link href="<?php echo base_url();?>../content/bootstrap.min.css" type="text/css" rel="stylesheet">
    <link href="../content/select.min.css" type="text/css" rel="stylesheet">
    <script src="../scripts/jquery-1.9.1.min.js"></script>
    <script src="../scripts/angular.min.js"></script>
    <script src="../scripts/angular-ui.js"></script>
    <script src="../scripts/select.min.js"></script>
    <script src="../scripts/app.js"></script>
</head>

<body>
<form><div ng-controller="searchProductCtrl">
        <ui-select multiple ng-model="products" theme="bootstrap" ng-disabled="disabled">

        <ui-select-choices repeat="product in products">

        </ui-select-choices>
            </ui-select>
    </div>
</form>
</body>
</html>
<!--refresh="refreshAddresses($select.search)"-->
<!--refresh-delay="0">-->