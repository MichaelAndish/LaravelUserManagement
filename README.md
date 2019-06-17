<p align="center">
<img src="https://laravel.com/assets/img/components/logo-laravel.svg">
</p>

<!-- <a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a> -->

# Laravel User Management => in progress ... not ready :/ 

## About Laravel Notification

Manage all of the users, we use ["spatie/laravel-permission"](https://github.com/spatie/laravel-permission) package for manage all of the users. 
When you installing this package the "spatie/laravel-permission" package and dependencies will be install automatically.
In "LaravelUserManagement" package we create all of the DB Tables, Entities, Seeders, View for manage users, roles, permissions and departments.



## How I can use LaravelUserManagement

....

# Installation

1. Install the package via composer:
```
composer create-project mekaeil/laravel-user-management
```
2. Add the service providers in your config/app.php file:
```
'providers' => [
    // ...
    Spatie\Permission\PermissionServiceProvider::class,
    \Mekaeil\LaravelUserManagement\LaravelUserManagementProvider::class,
];
```
3. Run this command for publish vendor:
```
php artisan vendor:publish --provider="Mekaeil\LaravelUserManagement\LaravelUserManagementProvider" 
```
4. After publishing vendors, add this code to "run" method in <b>database/DatabaseSeeder.php</b>
```
public function run()
{
    /*
    |--------------------------------------------------------------------------
    |  SEEDERS FOR LARAVEL USER MANAGEMENT
    |--------------------------------------------------------------------------
    |
    */
        $this->call(RoleTableSeeder::class);
        $this->call(PermissionTableSeeder::class);
}
```
5. After all of the steps run these commands ordinary.
```
    5.1     php artisan migrate
    5.2     php artisan db:seed
```


## License

The LaravelUserManagement is open-source software licensed under the [MIT license](https://opensource.org/licenses/MIT).
