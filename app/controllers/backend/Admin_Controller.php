<?php

namespace backend;

class Admin_Controller extends \Core_Controller
{
    public function dashboard()
    {
        echo $this->blade->make('backend.dashboard');
    }
}