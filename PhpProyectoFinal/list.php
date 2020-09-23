<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

    $arrProduct = null;
    session_start();
    if(!isset($_SESSION["products"])){
        $arrProduct = [
                ["id"=>1, "nom"=>"Mini Brownies",  "tip"=>"Bocaditos", "subti"=>"Dulces", "img"=>"dulces1.jpg"],
                ["id"=>2, "nom"=>"Churros",  "tip"=>"Bocaditos", "subti"=>"Dulces", "img"=>"dulces2.jpg"],
                ["id"=>3, "nom"=>"Donas",  "tip"=>"Bocaditos", "subti"=>"Dulces", "img"=>"dulces3.jpg"],
                ["id"=>4, "nom"=>"Tartaleta de fresa",  "tip"=>"Bocaditos", "subti"=>"Dulces", "img"=>"dulces4.jpg"],
                ["id"=>5, "nom"=>"Galletas chocochips",  "tip"=>"Bocaditos", "subti"=>"Dulces", "img"=>"dulces5.jpg"],
                ["id"=>6, "nom"=>"Mini pye de limon",  "tip"=>"Bocaditos", "subti"=>"Dulces", "img"=>"dulces6.jpg"],
                ["id"=>7, "nom"=>"Brochetas",  "tip"=>"Bocaditos", "subti"=>"Salados", "img"=>"salados1.jpg"],
                ["id"=>8, "nom"=>"Sandiwch de pollo",  "tip"=>"Bocaditos", "subti"=>"Salados", "img"=>"salados2.jpg"],
                ["id"=>9, "nom"=>"Mini triple de jamon y pollo",  "tip"=>"Bocaditos", "subti"=>"Salados", "img"=>"salados3.jpg"],
                ["id"=>10, "nom"=>"Enrrolladitos de hot dog",  "tip"=>"Bocaditos", "subti"=>"Salados", "img"=>"salados4.jpg"],
                ["id"=>11, "nom"=>"Mini empanadas",  "tip"=>"Bocaditos", "subti"=>"Salados", "img"=>"salados5.jpg"],
                ["id"=>12, "nom"=>"Cuadraditos de jamon y queso",  "tip"=>"Bocaditos", "subti"=>"Salados", "img"=>"salados6.jpg"],
                ["id"=>13, "nom"=>"Papa a la huancaina",  "tip"=>"Buffet Criollo", "subti"=>"Entradas criollas", "img"=>"entradaC1.jpg"],
                ["id"=>14, "nom"=>"Tamales criollos",  "tip"=>"Buffet Criollo", "subti"=>"Entradas criollas", "img"=>"entradaC2.jpg"],
                ["id"=>15, "nom"=>"Causa rellena",  "tip"=>"Buffet Criollo", "subti"=>"Entradas criollas", "img"=>"entradaC3.jpg"],
                ["id"=>16, "nom"=>"Aji de gallina",  "tip"=>"Buffet Criollo", "subti"=>"Platos clasicos", "img"=>"platosC1.jpg"],
                ["id"=>17, "nom"=>"Seco de res",  "tip"=>"Buffet Criollo", "subti"=>"Platos clasicos", "img"=>"platosC2.jpg"],
                ["id"=>18, "nom"=>"Carapulcra",  "tip"=>"Buffet Criollo", "subti"=>"Platos clasicos", "img"=>"platosC3.jpg"],
                ["id"=>19, "nom"=>"Mazamorra morada",  "tip"=>"Buffet Criollo", "subti"=>"Postres criollos", "img"=>"postreC1.jpg"],
                ["id"=>20, "nom"=>"Arroz con leche",  "tip"=>"Buffet Criollo", "subti"=>"Postres criollos", "img"=>"postreC2.jpg"],
                ["id"=>21, "nom"=>"Picarones",  "tip"=>"Buffet Criollo", "subti"=>"Postres criollos", "img"=>"postreC3.jpg"],
                ["id"=>22, "nom"=>"Ceviche de pescado",  "tip"=>"Buffet Marino", "subti"=>"Entradas marinas", "img"=>"entradaM1.jpg"],
                ["id"=>23, "nom"=>"Chicharroncito de pescado",  "tip"=>"Buffet Marino", "subti"=>"Entradas marinas", "img"=>"entradaM2.jpg"],
                ["id"=>24, "nom"=>"Choritos a la chalaca",  "tip"=>"Buffet Marino", "subti"=>"Entradas marinas", "img"=>"entradaM3.jpg"],
                ["id"=>25, "nom"=>"Arroz con mariscos",  "tip"=>"Buffet Marino", "subti"=>"Platos marinos", "img"=>"platosM1.jpg"],
                ["id"=>26, "nom"=>"Pescado a la plancha",  "tip"=>"Buffet Marino", "subti"=>"Platos marinos", "img"=>"platosM2.jpg"],
                ["id"=>27, "nom"=>"Pescado a lo macho",  "tip"=>"Buffet Marino", "subti"=>"Platos marinos", "img"=>"platosM3.jpg"],
                ["id"=>28, "nom"=>"Souffle de acelga y espinaca",  "tip"=>"Buffet Internacional", "subti"=>"Entradas", "img"=>"entradaI1.jpg"],
                ["id"=>29, "nom"=>"Pastel de poro y tocino",  "tip"=>"Buffet Internacional", "subti"=>"Entradas", "img"=>"entradaI2.jpg"],
                ["id"=>30, "nom"=>"Salpicon de pollo",  "tip"=>"Buffet Internacional", "subti"=>"Entradas", "img"=>"entradaI3.jpg"],
                ["id"=>31, "nom"=>"Medallones de pavo con salsa especial",  "tip"=>"Buffet Internacional", "subti"=>"Carnes", "img"=>"carnesI1.jpg"],
                ["id"=>32, "nom"=>"Enrrollado de pollo en salsa de uvas",  "tip"=>"Buffet Internacional", "subti"=>"Carnes", "img"=>"carnesI2.jpg"],
                ["id"=>33, "nom"=>"Lomo a las tres pimientas",  "tip"=>"Buffet Internacional", "subti"=>"Carnes", "img"=>"carnesI3.jpg"],
                ["id"=>34, "nom"=>"Fetuccini al Alfredo",  "tip"=>"Buffet Internacional", "subti"=>"Pastas", "img"=>"pastasI1.jpg"],
                ["id"=>35, "nom"=>"Ravioles en salsa de nuez",  "tip"=>"Buffet Internacional", "subti"=>"Pastas", "img"=>"pastasI2.jpg"],
                ["id"=>36, "nom"=>"Canelones de pollo",  "tip"=>"Buffet Internacional", "subti"=>"Pastas", "img"=>"pastasI3.jpg"],
                ["id"=>37, "nom"=>"Ensalada del huerto",  "tip"=>"Buffet Internacional", "subti"=>"Ensaladas", "img"=>"ensaladaI1.jpg"],
                ["id"=>38, "nom"=>"Ensalada tropical",  "tip"=>"Buffet Internacional", "subti"=>"Ensaladas", "img"=>"ensaladaI2.jpg"],
                ["id"=>39, "nom"=>"Ensalada alemana",  "tip"=>"Buffet Internacional", "subti"=>"Ensaladas", "img"=>"ensaladaI3.jpg"],
                ["id"=>40, "nom"=>"Arroz arabe",  "tip"=>"Buffet Internacional", "subti"=>"Complementos", "img"=>"complementosI1.jpg"],
                ["id"=>41, "nom"=>"Arroz al curry",  "tip"=>"Buffet Internacional", "subti"=>"Complementos", "img"=>"complementosI2.jpg"],
                ["id"=>42, "nom"=>"Papitas al romero",  "tip"=>"Buffet Internacional", "subti"=>"Complementos", "img"=>"complementosI3.jpg"],
                ["id"=>43, "nom"=>"Mousse de lucuma con salsa de vainilla",  "tip"=>"Buffet Internacional", "subti"=>"Postres limenos", "img"=>"postresI1.jpg"],
                ["id"=>44, "nom"=>"Suspiro a la limena",  "tip"=>"Buffet Internacional", "subti"=>"Postres limenos", "img"=>"postresI2.jpg"],
                ["id"=>45, "nom"=>"Crema volteada",  "tip"=>"Buffet Internacional", "subti"=>"Postres limenos", "img"=>"postresI3.jpg"]
            ];
    }else{
        $arrProduct = $_SESSION["products"];
    }
    
    $tipo = "";
    if(isset($_GET["tipo"])){
        $tipo = $_GET["tipo"];
    }

    if($tipo != "")
    {
        $arrProduct = array_filter($arrProduct, function($array){ 
            global $tipo;
            return (strpos($array["tip"], $tipo) !== false); 
            
        });
    }

    echo json_encode($arrProduct);
    
?>
    
