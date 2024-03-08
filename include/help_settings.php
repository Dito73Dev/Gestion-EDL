<?php
$tdatahelp = array();
$tdatahelp[".searchableFields"] = array();
$tdatahelp[".ShortName"] = "help";
$tdatahelp[".OwnerID"] = "";
$tdatahelp[".OriginalTable"] = "help";


$tdatahelp[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatahelp[".originalPagesByType"] = $tdatahelp[".pagesByType"];
$tdatahelp[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatahelp[".originalPages"] = $tdatahelp[".pages"];
$tdatahelp[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatahelp[".originalDefaultPages"] = $tdatahelp[".defaultPages"];

//	field labels
$fieldLabelshelp = array();
$fieldToolTipshelp = array();
$pageTitleshelp = array();
$placeHoldershelp = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelshelp["Spanish"] = array();
	$fieldToolTipshelp["Spanish"] = array();
	$placeHoldershelp["Spanish"] = array();
	$pageTitleshelp["Spanish"] = array();
	$fieldLabelshelp["Spanish"]["help_id"] = "Help Id";
	$fieldToolTipshelp["Spanish"]["help_id"] = "";
	$placeHoldershelp["Spanish"]["help_id"] = "";
	$fieldLabelshelp["Spanish"]["help_code"] = "Código";
	$fieldToolTipshelp["Spanish"]["help_code"] = "";
	$placeHoldershelp["Spanish"]["help_code"] = "";
	$fieldLabelshelp["Spanish"]["help_title"] = "Título";
	$fieldToolTipshelp["Spanish"]["help_title"] = "";
	$placeHoldershelp["Spanish"]["help_title"] = "";
	$fieldLabelshelp["Spanish"]["help_msj"] = "Descripción";
	$fieldToolTipshelp["Spanish"]["help_msj"] = "";
	$placeHoldershelp["Spanish"]["help_msj"] = "";
	$fieldLabelshelp["Spanish"]["help_file"] = "Documento anexo";
	$fieldToolTipshelp["Spanish"]["help_file"] = "";
	$placeHoldershelp["Spanish"]["help_file"] = "";
	$pageTitleshelp["Spanish"]["add"] = "Nuevo registro";
	$pageTitleshelp["Spanish"]["edit"] = "Editar [{%help_id}]";
	$pageTitleshelp["Spanish"]["view"] = "Código: {%help_code}";
	if (count($fieldToolTipshelp["Spanish"]))
		$tdatahelp[".isUseToolTips"] = true;
}


	$tdatahelp[".NCSearch"] = true;



$tdatahelp[".shortTableName"] = "help";
$tdatahelp[".nSecOptions"] = 0;

$tdatahelp[".mainTableOwnerID"] = "";
$tdatahelp[".entityType"] = 0;
$tdatahelp[".connId"] = "edl_at_127_0_0_1";


$tdatahelp[".strOriginalTableName"] = "help";

	



$tdatahelp[".showAddInPopup"] = false;

$tdatahelp[".showEditInPopup"] = false;

$tdatahelp[".showViewInPopup"] = false;

$tdatahelp[".listAjax"] = false;
//	temporary
//$tdatahelp[".listAjax"] = false;

	$tdatahelp[".audit"] = true;

	$tdatahelp[".locking"] = true;


$pages = $tdatahelp[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatahelp[".edit"] = true;
	$tdatahelp[".afterEditAction"] = 0;
	$tdatahelp[".closePopupAfterEdit"] = 1;
	$tdatahelp[".afterEditActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_ADD] ) {
$tdatahelp[".add"] = true;
$tdatahelp[".afterAddAction"] = 0;
$tdatahelp[".closePopupAfterAdd"] = 1;
$tdatahelp[".afterAddActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_LIST] ) {
	$tdatahelp[".list"] = true;
}



$tdatahelp[".strSortControlSettingsJSON"] = "";

$tdatahelp[".strClickActionJSON"] = "{\"fields\":{\"help_code\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"help_file\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"help_id\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"help_msj\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"help_title\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}}},\"row\":{\"action\":\"open\",\"codeData\":{},\"gridData\":{\"action\":\"checkbox\",\"table\":null},\"openData\":{\"how\":\"goto\",\"page\":\"view\",\"table\":null,\"url\":\"\"}}}";



if( $pages[PAGE_VIEW] ) {
$tdatahelp[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatahelp[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatahelp[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatahelp[".printFriendly"] = true;
}



$tdatahelp[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatahelp[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatahelp[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatahelp[".isUseAjaxSuggest"] = true;



																																													

$tdatahelp[".ajaxCodeSnippetAdded"] = false;

$tdatahelp[".buttonsAdded"] = false;

$tdatahelp[".addPageEvents"] = false;

// use timepicker for search panel
$tdatahelp[".isUseTimeForSearch"] = false;


$tdatahelp[".badgeColor"] = "CD853F";


$tdatahelp[".allSearchFields"] = array();
$tdatahelp[".filterFields"] = array();
$tdatahelp[".requiredSearchFields"] = array();

$tdatahelp[".googleLikeFields"] = array();
$tdatahelp[".googleLikeFields"][] = "help_id";
$tdatahelp[".googleLikeFields"][] = "help_code";
$tdatahelp[".googleLikeFields"][] = "help_title";
$tdatahelp[".googleLikeFields"][] = "help_msj";
$tdatahelp[".googleLikeFields"][] = "help_file";



$tdatahelp[".tableType"] = "list";

$tdatahelp[".printerPageOrientation"] = 0;
$tdatahelp[".nPrinterPageScale"] = 100;

$tdatahelp[".nPrinterSplitRecords"] = 40;

$tdatahelp[".geocodingEnabled"] = false;










$tdatahelp[".pageSize"] = 20;

$tdatahelp[".warnLeavingPages"] = true;

$tdatahelp[".hideEmptyFieldsOnView"] = true;


$tstrOrderBy = "";
$tdatahelp[".strOrderBy"] = $tstrOrderBy;

$tdatahelp[".orderindexes"] = array();


$tdatahelp[".sqlHead"] = "SELECT help_id,  	help_code,  	help_title,  	help_msj,  	help_file";
$tdatahelp[".sqlFrom"] = "FROM help";
$tdatahelp[".sqlWhereExpr"] = "";
$tdatahelp[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatahelp[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatahelp[".arrGroupsPerPage"] = $arrGPP;

$tdatahelp[".highlightSearchResults"] = true;

$tableKeyshelp = array();
$tableKeyshelp[] = "help_id";
$tdatahelp[".Keys"] = $tableKeyshelp;


$tdatahelp[".hideMobileList"] = array();




//	help_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "help_id";
	$fdata["GoodName"] = "help_id";
	$fdata["ownerTable"] = "help";
	$fdata["Label"] = GetFieldLabel("help","help_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "help_id";

		$fdata["sourceSingle"] = "help_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "help_id";

	
	
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


	$tdatahelp["help_id"] = $fdata;
		$tdatahelp[".searchableFields"][] = "help_id";
//	help_code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "help_code";
	$fdata["GoodName"] = "help_code";
	$fdata["ownerTable"] = "help";
	$fdata["Label"] = GetFieldLabel("help","help_code");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "help_code";

		$fdata["sourceSingle"] = "help_code";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "help_code";

	
	
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
			$edata["EditParams"].= " maxlength=5";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
			$edata["validateAs"]["basicValidate"][] = "DenyDuplicated";
	$edata["validateAs"]["customMessages"]["DenyDuplicated"] = array("message" => "Código %value% ya existe", "messageType" => "Text");

	
//	End validation

	
			
	
		$edata["denyDuplicates"] = true;

	
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


	$tdatahelp["help_code"] = $fdata;
		$tdatahelp[".searchableFields"][] = "help_code";
//	help_title
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "help_title";
	$fdata["GoodName"] = "help_title";
	$fdata["ownerTable"] = "help";
	$fdata["Label"] = GetFieldLabel("help","help_title");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "help_title";

		$fdata["sourceSingle"] = "help_title";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "help_title";

	
	
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
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
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


	$tdatahelp["help_title"] = $fdata;
		$tdatahelp[".searchableFields"][] = "help_title";
//	help_msj
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "help_msj";
	$fdata["GoodName"] = "help_msj";
	$fdata["ownerTable"] = "help";
	$fdata["Label"] = GetFieldLabel("help","help_msj");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "help_msj";

		$fdata["sourceSingle"] = "help_msj";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "help_msj";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "HTML");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
		$edata["UseRTE"] = true;

	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 500;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
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


	$tdatahelp["help_msj"] = $fdata;
		$tdatahelp[".searchableFields"][] = "help_msj";
//	help_file
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "help_file";
	$fdata["GoodName"] = "help_file";
	$fdata["ownerTable"] = "help";
	$fdata["Label"] = GetFieldLabel("help","help_file");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "help_file";

		$fdata["sourceSingle"] = "help_file";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "help_file";

		$fdata["DeleteAssociatedFile"] = true;

	
				$fdata["UploadFolder"] = "files/help/";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Document Download");

	
	
	
								$vdata["ShowIcon"] = true;
				
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Document upload");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
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


	$tdatahelp["help_file"] = $fdata;
		$tdatahelp[".searchableFields"][] = "help_file";


$tables_data["help"]=&$tdatahelp;
$field_labels["help"] = &$fieldLabelshelp;
$fieldToolTips["help"] = &$fieldToolTipshelp;
$placeHolders["help"] = &$placeHoldershelp;
$page_titles["help"] = &$pageTitleshelp;


changeTextControlsToDate( "help" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["help"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["help"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_help()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "help_id,  	help_code,  	help_title,  	help_msj,  	help_file";
$proto0["m_strFrom"] = "FROM help";
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
	"m_strName" => "help_id",
	"m_strTable" => "help",
	"m_srcTableName" => "help"
));

$proto6["m_sql"] = "help_id";
$proto6["m_srcTableName"] = "help";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "help_code",
	"m_strTable" => "help",
	"m_srcTableName" => "help"
));

$proto8["m_sql"] = "help_code";
$proto8["m_srcTableName"] = "help";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "help_title",
	"m_strTable" => "help",
	"m_srcTableName" => "help"
));

$proto10["m_sql"] = "help_title";
$proto10["m_srcTableName"] = "help";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "help_msj",
	"m_strTable" => "help",
	"m_srcTableName" => "help"
));

$proto12["m_sql"] = "help_msj";
$proto12["m_srcTableName"] = "help";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "help_file",
	"m_strTable" => "help",
	"m_srcTableName" => "help"
));

$proto14["m_sql"] = "help_file";
$proto14["m_srcTableName"] = "help";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "help";
$proto17["m_srcTableName"] = "help";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "help_id";
$proto17["m_columns"][] = "help_code";
$proto17["m_columns"][] = "help_title";
$proto17["m_columns"][] = "help_msj";
$proto17["m_columns"][] = "help_file";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "help";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "help";
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
$proto0["m_srcTableName"]="help";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_help = createSqlQuery_help();


	
				;

					

$tdatahelp[".sqlquery"] = $queryData_help;



$tdatahelp[".hasEvents"] = false;

?>