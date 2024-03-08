Runner.buttonEvents["BtnCalDef"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'BtnCalDef';
	
	if ( !pageObj.buttonEventBefore['BtnCalDef'] ) {
		pageObj.buttonEventBefore['BtnCalDef'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;
Swal.fire({
	position: 'top',
	icon: 'success',
	title: 'En este momento se está generando la calificación definitiva',
	width: 600,
	html: '<p>Mientras finaliza, tenga en cuenta las siguientes recomendaciones</p>'+
'<ul>'+
  '<li><div align="left">La Evaluación Definitiva del Desempeño Laboral será el promedio ponderado de las evaluaciones semestrales y las evaluaciones parciales eventuales que se efectúen durante el período de evaluación que corresponda.</li></div><br />'+
  '<li><div align="left">Deben diligenciar todos los datos que se solicitan en el cuadro denominado: <strong>NOTIFICACIÓN DE LA EVALUACIÓN DEFINITIVA</strong></li></div><br />'+
  '</ul>',
	background: '#F7F7F7',
	timerProgressBar: true,
	didOpen: () => {
    Swal.showLoading()
    const b = Swal.getHtmlContainer().querySelector('b')
    timerInterval = setInterval(() => {
      b.textContent = Swal.getTimerLeft()
    }, 1000)
  },
	showConfirmButton: false,
	timer: 30000,
	footer: 'EDL Ver. 2.0'
})
		}
	}
	
	if ( !pageObj.buttonEventAfter['BtnCalDef'] ) {
		pageObj.buttonEventAfter['BtnCalDef'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;
//http://servicios.mincit.gov.co/edlprocess/mpdf60/mod/_gen_eval_edl.php?ID=322&vigencia=2021

var message = result["cal"];

var win = Runner.displayPopup( {
  url: 'https://servicios.mincit.gov.co/edlprocess/mpdf60/mod/_gen_eval_edl.php?ID='+result["cal"],
  width: 960,
  height: 600,
  header: 'CALIFICACION DEFINITIVA'
});


		}
	}
	
	$('a[id="BtnCalDef"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "BtnCalDef" + "_" + Runner.genId();
		
		// create object
		var button_BtnCalDef = new Runner.form.Button({
			id: this.id ,
			btnName: "BtnCalDef"
		});
		
		// init
		button_BtnCalDef.init( {args: [ pageObj, proxy, pageid ]} );
	});
};

