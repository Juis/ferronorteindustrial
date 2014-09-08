/**
* Copyright (c) 2009 Sebasti�o Ricardo Costa Rodrigues (tiaoricardo@gmail.com)
* Date 2009-09-10
*
* @file /js/ajax.js 			=> AppAjax
*
* @dependence /js/jquery.js 				=> jQuery 1.2 [packed]
* @dependence /js/pack.js	=> jQuery Form Plugin [packed]
*
*/

var AppAjax = new Object(
{

	request : function(action,options) {
		
		$.ajax({
			url:"/ajaxRequest.do",
			type:"GET",
			dataType:"text",
			data:"ACTION="+action+"&"+options.parameters,
			success : function(response) {AppAjax.onSuccess(response,options);},
			error : function(XMLHTTPRequest,response) {AppAjax.onError(XMLHTTPRequest,response,options);}
			
		});
	
	},	
	post : function(action,options) {
		
		$.ajax({
			url:"/ajaxRequest.do",
			type:"POST",
			dataType:"text",
			data:"ACTION="+action+"&"+options.parameters,
			success : function(response) {AppAjax.onSuccess(response,options);},
			error : function(XMLHTTPRequest,response) {AppAjax.onError(XMLHTTPRequest,response,options);}
			
		});
	
	},
	submit : function(form,options) {
		
		$(form).ajaxSubmit({
			url:"/ajaxRequest.do",
			type:"POST",
			dataType:"text",			
			success : function(response) {AppAjax.onSuccess(response,options);},
			error : function(XMLHTTPRequest,response) {AppAjax.onError(XMLHTTPRequest,response,options);}
			
		});
	
	},	
	onSuccess : function(response,options) {
		
		try {
			
			eval(response);
		
		} catch(e) {
						
			alert(e);
			
			if (options.debug) {
			
				this.debug(response);
				
			} else {
			
				alert("ERROR: Ocorreu um erro e a sua requisi��o n�o pode ser completada!");
				
			}
		
		}
		
	},
	onError : function(ajax,response,options) {
	
		alert("ERROR: Ocorreu um erro e a sua requisi��o n�o pode ser completada!\nSTATUS: "+ajax.status);
		
		
	},
	debug : function(response) {
		
		$("body").append("<div id='debug-overlay'></div>");
		
		body_width = $(document).width();
		body_height = $(document).height();
		window_width = $(window).width();
		window_height = $(window).height();
		
		$("#debug-overlay").width(body_width).height(body_height);
		$("#debug-overlay").css({position:"absolute",opacity:"0.7",filter:"alpha(opacity=70)",top:"0",left:"0",'z-index':"20000",background:"#000"});				
		$("body").append("<div id='debug-info'></div>");
		
		$("#debug-info").css({position:"absolute",background:"#FFF",overflow:"auto",'z-index':"20001",padding:"15px",'text-align':"left",'font-size':"12px",'font-family':"verdana",'line-height':"18px"});			
		$("#debug-info").html(response);
		
		$("#debug-info").width(Math.round(window_width*0.5));
		$("#debug-info").height(Math.round(window_height*0.5));
		$("#debug-info").css({top:(Math.round(window_height*0.25)+$(document).scrollTop())+"px",left:(Math.round(window_width*0.25))+"px"});
		
		$(document).keydown(function(event) {
			AppAjax.hideDebug(event);
		});
		
	},
	hideDebug : function(event) {
		
		if ( event == null ) {
			keycode = event.keyCode;			
		} else {
			keycode = event.keyCode;			
		}
		
		if (keycode == 27) {
			$("#debug-overlay,#debug-info").remove();
		}
	
	}
	
});

