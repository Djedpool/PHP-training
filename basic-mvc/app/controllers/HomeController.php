<?php

class HomeController extends BaseController {

    public function index($name = '')
    {
//        $players = $this->model('Players');
//
//        var_dump($players);
//        exit();

        echo 'Yes';

        $this->view('home/index', [
            'username' => 'dsad',
        ]);


    }

}