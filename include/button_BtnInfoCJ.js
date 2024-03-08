Runner.buttonEvents["BtnInfoCJ"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'BtnInfoCJ';
	
	if ( !pageObj.buttonEventBefore['BtnInfoCJ'] ) {
		pageObj.buttonEventBefore['BtnInfoCJ'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;
swal({
	icon: "info",
	title: "Concertación",
	text: "Recuerde que debe concertar 4 conductas asociadas 2 competencias",
	buttons: false,
	timer: 5000
});
		}
	}
	
	if ( !pageObj.buttonEventAfter['BtnInfoCJ'] ) {
		pageObj.buttonEventAfter['BtnInfoCJ'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;

		}
	}
	
	$('a[id="BtnInfoCJ"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "BtnInfoCJ" + "_" + Runner.genId();
		
		// create object
		var button_BtnInfoCJ = new Runner.form.Button({
			id: this.id ,
			btnName: "BtnInfoCJ"
		});
		
		// init
		button_BtnInfoCJ.init( {args: [ pageObj, proxy, pageid ]} );
	});
};

