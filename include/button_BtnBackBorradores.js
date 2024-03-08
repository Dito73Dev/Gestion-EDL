Runner.buttonEvents["BtnBackBorradores"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'BtnBackBorradores';
	
	if ( !pageObj.buttonEventBefore['BtnBackBorradores'] ) {
		pageObj.buttonEventBefore['BtnBackBorradores'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;

		}
	}
	
	if ( !pageObj.buttonEventAfter['BtnBackBorradores'] ) {
		pageObj.buttonEventAfter['BtnBackBorradores'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;
location.href="concertacion_po_list.php";

		}
	}
	
	$('a[id="BtnBackBorradores"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "BtnBackBorradores" + "_" + Runner.genId();
		
		// create object
		var button_BtnBackBorradores = new Runner.form.Button({
			id: this.id ,
			btnName: "BtnBackBorradores"
		});
		
		// init
		button_BtnBackBorradores.init( {args: [ pageObj, proxy, pageid ]} );
	});
};

