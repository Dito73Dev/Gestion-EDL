<?php
			$optionsArray = array( 'captcha' => array( 'captcha' => false ),
'fields' => array( 'gridFields' => array(  ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array(  ) ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'above-grid' => array( 'message' ),
'supertop' => array( 'image' ),
'top' => array( 'remind_header' ),
'grid' => array( 'username_email_label',
'username_email' ),
'footer' => array( 'remind_button',
'back_to_login' ) ),
'formXtTags' => array(  ),
'itemForms' => array( 'message' => 'above-grid',
'image' => 'supertop',
'remind_header' => 'top',
'username_email_label' => 'grid',
'username_email' => 'grid',
'remind_button' => 'footer',
'back_to_login' => 'footer' ),
'itemLocations' => array(  ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'username_email_label' => array( 'username_email_label' ),
'username_email' => array( 'username_email' ),
'message' => array( 'message' ),
'remind_button' => array( 'remind_button' ),
'back_to_login' => array( 'back_to_login' ),
'remind_header' => array( 'remind_header' ),
'image' => array( 'image' ) ),
'cellMaps' => array(  ) ),
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
			$pageArray = array( 'id' => 'remind',
'type' => 'remind',
'layoutId' => 'first',
'disabled' => 0,
'default' => 0,
'forms' => array( 'above-grid' => array( 'modelId' => 'remind-above-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'message' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'supertop' => array( 'modelId' => 'panel-top',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'image' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'top' => array( 'modelId' => 'remind-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'remind_header' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'remind-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c2' ),
array( 'cell' => 'c3' ) ),
'section' => '' ) ),
'cells' => array( 'c2' => array( 'model' => 'c2',
'items' => array( 'username_email_label' ) ),
'c3' => array( 'model' => 'c3',
'items' => array( 'username_email' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'footer' => array( 'modelId' => 'remind-footer',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array(  ) ),
'c2' => array( 'model' => 'c2',
'items' => array( 'remind_button',
'back_to_login' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'username_email_label' => array( 'type' => 'username_email_label' ),
'username_email' => array( 'type' => 'username_email' ),
'message' => array( 'type' => 'message' ),
'remind_button' => array( 'type' => 'remind_button',
'label' => array( 'type' => 0,
'text' => 'Solicitar' ),
'icon' => array( 'fa' => 'send-o' ) ),
'back_to_login' => array( 'type' => 'back_to_login' ),
'remind_header' => array( 'type' => 'remind_header' ),
'image' => array( 'type' => 'image',
'image' => array( 'image' => 'mincit_300x50.jpg',
'source' => 2 ) ) ),
'dbProps' => array(  ),
'version' => 14,
'imageItem' => array( 'type' => 'page_image' ),
'imageBgColor' => '#f2f2f2',
'controlsBgColor' => 'white',
'imagePosition' => 'right',
'listTotals' => 1 );
		?>