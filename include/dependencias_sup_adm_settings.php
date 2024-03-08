<?php
$tdatadependencias_sup_adm = array();
$tdatadependencias_sup_adm[".searchableFields"] = array();
$tdatadependencias_sup_adm[".ShortName"] = "dependencias_sup_adm";
$tdatadependencias_sup_adm[".OwnerID"] = "";
$tdatadependencias_sup_adm[".OriginalTable"] = "dependencias_001";


$tdatadependencias_sup_adm[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"view\":[\"view\"]}" );
$tdatadependencias_sup_adm[".originalPagesByType"] = $tdatadependencias_sup_adm[".pagesByType"];
$tdatadependencias_sup_adm[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"view\":[\"view\"]}" ) );
$tdatadependencias_sup_adm[".originalPages"] = $tdatadependencias_sup_adm[".pages"];
$tdatadependencias_sup_adm[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"view\":\"view\"}" );
$tdatadependencias_sup_adm[".originalDefaultPages"] = $tdatadependencias_sup_adm[".defaultPages"];

//	field labels
$fieldLabelsdependencias_sup_adm = array();
$fieldToolTipsdependencias_sup_adm = array();
$pageTitlesdependencias_sup_adm = array();
$placeHoldersdependencias_sup_adm = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsdependencias_sup_adm["Spanish"] = array();
	$fieldToolTipsdependencias_sup_adm["Spanish"] = array();
	$placeHoldersdependencias_sup_adm["Spanish"] = array();
	$pageTitlesdependencias_sup_adm["Spanish"] = array();
	$fieldLabelsdependencias_sup_adm["Spanish"]["id_depto_superior"] = "Código ID";
	$fieldToolTipsdependencias_sup_adm["Spanish"]["id_depto_superior"] = "";
	$placeHoldersdependencias_sup_adm["Spanish"]["id_depto_superior"] = "";
	$fieldLabelsdependencias_sup_adm["Spanish"]["Departamento_superior"] = "Nombre Dirección | Despacho";
	$fieldToolTipsdependencias_sup_adm["Spanish"]["Departamento_superior"] = "";
	$placeHoldersdependencias_sup_adm["Spanish"]["Departamento_superior"] = "";
	if (count($fieldToolTipsdependencias_sup_adm["Spanish"]))
		$tdatadependencias_sup_adm[".isUseToolTips"] = true;
}


	$tdatadependencias_sup_adm[".NCSearch"] = true;



$tdatadependencias_sup_adm[".shortTableName"] = "dependencias_sup_adm";
$tdatadependencias_sup_adm[".nSecOptions"] = 0;

$tdatadependencias_sup_adm[".mainTableOwnerID"] = "";
$tdatadependencias_sup_adm[".entityType"] = 1;
$tdatadependencias_sup_adm[".connId"] = "edl_at_127_0_0_1";


$tdatadependencias_sup_adm[".strOriginalTableName"] = "dependencias_001";

	



$tdatadependencias_sup_adm[".showAddInPopup"] = false;

$tdatadependencias_sup_adm[".showEditInPopup"] = false;

$tdatadependencias_sup_adm[".showViewInPopup"] = false;

$tdatadependencias_sup_adm[".listAjax"] = false;
//	temporary
//$tdatadependencias_sup_adm[".listAjax"] = false;

	$tdatadependencias_sup_adm[".audit"] = true;

	$tdatadependencias_sup_adm[".locking"] = true;


$pages = $tdatadependencias_sup_adm[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatadependencias_sup_adm[".edit"] = true;
	$tdatadependencias_sup_adm[".afterEditAction"] = 1;
	$tdatadependencias_sup_adm[".closePopupAfterEdit"] = 1;
	$tdatadependencias_sup_adm[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatadependencias_sup_adm[".add"] = true;
$tdatadependencias_sup_adm[".afterAddAction"] = 1;
$tdatadependencias_sup_adm[".closePopupAfterAdd"] = 1;
$tdatadependencias_sup_adm[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatadependencias_sup_adm[".list"] = true;
}



$tdatadependencias_sup_adm[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatadependencias_sup_adm[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatadependencias_sup_adm[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatadependencias_sup_adm[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatadependencias_sup_adm[".printFriendly"] = true;
}



$tdatadependencias_sup_adm[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatadependencias_sup_adm[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatadependencias_sup_adm[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatadependencias_sup_adm[".isUseAjaxSuggest"] = true;



																																													

$tdatadependencias_sup_adm[".ajaxCodeSnippetAdded"] = false;

$tdatadependencias_sup_adm[".buttonsAdded"] = false;

$tdatadependencias_sup_adm[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadependencias_sup_adm[".isUseTimeForSearch"] = false;


$tdatadependencias_sup_adm[".badgeColor"] = "B22222";


$tdatadependencias_sup_adm[".allSearchFields"] = array();
$tdatadependencias_sup_adm[".filterFields"] = array();
$tdatadependencias_sup_adm[".requiredSearchFields"] = array();

$tdatadependencias_sup_adm[".googleLikeFields"] = array();
$tdatadependencias_sup_adm[".googleLikeFields"][] = "id_depto_superior";
$tdatadependencias_sup_adm[".googleLikeFields"][] = "Departamento_superior";



$tdatadependencias_sup_adm[".tableType"] = "list";

$tdatadependencias_sup_adm[".printerPageOrientation"] = 0;
$tdatadependencias_sup_adm[".nPrinterPageScale"] = 100;

$tdatadependencias_sup_adm[".nPrinterSplitRecords"] = 40;

$tdatadependencias_sup_adm[".geocodingEnabled"] = false;










$tdatadependencias_sup_adm[".pageSize"] = 20;

$tdatadependencias_sup_adm[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatadependencias_sup_adm[".strOrderBy"] = $tstrOrderBy;

$tdatadependencias_sup_adm[".orderindexes"] = array();


$tdatadependencias_sup_adm[".sqlHead"] = "SELECT id_depto_superior,  	Departamento_superior";
$tdatadependencias_sup_adm[".sqlFrom"] = "FROM dependencias_001";
$tdatadependencias_sup_adm[".sqlWhereExpr"] = "";
$tdatadependencias_sup_adm[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadependencias_sup_adm[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadependencias_sup_adm[".arrGroupsPerPage"] = $arrGPP;

$tdatadependencias_sup_adm[".highlightSearchResults"] = true;

$tableKeysdependencias_sup_adm = array();
$tableKeysdependencias_sup_adm[] = "id_depto_superior";
$tdatadependencias_sup_adm[".Keys"] = $tableKeysdependencias_sup_adm;


$tdatadependencias_sup_adm[".hideMobileList"] = array();




//	id_depto_superior
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_depto_superior";
	$fdata["GoodName"] = "id_depto_superior";
	$fdata["ownerTable"] = "dependencias_001";
	$fdata["Label"] = GetFieldLabel("dependencias_sup_adm","id_depto_superior");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id_depto_superior";

		$fdata["sourceSingle"] = "id_depto_superior";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_depto_superior";

	
	
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


	$tdatadependencias_sup_adm["id_depto_superior"] = $fdata;
		$tdatadependencias_sup_adm[".searchableFields"][] = "id_depto_superior";
//	Departamento_superior
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Departamento_superior";
	$fdata["GoodName"] = "Departamento_superior";
	$fdata["ownerTable"] = "dependencias_001";
	$fdata["Label"] = GetFieldLabel("dependencias_sup_adm","Departamento_superior");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Departamento_superior";

		$fdata["sourceSingle"] = "Departamento_superior";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Departamento_superior";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdatadependencias_sup_adm["Departamento_superior"] = $fdata;
		$tdatadependencias_sup_adm[".searchableFields"][] = "Departamento_superior";


$tables_data["dependencias_sup_adm"]=&$tdatadependencias_sup_adm;
$field_labels["dependencias_sup_adm"] = &$fieldLabelsdependencias_sup_adm;
$fieldToolTips["dependencias_sup_adm"] = &$fieldToolTipsdependencias_sup_adm;
$placeHolders["dependencias_sup_adm"] = &$placeHoldersdependencias_sup_adm;
$page_titles["dependencias_sup_adm"] = &$pageTitlesdependencias_sup_adm;


changeTextControlsToDate( "dependencias_sup_adm" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dependencias_sup_adm"] = array();
//	dependencia_adm
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="dependencia_adm";
		$detailsParam["dOriginalTable"] = "dependencia";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "dependencia_adm";
	$detailsParam["dCaptionTable"] = GetTableCaption("dependencia_adm");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["dependencias_sup_adm"][$dIndex] = $detailsParam;

	
		$detailsTablesData["dependencias_sup_adm"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["dependencias_sup_adm"][$dIndex]["masterKeys"][]="id_depto_superior";

				$detailsTablesData["dependencias_sup_adm"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["dependencias_sup_adm"][$dIndex]["detailKeys"][]="id_depto_superior";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dependencias_sup_adm"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_dependencias_sup_adm()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_depto_superior,  	Departamento_superior";
$proto0["m_strFrom"] = "FROM dependencias_001";
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
	"m_strName" => "id_depto_superior",
	"m_strTable" => "dependencias_001",
	"m_srcTableName" => "dependencias_sup_adm"
));

$proto6["m_sql"] = "id_depto_superior";
$proto6["m_srcTableName"] = "dependencias_sup_adm";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Departamento_superior",
	"m_strTable" => "dependencias_001",
	"m_srcTableName" => "dependencias_sup_adm"
));

$proto8["m_sql"] = "Departamento_superior";
$proto8["m_srcTableName"] = "dependencias_sup_adm";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "dependencias_001";
$proto11["m_srcTableName"] = "dependencias_sup_adm";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "id_depto_superior";
$proto11["m_columns"][] = "Departamento_superior";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "dependencias_001";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "dependencias_sup_adm";
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
$proto0["m_srcTableName"]="dependencias_sup_adm";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_dependencias_sup_adm = createSqlQuery_dependencias_sup_adm();


	
				;

		

$tdatadependencias_sup_adm[".sqlquery"] = $queryData_dependencias_sup_adm;



$tdatadependencias_sup_adm[".hasEvents"] = false;

?>