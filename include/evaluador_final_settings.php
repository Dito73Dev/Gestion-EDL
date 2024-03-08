<?php
$tdataevaluador_final = array();
$tdataevaluador_final[".searchableFields"] = array();
$tdataevaluador_final[".ShortName"] = "evaluador_final";
$tdataevaluador_final[".OwnerID"] = "";
$tdataevaluador_final[".OriginalTable"] = "evaluador_final";


$tdataevaluador_final[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdataevaluador_final[".originalPagesByType"] = $tdataevaluador_final[".pagesByType"];
$tdataevaluador_final[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdataevaluador_final[".originalPages"] = $tdataevaluador_final[".pages"];
$tdataevaluador_final[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"list\":\"list\",\"search\":\"search\"}" );
$tdataevaluador_final[".originalDefaultPages"] = $tdataevaluador_final[".defaultPages"];

//	field labels
$fieldLabelsevaluador_final = array();
$fieldToolTipsevaluador_final = array();
$pageTitlesevaluador_final = array();
$placeHoldersevaluador_final = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsevaluador_final["Spanish"] = array();
	$fieldToolTipsevaluador_final["Spanish"] = array();
	$placeHoldersevaluador_final["Spanish"] = array();
	$pageTitlesevaluador_final["Spanish"] = array();
	$fieldLabelsevaluador_final["Spanish"]["idEvaluado"] = "Evaluado";
	$fieldToolTipsevaluador_final["Spanish"]["idEvaluado"] = "";
	$placeHoldersevaluador_final["Spanish"]["idEvaluado"] = "";
	$fieldLabelsevaluador_final["Spanish"]["vigencia"] = "Vigencia";
	$fieldToolTipsevaluador_final["Spanish"]["vigencia"] = "";
	$placeHoldersevaluador_final["Spanish"]["vigencia"] = "";
	$fieldLabelsevaluador_final["Spanish"]["CuentaDeidEvaluado"] = "Cuenta Deid Evaluado";
	$fieldToolTipsevaluador_final["Spanish"]["CuentaDeidEvaluado"] = "";
	$placeHoldersevaluador_final["Spanish"]["CuentaDeidEvaluado"] = "";
	$fieldLabelsevaluador_final["Spanish"]["idEvaluador"] = "Firma evaluación definitiva";
	$fieldToolTipsevaluador_final["Spanish"]["idEvaluador"] = "";
	$placeHoldersevaluador_final["Spanish"]["idEvaluador"] = "";
	$fieldLabelsevaluador_final["Spanish"]["signed"] = "Estado";
	$fieldToolTipsevaluador_final["Spanish"]["signed"] = "";
	$placeHoldersevaluador_final["Spanish"]["signed"] = "";
	$fieldLabelsevaluador_final["Spanish"]["signed_id"] = "Signed Id";
	$fieldToolTipsevaluador_final["Spanish"]["signed_id"] = "";
	$placeHoldersevaluador_final["Spanish"]["signed_id"] = "";
	if (count($fieldToolTipsevaluador_final["Spanish"]))
		$tdataevaluador_final[".isUseToolTips"] = true;
}


	$tdataevaluador_final[".NCSearch"] = true;



$tdataevaluador_final[".shortTableName"] = "evaluador_final";
$tdataevaluador_final[".nSecOptions"] = 0;

$tdataevaluador_final[".mainTableOwnerID"] = "";
$tdataevaluador_final[".entityType"] = 0;
$tdataevaluador_final[".connId"] = "edl2_at_127_0_0_1";


$tdataevaluador_final[".strOriginalTableName"] = "evaluador_final";

	



$tdataevaluador_final[".showAddInPopup"] = false;

$tdataevaluador_final[".showEditInPopup"] = false;

$tdataevaluador_final[".showViewInPopup"] = false;

$tdataevaluador_final[".listAjax"] = false;
//	temporary
//$tdataevaluador_final[".listAjax"] = false;

	$tdataevaluador_final[".audit"] = false;

	$tdataevaluador_final[".locking"] = false;


$pages = $tdataevaluador_final[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataevaluador_final[".edit"] = true;
	$tdataevaluador_final[".afterEditAction"] = 1;
	$tdataevaluador_final[".closePopupAfterEdit"] = 1;
	$tdataevaluador_final[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataevaluador_final[".add"] = true;
$tdataevaluador_final[".afterAddAction"] = 1;
$tdataevaluador_final[".closePopupAfterAdd"] = 1;
$tdataevaluador_final[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataevaluador_final[".list"] = true;
}



$tdataevaluador_final[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataevaluador_final[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataevaluador_final[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataevaluador_final[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataevaluador_final[".printFriendly"] = true;
}



$tdataevaluador_final[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataevaluador_final[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataevaluador_final[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataevaluador_final[".isUseAjaxSuggest"] = true;



																																																																																										

$tdataevaluador_final[".ajaxCodeSnippetAdded"] = false;

$tdataevaluador_final[".buttonsAdded"] = false;

$tdataevaluador_final[".addPageEvents"] = false;

// use timepicker for search panel
$tdataevaluador_final[".isUseTimeForSearch"] = false;


$tdataevaluador_final[".badgeColor"] = "edca00";


$tdataevaluador_final[".allSearchFields"] = array();
$tdataevaluador_final[".filterFields"] = array();
$tdataevaluador_final[".requiredSearchFields"] = array();

$tdataevaluador_final[".googleLikeFields"] = array();
$tdataevaluador_final[".googleLikeFields"][] = "signed_id";
$tdataevaluador_final[".googleLikeFields"][] = "idEvaluado";
$tdataevaluador_final[".googleLikeFields"][] = "vigencia";
$tdataevaluador_final[".googleLikeFields"][] = "CuentaDeidEvaluado";
$tdataevaluador_final[".googleLikeFields"][] = "idEvaluador";
$tdataevaluador_final[".googleLikeFields"][] = "signed";



$tdataevaluador_final[".tableType"] = "list";

$tdataevaluador_final[".printerPageOrientation"] = 0;
$tdataevaluador_final[".nPrinterPageScale"] = 100;

$tdataevaluador_final[".nPrinterSplitRecords"] = 40;

$tdataevaluador_final[".geocodingEnabled"] = false;










$tdataevaluador_final[".pageSize"] = 20;

$tdataevaluador_final[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataevaluador_final[".strOrderBy"] = $tstrOrderBy;

$tdataevaluador_final[".orderindexes"] = array();


$tdataevaluador_final[".sqlHead"] = "SELECT signed_id,  	idEvaluado,  	vigencia,  	CuentaDeidEvaluado,  	idEvaluador,  	signed";
$tdataevaluador_final[".sqlFrom"] = "FROM evaluador_final";
$tdataevaluador_final[".sqlWhereExpr"] = "";
$tdataevaluador_final[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataevaluador_final[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataevaluador_final[".arrGroupsPerPage"] = $arrGPP;

$tdataevaluador_final[".highlightSearchResults"] = true;

$tableKeysevaluador_final = array();
$tableKeysevaluador_final[] = "signed_id";
$tdataevaluador_final[".Keys"] = $tableKeysevaluador_final;


$tdataevaluador_final[".hideMobileList"] = array();




//	signed_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "signed_id";
	$fdata["GoodName"] = "signed_id";
	$fdata["ownerTable"] = "evaluador_final";
	$fdata["Label"] = GetFieldLabel("evaluador_final","signed_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "signed_id";

		$fdata["sourceSingle"] = "signed_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "signed_id";

	
	
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


	$tdataevaluador_final["signed_id"] = $fdata;
		$tdataevaluador_final[".searchableFields"][] = "signed_id";
//	idEvaluado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "idEvaluado";
	$fdata["GoodName"] = "idEvaluado";
	$fdata["ownerTable"] = "evaluador_final";
	$fdata["Label"] = GetFieldLabel("evaluador_final","idEvaluado");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "idEvaluado";

		$fdata["sourceSingle"] = "idEvaluado";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "idEvaluado";

	
	
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
	$edata["LookupTable"] = "funcionario";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
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


	$tdataevaluador_final["idEvaluado"] = $fdata;
		$tdataevaluador_final[".searchableFields"][] = "idEvaluado";
//	vigencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "vigencia";
	$fdata["GoodName"] = "vigencia";
	$fdata["ownerTable"] = "evaluador_final";
	$fdata["Label"] = GetFieldLabel("evaluador_final","vigencia");
	$fdata["FieldType"] = 2;


	
	
			

		$fdata["strField"] = "vigencia";

		$fdata["sourceSingle"] = "vigencia";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "vigencia";

	
	
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


	$tdataevaluador_final["vigencia"] = $fdata;
		$tdataevaluador_final[".searchableFields"][] = "vigencia";
//	CuentaDeidEvaluado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "CuentaDeidEvaluado";
	$fdata["GoodName"] = "CuentaDeidEvaluado";
	$fdata["ownerTable"] = "evaluador_final";
	$fdata["Label"] = GetFieldLabel("evaluador_final","CuentaDeidEvaluado");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "CuentaDeidEvaluado";

		$fdata["sourceSingle"] = "CuentaDeidEvaluado";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CuentaDeidEvaluado";

	
	
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


	$tdataevaluador_final["CuentaDeidEvaluado"] = $fdata;
		$tdataevaluador_final[".searchableFields"][] = "CuentaDeidEvaluado";
//	idEvaluador
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "idEvaluador";
	$fdata["GoodName"] = "idEvaluador";
	$fdata["ownerTable"] = "evaluador_final";
	$fdata["Label"] = GetFieldLabel("evaluador_final","idEvaluador");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "idEvaluador";

		$fdata["sourceSingle"] = "idEvaluador";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "idEvaluador";

	
	
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
	$edata["LookupTable"] = "q_global_evaluadores";
		$edata["listPageId"] = "list";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "nombre_funcionario";

	

	
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


	$tdataevaluador_final["idEvaluador"] = $fdata;
		$tdataevaluador_final[".searchableFields"][] = "idEvaluador";
//	signed
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "signed";
	$fdata["GoodName"] = "signed";
	$fdata["ownerTable"] = "evaluador_final";
	$fdata["Label"] = GetFieldLabel("evaluador_final","signed");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "signed";

		$fdata["sourceSingle"] = "signed";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "signed";

	
	
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
	$edata["LinkFieldType"] = 0;
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


	$tdataevaluador_final["signed"] = $fdata;
		$tdataevaluador_final[".searchableFields"][] = "signed";


$tables_data["evaluador_final"]=&$tdataevaluador_final;
$field_labels["evaluador_final"] = &$fieldLabelsevaluador_final;
$fieldToolTips["evaluador_final"] = &$fieldToolTipsevaluador_final;
$placeHolders["evaluador_final"] = &$placeHoldersevaluador_final;
$page_titles["evaluador_final"] = &$pageTitlesevaluador_final;


changeTextControlsToDate( "evaluador_final" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["evaluador_final"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["evaluador_final"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="q_caldef_p_x005";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="q_caldef_p_x005";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "q_caldef_p_x005";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["evaluador_final"][0] = $masterParams;
				$masterTablesData["evaluador_final"][0]["masterKeys"] = array();
	$masterTablesData["evaluador_final"][0]["masterKeys"][]="idEvaluado";
				$masterTablesData["evaluador_final"][0]["masterKeys"][]="vigencia";
				$masterTablesData["evaluador_final"][0]["detailKeys"] = array();
	$masterTablesData["evaluador_final"][0]["detailKeys"][]="idEvaluado";
				$masterTablesData["evaluador_final"][0]["detailKeys"][]="vigencia";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_evaluador_final()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "signed_id,  	idEvaluado,  	vigencia,  	CuentaDeidEvaluado,  	idEvaluador,  	signed";
$proto0["m_strFrom"] = "FROM evaluador_final";
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
	"m_strName" => "signed_id",
	"m_strTable" => "evaluador_final",
	"m_srcTableName" => "evaluador_final"
));

$proto6["m_sql"] = "signed_id";
$proto6["m_srcTableName"] = "evaluador_final";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "idEvaluado",
	"m_strTable" => "evaluador_final",
	"m_srcTableName" => "evaluador_final"
));

$proto8["m_sql"] = "idEvaluado";
$proto8["m_srcTableName"] = "evaluador_final";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "vigencia",
	"m_strTable" => "evaluador_final",
	"m_srcTableName" => "evaluador_final"
));

$proto10["m_sql"] = "vigencia";
$proto10["m_srcTableName"] = "evaluador_final";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "CuentaDeidEvaluado",
	"m_strTable" => "evaluador_final",
	"m_srcTableName" => "evaluador_final"
));

$proto12["m_sql"] = "CuentaDeidEvaluado";
$proto12["m_srcTableName"] = "evaluador_final";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "idEvaluador",
	"m_strTable" => "evaluador_final",
	"m_srcTableName" => "evaluador_final"
));

$proto14["m_sql"] = "idEvaluador";
$proto14["m_srcTableName"] = "evaluador_final";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "signed",
	"m_strTable" => "evaluador_final",
	"m_srcTableName" => "evaluador_final"
));

$proto16["m_sql"] = "signed";
$proto16["m_srcTableName"] = "evaluador_final";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "evaluador_final";
$proto19["m_srcTableName"] = "evaluador_final";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "signed_id";
$proto19["m_columns"][] = "idEvaluado";
$proto19["m_columns"][] = "vigencia";
$proto19["m_columns"][] = "CuentaDeidEvaluado";
$proto19["m_columns"][] = "idEvaluador";
$proto19["m_columns"][] = "signed";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "evaluador_final";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "evaluador_final";
$proto20=array();
$proto20["m_sql"] = "";
$proto20["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto20["m_column"]=$obj;
$proto20["m_contained"] = array();
$proto20["m_strCase"] = "";
$proto20["m_havingmode"] = false;
$proto20["m_inBrackets"] = false;
$proto20["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto20);

$proto18["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto18);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="evaluador_final";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_evaluador_final = createSqlQuery_evaluador_final();


	
				;

						

$tdataevaluador_final[".sqlquery"] = $queryData_evaluador_final;



$tdataevaluador_final[".hasEvents"] = false;

?>