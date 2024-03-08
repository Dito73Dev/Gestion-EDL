<?php
$tdatatparam_periodo = array();
$tdatatparam_periodo[".searchableFields"] = array();
$tdatatparam_periodo[".ShortName"] = "tparam_periodo";
$tdatatparam_periodo[".OwnerID"] = "";
$tdatatparam_periodo[".OriginalTable"] = "tparam_periodo";


$tdatatparam_periodo[".pagesByType"] = my_json_decode( "{\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"]}" );
$tdatatparam_periodo[".originalPagesByType"] = $tdatatparam_periodo[".pagesByType"];
$tdatatparam_periodo[".pages"] = types2pages( my_json_decode( "{\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"]}" ) );
$tdatatparam_periodo[".originalPages"] = $tdatatparam_periodo[".pages"];
$tdatatparam_periodo[".defaultPages"] = my_json_decode( "{\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\"}" );
$tdatatparam_periodo[".originalDefaultPages"] = $tdatatparam_periodo[".defaultPages"];

//	field labels
$fieldLabelstparam_periodo = array();
$fieldToolTipstparam_periodo = array();
$pageTitlestparam_periodo = array();
$placeHolderstparam_periodo = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstparam_periodo["Spanish"] = array();
	$fieldToolTipstparam_periodo["Spanish"] = array();
	$placeHolderstparam_periodo["Spanish"] = array();
	$pageTitlestparam_periodo["Spanish"] = array();
	$fieldLabelstparam_periodo["Spanish"]["periodo_id"] = "Periodo Id";
	$fieldToolTipstparam_periodo["Spanish"]["periodo_id"] = "";
	$placeHolderstparam_periodo["Spanish"]["periodo_id"] = "";
	$fieldLabelstparam_periodo["Spanish"]["periodo_name"] = "Periodo Name";
	$fieldToolTipstparam_periodo["Spanish"]["periodo_name"] = "";
	$placeHolderstparam_periodo["Spanish"]["periodo_name"] = "";
	$fieldLabelstparam_periodo["Spanish"]["periodo_status"] = "Periodo Status";
	$fieldToolTipstparam_periodo["Spanish"]["periodo_status"] = "";
	$placeHolderstparam_periodo["Spanish"]["periodo_status"] = "";
	if (count($fieldToolTipstparam_periodo["Spanish"]))
		$tdatatparam_periodo[".isUseToolTips"] = true;
}


	$tdatatparam_periodo[".NCSearch"] = true;



$tdatatparam_periodo[".shortTableName"] = "tparam_periodo";
$tdatatparam_periodo[".nSecOptions"] = 0;

$tdatatparam_periodo[".mainTableOwnerID"] = "";
$tdatatparam_periodo[".entityType"] = 0;
$tdatatparam_periodo[".connId"] = "edl2_at_127_0_0_1";


$tdatatparam_periodo[".strOriginalTableName"] = "tparam_periodo";

	



$tdatatparam_periodo[".showAddInPopup"] = false;

$tdatatparam_periodo[".showEditInPopup"] = false;

$tdatatparam_periodo[".showViewInPopup"] = false;

$tdatatparam_periodo[".listAjax"] = false;
//	temporary
//$tdatatparam_periodo[".listAjax"] = false;

	$tdatatparam_periodo[".audit"] = true;

	$tdatatparam_periodo[".locking"] = true;


$pages = $tdatatparam_periodo[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatparam_periodo[".edit"] = true;
	$tdatatparam_periodo[".afterEditAction"] = 1;
	$tdatatparam_periodo[".closePopupAfterEdit"] = 1;
	$tdatatparam_periodo[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatparam_periodo[".add"] = true;
$tdatatparam_periodo[".afterAddAction"] = 1;
$tdatatparam_periodo[".closePopupAfterAdd"] = 1;
$tdatatparam_periodo[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatparam_periodo[".list"] = true;
}



$tdatatparam_periodo[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatparam_periodo[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatparam_periodo[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatparam_periodo[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatparam_periodo[".printFriendly"] = true;
}



$tdatatparam_periodo[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatparam_periodo[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatparam_periodo[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatparam_periodo[".isUseAjaxSuggest"] = true;



																																													

$tdatatparam_periodo[".ajaxCodeSnippetAdded"] = false;

$tdatatparam_periodo[".buttonsAdded"] = false;

$tdatatparam_periodo[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatparam_periodo[".isUseTimeForSearch"] = false;


$tdatatparam_periodo[".badgeColor"] = "EDCA00";


$tdatatparam_periodo[".allSearchFields"] = array();
$tdatatparam_periodo[".filterFields"] = array();
$tdatatparam_periodo[".requiredSearchFields"] = array();

$tdatatparam_periodo[".googleLikeFields"] = array();
$tdatatparam_periodo[".googleLikeFields"][] = "periodo_id";
$tdatatparam_periodo[".googleLikeFields"][] = "periodo_name";
$tdatatparam_periodo[".googleLikeFields"][] = "periodo_status";



$tdatatparam_periodo[".tableType"] = "list";

$tdatatparam_periodo[".printerPageOrientation"] = 0;
$tdatatparam_periodo[".nPrinterPageScale"] = 100;

$tdatatparam_periodo[".nPrinterSplitRecords"] = 40;

$tdatatparam_periodo[".geocodingEnabled"] = false;










$tdatatparam_periodo[".pageSize"] = 20;

$tdatatparam_periodo[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatparam_periodo[".strOrderBy"] = $tstrOrderBy;

$tdatatparam_periodo[".orderindexes"] = array();


$tdatatparam_periodo[".sqlHead"] = "SELECT periodo_id,  	periodo_name,  	periodo_status";
$tdatatparam_periodo[".sqlFrom"] = "FROM tparam_periodo";
$tdatatparam_periodo[".sqlWhereExpr"] = "";
$tdatatparam_periodo[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatparam_periodo[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatparam_periodo[".arrGroupsPerPage"] = $arrGPP;

$tdatatparam_periodo[".highlightSearchResults"] = true;

$tableKeystparam_periodo = array();
$tableKeystparam_periodo[] = "periodo_id";
$tdatatparam_periodo[".Keys"] = $tableKeystparam_periodo;


$tdatatparam_periodo[".hideMobileList"] = array();




//	periodo_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "periodo_id";
	$fdata["GoodName"] = "periodo_id";
	$fdata["ownerTable"] = "tparam_periodo";
	$fdata["Label"] = GetFieldLabel("tparam_periodo","periodo_id");
	$fdata["FieldType"] = 16;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "periodo_id";

		$fdata["sourceSingle"] = "periodo_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "periodo_id";

	
	
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


	$tdatatparam_periodo["periodo_id"] = $fdata;
		$tdatatparam_periodo[".searchableFields"][] = "periodo_id";
//	periodo_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "periodo_name";
	$fdata["GoodName"] = "periodo_name";
	$fdata["ownerTable"] = "tparam_periodo";
	$fdata["Label"] = GetFieldLabel("tparam_periodo","periodo_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "periodo_name";

		$fdata["sourceSingle"] = "periodo_name";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "periodo_name";

	
	
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
			$edata["EditParams"].= " maxlength=40";

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


	$tdatatparam_periodo["periodo_name"] = $fdata;
		$tdatatparam_periodo[".searchableFields"][] = "periodo_name";
//	periodo_status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "periodo_status";
	$fdata["GoodName"] = "periodo_status";
	$fdata["ownerTable"] = "tparam_periodo";
	$fdata["Label"] = GetFieldLabel("tparam_periodo","periodo_status");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "periodo_status";

		$fdata["sourceSingle"] = "periodo_status";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "periodo_status";

	
	
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


	$tdatatparam_periodo["periodo_status"] = $fdata;
		$tdatatparam_periodo[".searchableFields"][] = "periodo_status";


$tables_data["tparam_periodo"]=&$tdatatparam_periodo;
$field_labels["tparam_periodo"] = &$fieldLabelstparam_periodo;
$fieldToolTips["tparam_periodo"] = &$fieldToolTipstparam_periodo;
$placeHolders["tparam_periodo"] = &$placeHolderstparam_periodo;
$page_titles["tparam_periodo"] = &$pageTitlestparam_periodo;


changeTextControlsToDate( "tparam_periodo" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["tparam_periodo"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["tparam_periodo"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tparam_periodo()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "periodo_id,  	periodo_name,  	periodo_status";
$proto0["m_strFrom"] = "FROM tparam_periodo";
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
	"m_strName" => "periodo_id",
	"m_strTable" => "tparam_periodo",
	"m_srcTableName" => "tparam_periodo"
));

$proto6["m_sql"] = "periodo_id";
$proto6["m_srcTableName"] = "tparam_periodo";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "periodo_name",
	"m_strTable" => "tparam_periodo",
	"m_srcTableName" => "tparam_periodo"
));

$proto8["m_sql"] = "periodo_name";
$proto8["m_srcTableName"] = "tparam_periodo";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "periodo_status",
	"m_strTable" => "tparam_periodo",
	"m_srcTableName" => "tparam_periodo"
));

$proto10["m_sql"] = "periodo_status";
$proto10["m_srcTableName"] = "tparam_periodo";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "tparam_periodo";
$proto13["m_srcTableName"] = "tparam_periodo";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "periodo_id";
$proto13["m_columns"][] = "periodo_name";
$proto13["m_columns"][] = "periodo_status";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "tparam_periodo";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "tparam_periodo";
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
$proto0["m_srcTableName"]="tparam_periodo";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tparam_periodo = createSqlQuery_tparam_periodo();


	
				;

			

$tdatatparam_periodo[".sqlquery"] = $queryData_tparam_periodo;



$tdatatparam_periodo[".hasEvents"] = false;

?>