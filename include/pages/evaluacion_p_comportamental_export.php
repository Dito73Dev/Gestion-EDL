<?php
			$optionsArray = array( 'totals' => array( 'evalcc_id' => array( 'totalsType' => '' ),
'id_eval_fk' => array( 'totalsType' => '' ),
'evaluacion_p_id' => array( 'totalsType' => '' ),
'acuerdo_id' => array( 'totalsType' => '' ),
'idComportamental' => array( 'totalsType' => '' ),
'idCompetencia' => array( 'totalsType' => '' ),
'idConducta' => array( 'totalsType' => '' ),
'Evidencia' => array( 'totalsType' => '' ),
'evalparfun_cal' => array( 'totalsType' => '' ),
'SysLastUpd' => array( 'totalsType' => '' ),
'sysst' => array( 'totalsType' => '' ) ),
'fields' => array( 'gridFields' => array( 'idComportamental',
'idCompetencia',
'idConducta',
'evalparfun_cal',
'sysst',
'Evidencia' ),
'exportFields' => array( 'idComportamental',
'idCompetencia',
'idConducta',
'evalparfun_cal',
'sysst',
'Evidencia' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'idComportamental' => array( 'export_field4' ),
'idCompetencia' => array( 'export_field5' ),
'idConducta' => array( 'export_field6' ),
'evalparfun_cal' => array( 'export_field7' ),
'sysst' => array( 'export_field9' ),
'Evidencia' => array( 'export_field10' ) ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'supertop' => array(  ),
'top' => array( 'export_header' ),
'grid' => array( 'export_field4',
'export_field5',
'export_field6',
'export_field7',
'export_field9',
'export_field10' ),
'footer' => array( 'export_export',
'export_cancel' ) ),
'formXtTags' => array( 'supertop' => array(  ) ),
'itemForms' => array( 'export_header' => 'top',
'export_field4' => 'grid',
'export_field5' => 'grid',
'export_field6' => 'grid',
'export_field7' => 'grid',
'export_field9' => 'grid',
'export_field10' => 'grid',
'export_export' => 'footer',
'export_cancel' => 'footer' ),
'itemLocations' => array(  ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'export_header' => array( 'export_header' ),
'export_export' => array( 'export_export' ),
'export_cancel' => array( 'export_cancel' ),
'export_field' => array( 'export_field4',
'export_field5',
'export_field6',
'export_field7',
'export_field9',
'export_field10' ) ),
'cellMaps' => array(  ) ),
'loginForm' => array( 'loginForm' => 3 ),
'page' => array( 'verticalBar' => false,
'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array(  ),
'register_activate_message' => array(  ),
'details_found' => array(  ) ),
'hasCustomButtons' => false,
'customButtons' => array(  ),
'hasNotifications' => false,
'menus' => array(  ),
'calcTotalsFor' => 1 ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ),
'export' => array( 'format' => 2,
'selectFields' => false,
'delimiter' => ',',
'selectDelimiter' => false,
'exportFileTypes' => array( 'excel' => true,
'word' => true,
'csv' => true,
'xml' => false ) ) );
			$pageArray = array( 'id' => 'export',
'type' => 'export',
'layoutId' => 'first',
'disabled' => 0,
'default' => 0,
'forms' => array( 'supertop' => array( 'modelId' => 'panel-top',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array(  ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'top' => array( 'modelId' => 'export-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'export_header' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'export-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'export_field4',
'export_field5',
'export_field6',
'export_field7',
'export_field9',
'export_field10' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'footer' => array( 'modelId' => 'export-footer',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array(  ) ),
'c2' => array( 'model' => 'c2',
'items' => array( 'export_export',
'export_cancel' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'export_header' => array( 'type' => 'export_header' ),
'export_export' => array( 'type' => 'export_export' ),
'export_cancel' => array( 'type' => 'export_cancel' ),
'export_field4' => array( 'field' => 'idComportamental',
'type' => 'export_field' ),
'export_field5' => array( 'field' => 'idCompetencia',
'type' => 'export_field' ),
'export_field6' => array( 'field' => 'idConducta',
'type' => 'export_field' ),
'export_field7' => array( 'field' => 'evalparfun_cal',
'type' => 'export_field' ),
'export_field9' => array( 'field' => 'sysst',
'type' => 'export_field' ),
'export_field10' => array( 'field' => 'Evidencia',
'type' => 'export_field' ) ),
'dbProps' => array(  ),
'version' => 14,
'imageItem' => array( 'type' => 'page_image' ),
'imageBgColor' => '#f2f2f2',
'controlsBgColor' => 'white',
'imagePosition' => 'right',
'listTotals' => 1,
'exportFormat' => 2,
'exportDelimiter' => ',',
'exportSelectDelimiter' => false,
'exportSelectFields' => false );
		?>