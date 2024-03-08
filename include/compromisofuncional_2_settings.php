<?php
$tdatacompromisofuncional_2 = array();
$tdatacompromisofuncional_2[".searchableFields"] = array();
$tdatacompromisofuncional_2[".ShortName"] = "compromisofuncional_2";
$tdatacompromisofuncional_2[".OwnerID"] = "";
$tdatacompromisofuncional_2[".OriginalTable"] = "compromisofuncional";


$tdatacompromisofuncional_2[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatacompromisofuncional_2[".originalPagesByType"] = $tdatacompromisofuncional_2[".pagesByType"];
$tdatacompromisofuncional_2[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatacompromisofuncional_2[".originalPages"] = $tdatacompromisofuncional_2[".pages"];
$tdatacompromisofuncional_2[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatacompromisofuncional_2[".originalDefaultPages"] = $tdatacompromisofuncional_2[".defaultPages"];

//	field labels
$fieldLabelscompromisofuncional_2 = array();
$fieldToolTipscompromisofuncional_2 = array();
$pageTitlescompromisofuncional_2 = array();
$placeHolderscompromisofuncional_2 = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscompromisofuncional_2["Spanish"] = array();
	$fieldToolTipscompromisofuncional_2["Spanish"] = array();
	$placeHolderscompromisofuncional_2["Spanish"] = array();
	$pageTitlescompromisofuncional_2["Spanish"] = array();
	$fieldLabelscompromisofuncional_2["Spanish"]["id"] = "Id";
	$fieldToolTipscompromisofuncional_2["Spanish"]["id"] = "";
	$placeHolderscompromisofuncional_2["Spanish"]["id"] = "";
	$fieldLabelscompromisofuncional_2["Spanish"]["idEvaluacion_FK"] = "Radicado";
	$fieldToolTipscompromisofuncional_2["Spanish"]["idEvaluacion_FK"] = "";
	$placeHolderscompromisofuncional_2["Spanish"]["idEvaluacion_FK"] = "";
	$fieldLabelscompromisofuncional_2["Spanish"]["idTipoAcuerdo"] = "Tipo acuerdo";
	$fieldToolTipscompromisofuncional_2["Spanish"]["idTipoAcuerdo"] = "";
	$placeHolderscompromisofuncional_2["Spanish"]["idTipoAcuerdo"] = "";
	$fieldLabelscompromisofuncional_2["Spanish"]["NomAcuerdo"] = "Acuerdo";
	$fieldToolTipscompromisofuncional_2["Spanish"]["NomAcuerdo"] = "";
	$placeHolderscompromisofuncional_2["Spanish"]["NomAcuerdo"] = "";
	$fieldLabelscompromisofuncional_2["Spanish"]["compromisoFuncional"] = "Compromiso ";
	$fieldToolTipscompromisofuncional_2["Spanish"]["compromisoFuncional"] = "";
	$placeHolderscompromisofuncional_2["Spanish"]["compromisoFuncional"] = "";
	$fieldLabelscompromisofuncional_2["Spanish"]["evidencia"] = "Evidencia";
	$fieldToolTipscompromisofuncional_2["Spanish"]["evidencia"] = "";
	$placeHolderscompromisofuncional_2["Spanish"]["evidencia"] = "";
	$fieldLabelscompromisofuncional_2["Spanish"]["valorAcordado"] = "Valor de este acuerdo";
	$fieldToolTipscompromisofuncional_2["Spanish"]["valorAcordado"] = "";
	$placeHolderscompromisofuncional_2["Spanish"]["valorAcordado"] = "";
	$fieldLabelscompromisofuncional_2["Spanish"]["fchCreacion"] = "Fch Creacion";
	$fieldToolTipscompromisofuncional_2["Spanish"]["fchCreacion"] = "";
	$placeHolderscompromisofuncional_2["Spanish"]["fchCreacion"] = "";
	$fieldLabelscompromisofuncional_2["Spanish"]["CFunEstado"] = "Estado";
	$fieldToolTipscompromisofuncional_2["Spanish"]["CFunEstado"] = "";
	$placeHolderscompromisofuncional_2["Spanish"]["CFunEstado"] = "";
	$fieldLabelscompromisofuncional_2["Spanish"]["Valorpendiente"] = "Pendiente por acordar";
	$fieldToolTipscompromisofuncional_2["Spanish"]["Valorpendiente"] = "";
	$placeHolderscompromisofuncional_2["Spanish"]["Valorpendiente"] = "";
	if (count($fieldToolTipscompromisofuncional_2["Spanish"]))
		$tdatacompromisofuncional_2[".isUseToolTips"] = true;
}


	$tdatacompromisofuncional_2[".NCSearch"] = true;



$tdatacompromisofuncional_2[".shortTableName"] = "compromisofuncional_2";
$tdatacompromisofuncional_2[".nSecOptions"] = 0;

$tdatacompromisofuncional_2[".mainTableOwnerID"] = "";
$tdatacompromisofuncional_2[".entityType"] = 1;
$tdatacompromisofuncional_2[".connId"] = "edl2_at_127_0_0_1";


$tdatacompromisofuncional_2[".strOriginalTableName"] = "compromisofuncional";

	



$tdatacompromisofuncional_2[".showAddInPopup"] = false;

$tdatacompromisofuncional_2[".showEditInPopup"] = false;

$tdatacompromisofuncional_2[".showViewInPopup"] = false;

$tdatacompromisofuncional_2[".listAjax"] = false;
//	temporary
//$tdatacompromisofuncional_2[".listAjax"] = false;

	$tdatacompromisofuncional_2[".audit"] = true;

	$tdatacompromisofuncional_2[".locking"] = true;


$pages = $tdatacompromisofuncional_2[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacompromisofuncional_2[".edit"] = true;
	$tdatacompromisofuncional_2[".afterEditAction"] = 1;
	$tdatacompromisofuncional_2[".closePopupAfterEdit"] = 1;
	$tdatacompromisofuncional_2[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacompromisofuncional_2[".add"] = true;
$tdatacompromisofuncional_2[".afterAddAction"] = 1;
$tdatacompromisofuncional_2[".closePopupAfterAdd"] = 1;
$tdatacompromisofuncional_2[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacompromisofuncional_2[".list"] = true;
}



$tdatacompromisofuncional_2[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacompromisofuncional_2[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacompromisofuncional_2[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacompromisofuncional_2[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacompromisofuncional_2[".printFriendly"] = true;
}



$tdatacompromisofuncional_2[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacompromisofuncional_2[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacompromisofuncional_2[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacompromisofuncional_2[".isUseAjaxSuggest"] = true;



																																																																																										

$tdatacompromisofuncional_2[".ajaxCodeSnippetAdded"] = false;

$tdatacompromisofuncional_2[".buttonsAdded"] = false;

$tdatacompromisofuncional_2[".addPageEvents"] = true;

// use timepicker for search panel
$tdatacompromisofuncional_2[".isUseTimeForSearch"] = false;


$tdatacompromisofuncional_2[".badgeColor"] = "d2691e";


$tdatacompromisofuncional_2[".allSearchFields"] = array();
$tdatacompromisofuncional_2[".filterFields"] = array();
$tdatacompromisofuncional_2[".requiredSearchFields"] = array();

$tdatacompromisofuncional_2[".googleLikeFields"] = array();
$tdatacompromisofuncional_2[".googleLikeFields"][] = "id";
$tdatacompromisofuncional_2[".googleLikeFields"][] = "idEvaluacion_FK";
$tdatacompromisofuncional_2[".googleLikeFields"][] = "idTipoAcuerdo";
$tdatacompromisofuncional_2[".googleLikeFields"][] = "NomAcuerdo";
$tdatacompromisofuncional_2[".googleLikeFields"][] = "compromisoFuncional";
$tdatacompromisofuncional_2[".googleLikeFields"][] = "evidencia";
$tdatacompromisofuncional_2[".googleLikeFields"][] = "valorAcordado";
$tdatacompromisofuncional_2[".googleLikeFields"][] = "Valorpendiente";
$tdatacompromisofuncional_2[".googleLikeFields"][] = "fchCreacion";
$tdatacompromisofuncional_2[".googleLikeFields"][] = "CFunEstado";



$tdatacompromisofuncional_2[".tableType"] = "list";

$tdatacompromisofuncional_2[".printerPageOrientation"] = 0;
$tdatacompromisofuncional_2[".nPrinterPageScale"] = 100;

$tdatacompromisofuncional_2[".nPrinterSplitRecords"] = 40;

$tdatacompromisofuncional_2[".geocodingEnabled"] = false;










$tdatacompromisofuncional_2[".pageSize"] = 20;

$tdatacompromisofuncional_2[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacompromisofuncional_2[".strOrderBy"] = $tstrOrderBy;

$tdatacompromisofuncional_2[".orderindexes"] = array();


$tdatacompromisofuncional_2[".sqlHead"] = "SELECT id,  	idEvaluacion_FK,  	idTipoAcuerdo,  	NomAcuerdo,  	compromisoFuncional,  	evidencia,  	valorAcordado,  	Valorpendiente,  	fchCreacion,  	CFunEstado";
$tdatacompromisofuncional_2[".sqlFrom"] = "FROM compromisofuncional";
$tdatacompromisofuncional_2[".sqlWhereExpr"] = "";
$tdatacompromisofuncional_2[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacompromisofuncional_2[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacompromisofuncional_2[".arrGroupsPerPage"] = $arrGPP;

$tdatacompromisofuncional_2[".highlightSearchResults"] = true;

$tableKeyscompromisofuncional_2 = array();
$tableKeyscompromisofuncional_2[] = "id";
$tdatacompromisofuncional_2[".Keys"] = $tableKeyscompromisofuncional_2;


$tdatacompromisofuncional_2[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "compromisofuncional";
	$fdata["Label"] = GetFieldLabel("compromisofuncional_2","id");
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


	$tdatacompromisofuncional_2["id"] = $fdata;
		$tdatacompromisofuncional_2[".searchableFields"][] = "id";
//	idEvaluacion_FK
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "idEvaluacion_FK";
	$fdata["GoodName"] = "idEvaluacion_FK";
	$fdata["ownerTable"] = "compromisofuncional";
	$fdata["Label"] = GetFieldLabel("compromisofuncional_2","idEvaluacion_FK");
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


	$tdatacompromisofuncional_2["idEvaluacion_FK"] = $fdata;
		$tdatacompromisofuncional_2[".searchableFields"][] = "idEvaluacion_FK";
//	idTipoAcuerdo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "idTipoAcuerdo";
	$fdata["GoodName"] = "idTipoAcuerdo";
	$fdata["ownerTable"] = "compromisofuncional";
	$fdata["Label"] = GetFieldLabel("compromisofuncional_2","idTipoAcuerdo");
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


	$tdatacompromisofuncional_2["idTipoAcuerdo"] = $fdata;
		$tdatacompromisofuncional_2[".searchableFields"][] = "idTipoAcuerdo";
//	NomAcuerdo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "NomAcuerdo";
	$fdata["GoodName"] = "NomAcuerdo";
	$fdata["ownerTable"] = "compromisofuncional";
	$fdata["Label"] = GetFieldLabel("compromisofuncional_2","NomAcuerdo");
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


	$tdatacompromisofuncional_2["NomAcuerdo"] = $fdata;
		$tdatacompromisofuncional_2[".searchableFields"][] = "NomAcuerdo";
//	compromisoFuncional
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "compromisoFuncional";
	$fdata["GoodName"] = "compromisoFuncional";
	$fdata["ownerTable"] = "compromisofuncional";
	$fdata["Label"] = GetFieldLabel("compromisofuncional_2","compromisoFuncional");
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


	$tdatacompromisofuncional_2["compromisoFuncional"] = $fdata;
		$tdatacompromisofuncional_2[".searchableFields"][] = "compromisoFuncional";
//	evidencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "evidencia";
	$fdata["GoodName"] = "evidencia";
	$fdata["ownerTable"] = "compromisofuncional";
	$fdata["Label"] = GetFieldLabel("compromisofuncional_2","evidencia");
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


	$tdatacompromisofuncional_2["evidencia"] = $fdata;
		$tdatacompromisofuncional_2[".searchableFields"][] = "evidencia";
//	valorAcordado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "valorAcordado";
	$fdata["GoodName"] = "valorAcordado";
	$fdata["ownerTable"] = "compromisofuncional";
	$fdata["Label"] = GetFieldLabel("compromisofuncional_2","valorAcordado");
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


	$tdatacompromisofuncional_2["valorAcordado"] = $fdata;
		$tdatacompromisofuncional_2[".searchableFields"][] = "valorAcordado";
//	Valorpendiente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Valorpendiente";
	$fdata["GoodName"] = "Valorpendiente";
	$fdata["ownerTable"] = "compromisofuncional";
	$fdata["Label"] = GetFieldLabel("compromisofuncional_2","Valorpendiente");
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


	$tdatacompromisofuncional_2["Valorpendiente"] = $fdata;
		$tdatacompromisofuncional_2[".searchableFields"][] = "Valorpendiente";
//	fchCreacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "fchCreacion";
	$fdata["GoodName"] = "fchCreacion";
	$fdata["ownerTable"] = "compromisofuncional";
	$fdata["Label"] = GetFieldLabel("compromisofuncional_2","fchCreacion");
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


	$tdatacompromisofuncional_2["fchCreacion"] = $fdata;
		$tdatacompromisofuncional_2[".searchableFields"][] = "fchCreacion";
//	CFunEstado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "CFunEstado";
	$fdata["GoodName"] = "CFunEstado";
	$fdata["ownerTable"] = "compromisofuncional";
	$fdata["Label"] = GetFieldLabel("compromisofuncional_2","CFunEstado");
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


	$tdatacompromisofuncional_2["CFunEstado"] = $fdata;
		$tdatacompromisofuncional_2[".searchableFields"][] = "CFunEstado";


$tables_data["compromisofuncional_2"]=&$tdatacompromisofuncional_2;
$field_labels["compromisofuncional_2"] = &$fieldLabelscompromisofuncional_2;
$fieldToolTips["compromisofuncional_2"] = &$fieldToolTipscompromisofuncional_2;
$placeHolders["compromisofuncional_2"] = &$placeHolderscompromisofuncional_2;
$page_titles["compromisofuncional_2"] = &$pageTitlescompromisofuncional_2;


changeTextControlsToDate( "compromisofuncional_2" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["compromisofuncional_2"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["compromisofuncional_2"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="evaluacion";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="concertacion_po_2";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "concertacion_po_2";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["compromisofuncional_2"][0] = $masterParams;
				$masterTablesData["compromisofuncional_2"][0]["masterKeys"] = array();
	$masterTablesData["compromisofuncional_2"][0]["masterKeys"][]="id";
				$masterTablesData["compromisofuncional_2"][0]["detailKeys"] = array();
	$masterTablesData["compromisofuncional_2"][0]["detailKeys"][]="idEvaluacion_FK";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_compromisofuncional_2()
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
	"m_srcTableName" => "compromisofuncional_2"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "compromisofuncional_2";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "idEvaluacion_FK",
	"m_strTable" => "compromisofuncional",
	"m_srcTableName" => "compromisofuncional_2"
));

$proto8["m_sql"] = "idEvaluacion_FK";
$proto8["m_srcTableName"] = "compromisofuncional_2";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "idTipoAcuerdo",
	"m_strTable" => "compromisofuncional",
	"m_srcTableName" => "compromisofuncional_2"
));

$proto10["m_sql"] = "idTipoAcuerdo";
$proto10["m_srcTableName"] = "compromisofuncional_2";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "NomAcuerdo",
	"m_strTable" => "compromisofuncional",
	"m_srcTableName" => "compromisofuncional_2"
));

$proto12["m_sql"] = "NomAcuerdo";
$proto12["m_srcTableName"] = "compromisofuncional_2";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "compromisoFuncional",
	"m_strTable" => "compromisofuncional",
	"m_srcTableName" => "compromisofuncional_2"
));

$proto14["m_sql"] = "compromisoFuncional";
$proto14["m_srcTableName"] = "compromisofuncional_2";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "evidencia",
	"m_strTable" => "compromisofuncional",
	"m_srcTableName" => "compromisofuncional_2"
));

$proto16["m_sql"] = "evidencia";
$proto16["m_srcTableName"] = "compromisofuncional_2";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "valorAcordado",
	"m_strTable" => "compromisofuncional",
	"m_srcTableName" => "compromisofuncional_2"
));

$proto18["m_sql"] = "valorAcordado";
$proto18["m_srcTableName"] = "compromisofuncional_2";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Valorpendiente",
	"m_strTable" => "compromisofuncional",
	"m_srcTableName" => "compromisofuncional_2"
));

$proto20["m_sql"] = "Valorpendiente";
$proto20["m_srcTableName"] = "compromisofuncional_2";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "fchCreacion",
	"m_strTable" => "compromisofuncional",
	"m_srcTableName" => "compromisofuncional_2"
));

$proto22["m_sql"] = "fchCreacion";
$proto22["m_srcTableName"] = "compromisofuncional_2";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "CFunEstado",
	"m_strTable" => "compromisofuncional",
	"m_srcTableName" => "compromisofuncional_2"
));

$proto24["m_sql"] = "CFunEstado";
$proto24["m_srcTableName"] = "compromisofuncional_2";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto26=array();
$proto26["m_link"] = "SQLL_MAIN";
			$proto27=array();
$proto27["m_strName"] = "compromisofuncional";
$proto27["m_srcTableName"] = "compromisofuncional_2";
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
$proto26["m_srcTableName"] = "compromisofuncional_2";
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
$proto0["m_srcTableName"]="compromisofuncional_2";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_compromisofuncional_2 = createSqlQuery_compromisofuncional_2();


	
				;

										

$tdatacompromisofuncional_2[".sqlquery"] = $queryData_compromisofuncional_2;



include_once(getabspath("include/compromisofuncional_2_events.php"));
$tdatacompromisofuncional_2[".hasEvents"] = true;

?>