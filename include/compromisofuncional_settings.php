<?php
$tdatacompromisofuncional = array();
$tdatacompromisofuncional[".searchableFields"] = array();
$tdatacompromisofuncional[".ShortName"] = "compromisofuncional";
$tdatacompromisofuncional[".OwnerID"] = "";
$tdatacompromisofuncional[".OriginalTable"] = "compromisofuncional";


$tdatacompromisofuncional[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatacompromisofuncional[".originalPagesByType"] = $tdatacompromisofuncional[".pagesByType"];
$tdatacompromisofuncional[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatacompromisofuncional[".originalPages"] = $tdatacompromisofuncional[".pages"];
$tdatacompromisofuncional[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatacompromisofuncional[".originalDefaultPages"] = $tdatacompromisofuncional[".defaultPages"];

//	field labels
$fieldLabelscompromisofuncional = array();
$fieldToolTipscompromisofuncional = array();
$pageTitlescompromisofuncional = array();
$placeHolderscompromisofuncional = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscompromisofuncional["Spanish"] = array();
	$fieldToolTipscompromisofuncional["Spanish"] = array();
	$placeHolderscompromisofuncional["Spanish"] = array();
	$pageTitlescompromisofuncional["Spanish"] = array();
	$fieldLabelscompromisofuncional["Spanish"]["id"] = "Id";
	$fieldToolTipscompromisofuncional["Spanish"]["id"] = "";
	$placeHolderscompromisofuncional["Spanish"]["id"] = "";
	$fieldLabelscompromisofuncional["Spanish"]["idEvaluacion_FK"] = "Radicado";
	$fieldToolTipscompromisofuncional["Spanish"]["idEvaluacion_FK"] = "";
	$placeHolderscompromisofuncional["Spanish"]["idEvaluacion_FK"] = "";
	$fieldLabelscompromisofuncional["Spanish"]["idTipoAcuerdo"] = "Tipo acuerdo";
	$fieldToolTipscompromisofuncional["Spanish"]["idTipoAcuerdo"] = "";
	$placeHolderscompromisofuncional["Spanish"]["idTipoAcuerdo"] = "";
	$fieldLabelscompromisofuncional["Spanish"]["NomAcuerdo"] = "Acuerdo";
	$fieldToolTipscompromisofuncional["Spanish"]["NomAcuerdo"] = "";
	$placeHolderscompromisofuncional["Spanish"]["NomAcuerdo"] = "";
	$fieldLabelscompromisofuncional["Spanish"]["compromisoFuncional"] = "Compromiso ";
	$fieldToolTipscompromisofuncional["Spanish"]["compromisoFuncional"] = "";
	$placeHolderscompromisofuncional["Spanish"]["compromisoFuncional"] = "";
	$fieldLabelscompromisofuncional["Spanish"]["evidencia"] = "Evidencia";
	$fieldToolTipscompromisofuncional["Spanish"]["evidencia"] = "";
	$placeHolderscompromisofuncional["Spanish"]["evidencia"] = "";
	$fieldLabelscompromisofuncional["Spanish"]["valorAcordado"] = "Valor de este acuerdo";
	$fieldToolTipscompromisofuncional["Spanish"]["valorAcordado"] = "";
	$placeHolderscompromisofuncional["Spanish"]["valorAcordado"] = "";
	$fieldLabelscompromisofuncional["Spanish"]["fchCreacion"] = "Fch Creacion";
	$fieldToolTipscompromisofuncional["Spanish"]["fchCreacion"] = "";
	$placeHolderscompromisofuncional["Spanish"]["fchCreacion"] = "";
	$fieldLabelscompromisofuncional["Spanish"]["CFunEstado"] = "Estado";
	$fieldToolTipscompromisofuncional["Spanish"]["CFunEstado"] = "";
	$placeHolderscompromisofuncional["Spanish"]["CFunEstado"] = "";
	$fieldLabelscompromisofuncional["Spanish"]["Valorpendiente"] = "Pendiente por acordar";
	$fieldToolTipscompromisofuncional["Spanish"]["Valorpendiente"] = "";
	$placeHolderscompromisofuncional["Spanish"]["Valorpendiente"] = "";
	if (count($fieldToolTipscompromisofuncional["Spanish"]))
		$tdatacompromisofuncional[".isUseToolTips"] = true;
}


	$tdatacompromisofuncional[".NCSearch"] = true;



$tdatacompromisofuncional[".shortTableName"] = "compromisofuncional";
$tdatacompromisofuncional[".nSecOptions"] = 0;

$tdatacompromisofuncional[".mainTableOwnerID"] = "";
$tdatacompromisofuncional[".entityType"] = 0;
$tdatacompromisofuncional[".connId"] = "edl2_at_127_0_0_1";


$tdatacompromisofuncional[".strOriginalTableName"] = "compromisofuncional";

	



$tdatacompromisofuncional[".showAddInPopup"] = false;

$tdatacompromisofuncional[".showEditInPopup"] = false;

$tdatacompromisofuncional[".showViewInPopup"] = false;

$tdatacompromisofuncional[".listAjax"] = false;
//	temporary
//$tdatacompromisofuncional[".listAjax"] = false;

	$tdatacompromisofuncional[".audit"] = true;

	$tdatacompromisofuncional[".locking"] = true;


$pages = $tdatacompromisofuncional[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacompromisofuncional[".edit"] = true;
	$tdatacompromisofuncional[".afterEditAction"] = 1;
	$tdatacompromisofuncional[".closePopupAfterEdit"] = 1;
	$tdatacompromisofuncional[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacompromisofuncional[".add"] = true;
$tdatacompromisofuncional[".afterAddAction"] = 1;
$tdatacompromisofuncional[".closePopupAfterAdd"] = 1;
$tdatacompromisofuncional[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacompromisofuncional[".list"] = true;
}



$tdatacompromisofuncional[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacompromisofuncional[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacompromisofuncional[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacompromisofuncional[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacompromisofuncional[".printFriendly"] = true;
}



$tdatacompromisofuncional[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacompromisofuncional[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacompromisofuncional[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacompromisofuncional[".isUseAjaxSuggest"] = true;



																																																																																										

$tdatacompromisofuncional[".ajaxCodeSnippetAdded"] = false;

$tdatacompromisofuncional[".buttonsAdded"] = false;

$tdatacompromisofuncional[".addPageEvents"] = true;

// use timepicker for search panel
$tdatacompromisofuncional[".isUseTimeForSearch"] = false;


$tdatacompromisofuncional[".badgeColor"] = "d2af80";


$tdatacompromisofuncional[".allSearchFields"] = array();
$tdatacompromisofuncional[".filterFields"] = array();
$tdatacompromisofuncional[".requiredSearchFields"] = array();

$tdatacompromisofuncional[".googleLikeFields"] = array();
$tdatacompromisofuncional[".googleLikeFields"][] = "id";
$tdatacompromisofuncional[".googleLikeFields"][] = "idEvaluacion_FK";
$tdatacompromisofuncional[".googleLikeFields"][] = "idTipoAcuerdo";
$tdatacompromisofuncional[".googleLikeFields"][] = "NomAcuerdo";
$tdatacompromisofuncional[".googleLikeFields"][] = "compromisoFuncional";
$tdatacompromisofuncional[".googleLikeFields"][] = "evidencia";
$tdatacompromisofuncional[".googleLikeFields"][] = "valorAcordado";
$tdatacompromisofuncional[".googleLikeFields"][] = "Valorpendiente";
$tdatacompromisofuncional[".googleLikeFields"][] = "fchCreacion";
$tdatacompromisofuncional[".googleLikeFields"][] = "CFunEstado";



$tdatacompromisofuncional[".tableType"] = "list";

$tdatacompromisofuncional[".printerPageOrientation"] = 0;
$tdatacompromisofuncional[".nPrinterPageScale"] = 100;

$tdatacompromisofuncional[".nPrinterSplitRecords"] = 40;

$tdatacompromisofuncional[".geocodingEnabled"] = false;










$tdatacompromisofuncional[".pageSize"] = 20;

$tdatacompromisofuncional[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacompromisofuncional[".strOrderBy"] = $tstrOrderBy;

$tdatacompromisofuncional[".orderindexes"] = array();


$tdatacompromisofuncional[".sqlHead"] = "SELECT id,  	idEvaluacion_FK,  	idTipoAcuerdo,  	NomAcuerdo,  	compromisoFuncional,  	evidencia,  	valorAcordado,  	Valorpendiente,  	fchCreacion,  	CFunEstado";
$tdatacompromisofuncional[".sqlFrom"] = "FROM compromisofuncional";
$tdatacompromisofuncional[".sqlWhereExpr"] = "";
$tdatacompromisofuncional[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacompromisofuncional[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacompromisofuncional[".arrGroupsPerPage"] = $arrGPP;

$tdatacompromisofuncional[".highlightSearchResults"] = true;

$tableKeyscompromisofuncional = array();
$tableKeyscompromisofuncional[] = "id";
$tdatacompromisofuncional[".Keys"] = $tableKeyscompromisofuncional;


$tdatacompromisofuncional[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "compromisofuncional";
	$fdata["Label"] = GetFieldLabel("compromisofuncional","id");
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


	$tdatacompromisofuncional["id"] = $fdata;
		$tdatacompromisofuncional[".searchableFields"][] = "id";
//	idEvaluacion_FK
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "idEvaluacion_FK";
	$fdata["GoodName"] = "idEvaluacion_FK";
	$fdata["ownerTable"] = "compromisofuncional";
	$fdata["Label"] = GetFieldLabel("compromisofuncional","idEvaluacion_FK");
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


	$tdatacompromisofuncional["idEvaluacion_FK"] = $fdata;
		$tdatacompromisofuncional[".searchableFields"][] = "idEvaluacion_FK";
//	idTipoAcuerdo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "idTipoAcuerdo";
	$fdata["GoodName"] = "idTipoAcuerdo";
	$fdata["ownerTable"] = "compromisofuncional";
	$fdata["Label"] = GetFieldLabel("compromisofuncional","idTipoAcuerdo");
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


	$tdatacompromisofuncional["idTipoAcuerdo"] = $fdata;
		$tdatacompromisofuncional[".searchableFields"][] = "idTipoAcuerdo";
//	NomAcuerdo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "NomAcuerdo";
	$fdata["GoodName"] = "NomAcuerdo";
	$fdata["ownerTable"] = "compromisofuncional";
	$fdata["Label"] = GetFieldLabel("compromisofuncional","NomAcuerdo");
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


	$tdatacompromisofuncional["NomAcuerdo"] = $fdata;
		$tdatacompromisofuncional[".searchableFields"][] = "NomAcuerdo";
//	compromisoFuncional
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "compromisoFuncional";
	$fdata["GoodName"] = "compromisoFuncional";
	$fdata["ownerTable"] = "compromisofuncional";
	$fdata["Label"] = GetFieldLabel("compromisofuncional","compromisoFuncional");
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


	$tdatacompromisofuncional["compromisoFuncional"] = $fdata;
		$tdatacompromisofuncional[".searchableFields"][] = "compromisoFuncional";
//	evidencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "evidencia";
	$fdata["GoodName"] = "evidencia";
	$fdata["ownerTable"] = "compromisofuncional";
	$fdata["Label"] = GetFieldLabel("compromisofuncional","evidencia");
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


	$tdatacompromisofuncional["evidencia"] = $fdata;
		$tdatacompromisofuncional[".searchableFields"][] = "evidencia";
//	valorAcordado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "valorAcordado";
	$fdata["GoodName"] = "valorAcordado";
	$fdata["ownerTable"] = "compromisofuncional";
	$fdata["Label"] = GetFieldLabel("compromisofuncional","valorAcordado");
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


	$tdatacompromisofuncional["valorAcordado"] = $fdata;
		$tdatacompromisofuncional[".searchableFields"][] = "valorAcordado";
//	Valorpendiente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Valorpendiente";
	$fdata["GoodName"] = "Valorpendiente";
	$fdata["ownerTable"] = "compromisofuncional";
	$fdata["Label"] = GetFieldLabel("compromisofuncional","Valorpendiente");
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


	$tdatacompromisofuncional["Valorpendiente"] = $fdata;
		$tdatacompromisofuncional[".searchableFields"][] = "Valorpendiente";
//	fchCreacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "fchCreacion";
	$fdata["GoodName"] = "fchCreacion";
	$fdata["ownerTable"] = "compromisofuncional";
	$fdata["Label"] = GetFieldLabel("compromisofuncional","fchCreacion");
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


	$tdatacompromisofuncional["fchCreacion"] = $fdata;
		$tdatacompromisofuncional[".searchableFields"][] = "fchCreacion";
//	CFunEstado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "CFunEstado";
	$fdata["GoodName"] = "CFunEstado";
	$fdata["ownerTable"] = "compromisofuncional";
	$fdata["Label"] = GetFieldLabel("compromisofuncional","CFunEstado");
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


	$tdatacompromisofuncional["CFunEstado"] = $fdata;
		$tdatacompromisofuncional[".searchableFields"][] = "CFunEstado";


$tables_data["compromisofuncional"]=&$tdatacompromisofuncional;
$field_labels["compromisofuncional"] = &$fieldLabelscompromisofuncional;
$fieldToolTips["compromisofuncional"] = &$fieldToolTipscompromisofuncional;
$placeHolders["compromisofuncional"] = &$placeHolderscompromisofuncional;
$page_titles["compromisofuncional"] = &$pageTitlescompromisofuncional;


changeTextControlsToDate( "compromisofuncional" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["compromisofuncional"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["compromisofuncional"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="evaluacion";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="concertacion_po";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "concertacion_po";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["compromisofuncional"][0] = $masterParams;
				$masterTablesData["compromisofuncional"][0]["masterKeys"] = array();
	$masterTablesData["compromisofuncional"][0]["masterKeys"][]="id";
				$masterTablesData["compromisofuncional"][0]["detailKeys"] = array();
	$masterTablesData["compromisofuncional"][0]["detailKeys"][]="idEvaluacion_FK";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_compromisofuncional()
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
	"m_srcTableName" => "compromisofuncional"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "compromisofuncional";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "idEvaluacion_FK",
	"m_strTable" => "compromisofuncional",
	"m_srcTableName" => "compromisofuncional"
));

$proto8["m_sql"] = "idEvaluacion_FK";
$proto8["m_srcTableName"] = "compromisofuncional";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "idTipoAcuerdo",
	"m_strTable" => "compromisofuncional",
	"m_srcTableName" => "compromisofuncional"
));

$proto10["m_sql"] = "idTipoAcuerdo";
$proto10["m_srcTableName"] = "compromisofuncional";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "NomAcuerdo",
	"m_strTable" => "compromisofuncional",
	"m_srcTableName" => "compromisofuncional"
));

$proto12["m_sql"] = "NomAcuerdo";
$proto12["m_srcTableName"] = "compromisofuncional";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "compromisoFuncional",
	"m_strTable" => "compromisofuncional",
	"m_srcTableName" => "compromisofuncional"
));

$proto14["m_sql"] = "compromisoFuncional";
$proto14["m_srcTableName"] = "compromisofuncional";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "evidencia",
	"m_strTable" => "compromisofuncional",
	"m_srcTableName" => "compromisofuncional"
));

$proto16["m_sql"] = "evidencia";
$proto16["m_srcTableName"] = "compromisofuncional";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "valorAcordado",
	"m_strTable" => "compromisofuncional",
	"m_srcTableName" => "compromisofuncional"
));

$proto18["m_sql"] = "valorAcordado";
$proto18["m_srcTableName"] = "compromisofuncional";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Valorpendiente",
	"m_strTable" => "compromisofuncional",
	"m_srcTableName" => "compromisofuncional"
));

$proto20["m_sql"] = "Valorpendiente";
$proto20["m_srcTableName"] = "compromisofuncional";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "fchCreacion",
	"m_strTable" => "compromisofuncional",
	"m_srcTableName" => "compromisofuncional"
));

$proto22["m_sql"] = "fchCreacion";
$proto22["m_srcTableName"] = "compromisofuncional";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "CFunEstado",
	"m_strTable" => "compromisofuncional",
	"m_srcTableName" => "compromisofuncional"
));

$proto24["m_sql"] = "CFunEstado";
$proto24["m_srcTableName"] = "compromisofuncional";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto26=array();
$proto26["m_link"] = "SQLL_MAIN";
			$proto27=array();
$proto27["m_strName"] = "compromisofuncional";
$proto27["m_srcTableName"] = "compromisofuncional";
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
$proto26["m_srcTableName"] = "compromisofuncional";
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
$proto0["m_srcTableName"]="compromisofuncional";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_compromisofuncional = createSqlQuery_compromisofuncional();


	
				;

										

$tdatacompromisofuncional[".sqlquery"] = $queryData_compromisofuncional;



include_once(getabspath("include/compromisofuncional_events.php"));
$tdatacompromisofuncional[".hasEvents"] = true;

?>