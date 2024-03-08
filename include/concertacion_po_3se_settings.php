<?php
$tdataconcertacion_po_3se = array();
$tdataconcertacion_po_3se[".searchableFields"] = array();
$tdataconcertacion_po_3se[".ShortName"] = "concertacion_po_3se";
$tdataconcertacion_po_3se[".OwnerID"] = "idEvaluado";
$tdataconcertacion_po_3se[".OriginalTable"] = "evaluacion";


$tdataconcertacion_po_3se[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataconcertacion_po_3se[".originalPagesByType"] = $tdataconcertacion_po_3se[".pagesByType"];
$tdataconcertacion_po_3se[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataconcertacion_po_3se[".originalPages"] = $tdataconcertacion_po_3se[".pages"];
$tdataconcertacion_po_3se[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataconcertacion_po_3se[".originalDefaultPages"] = $tdataconcertacion_po_3se[".defaultPages"];

//	field labels
$fieldLabelsconcertacion_po_3se = array();
$fieldToolTipsconcertacion_po_3se = array();
$pageTitlesconcertacion_po_3se = array();
$placeHoldersconcertacion_po_3se = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsconcertacion_po_3se["Spanish"] = array();
	$fieldToolTipsconcertacion_po_3se["Spanish"] = array();
	$placeHoldersconcertacion_po_3se["Spanish"] = array();
	$pageTitlesconcertacion_po_3se["Spanish"] = array();
	$fieldLabelsconcertacion_po_3se["Spanish"]["id"] = "Radicado";
	$fieldToolTipsconcertacion_po_3se["Spanish"]["id"] = "";
	$placeHoldersconcertacion_po_3se["Spanish"]["id"] = "";
	$fieldLabelsconcertacion_po_3se["Spanish"]["idEvaluado"] = "Evaluado";
	$fieldToolTipsconcertacion_po_3se["Spanish"]["idEvaluado"] = "";
	$placeHoldersconcertacion_po_3se["Spanish"]["idEvaluado"] = "";
	$fieldLabelsconcertacion_po_3se["Spanish"]["idEvaluador"] = "Evaluador";
	$fieldToolTipsconcertacion_po_3se["Spanish"]["idEvaluador"] = "";
	$placeHoldersconcertacion_po_3se["Spanish"]["idEvaluador"] = "";
	$fieldLabelsconcertacion_po_3se["Spanish"]["IdEvaluador_c"] = "IdEvaluador C";
	$fieldToolTipsconcertacion_po_3se["Spanish"]["IdEvaluador_c"] = "";
	$placeHoldersconcertacion_po_3se["Spanish"]["IdEvaluador_c"] = "";
	$fieldLabelsconcertacion_po_3se["Spanish"]["IdEvaluador_d"] = "IdEvaluador D";
	$fieldToolTipsconcertacion_po_3se["Spanish"]["IdEvaluador_d"] = "";
	$placeHoldersconcertacion_po_3se["Spanish"]["IdEvaluador_d"] = "";
	$fieldLabelsconcertacion_po_3se["Spanish"]["vigencia"] = "Vigencia";
	$fieldToolTipsconcertacion_po_3se["Spanish"]["vigencia"] = "";
	$placeHoldersconcertacion_po_3se["Spanish"]["vigencia"] = "";
	$fieldLabelsconcertacion_po_3se["Spanish"]["periodo"] = "Tipo de concertación";
	$fieldToolTipsconcertacion_po_3se["Spanish"]["periodo"] = "";
	$placeHoldersconcertacion_po_3se["Spanish"]["periodo"] = "";
	$fieldLabelsconcertacion_po_3se["Spanish"]["fchCreacion"] = "Fecha de concertación";
	$fieldToolTipsconcertacion_po_3se["Spanish"]["fchCreacion"] = "";
	$placeHoldersconcertacion_po_3se["Spanish"]["fchCreacion"] = "";
	$fieldLabelsconcertacion_po_3se["Spanish"]["fchEdefinitiva"] = "Fch Edefinitiva";
	$fieldToolTipsconcertacion_po_3se["Spanish"]["fchEdefinitiva"] = "";
	$placeHoldersconcertacion_po_3se["Spanish"]["fchEdefinitiva"] = "";
	$fieldLabelsconcertacion_po_3se["Spanish"]["estado"] = "Estado de concertación";
	$fieldToolTipsconcertacion_po_3se["Spanish"]["estado"] = "";
	$placeHoldersconcertacion_po_3se["Spanish"]["estado"] = "";
	$fieldLabelsconcertacion_po_3se["Spanish"]["email_not_cierre"] = "Email Not Cierre";
	$fieldToolTipsconcertacion_po_3se["Spanish"]["email_not_cierre"] = "";
	$placeHoldersconcertacion_po_3se["Spanish"]["email_not_cierre"] = "";
	$fieldLabelsconcertacion_po_3se["Spanish"]["fecha_not_cierre"] = "Fecha Not Cierre";
	$fieldToolTipsconcertacion_po_3se["Spanish"]["fecha_not_cierre"] = "";
	$placeHoldersconcertacion_po_3se["Spanish"]["fecha_not_cierre"] = "";
	$fieldLabelsconcertacion_po_3se["Spanish"]["sys_user"] = "Proyectada por";
	$fieldToolTipsconcertacion_po_3se["Spanish"]["sys_user"] = "";
	$placeHoldersconcertacion_po_3se["Spanish"]["sys_user"] = "";
	$fieldLabelsconcertacion_po_3se["Spanish"]["evaluado_doc"] = "Documento";
	$fieldToolTipsconcertacion_po_3se["Spanish"]["evaluado_doc"] = "";
	$placeHoldersconcertacion_po_3se["Spanish"]["evaluado_doc"] = "";
	$fieldLabelsconcertacion_po_3se["Spanish"]["evaluado_nombre"] = "Nombres y apellidos";
	$fieldToolTipsconcertacion_po_3se["Spanish"]["evaluado_nombre"] = "";
	$placeHoldersconcertacion_po_3se["Spanish"]["evaluado_nombre"] = "";
	$fieldLabelsconcertacion_po_3se["Spanish"]["evaluado_cargo"] = "Cargo actual";
	$fieldToolTipsconcertacion_po_3se["Spanish"]["evaluado_cargo"] = "";
	$placeHoldersconcertacion_po_3se["Spanish"]["evaluado_cargo"] = "";
	$fieldLabelsconcertacion_po_3se["Spanish"]["evaluado_email"] = "Correo electrónico";
	$fieldToolTipsconcertacion_po_3se["Spanish"]["evaluado_email"] = "";
	$placeHoldersconcertacion_po_3se["Spanish"]["evaluado_email"] = "";
	$fieldLabelsconcertacion_po_3se["Spanish"]["evaluado_dep_sup"] = "Dependencia superior";
	$fieldToolTipsconcertacion_po_3se["Spanish"]["evaluado_dep_sup"] = "";
	$placeHoldersconcertacion_po_3se["Spanish"]["evaluado_dep_sup"] = "";
	$fieldLabelsconcertacion_po_3se["Spanish"]["evaluado_dep"] = "Dependencia";
	$fieldToolTipsconcertacion_po_3se["Spanish"]["evaluado_dep"] = "";
	$placeHoldersconcertacion_po_3se["Spanish"]["evaluado_dep"] = "";
	$fieldLabelsconcertacion_po_3se["Spanish"]["evaluado_fechai_po"] = "Fecha inicial de concertación";
	$fieldToolTipsconcertacion_po_3se["Spanish"]["evaluado_fechai_po"] = "";
	$placeHoldersconcertacion_po_3se["Spanish"]["evaluado_fechai_po"] = "";
	$fieldLabelsconcertacion_po_3se["Spanish"]["evaluado_fechaf_po"] = "Fecha final de concertación";
	$fieldToolTipsconcertacion_po_3se["Spanish"]["evaluado_fechaf_po"] = "";
	$placeHoldersconcertacion_po_3se["Spanish"]["evaluado_fechaf_po"] = "";
	$fieldLabelsconcertacion_po_3se["Spanish"]["evaluador_doc"] = "Documento evaluador";
	$fieldToolTipsconcertacion_po_3se["Spanish"]["evaluador_doc"] = "";
	$placeHoldersconcertacion_po_3se["Spanish"]["evaluador_doc"] = "";
	$fieldLabelsconcertacion_po_3se["Spanish"]["evaluador_nombre"] = "Nombres y apellidos evaluador";
	$fieldToolTipsconcertacion_po_3se["Spanish"]["evaluador_nombre"] = "";
	$placeHoldersconcertacion_po_3se["Spanish"]["evaluador_nombre"] = "";
	$fieldLabelsconcertacion_po_3se["Spanish"]["evaluador_cargo"] = "Cargo Evaluador";
	$fieldToolTipsconcertacion_po_3se["Spanish"]["evaluador_cargo"] = "";
	$placeHoldersconcertacion_po_3se["Spanish"]["evaluador_cargo"] = "";
	$fieldLabelsconcertacion_po_3se["Spanish"]["evaluador_email"] = "Email evaluador";
	$fieldToolTipsconcertacion_po_3se["Spanish"]["evaluador_email"] = "";
	$placeHoldersconcertacion_po_3se["Spanish"]["evaluador_email"] = "";
	$fieldLabelsconcertacion_po_3se["Spanish"]["evaluador_dep_sup"] = "Dependencia superior";
	$fieldToolTipsconcertacion_po_3se["Spanish"]["evaluador_dep_sup"] = "";
	$placeHoldersconcertacion_po_3se["Spanish"]["evaluador_dep_sup"] = "";
	$fieldLabelsconcertacion_po_3se["Spanish"]["evaluador_dep"] = "Dependencia evaluador";
	$fieldToolTipsconcertacion_po_3se["Spanish"]["evaluador_dep"] = "";
	$placeHoldersconcertacion_po_3se["Spanish"]["evaluador_dep"] = "";
	$fieldLabelsconcertacion_po_3se["Spanish"]["evaluador_nombramiento"] = "Nombramiento evaluador";
	$fieldToolTipsconcertacion_po_3se["Spanish"]["evaluador_nombramiento"] = "";
	$placeHoldersconcertacion_po_3se["Spanish"]["evaluador_nombramiento"] = "";
	$fieldLabelsconcertacion_po_3se["Spanish"]["evaluado_nombramiento"] = "Nombramiento";
	$fieldToolTipsconcertacion_po_3se["Spanish"]["evaluado_nombramiento"] = "";
	$placeHoldersconcertacion_po_3se["Spanish"]["evaluado_nombramiento"] = "";
	$fieldLabelsconcertacion_po_3se["Spanish"]["id_comportamental_fk"] = "Nivel de competencia";
	$fieldToolTipsconcertacion_po_3se["Spanish"]["id_comportamental_fk"] = "";
	$placeHoldersconcertacion_po_3se["Spanish"]["id_comportamental_fk"] = "";
	$fieldLabelsconcertacion_po_3se["Spanish"]["valor_programado"] = "Valor Programado";
	$fieldToolTipsconcertacion_po_3se["Spanish"]["valor_programado"] = "";
	$placeHoldersconcertacion_po_3se["Spanish"]["valor_programado"] = "";
	$fieldLabelsconcertacion_po_3se["Spanish"]["valor_comun"] = "Valor Comun";
	$fieldToolTipsconcertacion_po_3se["Spanish"]["valor_comun"] = "";
	$placeHoldersconcertacion_po_3se["Spanish"]["valor_comun"] = "";
	$fieldLabelsconcertacion_po_3se["Spanish"]["valor_jerarquico"] = "Valor Jerarquico";
	$fieldToolTipsconcertacion_po_3se["Spanish"]["valor_jerarquico"] = "";
	$placeHoldersconcertacion_po_3se["Spanish"]["valor_jerarquico"] = "";
	$fieldLabelsconcertacion_po_3se["Spanish"]["valor_total"] = "Valor Total";
	$fieldToolTipsconcertacion_po_3se["Spanish"]["valor_total"] = "";
	$placeHoldersconcertacion_po_3se["Spanish"]["valor_total"] = "";
	if (count($fieldToolTipsconcertacion_po_3se["Spanish"]))
		$tdataconcertacion_po_3se[".isUseToolTips"] = true;
}


	$tdataconcertacion_po_3se[".NCSearch"] = true;



$tdataconcertacion_po_3se[".shortTableName"] = "concertacion_po_3se";
$tdataconcertacion_po_3se[".nSecOptions"] = 1;

$tdataconcertacion_po_3se[".mainTableOwnerID"] = "idEvaluado";
$tdataconcertacion_po_3se[".entityType"] = 1;
$tdataconcertacion_po_3se[".connId"] = "edl2_at_127_0_0_1";


$tdataconcertacion_po_3se[".strOriginalTableName"] = "evaluacion";

	



$tdataconcertacion_po_3se[".showAddInPopup"] = false;

$tdataconcertacion_po_3se[".showEditInPopup"] = false;

$tdataconcertacion_po_3se[".showViewInPopup"] = false;

$tdataconcertacion_po_3se[".listAjax"] = false;
//	temporary
//$tdataconcertacion_po_3se[".listAjax"] = false;

	$tdataconcertacion_po_3se[".audit"] = true;

	$tdataconcertacion_po_3se[".locking"] = true;


$pages = $tdataconcertacion_po_3se[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataconcertacion_po_3se[".edit"] = true;
	$tdataconcertacion_po_3se[".afterEditAction"] = 1;
	$tdataconcertacion_po_3se[".closePopupAfterEdit"] = 1;
	$tdataconcertacion_po_3se[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataconcertacion_po_3se[".add"] = true;
$tdataconcertacion_po_3se[".afterAddAction"] = 1;
$tdataconcertacion_po_3se[".closePopupAfterAdd"] = 1;
$tdataconcertacion_po_3se[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataconcertacion_po_3se[".list"] = true;
}



$tdataconcertacion_po_3se[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataconcertacion_po_3se[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataconcertacion_po_3se[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataconcertacion_po_3se[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataconcertacion_po_3se[".printFriendly"] = true;
}



$tdataconcertacion_po_3se[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataconcertacion_po_3se[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataconcertacion_po_3se[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataconcertacion_po_3se[".isUseAjaxSuggest"] = true;



																																													

$tdataconcertacion_po_3se[".ajaxCodeSnippetAdded"] = false;

$tdataconcertacion_po_3se[".buttonsAdded"] = false;

$tdataconcertacion_po_3se[".addPageEvents"] = true;

// use timepicker for search panel
$tdataconcertacion_po_3se[".isUseTimeForSearch"] = false;


$tdataconcertacion_po_3se[".badgeColor"] = "6493EA";


$tdataconcertacion_po_3se[".allSearchFields"] = array();
$tdataconcertacion_po_3se[".filterFields"] = array();
$tdataconcertacion_po_3se[".requiredSearchFields"] = array();

$tdataconcertacion_po_3se[".googleLikeFields"] = array();
$tdataconcertacion_po_3se[".googleLikeFields"][] = "id";
$tdataconcertacion_po_3se[".googleLikeFields"][] = "idEvaluado";
$tdataconcertacion_po_3se[".googleLikeFields"][] = "idEvaluador";
$tdataconcertacion_po_3se[".googleLikeFields"][] = "IdEvaluador_c";
$tdataconcertacion_po_3se[".googleLikeFields"][] = "IdEvaluador_d";
$tdataconcertacion_po_3se[".googleLikeFields"][] = "vigencia";
$tdataconcertacion_po_3se[".googleLikeFields"][] = "periodo";
$tdataconcertacion_po_3se[".googleLikeFields"][] = "fchCreacion";
$tdataconcertacion_po_3se[".googleLikeFields"][] = "fchEdefinitiva";
$tdataconcertacion_po_3se[".googleLikeFields"][] = "estado";
$tdataconcertacion_po_3se[".googleLikeFields"][] = "email_not_cierre";
$tdataconcertacion_po_3se[".googleLikeFields"][] = "fecha_not_cierre";
$tdataconcertacion_po_3se[".googleLikeFields"][] = "sys_user";
$tdataconcertacion_po_3se[".googleLikeFields"][] = "evaluado_doc";
$tdataconcertacion_po_3se[".googleLikeFields"][] = "evaluado_nombre";
$tdataconcertacion_po_3se[".googleLikeFields"][] = "evaluado_cargo";
$tdataconcertacion_po_3se[".googleLikeFields"][] = "evaluado_email";
$tdataconcertacion_po_3se[".googleLikeFields"][] = "evaluado_dep_sup";
$tdataconcertacion_po_3se[".googleLikeFields"][] = "evaluado_dep";
$tdataconcertacion_po_3se[".googleLikeFields"][] = "evaluado_fechai_po";
$tdataconcertacion_po_3se[".googleLikeFields"][] = "evaluado_fechaf_po";
$tdataconcertacion_po_3se[".googleLikeFields"][] = "evaluador_doc";
$tdataconcertacion_po_3se[".googleLikeFields"][] = "evaluador_nombre";
$tdataconcertacion_po_3se[".googleLikeFields"][] = "evaluador_cargo";
$tdataconcertacion_po_3se[".googleLikeFields"][] = "evaluador_email";
$tdataconcertacion_po_3se[".googleLikeFields"][] = "evaluador_dep_sup";
$tdataconcertacion_po_3se[".googleLikeFields"][] = "evaluador_dep";
$tdataconcertacion_po_3se[".googleLikeFields"][] = "evaluador_nombramiento";
$tdataconcertacion_po_3se[".googleLikeFields"][] = "evaluado_nombramiento";
$tdataconcertacion_po_3se[".googleLikeFields"][] = "id_comportamental_fk";
$tdataconcertacion_po_3se[".googleLikeFields"][] = "valor_programado";
$tdataconcertacion_po_3se[".googleLikeFields"][] = "valor_comun";
$tdataconcertacion_po_3se[".googleLikeFields"][] = "valor_jerarquico";
$tdataconcertacion_po_3se[".googleLikeFields"][] = "valor_total";



$tdataconcertacion_po_3se[".tableType"] = "list";

$tdataconcertacion_po_3se[".printerPageOrientation"] = 0;
$tdataconcertacion_po_3se[".nPrinterPageScale"] = 100;

$tdataconcertacion_po_3se[".nPrinterSplitRecords"] = 40;

$tdataconcertacion_po_3se[".geocodingEnabled"] = false;







$tdataconcertacion_po_3se[".noRecordsFirstPage"] = true;



$tdataconcertacion_po_3se[".pageSize"] = 20;

$tdataconcertacion_po_3se[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataconcertacion_po_3se[".strOrderBy"] = $tstrOrderBy;

$tdataconcertacion_po_3se[".orderindexes"] = array();


$tdataconcertacion_po_3se[".sqlHead"] = "SELECT id,  idEvaluado,  idEvaluador,  IdEvaluador_c,  IdEvaluador_d,  vigencia,  periodo,  fchCreacion,  fchEdefinitiva,  estado,  email_not_cierre,  fecha_not_cierre,  sys_user,  evaluado_doc,  evaluado_nombre,  evaluado_cargo,  evaluado_email,  evaluado_dep_sup,  evaluado_dep,  evaluado_fechai_po,  evaluado_fechaf_po,  evaluador_doc,  evaluador_nombre,  evaluador_cargo,  evaluador_email,  evaluador_dep_sup,  evaluador_dep,  evaluador_nombramiento,  evaluado_nombramiento,  id_comportamental_fk,  valor_programado,  valor_comun,  valor_jerarquico,  valor_total";
$tdataconcertacion_po_3se[".sqlFrom"] = "FROM evaluacion";
$tdataconcertacion_po_3se[".sqlWhereExpr"] = "(estado = 3)";
$tdataconcertacion_po_3se[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataconcertacion_po_3se[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataconcertacion_po_3se[".arrGroupsPerPage"] = $arrGPP;

$tdataconcertacion_po_3se[".highlightSearchResults"] = true;

$tableKeysconcertacion_po_3se = array();
$tableKeysconcertacion_po_3se[] = "id";
$tdataconcertacion_po_3se[".Keys"] = $tableKeysconcertacion_po_3se;


$tdataconcertacion_po_3se[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "evaluacion";
	$fdata["Label"] = GetFieldLabel("concertacion_po_3se","id");
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


	$tdataconcertacion_po_3se["id"] = $fdata;
		$tdataconcertacion_po_3se[".searchableFields"][] = "id";
//	idEvaluado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "idEvaluado";
	$fdata["GoodName"] = "idEvaluado";
	$fdata["ownerTable"] = "evaluacion";
	$fdata["Label"] = GetFieldLabel("concertacion_po_3se","idEvaluado");
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 1;
	$edata["LookupTable"] = "";
	$edata["LookupConnId"] = "";
			$edata["autoCompleteFieldsOnEdit"] = 1;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "id";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
		$edata["SimpleAdd"] = true;


	
	
	
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


	$tdataconcertacion_po_3se["idEvaluado"] = $fdata;
		$tdataconcertacion_po_3se[".searchableFields"][] = "idEvaluado";
//	idEvaluador
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "idEvaluador";
	$fdata["GoodName"] = "idEvaluador";
	$fdata["ownerTable"] = "evaluacion";
	$fdata["Label"] = GetFieldLabel("concertacion_po_3se","idEvaluador");
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
				$edata["LookupType"] = 1;
	$edata["LookupTable"] = "";
	$edata["LookupConnId"] = "";
			$edata["autoCompleteFieldsOnEdit"] = 1;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "nombre_funcionario";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
		$edata["SimpleAdd"] = true;


	
	
	
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
		
		$edata["autoUpdatable"] = true;

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


	$tdataconcertacion_po_3se["idEvaluador"] = $fdata;
		$tdataconcertacion_po_3se[".searchableFields"][] = "idEvaluador";
//	IdEvaluador_c
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "IdEvaluador_c";
	$fdata["GoodName"] = "IdEvaluador_c";
	$fdata["ownerTable"] = "evaluacion";
	$fdata["Label"] = GetFieldLabel("concertacion_po_3se","IdEvaluador_c");
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


	$tdataconcertacion_po_3se["IdEvaluador_c"] = $fdata;
		$tdataconcertacion_po_3se[".searchableFields"][] = "IdEvaluador_c";
//	IdEvaluador_d
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "IdEvaluador_d";
	$fdata["GoodName"] = "IdEvaluador_d";
	$fdata["ownerTable"] = "evaluacion";
	$fdata["Label"] = GetFieldLabel("concertacion_po_3se","IdEvaluador_d");
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


	$tdataconcertacion_po_3se["IdEvaluador_d"] = $fdata;
		$tdataconcertacion_po_3se[".searchableFields"][] = "IdEvaluador_d";
//	vigencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "vigencia";
	$fdata["GoodName"] = "vigencia";
	$fdata["ownerTable"] = "evaluacion";
	$fdata["Label"] = GetFieldLabel("concertacion_po_3se","vigencia");
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
			$edata["autoCompleteFieldsOnEdit"] = 1;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"evaluado_fechai_po", 'lookupF'=>"vigencia_ini_ordinaria");
	$edata["autoCompleteFields"][] = array('masterF'=>"evaluado_fechaf_po", 'lookupF'=>"vigencia_fin_ordinaria");
	$edata["LCType"] = 4;

		$edata["HorizontalLookup"] = true;

		
	$edata["LinkField"] = "vigencia_id";
	$edata["LinkFieldType"] = 2;
	$edata["DisplayField"] = "vigencia_id";

				$edata["LookupWhereCode"] = true;


	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
	
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
		$fdata["filterMultiSelect"] = 1;
		$fdata["filterTotalFields"] = "id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataconcertacion_po_3se["vigencia"] = $fdata;
		$tdataconcertacion_po_3se[".searchableFields"][] = "vigencia";
//	periodo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "periodo";
	$fdata["GoodName"] = "periodo";
	$fdata["ownerTable"] = "evaluacion";
	$fdata["Label"] = GetFieldLabel("concertacion_po_3se","periodo");
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
		$edata["LCType"] = 4;

		$edata["HorizontalLookup"] = true;

		
	$edata["LinkField"] = "periodo_id";
	$edata["LinkFieldType"] = 16;
	$edata["DisplayField"] = "periodo_name";

				$edata["LookupWhereCode"] = true;


	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
	
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
		
		$edata["autoUpdatable"] = true;

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


	$tdataconcertacion_po_3se["periodo"] = $fdata;
		$tdataconcertacion_po_3se[".searchableFields"][] = "periodo";
//	fchCreacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "fchCreacion";
	$fdata["GoodName"] = "fchCreacion";
	$fdata["ownerTable"] = "evaluacion";
	$fdata["Label"] = GetFieldLabel("concertacion_po_3se","fchCreacion");
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

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[1,2,3,4,5]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 2;
	$edata["InitialYearFactor"] = 0;
	$edata["LastYearFactor"] = 1;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
		$edata["autoUpdatable"] = true;

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


	$tdataconcertacion_po_3se["fchCreacion"] = $fdata;
		$tdataconcertacion_po_3se[".searchableFields"][] = "fchCreacion";
//	fchEdefinitiva
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "fchEdefinitiva";
	$fdata["GoodName"] = "fchEdefinitiva";
	$fdata["ownerTable"] = "evaluacion";
	$fdata["Label"] = GetFieldLabel("concertacion_po_3se","fchEdefinitiva");
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


	$tdataconcertacion_po_3se["fchEdefinitiva"] = $fdata;
		$tdataconcertacion_po_3se[".searchableFields"][] = "fchEdefinitiva";
//	estado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "estado";
	$fdata["GoodName"] = "estado";
	$fdata["ownerTable"] = "evaluacion";
	$fdata["Label"] = GetFieldLabel("concertacion_po_3se","estado");
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
		$edata["LCType"] = 4;

	
		
	$edata["LinkField"] = "estadoeval_id";
	$edata["LinkFieldType"] = 16;
	$edata["DisplayField"] = "estadoeval_name";

				$edata["LookupWhereCode"] = true;


	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
	
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
		
		$edata["autoUpdatable"] = true;

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


	$tdataconcertacion_po_3se["estado"] = $fdata;
		$tdataconcertacion_po_3se[".searchableFields"][] = "estado";
//	email_not_cierre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "email_not_cierre";
	$fdata["GoodName"] = "email_not_cierre";
	$fdata["ownerTable"] = "evaluacion";
	$fdata["Label"] = GetFieldLabel("concertacion_po_3se","email_not_cierre");
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


	$tdataconcertacion_po_3se["email_not_cierre"] = $fdata;
		$tdataconcertacion_po_3se[".searchableFields"][] = "email_not_cierre";
//	fecha_not_cierre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "fecha_not_cierre";
	$fdata["GoodName"] = "fecha_not_cierre";
	$fdata["ownerTable"] = "evaluacion";
	$fdata["Label"] = GetFieldLabel("concertacion_po_3se","fecha_not_cierre");
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


	$tdataconcertacion_po_3se["fecha_not_cierre"] = $fdata;
		$tdataconcertacion_po_3se[".searchableFields"][] = "fecha_not_cierre";
//	sys_user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "sys_user";
	$fdata["GoodName"] = "sys_user";
	$fdata["ownerTable"] = "evaluacion";
	$fdata["Label"] = GetFieldLabel("concertacion_po_3se","sys_user");
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

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
		$edata["autoUpdatable"] = true;

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


	$tdataconcertacion_po_3se["sys_user"] = $fdata;
		$tdataconcertacion_po_3se[".searchableFields"][] = "sys_user";
//	evaluado_doc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "evaluado_doc";
	$fdata["GoodName"] = "evaluado_doc";
	$fdata["ownerTable"] = "evaluacion";
	$fdata["Label"] = GetFieldLabel("concertacion_po_3se","evaluado_doc");
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

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
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


	$tdataconcertacion_po_3se["evaluado_doc"] = $fdata;
		$tdataconcertacion_po_3se[".searchableFields"][] = "evaluado_doc";
//	evaluado_nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "evaluado_nombre";
	$fdata["GoodName"] = "evaluado_nombre";
	$fdata["ownerTable"] = "evaluacion";
	$fdata["Label"] = GetFieldLabel("concertacion_po_3se","evaluado_nombre");
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

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
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


	$tdataconcertacion_po_3se["evaluado_nombre"] = $fdata;
		$tdataconcertacion_po_3se[".searchableFields"][] = "evaluado_nombre";
//	evaluado_cargo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "evaluado_cargo";
	$fdata["GoodName"] = "evaluado_cargo";
	$fdata["ownerTable"] = "evaluacion";
	$fdata["Label"] = GetFieldLabel("concertacion_po_3se","evaluado_cargo");
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "cargo";
		$edata["listPageId"] = "list";
		$edata["autoCompleteFieldsOnEdit"] = 1;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"id_comportamental_fk", 'lookupF'=>"idComportamentalFK");
	$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "nombre";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
	
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


	$tdataconcertacion_po_3se["evaluado_cargo"] = $fdata;
		$tdataconcertacion_po_3se[".searchableFields"][] = "evaluado_cargo";
//	evaluado_email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "evaluado_email";
	$fdata["GoodName"] = "evaluado_email";
	$fdata["ownerTable"] = "evaluacion";
	$fdata["Label"] = GetFieldLabel("concertacion_po_3se","evaluado_email");
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

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
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


	$tdataconcertacion_po_3se["evaluado_email"] = $fdata;
		$tdataconcertacion_po_3se[".searchableFields"][] = "evaluado_email";
//	evaluado_dep_sup
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "evaluado_dep_sup";
	$fdata["GoodName"] = "evaluado_dep_sup";
	$fdata["ownerTable"] = "evaluacion";
	$fdata["Label"] = GetFieldLabel("concertacion_po_3se","evaluado_dep_sup");
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "dependencias_001";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_depto_superior";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "Departamento_superior";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "evaluado_dep";
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "evaluador_dep";

	
	
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


	$tdataconcertacion_po_3se["evaluado_dep_sup"] = $fdata;
		$tdataconcertacion_po_3se[".searchableFields"][] = "evaluado_dep_sup";
//	evaluado_dep
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "evaluado_dep";
	$fdata["GoodName"] = "evaluado_dep";
	$fdata["ownerTable"] = "evaluacion";
	$fdata["Label"] = GetFieldLabel("concertacion_po_3se","evaluado_dep");
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "dependencia";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "nombre";

	

	
	$edata["LookupOrderBy"] = "";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "evaluado_dep_sup", "lookup" => "id_depto_superior" );

	
	

	
	
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


	$tdataconcertacion_po_3se["evaluado_dep"] = $fdata;
		$tdataconcertacion_po_3se[".searchableFields"][] = "evaluado_dep";
//	evaluado_fechai_po
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "evaluado_fechai_po";
	$fdata["GoodName"] = "evaluado_fechai_po";
	$fdata["ownerTable"] = "evaluacion";
	$fdata["Label"] = GetFieldLabel("concertacion_po_3se","evaluado_fechai_po");
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

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 2;
	$edata["InitialYearFactor"] = 0;
	$edata["LastYearFactor"] = 1;

	
	
	
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


	$tdataconcertacion_po_3se["evaluado_fechai_po"] = $fdata;
		$tdataconcertacion_po_3se[".searchableFields"][] = "evaluado_fechai_po";
//	evaluado_fechaf_po
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "evaluado_fechaf_po";
	$fdata["GoodName"] = "evaluado_fechaf_po";
	$fdata["ownerTable"] = "evaluacion";
	$fdata["Label"] = GetFieldLabel("concertacion_po_3se","evaluado_fechaf_po");
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

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 2;
	$edata["InitialYearFactor"] = 0;
	$edata["LastYearFactor"] = 1;

	
	
	
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


	$tdataconcertacion_po_3se["evaluado_fechaf_po"] = $fdata;
		$tdataconcertacion_po_3se[".searchableFields"][] = "evaluado_fechaf_po";
//	evaluador_doc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "evaluador_doc";
	$fdata["GoodName"] = "evaluador_doc";
	$fdata["ownerTable"] = "evaluacion";
	$fdata["Label"] = GetFieldLabel("concertacion_po_3se","evaluador_doc");
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

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
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


	$tdataconcertacion_po_3se["evaluador_doc"] = $fdata;
		$tdataconcertacion_po_3se[".searchableFields"][] = "evaluador_doc";
//	evaluador_nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "evaluador_nombre";
	$fdata["GoodName"] = "evaluador_nombre";
	$fdata["ownerTable"] = "evaluacion";
	$fdata["Label"] = GetFieldLabel("concertacion_po_3se","evaluador_nombre");
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

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
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


	$tdataconcertacion_po_3se["evaluador_nombre"] = $fdata;
		$tdataconcertacion_po_3se[".searchableFields"][] = "evaluador_nombre";
//	evaluador_cargo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "evaluador_cargo";
	$fdata["GoodName"] = "evaluador_cargo";
	$fdata["ownerTable"] = "evaluacion";
	$fdata["Label"] = GetFieldLabel("concertacion_po_3se","evaluador_cargo");
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "cargo";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "nombre";

	

	
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


	$tdataconcertacion_po_3se["evaluador_cargo"] = $fdata;
		$tdataconcertacion_po_3se[".searchableFields"][] = "evaluador_cargo";
//	evaluador_email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "evaluador_email";
	$fdata["GoodName"] = "evaluador_email";
	$fdata["ownerTable"] = "evaluacion";
	$fdata["Label"] = GetFieldLabel("concertacion_po_3se","evaluador_email");
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

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
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


	$tdataconcertacion_po_3se["evaluador_email"] = $fdata;
		$tdataconcertacion_po_3se[".searchableFields"][] = "evaluador_email";
//	evaluador_dep_sup
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "evaluador_dep_sup";
	$fdata["GoodName"] = "evaluador_dep_sup";
	$fdata["ownerTable"] = "evaluacion";
	$fdata["Label"] = GetFieldLabel("concertacion_po_3se","evaluador_dep_sup");
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "dependencias_001";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_depto_superior";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Departamento_superior";

	

	
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


	$tdataconcertacion_po_3se["evaluador_dep_sup"] = $fdata;
		$tdataconcertacion_po_3se[".searchableFields"][] = "evaluador_dep_sup";
//	evaluador_dep
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "evaluador_dep";
	$fdata["GoodName"] = "evaluador_dep";
	$fdata["ownerTable"] = "evaluacion";
	$fdata["Label"] = GetFieldLabel("concertacion_po_3se","evaluador_dep");
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "dependencia";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "nombre";

	

	
	$edata["LookupOrderBy"] = "";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "evaluado_dep_sup", "lookup" => "id_depto_superior" );

	
	

	
	
	
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


	$tdataconcertacion_po_3se["evaluador_dep"] = $fdata;
		$tdataconcertacion_po_3se[".searchableFields"][] = "evaluador_dep";
//	evaluador_nombramiento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "evaluador_nombramiento";
	$fdata["GoodName"] = "evaluador_nombramiento";
	$fdata["ownerTable"] = "evaluacion";
	$fdata["Label"] = GetFieldLabel("concertacion_po_3se","evaluador_nombramiento");
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "nombramiento";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "nombre";

	

	
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


	$tdataconcertacion_po_3se["evaluador_nombramiento"] = $fdata;
		$tdataconcertacion_po_3se[".searchableFields"][] = "evaluador_nombramiento";
//	evaluado_nombramiento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "evaluado_nombramiento";
	$fdata["GoodName"] = "evaluado_nombramiento";
	$fdata["ownerTable"] = "evaluacion";
	$fdata["Label"] = GetFieldLabel("concertacion_po_3se","evaluado_nombramiento");
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "nombramiento";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "nombre";

	

	
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


	$tdataconcertacion_po_3se["evaluado_nombramiento"] = $fdata;
		$tdataconcertacion_po_3se[".searchableFields"][] = "evaluado_nombramiento";
//	id_comportamental_fk
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "id_comportamental_fk";
	$fdata["GoodName"] = "id_comportamental_fk";
	$fdata["ownerTable"] = "evaluacion";
	$fdata["Label"] = GetFieldLabel("concertacion_po_3se","id_comportamental_fk");
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "comportamental";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "nombre";

	

	
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


	$tdataconcertacion_po_3se["id_comportamental_fk"] = $fdata;
		$tdataconcertacion_po_3se[".searchableFields"][] = "id_comportamental_fk";
//	valor_programado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "valor_programado";
	$fdata["GoodName"] = "valor_programado";
	$fdata["ownerTable"] = "evaluacion";
	$fdata["Label"] = GetFieldLabel("concertacion_po_3se","valor_programado");
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


	$tdataconcertacion_po_3se["valor_programado"] = $fdata;
		$tdataconcertacion_po_3se[".searchableFields"][] = "valor_programado";
//	valor_comun
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "valor_comun";
	$fdata["GoodName"] = "valor_comun";
	$fdata["ownerTable"] = "evaluacion";
	$fdata["Label"] = GetFieldLabel("concertacion_po_3se","valor_comun");
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


	$tdataconcertacion_po_3se["valor_comun"] = $fdata;
		$tdataconcertacion_po_3se[".searchableFields"][] = "valor_comun";
//	valor_jerarquico
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "valor_jerarquico";
	$fdata["GoodName"] = "valor_jerarquico";
	$fdata["ownerTable"] = "evaluacion";
	$fdata["Label"] = GetFieldLabel("concertacion_po_3se","valor_jerarquico");
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


	$tdataconcertacion_po_3se["valor_jerarquico"] = $fdata;
		$tdataconcertacion_po_3se[".searchableFields"][] = "valor_jerarquico";
//	valor_total
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "valor_total";
	$fdata["GoodName"] = "valor_total";
	$fdata["ownerTable"] = "evaluacion";
	$fdata["Label"] = GetFieldLabel("concertacion_po_3se","valor_total");
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


	$tdataconcertacion_po_3se["valor_total"] = $fdata;
		$tdataconcertacion_po_3se[".searchableFields"][] = "valor_total";


$tables_data["concertacion_po_3se"]=&$tdataconcertacion_po_3se;
$field_labels["concertacion_po_3se"] = &$fieldLabelsconcertacion_po_3se;
$fieldToolTips["concertacion_po_3se"] = &$fieldToolTipsconcertacion_po_3se;
$placeHolders["concertacion_po_3se"] = &$placeHoldersconcertacion_po_3se;
$page_titles["concertacion_po_3se"] = &$pageTitlesconcertacion_po_3se;


changeTextControlsToDate( "concertacion_po_3se" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["concertacion_po_3se"] = array();
//	evaluacion_po
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="evaluacion_po";
		$detailsParam["dOriginalTable"] = "evaluacion_p";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "evaluacion_po";
	$detailsParam["dCaptionTable"] = GetTableCaption("evaluacion_po");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["concertacion_po_3se"][$dIndex] = $detailsParam;

	
		$detailsTablesData["concertacion_po_3se"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["concertacion_po_3se"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["concertacion_po_3se"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["concertacion_po_3se"][$dIndex]["detailKeys"][]="evaluacion_id_fk";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["concertacion_po_3se"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_concertacion_po_3se()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  idEvaluado,  idEvaluador,  IdEvaluador_c,  IdEvaluador_d,  vigencia,  periodo,  fchCreacion,  fchEdefinitiva,  estado,  email_not_cierre,  fecha_not_cierre,  sys_user,  evaluado_doc,  evaluado_nombre,  evaluado_cargo,  evaluado_email,  evaluado_dep_sup,  evaluado_dep,  evaluado_fechai_po,  evaluado_fechaf_po,  evaluador_doc,  evaluador_nombre,  evaluador_cargo,  evaluador_email,  evaluador_dep_sup,  evaluador_dep,  evaluador_nombramiento,  evaluado_nombramiento,  id_comportamental_fk,  valor_programado,  valor_comun,  valor_jerarquico,  valor_total";
$proto0["m_strFrom"] = "FROM evaluacion";
$proto0["m_strWhere"] = "(estado = 3)";
$proto0["m_strOrderBy"] = "";
	
				;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "estado = 3";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "estado",
	"m_strTable" => "evaluacion",
	"m_srcTableName" => "concertacion_po_3se"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "= 3";
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
	"m_srcTableName" => "concertacion_po_3se"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "concertacion_po_3se";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "idEvaluado",
	"m_strTable" => "evaluacion",
	"m_srcTableName" => "concertacion_po_3se"
));

$proto8["m_sql"] = "idEvaluado";
$proto8["m_srcTableName"] = "concertacion_po_3se";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "idEvaluador",
	"m_strTable" => "evaluacion",
	"m_srcTableName" => "concertacion_po_3se"
));

$proto10["m_sql"] = "idEvaluador";
$proto10["m_srcTableName"] = "concertacion_po_3se";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "IdEvaluador_c",
	"m_strTable" => "evaluacion",
	"m_srcTableName" => "concertacion_po_3se"
));

$proto12["m_sql"] = "IdEvaluador_c";
$proto12["m_srcTableName"] = "concertacion_po_3se";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "IdEvaluador_d",
	"m_strTable" => "evaluacion",
	"m_srcTableName" => "concertacion_po_3se"
));

$proto14["m_sql"] = "IdEvaluador_d";
$proto14["m_srcTableName"] = "concertacion_po_3se";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "vigencia",
	"m_strTable" => "evaluacion",
	"m_srcTableName" => "concertacion_po_3se"
));

$proto16["m_sql"] = "vigencia";
$proto16["m_srcTableName"] = "concertacion_po_3se";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "periodo",
	"m_strTable" => "evaluacion",
	"m_srcTableName" => "concertacion_po_3se"
));

$proto18["m_sql"] = "periodo";
$proto18["m_srcTableName"] = "concertacion_po_3se";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "fchCreacion",
	"m_strTable" => "evaluacion",
	"m_srcTableName" => "concertacion_po_3se"
));

$proto20["m_sql"] = "fchCreacion";
$proto20["m_srcTableName"] = "concertacion_po_3se";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "fchEdefinitiva",
	"m_strTable" => "evaluacion",
	"m_srcTableName" => "concertacion_po_3se"
));

$proto22["m_sql"] = "fchEdefinitiva";
$proto22["m_srcTableName"] = "concertacion_po_3se";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "estado",
	"m_strTable" => "evaluacion",
	"m_srcTableName" => "concertacion_po_3se"
));

$proto24["m_sql"] = "estado";
$proto24["m_srcTableName"] = "concertacion_po_3se";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "email_not_cierre",
	"m_strTable" => "evaluacion",
	"m_srcTableName" => "concertacion_po_3se"
));

$proto26["m_sql"] = "email_not_cierre";
$proto26["m_srcTableName"] = "concertacion_po_3se";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_not_cierre",
	"m_strTable" => "evaluacion",
	"m_srcTableName" => "concertacion_po_3se"
));

$proto28["m_sql"] = "fecha_not_cierre";
$proto28["m_srcTableName"] = "concertacion_po_3se";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_user",
	"m_strTable" => "evaluacion",
	"m_srcTableName" => "concertacion_po_3se"
));

$proto30["m_sql"] = "sys_user";
$proto30["m_srcTableName"] = "concertacion_po_3se";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "evaluado_doc",
	"m_strTable" => "evaluacion",
	"m_srcTableName" => "concertacion_po_3se"
));

$proto32["m_sql"] = "evaluado_doc";
$proto32["m_srcTableName"] = "concertacion_po_3se";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "evaluado_nombre",
	"m_strTable" => "evaluacion",
	"m_srcTableName" => "concertacion_po_3se"
));

$proto34["m_sql"] = "evaluado_nombre";
$proto34["m_srcTableName"] = "concertacion_po_3se";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "evaluado_cargo",
	"m_strTable" => "evaluacion",
	"m_srcTableName" => "concertacion_po_3se"
));

$proto36["m_sql"] = "evaluado_cargo";
$proto36["m_srcTableName"] = "concertacion_po_3se";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "evaluado_email",
	"m_strTable" => "evaluacion",
	"m_srcTableName" => "concertacion_po_3se"
));

$proto38["m_sql"] = "evaluado_email";
$proto38["m_srcTableName"] = "concertacion_po_3se";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "evaluado_dep_sup",
	"m_strTable" => "evaluacion",
	"m_srcTableName" => "concertacion_po_3se"
));

$proto40["m_sql"] = "evaluado_dep_sup";
$proto40["m_srcTableName"] = "concertacion_po_3se";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "evaluado_dep",
	"m_strTable" => "evaluacion",
	"m_srcTableName" => "concertacion_po_3se"
));

$proto42["m_sql"] = "evaluado_dep";
$proto42["m_srcTableName"] = "concertacion_po_3se";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "evaluado_fechai_po",
	"m_strTable" => "evaluacion",
	"m_srcTableName" => "concertacion_po_3se"
));

$proto44["m_sql"] = "evaluado_fechai_po";
$proto44["m_srcTableName"] = "concertacion_po_3se";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "evaluado_fechaf_po",
	"m_strTable" => "evaluacion",
	"m_srcTableName" => "concertacion_po_3se"
));

$proto46["m_sql"] = "evaluado_fechaf_po";
$proto46["m_srcTableName"] = "concertacion_po_3se";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "evaluador_doc",
	"m_strTable" => "evaluacion",
	"m_srcTableName" => "concertacion_po_3se"
));

$proto48["m_sql"] = "evaluador_doc";
$proto48["m_srcTableName"] = "concertacion_po_3se";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "evaluador_nombre",
	"m_strTable" => "evaluacion",
	"m_srcTableName" => "concertacion_po_3se"
));

$proto50["m_sql"] = "evaluador_nombre";
$proto50["m_srcTableName"] = "concertacion_po_3se";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "evaluador_cargo",
	"m_strTable" => "evaluacion",
	"m_srcTableName" => "concertacion_po_3se"
));

$proto52["m_sql"] = "evaluador_cargo";
$proto52["m_srcTableName"] = "concertacion_po_3se";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "evaluador_email",
	"m_strTable" => "evaluacion",
	"m_srcTableName" => "concertacion_po_3se"
));

$proto54["m_sql"] = "evaluador_email";
$proto54["m_srcTableName"] = "concertacion_po_3se";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "evaluador_dep_sup",
	"m_strTable" => "evaluacion",
	"m_srcTableName" => "concertacion_po_3se"
));

$proto56["m_sql"] = "evaluador_dep_sup";
$proto56["m_srcTableName"] = "concertacion_po_3se";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "evaluador_dep",
	"m_strTable" => "evaluacion",
	"m_srcTableName" => "concertacion_po_3se"
));

$proto58["m_sql"] = "evaluador_dep";
$proto58["m_srcTableName"] = "concertacion_po_3se";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "evaluador_nombramiento",
	"m_strTable" => "evaluacion",
	"m_srcTableName" => "concertacion_po_3se"
));

$proto60["m_sql"] = "evaluador_nombramiento";
$proto60["m_srcTableName"] = "concertacion_po_3se";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "evaluado_nombramiento",
	"m_strTable" => "evaluacion",
	"m_srcTableName" => "concertacion_po_3se"
));

$proto62["m_sql"] = "evaluado_nombramiento";
$proto62["m_srcTableName"] = "concertacion_po_3se";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "id_comportamental_fk",
	"m_strTable" => "evaluacion",
	"m_srcTableName" => "concertacion_po_3se"
));

$proto64["m_sql"] = "id_comportamental_fk";
$proto64["m_srcTableName"] = "concertacion_po_3se";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "valor_programado",
	"m_strTable" => "evaluacion",
	"m_srcTableName" => "concertacion_po_3se"
));

$proto66["m_sql"] = "valor_programado";
$proto66["m_srcTableName"] = "concertacion_po_3se";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "valor_comun",
	"m_strTable" => "evaluacion",
	"m_srcTableName" => "concertacion_po_3se"
));

$proto68["m_sql"] = "valor_comun";
$proto68["m_srcTableName"] = "concertacion_po_3se";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "valor_jerarquico",
	"m_strTable" => "evaluacion",
	"m_srcTableName" => "concertacion_po_3se"
));

$proto70["m_sql"] = "valor_jerarquico";
$proto70["m_srcTableName"] = "concertacion_po_3se";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "valor_total",
	"m_strTable" => "evaluacion",
	"m_srcTableName" => "concertacion_po_3se"
));

$proto72["m_sql"] = "valor_total";
$proto72["m_srcTableName"] = "concertacion_po_3se";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto74=array();
$proto74["m_link"] = "SQLL_MAIN";
			$proto75=array();
$proto75["m_strName"] = "evaluacion";
$proto75["m_srcTableName"] = "concertacion_po_3se";
$proto75["m_columns"] = array();
$proto75["m_columns"][] = "id";
$proto75["m_columns"][] = "idEvaluado";
$proto75["m_columns"][] = "idEvaluador";
$proto75["m_columns"][] = "idEvaluadorFinal";
$proto75["m_columns"][] = "IdEvaluador_c";
$proto75["m_columns"][] = "IdEvaluador_d";
$proto75["m_columns"][] = "vigencia";
$proto75["m_columns"][] = "periodo";
$proto75["m_columns"][] = "fchCreacion";
$proto75["m_columns"][] = "fchEdefinitiva";
$proto75["m_columns"][] = "estado";
$proto75["m_columns"][] = "email_not_cierre";
$proto75["m_columns"][] = "fecha_not_cierre";
$proto75["m_columns"][] = "sys_user";
$proto75["m_columns"][] = "evaluado_doc";
$proto75["m_columns"][] = "evaluado_nombre";
$proto75["m_columns"][] = "evaluado_cargo";
$proto75["m_columns"][] = "evaluado_email";
$proto75["m_columns"][] = "evaluado_dep_sup";
$proto75["m_columns"][] = "evaluado_dep";
$proto75["m_columns"][] = "evaluado_nombramiento";
$proto75["m_columns"][] = "evaluado_fechai_po";
$proto75["m_columns"][] = "evaluado_fechaf_po";
$proto75["m_columns"][] = "evaluado_fechai_pp";
$proto75["m_columns"][] = "evaluado_fechaf_pp";
$proto75["m_columns"][] = "evaluador_doc";
$proto75["m_columns"][] = "evaluador_nombre";
$proto75["m_columns"][] = "evaluador_cargo";
$proto75["m_columns"][] = "evaluador_email";
$proto75["m_columns"][] = "evaluador_dep_sup";
$proto75["m_columns"][] = "evaluador_dep";
$proto75["m_columns"][] = "sys_date";
$proto75["m_columns"][] = "evaluador_nombramiento";
$proto75["m_columns"][] = "valor_funcional";
$proto75["m_columns"][] = "valor_programado";
$proto75["m_columns"][] = "valor_pendiente";
$proto75["m_columns"][] = "id_comportamental_fk";
$proto75["m_columns"][] = "valor_comun";
$proto75["m_columns"][] = "valor_jerarquico";
$proto75["m_columns"][] = "valor_total";
$obj = new SQLTable($proto75);

$proto74["m_table"] = $obj;
$proto74["m_sql"] = "evaluacion";
$proto74["m_alias"] = "";
$proto74["m_srcTableName"] = "concertacion_po_3se";
$proto76=array();
$proto76["m_sql"] = "";
$proto76["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto76["m_column"]=$obj;
$proto76["m_contained"] = array();
$proto76["m_strCase"] = "";
$proto76["m_havingmode"] = false;
$proto76["m_inBrackets"] = false;
$proto76["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto76);

$proto74["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto74);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="concertacion_po_3se";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_concertacion_po_3se = createSqlQuery_concertacion_po_3se();


	
				;

																																		

$tdataconcertacion_po_3se[".sqlquery"] = $queryData_concertacion_po_3se;



include_once(getabspath("include/concertacion_po_3se_events.php"));
$tdataconcertacion_po_3se[".hasEvents"] = true;

?>