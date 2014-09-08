	<div class="pagina-interna">
		<div class="novidades interna">
			<div class="titulo interna">
				<p>NOVIDADES</p>
			</div>
			<div class="meio interna">
				<div class="noticias"></div>
				<div class="imagem-destaque"></div> 
			</div>
		</div>				
		<div class="conteudo_produtos">
			<div class="titulo_produto" >
				<strong>PRODUTOS</strong>
				<h3>
					<p><a href="<?php echo Yii::app()->request->baseUrl; ?>/orcamento">Ver Orçamento</a></p>
					<span>você tem itens adicionados</span><b id="number">0</b>
				</h3>
				<p class="navpagina"><a href="#">Inicio</a> / Produtos /</p>	
			</div>
			<div class="box_resultado" style="display: none;">
				<p>você tem itens adicionados 1 de 200<span>resultado de páginas: <b>1</b></span></p>
			</div>
			<div class="container_noticia">
				<script>
					function carrinho(id_produto,qtd){
						$.ajax({
							url:"/ajaxRequest.do",
							type:"GET",
							dataType:"text",
							data:"ACTION=ADD_CARRINHO&id_produto="+id_produto+"&qtd="+qtd+"&LINGUA=pt-br",
							success : function(response) {
								
							    eval(response);
							},
							error : function(){
								alert("erro");
							}
						});
					}

					$(document).ready(function() {
						$("a.example1").fancybox();
					});
				</script>
			
				<table width="300px" border="1px" bordercolor="#3E79B0" class="bordasimples " style="margin-left:-18px;">
					<tr>
						<td class="produto bg_produto"><h3>PRODUTO</h3></td>
						<td class="unidade bg_unidade"><h3>UNID.</h3></td>
						<td class="adicionar bg_adicionar adicionar_dois"><h3>ADICIONAR</h3></td>
					</tr>
					<tr >
						<td class="produto"><a href="<?php echo Yii::app()->request->baseUrl; ?>/images/" class="example1"></a>
							<p>VERG.CA-60 6,50MM FN-60/BARRA </p>
						</td>
						<td class="unidade"><strong>TN</strong></td>
						<td class="adicionar"><input type="text"  id="quant_5930" class="campo_adicionar"/> <input type="button" value="" class="bt_adicionar" onclick="carrinho(5930,$('#quant_5930').val())"/>							
				        	<input type="hidden" value="5930" name="id_produto" class="campo_qt"/>
						 </td>
					</tr>
					<tr >
						<td class="produto"><a href="<?php echo Yii::app()->request->baseUrl; ?>/images/" class="example1"></a>
							<p>VERG.CA-60 7,00MM FN60/DOBRADO</p>
						</td>
						<td class="unidade"><strong>TN</strong></td>
						<td class="adicionar"><input type="text"  id="quant_5931" class="campo_adicionar"/> <input type="button" value="" class="bt_adicionar" onclick="carrinho(5931,$('#quant_5931').val())"/>							
				        	<input type="hidden" value="5931" name="id_produto" class="campo_qt"/>
						</td>
					</tr>							
				</table>
						
				<div class="ferramentas_noticias ">
					<ul class="paginacao_geral">
						<li><a href="#?p=1" class="selected">1</a></li>
						<li><a href="#?p=2" >2</a></li>
						<li><a href="#?p=3" >3</a></li>
						<li><a href="#?p=4" >4</a></li>
						<li><a href="#?p=5" >5</a></li>
						<li><a href="#?p=6" >6</a></li>
						<li><a href="#?p=7" >7</a></li>
					</ul>
				</div> 
			</div>	
		</div>
	</div>
