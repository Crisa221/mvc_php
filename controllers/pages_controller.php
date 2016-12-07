<?php
class PagesController {
    public function home(){
        $first_name = 'Nico';
        $last_name = 'Crisa';
        require_once('views/pages/home.php'):
    }


    public function error() {
        require_once('views/pages/error.php');
    }
}