Runner.buttonEvents["BtnRedir"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'BtnRedir';
	
	if ( !pageObj.buttonEventBefore['BtnRedir'] ) {
		pageObj.buttonEventBefore['BtnRedir'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;
location.href="login.php";
		}
	}
	
	if ( !pageObj.buttonEventAfter['BtnRedir'] ) {
		pageObj.buttonEventAfter['BtnRedir'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;
// Put your code here.
var message = result["txt"] + " !!!";
ajax.setMessage(message);

		}
	}
	
	$('a[id="BtnRedir"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "BtnRedir" + "_" + Runner.genId();
		
		// create object
		var button_BtnRedir = new Runner.form.Button({
			id: this.id ,
			btnName: "BtnRedir"
		});
		
		// init
		button_BtnRedir.init( {args: [ pageObj, proxy, pageid ]} );
	});
};

