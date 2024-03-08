<?php
$tdatacargo_adm = array();
$tdatacargo_adm[".searchableFields"] = array();
$tdatacargo_adm[".ShortName"] = "cargo_adm";
$tdatacargo_adm[".OwnerID"] = "";
$tdatacargo_adm[".OriginalTable"] = "cargo";


$tdatacargo_adm[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatacargo_adm[".originalPagesByType"] = $tdatacargo_adm[".pagesByType"];
$tdatacargo_adm[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatacargo_adm[".originalPages"] = $tdatacargo_adm[".pages"];
$tdatacargo_adm[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatacargo_adm[".originalDefaultPages"] = $tdatacargo_adm[".defaultPages"];

//	field labels
$fieldLabelscargo_adm = array();
$fieldToolTipscargo_adm = array();
$pageTitlescargo_adm = array();
$placeHolderscargo_adm = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscargo_adm["Spanish"] = array();
	$fieldToolTipscargo_adm["Spanish"] = array();
	$placeHolderscargo_adm["Spanish"] = array();
	$pageTitlescargo_adm["Spanish"] = array();
	$fieldLabelscargo_adm["Spanish"]["id"] = "Código interno";
	$fieldToolTipscargo_adm["Spanish"]["id"] = "";
	$placeHolderscargo_adm["Spanish"]["id"] = "";
	$fieldLabelscargo_adm["Spanish"]["nombre"] = "Nombre";
	$fieldToolTipscargo_adm["Spanish"]["nombre"] = "";
	$placeHolderscargo_adm["Spanish"]["nombre"] = "";
	$fieldLabelscargo_adm["Spanish"]["cargo"] = "Cargo";
	$fieldToolTipscargo_adm["Spanish"]["cargo"] = "";
	$placeHolderscargo_adm["Spanish"]["cargo"] = "";
	$fieldLabelscargo_adm["Spanish"]["grado"] = "Grado";
	$fieldToolTipscargo_adm["Spanish"]["grado"] = "";
	$placeHolderscargo_adm["Spanish"]["grado"] = "";
	$fieldLabelscargo_adm["Spanish"]["estado"] = "Estado";
	$fieldToolTipscargo_adm["Spanish"]["estado"] = "";
	$placeHolderscargo_adm["Spanish"]["estado"] = "";
	$fieldLabelscargo_adm["Spanish"]["propositoPrincipal"] = "Proposito Principal";
	$fieldToolTipscargo_adm["Spanish"]["propositoPrincipal"] = "";
	$placeHolderscargo_adm["Spanish"]["propositoPrincipal"] = "";
	$fieldLabelscargo_adm["Spanish"]["codcar"] = "Codcar";
	$fieldToolTipscargo_adm["Spanish"]["codcar"] = "";
	$placeHolderscargo_adm["Spanish"]["codcar"] = "";
	$fieldLabelscargo_adm["Spanish"]["idComportamentalFK"] = "Competencia";
	$fieldToolTipscargo_adm["Spanish"]["idComportamentalFK"] = "";
	$placeHolderscargo_adm["Spanish"]["idComportamentalFK"] = "";
	$fieldLabelscargo_adm["Spanish"]["ExperienciaMeses"] = "Experiencia Meses";
	$fieldToolTipscargo_adm["Spanish"]["ExperienciaMeses"] = "";
	$placeHolderscargo_adm["Spanish"]["ExperienciaMeses"] = "";
	$fieldLabelscargo_adm["Spanish"]["Directivo"] = "Nivel directivo?";
	$fieldToolTipscargo_adm["Spanish"]["Directivo"] = "";
	$placeHolderscargo_adm["Spanish"]["Directivo"] = "";
	if (count($fieldToolTipscargo_adm["Spanish"]))
		$tdatacargo_adm[".isUseToolTips"] = true;
}


	$tdatacargo_adm[".NCSearch"] = true;



$tdatacargo_adm[".shortTableName"] = "cargo_adm";
$tdatacargo_adm[".nSecOptions"] = 0;

$tdatacargo_adm[".mainTableOwnerID"] = "";
$tdatacargo_adm[".entityType"] = 1;
$tdatacargo_adm[".connId"] = "edl_at_127_0_0_1";


$tdatacargo_adm[".strOriginalTableName"] = "cargo";

	



$tdatacargo_adm[".showAddInPopup"] = false;

$tdatacargo_adm[".showEditInPopup"] = false;

$tdatacargo_adm[".showViewInPopup"] = false;

$tdatacargo_adm[".listAjax"] = false;
//	temporary
//$tdatacargo_adm[".listAjax"] = false;

	$tdatacargo_adm[".audit"] = true;

	$tdatacargo_adm[".locking"] = true;


$pages = $tdatacargo_adm[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacargo_adm[".edit"] = true;
	$tdatacargo_adm[".afterEditAction"] = 1;
	$tdatacargo_adm[".closePopupAfterEdit"] = 1;
	$tdatacargo_adm[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacargo_adm[".add"] = true;
$tdatacargo_adm[".afterAddAction"] = 1;
$tdatacargo_adm[".closePopupAfterAdd"] = 1;
$tdatacargo_adm[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacargo_adm[".list"] = true;
}



$tdatacargo_adm[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacargo_adm[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacargo_adm[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacargo_adm[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacargo_adm[".printFriendly"] = true;
}



$tdatacargo_adm[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacargo_adm[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacargo_adm[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacargo_adm[".isUseAjaxSuggest"] = true;



																																													

$tdatacargo_adm[".ajaxCodeSnippetAdded"] = false;

$tdatacargo_adm[".buttonsAdded"] = false;

$tdatacargo_adm[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacargo_adm[".isUseTimeForSearch"] = false;


$tdatacargo_adm[".badgeColor"] = "00C2C5";


$tdatacargo_adm[".allSearchFields"] = array();
$tdatacargo_adm[".filterFields"] = array();
$tdatacargo_adm[".requiredSearchFields"] = array();

$tdatacargo_adm[".googleLikeFields"] = array();
$tdatacargo_adm[".googleLikeFields"][] = "id";
$tdatacargo_adm[".googleLikeFields"][] = "nombre";
$tdatacargo_adm[".googleLikeFields"][] = "cargo";
$tdatacargo_adm[".googleLikeFields"][] = "grado";
$tdatacargo_adm[".googleLikeFields"][] = "estado";
$tdatacargo_adm[".googleLikeFields"][] = "propositoPrincipal";
$tdatacargo_adm[".googleLikeFields"][] = "codcar";
$tdatacargo_adm[".googleLikeFields"][] = "idComportamentalFK";
$tdatacargo_adm[".googleLikeFields"][] = "ExperienciaMeses";
$tdatacargo_adm[".googleLikeFields"][] = "Directivo";



$tdatacargo_adm[".tableType"] = "list";

$tdatacargo_adm[".printerPageOrientation"] = 0;
$tdatacargo_adm[".nPrinterPageScale"] = 100;

$tdatacargo_adm[".nPrinterSplitRecords"] = 40;

$tdatacargo_adm[".geocodingEnabled"] = false;




$tdatacargo_adm[".isDisplayLoading"] = true;






$tdatacargo_adm[".pageSize"] = 20;

$tdatacargo_adm[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacargo_adm[".strOrderBy"] = $tstrOrderBy;

$tdatacargo_adm[".orderindexes"] = array();


$tdatacargo_adm[".sqlHead"] = "SELECT id,  	nombre,  	cargo,  	grado,  	estado,  	propositoPrincipal,  	codcar,  	idComportamentalFK,  	ExperienciaMeses,  	Directivo";
$tdatacargo_adm[".sqlFrom"] = "FROM cargo";
$tdatacargo_adm[".sqlWhereExpr"] = "";
$tdatacargo_adm[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacargo_adm[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacargo_adm[".arrGroupsPerPage"] = $arrGPP;

$tdatacargo_adm[".highlightSearchResults"] = true;

$tableKeyscargo_adm = array();
$tableKeyscargo_adm[] = "id";
$tdatacargo_adm[".Keys"] = $tableKeyscargo_adm;


$tdatacargo_adm[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "cargo";
	$fdata["Label"] = GetFieldLabel("cargo_adm","id");
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


	$tdatacargo_adm["id"] = $fdata;
		$tdatacargo_adm[".searchableFields"][] = "id";
//	nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "nombre";
	$fdata["GoodName"] = "nombre";
	$fdata["ownerTable"] = "cargo";
	$fdata["Label"] = GetFieldLabel("cargo_adm","nombre");
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


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=45";

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


	$tdatacargo_adm["nombre"] = $fdata;
		$tdatacargo_adm[".searchableFields"][] = "nombre";
//	cargo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "cargo";
	$fdata["GoodName"] = "cargo";
	$fdata["ownerTable"] = "cargo";
	$fdata["Label"] = GetFieldLabel("cargo_adm","cargo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "cargo";

		$fdata["sourceSingle"] = "cargo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cargo";

	
	
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
			$edata["EditParams"].= " maxlength=6";

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


	$tdatacargo_adm["cargo"] = $fdata;
		$tdatacargo_adm[".searchableFields"][] = "cargo";
//	grado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "grado";
	$fdata["GoodName"] = "grado";
	$fdata["ownerTable"] = "cargo";
	$fdata["Label"] = GetFieldLabel("cargo_adm","grado");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "grado";

		$fdata["sourceSingle"] = "grado";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "grado";

	
	
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
			$edata["EditParams"].= " maxlength=2";

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


	$tdatacargo_adm["grado"] = $fdata;
		$tdatacargo_adm[".searchableFields"][] = "grado";
//	estado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "estado";
	$fdata["GoodName"] = "estado";
	$fdata["ownerTable"] = "cargo";
	$fdata["Label"] = GetFieldLabel("cargo_adm","estado");
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
	$edata["LookupTable"] = "tparam_estados";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 4;

		$edata["HorizontalLookup"] = true;

		
	$edata["LinkField"] = "estado_id";
	$edata["LinkFieldType"] = 16;
	$edata["DisplayField"] = "estado_name";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
	
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


	$tdatacargo_adm["estado"] = $fdata;
		$tdatacargo_adm[".searchableFields"][] = "estado";
//	propositoPrincipal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "propositoPrincipal";
	$fdata["GoodName"] = "propositoPrincipal";
	$fdata["ownerTable"] = "cargo";
	$fdata["Label"] = GetFieldLabel("cargo_adm","propositoPrincipal");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "propositoPrincipal";

		$fdata["sourceSingle"] = "propositoPrincipal";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "propositoPrincipal";

	
	
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


	$tdatacargo_adm["propositoPrincipal"] = $fdata;
		$tdatacargo_adm[".searchableFields"][] = "propositoPrincipal";
//	codcar
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "codcar";
	$fdata["GoodName"] = "codcar";
	$fdata["ownerTable"] = "cargo";
	$fdata["Label"] = GetFieldLabel("cargo_adm","codcar");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "codcar";

		$fdata["sourceSingle"] = "codcar";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "codcar";

	
	
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
			$edata["EditParams"].= " maxlength=15";

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


	$tdatacargo_adm["codcar"] = $fdata;
		$tdatacargo_adm[".searchableFields"][] = "codcar";
//	idComportamentalFK
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "idComportamentalFK";
	$fdata["GoodName"] = "idComportamentalFK";
	$fdata["ownerTable"] = "cargo";
	$fdata["Label"] = GetFieldLabel("cargo_adm","idComportamentalFK");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "idComportamentalFK";

		$fdata["sourceSingle"] = "idComportamentalFK";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "idComportamentalFK";

	
	
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


	$tdatacargo_adm["idComportamentalFK"] = $fdata;
		$tdatacargo_adm[".searchableFields"][] = "idComportamentalFK";
//	ExperienciaMeses
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "ExperienciaMeses";
	$fdata["GoodName"] = "ExperienciaMeses";
	$fdata["ownerTable"] = "cargo";
	$fdata["Label"] = GetFieldLabel("cargo_adm","ExperienciaMeses");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "ExperienciaMeses";

		$fdata["sourceSingle"] = "ExperienciaMeses";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ExperienciaMeses";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
	
	
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


	$tdatacargo_adm["ExperienciaMeses"] = $fdata;
		$tdatacargo_adm[".searchableFields"][] = "ExperienciaMeses";
//	Directivo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Directivo";
	$fdata["GoodName"] = "Directivo";
	$fdata["ownerTable"] = "cargo";
	$fdata["Label"] = GetFieldLabel("cargo_adm","Directivo");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "Directivo";

		$fdata["sourceSingle"] = "Directivo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Directivo";

	
	
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
	$edata["LinkFieldType"] = 16;
	$edata["DisplayField"] = "estadosn_name";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
	
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


	$tdatacargo_adm["Directivo"] = $fdata;
		$tdatacargo_adm[".searchableFields"][] = "Directivo";


$tables_data["cargo_adm"]=&$tdatacargo_adm;
$field_labels["cargo_adm"] = &$fieldLabelscargo_adm;
$fieldToolTips["cargo_adm"] = &$fieldToolTipscargo_adm;
$placeHolders["cargo_adm"] = &$placeHolderscargo_adm;
$page_titles["cargo_adm"] = &$pageTitlescargo_adm;


changeTextControlsToDate( "cargo_adm" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["cargo_adm"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["cargo_adm"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_cargo_adm()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	nombre,  	cargo,  	grado,  	estado,  	propositoPrincipal,  	codcar,  	idComportamentalFK,  	ExperienciaMeses,  	Directivo";
$proto0["m_strFrom"] = "FROM cargo";
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
	"m_strTable" => "cargo",
	"m_srcTableName" => "cargo_adm"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "cargo_adm";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre",
	"m_strTable" => "cargo",
	"m_srcTableName" => "cargo_adm"
));

$proto8["m_sql"] = "nombre";
$proto8["m_srcTableName"] = "cargo_adm";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "cargo",
	"m_strTable" => "cargo",
	"m_srcTableName" => "cargo_adm"
));

$proto10["m_sql"] = "cargo";
$proto10["m_srcTableName"] = "cargo_adm";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "grado",
	"m_strTable" => "cargo",
	"m_srcTableName" => "cargo_adm"
));

$proto12["m_sql"] = "grado";
$proto12["m_srcTableName"] = "cargo_adm";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "estado",
	"m_strTable" => "cargo",
	"m_srcTableName" => "cargo_adm"
));

$proto14["m_sql"] = "estado";
$proto14["m_srcTableName"] = "cargo_adm";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "propositoPrincipal",
	"m_strTable" => "cargo",
	"m_srcTableName" => "cargo_adm"
));

$proto16["m_sql"] = "propositoPrincipal";
$proto16["m_srcTableName"] = "cargo_adm";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "codcar",
	"m_strTable" => "cargo",
	"m_srcTableName" => "cargo_adm"
));

$proto18["m_sql"] = "codcar";
$proto18["m_srcTableName"] = "cargo_adm";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "idComportamentalFK",
	"m_strTable" => "cargo",
	"m_srcTableName" => "cargo_adm"
));

$proto20["m_sql"] = "idComportamentalFK";
$proto20["m_srcTableName"] = "cargo_adm";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "ExperienciaMeses",
	"m_strTable" => "cargo",
	"m_srcTableName" => "cargo_adm"
));

$proto22["m_sql"] = "ExperienciaMeses";
$proto22["m_srcTableName"] = "cargo_adm";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "Directivo",
	"m_strTable" => "cargo",
	"m_srcTableName" => "cargo_adm"
));

$proto24["m_sql"] = "Directivo";
$proto24["m_srcTableName"] = "cargo_adm";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto26=array();
$proto26["m_link"] = "SQLL_MAIN";
			$proto27=array();
$proto27["m_strName"] = "cargo";
$proto27["m_srcTableName"] = "cargo_adm";
$proto27["m_columns"] = array();
$proto27["m_columns"][] = "id";
$proto27["m_columns"][] = "nombre";
$proto27["m_columns"][] = "cargo";
$proto27["m_columns"][] = "grado";
$proto27["m_columns"][] = "estado";
$proto27["m_columns"][] = "propositoPrincipal";
$proto27["m_columns"][] = "codcar";
$proto27["m_columns"][] = "idComportamentalFK";
$proto27["m_columns"][] = "ExperienciaMeses";
$proto27["m_columns"][] = "Directivo";
$obj = new SQLTable($proto27);

$proto26["m_table"] = $obj;
$proto26["m_sql"] = "cargo";
$proto26["m_alias"] = "";
$proto26["m_srcTableName"] = "cargo_adm";
$proto28=array();
$proto28["m_sql"] = "";
$proto28["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto28["m_column"]=$obj;
$proto28["m_contained"] = array();
$proto28["m_strCase"] = "";
$proto28["m_havingmode"] = false;
$proto28["m_inBrackets"] = false;
$proto28["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto28);

$proto26["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto26);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="cargo_adm";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_cargo_adm = createSqlQuery_cargo_adm();


	
				;

										

$tdatacargo_adm[".sqlquery"] = $queryData_cargo_adm;



$tdatacargo_adm[".hasEvents"] = false;

?>