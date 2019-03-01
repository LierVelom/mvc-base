# Documentation for PHP MVC developed by Dukinfotech

### By default, master branch has: 
- bootstrap 4
- fontawesome5
- jquery
- Admin Template
- Demo routes, controller, model, view and demo data (mvc.sql file)

### Edit composer.json after run ``` composer update ``` if using specified PHP verion
The example below using PHP 7.0
```
{
    "config": {
        "platform": {
            "php": "7.0"
        }
    },
    "require": {
        "izniburak/router": "^1.2",
        "jenssegers/blade": "^1.1"
    }
}
```
### Folders Structure and Usage

- ```app``` contains Model, View, Controller with namespaces (frontend/backend)
- ```assets``` contains css, js, image, fonts,...
- ```config/database.php``` config connection to your database
- ```index.php (line 6)``` => edit to your domain
- ```router/routes.php``` => list routes
- ```helpers/helpers.php``` => your helpers
- ```vendors``` composer's libraries (Don't touch if you don't know what you are doing)
- ```core``` => core of framework (Don't touch if you don't know what you are doing)

#References
Router: https://github.com/izniburak/php-router <br />
Blade template: https://github.com/jenssegers/blade

# If there is any issue, let me know. Thanks
--------------------------------------------------