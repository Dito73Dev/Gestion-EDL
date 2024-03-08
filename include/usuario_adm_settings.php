<?php
$tdatausuario_adm = array();
$tdatausuario_adm[".searchableFields"] = array();
$tdatausuario_adm[".ShortName"] = "usuario_adm";
$tdatausuario_adm[".OwnerID"] = "";
$tdatausuario_adm[".OriginalTable"] = "usuario";


$tdatausuario_adm[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatausuario_adm[".originalPagesByType"] = $tdatausuario_adm[".pagesByType"];
$tdatausuario_adm[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatausuario_adm[".originalPages"] = $tdatausuario_adm[".pages"];
$tdatausuario_adm[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"list\":\"list\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatausuario_adm[".originalDefaultPages"] = $tdatausuario_adm[".defaultPages"];

//	field labels
$fieldLabelsusuario_adm = array();
$fieldToolTipsusuario_adm = array();
$pageTitlesusuario_adm = array();
$placeHoldersusuario_adm = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsusuario_adm["Spanish"] = array();
	$fieldToolTipsusuario_adm["Spanish"] = array();
	$placeHoldersusuario_adm["Spanish"] = array();
	$pageTitlesusuario_adm["Spanish"] = array();
	$fieldLabelsusuario_adm["Spanish"]["id"] = "Número interno";
	$fieldToolTipsusuario_adm["Spanish"]["id"] = "";
	$placeHoldersusuario_adm["Spanish"]["id"] = "";
	$fieldLabelsusuario_adm["Spanish"]["usuario"] = "Usuario en el sistema";
	$fieldToolTipsusuario_adm["Spanish"]["usuario"] = "";
	$placeHoldersusuario_adm["Spanish"]["usuario"] = "";
	$fieldLabelsusuario_adm["Spanish"]["contrasenia"] = "Contrasenia";
	$fieldToolTipsusuario_adm["Spanish"]["contrasenia"] = "";
	$placeHoldersusuario_adm["Spanish"]["contrasenia"] = "";
	$fieldLabelsusuario_adm["Spanish"]["email"] = "Email";
	$fieldToolTipsusuario_adm["Spanish"]["email"] = "";
	$placeHoldersusuario_adm["Spanish"]["email"] = "";
	$fieldLabelsusuario_adm["Spanish"]["idPerfil"] = "Rol EDL";
	$fieldToolTipsusuario_adm["Spanish"]["idPerfil"] = "";
	$placeHoldersusuario_adm["Spanish"]["idPerfil"] = "";
	$fieldLabelsusuario_adm["Spanish"]["idFuncionario"] = "Id Funcionario";
	$fieldToolTipsusuario_adm["Spanish"]["idFuncionario"] = "";
	$placeHoldersusuario_adm["Spanish"]["idFuncionario"] = "";
	$fieldLabelsusuario_adm["Spanish"]["estado"] = "Estado";
	$fieldToolTipsusuario_adm["Spanish"]["estado"] = "";
	$placeHoldersusuario_adm["Spanish"]["estado"] = "";
	$fieldLabelsusuario_adm["Spanish"]["cedula"] = "Documento";
	$fieldToolTipsusuario_adm["Spanish"]["cedula"] = "";
	$placeHoldersusuario_adm["Spanish"]["cedula"] = "";
	$fieldLabelsusuario_adm["Spanish"]["rdnkey"] = "Rdnkey";
	$fieldToolTipsusuario_adm["Spanish"]["rdnkey"] = "";
	$placeHoldersusuario_adm["Spanish"]["rdnkey"] = "";
	$fieldLabelsusuario_adm["Spanish"]["reset_token"] = "Reset Token";
	$fieldToolTipsusuario_adm["Spanish"]["reset_token"] = "";
	$placeHoldersusuario_adm["Spanish"]["reset_token"] = "";
	$fieldLabelsusuario_adm["Spanish"]["reset_date"] = "Reset Date";
	$fieldToolTipsusuario_adm["Spanish"]["reset_date"] = "";
	$placeHoldersusuario_adm["Spanish"]["reset_date"] = "";
	$fieldLabelsusuario_adm["Spanish"]["borra"] = "Borra";
	$fieldToolTipsusuario_adm["Spanish"]["borra"] = "";
	$placeHoldersusuario_adm["Spanish"]["borra"] = "";
	$fieldLabelsusuario_adm["Spanish"]["active"] = "Acceso al sistema";
	$fieldToolTipsusuario_adm["Spanish"]["active"] = "";
	$placeHoldersusuario_adm["Spanish"]["active"] = "";
	$fieldLabelsusuario_adm["Spanish"]["groupid"] = "Groupid";
	$fieldToolTipsusuario_adm["Spanish"]["groupid"] = "";
	$placeHoldersusuario_adm["Spanish"]["groupid"] = "";
	$fieldLabelsusuario_adm["Spanish"]["reset_date1"] = "Reset Date1";
	$fieldToolTipsusuario_adm["Spanish"]["reset_date1"] = "";
	$placeHoldersusuario_adm["Spanish"]["reset_date1"] = "";
	$fieldLabelsusuario_adm["Spanish"]["userpic"] = "Foto de perfil";
	$fieldToolTipsusuario_adm["Spanish"]["userpic"] = "";
	$placeHoldersusuario_adm["Spanish"]["userpic"] = "";
	if (count($fieldToolTipsusuario_adm["Spanish"]))
		$tdatausuario_adm[".isUseToolTips"] = true;
}


	$tdatausuario_adm[".NCSearch"] = true;



$tdatausuario_adm[".shortTableName"] = "usuario_adm";
$tdatausuario_adm[".nSecOptions"] = 0;

$tdatausuario_adm[".mainTableOwnerID"] = "";
$tdatausuario_adm[".entityType"] = 1;
$tdatausuario_adm[".connId"] = "edl_at_127_0_0_1";


$tdatausuario_adm[".strOriginalTableName"] = "usuario";

	



$tdatausuario_adm[".showAddInPopup"] = false;

$tdatausuario_adm[".showEditInPopup"] = false;

$tdatausuario_adm[".showViewInPopup"] = false;

$tdatausuario_adm[".listAjax"] = false;
//	temporary
//$tdatausuario_adm[".listAjax"] = false;

	$tdatausuario_adm[".audit"] = true;

	$tdatausuario_adm[".locking"] = true;


$pages = $tdatausuario_adm[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatausuario_adm[".edit"] = true;
	$tdatausuario_adm[".afterEditAction"] = 1;
	$tdatausuario_adm[".closePopupAfterEdit"] = 1;
	$tdatausuario_adm[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatausuario_adm[".add"] = true;
$tdatausuario_adm[".afterAddAction"] = 1;
$tdatausuario_adm[".closePopupAfterAdd"] = 1;
$tdatausuario_adm[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatausuario_adm[".list"] = true;
}



$tdatausuario_adm[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatausuario_adm[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatausuario_adm[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatausuario_adm[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatausuario_adm[".printFriendly"] = true;
}



$tdatausuario_adm[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatausuario_adm[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatausuario_adm[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatausuario_adm[".isUseAjaxSuggest"] = true;



																																																																																										

$tdatausuario_adm[".ajaxCodeSnippetAdded"] = false;

$tdatausuario_adm[".buttonsAdded"] = false;

$tdatausuario_adm[".addPageEvents"] = false;

// use timepicker for search panel
$tdatausuario_adm[".isUseTimeForSearch"] = false;


$tdatausuario_adm[".badgeColor"] = "3cb371";


$tdatausuario_adm[".allSearchFields"] = array();
$tdatausuario_adm[".filterFields"] = array();
$tdatausuario_adm[".requiredSearchFields"] = array();

$tdatausuario_adm[".googleLikeFields"] = array();
$tdatausuario_adm[".googleLikeFields"][] = "id";
$tdatausuario_adm[".googleLikeFields"][] = "usuario";
$tdatausuario_adm[".googleLikeFields"][] = "contrasenia";
$tdatausuario_adm[".googleLikeFields"][] = "email";
$tdatausuario_adm[".googleLikeFields"][] = "idPerfil";
$tdatausuario_adm[".googleLikeFields"][] = "idFuncionario";
$tdatausuario_adm[".googleLikeFields"][] = "estado";
$tdatausuario_adm[".googleLikeFields"][] = "cedula";
$tdatausuario_adm[".googleLikeFields"][] = "rdnkey";
$tdatausuario_adm[".googleLikeFields"][] = "reset_token";
$tdatausuario_adm[".googleLikeFields"][] = "reset_date";
$tdatausuario_adm[".googleLikeFields"][] = "borra";
$tdatausuario_adm[".googleLikeFields"][] = "active";
$tdatausuario_adm[".googleLikeFields"][] = "groupid";
$tdatausuario_adm[".googleLikeFields"][] = "reset_date1";



$tdatausuario_adm[".tableType"] = "list";

$tdatausuario_adm[".printerPageOrientation"] = 0;
$tdatausuario_adm[".nPrinterPageScale"] = 100;

$tdatausuario_adm[".nPrinterSplitRecords"] = 40;

$tdatausuario_adm[".geocodingEnabled"] = false;




$tdatausuario_adm[".isDisplayLoading"] = true;






$tdatausuario_adm[".pageSize"] = 20;

$tdatausuario_adm[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatausuario_adm[".strOrderBy"] = $tstrOrderBy;

$tdatausuario_adm[".orderindexes"] = array();


$tdatausuario_adm[".sqlHead"] = "SELECT id,  	usuario,  	contrasenia,  	email,  	idPerfil,  	idFuncionario,  	estado,  	cedula,  	rdnkey,  	reset_token,  	reset_date,  	borra,  	active,  	groupid,  	reset_date1,  	userpic";
$tdatausuario_adm[".sqlFrom"] = "FROM usuario";
$tdatausuario_adm[".sqlWhereExpr"] = "";
$tdatausuario_adm[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatausuario_adm[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatausuario_adm[".arrGroupsPerPage"] = $arrGPP;

$tdatausuario_adm[".highlightSearchResults"] = true;

$tableKeysusuario_adm = array();
$tableKeysusuario_adm[] = "id";
$tdatausuario_adm[".Keys"] = $tableKeysusuario_adm;


$tdatausuario_adm[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "usuario";
	$fdata["Label"] = GetFieldLabel("usuario_adm","id");
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


	$tdatausuario_adm["id"] = $fdata;
		$tdatausuario_adm[".searchableFields"][] = "id";
//	usuario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "usuario";
	$fdata["GoodName"] = "usuario";
	$fdata["ownerTable"] = "usuario";
	$fdata["Label"] = GetFieldLabel("usuario_adm","usuario");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "usuario";

		$fdata["sourceSingle"] = "usuario";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "usuario";

	
	
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


	$tdatausuario_adm["usuario"] = $fdata;
		$tdatausuario_adm[".searchableFields"][] = "usuario";
//	contrasenia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "contrasenia";
	$fdata["GoodName"] = "contrasenia";
	$fdata["ownerTable"] = "usuario";
	$fdata["Label"] = GetFieldLabel("usuario_adm","contrasenia");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "contrasenia";

		$fdata["sourceSingle"] = "contrasenia";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "contrasenia";

	
	
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

	$edata = array("EditFormat" => "Password");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
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


	$tdatausuario_adm["contrasenia"] = $fdata;
		$tdatausuario_adm[".searchableFields"][] = "contrasenia";
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "usuario";
	$fdata["Label"] = GetFieldLabel("usuario_adm","email");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "email";

		$fdata["sourceSingle"] = "email";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "email";

	
	
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
			$edata["EditParams"].= " maxlength=200";

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


	$tdatausuario_adm["email"] = $fdata;
		$tdatausuario_adm[".searchableFields"][] = "email";
//	idPerfil
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "idPerfil";
	$fdata["GoodName"] = "idPerfil";
	$fdata["ownerTable"] = "usuario";
	$fdata["Label"] = GetFieldLabel("usuario_adm","idPerfil");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "idPerfil";

		$fdata["sourceSingle"] = "idPerfil";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "idPerfil";

	
	
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
	$edata["LookupTable"] = "perfil";
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


	$tdatausuario_adm["idPerfil"] = $fdata;
		$tdatausuario_adm[".searchableFields"][] = "idPerfil";
//	idFuncionario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "idFuncionario";
	$fdata["GoodName"] = "idFuncionario";
	$fdata["ownerTable"] = "usuario";
	$fdata["Label"] = GetFieldLabel("usuario_adm","idFuncionario");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "idFuncionario";

		$fdata["sourceSingle"] = "idFuncionario";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "idFuncionario";

	
	
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


	$tdatausuario_adm["idFuncionario"] = $fdata;
		$tdatausuario_adm[".searchableFields"][] = "idFuncionario";
//	estado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "estado";
	$fdata["GoodName"] = "estado";
	$fdata["ownerTable"] = "usuario";
	$fdata["Label"] = GetFieldLabel("usuario_adm","estado");
	$fdata["FieldType"] = 16;


	
	
			

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


	$tdatausuario_adm["estado"] = $fdata;
		$tdatausuario_adm[".searchableFields"][] = "estado";
//	cedula
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "cedula";
	$fdata["GoodName"] = "cedula";
	$fdata["ownerTable"] = "usuario";
	$fdata["Label"] = GetFieldLabel("usuario_adm","cedula");
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


	$tdatausuario_adm["cedula"] = $fdata;
		$tdatausuario_adm[".searchableFields"][] = "cedula";
//	rdnkey
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "rdnkey";
	$fdata["GoodName"] = "rdnkey";
	$fdata["ownerTable"] = "usuario";
	$fdata["Label"] = GetFieldLabel("usuario_adm","rdnkey");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "rdnkey";

		$fdata["sourceSingle"] = "rdnkey";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rdnkey";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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


	$tdatausuario_adm["rdnkey"] = $fdata;
		$tdatausuario_adm[".searchableFields"][] = "rdnkey";
//	reset_token
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "reset_token";
	$fdata["GoodName"] = "reset_token";
	$fdata["ownerTable"] = "usuario";
	$fdata["Label"] = GetFieldLabel("usuario_adm","reset_token");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "reset_token";

		$fdata["sourceSingle"] = "reset_token";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "reset_token";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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


	$tdatausuario_adm["reset_token"] = $fdata;
		$tdatausuario_adm[".searchableFields"][] = "reset_token";
//	reset_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "reset_date";
	$fdata["GoodName"] = "reset_date";
	$fdata["ownerTable"] = "usuario";
	$fdata["Label"] = GetFieldLabel("usuario_adm","reset_date");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "reset_date";

		$fdata["sourceSingle"] = "reset_date";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "reset_date";

	
	
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


	$tdatausuario_adm["reset_date"] = $fdata;
		$tdatausuario_adm[".searchableFields"][] = "reset_date";
//	borra
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "borra";
	$fdata["GoodName"] = "borra";
	$fdata["ownerTable"] = "usuario";
	$fdata["Label"] = GetFieldLabel("usuario_adm","borra");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "borra";

		$fdata["sourceSingle"] = "borra";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "borra";

	
	
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


	$tdatausuario_adm["borra"] = $fdata;
		$tdatausuario_adm[".searchableFields"][] = "borra";
//	active
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "active";
	$fdata["GoodName"] = "active";
	$fdata["ownerTable"] = "usuario";
	$fdata["Label"] = GetFieldLabel("usuario_adm","active");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "active";

		$fdata["sourceSingle"] = "active";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "active";

	
	
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


	$tdatausuario_adm["active"] = $fdata;
		$tdatausuario_adm[".searchableFields"][] = "active";
//	groupid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "groupid";
	$fdata["GoodName"] = "groupid";
	$fdata["ownerTable"] = "usuario";
	$fdata["Label"] = GetFieldLabel("usuario_adm","groupid");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "groupid";

		$fdata["sourceSingle"] = "groupid";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "groupid";

	
	
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


	$tdatausuario_adm["groupid"] = $fdata;
		$tdatausuario_adm[".searchableFields"][] = "groupid";
//	reset_date1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "reset_date1";
	$fdata["GoodName"] = "reset_date1";
	$fdata["ownerTable"] = "usuario";
	$fdata["Label"] = GetFieldLabel("usuario_adm","reset_date1");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "reset_date1";

		$fdata["sourceSingle"] = "reset_date1";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "reset_date1";

	
	
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


	$tdatausuario_adm["reset_date1"] = $fdata;
		$tdatausuario_adm[".searchableFields"][] = "reset_date1";
//	userpic
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "userpic";
	$fdata["GoodName"] = "userpic";
	$fdata["ownerTable"] = "usuario";
	$fdata["Label"] = GetFieldLabel("usuario_adm","userpic");
	$fdata["FieldType"] = 128;


	
	
			

		$fdata["strField"] = "userpic";

		$fdata["sourceSingle"] = "userpic";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "userpic";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Database Image");

	
	
				$vdata["ImageWidth"] = 600;
	$vdata["ImageHeight"] = 400;

		
			$vdata["showGallery"] = true;
	$vdata["galleryMode"] = 2;
	$vdata["captionMode"] = 1;
	$vdata["captionField"] = "";

	$vdata["imageBorder"] = 1;
	$vdata["imageFullWidth"] = 1;


	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Database image");

	
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
		$fdata["defaultSearchOption"] = "NOT Empty";

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


	$tdatausuario_adm["userpic"] = $fdata;
	

$tables_data["usuario_adm"]=&$tdatausuario_adm;
$field_labels["usuario_adm"] = &$fieldLabelsusuario_adm;
$fieldToolTips["usuario_adm"] = &$fieldToolTipsusuario_adm;
$placeHolders["usuario_adm"] = &$placeHoldersusuario_adm;
$page_titles["usuario_adm"] = &$pageTitlesusuario_adm;


changeTextControlsToDate( "usuario_adm" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["usuario_adm"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["usuario_adm"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="funcionario";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="funcionario_adm";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "funcionario_adm";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["usuario_adm"][0] = $masterParams;
				$masterTablesData["usuario_adm"][0]["masterKeys"] = array();
	$masterTablesData["usuario_adm"][0]["masterKeys"][]="id";
				$masterTablesData["usuario_adm"][0]["masterKeys"][]="cedula";
				$masterTablesData["usuario_adm"][0]["detailKeys"] = array();
	$masterTablesData["usuario_adm"][0]["detailKeys"][]="idFuncionario";
				$masterTablesData["usuario_adm"][0]["detailKeys"][]="cedula";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_usuario_adm()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	usuario,  	contrasenia,  	email,  	idPerfil,  	idFuncionario,  	estado,  	cedula,  	rdnkey,  	reset_token,  	reset_date,  	borra,  	active,  	groupid,  	reset_date1,  	userpic";
$proto0["m_strFrom"] = "FROM usuario";
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
	"m_strTable" => "usuario",
	"m_srcTableName" => "usuario_adm"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "usuario_adm";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "usuario",
	"m_strTable" => "usuario",
	"m_srcTableName" => "usuario_adm"
));

$proto8["m_sql"] = "usuario";
$proto8["m_srcTableName"] = "usuario_adm";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "contrasenia",
	"m_strTable" => "usuario",
	"m_srcTableName" => "usuario_adm"
));

$proto10["m_sql"] = "contrasenia";
$proto10["m_srcTableName"] = "usuario_adm";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "usuario",
	"m_srcTableName" => "usuario_adm"
));

$proto12["m_sql"] = "email";
$proto12["m_srcTableName"] = "usuario_adm";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "idPerfil",
	"m_strTable" => "usuario",
	"m_srcTableName" => "usuario_adm"
));

$proto14["m_sql"] = "idPerfil";
$proto14["m_srcTableName"] = "usuario_adm";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "idFuncionario",
	"m_strTable" => "usuario",
	"m_srcTableName" => "usuario_adm"
));

$proto16["m_sql"] = "idFuncionario";
$proto16["m_srcTableName"] = "usuario_adm";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "estado",
	"m_strTable" => "usuario",
	"m_srcTableName" => "usuario_adm"
));

$proto18["m_sql"] = "estado";
$proto18["m_srcTableName"] = "usuario_adm";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "cedula",
	"m_strTable" => "usuario",
	"m_srcTableName" => "usuario_adm"
));

$proto20["m_sql"] = "cedula";
$proto20["m_srcTableName"] = "usuario_adm";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "rdnkey",
	"m_strTable" => "usuario",
	"m_srcTableName" => "usuario_adm"
));

$proto22["m_sql"] = "rdnkey";
$proto22["m_srcTableName"] = "usuario_adm";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "reset_token",
	"m_strTable" => "usuario",
	"m_srcTableName" => "usuario_adm"
));

$proto24["m_sql"] = "reset_token";
$proto24["m_srcTableName"] = "usuario_adm";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "reset_date",
	"m_strTable" => "usuario",
	"m_srcTableName" => "usuario_adm"
));

$proto26["m_sql"] = "reset_date";
$proto26["m_srcTableName"] = "usuario_adm";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "borra",
	"m_strTable" => "usuario",
	"m_srcTableName" => "usuario_adm"
));

$proto28["m_sql"] = "borra";
$proto28["m_srcTableName"] = "usuario_adm";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "active",
	"m_strTable" => "usuario",
	"m_srcTableName" => "usuario_adm"
));

$proto30["m_sql"] = "active";
$proto30["m_srcTableName"] = "usuario_adm";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "groupid",
	"m_strTable" => "usuario",
	"m_srcTableName" => "usuario_adm"
));

$proto32["m_sql"] = "groupid";
$proto32["m_srcTableName"] = "usuario_adm";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "reset_date1",
	"m_strTable" => "usuario",
	"m_srcTableName" => "usuario_adm"
));

$proto34["m_sql"] = "reset_date1";
$proto34["m_srcTableName"] = "usuario_adm";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "userpic",
	"m_strTable" => "usuario",
	"m_srcTableName" => "usuario_adm"
));

$proto36["m_sql"] = "userpic";
$proto36["m_srcTableName"] = "usuario_adm";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto38=array();
$proto38["m_link"] = "SQLL_MAIN";
			$proto39=array();
$proto39["m_strName"] = "usuario";
$proto39["m_srcTableName"] = "usuario_adm";
$proto39["m_columns"] = array();
$proto39["m_columns"][] = "id";
$proto39["m_columns"][] = "usuario";
$proto39["m_columns"][] = "contrasenia";
$proto39["m_columns"][] = "email";
$proto39["m_columns"][] = "idPerfil";
$proto39["m_columns"][] = "idFuncionario";
$proto39["m_columns"][] = "estado";
$proto39["m_columns"][] = "cedula";
$proto39["m_columns"][] = "rdnkey";
$proto39["m_columns"][] = "reset_token";
$proto39["m_columns"][] = "reset_date";
$proto39["m_columns"][] = "borra";
$proto39["m_columns"][] = "active";
$proto39["m_columns"][] = "groupid";
$proto39["m_columns"][] = "reset_date1";
$proto39["m_columns"][] = "userpic";
$proto39["m_columns"][] = "two_factor";
$proto39["m_columns"][] = "totp";
$obj = new SQLTable($proto39);

$proto38["m_table"] = $obj;
$proto38["m_sql"] = "usuario";
$proto38["m_alias"] = "";
$proto38["m_srcTableName"] = "usuario_adm";
$proto40=array();
$proto40["m_sql"] = "";
$proto40["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto40["m_column"]=$obj;
$proto40["m_contained"] = array();
$proto40["m_strCase"] = "";
$proto40["m_havingmode"] = false;
$proto40["m_inBrackets"] = false;
$proto40["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto40);

$proto38["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto38);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="usuario_adm";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_usuario_adm = createSqlQuery_usuario_adm();


	
				;

																

$tdatausuario_adm[".sqlquery"] = $queryData_usuario_adm;



$tdatausuario_adm[".hasEvents"] = false;

?>