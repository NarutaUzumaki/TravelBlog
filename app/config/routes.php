<?php
use Router\Router;

Router::get('/user', 'UserController@login');
Router::get('/user/test', 'UserController@justTest');
