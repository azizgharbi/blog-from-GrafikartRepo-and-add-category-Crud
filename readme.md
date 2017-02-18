## Blog : Laravel 5.4

I just take this repo from Grafikart and add category crud and a sweet alert and anther littles changes

```bash
composer install
php artisan key:generate # Edit your .env
php artisan migrate
php artisan db:seed # fill the database with some data
php artisan serve # http://localhost:8000/
```

test for the counter cache that can be accessed using

```php
./vendor/bin/phpunit
```
PS :
From Grafikart repo :
Link to the original ==> https://github.com/Grafikart/BlogMVC-Laravel
