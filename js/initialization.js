/**
 * Copyright (c) 2009 Sebastião Ricardo Costa Rodrigues (tiaoricardo@gmail.com)
 * Date 2010-01-02
 * 
 * @file /js/initialization.js
 * 
 * @dependence /js/jquery.js => jQuery 1.2 [packed]
 * @dependence /js/pack.js => jQuery Form Plugin [packed]
 * @dependence /js/ajax.js => AppAjax
 * @dependence /js/form.js => AppForm
 * @dependence /js/util.js => AppUtils
 * @dependence /js/picplayer.js => AppPicPlayer
 * @dependence /js/rating.js => AppRating
 * @dependence /js/noticias.js => AppNoticia
 * 
 */

$(document).ready( function()
{

	AppUtils.bindAnchors();
	AppUtils.bindAddFavList("#addToFav", "Ferro Norte", "http://www.ferronorte.com.br");
	/* AppUtils.toggleFontSize(".aum-fonte",".dim-fonte",".texto"); */

	if (PAGE == "NOTICIA" || PAGE == "IMPRIMIR_NOTICIAS")
	{

		AppForm.bind('#commentform');

		/* AppNoticia.bindOptionsBar(".aum-fonte",".dim-fonte",".texto"); */

		$(".container-image a").lightBox( {
			imageLoading :BASE_URL + "images/lightbox-loading.gif",
			imageBtnClose :BASE_URL + "images/lightbox-closelabel.gif",
			imageBtnPrev :BASE_URL + "images/lightbox-prevlabel.png",
			imageBtnNext :BASE_URL + "images/lightbox-nextlabel.png",
			txtImage :"Imagem",
			txtOf :"de"
		});
		AppForm.bind('#sendmailform');
		AppForm.bind('#reporterrorform');

	}

	if (PAGE == "FALECONOSCO")
	{

		AppForm.bind('#contactform');

	}
	
	if (PAGE == "ORCAMENTO" )
	{

		AppForm.bind('#orcamentoform');
	

	}


	if (PAGE == "TRABALHE")
	{

	
		AppForm.bind('#trabalheform');

	}

	if (PAGE == "Produtos" || PAGE == "LISTA_PRODUTOS")
	{

		AppForm.bind('.pro');
	
	}

});