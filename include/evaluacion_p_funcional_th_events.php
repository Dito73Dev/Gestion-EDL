<?php

/**
 * 	Dear developer!
 *	Never modify events.php file, it is autogenerated.
 *  Modify PHP/EventTemplates/events.txt instead.
 *
 */

 class eventclass_evaluacion_p_funcional_th  extends eventsBase
{
	function __construct()
	{
	// fill list of events

		$this->events["AfterEdit"]=true;


	}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// After record updated
function AfterEdit(&$values, $where, &$oldvalues, &$keys, $inline, $pageObject)
{

		$sql = DB::PrepareSQL("UPDATE
	edl_sp.evaluacion_p_funcional
	SET
	edl_sp.evaluacion_p_funcional.evalparfun_cal_parcial = ((edl_sp.evaluacion_p_funcional.evalparfun_cal *	edl_sp.evaluacion_p_funcional.valorAcordado_FK)/100)
WHERE
	edl_sp.evaluacion_p_funcional.evalparfun_cal IS NOT NULL;");
DB::Exec( $sql );

// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function AfterEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		



}
?>