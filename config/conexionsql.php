<?php 
    class conexionsql{

        //VARIABLES DE CONEXION
        private $host = 'localhost';
        private $bdname ='petapps';
        private $username ='root';
        private $pass='';
        private $conexion;

        //metodo que nos ayudara a conectarnos
        public function conectar(){
            $this->conexion =null;

            try{
                //conectar a la base de datos
                $this->conexion = new PDO('mysql:host=localhost;dbname='.$this->bdname,
                                $this->username, $this->pass);
             /*   foreach($conexion->query('SELECT * FROM especie') as $especie){
                    echo 'NOMBRE DE ESPECIE: ' . $especie[1]. '</br>';
                }*/
            }catch(PDOException $e){
                echo "Ocurrio un error al conectarme a la base de datos ";//. $e;
            }

            return $this->conexion;

        }





    }


?>