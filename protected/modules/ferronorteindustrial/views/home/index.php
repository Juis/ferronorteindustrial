      
    <div class="slider-wrapper theme-default">
		<div id="slider" class="nivoSlider">
			<?php foreach($banner as $value){ ?>

				<a href="<?php echo $value->acao_url; ?>" title="<?php echo $value->nome; ?>" target="_top">
	            	<img src="<?php echo Yii::app()->request->baseUrl; echo $value->banner_url?>" alt="<?php echo $value->nome; ?>"  width="900px" height="217px"/>
				</a>

			<?php } ?>
    	</div>
	</div>
	<div class="sobre-produtos">
		<div class="sobre">
			<div class="titulo">
				<p>A FERRONORTE</p>
			</div>
			<div class="meio">
				<p>Um dos principais braços do Grupo Ferronorte, a Ferronorte Industrial, possui uma estrutura ampla e completa de produção. Os equipamentos de última geração, manuseados por técnicos qualificados e em constante treinamento, fazem com que a Ferro Norte Industrial ofereça produtos e serviços com qualidade internacional para todo o país.</p>
				<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/sobre-1.jpg" class="img-sobre" /> <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/sobre-2.jpg" class="img-sobre" /> <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/sobre-3.jpg" class="img-sobre" />
			</div>
		</div>
		<div class="produtos">
			<div class="titulo">
				<p>PRODUTOS</p>
				<p><span>Confira nossos produtos</span></p>
			</div>
			<div class="meio">
				<div class="jcarousel-skin-tango">
					<div style="position:relative; display:block;" class="jcarousel-container jcarousel-container-horizontal">
						<div style="position:relative;" class="jcarousel-clip jcarousel-clip-horizontal">
							<ul style="position: relative; top: 0px; margin: 0px; padding: 0px; left: 0px; width: 500px;" id="mycarousel" class="jcarousel-list jcarousel-list-horizontal">
							   	<li>
						   			Sem produtos cadastrados
							   	</li>
							</ul>
						</div>
						<div disabled="true" style="display: block;" class="jcarousel-prev jcarousel-prev-horizontal jcarousel-prev-disabled jcarousel-prev-disabled-horizontal"></div>
						<div disabled="false" style="display: block;" class="jcarousel-next jcarousel-next-horizontal"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="localizacao-novidades">
		<div class="localizacao">
			<div class="titulo">
				<p>ONDE ESTAMOS</p>
				<p><span>Conheça nossas unidades</span></p>
			</div>
			<div class="meio">
				<div class="imagem">
					<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/localizacao.jpg" class="img-localizacao" />
				</div>
				<div class="texto">
					<?php echo $empresa->endereco; ?>		
					<p><span class="lemail"><?php echo $empresa->email; ?></span></p>
					<p><?php echo $empresa->telefone; ?></p>
				</div>
			</div>
		</div>
		<div class="novidades">
			<div class="titulo">
				<p>NOVIDADES</p>
			</div>
			<div class="meio">
				<div class="noticias"></div>
				<div class="imagem-destaque">
					<p><a href="#" alt="Orçamento Online">
						<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/imagem-destaque.jpg" />
					</a></p>
				</div>
			</div>
		</div>
	</div>