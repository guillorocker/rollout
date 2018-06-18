<?php

	include ("conexion.php");
        if (isset($_GET["tech"]) and $_GET["tech"] == "2g"){
            
        
	$query = "SELECT tforecast2g.*, taccion2grf.* ,taccion2gtrs.* FROM tforecast2g JOIN taccion2grf ON tforecast2g.Id = taccion2grf.IdReg JOIN taccion2gtrs ON tforecast2g.Id = taccion2gtrs.IdReg";
	$resultado = mysqli_query($conexion, $query);
        
        if( !$resultado ){
            die("no hay un carajo");
        }else{
            while ($data = mysqli_fetch_assoc($resultado)){
                $arreglo['data'][] = array_map("utf8_encode",$data);    
               
            }
            //print_r($arreglo);
            echo json_encode($arreglo, 65536);
            
        }
        
        mysqli_free_result($resultado);
        mysqli_close($conexion);       

        }else{
            die("eshor");
        }