
Runner.pages.PageSettings.addPageEvent('compromisofuncional',Runner.pages.constants.PAGE_ADD,"afterPageReady",function(pageObj,proxy,pageid,inlineRow,inlineObject,row){this.on('afterInlineEdit',function(fieldsData){location.reload();});});Runner.pages.PageSettings.addPageEvent('compromisofuncional',Runner.pages.constants.PAGE_EDIT,"afterPageReady",function(pageObj,proxy,pageid,inlineRow,inlineObject,row){this.on('afterInlineEdit',function(fieldsData){location.reload();});});