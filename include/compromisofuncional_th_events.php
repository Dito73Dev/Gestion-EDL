<?php

/**
 * 	Dear developer!
 *	Never modify events.php file, it is autogenerated.
 *  Modify PHP/EventTemplates/events.txt instead.
 *
 */

 class eventclass_compromisofuncional_th  extends eventsBase
{
	function __construct()
	{
	// fill list of events
		$this->events["BeforeAdd"]=true;



		$this->events["AfterAdd"]=true;

		$this->events["AfterEdit"]=true;

		$this->events["AfterDelete"]=true;


	}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before record added
function BeforeAdd(&$values, &$sqlValues, &$message, $inline, $pageObject)
{

		if($values['valorAcordado'] > $values['Valorpendiente']){
$message = "El valor solicitado del acuerdo, supera el valor permitido, ajuste el valor antes de continuar";
$return = false;
}
else 
{
return true;
}

;		
} // function BeforeAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// After record added
function AfterAdd(&$values, &$keys, $inline, $pageObject)
{

		$sql = "UPDATE
	edl_sp.evaluacion
	INNER JOIN
	edl_sp.q_edl2_ctrl_valor_af_002
	ON 
		edl_sp.evaluacion.id = edl_sp.q_edl2_ctrl_valor_af_002.radicado
			SET
	edl_sp.evaluacion.valor_programado =	edl_sp.q_edl2_ctrl_valor_af_002.valor_proyectado;";
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

		$sql = "UPDATE
	edl_sp.evaluacion
	INNER JOIN
	edl_sp.q_edl2_ctrl_valor_af_002
	ON 
		edl_sp.evaluacion.id = edl_sp.q_edl2_ctrl_valor_af_002.radicado
			SET
	edl_sp.evaluacion.valor_programado =	edl_sp.q_edl2_ctrl_valor_af_002.valor_proyectado;";
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

		$sql = "UPDATE
	edl_sp.evaluacion
	INNER JOIN
	edl_sp.q_edl2_ctrl_valor_af_002
	ON 
		edl_sp.evaluacion.id = edl_sp.q_edl2_ctrl_valor_af_002.radicado
			SET
	edl_sp.evaluacion.valor_programado =	edl_sp.q_edl2_ctrl_valor_af_002.valor_proyectado;";
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
