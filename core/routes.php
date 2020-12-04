<?php
use App\Router;

Router::get('', 'HomeController@index');
Router::get('auth/login', 'AuthController@login');
Router::post('auth/login', 'AuthController@store');
Router::put('auth/logout', 'AuthController@logout');
Router::delete('auth/reg', 'AuthController@reg');
Router::get('auth/branch', 'AuthController@login');
