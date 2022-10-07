<?php

    class Especie{

        //datos para conexion
        private $conn;
        private $tabla ='especie';

        //atributos de nuestra tabla
        private $id;
        private $nombre;
        private $estatus;

        //primer metodo que se ejecuta
      
        public function __construct($db){ //pide una conexion
            $this->conn= $db;

        }

        public function todasEspecies(){
                $sql = 'SELECT ID, NOMBRE, ESTATUS FROM ' .$this->tabla;
                $stmt =$this->conn->prepare($sql); //preparas la consulta para ser ejecutada
                $stmt->execute(); //ejecutas la consulta y los valores devueltos los guarda en stmt
                return $stmt; //retornas stmt

        }


    }




?>