<?php
			$optionsArray = array( 'captcha' => array( 'captcha' => false ),
'fields' => array( 'gridFields' => array( 'help_msj',
'help_title',
'help_code',
'help_file' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'updateOnEditFields' => array(  ),
'fieldItems' => array( 'help_msj' => array( 'integrated_edit_field2' ),
'help_title' => array( 'integrated_edit_field1' ),
'help_code' => array( 'integrated_edit_field' ),
'help_file' => array( 'integrated_edit_field3' ) ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => true,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'above-grid' => array( 'edit_message',
'edit_save',
'edit_back_list' ),
'below-grid' => array( 'edit_close',
'hamburger' ),
'supertop' => array( 'expand_menu_button',
'expand_menu_button1',
'collapse_button',
'loginform_login',
'username_button' ),
'left' => array( 'logo1',
'expand_button',
'menu' ),
'top' => array( 'edit_header' ),
'grid' => array( 'integrated_edit_field2',
'integrated_edit_field1',
'integrated_edit_field',
'integrated_edit_field3' ) ),
'formXtTags' => array( 'above-grid' => array( 'message_block',
'save_edit',
'back_button' ) ),
'itemForms' => array( 'edit_message' => 'above-grid',
'edit_save' => 'above-grid',
'edit_back_list' => 'above-grid',
'edit_close' => 'below-grid',
'hamburger' => 'below-grid',
'expand_menu_button' => 'supertop',
'expand_menu_button1' => 'supertop',
'collapse_button' => 'supertop',
'loginform_login' => 'supertop',
'username_button' => 'supertop',
'logo1' => 'left',
'expand_button' => 'left',
'menu' => 'left',
'edit_header' => 'top',
'integrated_edit_field2' => 'grid',
'integrated_edit_field1' => 'grid',
'integrated_edit_field' => 'grid',
'integrated_edit_field3' => 'grid' ),
'itemLocations' => array( 'integrated_edit_field2' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field1' => array( 'location' => 'grid',
'cellId' => 'c4' ),
'integrated_edit_field' => array( 'location' => 'grid',
'cellId' => 'c5' ),
'integrated_edit_field3' => array( 'location' => 'grid',
'cellId' => 'c6' ) ),
'itemVisiblity' => array( 'expand_menu_button' => 2,
'expand_menu_button1' => 2,
'expand_button' => 5 ) ),
'itemsByType' => array( 'edit_header' => array( 'edit_header' ),
'edit_message' => array( 'edit_message' ),
'edit_save' => array( 'edit_save' ),
'edit_back_list' => array( 'edit_back_list' ),
'edit_close' => array( 'edit_close' ),
'hamburger' => array( 'hamburger' ),
'edit_reset' => array( 'edit_reset' ),
'edit_view' => array( 'edit_view' ),
'integrated_edit_field' => array( 'integrated_edit_field2',
'integrated_edit_field1',
'integrated_edit_field',
'integrated_edit_field3' ),
'menu' => array( 'menu' ),
'username_button' => array( 'username_button' ),
'loginform_login' => array( 'loginform_login' ),
'userinfo_link' => array( 'userinfo_link' ),
'logout_link' => array( 'logout_link' ),
'expand_menu_button' => array( 'expand_menu_button',
'expand_menu_button1' ),
'collapse_button' => array( 'collapse_button' ),
'changepassword_link' => array( 'changepassword_link' ),
'adminarea_link' => array( 'adminarea_link' ),
'logo' => array( 'logo1' ),
'expand_button' => array( 'expand_button' ) ),
'cellMaps' => array( 'grid' => array( 'cells' => array( 'c4' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field1' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c5' => array( 'cols' => array( 1 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c3' => array( 'cols' => array( 0,
1 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field2' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c6' => array( 'cols' => array( 0 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field3' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c7' => array( 'cols' => array( 1 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ) ),
'width' => 2,
'height' => 3 ) ) ),
'loginForm' => array( 'loginForm' => 0 ),
'page' => array( 'verticalBar' => true,
'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array(  ),
'register_activate_message' => array(  ),
'details_found' => array(  ) ),
'hasCustomButtons' => false,
'customButtons' => array(  ),
'hasNotifications' => false,
'menus' => array( array( 'id' => 'main',
'horizontal' => false ) ),
'calcTotalsFor' => 1 ),
'misc' => array( 'type' => 'edit',
'breadcrumb' => false,
'nextPrev' => false ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ),
'edit' => array( 'updateSelected' => false ) );
			$pageArray = array( 'id' => 'edit',
'type' => 'edit',
'layoutId' => 'leftbar',
'disabled' => 0,
'default' => 0,
'forms' => array( 'above-grid' => array( 'modelId' => 'edit-above-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c' ) ) ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'edit_message' ) ),
'c' => array( 'model' => 'c1',
'items' => array( 'edit_save',
'edit_back_list' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'below-grid' => array( 'modelId' => 'edit-below-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'edit_close' ) ),
'c2' => array( 'model' => 'c2',
'items' => array( 'hamburger' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'supertop' => array( 'modelId' => 'leftbar-top-edit',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'expand_menu_button',
'expand_menu_button1',
'collapse_button' ) ),
'c2' => array( 'model' => 'c2',
'items' => array( 'loginform_login',
'username_button' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'left' => array( 'modelId' => 'leftbar-menu',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c0' ) ),
'section' => '' ),
array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c0' => array( 'model' => 'c0',
'items' => array( 'logo1',
'expand_button' ) ),
'c1' => array( 'model' => 'c1',
'items' => array( 'menu' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'top' => array( 'modelId' => 'edit-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'edit_header' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'simple-edit',
'grid' => array( array( 'section' => '',
'cells' => array( array( 'cell' => 'c4' ),
array( 'cell' => 'c5' ) ) ),
array( 'cells' => array( array( 'cell' => 'c3',
'colspan' => 2 ) ),
'section' => '' ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c6' ),
array( 'cell' => 'c7' ) ) ) ),
'cells' => array( 'c3' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field2' ),
'useFullWidth' => true ),
'c4' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field1' ) ),
'c5' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field' ) ),
'c6' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field3' ) ),
'c7' => array( 'model' => 'c3',
'items' => array(  ) ) ),
'deferredItems' => array(  ),
'columnCount' => 1,
'inlineLabels' => false,
'separateLabels' => false ) ),
'items' => array( 'edit_header' => array( 'type' => 'edit_header',
'title' => array( 'page' => 'edit',
'table' => 'help',
'type' => 7 ) ),
'edit_message' => array( 'type' => 'edit_message' ),
'edit_save' => array( 'type' => 'edit_save' ),
'edit_back_list' => array( 'type' => 'edit_back_list' ),
'edit_close' => array( 'type' => 'edit_close' ),
'hamburger' => array( 'type' => 'hamburger',
'items' => array( 'edit_reset',
'edit_view' ) ),
'edit_reset' => array( 'type' => 'edit_reset' ),
'edit_view' => array( 'type' => 'edit_view' ),
'integrated_edit_field2' => array( 'field' => 'help_msj',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false ),
'integrated_edit_field1' => array( 'field' => 'help_title',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false ),
'integrated_edit_field' => array( 'field' => 'help_code',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false ),
'integrated_edit_field3' => array( 'field' => 'help_file',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false ),
'menu' => array( 'type' => 'menu' ),
'username_button' => array( 'type' => 'username_button',
'items' => array( 'userinfo_link',
'logout_link',
'adminarea_link',
'changepassword_link' ) ),
'loginform_login' => array( 'type' => 'loginform_login',
'popup' => false ),
'userinfo_link' => array( 'type' => 'userinfo_link' ),
'logout_link' => array( 'type' => 'logout_link' ),
'expand_menu_button' => array( 'type' => 'expand_menu_button' ),
'collapse_button' => array( 'type' => 'collapse_button' ),
'changepassword_link' => array( 'type' => 'changepassword_link' ),
'adminarea_link' => array( 'type' => 'adminarea_link' ),
'logo1' => array( 'type' => 'logo' ),
'expand_menu_button1' => array( 'type' => 'expand_menu_button' ),
'expand_button' => array( 'type' => 'expand_button' ) ),
'dbProps' => array(  ),
'version' => 14,
'imageItem' => array( 'type' => 'page_image' ),
'imageBgColor' => '#f2f2f2',
'controlsBgColor' => 'white',
'imagePosition' => 'right',
'listTotals' => 1 );
		?>