<?php

$router->get('/', 'frontend.Pages_Controller@home');
$router->get('/about', 'frontend.Pages_Controller@about');

$router->group('/articles', function ($article) {
    $article->get('{d}', 'frontend.Articles_Controller@show');
});

$router->group('admin', function ($admin) {
    $admin->get('/', 'backend.Admin_Controller@dashboard');
});

$router->group('admin/articles', function ($article) {
    $article->get('/', 'backend.Articles_Controller@index');
    $article->get('/create', 'backend.Articles_Controller@create');
    $article->post('/store', 'backend.Articles_Controller@store');
    $article->get('/edit/{d}', 'backend.Articles_Controller@edit');
    $article->post('/update', 'backend.Articles_Controller@update');
    $article->ajaxp('/destroy', 'backend.Articles_Controller@destroy');
});

