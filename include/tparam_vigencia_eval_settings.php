<?php
$tdatatparam_vigencia_eval = array();
$tdatatparam_vigencia_eval[".searchableFields"] = array();
$tdatatparam_vigencia_eval[".ShortName"] = "tparam_vigencia_eval";
$tdatatparam_vigencia_eval[".OwnerID"] = "";
$tdatatparam_vigencia_eval[".OriginalTable"] = "tparam_vigencia_eval";


$tdatatparam_vigencia_eval[".pagesByType"] = my_json_decode( "{\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"]}" );
$tdatatparam_vigencia_eval[".originalPagesByType"] = $tdatatparam_vigencia_eval[".pagesByType"];
$tdatatparam_vigencia_eval[".pages"] = types2pages( my_json_decode( "{\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"]}" ) );
$tdatatparam_vigencia_eval[".originalPages"] = $tdatatparam_vigencia_eval[".pages"];
$tdatatparam_vigencia_eval[".defaultPages"] = my_json_decode( "{\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\"}" );
$tdatatparam_vigencia_eval[".originalDefaultPages"] = $tdatatparam_vigencia_eval[".defaultPages"];

//	field labels
$fieldLabelstparam_vigencia_eval = array();
$fieldToolTipstparam_vigencia_eval = array();
$pageTitlestparam_vigencia_eval = array();
$placeHolderstparam_vigencia_eval = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstparam_vigencia_eval["Spanish"] = array();
	$fieldToolTipstparam_vigencia_eval["Spanish"] = array();
	$placeHolderstparam_vigencia_eval["Spanish"] = array();
	$pageTitlestparam_vigencia_eval["Spanish"] = array();
	$fieldLabelstparam_vigencia_eval["Spanish"]["id_evalp"] = "Id Evalp";
	$fieldToolTipstparam_vigencia_eval["Spanish"]["id_evalp"] = "";
	$placeHolderstparam_vigencia_eval["Spanish"]["id_evalp"] = "";
	$fieldLabelstparam_vigencia_eval["Spanish"]["id_evalp_name"] = "Id Evalp Name";
	$fieldToolTipstparam_vigencia_eval["Spanish"]["id_evalp_name"] = "";
	$placeHolderstparam_vigencia_eval["Spanish"]["id_evalp_name"] = "";
	$fieldLabelstparam_vigencia_eval["Spanish"]["vigencia_id"] = "Vigencia Id";
	$fieldToolTipstparam_vigencia_eval["Spanish"]["vigencia_id"] = "";
	$placeHolderstparam_vigencia_eval["Spanish"]["vigencia_id"] = "";
	$fieldLabelstparam_vigencia_eval["Spanish"]["vigencia_ini"] = "Vigencia Ini";
	$fieldToolTipstparam_vigencia_eval["Spanish"]["vigencia_ini"] = "";
	$placeHolderstparam_vigencia_eval["Spanish"]["vigencia_ini"] = "";
	$fieldLabelstparam_vigencia_eval["Spanish"]["vigencia_fin"] = "Vigencia Fin";
	$fieldToolTipstparam_vigencia_eval["Spanish"]["vigencia_fin"] = "";
	$placeHolderstparam_vigencia_eval["Spanish"]["vigencia_fin"] = "";
	$fieldLabelstparam_vigencia_eval["Spanish"]["vigencia_dias"] = "Vigencia Dias";
	$fieldToolTipstparam_vigencia_eval["Spanish"]["vigencia_dias"] = "";
	$placeHolderstparam_vigencia_eval["Spanish"]["vigencia_dias"] = "";
	$fieldLabelstparam_vigencia_eval["Spanish"]["vigencia_st"] = "Vigencia St";
	$fieldToolTipstparam_vigencia_eval["Spanish"]["vigencia_st"] = "";
	$placeHolderstparam_vigencia_eval["Spanish"]["vigencia_st"] = "";
	if (count($fieldToolTipstparam_vigencia_eval["Spanish"]))
		$tdatatparam_vigencia_eval[".isUseToolTips"] = true;
}


	$tdatatparam_vigencia_eval[".NCSearch"] = true;



$tdatatparam_vigencia_eval[".shortTableName"] = "tparam_vigencia_eval";
$tdatatparam_vigencia_eval[".nSecOptions"] = 0;

$tdatatparam_vigencia_eval[".mainTableOwnerID"] = "";
$tdatatparam_vigencia_eval[".entityType"] = 0;
$tdatatparam_vigencia_eval[".connId"] = "edl2_at_127_0_0_1";


$tdatatparam_vigencia_eval[".strOriginalTableName"] = "tparam_vigencia_eval";

	



$tdatatparam_vigencia_eval[".showAddInPopup"] = false;

$tdatatparam_vigencia_eval[".showEditInPopup"] = false;

$tdatatparam_vigencia_eval[".showViewInPopup"] = false;

$tdatatparam_vigencia_eval[".listAjax"] = false;
//	temporary
//$tdatatparam_vigencia_eval[".listAjax"] = false;

	$tdatatparam_vigencia_eval[".audit"] = true;

	$tdatatparam_vigencia_eval[".locking"] = true;


$pages = $tdatatparam_vigencia_eval[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatparam_vigencia_eval[".edit"] = true;
	$tdatatparam_vigencia_eval[".afterEditAction"] = 1;
	$tdatatparam_vigencia_eval[".closePopupAfterEdit"] = 1;
	$tdatatparam_vigencia_eval[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatparam_vigencia_eval[".add"] = true;
$tdatatparam_vigencia_eval[".afterAddAction"] = 1;
$tdatatparam_vigencia_eval[".closePopupAfterAdd"] = 1;
$tdatatparam_vigencia_eval[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatparam_vigencia_eval[".list"] = true;
}



$tdatatparam_vigencia_eval[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatparam_vigencia_eval[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatparam_vigencia_eval[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatparam_vigencia_eval[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatparam_vigencia_eval[".printFriendly"] = true;
}



$tdatatparam_vigencia_eval[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatparam_vigencia_eval[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatparam_vigencia_eval[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatparam_vigencia_eval[".isUseAjaxSuggest"] = true;



																																													

$tdatatparam_vigencia_eval[".ajaxCodeSnippetAdded"] = false;

$tdatatparam_vigencia_eval[".buttonsAdded"] = false;

$tdatatparam_vigencia_eval[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatparam_vigencia_eval[".isUseTimeForSearch"] = false;


$tdatatparam_vigencia_eval[".badgeColor"] = "6493EA";


$tdatatparam_vigencia_eval[".allSearchFields"] = array();
$tdatatparam_vigencia_eval[".filterFields"] = array();
$tdatatparam_vigencia_eval[".requiredSearchFields"] = array();

$tdatatparam_vigencia_eval[".googleLikeFields"] = array();
$tdatatparam_vigencia_eval[".googleLikeFields"][] = "id_evalp";
$tdatatparam_vigencia_eval[".googleLikeFields"][] = "id_evalp_name";
$tdatatparam_vigencia_eval[".googleLikeFields"][] = "vigencia_id";
$tdatatparam_vigencia_eval[".googleLikeFields"][] = "vigencia_ini";
$tdatatparam_vigencia_eval[".googleLikeFields"][] = "vigencia_fin";
$tdatatparam_vigencia_eval[".googleLikeFields"][] = "vigencia_dias";
$tdatatparam_vigencia_eval[".googleLikeFields"][] = "vigencia_st";



$tdatatparam_vigencia_eval[".tableType"] = "list";

$tdatatparam_vigencia_eval[".printerPageOrientation"] = 0;
$tdatatparam_vigencia_eval[".nPrinterPageScale"] = 100;

$tdatatparam_vigencia_eval[".nPrinterSplitRecords"] = 40;

$tdatatparam_vigencia_eval[".geocodingEnabled"] = false;










$tdatatparam_vigencia_eval[".pageSize"] = 20;

$tdatatparam_vigencia_eval[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatparam_vigencia_eval[".strOrderBy"] = $tstrOrderBy;

$tdatatparam_vigencia_eval[".orderindexes"] = array();


$tdatatparam_vigencia_eval[".sqlHead"] = "SELECT id_evalp,  	id_evalp_name,  	vigencia_id,  	vigencia_ini,  	vigencia_fin,  	vigencia_dias,  	vigencia_st";
$tdatatparam_vigencia_eval[".sqlFrom"] = "FROM tparam_vigencia_eval";
$tdatatparam_vigencia_eval[".sqlWhereExpr"] = "";
$tdatatparam_vigencia_eval[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatparam_vigencia_eval[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatparam_vigencia_eval[".arrGroupsPerPage"] = $arrGPP;

$tdatatparam_vigencia_eval[".highlightSearchResults"] = true;

$tableKeystparam_vigencia_eval = array();
$tableKeystparam_vigencia_eval[] = "id_evalp";
$tableKeystparam_vigencia_eval[] = "vigencia_id";
$tdatatparam_vigencia_eval[".Keys"] = $tableKeystparam_vigencia_eval;


$tdatatparam_vigencia_eval[".hideMobileList"] = array();




//	id_evalp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_evalp";
	$fdata["GoodName"] = "id_evalp";
	$fdata["ownerTable"] = "tparam_vigencia_eval";
	$fdata["Label"] = GetFieldLabel("tparam_vigencia_eval","id_evalp");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id_evalp";

		$fdata["sourceSingle"] = "id_evalp";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_evalp";

	
	
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


	$tdatatparam_vigencia_eval["id_evalp"] = $fdata;
		$tdatatparam_vigencia_eval[".searchableFields"][] = "id_evalp";
//	id_evalp_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "id_evalp_name";
	$fdata["GoodName"] = "id_evalp_name";
	$fdata["ownerTable"] = "tparam_vigencia_eval";
	$fdata["Label"] = GetFieldLabel("tparam_vigencia_eval","id_evalp_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "id_evalp_name";

		$fdata["sourceSingle"] = "id_evalp_name";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_evalp_name";

	
	
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


	$tdatatparam_vigencia_eval["id_evalp_name"] = $fdata;
		$tdatatparam_vigencia_eval[".searchableFields"][] = "id_evalp_name";
//	vigencia_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "vigencia_id";
	$fdata["GoodName"] = "vigencia_id";
	$fdata["ownerTable"] = "tparam_vigencia_eval";
	$fdata["Label"] = GetFieldLabel("tparam_vigencia_eval","vigencia_id");
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


	$tdatatparam_vigencia_eval["vigencia_id"] = $fdata;
		$tdatatparam_vigencia_eval[".searchableFields"][] = "vigencia_id";
//	vigencia_ini
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "vigencia_ini";
	$fdata["GoodName"] = "vigencia_ini";
	$fdata["ownerTable"] = "tparam_vigencia_eval";
	$fdata["Label"] = GetFieldLabel("tparam_vigencia_eval","vigencia_ini");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "vigencia_ini";

		$fdata["sourceSingle"] = "vigencia_ini";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "vigencia_ini";

	
	
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


	$tdatatparam_vigencia_eval["vigencia_ini"] = $fdata;
		$tdatatparam_vigencia_eval[".searchableFields"][] = "vigencia_ini";
//	vigencia_fin
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "vigencia_fin";
	$fdata["GoodName"] = "vigencia_fin";
	$fdata["ownerTable"] = "tparam_vigencia_eval";
	$fdata["Label"] = GetFieldLabel("tparam_vigencia_eval","vigencia_fin");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "vigencia_fin";

		$fdata["sourceSingle"] = "vigencia_fin";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "vigencia_fin";

	
	
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


	$tdatatparam_vigencia_eval["vigencia_fin"] = $fdata;
		$tdatatparam_vigencia_eval[".searchableFields"][] = "vigencia_fin";
//	vigencia_dias
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "vigencia_dias";
	$fdata["GoodName"] = "vigencia_dias";
	$fdata["ownerTable"] = "tparam_vigencia_eval";
	$fdata["Label"] = GetFieldLabel("tparam_vigencia_eval","vigencia_dias");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "vigencia_dias";

		$fdata["sourceSingle"] = "vigencia_dias";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "vigencia_dias";

	
	
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


	$tdatatparam_vigencia_eval["vigencia_dias"] = $fdata;
		$tdatatparam_vigencia_eval[".searchableFields"][] = "vigencia_dias";
//	vigencia_st
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "vigencia_st";
	$fdata["GoodName"] = "vigencia_st";
	$fdata["ownerTable"] = "tparam_vigencia_eval";
	$fdata["Label"] = GetFieldLabel("tparam_vigencia_eval","vigencia_st");
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


	$tdatatparam_vigencia_eval["vigencia_st"] = $fdata;
		$tdatatparam_vigencia_eval[".searchableFields"][] = "vigencia_st";


$tables_data["tparam_vigencia_eval"]=&$tdatatparam_vigencia_eval;
$field_labels["tparam_vigencia_eval"] = &$fieldLabelstparam_vigencia_eval;
$fieldToolTips["tparam_vigencia_eval"] = &$fieldToolTipstparam_vigencia_eval;
$placeHolders["tparam_vigencia_eval"] = &$placeHolderstparam_vigencia_eval;
$page_titles["tparam_vigencia_eval"] = &$pageTitlestparam_vigencia_eval;


changeTextControlsToDate( "tparam_vigencia_eval" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["tparam_vigencia_eval"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["tparam_vigencia_eval"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tparam_vigencia_eval()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_evalp,  	id_evalp_name,  	vigencia_id,  	vigencia_ini,  	vigencia_fin,  	vigencia_dias,  	vigencia_st";
$proto0["m_strFrom"] = "FROM tparam_vigencia_eval";
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
	"m_strName" => "id_evalp",
	"m_strTable" => "tparam_vigencia_eval",
	"m_srcTableName" => "tparam_vigencia_eval"
));

$proto6["m_sql"] = "id_evalp";
$proto6["m_srcTableName"] = "tparam_vigencia_eval";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "id_evalp_name",
	"m_strTable" => "tparam_vigencia_eval",
	"m_srcTableName" => "tparam_vigencia_eval"
));

$proto8["m_sql"] = "id_evalp_name";
$proto8["m_srcTableName"] = "tparam_vigencia_eval";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "vigencia_id",
	"m_strTable" => "tparam_vigencia_eval",
	"m_srcTableName" => "tparam_vigencia_eval"
));

$proto10["m_sql"] = "vigencia_id";
$proto10["m_srcTableName"] = "tparam_vigencia_eval";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "vigencia_ini",
	"m_strTable" => "tparam_vigencia_eval",
	"m_srcTableName" => "tparam_vigencia_eval"
));

$proto12["m_sql"] = "vigencia_ini";
$proto12["m_srcTableName"] = "tparam_vigencia_eval";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "vigencia_fin",
	"m_strTable" => "tparam_vigencia_eval",
	"m_srcTableName" => "tparam_vigencia_eval"
));

$proto14["m_sql"] = "vigencia_fin";
$proto14["m_srcTableName"] = "tparam_vigencia_eval";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "vigencia_dias",
	"m_strTable" => "tparam_vigencia_eval",
	"m_srcTableName" => "tparam_vigencia_eval"
));

$proto16["m_sql"] = "vigencia_dias";
$proto16["m_srcTableName"] = "tparam_vigencia_eval";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "vigencia_st",
	"m_strTable" => "tparam_vigencia_eval",
	"m_srcTableName" => "tparam_vigencia_eval"
));

$proto18["m_sql"] = "vigencia_st";
$proto18["m_srcTableName"] = "tparam_vigencia_eval";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "tparam_vigencia_eval";
$proto21["m_srcTableName"] = "tparam_vigencia_eval";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "id_evalp";
$proto21["m_columns"][] = "id_evalp_name";
$proto21["m_columns"][] = "vigencia_id";
$proto21["m_columns"][] = "vigencia_ini";
$proto21["m_columns"][] = "vigencia_fin";
$proto21["m_columns"][] = "vigencia_dias";
$proto21["m_columns"][] = "vigencia_st";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "tparam_vigencia_eval";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "tparam_vigencia_eval";
$proto22=array();
$proto22["m_sql"] = "";
$proto22["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto22["m_column"]=$obj;
$proto22["m_contained"] = array();
$proto22["m_strCase"] = "";
$proto22["m_havingmode"] = false;
$proto22["m_inBrackets"] = false;
$proto22["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto22);

$proto20["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto20);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="tparam_vigencia_eval";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tparam_vigencia_eval = createSqlQuery_tparam_vigencia_eval();


	
				;

							

$tdatatparam_vigencia_eval[".sqlquery"] = $queryData_tparam_vigencia_eval;



$tdatatparam_vigencia_eval[".hasEvents"] = false;

?>