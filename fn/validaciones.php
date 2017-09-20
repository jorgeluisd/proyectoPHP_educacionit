<?php 

namespace validaciones;

function validarNombre($cadena){
	$cadena=trim($cadena);
	$cadena=strip_tags($cadena);
	if ($cadena == "" || strlen($cadena) < 4) {
		return true;
	}
	return false;
}

function validarEmail ($email){
    $resultado=preg_match('/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/', $email); 
    return $resultado;
    }