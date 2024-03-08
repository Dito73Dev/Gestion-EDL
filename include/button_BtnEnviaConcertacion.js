Runner.buttonEvents["BtnEnviaConcertacion"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'BtnEnviaConcertacion';
	
	if ( !pageObj.buttonEventBefore['BtnEnviaConcertacion'] ) {
		pageObj.buttonEventBefore['BtnEnviaConcertacion'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;
// Put your code here.
//params["txt"] = "Hello";
//ajax.setMessage("Sending request to server...");
 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['BtnEnviaConcertacion'] ) {
		pageObj.buttonEventAfter['BtnEnviaConcertacion'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;
// Put your code here.
//var message = result["txt"] + " !!!";
//ajax.setMessage(message);
location.href="concertacion_po_2_list.php";

		}
	}
	
	$('a[id="BtnEnviaConcertacion"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "BtnEnviaConcertacion" + "_" + Runner.genId();
		
		// create object
		var button_BtnEnviaConcertacion = new Runner.form.Button({
			id: this.id ,
			btnName: "BtnEnviaConcertacion"
		});
		
		// init
		button_BtnEnviaConcertacion.init( {args: [ pageObj, proxy, pageid ]} );
	});
};

