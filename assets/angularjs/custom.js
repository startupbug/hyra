var app = angular.module("myApp", ["ngRoute"]);
app.config(function($routeProvider) {
    $routeProvider
    .when("/", {
        templateUrl : "views/main.php"
    })
    .when("/aboutus", {
        templateUrl : "views/aboutus.php"
    })
    .when("/contact", {
        templateUrl : "views/contact.php"
    })
    .when("/monthlycostupdate", {
        templateUrl : "views/monthlycostupdate.php"
    })
    .when("/registration", {
        templateUrl : "views/registration.php"
    })
    .when("/services", {
        templateUrl : "views/services.php"
    })
    .when("/signin", {
        templateUrl : "views/signin.php"
    })
    .when("/terms_condition", {
        templateUrl : "views/terms_condition.php"
    })
    .when("/user", {
        templateUrl : "views/user.php"
    });
});