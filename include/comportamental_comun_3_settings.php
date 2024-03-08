<?php
$tdatacomportamental_comun_3 = array();
$tdatacomportamental_comun_3[".searchableFields"] = array();
$tdatacomportamental_comun_3[".ShortName"] = "comportamental_comun_3";
$tdatacomportamental_comun_3[".OwnerID"] = "";
$tdatacomportamental_comun_3[".OriginalTable"] = "comportamental_comun";


$tdatacomportamental_comun_3[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatacomportamental_comun_3[".originalPagesByType"] = $tdatacomportamental_comun_3[".pagesByType"];
$tdatacomportamental_comun_3[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatacomportamental_comun_3[".originalPages"] = $tdatacomportamental_comun_3[".pages"];
$tdatacomportamental_comun_3[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatacomportamental_comun_3[".originalDefaultPages"] = $tdatacomportamental_comun_3[".defaultPages"];

//	field labels
$fieldLabelscomportamental_comun_3 = array();
$fieldToolTipscomportamental_comun_3 = array();
$pageTitlescomportamental_comun_3 = array();
$placeHolderscomportamental_comun_3 = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscomportamental_comun_3["Spanish"] = array();
	$fieldToolTipscomportamental_comun_3["Spanish"] = array();
	$placeHolderscomportamental_comun_3["Spanish"] = array();
	$pageTitlescomportamental_comun_3["Spanish"] = array();
	$fieldLabelscomportamental_comun_3["Spanish"]["id"] = "Id";
	$fieldToolTipscomportamental_comun_3["Spanish"]["id"] = "";
	$placeHolderscomportamental_comun_3["Spanish"]["id"] = "";
	$fieldLabelscomportamental_comun_3["Spanish"]["idEvaluacion_FK"] = "Radicado";
	$fieldToolTipscomportamental_comun_3["Spanish"]["idEvaluacion_FK"] = "";
	$placeHolderscomportamental_comun_3["Spanish"]["idEvaluacion_FK"] = "";
	$fieldLabelscomportamental_comun_3["Spanish"]["idComportamental"] = "Acuerdo";
	$fieldToolTipscomportamental_comun_3["Spanish"]["idComportamental"] = "";
	$placeHolderscomportamental_comun_3["Spanish"]["idComportamental"] = "";
	$fieldLabelscomportamental_comun_3["Spanish"]["idCompetencia"] = "Competencia";
	$fieldToolTipscomportamental_comun_3["Spanish"]["idCompetencia"] = "";
	$placeHolderscomportamental_comun_3["Spanish"]["idCompetencia"] = "";
	$fieldLabelscomportamental_comun_3["Spanish"]["IdConducta"] = "Conducta";
	$fieldToolTipscomportamental_comun_3["Spanish"]["IdConducta"] = "";
	$placeHolderscomportamental_comun_3["Spanish"]["IdConducta"] = "";
	$fieldLabelscomportamental_comun_3["Spanish"]["Evidencia"] = "Evidencia";
	$fieldToolTipscomportamental_comun_3["Spanish"]["Evidencia"] = "";
	$placeHolderscomportamental_comun_3["Spanish"]["Evidencia"] = "";
	$fieldLabelscomportamental_comun_3["Spanish"]["Puntaje"] = "Puntaje acordado";
	$fieldToolTipscomportamental_comun_3["Spanish"]["Puntaje"] = "";
	$placeHolderscomportamental_comun_3["Spanish"]["Puntaje"] = "";
	$fieldLabelscomportamental_comun_3["Spanish"]["fchCreacion"] = "Fch Creacion";
	$fieldToolTipscomportamental_comun_3["Spanish"]["fchCreacion"] = "";
	$placeHolderscomportamental_comun_3["Spanish"]["fchCreacion"] = "";
	$fieldLabelscomportamental_comun_3["Spanish"]["CFunEstado"] = "Estado";
	$fieldToolTipscomportamental_comun_3["Spanish"]["CFunEstado"] = "";
	$placeHolderscomportamental_comun_3["Spanish"]["CFunEstado"] = "";
	if (count($fieldToolTipscomportamental_comun_3["Spanish"]))
		$tdatacomportamental_comun_3[".isUseToolTips"] = true;
}


	$tdatacomportamental_comun_3[".NCSearch"] = true;



$tdatacomportamental_comun_3[".shortTableName"] = "comportamental_comun_3";
$tdatacomportamental_comun_3[".nSecOptions"] = 0;

$tdatacomportamental_comun_3[".mainTableOwnerID"] = "";
$tdatacomportamental_comun_3[".entityType"] = 1;
$tdatacomportamental_comun_3[".connId"] = "edl2_at_127_0_0_1";


$tdatacomportamental_comun_3[".strOriginalTableName"] = "comportamental_comun";

	



$tdatacomportamental_comun_3[".showAddInPopup"] = false;

$tdatacomportamental_comun_3[".showEditInPopup"] = false;

$tdatacomportamental_comun_3[".showViewInPopup"] = false;

$tdatacomportamental_comun_3[".listAjax"] = false;
//	temporary
//$tdatacomportamental_comun_3[".listAjax"] = false;

	$tdatacomportamental_comun_3[".audit"] = true;

	$tdatacomportamental_comun_3[".locking"] = true;


$pages = $tdatacomportamental_comun_3[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacomportamental_comun_3[".edit"] = true;
	$tdatacomportamental_comun_3[".afterEditAction"] = 1;
	$tdatacomportamental_comun_3[".closePopupAfterEdit"] = 1;
	$tdatacomportamental_comun_3[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacomportamental_comun_3[".add"] = true;
$tdatacomportamental_comun_3[".afterAddAction"] = 1;
$tdatacomportamental_comun_3[".closePopupAfterAdd"] = 1;
$tdatacomportamental_comun_3[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacomportamental_comun_3[".list"] = true;
}



$tdatacomportamental_comun_3[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacomportamental_comun_3[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacomportamental_comun_3[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacomportamental_comun_3[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacomportamental_comun_3[".printFriendly"] = true;
}



$tdatacomportamental_comun_3[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacomportamental_comun_3[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacomportamental_comun_3[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacomportamental_comun_3[".isUseAjaxSuggest"] = true;



																																																																																										

$tdatacomportamental_comun_3[".ajaxCodeSnippetAdded"] = false;

$tdatacomportamental_comun_3[".buttonsAdded"] = false;

$tdatacomportamental_comun_3[".addPageEvents"] = true;

// use timepicker for search panel
$tdatacomportamental_comun_3[".isUseTimeForSearch"] = false;


$tdatacomportamental_comun_3[".badgeColor"] = "7b68ee";


$tdatacomportamental_comun_3[".allSearchFields"] = array();
$tdatacomportamental_comun_3[".filterFields"] = array();
$tdatacomportamental_comun_3[".requiredSearchFields"] = array();

$tdatacomportamental_comun_3[".googleLikeFields"] = array();
$tdatacomportamental_comun_3[".googleLikeFields"][] = "id";
$tdatacomportamental_comun_3[".googleLikeFields"][] = "idEvaluacion_FK";
$tdatacomportamental_comun_3[".googleLikeFields"][] = "idComportamental";
$tdatacomportamental_comun_3[".googleLikeFields"][] = "idCompetencia";
$tdatacomportamental_comun_3[".googleLikeFields"][] = "IdConducta";
$tdatacomportamental_comun_3[".googleLikeFields"][] = "Evidencia";
$tdatacomportamental_comun_3[".googleLikeFields"][] = "Puntaje";
$tdatacomportamental_comun_3[".googleLikeFields"][] = "fchCreacion";
$tdatacomportamental_comun_3[".googleLikeFields"][] = "CFunEstado";



$tdatacomportamental_comun_3[".tableType"] = "list";

$tdatacomportamental_comun_3[".printerPageOrientation"] = 0;
$tdatacomportamental_comun_3[".nPrinterPageScale"] = 100;

$tdatacomportamental_comun_3[".nPrinterSplitRecords"] = 40;

$tdatacomportamental_comun_3[".geocodingEnabled"] = false;










$tdatacomportamental_comun_3[".pageSize"] = 20;

$tdatacomportamental_comun_3[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacomportamental_comun_3[".strOrderBy"] = $tstrOrderBy;

$tdatacomportamental_comun_3[".orderindexes"] = array();


$tdatacomportamental_comun_3[".sqlHead"] = "SELECT id,  	idEvaluacion_FK,  	idComportamental,  	idCompetencia,  	IdConducta,  	Evidencia,  	Puntaje,  	fchCreacion,  	CFunEstado";
$tdatacomportamental_comun_3[".sqlFrom"] = "FROM comportamental_comun";
$tdatacomportamental_comun_3[".sqlWhereExpr"] = "";
$tdatacomportamental_comun_3[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacomportamental_comun_3[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacomportamental_comun_3[".arrGroupsPerPage"] = $arrGPP;

$tdatacomportamental_comun_3[".highlightSearchResults"] = true;

$tableKeyscomportamental_comun_3 = array();
$tableKeyscomportamental_comun_3[] = "id";
$tdatacomportamental_comun_3[".Keys"] = $tableKeyscomportamental_comun_3;


$tdatacomportamental_comun_3[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "comportamental_comun";
	$fdata["Label"] = GetFieldLabel("comportamental_comun_3","id");
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


	$tdatacomportamental_comun_3["id"] = $fdata;
		$tdatacomportamental_comun_3[".searchableFields"][] = "id";
//	idEvaluacion_FK
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "idEvaluacion_FK";
	$fdata["GoodName"] = "idEvaluacion_FK";
	$fdata["ownerTable"] = "comportamental_comun";
	$fdata["Label"] = GetFieldLabel("comportamental_comun_3","idEvaluacion_FK");
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


	$tdatacomportamental_comun_3["idEvaluacion_FK"] = $fdata;
		$tdatacomportamental_comun_3[".searchableFields"][] = "idEvaluacion_FK";
//	idComportamental
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "idComportamental";
	$fdata["GoodName"] = "idComportamental";
	$fdata["ownerTable"] = "comportamental_comun";
	$fdata["Label"] = GetFieldLabel("comportamental_comun_3","idComportamental");
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
		$edata["LCType"] = 4;

		$edata["HorizontalLookup"] = true;

		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "nombre";

				$edata["LookupWhereCode"] = true;


	
	$edata["LookupOrderBy"] = "";

	
	
	
	
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "idCompetencia";

	
	
	
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


	$tdatacomportamental_comun_3["idComportamental"] = $fdata;
		$tdatacomportamental_comun_3[".searchableFields"][] = "idComportamental";
//	idCompetencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "idCompetencia";
	$fdata["GoodName"] = "idCompetencia";
	$fdata["ownerTable"] = "comportamental_comun";
	$fdata["Label"] = GetFieldLabel("comportamental_comun_3","idCompetencia");
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


	$tdatacomportamental_comun_3["idCompetencia"] = $fdata;
		$tdatacomportamental_comun_3[".searchableFields"][] = "idCompetencia";
//	IdConducta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "IdConducta";
	$fdata["GoodName"] = "IdConducta";
	$fdata["ownerTable"] = "comportamental_comun";
	$fdata["Label"] = GetFieldLabel("comportamental_comun_3","IdConducta");
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


	$tdatacomportamental_comun_3["IdConducta"] = $fdata;
		$tdatacomportamental_comun_3[".searchableFields"][] = "IdConducta";
//	Evidencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Evidencia";
	$fdata["GoodName"] = "Evidencia";
	$fdata["ownerTable"] = "comportamental_comun";
	$fdata["Label"] = GetFieldLabel("comportamental_comun_3","Evidencia");
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

	
	
	
				$edata["nRows"] = 100;
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


	$tdatacomportamental_comun_3["Evidencia"] = $fdata;
		$tdatacomportamental_comun_3[".searchableFields"][] = "Evidencia";
//	Puntaje
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Puntaje";
	$fdata["GoodName"] = "Puntaje";
	$fdata["ownerTable"] = "comportamental_comun";
	$fdata["Label"] = GetFieldLabel("comportamental_comun_3","Puntaje");
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


	$tdatacomportamental_comun_3["Puntaje"] = $fdata;
		$tdatacomportamental_comun_3[".searchableFields"][] = "Puntaje";
//	fchCreacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "fchCreacion";
	$fdata["GoodName"] = "fchCreacion";
	$fdata["ownerTable"] = "comportamental_comun";
	$fdata["Label"] = GetFieldLabel("comportamental_comun_3","fchCreacion");
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


	$tdatacomportamental_comun_3["fchCreacion"] = $fdata;
		$tdatacomportamental_comun_3[".searchableFields"][] = "fchCreacion";
//	CFunEstado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "CFunEstado";
	$fdata["GoodName"] = "CFunEstado";
	$fdata["ownerTable"] = "comportamental_comun";
	$fdata["Label"] = GetFieldLabel("comportamental_comun_3","CFunEstado");
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


	$tdatacomportamental_comun_3["CFunEstado"] = $fdata;
		$tdatacomportamental_comun_3[".searchableFields"][] = "CFunEstado";


$tables_data["comportamental_comun_3"]=&$tdatacomportamental_comun_3;
$field_labels["comportamental_comun_3"] = &$fieldLabelscomportamental_comun_3;
$fieldToolTips["comportamental_comun_3"] = &$fieldToolTipscomportamental_comun_3;
$placeHolders["comportamental_comun_3"] = &$placeHolderscomportamental_comun_3;
$page_titles["comportamental_comun_3"] = &$pageTitlescomportamental_comun_3;


changeTextControlsToDate( "comportamental_comun_3" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["comportamental_comun_3"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["comportamental_comun_3"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="evaluacion";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="concertacion_po_3";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "concertacion_po_3";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["comportamental_comun_3"][0] = $masterParams;
				$masterTablesData["comportamental_comun_3"][0]["masterKeys"] = array();
	$masterTablesData["comportamental_comun_3"][0]["masterKeys"][]="id";
				$masterTablesData["comportamental_comun_3"][0]["detailKeys"] = array();
	$masterTablesData["comportamental_comun_3"][0]["detailKeys"][]="idEvaluacion_FK";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_comportamental_comun_3()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	idEvaluacion_FK,  	idComportamental,  	idCompetencia,  	IdConducta,  	Evidencia,  	Puntaje,  	fchCreacion,  	CFunEstado";
$proto0["m_strFrom"] = "FROM comportamental_comun";
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
	"m_strTable" => "comportamental_comun",
	"m_srcTableName" => "comportamental_comun_3"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "comportamental_comun_3";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "idEvaluacion_FK",
	"m_strTable" => "comportamental_comun",
	"m_srcTableName" => "comportamental_comun_3"
));

$proto8["m_sql"] = "idEvaluacion_FK";
$proto8["m_srcTableName"] = "comportamental_comun_3";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "idComportamental",
	"m_strTable" => "comportamental_comun",
	"m_srcTableName" => "comportamental_comun_3"
));

$proto10["m_sql"] = "idComportamental";
$proto10["m_srcTableName"] = "comportamental_comun_3";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "idCompetencia",
	"m_strTable" => "comportamental_comun",
	"m_srcTableName" => "comportamental_comun_3"
));

$proto12["m_sql"] = "idCompetencia";
$proto12["m_srcTableName"] = "comportamental_comun_3";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "IdConducta",
	"m_strTable" => "comportamental_comun",
	"m_srcTableName" => "comportamental_comun_3"
));

$proto14["m_sql"] = "IdConducta";
$proto14["m_srcTableName"] = "comportamental_comun_3";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Evidencia",
	"m_strTable" => "comportamental_comun",
	"m_srcTableName" => "comportamental_comun_3"
));

$proto16["m_sql"] = "Evidencia";
$proto16["m_srcTableName"] = "comportamental_comun_3";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Puntaje",
	"m_strTable" => "comportamental_comun",
	"m_srcTableName" => "comportamental_comun_3"
));

$proto18["m_sql"] = "Puntaje";
$proto18["m_srcTableName"] = "comportamental_comun_3";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "fchCreacion",
	"m_strTable" => "comportamental_comun",
	"m_srcTableName" => "comportamental_comun_3"
));

$proto20["m_sql"] = "fchCreacion";
$proto20["m_srcTableName"] = "comportamental_comun_3";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "CFunEstado",
	"m_strTable" => "comportamental_comun",
	"m_srcTableName" => "comportamental_comun_3"
));

$proto22["m_sql"] = "CFunEstado";
$proto22["m_srcTableName"] = "comportamental_comun_3";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "comportamental_comun";
$proto25["m_srcTableName"] = "comportamental_comun_3";
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
$proto24["m_sql"] = "comportamental_comun";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "comportamental_comun_3";
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
$proto0["m_srcTableName"]="comportamental_comun_3";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_comportamental_comun_3 = createSqlQuery_comportamental_comun_3();


	
				;

									

$tdatacomportamental_comun_3[".sqlquery"] = $queryData_comportamental_comun_3;



include_once(getabspath("include/comportamental_comun_3_events.php"));
$tdatacomportamental_comun_3[".hasEvents"] = true;

?>