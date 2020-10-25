<?php
    class Productos extends Controller {

        private $productoModel;

        public function __construct()
        {
            $this->productoModel = $this->model('Producto');
        }

        public function index(){
            $data['titulo'] = "Productos";
            $data['productos'] = $this->productoModel->getProductos();
            if(isset($_REQUEST['msg'])){
                $data['msg'] = $_REQUEST['msg'];
            }
            $this->view('productos/index', $data);
        }

        public function crear(){
            //$data = [];
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
                $data=[
                    'nombre' => $_POST['nombre'],
                    'referencia' => $_POST['referencia'],
                    'precio' => $_POST['precio'],
                    'peso' => $_POST['peso'],
                    'categoria' => $_POST['categoria'],
                    'stock' => $_POST['stock'],
                    'fecha_creacion' => $_POST['fecha_creacion']
                ];
                if($this->productoModel->nuevoProducto($data)){
                    $msg = "Producto Creado";
                    header('location: '.URLROOT.'productos/?msg='.$msg);
                }else{
                    die('Error en la creación del producto');
                }
            }else{
                $data=[
                    'nombre' => '',
                    'referencia' => '',
                    'precio' => '',
                    'peso' => '',
                    'categoria' => '',
                    'stock' => '',
                    'fecha_creacion' => '',
                ];
            }

            $this->view('productos/crear', $data);
        }

        public function editar(){
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                //actualizar datos
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
                $data=[
                    'id' => $_POST['id'],
                    'nombre' => $_POST['nombre'],
                    'referencia' => $_POST['referencia'],
                    'precio' => $_POST['precio'],
                    'peso' => $_POST['peso'],
                    'categoria' => $_POST['categoria'],
                    'stock' => $_POST['stock'],
                    'fecha_creacion' => $_POST['fecha_creacion'],
                    'fecha_venta' => $_POST['fecha_venta'],
                ];
                if($this->productoModel->actualizarProducto($data)){
                    $msg = "Producto Actualizado";
                    header('location: '.URLROOT.'productos/?msg='.$msg);
                }else{
                    die('Error en la actualizacion del producto');
                }
            }else{
                if(isset($_GET['id'])){
                    $id = $_GET['id'];
                    $data = $this->productoModel->getProducto($id);
                    $this->view('productos/editar', $data);
                }else{
                    echo "NOA HAY ID PARA editar";
                }
            }

        }

        public function borrar(){
            if(isset($_GET['id'])){
                if($this->productoModel->borrarProducto($_GET['id'])){
                    $msg = "Producto Borrado";
                    header('location: '.URLROOT.'productos/?msg='.$msg);
                }else{
                    die('Error en la eliminació del producto');
                }
            }else{
                echo "NOA HAY ID PARA BORRAR";
            }
        }

        public function vender(){
            if(isset($_GET['id'])){
                $id = $_GET['id'];
                $aux = $this->productoModel->getProducto($id);
                if($aux->stock > 0){
                    $data=[
                        'id' => $id,
                        'nombre' => $aux->nombre,
                        'referencia' => $aux->referencia,
                        'precio' => $aux->precio,
                        'peso' => $aux->peso,
                        'categoria' => $aux->categoria,
                        'stock' => ($aux->stock - 1),
                        'fecha_creacion' => $aux->fecha_creacion,
                        'fecha_venta' => date("Y/m/d H:i:s"),
                    ];
                    if($this->productoModel->actualizarProducto($data)){
                        $msg = "Producto Vendido";
                        header('location: '.URLROOT.'productos/?msg='.$msg);
                    }
                }else{
                    $msg = "Producto sin Stock";
                    header('location: '.URLROOT.'productos/?msg='.$msg);
                }
                $this->view('productos/editar', $data);
            }else{
                echo "NOA HAY ID PARA editar";
            }
        }
    }