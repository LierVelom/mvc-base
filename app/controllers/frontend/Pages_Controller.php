<?php

namespace frontend;

class Pages_Controller extends \Core_Controller
{
    public function home()
    {
        $this->model->load('frontend.article');
        $articles = $this->model->article->all();

        echo $this->blade->make('frontend/pages/home', compact('articles'));
    }

    public function about()
    {
        echo $this->blade->make('frontend/pages/about');
    }
}