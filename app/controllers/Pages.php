<?php
    class Pages extends Controller {
        public function  __construct()
        {
            $this->productoModel = $this->model('Producto');
        }

        public function index(){
            $data = [
                'titulo'=>'Home Test Konecta'
            ];
            $this->view('pages/index', $data);
        }

    }