<?php
$tdataq_caldef_p_x005 = array();
$tdataq_caldef_p_x005[".searchableFields"] = array();
$tdataq_caldef_p_x005[".ShortName"] = "q_caldef_p_x005";
$tdataq_caldef_p_x005[".OwnerID"] = "idEvaluado";
$tdataq_caldef_p_x005[".OriginalTable"] = "q_caldef_p_x005";


$tdataq_caldef_p_x005[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataq_caldef_p_x005[".originalPagesByType"] = $tdataq_caldef_p_x005[".pagesByType"];
$tdataq_caldef_p_x005[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataq_caldef_p_x005[".originalPages"] = $tdataq_caldef_p_x005[".pages"];
$tdataq_caldef_p_x005[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataq_caldef_p_x005[".originalDefaultPages"] = $tdataq_caldef_p_x005[".defaultPages"];

//	field labels
$fieldLabelsq_caldef_p_x005 = array();
$fieldToolTipsq_caldef_p_x005 = array();
$pageTitlesq_caldef_p_x005 = array();
$placeHoldersq_caldef_p_x005 = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsq_caldef_p_x005["Spanish"] = array();
	$fieldToolTipsq_caldef_p_x005["Spanish"] = array();
	$placeHoldersq_caldef_p_x005["Spanish"] = array();
	$pageTitlesq_caldef_p_x005["Spanish"] = array();
	$fieldLabelsq_caldef_p_x005["Spanish"]["idEvaluado"] = "Id Evaluado";
	$fieldToolTipsq_caldef_p_x005["Spanish"]["idEvaluado"] = "";
	$placeHoldersq_caldef_p_x005["Spanish"]["idEvaluado"] = "";
	$fieldLabelsq_caldef_p_x005["Spanish"]["vigencia"] = "Vigencia";
	$fieldToolTipsq_caldef_p_x005["Spanish"]["vigencia"] = "";
	$placeHoldersq_caldef_p_x005["Spanish"]["vigencia"] = "";
	$fieldLabelsq_caldef_p_x005["Spanish"]["evaluacionesprocesadas"] = "Evaluaciones procesadas";
	$fieldToolTipsq_caldef_p_x005["Spanish"]["evaluacionesprocesadas"] = "";
	$placeHoldersq_caldef_p_x005["Spanish"]["evaluacionesprocesadas"] = "";
	$fieldLabelsq_caldef_p_x005["Spanish"]["caldefinitiva"] = "Calificación definitiva";
	$fieldToolTipsq_caldef_p_x005["Spanish"]["caldefinitiva"] = "";
	$placeHoldersq_caldef_p_x005["Spanish"]["caldefinitiva"] = "";
	$fieldLabelsq_caldef_p_x005["Spanish"]["nivel_cumplimiento"] = "Nivel de cumplimiento";
	$fieldToolTipsq_caldef_p_x005["Spanish"]["nivel_cumplimiento"] = "";
	$placeHoldersq_caldef_p_x005["Spanish"]["nivel_cumplimiento"] = "";
	$fieldLabelsq_caldef_p_x005["Spanish"]["idEvaluador"] = "Evaluador final";
	$fieldToolTipsq_caldef_p_x005["Spanish"]["idEvaluador"] = "";
	$placeHoldersq_caldef_p_x005["Spanish"]["idEvaluador"] = "";
	if (count($fieldToolTipsq_caldef_p_x005["Spanish"]))
		$tdataq_caldef_p_x005[".isUseToolTips"] = true;
}


	$tdataq_caldef_p_x005[".NCSearch"] = true;



$tdataq_caldef_p_x005[".shortTableName"] = "q_caldef_p_x005";
$tdataq_caldef_p_x005[".nSecOptions"] = 1;

$tdataq_caldef_p_x005[".mainTableOwnerID"] = "idEvaluado";
$tdataq_caldef_p_x005[".entityType"] = 0;
$tdataq_caldef_p_x005[".connId"] = "edl2_at_127_0_0_1";


$tdataq_caldef_p_x005[".strOriginalTableName"] = "q_caldef_p_x005";

	



$tdataq_caldef_p_x005[".showAddInPopup"] = false;

$tdataq_caldef_p_x005[".showEditInPopup"] = false;

$tdataq_caldef_p_x005[".showViewInPopup"] = false;

$tdataq_caldef_p_x005[".listAjax"] = false;
//	temporary
//$tdataq_caldef_p_x005[".listAjax"] = false;

	$tdataq_caldef_p_x005[".audit"] = true;

	$tdataq_caldef_p_x005[".locking"] = true;


$pages = $tdataq_caldef_p_x005[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataq_caldef_p_x005[".edit"] = true;
	$tdataq_caldef_p_x005[".afterEditAction"] = 1;
	$tdataq_caldef_p_x005[".closePopupAfterEdit"] = 1;
	$tdataq_caldef_p_x005[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataq_caldef_p_x005[".add"] = true;
$tdataq_caldef_p_x005[".afterAddAction"] = 1;
$tdataq_caldef_p_x005[".closePopupAfterAdd"] = 1;
$tdataq_caldef_p_x005[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataq_caldef_p_x005[".list"] = true;
}



$tdataq_caldef_p_x005[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataq_caldef_p_x005[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataq_caldef_p_x005[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataq_caldef_p_x005[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataq_caldef_p_x005[".printFriendly"] = true;
}



$tdataq_caldef_p_x005[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataq_caldef_p_x005[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataq_caldef_p_x005[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataq_caldef_p_x005[".isUseAjaxSuggest"] = true;



																																													

$tdataq_caldef_p_x005[".ajaxCodeSnippetAdded"] = false;

$tdataq_caldef_p_x005[".buttonsAdded"] = false;

$tdataq_caldef_p_x005[".addPageEvents"] = false;

// use timepicker for search panel
$tdataq_caldef_p_x005[".isUseTimeForSearch"] = false;


$tdataq_caldef_p_x005[".badgeColor"] = "8FBC8B";


$tdataq_caldef_p_x005[".allSearchFields"] = array();
$tdataq_caldef_p_x005[".filterFields"] = array();
$tdataq_caldef_p_x005[".requiredSearchFields"] = array();

$tdataq_caldef_p_x005[".googleLikeFields"] = array();
$tdataq_caldef_p_x005[".googleLikeFields"][] = "idEvaluado";
$tdataq_caldef_p_x005[".googleLikeFields"][] = "idEvaluador";
$tdataq_caldef_p_x005[".googleLikeFields"][] = "vigencia";
$tdataq_caldef_p_x005[".googleLikeFields"][] = "evaluacionesprocesadas";
$tdataq_caldef_p_x005[".googleLikeFields"][] = "caldefinitiva";
$tdataq_caldef_p_x005[".googleLikeFields"][] = "nivel_cumplimiento";



$tdataq_caldef_p_x005[".tableType"] = "list";

$tdataq_caldef_p_x005[".printerPageOrientation"] = 0;
$tdataq_caldef_p_x005[".nPrinterPageScale"] = 100;

$tdataq_caldef_p_x005[".nPrinterSplitRecords"] = 40;

$tdataq_caldef_p_x005[".geocodingEnabled"] = false;







$tdataq_caldef_p_x005[".noRecordsFirstPage"] = true;



$tdataq_caldef_p_x005[".pageSize"] = 20;

$tdataq_caldef_p_x005[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataq_caldef_p_x005[".strOrderBy"] = $tstrOrderBy;

$tdataq_caldef_p_x005[".orderindexes"] = array();


$tdataq_caldef_p_x005[".sqlHead"] = "SELECT idEvaluado,  	idEvaluador,  	vigencia,  	evaluacionesprocesadas,  	caldefinitiva,  	nivel_cumplimiento";
$tdataq_caldef_p_x005[".sqlFrom"] = "FROM q_caldef_p_x005";
$tdataq_caldef_p_x005[".sqlWhereExpr"] = "";
$tdataq_caldef_p_x005[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataq_caldef_p_x005[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataq_caldef_p_x005[".arrGroupsPerPage"] = $arrGPP;

$tdataq_caldef_p_x005[".highlightSearchResults"] = true;

$tableKeysq_caldef_p_x005 = array();
$tableKeysq_caldef_p_x005[] = "idEvaluado";
$tableKeysq_caldef_p_x005[] = "vigencia";
$tdataq_caldef_p_x005[".Keys"] = $tableKeysq_caldef_p_x005;


$tdataq_caldef_p_x005[".hideMobileList"] = array();




//	idEvaluado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "idEvaluado";
	$fdata["GoodName"] = "idEvaluado";
	$fdata["ownerTable"] = "q_caldef_p_x005";
	$fdata["Label"] = GetFieldLabel("q_caldef_p_x005","idEvaluado");
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


	$tdataq_caldef_p_x005["idEvaluado"] = $fdata;
		$tdataq_caldef_p_x005[".searchableFields"][] = "idEvaluado";
//	idEvaluador
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "idEvaluador";
	$fdata["GoodName"] = "idEvaluador";
	$fdata["ownerTable"] = "q_caldef_p_x005";
	$fdata["Label"] = GetFieldLabel("q_caldef_p_x005","idEvaluador");
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
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "nombre_funcionario";

	

	
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


	$tdataq_caldef_p_x005["idEvaluador"] = $fdata;
		$tdataq_caldef_p_x005[".searchableFields"][] = "idEvaluador";
//	vigencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "vigencia";
	$fdata["GoodName"] = "vigencia";
	$fdata["ownerTable"] = "q_caldef_p_x005";
	$fdata["Label"] = GetFieldLabel("q_caldef_p_x005","vigencia");
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
		$fdata["filterMultiSelect"] = 1;
		$fdata["filterTotalFields"] = "idEvaluado";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataq_caldef_p_x005["vigencia"] = $fdata;
		$tdataq_caldef_p_x005[".searchableFields"][] = "vigencia";
//	evaluacionesprocesadas
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "evaluacionesprocesadas";
	$fdata["GoodName"] = "evaluacionesprocesadas";
	$fdata["ownerTable"] = "q_caldef_p_x005";
	$fdata["Label"] = GetFieldLabel("q_caldef_p_x005","evaluacionesprocesadas");
	$fdata["FieldType"] = 20;


	
	
			

		$fdata["strField"] = "evaluacionesprocesadas";

		$fdata["sourceSingle"] = "evaluacionesprocesadas";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "evaluacionesprocesadas";

	
	
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


	$tdataq_caldef_p_x005["evaluacionesprocesadas"] = $fdata;
		$tdataq_caldef_p_x005[".searchableFields"][] = "evaluacionesprocesadas";
//	caldefinitiva
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "caldefinitiva";
	$fdata["GoodName"] = "caldefinitiva";
	$fdata["ownerTable"] = "q_caldef_p_x005";
	$fdata["Label"] = GetFieldLabel("q_caldef_p_x005","caldefinitiva");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "caldefinitiva";

		$fdata["sourceSingle"] = "caldefinitiva";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "caldefinitiva";

	
	
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


	$tdataq_caldef_p_x005["caldefinitiva"] = $fdata;
		$tdataq_caldef_p_x005[".searchableFields"][] = "caldefinitiva";
//	nivel_cumplimiento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "nivel_cumplimiento";
	$fdata["GoodName"] = "nivel_cumplimiento";
	$fdata["ownerTable"] = "q_caldef_p_x005";
	$fdata["Label"] = GetFieldLabel("q_caldef_p_x005","nivel_cumplimiento");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "nivel_cumplimiento";

		$fdata["sourceSingle"] = "nivel_cumplimiento";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nivel_cumplimiento";

	
	
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
			$edata["EditParams"].= " maxlength=16";

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


	$tdataq_caldef_p_x005["nivel_cumplimiento"] = $fdata;
		$tdataq_caldef_p_x005[".searchableFields"][] = "nivel_cumplimiento";


$tables_data["q_caldef_p_x005"]=&$tdataq_caldef_p_x005;
$field_labels["q_caldef_p_x005"] = &$fieldLabelsq_caldef_p_x005;
$fieldToolTips["q_caldef_p_x005"] = &$fieldToolTipsq_caldef_p_x005;
$placeHolders["q_caldef_p_x005"] = &$placeHoldersq_caldef_p_x005;
$page_titles["q_caldef_p_x005"] = &$pageTitlesq_caldef_p_x005;


changeTextControlsToDate( "q_caldef_p_x005" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["q_caldef_p_x005"] = array();
//	evaluacion_x005
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="evaluacion_x005";
		$detailsParam["dOriginalTable"] = "evaluacion";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "evaluacion_x005";
	$detailsParam["dCaptionTable"] = GetTableCaption("evaluacion_x005");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["q_caldef_p_x005"][$dIndex] = $detailsParam;

	
		$detailsTablesData["q_caldef_p_x005"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["q_caldef_p_x005"][$dIndex]["masterKeys"][]="idEvaluado";

	$detailsTablesData["q_caldef_p_x005"][$dIndex]["masterKeys"][]="vigencia";

				$detailsTablesData["q_caldef_p_x005"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["q_caldef_p_x005"][$dIndex]["detailKeys"][]="idEvaluado";

		
	$detailsTablesData["q_caldef_p_x005"][$dIndex]["detailKeys"][]="vigencia";
//	calificacion_definitiva
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="calificacion_definitiva";
		$detailsParam["dOriginalTable"] = "calificacion_definitiva";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "calificacion_definitiva";
	$detailsParam["dCaptionTable"] = GetTableCaption("calificacion_definitiva");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["q_caldef_p_x005"][$dIndex] = $detailsParam;

	
		$detailsTablesData["q_caldef_p_x005"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["q_caldef_p_x005"][$dIndex]["masterKeys"][]="idEvaluado";

	$detailsTablesData["q_caldef_p_x005"][$dIndex]["masterKeys"][]="vigencia";

				$detailsTablesData["q_caldef_p_x005"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["q_caldef_p_x005"][$dIndex]["detailKeys"][]="idEvaluado";

		
	$detailsTablesData["q_caldef_p_x005"][$dIndex]["detailKeys"][]="vigencia";
//	evaluador_final
	
	

		$dIndex = 2;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="evaluador_final";
		$detailsParam["dOriginalTable"] = "evaluador_final";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "evaluador_final";
	$detailsParam["dCaptionTable"] = GetTableCaption("evaluador_final");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["q_caldef_p_x005"][$dIndex] = $detailsParam;

	
		$detailsTablesData["q_caldef_p_x005"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["q_caldef_p_x005"][$dIndex]["masterKeys"][]="idEvaluado";

	$detailsTablesData["q_caldef_p_x005"][$dIndex]["masterKeys"][]="vigencia";

				$detailsTablesData["q_caldef_p_x005"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["q_caldef_p_x005"][$dIndex]["detailKeys"][]="idEvaluado";

		
	$detailsTablesData["q_caldef_p_x005"][$dIndex]["detailKeys"][]="vigencia";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["q_caldef_p_x005"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_q_caldef_p_x005()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "idEvaluado,  	idEvaluador,  	vigencia,  	evaluacionesprocesadas,  	caldefinitiva,  	nivel_cumplimiento";
$proto0["m_strFrom"] = "FROM q_caldef_p_x005";
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
	"m_strName" => "idEvaluado",
	"m_strTable" => "q_caldef_p_x005",
	"m_srcTableName" => "q_caldef_p_x005"
));

$proto6["m_sql"] = "idEvaluado";
$proto6["m_srcTableName"] = "q_caldef_p_x005";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "idEvaluador",
	"m_strTable" => "q_caldef_p_x005",
	"m_srcTableName" => "q_caldef_p_x005"
));

$proto8["m_sql"] = "idEvaluador";
$proto8["m_srcTableName"] = "q_caldef_p_x005";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "vigencia",
	"m_strTable" => "q_caldef_p_x005",
	"m_srcTableName" => "q_caldef_p_x005"
));

$proto10["m_sql"] = "vigencia";
$proto10["m_srcTableName"] = "q_caldef_p_x005";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "evaluacionesprocesadas",
	"m_strTable" => "q_caldef_p_x005",
	"m_srcTableName" => "q_caldef_p_x005"
));

$proto12["m_sql"] = "evaluacionesprocesadas";
$proto12["m_srcTableName"] = "q_caldef_p_x005";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "caldefinitiva",
	"m_strTable" => "q_caldef_p_x005",
	"m_srcTableName" => "q_caldef_p_x005"
));

$proto14["m_sql"] = "caldefinitiva";
$proto14["m_srcTableName"] = "q_caldef_p_x005";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "nivel_cumplimiento",
	"m_strTable" => "q_caldef_p_x005",
	"m_srcTableName" => "q_caldef_p_x005"
));

$proto16["m_sql"] = "nivel_cumplimiento";
$proto16["m_srcTableName"] = "q_caldef_p_x005";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "q_caldef_p_x005";
$proto19["m_srcTableName"] = "q_caldef_p_x005";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "idEvaluado";
$proto19["m_columns"][] = "idEvaluador";
$proto19["m_columns"][] = "vigencia";
$proto19["m_columns"][] = "evaluacionesprocesadas";
$proto19["m_columns"][] = "caldefinitiva";
$proto19["m_columns"][] = "nivel_cumplimiento";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "q_caldef_p_x005";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "q_caldef_p_x005";
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
$proto0["m_srcTableName"]="q_caldef_p_x005";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_q_caldef_p_x005 = createSqlQuery_q_caldef_p_x005();


	
				;

						

$tdataq_caldef_p_x005[".sqlquery"] = $queryData_q_caldef_p_x005;



include_once(getabspath("include/q_caldef_p_x005_events.php"));
$tdataq_caldef_p_x005[".hasEvents"] = true;

?>