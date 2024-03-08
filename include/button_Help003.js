Runner.buttonEvents["Help003"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'Help003';
	
	if ( !pageObj.buttonEventBefore['Help003'] ) {
		pageObj.buttonEventBefore['Help003'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;
Swal.fire({
	position: 'top',
	icon: 'success',
	title: 'Instrucciones',
	width: 600,
	html: '<p>Tenga en cuenta las siguientes recomendaciones para la generación y  carga de la Calificación definitiva</p>'+
'<ul>'+
  '<li><div align="left">La información presentada es la consolidación de la(s) concertacion(es) y evaluacion(es) que haya realizado durante el periodo reportado</li></div><br />'+
  '<li><div align="left">Si en el documento no aparece la firma al evaluador, esto se debe a que con este cambio se requiere que indique quien firmará la calificación definitiva, en esta misma página lo puede realizar</li></div><br />'+
  '<li><div align="left">No olvide subir en la plataforma la evaluación definitiva firmada por usted y el evaluador, tambien en esta misma pantalla lo puede realizar.</li></div><br />'+
'</ul>',
	background: '#F7F7F7',
	timerProgressBar: true,
	showConfirmButton: true,
	timer: 50000,
	footer: 'EDL Ver. 2.0'
})
		}
	}
	
	if ( !pageObj.buttonEventAfter['Help003'] ) {
		pageObj.buttonEventAfter['Help003'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;

		}
	}
	
	$('a[id="Help003"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "Help003" + "_" + Runner.genId();
		
		// create object
		var button_Help003 = new Runner.form.Button({
			id: this.id ,
			btnName: "Help003"
		});
		
		// init
		button_Help003.init( {args: [ pageObj, proxy, pageid ]} );
	});
};

