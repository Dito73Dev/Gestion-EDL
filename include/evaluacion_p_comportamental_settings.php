<?php
$tdataevaluacion_p_comportamental = array();
$tdataevaluacion_p_comportamental[".searchableFields"] = array();
$tdataevaluacion_p_comportamental[".ShortName"] = "evaluacion_p_comportamental";
$tdataevaluacion_p_comportamental[".OwnerID"] = "";
$tdataevaluacion_p_comportamental[".OriginalTable"] = "evaluacion_p_comportamental";


$tdataevaluacion_p_comportamental[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataevaluacion_p_comportamental[".originalPagesByType"] = $tdataevaluacion_p_comportamental[".pagesByType"];
$tdataevaluacion_p_comportamental[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataevaluacion_p_comportamental[".originalPages"] = $tdataevaluacion_p_comportamental[".pages"];
$tdataevaluacion_p_comportamental[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataevaluacion_p_comportamental[".originalDefaultPages"] = $tdataevaluacion_p_comportamental[".defaultPages"];

//	field labels
$fieldLabelsevaluacion_p_comportamental = array();
$fieldToolTipsevaluacion_p_comportamental = array();
$pageTitlesevaluacion_p_comportamental = array();
$placeHoldersevaluacion_p_comportamental = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsevaluacion_p_comportamental["Spanish"] = array();
	$fieldToolTipsevaluacion_p_comportamental["Spanish"] = array();
	$placeHoldersevaluacion_p_comportamental["Spanish"] = array();
	$pageTitlesevaluacion_p_comportamental["Spanish"] = array();
	$fieldLabelsevaluacion_p_comportamental["Spanish"]["evalcc_id"] = "Evalcc Id";
	$fieldToolTipsevaluacion_p_comportamental["Spanish"]["evalcc_id"] = "";
	$placeHoldersevaluacion_p_comportamental["Spanish"]["evalcc_id"] = "";
	$fieldLabelsevaluacion_p_comportamental["Spanish"]["id_eval_fk"] = "Id Eval Fk";
	$fieldToolTipsevaluacion_p_comportamental["Spanish"]["id_eval_fk"] = "";
	$placeHoldersevaluacion_p_comportamental["Spanish"]["id_eval_fk"] = "";
	$fieldLabelsevaluacion_p_comportamental["Spanish"]["evaluacion_p_id"] = "Evaluacion P Id";
	$fieldToolTipsevaluacion_p_comportamental["Spanish"]["evaluacion_p_id"] = "";
	$placeHoldersevaluacion_p_comportamental["Spanish"]["evaluacion_p_id"] = "";
	$fieldLabelsevaluacion_p_comportamental["Spanish"]["acuerdo_id"] = "Acuerdo Id";
	$fieldToolTipsevaluacion_p_comportamental["Spanish"]["acuerdo_id"] = "";
	$placeHoldersevaluacion_p_comportamental["Spanish"]["acuerdo_id"] = "";
	$fieldLabelsevaluacion_p_comportamental["Spanish"]["idComportamental"] = "Nivel";
	$fieldToolTipsevaluacion_p_comportamental["Spanish"]["idComportamental"] = "";
	$placeHoldersevaluacion_p_comportamental["Spanish"]["idComportamental"] = "";
	$fieldLabelsevaluacion_p_comportamental["Spanish"]["idCompetencia"] = "Competencia";
	$fieldToolTipsevaluacion_p_comportamental["Spanish"]["idCompetencia"] = "";
	$placeHoldersevaluacion_p_comportamental["Spanish"]["idCompetencia"] = "";
	$fieldLabelsevaluacion_p_comportamental["Spanish"]["idConducta"] = "Conducta";
	$fieldToolTipsevaluacion_p_comportamental["Spanish"]["idConducta"] = "";
	$placeHoldersevaluacion_p_comportamental["Spanish"]["idConducta"] = "";
	$fieldLabelsevaluacion_p_comportamental["Spanish"]["evalparfun_cal"] = "Calificación";
	$fieldToolTipsevaluacion_p_comportamental["Spanish"]["evalparfun_cal"] = "";
	$placeHoldersevaluacion_p_comportamental["Spanish"]["evalparfun_cal"] = "";
	$fieldLabelsevaluacion_p_comportamental["Spanish"]["SysLastUpd"] = "Sys Last Upd";
	$fieldToolTipsevaluacion_p_comportamental["Spanish"]["SysLastUpd"] = "";
	$placeHoldersevaluacion_p_comportamental["Spanish"]["SysLastUpd"] = "";
	$fieldLabelsevaluacion_p_comportamental["Spanish"]["sysst"] = "Estado";
	$fieldToolTipsevaluacion_p_comportamental["Spanish"]["sysst"] = "";
	$placeHoldersevaluacion_p_comportamental["Spanish"]["sysst"] = "";
	$fieldLabelsevaluacion_p_comportamental["Spanish"]["Evidencia"] = "Evidencia";
	$fieldToolTipsevaluacion_p_comportamental["Spanish"]["Evidencia"] = "";
	$placeHoldersevaluacion_p_comportamental["Spanish"]["Evidencia"] = "";
	if (count($fieldToolTipsevaluacion_p_comportamental["Spanish"]))
		$tdataevaluacion_p_comportamental[".isUseToolTips"] = true;
}


	$tdataevaluacion_p_comportamental[".NCSearch"] = true;



$tdataevaluacion_p_comportamental[".shortTableName"] = "evaluacion_p_comportamental";
$tdataevaluacion_p_comportamental[".nSecOptions"] = 0;

$tdataevaluacion_p_comportamental[".mainTableOwnerID"] = "";
$tdataevaluacion_p_comportamental[".entityType"] = 0;
$tdataevaluacion_p_comportamental[".connId"] = "edl2_at_127_0_0_1";


$tdataevaluacion_p_comportamental[".strOriginalTableName"] = "evaluacion_p_comportamental";

	



$tdataevaluacion_p_comportamental[".showAddInPopup"] = false;

$tdataevaluacion_p_comportamental[".showEditInPopup"] = false;

$tdataevaluacion_p_comportamental[".showViewInPopup"] = false;

$tdataevaluacion_p_comportamental[".listAjax"] = false;
//	temporary
//$tdataevaluacion_p_comportamental[".listAjax"] = false;

	$tdataevaluacion_p_comportamental[".audit"] = true;

	$tdataevaluacion_p_comportamental[".locking"] = true;


$pages = $tdataevaluacion_p_comportamental[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataevaluacion_p_comportamental[".edit"] = true;
	$tdataevaluacion_p_comportamental[".afterEditAction"] = 1;
	$tdataevaluacion_p_comportamental[".closePopupAfterEdit"] = 1;
	$tdataevaluacion_p_comportamental[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataevaluacion_p_comportamental[".add"] = true;
$tdataevaluacion_p_comportamental[".afterAddAction"] = 1;
$tdataevaluacion_p_comportamental[".closePopupAfterAdd"] = 1;
$tdataevaluacion_p_comportamental[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataevaluacion_p_comportamental[".list"] = true;
}



$tdataevaluacion_p_comportamental[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataevaluacion_p_comportamental[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataevaluacion_p_comportamental[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataevaluacion_p_comportamental[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataevaluacion_p_comportamental[".printFriendly"] = true;
}



$tdataevaluacion_p_comportamental[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataevaluacion_p_comportamental[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataevaluacion_p_comportamental[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataevaluacion_p_comportamental[".isUseAjaxSuggest"] = true;



																																																																																										

$tdataevaluacion_p_comportamental[".ajaxCodeSnippetAdded"] = false;

$tdataevaluacion_p_comportamental[".buttonsAdded"] = false;

$tdataevaluacion_p_comportamental[".addPageEvents"] = true;

// use timepicker for search panel
$tdataevaluacion_p_comportamental[".isUseTimeForSearch"] = false;


$tdataevaluacion_p_comportamental[".badgeColor"] = "2f4f4f";


$tdataevaluacion_p_comportamental[".allSearchFields"] = array();
$tdataevaluacion_p_comportamental[".filterFields"] = array();
$tdataevaluacion_p_comportamental[".requiredSearchFields"] = array();

$tdataevaluacion_p_comportamental[".googleLikeFields"] = array();
$tdataevaluacion_p_comportamental[".googleLikeFields"][] = "evalcc_id";
$tdataevaluacion_p_comportamental[".googleLikeFields"][] = "id_eval_fk";
$tdataevaluacion_p_comportamental[".googleLikeFields"][] = "evaluacion_p_id";
$tdataevaluacion_p_comportamental[".googleLikeFields"][] = "acuerdo_id";
$tdataevaluacion_p_comportamental[".googleLikeFields"][] = "idComportamental";
$tdataevaluacion_p_comportamental[".googleLikeFields"][] = "idCompetencia";
$tdataevaluacion_p_comportamental[".googleLikeFields"][] = "idConducta";
$tdataevaluacion_p_comportamental[".googleLikeFields"][] = "Evidencia";
$tdataevaluacion_p_comportamental[".googleLikeFields"][] = "evalparfun_cal";
$tdataevaluacion_p_comportamental[".googleLikeFields"][] = "SysLastUpd";
$tdataevaluacion_p_comportamental[".googleLikeFields"][] = "sysst";



$tdataevaluacion_p_comportamental[".tableType"] = "list";

$tdataevaluacion_p_comportamental[".printerPageOrientation"] = 0;
$tdataevaluacion_p_comportamental[".nPrinterPageScale"] = 100;

$tdataevaluacion_p_comportamental[".nPrinterSplitRecords"] = 40;

$tdataevaluacion_p_comportamental[".geocodingEnabled"] = false;










$tdataevaluacion_p_comportamental[".pageSize"] = 20;

$tdataevaluacion_p_comportamental[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataevaluacion_p_comportamental[".strOrderBy"] = $tstrOrderBy;

$tdataevaluacion_p_comportamental[".orderindexes"] = array();


$tdataevaluacion_p_comportamental[".sqlHead"] = "SELECT evalcc_id,  	id_eval_fk,  	evaluacion_p_id,  	acuerdo_id,  	idComportamental,  	idCompetencia,  	idConducta,  	Evidencia,  	evalparfun_cal,  	SysLastUpd,  	sysst";
$tdataevaluacion_p_comportamental[".sqlFrom"] = "FROM evaluacion_p_comportamental";
$tdataevaluacion_p_comportamental[".sqlWhereExpr"] = "";
$tdataevaluacion_p_comportamental[".sqlTail"] = "";

//fill array of tabs for list page
$arrGridTabs = array();
$arrGridTabs[] = array(
	'tabId' => "1",
	'name' => "Comunes",
	'nameType' => 'Text',
	'where' => "idComportamental = 6",
	'showRowCount' => 1,
	'hideEmpty' => 0,
);
$arrGridTabs[] = array(
	'tabId' => "2",
	'name' => "Jerarquicas",
	'nameType' => 'Text',
	'where' => "idComportamental <> 6",
	'showRowCount' => 1,
	'hideEmpty' => 0,
);
$tdataevaluacion_p_comportamental[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataevaluacion_p_comportamental[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataevaluacion_p_comportamental[".arrGroupsPerPage"] = $arrGPP;

$tdataevaluacion_p_comportamental[".highlightSearchResults"] = true;

$tableKeysevaluacion_p_comportamental = array();
$tableKeysevaluacion_p_comportamental[] = "evalcc_id";
$tdataevaluacion_p_comportamental[".Keys"] = $tableKeysevaluacion_p_comportamental;


$tdataevaluacion_p_comportamental[".hideMobileList"] = array();




//	evalcc_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "evalcc_id";
	$fdata["GoodName"] = "evalcc_id";
	$fdata["ownerTable"] = "evaluacion_p_comportamental";
	$fdata["Label"] = GetFieldLabel("evaluacion_p_comportamental","evalcc_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "evalcc_id";

		$fdata["sourceSingle"] = "evalcc_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "evalcc_id";

	
	
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


	$tdataevaluacion_p_comportamental["evalcc_id"] = $fdata;
		$tdataevaluacion_p_comportamental[".searchableFields"][] = "evalcc_id";
//	id_eval_fk
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "id_eval_fk";
	$fdata["GoodName"] = "id_eval_fk";
	$fdata["ownerTable"] = "evaluacion_p_comportamental";
	$fdata["Label"] = GetFieldLabel("evaluacion_p_comportamental","id_eval_fk");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "id_eval_fk";

		$fdata["sourceSingle"] = "id_eval_fk";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_eval_fk";

	
	
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
	$edata["LookupTable"] = "evaluacion_p";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "evaluacion_id_fk";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "evaluacion_id_fk";

	

	
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


	$tdataevaluacion_p_comportamental["id_eval_fk"] = $fdata;
		$tdataevaluacion_p_comportamental[".searchableFields"][] = "id_eval_fk";
//	evaluacion_p_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "evaluacion_p_id";
	$fdata["GoodName"] = "evaluacion_p_id";
	$fdata["ownerTable"] = "evaluacion_p_comportamental";
	$fdata["Label"] = GetFieldLabel("evaluacion_p_comportamental","evaluacion_p_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "evaluacion_p_id";

		$fdata["sourceSingle"] = "evaluacion_p_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "evaluacion_p_id";

	
	
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
	$edata["LookupTable"] = "evaluacion_p";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "evaluacion_p_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "evaluacion_p_id";

	

	
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


	$tdataevaluacion_p_comportamental["evaluacion_p_id"] = $fdata;
		$tdataevaluacion_p_comportamental[".searchableFields"][] = "evaluacion_p_id";
//	acuerdo_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "acuerdo_id";
	$fdata["GoodName"] = "acuerdo_id";
	$fdata["ownerTable"] = "evaluacion_p_comportamental";
	$fdata["Label"] = GetFieldLabel("evaluacion_p_comportamental","acuerdo_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "acuerdo_id";

		$fdata["sourceSingle"] = "acuerdo_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "acuerdo_id";

	
	
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


	$tdataevaluacion_p_comportamental["acuerdo_id"] = $fdata;
		$tdataevaluacion_p_comportamental[".searchableFields"][] = "acuerdo_id";
//	idComportamental
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "idComportamental";
	$fdata["GoodName"] = "idComportamental";
	$fdata["ownerTable"] = "evaluacion_p_comportamental";
	$fdata["Label"] = GetFieldLabel("evaluacion_p_comportamental","idComportamental");
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


	$tdataevaluacion_p_comportamental["idComportamental"] = $fdata;
		$tdataevaluacion_p_comportamental[".searchableFields"][] = "idComportamental";
//	idCompetencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "idCompetencia";
	$fdata["GoodName"] = "idCompetencia";
	$fdata["ownerTable"] = "evaluacion_p_comportamental";
	$fdata["Label"] = GetFieldLabel("evaluacion_p_comportamental","idCompetencia");
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


	$tdataevaluacion_p_comportamental["idCompetencia"] = $fdata;
		$tdataevaluacion_p_comportamental[".searchableFields"][] = "idCompetencia";
//	idConducta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "idConducta";
	$fdata["GoodName"] = "idConducta";
	$fdata["ownerTable"] = "evaluacion_p_comportamental";
	$fdata["Label"] = GetFieldLabel("evaluacion_p_comportamental","idConducta");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "idConducta";

		$fdata["sourceSingle"] = "idConducta";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "idConducta";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "conducta";
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


	$tdataevaluacion_p_comportamental["idConducta"] = $fdata;
		$tdataevaluacion_p_comportamental[".searchableFields"][] = "idConducta";
//	Evidencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Evidencia";
	$fdata["GoodName"] = "Evidencia";
	$fdata["ownerTable"] = "evaluacion_p_comportamental";
	$fdata["Label"] = GetFieldLabel("evaluacion_p_comportamental","Evidencia");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Evidencia";

		$fdata["sourceSingle"] = "Evidencia";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Evidencia";

	
	
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


	$tdataevaluacion_p_comportamental["Evidencia"] = $fdata;
		$tdataevaluacion_p_comportamental[".searchableFields"][] = "Evidencia";
//	evalparfun_cal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "evalparfun_cal";
	$fdata["GoodName"] = "evalparfun_cal";
	$fdata["ownerTable"] = "evaluacion_p_comportamental";
	$fdata["Label"] = GetFieldLabel("evaluacion_p_comportamental","evalparfun_cal");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "evalparfun_cal";

		$fdata["sourceSingle"] = "evalparfun_cal";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "evalparfun_cal";

	
	
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
	$edata["LookupTable"] = "tparam_puntaje";
		$edata["listPageId"] = "list";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "puntaje_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "puntaje_name";

	

	
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


	$tdataevaluacion_p_comportamental["evalparfun_cal"] = $fdata;
		$tdataevaluacion_p_comportamental[".searchableFields"][] = "evalparfun_cal";
//	SysLastUpd
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "SysLastUpd";
	$fdata["GoodName"] = "SysLastUpd";
	$fdata["ownerTable"] = "evaluacion_p_comportamental";
	$fdata["Label"] = GetFieldLabel("evaluacion_p_comportamental","SysLastUpd");
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


	$tdataevaluacion_p_comportamental["SysLastUpd"] = $fdata;
		$tdataevaluacion_p_comportamental[".searchableFields"][] = "SysLastUpd";
//	sysst
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "sysst";
	$fdata["GoodName"] = "sysst";
	$fdata["ownerTable"] = "evaluacion_p_comportamental";
	$fdata["Label"] = GetFieldLabel("evaluacion_p_comportamental","sysst");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "sysst";

		$fdata["sourceSingle"] = "sysst";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sysst";

	
	
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
	$edata["LookupTable"] = "tparam_estados_calificacion";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 4;

		$edata["HorizontalLookup"] = true;

		
	$edata["LinkField"] = "estadocal_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "estadocal_name";

	

	
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


	$tdataevaluacion_p_comportamental["sysst"] = $fdata;
		$tdataevaluacion_p_comportamental[".searchableFields"][] = "sysst";


$tables_data["evaluacion_p_comportamental"]=&$tdataevaluacion_p_comportamental;
$field_labels["evaluacion_p_comportamental"] = &$fieldLabelsevaluacion_p_comportamental;
$fieldToolTips["evaluacion_p_comportamental"] = &$fieldToolTipsevaluacion_p_comportamental;
$placeHolders["evaluacion_p_comportamental"] = &$placeHoldersevaluacion_p_comportamental;
$page_titles["evaluacion_p_comportamental"] = &$pageTitlesevaluacion_p_comportamental;


changeTextControlsToDate( "evaluacion_p_comportamental" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["evaluacion_p_comportamental"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["evaluacion_p_comportamental"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="evaluacion_p";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="evaluacion_po";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "evaluacion_po";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["evaluacion_p_comportamental"][0] = $masterParams;
				$masterTablesData["evaluacion_p_comportamental"][0]["masterKeys"] = array();
	$masterTablesData["evaluacion_p_comportamental"][0]["masterKeys"][]="evaluacion_p_id";
				$masterTablesData["evaluacion_p_comportamental"][0]["masterKeys"][]="evaluacion_id_fk";
				$masterTablesData["evaluacion_p_comportamental"][0]["detailKeys"] = array();
	$masterTablesData["evaluacion_p_comportamental"][0]["detailKeys"][]="evaluacion_p_id";
				$masterTablesData["evaluacion_p_comportamental"][0]["detailKeys"][]="id_eval_fk";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_evaluacion_p_comportamental()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "evalcc_id,  	id_eval_fk,  	evaluacion_p_id,  	acuerdo_id,  	idComportamental,  	idCompetencia,  	idConducta,  	Evidencia,  	evalparfun_cal,  	SysLastUpd,  	sysst";
$proto0["m_strFrom"] = "FROM evaluacion_p_comportamental";
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
	"m_strName" => "evalcc_id",
	"m_strTable" => "evaluacion_p_comportamental",
	"m_srcTableName" => "evaluacion_p_comportamental"
));

$proto6["m_sql"] = "evalcc_id";
$proto6["m_srcTableName"] = "evaluacion_p_comportamental";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "id_eval_fk",
	"m_strTable" => "evaluacion_p_comportamental",
	"m_srcTableName" => "evaluacion_p_comportamental"
));

$proto8["m_sql"] = "id_eval_fk";
$proto8["m_srcTableName"] = "evaluacion_p_comportamental";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "evaluacion_p_id",
	"m_strTable" => "evaluacion_p_comportamental",
	"m_srcTableName" => "evaluacion_p_comportamental"
));

$proto10["m_sql"] = "evaluacion_p_id";
$proto10["m_srcTableName"] = "evaluacion_p_comportamental";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "acuerdo_id",
	"m_strTable" => "evaluacion_p_comportamental",
	"m_srcTableName" => "evaluacion_p_comportamental"
));

$proto12["m_sql"] = "acuerdo_id";
$proto12["m_srcTableName"] = "evaluacion_p_comportamental";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "idComportamental",
	"m_strTable" => "evaluacion_p_comportamental",
	"m_srcTableName" => "evaluacion_p_comportamental"
));

$proto14["m_sql"] = "idComportamental";
$proto14["m_srcTableName"] = "evaluacion_p_comportamental";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "idCompetencia",
	"m_strTable" => "evaluacion_p_comportamental",
	"m_srcTableName" => "evaluacion_p_comportamental"
));

$proto16["m_sql"] = "idCompetencia";
$proto16["m_srcTableName"] = "evaluacion_p_comportamental";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "idConducta",
	"m_strTable" => "evaluacion_p_comportamental",
	"m_srcTableName" => "evaluacion_p_comportamental"
));

$proto18["m_sql"] = "idConducta";
$proto18["m_srcTableName"] = "evaluacion_p_comportamental";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Evidencia",
	"m_strTable" => "evaluacion_p_comportamental",
	"m_srcTableName" => "evaluacion_p_comportamental"
));

$proto20["m_sql"] = "Evidencia";
$proto20["m_srcTableName"] = "evaluacion_p_comportamental";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "evalparfun_cal",
	"m_strTable" => "evaluacion_p_comportamental",
	"m_srcTableName" => "evaluacion_p_comportamental"
));

$proto22["m_sql"] = "evalparfun_cal";
$proto22["m_srcTableName"] = "evaluacion_p_comportamental";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "SysLastUpd",
	"m_strTable" => "evaluacion_p_comportamental",
	"m_srcTableName" => "evaluacion_p_comportamental"
));

$proto24["m_sql"] = "SysLastUpd";
$proto24["m_srcTableName"] = "evaluacion_p_comportamental";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "sysst",
	"m_strTable" => "evaluacion_p_comportamental",
	"m_srcTableName" => "evaluacion_p_comportamental"
));

$proto26["m_sql"] = "sysst";
$proto26["m_srcTableName"] = "evaluacion_p_comportamental";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto28=array();
$proto28["m_link"] = "SQLL_MAIN";
			$proto29=array();
$proto29["m_strName"] = "evaluacion_p_comportamental";
$proto29["m_srcTableName"] = "evaluacion_p_comportamental";
$proto29["m_columns"] = array();
$proto29["m_columns"][] = "evalcc_id";
$proto29["m_columns"][] = "id_eval_fk";
$proto29["m_columns"][] = "evaluacion_p_id";
$proto29["m_columns"][] = "acuerdo_id";
$proto29["m_columns"][] = "idComportamental";
$proto29["m_columns"][] = "idCompetencia";
$proto29["m_columns"][] = "idConducta";
$proto29["m_columns"][] = "Evidencia";
$proto29["m_columns"][] = "evalparfun_cal";
$proto29["m_columns"][] = "SysLastUpd";
$proto29["m_columns"][] = "sysst";
$obj = new SQLTable($proto29);

$proto28["m_table"] = $obj;
$proto28["m_sql"] = "evaluacion_p_comportamental";
$proto28["m_alias"] = "";
$proto28["m_srcTableName"] = "evaluacion_p_comportamental";
$proto30=array();
$proto30["m_sql"] = "";
$proto30["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto30["m_column"]=$obj;
$proto30["m_contained"] = array();
$proto30["m_strCase"] = "";
$proto30["m_havingmode"] = false;
$proto30["m_inBrackets"] = false;
$proto30["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto30);

$proto28["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto28);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="evaluacion_p_comportamental";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_evaluacion_p_comportamental = createSqlQuery_evaluacion_p_comportamental();


	
				;

											

$tdataevaluacion_p_comportamental[".sqlquery"] = $queryData_evaluacion_p_comportamental;



include_once(getabspath("include/evaluacion_p_comportamental_events.php"));
$tdataevaluacion_p_comportamental[".hasEvents"] = true;

?>