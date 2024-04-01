<?php

class Controller {
    public function view ($view, $data = []) {
        require_once('../app/views/' . $view . '.php');
    } 
    public function model ($mod) {
        require_once('../app/models/' . $mod . '.php');
        return new $mod;
    }
}

?>