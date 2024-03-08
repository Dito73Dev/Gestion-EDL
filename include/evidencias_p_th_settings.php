<?php
$tdataevidencias_p_th = array();
$tdataevidencias_p_th[".searchableFields"] = array();
$tdataevidencias_p_th[".ShortName"] = "evidencias_p_th";
$tdataevidencias_p_th[".OwnerID"] = "";
$tdataevidencias_p_th[".OriginalTable"] = "evidencias_p";


$tdataevidencias_p_th[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataevidencias_p_th[".originalPagesByType"] = $tdataevidencias_p_th[".pagesByType"];
$tdataevidencias_p_th[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataevidencias_p_th[".originalPages"] = $tdataevidencias_p_th[".pages"];
$tdataevidencias_p_th[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataevidencias_p_th[".originalDefaultPages"] = $tdataevidencias_p_th[".defaultPages"];

//	field labels
$fieldLabelsevidencias_p_th = array();
$fieldToolTipsevidencias_p_th = array();
$pageTitlesevidencias_p_th = array();
$placeHoldersevidencias_p_th = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsevidencias_p_th["Spanish"] = array();
	$fieldToolTipsevidencias_p_th["Spanish"] = array();
	$placeHoldersevidencias_p_th["Spanish"] = array();
	$pageTitlesevidencias_p_th["Spanish"] = array();
	$fieldLabelsevidencias_p_th["Spanish"]["cfe_id"] = "Cfe Id";
	$fieldToolTipsevidencias_p_th["Spanish"]["cfe_id"] = "";
	$placeHoldersevidencias_p_th["Spanish"]["cfe_id"] = "";
	$fieldLabelsevidencias_p_th["Spanish"]["evaluacion_id_fk"] = "Evaluacion Id Fk";
	$fieldToolTipsevidencias_p_th["Spanish"]["evaluacion_id_fk"] = "";
	$placeHoldersevidencias_p_th["Spanish"]["evaluacion_id_fk"] = "";
	$fieldLabelsevidencias_p_th["Spanish"]["cfe_nombre"] = "Descripción de la evidencias";
	$fieldToolTipsevidencias_p_th["Spanish"]["cfe_nombre"] = "";
	$placeHoldersevidencias_p_th["Spanish"]["cfe_nombre"] = "";
	$fieldLabelsevidencias_p_th["Spanish"]["cfe_file"] = "Adjuntar documentos";
	$fieldToolTipsevidencias_p_th["Spanish"]["cfe_file"] = "";
	$placeHoldersevidencias_p_th["Spanish"]["cfe_file"] = "";
	$fieldLabelsevidencias_p_th["Spanish"]["cfe_date"] = "Fecha";
	$fieldToolTipsevidencias_p_th["Spanish"]["cfe_date"] = "";
	$placeHoldersevidencias_p_th["Spanish"]["cfe_date"] = "";
	$fieldLabelsevidencias_p_th["Spanish"]["cfe_status"] = "Cfe Status";
	$fieldToolTipsevidencias_p_th["Spanish"]["cfe_status"] = "";
	$placeHoldersevidencias_p_th["Spanish"]["cfe_status"] = "";
	$fieldLabelsevidencias_p_th["Spanish"]["cfe_user"] = "Registrado por:";
	$fieldToolTipsevidencias_p_th["Spanish"]["cfe_user"] = "";
	$placeHoldersevidencias_p_th["Spanish"]["cfe_user"] = "";
	if (count($fieldToolTipsevidencias_p_th["Spanish"]))
		$tdataevidencias_p_th[".isUseToolTips"] = true;
}


	$tdataevidencias_p_th[".NCSearch"] = true;



$tdataevidencias_p_th[".shortTableName"] = "evidencias_p_th";
$tdataevidencias_p_th[".nSecOptions"] = 0;

$tdataevidencias_p_th[".mainTableOwnerID"] = "";
$tdataevidencias_p_th[".entityType"] = 1;
$tdataevidencias_p_th[".connId"] = "edl2_at_127_0_0_1";


$tdataevidencias_p_th[".strOriginalTableName"] = "evidencias_p";

	



$tdataevidencias_p_th[".showAddInPopup"] = false;

$tdataevidencias_p_th[".showEditInPopup"] = false;

$tdataevidencias_p_th[".showViewInPopup"] = false;

$tdataevidencias_p_th[".listAjax"] = false;
//	temporary
//$tdataevidencias_p_th[".listAjax"] = false;

	$tdataevidencias_p_th[".audit"] = true;

	$tdataevidencias_p_th[".locking"] = true;


$pages = $tdataevidencias_p_th[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataevidencias_p_th[".edit"] = true;
	$tdataevidencias_p_th[".afterEditAction"] = 1;
	$tdataevidencias_p_th[".closePopupAfterEdit"] = 1;
	$tdataevidencias_p_th[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataevidencias_p_th[".add"] = true;
$tdataevidencias_p_th[".afterAddAction"] = 1;
$tdataevidencias_p_th[".closePopupAfterAdd"] = 1;
$tdataevidencias_p_th[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataevidencias_p_th[".list"] = true;
}



$tdataevidencias_p_th[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataevidencias_p_th[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataevidencias_p_th[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataevidencias_p_th[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataevidencias_p_th[".printFriendly"] = true;
}



$tdataevidencias_p_th[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataevidencias_p_th[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataevidencias_p_th[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataevidencias_p_th[".isUseAjaxSuggest"] = true;



																																																																																										

$tdataevidencias_p_th[".ajaxCodeSnippetAdded"] = false;

$tdataevidencias_p_th[".buttonsAdded"] = false;

$tdataevidencias_p_th[".addPageEvents"] = false;

// use timepicker for search panel
$tdataevidencias_p_th[".isUseTimeForSearch"] = false;


$tdataevidencias_p_th[".badgeColor"] = "daa520";


$tdataevidencias_p_th[".allSearchFields"] = array();
$tdataevidencias_p_th[".filterFields"] = array();
$tdataevidencias_p_th[".requiredSearchFields"] = array();

$tdataevidencias_p_th[".googleLikeFields"] = array();
$tdataevidencias_p_th[".googleLikeFields"][] = "cfe_id";
$tdataevidencias_p_th[".googleLikeFields"][] = "evaluacion_id_fk";
$tdataevidencias_p_th[".googleLikeFields"][] = "cfe_nombre";
$tdataevidencias_p_th[".googleLikeFields"][] = "cfe_file";
$tdataevidencias_p_th[".googleLikeFields"][] = "cfe_date";
$tdataevidencias_p_th[".googleLikeFields"][] = "cfe_status";
$tdataevidencias_p_th[".googleLikeFields"][] = "cfe_user";



$tdataevidencias_p_th[".tableType"] = "list";

$tdataevidencias_p_th[".printerPageOrientation"] = 0;
$tdataevidencias_p_th[".nPrinterPageScale"] = 100;

$tdataevidencias_p_th[".nPrinterSplitRecords"] = 40;

$tdataevidencias_p_th[".geocodingEnabled"] = false;










$tdataevidencias_p_th[".pageSize"] = 20;

$tdataevidencias_p_th[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataevidencias_p_th[".strOrderBy"] = $tstrOrderBy;

$tdataevidencias_p_th[".orderindexes"] = array();


$tdataevidencias_p_th[".sqlHead"] = "SELECT cfe_id,  	evaluacion_id_fk,  	cfe_nombre,  	cfe_file,  	cfe_date,  	cfe_status,  	cfe_user";
$tdataevidencias_p_th[".sqlFrom"] = "FROM evidencias_p";
$tdataevidencias_p_th[".sqlWhereExpr"] = "";
$tdataevidencias_p_th[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataevidencias_p_th[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataevidencias_p_th[".arrGroupsPerPage"] = $arrGPP;

$tdataevidencias_p_th[".highlightSearchResults"] = true;

$tableKeysevidencias_p_th = array();
$tableKeysevidencias_p_th[] = "cfe_id";
$tdataevidencias_p_th[".Keys"] = $tableKeysevidencias_p_th;


$tdataevidencias_p_th[".hideMobileList"] = array();




//	cfe_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "cfe_id";
	$fdata["GoodName"] = "cfe_id";
	$fdata["ownerTable"] = "evidencias_p";
	$fdata["Label"] = GetFieldLabel("evidencias_p_th","cfe_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "cfe_id";

		$fdata["sourceSingle"] = "cfe_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cfe_id";

	
	
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


	$tdataevidencias_p_th["cfe_id"] = $fdata;
		$tdataevidencias_p_th[".searchableFields"][] = "cfe_id";
//	evaluacion_id_fk
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "evaluacion_id_fk";
	$fdata["GoodName"] = "evaluacion_id_fk";
	$fdata["ownerTable"] = "evidencias_p";
	$fdata["Label"] = GetFieldLabel("evidencias_p_th","evaluacion_id_fk");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "evaluacion_id_fk";

		$fdata["sourceSingle"] = "evaluacion_id_fk";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "evaluacion_id_fk";

	
	
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
	$edata["DisplayField"] = "sys_user";

	

	
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


	$tdataevidencias_p_th["evaluacion_id_fk"] = $fdata;
		$tdataevidencias_p_th[".searchableFields"][] = "evaluacion_id_fk";
//	cfe_nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "cfe_nombre";
	$fdata["GoodName"] = "cfe_nombre";
	$fdata["ownerTable"] = "evidencias_p";
	$fdata["Label"] = GetFieldLabel("evidencias_p_th","cfe_nombre");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "cfe_nombre";

		$fdata["sourceSingle"] = "cfe_nombre";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cfe_nombre";

	
	
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


	$tdataevidencias_p_th["cfe_nombre"] = $fdata;
		$tdataevidencias_p_th[".searchableFields"][] = "cfe_nombre";
//	cfe_file
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "cfe_file";
	$fdata["GoodName"] = "cfe_file";
	$fdata["ownerTable"] = "evidencias_p";
	$fdata["Label"] = GetFieldLabel("evidencias_p_th","cfe_file");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "cfe_file";

		$fdata["sourceSingle"] = "cfe_file";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cfe_file";

	
	
		$fdata["UploadCodeExpression"] = true;

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Document Download");

	
	
	
				$vdata["ShowThumbnail"] = true;
			$vdata["ShowFileSize"] = true;
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


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
	
	
	
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


	$tdataevidencias_p_th["cfe_file"] = $fdata;
		$tdataevidencias_p_th[".searchableFields"][] = "cfe_file";
//	cfe_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "cfe_date";
	$fdata["GoodName"] = "cfe_date";
	$fdata["ownerTable"] = "evidencias_p";
	$fdata["Label"] = GetFieldLabel("evidencias_p_th","cfe_date");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "cfe_date";

		$fdata["sourceSingle"] = "cfe_date";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cfe_date";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Datetime");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
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


	$tdataevidencias_p_th["cfe_date"] = $fdata;
		$tdataevidencias_p_th[".searchableFields"][] = "cfe_date";
//	cfe_status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "cfe_status";
	$fdata["GoodName"] = "cfe_status";
	$fdata["ownerTable"] = "evidencias_p";
	$fdata["Label"] = GetFieldLabel("evidencias_p_th","cfe_status");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "cfe_status";

		$fdata["sourceSingle"] = "cfe_status";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cfe_status";

	
	
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


	$tdataevidencias_p_th["cfe_status"] = $fdata;
		$tdataevidencias_p_th[".searchableFields"][] = "cfe_status";
//	cfe_user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "cfe_user";
	$fdata["GoodName"] = "cfe_user";
	$fdata["ownerTable"] = "evidencias_p";
	$fdata["Label"] = GetFieldLabel("evidencias_p_th","cfe_user");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "cfe_user";

		$fdata["sourceSingle"] = "cfe_user";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cfe_user";

	
	
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


	$tdataevidencias_p_th["cfe_user"] = $fdata;
		$tdataevidencias_p_th[".searchableFields"][] = "cfe_user";


$tables_data["evidencias_p_th"]=&$tdataevidencias_p_th;
$field_labels["evidencias_p_th"] = &$fieldLabelsevidencias_p_th;
$fieldToolTips["evidencias_p_th"] = &$fieldToolTipsevidencias_p_th;
$placeHolders["evidencias_p_th"] = &$placeHoldersevidencias_p_th;
$page_titles["evidencias_p_th"] = &$pageTitlesevidencias_p_th;


changeTextControlsToDate( "evidencias_p_th" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["evidencias_p_th"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["evidencias_p_th"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="evaluacion_p";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="evaluacion_p_th";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "evaluacion_p_th";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["evidencias_p_th"][0] = $masterParams;
				$masterTablesData["evidencias_p_th"][0]["masterKeys"] = array();
	$masterTablesData["evidencias_p_th"][0]["masterKeys"][]="evaluacion_p_id";
				$masterTablesData["evidencias_p_th"][0]["detailKeys"] = array();
	$masterTablesData["evidencias_p_th"][0]["detailKeys"][]="evaluacion_id_fk";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_evidencias_p_th()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "cfe_id,  	evaluacion_id_fk,  	cfe_nombre,  	cfe_file,  	cfe_date,  	cfe_status,  	cfe_user";
$proto0["m_strFrom"] = "FROM evidencias_p";
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
	"m_strName" => "cfe_id",
	"m_strTable" => "evidencias_p",
	"m_srcTableName" => "evidencias_p_th"
));

$proto6["m_sql"] = "cfe_id";
$proto6["m_srcTableName"] = "evidencias_p_th";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "evaluacion_id_fk",
	"m_strTable" => "evidencias_p",
	"m_srcTableName" => "evidencias_p_th"
));

$proto8["m_sql"] = "evaluacion_id_fk";
$proto8["m_srcTableName"] = "evidencias_p_th";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "cfe_nombre",
	"m_strTable" => "evidencias_p",
	"m_srcTableName" => "evidencias_p_th"
));

$proto10["m_sql"] = "cfe_nombre";
$proto10["m_srcTableName"] = "evidencias_p_th";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "cfe_file",
	"m_strTable" => "evidencias_p",
	"m_srcTableName" => "evidencias_p_th"
));

$proto12["m_sql"] = "cfe_file";
$proto12["m_srcTableName"] = "evidencias_p_th";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "cfe_date",
	"m_strTable" => "evidencias_p",
	"m_srcTableName" => "evidencias_p_th"
));

$proto14["m_sql"] = "cfe_date";
$proto14["m_srcTableName"] = "evidencias_p_th";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "cfe_status",
	"m_strTable" => "evidencias_p",
	"m_srcTableName" => "evidencias_p_th"
));

$proto16["m_sql"] = "cfe_status";
$proto16["m_srcTableName"] = "evidencias_p_th";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "cfe_user",
	"m_strTable" => "evidencias_p",
	"m_srcTableName" => "evidencias_p_th"
));

$proto18["m_sql"] = "cfe_user";
$proto18["m_srcTableName"] = "evidencias_p_th";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "evidencias_p";
$proto21["m_srcTableName"] = "evidencias_p_th";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "cfe_id";
$proto21["m_columns"][] = "evaluacion_id_fk";
$proto21["m_columns"][] = "cfe_nombre";
$proto21["m_columns"][] = "cfe_file";
$proto21["m_columns"][] = "cfe_date";
$proto21["m_columns"][] = "cfe_status";
$proto21["m_columns"][] = "cfe_user";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "evidencias_p";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "evidencias_p_th";
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
$proto0["m_srcTableName"]="evidencias_p_th";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_evidencias_p_th = createSqlQuery_evidencias_p_th();


	
				;

							

$tdataevidencias_p_th[".sqlquery"] = $queryData_evidencias_p_th;



$tdataevidencias_p_th[".hasEvents"] = false;

?>