<?php

/**
 * 	Dear developer!
 *	Never modify events.php file, it is autogenerated.
 *  Modify PHP/EventTemplates/events.txt instead.
 *
 */

 class eventclass_concertacion_th  extends eventsBase
{
	function __construct()
	{
	// fill list of events


		$this->events["BeforeMoveNextList"]=true;


	}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// List page: After record processed
function BeforeMoveNextList(&$data, &$row, &$record, $recordId, $pageObject)
{

		// Atualiza el valor en acuerdos funcionales
$sql = "UPDATE
	edl_sp.evaluacion
	INNER JOIN
	edl_sp.q_edl2_ctrl_valor_af_002
	ON 
		edl_sp.evaluacion.id = edl_sp.q_edl2_ctrl_valor_af_002.radicado
			SET
	edl_sp.evaluacion.valor_programado =	edl_sp.q_edl2_ctrl_valor_af_002.valor_proyectado;";
CustomQuery($sql);

// Atualiza el valor en acuerdos comportamental comun

$sql = "UPDATE
	edl_sp.evaluacion
	INNER JOIN
	edl_sp.q_edl2_ctrl_valor_ac_000
	ON 
		edl_sp.evaluacion.id = edl_sp.q_edl2_ctrl_valor_ac_000.idEvaluacion_FK
		SET
	edl_sp.evaluacion.valor_comun =	edl_sp.q_edl2_ctrl_valor_ac_000.qty_comun;";
CustomQuery($sql);

// Atualiza el valor en acuerdos comportamental jerarquico

$sql = "UPDATE edl_sp.evaluacion
INNER JOIN edl_sp.q_edl2_ctrl_valor_aj_000 ON edl_sp.evaluacion.id = edl_sp.q_edl2_ctrl_valor_aj_000.idEvaluacion_FK 
SET edl_sp.evaluacion.valor_jerarquico = edl_sp.q_edl2_ctrl_valor_aj_000.qty_jerarquica;";
CustomQuery($sql);

// Atualiza el valor total de concertación

$sql = "UPDATE
	edl_sp.evaluacion
	SET
	edl_sp.evaluacion.valor_total = (edl_sp.evaluacion.valor_programado + edl_sp.evaluacion.valor_comun + edl_sp.evaluacion.valor_jerarquico);";
CustomQuery($sql);


/*
// estado de la solicitud
if ($data['valor_total'] != 106){
        $pageObject->hideItem("BtnEnviaConcert", $recordId);
        $pageObject->showItem("grid_edit", $recordId);  
}

if ($data['valor_total'] == 106){
	//$pageObject->hideItem("grid_edit", $recordId);
	$pageObject->showItem("BtnEnviaConcert", $recordId);
	$pageObject->hideItem("grid_checkbox", $recordId);  
}
*/
// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function BeforeMoveNextList

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		



}
?>
