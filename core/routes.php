<?php
use App\Router;

Router::get('/', 'HomeController@index');
Router::get('auth/login', 'AuthController@login');
Router::post('auth/login', 'AuthController@store');

Router::put('auth/logout', 'AuthController@logout');

Router::get('auth/reg', 'AuthController@register');
Router::post('auth/reg', 'AuthController@register');

Router::get('settings', 'SettingsController@index');
Router::post('settings', 'SettingsController@index');

Router::get('author', 'AuthorController@index');
