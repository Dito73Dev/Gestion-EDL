<?php
$tdatatparam_estados_evaluacion_p = array();
$tdatatparam_estados_evaluacion_p[".searchableFields"] = array();
$tdatatparam_estados_evaluacion_p[".ShortName"] = "tparam_estados_evaluacion_p";
$tdatatparam_estados_evaluacion_p[".OwnerID"] = "";
$tdatatparam_estados_evaluacion_p[".OriginalTable"] = "tparam_estados_evaluacion_p";


$tdatatparam_estados_evaluacion_p[".pagesByType"] = my_json_decode( "{}" );
$tdatatparam_estados_evaluacion_p[".originalPagesByType"] = $tdatatparam_estados_evaluacion_p[".pagesByType"];
$tdatatparam_estados_evaluacion_p[".pages"] = types2pages( my_json_decode( "{}" ) );
$tdatatparam_estados_evaluacion_p[".originalPages"] = $tdatatparam_estados_evaluacion_p[".pages"];
$tdatatparam_estados_evaluacion_p[".defaultPages"] = my_json_decode( "{}" );
$tdatatparam_estados_evaluacion_p[".originalDefaultPages"] = $tdatatparam_estados_evaluacion_p[".defaultPages"];

//	field labels
$fieldLabelstparam_estados_evaluacion_p = array();
$fieldToolTipstparam_estados_evaluacion_p = array();
$pageTitlestparam_estados_evaluacion_p = array();
$placeHolderstparam_estados_evaluacion_p = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstparam_estados_evaluacion_p["Spanish"] = array();
	$fieldToolTipstparam_estados_evaluacion_p["Spanish"] = array();
	$placeHolderstparam_estados_evaluacion_p["Spanish"] = array();
	$pageTitlestparam_estados_evaluacion_p["Spanish"] = array();
	$fieldLabelstparam_estados_evaluacion_p["Spanish"]["estadoeval_id"] = "Estadoeval Id";
	$fieldToolTipstparam_estados_evaluacion_p["Spanish"]["estadoeval_id"] = "";
	$placeHolderstparam_estados_evaluacion_p["Spanish"]["estadoeval_id"] = "";
	$fieldLabelstparam_estados_evaluacion_p["Spanish"]["estadoeval_name"] = "Estadoeval Name";
	$fieldToolTipstparam_estados_evaluacion_p["Spanish"]["estadoeval_name"] = "";
	$placeHolderstparam_estados_evaluacion_p["Spanish"]["estadoeval_name"] = "";
	if (count($fieldToolTipstparam_estados_evaluacion_p["Spanish"]))
		$tdatatparam_estados_evaluacion_p[".isUseToolTips"] = true;
}


	$tdatatparam_estados_evaluacion_p[".NCSearch"] = true;



$tdatatparam_estados_evaluacion_p[".shortTableName"] = "tparam_estados_evaluacion_p";
$tdatatparam_estados_evaluacion_p[".nSecOptions"] = 0;

$tdatatparam_estados_evaluacion_p[".mainTableOwnerID"] = "";
$tdatatparam_estados_evaluacion_p[".entityType"] = 0;
$tdatatparam_estados_evaluacion_p[".connId"] = "edl2_at_127_0_0_1";


$tdatatparam_estados_evaluacion_p[".strOriginalTableName"] = "tparam_estados_evaluacion_p";

	



$tdatatparam_estados_evaluacion_p[".showAddInPopup"] = false;

$tdatatparam_estados_evaluacion_p[".showEditInPopup"] = false;

$tdatatparam_estados_evaluacion_p[".showViewInPopup"] = false;

$tdatatparam_estados_evaluacion_p[".listAjax"] = false;
//	temporary
//$tdatatparam_estados_evaluacion_p[".listAjax"] = false;

	$tdatatparam_estados_evaluacion_p[".audit"] = true;

	$tdatatparam_estados_evaluacion_p[".locking"] = true;


$pages = $tdatatparam_estados_evaluacion_p[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatparam_estados_evaluacion_p[".edit"] = true;
	$tdatatparam_estados_evaluacion_p[".afterEditAction"] = 1;
	$tdatatparam_estados_evaluacion_p[".closePopupAfterEdit"] = 1;
	$tdatatparam_estados_evaluacion_p[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatparam_estados_evaluacion_p[".add"] = true;
$tdatatparam_estados_evaluacion_p[".afterAddAction"] = 1;
$tdatatparam_estados_evaluacion_p[".closePopupAfterAdd"] = 1;
$tdatatparam_estados_evaluacion_p[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatparam_estados_evaluacion_p[".list"] = true;
}



$tdatatparam_estados_evaluacion_p[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatparam_estados_evaluacion_p[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatparam_estados_evaluacion_p[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatparam_estados_evaluacion_p[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatparam_estados_evaluacion_p[".printFriendly"] = true;
}



$tdatatparam_estados_evaluacion_p[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatparam_estados_evaluacion_p[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatparam_estados_evaluacion_p[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatparam_estados_evaluacion_p[".isUseAjaxSuggest"] = true;



																																													

$tdatatparam_estados_evaluacion_p[".ajaxCodeSnippetAdded"] = false;

$tdatatparam_estados_evaluacion_p[".buttonsAdded"] = false;

$tdatatparam_estados_evaluacion_p[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatparam_estados_evaluacion_p[".isUseTimeForSearch"] = false;


$tdatatparam_estados_evaluacion_p[".badgeColor"] = "CD5C5C";


$tdatatparam_estados_evaluacion_p[".allSearchFields"] = array();
$tdatatparam_estados_evaluacion_p[".filterFields"] = array();
$tdatatparam_estados_evaluacion_p[".requiredSearchFields"] = array();

$tdatatparam_estados_evaluacion_p[".googleLikeFields"] = array();
$tdatatparam_estados_evaluacion_p[".googleLikeFields"][] = "estadoeval_id";
$tdatatparam_estados_evaluacion_p[".googleLikeFields"][] = "estadoeval_name";



$tdatatparam_estados_evaluacion_p[".tableType"] = "list";

$tdatatparam_estados_evaluacion_p[".printerPageOrientation"] = 0;
$tdatatparam_estados_evaluacion_p[".nPrinterPageScale"] = 100;

$tdatatparam_estados_evaluacion_p[".nPrinterSplitRecords"] = 40;

$tdatatparam_estados_evaluacion_p[".geocodingEnabled"] = false;










$tdatatparam_estados_evaluacion_p[".pageSize"] = 20;

$tdatatparam_estados_evaluacion_p[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatparam_estados_evaluacion_p[".strOrderBy"] = $tstrOrderBy;

$tdatatparam_estados_evaluacion_p[".orderindexes"] = array();


$tdatatparam_estados_evaluacion_p[".sqlHead"] = "SELECT estadoeval_id,  	estadoeval_name";
$tdatatparam_estados_evaluacion_p[".sqlFrom"] = "FROM tparam_estados_evaluacion_p";
$tdatatparam_estados_evaluacion_p[".sqlWhereExpr"] = "";
$tdatatparam_estados_evaluacion_p[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatparam_estados_evaluacion_p[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatparam_estados_evaluacion_p[".arrGroupsPerPage"] = $arrGPP;

$tdatatparam_estados_evaluacion_p[".highlightSearchResults"] = true;

$tableKeystparam_estados_evaluacion_p = array();
$tableKeystparam_estados_evaluacion_p[] = "estadoeval_id";
$tdatatparam_estados_evaluacion_p[".Keys"] = $tableKeystparam_estados_evaluacion_p;


$tdatatparam_estados_evaluacion_p[".hideMobileList"] = array();




//	estadoeval_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "estadoeval_id";
	$fdata["GoodName"] = "estadoeval_id";
	$fdata["ownerTable"] = "tparam_estados_evaluacion_p";
	$fdata["Label"] = GetFieldLabel("tparam_estados_evaluacion_p","estadoeval_id");
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


	$tdatatparam_estados_evaluacion_p["estadoeval_id"] = $fdata;
		$tdatatparam_estados_evaluacion_p[".searchableFields"][] = "estadoeval_id";
//	estadoeval_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "estadoeval_name";
	$fdata["GoodName"] = "estadoeval_name";
	$fdata["ownerTable"] = "tparam_estados_evaluacion_p";
	$fdata["Label"] = GetFieldLabel("tparam_estados_evaluacion_p","estadoeval_name");
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


	$tdatatparam_estados_evaluacion_p["estadoeval_name"] = $fdata;
		$tdatatparam_estados_evaluacion_p[".searchableFields"][] = "estadoeval_name";


$tables_data["tparam_estados_evaluacion_p"]=&$tdatatparam_estados_evaluacion_p;
$field_labels["tparam_estados_evaluacion_p"] = &$fieldLabelstparam_estados_evaluacion_p;
$fieldToolTips["tparam_estados_evaluacion_p"] = &$fieldToolTipstparam_estados_evaluacion_p;
$placeHolders["tparam_estados_evaluacion_p"] = &$placeHolderstparam_estados_evaluacion_p;
$page_titles["tparam_estados_evaluacion_p"] = &$pageTitlestparam_estados_evaluacion_p;


changeTextControlsToDate( "tparam_estados_evaluacion_p" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["tparam_estados_evaluacion_p"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["tparam_estados_evaluacion_p"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tparam_estados_evaluacion_p()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "estadoeval_id,  	estadoeval_name";
$proto0["m_strFrom"] = "FROM tparam_estados_evaluacion_p";
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
	"m_strTable" => "tparam_estados_evaluacion_p",
	"m_srcTableName" => "tparam_estados_evaluacion_p"
));

$proto6["m_sql"] = "estadoeval_id";
$proto6["m_srcTableName"] = "tparam_estados_evaluacion_p";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "estadoeval_name",
	"m_strTable" => "tparam_estados_evaluacion_p",
	"m_srcTableName" => "tparam_estados_evaluacion_p"
));

$proto8["m_sql"] = "estadoeval_name";
$proto8["m_srcTableName"] = "tparam_estados_evaluacion_p";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "tparam_estados_evaluacion_p";
$proto11["m_srcTableName"] = "tparam_estados_evaluacion_p";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "estadoeval_id";
$proto11["m_columns"][] = "estadoeval_name";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "tparam_estados_evaluacion_p";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "tparam_estados_evaluacion_p";
$proto12=array();
$proto12["m_sql"] = "";
$proto12["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto12["m_column"]=$obj;
$proto12["m_contained"] = array();
$proto12["m_strCase"] = "";
$proto12["m_havingmode"] = false;
$proto12["m_inBrackets"] = false;
$proto12["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto12);

$proto10["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto10);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="tparam_estados_evaluacion_p";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tparam_estados_evaluacion_p = createSqlQuery_tparam_estados_evaluacion_p();


	
				;

		

$tdatatparam_estados_evaluacion_p[".sqlquery"] = $queryData_tparam_estados_evaluacion_p;



$tdatatparam_estados_evaluacion_p[".hasEvents"] = false;

?>