Runner.buttonEvents["BtnCreaConcertacion"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'BtnCreaConcertacion';
	
	if ( !pageObj.buttonEventBefore['BtnCreaConcertacion'] ) {
		pageObj.buttonEventBefore['BtnCreaConcertacion'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;

		}
	}
	
	if ( !pageObj.buttonEventAfter['BtnCreaConcertacion'] ) {
		pageObj.buttonEventAfter['BtnCreaConcertacion'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;
// CLIENT AFTER

// Put your code here.
var message = result["eval_id"];
//window.location.href ='http://raam.mincit.gov.co/gestion/mpdf60/mod/ra.php?ra_id='+result["ra_id"];

var win = Runner.displayPopup( {
  url: 'https://servicios.mincit.gov.co/edlprocess/mpdf60/mod/_gen_eval.php?eval_id='+result["eval_id"],
  width: 960,
  height: 600,
  header: 'CONCERTACION DE OBJETIVOS'
});

		}
	}
	
	$('a[id="BtnCreaConcertacion"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "BtnCreaConcertacion" + "_" + Runner.genId();
		
		// create object
		var button_BtnCreaConcertacion = new Runner.form.Button({
			id: this.id ,
			btnName: "BtnCreaConcertacion"
		});
		
		// init
		button_BtnCreaConcertacion.init( {args: [ pageObj, proxy, pageid ]} );
	});
};

