<?php
$tdataq_caldef_p_x005_adm = array();
$tdataq_caldef_p_x005_adm[".searchableFields"] = array();
$tdataq_caldef_p_x005_adm[".ShortName"] = "q_caldef_p_x005_adm";
$tdataq_caldef_p_x005_adm[".OwnerID"] = "";
$tdataq_caldef_p_x005_adm[".OriginalTable"] = "q_caldef_p_x005";


$tdataq_caldef_p_x005_adm[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataq_caldef_p_x005_adm[".originalPagesByType"] = $tdataq_caldef_p_x005_adm[".pagesByType"];
$tdataq_caldef_p_x005_adm[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataq_caldef_p_x005_adm[".originalPages"] = $tdataq_caldef_p_x005_adm[".pages"];
$tdataq_caldef_p_x005_adm[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataq_caldef_p_x005_adm[".originalDefaultPages"] = $tdataq_caldef_p_x005_adm[".defaultPages"];

//	field labels
$fieldLabelsq_caldef_p_x005_adm = array();
$fieldToolTipsq_caldef_p_x005_adm = array();
$pageTitlesq_caldef_p_x005_adm = array();
$placeHoldersq_caldef_p_x005_adm = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsq_caldef_p_x005_adm["Spanish"] = array();
	$fieldToolTipsq_caldef_p_x005_adm["Spanish"] = array();
	$placeHoldersq_caldef_p_x005_adm["Spanish"] = array();
	$pageTitlesq_caldef_p_x005_adm["Spanish"] = array();
	$fieldLabelsq_caldef_p_x005_adm["Spanish"]["idEvaluado"] = "Evaluado";
	$fieldToolTipsq_caldef_p_x005_adm["Spanish"]["idEvaluado"] = "";
	$placeHoldersq_caldef_p_x005_adm["Spanish"]["idEvaluado"] = "";
	$fieldLabelsq_caldef_p_x005_adm["Spanish"]["vigencia"] = "Vigencia";
	$fieldToolTipsq_caldef_p_x005_adm["Spanish"]["vigencia"] = "";
	$placeHoldersq_caldef_p_x005_adm["Spanish"]["vigencia"] = "";
	$fieldLabelsq_caldef_p_x005_adm["Spanish"]["evaluacionesprocesadas"] = "Evaluaciones procesadas";
	$fieldToolTipsq_caldef_p_x005_adm["Spanish"]["evaluacionesprocesadas"] = "";
	$placeHoldersq_caldef_p_x005_adm["Spanish"]["evaluacionesprocesadas"] = "";
	$fieldLabelsq_caldef_p_x005_adm["Spanish"]["caldefinitiva"] = "Calificación definitiva";
	$fieldToolTipsq_caldef_p_x005_adm["Spanish"]["caldefinitiva"] = "";
	$placeHoldersq_caldef_p_x005_adm["Spanish"]["caldefinitiva"] = "";
	$fieldLabelsq_caldef_p_x005_adm["Spanish"]["nivel_cumplimiento"] = "Nivel de cumplimiento";
	$fieldToolTipsq_caldef_p_x005_adm["Spanish"]["nivel_cumplimiento"] = "";
	$placeHoldersq_caldef_p_x005_adm["Spanish"]["nivel_cumplimiento"] = "";
	$fieldLabelsq_caldef_p_x005_adm["Spanish"]["idEvaluador"] = "Evaluador final";
	$fieldToolTipsq_caldef_p_x005_adm["Spanish"]["idEvaluador"] = "";
	$placeHoldersq_caldef_p_x005_adm["Spanish"]["idEvaluador"] = "";
	if (count($fieldToolTipsq_caldef_p_x005_adm["Spanish"]))
		$tdataq_caldef_p_x005_adm[".isUseToolTips"] = true;
}


	$tdataq_caldef_p_x005_adm[".NCSearch"] = true;



$tdataq_caldef_p_x005_adm[".shortTableName"] = "q_caldef_p_x005_adm";
$tdataq_caldef_p_x005_adm[".nSecOptions"] = 0;

$tdataq_caldef_p_x005_adm[".mainTableOwnerID"] = "";
$tdataq_caldef_p_x005_adm[".entityType"] = 1;
$tdataq_caldef_p_x005_adm[".connId"] = "edl2_at_127_0_0_1";


$tdataq_caldef_p_x005_adm[".strOriginalTableName"] = "q_caldef_p_x005";

	



$tdataq_caldef_p_x005_adm[".showAddInPopup"] = false;

$tdataq_caldef_p_x005_adm[".showEditInPopup"] = false;

$tdataq_caldef_p_x005_adm[".showViewInPopup"] = false;

$tdataq_caldef_p_x005_adm[".listAjax"] = false;
//	temporary
//$tdataq_caldef_p_x005_adm[".listAjax"] = false;

	$tdataq_caldef_p_x005_adm[".audit"] = true;

	$tdataq_caldef_p_x005_adm[".locking"] = true;


$pages = $tdataq_caldef_p_x005_adm[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataq_caldef_p_x005_adm[".edit"] = true;
	$tdataq_caldef_p_x005_adm[".afterEditAction"] = 1;
	$tdataq_caldef_p_x005_adm[".closePopupAfterEdit"] = 1;
	$tdataq_caldef_p_x005_adm[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataq_caldef_p_x005_adm[".add"] = true;
$tdataq_caldef_p_x005_adm[".afterAddAction"] = 1;
$tdataq_caldef_p_x005_adm[".closePopupAfterAdd"] = 1;
$tdataq_caldef_p_x005_adm[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataq_caldef_p_x005_adm[".list"] = true;
}



$tdataq_caldef_p_x005_adm[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataq_caldef_p_x005_adm[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataq_caldef_p_x005_adm[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataq_caldef_p_x005_adm[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataq_caldef_p_x005_adm[".printFriendly"] = true;
}



$tdataq_caldef_p_x005_adm[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataq_caldef_p_x005_adm[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataq_caldef_p_x005_adm[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataq_caldef_p_x005_adm[".isUseAjaxSuggest"] = true;



																																													

$tdataq_caldef_p_x005_adm[".ajaxCodeSnippetAdded"] = false;

$tdataq_caldef_p_x005_adm[".buttonsAdded"] = false;

$tdataq_caldef_p_x005_adm[".addPageEvents"] = false;

// use timepicker for search panel
$tdataq_caldef_p_x005_adm[".isUseTimeForSearch"] = false;


$tdataq_caldef_p_x005_adm[".badgeColor"] = "DB7093";


$tdataq_caldef_p_x005_adm[".allSearchFields"] = array();
$tdataq_caldef_p_x005_adm[".filterFields"] = array();
$tdataq_caldef_p_x005_adm[".requiredSearchFields"] = array();

$tdataq_caldef_p_x005_adm[".googleLikeFields"] = array();
$tdataq_caldef_p_x005_adm[".googleLikeFields"][] = "idEvaluado";
$tdataq_caldef_p_x005_adm[".googleLikeFields"][] = "idEvaluador";
$tdataq_caldef_p_x005_adm[".googleLikeFields"][] = "vigencia";
$tdataq_caldef_p_x005_adm[".googleLikeFields"][] = "evaluacionesprocesadas";
$tdataq_caldef_p_x005_adm[".googleLikeFields"][] = "caldefinitiva";
$tdataq_caldef_p_x005_adm[".googleLikeFields"][] = "nivel_cumplimiento";



$tdataq_caldef_p_x005_adm[".tableType"] = "list";

$tdataq_caldef_p_x005_adm[".printerPageOrientation"] = 0;
$tdataq_caldef_p_x005_adm[".nPrinterPageScale"] = 100;

$tdataq_caldef_p_x005_adm[".nPrinterSplitRecords"] = 40;

$tdataq_caldef_p_x005_adm[".geocodingEnabled"] = false;










$tdataq_caldef_p_x005_adm[".pageSize"] = 20;

$tdataq_caldef_p_x005_adm[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataq_caldef_p_x005_adm[".strOrderBy"] = $tstrOrderBy;

$tdataq_caldef_p_x005_adm[".orderindexes"] = array();


$tdataq_caldef_p_x005_adm[".sqlHead"] = "SELECT idEvaluado,  	idEvaluador,  	vigencia,  	evaluacionesprocesadas,  	caldefinitiva,  	nivel_cumplimiento";
$tdataq_caldef_p_x005_adm[".sqlFrom"] = "FROM q_caldef_p_x005";
$tdataq_caldef_p_x005_adm[".sqlWhereExpr"] = "";
$tdataq_caldef_p_x005_adm[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataq_caldef_p_x005_adm[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataq_caldef_p_x005_adm[".arrGroupsPerPage"] = $arrGPP;

$tdataq_caldef_p_x005_adm[".highlightSearchResults"] = true;

$tableKeysq_caldef_p_x005_adm = array();
$tdataq_caldef_p_x005_adm[".Keys"] = $tableKeysq_caldef_p_x005_adm;


$tdataq_caldef_p_x005_adm[".hideMobileList"] = array();




//	idEvaluado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "idEvaluado";
	$fdata["GoodName"] = "idEvaluado";
	$fdata["ownerTable"] = "q_caldef_p_x005";
	$fdata["Label"] = GetFieldLabel("q_caldef_p_x005_adm","idEvaluado");
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
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "nombre";

	

	
	$edata["LookupOrderBy"] = "nombre";

	
	
	
	

	
	
	
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

			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
		$fdata["searchOptionsList"][] = "Between";
		$fdata["searchOptionsList"][] = "Empty";
		$fdata["searchOptionsList"][] = "NOT Empty";
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


	$tdataq_caldef_p_x005_adm["idEvaluado"] = $fdata;
		$tdataq_caldef_p_x005_adm[".searchableFields"][] = "idEvaluado";
//	idEvaluador
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "idEvaluador";
	$fdata["GoodName"] = "idEvaluador";
	$fdata["ownerTable"] = "q_caldef_p_x005";
	$fdata["Label"] = GetFieldLabel("q_caldef_p_x005_adm","idEvaluador");
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
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "nombre_funcionario";

	

	
	$edata["LookupOrderBy"] = "nombre_funcionario";

	
	
	
	

	
	
	
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

			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
		$fdata["searchOptionsList"][] = "Between";
		$fdata["searchOptionsList"][] = "Empty";
		$fdata["searchOptionsList"][] = "NOT Empty";
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


	$tdataq_caldef_p_x005_adm["idEvaluador"] = $fdata;
		$tdataq_caldef_p_x005_adm[".searchableFields"][] = "idEvaluador";
//	vigencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "vigencia";
	$fdata["GoodName"] = "vigencia";
	$fdata["ownerTable"] = "q_caldef_p_x005";
	$fdata["Label"] = GetFieldLabel("q_caldef_p_x005_adm","vigencia");
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
		$fdata["defaultSearchOption"] = "Equals";

			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
		$fdata["searchOptionsList"][] = "Between";
		$fdata["searchOptionsList"][] = "Empty";
		$fdata["searchOptionsList"][] = "NOT Empty";
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


	$tdataq_caldef_p_x005_adm["vigencia"] = $fdata;
		$tdataq_caldef_p_x005_adm[".searchableFields"][] = "vigencia";
//	evaluacionesprocesadas
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "evaluacionesprocesadas";
	$fdata["GoodName"] = "evaluacionesprocesadas";
	$fdata["ownerTable"] = "q_caldef_p_x005";
	$fdata["Label"] = GetFieldLabel("q_caldef_p_x005_adm","evaluacionesprocesadas");
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
		$fdata["defaultSearchOption"] = "Equals";

			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
		$fdata["searchOptionsList"][] = "Between";
		$fdata["searchOptionsList"][] = "Empty";
		$fdata["searchOptionsList"][] = "NOT Empty";
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


	$tdataq_caldef_p_x005_adm["evaluacionesprocesadas"] = $fdata;
		$tdataq_caldef_p_x005_adm[".searchableFields"][] = "evaluacionesprocesadas";
//	caldefinitiva
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "caldefinitiva";
	$fdata["GoodName"] = "caldefinitiva";
	$fdata["ownerTable"] = "q_caldef_p_x005";
	$fdata["Label"] = GetFieldLabel("q_caldef_p_x005_adm","caldefinitiva");
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
		$fdata["defaultSearchOption"] = "Equals";

			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
		$fdata["searchOptionsList"][] = "Between";
		$fdata["searchOptionsList"][] = "Empty";
		$fdata["searchOptionsList"][] = "NOT Empty";
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


	$tdataq_caldef_p_x005_adm["caldefinitiva"] = $fdata;
		$tdataq_caldef_p_x005_adm[".searchableFields"][] = "caldefinitiva";
//	nivel_cumplimiento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "nivel_cumplimiento";
	$fdata["GoodName"] = "nivel_cumplimiento";
	$fdata["ownerTable"] = "q_caldef_p_x005";
	$fdata["Label"] = GetFieldLabel("q_caldef_p_x005_adm","nivel_cumplimiento");
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
		$fdata["defaultSearchOption"] = "Equals";

			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
		$fdata["searchOptionsList"][] = "Between";
		$fdata["searchOptionsList"][] = "Empty";
		$fdata["searchOptionsList"][] = "NOT Empty";
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


	$tdataq_caldef_p_x005_adm["nivel_cumplimiento"] = $fdata;
		$tdataq_caldef_p_x005_adm[".searchableFields"][] = "nivel_cumplimiento";


$tables_data["q_caldef_p_x005_adm"]=&$tdataq_caldef_p_x005_adm;
$field_labels["q_caldef_p_x005_adm"] = &$fieldLabelsq_caldef_p_x005_adm;
$fieldToolTips["q_caldef_p_x005_adm"] = &$fieldToolTipsq_caldef_p_x005_adm;
$placeHolders["q_caldef_p_x005_adm"] = &$placeHoldersq_caldef_p_x005_adm;
$page_titles["q_caldef_p_x005_adm"] = &$pageTitlesq_caldef_p_x005_adm;


changeTextControlsToDate( "q_caldef_p_x005_adm" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["q_caldef_p_x005_adm"] = array();
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


		
	$detailsTablesData["q_caldef_p_x005_adm"][$dIndex] = $detailsParam;

	
		$detailsTablesData["q_caldef_p_x005_adm"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["q_caldef_p_x005_adm"][$dIndex]["masterKeys"][]="idEvaluado";

	$detailsTablesData["q_caldef_p_x005_adm"][$dIndex]["masterKeys"][]="vigencia";

				$detailsTablesData["q_caldef_p_x005_adm"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["q_caldef_p_x005_adm"][$dIndex]["detailKeys"][]="idEvaluado";

		
	$detailsTablesData["q_caldef_p_x005_adm"][$dIndex]["detailKeys"][]="vigencia";
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


		
	$detailsTablesData["q_caldef_p_x005_adm"][$dIndex] = $detailsParam;

	
		$detailsTablesData["q_caldef_p_x005_adm"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["q_caldef_p_x005_adm"][$dIndex]["masterKeys"][]="idEvaluado";

	$detailsTablesData["q_caldef_p_x005_adm"][$dIndex]["masterKeys"][]="vigencia";

				$detailsTablesData["q_caldef_p_x005_adm"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["q_caldef_p_x005_adm"][$dIndex]["detailKeys"][]="idEvaluado";

		
	$detailsTablesData["q_caldef_p_x005_adm"][$dIndex]["detailKeys"][]="vigencia";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["q_caldef_p_x005_adm"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_q_caldef_p_x005_adm()
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
	"m_srcTableName" => "q_caldef_p_x005_adm"
));

$proto6["m_sql"] = "idEvaluado";
$proto6["m_srcTableName"] = "q_caldef_p_x005_adm";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "idEvaluador",
	"m_strTable" => "q_caldef_p_x005",
	"m_srcTableName" => "q_caldef_p_x005_adm"
));

$proto8["m_sql"] = "idEvaluador";
$proto8["m_srcTableName"] = "q_caldef_p_x005_adm";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "vigencia",
	"m_strTable" => "q_caldef_p_x005",
	"m_srcTableName" => "q_caldef_p_x005_adm"
));

$proto10["m_sql"] = "vigencia";
$proto10["m_srcTableName"] = "q_caldef_p_x005_adm";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "evaluacionesprocesadas",
	"m_strTable" => "q_caldef_p_x005",
	"m_srcTableName" => "q_caldef_p_x005_adm"
));

$proto12["m_sql"] = "evaluacionesprocesadas";
$proto12["m_srcTableName"] = "q_caldef_p_x005_adm";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "caldefinitiva",
	"m_strTable" => "q_caldef_p_x005",
	"m_srcTableName" => "q_caldef_p_x005_adm"
));

$proto14["m_sql"] = "caldefinitiva";
$proto14["m_srcTableName"] = "q_caldef_p_x005_adm";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "nivel_cumplimiento",
	"m_strTable" => "q_caldef_p_x005",
	"m_srcTableName" => "q_caldef_p_x005_adm"
));

$proto16["m_sql"] = "nivel_cumplimiento";
$proto16["m_srcTableName"] = "q_caldef_p_x005_adm";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "q_caldef_p_x005";
$proto19["m_srcTableName"] = "q_caldef_p_x005_adm";
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
$proto18["m_srcTableName"] = "q_caldef_p_x005_adm";
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
$proto0["m_srcTableName"]="q_caldef_p_x005_adm";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_q_caldef_p_x005_adm = createSqlQuery_q_caldef_p_x005_adm();


	
				;

						

$tdataq_caldef_p_x005_adm[".sqlquery"] = $queryData_q_caldef_p_x005_adm;



include_once(getabspath("include/q_caldef_p_x005_adm_events.php"));
$tdataq_caldef_p_x005_adm[".hasEvents"] = true;

?>