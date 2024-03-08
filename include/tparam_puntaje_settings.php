<?php
$tdatatparam_puntaje = array();
$tdatatparam_puntaje[".searchableFields"] = array();
$tdatatparam_puntaje[".ShortName"] = "tparam_puntaje";
$tdatatparam_puntaje[".OwnerID"] = "";
$tdatatparam_puntaje[".OriginalTable"] = "tparam_puntaje";


$tdatatparam_puntaje[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" );
$tdatatparam_puntaje[".originalPagesByType"] = $tdatatparam_puntaje[".pagesByType"];
$tdatatparam_puntaje[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" ) );
$tdatatparam_puntaje[".originalPages"] = $tdatatparam_puntaje[".pages"];
$tdatatparam_puntaje[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"search\":\"search\"}" );
$tdatatparam_puntaje[".originalDefaultPages"] = $tdatatparam_puntaje[".defaultPages"];

//	field labels
$fieldLabelstparam_puntaje = array();
$fieldToolTipstparam_puntaje = array();
$pageTitlestparam_puntaje = array();
$placeHolderstparam_puntaje = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstparam_puntaje["Spanish"] = array();
	$fieldToolTipstparam_puntaje["Spanish"] = array();
	$placeHolderstparam_puntaje["Spanish"] = array();
	$pageTitlestparam_puntaje["Spanish"] = array();
	$fieldLabelstparam_puntaje["Spanish"]["puntaje_id"] = "Puntaje Id";
	$fieldToolTipstparam_puntaje["Spanish"]["puntaje_id"] = "";
	$placeHolderstparam_puntaje["Spanish"]["puntaje_id"] = "";
	$fieldLabelstparam_puntaje["Spanish"]["puntaje_name"] = "Puntaje";
	$fieldToolTipstparam_puntaje["Spanish"]["puntaje_name"] = "";
	$placeHolderstparam_puntaje["Spanish"]["puntaje_name"] = "";
	$fieldLabelstparam_puntaje["Spanish"]["puntaje_tipo"] = "Puntaje Tipo";
	$fieldToolTipstparam_puntaje["Spanish"]["puntaje_tipo"] = "";
	$placeHolderstparam_puntaje["Spanish"]["puntaje_tipo"] = "";
	$fieldLabelstparam_puntaje["Spanish"]["puntaje_clase"] = "Periodo";
	$fieldToolTipstparam_puntaje["Spanish"]["puntaje_clase"] = "";
	$placeHolderstparam_puntaje["Spanish"]["puntaje_clase"] = "";
	$fieldLabelstparam_puntaje["Spanish"]["puntaje_desc"] = "Descripción";
	$fieldToolTipstparam_puntaje["Spanish"]["puntaje_desc"] = "";
	$placeHolderstparam_puntaje["Spanish"]["puntaje_desc"] = "";
	if (count($fieldToolTipstparam_puntaje["Spanish"]))
		$tdatatparam_puntaje[".isUseToolTips"] = true;
}


	$tdatatparam_puntaje[".NCSearch"] = true;



$tdatatparam_puntaje[".shortTableName"] = "tparam_puntaje";
$tdatatparam_puntaje[".nSecOptions"] = 0;

$tdatatparam_puntaje[".mainTableOwnerID"] = "";
$tdatatparam_puntaje[".entityType"] = 0;
$tdatatparam_puntaje[".connId"] = "edl2_at_127_0_0_1";


$tdatatparam_puntaje[".strOriginalTableName"] = "tparam_puntaje";

	



$tdatatparam_puntaje[".showAddInPopup"] = false;

$tdatatparam_puntaje[".showEditInPopup"] = false;

$tdatatparam_puntaje[".showViewInPopup"] = false;

$tdatatparam_puntaje[".listAjax"] = false;
//	temporary
//$tdatatparam_puntaje[".listAjax"] = false;

	$tdatatparam_puntaje[".audit"] = true;

	$tdatatparam_puntaje[".locking"] = true;


$pages = $tdatatparam_puntaje[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatparam_puntaje[".edit"] = true;
	$tdatatparam_puntaje[".afterEditAction"] = 1;
	$tdatatparam_puntaje[".closePopupAfterEdit"] = 1;
	$tdatatparam_puntaje[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatparam_puntaje[".add"] = true;
$tdatatparam_puntaje[".afterAddAction"] = 1;
$tdatatparam_puntaje[".closePopupAfterAdd"] = 1;
$tdatatparam_puntaje[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatparam_puntaje[".list"] = true;
}



$tdatatparam_puntaje[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatparam_puntaje[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatparam_puntaje[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatparam_puntaje[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatparam_puntaje[".printFriendly"] = true;
}



$tdatatparam_puntaje[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatparam_puntaje[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatparam_puntaje[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatparam_puntaje[".isUseAjaxSuggest"] = true;



																																													

$tdatatparam_puntaje[".ajaxCodeSnippetAdded"] = false;

$tdatatparam_puntaje[".buttonsAdded"] = false;

$tdatatparam_puntaje[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatparam_puntaje[".isUseTimeForSearch"] = false;


$tdatatparam_puntaje[".badgeColor"] = "BC8F8F";


$tdatatparam_puntaje[".allSearchFields"] = array();
$tdatatparam_puntaje[".filterFields"] = array();
$tdatatparam_puntaje[".requiredSearchFields"] = array();

$tdatatparam_puntaje[".googleLikeFields"] = array();
$tdatatparam_puntaje[".googleLikeFields"][] = "puntaje_id";
$tdatatparam_puntaje[".googleLikeFields"][] = "puntaje_name";
$tdatatparam_puntaje[".googleLikeFields"][] = "puntaje_tipo";
$tdatatparam_puntaje[".googleLikeFields"][] = "puntaje_clase";
$tdatatparam_puntaje[".googleLikeFields"][] = "puntaje_desc";



$tdatatparam_puntaje[".tableType"] = "list";

$tdatatparam_puntaje[".printerPageOrientation"] = 0;
$tdatatparam_puntaje[".nPrinterPageScale"] = 100;

$tdatatparam_puntaje[".nPrinterSplitRecords"] = 40;

$tdatatparam_puntaje[".geocodingEnabled"] = false;










$tdatatparam_puntaje[".pageSize"] = 20;

$tdatatparam_puntaje[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatparam_puntaje[".strOrderBy"] = $tstrOrderBy;

$tdatatparam_puntaje[".orderindexes"] = array();


$tdatatparam_puntaje[".sqlHead"] = "SELECT puntaje_id,  	puntaje_name,  	puntaje_tipo,  	puntaje_clase,  	puntaje_desc";
$tdatatparam_puntaje[".sqlFrom"] = "FROM tparam_puntaje";
$tdatatparam_puntaje[".sqlWhereExpr"] = "";
$tdatatparam_puntaje[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatparam_puntaje[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatparam_puntaje[".arrGroupsPerPage"] = $arrGPP;

$tdatatparam_puntaje[".highlightSearchResults"] = true;

$tableKeystparam_puntaje = array();
$tdatatparam_puntaje[".Keys"] = $tableKeystparam_puntaje;


$tdatatparam_puntaje[".hideMobileList"] = array();




//	puntaje_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "puntaje_id";
	$fdata["GoodName"] = "puntaje_id";
	$fdata["ownerTable"] = "tparam_puntaje";
	$fdata["Label"] = GetFieldLabel("tparam_puntaje","puntaje_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "puntaje_id";

		$fdata["sourceSingle"] = "puntaje_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "puntaje_id";

	
	
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


	$tdatatparam_puntaje["puntaje_id"] = $fdata;
		$tdatatparam_puntaje[".searchableFields"][] = "puntaje_id";
//	puntaje_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "puntaje_name";
	$fdata["GoodName"] = "puntaje_name";
	$fdata["ownerTable"] = "tparam_puntaje";
	$fdata["Label"] = GetFieldLabel("tparam_puntaje","puntaje_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "puntaje_name";

		$fdata["sourceSingle"] = "puntaje_name";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "puntaje_name";

	
	
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
			$edata["EditParams"].= " maxlength=30";

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


	$tdatatparam_puntaje["puntaje_name"] = $fdata;
		$tdatatparam_puntaje[".searchableFields"][] = "puntaje_name";
//	puntaje_tipo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "puntaje_tipo";
	$fdata["GoodName"] = "puntaje_tipo";
	$fdata["ownerTable"] = "tparam_puntaje";
	$fdata["Label"] = GetFieldLabel("tparam_puntaje","puntaje_tipo");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "puntaje_tipo";

		$fdata["sourceSingle"] = "puntaje_tipo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "puntaje_tipo";

	
	
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


	$tdatatparam_puntaje["puntaje_tipo"] = $fdata;
		$tdatatparam_puntaje[".searchableFields"][] = "puntaje_tipo";
//	puntaje_clase
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "puntaje_clase";
	$fdata["GoodName"] = "puntaje_clase";
	$fdata["ownerTable"] = "tparam_puntaje";
	$fdata["Label"] = GetFieldLabel("tparam_puntaje","puntaje_clase");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "puntaje_clase";

		$fdata["sourceSingle"] = "puntaje_clase";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "puntaje_clase";

	
	
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
			$edata["EditParams"].= " maxlength=30";

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


	$tdatatparam_puntaje["puntaje_clase"] = $fdata;
		$tdatatparam_puntaje[".searchableFields"][] = "puntaje_clase";
//	puntaje_desc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "puntaje_desc";
	$fdata["GoodName"] = "puntaje_desc";
	$fdata["ownerTable"] = "tparam_puntaje";
	$fdata["Label"] = GetFieldLabel("tparam_puntaje","puntaje_desc");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "puntaje_desc";

		$fdata["sourceSingle"] = "puntaje_desc";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "puntaje_desc";

	
	
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
			$edata["EditParams"].= " maxlength=1000";

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


	$tdatatparam_puntaje["puntaje_desc"] = $fdata;
		$tdatatparam_puntaje[".searchableFields"][] = "puntaje_desc";


$tables_data["tparam_puntaje"]=&$tdatatparam_puntaje;
$field_labels["tparam_puntaje"] = &$fieldLabelstparam_puntaje;
$fieldToolTips["tparam_puntaje"] = &$fieldToolTipstparam_puntaje;
$placeHolders["tparam_puntaje"] = &$placeHolderstparam_puntaje;
$page_titles["tparam_puntaje"] = &$pageTitlestparam_puntaje;


changeTextControlsToDate( "tparam_puntaje" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["tparam_puntaje"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["tparam_puntaje"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tparam_puntaje()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "puntaje_id,  	puntaje_name,  	puntaje_tipo,  	puntaje_clase,  	puntaje_desc";
$proto0["m_strFrom"] = "FROM tparam_puntaje";
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
	"m_strName" => "puntaje_id",
	"m_strTable" => "tparam_puntaje",
	"m_srcTableName" => "tparam_puntaje"
));

$proto6["m_sql"] = "puntaje_id";
$proto6["m_srcTableName"] = "tparam_puntaje";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "puntaje_name",
	"m_strTable" => "tparam_puntaje",
	"m_srcTableName" => "tparam_puntaje"
));

$proto8["m_sql"] = "puntaje_name";
$proto8["m_srcTableName"] = "tparam_puntaje";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "puntaje_tipo",
	"m_strTable" => "tparam_puntaje",
	"m_srcTableName" => "tparam_puntaje"
));

$proto10["m_sql"] = "puntaje_tipo";
$proto10["m_srcTableName"] = "tparam_puntaje";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "puntaje_clase",
	"m_strTable" => "tparam_puntaje",
	"m_srcTableName" => "tparam_puntaje"
));

$proto12["m_sql"] = "puntaje_clase";
$proto12["m_srcTableName"] = "tparam_puntaje";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "puntaje_desc",
	"m_strTable" => "tparam_puntaje",
	"m_srcTableName" => "tparam_puntaje"
));

$proto14["m_sql"] = "puntaje_desc";
$proto14["m_srcTableName"] = "tparam_puntaje";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "tparam_puntaje";
$proto17["m_srcTableName"] = "tparam_puntaje";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "puntaje_id";
$proto17["m_columns"][] = "puntaje_name";
$proto17["m_columns"][] = "puntaje_tipo";
$proto17["m_columns"][] = "puntaje_clase";
$proto17["m_columns"][] = "puntaje_desc";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "tparam_puntaje";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "tparam_puntaje";
$proto18=array();
$proto18["m_sql"] = "";
$proto18["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto18["m_column"]=$obj;
$proto18["m_contained"] = array();
$proto18["m_strCase"] = "";
$proto18["m_havingmode"] = false;
$proto18["m_inBrackets"] = false;
$proto18["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto18);

$proto16["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto16);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="tparam_puntaje";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tparam_puntaje = createSqlQuery_tparam_puntaje();


	
				;

					

$tdatatparam_puntaje[".sqlquery"] = $queryData_tparam_puntaje;



$tdatatparam_puntaje[".hasEvents"] = false;

?>