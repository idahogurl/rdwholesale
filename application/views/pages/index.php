<!DOCTYPE html>
<html lang="en" ng-app="orderApp">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"
    <title></title>

<link href="assets//css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/app.css" rel="stylesheet" type="text/css"/>

<script src="assets/scripts/jquery-1.9.1.min.js" type="application/javascript"></script>
<script src="assets/scripts/bootstrap.min.js" type="application/javascript"></script>
<script src="assets/scripts/angular/angular.min.js" type="application/javascript"></script>
<script src="assets/scripts/angular/angular-resource.min.js" type="application/javascript"></script>
<script src="assets/scripts/angular/angular-sanitize.min.js" type="application/javascript"></script>
<script src="assets/scripts/angular-ui/ui-bootstrap.js" type="application/javascript"></script>
<script src="assets/scripts/app.js" type="application/javascript"></script>
</head>
<body>

<header>
    <nav class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="#">
                    <img alt="Brand" src="assets/images/logo.png" style="margin-left: 30px; width:30%">
                </a>
            </div>
            2312 W Heritage Cir, Idaho Falls, Idaho 83402
            Hours
            Mon - Fri:
            8:00 am - 5:30 pm
            Sat:
            8:00 am - 3:00 pm

            R&D Wholesale Nursery serves landscape professionals and general contractors in Eastern Idaho and Western
            Wyoming. We are also open to the public during regular business hours. We specialize in a full line of hardy
            trees, shrubs, and perennials.

            Trees, Shrubs, and Perennial's at below-retail pricing. Come see us today for great products at a great
            price.
            Phone
            <a href="tel:2085205085"> (208) 520-5085</a>

            <a href="mailto:rdwholesalenursery@gmail.com"> rdwholesalenursery@gmail.com</a>
        </div>
    </nav>
</header>

<div ng-controller="searchProductCtrl" id="slides_control">
    <div>
        <carousel interval="myInterval">
            <slide>

                    <div class="col-xs-3" ng-repeat="slide in slides" active="slide.active">
                         <img ng-src="{{slide.image}}">
                        <div class="carousel-caption">
                            <h4>{{slide.text}}</h4>
                        </div>
                    </div>

            </slide>
        </carousel>
    </div>
</div>

<div class="col-md-4">
    <iframe width="600" height="450" frameborder="0" style="border:0"
            src="https://www.google.com/maps/embed/v1/place?q=2312%20W%20Heritage%20Cir%2C%20Idaho%20Falls%2C%20Idaho%2083402&key=..."></iframe>
</div>
<div class="col-md-4">
    <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/q14xR35HnvE"></iframe>
    </div>
</div>

</body>
</html>
<!--refresh="refreshAddresses($select.search)"-->
<!--refresh-delay="0">-->