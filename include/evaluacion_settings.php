<?php
$tdataevaluacion = array();
$tdataevaluacion[".searchableFields"] = array();
$tdataevaluacion[".ShortName"] = "evaluacion";
$tdataevaluacion[".OwnerID"] = "";
$tdataevaluacion[".OriginalTable"] = "evaluacion";


$tdataevaluacion[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" );
$tdataevaluacion[".originalPagesByType"] = $tdataevaluacion[".pagesByType"];
$tdataevaluacion[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" ) );
$tdataevaluacion[".originalPages"] = $tdataevaluacion[".pages"];
$tdataevaluacion[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"search\":\"search\"}" );
$tdataevaluacion[".originalDefaultPages"] = $tdataevaluacion[".defaultPages"];

//	field labels
$fieldLabelsevaluacion = array();
$fieldToolTipsevaluacion = array();
$pageTitlesevaluacion = array();
$placeHoldersevaluacion = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsevaluacion["Spanish"] = array();
	$fieldToolTipsevaluacion["Spanish"] = array();
	$placeHoldersevaluacion["Spanish"] = array();
	$pageTitlesevaluacion["Spanish"] = array();
	$fieldLabelsevaluacion["Spanish"]["id"] = "Id";
	$fieldToolTipsevaluacion["Spanish"]["id"] = "";
	$placeHoldersevaluacion["Spanish"]["id"] = "";
	$fieldLabelsevaluacion["Spanish"]["idEvaluado"] = "Id Evaluado";
	$fieldToolTipsevaluacion["Spanish"]["idEvaluado"] = "";
	$placeHoldersevaluacion["Spanish"]["idEvaluado"] = "";
	$fieldLabelsevaluacion["Spanish"]["idEvaluador"] = "Id Evaluador";
	$fieldToolTipsevaluacion["Spanish"]["idEvaluador"] = "";
	$placeHoldersevaluacion["Spanish"]["idEvaluador"] = "";
	$fieldLabelsevaluacion["Spanish"]["IdEvaluador_c"] = "IdEvaluador C";
	$fieldToolTipsevaluacion["Spanish"]["IdEvaluador_c"] = "";
	$placeHoldersevaluacion["Spanish"]["IdEvaluador_c"] = "";
	$fieldLabelsevaluacion["Spanish"]["IdEvaluador_d"] = "IdEvaluador D";
	$fieldToolTipsevaluacion["Spanish"]["IdEvaluador_d"] = "";
	$placeHoldersevaluacion["Spanish"]["IdEvaluador_d"] = "";
	$fieldLabelsevaluacion["Spanish"]["vigencia"] = "Vigencia";
	$fieldToolTipsevaluacion["Spanish"]["vigencia"] = "";
	$placeHoldersevaluacion["Spanish"]["vigencia"] = "";
	$fieldLabelsevaluacion["Spanish"]["periodo"] = "Periodo";
	$fieldToolTipsevaluacion["Spanish"]["periodo"] = "";
	$placeHoldersevaluacion["Spanish"]["periodo"] = "";
	$fieldLabelsevaluacion["Spanish"]["fchCreacion"] = "Fch Creacion";
	$fieldToolTipsevaluacion["Spanish"]["fchCreacion"] = "";
	$placeHoldersevaluacion["Spanish"]["fchCreacion"] = "";
	$fieldLabelsevaluacion["Spanish"]["fchEdefinitiva"] = "Fch Edefinitiva";
	$fieldToolTipsevaluacion["Spanish"]["fchEdefinitiva"] = "";
	$placeHoldersevaluacion["Spanish"]["fchEdefinitiva"] = "";
	$fieldLabelsevaluacion["Spanish"]["estado"] = "Estado";
	$fieldToolTipsevaluacion["Spanish"]["estado"] = "";
	$placeHoldersevaluacion["Spanish"]["estado"] = "";
	$fieldLabelsevaluacion["Spanish"]["email_not_cierre"] = "Email Not Cierre";
	$fieldToolTipsevaluacion["Spanish"]["email_not_cierre"] = "";
	$placeHoldersevaluacion["Spanish"]["email_not_cierre"] = "";
	$fieldLabelsevaluacion["Spanish"]["fecha_not_cierre"] = "Fecha Not Cierre";
	$fieldToolTipsevaluacion["Spanish"]["fecha_not_cierre"] = "";
	$placeHoldersevaluacion["Spanish"]["fecha_not_cierre"] = "";
	$fieldLabelsevaluacion["Spanish"]["sys_user"] = "Sys User";
	$fieldToolTipsevaluacion["Spanish"]["sys_user"] = "";
	$placeHoldersevaluacion["Spanish"]["sys_user"] = "";
	$fieldLabelsevaluacion["Spanish"]["evaluado_doc"] = "Evaluado Doc";
	$fieldToolTipsevaluacion["Spanish"]["evaluado_doc"] = "";
	$placeHoldersevaluacion["Spanish"]["evaluado_doc"] = "";
	$fieldLabelsevaluacion["Spanish"]["evaluado_nombre"] = "Evaluado Nombre";
	$fieldToolTipsevaluacion["Spanish"]["evaluado_nombre"] = "";
	$placeHoldersevaluacion["Spanish"]["evaluado_nombre"] = "";
	$fieldLabelsevaluacion["Spanish"]["evaluado_cargo"] = "Evaluado Cargo";
	$fieldToolTipsevaluacion["Spanish"]["evaluado_cargo"] = "";
	$placeHoldersevaluacion["Spanish"]["evaluado_cargo"] = "";
	$fieldLabelsevaluacion["Spanish"]["evaluado_email"] = "Evaluado Email";
	$fieldToolTipsevaluacion["Spanish"]["evaluado_email"] = "";
	$placeHoldersevaluacion["Spanish"]["evaluado_email"] = "";
	$fieldLabelsevaluacion["Spanish"]["evaluado_dep_sup"] = "Evaluado Dep Sup";
	$fieldToolTipsevaluacion["Spanish"]["evaluado_dep_sup"] = "";
	$placeHoldersevaluacion["Spanish"]["evaluado_dep_sup"] = "";
	$fieldLabelsevaluacion["Spanish"]["evaluado_dep"] = "Evaluado Dep";
	$fieldToolTipsevaluacion["Spanish"]["evaluado_dep"] = "";
	$placeHoldersevaluacion["Spanish"]["evaluado_dep"] = "";
	$fieldLabelsevaluacion["Spanish"]["evaluado_nombramiento"] = "Evaluado Nombramiento";
	$fieldToolTipsevaluacion["Spanish"]["evaluado_nombramiento"] = "";
	$placeHoldersevaluacion["Spanish"]["evaluado_nombramiento"] = "";
	$fieldLabelsevaluacion["Spanish"]["evaluado_fechai_po"] = "Evaluado Fechai Po";
	$fieldToolTipsevaluacion["Spanish"]["evaluado_fechai_po"] = "";
	$placeHoldersevaluacion["Spanish"]["evaluado_fechai_po"] = "";
	$fieldLabelsevaluacion["Spanish"]["evaluado_fechaf_po"] = "Evaluado Fechaf Po";
	$fieldToolTipsevaluacion["Spanish"]["evaluado_fechaf_po"] = "";
	$placeHoldersevaluacion["Spanish"]["evaluado_fechaf_po"] = "";
	$fieldLabelsevaluacion["Spanish"]["evaluado_fechai_pp"] = "Evaluado Fechai Pp";
	$fieldToolTipsevaluacion["Spanish"]["evaluado_fechai_pp"] = "";
	$placeHoldersevaluacion["Spanish"]["evaluado_fechai_pp"] = "";
	$fieldLabelsevaluacion["Spanish"]["evaluado_fechaf_pp"] = "Evaluado Fechaf Pp";
	$fieldToolTipsevaluacion["Spanish"]["evaluado_fechaf_pp"] = "";
	$placeHoldersevaluacion["Spanish"]["evaluado_fechaf_pp"] = "";
	$fieldLabelsevaluacion["Spanish"]["evaluador_doc"] = "Evaluador Doc";
	$fieldToolTipsevaluacion["Spanish"]["evaluador_doc"] = "";
	$placeHoldersevaluacion["Spanish"]["evaluador_doc"] = "";
	$fieldLabelsevaluacion["Spanish"]["evaluador_nombre"] = "Evaluador Nombre";
	$fieldToolTipsevaluacion["Spanish"]["evaluador_nombre"] = "";
	$placeHoldersevaluacion["Spanish"]["evaluador_nombre"] = "";
	$fieldLabelsevaluacion["Spanish"]["evaluador_cargo"] = "Evaluador Cargo";
	$fieldToolTipsevaluacion["Spanish"]["evaluador_cargo"] = "";
	$placeHoldersevaluacion["Spanish"]["evaluador_cargo"] = "";
	$fieldLabelsevaluacion["Spanish"]["evaluador_email"] = "Evaluador Email";
	$fieldToolTipsevaluacion["Spanish"]["evaluador_email"] = "";
	$placeHoldersevaluacion["Spanish"]["evaluador_email"] = "";
	$fieldLabelsevaluacion["Spanish"]["evaluador_dep_sup"] = "Evaluador Dep Sup";
	$fieldToolTipsevaluacion["Spanish"]["evaluador_dep_sup"] = "";
	$placeHoldersevaluacion["Spanish"]["evaluador_dep_sup"] = "";
	$fieldLabelsevaluacion["Spanish"]["evaluador_dep"] = "Evaluador Dep";
	$fieldToolTipsevaluacion["Spanish"]["evaluador_dep"] = "";
	$placeHoldersevaluacion["Spanish"]["evaluador_dep"] = "";
	$fieldLabelsevaluacion["Spanish"]["sys_date"] = "Sys Date";
	$fieldToolTipsevaluacion["Spanish"]["sys_date"] = "";
	$placeHoldersevaluacion["Spanish"]["sys_date"] = "";
	$fieldLabelsevaluacion["Spanish"]["evaluador_nombramiento"] = "Evaluador Nombramiento";
	$fieldToolTipsevaluacion["Spanish"]["evaluador_nombramiento"] = "";
	$placeHoldersevaluacion["Spanish"]["evaluador_nombramiento"] = "";
	$fieldLabelsevaluacion["Spanish"]["valor_funcional"] = "Valor Funcional";
	$fieldToolTipsevaluacion["Spanish"]["valor_funcional"] = "";
	$placeHoldersevaluacion["Spanish"]["valor_funcional"] = "";
	$fieldLabelsevaluacion["Spanish"]["valor_programado"] = "Valor Programado";
	$fieldToolTipsevaluacion["Spanish"]["valor_programado"] = "";
	$placeHoldersevaluacion["Spanish"]["valor_programado"] = "";
	$fieldLabelsevaluacion["Spanish"]["valor_pendiente"] = "Valor Pendiente";
	$fieldToolTipsevaluacion["Spanish"]["valor_pendiente"] = "";
	$placeHoldersevaluacion["Spanish"]["valor_pendiente"] = "";
	$fieldLabelsevaluacion["Spanish"]["id_comportamental_fk"] = "Id Comportamental Fk";
	$fieldToolTipsevaluacion["Spanish"]["id_comportamental_fk"] = "";
	$placeHoldersevaluacion["Spanish"]["id_comportamental_fk"] = "";
	$fieldLabelsevaluacion["Spanish"]["valor_comun"] = "Valor Comun";
	$fieldToolTipsevaluacion["Spanish"]["valor_comun"] = "";
	$placeHoldersevaluacion["Spanish"]["valor_comun"] = "";
	$fieldLabelsevaluacion["Spanish"]["valor_jerarquico"] = "Valor Jerarquico";
	$fieldToolTipsevaluacion["Spanish"]["valor_jerarquico"] = "";
	$placeHoldersevaluacion["Spanish"]["valor_jerarquico"] = "";
	$fieldLabelsevaluacion["Spanish"]["valor_total"] = "Valor Total";
	$fieldToolTipsevaluacion["Spanish"]["valor_total"] = "";
	$placeHoldersevaluacion["Spanish"]["valor_total"] = "";
	$fieldLabelsevaluacion["Spanish"]["idEvaluadorFinal"] = "Id Evaluador Final";
	$fieldToolTipsevaluacion["Spanish"]["idEvaluadorFinal"] = "";
	$placeHoldersevaluacion["Spanish"]["idEvaluadorFinal"] = "";
	if (count($fieldToolTipsevaluacion["Spanish"]))
		$tdataevaluacion[".isUseToolTips"] = true;
}


	$tdataevaluacion[".NCSearch"] = true;



$tdataevaluacion[".shortTableName"] = "evaluacion";
$tdataevaluacion[".nSecOptions"] = 0;

$tdataevaluacion[".mainTableOwnerID"] = "";
$tdataevaluacion[".entityType"] = 0;
$tdataevaluacion[".connId"] = "edl2_at_127_0_0_1";


$tdataevaluacion[".strOriginalTableName"] = "evaluacion";

	



$tdataevaluacion[".showAddInPopup"] = false;

$tdataevaluacion[".showEditInPopup"] = false;

$tdataevaluacion[".showViewInPopup"] = false;

$tdataevaluacion[".listAjax"] = false;
//	temporary
//$tdataevaluacion[".listAjax"] = false;

	$tdataevaluacion[".audit"] = true;

	$tdataevaluacion[".locking"] = true;


$pages = $tdataevaluacion[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataevaluacion[".edit"] = true;
	$tdataevaluacion[".afterEditAction"] = 1;
	$tdataevaluacion[".closePopupAfterEdit"] = 1;
	$tdataevaluacion[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataevaluacion[".add"] = true;
$tdataevaluacion[".afterAddAction"] = 1;
$tdataevaluacion[".closePopupAfterAdd"] = 1;
$tdataevaluacion[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataevaluacion[".list"] = true;
}



$tdataevaluacion[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataevaluacion[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataevaluacion[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataevaluacion[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataevaluacion[".printFriendly"] = true;
}



$tdataevaluacion[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataevaluacion[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataevaluacion[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataevaluacion[".isUseAjaxSuggest"] = true;



																																													

$tdataevaluacion[".ajaxCodeSnippetAdded"] = false;

$tdataevaluacion[".buttonsAdded"] = false;

$tdataevaluacion[".addPageEvents"] = false;

// use timepicker for search panel
$tdataevaluacion[".isUseTimeForSearch"] = false;


$tdataevaluacion[".badgeColor"] = "5F9EA0";


$tdataevaluacion[".allSearchFields"] = array();
$tdataevaluacion[".filterFields"] = array();
$tdataevaluacion[".requiredSearchFields"] = array();

$tdataevaluacion[".googleLikeFields"] = array();
$tdataevaluacion[".googleLikeFields"][] = "id";
$tdataevaluacion[".googleLikeFields"][] = "idEvaluado";
$tdataevaluacion[".googleLikeFields"][] = "idEvaluador";
$tdataevaluacion[".googleLikeFields"][] = "idEvaluadorFinal";
$tdataevaluacion[".googleLikeFields"][] = "IdEvaluador_c";
$tdataevaluacion[".googleLikeFields"][] = "IdEvaluador_d";
$tdataevaluacion[".googleLikeFields"][] = "vigencia";
$tdataevaluacion[".googleLikeFields"][] = "periodo";
$tdataevaluacion[".googleLikeFields"][] = "fchCreacion";
$tdataevaluacion[".googleLikeFields"][] = "fchEdefinitiva";
$tdataevaluacion[".googleLikeFields"][] = "estado";
$tdataevaluacion[".googleLikeFields"][] = "email_not_cierre";
$tdataevaluacion[".googleLikeFields"][] = "fecha_not_cierre";
$tdataevaluacion[".googleLikeFields"][] = "sys_user";
$tdataevaluacion[".googleLikeFields"][] = "evaluado_doc";
$tdataevaluacion[".googleLikeFields"][] = "evaluado_nombre";
$tdataevaluacion[".googleLikeFields"][] = "evaluado_cargo";
$tdataevaluacion[".googleLikeFields"][] = "evaluado_email";
$tdataevaluacion[".googleLikeFields"][] = "evaluado_dep_sup";
$tdataevaluacion[".googleLikeFields"][] = "evaluado_dep";
$tdataevaluacion[".googleLikeFields"][] = "evaluado_nombramiento";
$tdataevaluacion[".googleLikeFields"][] = "evaluado_fechai_po";
$tdataevaluacion[".googleLikeFields"][] = "evaluado_fechaf_po";
$tdataevaluacion[".googleLikeFields"][] = "evaluado_fechai_pp";
$tdataevaluacion[".googleLikeFields"][] = "evaluado_fechaf_pp";
$tdataevaluacion[".googleLikeFields"][] = "evaluador_doc";
$tdataevaluacion[".googleLikeFields"][] = "evaluador_nombre";
$tdataevaluacion[".googleLikeFields"][] = "evaluador_cargo";
$tdataevaluacion[".googleLikeFields"][] = "evaluador_email";
$tdataevaluacion[".googleLikeFields"][] = "evaluador_dep_sup";
$tdataevaluacion[".googleLikeFields"][] = "evaluador_dep";
$tdataevaluacion[".googleLikeFields"][] = "sys_date";
$tdataevaluacion[".googleLikeFields"][] = "evaluador_nombramiento";
$tdataevaluacion[".googleLikeFields"][] = "valor_funcional";
$tdataevaluacion[".googleLikeFields"][] = "valor_programado";
$tdataevaluacion[".googleLikeFields"][] = "valor_pendiente";
$tdataevaluacion[".googleLikeFields"][] = "id_comportamental_fk";
$tdataevaluacion[".googleLikeFields"][] = "valor_comun";
$tdataevaluacion[".googleLikeFields"][] = "valor_jerarquico";
$tdataevaluacion[".googleLikeFields"][] = "valor_total";



$tdataevaluacion[".tableType"] = "list";

$tdataevaluacion[".printerPageOrientation"] = 0;
$tdataevaluacion[".nPrinterPageScale"] = 100;

$tdataevaluacion[".nPrinterSplitRecords"] = 40;

$tdataevaluacion[".geocodingEnabled"] = false;










$tdataevaluacion[".pageSize"] = 20;

$tdataevaluacion[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataevaluacion[".strOrderBy"] = $tstrOrderBy;

$tdataevaluacion[".orderindexes"] = array();


$tdataevaluacion[".sqlHead"] = "SELECT id,  	idEvaluado,  	idEvaluador,  	idEvaluadorFinal,  	IdEvaluador_c,  	IdEvaluador_d,  	vigencia,  	periodo,  	fchCreacion,  	fchEdefinitiva,  	estado,  	email_not_cierre,  	fecha_not_cierre,  	sys_user,  	evaluado_doc,  	evaluado_nombre,  	evaluado_cargo,  	evaluado_email,  	evaluado_dep_sup,  	evaluado_dep,  	evaluado_nombramiento,  	evaluado_fechai_po,  	evaluado_fechaf_po,  	evaluado_fechai_pp,  	evaluado_fechaf_pp,  	evaluador_doc,  	evaluador_nombre,  	evaluador_cargo,  	evaluador_email,  	evaluador_dep_sup,  	evaluador_dep,  	sys_date,  	evaluador_nombramiento,  	valor_funcional,  	valor_programado,  	valor_pendiente,  	id_comportamental_fk,  	valor_comun,  	valor_jerarquico,  	valor_total";
$tdataevaluacion[".sqlFrom"] = "FROM evaluacion";
$tdataevaluacion[".sqlWhereExpr"] = "";
$tdataevaluacion[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataevaluacion[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataevaluacion[".arrGroupsPerPage"] = $arrGPP;

$tdataevaluacion[".highlightSearchResults"] = true;

$tableKeysevaluacion = array();
$tableKeysevaluacion[] = "id";
$tdataevaluacion[".Keys"] = $tableKeysevaluacion;


$tdataevaluacion[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "evaluacion";
	$fdata["Label"] = GetFieldLabel("evaluacion","id");
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


	$tdataevaluacion["id"] = $fdata;
		$tdataevaluacion[".searchableFields"][] = "id";
//	idEvaluado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "idEvaluado";
	$fdata["GoodName"] = "idEvaluado";
	$fdata["ownerTable"] = "evaluacion";
	$fdata["Label"] = GetFieldLabel("evaluacion","idEvaluado");
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


	$tdataevaluacion["idEvaluado"] = $fdata;
		$tdataevaluacion[".searchableFields"][] = "idEvaluado";
//	idEvaluador
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "idEvaluador";
	$fdata["GoodName"] = "idEvaluador";
	$fdata["ownerTable"] = "evaluacion";
	$fdata["Label"] = GetFieldLabel("evaluacion","idEvaluador");
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


	$tdataevaluacion["idEvaluador"] = $fdata;
		$tdataevaluacion[".searchableFields"][] = "idEvaluador";
//	idEvaluadorFinal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "idEvaluadorFinal";
	$fdata["GoodName"] = "idEvaluadorFinal";
	$fdata["ownerTable"] = "evaluacion";
	$fdata["Label"] = GetFieldLabel("evaluacion","idEvaluadorFinal");
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


	$tdataevaluacion["idEvaluadorFinal"] = $fdata;
		$tdataevaluacion[".searchableFields"][] = "idEvaluadorFinal";
//	IdEvaluador_c
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "IdEvaluador_c";
	$fdata["GoodName"] = "IdEvaluador_c";
	$fdata["ownerTable"] = "evaluacion";
	$fdata["Label"] = GetFieldLabel("evaluacion","IdEvaluador_c");
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


	$tdataevaluacion["IdEvaluador_c"] = $fdata;
		$tdataevaluacion[".searchableFields"][] = "IdEvaluador_c";
//	IdEvaluador_d
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "IdEvaluador_d";
	$fdata["GoodName"] = "IdEvaluador_d";
	$fdata["ownerTable"] = "evaluacion";
	$fdata["Label"] = GetFieldLabel("evaluacion","IdEvaluador_d");
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


	$tdataevaluacion["IdEvaluador_d"] = $fdata;
		$tdataevaluacion[".searchableFields"][] = "IdEvaluador_d";
//	vigencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "vigencia";
	$fdata["GoodName"] = "vigencia";
	$fdata["ownerTable"] = "evaluacion";
	$fdata["Label"] = GetFieldLabel("evaluacion","vigencia");
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


	$tdataevaluacion["vigencia"] = $fdata;
		$tdataevaluacion[".searchableFields"][] = "vigencia";
//	periodo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "periodo";
	$fdata["GoodName"] = "periodo";
	$fdata["ownerTable"] = "evaluacion";
	$fdata["Label"] = GetFieldLabel("evaluacion","periodo");
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


	$tdataevaluacion["periodo"] = $fdata;
		$tdataevaluacion[".searchableFields"][] = "periodo";
//	fchCreacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "fchCreacion";
	$fdata["GoodName"] = "fchCreacion";
	$fdata["ownerTable"] = "evaluacion";
	$fdata["Label"] = GetFieldLabel("evaluacion","fchCreacion");
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


	$tdataevaluacion["fchCreacion"] = $fdata;
		$tdataevaluacion[".searchableFields"][] = "fchCreacion";
//	fchEdefinitiva
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "fchEdefinitiva";
	$fdata["GoodName"] = "fchEdefinitiva";
	$fdata["ownerTable"] = "evaluacion";
	$fdata["Label"] = GetFieldLabel("evaluacion","fchEdefinitiva");
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


	$tdataevaluacion["fchEdefinitiva"] = $fdata;
		$tdataevaluacion[".searchableFields"][] = "fchEdefinitiva";
//	estado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "estado";
	$fdata["GoodName"] = "estado";
	$fdata["ownerTable"] = "evaluacion";
	$fdata["Label"] = GetFieldLabel("evaluacion","estado");
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


	$tdataevaluacion["estado"] = $fdata;
		$tdataevaluacion[".searchableFields"][] = "estado";
//	email_not_cierre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "email_not_cierre";
	$fdata["GoodName"] = "email_not_cierre";
	$fdata["ownerTable"] = "evaluacion";
	$fdata["Label"] = GetFieldLabel("evaluacion","email_not_cierre");
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


	$tdataevaluacion["email_not_cierre"] = $fdata;
		$tdataevaluacion[".searchableFields"][] = "email_not_cierre";
//	fecha_not_cierre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "fecha_not_cierre";
	$fdata["GoodName"] = "fecha_not_cierre";
	$fdata["ownerTable"] = "evaluacion";
	$fdata["Label"] = GetFieldLabel("evaluacion","fecha_not_cierre");
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


	$tdataevaluacion["fecha_not_cierre"] = $fdata;
		$tdataevaluacion[".searchableFields"][] = "fecha_not_cierre";
//	sys_user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "sys_user";
	$fdata["GoodName"] = "sys_user";
	$fdata["ownerTable"] = "evaluacion";
	$fdata["Label"] = GetFieldLabel("evaluacion","sys_user");
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


	$tdataevaluacion["sys_user"] = $fdata;
		$tdataevaluacion[".searchableFields"][] = "sys_user";
//	evaluado_doc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "evaluado_doc";
	$fdata["GoodName"] = "evaluado_doc";
	$fdata["ownerTable"] = "evaluacion";
	$fdata["Label"] = GetFieldLabel("evaluacion","evaluado_doc");
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


	$tdataevaluacion["evaluado_doc"] = $fdata;
		$tdataevaluacion[".searchableFields"][] = "evaluado_doc";
//	evaluado_nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "evaluado_nombre";
	$fdata["GoodName"] = "evaluado_nombre";
	$fdata["ownerTable"] = "evaluacion";
	$fdata["Label"] = GetFieldLabel("evaluacion","evaluado_nombre");
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


	$tdataevaluacion["evaluado_nombre"] = $fdata;
		$tdataevaluacion[".searchableFields"][] = "evaluado_nombre";
//	evaluado_cargo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "evaluado_cargo";
	$fdata["GoodName"] = "evaluado_cargo";
	$fdata["ownerTable"] = "evaluacion";
	$fdata["Label"] = GetFieldLabel("evaluacion","evaluado_cargo");
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


	$tdataevaluacion["evaluado_cargo"] = $fdata;
		$tdataevaluacion[".searchableFields"][] = "evaluado_cargo";
//	evaluado_email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "evaluado_email";
	$fdata["GoodName"] = "evaluado_email";
	$fdata["ownerTable"] = "evaluacion";
	$fdata["Label"] = GetFieldLabel("evaluacion","evaluado_email");
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


	$tdataevaluacion["evaluado_email"] = $fdata;
		$tdataevaluacion[".searchableFields"][] = "evaluado_email";
//	evaluado_dep_sup
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "evaluado_dep_sup";
	$fdata["GoodName"] = "evaluado_dep_sup";
	$fdata["ownerTable"] = "evaluacion";
	$fdata["Label"] = GetFieldLabel("evaluacion","evaluado_dep_sup");
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


	$tdataevaluacion["evaluado_dep_sup"] = $fdata;
		$tdataevaluacion[".searchableFields"][] = "evaluado_dep_sup";
//	evaluado_dep
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "evaluado_dep";
	$fdata["GoodName"] = "evaluado_dep";
	$fdata["ownerTable"] = "evaluacion";
	$fdata["Label"] = GetFieldLabel("evaluacion","evaluado_dep");
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


	$tdataevaluacion["evaluado_dep"] = $fdata;
		$tdataevaluacion[".searchableFields"][] = "evaluado_dep";
//	evaluado_nombramiento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "evaluado_nombramiento";
	$fdata["GoodName"] = "evaluado_nombramiento";
	$fdata["ownerTable"] = "evaluacion";
	$fdata["Label"] = GetFieldLabel("evaluacion","evaluado_nombramiento");
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


	$tdataevaluacion["evaluado_nombramiento"] = $fdata;
		$tdataevaluacion[".searchableFields"][] = "evaluado_nombramiento";
//	evaluado_fechai_po
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "evaluado_fechai_po";
	$fdata["GoodName"] = "evaluado_fechai_po";
	$fdata["ownerTable"] = "evaluacion";
	$fdata["Label"] = GetFieldLabel("evaluacion","evaluado_fechai_po");
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


	$tdataevaluacion["evaluado_fechai_po"] = $fdata;
		$tdataevaluacion[".searchableFields"][] = "evaluado_fechai_po";
//	evaluado_fechaf_po
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "evaluado_fechaf_po";
	$fdata["GoodName"] = "evaluado_fechaf_po";
	$fdata["ownerTable"] = "evaluacion";
	$fdata["Label"] = GetFieldLabel("evaluacion","evaluado_fechaf_po");
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


	$tdataevaluacion["evaluado_fechaf_po"] = $fdata;
		$tdataevaluacion[".searchableFields"][] = "evaluado_fechaf_po";
//	evaluado_fechai_pp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "evaluado_fechai_pp";
	$fdata["GoodName"] = "evaluado_fechai_pp";
	$fdata["ownerTable"] = "evaluacion";
	$fdata["Label"] = GetFieldLabel("evaluacion","evaluado_fechai_pp");
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


	$tdataevaluacion["evaluado_fechai_pp"] = $fdata;
		$tdataevaluacion[".searchableFields"][] = "evaluado_fechai_pp";
//	evaluado_fechaf_pp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "evaluado_fechaf_pp";
	$fdata["GoodName"] = "evaluado_fechaf_pp";
	$fdata["ownerTable"] = "evaluacion";
	$fdata["Label"] = GetFieldLabel("evaluacion","evaluado_fechaf_pp");
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


	$tdataevaluacion["evaluado_fechaf_pp"] = $fdata;
		$tdataevaluacion[".searchableFields"][] = "evaluado_fechaf_pp";
//	evaluador_doc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "evaluador_doc";
	$fdata["GoodName"] = "evaluador_doc";
	$fdata["ownerTable"] = "evaluacion";
	$fdata["Label"] = GetFieldLabel("evaluacion","evaluador_doc");
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


	$tdataevaluacion["evaluador_doc"] = $fdata;
		$tdataevaluacion[".searchableFields"][] = "evaluador_doc";
//	evaluador_nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "evaluador_nombre";
	$fdata["GoodName"] = "evaluador_nombre";
	$fdata["ownerTable"] = "evaluacion";
	$fdata["Label"] = GetFieldLabel("evaluacion","evaluador_nombre");
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


	$tdataevaluacion["evaluador_nombre"] = $fdata;
		$tdataevaluacion[".searchableFields"][] = "evaluador_nombre";
//	evaluador_cargo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "evaluador_cargo";
	$fdata["GoodName"] = "evaluador_cargo";
	$fdata["ownerTable"] = "evaluacion";
	$fdata["Label"] = GetFieldLabel("evaluacion","evaluador_cargo");
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


	$tdataevaluacion["evaluador_cargo"] = $fdata;
		$tdataevaluacion[".searchableFields"][] = "evaluador_cargo";
//	evaluador_email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "evaluador_email";
	$fdata["GoodName"] = "evaluador_email";
	$fdata["ownerTable"] = "evaluacion";
	$fdata["Label"] = GetFieldLabel("evaluacion","evaluador_email");
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


	$tdataevaluacion["evaluador_email"] = $fdata;
		$tdataevaluacion[".searchableFields"][] = "evaluador_email";
//	evaluador_dep_sup
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "evaluador_dep_sup";
	$fdata["GoodName"] = "evaluador_dep_sup";
	$fdata["ownerTable"] = "evaluacion";
	$fdata["Label"] = GetFieldLabel("evaluacion","evaluador_dep_sup");
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


	$tdataevaluacion["evaluador_dep_sup"] = $fdata;
		$tdataevaluacion[".searchableFields"][] = "evaluador_dep_sup";
//	evaluador_dep
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "evaluador_dep";
	$fdata["GoodName"] = "evaluador_dep";
	$fdata["ownerTable"] = "evaluacion";
	$fdata["Label"] = GetFieldLabel("evaluacion","evaluador_dep");
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


	$tdataevaluacion["evaluador_dep"] = $fdata;
		$tdataevaluacion[".searchableFields"][] = "evaluador_dep";
//	sys_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "sys_date";
	$fdata["GoodName"] = "sys_date";
	$fdata["ownerTable"] = "evaluacion";
	$fdata["Label"] = GetFieldLabel("evaluacion","sys_date");
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


	$tdataevaluacion["sys_date"] = $fdata;
		$tdataevaluacion[".searchableFields"][] = "sys_date";
//	evaluador_nombramiento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "evaluador_nombramiento";
	$fdata["GoodName"] = "evaluador_nombramiento";
	$fdata["ownerTable"] = "evaluacion";
	$fdata["Label"] = GetFieldLabel("evaluacion","evaluador_nombramiento");
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


	$tdataevaluacion["evaluador_nombramiento"] = $fdata;
		$tdataevaluacion[".searchableFields"][] = "evaluador_nombramiento";
//	valor_funcional
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "valor_funcional";
	$fdata["GoodName"] = "valor_funcional";
	$fdata["ownerTable"] = "evaluacion";
	$fdata["Label"] = GetFieldLabel("evaluacion","valor_funcional");
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


	$tdataevaluacion["valor_funcional"] = $fdata;
		$tdataevaluacion[".searchableFields"][] = "valor_funcional";
//	valor_programado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "valor_programado";
	$fdata["GoodName"] = "valor_programado";
	$fdata["ownerTable"] = "evaluacion";
	$fdata["Label"] = GetFieldLabel("evaluacion","valor_programado");
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


	$tdataevaluacion["valor_programado"] = $fdata;
		$tdataevaluacion[".searchableFields"][] = "valor_programado";
//	valor_pendiente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "valor_pendiente";
	$fdata["GoodName"] = "valor_pendiente";
	$fdata["ownerTable"] = "evaluacion";
	$fdata["Label"] = GetFieldLabel("evaluacion","valor_pendiente");
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


	$tdataevaluacion["valor_pendiente"] = $fdata;
		$tdataevaluacion[".searchableFields"][] = "valor_pendiente";
//	id_comportamental_fk
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "id_comportamental_fk";
	$fdata["GoodName"] = "id_comportamental_fk";
	$fdata["ownerTable"] = "evaluacion";
	$fdata["Label"] = GetFieldLabel("evaluacion","id_comportamental_fk");
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


	$tdataevaluacion["id_comportamental_fk"] = $fdata;
		$tdataevaluacion[".searchableFields"][] = "id_comportamental_fk";
//	valor_comun
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "valor_comun";
	$fdata["GoodName"] = "valor_comun";
	$fdata["ownerTable"] = "evaluacion";
	$fdata["Label"] = GetFieldLabel("evaluacion","valor_comun");
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


	$tdataevaluacion["valor_comun"] = $fdata;
		$tdataevaluacion[".searchableFields"][] = "valor_comun";
//	valor_jerarquico
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "valor_jerarquico";
	$fdata["GoodName"] = "valor_jerarquico";
	$fdata["ownerTable"] = "evaluacion";
	$fdata["Label"] = GetFieldLabel("evaluacion","valor_jerarquico");
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


	$tdataevaluacion["valor_jerarquico"] = $fdata;
		$tdataevaluacion[".searchableFields"][] = "valor_jerarquico";
//	valor_total
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "valor_total";
	$fdata["GoodName"] = "valor_total";
	$fdata["ownerTable"] = "evaluacion";
	$fdata["Label"] = GetFieldLabel("evaluacion","valor_total");
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


	$tdataevaluacion["valor_total"] = $fdata;
		$tdataevaluacion[".searchableFields"][] = "valor_total";


$tables_data["evaluacion"]=&$tdataevaluacion;
$field_labels["evaluacion"] = &$fieldLabelsevaluacion;
$fieldToolTips["evaluacion"] = &$fieldToolTipsevaluacion;
$placeHolders["evaluacion"] = &$placeHoldersevaluacion;
$page_titles["evaluacion"] = &$pageTitlesevaluacion;


changeTextControlsToDate( "evaluacion" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["evaluacion"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["evaluacion"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_evaluacion()
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
	"m_srcTableName" => "evaluacion"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "evaluacion";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "idEvaluado",
	"m_strTable" => "evaluacion",
	"m_srcTableName" => "evaluacion"
));

$proto8["m_sql"] = "idEvaluado";
$proto8["m_srcTableName"] = "evaluacion";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "idEvaluador",
	"m_strTable" => "evaluacion",
	"m_srcTableName" => "evaluacion"
));

$proto10["m_sql"] = "idEvaluador";
$proto10["m_srcTableName"] = "evaluacion";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "idEvaluadorFinal",
	"m_strTable" => "evaluacion",
	"m_srcTableName" => "evaluacion"
));

$proto12["m_sql"] = "idEvaluadorFinal";
$proto12["m_srcTableName"] = "evaluacion";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "IdEvaluador_c",
	"m_strTable" => "evaluacion",
	"m_srcTableName" => "evaluacion"
));

$proto14["m_sql"] = "IdEvaluador_c";
$proto14["m_srcTableName"] = "evaluacion";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "IdEvaluador_d",
	"m_strTable" => "evaluacion",
	"m_srcTableName" => "evaluacion"
));

$proto16["m_sql"] = "IdEvaluador_d";
$proto16["m_srcTableName"] = "evaluacion";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "vigencia",
	"m_strTable" => "evaluacion",
	"m_srcTableName" => "evaluacion"
));

$proto18["m_sql"] = "vigencia";
$proto18["m_srcTableName"] = "evaluacion";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "periodo",
	"m_strTable" => "evaluacion",
	"m_srcTableName" => "evaluacion"
));

$proto20["m_sql"] = "periodo";
$proto20["m_srcTableName"] = "evaluacion";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "fchCreacion",
	"m_strTable" => "evaluacion",
	"m_srcTableName" => "evaluacion"
));

$proto22["m_sql"] = "fchCreacion";
$proto22["m_srcTableName"] = "evaluacion";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "fchEdefinitiva",
	"m_strTable" => "evaluacion",
	"m_srcTableName" => "evaluacion"
));

$proto24["m_sql"] = "fchEdefinitiva";
$proto24["m_srcTableName"] = "evaluacion";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "estado",
	"m_strTable" => "evaluacion",
	"m_srcTableName" => "evaluacion"
));

$proto26["m_sql"] = "estado";
$proto26["m_srcTableName"] = "evaluacion";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "email_not_cierre",
	"m_strTable" => "evaluacion",
	"m_srcTableName" => "evaluacion"
));

$proto28["m_sql"] = "email_not_cierre";
$proto28["m_srcTableName"] = "evaluacion";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_not_cierre",
	"m_strTable" => "evaluacion",
	"m_srcTableName" => "evaluacion"
));

$proto30["m_sql"] = "fecha_not_cierre";
$proto30["m_srcTableName"] = "evaluacion";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_user",
	"m_strTable" => "evaluacion",
	"m_srcTableName" => "evaluacion"
));

$proto32["m_sql"] = "sys_user";
$proto32["m_srcTableName"] = "evaluacion";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "evaluado_doc",
	"m_strTable" => "evaluacion",
	"m_srcTableName" => "evaluacion"
));

$proto34["m_sql"] = "evaluado_doc";
$proto34["m_srcTableName"] = "evaluacion";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "evaluado_nombre",
	"m_strTable" => "evaluacion",
	"m_srcTableName" => "evaluacion"
));

$proto36["m_sql"] = "evaluado_nombre";
$proto36["m_srcTableName"] = "evaluacion";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "evaluado_cargo",
	"m_strTable" => "evaluacion",
	"m_srcTableName" => "evaluacion"
));

$proto38["m_sql"] = "evaluado_cargo";
$proto38["m_srcTableName"] = "evaluacion";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "evaluado_email",
	"m_strTable" => "evaluacion",
	"m_srcTableName" => "evaluacion"
));

$proto40["m_sql"] = "evaluado_email";
$proto40["m_srcTableName"] = "evaluacion";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "evaluado_dep_sup",
	"m_strTable" => "evaluacion",
	"m_srcTableName" => "evaluacion"
));

$proto42["m_sql"] = "evaluado_dep_sup";
$proto42["m_srcTableName"] = "evaluacion";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "evaluado_dep",
	"m_strTable" => "evaluacion",
	"m_srcTableName" => "evaluacion"
));

$proto44["m_sql"] = "evaluado_dep";
$proto44["m_srcTableName"] = "evaluacion";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "evaluado_nombramiento",
	"m_strTable" => "evaluacion",
	"m_srcTableName" => "evaluacion"
));

$proto46["m_sql"] = "evaluado_nombramiento";
$proto46["m_srcTableName"] = "evaluacion";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "evaluado_fechai_po",
	"m_strTable" => "evaluacion",
	"m_srcTableName" => "evaluacion"
));

$proto48["m_sql"] = "evaluado_fechai_po";
$proto48["m_srcTableName"] = "evaluacion";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "evaluado_fechaf_po",
	"m_strTable" => "evaluacion",
	"m_srcTableName" => "evaluacion"
));

$proto50["m_sql"] = "evaluado_fechaf_po";
$proto50["m_srcTableName"] = "evaluacion";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "evaluado_fechai_pp",
	"m_strTable" => "evaluacion",
	"m_srcTableName" => "evaluacion"
));

$proto52["m_sql"] = "evaluado_fechai_pp";
$proto52["m_srcTableName"] = "evaluacion";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "evaluado_fechaf_pp",
	"m_strTable" => "evaluacion",
	"m_srcTableName" => "evaluacion"
));

$proto54["m_sql"] = "evaluado_fechaf_pp";
$proto54["m_srcTableName"] = "evaluacion";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "evaluador_doc",
	"m_strTable" => "evaluacion",
	"m_srcTableName" => "evaluacion"
));

$proto56["m_sql"] = "evaluador_doc";
$proto56["m_srcTableName"] = "evaluacion";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "evaluador_nombre",
	"m_strTable" => "evaluacion",
	"m_srcTableName" => "evaluacion"
));

$proto58["m_sql"] = "evaluador_nombre";
$proto58["m_srcTableName"] = "evaluacion";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "evaluador_cargo",
	"m_strTable" => "evaluacion",
	"m_srcTableName" => "evaluacion"
));

$proto60["m_sql"] = "evaluador_cargo";
$proto60["m_srcTableName"] = "evaluacion";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "evaluador_email",
	"m_strTable" => "evaluacion",
	"m_srcTableName" => "evaluacion"
));

$proto62["m_sql"] = "evaluador_email";
$proto62["m_srcTableName"] = "evaluacion";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "evaluador_dep_sup",
	"m_strTable" => "evaluacion",
	"m_srcTableName" => "evaluacion"
));

$proto64["m_sql"] = "evaluador_dep_sup";
$proto64["m_srcTableName"] = "evaluacion";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "evaluador_dep",
	"m_strTable" => "evaluacion",
	"m_srcTableName" => "evaluacion"
));

$proto66["m_sql"] = "evaluador_dep";
$proto66["m_srcTableName"] = "evaluacion";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_date",
	"m_strTable" => "evaluacion",
	"m_srcTableName" => "evaluacion"
));

$proto68["m_sql"] = "sys_date";
$proto68["m_srcTableName"] = "evaluacion";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "evaluador_nombramiento",
	"m_strTable" => "evaluacion",
	"m_srcTableName" => "evaluacion"
));

$proto70["m_sql"] = "evaluador_nombramiento";
$proto70["m_srcTableName"] = "evaluacion";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "valor_funcional",
	"m_strTable" => "evaluacion",
	"m_srcTableName" => "evaluacion"
));

$proto72["m_sql"] = "valor_funcional";
$proto72["m_srcTableName"] = "evaluacion";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "valor_programado",
	"m_strTable" => "evaluacion",
	"m_srcTableName" => "evaluacion"
));

$proto74["m_sql"] = "valor_programado";
$proto74["m_srcTableName"] = "evaluacion";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "valor_pendiente",
	"m_strTable" => "evaluacion",
	"m_srcTableName" => "evaluacion"
));

$proto76["m_sql"] = "valor_pendiente";
$proto76["m_srcTableName"] = "evaluacion";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "id_comportamental_fk",
	"m_strTable" => "evaluacion",
	"m_srcTableName" => "evaluacion"
));

$proto78["m_sql"] = "id_comportamental_fk";
$proto78["m_srcTableName"] = "evaluacion";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "valor_comun",
	"m_strTable" => "evaluacion",
	"m_srcTableName" => "evaluacion"
));

$proto80["m_sql"] = "valor_comun";
$proto80["m_srcTableName"] = "evaluacion";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
						$proto82=array();
			$obj = new SQLField(array(
	"m_strName" => "valor_jerarquico",
	"m_strTable" => "evaluacion",
	"m_srcTableName" => "evaluacion"
));

$proto82["m_sql"] = "valor_jerarquico";
$proto82["m_srcTableName"] = "evaluacion";
$proto82["m_expr"]=$obj;
$proto82["m_alias"] = "";
$obj = new SQLFieldListItem($proto82);

$proto0["m_fieldlist"][]=$obj;
						$proto84=array();
			$obj = new SQLField(array(
	"m_strName" => "valor_total",
	"m_strTable" => "evaluacion",
	"m_srcTableName" => "evaluacion"
));

$proto84["m_sql"] = "valor_total";
$proto84["m_srcTableName"] = "evaluacion";
$proto84["m_expr"]=$obj;
$proto84["m_alias"] = "";
$obj = new SQLFieldListItem($proto84);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto86=array();
$proto86["m_link"] = "SQLL_MAIN";
			$proto87=array();
$proto87["m_strName"] = "evaluacion";
$proto87["m_srcTableName"] = "evaluacion";
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
$proto86["m_srcTableName"] = "evaluacion";
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
$proto0["m_srcTableName"]="evaluacion";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_evaluacion = createSqlQuery_evaluacion();


	
				;

																																								

$tdataevaluacion[".sqlquery"] = $queryData_evaluacion;



$tdataevaluacion[".hasEvents"] = false;

?>