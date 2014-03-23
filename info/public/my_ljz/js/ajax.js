var AJAX={active:false,source:null,_callback:function(){},_debug:false,$msgbox:null,hash:function(c){c+="";var a=c.length,d=0,b=0;for(;b<a;++b){d+=c.charCodeAt(b);d+=(d<<10);d^=(d>>6)}d+=(d<<3);d^=(d>>11);d+=(d<<15);return Math.abs(d)},registerOnload:function(b,c){var a="onload_"+AJAX.hash(b);$(document).bind(a,c);this._debug&&console.log("Registered event "+a+" for file "+b);return this},registerTeardown:function(b,c){var a="teardown_"+AJAX.hash(b);$(document).bind(a,c);this._debug&&console.log("Registered event "+a+" for file "+b);return this},fireOnload:function(b){var a="onload_"+AJAX.hash(b);$(document).trigger(a);this._debug&&console.log("Fired event "+a+" for file "+b)},fireTeardown:function(b){var a="teardown_"+AJAX.hash(b);$(document).triggerHandler(a);this._debug&&console.log("Fired event "+a+" for file "+b)},requestHandler:function(d){var b=$(this).attr("href");if($(this).attr("target")){return true}else{if($(this).hasClass("ajax")||$(this).hasClass("disableAjax")){return true}else{if(b&&b.match(/^#/)){return true}else{if(b&&b.match(/^mailto/)){return true}else{if($(this).hasClass("ui-datepicker-next")||$(this).hasClass("ui-datepicker-prev")){return true}}}}}if(typeof d!="undefined"){d.preventDefault();d.stopImmediatePropagation()}if(AJAX.active==true){return false}AJAX.source=$(this);$("html, body").animate({scrollTop:0},"fast");var e=!!b||false;var c=e?b:$(this).attr("action");var f="ajax_request=true&ajax_page_request=true";if(!e){f+="&"+$(this).serialize()}f+=AJAX.cache.menus.getRequestParam();AJAX._debug&&console.log("Loading: "+c);if(e){AJAX.active=true;AJAX.$msgbox=PMA_ajaxShowMessage();$.get(c,f,AJAX.responseHandler)}else{var a=$(this).data("onsubmit");if(typeof a!=="function"||a.apply(this,[d])){AJAX.active=true;AJAX.$msgbox=PMA_ajaxShowMessage();$.post(c,f,AJAX.responseHandler)}}},responseHandler:function(a){if(a.success){$table_clone=false;PMA_ajaxRemoveMessage(AJAX.$msgbox);if(a._redirect){PMA_ajaxShowMessage(a._redirect,false);AJAX.active=false;return}AJAX.scriptHandler.reset(function(){if(a._reloadNavigation){PMA_reloadNavigation()}if(a._reloadQuerywindow){var b=a._reloadQuerywindow;PMA_querywindow.reload(b.db,b.table,b.sql_query)}if(a._focusQuerywindow){PMA_querywindow.focus(a._focusQuerywindow)}if(a._title){$("title").replaceWith(a._title)}if(a._menu){AJAX.cache.menus.replace(a._menu);AJAX.cache.menus.add(a._menuHash,a._menu)}else{if(a._menuHash){AJAX.cache.menus.replace(AJAX.cache.menus.get(a._menuHash))}}$("body").children().not("#pma_navigation").not("#floating_menubar").not("#goto_pagetop").not("#page_content").not("#selflink").not("#session_debug").remove();if(a.message&&a.message.length>0){$("#page_content").replaceWith("<div id='page_content'>"+a.message+"</div>")}if(a._selflink){$("#selflink > a").attr("href",a._selflink)}if(a._scripts){AJAX.scriptHandler.load(a._scripts)}if(a._selflink&&a._scripts&&a._menuHash&&a._params){AJAX.cache.add(a._selflink,a._scripts,a._menuHash,a._params,AJAX.source.attr("rel"))}if(a._params){PMA_commonParams.setAll(a._params)}if(a._displayMessage){$("#page_content").prepend(a._displayMessage)}$("#pma_errors").remove();if(a._errors){$("<div/>",{id:"pma_errors"}).insertAfter("#selflink").append(a._errors)}if(typeof AJAX._callback==="function"){AJAX._callback.call()}AJAX._callback=function(){}})}else{PMA_ajaxShowMessage(a.error,false);AJAX.active=false}},scriptHandler:{_scripts:[],_scriptsToBeLoaded:[],_scriptsToBeFired:[],add:function(a,b){this._scripts.push(a);if(b){this._scriptsToBeFired.push(a)}return this},load:function(g){var b=this;b._scriptsToBeLoaded=[];b._scriptsToBeFired=[];for(var d in g){b._scriptsToBeLoaded.push(g[d].name);if(g[d].fire){b._scriptsToBeFired.push(g[d].name)}}var f=[];var e=false;for(var c in b._scriptsToBeLoaded){var a=b._scriptsToBeLoaded[c];if($.inArray(a,b._scripts)==-1){e=true;this.add(a);f.push("scripts[]="+a)}}if(e){$.ajax({url:"js/get_scripts.js.php?"+f.join("&"),cache:true,success:function(){b.done()},dataType:"script"})}else{b.done()}},done:function(){for(var a in this._scriptsToBeFired){AJAX.fireOnload(this._scriptsToBeFired[a])}AJAX.active=false},reset:function(b){for(var a in this._scriptsToBeFired){AJAX.fireTeardown(this._scriptsToBeFired[a])}this._scriptsToBeFired=[];$("a").die("click").live("click",AJAX.requestHandler);$("form").die("submit").live("submit",AJAX.requestHandler);AJAX.cache.update();b()}}};AJAX.registerOnload("functions.js",function(){$("form").not(".ajax").not(".disableAjax").each(function(){if($(this).attr("onsubmit")){$(this).data("onsubmit",this.onsubmit).attr("onsubmit","")}})});AJAX.cache={MAX:6,primer:{},pages:[],current:0,add:function(d,b,f,e,a){if(this.pages.length>AJAX.cache.MAX){for(var c=0;c<this.pages.length-this.MAX;c++){delete this.pages[c]}}while(this.current<this.pages.length){this.pages.pop()}if(a==="newpage"||(typeof a==="undefined"&&(typeof this.pages[this.current-1]==="undefined"||this.pages[this.current-1].hash!==d))){this.pages.push({hash:d,content:$("#page_content").html(),scripts:b,selflink:$("#selflink").html(),menu:f,params:e});AJAX.setUrlHash(this.current,d);this.current++}},navigate:function(b){if(typeof this.pages[b]==="undefined"){PMA_ajaxShowMessage('<div class="error">'+PMA_messages.strInvalidPage+"</div>",false)}else{AJAX.active=true;var a=this.pages[b];AJAX.scriptHandler.reset(function(){$("#page_content").html(a.content);$("#selflink").html(a.selflink);AJAX.cache.menus.replace(AJAX.cache.menus.get(a.menu));PMA_commonParams.setAll(a.params);AJAX.scriptHandler.load(a.scripts);AJAX.cache.current=++b})}},update:function(){var a=this.pages[this.current-1];if(a){a.content=$("#page_content").html()}},menus:{size:function(c){var b=0,a;for(a in c){if(c.hasOwnProperty(a)){b++}}return b},data:{},add:function(e,d){if(this.size(this.data)>AJAX.cache.MAX){var a,c,f=0;for(var b in this.data){if(this.data[b]){if(!f||this.data[b].timestamp.getTime()<a.getTime()){a=this.data[b].timestamp;c=b;f=1}}}delete this.data[c]}this.data[e]={content:d,timestamp:new Date()}},get:function(a){if(this.data[a]){return this.data[a].content}else{return""}},getRequestParam:function(){var d="";var a=[];for(var b in this.data){a.push(b)}var c=a.join("-");if(c){d="&menuHashes="+c}return d},replace:function(a){$("#floating_menubar").html(a).children().first().remove();$("#topmenu").menuResizer(PMA_mainMenuResizerCallback)}}};AJAX.setUrlHash=(function(f,d){var c=false;var g="";var a=true;function e(){if(f.browser.mozilla){$("head > link[href=favicon\\.ico]").appendTo("head")}}function b(h,i){a=false;if(c){d.location.hash="PMAURL-"+h+":"+i;e()}else{g="PMAURL-"+h+":"+i}}if(d.location.hash.substring(0,8)=="#PMAURL-"){d.location=d.location.hash.substring(d.location.hash.indexOf(":")+1)}else{f(function(){if(g!=""){d.location.hash=g;g="";e()}c=true})}f(function(){f(d).hashchange(function(){if(a===false){a=true}else{if(/^#PMAURL-\d+:/.test(d.location.hash)){var h=d.location.hash.substring(8,d.location.hash.indexOf(":"));AJAX.cache.navigate(h)}}})});return b})(jQuery,window);$(function(){if(AJAX.cache.primer.url){AJAX.cache.menus.add(AJAX.cache.primer.menuHash,$("<div></div>").append("<div></div>").append($("#serverinfo").clone()).append($("#topmenucontainer").clone()).html())}$(function(){if(AJAX.cache.primer.url){AJAX.cache.add(AJAX.cache.primer.url,AJAX.cache.primer.scripts,AJAX.cache.primer.menuHash)}})});$("a").live("click",AJAX.requestHandler);$("form").live("submit",AJAX.requestHandler);$(document).ajaxError(function(d,c,b){if(c.status!==0){var e=$.sprintf(PMA_messages.strErrorCode,c.status);var a=$.sprintf(PMA_messages.strErrorText,c.statusText);PMA_ajaxShowMessage('<div class="error">'+PMA_messages.strErrorProcessingRequest+"<div>"+e+"</div><div>"+a+"</div></div>",false);AJAX.active=false}});