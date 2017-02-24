## Blog : Laravel 5.4

CMS with menu management system and file system

work in progress ..

```bash
composer install
php artisan key:generate # Edit your .env
php artisan migrate
php artisan db:seed # fill the database with some data
cd public
bower install
php artisan serve # http://localhost:8000/
```

test for the counter cache that can be accessed using

```php
./vendor/bin/phpunit
```
