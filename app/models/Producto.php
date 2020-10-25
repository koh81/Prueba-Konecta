<?php
    class Producto{
        private $db;

        public function __construct()
        {
            $this->db = new Database();
        }

        public function getProductos(){
            $this->db->query("SELECT * from productos");
            return $this->db->setResultados();
        }

        public function getProducto($id){
            $this->db->query("SELECT * from productos WHERE id=:id");
            $this->db->bind(':id', $id);

            return  $this->db->resultado();
        }

        public function nuevoProducto($producto){
            $this->db->query("INSERT INTO productos (nombre, referencia, precio, peso, categoria, stock, fecha_creacion) VALUES (:nombre, :referencia, :precio, :peso, :categoria, :stock, :fecha_creacion)");
            $this->db->bind(':nombre', $producto['nombre']);
            $this->db->bind(':referencia', $producto['referencia']);
            $this->db->bind(':precio', $producto['precio']);
            $this->db->bind(':peso', $producto['peso']);
            $this->db->bind(':categoria', $producto['categoria']);
            $this->db->bind(':stock', $producto['stock']);
            $this->db->bind(':fecha_creacion', $producto['fecha_creacion']);

            if($this->db->execute()){
                return true;
            }else{
                return false;
            }
        }

        public function actualizarProducto($producto){
            //UPDATE `pruebakonecta`.`productos` SET `nombre` = 'bastonesss', `referencia` = 'bb741', `precio` = 15000 WHERE `id` = 2
            $this->db->query("UPDATE productos SET nombre=:nombre, referencia=:referencia, precio=:precio, peso=:peso, categoria=:categoria, stock=:stock, fecha_creacion=:fecha_creacion, fecha_ultima_venta=:fecha_venta WHERE id=:id");
            $this->db->bind(':id', $producto['id']);
            $this->db->bind(':nombre', $producto['nombre']);
            $this->db->bind(':referencia', $producto['referencia']);
            $this->db->bind(':precio', $producto['precio']);
            $this->db->bind(':peso', $producto['peso']);
            $this->db->bind(':categoria', $producto['categoria']);
            $this->db->bind(':stock', $producto['stock']);
            $this->db->bind(':fecha_creacion', $producto['fecha_creacion']);
            $this->db->bind(':fecha_venta', $producto['fecha_venta']);

            if($this->db->execute()){
                return true;
            }else{
                return false;
            }
        }

        public function borrarProducto($id){
            $this->db->query("DELETE FROM productos where id=:id");
            $this->db->bind(':id', $id);

            if($this->db->execute()){
                return true;
            }else{
                return false;
            }
        }


    }