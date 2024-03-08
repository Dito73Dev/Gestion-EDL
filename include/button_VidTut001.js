Runner.buttonEvents["VidTut001"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'VidTut001';
	
	if ( !pageObj.buttonEventBefore['VidTut001'] ) {
		pageObj.buttonEventBefore['VidTut001'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;

		}
	}
	
	if ( !pageObj.buttonEventAfter['VidTut001'] ) {
		pageObj.buttonEventAfter['VidTut001'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;
var win = Runner.displayPopup( {
  url: 'https://servicios.mincit.gov.co/edlprocess/mpdf60/mod/vid_001.php',
  width: 960,
  height: 650,
  header: 'CALIFICACION DEFINITIVA'
});


		}
	}
	
	$('a[id="VidTut001"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "VidTut001" + "_" + Runner.genId();
		
		// create object
		var button_VidTut001 = new Runner.form.Button({
			id: this.id ,
			btnName: "VidTut001"
		});
		
		// init
		button_VidTut001.init( {args: [ pageObj, proxy, pageid ]} );
	});
};

