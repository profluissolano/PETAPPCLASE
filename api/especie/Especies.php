<?php

 //HEADERS -> REGLAS PARA APIS
 header('Access-Control-Alow-Origin: *');
 header('Content-type: application/json');


 include '../../models/Especie.php';
 include '../../config/conexionsql.php';

  //OBJETO DE TIPO CONEXION SQL
    $basedatos = new conexionsql();
    $dbconexion= $basedatos->conectar();

    //INSTANCIA DE NUESTRO MODELO

    $especie = new Especie($dbconexion);
    $resultados = $especie->todasEspecies();

    $numRegistros = $resultados->rowCount();


    if($numRegistros>0){ //si hay registros

    }else{
        //no hay registros

        echo json_encode(
            array(
                'message'=>'No hay especies registradas'
            ));
        
    }




?>