Runner.buttonEvents["BtnInfoConcertacion"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'BtnInfoConcertacion';
	
	if ( !pageObj.buttonEventBefore['BtnInfoConcertacion'] ) {
		pageObj.buttonEventBefore['BtnInfoConcertacion'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;
swal({
	icon: "info",
	title: "Concertación",
	text: "Funcionalidad dispuesta únicamente para fines de administración por las áreas de Gestión Humana y Tecnología",
	buttons: false,
	timer: 8000
});
		}
	}
	
	if ( !pageObj.buttonEventAfter['BtnInfoConcertacion'] ) {
		pageObj.buttonEventAfter['BtnInfoConcertacion'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;

		}
	}
	
	$('a[id="BtnInfoConcertacion"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "BtnInfoConcertacion" + "_" + Runner.genId();
		
		// create object
		var button_BtnInfoConcertacion = new Runner.form.Button({
			id: this.id ,
			btnName: "BtnInfoConcertacion"
		});
		
		// init
		button_BtnInfoConcertacion.init( {args: [ pageObj, proxy, pageid ]} );
	});
};

