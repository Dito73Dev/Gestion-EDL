
Runner.pages.PageSettings.addPageEvent('comportamental_jerarquica',Runner.pages.constants.PAGE_ADD,"afterPageReady",function(pageObj,proxy,pageid,inlineRow,inlineObject,row){var ctrl=Runner.getControl(pageid,'idComportamental');ctrl.makeReadonly();var ctrla=Runner.getControl(pageid,'id');ctrla.makeReadonly()});Runner.pages.PageSettings.addPageEvent('comportamental_jerarquica',Runner.pages.constants.PAGE_EDIT,"afterPageReady",function(pageObj,proxy,pageid,inlineRow,inlineObject,row){var ctrl=Runner.getControl(pageid,'idComportamental');ctrl.makeReadonly();var ctrla=Runner.getControl(pageid,'id');ctrla.makeReadonly()});