
Runner.pages.PageSettings.addPageEvent('evaluacion_x005',Runner.pages.constants.PAGE_EDIT,"afterPageReady",function(pageObj,proxy,pageid,inlineRow,inlineObject,row){var ctrl=Runner.getControl(pageid,'idEvaluador');ctrl.makeReadonly();});