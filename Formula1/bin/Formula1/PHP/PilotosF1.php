<?php
$pilotos=[16,44];

foreach($pilotos as $piloto){
    $curl=curl_init();
    curl_setopt_array($curl,array(
            CURLOPT_URL =>"https://api.openf1.org/v1/drivers?driver_number=$piloto&session_key=latest", //url a la que se conecta
            CURLOPT_RETURNTRANSFER => true,//devuelve el resultado como una cadena del tipo curl_exec
            CURLOPT_FOLLOWLOCATION => true, //sigue el encabezado que le envíe el servidor
        CURLOPT_ENCODING => "", // permite decodificar la respuesta y puede ser"identity", "deflate", y "gzip", si está vacío recibe todos los disponibles.
        CURLOPT_MAXREDIRS => 10, // Si usamos CURLOPT_FOLLOWLOCATION le dice el máximo de encabezados a seguir
        CURLOPT_TIMEOUT => 30, // Tiempo máximo para ejecutar
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1, // usa la versión declarada
        CURLOPT_CUSTOMREQUEST => "GET", // el tipo de petición, puede ser PUT, POST, GET o Delete dependiendo del servicio
    )); //curl_setopt_array configura las opciones para una transferencia cURL

    $response = curl_exec($curl);// respuesta generada
    $err = curl_error($curl); // muestra errores en caso de existir

    curl_close($curl); // termina la sesión 

    if ($err) {
        echo "cURL Error #:" . $err; // mostramos el error
    } else {
        echo $response; // en caso de funcionar correctamente
    }
} 

// NO DEVUELVE NADA PORQUE REQUIERE UN TOKEN QUE PARA PODER CONSEGUIR REQUIERE PAGO///

//EXTRA: CREO QUE EL PROBLEMA ESQUE ESTA USANDO DENTRO DE UN SCRIPT PHP cuando php no se puede usar en js.////
//Aunque por lo que comentaron varios usuarios puede tener mas errores porque falta informacion para saber cuales pueden ser los errores//
