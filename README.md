![image](https://github.com/Mekaeil/LaravelUserManagement/blob/master/src/Public/mekaeils-package/images/logo-user-management.jpg)

<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>

## About Laravel Notification

Manage all of the users, we use ["spatie/laravel-permission"](https://github.com/spatie/laravel-permission) package for manage all of the users. 
When you installing this package the "spatie/laravel-permission" package and dependencies will be install automatically.
In "LaravelUserManagement" package we create all of the DB Tables, Entities, Seeders, View for manage users, roles, permissions and departments.

# Installation

1. Install the package via composer:
```
composer require mekaeil/laravel-user-management
```
2. Add the service providers in your config/app.php file:
```
'providers' => [
    // ...
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
        $this->call(DepartmentTableSeeder::class);
}
```

5. Now it's important to change config if you want(laravel_user_management): (you can skip it)
```
/*  
|--------------------------------------------------------------------------
| LARAVEL USER MANAGEMENT CONFIG
|--------------------------------------------------------------------------
|   
|
*/

    'users_table'           => 'users',

    'user_department_table' =>  'user_departments',

    /** 
    * THIS TABLE IS NAME OF THE MANY TO MANY RELATIONAL TABLE 
    * BETWEEN USERS TABLE & USER DEPARTMENTS TABLE
    * 
    **/
    'user_department_user_table' =>  'user_departments_users',
 
    'user_model'            => App\Entities\User::class,

    'admin_url'             => env('APP_URL').'/admin',
```
6. And if set permissions table if you want to customize it: (you can skip it)
```
'models' => [

    /*
    * When using the "HasPermissions" trait from this package, we need to know which
    * Eloquent model should be used to retrieve your permissions. Of course, it
    * is often just the "Permission" model but you may use whatever you like.
    *
    * The model you want to use as a Permission model needs to implement the
    * `Spatie\Permission\Contracts\Permission` contract.
    */

    // 'permission' => Spatie\Permission\Models\Permission::class,
    'permission' => Spatie\Permission\Models\Permission::class,

    /*
    * When using the "HasRoles" trait from this package, we need to know which
    * Eloquent model should be used to retrieve your roles. Of course, it
    * is often just the "Role" model but you may use whatever you like.
    *
    * The model you want to use as a Role model needs to implement the
    * `Spatie\Permission\Contracts\Role` contract.
    */

    // 'role' => Spatie\Permission\Models\Role::class,
    'role' => Spatie\Permission\Models\Role::class,

],

'table_names' => [

    /*
    * When using the "HasRoles" trait from this package, we need to know which
    * table should be used to retrieve your roles. We have chosen a basic
    * default value but you may easily change it to any table you like.
    */

    'roles' => 'roles',

    /*
    * When using the "HasPermissions" trait from this package, we need to know which
    * table should be used to retrieve your permissions. We have chosen a basic
    * default value but you may easily change it to any table you like.
    */

    'permissions' => 'permissions',

    /*
    * When using the "HasPermissions" trait from this package, we need to know which
    * table should be used to retrieve your models permissions. We have chosen a
    * basic default value but you may easily change it to any table you like.
    */

    'model_has_permissions' => 'model_has_permissions',

    /*
    * When using the "HasRoles" trait from this package, we need to know which
    * table should be used to retrieve your models roles. We have chosen a
    * basic default value but you may easily change it to any table you like.
    */

    'model_has_roles' => 'model_has_roles',

    /*
    * When using the "HasRoles" trait from this package, we need to know which
    * table should be used to retrieve your roles permissions. We have chosen a
    * basic default value but you may easily change it to any table you like.
    */

    'role_has_permissions' => 'role_has_permissions',
],

'column_names' => [

    /*
    * Change this if you want to name the related model primary key other than
    * `model_id`.
    *
    * For example, this would be nice if your primary keys are all UUIDs. In
    * that case, name this `model_uuid`.
    */

    'model_morph_key' => 'model_id',
],

/*
* When set to true, the required permission/role names are added to the exception
* message. This could be considered an information leak in some contexts, so
* the default setting is false here for optimum safety.
*/

'display_permission_in_exception' => false,

'cache' => [

    /*
    * By default all permissions are cached for 24 hours to speed up performance.
    * When permissions or roles are updated the cache is flushed automatically.
    */

    'expiration_time' => \DateInterval::createFromDateString('24 hours'),

    /*
    * The cache key used to store all permissions.
    */

    'key' => 'spatie.permission.cache',

    /*
    * When checking for a permission against a model by passing a Permission
    * instance to the check, this key determines what attribute on the
    * Permissions model is used to cache against.
    *
    * Ideally, this should match your preferred way of checking permissions, eg:
    * `$user->can('view-posts')` would be 'name'.
    */

    'model_key' => 'name',

    /*
    * You may optionally indicate a specific cache driver to use for permission and
    * role caching using any of the `store` drivers listed in the cache.php config
    * file. Using 'default' here means to use the `default` set in cache.php.
    */

    'store' => 'default',
],
```
7. After all of the steps run these commands ordinary.
```
    5.1     php artisan migrate
    5.2     php artisan db:seed
```

## License


1. The LaravelUserManagement is open-source software licensed under the [MIT license](https://opensource.org/licenses/MIT).

2. Admin Template(PurpleAdmin-Free-Admin-Template) By [Bootstrap Dash](https://github.com/BootstrapDash/PurpleAdmin-Free-Admin-Template)


