* To install the laravel

1. install composer
2. open terminal to install laravel installer using:
    `composer global require laravel/installer`

3. To create a new laravel project, 
    `laravel new project_name`
    
    then select option `none`, `0`, `no`

4. to run the laravel project, `php artisan serve`
5. to create a new controller, `php artisan make:controller ControllerName`
6. to create a new model, `php artisan make:model ModelName`

* Routing:

- For get request: 

``Route::get("URL",function() {return functionName;});``

``Route::get("URL",[controller::class, 'functionName']);``

``Route::get("URL",[model::class, 'functionName']);``

- For post request: 

``Route::post("URL",function() {return functionName;});``

``Route::post("URL",[controller::class, 'functionName']);``

``Route::post("URL",[model::class, 'functionName']);``

- For views:

``Route::view("URL",'viewName');``