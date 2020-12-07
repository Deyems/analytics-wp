<?php
use App\Router;
/**
 * Router::method('route', Controller@controllermethod);
 */
Router::get('/', 'HomeController@index');
Router::get('auth/login', 'AuthController@login');
Router::post('auth/login', 'AuthController@store');

Router::post('auth/logout', 'AuthController@logout');

Router::get('auth/register', 'AuthController@register');
Router::post('auth/register', 'AuthController@register');

Router::get('settings', 'SettingsController@index');
Router::post('settings', 'SettingsController@index');

Router::get('post', 'SettingsController@post');
Router::post('post', 'SettingsController@post');

Router::get('author', 'AuthorController@index');
Router::post('author', 'AuthorController@index');
