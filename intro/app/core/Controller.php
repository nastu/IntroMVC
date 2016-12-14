<?php

/**
 * Created by PhpStorm.
 * User: ematgrz
 * Date: 2016-12-12
 * Time: 10:52
 */
class Controller
{
    public function model($model)
    {
        require_once '../app/models/' . $model . '.php';
        return new $model();
    }

    public function view($view, $data = [])
    {
        require_once '../public/views/' . $view . '.php';
    }
}