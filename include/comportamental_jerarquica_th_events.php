<?php

/**
 * 	Dear developer!
 *	Never modify events.php file, it is autogenerated.
 *  Modify PHP/EventTemplates/events.txt instead.
 *
 */

 class eventclass_comportamental_jerarquica_th  extends eventsBase
{
	function __construct()
	{
	// fill list of events


		$this->events["AfterAdd"]=true;

		$this->events["AfterEdit"]=true;

		$this->events["AfterDelete"]=true;


	}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// After record added
function AfterAdd(&$values, &$keys, $inline, $pageObject)
{

		$sql = "UPDATE edl_sp.evaluacion
INNER JOIN edl_sp.q_edl2_ctrl_valor_aj_001 ON edl_sp.evaluacion.id = edl_sp.q_edl2_ctrl_valor_aj_001.id 
SET edl_sp.evaluacion.valor_jerarquico = edl_sp.q_edl2_ctrl_valor_aj_001.qty_jerarquica;";
CustomQuery($sql);

// Atualiza el valor total de concertación

$sql = "UPDATE
	edl_sp.evaluacion
	SET
	edl_sp.evaluacion.valor_total = (edl_sp.evaluacion.valor_programado + edl_sp.evaluacion.valor_comun + edl_sp.evaluacion.valor_jerarquico);";
CustomQuery($sql);

// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function AfterAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// After record updated
function AfterEdit(&$values, $where, &$oldvalues, &$keys, $inline, $pageObject)
{

		$sql = "UPDATE edl_sp.evaluacion
INNER JOIN edl_sp.q_edl2_ctrl_valor_aj_001 ON edl_sp.evaluacion.id = edl_sp.q_edl2_ctrl_valor_aj_001.id 
SET edl_sp.evaluacion.valor_jerarquico = edl_sp.q_edl2_ctrl_valor_aj_001.qty_jerarquica;";
CustomQuery($sql);

// Atualiza el valor total de concertación

$sql = "UPDATE
	edl_sp.evaluacion
	SET
	edl_sp.evaluacion.valor_total = (edl_sp.evaluacion.valor_programado + edl_sp.evaluacion.valor_comun + edl_sp.evaluacion.valor_jerarquico);";
CustomQuery($sql);

// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function AfterEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// After record deleted
function AfterDelete($where, &$deleted_values, &$message, $pageObject)
{

		$sql = "UPDATE edl_sp.evaluacion
INNER JOIN edl_sp.q_edl2_ctrl_valor_aj_001 ON edl_sp.evaluacion.id = edl_sp.q_edl2_ctrl_valor_aj_001.id 
SET edl_sp.evaluacion.valor_jerarquico = edl_sp.q_edl2_ctrl_valor_aj_001.qty_jerarquica;";
CustomQuery($sql);

// Atualiza el valor total de concertación

$sql = "UPDATE
	edl_sp.evaluacion
	SET
	edl_sp.evaluacion.valor_total = (edl_sp.evaluacion.valor_programado + edl_sp.evaluacion.valor_comun + edl_sp.evaluacion.valor_jerarquico);";
CustomQuery($sql);

// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function AfterDelete

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		



}
?>
