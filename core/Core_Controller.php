<?php

class Core_Controller
{
    protected $model;
    protected $blade;

    public function __construct()
    {
        session_start();
        // Set blade variable
        $this->blade = $GLOBALS['blade'];
        // load model loader
        require BASE_PATH . '/core/Model_Loader.php';
        // Initialize new model loader object
        $this->model = new Model_Loader;
    }
}

?>