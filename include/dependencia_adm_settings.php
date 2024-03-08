<?php
$tdatadependencia_adm = array();
$tdatadependencia_adm[".searchableFields"] = array();
$tdatadependencia_adm[".ShortName"] = "dependencia_adm";
$tdatadependencia_adm[".OwnerID"] = "";
$tdatadependencia_adm[".OriginalTable"] = "dependencia";


$tdatadependencia_adm[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatadependencia_adm[".originalPagesByType"] = $tdatadependencia_adm[".pagesByType"];
$tdatadependencia_adm[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatadependencia_adm[".originalPages"] = $tdatadependencia_adm[".pages"];
$tdatadependencia_adm[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatadependencia_adm[".originalDefaultPages"] = $tdatadependencia_adm[".defaultPages"];

//	field labels
$fieldLabelsdependencia_adm = array();
$fieldToolTipsdependencia_adm = array();
$pageTitlesdependencia_adm = array();
$placeHoldersdependencia_adm = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsdependencia_adm["Spanish"] = array();
	$fieldToolTipsdependencia_adm["Spanish"] = array();
	$placeHoldersdependencia_adm["Spanish"] = array();
	$pageTitlesdependencia_adm["Spanish"] = array();
	$fieldLabelsdependencia_adm["Spanish"]["id"] = "Código dependencia";
	$fieldToolTipsdependencia_adm["Spanish"]["id"] = "";
	$placeHoldersdependencia_adm["Spanish"]["id"] = "";
	$fieldLabelsdependencia_adm["Spanish"]["nombre"] = "Nombre dependencia";
	$fieldToolTipsdependencia_adm["Spanish"]["nombre"] = "";
	$placeHoldersdependencia_adm["Spanish"]["nombre"] = "";
	$fieldLabelsdependencia_adm["Spanish"]["estado"] = "¿Activa?";
	$fieldToolTipsdependencia_adm["Spanish"]["estado"] = "";
	$placeHoldersdependencia_adm["Spanish"]["estado"] = "";
	$fieldLabelsdependencia_adm["Spanish"]["id_depto_superior"] = "Despacho | Dirección";
	$fieldToolTipsdependencia_adm["Spanish"]["id_depto_superior"] = "";
	$placeHoldersdependencia_adm["Spanish"]["id_depto_superior"] = "";
	$fieldLabelsdependencia_adm["Spanish"]["proceso"] = "Proceso";
	$fieldToolTipsdependencia_adm["Spanish"]["proceso"] = "";
	$placeHoldersdependencia_adm["Spanish"]["proceso"] = "";
	if (count($fieldToolTipsdependencia_adm["Spanish"]))
		$tdatadependencia_adm[".isUseToolTips"] = true;
}


	$tdatadependencia_adm[".NCSearch"] = true;



$tdatadependencia_adm[".shortTableName"] = "dependencia_adm";
$tdatadependencia_adm[".nSecOptions"] = 0;

$tdatadependencia_adm[".mainTableOwnerID"] = "";
$tdatadependencia_adm[".entityType"] = 1;
$tdatadependencia_adm[".connId"] = "edl_at_127_0_0_1";


$tdatadependencia_adm[".strOriginalTableName"] = "dependencia";

	



$tdatadependencia_adm[".showAddInPopup"] = false;

$tdatadependencia_adm[".showEditInPopup"] = false;

$tdatadependencia_adm[".showViewInPopup"] = false;

$tdatadependencia_adm[".listAjax"] = false;
//	temporary
//$tdatadependencia_adm[".listAjax"] = false;

	$tdatadependencia_adm[".audit"] = true;

	$tdatadependencia_adm[".locking"] = true;


$pages = $tdatadependencia_adm[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatadependencia_adm[".edit"] = true;
	$tdatadependencia_adm[".afterEditAction"] = 0;
	$tdatadependencia_adm[".closePopupAfterEdit"] = 1;
	$tdatadependencia_adm[".afterEditActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_ADD] ) {
$tdatadependencia_adm[".add"] = true;
$tdatadependencia_adm[".afterAddAction"] = 0;
$tdatadependencia_adm[".closePopupAfterAdd"] = 1;
$tdatadependencia_adm[".afterAddActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_LIST] ) {
	$tdatadependencia_adm[".list"] = true;
}



$tdatadependencia_adm[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatadependencia_adm[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatadependencia_adm[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatadependencia_adm[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatadependencia_adm[".printFriendly"] = true;
}



$tdatadependencia_adm[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatadependencia_adm[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatadependencia_adm[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatadependencia_adm[".isUseAjaxSuggest"] = true;



																																																																																										

$tdatadependencia_adm[".ajaxCodeSnippetAdded"] = false;

$tdatadependencia_adm[".buttonsAdded"] = false;

$tdatadependencia_adm[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadependencia_adm[".isUseTimeForSearch"] = false;


$tdatadependencia_adm[".badgeColor"] = "cd5c5c";


$tdatadependencia_adm[".allSearchFields"] = array();
$tdatadependencia_adm[".filterFields"] = array();
$tdatadependencia_adm[".requiredSearchFields"] = array();

$tdatadependencia_adm[".googleLikeFields"] = array();
$tdatadependencia_adm[".googleLikeFields"][] = "id";
$tdatadependencia_adm[".googleLikeFields"][] = "nombre";
$tdatadependencia_adm[".googleLikeFields"][] = "estado";
$tdatadependencia_adm[".googleLikeFields"][] = "id_depto_superior";
$tdatadependencia_adm[".googleLikeFields"][] = "proceso";



$tdatadependencia_adm[".tableType"] = "list";

$tdatadependencia_adm[".printerPageOrientation"] = 0;
$tdatadependencia_adm[".nPrinterPageScale"] = 100;

$tdatadependencia_adm[".nPrinterSplitRecords"] = 40;

$tdatadependencia_adm[".geocodingEnabled"] = false;










$tdatadependencia_adm[".pageSize"] = 20;

$tdatadependencia_adm[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatadependencia_adm[".strOrderBy"] = $tstrOrderBy;

$tdatadependencia_adm[".orderindexes"] = array();


$tdatadependencia_adm[".sqlHead"] = "SELECT id,  	nombre,  	estado,  	id_depto_superior,  	proceso";
$tdatadependencia_adm[".sqlFrom"] = "FROM dependencia";
$tdatadependencia_adm[".sqlWhereExpr"] = "";
$tdatadependencia_adm[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadependencia_adm[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadependencia_adm[".arrGroupsPerPage"] = $arrGPP;

$tdatadependencia_adm[".highlightSearchResults"] = true;

$tableKeysdependencia_adm = array();
$tableKeysdependencia_adm[] = "id";
$tdatadependencia_adm[".Keys"] = $tableKeysdependencia_adm;


$tdatadependencia_adm[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "dependencia";
	$fdata["Label"] = GetFieldLabel("dependencia_adm","id");
	$fdata["FieldType"] = 3;


	
	
			

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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "dependencias_sup_adm";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_depto_superior";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Departamento_superior";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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
		$fdata["defaultSearchOption"] = "Equals";

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


	$tdatadependencia_adm["id"] = $fdata;
		$tdatadependencia_adm[".searchableFields"][] = "id";
//	nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "nombre";
	$fdata["GoodName"] = "nombre";
	$fdata["ownerTable"] = "dependencia";
	$fdata["Label"] = GetFieldLabel("dependencia_adm","nombre");
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


	$tdatadependencia_adm["nombre"] = $fdata;
		$tdatadependencia_adm[".searchableFields"][] = "nombre";
//	estado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "estado";
	$fdata["GoodName"] = "estado";
	$fdata["ownerTable"] = "dependencia";
	$fdata["Label"] = GetFieldLabel("dependencia_adm","estado");
	$fdata["FieldType"] = 20;


	
	
			

		$fdata["strField"] = "estado";

		$fdata["sourceSingle"] = "estado";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "estado";

	
	
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
	$edata["LookupTable"] = "tparam_sn";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 4;

		$edata["HorizontalLookup"] = true;

		
	$edata["LinkField"] = "estadosn_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "estadosn_name";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
	
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
		$fdata["defaultSearchOption"] = "Equals";

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


	$tdatadependencia_adm["estado"] = $fdata;
		$tdatadependencia_adm[".searchableFields"][] = "estado";
//	id_depto_superior
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "id_depto_superior";
	$fdata["GoodName"] = "id_depto_superior";
	$fdata["ownerTable"] = "dependencia";
	$fdata["Label"] = GetFieldLabel("dependencia_adm","id_depto_superior");
	$fdata["FieldType"] = 3;


	
	
			

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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "dependencias_001";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_depto_superior";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "Departamento_superior";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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
		$fdata["defaultSearchOption"] = "Equals";

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


	$tdatadependencia_adm["id_depto_superior"] = $fdata;
		$tdatadependencia_adm[".searchableFields"][] = "id_depto_superior";
//	proceso
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "proceso";
	$fdata["GoodName"] = "proceso";
	$fdata["ownerTable"] = "dependencia";
	$fdata["Label"] = GetFieldLabel("dependencia_adm","proceso");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "proceso";

		$fdata["sourceSingle"] = "proceso";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "proceso";

	
	
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
			$edata["EditParams"].= " maxlength=300";

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


	$tdatadependencia_adm["proceso"] = $fdata;
		$tdatadependencia_adm[".searchableFields"][] = "proceso";


$tables_data["dependencia_adm"]=&$tdatadependencia_adm;
$field_labels["dependencia_adm"] = &$fieldLabelsdependencia_adm;
$fieldToolTips["dependencia_adm"] = &$fieldToolTipsdependencia_adm;
$placeHolders["dependencia_adm"] = &$placeHoldersdependencia_adm;
$page_titles["dependencia_adm"] = &$pageTitlesdependencia_adm;


changeTextControlsToDate( "dependencia_adm" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dependencia_adm"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dependencia_adm"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="dependencias_001";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="dependencias_sup_adm";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "dependencias_sup_adm";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["dependencia_adm"][0] = $masterParams;
				$masterTablesData["dependencia_adm"][0]["masterKeys"] = array();
	$masterTablesData["dependencia_adm"][0]["masterKeys"][]="id_depto_superior";
				$masterTablesData["dependencia_adm"][0]["detailKeys"] = array();
	$masterTablesData["dependencia_adm"][0]["detailKeys"][]="id_depto_superior";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_dependencia_adm()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	nombre,  	estado,  	id_depto_superior,  	proceso";
$proto0["m_strFrom"] = "FROM dependencia";
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
	"m_strTable" => "dependencia",
	"m_srcTableName" => "dependencia_adm"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "dependencia_adm";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre",
	"m_strTable" => "dependencia",
	"m_srcTableName" => "dependencia_adm"
));

$proto8["m_sql"] = "nombre";
$proto8["m_srcTableName"] = "dependencia_adm";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "estado",
	"m_strTable" => "dependencia",
	"m_srcTableName" => "dependencia_adm"
));

$proto10["m_sql"] = "estado";
$proto10["m_srcTableName"] = "dependencia_adm";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "id_depto_superior",
	"m_strTable" => "dependencia",
	"m_srcTableName" => "dependencia_adm"
));

$proto12["m_sql"] = "id_depto_superior";
$proto12["m_srcTableName"] = "dependencia_adm";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "proceso",
	"m_strTable" => "dependencia",
	"m_srcTableName" => "dependencia_adm"
));

$proto14["m_sql"] = "proceso";
$proto14["m_srcTableName"] = "dependencia_adm";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "dependencia";
$proto17["m_srcTableName"] = "dependencia_adm";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "id";
$proto17["m_columns"][] = "nombre";
$proto17["m_columns"][] = "estado";
$proto17["m_columns"][] = "id_depto_superior";
$proto17["m_columns"][] = "proceso";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "dependencia";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "dependencia_adm";
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
$proto0["m_srcTableName"]="dependencia_adm";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_dependencia_adm = createSqlQuery_dependencia_adm();


	
				;

					

$tdatadependencia_adm[".sqlquery"] = $queryData_dependencia_adm;



$tdatadependencia_adm[".hasEvents"] = false;

?>