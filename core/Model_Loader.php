<?php

class Model_Loader
{
    // Find and load model file with subfolder in directory: app/model
    public function load($model_name)
    {
        // $model_name : string (Exp: 'frontend.article')
        $array = explode('.', $model_name);
        // Get namespace
        $namespace = $array[0];
        // Get model name
        $model_name = $array[1];
        // Standardize file name
        $model = ucfirst($model_name) . '_Model';
        // Get model file path
        $model_path = APP_PATH . "/models/{$namespace}/{$model}.php";
        // Check file exist
        if (!file_exists($model_path)) {
            exit("File not found: $model_path");
        }
        // Load model file
        require $model_path;
        // Initialize new model object
        $this->$model_name = new $model;
    }
}
 