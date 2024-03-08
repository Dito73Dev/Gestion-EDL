<?php
$tdataevaluacion_p = array();
$tdataevaluacion_p[".searchableFields"] = array();
$tdataevaluacion_p[".ShortName"] = "evaluacion_p";
$tdataevaluacion_p[".OwnerID"] = "";
$tdataevaluacion_p[".OriginalTable"] = "evaluacion_p";


$tdataevaluacion_p[".pagesByType"] = my_json_decode( "{\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" );
$tdataevaluacion_p[".originalPagesByType"] = $tdataevaluacion_p[".pagesByType"];
$tdataevaluacion_p[".pages"] = types2pages( my_json_decode( "{\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" ) );
$tdataevaluacion_p[".originalPages"] = $tdataevaluacion_p[".pages"];
$tdataevaluacion_p[".defaultPages"] = my_json_decode( "{\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"search\":\"search\"}" );
$tdataevaluacion_p[".originalDefaultPages"] = $tdataevaluacion_p[".defaultPages"];

//	field labels
$fieldLabelsevaluacion_p = array();
$fieldToolTipsevaluacion_p = array();
$pageTitlesevaluacion_p = array();
$placeHoldersevaluacion_p = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsevaluacion_p["Spanish"] = array();
	$fieldToolTipsevaluacion_p["Spanish"] = array();
	$placeHoldersevaluacion_p["Spanish"] = array();
	$pageTitlesevaluacion_p["Spanish"] = array();
	$fieldLabelsevaluacion_p["Spanish"]["evaluacion_p_id"] = "Evaluacion P Id";
	$fieldToolTipsevaluacion_p["Spanish"]["evaluacion_p_id"] = "";
	$placeHoldersevaluacion_p["Spanish"]["evaluacion_p_id"] = "";
	$fieldLabelsevaluacion_p["Spanish"]["evaluacion_id_fk"] = "Evaluacion Id Fk";
	$fieldToolTipsevaluacion_p["Spanish"]["evaluacion_id_fk"] = "";
	$placeHoldersevaluacion_p["Spanish"]["evaluacion_id_fk"] = "";
	$fieldLabelsevaluacion_p["Spanish"]["idEvaluado"] = "Id Evaluado";
	$fieldToolTipsevaluacion_p["Spanish"]["idEvaluado"] = "";
	$placeHoldersevaluacion_p["Spanish"]["idEvaluado"] = "";
	$fieldLabelsevaluacion_p["Spanish"]["idEvaluador"] = "Id Evaluador";
	$fieldToolTipsevaluacion_p["Spanish"]["idEvaluador"] = "";
	$placeHoldersevaluacion_p["Spanish"]["idEvaluador"] = "";
	$fieldLabelsevaluacion_p["Spanish"]["IdEvaluador_c"] = "IdEvaluador C";
	$fieldToolTipsevaluacion_p["Spanish"]["IdEvaluador_c"] = "";
	$placeHoldersevaluacion_p["Spanish"]["IdEvaluador_c"] = "";
	$fieldLabelsevaluacion_p["Spanish"]["IdEvaluador_d"] = "IdEvaluador D";
	$fieldToolTipsevaluacion_p["Spanish"]["IdEvaluador_d"] = "";
	$placeHoldersevaluacion_p["Spanish"]["IdEvaluador_d"] = "";
	$fieldLabelsevaluacion_p["Spanish"]["vigencia"] = "Vigencia";
	$fieldToolTipsevaluacion_p["Spanish"]["vigencia"] = "";
	$placeHoldersevaluacion_p["Spanish"]["vigencia"] = "";
	$fieldLabelsevaluacion_p["Spanish"]["periodo"] = "Periodo";
	$fieldToolTipsevaluacion_p["Spanish"]["periodo"] = "";
	$placeHoldersevaluacion_p["Spanish"]["periodo"] = "";
	$fieldLabelsevaluacion_p["Spanish"]["fchCreacion"] = "Fch Creacion";
	$fieldToolTipsevaluacion_p["Spanish"]["fchCreacion"] = "";
	$placeHoldersevaluacion_p["Spanish"]["fchCreacion"] = "";
	$fieldLabelsevaluacion_p["Spanish"]["id_eval_vigencia_fk"] = "Id Eval Vigencia Fk";
	$fieldToolTipsevaluacion_p["Spanish"]["id_eval_vigencia_fk"] = "";
	$placeHoldersevaluacion_p["Spanish"]["id_eval_vigencia_fk"] = "";
	$fieldLabelsevaluacion_p["Spanish"]["fecha_po_i"] = "Fecha Po I";
	$fieldToolTipsevaluacion_p["Spanish"]["fecha_po_i"] = "";
	$placeHoldersevaluacion_p["Spanish"]["fecha_po_i"] = "";
	$fieldLabelsevaluacion_p["Spanish"]["fecha_po_f"] = "Fecha Po F";
	$fieldToolTipsevaluacion_p["Spanish"]["fecha_po_f"] = "";
	$placeHoldersevaluacion_p["Spanish"]["fecha_po_f"] = "";
	$fieldLabelsevaluacion_p["Spanish"]["estado"] = "Estado";
	$fieldToolTipsevaluacion_p["Spanish"]["estado"] = "";
	$placeHoldersevaluacion_p["Spanish"]["estado"] = "";
	$fieldLabelsevaluacion_p["Spanish"]["sys_user"] = "Sys User";
	$fieldToolTipsevaluacion_p["Spanish"]["sys_user"] = "";
	$placeHoldersevaluacion_p["Spanish"]["sys_user"] = "";
	$fieldLabelsevaluacion_p["Spanish"]["evaluado_doc"] = "Evaluado Doc";
	$fieldToolTipsevaluacion_p["Spanish"]["evaluado_doc"] = "";
	$placeHoldersevaluacion_p["Spanish"]["evaluado_doc"] = "";
	$fieldLabelsevaluacion_p["Spanish"]["evaluado_nombre"] = "Evaluado Nombre";
	$fieldToolTipsevaluacion_p["Spanish"]["evaluado_nombre"] = "";
	$placeHoldersevaluacion_p["Spanish"]["evaluado_nombre"] = "";
	$fieldLabelsevaluacion_p["Spanish"]["evaluado_cargo"] = "Evaluado Cargo";
	$fieldToolTipsevaluacion_p["Spanish"]["evaluado_cargo"] = "";
	$placeHoldersevaluacion_p["Spanish"]["evaluado_cargo"] = "";
	$fieldLabelsevaluacion_p["Spanish"]["evaluado_email"] = "Evaluado Email";
	$fieldToolTipsevaluacion_p["Spanish"]["evaluado_email"] = "";
	$placeHoldersevaluacion_p["Spanish"]["evaluado_email"] = "";
	$fieldLabelsevaluacion_p["Spanish"]["evaluado_dep_sup"] = "Evaluado Dep Sup";
	$fieldToolTipsevaluacion_p["Spanish"]["evaluado_dep_sup"] = "";
	$placeHoldersevaluacion_p["Spanish"]["evaluado_dep_sup"] = "";
	$fieldLabelsevaluacion_p["Spanish"]["evaluado_dep"] = "Evaluado Dep";
	$fieldToolTipsevaluacion_p["Spanish"]["evaluado_dep"] = "";
	$placeHoldersevaluacion_p["Spanish"]["evaluado_dep"] = "";
	$fieldLabelsevaluacion_p["Spanish"]["evaluado_nombramiento"] = "Evaluado Nombramiento";
	$fieldToolTipsevaluacion_p["Spanish"]["evaluado_nombramiento"] = "";
	$placeHoldersevaluacion_p["Spanish"]["evaluado_nombramiento"] = "";
	$fieldLabelsevaluacion_p["Spanish"]["evaluado_fechai_po"] = "Evaluado Fechai Po";
	$fieldToolTipsevaluacion_p["Spanish"]["evaluado_fechai_po"] = "";
	$placeHoldersevaluacion_p["Spanish"]["evaluado_fechai_po"] = "";
	$fieldLabelsevaluacion_p["Spanish"]["evaluado_fechaf_po"] = "Evaluado Fechaf Po";
	$fieldToolTipsevaluacion_p["Spanish"]["evaluado_fechaf_po"] = "";
	$placeHoldersevaluacion_p["Spanish"]["evaluado_fechaf_po"] = "";
	$fieldLabelsevaluacion_p["Spanish"]["evaluador_doc"] = "Evaluador Doc";
	$fieldToolTipsevaluacion_p["Spanish"]["evaluador_doc"] = "";
	$placeHoldersevaluacion_p["Spanish"]["evaluador_doc"] = "";
	$fieldLabelsevaluacion_p["Spanish"]["evaluador_nombre"] = "Evaluador Nombre";
	$fieldToolTipsevaluacion_p["Spanish"]["evaluador_nombre"] = "";
	$placeHoldersevaluacion_p["Spanish"]["evaluador_nombre"] = "";
	$fieldLabelsevaluacion_p["Spanish"]["evaluador_cargo"] = "Evaluador Cargo";
	$fieldToolTipsevaluacion_p["Spanish"]["evaluador_cargo"] = "";
	$placeHoldersevaluacion_p["Spanish"]["evaluador_cargo"] = "";
	$fieldLabelsevaluacion_p["Spanish"]["evaluador_email"] = "Evaluador Email";
	$fieldToolTipsevaluacion_p["Spanish"]["evaluador_email"] = "";
	$placeHoldersevaluacion_p["Spanish"]["evaluador_email"] = "";
	$fieldLabelsevaluacion_p["Spanish"]["evaluador_dep_sup"] = "Evaluador Dep Sup";
	$fieldToolTipsevaluacion_p["Spanish"]["evaluador_dep_sup"] = "";
	$placeHoldersevaluacion_p["Spanish"]["evaluador_dep_sup"] = "";
	$fieldLabelsevaluacion_p["Spanish"]["evaluador_dep"] = "Evaluador Dep";
	$fieldToolTipsevaluacion_p["Spanish"]["evaluador_dep"] = "";
	$placeHoldersevaluacion_p["Spanish"]["evaluador_dep"] = "";
	$fieldLabelsevaluacion_p["Spanish"]["sys_date"] = "Sys Date";
	$fieldToolTipsevaluacion_p["Spanish"]["sys_date"] = "";
	$placeHoldersevaluacion_p["Spanish"]["sys_date"] = "";
	if (count($fieldToolTipsevaluacion_p["Spanish"]))
		$tdataevaluacion_p[".isUseToolTips"] = true;
}


	$tdataevaluacion_p[".NCSearch"] = true;



$tdataevaluacion_p[".shortTableName"] = "evaluacion_p";
$tdataevaluacion_p[".nSecOptions"] = 0;

$tdataevaluacion_p[".mainTableOwnerID"] = "";
$tdataevaluacion_p[".entityType"] = 0;
$tdataevaluacion_p[".connId"] = "edl2_at_127_0_0_1";


$tdataevaluacion_p[".strOriginalTableName"] = "evaluacion_p";

	



$tdataevaluacion_p[".showAddInPopup"] = false;

$tdataevaluacion_p[".showEditInPopup"] = false;

$tdataevaluacion_p[".showViewInPopup"] = false;

$tdataevaluacion_p[".listAjax"] = false;
//	temporary
//$tdataevaluacion_p[".listAjax"] = false;

	$tdataevaluacion_p[".audit"] = true;

	$tdataevaluacion_p[".locking"] = true;


$pages = $tdataevaluacion_p[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataevaluacion_p[".edit"] = true;
	$tdataevaluacion_p[".afterEditAction"] = 1;
	$tdataevaluacion_p[".closePopupAfterEdit"] = 1;
	$tdataevaluacion_p[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataevaluacion_p[".add"] = true;
$tdataevaluacion_p[".afterAddAction"] = 1;
$tdataevaluacion_p[".closePopupAfterAdd"] = 1;
$tdataevaluacion_p[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataevaluacion_p[".list"] = true;
}



$tdataevaluacion_p[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataevaluacion_p[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataevaluacion_p[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataevaluacion_p[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataevaluacion_p[".printFriendly"] = true;
}



$tdataevaluacion_p[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataevaluacion_p[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataevaluacion_p[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataevaluacion_p[".isUseAjaxSuggest"] = true;



																																													

$tdataevaluacion_p[".ajaxCodeSnippetAdded"] = false;

$tdataevaluacion_p[".buttonsAdded"] = false;

$tdataevaluacion_p[".addPageEvents"] = false;

// use timepicker for search panel
$tdataevaluacion_p[".isUseTimeForSearch"] = false;


$tdataevaluacion_p[".badgeColor"] = "D2691E";


$tdataevaluacion_p[".allSearchFields"] = array();
$tdataevaluacion_p[".filterFields"] = array();
$tdataevaluacion_p[".requiredSearchFields"] = array();

$tdataevaluacion_p[".googleLikeFields"] = array();
$tdataevaluacion_p[".googleLikeFields"][] = "evaluacion_p_id";
$tdataevaluacion_p[".googleLikeFields"][] = "evaluacion_id_fk";
$tdataevaluacion_p[".googleLikeFields"][] = "idEvaluado";
$tdataevaluacion_p[".googleLikeFields"][] = "idEvaluador";
$tdataevaluacion_p[".googleLikeFields"][] = "IdEvaluador_c";
$tdataevaluacion_p[".googleLikeFields"][] = "IdEvaluador_d";
$tdataevaluacion_p[".googleLikeFields"][] = "vigencia";
$tdataevaluacion_p[".googleLikeFields"][] = "periodo";
$tdataevaluacion_p[".googleLikeFields"][] = "fchCreacion";
$tdataevaluacion_p[".googleLikeFields"][] = "id_eval_vigencia_fk";
$tdataevaluacion_p[".googleLikeFields"][] = "fecha_po_i";
$tdataevaluacion_p[".googleLikeFields"][] = "fecha_po_f";
$tdataevaluacion_p[".googleLikeFields"][] = "estado";
$tdataevaluacion_p[".googleLikeFields"][] = "sys_user";
$tdataevaluacion_p[".googleLikeFields"][] = "evaluado_doc";
$tdataevaluacion_p[".googleLikeFields"][] = "evaluado_nombre";
$tdataevaluacion_p[".googleLikeFields"][] = "evaluado_cargo";
$tdataevaluacion_p[".googleLikeFields"][] = "evaluado_email";
$tdataevaluacion_p[".googleLikeFields"][] = "evaluado_dep_sup";
$tdataevaluacion_p[".googleLikeFields"][] = "evaluado_dep";
$tdataevaluacion_p[".googleLikeFields"][] = "evaluado_nombramiento";
$tdataevaluacion_p[".googleLikeFields"][] = "evaluado_fechai_po";
$tdataevaluacion_p[".googleLikeFields"][] = "evaluado_fechaf_po";
$tdataevaluacion_p[".googleLikeFields"][] = "evaluador_doc";
$tdataevaluacion_p[".googleLikeFields"][] = "evaluador_nombre";
$tdataevaluacion_p[".googleLikeFields"][] = "evaluador_cargo";
$tdataevaluacion_p[".googleLikeFields"][] = "evaluador_email";
$tdataevaluacion_p[".googleLikeFields"][] = "evaluador_dep_sup";
$tdataevaluacion_p[".googleLikeFields"][] = "evaluador_dep";
$tdataevaluacion_p[".googleLikeFields"][] = "sys_date";



$tdataevaluacion_p[".tableType"] = "list";

$tdataevaluacion_p[".printerPageOrientation"] = 0;
$tdataevaluacion_p[".nPrinterPageScale"] = 100;

$tdataevaluacion_p[".nPrinterSplitRecords"] = 40;

$tdataevaluacion_p[".geocodingEnabled"] = false;










$tdataevaluacion_p[".pageSize"] = 20;

$tdataevaluacion_p[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataevaluacion_p[".strOrderBy"] = $tstrOrderBy;

$tdataevaluacion_p[".orderindexes"] = array();


$tdataevaluacion_p[".sqlHead"] = "SELECT evaluacion_p_id,  	evaluacion_id_fk,  	idEvaluado,  	idEvaluador,  	IdEvaluador_c,  	IdEvaluador_d,  	vigencia,  	periodo,  	fchCreacion,  	id_eval_vigencia_fk,  	fecha_po_i,  	fecha_po_f,  	estado,  	sys_user,  	evaluado_doc,  	evaluado_nombre,  	evaluado_cargo,  	evaluado_email,  	evaluado_dep_sup,  	evaluado_dep,  	evaluado_nombramiento,  	evaluado_fechai_po,  	evaluado_fechaf_po,  	evaluador_doc,  	evaluador_nombre,  	evaluador_cargo,  	evaluador_email,  	evaluador_dep_sup,  	evaluador_dep,  	sys_date";
$tdataevaluacion_p[".sqlFrom"] = "FROM evaluacion_p";
$tdataevaluacion_p[".sqlWhereExpr"] = "";
$tdataevaluacion_p[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataevaluacion_p[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataevaluacion_p[".arrGroupsPerPage"] = $arrGPP;

$tdataevaluacion_p[".highlightSearchResults"] = true;

$tableKeysevaluacion_p = array();
$tableKeysevaluacion_p[] = "evaluacion_p_id";
$tdataevaluacion_p[".Keys"] = $tableKeysevaluacion_p;


$tdataevaluacion_p[".hideMobileList"] = array();




//	evaluacion_p_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "evaluacion_p_id";
	$fdata["GoodName"] = "evaluacion_p_id";
	$fdata["ownerTable"] = "evaluacion_p";
	$fdata["Label"] = GetFieldLabel("evaluacion_p","evaluacion_p_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "evaluacion_p_id";

		$fdata["sourceSingle"] = "evaluacion_p_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "evaluacion_p_id";

	
	
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


	$tdataevaluacion_p["evaluacion_p_id"] = $fdata;
		$tdataevaluacion_p[".searchableFields"][] = "evaluacion_p_id";
//	evaluacion_id_fk
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "evaluacion_id_fk";
	$fdata["GoodName"] = "evaluacion_id_fk";
	$fdata["ownerTable"] = "evaluacion_p";
	$fdata["Label"] = GetFieldLabel("evaluacion_p","evaluacion_id_fk");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "evaluacion_id_fk";

		$fdata["sourceSingle"] = "evaluacion_id_fk";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "evaluacion_id_fk";

	
	
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
	$edata["LookupTable"] = "evaluacion";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "email_not_cierre";

	

	
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


	$tdataevaluacion_p["evaluacion_id_fk"] = $fdata;
		$tdataevaluacion_p[".searchableFields"][] = "evaluacion_id_fk";
//	idEvaluado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "idEvaluado";
	$fdata["GoodName"] = "idEvaluado";
	$fdata["ownerTable"] = "evaluacion_p";
	$fdata["Label"] = GetFieldLabel("evaluacion_p","idEvaluado");
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


	$tdataevaluacion_p["idEvaluado"] = $fdata;
		$tdataevaluacion_p[".searchableFields"][] = "idEvaluado";
//	idEvaluador
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "idEvaluador";
	$fdata["GoodName"] = "idEvaluador";
	$fdata["ownerTable"] = "evaluacion_p";
	$fdata["Label"] = GetFieldLabel("evaluacion_p","idEvaluador");
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


	$tdataevaluacion_p["idEvaluador"] = $fdata;
		$tdataevaluacion_p[".searchableFields"][] = "idEvaluador";
//	IdEvaluador_c
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "IdEvaluador_c";
	$fdata["GoodName"] = "IdEvaluador_c";
	$fdata["ownerTable"] = "evaluacion_p";
	$fdata["Label"] = GetFieldLabel("evaluacion_p","IdEvaluador_c");
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


	$tdataevaluacion_p["IdEvaluador_c"] = $fdata;
		$tdataevaluacion_p[".searchableFields"][] = "IdEvaluador_c";
//	IdEvaluador_d
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "IdEvaluador_d";
	$fdata["GoodName"] = "IdEvaluador_d";
	$fdata["ownerTable"] = "evaluacion_p";
	$fdata["Label"] = GetFieldLabel("evaluacion_p","IdEvaluador_d");
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


	$tdataevaluacion_p["IdEvaluador_d"] = $fdata;
		$tdataevaluacion_p[".searchableFields"][] = "IdEvaluador_d";
//	vigencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "vigencia";
	$fdata["GoodName"] = "vigencia";
	$fdata["ownerTable"] = "evaluacion_p";
	$fdata["Label"] = GetFieldLabel("evaluacion_p","vigencia");
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


	$tdataevaluacion_p["vigencia"] = $fdata;
		$tdataevaluacion_p[".searchableFields"][] = "vigencia";
//	periodo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "periodo";
	$fdata["GoodName"] = "periodo";
	$fdata["ownerTable"] = "evaluacion_p";
	$fdata["Label"] = GetFieldLabel("evaluacion_p","periodo");
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


	$tdataevaluacion_p["periodo"] = $fdata;
		$tdataevaluacion_p[".searchableFields"][] = "periodo";
//	fchCreacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "fchCreacion";
	$fdata["GoodName"] = "fchCreacion";
	$fdata["ownerTable"] = "evaluacion_p";
	$fdata["Label"] = GetFieldLabel("evaluacion_p","fchCreacion");
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


	$tdataevaluacion_p["fchCreacion"] = $fdata;
		$tdataevaluacion_p[".searchableFields"][] = "fchCreacion";
//	id_eval_vigencia_fk
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "id_eval_vigencia_fk";
	$fdata["GoodName"] = "id_eval_vigencia_fk";
	$fdata["ownerTable"] = "evaluacion_p";
	$fdata["Label"] = GetFieldLabel("evaluacion_p","id_eval_vigencia_fk");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "id_eval_vigencia_fk";

		$fdata["sourceSingle"] = "id_eval_vigencia_fk";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_eval_vigencia_fk";

	
	
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
	$edata["LookupTable"] = "tparam_vigencia_eval";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_evalp";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "id_evalp_name";

	

	
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


	$tdataevaluacion_p["id_eval_vigencia_fk"] = $fdata;
		$tdataevaluacion_p[".searchableFields"][] = "id_eval_vigencia_fk";
//	fecha_po_i
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "fecha_po_i";
	$fdata["GoodName"] = "fecha_po_i";
	$fdata["ownerTable"] = "evaluacion_p";
	$fdata["Label"] = GetFieldLabel("evaluacion_p","fecha_po_i");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "fecha_po_i";

		$fdata["sourceSingle"] = "fecha_po_i";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fecha_po_i";

	
	
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


	$tdataevaluacion_p["fecha_po_i"] = $fdata;
		$tdataevaluacion_p[".searchableFields"][] = "fecha_po_i";
//	fecha_po_f
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "fecha_po_f";
	$fdata["GoodName"] = "fecha_po_f";
	$fdata["ownerTable"] = "evaluacion_p";
	$fdata["Label"] = GetFieldLabel("evaluacion_p","fecha_po_f");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "fecha_po_f";

		$fdata["sourceSingle"] = "fecha_po_f";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fecha_po_f";

	
	
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


	$tdataevaluacion_p["fecha_po_f"] = $fdata;
		$tdataevaluacion_p[".searchableFields"][] = "fecha_po_f";
//	estado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "estado";
	$fdata["GoodName"] = "estado";
	$fdata["ownerTable"] = "evaluacion_p";
	$fdata["Label"] = GetFieldLabel("evaluacion_p","estado");
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


	$tdataevaluacion_p["estado"] = $fdata;
		$tdataevaluacion_p[".searchableFields"][] = "estado";
//	sys_user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "sys_user";
	$fdata["GoodName"] = "sys_user";
	$fdata["ownerTable"] = "evaluacion_p";
	$fdata["Label"] = GetFieldLabel("evaluacion_p","sys_user");
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


	$tdataevaluacion_p["sys_user"] = $fdata;
		$tdataevaluacion_p[".searchableFields"][] = "sys_user";
//	evaluado_doc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "evaluado_doc";
	$fdata["GoodName"] = "evaluado_doc";
	$fdata["ownerTable"] = "evaluacion_p";
	$fdata["Label"] = GetFieldLabel("evaluacion_p","evaluado_doc");
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


	$tdataevaluacion_p["evaluado_doc"] = $fdata;
		$tdataevaluacion_p[".searchableFields"][] = "evaluado_doc";
//	evaluado_nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "evaluado_nombre";
	$fdata["GoodName"] = "evaluado_nombre";
	$fdata["ownerTable"] = "evaluacion_p";
	$fdata["Label"] = GetFieldLabel("evaluacion_p","evaluado_nombre");
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


	$tdataevaluacion_p["evaluado_nombre"] = $fdata;
		$tdataevaluacion_p[".searchableFields"][] = "evaluado_nombre";
//	evaluado_cargo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "evaluado_cargo";
	$fdata["GoodName"] = "evaluado_cargo";
	$fdata["ownerTable"] = "evaluacion_p";
	$fdata["Label"] = GetFieldLabel("evaluacion_p","evaluado_cargo");
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


	$tdataevaluacion_p["evaluado_cargo"] = $fdata;
		$tdataevaluacion_p[".searchableFields"][] = "evaluado_cargo";
//	evaluado_email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "evaluado_email";
	$fdata["GoodName"] = "evaluado_email";
	$fdata["ownerTable"] = "evaluacion_p";
	$fdata["Label"] = GetFieldLabel("evaluacion_p","evaluado_email");
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


	$tdataevaluacion_p["evaluado_email"] = $fdata;
		$tdataevaluacion_p[".searchableFields"][] = "evaluado_email";
//	evaluado_dep_sup
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "evaluado_dep_sup";
	$fdata["GoodName"] = "evaluado_dep_sup";
	$fdata["ownerTable"] = "evaluacion_p";
	$fdata["Label"] = GetFieldLabel("evaluacion_p","evaluado_dep_sup");
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


	$tdataevaluacion_p["evaluado_dep_sup"] = $fdata;
		$tdataevaluacion_p[".searchableFields"][] = "evaluado_dep_sup";
//	evaluado_dep
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "evaluado_dep";
	$fdata["GoodName"] = "evaluado_dep";
	$fdata["ownerTable"] = "evaluacion_p";
	$fdata["Label"] = GetFieldLabel("evaluacion_p","evaluado_dep");
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


	$tdataevaluacion_p["evaluado_dep"] = $fdata;
		$tdataevaluacion_p[".searchableFields"][] = "evaluado_dep";
//	evaluado_nombramiento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "evaluado_nombramiento";
	$fdata["GoodName"] = "evaluado_nombramiento";
	$fdata["ownerTable"] = "evaluacion_p";
	$fdata["Label"] = GetFieldLabel("evaluacion_p","evaluado_nombramiento");
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


	$tdataevaluacion_p["evaluado_nombramiento"] = $fdata;
		$tdataevaluacion_p[".searchableFields"][] = "evaluado_nombramiento";
//	evaluado_fechai_po
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "evaluado_fechai_po";
	$fdata["GoodName"] = "evaluado_fechai_po";
	$fdata["ownerTable"] = "evaluacion_p";
	$fdata["Label"] = GetFieldLabel("evaluacion_p","evaluado_fechai_po");
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


	$tdataevaluacion_p["evaluado_fechai_po"] = $fdata;
		$tdataevaluacion_p[".searchableFields"][] = "evaluado_fechai_po";
//	evaluado_fechaf_po
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "evaluado_fechaf_po";
	$fdata["GoodName"] = "evaluado_fechaf_po";
	$fdata["ownerTable"] = "evaluacion_p";
	$fdata["Label"] = GetFieldLabel("evaluacion_p","evaluado_fechaf_po");
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


	$tdataevaluacion_p["evaluado_fechaf_po"] = $fdata;
		$tdataevaluacion_p[".searchableFields"][] = "evaluado_fechaf_po";
//	evaluador_doc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "evaluador_doc";
	$fdata["GoodName"] = "evaluador_doc";
	$fdata["ownerTable"] = "evaluacion_p";
	$fdata["Label"] = GetFieldLabel("evaluacion_p","evaluador_doc");
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


	$tdataevaluacion_p["evaluador_doc"] = $fdata;
		$tdataevaluacion_p[".searchableFields"][] = "evaluador_doc";
//	evaluador_nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "evaluador_nombre";
	$fdata["GoodName"] = "evaluador_nombre";
	$fdata["ownerTable"] = "evaluacion_p";
	$fdata["Label"] = GetFieldLabel("evaluacion_p","evaluador_nombre");
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


	$tdataevaluacion_p["evaluador_nombre"] = $fdata;
		$tdataevaluacion_p[".searchableFields"][] = "evaluador_nombre";
//	evaluador_cargo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "evaluador_cargo";
	$fdata["GoodName"] = "evaluador_cargo";
	$fdata["ownerTable"] = "evaluacion_p";
	$fdata["Label"] = GetFieldLabel("evaluacion_p","evaluador_cargo");
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


	$tdataevaluacion_p["evaluador_cargo"] = $fdata;
		$tdataevaluacion_p[".searchableFields"][] = "evaluador_cargo";
//	evaluador_email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "evaluador_email";
	$fdata["GoodName"] = "evaluador_email";
	$fdata["ownerTable"] = "evaluacion_p";
	$fdata["Label"] = GetFieldLabel("evaluacion_p","evaluador_email");
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


	$tdataevaluacion_p["evaluador_email"] = $fdata;
		$tdataevaluacion_p[".searchableFields"][] = "evaluador_email";
//	evaluador_dep_sup
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "evaluador_dep_sup";
	$fdata["GoodName"] = "evaluador_dep_sup";
	$fdata["ownerTable"] = "evaluacion_p";
	$fdata["Label"] = GetFieldLabel("evaluacion_p","evaluador_dep_sup");
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


	$tdataevaluacion_p["evaluador_dep_sup"] = $fdata;
		$tdataevaluacion_p[".searchableFields"][] = "evaluador_dep_sup";
//	evaluador_dep
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "evaluador_dep";
	$fdata["GoodName"] = "evaluador_dep";
	$fdata["ownerTable"] = "evaluacion_p";
	$fdata["Label"] = GetFieldLabel("evaluacion_p","evaluador_dep");
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


	$tdataevaluacion_p["evaluador_dep"] = $fdata;
		$tdataevaluacion_p[".searchableFields"][] = "evaluador_dep";
//	sys_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "sys_date";
	$fdata["GoodName"] = "sys_date";
	$fdata["ownerTable"] = "evaluacion_p";
	$fdata["Label"] = GetFieldLabel("evaluacion_p","sys_date");
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


	$tdataevaluacion_p["sys_date"] = $fdata;
		$tdataevaluacion_p[".searchableFields"][] = "sys_date";


$tables_data["evaluacion_p"]=&$tdataevaluacion_p;
$field_labels["evaluacion_p"] = &$fieldLabelsevaluacion_p;
$fieldToolTips["evaluacion_p"] = &$fieldToolTipsevaluacion_p;
$placeHolders["evaluacion_p"] = &$placeHoldersevaluacion_p;
$page_titles["evaluacion_p"] = &$pageTitlesevaluacion_p;


changeTextControlsToDate( "evaluacion_p" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["evaluacion_p"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["evaluacion_p"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_evaluacion_p()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "evaluacion_p_id,  	evaluacion_id_fk,  	idEvaluado,  	idEvaluador,  	IdEvaluador_c,  	IdEvaluador_d,  	vigencia,  	periodo,  	fchCreacion,  	id_eval_vigencia_fk,  	fecha_po_i,  	fecha_po_f,  	estado,  	sys_user,  	evaluado_doc,  	evaluado_nombre,  	evaluado_cargo,  	evaluado_email,  	evaluado_dep_sup,  	evaluado_dep,  	evaluado_nombramiento,  	evaluado_fechai_po,  	evaluado_fechaf_po,  	evaluador_doc,  	evaluador_nombre,  	evaluador_cargo,  	evaluador_email,  	evaluador_dep_sup,  	evaluador_dep,  	sys_date";
$proto0["m_strFrom"] = "FROM evaluacion_p";
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
	"m_strName" => "evaluacion_p_id",
	"m_strTable" => "evaluacion_p",
	"m_srcTableName" => "evaluacion_p"
));

$proto6["m_sql"] = "evaluacion_p_id";
$proto6["m_srcTableName"] = "evaluacion_p";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "evaluacion_id_fk",
	"m_strTable" => "evaluacion_p",
	"m_srcTableName" => "evaluacion_p"
));

$proto8["m_sql"] = "evaluacion_id_fk";
$proto8["m_srcTableName"] = "evaluacion_p";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "idEvaluado",
	"m_strTable" => "evaluacion_p",
	"m_srcTableName" => "evaluacion_p"
));

$proto10["m_sql"] = "idEvaluado";
$proto10["m_srcTableName"] = "evaluacion_p";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "idEvaluador",
	"m_strTable" => "evaluacion_p",
	"m_srcTableName" => "evaluacion_p"
));

$proto12["m_sql"] = "idEvaluador";
$proto12["m_srcTableName"] = "evaluacion_p";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "IdEvaluador_c",
	"m_strTable" => "evaluacion_p",
	"m_srcTableName" => "evaluacion_p"
));

$proto14["m_sql"] = "IdEvaluador_c";
$proto14["m_srcTableName"] = "evaluacion_p";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "IdEvaluador_d",
	"m_strTable" => "evaluacion_p",
	"m_srcTableName" => "evaluacion_p"
));

$proto16["m_sql"] = "IdEvaluador_d";
$proto16["m_srcTableName"] = "evaluacion_p";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "vigencia",
	"m_strTable" => "evaluacion_p",
	"m_srcTableName" => "evaluacion_p"
));

$proto18["m_sql"] = "vigencia";
$proto18["m_srcTableName"] = "evaluacion_p";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "periodo",
	"m_strTable" => "evaluacion_p",
	"m_srcTableName" => "evaluacion_p"
));

$proto20["m_sql"] = "periodo";
$proto20["m_srcTableName"] = "evaluacion_p";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "fchCreacion",
	"m_strTable" => "evaluacion_p",
	"m_srcTableName" => "evaluacion_p"
));

$proto22["m_sql"] = "fchCreacion";
$proto22["m_srcTableName"] = "evaluacion_p";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "id_eval_vigencia_fk",
	"m_strTable" => "evaluacion_p",
	"m_srcTableName" => "evaluacion_p"
));

$proto24["m_sql"] = "id_eval_vigencia_fk";
$proto24["m_srcTableName"] = "evaluacion_p";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_po_i",
	"m_strTable" => "evaluacion_p",
	"m_srcTableName" => "evaluacion_p"
));

$proto26["m_sql"] = "fecha_po_i";
$proto26["m_srcTableName"] = "evaluacion_p";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_po_f",
	"m_strTable" => "evaluacion_p",
	"m_srcTableName" => "evaluacion_p"
));

$proto28["m_sql"] = "fecha_po_f";
$proto28["m_srcTableName"] = "evaluacion_p";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "estado",
	"m_strTable" => "evaluacion_p",
	"m_srcTableName" => "evaluacion_p"
));

$proto30["m_sql"] = "estado";
$proto30["m_srcTableName"] = "evaluacion_p";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_user",
	"m_strTable" => "evaluacion_p",
	"m_srcTableName" => "evaluacion_p"
));

$proto32["m_sql"] = "sys_user";
$proto32["m_srcTableName"] = "evaluacion_p";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "evaluado_doc",
	"m_strTable" => "evaluacion_p",
	"m_srcTableName" => "evaluacion_p"
));

$proto34["m_sql"] = "evaluado_doc";
$proto34["m_srcTableName"] = "evaluacion_p";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "evaluado_nombre",
	"m_strTable" => "evaluacion_p",
	"m_srcTableName" => "evaluacion_p"
));

$proto36["m_sql"] = "evaluado_nombre";
$proto36["m_srcTableName"] = "evaluacion_p";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "evaluado_cargo",
	"m_strTable" => "evaluacion_p",
	"m_srcTableName" => "evaluacion_p"
));

$proto38["m_sql"] = "evaluado_cargo";
$proto38["m_srcTableName"] = "evaluacion_p";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "evaluado_email",
	"m_strTable" => "evaluacion_p",
	"m_srcTableName" => "evaluacion_p"
));

$proto40["m_sql"] = "evaluado_email";
$proto40["m_srcTableName"] = "evaluacion_p";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "evaluado_dep_sup",
	"m_strTable" => "evaluacion_p",
	"m_srcTableName" => "evaluacion_p"
));

$proto42["m_sql"] = "evaluado_dep_sup";
$proto42["m_srcTableName"] = "evaluacion_p";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "evaluado_dep",
	"m_strTable" => "evaluacion_p",
	"m_srcTableName" => "evaluacion_p"
));

$proto44["m_sql"] = "evaluado_dep";
$proto44["m_srcTableName"] = "evaluacion_p";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "evaluado_nombramiento",
	"m_strTable" => "evaluacion_p",
	"m_srcTableName" => "evaluacion_p"
));

$proto46["m_sql"] = "evaluado_nombramiento";
$proto46["m_srcTableName"] = "evaluacion_p";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "evaluado_fechai_po",
	"m_strTable" => "evaluacion_p",
	"m_srcTableName" => "evaluacion_p"
));

$proto48["m_sql"] = "evaluado_fechai_po";
$proto48["m_srcTableName"] = "evaluacion_p";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "evaluado_fechaf_po",
	"m_strTable" => "evaluacion_p",
	"m_srcTableName" => "evaluacion_p"
));

$proto50["m_sql"] = "evaluado_fechaf_po";
$proto50["m_srcTableName"] = "evaluacion_p";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "evaluador_doc",
	"m_strTable" => "evaluacion_p",
	"m_srcTableName" => "evaluacion_p"
));

$proto52["m_sql"] = "evaluador_doc";
$proto52["m_srcTableName"] = "evaluacion_p";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "evaluador_nombre",
	"m_strTable" => "evaluacion_p",
	"m_srcTableName" => "evaluacion_p"
));

$proto54["m_sql"] = "evaluador_nombre";
$proto54["m_srcTableName"] = "evaluacion_p";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "evaluador_cargo",
	"m_strTable" => "evaluacion_p",
	"m_srcTableName" => "evaluacion_p"
));

$proto56["m_sql"] = "evaluador_cargo";
$proto56["m_srcTableName"] = "evaluacion_p";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "evaluador_email",
	"m_strTable" => "evaluacion_p",
	"m_srcTableName" => "evaluacion_p"
));

$proto58["m_sql"] = "evaluador_email";
$proto58["m_srcTableName"] = "evaluacion_p";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "evaluador_dep_sup",
	"m_strTable" => "evaluacion_p",
	"m_srcTableName" => "evaluacion_p"
));

$proto60["m_sql"] = "evaluador_dep_sup";
$proto60["m_srcTableName"] = "evaluacion_p";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "evaluador_dep",
	"m_strTable" => "evaluacion_p",
	"m_srcTableName" => "evaluacion_p"
));

$proto62["m_sql"] = "evaluador_dep";
$proto62["m_srcTableName"] = "evaluacion_p";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_date",
	"m_strTable" => "evaluacion_p",
	"m_srcTableName" => "evaluacion_p"
));

$proto64["m_sql"] = "sys_date";
$proto64["m_srcTableName"] = "evaluacion_p";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto66=array();
$proto66["m_link"] = "SQLL_MAIN";
			$proto67=array();
$proto67["m_strName"] = "evaluacion_p";
$proto67["m_srcTableName"] = "evaluacion_p";
$proto67["m_columns"] = array();
$proto67["m_columns"][] = "evaluacion_p_id";
$proto67["m_columns"][] = "evaluacion_id_fk";
$proto67["m_columns"][] = "idEvaluado";
$proto67["m_columns"][] = "idEvaluador";
$proto67["m_columns"][] = "IdEvaluador_c";
$proto67["m_columns"][] = "IdEvaluador_d";
$proto67["m_columns"][] = "vigencia";
$proto67["m_columns"][] = "periodo";
$proto67["m_columns"][] = "fchCreacion";
$proto67["m_columns"][] = "id_eval_vigencia_fk";
$proto67["m_columns"][] = "fecha_po_i";
$proto67["m_columns"][] = "fecha_po_f";
$proto67["m_columns"][] = "estado";
$proto67["m_columns"][] = "sys_user";
$proto67["m_columns"][] = "evaluado_doc";
$proto67["m_columns"][] = "evaluado_nombre";
$proto67["m_columns"][] = "evaluado_cargo";
$proto67["m_columns"][] = "evaluado_email";
$proto67["m_columns"][] = "evaluado_dep_sup";
$proto67["m_columns"][] = "evaluado_dep";
$proto67["m_columns"][] = "evaluado_nombramiento";
$proto67["m_columns"][] = "evaluado_fechai_po";
$proto67["m_columns"][] = "evaluado_fechaf_po";
$proto67["m_columns"][] = "evaluador_doc";
$proto67["m_columns"][] = "evaluador_nombre";
$proto67["m_columns"][] = "evaluador_cargo";
$proto67["m_columns"][] = "evaluador_email";
$proto67["m_columns"][] = "evaluador_dep_sup";
$proto67["m_columns"][] = "evaluador_dep";
$proto67["m_columns"][] = "sys_date";
$obj = new SQLTable($proto67);

$proto66["m_table"] = $obj;
$proto66["m_sql"] = "evaluacion_p";
$proto66["m_alias"] = "";
$proto66["m_srcTableName"] = "evaluacion_p";
$proto68=array();
$proto68["m_sql"] = "";
$proto68["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto68["m_column"]=$obj;
$proto68["m_contained"] = array();
$proto68["m_strCase"] = "";
$proto68["m_havingmode"] = false;
$proto68["m_inBrackets"] = false;
$proto68["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto68);

$proto66["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto66);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="evaluacion_p";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_evaluacion_p = createSqlQuery_evaluacion_p();


	
				;

																														

$tdataevaluacion_p[".sqlquery"] = $queryData_evaluacion_p;



$tdataevaluacion_p[".hasEvents"] = false;

?>