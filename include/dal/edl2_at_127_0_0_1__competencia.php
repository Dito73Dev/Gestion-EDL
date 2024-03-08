<?php
$dalTablecompetencia = array();
$dalTablecompetencia["id"] = array("type"=>3,"varname"=>"id", "name" => "id", "autoInc" => "1");
$dalTablecompetencia["nombre"] = array("type"=>200,"varname"=>"nombre", "name" => "nombre", "autoInc" => "0");
$dalTablecompetencia["descripcion"] = array("type"=>200,"varname"=>"descripcion", "name" => "descripcion", "autoInc" => "0");
$dalTablecompetencia["idComportamental"] = array("type"=>3,"varname"=>"idComportamental", "name" => "idComportamental", "autoInc" => "0");
$dalTablecompetencia["fchCreacion"] = array("type"=>135,"varname"=>"fchCreacion", "name" => "fchCreacion", "autoInc" => "0");
$dalTablecompetencia["id"]["key"]=true;

$dal_info["edl2_at_127_0_0_1__competencia"] = &$dalTablecompetencia;
?>