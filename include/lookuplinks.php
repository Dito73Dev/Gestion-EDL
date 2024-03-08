<?php

/**
* getLookupMainTableSettings - tests whether the lookup link exists between the tables
*
*  returns array with ProjectSettings class for main table if the link exists in project settings.
*  returns NULL otherwise
*/
function getLookupMainTableSettings($lookupTable, $mainTableShortName, $mainField, $desiredPage = "")
{
	global $lookupTableLinks;
	if(!isset($lookupTableLinks[$lookupTable]))
		return null;
	if(!isset($lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField]))
		return null;
	$arr = &$lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField];
	$effectivePage = $desiredPage;
	if(!isset($arr[$effectivePage]))
	{
		$effectivePage = PAGE_EDIT;
		if(!isset($arr[$effectivePage]))
		{
			if($desiredPage == "" && 0 < count($arr))
			{
				$effectivePage = $arr[0];
			}
			else
				return null;
		}
	}
	return new ProjectSettings($arr[$effectivePage]["table"], $effectivePage);
}

/** 
* $lookupTableLinks array stores all lookup links between tables in the project
*/
function InitLookupLinks()
{
	global $lookupTableLinks;

	$lookupTableLinks = array();

		if( !isset( $lookupTableLinks["comportamental"] ) ) {
			$lookupTableLinks["comportamental"] = array();
		}
		if( !isset( $lookupTableLinks["comportamental"]["cargo.idComportamentalFK"] )) {
			$lookupTableLinks["comportamental"]["cargo.idComportamentalFK"] = array();
		}
		$lookupTableLinks["comportamental"]["cargo.idComportamentalFK"]["edit"] = array("table" => "cargo", "field" => "idComportamentalFK", "page" => "edit");
		if( !isset( $lookupTableLinks["q_global_users_edl2"] ) ) {
			$lookupTableLinks["q_global_users_edl2"] = array();
		}
		if( !isset( $lookupTableLinks["q_global_users_edl2"]["concertacion_po.idEvaluado"] )) {
			$lookupTableLinks["q_global_users_edl2"]["concertacion_po.idEvaluado"] = array();
		}
		$lookupTableLinks["q_global_users_edl2"]["concertacion_po.idEvaluado"]["edit"] = array("table" => "concertacion_po", "field" => "idEvaluado", "page" => "edit");
		if( !isset( $lookupTableLinks["q_global_evaluadores_edl2"] ) ) {
			$lookupTableLinks["q_global_evaluadores_edl2"] = array();
		}
		if( !isset( $lookupTableLinks["q_global_evaluadores_edl2"]["concertacion_po.idEvaluador"] )) {
			$lookupTableLinks["q_global_evaluadores_edl2"]["concertacion_po.idEvaluador"] = array();
		}
		$lookupTableLinks["q_global_evaluadores_edl2"]["concertacion_po.idEvaluador"]["edit"] = array("table" => "concertacion_po", "field" => "idEvaluador", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_vigencia"] ) ) {
			$lookupTableLinks["tparam_vigencia"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_vigencia"]["concertacion_po.vigencia"] )) {
			$lookupTableLinks["tparam_vigencia"]["concertacion_po.vigencia"] = array();
		}
		$lookupTableLinks["tparam_vigencia"]["concertacion_po.vigencia"]["edit"] = array("table" => "concertacion_po", "field" => "vigencia", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_periodo"] ) ) {
			$lookupTableLinks["tparam_periodo"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_periodo"]["concertacion_po.periodo"] )) {
			$lookupTableLinks["tparam_periodo"]["concertacion_po.periodo"] = array();
		}
		$lookupTableLinks["tparam_periodo"]["concertacion_po.periodo"]["edit"] = array("table" => "concertacion_po", "field" => "periodo", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_estados_eval"] ) ) {
			$lookupTableLinks["tparam_estados_eval"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_estados_eval"]["concertacion_po.estado"] )) {
			$lookupTableLinks["tparam_estados_eval"]["concertacion_po.estado"] = array();
		}
		$lookupTableLinks["tparam_estados_eval"]["concertacion_po.estado"]["edit"] = array("table" => "concertacion_po", "field" => "estado", "page" => "edit");
		if( !isset( $lookupTableLinks["cargo"] ) ) {
			$lookupTableLinks["cargo"] = array();
		}
		if( !isset( $lookupTableLinks["cargo"]["concertacion_po.evaluado_cargo"] )) {
			$lookupTableLinks["cargo"]["concertacion_po.evaluado_cargo"] = array();
		}
		$lookupTableLinks["cargo"]["concertacion_po.evaluado_cargo"]["edit"] = array("table" => "concertacion_po", "field" => "evaluado_cargo", "page" => "edit");
		if( !isset( $lookupTableLinks["dependencias_001"] ) ) {
			$lookupTableLinks["dependencias_001"] = array();
		}
		if( !isset( $lookupTableLinks["dependencias_001"]["concertacion_po.evaluado_dep_sup"] )) {
			$lookupTableLinks["dependencias_001"]["concertacion_po.evaluado_dep_sup"] = array();
		}
		$lookupTableLinks["dependencias_001"]["concertacion_po.evaluado_dep_sup"]["edit"] = array("table" => "concertacion_po", "field" => "evaluado_dep_sup", "page" => "edit");
		if( !isset( $lookupTableLinks["dependencia"] ) ) {
			$lookupTableLinks["dependencia"] = array();
		}
		if( !isset( $lookupTableLinks["dependencia"]["concertacion_po.evaluado_dep"] )) {
			$lookupTableLinks["dependencia"]["concertacion_po.evaluado_dep"] = array();
		}
		$lookupTableLinks["dependencia"]["concertacion_po.evaluado_dep"]["edit"] = array("table" => "concertacion_po", "field" => "evaluado_dep", "page" => "edit");
		if( !isset( $lookupTableLinks["cargo"] ) ) {
			$lookupTableLinks["cargo"] = array();
		}
		if( !isset( $lookupTableLinks["cargo"]["concertacion_po.evaluador_cargo"] )) {
			$lookupTableLinks["cargo"]["concertacion_po.evaluador_cargo"] = array();
		}
		$lookupTableLinks["cargo"]["concertacion_po.evaluador_cargo"]["edit"] = array("table" => "concertacion_po", "field" => "evaluador_cargo", "page" => "edit");
		if( !isset( $lookupTableLinks["dependencias_001"] ) ) {
			$lookupTableLinks["dependencias_001"] = array();
		}
		if( !isset( $lookupTableLinks["dependencias_001"]["concertacion_po.evaluador_dep_sup"] )) {
			$lookupTableLinks["dependencias_001"]["concertacion_po.evaluador_dep_sup"] = array();
		}
		$lookupTableLinks["dependencias_001"]["concertacion_po.evaluador_dep_sup"]["edit"] = array("table" => "concertacion_po", "field" => "evaluador_dep_sup", "page" => "edit");
		if( !isset( $lookupTableLinks["dependencia"] ) ) {
			$lookupTableLinks["dependencia"] = array();
		}
		if( !isset( $lookupTableLinks["dependencia"]["concertacion_po.evaluador_dep"] )) {
			$lookupTableLinks["dependencia"]["concertacion_po.evaluador_dep"] = array();
		}
		$lookupTableLinks["dependencia"]["concertacion_po.evaluador_dep"]["edit"] = array("table" => "concertacion_po", "field" => "evaluador_dep", "page" => "edit");
		if( !isset( $lookupTableLinks["nombramiento"] ) ) {
			$lookupTableLinks["nombramiento"] = array();
		}
		if( !isset( $lookupTableLinks["nombramiento"]["concertacion_po.evaluador_nombramiento"] )) {
			$lookupTableLinks["nombramiento"]["concertacion_po.evaluador_nombramiento"] = array();
		}
		$lookupTableLinks["nombramiento"]["concertacion_po.evaluador_nombramiento"]["edit"] = array("table" => "concertacion_po", "field" => "evaluador_nombramiento", "page" => "edit");
		if( !isset( $lookupTableLinks["nombramiento"] ) ) {
			$lookupTableLinks["nombramiento"] = array();
		}
		if( !isset( $lookupTableLinks["nombramiento"]["concertacion_po.evaluado_nombramiento"] )) {
			$lookupTableLinks["nombramiento"]["concertacion_po.evaluado_nombramiento"] = array();
		}
		$lookupTableLinks["nombramiento"]["concertacion_po.evaluado_nombramiento"]["edit"] = array("table" => "concertacion_po", "field" => "evaluado_nombramiento", "page" => "edit");
		if( !isset( $lookupTableLinks["comportamental"] ) ) {
			$lookupTableLinks["comportamental"] = array();
		}
		if( !isset( $lookupTableLinks["comportamental"]["concertacion_po.id_comportamental_fk"] )) {
			$lookupTableLinks["comportamental"]["concertacion_po.id_comportamental_fk"] = array();
		}
		$lookupTableLinks["comportamental"]["concertacion_po.id_comportamental_fk"]["edit"] = array("table" => "concertacion_po", "field" => "id_comportamental_fk", "page" => "edit");
		if( !isset( $lookupTableLinks["perfil"] ) ) {
			$lookupTableLinks["perfil"] = array();
		}
		if( !isset( $lookupTableLinks["perfil"]["usuario.idPerfil"] )) {
			$lookupTableLinks["perfil"]["usuario.idPerfil"] = array();
		}
		$lookupTableLinks["perfil"]["usuario.idPerfil"]["edit"] = array("table" => "usuario", "field" => "idPerfil", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_estados"] ) ) {
			$lookupTableLinks["tparam_estados"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_estados"]["usuario.active"] )) {
			$lookupTableLinks["tparam_estados"]["usuario.active"] = array();
		}
		$lookupTableLinks["tparam_estados"]["usuario.active"]["edit"] = array("table" => "usuario", "field" => "active", "page" => "edit");
		if( !isset( $lookupTableLinks["dependencias_001"] ) ) {
			$lookupTableLinks["dependencias_001"] = array();
		}
		if( !isset( $lookupTableLinks["dependencias_001"]["dependencia.id_depto_superior"] )) {
			$lookupTableLinks["dependencias_001"]["dependencia.id_depto_superior"] = array();
		}
		$lookupTableLinks["dependencias_001"]["dependencia.id_depto_superior"]["edit"] = array("table" => "dependencia", "field" => "id_depto_superior", "page" => "edit");
		if( !isset( $lookupTableLinks["q_edl2_ctrl_valor_af_002"] ) ) {
			$lookupTableLinks["q_edl2_ctrl_valor_af_002"] = array();
		}
		if( !isset( $lookupTableLinks["q_edl2_ctrl_valor_af_002"]["compromisofuncional.idEvaluacion_FK"] )) {
			$lookupTableLinks["q_edl2_ctrl_valor_af_002"]["compromisofuncional.idEvaluacion_FK"] = array();
		}
		$lookupTableLinks["q_edl2_ctrl_valor_af_002"]["compromisofuncional.idEvaluacion_FK"]["edit"] = array("table" => "compromisofuncional", "field" => "idEvaluacion_FK", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_tipoacuerdo"] ) ) {
			$lookupTableLinks["tparam_tipoacuerdo"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_tipoacuerdo"]["compromisofuncional.idTipoAcuerdo"] )) {
			$lookupTableLinks["tparam_tipoacuerdo"]["compromisofuncional.idTipoAcuerdo"] = array();
		}
		$lookupTableLinks["tparam_tipoacuerdo"]["compromisofuncional.idTipoAcuerdo"]["edit"] = array("table" => "compromisofuncional", "field" => "idTipoAcuerdo", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_ponderacion"] ) ) {
			$lookupTableLinks["tparam_ponderacion"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_ponderacion"]["compromisofuncional.valorAcordado"] )) {
			$lookupTableLinks["tparam_ponderacion"]["compromisofuncional.valorAcordado"] = array();
		}
		$lookupTableLinks["tparam_ponderacion"]["compromisofuncional.valorAcordado"]["edit"] = array("table" => "compromisofuncional", "field" => "valorAcordado", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_estados_compromisos"] ) ) {
			$lookupTableLinks["tparam_estados_compromisos"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_estados_compromisos"]["compromisofuncional.CFunEstado"] )) {
			$lookupTableLinks["tparam_estados_compromisos"]["compromisofuncional.CFunEstado"] = array();
		}
		$lookupTableLinks["tparam_estados_compromisos"]["compromisofuncional.CFunEstado"]["edit"] = array("table" => "compromisofuncional", "field" => "CFunEstado", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_vigencia"] ) ) {
			$lookupTableLinks["tparam_vigencia"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_vigencia"]["evaluacion.vigencia"] )) {
			$lookupTableLinks["tparam_vigencia"]["evaluacion.vigencia"] = array();
		}
		$lookupTableLinks["tparam_vigencia"]["evaluacion.vigencia"]["edit"] = array("table" => "evaluacion", "field" => "vigencia", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_periodo"] ) ) {
			$lookupTableLinks["tparam_periodo"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_periodo"]["evaluacion.periodo"] )) {
			$lookupTableLinks["tparam_periodo"]["evaluacion.periodo"] = array();
		}
		$lookupTableLinks["tparam_periodo"]["evaluacion.periodo"]["edit"] = array("table" => "evaluacion", "field" => "periodo", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_estados_eval"] ) ) {
			$lookupTableLinks["tparam_estados_eval"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_estados_eval"]["evaluacion.estado"] )) {
			$lookupTableLinks["tparam_estados_eval"]["evaluacion.estado"] = array();
		}
		$lookupTableLinks["tparam_estados_eval"]["evaluacion.estado"]["edit"] = array("table" => "evaluacion", "field" => "estado", "page" => "edit");
		if( !isset( $lookupTableLinks["comportamental"] ) ) {
			$lookupTableLinks["comportamental"] = array();
		}
		if( !isset( $lookupTableLinks["comportamental"]["comportamental_comun.idComportamental"] )) {
			$lookupTableLinks["comportamental"]["comportamental_comun.idComportamental"] = array();
		}
		$lookupTableLinks["comportamental"]["comportamental_comun.idComportamental"]["edit"] = array("table" => "comportamental_comun", "field" => "idComportamental", "page" => "edit");
		if( !isset( $lookupTableLinks["competencia"] ) ) {
			$lookupTableLinks["competencia"] = array();
		}
		if( !isset( $lookupTableLinks["competencia"]["comportamental_comun.idCompetencia"] )) {
			$lookupTableLinks["competencia"]["comportamental_comun.idCompetencia"] = array();
		}
		$lookupTableLinks["competencia"]["comportamental_comun.idCompetencia"]["edit"] = array("table" => "comportamental_comun", "field" => "idCompetencia", "page" => "edit");
		if( !isset( $lookupTableLinks["conducta"] ) ) {
			$lookupTableLinks["conducta"] = array();
		}
		if( !isset( $lookupTableLinks["conducta"]["comportamental_comun.IdConducta"] )) {
			$lookupTableLinks["conducta"]["comportamental_comun.IdConducta"] = array();
		}
		$lookupTableLinks["conducta"]["comportamental_comun.IdConducta"]["edit"] = array("table" => "comportamental_comun", "field" => "IdConducta", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_puntaje"] ) ) {
			$lookupTableLinks["tparam_puntaje"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_puntaje"]["comportamental_comun.Puntaje"] )) {
			$lookupTableLinks["tparam_puntaje"]["comportamental_comun.Puntaje"] = array();
		}
		$lookupTableLinks["tparam_puntaje"]["comportamental_comun.Puntaje"]["edit"] = array("table" => "comportamental_comun", "field" => "Puntaje", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_estados_compromisos"] ) ) {
			$lookupTableLinks["tparam_estados_compromisos"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_estados_compromisos"]["comportamental_comun.CFunEstado"] )) {
			$lookupTableLinks["tparam_estados_compromisos"]["comportamental_comun.CFunEstado"] = array();
		}
		$lookupTableLinks["tparam_estados_compromisos"]["comportamental_comun.CFunEstado"]["edit"] = array("table" => "comportamental_comun", "field" => "CFunEstado", "page" => "edit");
		if( !isset( $lookupTableLinks["evaluacion"] ) ) {
			$lookupTableLinks["evaluacion"] = array();
		}
		if( !isset( $lookupTableLinks["evaluacion"]["comportamental_jerarquica.idEvaluacion_FK"] )) {
			$lookupTableLinks["evaluacion"]["comportamental_jerarquica.idEvaluacion_FK"] = array();
		}
		$lookupTableLinks["evaluacion"]["comportamental_jerarquica.idEvaluacion_FK"]["edit"] = array("table" => "comportamental_jerarquica", "field" => "idEvaluacion_FK", "page" => "edit");
		if( !isset( $lookupTableLinks["comportamental"] ) ) {
			$lookupTableLinks["comportamental"] = array();
		}
		if( !isset( $lookupTableLinks["comportamental"]["comportamental_jerarquica.idComportamental"] )) {
			$lookupTableLinks["comportamental"]["comportamental_jerarquica.idComportamental"] = array();
		}
		$lookupTableLinks["comportamental"]["comportamental_jerarquica.idComportamental"]["edit"] = array("table" => "comportamental_jerarquica", "field" => "idComportamental", "page" => "edit");
		if( !isset( $lookupTableLinks["competencia"] ) ) {
			$lookupTableLinks["competencia"] = array();
		}
		if( !isset( $lookupTableLinks["competencia"]["comportamental_jerarquica.idCompetencia"] )) {
			$lookupTableLinks["competencia"]["comportamental_jerarquica.idCompetencia"] = array();
		}
		$lookupTableLinks["competencia"]["comportamental_jerarquica.idCompetencia"]["edit"] = array("table" => "comportamental_jerarquica", "field" => "idCompetencia", "page" => "edit");
		if( !isset( $lookupTableLinks["conducta"] ) ) {
			$lookupTableLinks["conducta"] = array();
		}
		if( !isset( $lookupTableLinks["conducta"]["comportamental_jerarquica.IdConducta"] )) {
			$lookupTableLinks["conducta"]["comportamental_jerarquica.IdConducta"] = array();
		}
		$lookupTableLinks["conducta"]["comportamental_jerarquica.IdConducta"]["edit"] = array("table" => "comportamental_jerarquica", "field" => "IdConducta", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_puntaje"] ) ) {
			$lookupTableLinks["tparam_puntaje"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_puntaje"]["comportamental_jerarquica.Puntaje"] )) {
			$lookupTableLinks["tparam_puntaje"]["comportamental_jerarquica.Puntaje"] = array();
		}
		$lookupTableLinks["tparam_puntaje"]["comportamental_jerarquica.Puntaje"]["edit"] = array("table" => "comportamental_jerarquica", "field" => "Puntaje", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_estados_compromisos"] ) ) {
			$lookupTableLinks["tparam_estados_compromisos"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_estados_compromisos"]["comportamental_jerarquica.CFunEstado"] )) {
			$lookupTableLinks["tparam_estados_compromisos"]["comportamental_jerarquica.CFunEstado"] = array();
		}
		$lookupTableLinks["tparam_estados_compromisos"]["comportamental_jerarquica.CFunEstado"]["edit"] = array("table" => "comportamental_jerarquica", "field" => "CFunEstado", "page" => "edit");
		if( !isset( $lookupTableLinks["comportamental"] ) ) {
			$lookupTableLinks["comportamental"] = array();
		}
		if( !isset( $lookupTableLinks["comportamental"]["competencia.idComportamental"] )) {
			$lookupTableLinks["comportamental"]["competencia.idComportamental"] = array();
		}
		$lookupTableLinks["comportamental"]["competencia.idComportamental"]["edit"] = array("table" => "competencia", "field" => "idComportamental", "page" => "edit");
		if( !isset( $lookupTableLinks["competencia"] ) ) {
			$lookupTableLinks["competencia"] = array();
		}
		if( !isset( $lookupTableLinks["competencia"]["conducta.idCompetencia"] )) {
			$lookupTableLinks["competencia"]["conducta.idCompetencia"] = array();
		}
		$lookupTableLinks["competencia"]["conducta.idCompetencia"]["edit"] = array("table" => "conducta", "field" => "idCompetencia", "page" => "edit");
		if( !isset( $lookupTableLinks[""] ) ) {
			$lookupTableLinks[""] = array();
		}
		if( !isset( $lookupTableLinks[""]["concertacion_po_2.idEvaluado"] )) {
			$lookupTableLinks[""]["concertacion_po_2.idEvaluado"] = array();
		}
		$lookupTableLinks[""]["concertacion_po_2.idEvaluado"]["edit"] = array("table" => "concertacion_po_2", "field" => "idEvaluado", "page" => "edit");
		if( !isset( $lookupTableLinks[""] ) ) {
			$lookupTableLinks[""] = array();
		}
		if( !isset( $lookupTableLinks[""]["concertacion_po_2.idEvaluador"] )) {
			$lookupTableLinks[""]["concertacion_po_2.idEvaluador"] = array();
		}
		$lookupTableLinks[""]["concertacion_po_2.idEvaluador"]["edit"] = array("table" => "concertacion_po_2", "field" => "idEvaluador", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_vigencia"] ) ) {
			$lookupTableLinks["tparam_vigencia"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_vigencia"]["concertacion_po_2.vigencia"] )) {
			$lookupTableLinks["tparam_vigencia"]["concertacion_po_2.vigencia"] = array();
		}
		$lookupTableLinks["tparam_vigencia"]["concertacion_po_2.vigencia"]["edit"] = array("table" => "concertacion_po_2", "field" => "vigencia", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_periodo"] ) ) {
			$lookupTableLinks["tparam_periodo"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_periodo"]["concertacion_po_2.periodo"] )) {
			$lookupTableLinks["tparam_periodo"]["concertacion_po_2.periodo"] = array();
		}
		$lookupTableLinks["tparam_periodo"]["concertacion_po_2.periodo"]["edit"] = array("table" => "concertacion_po_2", "field" => "periodo", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_estados_eval"] ) ) {
			$lookupTableLinks["tparam_estados_eval"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_estados_eval"]["concertacion_po_2.estado"] )) {
			$lookupTableLinks["tparam_estados_eval"]["concertacion_po_2.estado"] = array();
		}
		$lookupTableLinks["tparam_estados_eval"]["concertacion_po_2.estado"]["edit"] = array("table" => "concertacion_po_2", "field" => "estado", "page" => "edit");
		if( !isset( $lookupTableLinks["cargo"] ) ) {
			$lookupTableLinks["cargo"] = array();
		}
		if( !isset( $lookupTableLinks["cargo"]["concertacion_po_2.evaluado_cargo"] )) {
			$lookupTableLinks["cargo"]["concertacion_po_2.evaluado_cargo"] = array();
		}
		$lookupTableLinks["cargo"]["concertacion_po_2.evaluado_cargo"]["edit"] = array("table" => "concertacion_po_2", "field" => "evaluado_cargo", "page" => "edit");
		if( !isset( $lookupTableLinks["dependencias_001"] ) ) {
			$lookupTableLinks["dependencias_001"] = array();
		}
		if( !isset( $lookupTableLinks["dependencias_001"]["concertacion_po_2.evaluado_dep_sup"] )) {
			$lookupTableLinks["dependencias_001"]["concertacion_po_2.evaluado_dep_sup"] = array();
		}
		$lookupTableLinks["dependencias_001"]["concertacion_po_2.evaluado_dep_sup"]["edit"] = array("table" => "concertacion_po_2", "field" => "evaluado_dep_sup", "page" => "edit");
		if( !isset( $lookupTableLinks["dependencia"] ) ) {
			$lookupTableLinks["dependencia"] = array();
		}
		if( !isset( $lookupTableLinks["dependencia"]["concertacion_po_2.evaluado_dep"] )) {
			$lookupTableLinks["dependencia"]["concertacion_po_2.evaluado_dep"] = array();
		}
		$lookupTableLinks["dependencia"]["concertacion_po_2.evaluado_dep"]["edit"] = array("table" => "concertacion_po_2", "field" => "evaluado_dep", "page" => "edit");
		if( !isset( $lookupTableLinks["cargo"] ) ) {
			$lookupTableLinks["cargo"] = array();
		}
		if( !isset( $lookupTableLinks["cargo"]["concertacion_po_2.evaluador_cargo"] )) {
			$lookupTableLinks["cargo"]["concertacion_po_2.evaluador_cargo"] = array();
		}
		$lookupTableLinks["cargo"]["concertacion_po_2.evaluador_cargo"]["edit"] = array("table" => "concertacion_po_2", "field" => "evaluador_cargo", "page" => "edit");
		if( !isset( $lookupTableLinks["dependencias_001"] ) ) {
			$lookupTableLinks["dependencias_001"] = array();
		}
		if( !isset( $lookupTableLinks["dependencias_001"]["concertacion_po_2.evaluador_dep_sup"] )) {
			$lookupTableLinks["dependencias_001"]["concertacion_po_2.evaluador_dep_sup"] = array();
		}
		$lookupTableLinks["dependencias_001"]["concertacion_po_2.evaluador_dep_sup"]["edit"] = array("table" => "concertacion_po_2", "field" => "evaluador_dep_sup", "page" => "edit");
		if( !isset( $lookupTableLinks["dependencia"] ) ) {
			$lookupTableLinks["dependencia"] = array();
		}
		if( !isset( $lookupTableLinks["dependencia"]["concertacion_po_2.evaluador_dep"] )) {
			$lookupTableLinks["dependencia"]["concertacion_po_2.evaluador_dep"] = array();
		}
		$lookupTableLinks["dependencia"]["concertacion_po_2.evaluador_dep"]["edit"] = array("table" => "concertacion_po_2", "field" => "evaluador_dep", "page" => "edit");
		if( !isset( $lookupTableLinks["nombramiento"] ) ) {
			$lookupTableLinks["nombramiento"] = array();
		}
		if( !isset( $lookupTableLinks["nombramiento"]["concertacion_po_2.evaluador_nombramiento"] )) {
			$lookupTableLinks["nombramiento"]["concertacion_po_2.evaluador_nombramiento"] = array();
		}
		$lookupTableLinks["nombramiento"]["concertacion_po_2.evaluador_nombramiento"]["edit"] = array("table" => "concertacion_po_2", "field" => "evaluador_nombramiento", "page" => "edit");
		if( !isset( $lookupTableLinks["nombramiento"] ) ) {
			$lookupTableLinks["nombramiento"] = array();
		}
		if( !isset( $lookupTableLinks["nombramiento"]["concertacion_po_2.evaluado_nombramiento"] )) {
			$lookupTableLinks["nombramiento"]["concertacion_po_2.evaluado_nombramiento"] = array();
		}
		$lookupTableLinks["nombramiento"]["concertacion_po_2.evaluado_nombramiento"]["edit"] = array("table" => "concertacion_po_2", "field" => "evaluado_nombramiento", "page" => "edit");
		if( !isset( $lookupTableLinks["comportamental"] ) ) {
			$lookupTableLinks["comportamental"] = array();
		}
		if( !isset( $lookupTableLinks["comportamental"]["concertacion_po_2.id_comportamental_fk"] )) {
			$lookupTableLinks["comportamental"]["concertacion_po_2.id_comportamental_fk"] = array();
		}
		$lookupTableLinks["comportamental"]["concertacion_po_2.id_comportamental_fk"]["edit"] = array("table" => "concertacion_po_2", "field" => "id_comportamental_fk", "page" => "edit");
		if( !isset( $lookupTableLinks["q_edl2_ctrl_valor_af_002"] ) ) {
			$lookupTableLinks["q_edl2_ctrl_valor_af_002"] = array();
		}
		if( !isset( $lookupTableLinks["q_edl2_ctrl_valor_af_002"]["compromisofuncional_2.idEvaluacion_FK"] )) {
			$lookupTableLinks["q_edl2_ctrl_valor_af_002"]["compromisofuncional_2.idEvaluacion_FK"] = array();
		}
		$lookupTableLinks["q_edl2_ctrl_valor_af_002"]["compromisofuncional_2.idEvaluacion_FK"]["edit"] = array("table" => "compromisofuncional_2", "field" => "idEvaluacion_FK", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_tipoacuerdo"] ) ) {
			$lookupTableLinks["tparam_tipoacuerdo"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_tipoacuerdo"]["compromisofuncional_2.idTipoAcuerdo"] )) {
			$lookupTableLinks["tparam_tipoacuerdo"]["compromisofuncional_2.idTipoAcuerdo"] = array();
		}
		$lookupTableLinks["tparam_tipoacuerdo"]["compromisofuncional_2.idTipoAcuerdo"]["edit"] = array("table" => "compromisofuncional_2", "field" => "idTipoAcuerdo", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_ponderacion"] ) ) {
			$lookupTableLinks["tparam_ponderacion"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_ponderacion"]["compromisofuncional_2.valorAcordado"] )) {
			$lookupTableLinks["tparam_ponderacion"]["compromisofuncional_2.valorAcordado"] = array();
		}
		$lookupTableLinks["tparam_ponderacion"]["compromisofuncional_2.valorAcordado"]["edit"] = array("table" => "compromisofuncional_2", "field" => "valorAcordado", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_estados_compromisos"] ) ) {
			$lookupTableLinks["tparam_estados_compromisos"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_estados_compromisos"]["compromisofuncional_2.CFunEstado"] )) {
			$lookupTableLinks["tparam_estados_compromisos"]["compromisofuncional_2.CFunEstado"] = array();
		}
		$lookupTableLinks["tparam_estados_compromisos"]["compromisofuncional_2.CFunEstado"]["edit"] = array("table" => "compromisofuncional_2", "field" => "CFunEstado", "page" => "edit");
		if( !isset( $lookupTableLinks["comportamental"] ) ) {
			$lookupTableLinks["comportamental"] = array();
		}
		if( !isset( $lookupTableLinks["comportamental"]["comportamental_comun_2.idComportamental"] )) {
			$lookupTableLinks["comportamental"]["comportamental_comun_2.idComportamental"] = array();
		}
		$lookupTableLinks["comportamental"]["comportamental_comun_2.idComportamental"]["edit"] = array("table" => "comportamental_comun_2", "field" => "idComportamental", "page" => "edit");
		if( !isset( $lookupTableLinks["competencia"] ) ) {
			$lookupTableLinks["competencia"] = array();
		}
		if( !isset( $lookupTableLinks["competencia"]["comportamental_comun_2.idCompetencia"] )) {
			$lookupTableLinks["competencia"]["comportamental_comun_2.idCompetencia"] = array();
		}
		$lookupTableLinks["competencia"]["comportamental_comun_2.idCompetencia"]["edit"] = array("table" => "comportamental_comun_2", "field" => "idCompetencia", "page" => "edit");
		if( !isset( $lookupTableLinks["conducta"] ) ) {
			$lookupTableLinks["conducta"] = array();
		}
		if( !isset( $lookupTableLinks["conducta"]["comportamental_comun_2.IdConducta"] )) {
			$lookupTableLinks["conducta"]["comportamental_comun_2.IdConducta"] = array();
		}
		$lookupTableLinks["conducta"]["comportamental_comun_2.IdConducta"]["edit"] = array("table" => "comportamental_comun_2", "field" => "IdConducta", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_puntaje"] ) ) {
			$lookupTableLinks["tparam_puntaje"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_puntaje"]["comportamental_comun_2.Puntaje"] )) {
			$lookupTableLinks["tparam_puntaje"]["comportamental_comun_2.Puntaje"] = array();
		}
		$lookupTableLinks["tparam_puntaje"]["comportamental_comun_2.Puntaje"]["edit"] = array("table" => "comportamental_comun_2", "field" => "Puntaje", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_estados_compromisos"] ) ) {
			$lookupTableLinks["tparam_estados_compromisos"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_estados_compromisos"]["comportamental_comun_2.CFunEstado"] )) {
			$lookupTableLinks["tparam_estados_compromisos"]["comportamental_comun_2.CFunEstado"] = array();
		}
		$lookupTableLinks["tparam_estados_compromisos"]["comportamental_comun_2.CFunEstado"]["edit"] = array("table" => "comportamental_comun_2", "field" => "CFunEstado", "page" => "edit");
		if( !isset( $lookupTableLinks["evaluacion"] ) ) {
			$lookupTableLinks["evaluacion"] = array();
		}
		if( !isset( $lookupTableLinks["evaluacion"]["comportamental_jerarquica_2.idEvaluacion_FK"] )) {
			$lookupTableLinks["evaluacion"]["comportamental_jerarquica_2.idEvaluacion_FK"] = array();
		}
		$lookupTableLinks["evaluacion"]["comportamental_jerarquica_2.idEvaluacion_FK"]["edit"] = array("table" => "comportamental_jerarquica_2", "field" => "idEvaluacion_FK", "page" => "edit");
		if( !isset( $lookupTableLinks["comportamental"] ) ) {
			$lookupTableLinks["comportamental"] = array();
		}
		if( !isset( $lookupTableLinks["comportamental"]["comportamental_jerarquica_2.idComportamental"] )) {
			$lookupTableLinks["comportamental"]["comportamental_jerarquica_2.idComportamental"] = array();
		}
		$lookupTableLinks["comportamental"]["comportamental_jerarquica_2.idComportamental"]["edit"] = array("table" => "comportamental_jerarquica_2", "field" => "idComportamental", "page" => "edit");
		if( !isset( $lookupTableLinks["competencia"] ) ) {
			$lookupTableLinks["competencia"] = array();
		}
		if( !isset( $lookupTableLinks["competencia"]["comportamental_jerarquica_2.idCompetencia"] )) {
			$lookupTableLinks["competencia"]["comportamental_jerarquica_2.idCompetencia"] = array();
		}
		$lookupTableLinks["competencia"]["comportamental_jerarquica_2.idCompetencia"]["edit"] = array("table" => "comportamental_jerarquica_2", "field" => "idCompetencia", "page" => "edit");
		if( !isset( $lookupTableLinks["conducta"] ) ) {
			$lookupTableLinks["conducta"] = array();
		}
		if( !isset( $lookupTableLinks["conducta"]["comportamental_jerarquica_2.IdConducta"] )) {
			$lookupTableLinks["conducta"]["comportamental_jerarquica_2.IdConducta"] = array();
		}
		$lookupTableLinks["conducta"]["comportamental_jerarquica_2.IdConducta"]["edit"] = array("table" => "comportamental_jerarquica_2", "field" => "IdConducta", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_puntaje"] ) ) {
			$lookupTableLinks["tparam_puntaje"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_puntaje"]["comportamental_jerarquica_2.Puntaje"] )) {
			$lookupTableLinks["tparam_puntaje"]["comportamental_jerarquica_2.Puntaje"] = array();
		}
		$lookupTableLinks["tparam_puntaje"]["comportamental_jerarquica_2.Puntaje"]["edit"] = array("table" => "comportamental_jerarquica_2", "field" => "Puntaje", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_estados_compromisos"] ) ) {
			$lookupTableLinks["tparam_estados_compromisos"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_estados_compromisos"]["comportamental_jerarquica_2.CFunEstado"] )) {
			$lookupTableLinks["tparam_estados_compromisos"]["comportamental_jerarquica_2.CFunEstado"] = array();
		}
		$lookupTableLinks["tparam_estados_compromisos"]["comportamental_jerarquica_2.CFunEstado"]["edit"] = array("table" => "comportamental_jerarquica_2", "field" => "CFunEstado", "page" => "edit");
		if( !isset( $lookupTableLinks[""] ) ) {
			$lookupTableLinks[""] = array();
		}
		if( !isset( $lookupTableLinks[""]["concertacion_po_3.idEvaluado"] )) {
			$lookupTableLinks[""]["concertacion_po_3.idEvaluado"] = array();
		}
		$lookupTableLinks[""]["concertacion_po_3.idEvaluado"]["edit"] = array("table" => "concertacion_po_3", "field" => "idEvaluado", "page" => "edit");
		if( !isset( $lookupTableLinks[""] ) ) {
			$lookupTableLinks[""] = array();
		}
		if( !isset( $lookupTableLinks[""]["concertacion_po_3.idEvaluador"] )) {
			$lookupTableLinks[""]["concertacion_po_3.idEvaluador"] = array();
		}
		$lookupTableLinks[""]["concertacion_po_3.idEvaluador"]["edit"] = array("table" => "concertacion_po_3", "field" => "idEvaluador", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_vigencia"] ) ) {
			$lookupTableLinks["tparam_vigencia"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_vigencia"]["concertacion_po_3.vigencia"] )) {
			$lookupTableLinks["tparam_vigencia"]["concertacion_po_3.vigencia"] = array();
		}
		$lookupTableLinks["tparam_vigencia"]["concertacion_po_3.vigencia"]["edit"] = array("table" => "concertacion_po_3", "field" => "vigencia", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_periodo"] ) ) {
			$lookupTableLinks["tparam_periodo"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_periodo"]["concertacion_po_3.periodo"] )) {
			$lookupTableLinks["tparam_periodo"]["concertacion_po_3.periodo"] = array();
		}
		$lookupTableLinks["tparam_periodo"]["concertacion_po_3.periodo"]["edit"] = array("table" => "concertacion_po_3", "field" => "periodo", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_estados_eval"] ) ) {
			$lookupTableLinks["tparam_estados_eval"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_estados_eval"]["concertacion_po_3.estado"] )) {
			$lookupTableLinks["tparam_estados_eval"]["concertacion_po_3.estado"] = array();
		}
		$lookupTableLinks["tparam_estados_eval"]["concertacion_po_3.estado"]["edit"] = array("table" => "concertacion_po_3", "field" => "estado", "page" => "edit");
		if( !isset( $lookupTableLinks["cargo"] ) ) {
			$lookupTableLinks["cargo"] = array();
		}
		if( !isset( $lookupTableLinks["cargo"]["concertacion_po_3.evaluado_cargo"] )) {
			$lookupTableLinks["cargo"]["concertacion_po_3.evaluado_cargo"] = array();
		}
		$lookupTableLinks["cargo"]["concertacion_po_3.evaluado_cargo"]["edit"] = array("table" => "concertacion_po_3", "field" => "evaluado_cargo", "page" => "edit");
		if( !isset( $lookupTableLinks["dependencias_001"] ) ) {
			$lookupTableLinks["dependencias_001"] = array();
		}
		if( !isset( $lookupTableLinks["dependencias_001"]["concertacion_po_3.evaluado_dep_sup"] )) {
			$lookupTableLinks["dependencias_001"]["concertacion_po_3.evaluado_dep_sup"] = array();
		}
		$lookupTableLinks["dependencias_001"]["concertacion_po_3.evaluado_dep_sup"]["edit"] = array("table" => "concertacion_po_3", "field" => "evaluado_dep_sup", "page" => "edit");
		if( !isset( $lookupTableLinks["dependencia"] ) ) {
			$lookupTableLinks["dependencia"] = array();
		}
		if( !isset( $lookupTableLinks["dependencia"]["concertacion_po_3.evaluado_dep"] )) {
			$lookupTableLinks["dependencia"]["concertacion_po_3.evaluado_dep"] = array();
		}
		$lookupTableLinks["dependencia"]["concertacion_po_3.evaluado_dep"]["edit"] = array("table" => "concertacion_po_3", "field" => "evaluado_dep", "page" => "edit");
		if( !isset( $lookupTableLinks["cargo"] ) ) {
			$lookupTableLinks["cargo"] = array();
		}
		if( !isset( $lookupTableLinks["cargo"]["concertacion_po_3.evaluador_cargo"] )) {
			$lookupTableLinks["cargo"]["concertacion_po_3.evaluador_cargo"] = array();
		}
		$lookupTableLinks["cargo"]["concertacion_po_3.evaluador_cargo"]["edit"] = array("table" => "concertacion_po_3", "field" => "evaluador_cargo", "page" => "edit");
		if( !isset( $lookupTableLinks["dependencias_001"] ) ) {
			$lookupTableLinks["dependencias_001"] = array();
		}
		if( !isset( $lookupTableLinks["dependencias_001"]["concertacion_po_3.evaluador_dep_sup"] )) {
			$lookupTableLinks["dependencias_001"]["concertacion_po_3.evaluador_dep_sup"] = array();
		}
		$lookupTableLinks["dependencias_001"]["concertacion_po_3.evaluador_dep_sup"]["edit"] = array("table" => "concertacion_po_3", "field" => "evaluador_dep_sup", "page" => "edit");
		if( !isset( $lookupTableLinks["dependencia"] ) ) {
			$lookupTableLinks["dependencia"] = array();
		}
		if( !isset( $lookupTableLinks["dependencia"]["concertacion_po_3.evaluador_dep"] )) {
			$lookupTableLinks["dependencia"]["concertacion_po_3.evaluador_dep"] = array();
		}
		$lookupTableLinks["dependencia"]["concertacion_po_3.evaluador_dep"]["edit"] = array("table" => "concertacion_po_3", "field" => "evaluador_dep", "page" => "edit");
		if( !isset( $lookupTableLinks["nombramiento"] ) ) {
			$lookupTableLinks["nombramiento"] = array();
		}
		if( !isset( $lookupTableLinks["nombramiento"]["concertacion_po_3.evaluador_nombramiento"] )) {
			$lookupTableLinks["nombramiento"]["concertacion_po_3.evaluador_nombramiento"] = array();
		}
		$lookupTableLinks["nombramiento"]["concertacion_po_3.evaluador_nombramiento"]["edit"] = array("table" => "concertacion_po_3", "field" => "evaluador_nombramiento", "page" => "edit");
		if( !isset( $lookupTableLinks["nombramiento"] ) ) {
			$lookupTableLinks["nombramiento"] = array();
		}
		if( !isset( $lookupTableLinks["nombramiento"]["concertacion_po_3.evaluado_nombramiento"] )) {
			$lookupTableLinks["nombramiento"]["concertacion_po_3.evaluado_nombramiento"] = array();
		}
		$lookupTableLinks["nombramiento"]["concertacion_po_3.evaluado_nombramiento"]["edit"] = array("table" => "concertacion_po_3", "field" => "evaluado_nombramiento", "page" => "edit");
		if( !isset( $lookupTableLinks["comportamental"] ) ) {
			$lookupTableLinks["comportamental"] = array();
		}
		if( !isset( $lookupTableLinks["comportamental"]["concertacion_po_3.id_comportamental_fk"] )) {
			$lookupTableLinks["comportamental"]["concertacion_po_3.id_comportamental_fk"] = array();
		}
		$lookupTableLinks["comportamental"]["concertacion_po_3.id_comportamental_fk"]["edit"] = array("table" => "concertacion_po_3", "field" => "id_comportamental_fk", "page" => "edit");
		if( !isset( $lookupTableLinks["q_edl2_ctrl_valor_af_002"] ) ) {
			$lookupTableLinks["q_edl2_ctrl_valor_af_002"] = array();
		}
		if( !isset( $lookupTableLinks["q_edl2_ctrl_valor_af_002"]["compromisofuncional_3.idEvaluacion_FK"] )) {
			$lookupTableLinks["q_edl2_ctrl_valor_af_002"]["compromisofuncional_3.idEvaluacion_FK"] = array();
		}
		$lookupTableLinks["q_edl2_ctrl_valor_af_002"]["compromisofuncional_3.idEvaluacion_FK"]["edit"] = array("table" => "compromisofuncional_3", "field" => "idEvaluacion_FK", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_tipoacuerdo"] ) ) {
			$lookupTableLinks["tparam_tipoacuerdo"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_tipoacuerdo"]["compromisofuncional_3.idTipoAcuerdo"] )) {
			$lookupTableLinks["tparam_tipoacuerdo"]["compromisofuncional_3.idTipoAcuerdo"] = array();
		}
		$lookupTableLinks["tparam_tipoacuerdo"]["compromisofuncional_3.idTipoAcuerdo"]["edit"] = array("table" => "compromisofuncional_3", "field" => "idTipoAcuerdo", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_ponderacion"] ) ) {
			$lookupTableLinks["tparam_ponderacion"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_ponderacion"]["compromisofuncional_3.valorAcordado"] )) {
			$lookupTableLinks["tparam_ponderacion"]["compromisofuncional_3.valorAcordado"] = array();
		}
		$lookupTableLinks["tparam_ponderacion"]["compromisofuncional_3.valorAcordado"]["edit"] = array("table" => "compromisofuncional_3", "field" => "valorAcordado", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_estados_compromisos"] ) ) {
			$lookupTableLinks["tparam_estados_compromisos"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_estados_compromisos"]["compromisofuncional_3.CFunEstado"] )) {
			$lookupTableLinks["tparam_estados_compromisos"]["compromisofuncional_3.CFunEstado"] = array();
		}
		$lookupTableLinks["tparam_estados_compromisos"]["compromisofuncional_3.CFunEstado"]["edit"] = array("table" => "compromisofuncional_3", "field" => "CFunEstado", "page" => "edit");
		if( !isset( $lookupTableLinks["comportamental"] ) ) {
			$lookupTableLinks["comportamental"] = array();
		}
		if( !isset( $lookupTableLinks["comportamental"]["comportamental_comun_3.idComportamental"] )) {
			$lookupTableLinks["comportamental"]["comportamental_comun_3.idComportamental"] = array();
		}
		$lookupTableLinks["comportamental"]["comportamental_comun_3.idComportamental"]["edit"] = array("table" => "comportamental_comun_3", "field" => "idComportamental", "page" => "edit");
		if( !isset( $lookupTableLinks["competencia"] ) ) {
			$lookupTableLinks["competencia"] = array();
		}
		if( !isset( $lookupTableLinks["competencia"]["comportamental_comun_3.idCompetencia"] )) {
			$lookupTableLinks["competencia"]["comportamental_comun_3.idCompetencia"] = array();
		}
		$lookupTableLinks["competencia"]["comportamental_comun_3.idCompetencia"]["edit"] = array("table" => "comportamental_comun_3", "field" => "idCompetencia", "page" => "edit");
		if( !isset( $lookupTableLinks["conducta"] ) ) {
			$lookupTableLinks["conducta"] = array();
		}
		if( !isset( $lookupTableLinks["conducta"]["comportamental_comun_3.IdConducta"] )) {
			$lookupTableLinks["conducta"]["comportamental_comun_3.IdConducta"] = array();
		}
		$lookupTableLinks["conducta"]["comportamental_comun_3.IdConducta"]["edit"] = array("table" => "comportamental_comun_3", "field" => "IdConducta", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_puntaje"] ) ) {
			$lookupTableLinks["tparam_puntaje"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_puntaje"]["comportamental_comun_3.Puntaje"] )) {
			$lookupTableLinks["tparam_puntaje"]["comportamental_comun_3.Puntaje"] = array();
		}
		$lookupTableLinks["tparam_puntaje"]["comportamental_comun_3.Puntaje"]["edit"] = array("table" => "comportamental_comun_3", "field" => "Puntaje", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_estados_compromisos"] ) ) {
			$lookupTableLinks["tparam_estados_compromisos"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_estados_compromisos"]["comportamental_comun_3.CFunEstado"] )) {
			$lookupTableLinks["tparam_estados_compromisos"]["comportamental_comun_3.CFunEstado"] = array();
		}
		$lookupTableLinks["tparam_estados_compromisos"]["comportamental_comun_3.CFunEstado"]["edit"] = array("table" => "comportamental_comun_3", "field" => "CFunEstado", "page" => "edit");
		if( !isset( $lookupTableLinks["evaluacion"] ) ) {
			$lookupTableLinks["evaluacion"] = array();
		}
		if( !isset( $lookupTableLinks["evaluacion"]["comportamental_jerarquica_3.idEvaluacion_FK"] )) {
			$lookupTableLinks["evaluacion"]["comportamental_jerarquica_3.idEvaluacion_FK"] = array();
		}
		$lookupTableLinks["evaluacion"]["comportamental_jerarquica_3.idEvaluacion_FK"]["edit"] = array("table" => "comportamental_jerarquica_3", "field" => "idEvaluacion_FK", "page" => "edit");
		if( !isset( $lookupTableLinks["comportamental"] ) ) {
			$lookupTableLinks["comportamental"] = array();
		}
		if( !isset( $lookupTableLinks["comportamental"]["comportamental_jerarquica_3.idComportamental"] )) {
			$lookupTableLinks["comportamental"]["comportamental_jerarquica_3.idComportamental"] = array();
		}
		$lookupTableLinks["comportamental"]["comportamental_jerarquica_3.idComportamental"]["edit"] = array("table" => "comportamental_jerarquica_3", "field" => "idComportamental", "page" => "edit");
		if( !isset( $lookupTableLinks["competencia"] ) ) {
			$lookupTableLinks["competencia"] = array();
		}
		if( !isset( $lookupTableLinks["competencia"]["comportamental_jerarquica_3.idCompetencia"] )) {
			$lookupTableLinks["competencia"]["comportamental_jerarquica_3.idCompetencia"] = array();
		}
		$lookupTableLinks["competencia"]["comportamental_jerarquica_3.idCompetencia"]["edit"] = array("table" => "comportamental_jerarquica_3", "field" => "idCompetencia", "page" => "edit");
		if( !isset( $lookupTableLinks["conducta"] ) ) {
			$lookupTableLinks["conducta"] = array();
		}
		if( !isset( $lookupTableLinks["conducta"]["comportamental_jerarquica_3.IdConducta"] )) {
			$lookupTableLinks["conducta"]["comportamental_jerarquica_3.IdConducta"] = array();
		}
		$lookupTableLinks["conducta"]["comportamental_jerarquica_3.IdConducta"]["edit"] = array("table" => "comportamental_jerarquica_3", "field" => "IdConducta", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_puntaje"] ) ) {
			$lookupTableLinks["tparam_puntaje"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_puntaje"]["comportamental_jerarquica_3.Puntaje"] )) {
			$lookupTableLinks["tparam_puntaje"]["comportamental_jerarquica_3.Puntaje"] = array();
		}
		$lookupTableLinks["tparam_puntaje"]["comportamental_jerarquica_3.Puntaje"]["edit"] = array("table" => "comportamental_jerarquica_3", "field" => "Puntaje", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_estados_compromisos"] ) ) {
			$lookupTableLinks["tparam_estados_compromisos"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_estados_compromisos"]["comportamental_jerarquica_3.CFunEstado"] )) {
			$lookupTableLinks["tparam_estados_compromisos"]["comportamental_jerarquica_3.CFunEstado"] = array();
		}
		$lookupTableLinks["tparam_estados_compromisos"]["comportamental_jerarquica_3.CFunEstado"]["edit"] = array("table" => "comportamental_jerarquica_3", "field" => "CFunEstado", "page" => "edit");
		if( !isset( $lookupTableLinks[""] ) ) {
			$lookupTableLinks[""] = array();
		}
		if( !isset( $lookupTableLinks[""]["concertacion_po_3s.idEvaluado"] )) {
			$lookupTableLinks[""]["concertacion_po_3s.idEvaluado"] = array();
		}
		$lookupTableLinks[""]["concertacion_po_3s.idEvaluado"]["edit"] = array("table" => "concertacion_po_3s", "field" => "idEvaluado", "page" => "edit");
		if( !isset( $lookupTableLinks[""] ) ) {
			$lookupTableLinks[""] = array();
		}
		if( !isset( $lookupTableLinks[""]["concertacion_po_3s.idEvaluador"] )) {
			$lookupTableLinks[""]["concertacion_po_3s.idEvaluador"] = array();
		}
		$lookupTableLinks[""]["concertacion_po_3s.idEvaluador"]["edit"] = array("table" => "concertacion_po_3s", "field" => "idEvaluador", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_vigencia"] ) ) {
			$lookupTableLinks["tparam_vigencia"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_vigencia"]["concertacion_po_3s.vigencia"] )) {
			$lookupTableLinks["tparam_vigencia"]["concertacion_po_3s.vigencia"] = array();
		}
		$lookupTableLinks["tparam_vigencia"]["concertacion_po_3s.vigencia"]["edit"] = array("table" => "concertacion_po_3s", "field" => "vigencia", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_periodo"] ) ) {
			$lookupTableLinks["tparam_periodo"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_periodo"]["concertacion_po_3s.periodo"] )) {
			$lookupTableLinks["tparam_periodo"]["concertacion_po_3s.periodo"] = array();
		}
		$lookupTableLinks["tparam_periodo"]["concertacion_po_3s.periodo"]["edit"] = array("table" => "concertacion_po_3s", "field" => "periodo", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_estados_eval"] ) ) {
			$lookupTableLinks["tparam_estados_eval"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_estados_eval"]["concertacion_po_3s.estado"] )) {
			$lookupTableLinks["tparam_estados_eval"]["concertacion_po_3s.estado"] = array();
		}
		$lookupTableLinks["tparam_estados_eval"]["concertacion_po_3s.estado"]["edit"] = array("table" => "concertacion_po_3s", "field" => "estado", "page" => "edit");
		if( !isset( $lookupTableLinks["cargo"] ) ) {
			$lookupTableLinks["cargo"] = array();
		}
		if( !isset( $lookupTableLinks["cargo"]["concertacion_po_3s.evaluado_cargo"] )) {
			$lookupTableLinks["cargo"]["concertacion_po_3s.evaluado_cargo"] = array();
		}
		$lookupTableLinks["cargo"]["concertacion_po_3s.evaluado_cargo"]["edit"] = array("table" => "concertacion_po_3s", "field" => "evaluado_cargo", "page" => "edit");
		if( !isset( $lookupTableLinks["dependencias_001"] ) ) {
			$lookupTableLinks["dependencias_001"] = array();
		}
		if( !isset( $lookupTableLinks["dependencias_001"]["concertacion_po_3s.evaluado_dep_sup"] )) {
			$lookupTableLinks["dependencias_001"]["concertacion_po_3s.evaluado_dep_sup"] = array();
		}
		$lookupTableLinks["dependencias_001"]["concertacion_po_3s.evaluado_dep_sup"]["edit"] = array("table" => "concertacion_po_3s", "field" => "evaluado_dep_sup", "page" => "edit");
		if( !isset( $lookupTableLinks["dependencia"] ) ) {
			$lookupTableLinks["dependencia"] = array();
		}
		if( !isset( $lookupTableLinks["dependencia"]["concertacion_po_3s.evaluado_dep"] )) {
			$lookupTableLinks["dependencia"]["concertacion_po_3s.evaluado_dep"] = array();
		}
		$lookupTableLinks["dependencia"]["concertacion_po_3s.evaluado_dep"]["edit"] = array("table" => "concertacion_po_3s", "field" => "evaluado_dep", "page" => "edit");
		if( !isset( $lookupTableLinks["cargo"] ) ) {
			$lookupTableLinks["cargo"] = array();
		}
		if( !isset( $lookupTableLinks["cargo"]["concertacion_po_3s.evaluador_cargo"] )) {
			$lookupTableLinks["cargo"]["concertacion_po_3s.evaluador_cargo"] = array();
		}
		$lookupTableLinks["cargo"]["concertacion_po_3s.evaluador_cargo"]["edit"] = array("table" => "concertacion_po_3s", "field" => "evaluador_cargo", "page" => "edit");
		if( !isset( $lookupTableLinks["dependencias_001"] ) ) {
			$lookupTableLinks["dependencias_001"] = array();
		}
		if( !isset( $lookupTableLinks["dependencias_001"]["concertacion_po_3s.evaluador_dep_sup"] )) {
			$lookupTableLinks["dependencias_001"]["concertacion_po_3s.evaluador_dep_sup"] = array();
		}
		$lookupTableLinks["dependencias_001"]["concertacion_po_3s.evaluador_dep_sup"]["edit"] = array("table" => "concertacion_po_3s", "field" => "evaluador_dep_sup", "page" => "edit");
		if( !isset( $lookupTableLinks["dependencia"] ) ) {
			$lookupTableLinks["dependencia"] = array();
		}
		if( !isset( $lookupTableLinks["dependencia"]["concertacion_po_3s.evaluador_dep"] )) {
			$lookupTableLinks["dependencia"]["concertacion_po_3s.evaluador_dep"] = array();
		}
		$lookupTableLinks["dependencia"]["concertacion_po_3s.evaluador_dep"]["edit"] = array("table" => "concertacion_po_3s", "field" => "evaluador_dep", "page" => "edit");
		if( !isset( $lookupTableLinks["nombramiento"] ) ) {
			$lookupTableLinks["nombramiento"] = array();
		}
		if( !isset( $lookupTableLinks["nombramiento"]["concertacion_po_3s.evaluador_nombramiento"] )) {
			$lookupTableLinks["nombramiento"]["concertacion_po_3s.evaluador_nombramiento"] = array();
		}
		$lookupTableLinks["nombramiento"]["concertacion_po_3s.evaluador_nombramiento"]["edit"] = array("table" => "concertacion_po_3s", "field" => "evaluador_nombramiento", "page" => "edit");
		if( !isset( $lookupTableLinks["nombramiento"] ) ) {
			$lookupTableLinks["nombramiento"] = array();
		}
		if( !isset( $lookupTableLinks["nombramiento"]["concertacion_po_3s.evaluado_nombramiento"] )) {
			$lookupTableLinks["nombramiento"]["concertacion_po_3s.evaluado_nombramiento"] = array();
		}
		$lookupTableLinks["nombramiento"]["concertacion_po_3s.evaluado_nombramiento"]["edit"] = array("table" => "concertacion_po_3s", "field" => "evaluado_nombramiento", "page" => "edit");
		if( !isset( $lookupTableLinks["comportamental"] ) ) {
			$lookupTableLinks["comportamental"] = array();
		}
		if( !isset( $lookupTableLinks["comportamental"]["concertacion_po_3s.id_comportamental_fk"] )) {
			$lookupTableLinks["comportamental"]["concertacion_po_3s.id_comportamental_fk"] = array();
		}
		$lookupTableLinks["comportamental"]["concertacion_po_3s.id_comportamental_fk"]["edit"] = array("table" => "concertacion_po_3s", "field" => "id_comportamental_fk", "page" => "edit");
		if( !isset( $lookupTableLinks[""] ) ) {
			$lookupTableLinks[""] = array();
		}
		if( !isset( $lookupTableLinks[""]["concertacion_po_3se.idEvaluado"] )) {
			$lookupTableLinks[""]["concertacion_po_3se.idEvaluado"] = array();
		}
		$lookupTableLinks[""]["concertacion_po_3se.idEvaluado"]["edit"] = array("table" => "concertacion_po_3se", "field" => "idEvaluado", "page" => "edit");
		if( !isset( $lookupTableLinks[""] ) ) {
			$lookupTableLinks[""] = array();
		}
		if( !isset( $lookupTableLinks[""]["concertacion_po_3se.idEvaluador"] )) {
			$lookupTableLinks[""]["concertacion_po_3se.idEvaluador"] = array();
		}
		$lookupTableLinks[""]["concertacion_po_3se.idEvaluador"]["edit"] = array("table" => "concertacion_po_3se", "field" => "idEvaluador", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_vigencia"] ) ) {
			$lookupTableLinks["tparam_vigencia"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_vigencia"]["concertacion_po_3se.vigencia"] )) {
			$lookupTableLinks["tparam_vigencia"]["concertacion_po_3se.vigencia"] = array();
		}
		$lookupTableLinks["tparam_vigencia"]["concertacion_po_3se.vigencia"]["edit"] = array("table" => "concertacion_po_3se", "field" => "vigencia", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_periodo"] ) ) {
			$lookupTableLinks["tparam_periodo"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_periodo"]["concertacion_po_3se.periodo"] )) {
			$lookupTableLinks["tparam_periodo"]["concertacion_po_3se.periodo"] = array();
		}
		$lookupTableLinks["tparam_periodo"]["concertacion_po_3se.periodo"]["edit"] = array("table" => "concertacion_po_3se", "field" => "periodo", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_estados_eval"] ) ) {
			$lookupTableLinks["tparam_estados_eval"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_estados_eval"]["concertacion_po_3se.estado"] )) {
			$lookupTableLinks["tparam_estados_eval"]["concertacion_po_3se.estado"] = array();
		}
		$lookupTableLinks["tparam_estados_eval"]["concertacion_po_3se.estado"]["edit"] = array("table" => "concertacion_po_3se", "field" => "estado", "page" => "edit");
		if( !isset( $lookupTableLinks["cargo"] ) ) {
			$lookupTableLinks["cargo"] = array();
		}
		if( !isset( $lookupTableLinks["cargo"]["concertacion_po_3se.evaluado_cargo"] )) {
			$lookupTableLinks["cargo"]["concertacion_po_3se.evaluado_cargo"] = array();
		}
		$lookupTableLinks["cargo"]["concertacion_po_3se.evaluado_cargo"]["edit"] = array("table" => "concertacion_po_3se", "field" => "evaluado_cargo", "page" => "edit");
		if( !isset( $lookupTableLinks["dependencias_001"] ) ) {
			$lookupTableLinks["dependencias_001"] = array();
		}
		if( !isset( $lookupTableLinks["dependencias_001"]["concertacion_po_3se.evaluado_dep_sup"] )) {
			$lookupTableLinks["dependencias_001"]["concertacion_po_3se.evaluado_dep_sup"] = array();
		}
		$lookupTableLinks["dependencias_001"]["concertacion_po_3se.evaluado_dep_sup"]["edit"] = array("table" => "concertacion_po_3se", "field" => "evaluado_dep_sup", "page" => "edit");
		if( !isset( $lookupTableLinks["dependencia"] ) ) {
			$lookupTableLinks["dependencia"] = array();
		}
		if( !isset( $lookupTableLinks["dependencia"]["concertacion_po_3se.evaluado_dep"] )) {
			$lookupTableLinks["dependencia"]["concertacion_po_3se.evaluado_dep"] = array();
		}
		$lookupTableLinks["dependencia"]["concertacion_po_3se.evaluado_dep"]["edit"] = array("table" => "concertacion_po_3se", "field" => "evaluado_dep", "page" => "edit");
		if( !isset( $lookupTableLinks["cargo"] ) ) {
			$lookupTableLinks["cargo"] = array();
		}
		if( !isset( $lookupTableLinks["cargo"]["concertacion_po_3se.evaluador_cargo"] )) {
			$lookupTableLinks["cargo"]["concertacion_po_3se.evaluador_cargo"] = array();
		}
		$lookupTableLinks["cargo"]["concertacion_po_3se.evaluador_cargo"]["edit"] = array("table" => "concertacion_po_3se", "field" => "evaluador_cargo", "page" => "edit");
		if( !isset( $lookupTableLinks["dependencias_001"] ) ) {
			$lookupTableLinks["dependencias_001"] = array();
		}
		if( !isset( $lookupTableLinks["dependencias_001"]["concertacion_po_3se.evaluador_dep_sup"] )) {
			$lookupTableLinks["dependencias_001"]["concertacion_po_3se.evaluador_dep_sup"] = array();
		}
		$lookupTableLinks["dependencias_001"]["concertacion_po_3se.evaluador_dep_sup"]["edit"] = array("table" => "concertacion_po_3se", "field" => "evaluador_dep_sup", "page" => "edit");
		if( !isset( $lookupTableLinks["dependencia"] ) ) {
			$lookupTableLinks["dependencia"] = array();
		}
		if( !isset( $lookupTableLinks["dependencia"]["concertacion_po_3se.evaluador_dep"] )) {
			$lookupTableLinks["dependencia"]["concertacion_po_3se.evaluador_dep"] = array();
		}
		$lookupTableLinks["dependencia"]["concertacion_po_3se.evaluador_dep"]["edit"] = array("table" => "concertacion_po_3se", "field" => "evaluador_dep", "page" => "edit");
		if( !isset( $lookupTableLinks["nombramiento"] ) ) {
			$lookupTableLinks["nombramiento"] = array();
		}
		if( !isset( $lookupTableLinks["nombramiento"]["concertacion_po_3se.evaluador_nombramiento"] )) {
			$lookupTableLinks["nombramiento"]["concertacion_po_3se.evaluador_nombramiento"] = array();
		}
		$lookupTableLinks["nombramiento"]["concertacion_po_3se.evaluador_nombramiento"]["edit"] = array("table" => "concertacion_po_3se", "field" => "evaluador_nombramiento", "page" => "edit");
		if( !isset( $lookupTableLinks["nombramiento"] ) ) {
			$lookupTableLinks["nombramiento"] = array();
		}
		if( !isset( $lookupTableLinks["nombramiento"]["concertacion_po_3se.evaluado_nombramiento"] )) {
			$lookupTableLinks["nombramiento"]["concertacion_po_3se.evaluado_nombramiento"] = array();
		}
		$lookupTableLinks["nombramiento"]["concertacion_po_3se.evaluado_nombramiento"]["edit"] = array("table" => "concertacion_po_3se", "field" => "evaluado_nombramiento", "page" => "edit");
		if( !isset( $lookupTableLinks["comportamental"] ) ) {
			$lookupTableLinks["comportamental"] = array();
		}
		if( !isset( $lookupTableLinks["comportamental"]["concertacion_po_3se.id_comportamental_fk"] )) {
			$lookupTableLinks["comportamental"]["concertacion_po_3se.id_comportamental_fk"] = array();
		}
		$lookupTableLinks["comportamental"]["concertacion_po_3se.id_comportamental_fk"]["edit"] = array("table" => "concertacion_po_3se", "field" => "id_comportamental_fk", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_estados_eval"] ) ) {
			$lookupTableLinks["tparam_estados_eval"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_estados_eval"]["q_graph_estado_chart.estado"] )) {
			$lookupTableLinks["tparam_estados_eval"]["q_graph_estado_chart.estado"] = array();
		}
		$lookupTableLinks["tparam_estados_eval"]["q_graph_estado_chart.estado"]["search"] = array("table" => "q_graph_estado Chart", "field" => "estado", "page" => "search");
		if( !isset( $lookupTableLinks[""] ) ) {
			$lookupTableLinks[""] = array();
		}
		if( !isset( $lookupTableLinks[""]["concertacion_th.idEvaluado"] )) {
			$lookupTableLinks[""]["concertacion_th.idEvaluado"] = array();
		}
		$lookupTableLinks[""]["concertacion_th.idEvaluado"]["edit"] = array("table" => "concertacion_th", "field" => "idEvaluado", "page" => "edit");
		if( !isset( $lookupTableLinks[""] ) ) {
			$lookupTableLinks[""] = array();
		}
		if( !isset( $lookupTableLinks[""]["concertacion_th.idEvaluador"] )) {
			$lookupTableLinks[""]["concertacion_th.idEvaluador"] = array();
		}
		$lookupTableLinks[""]["concertacion_th.idEvaluador"]["edit"] = array("table" => "concertacion_th", "field" => "idEvaluador", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_vigencia"] ) ) {
			$lookupTableLinks["tparam_vigencia"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_vigencia"]["concertacion_th.vigencia"] )) {
			$lookupTableLinks["tparam_vigencia"]["concertacion_th.vigencia"] = array();
		}
		$lookupTableLinks["tparam_vigencia"]["concertacion_th.vigencia"]["edit"] = array("table" => "concertacion_th", "field" => "vigencia", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_periodo"] ) ) {
			$lookupTableLinks["tparam_periodo"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_periodo"]["concertacion_th.periodo"] )) {
			$lookupTableLinks["tparam_periodo"]["concertacion_th.periodo"] = array();
		}
		$lookupTableLinks["tparam_periodo"]["concertacion_th.periodo"]["edit"] = array("table" => "concertacion_th", "field" => "periodo", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_estados_eval"] ) ) {
			$lookupTableLinks["tparam_estados_eval"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_estados_eval"]["concertacion_th.estado"] )) {
			$lookupTableLinks["tparam_estados_eval"]["concertacion_th.estado"] = array();
		}
		$lookupTableLinks["tparam_estados_eval"]["concertacion_th.estado"]["edit"] = array("table" => "concertacion_th", "field" => "estado", "page" => "edit");
		if( !isset( $lookupTableLinks["cargo"] ) ) {
			$lookupTableLinks["cargo"] = array();
		}
		if( !isset( $lookupTableLinks["cargo"]["concertacion_th.evaluado_cargo"] )) {
			$lookupTableLinks["cargo"]["concertacion_th.evaluado_cargo"] = array();
		}
		$lookupTableLinks["cargo"]["concertacion_th.evaluado_cargo"]["edit"] = array("table" => "concertacion_th", "field" => "evaluado_cargo", "page" => "edit");
		if( !isset( $lookupTableLinks["dependencias_001"] ) ) {
			$lookupTableLinks["dependencias_001"] = array();
		}
		if( !isset( $lookupTableLinks["dependencias_001"]["concertacion_th.evaluado_dep_sup"] )) {
			$lookupTableLinks["dependencias_001"]["concertacion_th.evaluado_dep_sup"] = array();
		}
		$lookupTableLinks["dependencias_001"]["concertacion_th.evaluado_dep_sup"]["edit"] = array("table" => "concertacion_th", "field" => "evaluado_dep_sup", "page" => "edit");
		if( !isset( $lookupTableLinks["dependencia"] ) ) {
			$lookupTableLinks["dependencia"] = array();
		}
		if( !isset( $lookupTableLinks["dependencia"]["concertacion_th.evaluado_dep"] )) {
			$lookupTableLinks["dependencia"]["concertacion_th.evaluado_dep"] = array();
		}
		$lookupTableLinks["dependencia"]["concertacion_th.evaluado_dep"]["edit"] = array("table" => "concertacion_th", "field" => "evaluado_dep", "page" => "edit");
		if( !isset( $lookupTableLinks["cargo"] ) ) {
			$lookupTableLinks["cargo"] = array();
		}
		if( !isset( $lookupTableLinks["cargo"]["concertacion_th.evaluador_cargo"] )) {
			$lookupTableLinks["cargo"]["concertacion_th.evaluador_cargo"] = array();
		}
		$lookupTableLinks["cargo"]["concertacion_th.evaluador_cargo"]["edit"] = array("table" => "concertacion_th", "field" => "evaluador_cargo", "page" => "edit");
		if( !isset( $lookupTableLinks["dependencias_001"] ) ) {
			$lookupTableLinks["dependencias_001"] = array();
		}
		if( !isset( $lookupTableLinks["dependencias_001"]["concertacion_th.evaluador_dep_sup"] )) {
			$lookupTableLinks["dependencias_001"]["concertacion_th.evaluador_dep_sup"] = array();
		}
		$lookupTableLinks["dependencias_001"]["concertacion_th.evaluador_dep_sup"]["edit"] = array("table" => "concertacion_th", "field" => "evaluador_dep_sup", "page" => "edit");
		if( !isset( $lookupTableLinks["dependencia"] ) ) {
			$lookupTableLinks["dependencia"] = array();
		}
		if( !isset( $lookupTableLinks["dependencia"]["concertacion_th.evaluador_dep"] )) {
			$lookupTableLinks["dependencia"]["concertacion_th.evaluador_dep"] = array();
		}
		$lookupTableLinks["dependencia"]["concertacion_th.evaluador_dep"]["edit"] = array("table" => "concertacion_th", "field" => "evaluador_dep", "page" => "edit");
		if( !isset( $lookupTableLinks["nombramiento"] ) ) {
			$lookupTableLinks["nombramiento"] = array();
		}
		if( !isset( $lookupTableLinks["nombramiento"]["concertacion_th.evaluador_nombramiento"] )) {
			$lookupTableLinks["nombramiento"]["concertacion_th.evaluador_nombramiento"] = array();
		}
		$lookupTableLinks["nombramiento"]["concertacion_th.evaluador_nombramiento"]["edit"] = array("table" => "concertacion_th", "field" => "evaluador_nombramiento", "page" => "edit");
		if( !isset( $lookupTableLinks["nombramiento"] ) ) {
			$lookupTableLinks["nombramiento"] = array();
		}
		if( !isset( $lookupTableLinks["nombramiento"]["concertacion_th.evaluado_nombramiento"] )) {
			$lookupTableLinks["nombramiento"]["concertacion_th.evaluado_nombramiento"] = array();
		}
		$lookupTableLinks["nombramiento"]["concertacion_th.evaluado_nombramiento"]["edit"] = array("table" => "concertacion_th", "field" => "evaluado_nombramiento", "page" => "edit");
		if( !isset( $lookupTableLinks["comportamental"] ) ) {
			$lookupTableLinks["comportamental"] = array();
		}
		if( !isset( $lookupTableLinks["comportamental"]["concertacion_th.id_comportamental_fk"] )) {
			$lookupTableLinks["comportamental"]["concertacion_th.id_comportamental_fk"] = array();
		}
		$lookupTableLinks["comportamental"]["concertacion_th.id_comportamental_fk"]["edit"] = array("table" => "concertacion_th", "field" => "id_comportamental_fk", "page" => "edit");
		if( !isset( $lookupTableLinks["evaluacion"] ) ) {
			$lookupTableLinks["evaluacion"] = array();
		}
		if( !isset( $lookupTableLinks["evaluacion"]["comportamental_jerarquica_th.idEvaluacion_FK"] )) {
			$lookupTableLinks["evaluacion"]["comportamental_jerarquica_th.idEvaluacion_FK"] = array();
		}
		$lookupTableLinks["evaluacion"]["comportamental_jerarquica_th.idEvaluacion_FK"]["edit"] = array("table" => "comportamental_jerarquica_th", "field" => "idEvaluacion_FK", "page" => "edit");
		if( !isset( $lookupTableLinks["comportamental"] ) ) {
			$lookupTableLinks["comportamental"] = array();
		}
		if( !isset( $lookupTableLinks["comportamental"]["comportamental_jerarquica_th.idComportamental"] )) {
			$lookupTableLinks["comportamental"]["comportamental_jerarquica_th.idComportamental"] = array();
		}
		$lookupTableLinks["comportamental"]["comportamental_jerarquica_th.idComportamental"]["edit"] = array("table" => "comportamental_jerarquica_th", "field" => "idComportamental", "page" => "edit");
		if( !isset( $lookupTableLinks["competencia"] ) ) {
			$lookupTableLinks["competencia"] = array();
		}
		if( !isset( $lookupTableLinks["competencia"]["comportamental_jerarquica_th.idCompetencia"] )) {
			$lookupTableLinks["competencia"]["comportamental_jerarquica_th.idCompetencia"] = array();
		}
		$lookupTableLinks["competencia"]["comportamental_jerarquica_th.idCompetencia"]["edit"] = array("table" => "comportamental_jerarquica_th", "field" => "idCompetencia", "page" => "edit");
		if( !isset( $lookupTableLinks["conducta"] ) ) {
			$lookupTableLinks["conducta"] = array();
		}
		if( !isset( $lookupTableLinks["conducta"]["comportamental_jerarquica_th.IdConducta"] )) {
			$lookupTableLinks["conducta"]["comportamental_jerarquica_th.IdConducta"] = array();
		}
		$lookupTableLinks["conducta"]["comportamental_jerarquica_th.IdConducta"]["edit"] = array("table" => "comportamental_jerarquica_th", "field" => "IdConducta", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_puntaje"] ) ) {
			$lookupTableLinks["tparam_puntaje"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_puntaje"]["comportamental_jerarquica_th.Puntaje"] )) {
			$lookupTableLinks["tparam_puntaje"]["comportamental_jerarquica_th.Puntaje"] = array();
		}
		$lookupTableLinks["tparam_puntaje"]["comportamental_jerarquica_th.Puntaje"]["edit"] = array("table" => "comportamental_jerarquica_th", "field" => "Puntaje", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_estados_compromisos"] ) ) {
			$lookupTableLinks["tparam_estados_compromisos"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_estados_compromisos"]["comportamental_jerarquica_th.CFunEstado"] )) {
			$lookupTableLinks["tparam_estados_compromisos"]["comportamental_jerarquica_th.CFunEstado"] = array();
		}
		$lookupTableLinks["tparam_estados_compromisos"]["comportamental_jerarquica_th.CFunEstado"]["edit"] = array("table" => "comportamental_jerarquica_th", "field" => "CFunEstado", "page" => "edit");
		if( !isset( $lookupTableLinks["comportamental"] ) ) {
			$lookupTableLinks["comportamental"] = array();
		}
		if( !isset( $lookupTableLinks["comportamental"]["comportamental_comun_th.idComportamental"] )) {
			$lookupTableLinks["comportamental"]["comportamental_comun_th.idComportamental"] = array();
		}
		$lookupTableLinks["comportamental"]["comportamental_comun_th.idComportamental"]["edit"] = array("table" => "comportamental_comun_th", "field" => "idComportamental", "page" => "edit");
		if( !isset( $lookupTableLinks["competencia"] ) ) {
			$lookupTableLinks["competencia"] = array();
		}
		if( !isset( $lookupTableLinks["competencia"]["comportamental_comun_th.idCompetencia"] )) {
			$lookupTableLinks["competencia"]["comportamental_comun_th.idCompetencia"] = array();
		}
		$lookupTableLinks["competencia"]["comportamental_comun_th.idCompetencia"]["edit"] = array("table" => "comportamental_comun_th", "field" => "idCompetencia", "page" => "edit");
		if( !isset( $lookupTableLinks["conducta"] ) ) {
			$lookupTableLinks["conducta"] = array();
		}
		if( !isset( $lookupTableLinks["conducta"]["comportamental_comun_th.IdConducta"] )) {
			$lookupTableLinks["conducta"]["comportamental_comun_th.IdConducta"] = array();
		}
		$lookupTableLinks["conducta"]["comportamental_comun_th.IdConducta"]["edit"] = array("table" => "comportamental_comun_th", "field" => "IdConducta", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_puntaje"] ) ) {
			$lookupTableLinks["tparam_puntaje"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_puntaje"]["comportamental_comun_th.Puntaje"] )) {
			$lookupTableLinks["tparam_puntaje"]["comportamental_comun_th.Puntaje"] = array();
		}
		$lookupTableLinks["tparam_puntaje"]["comportamental_comun_th.Puntaje"]["edit"] = array("table" => "comportamental_comun_th", "field" => "Puntaje", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_estados_compromisos"] ) ) {
			$lookupTableLinks["tparam_estados_compromisos"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_estados_compromisos"]["comportamental_comun_th.CFunEstado"] )) {
			$lookupTableLinks["tparam_estados_compromisos"]["comportamental_comun_th.CFunEstado"] = array();
		}
		$lookupTableLinks["tparam_estados_compromisos"]["comportamental_comun_th.CFunEstado"]["edit"] = array("table" => "comportamental_comun_th", "field" => "CFunEstado", "page" => "edit");
		if( !isset( $lookupTableLinks["q_edl2_ctrl_valor_af_002"] ) ) {
			$lookupTableLinks["q_edl2_ctrl_valor_af_002"] = array();
		}
		if( !isset( $lookupTableLinks["q_edl2_ctrl_valor_af_002"]["compromisofuncional_th.idEvaluacion_FK"] )) {
			$lookupTableLinks["q_edl2_ctrl_valor_af_002"]["compromisofuncional_th.idEvaluacion_FK"] = array();
		}
		$lookupTableLinks["q_edl2_ctrl_valor_af_002"]["compromisofuncional_th.idEvaluacion_FK"]["edit"] = array("table" => "compromisofuncional_th", "field" => "idEvaluacion_FK", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_tipoacuerdo"] ) ) {
			$lookupTableLinks["tparam_tipoacuerdo"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_tipoacuerdo"]["compromisofuncional_th.idTipoAcuerdo"] )) {
			$lookupTableLinks["tparam_tipoacuerdo"]["compromisofuncional_th.idTipoAcuerdo"] = array();
		}
		$lookupTableLinks["tparam_tipoacuerdo"]["compromisofuncional_th.idTipoAcuerdo"]["edit"] = array("table" => "compromisofuncional_th", "field" => "idTipoAcuerdo", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_ponderacion"] ) ) {
			$lookupTableLinks["tparam_ponderacion"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_ponderacion"]["compromisofuncional_th.valorAcordado"] )) {
			$lookupTableLinks["tparam_ponderacion"]["compromisofuncional_th.valorAcordado"] = array();
		}
		$lookupTableLinks["tparam_ponderacion"]["compromisofuncional_th.valorAcordado"]["edit"] = array("table" => "compromisofuncional_th", "field" => "valorAcordado", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_estados_compromisos"] ) ) {
			$lookupTableLinks["tparam_estados_compromisos"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_estados_compromisos"]["compromisofuncional_th.CFunEstado"] )) {
			$lookupTableLinks["tparam_estados_compromisos"]["compromisofuncional_th.CFunEstado"] = array();
		}
		$lookupTableLinks["tparam_estados_compromisos"]["compromisofuncional_th.CFunEstado"]["edit"] = array("table" => "compromisofuncional_th", "field" => "CFunEstado", "page" => "edit");
		if( !isset( $lookupTableLinks["evaluacion"] ) ) {
			$lookupTableLinks["evaluacion"] = array();
		}
		if( !isset( $lookupTableLinks["evaluacion"]["evaluacion_po.evaluacion_id_fk"] )) {
			$lookupTableLinks["evaluacion"]["evaluacion_po.evaluacion_id_fk"] = array();
		}
		$lookupTableLinks["evaluacion"]["evaluacion_po.evaluacion_id_fk"]["edit"] = array("table" => "evaluacion_po", "field" => "evaluacion_id_fk", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_vigencia_eval"] ) ) {
			$lookupTableLinks["tparam_vigencia_eval"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_vigencia_eval"]["evaluacion_po.id_eval_vigencia_fk"] )) {
			$lookupTableLinks["tparam_vigencia_eval"]["evaluacion_po.id_eval_vigencia_fk"] = array();
		}
		$lookupTableLinks["tparam_vigencia_eval"]["evaluacion_po.id_eval_vigencia_fk"]["edit"] = array("table" => "evaluacion_po", "field" => "id_eval_vigencia_fk", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_estados_evaluacion_p"] ) ) {
			$lookupTableLinks["tparam_estados_evaluacion_p"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_estados_evaluacion_p"]["evaluacion_po.estado"] )) {
			$lookupTableLinks["tparam_estados_evaluacion_p"]["evaluacion_po.estado"] = array();
		}
		$lookupTableLinks["tparam_estados_evaluacion_p"]["evaluacion_po.estado"]["edit"] = array("table" => "evaluacion_po", "field" => "estado", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_estados_evaluacion_p"] ) ) {
			$lookupTableLinks["tparam_estados_evaluacion_p"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_estados_evaluacion_p"]["evaluacion_po.estado"] )) {
			$lookupTableLinks["tparam_estados_evaluacion_p"]["evaluacion_po.estado"] = array();
		}
		$lookupTableLinks["tparam_estados_evaluacion_p"]["evaluacion_po.estado"]["add"] = array("table" => "evaluacion_po", "field" => "estado", "page" => "add");
		if( !isset( $lookupTableLinks["tparam_estados_evaluacion_p"] ) ) {
			$lookupTableLinks["tparam_estados_evaluacion_p"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_estados_evaluacion_p"]["evaluacion_po.estado"] )) {
			$lookupTableLinks["tparam_estados_evaluacion_p"]["evaluacion_po.estado"] = array();
		}
		$lookupTableLinks["tparam_estados_evaluacion_p"]["evaluacion_po.estado"]["search"] = array("table" => "evaluacion_po", "field" => "estado", "page" => "search");
		if( !isset( $lookupTableLinks["evaluacion_p"] ) ) {
			$lookupTableLinks["evaluacion_p"] = array();
		}
		if( !isset( $lookupTableLinks["evaluacion_p"]["evaluacion_p_comportamental.id_eval_fk"] )) {
			$lookupTableLinks["evaluacion_p"]["evaluacion_p_comportamental.id_eval_fk"] = array();
		}
		$lookupTableLinks["evaluacion_p"]["evaluacion_p_comportamental.id_eval_fk"]["edit"] = array("table" => "evaluacion_p_comportamental", "field" => "id_eval_fk", "page" => "edit");
		if( !isset( $lookupTableLinks["evaluacion_p"] ) ) {
			$lookupTableLinks["evaluacion_p"] = array();
		}
		if( !isset( $lookupTableLinks["evaluacion_p"]["evaluacion_p_comportamental.evaluacion_p_id"] )) {
			$lookupTableLinks["evaluacion_p"]["evaluacion_p_comportamental.evaluacion_p_id"] = array();
		}
		$lookupTableLinks["evaluacion_p"]["evaluacion_p_comportamental.evaluacion_p_id"]["edit"] = array("table" => "evaluacion_p_comportamental", "field" => "evaluacion_p_id", "page" => "edit");
		if( !isset( $lookupTableLinks["comportamental"] ) ) {
			$lookupTableLinks["comportamental"] = array();
		}
		if( !isset( $lookupTableLinks["comportamental"]["evaluacion_p_comportamental.idComportamental"] )) {
			$lookupTableLinks["comportamental"]["evaluacion_p_comportamental.idComportamental"] = array();
		}
		$lookupTableLinks["comportamental"]["evaluacion_p_comportamental.idComportamental"]["edit"] = array("table" => "evaluacion_p_comportamental", "field" => "idComportamental", "page" => "edit");
		if( !isset( $lookupTableLinks["competencia"] ) ) {
			$lookupTableLinks["competencia"] = array();
		}
		if( !isset( $lookupTableLinks["competencia"]["evaluacion_p_comportamental.idCompetencia"] )) {
			$lookupTableLinks["competencia"]["evaluacion_p_comportamental.idCompetencia"] = array();
		}
		$lookupTableLinks["competencia"]["evaluacion_p_comportamental.idCompetencia"]["edit"] = array("table" => "evaluacion_p_comportamental", "field" => "idCompetencia", "page" => "edit");
		if( !isset( $lookupTableLinks["conducta"] ) ) {
			$lookupTableLinks["conducta"] = array();
		}
		if( !isset( $lookupTableLinks["conducta"]["evaluacion_p_comportamental.idConducta"] )) {
			$lookupTableLinks["conducta"]["evaluacion_p_comportamental.idConducta"] = array();
		}
		$lookupTableLinks["conducta"]["evaluacion_p_comportamental.idConducta"]["edit"] = array("table" => "evaluacion_p_comportamental", "field" => "idConducta", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_puntaje"] ) ) {
			$lookupTableLinks["tparam_puntaje"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_puntaje"]["evaluacion_p_comportamental.evalparfun_cal"] )) {
			$lookupTableLinks["tparam_puntaje"]["evaluacion_p_comportamental.evalparfun_cal"] = array();
		}
		$lookupTableLinks["tparam_puntaje"]["evaluacion_p_comportamental.evalparfun_cal"]["edit"] = array("table" => "evaluacion_p_comportamental", "field" => "evalparfun_cal", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_estados_calificacion"] ) ) {
			$lookupTableLinks["tparam_estados_calificacion"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_estados_calificacion"]["evaluacion_p_comportamental.sysst"] )) {
			$lookupTableLinks["tparam_estados_calificacion"]["evaluacion_p_comportamental.sysst"] = array();
		}
		$lookupTableLinks["tparam_estados_calificacion"]["evaluacion_p_comportamental.sysst"]["edit"] = array("table" => "evaluacion_p_comportamental", "field" => "sysst", "page" => "edit");
		if( !isset( $lookupTableLinks["evaluacion_p"] ) ) {
			$lookupTableLinks["evaluacion_p"] = array();
		}
		if( !isset( $lookupTableLinks["evaluacion_p"]["evaluacion_p_funcional.id_eval_fk"] )) {
			$lookupTableLinks["evaluacion_p"]["evaluacion_p_funcional.id_eval_fk"] = array();
		}
		$lookupTableLinks["evaluacion_p"]["evaluacion_p_funcional.id_eval_fk"]["edit"] = array("table" => "evaluacion_p_funcional", "field" => "id_eval_fk", "page" => "edit");
		if( !isset( $lookupTableLinks["evaluacion_p"] ) ) {
			$lookupTableLinks["evaluacion_p"] = array();
		}
		if( !isset( $lookupTableLinks["evaluacion_p"]["evaluacion_p_funcional.eval_funcional_id"] )) {
			$lookupTableLinks["evaluacion_p"]["evaluacion_p_funcional.eval_funcional_id"] = array();
		}
		$lookupTableLinks["evaluacion_p"]["evaluacion_p_funcional.eval_funcional_id"]["edit"] = array("table" => "evaluacion_p_funcional", "field" => "eval_funcional_id", "page" => "edit");
		if( !isset( $lookupTableLinks["compromisofuncional"] ) ) {
			$lookupTableLinks["compromisofuncional"] = array();
		}
		if( !isset( $lookupTableLinks["compromisofuncional"]["evaluacion_p_funcional.eval_id_fk"] )) {
			$lookupTableLinks["compromisofuncional"]["evaluacion_p_funcional.eval_id_fk"] = array();
		}
		$lookupTableLinks["compromisofuncional"]["evaluacion_p_funcional.eval_id_fk"]["edit"] = array("table" => "evaluacion_p_funcional", "field" => "eval_id_fk", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_estados_calificacion"] ) ) {
			$lookupTableLinks["tparam_estados_calificacion"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_estados_calificacion"]["evaluacion_p_funcional.sysst"] )) {
			$lookupTableLinks["tparam_estados_calificacion"]["evaluacion_p_funcional.sysst"] = array();
		}
		$lookupTableLinks["tparam_estados_calificacion"]["evaluacion_p_funcional.sysst"]["edit"] = array("table" => "evaluacion_p_funcional", "field" => "sysst", "page" => "edit");
		if( !isset( $lookupTableLinks["evaluacion"] ) ) {
			$lookupTableLinks["evaluacion"] = array();
		}
		if( !isset( $lookupTableLinks["evaluacion"]["evaluacion_p.evaluacion_id_fk"] )) {
			$lookupTableLinks["evaluacion"]["evaluacion_p.evaluacion_id_fk"] = array();
		}
		$lookupTableLinks["evaluacion"]["evaluacion_p.evaluacion_id_fk"]["edit"] = array("table" => "evaluacion_p", "field" => "evaluacion_id_fk", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_vigencia"] ) ) {
			$lookupTableLinks["tparam_vigencia"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_vigencia"]["evaluacion_p.vigencia"] )) {
			$lookupTableLinks["tparam_vigencia"]["evaluacion_p.vigencia"] = array();
		}
		$lookupTableLinks["tparam_vigencia"]["evaluacion_p.vigencia"]["edit"] = array("table" => "evaluacion_p", "field" => "vigencia", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_periodo"] ) ) {
			$lookupTableLinks["tparam_periodo"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_periodo"]["evaluacion_p.periodo"] )) {
			$lookupTableLinks["tparam_periodo"]["evaluacion_p.periodo"] = array();
		}
		$lookupTableLinks["tparam_periodo"]["evaluacion_p.periodo"]["edit"] = array("table" => "evaluacion_p", "field" => "periodo", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_vigencia_eval"] ) ) {
			$lookupTableLinks["tparam_vigencia_eval"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_vigencia_eval"]["evaluacion_p.id_eval_vigencia_fk"] )) {
			$lookupTableLinks["tparam_vigencia_eval"]["evaluacion_p.id_eval_vigencia_fk"] = array();
		}
		$lookupTableLinks["tparam_vigencia_eval"]["evaluacion_p.id_eval_vigencia_fk"]["edit"] = array("table" => "evaluacion_p", "field" => "id_eval_vigencia_fk", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_estados_eval"] ) ) {
			$lookupTableLinks["tparam_estados_eval"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_estados_eval"]["evaluacion_p.estado"] )) {
			$lookupTableLinks["tparam_estados_eval"]["evaluacion_p.estado"] = array();
		}
		$lookupTableLinks["tparam_estados_eval"]["evaluacion_p.estado"]["edit"] = array("table" => "evaluacion_p", "field" => "estado", "page" => "edit");
		if( !isset( $lookupTableLinks["evaluacion_p"] ) ) {
			$lookupTableLinks["evaluacion_p"] = array();
		}
		if( !isset( $lookupTableLinks["evaluacion_p"]["evidencias_p.evaluacion_id_fk"] )) {
			$lookupTableLinks["evaluacion_p"]["evidencias_p.evaluacion_id_fk"] = array();
		}
		$lookupTableLinks["evaluacion_p"]["evidencias_p.evaluacion_id_fk"]["edit"] = array("table" => "evidencias_p", "field" => "evaluacion_id_fk", "page" => "edit");
		if( !isset( $lookupTableLinks["evaluacion"] ) ) {
			$lookupTableLinks["evaluacion"] = array();
		}
		if( !isset( $lookupTableLinks["evaluacion"]["evaluacion_seguimiento.id_radicado_fk"] )) {
			$lookupTableLinks["evaluacion"]["evaluacion_seguimiento.id_radicado_fk"] = array();
		}
		$lookupTableLinks["evaluacion"]["evaluacion_seguimiento.id_radicado_fk"]["edit"] = array("table" => "evaluacion_seguimiento", "field" => "id_radicado_fk", "page" => "edit");
		if( !isset( $lookupTableLinks["q_global_evaluadores"] ) ) {
			$lookupTableLinks["q_global_evaluadores"] = array();
		}
		if( !isset( $lookupTableLinks["q_global_evaluadores"]["q_caldef_p_x005.idEvaluador"] )) {
			$lookupTableLinks["q_global_evaluadores"]["q_caldef_p_x005.idEvaluador"] = array();
		}
		$lookupTableLinks["q_global_evaluadores"]["q_caldef_p_x005.idEvaluador"]["edit"] = array("table" => "q_caldef_p_x005", "field" => "idEvaluador", "page" => "edit");
		if( !isset( $lookupTableLinks["q_global_evaluadores"] ) ) {
			$lookupTableLinks["q_global_evaluadores"] = array();
		}
		if( !isset( $lookupTableLinks["q_global_evaluadores"]["evaluacion_x005.idEvaluador"] )) {
			$lookupTableLinks["q_global_evaluadores"]["evaluacion_x005.idEvaluador"] = array();
		}
		$lookupTableLinks["q_global_evaluadores"]["evaluacion_x005.idEvaluador"]["edit"] = array("table" => "evaluacion_x005", "field" => "idEvaluador", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_estados"] ) ) {
			$lookupTableLinks["tparam_estados"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_estados"]["evaluacion_x005.idEvaluadorFinal"] )) {
			$lookupTableLinks["tparam_estados"]["evaluacion_x005.idEvaluadorFinal"] = array();
		}
		$lookupTableLinks["tparam_estados"]["evaluacion_x005.idEvaluadorFinal"]["edit"] = array("table" => "evaluacion_x005", "field" => "idEvaluadorFinal", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_vigencia"] ) ) {
			$lookupTableLinks["tparam_vigencia"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_vigencia"]["evaluacion_x005.vigencia"] )) {
			$lookupTableLinks["tparam_vigencia"]["evaluacion_x005.vigencia"] = array();
		}
		$lookupTableLinks["tparam_vigencia"]["evaluacion_x005.vigencia"]["edit"] = array("table" => "evaluacion_x005", "field" => "vigencia", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_periodo"] ) ) {
			$lookupTableLinks["tparam_periodo"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_periodo"]["evaluacion_x005.periodo"] )) {
			$lookupTableLinks["tparam_periodo"]["evaluacion_x005.periodo"] = array();
		}
		$lookupTableLinks["tparam_periodo"]["evaluacion_x005.periodo"]["edit"] = array("table" => "evaluacion_x005", "field" => "periodo", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_estados_eval"] ) ) {
			$lookupTableLinks["tparam_estados_eval"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_estados_eval"]["evaluacion_x005.estado"] )) {
			$lookupTableLinks["tparam_estados_eval"]["evaluacion_x005.estado"] = array();
		}
		$lookupTableLinks["tparam_estados_eval"]["evaluacion_x005.estado"]["edit"] = array("table" => "evaluacion_x005", "field" => "estado", "page" => "edit");
		if( !isset( $lookupTableLinks["funcionario"] ) ) {
			$lookupTableLinks["funcionario"] = array();
		}
		if( !isset( $lookupTableLinks["funcionario"]["calificacion_definitiva.idEvaluado"] )) {
			$lookupTableLinks["funcionario"]["calificacion_definitiva.idEvaluado"] = array();
		}
		$lookupTableLinks["funcionario"]["calificacion_definitiva.idEvaluado"]["edit"] = array("table" => "calificacion_definitiva", "field" => "idEvaluado", "page" => "edit");
		if( !isset( $lookupTableLinks["dependencia"] ) ) {
			$lookupTableLinks["dependencia"] = array();
		}
		if( !isset( $lookupTableLinks["dependencia"]["funcionario.idDependencia"] )) {
			$lookupTableLinks["dependencia"]["funcionario.idDependencia"] = array();
		}
		$lookupTableLinks["dependencia"]["funcionario.idDependencia"]["edit"] = array("table" => "funcionario", "field" => "idDependencia", "page" => "edit");
		if( !isset( $lookupTableLinks["funcionario"] ) ) {
			$lookupTableLinks["funcionario"] = array();
		}
		if( !isset( $lookupTableLinks["funcionario"]["q_caldef_p_x005_adm.idEvaluado"] )) {
			$lookupTableLinks["funcionario"]["q_caldef_p_x005_adm.idEvaluado"] = array();
		}
		$lookupTableLinks["funcionario"]["q_caldef_p_x005_adm.idEvaluado"]["edit"] = array("table" => "q_caldef_p_x005_adm", "field" => "idEvaluado", "page" => "edit");
		if( !isset( $lookupTableLinks["q_global_evaluadores"] ) ) {
			$lookupTableLinks["q_global_evaluadores"] = array();
		}
		if( !isset( $lookupTableLinks["q_global_evaluadores"]["q_caldef_p_x005_adm.idEvaluador"] )) {
			$lookupTableLinks["q_global_evaluadores"]["q_caldef_p_x005_adm.idEvaluador"] = array();
		}
		$lookupTableLinks["q_global_evaluadores"]["q_caldef_p_x005_adm.idEvaluador"]["edit"] = array("table" => "q_caldef_p_x005_adm", "field" => "idEvaluador", "page" => "edit");
		if( !isset( $lookupTableLinks["evaluacion"] ) ) {
			$lookupTableLinks["evaluacion"] = array();
		}
		if( !isset( $lookupTableLinks["evaluacion"]["evaluacion_p_th.evaluacion_id_fk"] )) {
			$lookupTableLinks["evaluacion"]["evaluacion_p_th.evaluacion_id_fk"] = array();
		}
		$lookupTableLinks["evaluacion"]["evaluacion_p_th.evaluacion_id_fk"]["edit"] = array("table" => "evaluacion_p_th", "field" => "evaluacion_id_fk", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_vigencia"] ) ) {
			$lookupTableLinks["tparam_vigencia"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_vigencia"]["evaluacion_p_th.vigencia"] )) {
			$lookupTableLinks["tparam_vigencia"]["evaluacion_p_th.vigencia"] = array();
		}
		$lookupTableLinks["tparam_vigencia"]["evaluacion_p_th.vigencia"]["edit"] = array("table" => "evaluacion_p_th", "field" => "vigencia", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_periodo"] ) ) {
			$lookupTableLinks["tparam_periodo"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_periodo"]["evaluacion_p_th.periodo"] )) {
			$lookupTableLinks["tparam_periodo"]["evaluacion_p_th.periodo"] = array();
		}
		$lookupTableLinks["tparam_periodo"]["evaluacion_p_th.periodo"]["edit"] = array("table" => "evaluacion_p_th", "field" => "periodo", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_vigencia_eval"] ) ) {
			$lookupTableLinks["tparam_vigencia_eval"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_vigencia_eval"]["evaluacion_p_th.id_eval_vigencia_fk"] )) {
			$lookupTableLinks["tparam_vigencia_eval"]["evaluacion_p_th.id_eval_vigencia_fk"] = array();
		}
		$lookupTableLinks["tparam_vigencia_eval"]["evaluacion_p_th.id_eval_vigencia_fk"]["edit"] = array("table" => "evaluacion_p_th", "field" => "id_eval_vigencia_fk", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_estados_evaluacion_p"] ) ) {
			$lookupTableLinks["tparam_estados_evaluacion_p"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_estados_evaluacion_p"]["evaluacion_p_th.estado"] )) {
			$lookupTableLinks["tparam_estados_evaluacion_p"]["evaluacion_p_th.estado"] = array();
		}
		$lookupTableLinks["tparam_estados_evaluacion_p"]["evaluacion_p_th.estado"]["edit"] = array("table" => "evaluacion_p_th", "field" => "estado", "page" => "edit");
		if( !isset( $lookupTableLinks["evaluacion_p"] ) ) {
			$lookupTableLinks["evaluacion_p"] = array();
		}
		if( !isset( $lookupTableLinks["evaluacion_p"]["evaluacion_p_funcional_th.id_eval_fk"] )) {
			$lookupTableLinks["evaluacion_p"]["evaluacion_p_funcional_th.id_eval_fk"] = array();
		}
		$lookupTableLinks["evaluacion_p"]["evaluacion_p_funcional_th.id_eval_fk"]["edit"] = array("table" => "evaluacion_p_funcional_th", "field" => "id_eval_fk", "page" => "edit");
		if( !isset( $lookupTableLinks["evaluacion_p"] ) ) {
			$lookupTableLinks["evaluacion_p"] = array();
		}
		if( !isset( $lookupTableLinks["evaluacion_p"]["evaluacion_p_funcional_th.eval_funcional_id"] )) {
			$lookupTableLinks["evaluacion_p"]["evaluacion_p_funcional_th.eval_funcional_id"] = array();
		}
		$lookupTableLinks["evaluacion_p"]["evaluacion_p_funcional_th.eval_funcional_id"]["edit"] = array("table" => "evaluacion_p_funcional_th", "field" => "eval_funcional_id", "page" => "edit");
		if( !isset( $lookupTableLinks["compromisofuncional"] ) ) {
			$lookupTableLinks["compromisofuncional"] = array();
		}
		if( !isset( $lookupTableLinks["compromisofuncional"]["evaluacion_p_funcional_th.eval_id_fk"] )) {
			$lookupTableLinks["compromisofuncional"]["evaluacion_p_funcional_th.eval_id_fk"] = array();
		}
		$lookupTableLinks["compromisofuncional"]["evaluacion_p_funcional_th.eval_id_fk"]["edit"] = array("table" => "evaluacion_p_funcional_th", "field" => "eval_id_fk", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_estados_calificacion"] ) ) {
			$lookupTableLinks["tparam_estados_calificacion"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_estados_calificacion"]["evaluacion_p_funcional_th.sysst"] )) {
			$lookupTableLinks["tparam_estados_calificacion"]["evaluacion_p_funcional_th.sysst"] = array();
		}
		$lookupTableLinks["tparam_estados_calificacion"]["evaluacion_p_funcional_th.sysst"]["edit"] = array("table" => "evaluacion_p_funcional_th", "field" => "sysst", "page" => "edit");
		if( !isset( $lookupTableLinks["evaluacion_p"] ) ) {
			$lookupTableLinks["evaluacion_p"] = array();
		}
		if( !isset( $lookupTableLinks["evaluacion_p"]["evaluacion_p_comportamental_th.id_eval_fk"] )) {
			$lookupTableLinks["evaluacion_p"]["evaluacion_p_comportamental_th.id_eval_fk"] = array();
		}
		$lookupTableLinks["evaluacion_p"]["evaluacion_p_comportamental_th.id_eval_fk"]["edit"] = array("table" => "evaluacion_p_comportamental_th", "field" => "id_eval_fk", "page" => "edit");
		if( !isset( $lookupTableLinks["evaluacion_p"] ) ) {
			$lookupTableLinks["evaluacion_p"] = array();
		}
		if( !isset( $lookupTableLinks["evaluacion_p"]["evaluacion_p_comportamental_th.evaluacion_p_id"] )) {
			$lookupTableLinks["evaluacion_p"]["evaluacion_p_comportamental_th.evaluacion_p_id"] = array();
		}
		$lookupTableLinks["evaluacion_p"]["evaluacion_p_comportamental_th.evaluacion_p_id"]["edit"] = array("table" => "evaluacion_p_comportamental_th", "field" => "evaluacion_p_id", "page" => "edit");
		if( !isset( $lookupTableLinks["comportamental"] ) ) {
			$lookupTableLinks["comportamental"] = array();
		}
		if( !isset( $lookupTableLinks["comportamental"]["evaluacion_p_comportamental_th.idComportamental"] )) {
			$lookupTableLinks["comportamental"]["evaluacion_p_comportamental_th.idComportamental"] = array();
		}
		$lookupTableLinks["comportamental"]["evaluacion_p_comportamental_th.idComportamental"]["edit"] = array("table" => "evaluacion_p_comportamental_th", "field" => "idComportamental", "page" => "edit");
		if( !isset( $lookupTableLinks["competencia"] ) ) {
			$lookupTableLinks["competencia"] = array();
		}
		if( !isset( $lookupTableLinks["competencia"]["evaluacion_p_comportamental_th.idCompetencia"] )) {
			$lookupTableLinks["competencia"]["evaluacion_p_comportamental_th.idCompetencia"] = array();
		}
		$lookupTableLinks["competencia"]["evaluacion_p_comportamental_th.idCompetencia"]["edit"] = array("table" => "evaluacion_p_comportamental_th", "field" => "idCompetencia", "page" => "edit");
		if( !isset( $lookupTableLinks["conducta"] ) ) {
			$lookupTableLinks["conducta"] = array();
		}
		if( !isset( $lookupTableLinks["conducta"]["evaluacion_p_comportamental_th.idConducta"] )) {
			$lookupTableLinks["conducta"]["evaluacion_p_comportamental_th.idConducta"] = array();
		}
		$lookupTableLinks["conducta"]["evaluacion_p_comportamental_th.idConducta"]["edit"] = array("table" => "evaluacion_p_comportamental_th", "field" => "idConducta", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_puntaje"] ) ) {
			$lookupTableLinks["tparam_puntaje"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_puntaje"]["evaluacion_p_comportamental_th.evalparfun_cal"] )) {
			$lookupTableLinks["tparam_puntaje"]["evaluacion_p_comportamental_th.evalparfun_cal"] = array();
		}
		$lookupTableLinks["tparam_puntaje"]["evaluacion_p_comportamental_th.evalparfun_cal"]["edit"] = array("table" => "evaluacion_p_comportamental_th", "field" => "evalparfun_cal", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_estados_calificacion"] ) ) {
			$lookupTableLinks["tparam_estados_calificacion"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_estados_calificacion"]["evaluacion_p_comportamental_th.sysst"] )) {
			$lookupTableLinks["tparam_estados_calificacion"]["evaluacion_p_comportamental_th.sysst"] = array();
		}
		$lookupTableLinks["tparam_estados_calificacion"]["evaluacion_p_comportamental_th.sysst"]["edit"] = array("table" => "evaluacion_p_comportamental_th", "field" => "sysst", "page" => "edit");
		if( !isset( $lookupTableLinks["evaluacion_p"] ) ) {
			$lookupTableLinks["evaluacion_p"] = array();
		}
		if( !isset( $lookupTableLinks["evaluacion_p"]["evidencias_p_th.evaluacion_id_fk"] )) {
			$lookupTableLinks["evaluacion_p"]["evidencias_p_th.evaluacion_id_fk"] = array();
		}
		$lookupTableLinks["evaluacion_p"]["evidencias_p_th.evaluacion_id_fk"]["edit"] = array("table" => "evidencias_p_th", "field" => "evaluacion_id_fk", "page" => "edit");
		if( !isset( $lookupTableLinks["funcionario"] ) ) {
			$lookupTableLinks["funcionario"] = array();
		}
		if( !isset( $lookupTableLinks["funcionario"]["evaluador_final.idEvaluado"] )) {
			$lookupTableLinks["funcionario"]["evaluador_final.idEvaluado"] = array();
		}
		$lookupTableLinks["funcionario"]["evaluador_final.idEvaluado"]["edit"] = array("table" => "evaluador_final", "field" => "idEvaluado", "page" => "edit");
		if( !isset( $lookupTableLinks["q_global_evaluadores"] ) ) {
			$lookupTableLinks["q_global_evaluadores"] = array();
		}
		if( !isset( $lookupTableLinks["q_global_evaluadores"]["evaluador_final.idEvaluador"] )) {
			$lookupTableLinks["q_global_evaluadores"]["evaluador_final.idEvaluador"] = array();
		}
		$lookupTableLinks["q_global_evaluadores"]["evaluador_final.idEvaluador"]["edit"] = array("table" => "evaluador_final", "field" => "idEvaluador", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_estados"] ) ) {
			$lookupTableLinks["tparam_estados"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_estados"]["evaluador_final.signed"] )) {
			$lookupTableLinks["tparam_estados"]["evaluador_final.signed"] = array();
		}
		$lookupTableLinks["tparam_estados"]["evaluador_final.signed"]["edit"] = array("table" => "evaluador_final", "field" => "signed", "page" => "edit");
		if( !isset( $lookupTableLinks["funcionario"] ) ) {
			$lookupTableLinks["funcionario"] = array();
		}
		if( !isset( $lookupTableLinks["funcionario"]["q_caldef_p_x005_evaluador.idEvaluado"] )) {
			$lookupTableLinks["funcionario"]["q_caldef_p_x005_evaluador.idEvaluado"] = array();
		}
		$lookupTableLinks["funcionario"]["q_caldef_p_x005_evaluador.idEvaluado"]["edit"] = array("table" => "q_caldef_p_x005_evaluador", "field" => "idEvaluado", "page" => "edit");
		if( !isset( $lookupTableLinks["q_global_evaluadores"] ) ) {
			$lookupTableLinks["q_global_evaluadores"] = array();
		}
		if( !isset( $lookupTableLinks["q_global_evaluadores"]["q_caldef_p_x005_evaluador.idEvaluador"] )) {
			$lookupTableLinks["q_global_evaluadores"]["q_caldef_p_x005_evaluador.idEvaluador"] = array();
		}
		$lookupTableLinks["q_global_evaluadores"]["q_caldef_p_x005_evaluador.idEvaluador"]["edit"] = array("table" => "q_caldef_p_x005_evaluador", "field" => "idEvaluador", "page" => "edit");
		if( !isset( $lookupTableLinks["cargo"] ) ) {
			$lookupTableLinks["cargo"] = array();
		}
		if( !isset( $lookupTableLinks["cargo"]["funcionario_adm.idCargo"] )) {
			$lookupTableLinks["cargo"]["funcionario_adm.idCargo"] = array();
		}
		$lookupTableLinks["cargo"]["funcionario_adm.idCargo"]["edit"] = array("table" => "funcionario_adm", "field" => "idCargo", "page" => "edit");
		if( !isset( $lookupTableLinks["dependencia"] ) ) {
			$lookupTableLinks["dependencia"] = array();
		}
		if( !isset( $lookupTableLinks["dependencia"]["funcionario_adm.idDependencia"] )) {
			$lookupTableLinks["dependencia"]["funcionario_adm.idDependencia"] = array();
		}
		$lookupTableLinks["dependencia"]["funcionario_adm.idDependencia"]["edit"] = array("table" => "funcionario_adm", "field" => "idDependencia", "page" => "edit");
		if( !isset( $lookupTableLinks["contrato"] ) ) {
			$lookupTableLinks["contrato"] = array();
		}
		if( !isset( $lookupTableLinks["contrato"]["funcionario_adm.idContrato"] )) {
			$lookupTableLinks["contrato"]["funcionario_adm.idContrato"] = array();
		}
		$lookupTableLinks["contrato"]["funcionario_adm.idContrato"]["edit"] = array("table" => "funcionario_adm", "field" => "idContrato", "page" => "edit");
		if( !isset( $lookupTableLinks["nombramiento"] ) ) {
			$lookupTableLinks["nombramiento"] = array();
		}
		if( !isset( $lookupTableLinks["nombramiento"]["funcionario_adm.idNombramiento"] )) {
			$lookupTableLinks["nombramiento"]["funcionario_adm.idNombramiento"] = array();
		}
		$lookupTableLinks["nombramiento"]["funcionario_adm.idNombramiento"]["edit"] = array("table" => "funcionario_adm", "field" => "idNombramiento", "page" => "edit");
		if( !isset( $lookupTableLinks["perfil"] ) ) {
			$lookupTableLinks["perfil"] = array();
		}
		if( !isset( $lookupTableLinks["perfil"]["usuario_adm.idPerfil"] )) {
			$lookupTableLinks["perfil"]["usuario_adm.idPerfil"] = array();
		}
		$lookupTableLinks["perfil"]["usuario_adm.idPerfil"]["edit"] = array("table" => "usuario_adm", "field" => "idPerfil", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_estados"] ) ) {
			$lookupTableLinks["tparam_estados"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_estados"]["usuario_adm.active"] )) {
			$lookupTableLinks["tparam_estados"]["usuario_adm.active"] = array();
		}
		$lookupTableLinks["tparam_estados"]["usuario_adm.active"]["edit"] = array("table" => "usuario_adm", "field" => "active", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_estados"] ) ) {
			$lookupTableLinks["tparam_estados"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_estados"]["cargo_adm.estado"] )) {
			$lookupTableLinks["tparam_estados"]["cargo_adm.estado"] = array();
		}
		$lookupTableLinks["tparam_estados"]["cargo_adm.estado"]["edit"] = array("table" => "cargo_adm", "field" => "estado", "page" => "edit");
		if( !isset( $lookupTableLinks["comportamental"] ) ) {
			$lookupTableLinks["comportamental"] = array();
		}
		if( !isset( $lookupTableLinks["comportamental"]["cargo_adm.idComportamentalFK"] )) {
			$lookupTableLinks["comportamental"]["cargo_adm.idComportamentalFK"] = array();
		}
		$lookupTableLinks["comportamental"]["cargo_adm.idComportamentalFK"]["edit"] = array("table" => "cargo_adm", "field" => "idComportamentalFK", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_sn"] ) ) {
			$lookupTableLinks["tparam_sn"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_sn"]["cargo_adm.Directivo"] )) {
			$lookupTableLinks["tparam_sn"]["cargo_adm.Directivo"] = array();
		}
		$lookupTableLinks["tparam_sn"]["cargo_adm.Directivo"]["edit"] = array("table" => "cargo_adm", "field" => "Directivo", "page" => "edit");
		if( !isset( $lookupTableLinks["dependencias_sup_adm"] ) ) {
			$lookupTableLinks["dependencias_sup_adm"] = array();
		}
		if( !isset( $lookupTableLinks["dependencias_sup_adm"]["dependencia_adm.id"] )) {
			$lookupTableLinks["dependencias_sup_adm"]["dependencia_adm.id"] = array();
		}
		$lookupTableLinks["dependencias_sup_adm"]["dependencia_adm.id"]["edit"] = array("table" => "dependencia_adm", "field" => "id", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_sn"] ) ) {
			$lookupTableLinks["tparam_sn"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_sn"]["dependencia_adm.estado"] )) {
			$lookupTableLinks["tparam_sn"]["dependencia_adm.estado"] = array();
		}
		$lookupTableLinks["tparam_sn"]["dependencia_adm.estado"]["edit"] = array("table" => "dependencia_adm", "field" => "estado", "page" => "edit");
		if( !isset( $lookupTableLinks["dependencias_001"] ) ) {
			$lookupTableLinks["dependencias_001"] = array();
		}
		if( !isset( $lookupTableLinks["dependencias_001"]["dependencia_adm.id_depto_superior"] )) {
			$lookupTableLinks["dependencias_001"]["dependencia_adm.id_depto_superior"] = array();
		}
		$lookupTableLinks["dependencias_001"]["dependencia_adm.id_depto_superior"]["edit"] = array("table" => "dependencia_adm", "field" => "id_depto_superior", "page" => "edit");
}

?>