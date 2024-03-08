Runner.buttonEvents["BtnEval"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'BtnEval';
	
	if ( !pageObj.buttonEventBefore['BtnEval'] ) {
		pageObj.buttonEventBefore['BtnEval'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;

		}
	}
	
	if ( !pageObj.buttonEventAfter['BtnEval'] ) {
		pageObj.buttonEventAfter['BtnEval'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;
// CLIENT AFTER

// Put your code here.
var message = result["eval_id"];
//window.location.href ='http://raam.mincit.gov.co/gestion/mpdf60/mod/ra.php?ra_id='+result["ra_id"];

var win = Runner.displayPopup( {
  url: 'https://servicios.mincit.gov.co/edlprocess/mpdf60/mod/_gen_eval_a.php?evaluacion_p_id='+result["eval_id"],
  width: 960,
  height: 600,
  header: 'CONCERTACION DE OBJETIVOS'
});

		}
	}
	
	$('a[id="BtnEval"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "BtnEval" + "_" + Runner.genId();
		
		// create object
		var button_BtnEval = new Runner.form.Button({
			id: this.id ,
			btnName: "BtnEval"
		});
		
		// init
		button_BtnEval.init( {args: [ pageObj, proxy, pageid ]} );
	});
};

