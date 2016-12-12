<?php

/**
 * Created by PhpStorm.
 * User: ematgrz
 * Date: 2016-12-12
 * Time: 10:57
 */
class Home extends Controller
{
    public function index($name = '')
    {
        $user = $this->model('User');
        $user->name = $name;

        $this->view('home/index', ['name' => $user->name]);
    }


}