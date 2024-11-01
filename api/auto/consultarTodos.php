<?php

header('Content-Type: application/json');

require_once 'modelosRespuestas/consultarTodosRespuesta.php';
require_once '../../modelo/auto.php';

$resp= new ConsultarTodosRespuesta();

$auto1 = new Auto();
$auto1->Id = 1;
$auto1->Marca = "Ford";

$auto2 = new Auto();
$auto2->Id = 2;
$auto2->Marca = "Toyota";

$auto3 = new Auto();
$auto3->Id = 3;
$auto3->Marca = "Renault";

$resp->ListAutos[] = $auto1;
$resp->ListAutos[] = $auto2;
$resp->ListAutos[] = $auto3;

echo json_encode ($resp);