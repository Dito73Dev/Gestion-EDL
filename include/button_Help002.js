Runner.buttonEvents["Help002"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'Help002';
	
	if ( !pageObj.buttonEventBefore['Help002'] ) {
		pageObj.buttonEventBefore['Help002'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;
Swal.fire({
  icon: 'question',
  title: 'Subir calificación definitiva',
  text: 'Una vez generada y firmada la EDL por el evaluador y por usted haga clic en el botón subir calificación y presione guardar, recuerde que esta acción solo se permite una única vez',
  footer: 'EDL Ver: 2.0'
})
		}
	}
	
	if ( !pageObj.buttonEventAfter['Help002'] ) {
		pageObj.buttonEventAfter['Help002'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;

		}
	}
	
	$('a[id="Help002"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "Help002" + "_" + Runner.genId();
		
		// create object
		var button_Help002 = new Runner.form.Button({
			id: this.id ,
			btnName: "Help002"
		});
		
		// init
		button_Help002.init( {args: [ pageObj, proxy, pageid ]} );
	});
};

