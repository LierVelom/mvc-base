<?php

namespace backend;

class Articles_Controller extends \Core_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->model->load('backend.article');
    }

    public function index()
    {
        $articles = $this->model->article->all();
        echo $this->blade->make('backend.articles.index', compact('articles'));
    }

    public function create()
    {
        echo $this->blade->make('backend.articles.create');
    }

    public function store()
    {
        if (isset($_POST['title']) && isset($_POST['description'])) {
            $title = $_POST['title'];
            $description = $_POST['description'];

            if (!empty($title) && !empty($description)) {
                $result = $this->model->article->insert([
                    'title' => $title,
                    'description' => $description
                ]);

                if ($result) {
                    header('Location: ' . BASE_URL . '/admin/articles');
                }
            }
        }
    }

    public function edit($id)
    {
        $article = $this->model->article->findBy($id);

        echo $this->blade->make('backend.articles.edit', compact('article'));
    }

    public function update()
    {
        if (isset($_POST['title']) && isset($_POST['description']) && isset($_POST['id'])) {
            $id = $_POST['id'];
            $title = $_POST['title'];
            $description = $_POST['description'];

            if (!empty($title) && !empty($description)) {
                $result = $this->model->article->update([
                    'title' => $title,
                    'description' => $description
                ], ['id' => $id]);

                if ($result) {
                    header('Location: ' . BASE_URL . '/admin/articles');
                }
            }

        }
    }

    public function destroy()
    {
        if (isset($_POST['id'])) {
            $id = $_POST['id'];
            $result = $this->model->article->delete($id);
        }
    }
}
