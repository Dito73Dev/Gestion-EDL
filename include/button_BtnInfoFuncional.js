Runner.buttonEvents["BtnInfoFuncional"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'BtnInfoFuncional';
	
	if ( !pageObj.buttonEventBefore['BtnInfoFuncional'] ) {
		pageObj.buttonEventBefore['BtnInfoFuncional'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;
swal({
	icon: "info",
	title: "Acuerdos funcionales",
	text: "Recuerde que debe concertar mínimo 3 acuerdos funcionales y máximo 5 hasta completar 100 puntos",
	buttons: false,
	timer: 5000
});
		}
	}
	
	if ( !pageObj.buttonEventAfter['BtnInfoFuncional'] ) {
		pageObj.buttonEventAfter['BtnInfoFuncional'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;

		}
	}
	
	$('a[id="BtnInfoFuncional"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "BtnInfoFuncional" + "_" + Runner.genId();
		
		// create object
		var button_BtnInfoFuncional = new Runner.form.Button({
			id: this.id ,
			btnName: "BtnInfoFuncional"
		});
		
		// init
		button_BtnInfoFuncional.init( {args: [ pageObj, proxy, pageid ]} );
	});
};

