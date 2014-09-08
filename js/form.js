/**
* Copyright (c) 2009 Sebasti�o Ricardo Costa Rodrigues (tiaoricardo@gmail.com)
* Date 2009-09-14
*
* @file /js/form.js 			=> AppForm
*
* @dependence /js/jquery.js 				=> jQuery 1.2 [packed]
* @dependence /js/pack.js	=> jQuery Form Plugin [packed]
* @dependence /js/ajax.js	=> AppAjax
*
*/

var AppForm = new Object(
{
	sending : [],
	bind : function(criteria) {
		
		$(criteria).bind("submit",AppForm.send);
				
	},
	loadCities : function(opt) {
		
		$(opt.source).bind("change",function() {AppForm.requestCities(opt)});		
	
	},
	requestCities : function(opt) {
					
		if ($(opt.source).val() != "") {
						
			$(opt.source+','+opt.target).attr("disabled","disabled");
			$(opt.target).html("<option>Carregando Cidades...</option>");				
			AppAjax.request('LOAD_CIDADES',{parameters:"id="+$(opt.source).val()+"&target="+opt.target+"&source="+opt.source,debug:true});			
			
		}
	
	},
	lockForm : function(form) {
	
		$(form).css({position:"relative"});
		$(form).append("<div id='lock-form'></div><img src='" + BASE_URL + "imgs/ajax-loader.gif' id='img-loading' alt='Carregando...' />").find("#lock-form").css({background:"#FFF",position:"absolute",top:0,left:0,opacity:"0.7"});
		$(form).find("#img-loading").css({position:"absolute",top:"50%",left:"50%",'margin-top':"-16px",'margin-left':"-16px",'z-index':10});
		$('#lock-form').width($(form).width());
		$('#lock-form').height($(form).height());
		
		setTimeout(function() {AppForm.unlockForm(form)},5000);
	
	},
	unlockForm : function(form) {
			
		if (AppForm.sending[$(form).attr("id")]) {
			$(form).find("#lock-form, #img-loading").remove();
			AppForm.sending[$(form).attr("id")] = false;
		}
	
	},
	send : function(event) {
		
		event.preventDefault();
				
		if (!AppForm.sending[$(this).attr("id")]) {
		
			AppForm.sending[$(this).attr("id")] = true;
			AppForm.lockForm(this);			
			AppAjax.submit(this,{debug:true});
			
		}else{
			
			
			alert('');
		}
					
	}
});
