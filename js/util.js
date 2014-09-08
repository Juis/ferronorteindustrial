/**
* Copyright (c) 2009 Sebasti�o Ricardo Costa Rodrigues (tiaoricardo@gmail.com)
* Date 2009-10-07
*
* @file /js/util.js 			=> AppUtils
*
* @dependence /js/jquery.js 			=> jQuery 1.2 [packed]
*
*/

var fontSize = 14;

var AppUtils = new Object(
{	
	bindAnchors : function() {
		
		$('a[href*=#]').click(function() {
			AppUtils.goTo($(this).attr("href"));		
			return false;
		});
		
	},
	bindAddFavList : function(el,title,url) {
	
		$(el).click(function() {			
			AppUtils.addToFavoriteList(title,url);
		});
	
	},
	goTo : function(to) {		
		var destination = $(to).offset().top;
		$('html:not(:animated),body:not(:animated)').animate({ scrollTop: destination-20}, 1000 );
		return false;
	},
	addToFavoriteList : function(title,url) {
		
		if (window.sidebar)
		{
			window.sidebar.addPanel(title, url, "");

		} else if (window.opera && window.print)
		{
			mbm = document.createElement('a');
			mbm.setAttribute('rel', 'sidebar');
			mbm.setAttribute('href', url);
			mbm.setAttribute('title', title);
			mbm.click();

		} else if (document.all)
		{
			window.external.AddFavorite(url, title);
		}
	
	},
	toggleList : function(obj,hideAll,el) {
		
		$(hideAll).hide();
		$(obj).parent().parent().find("a").removeClass("selected");
		$(obj).addClass("selected");		
		$(el).show();
		
		return false;
	
	},
	toggleFontSize : function(more,less,target) {
	
		$(more).bind("click",function(){
			if (fontSize<18){
				fontSize = fontSize+1;
				$(target+", "+target+" *").css({'font-size' : fontSize+'px'});
			}
	    });
	    
	    $(less).bind("click",function(){
			if (fontSize>10){
				fontSize = fontSize-1;
				$(target+", "+target+" *").css({'font-size' : fontSize+'px'});
			}
	    });
	
	},
	addHomePage : function(obj) {
		
		if ($.browser.msie) {
			obj.style.behavior= "url(#default#homepage)"; 
			obj.setHomePage('http://www.gp1.com.br/');
		} else {
			alert("Esta op��o est� dispon�vel apenas para usu�rios do navegador Microsoft Internet Explorer! Voc� deve estar usando outro navegador!");
		}
	
	},
	overlayTransform : function(el,options) {
		
		$('object, select').css({"visibility":"hidden"});
		
		opts = new Object();
		opts.opacity = options.opacity || 0.7;
		opts.bgcolor = options.bgcolor || "#000";
		
		bw = $(document).width();
		bh = $(document).height();
		ww = $(window).width();
		wh = $(window).height();
				
		$(el).width(bw).height(bh);
		$(el).css({position:"absolute",opacity:opts.opacity,filter:"alpha(opacity="+(opts.opacity*100)+")",top:"0",left:"0","z-index":"20000",background:opts.bgcolor});	
		$(el).addClass("overlay-transformed");
		
	
	},
	createContentOverlay : function(el,w,h) {
		
		bw = $(document).width();
		bh = $(document).height();
		ww = $(window).width();
		wh = $(window).height();
		
		$(el).css({position:"absolute",'z-index':"20001"});
		
		$(el).width(w);
		$(el).height(h);
		$(el).css({top:(Math.round(wh*0.25)+$(document).scrollTop()),left:(Math.round(ww*0.25))+"px"});
		$(el).show();
	},
	removeContentOverlay : function(el) {
		
		$('object, select').css({"visibility":"visible"});
		$(".overlay-transformed").remove();
		$(el).hide();
	
	}

});
