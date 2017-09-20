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