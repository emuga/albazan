<?php
$proudcto = $_POST["producto"];
$cantidad = $_POST["cant"];
$costoTotal = $_POST["costoTotal"];

/* Ahí ya has recogido los valores del objeto **`param`** que recibió el servidor, esto es un ejemplo lo cual aquí podrás tu manipular los datos como creas conveniente*/

echo ("Producto: ".$producto." | Cantidad: ".$cantidad." | Costo : ".$costoTotal  );
/* Con esto conseguirás que cuando el cliente reciba la respuesta recibirá estos datos */

