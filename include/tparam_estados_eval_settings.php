<?php
$tdatatparam_estados_eval = array();
$tdatatparam_estados_eval[".searchableFields"] = array();
$tdatatparam_estados_eval[".ShortName"] = "tparam_estados_eval";
$tdatatparam_estados_eval[".OwnerID"] = "";
$tdatatparam_estados_eval[".OriginalTable"] = "tparam_estados_eval";


$tdatatparam_estados_eval[".pagesByType"] = my_json_decode( "{\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" );
$tdatatparam_estados_eval[".originalPagesByType"] = $tdatatparam_estados_eval[".pagesByType"];
$tdatatparam_estados_eval[".pages"] = types2pages( my_json_decode( "{\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" ) );
$tdatatparam_estados_eval[".originalPages"] = $tdatatparam_estados_eval[".pages"];
$tdatatparam_estados_eval[".defaultPages"] = my_json_decode( "{\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"search\":\"search\"}" );
$tdatatparam_estados_eval[".originalDefaultPages"] = $tdatatparam_estados_eval[".defaultPages"];

//	field labels
$fieldLabelstparam_estados_eval = array();
$fieldToolTipstparam_estados_eval = array();
$pageTitlestparam_estados_eval = array();
$placeHolderstparam_estados_eval = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstparam_estados_eval["Spanish"] = array();
	$fieldToolTipstparam_estados_eval["Spanish"] = array();
	$placeHolderstparam_estados_eval["Spanish"] = array();
	$pageTitlestparam_estados_eval["Spanish"] = array();
	$fieldLabelstparam_estados_eval["Spanish"]["estadoeval_id"] = "Estadoeval Id";
	$fieldToolTipstparam_estados_eval["Spanish"]["estadoeval_id"] = "";
	$placeHolderstparam_estados_eval["Spanish"]["estadoeval_id"] = "";
	$fieldLabelstparam_estados_eval["Spanish"]["estadoeval_name"] = "Estadoeval Name";
	$fieldToolTipstparam_estados_eval["Spanish"]["estadoeval_name"] = "";
	$placeHolderstparam_estados_eval["Spanish"]["estadoeval_name"] = "";
	$fieldLabelstparam_estados_eval["Spanish"]["estadoeval_name_eval"] = "Estadoeval Name Eval";
	$fieldToolTipstparam_estados_eval["Spanish"]["estadoeval_name_eval"] = "";
	$placeHolderstparam_estados_eval["Spanish"]["estadoeval_name_eval"] = "";
	$fieldLabelstparam_estados_eval["Spanish"]["estadoeval_ctrl"] = "Estadoeval Ctrl";
	$fieldToolTipstparam_estados_eval["Spanish"]["estadoeval_ctrl"] = "";
	$placeHolderstparam_estados_eval["Spanish"]["estadoeval_ctrl"] = "";
	if (count($fieldToolTipstparam_estados_eval["Spanish"]))
		$tdatatparam_estados_eval[".isUseToolTips"] = true;
}


	$tdatatparam_estados_eval[".NCSearch"] = true;



$tdatatparam_estados_eval[".shortTableName"] = "tparam_estados_eval";
$tdatatparam_estados_eval[".nSecOptions"] = 0;

$tdatatparam_estados_eval[".mainTableOwnerID"] = "";
$tdatatparam_estados_eval[".entityType"] = 0;
$tdatatparam_estados_eval[".connId"] = "edl2_at_127_0_0_1";


$tdatatparam_estados_eval[".strOriginalTableName"] = "tparam_estados_eval";

	



$tdatatparam_estados_eval[".showAddInPopup"] = false;

$tdatatparam_estados_eval[".showEditInPopup"] = false;

$tdatatparam_estados_eval[".showViewInPopup"] = false;

$tdatatparam_estados_eval[".listAjax"] = false;
//	temporary
//$tdatatparam_estados_eval[".listAjax"] = false;

	$tdatatparam_estados_eval[".audit"] = true;

	$tdatatparam_estados_eval[".locking"] = true;


$pages = $tdatatparam_estados_eval[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatparam_estados_eval[".edit"] = true;
	$tdatatparam_estados_eval[".afterEditAction"] = 1;
	$tdatatparam_estados_eval[".closePopupAfterEdit"] = 1;
	$tdatatparam_estados_eval[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatparam_estados_eval[".add"] = true;
$tdatatparam_estados_eval[".afterAddAction"] = 1;
$tdatatparam_estados_eval[".closePopupAfterAdd"] = 1;
$tdatatparam_estados_eval[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatparam_estados_eval[".list"] = true;
}



$tdatatparam_estados_eval[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatparam_estados_eval[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatparam_estados_eval[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatparam_estados_eval[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatparam_estados_eval[".printFriendly"] = true;
}



$tdatatparam_estados_eval[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatparam_estados_eval[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatparam_estados_eval[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatparam_estados_eval[".isUseAjaxSuggest"] = true;



																																													

$tdatatparam_estados_eval[".ajaxCodeSnippetAdded"] = false;

$tdatatparam_estados_eval[".buttonsAdded"] = false;

$tdatatparam_estados_eval[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatparam_estados_eval[".isUseTimeForSearch"] = false;


$tdatatparam_estados_eval[".badgeColor"] = "CFAE83";


$tdatatparam_estados_eval[".allSearchFields"] = array();
$tdatatparam_estados_eval[".filterFields"] = array();
$tdatatparam_estados_eval[".requiredSearchFields"] = array();

$tdatatparam_estados_eval[".googleLikeFields"] = array();
$tdatatparam_estados_eval[".googleLikeFields"][] = "estadoeval_id";
$tdatatparam_estados_eval[".googleLikeFields"][] = "estadoeval_name";
$tdatatparam_estados_eval[".googleLikeFields"][] = "estadoeval_name_eval";
$tdatatparam_estados_eval[".googleLikeFields"][] = "estadoeval_ctrl";



$tdatatparam_estados_eval[".tableType"] = "list";

$tdatatparam_estados_eval[".printerPageOrientation"] = 0;
$tdatatparam_estados_eval[".nPrinterPageScale"] = 100;

$tdatatparam_estados_eval[".nPrinterSplitRecords"] = 40;

$tdatatparam_estados_eval[".geocodingEnabled"] = false;










$tdatatparam_estados_eval[".pageSize"] = 20;

$tdatatparam_estados_eval[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatparam_estados_eval[".strOrderBy"] = $tstrOrderBy;

$tdatatparam_estados_eval[".orderindexes"] = array();


$tdatatparam_estados_eval[".sqlHead"] = "SELECT estadoeval_id,  	estadoeval_name,  	estadoeval_name_eval,  	estadoeval_ctrl";
$tdatatparam_estados_eval[".sqlFrom"] = "FROM tparam_estados_eval";
$tdatatparam_estados_eval[".sqlWhereExpr"] = "";
$tdatatparam_estados_eval[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatparam_estados_eval[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatparam_estados_eval[".arrGroupsPerPage"] = $arrGPP;

$tdatatparam_estados_eval[".highlightSearchResults"] = true;

$tableKeystparam_estados_eval = array();
$tableKeystparam_estados_eval[] = "estadoeval_id";
$tdatatparam_estados_eval[".Keys"] = $tableKeystparam_estados_eval;


$tdatatparam_estados_eval[".hideMobileList"] = array();




//	estadoeval_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "estadoeval_id";
	$fdata["GoodName"] = "estadoeval_id";
	$fdata["ownerTable"] = "tparam_estados_eval";
	$fdata["Label"] = GetFieldLabel("tparam_estados_eval","estadoeval_id");
	$fdata["FieldType"] = 16;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "estadoeval_id";

		$fdata["sourceSingle"] = "estadoeval_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "estadoeval_id";

	
	
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


	$tdatatparam_estados_eval["estadoeval_id"] = $fdata;
		$tdatatparam_estados_eval[".searchableFields"][] = "estadoeval_id";
//	estadoeval_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "estadoeval_name";
	$fdata["GoodName"] = "estadoeval_name";
	$fdata["ownerTable"] = "tparam_estados_eval";
	$fdata["Label"] = GetFieldLabel("tparam_estados_eval","estadoeval_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "estadoeval_name";

		$fdata["sourceSingle"] = "estadoeval_name";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "estadoeval_name";

	
	
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


	$tdatatparam_estados_eval["estadoeval_name"] = $fdata;
		$tdatatparam_estados_eval[".searchableFields"][] = "estadoeval_name";
//	estadoeval_name_eval
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "estadoeval_name_eval";
	$fdata["GoodName"] = "estadoeval_name_eval";
	$fdata["ownerTable"] = "tparam_estados_eval";
	$fdata["Label"] = GetFieldLabel("tparam_estados_eval","estadoeval_name_eval");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "estadoeval_name_eval";

		$fdata["sourceSingle"] = "estadoeval_name_eval";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "estadoeval_name_eval";

	
	
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


	$tdatatparam_estados_eval["estadoeval_name_eval"] = $fdata;
		$tdatatparam_estados_eval[".searchableFields"][] = "estadoeval_name_eval";
//	estadoeval_ctrl
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "estadoeval_ctrl";
	$fdata["GoodName"] = "estadoeval_ctrl";
	$fdata["ownerTable"] = "tparam_estados_eval";
	$fdata["Label"] = GetFieldLabel("tparam_estados_eval","estadoeval_ctrl");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "estadoeval_ctrl";

		$fdata["sourceSingle"] = "estadoeval_ctrl";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "estadoeval_ctrl";

	
	
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


	$tdatatparam_estados_eval["estadoeval_ctrl"] = $fdata;
		$tdatatparam_estados_eval[".searchableFields"][] = "estadoeval_ctrl";


$tables_data["tparam_estados_eval"]=&$tdatatparam_estados_eval;
$field_labels["tparam_estados_eval"] = &$fieldLabelstparam_estados_eval;
$fieldToolTips["tparam_estados_eval"] = &$fieldToolTipstparam_estados_eval;
$placeHolders["tparam_estados_eval"] = &$placeHolderstparam_estados_eval;
$page_titles["tparam_estados_eval"] = &$pageTitlestparam_estados_eval;


changeTextControlsToDate( "tparam_estados_eval" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["tparam_estados_eval"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["tparam_estados_eval"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tparam_estados_eval()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "estadoeval_id,  	estadoeval_name,  	estadoeval_name_eval,  	estadoeval_ctrl";
$proto0["m_strFrom"] = "FROM tparam_estados_eval";
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
	"m_strName" => "estadoeval_id",
	"m_strTable" => "tparam_estados_eval",
	"m_srcTableName" => "tparam_estados_eval"
));

$proto6["m_sql"] = "estadoeval_id";
$proto6["m_srcTableName"] = "tparam_estados_eval";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "estadoeval_name",
	"m_strTable" => "tparam_estados_eval",
	"m_srcTableName" => "tparam_estados_eval"
));

$proto8["m_sql"] = "estadoeval_name";
$proto8["m_srcTableName"] = "tparam_estados_eval";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "estadoeval_name_eval",
	"m_strTable" => "tparam_estados_eval",
	"m_srcTableName" => "tparam_estados_eval"
));

$proto10["m_sql"] = "estadoeval_name_eval";
$proto10["m_srcTableName"] = "tparam_estados_eval";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "estadoeval_ctrl",
	"m_strTable" => "tparam_estados_eval",
	"m_srcTableName" => "tparam_estados_eval"
));

$proto12["m_sql"] = "estadoeval_ctrl";
$proto12["m_srcTableName"] = "tparam_estados_eval";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "tparam_estados_eval";
$proto15["m_srcTableName"] = "tparam_estados_eval";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "estadoeval_id";
$proto15["m_columns"][] = "estadoeval_name";
$proto15["m_columns"][] = "estadoeval_name_eval";
$proto15["m_columns"][] = "estadoeval_ctrl";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "tparam_estados_eval";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "tparam_estados_eval";
$proto16=array();
$proto16["m_sql"] = "";
$proto16["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto16["m_column"]=$obj;
$proto16["m_contained"] = array();
$proto16["m_strCase"] = "";
$proto16["m_havingmode"] = false;
$proto16["m_inBrackets"] = false;
$proto16["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto16);

$proto14["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto14);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="tparam_estados_eval";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tparam_estados_eval = createSqlQuery_tparam_estados_eval();


	
				;

				

$tdatatparam_estados_eval[".sqlquery"] = $queryData_tparam_estados_eval;



$tdatatparam_estados_eval[".hasEvents"] = false;

?>