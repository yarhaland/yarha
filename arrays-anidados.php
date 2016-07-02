<?php

//$paises = array(
//'dominicana' => array(
//    'provincias'=> array(
//        'La romana'=> array(
//            'bayahibe'))
//                      ),
//'usa'=> array (
//    'estado'=> array(
//        'florida'=> array(
//            'miami'))
//               )
//                );
//
//            echo $paises [4] [0];
            
$miFecha = array(
'dominicana' => array(
'provincias' => array("13 de enero de 2015", "11 de febrero de 2018",
'la Romana' => array("Bayahibe", "11 de febrero de 2015"),
)
    )
);

var_dump($miFecha);
echo $miFecha['la Romana'] [0];
