
Runner.pages.PageSettings.addPageEvent('evaluacion_p_funcional',Runner.pages.constants.PAGE_EDIT,"afterPageReady",function(pageObj,proxy,pageid,inlineRow,inlineObject,row){swal({icon:"info",title:"Calificación de acuerdos funcionales",text:"La calificación de los acuerdos funcionales se califica entre cero (0) y cien (100) para cada uno de los valores acordados",buttons:false,timer:4000});});