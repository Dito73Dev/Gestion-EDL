<?php
$tdatatparam_estados_compromisos = array();
$tdatatparam_estados_compromisos[".searchableFields"] = array();
$tdatatparam_estados_compromisos[".ShortName"] = "tparam_estados_compromisos";
$tdatatparam_estados_compromisos[".OwnerID"] = "";
$tdatatparam_estados_compromisos[".OriginalTable"] = "tparam_estados_compromisos";


$tdatatparam_estados_compromisos[".pagesByType"] = my_json_decode( "{\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"]}" );
$tdatatparam_estados_compromisos[".originalPagesByType"] = $tdatatparam_estados_compromisos[".pagesByType"];
$tdatatparam_estados_compromisos[".pages"] = types2pages( my_json_decode( "{\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"]}" ) );
$tdatatparam_estados_compromisos[".originalPages"] = $tdatatparam_estados_compromisos[".pages"];
$tdatatparam_estados_compromisos[".defaultPages"] = my_json_decode( "{\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\"}" );
$tdatatparam_estados_compromisos[".originalDefaultPages"] = $tdatatparam_estados_compromisos[".defaultPages"];

//	field labels
$fieldLabelstparam_estados_compromisos = array();
$fieldToolTipstparam_estados_compromisos = array();
$pageTitlestparam_estados_compromisos = array();
$placeHolderstparam_estados_compromisos = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstparam_estados_compromisos["Spanish"] = array();
	$fieldToolTipstparam_estados_compromisos["Spanish"] = array();
	$placeHolderstparam_estados_compromisos["Spanish"] = array();
	$pageTitlestparam_estados_compromisos["Spanish"] = array();
	$fieldLabelstparam_estados_compromisos["Spanish"]["estadoc_id"] = "Estadoc Id";
	$fieldToolTipstparam_estados_compromisos["Spanish"]["estadoc_id"] = "";
	$placeHolderstparam_estados_compromisos["Spanish"]["estadoc_id"] = "";
	$fieldLabelstparam_estados_compromisos["Spanish"]["estadoc_name"] = "Estadoc Name";
	$fieldToolTipstparam_estados_compromisos["Spanish"]["estadoc_name"] = "";
	$placeHolderstparam_estados_compromisos["Spanish"]["estadoc_name"] = "";
	if (count($fieldToolTipstparam_estados_compromisos["Spanish"]))
		$tdatatparam_estados_compromisos[".isUseToolTips"] = true;
}


	$tdatatparam_estados_compromisos[".NCSearch"] = true;



$tdatatparam_estados_compromisos[".shortTableName"] = "tparam_estados_compromisos";
$tdatatparam_estados_compromisos[".nSecOptions"] = 0;

$tdatatparam_estados_compromisos[".mainTableOwnerID"] = "";
$tdatatparam_estados_compromisos[".entityType"] = 0;
$tdatatparam_estados_compromisos[".connId"] = "edl2_at_127_0_0_1";


$tdatatparam_estados_compromisos[".strOriginalTableName"] = "tparam_estados_compromisos";

	



$tdatatparam_estados_compromisos[".showAddInPopup"] = false;

$tdatatparam_estados_compromisos[".showEditInPopup"] = false;

$tdatatparam_estados_compromisos[".showViewInPopup"] = false;

$tdatatparam_estados_compromisos[".listAjax"] = false;
//	temporary
//$tdatatparam_estados_compromisos[".listAjax"] = false;

	$tdatatparam_estados_compromisos[".audit"] = true;

	$tdatatparam_estados_compromisos[".locking"] = true;


$pages = $tdatatparam_estados_compromisos[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatparam_estados_compromisos[".edit"] = true;
	$tdatatparam_estados_compromisos[".afterEditAction"] = 1;
	$tdatatparam_estados_compromisos[".closePopupAfterEdit"] = 1;
	$tdatatparam_estados_compromisos[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatparam_estados_compromisos[".add"] = true;
$tdatatparam_estados_compromisos[".afterAddAction"] = 1;
$tdatatparam_estados_compromisos[".closePopupAfterAdd"] = 1;
$tdatatparam_estados_compromisos[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatparam_estados_compromisos[".list"] = true;
}



$tdatatparam_estados_compromisos[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatparam_estados_compromisos[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatparam_estados_compromisos[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatparam_estados_compromisos[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatparam_estados_compromisos[".printFriendly"] = true;
}



$tdatatparam_estados_compromisos[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatparam_estados_compromisos[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatparam_estados_compromisos[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatparam_estados_compromisos[".isUseAjaxSuggest"] = true;



																																													

$tdatatparam_estados_compromisos[".ajaxCodeSnippetAdded"] = false;

$tdatatparam_estados_compromisos[".buttonsAdded"] = false;

$tdatatparam_estados_compromisos[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatparam_estados_compromisos[".isUseTimeForSearch"] = false;


$tdatatparam_estados_compromisos[".badgeColor"] = "E07878";


$tdatatparam_estados_compromisos[".allSearchFields"] = array();
$tdatatparam_estados_compromisos[".filterFields"] = array();
$tdatatparam_estados_compromisos[".requiredSearchFields"] = array();

$tdatatparam_estados_compromisos[".googleLikeFields"] = array();
$tdatatparam_estados_compromisos[".googleLikeFields"][] = "estadoc_id";
$tdatatparam_estados_compromisos[".googleLikeFields"][] = "estadoc_name";



$tdatatparam_estados_compromisos[".tableType"] = "list";

$tdatatparam_estados_compromisos[".printerPageOrientation"] = 0;
$tdatatparam_estados_compromisos[".nPrinterPageScale"] = 100;

$tdatatparam_estados_compromisos[".nPrinterSplitRecords"] = 40;

$tdatatparam_estados_compromisos[".geocodingEnabled"] = false;










$tdatatparam_estados_compromisos[".pageSize"] = 20;

$tdatatparam_estados_compromisos[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatparam_estados_compromisos[".strOrderBy"] = $tstrOrderBy;

$tdatatparam_estados_compromisos[".orderindexes"] = array();


$tdatatparam_estados_compromisos[".sqlHead"] = "SELECT estadoc_id,  	estadoc_name";
$tdatatparam_estados_compromisos[".sqlFrom"] = "FROM tparam_estados_compromisos";
$tdatatparam_estados_compromisos[".sqlWhereExpr"] = "";
$tdatatparam_estados_compromisos[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatparam_estados_compromisos[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatparam_estados_compromisos[".arrGroupsPerPage"] = $arrGPP;

$tdatatparam_estados_compromisos[".highlightSearchResults"] = true;

$tableKeystparam_estados_compromisos = array();
$tableKeystparam_estados_compromisos[] = "estadoc_id";
$tdatatparam_estados_compromisos[".Keys"] = $tableKeystparam_estados_compromisos;


$tdatatparam_estados_compromisos[".hideMobileList"] = array();




//	estadoc_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "estadoc_id";
	$fdata["GoodName"] = "estadoc_id";
	$fdata["ownerTable"] = "tparam_estados_compromisos";
	$fdata["Label"] = GetFieldLabel("tparam_estados_compromisos","estadoc_id");
	$fdata["FieldType"] = 16;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "estadoc_id";

		$fdata["sourceSingle"] = "estadoc_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "estadoc_id";

	
	
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


	$tdatatparam_estados_compromisos["estadoc_id"] = $fdata;
		$tdatatparam_estados_compromisos[".searchableFields"][] = "estadoc_id";
//	estadoc_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "estadoc_name";
	$fdata["GoodName"] = "estadoc_name";
	$fdata["ownerTable"] = "tparam_estados_compromisos";
	$fdata["Label"] = GetFieldLabel("tparam_estados_compromisos","estadoc_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "estadoc_name";

		$fdata["sourceSingle"] = "estadoc_name";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "estadoc_name";

	
	
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


	$tdatatparam_estados_compromisos["estadoc_name"] = $fdata;
		$tdatatparam_estados_compromisos[".searchableFields"][] = "estadoc_name";


$tables_data["tparam_estados_compromisos"]=&$tdatatparam_estados_compromisos;
$field_labels["tparam_estados_compromisos"] = &$fieldLabelstparam_estados_compromisos;
$fieldToolTips["tparam_estados_compromisos"] = &$fieldToolTipstparam_estados_compromisos;
$placeHolders["tparam_estados_compromisos"] = &$placeHolderstparam_estados_compromisos;
$page_titles["tparam_estados_compromisos"] = &$pageTitlestparam_estados_compromisos;


changeTextControlsToDate( "tparam_estados_compromisos" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["tparam_estados_compromisos"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["tparam_estados_compromisos"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tparam_estados_compromisos()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "estadoc_id,  	estadoc_name";
$proto0["m_strFrom"] = "FROM tparam_estados_compromisos";
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
	"m_strName" => "estadoc_id",
	"m_strTable" => "tparam_estados_compromisos",
	"m_srcTableName" => "tparam_estados_compromisos"
));

$proto6["m_sql"] = "estadoc_id";
$proto6["m_srcTableName"] = "tparam_estados_compromisos";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "estadoc_name",
	"m_strTable" => "tparam_estados_compromisos",
	"m_srcTableName" => "tparam_estados_compromisos"
));

$proto8["m_sql"] = "estadoc_name";
$proto8["m_srcTableName"] = "tparam_estados_compromisos";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "tparam_estados_compromisos";
$proto11["m_srcTableName"] = "tparam_estados_compromisos";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "estadoc_id";
$proto11["m_columns"][] = "estadoc_name";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "tparam_estados_compromisos";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "tparam_estados_compromisos";
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
$proto0["m_srcTableName"]="tparam_estados_compromisos";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tparam_estados_compromisos = createSqlQuery_tparam_estados_compromisos();


	
				;

		

$tdatatparam_estados_compromisos[".sqlquery"] = $queryData_tparam_estados_compromisos;



$tdatatparam_estados_compromisos[".hasEvents"] = false;

?>