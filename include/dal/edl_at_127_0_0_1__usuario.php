<?php
$dalTableusuario = array();
$dalTableusuario["id"] = array("type"=>3,"varname"=>"id", "name" => "id", "autoInc" => "1");
$dalTableusuario["usuario"] = array("type"=>200,"varname"=>"usuario", "name" => "usuario", "autoInc" => "0");
$dalTableusuario["contrasenia"] = array("type"=>200,"varname"=>"contrasenia", "name" => "contrasenia", "autoInc" => "0");
$dalTableusuario["email"] = array("type"=>200,"varname"=>"email", "name" => "email", "autoInc" => "0");
$dalTableusuario["idPerfil"] = array("type"=>3,"varname"=>"idPerfil", "name" => "idPerfil", "autoInc" => "0");
$dalTableusuario["idFuncionario"] = array("type"=>3,"varname"=>"idFuncionario", "name" => "idFuncionario", "autoInc" => "0");
$dalTableusuario["estado"] = array("type"=>16,"varname"=>"estado", "name" => "estado", "autoInc" => "0");
$dalTableusuario["cedula"] = array("type"=>3,"varname"=>"cedula", "name" => "cedula", "autoInc" => "0");
$dalTableusuario["rdnkey"] = array("type"=>200,"varname"=>"rdnkey", "name" => "rdnkey", "autoInc" => "0");
$dalTableusuario["reset_token"] = array("type"=>200,"varname"=>"reset_token", "name" => "reset_token", "autoInc" => "0");
$dalTableusuario["reset_date"] = array("type"=>135,"varname"=>"reset_date", "name" => "reset_date", "autoInc" => "0");
$dalTableusuario["borra"] = array("type"=>3,"varname"=>"borra", "name" => "borra", "autoInc" => "0");
$dalTableusuario["active"] = array("type"=>16,"varname"=>"active", "name" => "active", "autoInc" => "0");
$dalTableusuario["groupid"] = array("type"=>3,"varname"=>"groupid", "name" => "groupid", "autoInc" => "0");
$dalTableusuario["reset_date1"] = array("type"=>135,"varname"=>"reset_date1", "name" => "reset_date1", "autoInc" => "0");
$dalTableusuario["userpic"] = array("type"=>128,"varname"=>"userpic", "name" => "userpic", "autoInc" => "0");
$dalTableusuario["two_factor"] = array("type"=>3,"varname"=>"two_factor", "name" => "two_factor", "autoInc" => "0");
$dalTableusuario["totp"] = array("type"=>201,"varname"=>"totp", "name" => "totp", "autoInc" => "0");
$dalTableusuario["id"]["key"]=true;

$dal_info["edl_at_127_0_0_1__usuario"] = &$dalTableusuario;
?>