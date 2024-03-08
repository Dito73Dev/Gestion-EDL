<?php
$tdatacomportamental_jerarquica = array();
$tdatacomportamental_jerarquica[".searchableFields"] = array();
$tdatacomportamental_jerarquica[".ShortName"] = "comportamental_jerarquica";
$tdatacomportamental_jerarquica[".OwnerID"] = "";
$tdatacomportamental_jerarquica[".OriginalTable"] = "comportamental_jerarquica";


$tdatacomportamental_jerarquica[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatacomportamental_jerarquica[".originalPagesByType"] = $tdatacomportamental_jerarquica[".pagesByType"];
$tdatacomportamental_jerarquica[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatacomportamental_jerarquica[".originalPages"] = $tdatacomportamental_jerarquica[".pages"];
$tdatacomportamental_jerarquica[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatacomportamental_jerarquica[".originalDefaultPages"] = $tdatacomportamental_jerarquica[".defaultPages"];

//	field labels
$fieldLabelscomportamental_jerarquica = array();
$fieldToolTipscomportamental_jerarquica = array();
$pageTitlescomportamental_jerarquica = array();
$placeHolderscomportamental_jerarquica = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscomportamental_jerarquica["Spanish"] = array();
	$fieldToolTipscomportamental_jerarquica["Spanish"] = array();
	$placeHolderscomportamental_jerarquica["Spanish"] = array();
	$pageTitlescomportamental_jerarquica["Spanish"] = array();
	$fieldLabelscomportamental_jerarquica["Spanish"]["id"] = "Id";
	$fieldToolTipscomportamental_jerarquica["Spanish"]["id"] = "";
	$placeHolderscomportamental_jerarquica["Spanish"]["id"] = "";
	$fieldLabelscomportamental_jerarquica["Spanish"]["idEvaluacion_FK"] = "Radicado";
	$fieldToolTipscomportamental_jerarquica["Spanish"]["idEvaluacion_FK"] = "";
	$placeHolderscomportamental_jerarquica["Spanish"]["idEvaluacion_FK"] = "";
	$fieldLabelscomportamental_jerarquica["Spanish"]["idComportamental"] = "Acuerdo";
	$fieldToolTipscomportamental_jerarquica["Spanish"]["idComportamental"] = "";
	$placeHolderscomportamental_jerarquica["Spanish"]["idComportamental"] = "";
	$fieldLabelscomportamental_jerarquica["Spanish"]["idCompetencia"] = "Competencia";
	$fieldToolTipscomportamental_jerarquica["Spanish"]["idCompetencia"] = "";
	$placeHolderscomportamental_jerarquica["Spanish"]["idCompetencia"] = "";
	$fieldLabelscomportamental_jerarquica["Spanish"]["IdConducta"] = "Conducta";
	$fieldToolTipscomportamental_jerarquica["Spanish"]["IdConducta"] = "";
	$placeHolderscomportamental_jerarquica["Spanish"]["IdConducta"] = "";
	$fieldLabelscomportamental_jerarquica["Spanish"]["Evidencia"] = "Evidencia";
	$fieldToolTipscomportamental_jerarquica["Spanish"]["Evidencia"] = "";
	$placeHolderscomportamental_jerarquica["Spanish"]["Evidencia"] = "";
	$fieldLabelscomportamental_jerarquica["Spanish"]["Puntaje"] = "Puntaje";
	$fieldToolTipscomportamental_jerarquica["Spanish"]["Puntaje"] = "";
	$placeHolderscomportamental_jerarquica["Spanish"]["Puntaje"] = "";
	$fieldLabelscomportamental_jerarquica["Spanish"]["fchCreacion"] = "Fch Creacion";
	$fieldToolTipscomportamental_jerarquica["Spanish"]["fchCreacion"] = "";
	$placeHolderscomportamental_jerarquica["Spanish"]["fchCreacion"] = "";
	$fieldLabelscomportamental_jerarquica["Spanish"]["CFunEstado"] = "Estado";
	$fieldToolTipscomportamental_jerarquica["Spanish"]["CFunEstado"] = "";
	$placeHolderscomportamental_jerarquica["Spanish"]["CFunEstado"] = "";
	if (count($fieldToolTipscomportamental_jerarquica["Spanish"]))
		$tdatacomportamental_jerarquica[".isUseToolTips"] = true;
}


	$tdatacomportamental_jerarquica[".NCSearch"] = true;



$tdatacomportamental_jerarquica[".shortTableName"] = "comportamental_jerarquica";
$tdatacomportamental_jerarquica[".nSecOptions"] = 0;

$tdatacomportamental_jerarquica[".mainTableOwnerID"] = "";
$tdatacomportamental_jerarquica[".entityType"] = 0;
$tdatacomportamental_jerarquica[".connId"] = "edl2_at_127_0_0_1";


$tdatacomportamental_jerarquica[".strOriginalTableName"] = "comportamental_jerarquica";

	



$tdatacomportamental_jerarquica[".showAddInPopup"] = false;

$tdatacomportamental_jerarquica[".showEditInPopup"] = false;

$tdatacomportamental_jerarquica[".showViewInPopup"] = false;

$tdatacomportamental_jerarquica[".listAjax"] = false;
//	temporary
//$tdatacomportamental_jerarquica[".listAjax"] = false;

	$tdatacomportamental_jerarquica[".audit"] = true;

	$tdatacomportamental_jerarquica[".locking"] = true;


$pages = $tdatacomportamental_jerarquica[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacomportamental_jerarquica[".edit"] = true;
	$tdatacomportamental_jerarquica[".afterEditAction"] = 1;
	$tdatacomportamental_jerarquica[".closePopupAfterEdit"] = 1;
	$tdatacomportamental_jerarquica[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacomportamental_jerarquica[".add"] = true;
$tdatacomportamental_jerarquica[".afterAddAction"] = 1;
$tdatacomportamental_jerarquica[".closePopupAfterAdd"] = 1;
$tdatacomportamental_jerarquica[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacomportamental_jerarquica[".list"] = true;
}



$tdatacomportamental_jerarquica[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacomportamental_jerarquica[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacomportamental_jerarquica[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacomportamental_jerarquica[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacomportamental_jerarquica[".printFriendly"] = true;
}



$tdatacomportamental_jerarquica[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacomportamental_jerarquica[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacomportamental_jerarquica[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacomportamental_jerarquica[".isUseAjaxSuggest"] = true;



																																																																																										

$tdatacomportamental_jerarquica[".ajaxCodeSnippetAdded"] = false;

$tdatacomportamental_jerarquica[".buttonsAdded"] = false;

$tdatacomportamental_jerarquica[".addPageEvents"] = true;

// use timepicker for search panel
$tdatacomportamental_jerarquica[".isUseTimeForSearch"] = false;


$tdatacomportamental_jerarquica[".badgeColor"] = "9acd32";


$tdatacomportamental_jerarquica[".allSearchFields"] = array();
$tdatacomportamental_jerarquica[".filterFields"] = array();
$tdatacomportamental_jerarquica[".requiredSearchFields"] = array();

$tdatacomportamental_jerarquica[".googleLikeFields"] = array();
$tdatacomportamental_jerarquica[".googleLikeFields"][] = "id";
$tdatacomportamental_jerarquica[".googleLikeFields"][] = "idEvaluacion_FK";
$tdatacomportamental_jerarquica[".googleLikeFields"][] = "idComportamental";
$tdatacomportamental_jerarquica[".googleLikeFields"][] = "idCompetencia";
$tdatacomportamental_jerarquica[".googleLikeFields"][] = "IdConducta";
$tdatacomportamental_jerarquica[".googleLikeFields"][] = "Evidencia";
$tdatacomportamental_jerarquica[".googleLikeFields"][] = "Puntaje";
$tdatacomportamental_jerarquica[".googleLikeFields"][] = "fchCreacion";
$tdatacomportamental_jerarquica[".googleLikeFields"][] = "CFunEstado";



$tdatacomportamental_jerarquica[".tableType"] = "list";

$tdatacomportamental_jerarquica[".printerPageOrientation"] = 0;
$tdatacomportamental_jerarquica[".nPrinterPageScale"] = 100;

$tdatacomportamental_jerarquica[".nPrinterSplitRecords"] = 40;

$tdatacomportamental_jerarquica[".geocodingEnabled"] = false;










$tdatacomportamental_jerarquica[".pageSize"] = 20;

$tdatacomportamental_jerarquica[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY idCompetencia";
$tdatacomportamental_jerarquica[".strOrderBy"] = $tstrOrderBy;

$tdatacomportamental_jerarquica[".orderindexes"] = array();
			$tdatacomportamental_jerarquica[".orderindexes"][] = array(4, (1 ? "ASC" : "DESC"), "idCompetencia");


$tdatacomportamental_jerarquica[".sqlHead"] = "SELECT id,  idEvaluacion_FK,  idComportamental,  idCompetencia,  IdConducta,  Evidencia,  Puntaje,  fchCreacion,  CFunEstado";
$tdatacomportamental_jerarquica[".sqlFrom"] = "FROM comportamental_jerarquica";
$tdatacomportamental_jerarquica[".sqlWhereExpr"] = "";
$tdatacomportamental_jerarquica[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacomportamental_jerarquica[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacomportamental_jerarquica[".arrGroupsPerPage"] = $arrGPP;

$tdatacomportamental_jerarquica[".highlightSearchResults"] = true;

$tableKeyscomportamental_jerarquica = array();
$tableKeyscomportamental_jerarquica[] = "id";
$tdatacomportamental_jerarquica[".Keys"] = $tableKeyscomportamental_jerarquica;


$tdatacomportamental_jerarquica[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "comportamental_jerarquica";
	$fdata["Label"] = GetFieldLabel("comportamental_jerarquica","id");
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


	$tdatacomportamental_jerarquica["id"] = $fdata;
		$tdatacomportamental_jerarquica[".searchableFields"][] = "id";
//	idEvaluacion_FK
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "idEvaluacion_FK";
	$fdata["GoodName"] = "idEvaluacion_FK";
	$fdata["ownerTable"] = "comportamental_jerarquica";
	$fdata["Label"] = GetFieldLabel("comportamental_jerarquica","idEvaluacion_FK");
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
	$edata["LookupTable"] = "evaluacion";
			$edata["autoCompleteFieldsOnEdit"] = 1;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"idComportamental", 'lookupF'=>"id_comportamental_fk");
	$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "id";

	

	
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


	$tdatacomportamental_jerarquica["idEvaluacion_FK"] = $fdata;
		$tdatacomportamental_jerarquica[".searchableFields"][] = "idEvaluacion_FK";
//	idComportamental
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "idComportamental";
	$fdata["GoodName"] = "idComportamental";
	$fdata["ownerTable"] = "comportamental_jerarquica";
	$fdata["Label"] = GetFieldLabel("comportamental_jerarquica","idComportamental");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "idComportamental";

		$fdata["sourceSingle"] = "idComportamental";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "idComportamental";

	
	
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
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "nombre";

				$edata["LookupWhereCode"] = true;


	
	$edata["LookupOrderBy"] = "";

	
	
	
	
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "idCompetencia";

	
	
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


	$tdatacomportamental_jerarquica["idComportamental"] = $fdata;
		$tdatacomportamental_jerarquica[".searchableFields"][] = "idComportamental";
//	idCompetencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "idCompetencia";
	$fdata["GoodName"] = "idCompetencia";
	$fdata["ownerTable"] = "comportamental_jerarquica";
	$fdata["Label"] = GetFieldLabel("comportamental_jerarquica","idCompetencia");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "idCompetencia";

		$fdata["sourceSingle"] = "idCompetencia";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "idCompetencia";

	
	
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
	$edata["LookupTable"] = "competencia";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "nombre";

	

	
	$edata["LookupOrderBy"] = "";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "idComportamental", "lookup" => "idComportamental" );

	
	
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "IdConducta";

	
	
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


	$tdatacomportamental_jerarquica["idCompetencia"] = $fdata;
		$tdatacomportamental_jerarquica[".searchableFields"][] = "idCompetencia";
//	IdConducta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "IdConducta";
	$fdata["GoodName"] = "IdConducta";
	$fdata["ownerTable"] = "comportamental_jerarquica";
	$fdata["Label"] = GetFieldLabel("comportamental_jerarquica","IdConducta");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "IdConducta";

		$fdata["sourceSingle"] = "IdConducta";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "IdConducta";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "conducta";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "nombre";

	

	
	$edata["LookupOrderBy"] = "";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "idCompetencia", "lookup" => "idCompetencia" );

	
	

	
	
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


	$tdatacomportamental_jerarquica["IdConducta"] = $fdata;
		$tdatacomportamental_jerarquica[".searchableFields"][] = "IdConducta";
//	Evidencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Evidencia";
	$fdata["GoodName"] = "Evidencia";
	$fdata["ownerTable"] = "comportamental_jerarquica";
	$fdata["Label"] = GetFieldLabel("comportamental_jerarquica","Evidencia");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Evidencia";

		$fdata["sourceSingle"] = "Evidencia";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Evidencia";

	
	
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

	
	
	
				$edata["nRows"] = 70;
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


	$tdatacomportamental_jerarquica["Evidencia"] = $fdata;
		$tdatacomportamental_jerarquica[".searchableFields"][] = "Evidencia";
//	Puntaje
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Puntaje";
	$fdata["GoodName"] = "Puntaje";
	$fdata["ownerTable"] = "comportamental_jerarquica";
	$fdata["Label"] = GetFieldLabel("comportamental_jerarquica","Puntaje");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Puntaje";

		$fdata["sourceSingle"] = "Puntaje";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Puntaje";

	
	
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
	$edata["LookupTable"] = "tparam_puntaje";
		$edata["listPageId"] = "list";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "puntaje_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "puntaje_name";

	

	
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


	$tdatacomportamental_jerarquica["Puntaje"] = $fdata;
		$tdatacomportamental_jerarquica[".searchableFields"][] = "Puntaje";
//	fchCreacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "fchCreacion";
	$fdata["GoodName"] = "fchCreacion";
	$fdata["ownerTable"] = "comportamental_jerarquica";
	$fdata["Label"] = GetFieldLabel("comportamental_jerarquica","fchCreacion");
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


	$tdatacomportamental_jerarquica["fchCreacion"] = $fdata;
		$tdatacomportamental_jerarquica[".searchableFields"][] = "fchCreacion";
//	CFunEstado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "CFunEstado";
	$fdata["GoodName"] = "CFunEstado";
	$fdata["ownerTable"] = "comportamental_jerarquica";
	$fdata["Label"] = GetFieldLabel("comportamental_jerarquica","CFunEstado");
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

	
		
	$edata["LinkField"] = "estadoc_id";
	$edata["LinkFieldType"] = 0;
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


	$tdatacomportamental_jerarquica["CFunEstado"] = $fdata;
		$tdatacomportamental_jerarquica[".searchableFields"][] = "CFunEstado";


$tables_data["comportamental_jerarquica"]=&$tdatacomportamental_jerarquica;
$field_labels["comportamental_jerarquica"] = &$fieldLabelscomportamental_jerarquica;
$fieldToolTips["comportamental_jerarquica"] = &$fieldToolTipscomportamental_jerarquica;
$placeHolders["comportamental_jerarquica"] = &$placeHolderscomportamental_jerarquica;
$page_titles["comportamental_jerarquica"] = &$pageTitlescomportamental_jerarquica;


changeTextControlsToDate( "comportamental_jerarquica" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["comportamental_jerarquica"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["comportamental_jerarquica"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="evaluacion";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="concertacion_po";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "concertacion_po";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["comportamental_jerarquica"][0] = $masterParams;
				$masterTablesData["comportamental_jerarquica"][0]["masterKeys"] = array();
	$masterTablesData["comportamental_jerarquica"][0]["masterKeys"][]="id";
				$masterTablesData["comportamental_jerarquica"][0]["detailKeys"] = array();
	$masterTablesData["comportamental_jerarquica"][0]["detailKeys"][]="idEvaluacion_FK";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_comportamental_jerarquica()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  idEvaluacion_FK,  idComportamental,  idCompetencia,  IdConducta,  Evidencia,  Puntaje,  fchCreacion,  CFunEstado";
$proto0["m_strFrom"] = "FROM comportamental_jerarquica";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY idCompetencia";
	
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
	"m_strTable" => "comportamental_jerarquica",
	"m_srcTableName" => "comportamental_jerarquica"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "comportamental_jerarquica";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "idEvaluacion_FK",
	"m_strTable" => "comportamental_jerarquica",
	"m_srcTableName" => "comportamental_jerarquica"
));

$proto8["m_sql"] = "idEvaluacion_FK";
$proto8["m_srcTableName"] = "comportamental_jerarquica";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "idComportamental",
	"m_strTable" => "comportamental_jerarquica",
	"m_srcTableName" => "comportamental_jerarquica"
));

$proto10["m_sql"] = "idComportamental";
$proto10["m_srcTableName"] = "comportamental_jerarquica";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "idCompetencia",
	"m_strTable" => "comportamental_jerarquica",
	"m_srcTableName" => "comportamental_jerarquica"
));

$proto12["m_sql"] = "idCompetencia";
$proto12["m_srcTableName"] = "comportamental_jerarquica";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "IdConducta",
	"m_strTable" => "comportamental_jerarquica",
	"m_srcTableName" => "comportamental_jerarquica"
));

$proto14["m_sql"] = "IdConducta";
$proto14["m_srcTableName"] = "comportamental_jerarquica";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Evidencia",
	"m_strTable" => "comportamental_jerarquica",
	"m_srcTableName" => "comportamental_jerarquica"
));

$proto16["m_sql"] = "Evidencia";
$proto16["m_srcTableName"] = "comportamental_jerarquica";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Puntaje",
	"m_strTable" => "comportamental_jerarquica",
	"m_srcTableName" => "comportamental_jerarquica"
));

$proto18["m_sql"] = "Puntaje";
$proto18["m_srcTableName"] = "comportamental_jerarquica";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "fchCreacion",
	"m_strTable" => "comportamental_jerarquica",
	"m_srcTableName" => "comportamental_jerarquica"
));

$proto20["m_sql"] = "fchCreacion";
$proto20["m_srcTableName"] = "comportamental_jerarquica";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "CFunEstado",
	"m_strTable" => "comportamental_jerarquica",
	"m_srcTableName" => "comportamental_jerarquica"
));

$proto22["m_sql"] = "CFunEstado";
$proto22["m_srcTableName"] = "comportamental_jerarquica";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "comportamental_jerarquica";
$proto25["m_srcTableName"] = "comportamental_jerarquica";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "id";
$proto25["m_columns"][] = "idEvaluacion_FK";
$proto25["m_columns"][] = "idComportamental";
$proto25["m_columns"][] = "idCompetencia";
$proto25["m_columns"][] = "IdConducta";
$proto25["m_columns"][] = "Evidencia";
$proto25["m_columns"][] = "Puntaje";
$proto25["m_columns"][] = "fchCreacion";
$proto25["m_columns"][] = "CFunEstado";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "comportamental_jerarquica";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "comportamental_jerarquica";
$proto26=array();
$proto26["m_sql"] = "";
$proto26["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto26["m_column"]=$obj;
$proto26["m_contained"] = array();
$proto26["m_strCase"] = "";
$proto26["m_havingmode"] = false;
$proto26["m_inBrackets"] = false;
$proto26["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto26);

$proto24["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto24);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto28=array();
						$obj = new SQLField(array(
	"m_strName" => "idCompetencia",
	"m_strTable" => "comportamental_jerarquica",
	"m_srcTableName" => "comportamental_jerarquica"
));

$proto28["m_column"]=$obj;
$proto28["m_bAsc"] = 1;
$proto28["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto28);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="comportamental_jerarquica";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_comportamental_jerarquica = createSqlQuery_comportamental_jerarquica();


	
				;

									

$tdatacomportamental_jerarquica[".sqlquery"] = $queryData_comportamental_jerarquica;



include_once(getabspath("include/comportamental_jerarquica_events.php"));
$tdatacomportamental_jerarquica[".hasEvents"] = true;

?>