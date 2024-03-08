<?php
$tdatafuncionario_adm = array();
$tdatafuncionario_adm[".searchableFields"] = array();
$tdatafuncionario_adm[".ShortName"] = "funcionario_adm";
$tdatafuncionario_adm[".OwnerID"] = "";
$tdatafuncionario_adm[".OriginalTable"] = "funcionario";


$tdatafuncionario_adm[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatafuncionario_adm[".originalPagesByType"] = $tdatafuncionario_adm[".pagesByType"];
$tdatafuncionario_adm[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatafuncionario_adm[".originalPages"] = $tdatafuncionario_adm[".pages"];
$tdatafuncionario_adm[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatafuncionario_adm[".originalDefaultPages"] = $tdatafuncionario_adm[".defaultPages"];

//	field labels
$fieldLabelsfuncionario_adm = array();
$fieldToolTipsfuncionario_adm = array();
$pageTitlesfuncionario_adm = array();
$placeHoldersfuncionario_adm = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsfuncionario_adm["Spanish"] = array();
	$fieldToolTipsfuncionario_adm["Spanish"] = array();
	$placeHoldersfuncionario_adm["Spanish"] = array();
	$pageTitlesfuncionario_adm["Spanish"] = array();
	$fieldLabelsfuncionario_adm["Spanish"]["id"] = "ID";
	$fieldToolTipsfuncionario_adm["Spanish"]["id"] = "";
	$placeHoldersfuncionario_adm["Spanish"]["id"] = "";
	$fieldLabelsfuncionario_adm["Spanish"]["idEvaluador"] = "Id Evaluador";
	$fieldToolTipsfuncionario_adm["Spanish"]["idEvaluador"] = "";
	$placeHoldersfuncionario_adm["Spanish"]["idEvaluador"] = "";
	$fieldLabelsfuncionario_adm["Spanish"]["IdEvaluador_c"] = "IdEvaluador C";
	$fieldToolTipsfuncionario_adm["Spanish"]["IdEvaluador_c"] = "";
	$placeHoldersfuncionario_adm["Spanish"]["IdEvaluador_c"] = "";
	$fieldLabelsfuncionario_adm["Spanish"]["cedula"] = "Documento";
	$fieldToolTipsfuncionario_adm["Spanish"]["cedula"] = "";
	$placeHoldersfuncionario_adm["Spanish"]["cedula"] = "";
	$fieldLabelsfuncionario_adm["Spanish"]["lugarExpedicion"] = "Lugar Expedición";
	$fieldToolTipsfuncionario_adm["Spanish"]["lugarExpedicion"] = "";
	$placeHoldersfuncionario_adm["Spanish"]["lugarExpedicion"] = "";
	$fieldLabelsfuncionario_adm["Spanish"]["refer"] = "Refer";
	$fieldToolTipsfuncionario_adm["Spanish"]["refer"] = "";
	$placeHoldersfuncionario_adm["Spanish"]["refer"] = "";
	$fieldLabelsfuncionario_adm["Spanish"]["fechaIngreso"] = "Fecha ingreso";
	$fieldToolTipsfuncionario_adm["Spanish"]["fechaIngreso"] = "";
	$placeHoldersfuncionario_adm["Spanish"]["fechaIngreso"] = "";
	$fieldLabelsfuncionario_adm["Spanish"]["nombre"] = "Nombres y Apellidos";
	$fieldToolTipsfuncionario_adm["Spanish"]["nombre"] = "";
	$placeHoldersfuncionario_adm["Spanish"]["nombre"] = "";
	$fieldLabelsfuncionario_adm["Spanish"]["ubicacionFisica"] = "Ubicacion Fisica";
	$fieldToolTipsfuncionario_adm["Spanish"]["ubicacionFisica"] = "";
	$placeHoldersfuncionario_adm["Spanish"]["ubicacionFisica"] = "";
	$fieldLabelsfuncionario_adm["Spanish"]["idCargo"] = "Cargo";
	$fieldToolTipsfuncionario_adm["Spanish"]["idCargo"] = "";
	$placeHoldersfuncionario_adm["Spanish"]["idCargo"] = "";
	$fieldLabelsfuncionario_adm["Spanish"]["idDependencia"] = "Dependencia";
	$fieldToolTipsfuncionario_adm["Spanish"]["idDependencia"] = "";
	$placeHoldersfuncionario_adm["Spanish"]["idDependencia"] = "";
	$fieldLabelsfuncionario_adm["Spanish"]["idContrato"] = "Contrato";
	$fieldToolTipsfuncionario_adm["Spanish"]["idContrato"] = "";
	$placeHoldersfuncionario_adm["Spanish"]["idContrato"] = "";
	$fieldLabelsfuncionario_adm["Spanish"]["idNombramiento"] = "Nombramiento";
	$fieldToolTipsfuncionario_adm["Spanish"]["idNombramiento"] = "";
	$placeHoldersfuncionario_adm["Spanish"]["idNombramiento"] = "";
	$fieldLabelsfuncionario_adm["Spanish"]["estado"] = "Estado";
	$fieldToolTipsfuncionario_adm["Spanish"]["estado"] = "";
	$placeHoldersfuncionario_adm["Spanish"]["estado"] = "";
	$fieldLabelsfuncionario_adm["Spanish"]["estado_funcionario"] = "Estado Funcionario";
	$fieldToolTipsfuncionario_adm["Spanish"]["estado_funcionario"] = "";
	$placeHoldersfuncionario_adm["Spanish"]["estado_funcionario"] = "";
	$fieldLabelsfuncionario_adm["Spanish"]["CargoProp"] = "Cargo Prop";
	$fieldToolTipsfuncionario_adm["Spanish"]["CargoProp"] = "";
	$placeHoldersfuncionario_adm["Spanish"]["CargoProp"] = "";
	$fieldLabelsfuncionario_adm["Spanish"]["GradoProp"] = "Grado Prop";
	$fieldToolTipsfuncionario_adm["Spanish"]["GradoProp"] = "";
	$placeHoldersfuncionario_adm["Spanish"]["GradoProp"] = "";
	$fieldLabelsfuncionario_adm["Spanish"]["nr_c19"] = "Nr C19";
	$fieldToolTipsfuncionario_adm["Spanish"]["nr_c19"] = "";
	$placeHoldersfuncionario_adm["Spanish"]["nr_c19"] = "";
	if (count($fieldToolTipsfuncionario_adm["Spanish"]))
		$tdatafuncionario_adm[".isUseToolTips"] = true;
}


	$tdatafuncionario_adm[".NCSearch"] = true;



$tdatafuncionario_adm[".shortTableName"] = "funcionario_adm";
$tdatafuncionario_adm[".nSecOptions"] = 0;

$tdatafuncionario_adm[".mainTableOwnerID"] = "";
$tdatafuncionario_adm[".entityType"] = 1;
$tdatafuncionario_adm[".connId"] = "edl_at_127_0_0_1";


$tdatafuncionario_adm[".strOriginalTableName"] = "funcionario";

	



$tdatafuncionario_adm[".showAddInPopup"] = false;

$tdatafuncionario_adm[".showEditInPopup"] = false;

$tdatafuncionario_adm[".showViewInPopup"] = false;

$tdatafuncionario_adm[".listAjax"] = false;
//	temporary
//$tdatafuncionario_adm[".listAjax"] = false;

	$tdatafuncionario_adm[".audit"] = true;

	$tdatafuncionario_adm[".locking"] = true;


$pages = $tdatafuncionario_adm[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatafuncionario_adm[".edit"] = true;
	$tdatafuncionario_adm[".afterEditAction"] = 1;
	$tdatafuncionario_adm[".closePopupAfterEdit"] = 1;
	$tdatafuncionario_adm[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatafuncionario_adm[".add"] = true;
$tdatafuncionario_adm[".afterAddAction"] = 1;
$tdatafuncionario_adm[".closePopupAfterAdd"] = 1;
$tdatafuncionario_adm[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatafuncionario_adm[".list"] = true;
}



$tdatafuncionario_adm[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatafuncionario_adm[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatafuncionario_adm[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatafuncionario_adm[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatafuncionario_adm[".printFriendly"] = true;
}



$tdatafuncionario_adm[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatafuncionario_adm[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatafuncionario_adm[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatafuncionario_adm[".isUseAjaxSuggest"] = true;



																																													

$tdatafuncionario_adm[".ajaxCodeSnippetAdded"] = false;

$tdatafuncionario_adm[".buttonsAdded"] = false;

$tdatafuncionario_adm[".addPageEvents"] = false;

// use timepicker for search panel
$tdatafuncionario_adm[".isUseTimeForSearch"] = false;


$tdatafuncionario_adm[".badgeColor"] = "B22222";


$tdatafuncionario_adm[".allSearchFields"] = array();
$tdatafuncionario_adm[".filterFields"] = array();
$tdatafuncionario_adm[".requiredSearchFields"] = array();

$tdatafuncionario_adm[".googleLikeFields"] = array();
$tdatafuncionario_adm[".googleLikeFields"][] = "id";
$tdatafuncionario_adm[".googleLikeFields"][] = "idEvaluador";
$tdatafuncionario_adm[".googleLikeFields"][] = "IdEvaluador_c";
$tdatafuncionario_adm[".googleLikeFields"][] = "cedula";
$tdatafuncionario_adm[".googleLikeFields"][] = "lugarExpedicion";
$tdatafuncionario_adm[".googleLikeFields"][] = "refer";
$tdatafuncionario_adm[".googleLikeFields"][] = "fechaIngreso";
$tdatafuncionario_adm[".googleLikeFields"][] = "nombre";
$tdatafuncionario_adm[".googleLikeFields"][] = "ubicacionFisica";
$tdatafuncionario_adm[".googleLikeFields"][] = "idCargo";
$tdatafuncionario_adm[".googleLikeFields"][] = "idDependencia";
$tdatafuncionario_adm[".googleLikeFields"][] = "idContrato";
$tdatafuncionario_adm[".googleLikeFields"][] = "idNombramiento";
$tdatafuncionario_adm[".googleLikeFields"][] = "estado";
$tdatafuncionario_adm[".googleLikeFields"][] = "estado_funcionario";
$tdatafuncionario_adm[".googleLikeFields"][] = "CargoProp";
$tdatafuncionario_adm[".googleLikeFields"][] = "GradoProp";
$tdatafuncionario_adm[".googleLikeFields"][] = "nr_c19";



$tdatafuncionario_adm[".tableType"] = "list";

$tdatafuncionario_adm[".printerPageOrientation"] = 0;
$tdatafuncionario_adm[".nPrinterPageScale"] = 100;

$tdatafuncionario_adm[".nPrinterSplitRecords"] = 40;

$tdatafuncionario_adm[".geocodingEnabled"] = false;










$tdatafuncionario_adm[".pageSize"] = 20;

$tdatafuncionario_adm[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatafuncionario_adm[".strOrderBy"] = $tstrOrderBy;

$tdatafuncionario_adm[".orderindexes"] = array();


$tdatafuncionario_adm[".sqlHead"] = "SELECT id,  	idEvaluador,  	IdEvaluador_c,  	cedula,  	lugarExpedicion,  	refer,  	fechaIngreso,  	nombre,  	ubicacionFisica,  	idCargo,  	idDependencia,  	idContrato,  	idNombramiento,  	estado,  	estado_funcionario,  	CargoProp,  	GradoProp,  	nr_c19";
$tdatafuncionario_adm[".sqlFrom"] = "FROM funcionario";
$tdatafuncionario_adm[".sqlWhereExpr"] = "";
$tdatafuncionario_adm[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatafuncionario_adm[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatafuncionario_adm[".arrGroupsPerPage"] = $arrGPP;

$tdatafuncionario_adm[".highlightSearchResults"] = true;

$tableKeysfuncionario_adm = array();
$tableKeysfuncionario_adm[] = "id";
$tdatafuncionario_adm[".Keys"] = $tableKeysfuncionario_adm;


$tdatafuncionario_adm[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "funcionario";
	$fdata["Label"] = GetFieldLabel("funcionario_adm","id");
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


	$tdatafuncionario_adm["id"] = $fdata;
		$tdatafuncionario_adm[".searchableFields"][] = "id";
//	idEvaluador
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "idEvaluador";
	$fdata["GoodName"] = "idEvaluador";
	$fdata["ownerTable"] = "funcionario";
	$fdata["Label"] = GetFieldLabel("funcionario_adm","idEvaluador");
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


	$tdatafuncionario_adm["idEvaluador"] = $fdata;
		$tdatafuncionario_adm[".searchableFields"][] = "idEvaluador";
//	IdEvaluador_c
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "IdEvaluador_c";
	$fdata["GoodName"] = "IdEvaluador_c";
	$fdata["ownerTable"] = "funcionario";
	$fdata["Label"] = GetFieldLabel("funcionario_adm","IdEvaluador_c");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "IdEvaluador_c";

		$fdata["sourceSingle"] = "IdEvaluador_c";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "IdEvaluador_c";

	
	
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


	$tdatafuncionario_adm["IdEvaluador_c"] = $fdata;
		$tdatafuncionario_adm[".searchableFields"][] = "IdEvaluador_c";
//	cedula
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "cedula";
	$fdata["GoodName"] = "cedula";
	$fdata["ownerTable"] = "funcionario";
	$fdata["Label"] = GetFieldLabel("funcionario_adm","cedula");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cedula";

		$fdata["sourceSingle"] = "cedula";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cedula";

	
	
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


	$tdatafuncionario_adm["cedula"] = $fdata;
		$tdatafuncionario_adm[".searchableFields"][] = "cedula";
//	lugarExpedicion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "lugarExpedicion";
	$fdata["GoodName"] = "lugarExpedicion";
	$fdata["ownerTable"] = "funcionario";
	$fdata["Label"] = GetFieldLabel("funcionario_adm","lugarExpedicion");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "lugarExpedicion";

		$fdata["sourceSingle"] = "lugarExpedicion";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "lugarExpedicion";

	
	
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
			$edata["EditParams"].= " maxlength=45";

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


	$tdatafuncionario_adm["lugarExpedicion"] = $fdata;
		$tdatafuncionario_adm[".searchableFields"][] = "lugarExpedicion";
//	refer
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "refer";
	$fdata["GoodName"] = "refer";
	$fdata["ownerTable"] = "funcionario";
	$fdata["Label"] = GetFieldLabel("funcionario_adm","refer");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "refer";

		$fdata["sourceSingle"] = "refer";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "refer";

	
	
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
			$edata["EditParams"].= " maxlength=45";

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


	$tdatafuncionario_adm["refer"] = $fdata;
		$tdatafuncionario_adm[".searchableFields"][] = "refer";
//	fechaIngreso
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "fechaIngreso";
	$fdata["GoodName"] = "fechaIngreso";
	$fdata["ownerTable"] = "funcionario";
	$fdata["Label"] = GetFieldLabel("funcionario_adm","fechaIngreso");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "fechaIngreso";

		$fdata["sourceSingle"] = "fechaIngreso";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fechaIngreso";

	
	
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

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 2;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 0;

	
	
	
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


	$tdatafuncionario_adm["fechaIngreso"] = $fdata;
		$tdatafuncionario_adm[".searchableFields"][] = "fechaIngreso";
//	nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "nombre";
	$fdata["GoodName"] = "nombre";
	$fdata["ownerTable"] = "funcionario";
	$fdata["Label"] = GetFieldLabel("funcionario_adm","nombre");
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


	$tdatafuncionario_adm["nombre"] = $fdata;
		$tdatafuncionario_adm[".searchableFields"][] = "nombre";
//	ubicacionFisica
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "ubicacionFisica";
	$fdata["GoodName"] = "ubicacionFisica";
	$fdata["ownerTable"] = "funcionario";
	$fdata["Label"] = GetFieldLabel("funcionario_adm","ubicacionFisica");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ubicacionFisica";

		$fdata["sourceSingle"] = "ubicacionFisica";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ubicacionFisica";

	
	
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


	$tdatafuncionario_adm["ubicacionFisica"] = $fdata;
		$tdatafuncionario_adm[".searchableFields"][] = "ubicacionFisica";
//	idCargo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "idCargo";
	$fdata["GoodName"] = "idCargo";
	$fdata["ownerTable"] = "funcionario";
	$fdata["Label"] = GetFieldLabel("funcionario_adm","idCargo");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "idCargo";

		$fdata["sourceSingle"] = "idCargo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "idCargo";

	
	
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
	$edata["LookupTable"] = "cargo";
		$edata["listPageId"] = "list";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "nombre";

	

	
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


	$tdatafuncionario_adm["idCargo"] = $fdata;
		$tdatafuncionario_adm[".searchableFields"][] = "idCargo";
//	idDependencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "idDependencia";
	$fdata["GoodName"] = "idDependencia";
	$fdata["ownerTable"] = "funcionario";
	$fdata["Label"] = GetFieldLabel("funcionario_adm","idDependencia");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "idDependencia";

		$fdata["sourceSingle"] = "idDependencia";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "idDependencia";

	
	
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
	$edata["LookupTable"] = "dependencia";
		$edata["listPageId"] = "list";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "nombre";

	

	
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


	$tdatafuncionario_adm["idDependencia"] = $fdata;
		$tdatafuncionario_adm[".searchableFields"][] = "idDependencia";
//	idContrato
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "idContrato";
	$fdata["GoodName"] = "idContrato";
	$fdata["ownerTable"] = "funcionario";
	$fdata["Label"] = GetFieldLabel("funcionario_adm","idContrato");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "idContrato";

		$fdata["sourceSingle"] = "idContrato";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "idContrato";

	
	
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
	$edata["LookupTable"] = "contrato";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 200;
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


	$tdatafuncionario_adm["idContrato"] = $fdata;
		$tdatafuncionario_adm[".searchableFields"][] = "idContrato";
//	idNombramiento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "idNombramiento";
	$fdata["GoodName"] = "idNombramiento";
	$fdata["ownerTable"] = "funcionario";
	$fdata["Label"] = GetFieldLabel("funcionario_adm","idNombramiento");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "idNombramiento";

		$fdata["sourceSingle"] = "idNombramiento";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "idNombramiento";

	
	
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
	$edata["LookupTable"] = "nombramiento";
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


	$tdatafuncionario_adm["idNombramiento"] = $fdata;
		$tdatafuncionario_adm[".searchableFields"][] = "idNombramiento";
//	estado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "estado";
	$fdata["GoodName"] = "estado";
	$fdata["ownerTable"] = "funcionario";
	$fdata["Label"] = GetFieldLabel("funcionario_adm","estado");
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


	$tdatafuncionario_adm["estado"] = $fdata;
		$tdatafuncionario_adm[".searchableFields"][] = "estado";
//	estado_funcionario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "estado_funcionario";
	$fdata["GoodName"] = "estado_funcionario";
	$fdata["ownerTable"] = "funcionario";
	$fdata["Label"] = GetFieldLabel("funcionario_adm","estado_funcionario");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "estado_funcionario";

		$fdata["sourceSingle"] = "estado_funcionario";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "estado_funcionario";

	
	
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


	$tdatafuncionario_adm["estado_funcionario"] = $fdata;
		$tdatafuncionario_adm[".searchableFields"][] = "estado_funcionario";
//	CargoProp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "CargoProp";
	$fdata["GoodName"] = "CargoProp";
	$fdata["ownerTable"] = "funcionario";
	$fdata["Label"] = GetFieldLabel("funcionario_adm","CargoProp");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "CargoProp";

		$fdata["sourceSingle"] = "CargoProp";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CargoProp";

	
	
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
			$edata["EditParams"].= " maxlength=6";

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


	$tdatafuncionario_adm["CargoProp"] = $fdata;
		$tdatafuncionario_adm[".searchableFields"][] = "CargoProp";
//	GradoProp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "GradoProp";
	$fdata["GoodName"] = "GradoProp";
	$fdata["ownerTable"] = "funcionario";
	$fdata["Label"] = GetFieldLabel("funcionario_adm","GradoProp");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "GradoProp";

		$fdata["sourceSingle"] = "GradoProp";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "GradoProp";

	
	
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
			$edata["EditParams"].= " maxlength=2";

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


	$tdatafuncionario_adm["GradoProp"] = $fdata;
		$tdatafuncionario_adm[".searchableFields"][] = "GradoProp";
//	nr_c19
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "nr_c19";
	$fdata["GoodName"] = "nr_c19";
	$fdata["ownerTable"] = "funcionario";
	$fdata["Label"] = GetFieldLabel("funcionario_adm","nr_c19");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "nr_c19";

		$fdata["sourceSingle"] = "nr_c19";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nr_c19";

	
	
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


	$tdatafuncionario_adm["nr_c19"] = $fdata;
		$tdatafuncionario_adm[".searchableFields"][] = "nr_c19";


$tables_data["funcionario_adm"]=&$tdatafuncionario_adm;
$field_labels["funcionario_adm"] = &$fieldLabelsfuncionario_adm;
$fieldToolTips["funcionario_adm"] = &$fieldToolTipsfuncionario_adm;
$placeHolders["funcionario_adm"] = &$placeHoldersfuncionario_adm;
$page_titles["funcionario_adm"] = &$pageTitlesfuncionario_adm;


changeTextControlsToDate( "funcionario_adm" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["funcionario_adm"] = array();
//	usuario_adm
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="usuario_adm";
		$detailsParam["dOriginalTable"] = "usuario";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "usuario_adm";
	$detailsParam["dCaptionTable"] = GetTableCaption("usuario_adm");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["funcionario_adm"][$dIndex] = $detailsParam;

	
		$detailsTablesData["funcionario_adm"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["funcionario_adm"][$dIndex]["masterKeys"][]="id";

	$detailsTablesData["funcionario_adm"][$dIndex]["masterKeys"][]="cedula";

				$detailsTablesData["funcionario_adm"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["funcionario_adm"][$dIndex]["detailKeys"][]="idFuncionario";

		
	$detailsTablesData["funcionario_adm"][$dIndex]["detailKeys"][]="cedula";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["funcionario_adm"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_funcionario_adm()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	idEvaluador,  	IdEvaluador_c,  	cedula,  	lugarExpedicion,  	refer,  	fechaIngreso,  	nombre,  	ubicacionFisica,  	idCargo,  	idDependencia,  	idContrato,  	idNombramiento,  	estado,  	estado_funcionario,  	CargoProp,  	GradoProp,  	nr_c19";
$proto0["m_strFrom"] = "FROM funcionario";
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
	"m_strTable" => "funcionario",
	"m_srcTableName" => "funcionario_adm"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "funcionario_adm";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "idEvaluador",
	"m_strTable" => "funcionario",
	"m_srcTableName" => "funcionario_adm"
));

$proto8["m_sql"] = "idEvaluador";
$proto8["m_srcTableName"] = "funcionario_adm";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "IdEvaluador_c",
	"m_strTable" => "funcionario",
	"m_srcTableName" => "funcionario_adm"
));

$proto10["m_sql"] = "IdEvaluador_c";
$proto10["m_srcTableName"] = "funcionario_adm";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "cedula",
	"m_strTable" => "funcionario",
	"m_srcTableName" => "funcionario_adm"
));

$proto12["m_sql"] = "cedula";
$proto12["m_srcTableName"] = "funcionario_adm";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "lugarExpedicion",
	"m_strTable" => "funcionario",
	"m_srcTableName" => "funcionario_adm"
));

$proto14["m_sql"] = "lugarExpedicion";
$proto14["m_srcTableName"] = "funcionario_adm";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "refer",
	"m_strTable" => "funcionario",
	"m_srcTableName" => "funcionario_adm"
));

$proto16["m_sql"] = "refer";
$proto16["m_srcTableName"] = "funcionario_adm";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "fechaIngreso",
	"m_strTable" => "funcionario",
	"m_srcTableName" => "funcionario_adm"
));

$proto18["m_sql"] = "fechaIngreso";
$proto18["m_srcTableName"] = "funcionario_adm";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre",
	"m_strTable" => "funcionario",
	"m_srcTableName" => "funcionario_adm"
));

$proto20["m_sql"] = "nombre";
$proto20["m_srcTableName"] = "funcionario_adm";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "ubicacionFisica",
	"m_strTable" => "funcionario",
	"m_srcTableName" => "funcionario_adm"
));

$proto22["m_sql"] = "ubicacionFisica";
$proto22["m_srcTableName"] = "funcionario_adm";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "idCargo",
	"m_strTable" => "funcionario",
	"m_srcTableName" => "funcionario_adm"
));

$proto24["m_sql"] = "idCargo";
$proto24["m_srcTableName"] = "funcionario_adm";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "idDependencia",
	"m_strTable" => "funcionario",
	"m_srcTableName" => "funcionario_adm"
));

$proto26["m_sql"] = "idDependencia";
$proto26["m_srcTableName"] = "funcionario_adm";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "idContrato",
	"m_strTable" => "funcionario",
	"m_srcTableName" => "funcionario_adm"
));

$proto28["m_sql"] = "idContrato";
$proto28["m_srcTableName"] = "funcionario_adm";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "idNombramiento",
	"m_strTable" => "funcionario",
	"m_srcTableName" => "funcionario_adm"
));

$proto30["m_sql"] = "idNombramiento";
$proto30["m_srcTableName"] = "funcionario_adm";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "estado",
	"m_strTable" => "funcionario",
	"m_srcTableName" => "funcionario_adm"
));

$proto32["m_sql"] = "estado";
$proto32["m_srcTableName"] = "funcionario_adm";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "estado_funcionario",
	"m_strTable" => "funcionario",
	"m_srcTableName" => "funcionario_adm"
));

$proto34["m_sql"] = "estado_funcionario";
$proto34["m_srcTableName"] = "funcionario_adm";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "CargoProp",
	"m_strTable" => "funcionario",
	"m_srcTableName" => "funcionario_adm"
));

$proto36["m_sql"] = "CargoProp";
$proto36["m_srcTableName"] = "funcionario_adm";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "GradoProp",
	"m_strTable" => "funcionario",
	"m_srcTableName" => "funcionario_adm"
));

$proto38["m_sql"] = "GradoProp";
$proto38["m_srcTableName"] = "funcionario_adm";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "nr_c19",
	"m_strTable" => "funcionario",
	"m_srcTableName" => "funcionario_adm"
));

$proto40["m_sql"] = "nr_c19";
$proto40["m_srcTableName"] = "funcionario_adm";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto42=array();
$proto42["m_link"] = "SQLL_MAIN";
			$proto43=array();
$proto43["m_strName"] = "funcionario";
$proto43["m_srcTableName"] = "funcionario_adm";
$proto43["m_columns"] = array();
$proto43["m_columns"][] = "id";
$proto43["m_columns"][] = "idEvaluador";
$proto43["m_columns"][] = "IdEvaluador_c";
$proto43["m_columns"][] = "cedula";
$proto43["m_columns"][] = "lugarExpedicion";
$proto43["m_columns"][] = "refer";
$proto43["m_columns"][] = "fechaIngreso";
$proto43["m_columns"][] = "nombre";
$proto43["m_columns"][] = "ubicacionFisica";
$proto43["m_columns"][] = "idCargo";
$proto43["m_columns"][] = "idDependencia";
$proto43["m_columns"][] = "idContrato";
$proto43["m_columns"][] = "idNombramiento";
$proto43["m_columns"][] = "estado";
$proto43["m_columns"][] = "estado_funcionario";
$proto43["m_columns"][] = "CargoProp";
$proto43["m_columns"][] = "GradoProp";
$proto43["m_columns"][] = "nr_c19";
$obj = new SQLTable($proto43);

$proto42["m_table"] = $obj;
$proto42["m_sql"] = "funcionario";
$proto42["m_alias"] = "";
$proto42["m_srcTableName"] = "funcionario_adm";
$proto44=array();
$proto44["m_sql"] = "";
$proto44["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto44["m_column"]=$obj;
$proto44["m_contained"] = array();
$proto44["m_strCase"] = "";
$proto44["m_havingmode"] = false;
$proto44["m_inBrackets"] = false;
$proto44["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto44);

$proto42["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto42);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="funcionario_adm";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_funcionario_adm = createSqlQuery_funcionario_adm();


	
				;

																		

$tdatafuncionario_adm[".sqlquery"] = $queryData_funcionario_adm;



$tdatafuncionario_adm[".hasEvents"] = false;

?>