<?php
$tdatacompetencia = array();
$tdatacompetencia[".searchableFields"] = array();
$tdatacompetencia[".ShortName"] = "competencia";
$tdatacompetencia[".OwnerID"] = "";
$tdatacompetencia[".OriginalTable"] = "competencia";


$tdatacompetencia[".pagesByType"] = my_json_decode( "{\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"]}" );
$tdatacompetencia[".originalPagesByType"] = $tdatacompetencia[".pagesByType"];
$tdatacompetencia[".pages"] = types2pages( my_json_decode( "{\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"]}" ) );
$tdatacompetencia[".originalPages"] = $tdatacompetencia[".pages"];
$tdatacompetencia[".defaultPages"] = my_json_decode( "{\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\"}" );
$tdatacompetencia[".originalDefaultPages"] = $tdatacompetencia[".defaultPages"];

//	field labels
$fieldLabelscompetencia = array();
$fieldToolTipscompetencia = array();
$pageTitlescompetencia = array();
$placeHolderscompetencia = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscompetencia["Spanish"] = array();
	$fieldToolTipscompetencia["Spanish"] = array();
	$placeHolderscompetencia["Spanish"] = array();
	$pageTitlescompetencia["Spanish"] = array();
	$fieldLabelscompetencia["Spanish"]["id"] = "Id";
	$fieldToolTipscompetencia["Spanish"]["id"] = "";
	$placeHolderscompetencia["Spanish"]["id"] = "";
	$fieldLabelscompetencia["Spanish"]["nombre"] = "Nombre";
	$fieldToolTipscompetencia["Spanish"]["nombre"] = "";
	$placeHolderscompetencia["Spanish"]["nombre"] = "";
	$fieldLabelscompetencia["Spanish"]["descripcion"] = "Descripcion";
	$fieldToolTipscompetencia["Spanish"]["descripcion"] = "";
	$placeHolderscompetencia["Spanish"]["descripcion"] = "";
	$fieldLabelscompetencia["Spanish"]["idComportamental"] = "Id Comportamental";
	$fieldToolTipscompetencia["Spanish"]["idComportamental"] = "";
	$placeHolderscompetencia["Spanish"]["idComportamental"] = "";
	$fieldLabelscompetencia["Spanish"]["fchCreacion"] = "Fch Creacion";
	$fieldToolTipscompetencia["Spanish"]["fchCreacion"] = "";
	$placeHolderscompetencia["Spanish"]["fchCreacion"] = "";
	if (count($fieldToolTipscompetencia["Spanish"]))
		$tdatacompetencia[".isUseToolTips"] = true;
}


	$tdatacompetencia[".NCSearch"] = true;



$tdatacompetencia[".shortTableName"] = "competencia";
$tdatacompetencia[".nSecOptions"] = 0;

$tdatacompetencia[".mainTableOwnerID"] = "";
$tdatacompetencia[".entityType"] = 0;
$tdatacompetencia[".connId"] = "edl2_at_127_0_0_1";


$tdatacompetencia[".strOriginalTableName"] = "competencia";

	



$tdatacompetencia[".showAddInPopup"] = false;

$tdatacompetencia[".showEditInPopup"] = false;

$tdatacompetencia[".showViewInPopup"] = false;

$tdatacompetencia[".listAjax"] = false;
//	temporary
//$tdatacompetencia[".listAjax"] = false;

	$tdatacompetencia[".audit"] = true;

	$tdatacompetencia[".locking"] = true;


$pages = $tdatacompetencia[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacompetencia[".edit"] = true;
	$tdatacompetencia[".afterEditAction"] = 1;
	$tdatacompetencia[".closePopupAfterEdit"] = 1;
	$tdatacompetencia[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacompetencia[".add"] = true;
$tdatacompetencia[".afterAddAction"] = 1;
$tdatacompetencia[".closePopupAfterAdd"] = 1;
$tdatacompetencia[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacompetencia[".list"] = true;
}



$tdatacompetencia[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacompetencia[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacompetencia[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacompetencia[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacompetencia[".printFriendly"] = true;
}



$tdatacompetencia[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacompetencia[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacompetencia[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacompetencia[".isUseAjaxSuggest"] = true;



																																													

$tdatacompetencia[".ajaxCodeSnippetAdded"] = false;

$tdatacompetencia[".buttonsAdded"] = false;

$tdatacompetencia[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacompetencia[".isUseTimeForSearch"] = false;


$tdatacompetencia[".badgeColor"] = "6493EA";


$tdatacompetencia[".allSearchFields"] = array();
$tdatacompetencia[".filterFields"] = array();
$tdatacompetencia[".requiredSearchFields"] = array();

$tdatacompetencia[".googleLikeFields"] = array();
$tdatacompetencia[".googleLikeFields"][] = "id";
$tdatacompetencia[".googleLikeFields"][] = "nombre";
$tdatacompetencia[".googleLikeFields"][] = "descripcion";
$tdatacompetencia[".googleLikeFields"][] = "idComportamental";
$tdatacompetencia[".googleLikeFields"][] = "fchCreacion";



$tdatacompetencia[".tableType"] = "list";

$tdatacompetencia[".printerPageOrientation"] = 0;
$tdatacompetencia[".nPrinterPageScale"] = 100;

$tdatacompetencia[".nPrinterSplitRecords"] = 40;

$tdatacompetencia[".geocodingEnabled"] = false;










$tdatacompetencia[".pageSize"] = 20;

$tdatacompetencia[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacompetencia[".strOrderBy"] = $tstrOrderBy;

$tdatacompetencia[".orderindexes"] = array();


$tdatacompetencia[".sqlHead"] = "SELECT id,  	nombre,  	descripcion,  	idComportamental,  	fchCreacion";
$tdatacompetencia[".sqlFrom"] = "FROM competencia";
$tdatacompetencia[".sqlWhereExpr"] = "";
$tdatacompetencia[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacompetencia[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacompetencia[".arrGroupsPerPage"] = $arrGPP;

$tdatacompetencia[".highlightSearchResults"] = true;

$tableKeyscompetencia = array();
$tableKeyscompetencia[] = "id";
$tdatacompetencia[".Keys"] = $tableKeyscompetencia;


$tdatacompetencia[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "competencia";
	$fdata["Label"] = GetFieldLabel("competencia","id");
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


	$tdatacompetencia["id"] = $fdata;
		$tdatacompetencia[".searchableFields"][] = "id";
//	nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "nombre";
	$fdata["GoodName"] = "nombre";
	$fdata["ownerTable"] = "competencia";
	$fdata["Label"] = GetFieldLabel("competencia","nombre");
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


	$tdatacompetencia["nombre"] = $fdata;
		$tdatacompetencia[".searchableFields"][] = "nombre";
//	descripcion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "descripcion";
	$fdata["GoodName"] = "descripcion";
	$fdata["ownerTable"] = "competencia";
	$fdata["Label"] = GetFieldLabel("competencia","descripcion");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "descripcion";

		$fdata["sourceSingle"] = "descripcion";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "descripcion";

	
	
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


	$tdatacompetencia["descripcion"] = $fdata;
		$tdatacompetencia[".searchableFields"][] = "descripcion";
//	idComportamental
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "idComportamental";
	$fdata["GoodName"] = "idComportamental";
	$fdata["ownerTable"] = "competencia";
	$fdata["Label"] = GetFieldLabel("competencia","idComportamental");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "idComportamental";

		$fdata["sourceSingle"] = "idComportamental";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "idComportamental";

	
	
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
	$edata["LookupTable"] = "comportamental";
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


	$tdatacompetencia["idComportamental"] = $fdata;
		$tdatacompetencia[".searchableFields"][] = "idComportamental";
//	fchCreacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "fchCreacion";
	$fdata["GoodName"] = "fchCreacion";
	$fdata["ownerTable"] = "competencia";
	$fdata["Label"] = GetFieldLabel("competencia","fchCreacion");
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


	$tdatacompetencia["fchCreacion"] = $fdata;
		$tdatacompetencia[".searchableFields"][] = "fchCreacion";


$tables_data["competencia"]=&$tdatacompetencia;
$field_labels["competencia"] = &$fieldLabelscompetencia;
$fieldToolTips["competencia"] = &$fieldToolTipscompetencia;
$placeHolders["competencia"] = &$placeHolderscompetencia;
$page_titles["competencia"] = &$pageTitlescompetencia;


changeTextControlsToDate( "competencia" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["competencia"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["competencia"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_competencia()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	nombre,  	descripcion,  	idComportamental,  	fchCreacion";
$proto0["m_strFrom"] = "FROM competencia";
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
	"m_strTable" => "competencia",
	"m_srcTableName" => "competencia"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "competencia";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre",
	"m_strTable" => "competencia",
	"m_srcTableName" => "competencia"
));

$proto8["m_sql"] = "nombre";
$proto8["m_srcTableName"] = "competencia";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion",
	"m_strTable" => "competencia",
	"m_srcTableName" => "competencia"
));

$proto10["m_sql"] = "descripcion";
$proto10["m_srcTableName"] = "competencia";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "idComportamental",
	"m_strTable" => "competencia",
	"m_srcTableName" => "competencia"
));

$proto12["m_sql"] = "idComportamental";
$proto12["m_srcTableName"] = "competencia";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "fchCreacion",
	"m_strTable" => "competencia",
	"m_srcTableName" => "competencia"
));

$proto14["m_sql"] = "fchCreacion";
$proto14["m_srcTableName"] = "competencia";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "competencia";
$proto17["m_srcTableName"] = "competencia";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "id";
$proto17["m_columns"][] = "nombre";
$proto17["m_columns"][] = "descripcion";
$proto17["m_columns"][] = "idComportamental";
$proto17["m_columns"][] = "fchCreacion";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "competencia";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "competencia";
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
$proto0["m_srcTableName"]="competencia";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_competencia = createSqlQuery_competencia();


	
				;

					

$tdatacompetencia[".sqlquery"] = $queryData_competencia;



$tdatacompetencia[".hasEvents"] = false;

?>