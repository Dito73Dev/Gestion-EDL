<?php
$tdataq_graph_estado_chart = array();
$tdataq_graph_estado_chart[".searchableFields"] = array();
$tdataq_graph_estado_chart[".ShortName"] = "q_graph_estado_chart";
$tdataq_graph_estado_chart[".OwnerID"] = "";
$tdataq_graph_estado_chart[".OriginalTable"] = "q_graph_estado";


$tdataq_graph_estado_chart[".pagesByType"] = my_json_decode( "{\"chart\":[\"chart\"],\"search\":[\"search\"]}" );
$tdataq_graph_estado_chart[".originalPagesByType"] = $tdataq_graph_estado_chart[".pagesByType"];
$tdataq_graph_estado_chart[".pages"] = types2pages( my_json_decode( "{\"chart\":[\"chart\"],\"search\":[\"search\"]}" ) );
$tdataq_graph_estado_chart[".originalPages"] = $tdataq_graph_estado_chart[".pages"];
$tdataq_graph_estado_chart[".defaultPages"] = my_json_decode( "{\"chart\":\"chart\",\"search\":\"search\"}" );
$tdataq_graph_estado_chart[".originalDefaultPages"] = $tdataq_graph_estado_chart[".defaultPages"];

//	field labels
$fieldLabelsq_graph_estado_chart = array();
$fieldToolTipsq_graph_estado_chart = array();
$pageTitlesq_graph_estado_chart = array();
$placeHoldersq_graph_estado_chart = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsq_graph_estado_chart["Spanish"] = array();
	$fieldToolTipsq_graph_estado_chart["Spanish"] = array();
	$placeHoldersq_graph_estado_chart["Spanish"] = array();
	$pageTitlesq_graph_estado_chart["Spanish"] = array();
	$fieldLabelsq_graph_estado_chart["Spanish"]["estado"] = "Estado";
	$fieldToolTipsq_graph_estado_chart["Spanish"]["estado"] = "";
	$placeHoldersq_graph_estado_chart["Spanish"]["estado"] = "";
	$fieldLabelsq_graph_estado_chart["Spanish"]["qty_estado"] = "Cantidad";
	$fieldToolTipsq_graph_estado_chart["Spanish"]["qty_estado"] = "";
	$placeHoldersq_graph_estado_chart["Spanish"]["qty_estado"] = "";
	$fieldLabelsq_graph_estado_chart["Spanish"]["vigencia"] = "Vigencia";
	$fieldToolTipsq_graph_estado_chart["Spanish"]["vigencia"] = "";
	$placeHoldersq_graph_estado_chart["Spanish"]["vigencia"] = "";
	if (count($fieldToolTipsq_graph_estado_chart["Spanish"]))
		$tdataq_graph_estado_chart[".isUseToolTips"] = true;
}


	$tdataq_graph_estado_chart[".NCSearch"] = true;

	$tdataq_graph_estado_chart[".ChartRefreshTime"] = 0;


$tdataq_graph_estado_chart[".shortTableName"] = "q_graph_estado_chart";
$tdataq_graph_estado_chart[".nSecOptions"] = 0;

$tdataq_graph_estado_chart[".mainTableOwnerID"] = "";
$tdataq_graph_estado_chart[".entityType"] = 3;
$tdataq_graph_estado_chart[".connId"] = "edl2_at_127_0_0_1";


$tdataq_graph_estado_chart[".strOriginalTableName"] = "q_graph_estado";

	



$tdataq_graph_estado_chart[".showAddInPopup"] = false;

$tdataq_graph_estado_chart[".showEditInPopup"] = false;

$tdataq_graph_estado_chart[".showViewInPopup"] = false;

$tdataq_graph_estado_chart[".listAjax"] = false;
//	temporary
//$tdataq_graph_estado_chart[".listAjax"] = false;

	$tdataq_graph_estado_chart[".audit"] = false;

	$tdataq_graph_estado_chart[".locking"] = false;


$pages = $tdataq_graph_estado_chart[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataq_graph_estado_chart[".edit"] = true;
	$tdataq_graph_estado_chart[".afterEditAction"] = 1;
	$tdataq_graph_estado_chart[".closePopupAfterEdit"] = 1;
	$tdataq_graph_estado_chart[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataq_graph_estado_chart[".add"] = true;
$tdataq_graph_estado_chart[".afterAddAction"] = 1;
$tdataq_graph_estado_chart[".closePopupAfterAdd"] = 1;
$tdataq_graph_estado_chart[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataq_graph_estado_chart[".list"] = true;
}



$tdataq_graph_estado_chart[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataq_graph_estado_chart[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataq_graph_estado_chart[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataq_graph_estado_chart[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataq_graph_estado_chart[".printFriendly"] = true;
}



$tdataq_graph_estado_chart[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataq_graph_estado_chart[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataq_graph_estado_chart[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataq_graph_estado_chart[".isUseAjaxSuggest"] = true;



																																													

$tdataq_graph_estado_chart[".ajaxCodeSnippetAdded"] = false;

$tdataq_graph_estado_chart[".buttonsAdded"] = false;

$tdataq_graph_estado_chart[".addPageEvents"] = false;

// use timepicker for search panel
$tdataq_graph_estado_chart[".isUseTimeForSearch"] = false;


$tdataq_graph_estado_chart[".badgeColor"] = "E67349";


$tdataq_graph_estado_chart[".allSearchFields"] = array();
$tdataq_graph_estado_chart[".filterFields"] = array();
$tdataq_graph_estado_chart[".requiredSearchFields"] = array();

$tdataq_graph_estado_chart[".googleLikeFields"] = array();
$tdataq_graph_estado_chart[".googleLikeFields"][] = "estado";
$tdataq_graph_estado_chart[".googleLikeFields"][] = "qty_estado";
$tdataq_graph_estado_chart[".googleLikeFields"][] = "vigencia";



$tdataq_graph_estado_chart[".tableType"] = "chart";

$tdataq_graph_estado_chart[".printerPageOrientation"] = 0;
$tdataq_graph_estado_chart[".nPrinterPageScale"] = 100;

$tdataq_graph_estado_chart[".nPrinterSplitRecords"] = 40;

$tdataq_graph_estado_chart[".geocodingEnabled"] = false;



// chart settings
$tdataq_graph_estado_chart[".chartType"] = "2DPie";
// end of chart settings








$tstrOrderBy = "";
$tdataq_graph_estado_chart[".strOrderBy"] = $tstrOrderBy;

$tdataq_graph_estado_chart[".orderindexes"] = array();


$tdataq_graph_estado_chart[".sqlHead"] = "SELECT estado,  	qty_estado,  	vigencia";
$tdataq_graph_estado_chart[".sqlFrom"] = "FROM q_graph_estado";
$tdataq_graph_estado_chart[".sqlWhereExpr"] = "";
$tdataq_graph_estado_chart[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataq_graph_estado_chart[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataq_graph_estado_chart[".arrGroupsPerPage"] = $arrGPP;

$tdataq_graph_estado_chart[".highlightSearchResults"] = true;

$tableKeysq_graph_estado_chart = array();
$tdataq_graph_estado_chart[".Keys"] = $tableKeysq_graph_estado_chart;


$tdataq_graph_estado_chart[".hideMobileList"] = array();




//	estado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "estado";
	$fdata["GoodName"] = "estado";
	$fdata["ownerTable"] = "q_graph_estado";
	$fdata["Label"] = GetFieldLabel("q_graph_estado_Chart","estado");
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

	$fdata["ViewFormats"]["chart"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "tparam_estados_eval";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "estadoeval_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "estadoeval_name";

	

	
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdataq_graph_estado_chart["estado"] = $fdata;
		$tdataq_graph_estado_chart[".searchableFields"][] = "estado";
//	qty_estado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "qty_estado";
	$fdata["GoodName"] = "qty_estado";
	$fdata["ownerTable"] = "q_graph_estado";
	$fdata["Label"] = GetFieldLabel("q_graph_estado_Chart","qty_estado");
	$fdata["FieldType"] = 20;


	
	
			

		$fdata["strField"] = "qty_estado";

		$fdata["sourceSingle"] = "qty_estado";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "qty_estado";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdataq_graph_estado_chart["qty_estado"] = $fdata;
		$tdataq_graph_estado_chart[".searchableFields"][] = "qty_estado";
//	vigencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "vigencia";
	$fdata["GoodName"] = "vigencia";
	$fdata["ownerTable"] = "q_graph_estado";
	$fdata["Label"] = GetFieldLabel("q_graph_estado_Chart","vigencia");
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

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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
		$fdata["filterTotalFields"] = "estado";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataq_graph_estado_chart["vigencia"] = $fdata;
		$tdataq_graph_estado_chart[".searchableFields"][] = "vigencia";

$tdataq_graph_estado_chart[".chartLabelField"] = "estado";
$tdataq_graph_estado_chart[".chartSeries"] = array();
$tdataq_graph_estado_chart[".chartSeries"][] = array(
	"field" => "qty_estado",
	"total" => ""
);
	$tdataq_graph_estado_chart[".chartXml"] = '<chart>
		<attr value="tables">
			<attr value="0">q_graph_estado Chart</attr>
		</attr>
		<attr value="chart_type">
			<attr value="type">2d_pie</attr>
		</attr>

		<attr value="parameters">';
	$tdataq_graph_estado_chart[".chartXml"] .= '<attr value="0">
			<attr value="name">qty_estado</attr>';
	$tdataq_graph_estado_chart[".chartXml"] .= '</attr>';
	$tdataq_graph_estado_chart[".chartXml"] .= '<attr value="1">
		<attr value="name">estado</attr>
	</attr>';
	$tdataq_graph_estado_chart[".chartXml"] .= '</attr>
			<attr value="appearance">';


	$tdataq_graph_estado_chart[".chartXml"] .= '<attr value="head">'.xmlencode("Estado de concertación").'</attr>
<attr value="foot">'.xmlencode("").'</attr>
<attr value="y_axis_label">'.xmlencode("estado").'</attr>


<attr value="slegend">true</attr>
<attr value="sgrid">true</attr>
<attr value="sname">true</attr>
<attr value="sval">true</attr>
<attr value="sanim">true</attr>
<attr value="sstacked">false</attr>
<attr value="slog">false</attr>
<attr value="aqua">0</attr>
<attr value="cview">0</attr>
<attr value="is3d">0</attr>
<attr value="isstacked">0</attr>
<attr value="linestyle">0</attr>
<attr value="autoupdate">0</attr>
<attr value="autoupmin">60</attr>';
$tdataq_graph_estado_chart[".chartXml"] .= '</attr>

<attr value="fields">';
	$tdataq_graph_estado_chart[".chartXml"] .= '<attr value="0">
		<attr value="name">estado</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("q_graph_estado_Chart","estado")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataq_graph_estado_chart[".chartXml"] .= '<attr value="1">
		<attr value="name">qty_estado</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("q_graph_estado_Chart","qty_estado")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataq_graph_estado_chart[".chartXml"] .= '<attr value="2">
		<attr value="name">vigencia</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("q_graph_estado_Chart","vigencia")).'</attr>
		<attr value="search"></attr>
	</attr>';
$tdataq_graph_estado_chart[".chartXml"] .= '</attr>


<attr value="settings">
<attr value="name">q_graph_estado Chart</attr>
<attr value="short_table_name">q_graph_estado_chart</attr>
</attr>

</chart>';

$tables_data["q_graph_estado Chart"]=&$tdataq_graph_estado_chart;
$field_labels["q_graph_estado_Chart"] = &$fieldLabelsq_graph_estado_chart;
$fieldToolTips["q_graph_estado_Chart"] = &$fieldToolTipsq_graph_estado_chart;
$placeHolders["q_graph_estado_Chart"] = &$placeHoldersq_graph_estado_chart;
$page_titles["q_graph_estado_Chart"] = &$pageTitlesq_graph_estado_chart;


changeTextControlsToDate( "q_graph_estado Chart" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["q_graph_estado Chart"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["q_graph_estado Chart"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_q_graph_estado_chart()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "estado,  	qty_estado,  	vigencia";
$proto0["m_strFrom"] = "FROM q_graph_estado";
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
	"m_strName" => "estado",
	"m_strTable" => "q_graph_estado",
	"m_srcTableName" => "q_graph_estado Chart"
));

$proto6["m_sql"] = "estado";
$proto6["m_srcTableName"] = "q_graph_estado Chart";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "qty_estado",
	"m_strTable" => "q_graph_estado",
	"m_srcTableName" => "q_graph_estado Chart"
));

$proto8["m_sql"] = "qty_estado";
$proto8["m_srcTableName"] = "q_graph_estado Chart";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "vigencia",
	"m_strTable" => "q_graph_estado",
	"m_srcTableName" => "q_graph_estado Chart"
));

$proto10["m_sql"] = "vigencia";
$proto10["m_srcTableName"] = "q_graph_estado Chart";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "q_graph_estado";
$proto13["m_srcTableName"] = "q_graph_estado Chart";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "estado";
$proto13["m_columns"][] = "qty_estado";
$proto13["m_columns"][] = "vigencia";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "q_graph_estado";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "q_graph_estado Chart";
$proto14=array();
$proto14["m_sql"] = "";
$proto14["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto14["m_column"]=$obj;
$proto14["m_contained"] = array();
$proto14["m_strCase"] = "";
$proto14["m_havingmode"] = false;
$proto14["m_inBrackets"] = false;
$proto14["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto14);

$proto12["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto12);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="q_graph_estado Chart";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_q_graph_estado_chart = createSqlQuery_q_graph_estado_chart();


	
				;

			

$tdataq_graph_estado_chart[".sqlquery"] = $queryData_q_graph_estado_chart;



$tdataq_graph_estado_chart[".hasEvents"] = false;

?>