<?php
			$optionsArray = array( 'fields' => array( 'gridFields' => array( 'active',
'borra',
'cedula',
'contrasenia',
'email',
'estado',
'groupid',
'id',
'idFuncionario',
'idPerfil',
'rdnkey',
'reset_date',
'reset_date1',
'reset_token',
'usuario' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'active' => array( 'import_field' ),
'borra' => array( 'import_field1' ),
'cedula' => array( 'import_field2' ),
'contrasenia' => array( 'import_field3' ),
'email' => array( 'import_field4' ),
'estado' => array( 'import_field5' ),
'groupid' => array( 'import_field6' ),
'id' => array( 'import_field7' ),
'idFuncionario' => array( 'import_field8' ),
'idPerfil' => array( 'import_field9' ),
'rdnkey' => array( 'import_field10' ),
'reset_date' => array( 'import_field11' ),
'reset_date1' => array( 'import_field12' ),
'reset_token' => array( 'import_field13' ),
'usuario' => array( 'import_field14' ) ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'supertop' => array(  ),
'top' => array( 'import_header' ),
'grid' => array( 'import_field',
'import_field1',
'import_field2',
'import_field3',
'import_field4',
'import_field5',
'import_field6',
'import_field7',
'import_field8',
'import_field9',
'import_field10',
'import_field11',
'import_field12',
'import_field13',
'import_field14' ) ),
'formXtTags' => array( 'supertop' => array(  ) ),
'itemForms' => array( 'import_header' => 'top',
'import_field' => 'grid',
'import_field1' => 'grid',
'import_field2' => 'grid',
'import_field3' => 'grid',
'import_field4' => 'grid',
'import_field5' => 'grid',
'import_field6' => 'grid',
'import_field7' => 'grid',
'import_field8' => 'grid',
'import_field9' => 'grid',
'import_field10' => 'grid',
'import_field11' => 'grid',
'import_field12' => 'grid',
'import_field13' => 'grid',
'import_field14' => 'grid' ),
'itemLocations' => array(  ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'import_header' => array( 'import_header' ),
'import_field' => array( 'import_field',
'import_field1',
'import_field2',
'import_field3',
'import_field4',
'import_field5',
'import_field6',
'import_field7',
'import_field8',
'import_field9',
'import_field10',
'import_field11',
'import_field12',
'import_field13',
'import_field14' ) ),
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
'buttons' => array(  ) ) );
			$pageArray = array( 'id' => 'import',
'type' => 'import',
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
'top' => array( 'modelId' => 'import-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'import_header' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'import-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'import_field',
'import_field1',
'import_field2',
'import_field3',
'import_field4',
'import_field5',
'import_field6',
'import_field7',
'import_field8',
'import_field9',
'import_field10',
'import_field11',
'import_field12',
'import_field13',
'import_field14' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'import_header' => array( 'type' => 'import_header' ),
'import_field' => array( 'field' => 'active',
'type' => 'import_field' ),
'import_field1' => array( 'field' => 'borra',
'type' => 'import_field' ),
'import_field2' => array( 'field' => 'cedula',
'type' => 'import_field' ),
'import_field3' => array( 'field' => 'contrasenia',
'type' => 'import_field' ),
'import_field4' => array( 'field' => 'email',
'type' => 'import_field' ),
'import_field5' => array( 'field' => 'estado',
'type' => 'import_field' ),
'import_field6' => array( 'field' => 'groupid',
'type' => 'import_field' ),
'import_field7' => array( 'field' => 'id',
'type' => 'import_field' ),
'import_field8' => array( 'field' => 'idFuncionario',
'type' => 'import_field' ),
'import_field9' => array( 'field' => 'idPerfil',
'type' => 'import_field' ),
'import_field10' => array( 'field' => 'rdnkey',
'type' => 'import_field' ),
'import_field11' => array( 'field' => 'reset_date',
'type' => 'import_field' ),
'import_field12' => array( 'field' => 'reset_date1',
'type' => 'import_field' ),
'import_field13' => array( 'field' => 'reset_token',
'type' => 'import_field' ),
'import_field14' => array( 'field' => 'usuario',
'type' => 'import_field' ) ),
'dbProps' => array(  ),
'version' => 14,
'imageItem' => array( 'type' => 'page_image' ),
'imageBgColor' => '#f2f2f2',
'controlsBgColor' => 'white',
'imagePosition' => 'right',
'listTotals' => 1 );
		?>