<?php
    class Pages extends Controller {

        public function __construct() {
            //echo "Pages Controlled loaded";
        }

        public function index(){

        }

        public function about($id) {
            echo $id;
        }

    }