# Dynamic Website Application

This application acts as a template for managing multiple websites that use much of the same back-end.

## BaseSite.php

Creates a wrapper for common HTML elements and inserts dynamic data based on the domain.

This is useful for dynamically setting the title of each page.

e.g...
```php
<head>
  <?php echo $site->html->title; ?>
</head>
```
Which will provide ```<title>{{title}}</title>``` in our script.

## ExampleSite1.php and ExampleSite2.php

Creates our website objects to be used in later scripts.

## router.php

This script checks the domain and sets up the environment according the server domain.

## Usage
```php
require "sites/router.php";

$domain = $_SERVER['SERVER_NAME'];

$router = new Router();
$site = $router->getSite($domain);
```
