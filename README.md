# Dynamic Website Application

This application acts as a template for managing multiple websites that use much of the same back-end.

# BaseSite.php

Compiles html code to be used in later scripts.

This is useful for dynamically setting the CSS.

e.g...
```php
<head>
  <?php echo $site->html->css; ?>
</head>
```
Which will provide ```<link href='" . $site->cssFile . "' media='all' type='text/css' rel='stylesheet' />``` in our script.

# ExampleSite1.php and ExampleSite2.php

Creates our website objects to be used in later scripts.

# router.php

This script checks the domain and sets up the environment according the server domain.

# Usage
```php
require "sites/router.php";

$domain = $_SERVER['SERVER_NAME'];

$router = new Router();
$site = $router->getSite($domain);
```
