<?php
$tdataconducta = array();
$tdataconducta[".searchableFields"] = array();
$tdataconducta[".ShortName"] = "conducta";
$tdataconducta[".OwnerID"] = "";
$tdataconducta[".OriginalTable"] = "conducta";


$tdataconducta[".pagesByType"] = my_json_decode( "{\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"]}" );
$tdataconducta[".originalPagesByType"] = $tdataconducta[".pagesByType"];
$tdataconducta[".pages"] = types2pages( my_json_decode( "{\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"]}" ) );
$tdataconducta[".originalPages"] = $tdataconducta[".pages"];
$tdataconducta[".defaultPages"] = my_json_decode( "{\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\"}" );
$tdataconducta[".originalDefaultPages"] = $tdataconducta[".defaultPages"];

//	field labels
$fieldLabelsconducta = array();
$fieldToolTipsconducta = array();
$pageTitlesconducta = array();
$placeHoldersconducta = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsconducta["Spanish"] = array();
	$fieldToolTipsconducta["Spanish"] = array();
	$placeHoldersconducta["Spanish"] = array();
	$pageTitlesconducta["Spanish"] = array();
	$fieldLabelsconducta["Spanish"]["id"] = "Id";
	$fieldToolTipsconducta["Spanish"]["id"] = "";
	$placeHoldersconducta["Spanish"]["id"] = "";
	$fieldLabelsconducta["Spanish"]["nombre"] = "Nombre";
	$fieldToolTipsconducta["Spanish"]["nombre"] = "";
	$placeHoldersconducta["Spanish"]["nombre"] = "";
	$fieldLabelsconducta["Spanish"]["idCompetencia"] = "Id Competencia";
	$fieldToolTipsconducta["Spanish"]["idCompetencia"] = "";
	$placeHoldersconducta["Spanish"]["idCompetencia"] = "";
	$fieldLabelsconducta["Spanish"]["fchCreacion"] = "Fch Creacion";
	$fieldToolTipsconducta["Spanish"]["fchCreacion"] = "";
	$placeHoldersconducta["Spanish"]["fchCreacion"] = "";
	if (count($fieldToolTipsconducta["Spanish"]))
		$tdataconducta[".isUseToolTips"] = true;
}


	$tdataconducta[".NCSearch"] = true;



$tdataconducta[".shortTableName"] = "conducta";
$tdataconducta[".nSecOptions"] = 0;

$tdataconducta[".mainTableOwnerID"] = "";
$tdataconducta[".entityType"] = 0;
$tdataconducta[".connId"] = "edl2_at_127_0_0_1";


$tdataconducta[".strOriginalTableName"] = "conducta";

	



$tdataconducta[".showAddInPopup"] = false;

$tdataconducta[".showEditInPopup"] = false;

$tdataconducta[".showViewInPopup"] = false;

$tdataconducta[".listAjax"] = false;
//	temporary
//$tdataconducta[".listAjax"] = false;

	$tdataconducta[".audit"] = true;

	$tdataconducta[".locking"] = true;


$pages = $tdataconducta[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataconducta[".edit"] = true;
	$tdataconducta[".afterEditAction"] = 1;
	$tdataconducta[".closePopupAfterEdit"] = 1;
	$tdataconducta[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataconducta[".add"] = true;
$tdataconducta[".afterAddAction"] = 1;
$tdataconducta[".closePopupAfterAdd"] = 1;
$tdataconducta[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataconducta[".list"] = true;
}



$tdataconducta[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataconducta[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataconducta[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataconducta[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataconducta[".printFriendly"] = true;
}



$tdataconducta[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataconducta[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataconducta[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataconducta[".isUseAjaxSuggest"] = true;



																																													

$tdataconducta[".ajaxCodeSnippetAdded"] = false;

$tdataconducta[".buttonsAdded"] = false;

$tdataconducta[".addPageEvents"] = false;

// use timepicker for search panel
$tdataconducta[".isUseTimeForSearch"] = false;


$tdataconducta[".badgeColor"] = "E67349";


$tdataconducta[".allSearchFields"] = array();
$tdataconducta[".filterFields"] = array();
$tdataconducta[".requiredSearchFields"] = array();

$tdataconducta[".googleLikeFields"] = array();
$tdataconducta[".googleLikeFields"][] = "id";
$tdataconducta[".googleLikeFields"][] = "nombre";
$tdataconducta[".googleLikeFields"][] = "idCompetencia";
$tdataconducta[".googleLikeFields"][] = "fchCreacion";



$tdataconducta[".tableType"] = "list";

$tdataconducta[".printerPageOrientation"] = 0;
$tdataconducta[".nPrinterPageScale"] = 100;

$tdataconducta[".nPrinterSplitRecords"] = 40;

$tdataconducta[".geocodingEnabled"] = false;










$tdataconducta[".pageSize"] = 20;

$tdataconducta[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataconducta[".strOrderBy"] = $tstrOrderBy;

$tdataconducta[".orderindexes"] = array();


$tdataconducta[".sqlHead"] = "SELECT id,  	nombre,  	idCompetencia,  	fchCreacion";
$tdataconducta[".sqlFrom"] = "FROM conducta";
$tdataconducta[".sqlWhereExpr"] = "";
$tdataconducta[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataconducta[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataconducta[".arrGroupsPerPage"] = $arrGPP;

$tdataconducta[".highlightSearchResults"] = true;

$tableKeysconducta = array();
$tableKeysconducta[] = "id";
$tdataconducta[".Keys"] = $tableKeysconducta;


$tdataconducta[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "conducta";
	$fdata["Label"] = GetFieldLabel("conducta","id");
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


	$tdataconducta["id"] = $fdata;
		$tdataconducta[".searchableFields"][] = "id";
//	nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "nombre";
	$fdata["GoodName"] = "nombre";
	$fdata["ownerTable"] = "conducta";
	$fdata["Label"] = GetFieldLabel("conducta","nombre");
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


	$tdataconducta["nombre"] = $fdata;
		$tdataconducta[".searchableFields"][] = "nombre";
//	idCompetencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "idCompetencia";
	$fdata["GoodName"] = "idCompetencia";
	$fdata["ownerTable"] = "conducta";
	$fdata["Label"] = GetFieldLabel("conducta","idCompetencia");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "idCompetencia";

		$fdata["sourceSingle"] = "idCompetencia";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "idCompetencia";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "competencia";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "nombre";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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


	$tdataconducta["idCompetencia"] = $fdata;
		$tdataconducta[".searchableFields"][] = "idCompetencia";
//	fchCreacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "fchCreacion";
	$fdata["GoodName"] = "fchCreacion";
	$fdata["ownerTable"] = "conducta";
	$fdata["Label"] = GetFieldLabel("conducta","fchCreacion");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "fchCreacion";

		$fdata["sourceSingle"] = "fchCreacion";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fchCreacion";

	
	
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


	$tdataconducta["fchCreacion"] = $fdata;
		$tdataconducta[".searchableFields"][] = "fchCreacion";


$tables_data["conducta"]=&$tdataconducta;
$field_labels["conducta"] = &$fieldLabelsconducta;
$fieldToolTips["conducta"] = &$fieldToolTipsconducta;
$placeHolders["conducta"] = &$placeHoldersconducta;
$page_titles["conducta"] = &$pageTitlesconducta;


changeTextControlsToDate( "conducta" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["conducta"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["conducta"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_conducta()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	nombre,  	idCompetencia,  	fchCreacion";
$proto0["m_strFrom"] = "FROM conducta";
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
	"m_strTable" => "conducta",
	"m_srcTableName" => "conducta"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "conducta";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre",
	"m_strTable" => "conducta",
	"m_srcTableName" => "conducta"
));

$proto8["m_sql"] = "nombre";
$proto8["m_srcTableName"] = "conducta";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "idCompetencia",
	"m_strTable" => "conducta",
	"m_srcTableName" => "conducta"
));

$proto10["m_sql"] = "idCompetencia";
$proto10["m_srcTableName"] = "conducta";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "fchCreacion",
	"m_strTable" => "conducta",
	"m_srcTableName" => "conducta"
));

$proto12["m_sql"] = "fchCreacion";
$proto12["m_srcTableName"] = "conducta";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "conducta";
$proto15["m_srcTableName"] = "conducta";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "id";
$proto15["m_columns"][] = "nombre";
$proto15["m_columns"][] = "idCompetencia";
$proto15["m_columns"][] = "fchCreacion";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "conducta";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "conducta";
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
$proto0["m_srcTableName"]="conducta";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_conducta = createSqlQuery_conducta();


	
				;

				

$tdataconducta[".sqlquery"] = $queryData_conducta;



$tdataconducta[".hasEvents"] = false;

?>