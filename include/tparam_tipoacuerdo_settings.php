<?php
$tdatatparam_tipoacuerdo = array();
$tdatatparam_tipoacuerdo[".searchableFields"] = array();
$tdatatparam_tipoacuerdo[".ShortName"] = "tparam_tipoacuerdo";
$tdatatparam_tipoacuerdo[".OwnerID"] = "";
$tdatatparam_tipoacuerdo[".OriginalTable"] = "tparam_tipoacuerdo";


$tdatatparam_tipoacuerdo[".pagesByType"] = my_json_decode( "{\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"]}" );
$tdatatparam_tipoacuerdo[".originalPagesByType"] = $tdatatparam_tipoacuerdo[".pagesByType"];
$tdatatparam_tipoacuerdo[".pages"] = types2pages( my_json_decode( "{\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"]}" ) );
$tdatatparam_tipoacuerdo[".originalPages"] = $tdatatparam_tipoacuerdo[".pages"];
$tdatatparam_tipoacuerdo[".defaultPages"] = my_json_decode( "{\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\"}" );
$tdatatparam_tipoacuerdo[".originalDefaultPages"] = $tdatatparam_tipoacuerdo[".defaultPages"];

//	field labels
$fieldLabelstparam_tipoacuerdo = array();
$fieldToolTipstparam_tipoacuerdo = array();
$pageTitlestparam_tipoacuerdo = array();
$placeHolderstparam_tipoacuerdo = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstparam_tipoacuerdo["Spanish"] = array();
	$fieldToolTipstparam_tipoacuerdo["Spanish"] = array();
	$placeHolderstparam_tipoacuerdo["Spanish"] = array();
	$pageTitlestparam_tipoacuerdo["Spanish"] = array();
	$fieldLabelstparam_tipoacuerdo["Spanish"]["tipoacuerdo_id"] = "Tipoacuerdo Id";
	$fieldToolTipstparam_tipoacuerdo["Spanish"]["tipoacuerdo_id"] = "";
	$placeHolderstparam_tipoacuerdo["Spanish"]["tipoacuerdo_id"] = "";
	$fieldLabelstparam_tipoacuerdo["Spanish"]["tipoacuerdo_name"] = "Tipoacuerdo Name";
	$fieldToolTipstparam_tipoacuerdo["Spanish"]["tipoacuerdo_name"] = "";
	$placeHolderstparam_tipoacuerdo["Spanish"]["tipoacuerdo_name"] = "";
	$fieldLabelstparam_tipoacuerdo["Spanish"]["tipoacuerdo_st"] = "Tipoacuerdo St";
	$fieldToolTipstparam_tipoacuerdo["Spanish"]["tipoacuerdo_st"] = "";
	$placeHolderstparam_tipoacuerdo["Spanish"]["tipoacuerdo_st"] = "";
	if (count($fieldToolTipstparam_tipoacuerdo["Spanish"]))
		$tdatatparam_tipoacuerdo[".isUseToolTips"] = true;
}


	$tdatatparam_tipoacuerdo[".NCSearch"] = true;



$tdatatparam_tipoacuerdo[".shortTableName"] = "tparam_tipoacuerdo";
$tdatatparam_tipoacuerdo[".nSecOptions"] = 0;

$tdatatparam_tipoacuerdo[".mainTableOwnerID"] = "";
$tdatatparam_tipoacuerdo[".entityType"] = 0;
$tdatatparam_tipoacuerdo[".connId"] = "edl2_at_127_0_0_1";


$tdatatparam_tipoacuerdo[".strOriginalTableName"] = "tparam_tipoacuerdo";

	



$tdatatparam_tipoacuerdo[".showAddInPopup"] = false;

$tdatatparam_tipoacuerdo[".showEditInPopup"] = false;

$tdatatparam_tipoacuerdo[".showViewInPopup"] = false;

$tdatatparam_tipoacuerdo[".listAjax"] = false;
//	temporary
//$tdatatparam_tipoacuerdo[".listAjax"] = false;

	$tdatatparam_tipoacuerdo[".audit"] = true;

	$tdatatparam_tipoacuerdo[".locking"] = true;


$pages = $tdatatparam_tipoacuerdo[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatparam_tipoacuerdo[".edit"] = true;
	$tdatatparam_tipoacuerdo[".afterEditAction"] = 1;
	$tdatatparam_tipoacuerdo[".closePopupAfterEdit"] = 1;
	$tdatatparam_tipoacuerdo[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatparam_tipoacuerdo[".add"] = true;
$tdatatparam_tipoacuerdo[".afterAddAction"] = 1;
$tdatatparam_tipoacuerdo[".closePopupAfterAdd"] = 1;
$tdatatparam_tipoacuerdo[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatparam_tipoacuerdo[".list"] = true;
}



$tdatatparam_tipoacuerdo[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatparam_tipoacuerdo[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatparam_tipoacuerdo[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatparam_tipoacuerdo[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatparam_tipoacuerdo[".printFriendly"] = true;
}



$tdatatparam_tipoacuerdo[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatparam_tipoacuerdo[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatparam_tipoacuerdo[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatparam_tipoacuerdo[".isUseAjaxSuggest"] = true;



																																													

$tdatatparam_tipoacuerdo[".ajaxCodeSnippetAdded"] = false;

$tdatatparam_tipoacuerdo[".buttonsAdded"] = false;

$tdatatparam_tipoacuerdo[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatparam_tipoacuerdo[".isUseTimeForSearch"] = false;


$tdatatparam_tipoacuerdo[".badgeColor"] = "8FBC8B";


$tdatatparam_tipoacuerdo[".allSearchFields"] = array();
$tdatatparam_tipoacuerdo[".filterFields"] = array();
$tdatatparam_tipoacuerdo[".requiredSearchFields"] = array();

$tdatatparam_tipoacuerdo[".googleLikeFields"] = array();
$tdatatparam_tipoacuerdo[".googleLikeFields"][] = "tipoacuerdo_id";
$tdatatparam_tipoacuerdo[".googleLikeFields"][] = "tipoacuerdo_name";
$tdatatparam_tipoacuerdo[".googleLikeFields"][] = "tipoacuerdo_st";



$tdatatparam_tipoacuerdo[".tableType"] = "list";

$tdatatparam_tipoacuerdo[".printerPageOrientation"] = 0;
$tdatatparam_tipoacuerdo[".nPrinterPageScale"] = 100;

$tdatatparam_tipoacuerdo[".nPrinterSplitRecords"] = 40;

$tdatatparam_tipoacuerdo[".geocodingEnabled"] = false;










$tdatatparam_tipoacuerdo[".pageSize"] = 20;

$tdatatparam_tipoacuerdo[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatparam_tipoacuerdo[".strOrderBy"] = $tstrOrderBy;

$tdatatparam_tipoacuerdo[".orderindexes"] = array();


$tdatatparam_tipoacuerdo[".sqlHead"] = "SELECT tipoacuerdo_id,  	tipoacuerdo_name,  	tipoacuerdo_st";
$tdatatparam_tipoacuerdo[".sqlFrom"] = "FROM tparam_tipoacuerdo";
$tdatatparam_tipoacuerdo[".sqlWhereExpr"] = "";
$tdatatparam_tipoacuerdo[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatparam_tipoacuerdo[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatparam_tipoacuerdo[".arrGroupsPerPage"] = $arrGPP;

$tdatatparam_tipoacuerdo[".highlightSearchResults"] = true;

$tableKeystparam_tipoacuerdo = array();
$tableKeystparam_tipoacuerdo[] = "tipoacuerdo_id";
$tdatatparam_tipoacuerdo[".Keys"] = $tableKeystparam_tipoacuerdo;


$tdatatparam_tipoacuerdo[".hideMobileList"] = array();




//	tipoacuerdo_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "tipoacuerdo_id";
	$fdata["GoodName"] = "tipoacuerdo_id";
	$fdata["ownerTable"] = "tparam_tipoacuerdo";
	$fdata["Label"] = GetFieldLabel("tparam_tipoacuerdo","tipoacuerdo_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "tipoacuerdo_id";

		$fdata["sourceSingle"] = "tipoacuerdo_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tipoacuerdo_id";

	
	
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


	$tdatatparam_tipoacuerdo["tipoacuerdo_id"] = $fdata;
		$tdatatparam_tipoacuerdo[".searchableFields"][] = "tipoacuerdo_id";
//	tipoacuerdo_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "tipoacuerdo_name";
	$fdata["GoodName"] = "tipoacuerdo_name";
	$fdata["ownerTable"] = "tparam_tipoacuerdo";
	$fdata["Label"] = GetFieldLabel("tparam_tipoacuerdo","tipoacuerdo_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "tipoacuerdo_name";

		$fdata["sourceSingle"] = "tipoacuerdo_name";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tipoacuerdo_name";

	
	
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
			$edata["EditParams"].= " maxlength=100";

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


	$tdatatparam_tipoacuerdo["tipoacuerdo_name"] = $fdata;
		$tdatatparam_tipoacuerdo[".searchableFields"][] = "tipoacuerdo_name";
//	tipoacuerdo_st
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "tipoacuerdo_st";
	$fdata["GoodName"] = "tipoacuerdo_st";
	$fdata["ownerTable"] = "tparam_tipoacuerdo";
	$fdata["Label"] = GetFieldLabel("tparam_tipoacuerdo","tipoacuerdo_st");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "tipoacuerdo_st";

		$fdata["sourceSingle"] = "tipoacuerdo_st";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tipoacuerdo_st";

	
	
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


	$tdatatparam_tipoacuerdo["tipoacuerdo_st"] = $fdata;
		$tdatatparam_tipoacuerdo[".searchableFields"][] = "tipoacuerdo_st";


$tables_data["tparam_tipoacuerdo"]=&$tdatatparam_tipoacuerdo;
$field_labels["tparam_tipoacuerdo"] = &$fieldLabelstparam_tipoacuerdo;
$fieldToolTips["tparam_tipoacuerdo"] = &$fieldToolTipstparam_tipoacuerdo;
$placeHolders["tparam_tipoacuerdo"] = &$placeHolderstparam_tipoacuerdo;
$page_titles["tparam_tipoacuerdo"] = &$pageTitlestparam_tipoacuerdo;


changeTextControlsToDate( "tparam_tipoacuerdo" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["tparam_tipoacuerdo"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["tparam_tipoacuerdo"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tparam_tipoacuerdo()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "tipoacuerdo_id,  	tipoacuerdo_name,  	tipoacuerdo_st";
$proto0["m_strFrom"] = "FROM tparam_tipoacuerdo";
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
	"m_strName" => "tipoacuerdo_id",
	"m_strTable" => "tparam_tipoacuerdo",
	"m_srcTableName" => "tparam_tipoacuerdo"
));

$proto6["m_sql"] = "tipoacuerdo_id";
$proto6["m_srcTableName"] = "tparam_tipoacuerdo";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "tipoacuerdo_name",
	"m_strTable" => "tparam_tipoacuerdo",
	"m_srcTableName" => "tparam_tipoacuerdo"
));

$proto8["m_sql"] = "tipoacuerdo_name";
$proto8["m_srcTableName"] = "tparam_tipoacuerdo";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "tipoacuerdo_st",
	"m_strTable" => "tparam_tipoacuerdo",
	"m_srcTableName" => "tparam_tipoacuerdo"
));

$proto10["m_sql"] = "tipoacuerdo_st";
$proto10["m_srcTableName"] = "tparam_tipoacuerdo";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "tparam_tipoacuerdo";
$proto13["m_srcTableName"] = "tparam_tipoacuerdo";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "tipoacuerdo_id";
$proto13["m_columns"][] = "tipoacuerdo_name";
$proto13["m_columns"][] = "tipoacuerdo_st";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "tparam_tipoacuerdo";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "tparam_tipoacuerdo";
$proto14=array();
$proto14["m_sql"] = "";
$proto14["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto14["m_column"]=$obj;
$proto14["m_contained"] = array();
$proto14["m_strCase"] = "";
$proto14["m_havingmode"] = false;
$proto14["m_inBrackets"] = false;
$proto14["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto14);

$proto12["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto12);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="tparam_tipoacuerdo";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tparam_tipoacuerdo = createSqlQuery_tparam_tipoacuerdo();


	
				;

			

$tdatatparam_tipoacuerdo[".sqlquery"] = $queryData_tparam_tipoacuerdo;



$tdatatparam_tipoacuerdo[".hasEvents"] = false;

?>