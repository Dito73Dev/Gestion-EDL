<?php
$tdatatparam_ponderacion = array();
$tdatatparam_ponderacion[".searchableFields"] = array();
$tdatatparam_ponderacion[".ShortName"] = "tparam_ponderacion";
$tdatatparam_ponderacion[".OwnerID"] = "";
$tdatatparam_ponderacion[".OriginalTable"] = "tparam_ponderacion";


$tdatatparam_ponderacion[".pagesByType"] = my_json_decode( "{\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"]}" );
$tdatatparam_ponderacion[".originalPagesByType"] = $tdatatparam_ponderacion[".pagesByType"];
$tdatatparam_ponderacion[".pages"] = types2pages( my_json_decode( "{\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"]}" ) );
$tdatatparam_ponderacion[".originalPages"] = $tdatatparam_ponderacion[".pages"];
$tdatatparam_ponderacion[".defaultPages"] = my_json_decode( "{\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\"}" );
$tdatatparam_ponderacion[".originalDefaultPages"] = $tdatatparam_ponderacion[".defaultPages"];

//	field labels
$fieldLabelstparam_ponderacion = array();
$fieldToolTipstparam_ponderacion = array();
$pageTitlestparam_ponderacion = array();
$placeHolderstparam_ponderacion = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstparam_ponderacion["Spanish"] = array();
	$fieldToolTipstparam_ponderacion["Spanish"] = array();
	$placeHolderstparam_ponderacion["Spanish"] = array();
	$pageTitlestparam_ponderacion["Spanish"] = array();
	$fieldLabelstparam_ponderacion["Spanish"]["pondera_valor"] = "Pondera Valor";
	$fieldToolTipstparam_ponderacion["Spanish"]["pondera_valor"] = "";
	$placeHolderstparam_ponderacion["Spanish"]["pondera_valor"] = "";
	if (count($fieldToolTipstparam_ponderacion["Spanish"]))
		$tdatatparam_ponderacion[".isUseToolTips"] = true;
}


	$tdatatparam_ponderacion[".NCSearch"] = true;



$tdatatparam_ponderacion[".shortTableName"] = "tparam_ponderacion";
$tdatatparam_ponderacion[".nSecOptions"] = 0;

$tdatatparam_ponderacion[".mainTableOwnerID"] = "";
$tdatatparam_ponderacion[".entityType"] = 0;
$tdatatparam_ponderacion[".connId"] = "edl2_at_127_0_0_1";


$tdatatparam_ponderacion[".strOriginalTableName"] = "tparam_ponderacion";

	



$tdatatparam_ponderacion[".showAddInPopup"] = false;

$tdatatparam_ponderacion[".showEditInPopup"] = false;

$tdatatparam_ponderacion[".showViewInPopup"] = false;

$tdatatparam_ponderacion[".listAjax"] = false;
//	temporary
//$tdatatparam_ponderacion[".listAjax"] = false;

	$tdatatparam_ponderacion[".audit"] = true;

	$tdatatparam_ponderacion[".locking"] = true;


$pages = $tdatatparam_ponderacion[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatparam_ponderacion[".edit"] = true;
	$tdatatparam_ponderacion[".afterEditAction"] = 1;
	$tdatatparam_ponderacion[".closePopupAfterEdit"] = 1;
	$tdatatparam_ponderacion[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatparam_ponderacion[".add"] = true;
$tdatatparam_ponderacion[".afterAddAction"] = 1;
$tdatatparam_ponderacion[".closePopupAfterAdd"] = 1;
$tdatatparam_ponderacion[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatparam_ponderacion[".list"] = true;
}



$tdatatparam_ponderacion[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatparam_ponderacion[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatparam_ponderacion[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatparam_ponderacion[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatparam_ponderacion[".printFriendly"] = true;
}



$tdatatparam_ponderacion[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatparam_ponderacion[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatparam_ponderacion[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatparam_ponderacion[".isUseAjaxSuggest"] = true;



																																													

$tdatatparam_ponderacion[".ajaxCodeSnippetAdded"] = false;

$tdatatparam_ponderacion[".buttonsAdded"] = false;

$tdatatparam_ponderacion[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatparam_ponderacion[".isUseTimeForSearch"] = false;


$tdatatparam_ponderacion[".badgeColor"] = "00C2C5";


$tdatatparam_ponderacion[".allSearchFields"] = array();
$tdatatparam_ponderacion[".filterFields"] = array();
$tdatatparam_ponderacion[".requiredSearchFields"] = array();

$tdatatparam_ponderacion[".googleLikeFields"] = array();
$tdatatparam_ponderacion[".googleLikeFields"][] = "pondera_valor";



$tdatatparam_ponderacion[".tableType"] = "list";

$tdatatparam_ponderacion[".printerPageOrientation"] = 0;
$tdatatparam_ponderacion[".nPrinterPageScale"] = 100;

$tdatatparam_ponderacion[".nPrinterSplitRecords"] = 40;

$tdatatparam_ponderacion[".geocodingEnabled"] = false;










$tdatatparam_ponderacion[".pageSize"] = 20;

$tdatatparam_ponderacion[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatparam_ponderacion[".strOrderBy"] = $tstrOrderBy;

$tdatatparam_ponderacion[".orderindexes"] = array();


$tdatatparam_ponderacion[".sqlHead"] = "SELECT pondera_valor";
$tdatatparam_ponderacion[".sqlFrom"] = "FROM tparam_ponderacion";
$tdatatparam_ponderacion[".sqlWhereExpr"] = "";
$tdatatparam_ponderacion[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatparam_ponderacion[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatparam_ponderacion[".arrGroupsPerPage"] = $arrGPP;

$tdatatparam_ponderacion[".highlightSearchResults"] = true;

$tableKeystparam_ponderacion = array();
$tableKeystparam_ponderacion[] = "pondera_valor";
$tdatatparam_ponderacion[".Keys"] = $tableKeystparam_ponderacion;


$tdatatparam_ponderacion[".hideMobileList"] = array();




//	pondera_valor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "pondera_valor";
	$fdata["GoodName"] = "pondera_valor";
	$fdata["ownerTable"] = "tparam_ponderacion";
	$fdata["Label"] = GetFieldLabel("tparam_ponderacion","pondera_valor");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "pondera_valor";

		$fdata["sourceSingle"] = "pondera_valor";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pondera_valor";

	
	
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


	$tdatatparam_ponderacion["pondera_valor"] = $fdata;
		$tdatatparam_ponderacion[".searchableFields"][] = "pondera_valor";


$tables_data["tparam_ponderacion"]=&$tdatatparam_ponderacion;
$field_labels["tparam_ponderacion"] = &$fieldLabelstparam_ponderacion;
$fieldToolTips["tparam_ponderacion"] = &$fieldToolTipstparam_ponderacion;
$placeHolders["tparam_ponderacion"] = &$placeHolderstparam_ponderacion;
$page_titles["tparam_ponderacion"] = &$pageTitlestparam_ponderacion;


changeTextControlsToDate( "tparam_ponderacion" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["tparam_ponderacion"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["tparam_ponderacion"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tparam_ponderacion()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "pondera_valor";
$proto0["m_strFrom"] = "FROM tparam_ponderacion";
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
	"m_strName" => "pondera_valor",
	"m_strTable" => "tparam_ponderacion",
	"m_srcTableName" => "tparam_ponderacion"
));

$proto6["m_sql"] = "pondera_valor";
$proto6["m_srcTableName"] = "tparam_ponderacion";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto8=array();
$proto8["m_link"] = "SQLL_MAIN";
			$proto9=array();
$proto9["m_strName"] = "tparam_ponderacion";
$proto9["m_srcTableName"] = "tparam_ponderacion";
$proto9["m_columns"] = array();
$proto9["m_columns"][] = "pondera_valor";
$obj = new SQLTable($proto9);

$proto8["m_table"] = $obj;
$proto8["m_sql"] = "tparam_ponderacion";
$proto8["m_alias"] = "";
$proto8["m_srcTableName"] = "tparam_ponderacion";
$proto10=array();
$proto10["m_sql"] = "";
$proto10["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto10["m_column"]=$obj;
$proto10["m_contained"] = array();
$proto10["m_strCase"] = "";
$proto10["m_havingmode"] = false;
$proto10["m_inBrackets"] = false;
$proto10["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto10);

$proto8["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto8);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="tparam_ponderacion";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tparam_ponderacion = createSqlQuery_tparam_ponderacion();


	
				;

	

$tdatatparam_ponderacion[".sqlquery"] = $queryData_tparam_ponderacion;



$tdatatparam_ponderacion[".hasEvents"] = false;

?>