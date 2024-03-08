<?php
$tdatatparam_vigencia = array();
$tdatatparam_vigencia[".searchableFields"] = array();
$tdatatparam_vigencia[".ShortName"] = "tparam_vigencia";
$tdatatparam_vigencia[".OwnerID"] = "";
$tdatatparam_vigencia[".OriginalTable"] = "tparam_vigencia";


$tdatatparam_vigencia[".pagesByType"] = my_json_decode( "{\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"]}" );
$tdatatparam_vigencia[".originalPagesByType"] = $tdatatparam_vigencia[".pagesByType"];
$tdatatparam_vigencia[".pages"] = types2pages( my_json_decode( "{\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"]}" ) );
$tdatatparam_vigencia[".originalPages"] = $tdatatparam_vigencia[".pages"];
$tdatatparam_vigencia[".defaultPages"] = my_json_decode( "{\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\"}" );
$tdatatparam_vigencia[".originalDefaultPages"] = $tdatatparam_vigencia[".defaultPages"];

//	field labels
$fieldLabelstparam_vigencia = array();
$fieldToolTipstparam_vigencia = array();
$pageTitlestparam_vigencia = array();
$placeHolderstparam_vigencia = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstparam_vigencia["Spanish"] = array();
	$fieldToolTipstparam_vigencia["Spanish"] = array();
	$placeHolderstparam_vigencia["Spanish"] = array();
	$pageTitlestparam_vigencia["Spanish"] = array();
	$fieldLabelstparam_vigencia["Spanish"]["id"] = "Id";
	$fieldToolTipstparam_vigencia["Spanish"]["id"] = "";
	$placeHolderstparam_vigencia["Spanish"]["id"] = "";
	$fieldLabelstparam_vigencia["Spanish"]["vigencia_id"] = "Vigencia Id";
	$fieldToolTipstparam_vigencia["Spanish"]["vigencia_id"] = "";
	$placeHolderstparam_vigencia["Spanish"]["vigencia_id"] = "";
	$fieldLabelstparam_vigencia["Spanish"]["fecha_lim_concertar"] = "Fecha Lim Concertar";
	$fieldToolTipstparam_vigencia["Spanish"]["fecha_lim_concertar"] = "";
	$placeHolderstparam_vigencia["Spanish"]["fecha_lim_concertar"] = "";
	$fieldLabelstparam_vigencia["Spanish"]["vigencia_ini_ordinaria"] = "Vigencia Ini Ordinaria";
	$fieldToolTipstparam_vigencia["Spanish"]["vigencia_ini_ordinaria"] = "";
	$placeHolderstparam_vigencia["Spanish"]["vigencia_ini_ordinaria"] = "";
	$fieldLabelstparam_vigencia["Spanish"]["vigencia_fin_ordinaria"] = "Vigencia Fin Ordinaria";
	$fieldToolTipstparam_vigencia["Spanish"]["vigencia_fin_ordinaria"] = "";
	$placeHolderstparam_vigencia["Spanish"]["vigencia_fin_ordinaria"] = "";
	$fieldLabelstparam_vigencia["Spanish"]["vigencia_dias_ordinaria"] = "Vigencia Dias Ordinaria";
	$fieldToolTipstparam_vigencia["Spanish"]["vigencia_dias_ordinaria"] = "";
	$placeHolderstparam_vigencia["Spanish"]["vigencia_dias_ordinaria"] = "";
	$fieldLabelstparam_vigencia["Spanish"]["vigencia_ini_parcial_a"] = "Vigencia Ini Parcial A";
	$fieldToolTipstparam_vigencia["Spanish"]["vigencia_ini_parcial_a"] = "";
	$placeHolderstparam_vigencia["Spanish"]["vigencia_ini_parcial_a"] = "";
	$fieldLabelstparam_vigencia["Spanish"]["vigencia_fin_parcial_a"] = "Vigencia Fin Parcial A";
	$fieldToolTipstparam_vigencia["Spanish"]["vigencia_fin_parcial_a"] = "";
	$placeHolderstparam_vigencia["Spanish"]["vigencia_fin_parcial_a"] = "";
	$fieldLabelstparam_vigencia["Spanish"]["vigencia_dias_parcial_a"] = "Vigencia Dias Parcial A";
	$fieldToolTipstparam_vigencia["Spanish"]["vigencia_dias_parcial_a"] = "";
	$placeHolderstparam_vigencia["Spanish"]["vigencia_dias_parcial_a"] = "";
	$fieldLabelstparam_vigencia["Spanish"]["vigencia_ini_parcial_b"] = "Vigencia Ini Parcial B";
	$fieldToolTipstparam_vigencia["Spanish"]["vigencia_ini_parcial_b"] = "";
	$placeHolderstparam_vigencia["Spanish"]["vigencia_ini_parcial_b"] = "";
	$fieldLabelstparam_vigencia["Spanish"]["vigencia_fin_parcial_b"] = "Vigencia Fin Parcial B";
	$fieldToolTipstparam_vigencia["Spanish"]["vigencia_fin_parcial_b"] = "";
	$placeHolderstparam_vigencia["Spanish"]["vigencia_fin_parcial_b"] = "";
	$fieldLabelstparam_vigencia["Spanish"]["vigencia_dias_parcial_b"] = "Vigencia Dias Parcial B";
	$fieldToolTipstparam_vigencia["Spanish"]["vigencia_dias_parcial_b"] = "";
	$placeHolderstparam_vigencia["Spanish"]["vigencia_dias_parcial_b"] = "";
	$fieldLabelstparam_vigencia["Spanish"]["vigencia_periodo"] = "Vigencia Periodo";
	$fieldToolTipstparam_vigencia["Spanish"]["vigencia_periodo"] = "";
	$placeHolderstparam_vigencia["Spanish"]["vigencia_periodo"] = "";
	$fieldLabelstparam_vigencia["Spanish"]["vigencia_st"] = "Vigencia St";
	$fieldToolTipstparam_vigencia["Spanish"]["vigencia_st"] = "";
	$placeHolderstparam_vigencia["Spanish"]["vigencia_st"] = "";
	if (count($fieldToolTipstparam_vigencia["Spanish"]))
		$tdatatparam_vigencia[".isUseToolTips"] = true;
}


	$tdatatparam_vigencia[".NCSearch"] = true;



$tdatatparam_vigencia[".shortTableName"] = "tparam_vigencia";
$tdatatparam_vigencia[".nSecOptions"] = 0;

$tdatatparam_vigencia[".mainTableOwnerID"] = "";
$tdatatparam_vigencia[".entityType"] = 0;
$tdatatparam_vigencia[".connId"] = "edl2_at_127_0_0_1";


$tdatatparam_vigencia[".strOriginalTableName"] = "tparam_vigencia";

	



$tdatatparam_vigencia[".showAddInPopup"] = false;

$tdatatparam_vigencia[".showEditInPopup"] = false;

$tdatatparam_vigencia[".showViewInPopup"] = false;

$tdatatparam_vigencia[".listAjax"] = false;
//	temporary
//$tdatatparam_vigencia[".listAjax"] = false;

	$tdatatparam_vigencia[".audit"] = true;

	$tdatatparam_vigencia[".locking"] = true;


$pages = $tdatatparam_vigencia[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatparam_vigencia[".edit"] = true;
	$tdatatparam_vigencia[".afterEditAction"] = 1;
	$tdatatparam_vigencia[".closePopupAfterEdit"] = 1;
	$tdatatparam_vigencia[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatparam_vigencia[".add"] = true;
$tdatatparam_vigencia[".afterAddAction"] = 1;
$tdatatparam_vigencia[".closePopupAfterAdd"] = 1;
$tdatatparam_vigencia[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatparam_vigencia[".list"] = true;
}



$tdatatparam_vigencia[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatparam_vigencia[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatparam_vigencia[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatparam_vigencia[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatparam_vigencia[".printFriendly"] = true;
}



$tdatatparam_vigencia[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatparam_vigencia[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatparam_vigencia[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatparam_vigencia[".isUseAjaxSuggest"] = true;



																																													

$tdatatparam_vigencia[".ajaxCodeSnippetAdded"] = false;

$tdatatparam_vigencia[".buttonsAdded"] = false;

$tdatatparam_vigencia[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatparam_vigencia[".isUseTimeForSearch"] = false;


$tdatatparam_vigencia[".badgeColor"] = "6493EA";


$tdatatparam_vigencia[".allSearchFields"] = array();
$tdatatparam_vigencia[".filterFields"] = array();
$tdatatparam_vigencia[".requiredSearchFields"] = array();

$tdatatparam_vigencia[".googleLikeFields"] = array();
$tdatatparam_vigencia[".googleLikeFields"][] = "id";
$tdatatparam_vigencia[".googleLikeFields"][] = "vigencia_id";
$tdatatparam_vigencia[".googleLikeFields"][] = "fecha_lim_concertar";
$tdatatparam_vigencia[".googleLikeFields"][] = "vigencia_ini_ordinaria";
$tdatatparam_vigencia[".googleLikeFields"][] = "vigencia_fin_ordinaria";
$tdatatparam_vigencia[".googleLikeFields"][] = "vigencia_dias_ordinaria";
$tdatatparam_vigencia[".googleLikeFields"][] = "vigencia_ini_parcial_a";
$tdatatparam_vigencia[".googleLikeFields"][] = "vigencia_fin_parcial_a";
$tdatatparam_vigencia[".googleLikeFields"][] = "vigencia_dias_parcial_a";
$tdatatparam_vigencia[".googleLikeFields"][] = "vigencia_ini_parcial_b";
$tdatatparam_vigencia[".googleLikeFields"][] = "vigencia_fin_parcial_b";
$tdatatparam_vigencia[".googleLikeFields"][] = "vigencia_dias_parcial_b";
$tdatatparam_vigencia[".googleLikeFields"][] = "vigencia_periodo";
$tdatatparam_vigencia[".googleLikeFields"][] = "vigencia_st";



$tdatatparam_vigencia[".tableType"] = "list";

$tdatatparam_vigencia[".printerPageOrientation"] = 0;
$tdatatparam_vigencia[".nPrinterPageScale"] = 100;

$tdatatparam_vigencia[".nPrinterSplitRecords"] = 40;

$tdatatparam_vigencia[".geocodingEnabled"] = false;










$tdatatparam_vigencia[".pageSize"] = 20;

$tdatatparam_vigencia[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatparam_vigencia[".strOrderBy"] = $tstrOrderBy;

$tdatatparam_vigencia[".orderindexes"] = array();


$tdatatparam_vigencia[".sqlHead"] = "SELECT id,  	vigencia_id,  	fecha_lim_concertar,  	vigencia_ini_ordinaria,  	vigencia_fin_ordinaria,  	vigencia_dias_ordinaria,  	vigencia_ini_parcial_a,  	vigencia_fin_parcial_a,  	vigencia_dias_parcial_a,  	vigencia_ini_parcial_b,  	vigencia_fin_parcial_b,  	vigencia_dias_parcial_b,  	vigencia_periodo,  	vigencia_st";
$tdatatparam_vigencia[".sqlFrom"] = "FROM tparam_vigencia";
$tdatatparam_vigencia[".sqlWhereExpr"] = "";
$tdatatparam_vigencia[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatparam_vigencia[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatparam_vigencia[".arrGroupsPerPage"] = $arrGPP;

$tdatatparam_vigencia[".highlightSearchResults"] = true;

$tableKeystparam_vigencia = array();
$tableKeystparam_vigencia[] = "id";
$tdatatparam_vigencia[".Keys"] = $tableKeystparam_vigencia;


$tdatatparam_vigencia[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "tparam_vigencia";
	$fdata["Label"] = GetFieldLabel("tparam_vigencia","id");
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


	$tdatatparam_vigencia["id"] = $fdata;
		$tdatatparam_vigencia[".searchableFields"][] = "id";
//	vigencia_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "vigencia_id";
	$fdata["GoodName"] = "vigencia_id";
	$fdata["ownerTable"] = "tparam_vigencia";
	$fdata["Label"] = GetFieldLabel("tparam_vigencia","vigencia_id");
	$fdata["FieldType"] = 2;


	
	
			

		$fdata["strField"] = "vigencia_id";

		$fdata["sourceSingle"] = "vigencia_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "vigencia_id";

	
	
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


	$tdatatparam_vigencia["vigencia_id"] = $fdata;
		$tdatatparam_vigencia[".searchableFields"][] = "vigencia_id";
//	fecha_lim_concertar
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "fecha_lim_concertar";
	$fdata["GoodName"] = "fecha_lim_concertar";
	$fdata["ownerTable"] = "tparam_vigencia";
	$fdata["Label"] = GetFieldLabel("tparam_vigencia","fecha_lim_concertar");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "fecha_lim_concertar";

		$fdata["sourceSingle"] = "fecha_lim_concertar";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fecha_lim_concertar";

	
	
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


	$tdatatparam_vigencia["fecha_lim_concertar"] = $fdata;
		$tdatatparam_vigencia[".searchableFields"][] = "fecha_lim_concertar";
//	vigencia_ini_ordinaria
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "vigencia_ini_ordinaria";
	$fdata["GoodName"] = "vigencia_ini_ordinaria";
	$fdata["ownerTable"] = "tparam_vigencia";
	$fdata["Label"] = GetFieldLabel("tparam_vigencia","vigencia_ini_ordinaria");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "vigencia_ini_ordinaria";

		$fdata["sourceSingle"] = "vigencia_ini_ordinaria";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "vigencia_ini_ordinaria";

	
	
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


	$tdatatparam_vigencia["vigencia_ini_ordinaria"] = $fdata;
		$tdatatparam_vigencia[".searchableFields"][] = "vigencia_ini_ordinaria";
//	vigencia_fin_ordinaria
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "vigencia_fin_ordinaria";
	$fdata["GoodName"] = "vigencia_fin_ordinaria";
	$fdata["ownerTable"] = "tparam_vigencia";
	$fdata["Label"] = GetFieldLabel("tparam_vigencia","vigencia_fin_ordinaria");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "vigencia_fin_ordinaria";

		$fdata["sourceSingle"] = "vigencia_fin_ordinaria";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "vigencia_fin_ordinaria";

	
	
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


	$tdatatparam_vigencia["vigencia_fin_ordinaria"] = $fdata;
		$tdatatparam_vigencia[".searchableFields"][] = "vigencia_fin_ordinaria";
//	vigencia_dias_ordinaria
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "vigencia_dias_ordinaria";
	$fdata["GoodName"] = "vigencia_dias_ordinaria";
	$fdata["ownerTable"] = "tparam_vigencia";
	$fdata["Label"] = GetFieldLabel("tparam_vigencia","vigencia_dias_ordinaria");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "vigencia_dias_ordinaria";

		$fdata["sourceSingle"] = "vigencia_dias_ordinaria";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "vigencia_dias_ordinaria";

	
	
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


	$tdatatparam_vigencia["vigencia_dias_ordinaria"] = $fdata;
		$tdatatparam_vigencia[".searchableFields"][] = "vigencia_dias_ordinaria";
//	vigencia_ini_parcial_a
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "vigencia_ini_parcial_a";
	$fdata["GoodName"] = "vigencia_ini_parcial_a";
	$fdata["ownerTable"] = "tparam_vigencia";
	$fdata["Label"] = GetFieldLabel("tparam_vigencia","vigencia_ini_parcial_a");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "vigencia_ini_parcial_a";

		$fdata["sourceSingle"] = "vigencia_ini_parcial_a";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "vigencia_ini_parcial_a";

	
	
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


	$tdatatparam_vigencia["vigencia_ini_parcial_a"] = $fdata;
		$tdatatparam_vigencia[".searchableFields"][] = "vigencia_ini_parcial_a";
//	vigencia_fin_parcial_a
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "vigencia_fin_parcial_a";
	$fdata["GoodName"] = "vigencia_fin_parcial_a";
	$fdata["ownerTable"] = "tparam_vigencia";
	$fdata["Label"] = GetFieldLabel("tparam_vigencia","vigencia_fin_parcial_a");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "vigencia_fin_parcial_a";

		$fdata["sourceSingle"] = "vigencia_fin_parcial_a";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "vigencia_fin_parcial_a";

	
	
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


	$tdatatparam_vigencia["vigencia_fin_parcial_a"] = $fdata;
		$tdatatparam_vigencia[".searchableFields"][] = "vigencia_fin_parcial_a";
//	vigencia_dias_parcial_a
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "vigencia_dias_parcial_a";
	$fdata["GoodName"] = "vigencia_dias_parcial_a";
	$fdata["ownerTable"] = "tparam_vigencia";
	$fdata["Label"] = GetFieldLabel("tparam_vigencia","vigencia_dias_parcial_a");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "vigencia_dias_parcial_a";

		$fdata["sourceSingle"] = "vigencia_dias_parcial_a";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "vigencia_dias_parcial_a";

	
	
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


	$tdatatparam_vigencia["vigencia_dias_parcial_a"] = $fdata;
		$tdatatparam_vigencia[".searchableFields"][] = "vigencia_dias_parcial_a";
//	vigencia_ini_parcial_b
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "vigencia_ini_parcial_b";
	$fdata["GoodName"] = "vigencia_ini_parcial_b";
	$fdata["ownerTable"] = "tparam_vigencia";
	$fdata["Label"] = GetFieldLabel("tparam_vigencia","vigencia_ini_parcial_b");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "vigencia_ini_parcial_b";

		$fdata["sourceSingle"] = "vigencia_ini_parcial_b";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "vigencia_ini_parcial_b";

	
	
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


	$tdatatparam_vigencia["vigencia_ini_parcial_b"] = $fdata;
		$tdatatparam_vigencia[".searchableFields"][] = "vigencia_ini_parcial_b";
//	vigencia_fin_parcial_b
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "vigencia_fin_parcial_b";
	$fdata["GoodName"] = "vigencia_fin_parcial_b";
	$fdata["ownerTable"] = "tparam_vigencia";
	$fdata["Label"] = GetFieldLabel("tparam_vigencia","vigencia_fin_parcial_b");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "vigencia_fin_parcial_b";

		$fdata["sourceSingle"] = "vigencia_fin_parcial_b";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "vigencia_fin_parcial_b";

	
	
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


	$tdatatparam_vigencia["vigencia_fin_parcial_b"] = $fdata;
		$tdatatparam_vigencia[".searchableFields"][] = "vigencia_fin_parcial_b";
//	vigencia_dias_parcial_b
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "vigencia_dias_parcial_b";
	$fdata["GoodName"] = "vigencia_dias_parcial_b";
	$fdata["ownerTable"] = "tparam_vigencia";
	$fdata["Label"] = GetFieldLabel("tparam_vigencia","vigencia_dias_parcial_b");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "vigencia_dias_parcial_b";

		$fdata["sourceSingle"] = "vigencia_dias_parcial_b";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "vigencia_dias_parcial_b";

	
	
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


	$tdatatparam_vigencia["vigencia_dias_parcial_b"] = $fdata;
		$tdatatparam_vigencia[".searchableFields"][] = "vigencia_dias_parcial_b";
//	vigencia_periodo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "vigencia_periodo";
	$fdata["GoodName"] = "vigencia_periodo";
	$fdata["ownerTable"] = "tparam_vigencia";
	$fdata["Label"] = GetFieldLabel("tparam_vigencia","vigencia_periodo");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "vigencia_periodo";

		$fdata["sourceSingle"] = "vigencia_periodo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "vigencia_periodo";

	
	
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


	$tdatatparam_vigencia["vigencia_periodo"] = $fdata;
		$tdatatparam_vigencia[".searchableFields"][] = "vigencia_periodo";
//	vigencia_st
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "vigencia_st";
	$fdata["GoodName"] = "vigencia_st";
	$fdata["ownerTable"] = "tparam_vigencia";
	$fdata["Label"] = GetFieldLabel("tparam_vigencia","vigencia_st");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "vigencia_st";

		$fdata["sourceSingle"] = "vigencia_st";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "vigencia_st";

	
	
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


	$tdatatparam_vigencia["vigencia_st"] = $fdata;
		$tdatatparam_vigencia[".searchableFields"][] = "vigencia_st";


$tables_data["tparam_vigencia"]=&$tdatatparam_vigencia;
$field_labels["tparam_vigencia"] = &$fieldLabelstparam_vigencia;
$fieldToolTips["tparam_vigencia"] = &$fieldToolTipstparam_vigencia;
$placeHolders["tparam_vigencia"] = &$placeHolderstparam_vigencia;
$page_titles["tparam_vigencia"] = &$pageTitlestparam_vigencia;


changeTextControlsToDate( "tparam_vigencia" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["tparam_vigencia"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["tparam_vigencia"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tparam_vigencia()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	vigencia_id,  	fecha_lim_concertar,  	vigencia_ini_ordinaria,  	vigencia_fin_ordinaria,  	vigencia_dias_ordinaria,  	vigencia_ini_parcial_a,  	vigencia_fin_parcial_a,  	vigencia_dias_parcial_a,  	vigencia_ini_parcial_b,  	vigencia_fin_parcial_b,  	vigencia_dias_parcial_b,  	vigencia_periodo,  	vigencia_st";
$proto0["m_strFrom"] = "FROM tparam_vigencia";
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
	"m_strTable" => "tparam_vigencia",
	"m_srcTableName" => "tparam_vigencia"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "tparam_vigencia";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "vigencia_id",
	"m_strTable" => "tparam_vigencia",
	"m_srcTableName" => "tparam_vigencia"
));

$proto8["m_sql"] = "vigencia_id";
$proto8["m_srcTableName"] = "tparam_vigencia";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_lim_concertar",
	"m_strTable" => "tparam_vigencia",
	"m_srcTableName" => "tparam_vigencia"
));

$proto10["m_sql"] = "fecha_lim_concertar";
$proto10["m_srcTableName"] = "tparam_vigencia";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "vigencia_ini_ordinaria",
	"m_strTable" => "tparam_vigencia",
	"m_srcTableName" => "tparam_vigencia"
));

$proto12["m_sql"] = "vigencia_ini_ordinaria";
$proto12["m_srcTableName"] = "tparam_vigencia";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "vigencia_fin_ordinaria",
	"m_strTable" => "tparam_vigencia",
	"m_srcTableName" => "tparam_vigencia"
));

$proto14["m_sql"] = "vigencia_fin_ordinaria";
$proto14["m_srcTableName"] = "tparam_vigencia";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "vigencia_dias_ordinaria",
	"m_strTable" => "tparam_vigencia",
	"m_srcTableName" => "tparam_vigencia"
));

$proto16["m_sql"] = "vigencia_dias_ordinaria";
$proto16["m_srcTableName"] = "tparam_vigencia";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "vigencia_ini_parcial_a",
	"m_strTable" => "tparam_vigencia",
	"m_srcTableName" => "tparam_vigencia"
));

$proto18["m_sql"] = "vigencia_ini_parcial_a";
$proto18["m_srcTableName"] = "tparam_vigencia";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "vigencia_fin_parcial_a",
	"m_strTable" => "tparam_vigencia",
	"m_srcTableName" => "tparam_vigencia"
));

$proto20["m_sql"] = "vigencia_fin_parcial_a";
$proto20["m_srcTableName"] = "tparam_vigencia";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "vigencia_dias_parcial_a",
	"m_strTable" => "tparam_vigencia",
	"m_srcTableName" => "tparam_vigencia"
));

$proto22["m_sql"] = "vigencia_dias_parcial_a";
$proto22["m_srcTableName"] = "tparam_vigencia";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "vigencia_ini_parcial_b",
	"m_strTable" => "tparam_vigencia",
	"m_srcTableName" => "tparam_vigencia"
));

$proto24["m_sql"] = "vigencia_ini_parcial_b";
$proto24["m_srcTableName"] = "tparam_vigencia";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "vigencia_fin_parcial_b",
	"m_strTable" => "tparam_vigencia",
	"m_srcTableName" => "tparam_vigencia"
));

$proto26["m_sql"] = "vigencia_fin_parcial_b";
$proto26["m_srcTableName"] = "tparam_vigencia";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "vigencia_dias_parcial_b",
	"m_strTable" => "tparam_vigencia",
	"m_srcTableName" => "tparam_vigencia"
));

$proto28["m_sql"] = "vigencia_dias_parcial_b";
$proto28["m_srcTableName"] = "tparam_vigencia";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "vigencia_periodo",
	"m_strTable" => "tparam_vigencia",
	"m_srcTableName" => "tparam_vigencia"
));

$proto30["m_sql"] = "vigencia_periodo";
$proto30["m_srcTableName"] = "tparam_vigencia";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "vigencia_st",
	"m_strTable" => "tparam_vigencia",
	"m_srcTableName" => "tparam_vigencia"
));

$proto32["m_sql"] = "vigencia_st";
$proto32["m_srcTableName"] = "tparam_vigencia";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto34=array();
$proto34["m_link"] = "SQLL_MAIN";
			$proto35=array();
$proto35["m_strName"] = "tparam_vigencia";
$proto35["m_srcTableName"] = "tparam_vigencia";
$proto35["m_columns"] = array();
$proto35["m_columns"][] = "id";
$proto35["m_columns"][] = "vigencia_id";
$proto35["m_columns"][] = "fecha_lim_concertar";
$proto35["m_columns"][] = "vigencia_ini_ordinaria";
$proto35["m_columns"][] = "vigencia_fin_ordinaria";
$proto35["m_columns"][] = "vigencia_dias_ordinaria";
$proto35["m_columns"][] = "vigencia_ini_parcial_a";
$proto35["m_columns"][] = "vigencia_fin_parcial_a";
$proto35["m_columns"][] = "vigencia_dias_parcial_a";
$proto35["m_columns"][] = "vigencia_ini_parcial_b";
$proto35["m_columns"][] = "vigencia_fin_parcial_b";
$proto35["m_columns"][] = "vigencia_dias_parcial_b";
$proto35["m_columns"][] = "vigencia_periodo";
$proto35["m_columns"][] = "vigencia_st";
$obj = new SQLTable($proto35);

$proto34["m_table"] = $obj;
$proto34["m_sql"] = "tparam_vigencia";
$proto34["m_alias"] = "";
$proto34["m_srcTableName"] = "tparam_vigencia";
$proto36=array();
$proto36["m_sql"] = "";
$proto36["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto36["m_column"]=$obj;
$proto36["m_contained"] = array();
$proto36["m_strCase"] = "";
$proto36["m_havingmode"] = false;
$proto36["m_inBrackets"] = false;
$proto36["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto36);

$proto34["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto34);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="tparam_vigencia";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tparam_vigencia = createSqlQuery_tparam_vigencia();


	
				;

														

$tdatatparam_vigencia[".sqlquery"] = $queryData_tparam_vigencia;



$tdatatparam_vigencia[".hasEvents"] = false;

?>