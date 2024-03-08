Runner.buttonEvents["Help001"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'Help001';
	
	if ( !pageObj.buttonEventBefore['Help001'] ) {
		pageObj.buttonEventBefore['Help001'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;
Swal.fire({
  icon: 'question',
  title: 'Activar evaluador para firma de calificación',
  text: 'De la lista de evaluadores seleccione quien firmará la calificación final',
  footer: 'EDL Ver: 2.0'
})
		}
	}
	
	if ( !pageObj.buttonEventAfter['Help001'] ) {
		pageObj.buttonEventAfter['Help001'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;

		}
	}
	
	$('a[id="Help001"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "Help001" + "_" + Runner.genId();
		
		// create object
		var button_Help001 = new Runner.form.Button({
			id: this.id ,
			btnName: "Help001"
		});
		
		// init
		button_Help001.init( {args: [ pageObj, proxy, pageid ]} );
	});
};

