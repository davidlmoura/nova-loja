<?php
class langController extends controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {}

    public function set($lang) {

        if(file_exists('lang/'.$lang.'.ini')) {
            $_SESSION['lang'] = $lang;
        }

        header("Location: ".BASE_URL);
    }

}