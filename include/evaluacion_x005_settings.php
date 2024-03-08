<?php
$tdataevaluacion_x005 = array();
$tdataevaluacion_x005[".searchableFields"] = array();
$tdataevaluacion_x005[".ShortName"] = "evaluacion_x005";
$tdataevaluacion_x005[".OwnerID"] = "";
$tdataevaluacion_x005[".OriginalTable"] = "evaluacion";


$tdataevaluacion_x005[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" );
$tdataevaluacion_x005[".originalPagesByType"] = $tdataevaluacion_x005[".pagesByType"];
$tdataevaluacion_x005[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" ) );
$tdataevaluacion_x005[".originalPages"] = $tdataevaluacion_x005[".pages"];
$tdataevaluacion_x005[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"search\":\"search\"}" );
$tdataevaluacion_x005[".originalDefaultPages"] = $tdataevaluacion_x005[".defaultPages"];

//	field labels
$fieldLabelsevaluacion_x005 = array();
$fieldToolTipsevaluacion_x005 = array();
$pageTitlesevaluacion_x005 = array();
$placeHoldersevaluacion_x005 = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsevaluacion_x005["Spanish"] = array();
	$fieldToolTipsevaluacion_x005["Spanish"] = array();
	$placeHoldersevaluacion_x005["Spanish"] = array();
	$pageTitlesevaluacion_x005["Spanish"] = array();
	$fieldLabelsevaluacion_x005["Spanish"]["id"] = "Id";
	$fieldToolTipsevaluacion_x005["Spanish"]["id"] = "";
	$placeHoldersevaluacion_x005["Spanish"]["id"] = "";
	$fieldLabelsevaluacion_x005["Spanish"]["idEvaluado"] = "Id Evaluado";
	$fieldToolTipsevaluacion_x005["Spanish"]["idEvaluado"] = "";
	$placeHoldersevaluacion_x005["Spanish"]["idEvaluado"] = "";
	$fieldLabelsevaluacion_x005["Spanish"]["idEvaluador"] = "Evaluador";
	$fieldToolTipsevaluacion_x005["Spanish"]["idEvaluador"] = "";
	$placeHoldersevaluacion_x005["Spanish"]["idEvaluador"] = "";
	$fieldLabelsevaluacion_x005["Spanish"]["IdEvaluador_c"] = "IdEvaluador C";
	$fieldToolTipsevaluacion_x005["Spanish"]["IdEvaluador_c"] = "";
	$placeHoldersevaluacion_x005["Spanish"]["IdEvaluador_c"] = "";
	$fieldLabelsevaluacion_x005["Spanish"]["IdEvaluador_d"] = "IdEvaluador D";
	$fieldToolTipsevaluacion_x005["Spanish"]["IdEvaluador_d"] = "";
	$placeHoldersevaluacion_x005["Spanish"]["IdEvaluador_d"] = "";
	$fieldLabelsevaluacion_x005["Spanish"]["vigencia"] = "Vigencia";
	$fieldToolTipsevaluacion_x005["Spanish"]["vigencia"] = "";
	$placeHoldersevaluacion_x005["Spanish"]["vigencia"] = "";
	$fieldLabelsevaluacion_x005["Spanish"]["periodo"] = "Periodo";
	$fieldToolTipsevaluacion_x005["Spanish"]["periodo"] = "";
	$placeHoldersevaluacion_x005["Spanish"]["periodo"] = "";
	$fieldLabelsevaluacion_x005["Spanish"]["fchCreacion"] = "Fch Creacion";
	$fieldToolTipsevaluacion_x005["Spanish"]["fchCreacion"] = "";
	$placeHoldersevaluacion_x005["Spanish"]["fchCreacion"] = "";
	$fieldLabelsevaluacion_x005["Spanish"]["fchEdefinitiva"] = "Fch Edefinitiva";
	$fieldToolTipsevaluacion_x005["Spanish"]["fchEdefinitiva"] = "";
	$placeHoldersevaluacion_x005["Spanish"]["fchEdefinitiva"] = "";
	$fieldLabelsevaluacion_x005["Spanish"]["estado"] = "Estado";
	$fieldToolTipsevaluacion_x005["Spanish"]["estado"] = "";
	$placeHoldersevaluacion_x005["Spanish"]["estado"] = "";
	$fieldLabelsevaluacion_x005["Spanish"]["email_not_cierre"] = "Email Not Cierre";
	$fieldToolTipsevaluacion_x005["Spanish"]["email_not_cierre"] = "";
	$placeHoldersevaluacion_x005["Spanish"]["email_not_cierre"] = "";
	$fieldLabelsevaluacion_x005["Spanish"]["fecha_not_cierre"] = "Fecha Not Cierre";
	$fieldToolTipsevaluacion_x005["Spanish"]["fecha_not_cierre"] = "";
	$placeHoldersevaluacion_x005["Spanish"]["fecha_not_cierre"] = "";
	$fieldLabelsevaluacion_x005["Spanish"]["sys_user"] = "Sys User";
	$fieldToolTipsevaluacion_x005["Spanish"]["sys_user"] = "";
	$placeHoldersevaluacion_x005["Spanish"]["sys_user"] = "";
	$fieldLabelsevaluacion_x005["Spanish"]["evaluado_doc"] = "Evaluado Doc";
	$fieldToolTipsevaluacion_x005["Spanish"]["evaluado_doc"] = "";
	$placeHoldersevaluacion_x005["Spanish"]["evaluado_doc"] = "";
	$fieldLabelsevaluacion_x005["Spanish"]["evaluado_nombre"] = "Evaluado Nombre";
	$fieldToolTipsevaluacion_x005["Spanish"]["evaluado_nombre"] = "";
	$placeHoldersevaluacion_x005["Spanish"]["evaluado_nombre"] = "";
	$fieldLabelsevaluacion_x005["Spanish"]["evaluado_cargo"] = "Evaluado Cargo";
	$fieldToolTipsevaluacion_x005["Spanish"]["evaluado_cargo"] = "";
	$placeHoldersevaluacion_x005["Spanish"]["evaluado_cargo"] = "";
	$fieldLabelsevaluacion_x005["Spanish"]["evaluado_email"] = "Evaluado Email";
	$fieldToolTipsevaluacion_x005["Spanish"]["evaluado_email"] = "";
	$placeHoldersevaluacion_x005["Spanish"]["evaluado_email"] = "";
	$fieldLabelsevaluacion_x005["Spanish"]["evaluado_dep_sup"] = "Evaluado Dep Sup";
	$fieldToolTipsevaluacion_x005["Spanish"]["evaluado_dep_sup"] = "";
	$placeHoldersevaluacion_x005["Spanish"]["evaluado_dep_sup"] = "";
	$fieldLabelsevaluacion_x005["Spanish"]["evaluado_dep"] = "Evaluado Dep";
	$fieldToolTipsevaluacion_x005["Spanish"]["evaluado_dep"] = "";
	$placeHoldersevaluacion_x005["Spanish"]["evaluado_dep"] = "";
	$fieldLabelsevaluacion_x005["Spanish"]["evaluado_nombramiento"] = "Evaluado Nombramiento";
	$fieldToolTipsevaluacion_x005["Spanish"]["evaluado_nombramiento"] = "";
	$placeHoldersevaluacion_x005["Spanish"]["evaluado_nombramiento"] = "";
	$fieldLabelsevaluacion_x005["Spanish"]["evaluado_fechai_po"] = "Evaluado Fechai Po";
	$fieldToolTipsevaluacion_x005["Spanish"]["evaluado_fechai_po"] = "";
	$placeHoldersevaluacion_x005["Spanish"]["evaluado_fechai_po"] = "";
	$fieldLabelsevaluacion_x005["Spanish"]["evaluado_fechaf_po"] = "Evaluado Fechaf Po";
	$fieldToolTipsevaluacion_x005["Spanish"]["evaluado_fechaf_po"] = "";
	$placeHoldersevaluacion_x005["Spanish"]["evaluado_fechaf_po"] = "";
	$fieldLabelsevaluacion_x005["Spanish"]["evaluado_fechai_pp"] = "Evaluado Fechai Pp";
	$fieldToolTipsevaluacion_x005["Spanish"]["evaluado_fechai_pp"] = "";
	$placeHoldersevaluacion_x005["Spanish"]["evaluado_fechai_pp"] = "";
	$fieldLabelsevaluacion_x005["Spanish"]["evaluado_fechaf_pp"] = "Evaluado Fechaf Pp";
	$fieldToolTipsevaluacion_x005["Spanish"]["evaluado_fechaf_pp"] = "";
	$placeHoldersevaluacion_x005["Spanish"]["evaluado_fechaf_pp"] = "";
	$fieldLabelsevaluacion_x005["Spanish"]["evaluador_doc"] = "Evaluador Doc";
	$fieldToolTipsevaluacion_x005["Spanish"]["evaluador_doc"] = "";
	$placeHoldersevaluacion_x005["Spanish"]["evaluador_doc"] = "";
	$fieldLabelsevaluacion_x005["Spanish"]["evaluador_nombre"] = "Evaluador Nombre";
	$fieldToolTipsevaluacion_x005["Spanish"]["evaluador_nombre"] = "";
	$placeHoldersevaluacion_x005["Spanish"]["evaluador_nombre"] = "";
	$fieldLabelsevaluacion_x005["Spanish"]["evaluador_cargo"] = "Evaluador Cargo";
	$fieldToolTipsevaluacion_x005["Spanish"]["evaluador_cargo"] = "";
	$placeHoldersevaluacion_x005["Spanish"]["evaluador_cargo"] = "";
	$fieldLabelsevaluacion_x005["Spanish"]["evaluador_email"] = "Evaluador Email";
	$fieldToolTipsevaluacion_x005["Spanish"]["evaluador_email"] = "";
	$placeHoldersevaluacion_x005["Spanish"]["evaluador_email"] = "";
	$fieldLabelsevaluacion_x005["Spanish"]["evaluador_dep_sup"] = "Evaluador Dep Sup";
	$fieldToolTipsevaluacion_x005["Spanish"]["evaluador_dep_sup"] = "";
	$placeHoldersevaluacion_x005["Spanish"]["evaluador_dep_sup"] = "";
	$fieldLabelsevaluacion_x005["Spanish"]["evaluador_dep"] = "Evaluador Dep";
	$fieldToolTipsevaluacion_x005["Spanish"]["evaluador_dep"] = "";
	$placeHoldersevaluacion_x005["Spanish"]["evaluador_dep"] = "";
	$fieldLabelsevaluacion_x005["Spanish"]["sys_date"] = "Sys Date";
	$fieldToolTipsevaluacion_x005["Spanish"]["sys_date"] = "";
	$placeHoldersevaluacion_x005["Spanish"]["sys_date"] = "";
	$fieldLabelsevaluacion_x005["Spanish"]["evaluador_nombramiento"] = "Evaluador Nombramiento";
	$fieldToolTipsevaluacion_x005["Spanish"]["evaluador_nombramiento"] = "";
	$placeHoldersevaluacion_x005["Spanish"]["evaluador_nombramiento"] = "";
	$fieldLabelsevaluacion_x005["Spanish"]["valor_funcional"] = "Valor Funcional";
	$fieldToolTipsevaluacion_x005["Spanish"]["valor_funcional"] = "";
	$placeHoldersevaluacion_x005["Spanish"]["valor_funcional"] = "";
	$fieldLabelsevaluacion_x005["Spanish"]["valor_programado"] = "Valor Programado";
	$fieldToolTipsevaluacion_x005["Spanish"]["valor_programado"] = "";
	$placeHoldersevaluacion_x005["Spanish"]["valor_programado"] = "";
	$fieldLabelsevaluacion_x005["Spanish"]["valor_pendiente"] = "Valor Pendiente";
	$fieldToolTipsevaluacion_x005["Spanish"]["valor_pendiente"] = "";
	$placeHoldersevaluacion_x005["Spanish"]["valor_pendiente"] = "";
	$fieldLabelsevaluacion_x005["Spanish"]["id_comportamental_fk"] = "Id Comportamental Fk";
	$fieldToolTipsevaluacion_x005["Spanish"]["id_comportamental_fk"] = "";
	$placeHoldersevaluacion_x005["Spanish"]["id_comportamental_fk"] = "";
	$fieldLabelsevaluacion_x005["Spanish"]["valor_comun"] = "Valor Comun";
	$fieldToolTipsevaluacion_x005["Spanish"]["valor_comun"] = "";
	$placeHoldersevaluacion_x005["Spanish"]["valor_comun"] = "";
	$fieldLabelsevaluacion_x005["Spanish"]["valor_jerarquico"] = "Valor Jerarquico";
	$fieldToolTipsevaluacion_x005["Spanish"]["valor_jerarquico"] = "";
	$placeHoldersevaluacion_x005["Spanish"]["valor_jerarquico"] = "";
	$fieldLabelsevaluacion_x005["Spanish"]["valor_total"] = "Valor Total";
	$fieldToolTipsevaluacion_x005["Spanish"]["valor_total"] = "";
	$placeHoldersevaluacion_x005["Spanish"]["valor_total"] = "";
	$fieldLabelsevaluacion_x005["Spanish"]["idEvaluadorFinal"] = "Evaluador Final";
	$fieldToolTipsevaluacion_x005["Spanish"]["idEvaluadorFinal"] = "";
	$placeHoldersevaluacion_x005["Spanish"]["idEvaluadorFinal"] = "";
	if (count($fieldToolTipsevaluacion_x005["Spanish"]))
		$tdataevaluacion_x005[".isUseToolTips"] = true;
}


	$tdataevaluacion_x005[".NCSearch"] = true;



$tdataevaluacion_x005[".shortTableName"] = "evaluacion_x005";
$tdataevaluacion_x005[".nSecOptions"] = 0;

$tdataevaluacion_x005[".mainTableOwnerID"] = "";
$tdataevaluacion_x005[".entityType"] = 1;
$tdataevaluacion_x005[".connId"] = "edl2_at_127_0_0_1";


$tdataevaluacion_x005[".strOriginalTableName"] = "evaluacion";

	



$tdataevaluacion_x005[".showAddInPopup"] = false;

$tdataevaluacion_x005[".showEditInPopup"] = false;

$tdataevaluacion_x005[".showViewInPopup"] = false;

$tdataevaluacion_x005[".listAjax"] = false;
//	temporary
//$tdataevaluacion_x005[".listAjax"] = false;

	$tdataevaluacion_x005[".audit"] = true;

	$tdataevaluacion_x005[".locking"] = true;


$pages = $tdataevaluacion_x005[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataevaluacion_x005[".edit"] = true;
	$tdataevaluacion_x005[".afterEditAction"] = 1;
	$tdataevaluacion_x005[".closePopupAfterEdit"] = 1;
	$tdataevaluacion_x005[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataevaluacion_x005[".add"] = true;
$tdataevaluacion_x005[".afterAddAction"] = 1;
$tdataevaluacion_x005[".closePopupAfterAdd"] = 1;
$tdataevaluacion_x005[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataevaluacion_x005[".list"] = true;
}



$tdataevaluacion_x005[".strSortControlSettingsJSON"] = "";

$tdataevaluacion_x005[".strClickActionJSON"] = "{\"fields\":{\"IdEvaluador_c\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"IdEvaluador_d\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"email_not_cierre\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"estado\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"evaluado_cargo\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"evaluado_dep\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"evaluado_dep_sup\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"evaluado_doc\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"evaluado_email\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"evaluado_fechaf_po\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"evaluado_fechaf_pp\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"evaluado_fechai_po\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"evaluado_fechai_pp\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"evaluado_nombramiento\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"evaluado_nombre\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"evaluador_cargo\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"evaluador_dep\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"evaluador_dep_sup\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"evaluador_doc\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"evaluador_email\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"evaluador_nombramiento\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"evaluador_nombre\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"fchCreacion\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"fchEdefinitiva\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"fecha_not_cierre\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"id\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"idEvaluado\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"idEvaluador\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"idEvaluadorFinal\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"id_comportamental_fk\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"periodo\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"sys_date\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"sys_user\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"valor_comun\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"valor_funcional\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"valor_jerarquico\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"valor_pendiente\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"valor_programado\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"valor_total\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"vigencia\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}}},\"row\":{\"action\":\"grid\",\"codeData\":{},\"gridData\":{\"action\":\"inlineedit\",\"table\":null},\"openData\":{\"how\":\"goto\",\"page\":\"url\",\"table\":null,\"url\":\"\"}}}";



if( $pages[PAGE_VIEW] ) {
$tdataevaluacion_x005[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataevaluacion_x005[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataevaluacion_x005[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataevaluacion_x005[".printFriendly"] = true;
}



$tdataevaluacion_x005[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataevaluacion_x005[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataevaluacion_x005[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataevaluacion_x005[".isUseAjaxSuggest"] = true;



																																																																																																																																																																																				

$tdataevaluacion_x005[".ajaxCodeSnippetAdded"] = false;

$tdataevaluacion_x005[".buttonsAdded"] = false;

$tdataevaluacion_x005[".addPageEvents"] = true;

// use timepicker for search panel
$tdataevaluacion_x005[".isUseTimeForSearch"] = false;


$tdataevaluacion_x005[".badgeColor"] = "808080";


$tdataevaluacion_x005[".allSearchFields"] = array();
$tdataevaluacion_x005[".filterFields"] = array();
$tdataevaluacion_x005[".requiredSearchFields"] = array();

$tdataevaluacion_x005[".googleLikeFields"] = array();
$tdataevaluacion_x005[".googleLikeFields"][] = "id";
$tdataevaluacion_x005[".googleLikeFields"][] = "idEvaluado";
$tdataevaluacion_x005[".googleLikeFields"][] = "idEvaluador";
$tdataevaluacion_x005[".googleLikeFields"][] = "idEvaluadorFinal";
$tdataevaluacion_x005[".googleLikeFields"][] = "IdEvaluador_c";
$tdataevaluacion_x005[".googleLikeFields"][] = "IdEvaluador_d";
$tdataevaluacion_x005[".googleLikeFields"][] = "vigencia";
$tdataevaluacion_x005[".googleLikeFields"][] = "periodo";
$tdataevaluacion_x005[".googleLikeFields"][] = "fchCreacion";
$tdataevaluacion_x005[".googleLikeFields"][] = "fchEdefinitiva";
$tdataevaluacion_x005[".googleLikeFields"][] = "estado";
$tdataevaluacion_x005[".googleLikeFields"][] = "email_not_cierre";
$tdataevaluacion_x005[".googleLikeFields"][] = "fecha_not_cierre";
$tdataevaluacion_x005[".googleLikeFields"][] = "sys_user";
$tdataevaluacion_x005[".googleLikeFields"][] = "evaluado_doc";
$tdataevaluacion_x005[".googleLikeFields"][] = "evaluado_nombre";
$tdataevaluacion_x005[".googleLikeFields"][] = "evaluado_cargo";
$tdataevaluacion_x005[".googleLikeFields"][] = "evaluado_email";
$tdataevaluacion_x005[".googleLikeFields"][] = "evaluado_dep_sup";
$tdataevaluacion_x005[".googleLikeFields"][] = "evaluado_dep";
$tdataevaluacion_x005[".googleLikeFields"][] = "evaluado_nombramiento";
$tdataevaluacion_x005[".googleLikeFields"][] = "evaluado_fechai_po";
$tdataevaluacion_x005[".googleLikeFields"][] = "evaluado_fechaf_po";
$tdataevaluacion_x005[".googleLikeFields"][] = "evaluado_fechai_pp";
$tdataevaluacion_x005[".googleLikeFields"][] = "evaluado_fechaf_pp";
$tdataevaluacion_x005[".googleLikeFields"][] = "evaluador_doc";
$tdataevaluacion_x005[".googleLikeFields"][] = "evaluador_nombre";
$tdataevaluacion_x005[".googleLikeFields"][] = "evaluador_cargo";
$tdataevaluacion_x005[".googleLikeFields"][] = "evaluador_email";
$tdataevaluacion_x005[".googleLikeFields"][] = "evaluador_dep_sup";
$tdataevaluacion_x005[".googleLikeFields"][] = "evaluador_dep";
$tdataevaluacion_x005[".googleLikeFields"][] = "sys_date";
$tdataevaluacion_x005[".googleLikeFields"][] = "evaluador_nombramiento";
$tdataevaluacion_x005[".googleLikeFields"][] = "valor_funcional";
$tdataevaluacion_x005[".googleLikeFields"][] = "valor_programado";
$tdataevaluacion_x005[".googleLikeFields"][] = "valor_pendiente";
$tdataevaluacion_x005[".googleLikeFields"][] = "id_comportamental_fk";
$tdataevaluacion_x005[".googleLikeFields"][] = "valor_comun";
$tdataevaluacion_x005[".googleLikeFields"][] = "valor_jerarquico";
$tdataevaluacion_x005[".googleLikeFields"][] = "valor_total";



$tdataevaluacion_x005[".tableType"] = "list";

$tdataevaluacion_x005[".printerPageOrientation"] = 0;
$tdataevaluacion_x005[".nPrinterPageScale"] = 100;

$tdataevaluacion_x005[".nPrinterSplitRecords"] = 40;

$tdataevaluacion_x005[".geocodingEnabled"] = false;










$tdataevaluacion_x005[".pageSize"] = 20;

$tdataevaluacion_x005[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataevaluacion_x005[".strOrderBy"] = $tstrOrderBy;

$tdataevaluacion_x005[".orderindexes"] = array();


$tdataevaluacion_x005[".sqlHead"] = "SELECT id,  	idEvaluado,  	idEvaluador,  	idEvaluadorFinal,  	IdEvaluador_c,  	IdEvaluador_d,  	vigencia,  	periodo,  	fchCreacion,  	fchEdefinitiva,  	estado,  	email_not_cierre,  	fecha_not_cierre,  	sys_user,  	evaluado_doc,  	evaluado_nombre,  	evaluado_cargo,  	evaluado_email,  	evaluado_dep_sup,  	evaluado_dep,  	evaluado_nombramiento,  	evaluado_fechai_po,  	evaluado_fechaf_po,  	evaluado_fechai_pp,  	evaluado_fechaf_pp,  	evaluador_doc,  	evaluador_nombre,  	evaluador_cargo,  	evaluador_email,  	evaluador_dep_sup,  	evaluador_dep,  	sys_date,  	evaluador_nombramiento,  	valor_funcional,  	valor_programado,  	valor_pendiente,  	id_comportamental_fk,  	valor_comun,  	valor_jerarquico,  	valor_total";
$tdataevaluacion_x005[".sqlFrom"] = "FROM evaluacion";
$tdataevaluacion_x005[".sqlWhereExpr"] = "";
$tdataevaluacion_x005[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataevaluacion_x005[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataevaluacion_x005[".arrGroupsPerPage"] = $arrGPP;

$tdataevaluacion_x005[".highlightSearchResults"] = true;

$tableKeysevaluacion_x005 = array();
$tableKeysevaluacion_x005[] = "id";
$tdataevaluacion_x005[".Keys"] = $tableKeysevaluacion_x005;


$tdataevaluacion_x005[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "evaluacion";
	$fdata["Label"] = GetFieldLabel("evaluacion_x005","id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id";

		$fdata["sourceSingle"] = "id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataevaluacion_x005["id"] = $fdata;
		$tdataevaluacion_x005[".searchableFields"][] = "id";
//	idEvaluado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "idEvaluado";
	$fdata["GoodName"] = "idEvaluado";
	$fdata["ownerTable"] = "evaluacion";
	$fdata["Label"] = GetFieldLabel("evaluacion_x005","idEvaluado");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "idEvaluado";

		$fdata["sourceSingle"] = "idEvaluado";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "idEvaluado";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataevaluacion_x005["idEvaluado"] = $fdata;
		$tdataevaluacion_x005[".searchableFields"][] = "idEvaluado";
//	idEvaluador
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "idEvaluador";
	$fdata["GoodName"] = "idEvaluador";
	$fdata["ownerTable"] = "evaluacion";
	$fdata["Label"] = GetFieldLabel("evaluacion_x005","idEvaluador");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "idEvaluador";

		$fdata["sourceSingle"] = "idEvaluador";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "idEvaluador";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "q_global_evaluadores";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "nombre_funcionario";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataevaluacion_x005["idEvaluador"] = $fdata;
		$tdataevaluacion_x005[".searchableFields"][] = "idEvaluador";
//	idEvaluadorFinal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "idEvaluadorFinal";
	$fdata["GoodName"] = "idEvaluadorFinal";
	$fdata["ownerTable"] = "evaluacion";
	$fdata["Label"] = GetFieldLabel("evaluacion_x005","idEvaluadorFinal");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "idEvaluadorFinal";

		$fdata["sourceSingle"] = "idEvaluadorFinal";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "idEvaluadorFinal";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "tparam_estados";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "estado_id";
	$edata["LinkFieldType"] = 16;
	$edata["DisplayField"] = "estado_name";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataevaluacion_x005["idEvaluadorFinal"] = $fdata;
		$tdataevaluacion_x005[".searchableFields"][] = "idEvaluadorFinal";
//	IdEvaluador_c
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "IdEvaluador_c";
	$fdata["GoodName"] = "IdEvaluador_c";
	$fdata["ownerTable"] = "evaluacion";
	$fdata["Label"] = GetFieldLabel("evaluacion_x005","IdEvaluador_c");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "IdEvaluador_c";

		$fdata["sourceSingle"] = "IdEvaluador_c";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "IdEvaluador_c";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataevaluacion_x005["IdEvaluador_c"] = $fdata;
		$tdataevaluacion_x005[".searchableFields"][] = "IdEvaluador_c";
//	IdEvaluador_d
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "IdEvaluador_d";
	$fdata["GoodName"] = "IdEvaluador_d";
	$fdata["ownerTable"] = "evaluacion";
	$fdata["Label"] = GetFieldLabel("evaluacion_x005","IdEvaluador_d");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "IdEvaluador_d";

		$fdata["sourceSingle"] = "IdEvaluador_d";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "IdEvaluador_d";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataevaluacion_x005["IdEvaluador_d"] = $fdata;
		$tdataevaluacion_x005[".searchableFields"][] = "IdEvaluador_d";
//	vigencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "vigencia";
	$fdata["GoodName"] = "vigencia";
	$fdata["ownerTable"] = "evaluacion";
	$fdata["Label"] = GetFieldLabel("evaluacion_x005","vigencia");
	$fdata["FieldType"] = 2;


	
	
			

		$fdata["strField"] = "vigencia";

		$fdata["sourceSingle"] = "vigencia";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "vigencia";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "tparam_vigencia";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "vigencia_id";
	$edata["LinkFieldType"] = 2;
	$edata["DisplayField"] = "vigencia_id";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataevaluacion_x005["vigencia"] = $fdata;
		$tdataevaluacion_x005[".searchableFields"][] = "vigencia";
//	periodo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "periodo";
	$fdata["GoodName"] = "periodo";
	$fdata["ownerTable"] = "evaluacion";
	$fdata["Label"] = GetFieldLabel("evaluacion_x005","periodo");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "periodo";

		$fdata["sourceSingle"] = "periodo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "periodo";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "tparam_periodo";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "periodo_id";
	$edata["LinkFieldType"] = 16;
	$edata["DisplayField"] = "periodo_name";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataevaluacion_x005["periodo"] = $fdata;
		$tdataevaluacion_x005[".searchableFields"][] = "periodo";
//	fchCreacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "fchCreacion";
	$fdata["GoodName"] = "fchCreacion";
	$fdata["ownerTable"] = "evaluacion";
	$fdata["Label"] = GetFieldLabel("evaluacion_x005","fchCreacion");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "fchCreacion";

		$fdata["sourceSingle"] = "fchCreacion";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fchCreacion";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataevaluacion_x005["fchCreacion"] = $fdata;
		$tdataevaluacion_x005[".searchableFields"][] = "fchCreacion";
//	fchEdefinitiva
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "fchEdefinitiva";
	$fdata["GoodName"] = "fchEdefinitiva";
	$fdata["ownerTable"] = "evaluacion";
	$fdata["Label"] = GetFieldLabel("evaluacion_x005","fchEdefinitiva");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "fchEdefinitiva";

		$fdata["sourceSingle"] = "fchEdefinitiva";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fchEdefinitiva";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataevaluacion_x005["fchEdefinitiva"] = $fdata;
		$tdataevaluacion_x005[".searchableFields"][] = "fchEdefinitiva";
//	estado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "estado";
	$fdata["GoodName"] = "estado";
	$fdata["ownerTable"] = "evaluacion";
	$fdata["Label"] = GetFieldLabel("evaluacion_x005","estado");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "estado";

		$fdata["sourceSingle"] = "estado";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "estado";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "tparam_estados_eval";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "estadoeval_id";
	$edata["LinkFieldType"] = 16;
	$edata["DisplayField"] = "estadoeval_name";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataevaluacion_x005["estado"] = $fdata;
		$tdataevaluacion_x005[".searchableFields"][] = "estado";
//	email_not_cierre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "email_not_cierre";
	$fdata["GoodName"] = "email_not_cierre";
	$fdata["ownerTable"] = "evaluacion";
	$fdata["Label"] = GetFieldLabel("evaluacion_x005","email_not_cierre");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "email_not_cierre";

		$fdata["sourceSingle"] = "email_not_cierre";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "email_not_cierre";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=60";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataevaluacion_x005["email_not_cierre"] = $fdata;
		$tdataevaluacion_x005[".searchableFields"][] = "email_not_cierre";
//	fecha_not_cierre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "fecha_not_cierre";
	$fdata["GoodName"] = "fecha_not_cierre";
	$fdata["ownerTable"] = "evaluacion";
	$fdata["Label"] = GetFieldLabel("evaluacion_x005","fecha_not_cierre");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "fecha_not_cierre";

		$fdata["sourceSingle"] = "fecha_not_cierre";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fecha_not_cierre";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataevaluacion_x005["fecha_not_cierre"] = $fdata;
		$tdataevaluacion_x005[".searchableFields"][] = "fecha_not_cierre";
//	sys_user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "sys_user";
	$fdata["GoodName"] = "sys_user";
	$fdata["ownerTable"] = "evaluacion";
	$fdata["Label"] = GetFieldLabel("evaluacion_x005","sys_user");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "sys_user";

		$fdata["sourceSingle"] = "sys_user";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sys_user";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataevaluacion_x005["sys_user"] = $fdata;
		$tdataevaluacion_x005[".searchableFields"][] = "sys_user";
//	evaluado_doc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "evaluado_doc";
	$fdata["GoodName"] = "evaluado_doc";
	$fdata["ownerTable"] = "evaluacion";
	$fdata["Label"] = GetFieldLabel("evaluacion_x005","evaluado_doc");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "evaluado_doc";

		$fdata["sourceSingle"] = "evaluado_doc";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "evaluado_doc";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=20";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataevaluacion_x005["evaluado_doc"] = $fdata;
		$tdataevaluacion_x005[".searchableFields"][] = "evaluado_doc";
//	evaluado_nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "evaluado_nombre";
	$fdata["GoodName"] = "evaluado_nombre";
	$fdata["ownerTable"] = "evaluacion";
	$fdata["Label"] = GetFieldLabel("evaluacion_x005","evaluado_nombre");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "evaluado_nombre";

		$fdata["sourceSingle"] = "evaluado_nombre";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "evaluado_nombre";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=160";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataevaluacion_x005["evaluado_nombre"] = $fdata;
		$tdataevaluacion_x005[".searchableFields"][] = "evaluado_nombre";
//	evaluado_cargo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "evaluado_cargo";
	$fdata["GoodName"] = "evaluado_cargo";
	$fdata["ownerTable"] = "evaluacion";
	$fdata["Label"] = GetFieldLabel("evaluacion_x005","evaluado_cargo");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "evaluado_cargo";

		$fdata["sourceSingle"] = "evaluado_cargo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "evaluado_cargo";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataevaluacion_x005["evaluado_cargo"] = $fdata;
		$tdataevaluacion_x005[".searchableFields"][] = "evaluado_cargo";
//	evaluado_email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "evaluado_email";
	$fdata["GoodName"] = "evaluado_email";
	$fdata["ownerTable"] = "evaluacion";
	$fdata["Label"] = GetFieldLabel("evaluacion_x005","evaluado_email");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "evaluado_email";

		$fdata["sourceSingle"] = "evaluado_email";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "evaluado_email";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=150";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataevaluacion_x005["evaluado_email"] = $fdata;
		$tdataevaluacion_x005[".searchableFields"][] = "evaluado_email";
//	evaluado_dep_sup
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "evaluado_dep_sup";
	$fdata["GoodName"] = "evaluado_dep_sup";
	$fdata["ownerTable"] = "evaluacion";
	$fdata["Label"] = GetFieldLabel("evaluacion_x005","evaluado_dep_sup");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "evaluado_dep_sup";

		$fdata["sourceSingle"] = "evaluado_dep_sup";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "evaluado_dep_sup";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataevaluacion_x005["evaluado_dep_sup"] = $fdata;
		$tdataevaluacion_x005[".searchableFields"][] = "evaluado_dep_sup";
//	evaluado_dep
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "evaluado_dep";
	$fdata["GoodName"] = "evaluado_dep";
	$fdata["ownerTable"] = "evaluacion";
	$fdata["Label"] = GetFieldLabel("evaluacion_x005","evaluado_dep");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "evaluado_dep";

		$fdata["sourceSingle"] = "evaluado_dep";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "evaluado_dep";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataevaluacion_x005["evaluado_dep"] = $fdata;
		$tdataevaluacion_x005[".searchableFields"][] = "evaluado_dep";
//	evaluado_nombramiento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "evaluado_nombramiento";
	$fdata["GoodName"] = "evaluado_nombramiento";
	$fdata["ownerTable"] = "evaluacion";
	$fdata["Label"] = GetFieldLabel("evaluacion_x005","evaluado_nombramiento");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "evaluado_nombramiento";

		$fdata["sourceSingle"] = "evaluado_nombramiento";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "evaluado_nombramiento";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=1";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataevaluacion_x005["evaluado_nombramiento"] = $fdata;
		$tdataevaluacion_x005[".searchableFields"][] = "evaluado_nombramiento";
//	evaluado_fechai_po
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "evaluado_fechai_po";
	$fdata["GoodName"] = "evaluado_fechai_po";
	$fdata["ownerTable"] = "evaluacion";
	$fdata["Label"] = GetFieldLabel("evaluacion_x005","evaluado_fechai_po");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "evaluado_fechai_po";

		$fdata["sourceSingle"] = "evaluado_fechai_po";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "evaluado_fechai_po";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataevaluacion_x005["evaluado_fechai_po"] = $fdata;
		$tdataevaluacion_x005[".searchableFields"][] = "evaluado_fechai_po";
//	evaluado_fechaf_po
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "evaluado_fechaf_po";
	$fdata["GoodName"] = "evaluado_fechaf_po";
	$fdata["ownerTable"] = "evaluacion";
	$fdata["Label"] = GetFieldLabel("evaluacion_x005","evaluado_fechaf_po");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "evaluado_fechaf_po";

		$fdata["sourceSingle"] = "evaluado_fechaf_po";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "evaluado_fechaf_po";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataevaluacion_x005["evaluado_fechaf_po"] = $fdata;
		$tdataevaluacion_x005[".searchableFields"][] = "evaluado_fechaf_po";
//	evaluado_fechai_pp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "evaluado_fechai_pp";
	$fdata["GoodName"] = "evaluado_fechai_pp";
	$fdata["ownerTable"] = "evaluacion";
	$fdata["Label"] = GetFieldLabel("evaluacion_x005","evaluado_fechai_pp");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "evaluado_fechai_pp";

		$fdata["sourceSingle"] = "evaluado_fechai_pp";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "evaluado_fechai_pp";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataevaluacion_x005["evaluado_fechai_pp"] = $fdata;
		$tdataevaluacion_x005[".searchableFields"][] = "evaluado_fechai_pp";
//	evaluado_fechaf_pp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "evaluado_fechaf_pp";
	$fdata["GoodName"] = "evaluado_fechaf_pp";
	$fdata["ownerTable"] = "evaluacion";
	$fdata["Label"] = GetFieldLabel("evaluacion_x005","evaluado_fechaf_pp");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "evaluado_fechaf_pp";

		$fdata["sourceSingle"] = "evaluado_fechaf_pp";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "evaluado_fechaf_pp";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataevaluacion_x005["evaluado_fechaf_pp"] = $fdata;
		$tdataevaluacion_x005[".searchableFields"][] = "evaluado_fechaf_pp";
//	evaluador_doc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "evaluador_doc";
	$fdata["GoodName"] = "evaluador_doc";
	$fdata["ownerTable"] = "evaluacion";
	$fdata["Label"] = GetFieldLabel("evaluacion_x005","evaluador_doc");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "evaluador_doc";

		$fdata["sourceSingle"] = "evaluador_doc";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "evaluador_doc";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=20";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataevaluacion_x005["evaluador_doc"] = $fdata;
		$tdataevaluacion_x005[".searchableFields"][] = "evaluador_doc";
//	evaluador_nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "evaluador_nombre";
	$fdata["GoodName"] = "evaluador_nombre";
	$fdata["ownerTable"] = "evaluacion";
	$fdata["Label"] = GetFieldLabel("evaluacion_x005","evaluador_nombre");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "evaluador_nombre";

		$fdata["sourceSingle"] = "evaluador_nombre";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "evaluador_nombre";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=160";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataevaluacion_x005["evaluador_nombre"] = $fdata;
		$tdataevaluacion_x005[".searchableFields"][] = "evaluador_nombre";
//	evaluador_cargo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "evaluador_cargo";
	$fdata["GoodName"] = "evaluador_cargo";
	$fdata["ownerTable"] = "evaluacion";
	$fdata["Label"] = GetFieldLabel("evaluacion_x005","evaluador_cargo");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "evaluador_cargo";

		$fdata["sourceSingle"] = "evaluador_cargo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "evaluador_cargo";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataevaluacion_x005["evaluador_cargo"] = $fdata;
		$tdataevaluacion_x005[".searchableFields"][] = "evaluador_cargo";
//	evaluador_email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "evaluador_email";
	$fdata["GoodName"] = "evaluador_email";
	$fdata["ownerTable"] = "evaluacion";
	$fdata["Label"] = GetFieldLabel("evaluacion_x005","evaluador_email");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "evaluador_email";

		$fdata["sourceSingle"] = "evaluador_email";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "evaluador_email";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=150";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataevaluacion_x005["evaluador_email"] = $fdata;
		$tdataevaluacion_x005[".searchableFields"][] = "evaluador_email";
//	evaluador_dep_sup
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "evaluador_dep_sup";
	$fdata["GoodName"] = "evaluador_dep_sup";
	$fdata["ownerTable"] = "evaluacion";
	$fdata["Label"] = GetFieldLabel("evaluacion_x005","evaluador_dep_sup");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "evaluador_dep_sup";

		$fdata["sourceSingle"] = "evaluador_dep_sup";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "evaluador_dep_sup";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataevaluacion_x005["evaluador_dep_sup"] = $fdata;
		$tdataevaluacion_x005[".searchableFields"][] = "evaluador_dep_sup";
//	evaluador_dep
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "evaluador_dep";
	$fdata["GoodName"] = "evaluador_dep";
	$fdata["ownerTable"] = "evaluacion";
	$fdata["Label"] = GetFieldLabel("evaluacion_x005","evaluador_dep");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "evaluador_dep";

		$fdata["sourceSingle"] = "evaluador_dep";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "evaluador_dep";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataevaluacion_x005["evaluador_dep"] = $fdata;
		$tdataevaluacion_x005[".searchableFields"][] = "evaluador_dep";
//	sys_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "sys_date";
	$fdata["GoodName"] = "sys_date";
	$fdata["ownerTable"] = "evaluacion";
	$fdata["Label"] = GetFieldLabel("evaluacion_x005","sys_date");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "sys_date";

		$fdata["sourceSingle"] = "sys_date";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sys_date";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataevaluacion_x005["sys_date"] = $fdata;
		$tdataevaluacion_x005[".searchableFields"][] = "sys_date";
//	evaluador_nombramiento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "evaluador_nombramiento";
	$fdata["GoodName"] = "evaluador_nombramiento";
	$fdata["ownerTable"] = "evaluacion";
	$fdata["Label"] = GetFieldLabel("evaluacion_x005","evaluador_nombramiento");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "evaluador_nombramiento";

		$fdata["sourceSingle"] = "evaluador_nombramiento";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "evaluador_nombramiento";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=1";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataevaluacion_x005["evaluador_nombramiento"] = $fdata;
		$tdataevaluacion_x005[".searchableFields"][] = "evaluador_nombramiento";
//	valor_funcional
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "valor_funcional";
	$fdata["GoodName"] = "valor_funcional";
	$fdata["ownerTable"] = "evaluacion";
	$fdata["Label"] = GetFieldLabel("evaluacion_x005","valor_funcional");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "valor_funcional";

		$fdata["sourceSingle"] = "valor_funcional";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "valor_funcional";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataevaluacion_x005["valor_funcional"] = $fdata;
		$tdataevaluacion_x005[".searchableFields"][] = "valor_funcional";
//	valor_programado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "valor_programado";
	$fdata["GoodName"] = "valor_programado";
	$fdata["ownerTable"] = "evaluacion";
	$fdata["Label"] = GetFieldLabel("evaluacion_x005","valor_programado");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "valor_programado";

		$fdata["sourceSingle"] = "valor_programado";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "valor_programado";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataevaluacion_x005["valor_programado"] = $fdata;
		$tdataevaluacion_x005[".searchableFields"][] = "valor_programado";
//	valor_pendiente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "valor_pendiente";
	$fdata["GoodName"] = "valor_pendiente";
	$fdata["ownerTable"] = "evaluacion";
	$fdata["Label"] = GetFieldLabel("evaluacion_x005","valor_pendiente");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "valor_pendiente";

		$fdata["sourceSingle"] = "valor_pendiente";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "valor_pendiente";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataevaluacion_x005["valor_pendiente"] = $fdata;
		$tdataevaluacion_x005[".searchableFields"][] = "valor_pendiente";
//	id_comportamental_fk
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "id_comportamental_fk";
	$fdata["GoodName"] = "id_comportamental_fk";
	$fdata["ownerTable"] = "evaluacion";
	$fdata["Label"] = GetFieldLabel("evaluacion_x005","id_comportamental_fk");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "id_comportamental_fk";

		$fdata["sourceSingle"] = "id_comportamental_fk";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_comportamental_fk";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataevaluacion_x005["id_comportamental_fk"] = $fdata;
		$tdataevaluacion_x005[".searchableFields"][] = "id_comportamental_fk";
//	valor_comun
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "valor_comun";
	$fdata["GoodName"] = "valor_comun";
	$fdata["ownerTable"] = "evaluacion";
	$fdata["Label"] = GetFieldLabel("evaluacion_x005","valor_comun");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "valor_comun";

		$fdata["sourceSingle"] = "valor_comun";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "valor_comun";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataevaluacion_x005["valor_comun"] = $fdata;
		$tdataevaluacion_x005[".searchableFields"][] = "valor_comun";
//	valor_jerarquico
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "valor_jerarquico";
	$fdata["GoodName"] = "valor_jerarquico";
	$fdata["ownerTable"] = "evaluacion";
	$fdata["Label"] = GetFieldLabel("evaluacion_x005","valor_jerarquico");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "valor_jerarquico";

		$fdata["sourceSingle"] = "valor_jerarquico";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "valor_jerarquico";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataevaluacion_x005["valor_jerarquico"] = $fdata;
		$tdataevaluacion_x005[".searchableFields"][] = "valor_jerarquico";
//	valor_total
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "valor_total";
	$fdata["GoodName"] = "valor_total";
	$fdata["ownerTable"] = "evaluacion";
	$fdata["Label"] = GetFieldLabel("evaluacion_x005","valor_total");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "valor_total";

		$fdata["sourceSingle"] = "valor_total";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "valor_total";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataevaluacion_x005["valor_total"] = $fdata;
		$tdataevaluacion_x005[".searchableFields"][] = "valor_total";


$tables_data["evaluacion_x005"]=&$tdataevaluacion_x005;
$field_labels["evaluacion_x005"] = &$fieldLabelsevaluacion_x005;
$fieldToolTips["evaluacion_x005"] = &$fieldToolTipsevaluacion_x005;
$placeHolders["evaluacion_x005"] = &$placeHoldersevaluacion_x005;
$page_titles["evaluacion_x005"] = &$pageTitlesevaluacion_x005;


changeTextControlsToDate( "evaluacion_x005" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["evaluacion_x005"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["evaluacion_x005"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="q_caldef_p_x005";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="q_caldef_p_x005";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "q_caldef_p_x005";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["evaluacion_x005"][0] = $masterParams;
				$masterTablesData["evaluacion_x005"][0]["masterKeys"] = array();
	$masterTablesData["evaluacion_x005"][0]["masterKeys"][]="idEvaluado";
				$masterTablesData["evaluacion_x005"][0]["masterKeys"][]="vigencia";
				$masterTablesData["evaluacion_x005"][0]["detailKeys"] = array();
	$masterTablesData["evaluacion_x005"][0]["detailKeys"][]="idEvaluado";
				$masterTablesData["evaluacion_x005"][0]["detailKeys"][]="vigencia";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="q_caldef_p_x005";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="q_caldef_p_x005_adm";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "q_caldef_p_x005_adm";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["evaluacion_x005"][1] = $masterParams;
				$masterTablesData["evaluacion_x005"][1]["masterKeys"] = array();
	$masterTablesData["evaluacion_x005"][1]["masterKeys"][]="idEvaluado";
				$masterTablesData["evaluacion_x005"][1]["masterKeys"][]="vigencia";
				$masterTablesData["evaluacion_x005"][1]["detailKeys"] = array();
	$masterTablesData["evaluacion_x005"][1]["detailKeys"][]="idEvaluado";
				$masterTablesData["evaluacion_x005"][1]["detailKeys"][]="vigencia";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="q_caldef_p_x005";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="q_caldef_p_x005_evaluador";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "q_caldef_p_x005_evaluador";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["evaluacion_x005"][2] = $masterParams;
				$masterTablesData["evaluacion_x005"][2]["masterKeys"] = array();
	$masterTablesData["evaluacion_x005"][2]["masterKeys"][]="idEvaluado";
				$masterTablesData["evaluacion_x005"][2]["masterKeys"][]="vigencia";
				$masterTablesData["evaluacion_x005"][2]["detailKeys"] = array();
	$masterTablesData["evaluacion_x005"][2]["detailKeys"][]="idEvaluado";
				$masterTablesData["evaluacion_x005"][2]["detailKeys"][]="vigencia";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_evaluacion_x005()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	idEvaluado,  	idEvaluador,  	idEvaluadorFinal,  	IdEvaluador_c,  	IdEvaluador_d,  	vigencia,  	periodo,  	fchCreacion,  	fchEdefinitiva,  	estado,  	email_not_cierre,  	fecha_not_cierre,  	sys_user,  	evaluado_doc,  	evaluado_nombre,  	evaluado_cargo,  	evaluado_email,  	evaluado_dep_sup,  	evaluado_dep,  	evaluado_nombramiento,  	evaluado_fechai_po,  	evaluado_fechaf_po,  	evaluado_fechai_pp,  	evaluado_fechaf_pp,  	evaluador_doc,  	evaluador_nombre,  	evaluador_cargo,  	evaluador_email,  	evaluador_dep_sup,  	evaluador_dep,  	sys_date,  	evaluador_nombramiento,  	valor_funcional,  	valor_programado,  	valor_pendiente,  	id_comportamental_fk,  	valor_comun,  	valor_jerarquico,  	valor_total";
$proto0["m_strFrom"] = "FROM evaluacion";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
	
				;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto4=array();
$proto4["m_sql"] = "";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto6=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "evaluacion",
	"m_srcTableName" => "evaluacion_x005"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "evaluacion_x005";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "idEvaluado",
	"m_strTable" => "evaluacion",
	"m_srcTableName" => "evaluacion_x005"
));

$proto8["m_sql"] = "idEvaluado";
$proto8["m_srcTableName"] = "evaluacion_x005";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "idEvaluador",
	"m_strTable" => "evaluacion",
	"m_srcTableName" => "evaluacion_x005"
));

$proto10["m_sql"] = "idEvaluador";
$proto10["m_srcTableName"] = "evaluacion_x005";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "idEvaluadorFinal",
	"m_strTable" => "evaluacion",
	"m_srcTableName" => "evaluacion_x005"
));

$proto12["m_sql"] = "idEvaluadorFinal";
$proto12["m_srcTableName"] = "evaluacion_x005";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "IdEvaluador_c",
	"m_strTable" => "evaluacion",
	"m_srcTableName" => "evaluacion_x005"
));

$proto14["m_sql"] = "IdEvaluador_c";
$proto14["m_srcTableName"] = "evaluacion_x005";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "IdEvaluador_d",
	"m_strTable" => "evaluacion",
	"m_srcTableName" => "evaluacion_x005"
));

$proto16["m_sql"] = "IdEvaluador_d";
$proto16["m_srcTableName"] = "evaluacion_x005";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "vigencia",
	"m_strTable" => "evaluacion",
	"m_srcTableName" => "evaluacion_x005"
));

$proto18["m_sql"] = "vigencia";
$proto18["m_srcTableName"] = "evaluacion_x005";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "periodo",
	"m_strTable" => "evaluacion",
	"m_srcTableName" => "evaluacion_x005"
));

$proto20["m_sql"] = "periodo";
$proto20["m_srcTableName"] = "evaluacion_x005";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "fchCreacion",
	"m_strTable" => "evaluacion",
	"m_srcTableName" => "evaluacion_x005"
));

$proto22["m_sql"] = "fchCreacion";
$proto22["m_srcTableName"] = "evaluacion_x005";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "fchEdefinitiva",
	"m_strTable" => "evaluacion",
	"m_srcTableName" => "evaluacion_x005"
));

$proto24["m_sql"] = "fchEdefinitiva";
$proto24["m_srcTableName"] = "evaluacion_x005";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "estado",
	"m_strTable" => "evaluacion",
	"m_srcTableName" => "evaluacion_x005"
));

$proto26["m_sql"] = "estado";
$proto26["m_srcTableName"] = "evaluacion_x005";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "email_not_cierre",
	"m_strTable" => "evaluacion",
	"m_srcTableName" => "evaluacion_x005"
));

$proto28["m_sql"] = "email_not_cierre";
$proto28["m_srcTableName"] = "evaluacion_x005";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_not_cierre",
	"m_strTable" => "evaluacion",
	"m_srcTableName" => "evaluacion_x005"
));

$proto30["m_sql"] = "fecha_not_cierre";
$proto30["m_srcTableName"] = "evaluacion_x005";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_user",
	"m_strTable" => "evaluacion",
	"m_srcTableName" => "evaluacion_x005"
));

$proto32["m_sql"] = "sys_user";
$proto32["m_srcTableName"] = "evaluacion_x005";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "evaluado_doc",
	"m_strTable" => "evaluacion",
	"m_srcTableName" => "evaluacion_x005"
));

$proto34["m_sql"] = "evaluado_doc";
$proto34["m_srcTableName"] = "evaluacion_x005";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "evaluado_nombre",
	"m_strTable" => "evaluacion",
	"m_srcTableName" => "evaluacion_x005"
));

$proto36["m_sql"] = "evaluado_nombre";
$proto36["m_srcTableName"] = "evaluacion_x005";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "evaluado_cargo",
	"m_strTable" => "evaluacion",
	"m_srcTableName" => "evaluacion_x005"
));

$proto38["m_sql"] = "evaluado_cargo";
$proto38["m_srcTableName"] = "evaluacion_x005";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "evaluado_email",
	"m_strTable" => "evaluacion",
	"m_srcTableName" => "evaluacion_x005"
));

$proto40["m_sql"] = "evaluado_email";
$proto40["m_srcTableName"] = "evaluacion_x005";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "evaluado_dep_sup",
	"m_strTable" => "evaluacion",
	"m_srcTableName" => "evaluacion_x005"
));

$proto42["m_sql"] = "evaluado_dep_sup";
$proto42["m_srcTableName"] = "evaluacion_x005";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "evaluado_dep",
	"m_strTable" => "evaluacion",
	"m_srcTableName" => "evaluacion_x005"
));

$proto44["m_sql"] = "evaluado_dep";
$proto44["m_srcTableName"] = "evaluacion_x005";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "evaluado_nombramiento",
	"m_strTable" => "evaluacion",
	"m_srcTableName" => "evaluacion_x005"
));

$proto46["m_sql"] = "evaluado_nombramiento";
$proto46["m_srcTableName"] = "evaluacion_x005";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "evaluado_fechai_po",
	"m_strTable" => "evaluacion",
	"m_srcTableName" => "evaluacion_x005"
));

$proto48["m_sql"] = "evaluado_fechai_po";
$proto48["m_srcTableName"] = "evaluacion_x005";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "evaluado_fechaf_po",
	"m_strTable" => "evaluacion",
	"m_srcTableName" => "evaluacion_x005"
));

$proto50["m_sql"] = "evaluado_fechaf_po";
$proto50["m_srcTableName"] = "evaluacion_x005";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "evaluado_fechai_pp",
	"m_strTable" => "evaluacion",
	"m_srcTableName" => "evaluacion_x005"
));

$proto52["m_sql"] = "evaluado_fechai_pp";
$proto52["m_srcTableName"] = "evaluacion_x005";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "evaluado_fechaf_pp",
	"m_strTable" => "evaluacion",
	"m_srcTableName" => "evaluacion_x005"
));

$proto54["m_sql"] = "evaluado_fechaf_pp";
$proto54["m_srcTableName"] = "evaluacion_x005";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "evaluador_doc",
	"m_strTable" => "evaluacion",
	"m_srcTableName" => "evaluacion_x005"
));

$proto56["m_sql"] = "evaluador_doc";
$proto56["m_srcTableName"] = "evaluacion_x005";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "evaluador_nombre",
	"m_strTable" => "evaluacion",
	"m_srcTableName" => "evaluacion_x005"
));

$proto58["m_sql"] = "evaluador_nombre";
$proto58["m_srcTableName"] = "evaluacion_x005";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "evaluador_cargo",
	"m_strTable" => "evaluacion",
	"m_srcTableName" => "evaluacion_x005"
));

$proto60["m_sql"] = "evaluador_cargo";
$proto60["m_srcTableName"] = "evaluacion_x005";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "evaluador_email",
	"m_strTable" => "evaluacion",
	"m_srcTableName" => "evaluacion_x005"
));

$proto62["m_sql"] = "evaluador_email";
$proto62["m_srcTableName"] = "evaluacion_x005";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "evaluador_dep_sup",
	"m_strTable" => "evaluacion",
	"m_srcTableName" => "evaluacion_x005"
));

$proto64["m_sql"] = "evaluador_dep_sup";
$proto64["m_srcTableName"] = "evaluacion_x005";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "evaluador_dep",
	"m_strTable" => "evaluacion",
	"m_srcTableName" => "evaluacion_x005"
));

$proto66["m_sql"] = "evaluador_dep";
$proto66["m_srcTableName"] = "evaluacion_x005";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_date",
	"m_strTable" => "evaluacion",
	"m_srcTableName" => "evaluacion_x005"
));

$proto68["m_sql"] = "sys_date";
$proto68["m_srcTableName"] = "evaluacion_x005";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "evaluador_nombramiento",
	"m_strTable" => "evaluacion",
	"m_srcTableName" => "evaluacion_x005"
));

$proto70["m_sql"] = "evaluador_nombramiento";
$proto70["m_srcTableName"] = "evaluacion_x005";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "valor_funcional",
	"m_strTable" => "evaluacion",
	"m_srcTableName" => "evaluacion_x005"
));

$proto72["m_sql"] = "valor_funcional";
$proto72["m_srcTableName"] = "evaluacion_x005";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "valor_programado",
	"m_strTable" => "evaluacion",
	"m_srcTableName" => "evaluacion_x005"
));

$proto74["m_sql"] = "valor_programado";
$proto74["m_srcTableName"] = "evaluacion_x005";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "valor_pendiente",
	"m_strTable" => "evaluacion",
	"m_srcTableName" => "evaluacion_x005"
));

$proto76["m_sql"] = "valor_pendiente";
$proto76["m_srcTableName"] = "evaluacion_x005";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "id_comportamental_fk",
	"m_strTable" => "evaluacion",
	"m_srcTableName" => "evaluacion_x005"
));

$proto78["m_sql"] = "id_comportamental_fk";
$proto78["m_srcTableName"] = "evaluacion_x005";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "valor_comun",
	"m_strTable" => "evaluacion",
	"m_srcTableName" => "evaluacion_x005"
));

$proto80["m_sql"] = "valor_comun";
$proto80["m_srcTableName"] = "evaluacion_x005";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
						$proto82=array();
			$obj = new SQLField(array(
	"m_strName" => "valor_jerarquico",
	"m_strTable" => "evaluacion",
	"m_srcTableName" => "evaluacion_x005"
));

$proto82["m_sql"] = "valor_jerarquico";
$proto82["m_srcTableName"] = "evaluacion_x005";
$proto82["m_expr"]=$obj;
$proto82["m_alias"] = "";
$obj = new SQLFieldListItem($proto82);

$proto0["m_fieldlist"][]=$obj;
						$proto84=array();
			$obj = new SQLField(array(
	"m_strName" => "valor_total",
	"m_strTable" => "evaluacion",
	"m_srcTableName" => "evaluacion_x005"
));

$proto84["m_sql"] = "valor_total";
$proto84["m_srcTableName"] = "evaluacion_x005";
$proto84["m_expr"]=$obj;
$proto84["m_alias"] = "";
$obj = new SQLFieldListItem($proto84);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto86=array();
$proto86["m_link"] = "SQLL_MAIN";
			$proto87=array();
$proto87["m_strName"] = "evaluacion";
$proto87["m_srcTableName"] = "evaluacion_x005";
$proto87["m_columns"] = array();
$proto87["m_columns"][] = "id";
$proto87["m_columns"][] = "idEvaluado";
$proto87["m_columns"][] = "idEvaluador";
$proto87["m_columns"][] = "idEvaluadorFinal";
$proto87["m_columns"][] = "IdEvaluador_c";
$proto87["m_columns"][] = "IdEvaluador_d";
$proto87["m_columns"][] = "vigencia";
$proto87["m_columns"][] = "periodo";
$proto87["m_columns"][] = "fchCreacion";
$proto87["m_columns"][] = "fchEdefinitiva";
$proto87["m_columns"][] = "estado";
$proto87["m_columns"][] = "email_not_cierre";
$proto87["m_columns"][] = "fecha_not_cierre";
$proto87["m_columns"][] = "sys_user";
$proto87["m_columns"][] = "evaluado_doc";
$proto87["m_columns"][] = "evaluado_nombre";
$proto87["m_columns"][] = "evaluado_cargo";
$proto87["m_columns"][] = "evaluado_email";
$proto87["m_columns"][] = "evaluado_dep_sup";
$proto87["m_columns"][] = "evaluado_dep";
$proto87["m_columns"][] = "evaluado_nombramiento";
$proto87["m_columns"][] = "evaluado_fechai_po";
$proto87["m_columns"][] = "evaluado_fechaf_po";
$proto87["m_columns"][] = "evaluado_fechai_pp";
$proto87["m_columns"][] = "evaluado_fechaf_pp";
$proto87["m_columns"][] = "evaluador_doc";
$proto87["m_columns"][] = "evaluador_nombre";
$proto87["m_columns"][] = "evaluador_cargo";
$proto87["m_columns"][] = "evaluador_email";
$proto87["m_columns"][] = "evaluador_dep_sup";
$proto87["m_columns"][] = "evaluador_dep";
$proto87["m_columns"][] = "sys_date";
$proto87["m_columns"][] = "evaluador_nombramiento";
$proto87["m_columns"][] = "valor_funcional";
$proto87["m_columns"][] = "valor_programado";
$proto87["m_columns"][] = "valor_pendiente";
$proto87["m_columns"][] = "id_comportamental_fk";
$proto87["m_columns"][] = "valor_comun";
$proto87["m_columns"][] = "valor_jerarquico";
$proto87["m_columns"][] = "valor_total";
$obj = new SQLTable($proto87);

$proto86["m_table"] = $obj;
$proto86["m_sql"] = "evaluacion";
$proto86["m_alias"] = "";
$proto86["m_srcTableName"] = "evaluacion_x005";
$proto88=array();
$proto88["m_sql"] = "";
$proto88["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto88["m_column"]=$obj;
$proto88["m_contained"] = array();
$proto88["m_strCase"] = "";
$proto88["m_havingmode"] = false;
$proto88["m_inBrackets"] = false;
$proto88["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto88);

$proto86["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto86);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="evaluacion_x005";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_evaluacion_x005 = createSqlQuery_evaluacion_x005();


	
				;

																																								

$tdataevaluacion_x005[".sqlquery"] = $queryData_evaluacion_x005;



include_once(getabspath("include/evaluacion_x005_events.php"));
$tdataevaluacion_x005[".hasEvents"] = true;

?>