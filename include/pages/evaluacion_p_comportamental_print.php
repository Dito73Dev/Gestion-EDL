<?php
			$optionsArray = array( 'pdf' => array( 'pdfView' => false ),
'master' => array( 'evaluacion_po' => array( 'preview' => true ) ),
'totals' => array( 'evalcc_id' => array( 'totalsType' => '' ),
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
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'idComportamental' => array( 'simple_grid_field4',
'simple_grid_field' ),
'idCompetencia' => array( 'simple_grid_field5',
'simple_grid_field8' ),
'idConducta' => array( 'simple_grid_field6',
'simple_grid_field11' ),
'evalparfun_cal' => array( 'simple_grid_field7',
'simple_grid_field12' ),
'sysst' => array( 'simple_grid_field9',
'simple_grid_field13' ),
'Evidencia' => array( 'simple_grid_field10',
'simple_grid_field14' ) ),
'hideEmptyFields' => array(  ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'above-grid' => array( 'print_pages',
'grid_inline_cancel',
'inline_add' ),
'below-grid' => array(  ),
'top' => array( 'print_header',
'print_subheader',
'master_info' ),
'grid' => array( 'simple_grid_field',
'simple_grid_field4',
'simple_grid_field8',
'simple_grid_field5',
'simple_grid_field11',
'simple_grid_field6',
'simple_grid_field12',
'simple_grid_field7',
'simple_grid_field13',
'simple_grid_field9',
'simple_grid_field14',
'simple_grid_field10' ) ),
'formXtTags' => array( 'above-grid' => array( 'print_pages',
'inline_cancel',
'inlineadd_link' ),
'below-grid' => array(  ) ),
'itemForms' => array( 'print_pages' => 'above-grid',
'grid_inline_cancel' => 'above-grid',
'inline_add' => 'above-grid',
'print_header' => 'top',
'print_subheader' => 'top',
'master_info' => 'top',
'simple_grid_field' => 'grid',
'simple_grid_field4' => 'grid',
'simple_grid_field8' => 'grid',
'simple_grid_field5' => 'grid',
'simple_grid_field11' => 'grid',
'simple_grid_field6' => 'grid',
'simple_grid_field12' => 'grid',
'simple_grid_field7' => 'grid',
'simple_grid_field13' => 'grid',
'simple_grid_field9' => 'grid',
'simple_grid_field14' => 'grid',
'simple_grid_field10' => 'grid' ),
'itemLocations' => array( 'simple_grid_field' => array( 'location' => 'grid',
'cellId' => 'headcell_field' ),
'simple_grid_field4' => array( 'location' => 'grid',
'cellId' => 'cell_field' ),
'simple_grid_field8' => array( 'location' => 'grid',
'cellId' => 'headcell_field1' ),
'simple_grid_field5' => array( 'location' => 'grid',
'cellId' => 'cell_field1' ),
'simple_grid_field11' => array( 'location' => 'grid',
'cellId' => 'headcell_field2' ),
'simple_grid_field6' => array( 'location' => 'grid',
'cellId' => 'cell_field2' ),
'simple_grid_field12' => array( 'location' => 'grid',
'cellId' => 'headcell_field3' ),
'simple_grid_field7' => array( 'location' => 'grid',
'cellId' => 'cell_field3' ),
'simple_grid_field13' => array( 'location' => 'grid',
'cellId' => 'headcell_field4' ),
'simple_grid_field9' => array( 'location' => 'grid',
'cellId' => 'cell_field4' ),
'simple_grid_field14' => array( 'location' => 'grid',
'cellId' => 'headcell_field5' ),
'simple_grid_field10' => array( 'location' => 'grid',
'cellId' => 'cell_field5' ) ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'print_header' => array( 'print_header' ),
'print_subheader' => array( 'print_subheader' ),
'print_pages' => array( 'print_pages' ),
'master_info' => array( 'master_info' ),
'grid_field' => array( 'simple_grid_field4',
'simple_grid_field5',
'simple_grid_field6',
'simple_grid_field7',
'simple_grid_field9',
'simple_grid_field10' ),
'grid_field_label' => array( 'simple_grid_field',
'simple_grid_field8',
'simple_grid_field11',
'simple_grid_field12',
'simple_grid_field13',
'simple_grid_field14' ),
'inline_add' => array( 'inline_add' ),
'grid_inline_cancel' => array( 'grid_inline_cancel' ) ),
'cellMaps' => array( 'grid' => array( 'cells' => array( 'headcell_field' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array( 'idComportamental_fieldheadercolumn' ),
'items' => array( 'simple_grid_field' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field1' => array( 'cols' => array( 1 ),
'rows' => array( 0 ),
'tags' => array( 'idCompetencia_fieldheadercolumn' ),
'items' => array( 'simple_grid_field8' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field2' => array( 'cols' => array( 2 ),
'rows' => array( 0 ),
'tags' => array( 'idConducta_fieldheadercolumn' ),
'items' => array( 'simple_grid_field11' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field3' => array( 'cols' => array( 3 ),
'rows' => array( 0 ),
'tags' => array( 'evalparfun_cal_fieldheadercolumn' ),
'items' => array( 'simple_grid_field12' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field4' => array( 'cols' => array( 4 ),
'rows' => array( 0 ),
'tags' => array( 'sysst_fieldheadercolumn' ),
'items' => array( 'simple_grid_field13' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field5' => array( 'cols' => array( 5 ),
'rows' => array( 0 ),
'tags' => array( 'Evidencia_fieldheadercolumn' ),
'items' => array( 'simple_grid_field14' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field' => array( 'cols' => array( 0 ),
'rows' => array( 1 ),
'tags' => array( 'idComportamental_fieldcolumn' ),
'items' => array( 'simple_grid_field4' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field1' => array( 'cols' => array( 1 ),
'rows' => array( 1 ),
'tags' => array( 'idCompetencia_fieldcolumn' ),
'items' => array( 'simple_grid_field5' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field2' => array( 'cols' => array( 2 ),
'rows' => array( 1 ),
'tags' => array( 'idConducta_fieldcolumn' ),
'items' => array( 'simple_grid_field6' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field3' => array( 'cols' => array( 3 ),
'rows' => array( 1 ),
'tags' => array( 'evalparfun_cal_fieldcolumn' ),
'items' => array( 'simple_grid_field7' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field4' => array( 'cols' => array( 4 ),
'rows' => array( 1 ),
'tags' => array( 'sysst_fieldcolumn' ),
'items' => array( 'simple_grid_field9' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field5' => array( 'cols' => array( 5 ),
'rows' => array( 1 ),
'tags' => array( 'Evidencia_fieldcolumn' ),
'items' => array( 'simple_grid_field10' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field' => array( 'cols' => array( 0 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field1' => array( 'cols' => array( 1 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field2' => array( 'cols' => array( 2 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field3' => array( 'cols' => array( 3 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field4' => array( 'cols' => array( 4 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field5' => array( 'cols' => array( 5 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ) ),
'width' => 6,
'height' => 3 ) ) ),
'loginForm' => array( 'loginForm' => 3 ),
'page' => array( 'verticalBar' => false,
'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array( 'print_pages' => array( 'tag' => 'PRINT_PAGES',
'type' => 2 ) ),
'register_activate_message' => array(  ),
'details_found' => array(  ) ),
'gridType' => 0,
'recsPerRow' => 1,
'hasCustomButtons' => false,
'customButtons' => array(  ),
'hasNotifications' => false,
'menus' => array(  ),
'calcTotalsFor' => 1 ),
'misc' => array( 'type' => 'print',
'breadcrumb' => false ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ),
'dataGrid' => array( 'groupFields' => array(  ) ) );
			$pageArray = array( 'id' => 'print',
'type' => 'print',
'layoutId' => 'basic',
'disabled' => 0,
'default' => 0,
'forms' => array( 'above-grid' => array( 'modelId' => 'print-above-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'print_pages',
'grid_inline_cancel',
'inline_add' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'below-grid' => array( 'modelId' => 'print-below-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array(  ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'top' => array( 'modelId' => 'print-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c2' ) ),
'section' => '' ),
array( 'cells' => array( array( 'cell' => 'c4' ) ),
'section' => '' ) ),
'cells' => array( 'c2' => array( 'model' => 'c2',
'items' => array( 'print_header',
'print_subheader' ) ),
'c4' => array( 'model' => 'c4',
'items' => array( 'master_info' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'horizontal-grid',
'grid' => array( array( 'section' => 'head',
'cells' => array( array( 'cell' => 'headcell_field' ),
array( 'cell' => 'headcell_field1' ),
array( 'cell' => 'headcell_field2' ),
array( 'cell' => 'headcell_field3' ),
array( 'cell' => 'headcell_field4' ),
array( 'cell' => 'headcell_field5' ) ) ),
array( 'section' => 'body',
'cells' => array( array( 'cell' => 'cell_field' ),
array( 'cell' => 'cell_field1' ),
array( 'cell' => 'cell_field2' ),
array( 'cell' => 'cell_field3' ),
array( 'cell' => 'cell_field4' ),
array( 'cell' => 'cell_field5' ) ) ),
array( 'section' => 'foot',
'cells' => array( array( 'cell' => 'footcell_field' ),
array( 'cell' => 'footcell_field1' ),
array( 'cell' => 'footcell_field2' ),
array( 'cell' => 'footcell_field3' ),
array( 'cell' => 'footcell_field4' ),
array( 'cell' => 'footcell_field5' ) ) ) ),
'cells' => array( 'headcell_field' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field' ),
'field' => 'idComportamental',
'columnName' => 'field' ),
'cell_field' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field4' ),
'field' => 'idComportamental',
'columnName' => 'field' ),
'footcell_field' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field1' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field8' ),
'field' => 'idCompetencia',
'columnName' => 'field' ),
'cell_field1' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field5' ),
'field' => 'idCompetencia',
'columnName' => 'field' ),
'footcell_field1' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field2' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field11' ),
'field' => 'idConducta',
'columnName' => 'field' ),
'cell_field2' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field6' ),
'field' => 'idConducta',
'columnName' => 'field' ),
'footcell_field2' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field3' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field12' ),
'field' => 'evalparfun_cal',
'columnName' => 'field' ),
'cell_field3' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field7' ),
'field' => 'evalparfun_cal',
'columnName' => 'field' ),
'footcell_field3' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field4' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field13' ),
'field' => 'sysst',
'columnName' => 'field' ),
'cell_field4' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field9' ),
'field' => 'sysst',
'columnName' => 'field' ),
'footcell_field4' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field5' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field14' ),
'field' => 'Evidencia',
'columnName' => 'field' ),
'cell_field5' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field10' ),
'field' => 'Evidencia',
'columnName' => 'field' ),
'footcell_field5' => array( 'model' => 'footcell_field',
'items' => array(  ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'print_header' => array( 'type' => 'print_header' ),
'print_subheader' => array( 'type' => 'print_subheader' ),
'print_pages' => array( 'type' => 'print_pages' ),
'master_info' => array( 'type' => 'master_info',
'tables' => array( 'evaluacion_po' => 'true' ) ),
'simple_grid_field4' => array( 'field' => 'idComportamental',
'type' => 'grid_field' ),
'simple_grid_field' => array( 'type' => 'grid_field_label',
'field' => 'idComportamental' ),
'simple_grid_field5' => array( 'field' => 'idCompetencia',
'type' => 'grid_field' ),
'simple_grid_field8' => array( 'type' => 'grid_field_label',
'field' => 'idCompetencia' ),
'simple_grid_field6' => array( 'field' => 'idConducta',
'type' => 'grid_field' ),
'simple_grid_field11' => array( 'type' => 'grid_field_label',
'field' => 'idConducta' ),
'simple_grid_field7' => array( 'field' => 'evalparfun_cal',
'type' => 'grid_field' ),
'simple_grid_field12' => array( 'type' => 'grid_field_label',
'field' => 'evalparfun_cal' ),
'simple_grid_field9' => array( 'field' => 'sysst',
'type' => 'grid_field' ),
'simple_grid_field13' => array( 'type' => 'grid_field_label',
'field' => 'sysst' ),
'simple_grid_field10' => array( 'field' => 'Evidencia',
'type' => 'grid_field' ),
'simple_grid_field14' => array( 'type' => 'grid_field_label',
'field' => 'Evidencia' ),
'inline_add' => array( 'type' => 'inline_add',
'detailsOnly' => true ),
'grid_inline_cancel' => array( 'type' => 'grid_inline_cancel' ) ),
'dbProps' => array(  ),
'version' => 14,
'imageItem' => array( 'type' => 'page_image' ),
'imageBgColor' => '#f2f2f2',
'controlsBgColor' => 'white',
'imagePosition' => 'right',
'listTotals' => 1 );
		?>