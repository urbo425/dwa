# Application for managing multiple websites

This application acts as a template for managing websites that use much of the same back-end.

# Router

This script checks the domain and sets

# BaseSite

# Usage
```php
require "sites/router.php";

$domain = $_SERVER['SERVER_NAME'];

$router = new Router();
$site = $router->getSite($domain);
```
