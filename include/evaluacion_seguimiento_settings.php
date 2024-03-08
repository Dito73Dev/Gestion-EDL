<?php
$tdataevaluacion_seguimiento = array();
$tdataevaluacion_seguimiento[".searchableFields"] = array();
$tdataevaluacion_seguimiento[".ShortName"] = "evaluacion_seguimiento";
$tdataevaluacion_seguimiento[".OwnerID"] = "";
$tdataevaluacion_seguimiento[".OriginalTable"] = "evaluacion_seguimiento";


$tdataevaluacion_seguimiento[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataevaluacion_seguimiento[".originalPagesByType"] = $tdataevaluacion_seguimiento[".pagesByType"];
$tdataevaluacion_seguimiento[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataevaluacion_seguimiento[".originalPages"] = $tdataevaluacion_seguimiento[".pages"];
$tdataevaluacion_seguimiento[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataevaluacion_seguimiento[".originalDefaultPages"] = $tdataevaluacion_seguimiento[".defaultPages"];

//	field labels
$fieldLabelsevaluacion_seguimiento = array();
$fieldToolTipsevaluacion_seguimiento = array();
$pageTitlesevaluacion_seguimiento = array();
$placeHoldersevaluacion_seguimiento = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsevaluacion_seguimiento["Spanish"] = array();
	$fieldToolTipsevaluacion_seguimiento["Spanish"] = array();
	$placeHoldersevaluacion_seguimiento["Spanish"] = array();
	$pageTitlesevaluacion_seguimiento["Spanish"] = array();
	$fieldLabelsevaluacion_seguimiento["Spanish"]["evalseg_fun_id"] = "Evalseg Fun Id";
	$fieldToolTipsevaluacion_seguimiento["Spanish"]["evalseg_fun_id"] = "";
	$placeHoldersevaluacion_seguimiento["Spanish"]["evalseg_fun_id"] = "";
	$fieldLabelsevaluacion_seguimiento["Spanish"]["id_radicado_fk"] = "Id Radicado Fk";
	$fieldToolTipsevaluacion_seguimiento["Spanish"]["id_radicado_fk"] = "";
	$placeHoldersevaluacion_seguimiento["Spanish"]["id_radicado_fk"] = "";
	$fieldLabelsevaluacion_seguimiento["Spanish"]["logros"] = "Logros";
	$fieldToolTipsevaluacion_seguimiento["Spanish"]["logros"] = "";
	$placeHoldersevaluacion_seguimiento["Spanish"]["logros"] = "";
	$fieldLabelsevaluacion_seguimiento["Spanish"]["debilidades"] = "Debilidades";
	$fieldToolTipsevaluacion_seguimiento["Spanish"]["debilidades"] = "";
	$placeHoldersevaluacion_seguimiento["Spanish"]["debilidades"] = "";
	$fieldLabelsevaluacion_seguimiento["Spanish"]["recomendaciones"] = "Recomendaciones";
	$fieldToolTipsevaluacion_seguimiento["Spanish"]["recomendaciones"] = "";
	$placeHoldersevaluacion_seguimiento["Spanish"]["recomendaciones"] = "";
	$fieldLabelsevaluacion_seguimiento["Spanish"]["SysLastUpd"] = "Fecha registro";
	$fieldToolTipsevaluacion_seguimiento["Spanish"]["SysLastUpd"] = "";
	$placeHoldersevaluacion_seguimiento["Spanish"]["SysLastUpd"] = "";
	$fieldLabelsevaluacion_seguimiento["Spanish"]["SysUser"] = "Registrado por";
	$fieldToolTipsevaluacion_seguimiento["Spanish"]["SysUser"] = "";
	$placeHoldersevaluacion_seguimiento["Spanish"]["SysUser"] = "";
	if (count($fieldToolTipsevaluacion_seguimiento["Spanish"]))
		$tdataevaluacion_seguimiento[".isUseToolTips"] = true;
}


	$tdataevaluacion_seguimiento[".NCSearch"] = true;



$tdataevaluacion_seguimiento[".shortTableName"] = "evaluacion_seguimiento";
$tdataevaluacion_seguimiento[".nSecOptions"] = 0;

$tdataevaluacion_seguimiento[".mainTableOwnerID"] = "";
$tdataevaluacion_seguimiento[".entityType"] = 0;
$tdataevaluacion_seguimiento[".connId"] = "edl2_at_127_0_0_1";


$tdataevaluacion_seguimiento[".strOriginalTableName"] = "evaluacion_seguimiento";

	



$tdataevaluacion_seguimiento[".showAddInPopup"] = false;

$tdataevaluacion_seguimiento[".showEditInPopup"] = false;

$tdataevaluacion_seguimiento[".showViewInPopup"] = false;

$tdataevaluacion_seguimiento[".listAjax"] = false;
//	temporary
//$tdataevaluacion_seguimiento[".listAjax"] = false;

	$tdataevaluacion_seguimiento[".audit"] = true;

	$tdataevaluacion_seguimiento[".locking"] = true;


$pages = $tdataevaluacion_seguimiento[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataevaluacion_seguimiento[".edit"] = true;
	$tdataevaluacion_seguimiento[".afterEditAction"] = 0;
	$tdataevaluacion_seguimiento[".closePopupAfterEdit"] = 1;
	$tdataevaluacion_seguimiento[".afterEditActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_ADD] ) {
$tdataevaluacion_seguimiento[".add"] = true;
$tdataevaluacion_seguimiento[".afterAddAction"] = 0;
$tdataevaluacion_seguimiento[".closePopupAfterAdd"] = 1;
$tdataevaluacion_seguimiento[".afterAddActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_LIST] ) {
	$tdataevaluacion_seguimiento[".list"] = true;
}



$tdataevaluacion_seguimiento[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataevaluacion_seguimiento[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataevaluacion_seguimiento[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataevaluacion_seguimiento[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataevaluacion_seguimiento[".printFriendly"] = true;
}



$tdataevaluacion_seguimiento[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataevaluacion_seguimiento[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataevaluacion_seguimiento[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataevaluacion_seguimiento[".isUseAjaxSuggest"] = true;



																																																																																										

$tdataevaluacion_seguimiento[".ajaxCodeSnippetAdded"] = false;

$tdataevaluacion_seguimiento[".buttonsAdded"] = false;

$tdataevaluacion_seguimiento[".addPageEvents"] = false;

// use timepicker for search panel
$tdataevaluacion_seguimiento[".isUseTimeForSearch"] = false;


$tdataevaluacion_seguimiento[".badgeColor"] = "5f9ea0";


$tdataevaluacion_seguimiento[".allSearchFields"] = array();
$tdataevaluacion_seguimiento[".filterFields"] = array();
$tdataevaluacion_seguimiento[".requiredSearchFields"] = array();

$tdataevaluacion_seguimiento[".googleLikeFields"] = array();
$tdataevaluacion_seguimiento[".googleLikeFields"][] = "evalseg_fun_id";
$tdataevaluacion_seguimiento[".googleLikeFields"][] = "id_radicado_fk";
$tdataevaluacion_seguimiento[".googleLikeFields"][] = "logros";
$tdataevaluacion_seguimiento[".googleLikeFields"][] = "debilidades";
$tdataevaluacion_seguimiento[".googleLikeFields"][] = "recomendaciones";
$tdataevaluacion_seguimiento[".googleLikeFields"][] = "SysLastUpd";
$tdataevaluacion_seguimiento[".googleLikeFields"][] = "SysUser";



$tdataevaluacion_seguimiento[".tableType"] = "list";

$tdataevaluacion_seguimiento[".printerPageOrientation"] = 0;
$tdataevaluacion_seguimiento[".nPrinterPageScale"] = 100;

$tdataevaluacion_seguimiento[".nPrinterSplitRecords"] = 40;

$tdataevaluacion_seguimiento[".geocodingEnabled"] = false;










$tdataevaluacion_seguimiento[".pageSize"] = 20;

$tdataevaluacion_seguimiento[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataevaluacion_seguimiento[".strOrderBy"] = $tstrOrderBy;

$tdataevaluacion_seguimiento[".orderindexes"] = array();


$tdataevaluacion_seguimiento[".sqlHead"] = "SELECT evalseg_fun_id,  id_radicado_fk,  logros,  debilidades,  recomendaciones,  SysLastUpd,  SysUser";
$tdataevaluacion_seguimiento[".sqlFrom"] = "FROM evaluacion_seguimiento";
$tdataevaluacion_seguimiento[".sqlWhereExpr"] = "";
$tdataevaluacion_seguimiento[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataevaluacion_seguimiento[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataevaluacion_seguimiento[".arrGroupsPerPage"] = $arrGPP;

$tdataevaluacion_seguimiento[".highlightSearchResults"] = true;

$tableKeysevaluacion_seguimiento = array();
$tableKeysevaluacion_seguimiento[] = "evalseg_fun_id";
$tdataevaluacion_seguimiento[".Keys"] = $tableKeysevaluacion_seguimiento;


$tdataevaluacion_seguimiento[".hideMobileList"] = array();




//	evalseg_fun_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "evalseg_fun_id";
	$fdata["GoodName"] = "evalseg_fun_id";
	$fdata["ownerTable"] = "evaluacion_seguimiento";
	$fdata["Label"] = GetFieldLabel("evaluacion_seguimiento","evalseg_fun_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "evalseg_fun_id";

		$fdata["sourceSingle"] = "evalseg_fun_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "evalseg_fun_id";

	
	
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


	$tdataevaluacion_seguimiento["evalseg_fun_id"] = $fdata;
		$tdataevaluacion_seguimiento[".searchableFields"][] = "evalseg_fun_id";
//	id_radicado_fk
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "id_radicado_fk";
	$fdata["GoodName"] = "id_radicado_fk";
	$fdata["ownerTable"] = "evaluacion_seguimiento";
	$fdata["Label"] = GetFieldLabel("evaluacion_seguimiento","id_radicado_fk");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "id_radicado_fk";

		$fdata["sourceSingle"] = "id_radicado_fk";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_radicado_fk";

	
	
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
	$edata["LookupTable"] = "evaluacion";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "email_not_cierre";

	

	
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


	$tdataevaluacion_seguimiento["id_radicado_fk"] = $fdata;
		$tdataevaluacion_seguimiento[".searchableFields"][] = "id_radicado_fk";
//	logros
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "logros";
	$fdata["GoodName"] = "logros";
	$fdata["ownerTable"] = "evaluacion_seguimiento";
	$fdata["Label"] = GetFieldLabel("evaluacion_seguimiento","logros");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "logros";

		$fdata["sourceSingle"] = "logros";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "logros";

	
	
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

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
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


	$tdataevaluacion_seguimiento["logros"] = $fdata;
		$tdataevaluacion_seguimiento[".searchableFields"][] = "logros";
//	debilidades
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "debilidades";
	$fdata["GoodName"] = "debilidades";
	$fdata["ownerTable"] = "evaluacion_seguimiento";
	$fdata["Label"] = GetFieldLabel("evaluacion_seguimiento","debilidades");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "debilidades";

		$fdata["sourceSingle"] = "debilidades";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "debilidades";

	
	
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

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
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


	$tdataevaluacion_seguimiento["debilidades"] = $fdata;
		$tdataevaluacion_seguimiento[".searchableFields"][] = "debilidades";
//	recomendaciones
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "recomendaciones";
	$fdata["GoodName"] = "recomendaciones";
	$fdata["ownerTable"] = "evaluacion_seguimiento";
	$fdata["Label"] = GetFieldLabel("evaluacion_seguimiento","recomendaciones");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "recomendaciones";

		$fdata["sourceSingle"] = "recomendaciones";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "recomendaciones";

	
	
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

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
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


	$tdataevaluacion_seguimiento["recomendaciones"] = $fdata;
		$tdataevaluacion_seguimiento[".searchableFields"][] = "recomendaciones";
//	SysLastUpd
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "SysLastUpd";
	$fdata["GoodName"] = "SysLastUpd";
	$fdata["ownerTable"] = "evaluacion_seguimiento";
	$fdata["Label"] = GetFieldLabel("evaluacion_seguimiento","SysLastUpd");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "SysLastUpd";

		$fdata["sourceSingle"] = "SysLastUpd";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SysLastUpd";

	
	
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


	$tdataevaluacion_seguimiento["SysLastUpd"] = $fdata;
		$tdataevaluacion_seguimiento[".searchableFields"][] = "SysLastUpd";
//	SysUser
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "SysUser";
	$fdata["GoodName"] = "SysUser";
	$fdata["ownerTable"] = "evaluacion_seguimiento";
	$fdata["Label"] = GetFieldLabel("evaluacion_seguimiento","SysUser");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "SysUser";

		$fdata["sourceSingle"] = "SysUser";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SysUser";

	
	
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

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
		$edata["autoUpdatable"] = true;

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


	$tdataevaluacion_seguimiento["SysUser"] = $fdata;
		$tdataevaluacion_seguimiento[".searchableFields"][] = "SysUser";


$tables_data["evaluacion_seguimiento"]=&$tdataevaluacion_seguimiento;
$field_labels["evaluacion_seguimiento"] = &$fieldLabelsevaluacion_seguimiento;
$fieldToolTips["evaluacion_seguimiento"] = &$fieldToolTipsevaluacion_seguimiento;
$placeHolders["evaluacion_seguimiento"] = &$placeHoldersevaluacion_seguimiento;
$page_titles["evaluacion_seguimiento"] = &$pageTitlesevaluacion_seguimiento;


changeTextControlsToDate( "evaluacion_seguimiento" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["evaluacion_seguimiento"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["evaluacion_seguimiento"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="evaluacion";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="concertacion_po_3s";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "concertacion_po_3s";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["evaluacion_seguimiento"][0] = $masterParams;
				$masterTablesData["evaluacion_seguimiento"][0]["masterKeys"] = array();
	$masterTablesData["evaluacion_seguimiento"][0]["masterKeys"][]="id";
				$masterTablesData["evaluacion_seguimiento"][0]["detailKeys"] = array();
	$masterTablesData["evaluacion_seguimiento"][0]["detailKeys"][]="id_radicado_fk";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_evaluacion_seguimiento()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "evalseg_fun_id,  id_radicado_fk,  logros,  debilidades,  recomendaciones,  SysLastUpd,  SysUser";
$proto0["m_strFrom"] = "FROM evaluacion_seguimiento";
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
	"m_strName" => "evalseg_fun_id",
	"m_strTable" => "evaluacion_seguimiento",
	"m_srcTableName" => "evaluacion_seguimiento"
));

$proto6["m_sql"] = "evalseg_fun_id";
$proto6["m_srcTableName"] = "evaluacion_seguimiento";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "id_radicado_fk",
	"m_strTable" => "evaluacion_seguimiento",
	"m_srcTableName" => "evaluacion_seguimiento"
));

$proto8["m_sql"] = "id_radicado_fk";
$proto8["m_srcTableName"] = "evaluacion_seguimiento";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "logros",
	"m_strTable" => "evaluacion_seguimiento",
	"m_srcTableName" => "evaluacion_seguimiento"
));

$proto10["m_sql"] = "logros";
$proto10["m_srcTableName"] = "evaluacion_seguimiento";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "debilidades",
	"m_strTable" => "evaluacion_seguimiento",
	"m_srcTableName" => "evaluacion_seguimiento"
));

$proto12["m_sql"] = "debilidades";
$proto12["m_srcTableName"] = "evaluacion_seguimiento";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "recomendaciones",
	"m_strTable" => "evaluacion_seguimiento",
	"m_srcTableName" => "evaluacion_seguimiento"
));

$proto14["m_sql"] = "recomendaciones";
$proto14["m_srcTableName"] = "evaluacion_seguimiento";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "SysLastUpd",
	"m_strTable" => "evaluacion_seguimiento",
	"m_srcTableName" => "evaluacion_seguimiento"
));

$proto16["m_sql"] = "SysLastUpd";
$proto16["m_srcTableName"] = "evaluacion_seguimiento";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "SysUser",
	"m_strTable" => "evaluacion_seguimiento",
	"m_srcTableName" => "evaluacion_seguimiento"
));

$proto18["m_sql"] = "SysUser";
$proto18["m_srcTableName"] = "evaluacion_seguimiento";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "evaluacion_seguimiento";
$proto21["m_srcTableName"] = "evaluacion_seguimiento";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "evalseg_fun_id";
$proto21["m_columns"][] = "id_radicado_fk";
$proto21["m_columns"][] = "eval_funcional_id";
$proto21["m_columns"][] = "logros";
$proto21["m_columns"][] = "debilidades";
$proto21["m_columns"][] = "recomendaciones";
$proto21["m_columns"][] = "SysLastUpd";
$proto21["m_columns"][] = "SysUser";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "evaluacion_seguimiento";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "evaluacion_seguimiento";
$proto22=array();
$proto22["m_sql"] = "";
$proto22["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto22["m_column"]=$obj;
$proto22["m_contained"] = array();
$proto22["m_strCase"] = "";
$proto22["m_havingmode"] = false;
$proto22["m_inBrackets"] = false;
$proto22["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto22);

$proto20["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto20);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="evaluacion_seguimiento";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_evaluacion_seguimiento = createSqlQuery_evaluacion_seguimiento();


	
				;

							

$tdataevaluacion_seguimiento[".sqlquery"] = $queryData_evaluacion_seguimiento;



$tdataevaluacion_seguimiento[".hasEvents"] = false;

?>