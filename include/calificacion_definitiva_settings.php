<?php
$tdatacalificacion_definitiva = array();
$tdatacalificacion_definitiva[".searchableFields"] = array();
$tdatacalificacion_definitiva[".ShortName"] = "calificacion_definitiva";
$tdatacalificacion_definitiva[".OwnerID"] = "caldef_id";
$tdatacalificacion_definitiva[".OriginalTable"] = "calificacion_definitiva";


$tdatacalificacion_definitiva[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatacalificacion_definitiva[".originalPagesByType"] = $tdatacalificacion_definitiva[".pagesByType"];
$tdatacalificacion_definitiva[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatacalificacion_definitiva[".originalPages"] = $tdatacalificacion_definitiva[".pages"];
$tdatacalificacion_definitiva[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatacalificacion_definitiva[".originalDefaultPages"] = $tdatacalificacion_definitiva[".defaultPages"];

//	field labels
$fieldLabelscalificacion_definitiva = array();
$fieldToolTipscalificacion_definitiva = array();
$pageTitlescalificacion_definitiva = array();
$placeHolderscalificacion_definitiva = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscalificacion_definitiva["Spanish"] = array();
	$fieldToolTipscalificacion_definitiva["Spanish"] = array();
	$placeHolderscalificacion_definitiva["Spanish"] = array();
	$pageTitlescalificacion_definitiva["Spanish"] = array();
	$fieldLabelscalificacion_definitiva["Spanish"]["caldef_id"] = "Caldef Id";
	$fieldToolTipscalificacion_definitiva["Spanish"]["caldef_id"] = "";
	$placeHolderscalificacion_definitiva["Spanish"]["caldef_id"] = "";
	$fieldLabelscalificacion_definitiva["Spanish"]["idEvaluado"] = "Evaluado";
	$fieldToolTipscalificacion_definitiva["Spanish"]["idEvaluado"] = "";
	$placeHolderscalificacion_definitiva["Spanish"]["idEvaluado"] = "";
	$fieldLabelscalificacion_definitiva["Spanish"]["vigencia"] = "Vigencia";
	$fieldToolTipscalificacion_definitiva["Spanish"]["vigencia"] = "";
	$placeHolderscalificacion_definitiva["Spanish"]["vigencia"] = "";
	$fieldLabelscalificacion_definitiva["Spanish"]["calificacion_doc"] = "Subir documento";
	$fieldToolTipscalificacion_definitiva["Spanish"]["calificacion_doc"] = "";
	$placeHolderscalificacion_definitiva["Spanish"]["calificacion_doc"] = "";
	$fieldLabelscalificacion_definitiva["Spanish"]["sys_date"] = "Fecha de subida";
	$fieldToolTipscalificacion_definitiva["Spanish"]["sys_date"] = "";
	$placeHolderscalificacion_definitiva["Spanish"]["sys_date"] = "";
	$fieldLabelscalificacion_definitiva["Spanish"]["sys_user"] = "Subido por";
	$fieldToolTipscalificacion_definitiva["Spanish"]["sys_user"] = "";
	$placeHolderscalificacion_definitiva["Spanish"]["sys_user"] = "";
	$fieldLabelscalificacion_definitiva["Spanish"]["syslastupd"] = "Syslastupd";
	$fieldToolTipscalificacion_definitiva["Spanish"]["syslastupd"] = "";
	$placeHolderscalificacion_definitiva["Spanish"]["syslastupd"] = "";
	if (count($fieldToolTipscalificacion_definitiva["Spanish"]))
		$tdatacalificacion_definitiva[".isUseToolTips"] = true;
}


	$tdatacalificacion_definitiva[".NCSearch"] = true;



$tdatacalificacion_definitiva[".shortTableName"] = "calificacion_definitiva";
$tdatacalificacion_definitiva[".nSecOptions"] = 0;

$tdatacalificacion_definitiva[".mainTableOwnerID"] = "caldef_id";
$tdatacalificacion_definitiva[".entityType"] = 0;
$tdatacalificacion_definitiva[".connId"] = "edl2_at_127_0_0_1";


$tdatacalificacion_definitiva[".strOriginalTableName"] = "calificacion_definitiva";

	



$tdatacalificacion_definitiva[".showAddInPopup"] = false;

$tdatacalificacion_definitiva[".showEditInPopup"] = false;

$tdatacalificacion_definitiva[".showViewInPopup"] = false;

$tdatacalificacion_definitiva[".listAjax"] = false;
//	temporary
//$tdatacalificacion_definitiva[".listAjax"] = false;

	$tdatacalificacion_definitiva[".audit"] = true;

	$tdatacalificacion_definitiva[".locking"] = true;


$pages = $tdatacalificacion_definitiva[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacalificacion_definitiva[".edit"] = true;
	$tdatacalificacion_definitiva[".afterEditAction"] = 1;
	$tdatacalificacion_definitiva[".closePopupAfterEdit"] = 1;
	$tdatacalificacion_definitiva[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacalificacion_definitiva[".add"] = true;
$tdatacalificacion_definitiva[".afterAddAction"] = 1;
$tdatacalificacion_definitiva[".closePopupAfterAdd"] = 1;
$tdatacalificacion_definitiva[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacalificacion_definitiva[".list"] = true;
}



$tdatacalificacion_definitiva[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacalificacion_definitiva[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacalificacion_definitiva[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacalificacion_definitiva[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacalificacion_definitiva[".printFriendly"] = true;
}



$tdatacalificacion_definitiva[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacalificacion_definitiva[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacalificacion_definitiva[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacalificacion_definitiva[".isUseAjaxSuggest"] = true;



																																																																																																																																																																																				

$tdatacalificacion_definitiva[".ajaxCodeSnippetAdded"] = false;

$tdatacalificacion_definitiva[".buttonsAdded"] = false;

$tdatacalificacion_definitiva[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacalificacion_definitiva[".isUseTimeForSearch"] = false;


$tdatacalificacion_definitiva[".badgeColor"] = "8000ff";


$tdatacalificacion_definitiva[".allSearchFields"] = array();
$tdatacalificacion_definitiva[".filterFields"] = array();
$tdatacalificacion_definitiva[".requiredSearchFields"] = array();

$tdatacalificacion_definitiva[".googleLikeFields"] = array();
$tdatacalificacion_definitiva[".googleLikeFields"][] = "caldef_id";
$tdatacalificacion_definitiva[".googleLikeFields"][] = "idEvaluado";
$tdatacalificacion_definitiva[".googleLikeFields"][] = "vigencia";
$tdatacalificacion_definitiva[".googleLikeFields"][] = "calificacion_doc";
$tdatacalificacion_definitiva[".googleLikeFields"][] = "sys_date";
$tdatacalificacion_definitiva[".googleLikeFields"][] = "sys_user";
$tdatacalificacion_definitiva[".googleLikeFields"][] = "syslastupd";



$tdatacalificacion_definitiva[".tableType"] = "list";

$tdatacalificacion_definitiva[".printerPageOrientation"] = 0;
$tdatacalificacion_definitiva[".nPrinterPageScale"] = 100;

$tdatacalificacion_definitiva[".nPrinterSplitRecords"] = 40;

$tdatacalificacion_definitiva[".geocodingEnabled"] = false;










$tdatacalificacion_definitiva[".pageSize"] = 20;

$tdatacalificacion_definitiva[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacalificacion_definitiva[".strOrderBy"] = $tstrOrderBy;

$tdatacalificacion_definitiva[".orderindexes"] = array();


$tdatacalificacion_definitiva[".sqlHead"] = "SELECT caldef_id,  	idEvaluado,  	vigencia,  	calificacion_doc,  	sys_date,  	sys_user,  	syslastupd";
$tdatacalificacion_definitiva[".sqlFrom"] = "FROM calificacion_definitiva";
$tdatacalificacion_definitiva[".sqlWhereExpr"] = "";
$tdatacalificacion_definitiva[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacalificacion_definitiva[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacalificacion_definitiva[".arrGroupsPerPage"] = $arrGPP;

$tdatacalificacion_definitiva[".highlightSearchResults"] = true;

$tableKeyscalificacion_definitiva = array();
$tableKeyscalificacion_definitiva[] = "caldef_id";
$tdatacalificacion_definitiva[".Keys"] = $tableKeyscalificacion_definitiva;


$tdatacalificacion_definitiva[".hideMobileList"] = array();




//	caldef_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "caldef_id";
	$fdata["GoodName"] = "caldef_id";
	$fdata["ownerTable"] = "calificacion_definitiva";
	$fdata["Label"] = GetFieldLabel("calificacion_definitiva","caldef_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "caldef_id";

		$fdata["sourceSingle"] = "caldef_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "caldef_id";

	
	
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


	$tdatacalificacion_definitiva["caldef_id"] = $fdata;
		$tdatacalificacion_definitiva[".searchableFields"][] = "caldef_id";
//	idEvaluado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "idEvaluado";
	$fdata["GoodName"] = "idEvaluado";
	$fdata["ownerTable"] = "calificacion_definitiva";
	$fdata["Label"] = GetFieldLabel("calificacion_definitiva","idEvaluado");
	$fdata["FieldType"] = 200;


	
	
			

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
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "nombre";

	

	
	$edata["LookupOrderBy"] = "nombre";

	
	
	
	

	
	
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


	$tdatacalificacion_definitiva["idEvaluado"] = $fdata;
		$tdatacalificacion_definitiva[".searchableFields"][] = "idEvaluado";
//	vigencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "vigencia";
	$fdata["GoodName"] = "vigencia";
	$fdata["ownerTable"] = "calificacion_definitiva";
	$fdata["Label"] = GetFieldLabel("calificacion_definitiva","vigencia");
	$fdata["FieldType"] = 200;


	
	
			

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


	$tdatacalificacion_definitiva["vigencia"] = $fdata;
		$tdatacalificacion_definitiva[".searchableFields"][] = "vigencia";
//	calificacion_doc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "calificacion_doc";
	$fdata["GoodName"] = "calificacion_doc";
	$fdata["ownerTable"] = "calificacion_definitiva";
	$fdata["Label"] = GetFieldLabel("calificacion_definitiva","calificacion_doc");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "calificacion_doc";

		$fdata["sourceSingle"] = "calificacion_doc";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "calificacion_doc";

	
	
		$fdata["UploadCodeExpression"] = true;

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Document Download");

	
	
	
								$vdata["ShowIcon"] = true;
			$vdata["DisplayPDF"] = true;
		
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Document upload");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = array();
			$edata["acceptFileTypes"][] = strtoupper("pdf");
						$edata["acceptFileTypesHtml"] = ".pdf";

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


	$tdatacalificacion_definitiva["calificacion_doc"] = $fdata;
		$tdatacalificacion_definitiva[".searchableFields"][] = "calificacion_doc";
//	sys_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "sys_date";
	$fdata["GoodName"] = "sys_date";
	$fdata["ownerTable"] = "calificacion_definitiva";
	$fdata["Label"] = GetFieldLabel("calificacion_definitiva","sys_date");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "sys_date";

		$fdata["sourceSingle"] = "sys_date";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sys_date";

	
	
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

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
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


	$tdatacalificacion_definitiva["sys_date"] = $fdata;
		$tdatacalificacion_definitiva[".searchableFields"][] = "sys_date";
//	sys_user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "sys_user";
	$fdata["GoodName"] = "sys_user";
	$fdata["ownerTable"] = "calificacion_definitiva";
	$fdata["Label"] = GetFieldLabel("calificacion_definitiva","sys_user");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "sys_user";

		$fdata["sourceSingle"] = "sys_user";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sys_user";

	
	
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


	$tdatacalificacion_definitiva["sys_user"] = $fdata;
		$tdatacalificacion_definitiva[".searchableFields"][] = "sys_user";
//	syslastupd
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "syslastupd";
	$fdata["GoodName"] = "syslastupd";
	$fdata["ownerTable"] = "calificacion_definitiva";
	$fdata["Label"] = GetFieldLabel("calificacion_definitiva","syslastupd");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "syslastupd";

		$fdata["sourceSingle"] = "syslastupd";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "syslastupd";

	
	
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


	$tdatacalificacion_definitiva["syslastupd"] = $fdata;
		$tdatacalificacion_definitiva[".searchableFields"][] = "syslastupd";


$tables_data["calificacion_definitiva"]=&$tdatacalificacion_definitiva;
$field_labels["calificacion_definitiva"] = &$fieldLabelscalificacion_definitiva;
$fieldToolTips["calificacion_definitiva"] = &$fieldToolTipscalificacion_definitiva;
$placeHolders["calificacion_definitiva"] = &$placeHolderscalificacion_definitiva;
$page_titles["calificacion_definitiva"] = &$pageTitlescalificacion_definitiva;


changeTextControlsToDate( "calificacion_definitiva" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["calificacion_definitiva"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["calificacion_definitiva"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="q_caldef_p_x005";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="q_caldef_p_x005";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "q_caldef_p_x005";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["calificacion_definitiva"][0] = $masterParams;
				$masterTablesData["calificacion_definitiva"][0]["masterKeys"] = array();
	$masterTablesData["calificacion_definitiva"][0]["masterKeys"][]="idEvaluado";
				$masterTablesData["calificacion_definitiva"][0]["masterKeys"][]="vigencia";
				$masterTablesData["calificacion_definitiva"][0]["detailKeys"] = array();
	$masterTablesData["calificacion_definitiva"][0]["detailKeys"][]="idEvaluado";
				$masterTablesData["calificacion_definitiva"][0]["detailKeys"][]="vigencia";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="q_caldef_p_x005";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="q_caldef_p_x005_adm";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "q_caldef_p_x005_adm";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["calificacion_definitiva"][1] = $masterParams;
				$masterTablesData["calificacion_definitiva"][1]["masterKeys"] = array();
	$masterTablesData["calificacion_definitiva"][1]["masterKeys"][]="idEvaluado";
				$masterTablesData["calificacion_definitiva"][1]["masterKeys"][]="vigencia";
				$masterTablesData["calificacion_definitiva"][1]["detailKeys"] = array();
	$masterTablesData["calificacion_definitiva"][1]["detailKeys"][]="idEvaluado";
				$masterTablesData["calificacion_definitiva"][1]["detailKeys"][]="vigencia";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="q_caldef_p_x005";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="q_caldef_p_x005_evaluador";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "q_caldef_p_x005_evaluador";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["calificacion_definitiva"][2] = $masterParams;
				$masterTablesData["calificacion_definitiva"][2]["masterKeys"] = array();
	$masterTablesData["calificacion_definitiva"][2]["masterKeys"][]="idEvaluado";
				$masterTablesData["calificacion_definitiva"][2]["masterKeys"][]="vigencia";
				$masterTablesData["calificacion_definitiva"][2]["detailKeys"] = array();
	$masterTablesData["calificacion_definitiva"][2]["detailKeys"][]="idEvaluado";
				$masterTablesData["calificacion_definitiva"][2]["detailKeys"][]="vigencia";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_calificacion_definitiva()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "caldef_id,  	idEvaluado,  	vigencia,  	calificacion_doc,  	sys_date,  	sys_user,  	syslastupd";
$proto0["m_strFrom"] = "FROM calificacion_definitiva";
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
	"m_strName" => "caldef_id",
	"m_strTable" => "calificacion_definitiva",
	"m_srcTableName" => "calificacion_definitiva"
));

$proto6["m_sql"] = "caldef_id";
$proto6["m_srcTableName"] = "calificacion_definitiva";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "idEvaluado",
	"m_strTable" => "calificacion_definitiva",
	"m_srcTableName" => "calificacion_definitiva"
));

$proto8["m_sql"] = "idEvaluado";
$proto8["m_srcTableName"] = "calificacion_definitiva";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "vigencia",
	"m_strTable" => "calificacion_definitiva",
	"m_srcTableName" => "calificacion_definitiva"
));

$proto10["m_sql"] = "vigencia";
$proto10["m_srcTableName"] = "calificacion_definitiva";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "calificacion_doc",
	"m_strTable" => "calificacion_definitiva",
	"m_srcTableName" => "calificacion_definitiva"
));

$proto12["m_sql"] = "calificacion_doc";
$proto12["m_srcTableName"] = "calificacion_definitiva";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_date",
	"m_strTable" => "calificacion_definitiva",
	"m_srcTableName" => "calificacion_definitiva"
));

$proto14["m_sql"] = "sys_date";
$proto14["m_srcTableName"] = "calificacion_definitiva";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_user",
	"m_strTable" => "calificacion_definitiva",
	"m_srcTableName" => "calificacion_definitiva"
));

$proto16["m_sql"] = "sys_user";
$proto16["m_srcTableName"] = "calificacion_definitiva";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "syslastupd",
	"m_strTable" => "calificacion_definitiva",
	"m_srcTableName" => "calificacion_definitiva"
));

$proto18["m_sql"] = "syslastupd";
$proto18["m_srcTableName"] = "calificacion_definitiva";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "calificacion_definitiva";
$proto21["m_srcTableName"] = "calificacion_definitiva";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "caldef_id";
$proto21["m_columns"][] = "idEvaluado";
$proto21["m_columns"][] = "vigencia";
$proto21["m_columns"][] = "calificacion_doc";
$proto21["m_columns"][] = "sys_date";
$proto21["m_columns"][] = "sys_user";
$proto21["m_columns"][] = "syslastupd";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "calificacion_definitiva";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "calificacion_definitiva";
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
$proto0["m_srcTableName"]="calificacion_definitiva";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_calificacion_definitiva = createSqlQuery_calificacion_definitiva();


	
				;

							

$tdatacalificacion_definitiva[".sqlquery"] = $queryData_calificacion_definitiva;



$tdatacalificacion_definitiva[".hasEvents"] = false;

?>