<?php

namespace frontend;

class Articles_Controller extends \Core_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->model->load('frontend.article');
    }

    public function show($id)
    {
        $article = $this->model->article->findBy($id);
        echo $GLOBALS['blade']->make('frontend/articles/show', compact('article'));
    }
}
