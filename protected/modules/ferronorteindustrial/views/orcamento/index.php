	<div class="pagina-interna">			
		<div class="conteudo_produtos">
			<div class="titulo_produto" >
				<strong>PRODUTOS</strong>
				<?php
                foreach(Yii::app()->user->getFlashes() as $key => $message):
                    echo '<div class="info flash-' . $key . '">' . $message . "</div>\n";
                endforeach;
           		 ?>

				<h3>
					<p><a href="<?php echo Yii::app()->request->baseUrl; ?>/orcamento/ver">Ver Orçamento</a></p>
					<span>você tem itens adicionados</span><b id="number">
					<?php /*$this->widget('ext.jpupdater.JPeriodicalUpdater', array(
						'url'=>array('/ferronorteindustrial/orcamento/update'),
					    'callback'=>array("$('#quantidade_itens').html(data);")
					));*/ ?>
					<b id="quantidade_itens">0</b>
				</h3>
			</div>
			<div class="container_noticia">
				<?php $form=$this->beginWidget('CActiveForm', array(
				    'enableAjaxValidation'=>true
				)); ?>
				<?php
					$this->widget('zii.widgets.grid.CGridView', array(
						'id'=>'produtos',
						'selectableRows'=>0,
						'ajaxUpdate'=>true,
						'dataProvider'=>$produtoConsulta->search(),
						'filter'=>$produtoConsulta,
						'columns'=>array(
							/*array(
								'name' => 'id',
								#'type' => 'raw',
								#'value' =>'CHtml::textField("Id[$data->id]",$data->id,array("style"=>"width:50px;","readonly"=>"readonly"))',
								'htmlOptions'=>array('style'=>'text-align:center')
							),*/
							array(
								'name' => 'nome',
								'htmlOptions'=>array('style'=>'text-align:center')
							),
							array(
								'name'=>'descricao',
								'htmlOptions'=>array('style'=>'text-align:center')
							),
							array(
								'name'=>'unidade',
								'htmlOptions'=>array('style'=>'text-align:center')
							),
							array(
					            'name'=>'categoria_id',
					            'header'=>'Categoria',
					            'filter'=>CHtml::activeDropDownList($produtoConsulta,'categoria_id',CHtml::listData(Categoria::model()->findAll(), 'id', 'nome'),array('empty'=>'')),
					            'value'=>'$data->categoria->nome',
					            'htmlOptions'=>array('style'=>'text-align:center')
					        ),
							/*array(
					            'name'=>'Quantidade',
					            'filter'=>false,
					            'type'=>'raw',
					            'value'=>'CHtml::textField("Quantidade[$data->id]",0,array("style"=>"width:50px;"))',
					            'htmlOptions'=>array('width'=>'50px', 'style'=>'text-align:center;'),
					        ),*/
							array(
								'class'=>'CButtonColumn',
								'template'=>'{pedido}',
								'buttons'=>array(
									'pedido' => array(
							            'label'=>'Adicionar ao carrinho!',
							            'imageUrl'=>Yii::app()->request->baseUrl.'/images/car.png',
							            /*'options' => array (
					                            'class' => 'btn',
					                            'ajax'=>array(
					                                'type'=>'GET',
					                                'url'=>'Yii::app()->controller->createUrl("/ferronorteindustrial/orcamento/addProduto",array("linha"=>$data->primaryKey))',
					                                'success' => "js:function() { $.fn.yiiGridView.update('produtos') }"
					                     )),*/
							            /*'click'=>"function(){
		                                    $.fn.yiiGridView.update('produtos', {
		                                        type:'GET',
		                                        url:$(this).attr('href'),
		                                        success:function(data) {
		                                        	$('#quantidade_itens').html(parseInt($('#quantidade_itens').html())+1);
		                                            $.fn.yiiGridView.update('produtos');
		                                        }
		                                    })
		                                    return false;
										}",*/
										/*'click'=>"function(){
											var id = $('#Id[" . $produtoConsulta->id . "]').val();
											var quantidade =  $('#Quantidade[" . $produtoConsulta->id . "]').val();
		                                    $.ajax({
		                                        type:'GET',
		                                        url:'Yii::app()->controller->createUrl('/ferronorteindustrial/orcamento/addProduto',array('linha'=>" . $produtoConsulta->primaryKey . ", 'quantidade'=>quantidade))',
		                                        success:function(data) {
		                                        	$('#quantidade_itens').html(parseInt($('#quantidade_itens').html())+1);
		                                            $.fn.yiiGridView.update('produtos');
		                                        }
		                                    })
		                                    return false;
										}",*/
										/*'click' => 'function(e) {
                                      		$("#ajaxModal").remove();
                                  			e.preventDefault();
                                      		var $this = $(this) 
                                      		var $remote = $this.data("remote") || $this.attr("href") 
                                      		var $modal = $("<div class=\'modal\' id=\'ajaxModal\'><div class=\'modal-body\'><h5 align=\'center\'> <img src=\'' . Yii::app()->request->baseUrl . '/images/ajax-loader.gif\'>&nbsp;  Please Wait .. </h5></div></div>");
                                      		$("body").append($modal);
                                      		$modal.modal({backdrop: "static", keyboard: false});
                                      		$modal.load($remote);
                                		}',
                    					'options' => array('data-toggle' => 'ajaxModal','style' => 'padding:4px;'),*/
							            #'url'=>'Yii::app()->controller->createUrl("/ferronorteindustrial/orcamento/addProduto",array("linha"=>$data->primaryKey))'
							        )
							    )
							)
						)
					));
				?>
				<?php $this->endWidget(); ?>
			</div>	
		</div>
	</div>
