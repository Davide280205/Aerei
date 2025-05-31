<?php

require_once __DIR__ . '/controllers/aereiController.php';

$controller = new AereiController();

$action = $_GET['action'] ?? 'lista';
$id = $_GET['id'] ?? null;


if ($action ==='dettaglio' && $id) {

	$controller->dettaglio($id);

}elseif($action==='modifica' && $id){

	$controller->modifica($id);

}elseif($action==='loadForm'){

	$controller->loadForm();

}elseif($action==='store'){

	$controller->store();

}elseif($action==='elimina'){

	$controller->elimina($id);

}elseif($action==='tipologiaAerei'){

	$controller->tipologiaAerei($id);

}elseif($action==='fotografato'){

	$controller->fotografato($id);

}elseif($action==='aereoFotografato'){

	$controller->aereoFotografato($id);

}elseif($action==='aereoNonFotografato'){

	$controller->aereoNonFotografato($id);

}else{

	$controller->lista();

}

?>