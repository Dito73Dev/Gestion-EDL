<?php
$tdatacomportamental = array();
$tdatacomportamental[".searchableFields"] = array();
$tdatacomportamental[".ShortName"] = "comportamental";
$tdatacomportamental[".OwnerID"] = "";
$tdatacomportamental[".OriginalTable"] = "comportamental";


$tdatacomportamental[".pagesByType"] = my_json_decode( "{\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"]}" );
$tdatacomportamental[".originalPagesByType"] = $tdatacomportamental[".pagesByType"];
$tdatacomportamental[".pages"] = types2pages( my_json_decode( "{\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"]}" ) );
$tdatacomportamental[".originalPages"] = $tdatacomportamental[".pages"];
$tdatacomportamental[".defaultPages"] = my_json_decode( "{\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\"}" );
$tdatacomportamental[".originalDefaultPages"] = $tdatacomportamental[".defaultPages"];

//	field labels
$fieldLabelscomportamental = array();
$fieldToolTipscomportamental = array();
$pageTitlescomportamental = array();
$placeHolderscomportamental = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscomportamental["Spanish"] = array();
	$fieldToolTipscomportamental["Spanish"] = array();
	$placeHolderscomportamental["Spanish"] = array();
	$pageTitlescomportamental["Spanish"] = array();
	$fieldLabelscomportamental["Spanish"]["id"] = "Id";
	$fieldToolTipscomportamental["Spanish"]["id"] = "";
	$placeHolderscomportamental["Spanish"]["id"] = "";
	$fieldLabelscomportamental["Spanish"]["nombre"] = "Nombre";
	$fieldToolTipscomportamental["Spanish"]["nombre"] = "";
	$placeHolderscomportamental["Spanish"]["nombre"] = "";
	$fieldLabelscomportamental["Spanish"]["NivelFuncional"] = "Nivel Funcional";
	$fieldToolTipscomportamental["Spanish"]["NivelFuncional"] = "";
	$placeHolderscomportamental["Spanish"]["NivelFuncional"] = "";
	$fieldLabelscomportamental["Spanish"]["NivelStatus"] = "Nivel Status";
	$fieldToolTipscomportamental["Spanish"]["NivelStatus"] = "";
	$placeHolderscomportamental["Spanish"]["NivelStatus"] = "";
	if (count($fieldToolTipscomportamental["Spanish"]))
		$tdatacomportamental[".isUseToolTips"] = true;
}


	$tdatacomportamental[".NCSearch"] = true;



$tdatacomportamental[".shortTableName"] = "comportamental";
$tdatacomportamental[".nSecOptions"] = 0;

$tdatacomportamental[".mainTableOwnerID"] = "";
$tdatacomportamental[".entityType"] = 0;
$tdatacomportamental[".connId"] = "edl2_at_127_0_0_1";


$tdatacomportamental[".strOriginalTableName"] = "comportamental";

	



$tdatacomportamental[".showAddInPopup"] = false;

$tdatacomportamental[".showEditInPopup"] = false;

$tdatacomportamental[".showViewInPopup"] = false;

$tdatacomportamental[".listAjax"] = false;
//	temporary
//$tdatacomportamental[".listAjax"] = false;

	$tdatacomportamental[".audit"] = true;

	$tdatacomportamental[".locking"] = true;


$pages = $tdatacomportamental[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacomportamental[".edit"] = true;
	$tdatacomportamental[".afterEditAction"] = 1;
	$tdatacomportamental[".closePopupAfterEdit"] = 1;
	$tdatacomportamental[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacomportamental[".add"] = true;
$tdatacomportamental[".afterAddAction"] = 1;
$tdatacomportamental[".closePopupAfterAdd"] = 1;
$tdatacomportamental[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacomportamental[".list"] = true;
}



$tdatacomportamental[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacomportamental[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacomportamental[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacomportamental[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacomportamental[".printFriendly"] = true;
}



$tdatacomportamental[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacomportamental[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacomportamental[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacomportamental[".isUseAjaxSuggest"] = true;



																																													

$tdatacomportamental[".ajaxCodeSnippetAdded"] = false;

$tdatacomportamental[".buttonsAdded"] = false;

$tdatacomportamental[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacomportamental[".isUseTimeForSearch"] = false;


$tdatacomportamental[".badgeColor"] = "9ACD32";


$tdatacomportamental[".allSearchFields"] = array();
$tdatacomportamental[".filterFields"] = array();
$tdatacomportamental[".requiredSearchFields"] = array();

$tdatacomportamental[".googleLikeFields"] = array();
$tdatacomportamental[".googleLikeFields"][] = "id";
$tdatacomportamental[".googleLikeFields"][] = "nombre";
$tdatacomportamental[".googleLikeFields"][] = "NivelFuncional";
$tdatacomportamental[".googleLikeFields"][] = "NivelStatus";



$tdatacomportamental[".tableType"] = "list";

$tdatacomportamental[".printerPageOrientation"] = 0;
$tdatacomportamental[".nPrinterPageScale"] = 100;

$tdatacomportamental[".nPrinterSplitRecords"] = 40;

$tdatacomportamental[".geocodingEnabled"] = false;










$tdatacomportamental[".pageSize"] = 20;

$tdatacomportamental[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacomportamental[".strOrderBy"] = $tstrOrderBy;

$tdatacomportamental[".orderindexes"] = array();


$tdatacomportamental[".sqlHead"] = "SELECT id,  	nombre,  	NivelFuncional,  	NivelStatus";
$tdatacomportamental[".sqlFrom"] = "FROM comportamental";
$tdatacomportamental[".sqlWhereExpr"] = "";
$tdatacomportamental[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacomportamental[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacomportamental[".arrGroupsPerPage"] = $arrGPP;

$tdatacomportamental[".highlightSearchResults"] = true;

$tableKeyscomportamental = array();
$tableKeyscomportamental[] = "id";
$tdatacomportamental[".Keys"] = $tableKeyscomportamental;


$tdatacomportamental[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "comportamental";
	$fdata["Label"] = GetFieldLabel("comportamental","id");
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


	$tdatacomportamental["id"] = $fdata;
		$tdatacomportamental[".searchableFields"][] = "id";
//	nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "nombre";
	$fdata["GoodName"] = "nombre";
	$fdata["ownerTable"] = "comportamental";
	$fdata["Label"] = GetFieldLabel("comportamental","nombre");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "nombre";

		$fdata["sourceSingle"] = "nombre";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nombre";

	
	
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


	$tdatacomportamental["nombre"] = $fdata;
		$tdatacomportamental[".searchableFields"][] = "nombre";
//	NivelFuncional
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "NivelFuncional";
	$fdata["GoodName"] = "NivelFuncional";
	$fdata["ownerTable"] = "comportamental";
	$fdata["Label"] = GetFieldLabel("comportamental","NivelFuncional");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "NivelFuncional";

		$fdata["sourceSingle"] = "NivelFuncional";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "NivelFuncional";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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


	$tdatacomportamental["NivelFuncional"] = $fdata;
		$tdatacomportamental[".searchableFields"][] = "NivelFuncional";
//	NivelStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "NivelStatus";
	$fdata["GoodName"] = "NivelStatus";
	$fdata["ownerTable"] = "comportamental";
	$fdata["Label"] = GetFieldLabel("comportamental","NivelStatus");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "NivelStatus";

		$fdata["sourceSingle"] = "NivelStatus";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "NivelStatus";

	
	
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


	$tdatacomportamental["NivelStatus"] = $fdata;
		$tdatacomportamental[".searchableFields"][] = "NivelStatus";


$tables_data["comportamental"]=&$tdatacomportamental;
$field_labels["comportamental"] = &$fieldLabelscomportamental;
$fieldToolTips["comportamental"] = &$fieldToolTipscomportamental;
$placeHolders["comportamental"] = &$placeHolderscomportamental;
$page_titles["comportamental"] = &$pageTitlescomportamental;


changeTextControlsToDate( "comportamental" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["comportamental"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["comportamental"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_comportamental()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	nombre,  	NivelFuncional,  	NivelStatus";
$proto0["m_strFrom"] = "FROM comportamental";
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
	"m_strTable" => "comportamental",
	"m_srcTableName" => "comportamental"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "comportamental";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre",
	"m_strTable" => "comportamental",
	"m_srcTableName" => "comportamental"
));

$proto8["m_sql"] = "nombre";
$proto8["m_srcTableName"] = "comportamental";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "NivelFuncional",
	"m_strTable" => "comportamental",
	"m_srcTableName" => "comportamental"
));

$proto10["m_sql"] = "NivelFuncional";
$proto10["m_srcTableName"] = "comportamental";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "NivelStatus",
	"m_strTable" => "comportamental",
	"m_srcTableName" => "comportamental"
));

$proto12["m_sql"] = "NivelStatus";
$proto12["m_srcTableName"] = "comportamental";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "comportamental";
$proto15["m_srcTableName"] = "comportamental";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "id";
$proto15["m_columns"][] = "nombre";
$proto15["m_columns"][] = "NivelFuncional";
$proto15["m_columns"][] = "NivelStatus";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "comportamental";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "comportamental";
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
$proto0["m_srcTableName"]="comportamental";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_comportamental = createSqlQuery_comportamental();


	
				;

				

$tdatacomportamental[".sqlquery"] = $queryData_comportamental;



$tdatacomportamental[".hasEvents"] = false;

?>