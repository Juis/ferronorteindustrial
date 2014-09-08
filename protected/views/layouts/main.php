<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="pt-BR">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="home,ferro norte" />
	<meta name="description" content="Ferro Norte." />
	<meta name="title" content="Ferro Norte" />
	<meta name="Audience" content="ALL" />
	<meta name="distribution" content="world" />
	<meta name="geo.region" content="BR-PI" />
	<meta name="country" content="Brazil" />
	<meta name="language" content="pt-br" />
	<meta name="author" content="Neto Silva | Alisson Alexandre" />
	<meta name="robots" content="index,follow" />
	<meta name="revisit-after" content="1 day" />

	<link rel="shortcut icon" type="image/icon" href="<?php echo Yii::app()->request->baseUrl; ?>/images/favicon.ico" />
	
	<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/estrutura.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/nino-slider.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/carousel.css" type="text/css" media="screen" />     
	<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" type="text/css" media="screen" />
			
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.js"></script>
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/util.js"></script>
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/ajax.js"></script>
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/ui.js"></script>
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/font.js"></script>
	<script type="text/javascript">	Cufon.replace('.cufon'); </script>
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/pack.js"></script>		
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/form.js"></script>								
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/initialization.js"></script>
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/masked.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-1_6.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-nino.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jcarousel.js"></script>

	<script type="text/javascript">	
		var BASE_URL = 'http://www.ferronorteindustrial.com.br/';
		var PAGE = 'HOME';

		$(document).ready(function(){
		    $(".defaultValue").focus(function(s)
		    {
		        if ($(this).val() == $(this)[0].title)
		            $(this).val("");
		    });
		    
		    $(".defaultValue").blur(function()
		    {
		        if ($(this).val() == "")
		            $(this).val($(this)[0].title);
		    });
		    
		    $(".defaultValue").blur();
		     
		});

   		jQuery(document).ready(function() {
			jQuery('#mycarousel').jcarousel();
            $('#slider').nivoSlider();
		});
		
	</script>

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>
	<div class="btopo">
		<div class="alinha">
	        <div class="alinha-topo">	
				<div class="topo">

					<div class="topoa">
						<div class="logo"><a href="<?php echo Yii::app()->request->baseUrl; ?>" title="Ferro Norte">Ferro Norte</a></div>
					</div>

					<div class="topob">
						<a href="<?php echo Yii::app()->request->baseUrl; ?>" class="home"></a>
						<a href="#" class="root"></a>
						<a href="<?php echo Yii::app()->request->baseUrl; ?>/contato" class="email"></a>
					</div>

					<div class="topoc">

						<div class="idioma">
							<ul>
							<li><a href="<?php echo Yii::app()->request->baseUrl; ?>/pt-br" class="idiport">PORTUGUÊS</a>
							  <ul>
								  <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/en" class="idiingl">ENGLISH</a></li>
								  <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/esp" class="idiespa">ESPAÑOL</a></li>
							  </ul>
							</li>
							</ul>
						</div>
						
						<div class="busca">
							<form id="search" class="form" method="get" action="<?php echo Yii::app()->request->baseUrl; ?>/busca">
								<input id="q" class="campo defaultValue" type="text" name="q" value="O que você procura?" title="O que você procura?">
								<input type="hidden" name="sm" value="produtos">
								<input class="bt_header" type="submit" value="">
							</form>
						</div>
					</div>

					<div class="menu">
						<ul>
							<li class="selected" ><a href="<?php echo Yii::app()->request->baseUrl; ?>">HOME</a></li>
							<li><a href="<?php echo Yii::app()->request->baseUrl; ?>/empresa">A EMPRESA</a></li>
							<li><a href="<?php echo Yii::app()->request->baseUrl; ?>/noticia">NOTÍCIAS</a></li>
							<li><a href="<?php echo Yii::app()->request->baseUrl; ?>/produto">PRODUTOS</a></li>
							<li><a href="<?php echo Yii::app()->request->baseUrl; ?>/orcamento">ORÇAMENTO ONLINE</a></li>
							<li><a href="<?php echo Yii::app()->request->baseUrl; ?>/trabalheConosco">TRABALHE CONOSCO</a></li>
							<li class="ult "><a href="<?php echo Yii::app()->request->baseUrl; ?>/contato">CONTATO</a></li>
						</ul>
					</div>
				</div> 


	<?php echo $content; ?>
			</div>
		</div>
	</div>
    <div class="brodape">
		<div class="alinha">
			<div class="rodape">
				<div class="foot-idioma">
					<p><a href="<?php echo Yii::app()->request->baseUrl; ?>"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/lan-brasil.png" border="0"/></a> <a href="<?php echo Yii::app()->request->baseUrl; ?>/en"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/lan-reino.png" border="0"/></a> <a href="<?php echo Yii::app()->request->baseUrl; ?>/esp"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/lan-spain.png" border="0"/></a></p>
				</div>
				<div class="foot-menu">
					<p>
						<a href="<?php echo Yii::app()->request->baseUrl; ?>">HOME</a>
						<a href="<?php echo Yii::app()->request->baseUrl; ?>/empresa">A EMPRESA</a>
						<a href="<?php echo Yii::app()->request->baseUrl; ?>/noticia">NOTÍCIAS</a>
						<a href="<?php echo Yii::app()->request->baseUrl; ?>/categoria">PRODUTOS</a>
						<a href="<?php echo Yii::app()->request->baseUrl; ?>/orcamento">ORÇAMENTO ONLINE</a>
						<a href="<?php echo Yii::app()->request->baseUrl; ?>/trabalheConosco">TRABALHE CONOSCO</a>
						<a href="<?php echo Yii::app()->request->baseUrl; ?>/contato">CONTATO</a>
					</p>
				</div>
				<div class="foot-copy">
					<p>Brasil &copy; 2014 - Grupo Ferronorte | Todos os direitos reservados.</p>
					<p><a href="<?php echo Yii::app()->request->baseUrl; ?>"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/ferronorte-rodape.jpg"  border="0"/></a></p>
				</div>
			</div>
		</div>
	</div>
</body>
</html>