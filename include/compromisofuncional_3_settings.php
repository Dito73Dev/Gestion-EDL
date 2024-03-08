<?php
$tdatacompromisofuncional_3 = array();
$tdatacompromisofuncional_3[".searchableFields"] = array();
$tdatacompromisofuncional_3[".ShortName"] = "compromisofuncional_3";
$tdatacompromisofuncional_3[".OwnerID"] = "";
$tdatacompromisofuncional_3[".OriginalTable"] = "compromisofuncional";


$tdatacompromisofuncional_3[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatacompromisofuncional_3[".originalPagesByType"] = $tdatacompromisofuncional_3[".pagesByType"];
$tdatacompromisofuncional_3[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatacompromisofuncional_3[".originalPages"] = $tdatacompromisofuncional_3[".pages"];
$tdatacompromisofuncional_3[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatacompromisofuncional_3[".originalDefaultPages"] = $tdatacompromisofuncional_3[".defaultPages"];

//	field labels
$fieldLabelscompromisofuncional_3 = array();
$fieldToolTipscompromisofuncional_3 = array();
$pageTitlescompromisofuncional_3 = array();
$placeHolderscompromisofuncional_3 = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscompromisofuncional_3["Spanish"] = array();
	$fieldToolTipscompromisofuncional_3["Spanish"] = array();
	$placeHolderscompromisofuncional_3["Spanish"] = array();
	$pageTitlescompromisofuncional_3["Spanish"] = array();
	$fieldLabelscompromisofuncional_3["Spanish"]["id"] = "Id";
	$fieldToolTipscompromisofuncional_3["Spanish"]["id"] = "";
	$placeHolderscompromisofuncional_3["Spanish"]["id"] = "";
	$fieldLabelscompromisofuncional_3["Spanish"]["idEvaluacion_FK"] = "Radicado";
	$fieldToolTipscompromisofuncional_3["Spanish"]["idEvaluacion_FK"] = "";
	$placeHolderscompromisofuncional_3["Spanish"]["idEvaluacion_FK"] = "";
	$fieldLabelscompromisofuncional_3["Spanish"]["idTipoAcuerdo"] = "Tipo acuerdo";
	$fieldToolTipscompromisofuncional_3["Spanish"]["idTipoAcuerdo"] = "";
	$placeHolderscompromisofuncional_3["Spanish"]["idTipoAcuerdo"] = "";
	$fieldLabelscompromisofuncional_3["Spanish"]["NomAcuerdo"] = "Acuerdo";
	$fieldToolTipscompromisofuncional_3["Spanish"]["NomAcuerdo"] = "";
	$placeHolderscompromisofuncional_3["Spanish"]["NomAcuerdo"] = "";
	$fieldLabelscompromisofuncional_3["Spanish"]["compromisoFuncional"] = "Compromiso ";
	$fieldToolTipscompromisofuncional_3["Spanish"]["compromisoFuncional"] = "";
	$placeHolderscompromisofuncional_3["Spanish"]["compromisoFuncional"] = "";
	$fieldLabelscompromisofuncional_3["Spanish"]["evidencia"] = "Evidencia";
	$fieldToolTipscompromisofuncional_3["Spanish"]["evidencia"] = "";
	$placeHolderscompromisofuncional_3["Spanish"]["evidencia"] = "";
	$fieldLabelscompromisofuncional_3["Spanish"]["valorAcordado"] = "Valor de este acuerdo";
	$fieldToolTipscompromisofuncional_3["Spanish"]["valorAcordado"] = "";
	$placeHolderscompromisofuncional_3["Spanish"]["valorAcordado"] = "";
	$fieldLabelscompromisofuncional_3["Spanish"]["fchCreacion"] = "Fch Creacion";
	$fieldToolTipscompromisofuncional_3["Spanish"]["fchCreacion"] = "";
	$placeHolderscompromisofuncional_3["Spanish"]["fchCreacion"] = "";
	$fieldLabelscompromisofuncional_3["Spanish"]["CFunEstado"] = "Estado";
	$fieldToolTipscompromisofuncional_3["Spanish"]["CFunEstado"] = "";
	$placeHolderscompromisofuncional_3["Spanish"]["CFunEstado"] = "";
	$fieldLabelscompromisofuncional_3["Spanish"]["Valorpendiente"] = "Pendiente por acordar";
	$fieldToolTipscompromisofuncional_3["Spanish"]["Valorpendiente"] = "";
	$placeHolderscompromisofuncional_3["Spanish"]["Valorpendiente"] = "";
	if (count($fieldToolTipscompromisofuncional_3["Spanish"]))
		$tdatacompromisofuncional_3[".isUseToolTips"] = true;
}


	$tdatacompromisofuncional_3[".NCSearch"] = true;



$tdatacompromisofuncional_3[".shortTableName"] = "compromisofuncional_3";
$tdatacompromisofuncional_3[".nSecOptions"] = 0;

$tdatacompromisofuncional_3[".mainTableOwnerID"] = "";
$tdatacompromisofuncional_3[".entityType"] = 1;
$tdatacompromisofuncional_3[".connId"] = "edl2_at_127_0_0_1";


$tdatacompromisofuncional_3[".strOriginalTableName"] = "compromisofuncional";

	



$tdatacompromisofuncional_3[".showAddInPopup"] = false;

$tdatacompromisofuncional_3[".showEditInPopup"] = false;

$tdatacompromisofuncional_3[".showViewInPopup"] = false;

$tdatacompromisofuncional_3[".listAjax"] = false;
//	temporary
//$tdatacompromisofuncional_3[".listAjax"] = false;

	$tdatacompromisofuncional_3[".audit"] = true;

	$tdatacompromisofuncional_3[".locking"] = true;


$pages = $tdatacompromisofuncional_3[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacompromisofuncional_3[".edit"] = true;
	$tdatacompromisofuncional_3[".afterEditAction"] = 1;
	$tdatacompromisofuncional_3[".closePopupAfterEdit"] = 1;
	$tdatacompromisofuncional_3[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacompromisofuncional_3[".add"] = true;
$tdatacompromisofuncional_3[".afterAddAction"] = 1;
$tdatacompromisofuncional_3[".closePopupAfterAdd"] = 1;
$tdatacompromisofuncional_3[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacompromisofuncional_3[".list"] = true;
}



$tdatacompromisofuncional_3[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacompromisofuncional_3[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacompromisofuncional_3[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacompromisofuncional_3[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacompromisofuncional_3[".printFriendly"] = true;
}



$tdatacompromisofuncional_3[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacompromisofuncional_3[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacompromisofuncional_3[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacompromisofuncional_3[".isUseAjaxSuggest"] = true;



																																																																																										

$tdatacompromisofuncional_3[".ajaxCodeSnippetAdded"] = false;

$tdatacompromisofuncional_3[".buttonsAdded"] = false;

$tdatacompromisofuncional_3[".addPageEvents"] = true;

// use timepicker for search panel
$tdatacompromisofuncional_3[".isUseTimeForSearch"] = false;


$tdatacompromisofuncional_3[".badgeColor"] = "e8926f";


$tdatacompromisofuncional_3[".allSearchFields"] = array();
$tdatacompromisofuncional_3[".filterFields"] = array();
$tdatacompromisofuncional_3[".requiredSearchFields"] = array();

$tdatacompromisofuncional_3[".googleLikeFields"] = array();
$tdatacompromisofuncional_3[".googleLikeFields"][] = "id";
$tdatacompromisofuncional_3[".googleLikeFields"][] = "idEvaluacion_FK";
$tdatacompromisofuncional_3[".googleLikeFields"][] = "idTipoAcuerdo";
$tdatacompromisofuncional_3[".googleLikeFields"][] = "NomAcuerdo";
$tdatacompromisofuncional_3[".googleLikeFields"][] = "compromisoFuncional";
$tdatacompromisofuncional_3[".googleLikeFields"][] = "evidencia";
$tdatacompromisofuncional_3[".googleLikeFields"][] = "valorAcordado";
$tdatacompromisofuncional_3[".googleLikeFields"][] = "Valorpendiente";
$tdatacompromisofuncional_3[".googleLikeFields"][] = "fchCreacion";
$tdatacompromisofuncional_3[".googleLikeFields"][] = "CFunEstado";



$tdatacompromisofuncional_3[".tableType"] = "list";

$tdatacompromisofuncional_3[".printerPageOrientation"] = 0;
$tdatacompromisofuncional_3[".nPrinterPageScale"] = 100;

$tdatacompromisofuncional_3[".nPrinterSplitRecords"] = 40;

$tdatacompromisofuncional_3[".geocodingEnabled"] = false;










$tdatacompromisofuncional_3[".pageSize"] = 20;

$tdatacompromisofuncional_3[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacompromisofuncional_3[".strOrderBy"] = $tstrOrderBy;

$tdatacompromisofuncional_3[".orderindexes"] = array();


$tdatacompromisofuncional_3[".sqlHead"] = "SELECT id,  	idEvaluacion_FK,  	idTipoAcuerdo,  	NomAcuerdo,  	compromisoFuncional,  	evidencia,  	valorAcordado,  	Valorpendiente,  	fchCreacion,  	CFunEstado";
$tdatacompromisofuncional_3[".sqlFrom"] = "FROM compromisofuncional";
$tdatacompromisofuncional_3[".sqlWhereExpr"] = "";
$tdatacompromisofuncional_3[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacompromisofuncional_3[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacompromisofuncional_3[".arrGroupsPerPage"] = $arrGPP;

$tdatacompromisofuncional_3[".highlightSearchResults"] = true;

$tableKeyscompromisofuncional_3 = array();
$tableKeyscompromisofuncional_3[] = "id";
$tdatacompromisofuncional_3[".Keys"] = $tableKeyscompromisofuncional_3;


$tdatacompromisofuncional_3[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "compromisofuncional";
	$fdata["Label"] = GetFieldLabel("compromisofuncional_3","id");
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


	$tdatacompromisofuncional_3["id"] = $fdata;
		$tdatacompromisofuncional_3[".searchableFields"][] = "id";
//	idEvaluacion_FK
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "idEvaluacion_FK";
	$fdata["GoodName"] = "idEvaluacion_FK";
	$fdata["ownerTable"] = "compromisofuncional";
	$fdata["Label"] = GetFieldLabel("compromisofuncional_3","idEvaluacion_FK");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "idEvaluacion_FK";

		$fdata["sourceSingle"] = "idEvaluacion_FK";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "idEvaluacion_FK";

	
	
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
	$edata["LookupTable"] = "q_edl2_ctrl_valor_af_002";
			$edata["autoCompleteFieldsOnEdit"] = 1;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"Valorpendiente", 'lookupF'=>"valor_pendiente");
	$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "radicado";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "radicado";

	

	
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


	$tdatacompromisofuncional_3["idEvaluacion_FK"] = $fdata;
		$tdatacompromisofuncional_3[".searchableFields"][] = "idEvaluacion_FK";
//	idTipoAcuerdo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "idTipoAcuerdo";
	$fdata["GoodName"] = "idTipoAcuerdo";
	$fdata["ownerTable"] = "compromisofuncional";
	$fdata["Label"] = GetFieldLabel("compromisofuncional_3","idTipoAcuerdo");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "idTipoAcuerdo";

		$fdata["sourceSingle"] = "idTipoAcuerdo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "idTipoAcuerdo";

	
	
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
	$edata["LookupTable"] = "tparam_tipoacuerdo";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "tipoacuerdo_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "tipoacuerdo_name";

	

	
	$edata["LookupOrderBy"] = "tipoacuerdo_name";

	
	
	
	

	
	
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


	$tdatacompromisofuncional_3["idTipoAcuerdo"] = $fdata;
		$tdatacompromisofuncional_3[".searchableFields"][] = "idTipoAcuerdo";
//	NomAcuerdo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "NomAcuerdo";
	$fdata["GoodName"] = "NomAcuerdo";
	$fdata["ownerTable"] = "compromisofuncional";
	$fdata["Label"] = GetFieldLabel("compromisofuncional_3","NomAcuerdo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "NomAcuerdo";

		$fdata["sourceSingle"] = "NomAcuerdo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "NomAcuerdo";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 60;
			$edata["nCols"] = 200;

	
	
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


	$tdatacompromisofuncional_3["NomAcuerdo"] = $fdata;
		$tdatacompromisofuncional_3[".searchableFields"][] = "NomAcuerdo";
//	compromisoFuncional
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "compromisoFuncional";
	$fdata["GoodName"] = "compromisoFuncional";
	$fdata["ownerTable"] = "compromisofuncional";
	$fdata["Label"] = GetFieldLabel("compromisofuncional_3","compromisoFuncional");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "compromisoFuncional";

		$fdata["sourceSingle"] = "compromisoFuncional";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "compromisoFuncional";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 60;
			$edata["nCols"] = 200;

	
	
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


	$tdatacompromisofuncional_3["compromisoFuncional"] = $fdata;
		$tdatacompromisofuncional_3[".searchableFields"][] = "compromisoFuncional";
//	evidencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "evidencia";
	$fdata["GoodName"] = "evidencia";
	$fdata["ownerTable"] = "compromisofuncional";
	$fdata["Label"] = GetFieldLabel("compromisofuncional_3","evidencia");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "evidencia";

		$fdata["sourceSingle"] = "evidencia";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "evidencia";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 60;
			$edata["nCols"] = 200;

	
	
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


	$tdatacompromisofuncional_3["evidencia"] = $fdata;
		$tdatacompromisofuncional_3[".searchableFields"][] = "evidencia";
//	valorAcordado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "valorAcordado";
	$fdata["GoodName"] = "valorAcordado";
	$fdata["ownerTable"] = "compromisofuncional";
	$fdata["Label"] = GetFieldLabel("compromisofuncional_3","valorAcordado");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "valorAcordado";

		$fdata["sourceSingle"] = "valorAcordado";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "valorAcordado";

	
	
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
	$edata["LookupTable"] = "tparam_ponderacion";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "pondera_valor";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "pondera_valor";

	

	
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


	$tdatacompromisofuncional_3["valorAcordado"] = $fdata;
		$tdatacompromisofuncional_3[".searchableFields"][] = "valorAcordado";
//	Valorpendiente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Valorpendiente";
	$fdata["GoodName"] = "Valorpendiente";
	$fdata["ownerTable"] = "compromisofuncional";
	$fdata["Label"] = GetFieldLabel("compromisofuncional_3","Valorpendiente");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Valorpendiente";

		$fdata["sourceSingle"] = "Valorpendiente";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Valorpendiente";

	
	
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


	$tdatacompromisofuncional_3["Valorpendiente"] = $fdata;
		$tdatacompromisofuncional_3[".searchableFields"][] = "Valorpendiente";
//	fchCreacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "fchCreacion";
	$fdata["GoodName"] = "fchCreacion";
	$fdata["ownerTable"] = "compromisofuncional";
	$fdata["Label"] = GetFieldLabel("compromisofuncional_3","fchCreacion");
	$fdata["FieldType"] = 135;


	
	
			

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


	$tdatacompromisofuncional_3["fchCreacion"] = $fdata;
		$tdatacompromisofuncional_3[".searchableFields"][] = "fchCreacion";
//	CFunEstado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "CFunEstado";
	$fdata["GoodName"] = "CFunEstado";
	$fdata["ownerTable"] = "compromisofuncional";
	$fdata["Label"] = GetFieldLabel("compromisofuncional_3","CFunEstado");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "CFunEstado";

		$fdata["sourceSingle"] = "CFunEstado";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CFunEstado";

	
	
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
	$edata["LookupTable"] = "tparam_estados_compromisos";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 4;

		$edata["HorizontalLookup"] = true;

		
	$edata["LinkField"] = "estadoc_id";
	$edata["LinkFieldType"] = 16;
	$edata["DisplayField"] = "estadoc_name";

	

	
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


	$tdatacompromisofuncional_3["CFunEstado"] = $fdata;
		$tdatacompromisofuncional_3[".searchableFields"][] = "CFunEstado";


$tables_data["compromisofuncional_3"]=&$tdatacompromisofuncional_3;
$field_labels["compromisofuncional_3"] = &$fieldLabelscompromisofuncional_3;
$fieldToolTips["compromisofuncional_3"] = &$fieldToolTipscompromisofuncional_3;
$placeHolders["compromisofuncional_3"] = &$placeHolderscompromisofuncional_3;
$page_titles["compromisofuncional_3"] = &$pageTitlescompromisofuncional_3;


changeTextControlsToDate( "compromisofuncional_3" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["compromisofuncional_3"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["compromisofuncional_3"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="evaluacion";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="concertacion_po_3";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "concertacion_po_3";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["compromisofuncional_3"][0] = $masterParams;
				$masterTablesData["compromisofuncional_3"][0]["masterKeys"] = array();
	$masterTablesData["compromisofuncional_3"][0]["masterKeys"][]="id";
				$masterTablesData["compromisofuncional_3"][0]["detailKeys"] = array();
	$masterTablesData["compromisofuncional_3"][0]["detailKeys"][]="idEvaluacion_FK";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_compromisofuncional_3()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	idEvaluacion_FK,  	idTipoAcuerdo,  	NomAcuerdo,  	compromisoFuncional,  	evidencia,  	valorAcordado,  	Valorpendiente,  	fchCreacion,  	CFunEstado";
$proto0["m_strFrom"] = "FROM compromisofuncional";
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
	"m_strTable" => "compromisofuncional",
	"m_srcTableName" => "compromisofuncional_3"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "compromisofuncional_3";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "idEvaluacion_FK",
	"m_strTable" => "compromisofuncional",
	"m_srcTableName" => "compromisofuncional_3"
));

$proto8["m_sql"] = "idEvaluacion_FK";
$proto8["m_srcTableName"] = "compromisofuncional_3";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "idTipoAcuerdo",
	"m_strTable" => "compromisofuncional",
	"m_srcTableName" => "compromisofuncional_3"
));

$proto10["m_sql"] = "idTipoAcuerdo";
$proto10["m_srcTableName"] = "compromisofuncional_3";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "NomAcuerdo",
	"m_strTable" => "compromisofuncional",
	"m_srcTableName" => "compromisofuncional_3"
));

$proto12["m_sql"] = "NomAcuerdo";
$proto12["m_srcTableName"] = "compromisofuncional_3";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "compromisoFuncional",
	"m_strTable" => "compromisofuncional",
	"m_srcTableName" => "compromisofuncional_3"
));

$proto14["m_sql"] = "compromisoFuncional";
$proto14["m_srcTableName"] = "compromisofuncional_3";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "evidencia",
	"m_strTable" => "compromisofuncional",
	"m_srcTableName" => "compromisofuncional_3"
));

$proto16["m_sql"] = "evidencia";
$proto16["m_srcTableName"] = "compromisofuncional_3";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "valorAcordado",
	"m_strTable" => "compromisofuncional",
	"m_srcTableName" => "compromisofuncional_3"
));

$proto18["m_sql"] = "valorAcordado";
$proto18["m_srcTableName"] = "compromisofuncional_3";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Valorpendiente",
	"m_strTable" => "compromisofuncional",
	"m_srcTableName" => "compromisofuncional_3"
));

$proto20["m_sql"] = "Valorpendiente";
$proto20["m_srcTableName"] = "compromisofuncional_3";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "fchCreacion",
	"m_strTable" => "compromisofuncional",
	"m_srcTableName" => "compromisofuncional_3"
));

$proto22["m_sql"] = "fchCreacion";
$proto22["m_srcTableName"] = "compromisofuncional_3";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "CFunEstado",
	"m_strTable" => "compromisofuncional",
	"m_srcTableName" => "compromisofuncional_3"
));

$proto24["m_sql"] = "CFunEstado";
$proto24["m_srcTableName"] = "compromisofuncional_3";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto26=array();
$proto26["m_link"] = "SQLL_MAIN";
			$proto27=array();
$proto27["m_strName"] = "compromisofuncional";
$proto27["m_srcTableName"] = "compromisofuncional_3";
$proto27["m_columns"] = array();
$proto27["m_columns"][] = "id";
$proto27["m_columns"][] = "idEvaluacion_FK";
$proto27["m_columns"][] = "idTipoAcuerdo";
$proto27["m_columns"][] = "NomAcuerdo";
$proto27["m_columns"][] = "compromisoFuncional";
$proto27["m_columns"][] = "evidencia";
$proto27["m_columns"][] = "valorAcordado";
$proto27["m_columns"][] = "Valorpendiente";
$proto27["m_columns"][] = "fchCreacion";
$proto27["m_columns"][] = "CFunEstado";
$obj = new SQLTable($proto27);

$proto26["m_table"] = $obj;
$proto26["m_sql"] = "compromisofuncional";
$proto26["m_alias"] = "";
$proto26["m_srcTableName"] = "compromisofuncional_3";
$proto28=array();
$proto28["m_sql"] = "";
$proto28["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto28["m_column"]=$obj;
$proto28["m_contained"] = array();
$proto28["m_strCase"] = "";
$proto28["m_havingmode"] = false;
$proto28["m_inBrackets"] = false;
$proto28["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto28);

$proto26["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto26);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="compromisofuncional_3";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_compromisofuncional_3 = createSqlQuery_compromisofuncional_3();


	
				;

										

$tdatacompromisofuncional_3[".sqlquery"] = $queryData_compromisofuncional_3;



include_once(getabspath("include/compromisofuncional_3_events.php"));
$tdatacompromisofuncional_3[".hasEvents"] = true;

?>