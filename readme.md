## Blog : Laravel 5.4

CMS with menu management system and file system

i will try to make an integration with vuejs to  give back more more interactivity
it will help me to more understanding vuejs


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
to make sure that the polymorphe relationship works we need to verifiy that the function name
it the same as the filed name

Exemple :

attachement() => attachement_id || attachement_type

you can use the trinker to verify :
php artisan trinker
$p=App\Attachement::find(3);
$p->attachements()->create(['name'=>'image.jpg']);
$p->attachements()->get();


test for the counter cache that can be accessed using

```php
./vendor/bin/phpunit
```
