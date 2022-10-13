<?php

use App\Exceptions\NotFoundException;
use Router\Router;

require '../vendor/autoload.php';

// Environnement for DatabaseConnection
define('DB_NAME', 'fornier');
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PWD', 'root');

// Script for views
define('VIEWS', dirname(__DIR__).DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR);
define('SCRIPTS', dirname($_SERVER['SCRIPT_NAME'].DIRECTORY_SEPARATOR));

define('PIC', SCRIPTS . DIRECTORY_SEPARATOR . 'assets/images' . DIRECTORY_SEPARATOR);
define('CSS', SCRIPTS . DIRECTORY_SEPARATOR . 'assets/css' . DIRECTORY_SEPARATOR);
define('JS', SCRIPTS . DIRECTORY_SEPARATOR . 'assets/js' . DIRECTORY_SEPARATOR);
define('FONTS', SCRIPTS . DIRECTORY_SEPARATOR . 'assets/fonts' . DIRECTORY_SEPARATOR);


$router = new Router($_GET['url']);

// Render View
$router->get('/', 'App\Controllers\RenderController@index');
$router->get('/index', 'App\Controllers\RenderController@index');
$router->get('/about', 'App\Controllers\RenderController@about');
$router->get('/job', 'App\Controllers\RenderController@job');
$router->get('/contact', 'App\Controllers\RenderController@contact');
$router->get('/test', 'App\Controllers\RenderController@test');

// Article View
$router->get('/blog', 'App\Controllers\ArticleController@blog');
$router->get('/article/:id', 'App\Controllers\ArticleController@show');

$router->get('/tag/:id', 'App\Controllers\ArticleController@tag');


$router->get('/admin/articles', 'App\Controllers\Admin\ArticleController@index');
$router->post('admin/articles/delete/:id', 'App\Controllers\Admin\ArticleController@destroy');
$router->get('admin/articles/edit/:id', 'App\Controllers\Admin\ArticleController@edit');
$router->post('admin/articles/edit/:id', 'App\Controllers\Admin\ArticleController@update');


try {
    $router->run();
} catch (NotFoundException $e) {
    return $e->error404();
}



