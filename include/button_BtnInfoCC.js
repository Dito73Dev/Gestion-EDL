Runner.buttonEvents["BtnInfoCC"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'BtnInfoCC';
	
	if ( !pageObj.buttonEventBefore['BtnInfoCC'] ) {
		pageObj.buttonEventBefore['BtnInfoCC'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;
swal({
	icon: "info",
	title: "Concertación",
	text: " Recuerde que debe concertar 2 conductas asociadas a la misma competencia",
	buttons: false,
	timer: 5000
});
		}
	}
	
	if ( !pageObj.buttonEventAfter['BtnInfoCC'] ) {
		pageObj.buttonEventAfter['BtnInfoCC'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;

		}
	}
	
	$('a[id="BtnInfoCC"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "BtnInfoCC" + "_" + Runner.genId();
		
		// create object
		var button_BtnInfoCC = new Runner.form.Button({
			id: this.id ,
			btnName: "BtnInfoCC"
		});
		
		// init
		button_BtnInfoCC.init( {args: [ pageObj, proxy, pageid ]} );
	});
};

