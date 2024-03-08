<?php
$tdatacomportamental_comun_2 = array();
$tdatacomportamental_comun_2[".searchableFields"] = array();
$tdatacomportamental_comun_2[".ShortName"] = "comportamental_comun_2";
$tdatacomportamental_comun_2[".OwnerID"] = "";
$tdatacomportamental_comun_2[".OriginalTable"] = "comportamental_comun";


$tdatacomportamental_comun_2[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatacomportamental_comun_2[".originalPagesByType"] = $tdatacomportamental_comun_2[".pagesByType"];
$tdatacomportamental_comun_2[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatacomportamental_comun_2[".originalPages"] = $tdatacomportamental_comun_2[".pages"];
$tdatacomportamental_comun_2[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatacomportamental_comun_2[".originalDefaultPages"] = $tdatacomportamental_comun_2[".defaultPages"];

//	field labels
$fieldLabelscomportamental_comun_2 = array();
$fieldToolTipscomportamental_comun_2 = array();
$pageTitlescomportamental_comun_2 = array();
$placeHolderscomportamental_comun_2 = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscomportamental_comun_2["Spanish"] = array();
	$fieldToolTipscomportamental_comun_2["Spanish"] = array();
	$placeHolderscomportamental_comun_2["Spanish"] = array();
	$pageTitlescomportamental_comun_2["Spanish"] = array();
	$fieldLabelscomportamental_comun_2["Spanish"]["id"] = "Id";
	$fieldToolTipscomportamental_comun_2["Spanish"]["id"] = "";
	$placeHolderscomportamental_comun_2["Spanish"]["id"] = "";
	$fieldLabelscomportamental_comun_2["Spanish"]["idEvaluacion_FK"] = "Radicado";
	$fieldToolTipscomportamental_comun_2["Spanish"]["idEvaluacion_FK"] = "";
	$placeHolderscomportamental_comun_2["Spanish"]["idEvaluacion_FK"] = "";
	$fieldLabelscomportamental_comun_2["Spanish"]["idComportamental"] = "Acuerdo";
	$fieldToolTipscomportamental_comun_2["Spanish"]["idComportamental"] = "";
	$placeHolderscomportamental_comun_2["Spanish"]["idComportamental"] = "";
	$fieldLabelscomportamental_comun_2["Spanish"]["idCompetencia"] = "Competencia";
	$fieldToolTipscomportamental_comun_2["Spanish"]["idCompetencia"] = "";
	$placeHolderscomportamental_comun_2["Spanish"]["idCompetencia"] = "";
	$fieldLabelscomportamental_comun_2["Spanish"]["IdConducta"] = "Conducta";
	$fieldToolTipscomportamental_comun_2["Spanish"]["IdConducta"] = "";
	$placeHolderscomportamental_comun_2["Spanish"]["IdConducta"] = "";
	$fieldLabelscomportamental_comun_2["Spanish"]["Evidencia"] = "Evidencia";
	$fieldToolTipscomportamental_comun_2["Spanish"]["Evidencia"] = "";
	$placeHolderscomportamental_comun_2["Spanish"]["Evidencia"] = "";
	$fieldLabelscomportamental_comun_2["Spanish"]["Puntaje"] = "Puntaje acordado";
	$fieldToolTipscomportamental_comun_2["Spanish"]["Puntaje"] = "";
	$placeHolderscomportamental_comun_2["Spanish"]["Puntaje"] = "";
	$fieldLabelscomportamental_comun_2["Spanish"]["fchCreacion"] = "Fch Creacion";
	$fieldToolTipscomportamental_comun_2["Spanish"]["fchCreacion"] = "";
	$placeHolderscomportamental_comun_2["Spanish"]["fchCreacion"] = "";
	$fieldLabelscomportamental_comun_2["Spanish"]["CFunEstado"] = "Estado";
	$fieldToolTipscomportamental_comun_2["Spanish"]["CFunEstado"] = "";
	$placeHolderscomportamental_comun_2["Spanish"]["CFunEstado"] = "";
	if (count($fieldToolTipscomportamental_comun_2["Spanish"]))
		$tdatacomportamental_comun_2[".isUseToolTips"] = true;
}


	$tdatacomportamental_comun_2[".NCSearch"] = true;



$tdatacomportamental_comun_2[".shortTableName"] = "comportamental_comun_2";
$tdatacomportamental_comun_2[".nSecOptions"] = 0;

$tdatacomportamental_comun_2[".mainTableOwnerID"] = "";
$tdatacomportamental_comun_2[".entityType"] = 1;
$tdatacomportamental_comun_2[".connId"] = "edl2_at_127_0_0_1";


$tdatacomportamental_comun_2[".strOriginalTableName"] = "comportamental_comun";

	



$tdatacomportamental_comun_2[".showAddInPopup"] = false;

$tdatacomportamental_comun_2[".showEditInPopup"] = false;

$tdatacomportamental_comun_2[".showViewInPopup"] = false;

$tdatacomportamental_comun_2[".listAjax"] = false;
//	temporary
//$tdatacomportamental_comun_2[".listAjax"] = false;

	$tdatacomportamental_comun_2[".audit"] = true;

	$tdatacomportamental_comun_2[".locking"] = true;


$pages = $tdatacomportamental_comun_2[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacomportamental_comun_2[".edit"] = true;
	$tdatacomportamental_comun_2[".afterEditAction"] = 1;
	$tdatacomportamental_comun_2[".closePopupAfterEdit"] = 1;
	$tdatacomportamental_comun_2[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacomportamental_comun_2[".add"] = true;
$tdatacomportamental_comun_2[".afterAddAction"] = 1;
$tdatacomportamental_comun_2[".closePopupAfterAdd"] = 1;
$tdatacomportamental_comun_2[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacomportamental_comun_2[".list"] = true;
}



$tdatacomportamental_comun_2[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacomportamental_comun_2[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacomportamental_comun_2[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacomportamental_comun_2[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacomportamental_comun_2[".printFriendly"] = true;
}



$tdatacomportamental_comun_2[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacomportamental_comun_2[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacomportamental_comun_2[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacomportamental_comun_2[".isUseAjaxSuggest"] = true;



																																																																																										

$tdatacomportamental_comun_2[".ajaxCodeSnippetAdded"] = false;

$tdatacomportamental_comun_2[".buttonsAdded"] = false;

$tdatacomportamental_comun_2[".addPageEvents"] = true;

// use timepicker for search panel
$tdatacomportamental_comun_2[".isUseTimeForSearch"] = false;


$tdatacomportamental_comun_2[".badgeColor"] = "cfae83";


$tdatacomportamental_comun_2[".allSearchFields"] = array();
$tdatacomportamental_comun_2[".filterFields"] = array();
$tdatacomportamental_comun_2[".requiredSearchFields"] = array();

$tdatacomportamental_comun_2[".googleLikeFields"] = array();
$tdatacomportamental_comun_2[".googleLikeFields"][] = "id";
$tdatacomportamental_comun_2[".googleLikeFields"][] = "idEvaluacion_FK";
$tdatacomportamental_comun_2[".googleLikeFields"][] = "idComportamental";
$tdatacomportamental_comun_2[".googleLikeFields"][] = "idCompetencia";
$tdatacomportamental_comun_2[".googleLikeFields"][] = "IdConducta";
$tdatacomportamental_comun_2[".googleLikeFields"][] = "Evidencia";
$tdatacomportamental_comun_2[".googleLikeFields"][] = "Puntaje";
$tdatacomportamental_comun_2[".googleLikeFields"][] = "fchCreacion";
$tdatacomportamental_comun_2[".googleLikeFields"][] = "CFunEstado";



$tdatacomportamental_comun_2[".tableType"] = "list";

$tdatacomportamental_comun_2[".printerPageOrientation"] = 0;
$tdatacomportamental_comun_2[".nPrinterPageScale"] = 100;

$tdatacomportamental_comun_2[".nPrinterSplitRecords"] = 40;

$tdatacomportamental_comun_2[".geocodingEnabled"] = false;










$tdatacomportamental_comun_2[".pageSize"] = 20;

$tdatacomportamental_comun_2[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacomportamental_comun_2[".strOrderBy"] = $tstrOrderBy;

$tdatacomportamental_comun_2[".orderindexes"] = array();


$tdatacomportamental_comun_2[".sqlHead"] = "SELECT id,  	idEvaluacion_FK,  	idComportamental,  	idCompetencia,  	IdConducta,  	Evidencia,  	Puntaje,  	fchCreacion,  	CFunEstado";
$tdatacomportamental_comun_2[".sqlFrom"] = "FROM comportamental_comun";
$tdatacomportamental_comun_2[".sqlWhereExpr"] = "";
$tdatacomportamental_comun_2[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacomportamental_comun_2[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacomportamental_comun_2[".arrGroupsPerPage"] = $arrGPP;

$tdatacomportamental_comun_2[".highlightSearchResults"] = true;

$tableKeyscomportamental_comun_2 = array();
$tableKeyscomportamental_comun_2[] = "id";
$tdatacomportamental_comun_2[".Keys"] = $tableKeyscomportamental_comun_2;


$tdatacomportamental_comun_2[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "comportamental_comun";
	$fdata["Label"] = GetFieldLabel("comportamental_comun_2","id");
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


	$tdatacomportamental_comun_2["id"] = $fdata;
		$tdatacomportamental_comun_2[".searchableFields"][] = "id";
//	idEvaluacion_FK
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "idEvaluacion_FK";
	$fdata["GoodName"] = "idEvaluacion_FK";
	$fdata["ownerTable"] = "comportamental_comun";
	$fdata["Label"] = GetFieldLabel("comportamental_comun_2","idEvaluacion_FK");
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


	$tdatacomportamental_comun_2["idEvaluacion_FK"] = $fdata;
		$tdatacomportamental_comun_2[".searchableFields"][] = "idEvaluacion_FK";
//	idComportamental
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "idComportamental";
	$fdata["GoodName"] = "idComportamental";
	$fdata["ownerTable"] = "comportamental_comun";
	$fdata["Label"] = GetFieldLabel("comportamental_comun_2","idComportamental");
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


	$tdatacomportamental_comun_2["idComportamental"] = $fdata;
		$tdatacomportamental_comun_2[".searchableFields"][] = "idComportamental";
//	idCompetencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "idCompetencia";
	$fdata["GoodName"] = "idCompetencia";
	$fdata["ownerTable"] = "comportamental_comun";
	$fdata["Label"] = GetFieldLabel("comportamental_comun_2","idCompetencia");
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


	$tdatacomportamental_comun_2["idCompetencia"] = $fdata;
		$tdatacomportamental_comun_2[".searchableFields"][] = "idCompetencia";
//	IdConducta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "IdConducta";
	$fdata["GoodName"] = "IdConducta";
	$fdata["ownerTable"] = "comportamental_comun";
	$fdata["Label"] = GetFieldLabel("comportamental_comun_2","IdConducta");
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


	$tdatacomportamental_comun_2["IdConducta"] = $fdata;
		$tdatacomportamental_comun_2[".searchableFields"][] = "IdConducta";
//	Evidencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Evidencia";
	$fdata["GoodName"] = "Evidencia";
	$fdata["ownerTable"] = "comportamental_comun";
	$fdata["Label"] = GetFieldLabel("comportamental_comun_2","Evidencia");
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


	$tdatacomportamental_comun_2["Evidencia"] = $fdata;
		$tdatacomportamental_comun_2[".searchableFields"][] = "Evidencia";
//	Puntaje
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Puntaje";
	$fdata["GoodName"] = "Puntaje";
	$fdata["ownerTable"] = "comportamental_comun";
	$fdata["Label"] = GetFieldLabel("comportamental_comun_2","Puntaje");
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


	$tdatacomportamental_comun_2["Puntaje"] = $fdata;
		$tdatacomportamental_comun_2[".searchableFields"][] = "Puntaje";
//	fchCreacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "fchCreacion";
	$fdata["GoodName"] = "fchCreacion";
	$fdata["ownerTable"] = "comportamental_comun";
	$fdata["Label"] = GetFieldLabel("comportamental_comun_2","fchCreacion");
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


	$tdatacomportamental_comun_2["fchCreacion"] = $fdata;
		$tdatacomportamental_comun_2[".searchableFields"][] = "fchCreacion";
//	CFunEstado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "CFunEstado";
	$fdata["GoodName"] = "CFunEstado";
	$fdata["ownerTable"] = "comportamental_comun";
	$fdata["Label"] = GetFieldLabel("comportamental_comun_2","CFunEstado");
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


	$tdatacomportamental_comun_2["CFunEstado"] = $fdata;
		$tdatacomportamental_comun_2[".searchableFields"][] = "CFunEstado";


$tables_data["comportamental_comun_2"]=&$tdatacomportamental_comun_2;
$field_labels["comportamental_comun_2"] = &$fieldLabelscomportamental_comun_2;
$fieldToolTips["comportamental_comun_2"] = &$fieldToolTipscomportamental_comun_2;
$placeHolders["comportamental_comun_2"] = &$placeHolderscomportamental_comun_2;
$page_titles["comportamental_comun_2"] = &$pageTitlescomportamental_comun_2;


changeTextControlsToDate( "comportamental_comun_2" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["comportamental_comun_2"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["comportamental_comun_2"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="evaluacion";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="concertacion_po_2";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "concertacion_po_2";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["comportamental_comun_2"][0] = $masterParams;
				$masterTablesData["comportamental_comun_2"][0]["masterKeys"] = array();
	$masterTablesData["comportamental_comun_2"][0]["masterKeys"][]="id";
				$masterTablesData["comportamental_comun_2"][0]["detailKeys"] = array();
	$masterTablesData["comportamental_comun_2"][0]["detailKeys"][]="idEvaluacion_FK";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_comportamental_comun_2()
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
	"m_srcTableName" => "comportamental_comun_2"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "comportamental_comun_2";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "idEvaluacion_FK",
	"m_strTable" => "comportamental_comun",
	"m_srcTableName" => "comportamental_comun_2"
));

$proto8["m_sql"] = "idEvaluacion_FK";
$proto8["m_srcTableName"] = "comportamental_comun_2";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "idComportamental",
	"m_strTable" => "comportamental_comun",
	"m_srcTableName" => "comportamental_comun_2"
));

$proto10["m_sql"] = "idComportamental";
$proto10["m_srcTableName"] = "comportamental_comun_2";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "idCompetencia",
	"m_strTable" => "comportamental_comun",
	"m_srcTableName" => "comportamental_comun_2"
));

$proto12["m_sql"] = "idCompetencia";
$proto12["m_srcTableName"] = "comportamental_comun_2";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "IdConducta",
	"m_strTable" => "comportamental_comun",
	"m_srcTableName" => "comportamental_comun_2"
));

$proto14["m_sql"] = "IdConducta";
$proto14["m_srcTableName"] = "comportamental_comun_2";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Evidencia",
	"m_strTable" => "comportamental_comun",
	"m_srcTableName" => "comportamental_comun_2"
));

$proto16["m_sql"] = "Evidencia";
$proto16["m_srcTableName"] = "comportamental_comun_2";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Puntaje",
	"m_strTable" => "comportamental_comun",
	"m_srcTableName" => "comportamental_comun_2"
));

$proto18["m_sql"] = "Puntaje";
$proto18["m_srcTableName"] = "comportamental_comun_2";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "fchCreacion",
	"m_strTable" => "comportamental_comun",
	"m_srcTableName" => "comportamental_comun_2"
));

$proto20["m_sql"] = "fchCreacion";
$proto20["m_srcTableName"] = "comportamental_comun_2";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "CFunEstado",
	"m_strTable" => "comportamental_comun",
	"m_srcTableName" => "comportamental_comun_2"
));

$proto22["m_sql"] = "CFunEstado";
$proto22["m_srcTableName"] = "comportamental_comun_2";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "comportamental_comun";
$proto25["m_srcTableName"] = "comportamental_comun_2";
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
$proto24["m_srcTableName"] = "comportamental_comun_2";
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
$proto0["m_srcTableName"]="comportamental_comun_2";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_comportamental_comun_2 = createSqlQuery_comportamental_comun_2();


	
				;

									

$tdatacomportamental_comun_2[".sqlquery"] = $queryData_comportamental_comun_2;



include_once(getabspath("include/comportamental_comun_2_events.php"));
$tdatacomportamental_comun_2[".hasEvents"] = true;

?>