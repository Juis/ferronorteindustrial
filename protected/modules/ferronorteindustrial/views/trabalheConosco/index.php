	<div class="pagina-interna">
		<div class="conteudo_produtos">
	        <div class="titulo_produto">
				<strong>Trabalhe Conosco</strong>
				<em>*campos obrigatórios</em>
				<?php
                    foreach(Yii::app()->user->getFlashes() as $key => $message):
                        echo '<div class="info flash-' . $key . '">' . $message . "</div>\n";
                    endforeach;
                ?>
			</div>
        	<div class="conteudo_orcamento">
				<?php $form = $this->beginWidget('CActiveForm', array(
							'id'=>'trabalheConosco-form',
							'enableAjaxValidation'=>true,
							'clientOptions'=>array(
				      			'validateOnSubmit'=>true,
					     	),
						)
					);
				?>

					<div>
						<?php echo $form->labelEx($trabalheConoscoConsulta,'como_soube').$form->error($trabalheConoscoConsulta,'como_soube', array('style'=>'color:red;')); ?>
					</div><div class="box_campo_orcamento box_como_soube">
						<?php echo $form->textField($trabalheConoscoConsulta,'como_soube'); ?>
					</div>

					<div>
						<?php echo $form->labelEx($trabalheConoscoConsulta,'nome').$form->error($trabalheConoscoConsulta,'nome', array('style'=>'color:red;')); ?>
					</div><div class="box_campo_orcamento box_como_soube">
						<?php echo $form->textField($trabalheConoscoConsulta,'nome'); ?>
					</div>

					<div>
						<?php echo $form->labelEx($trabalheConoscoConsulta,'email').$form->error($trabalheConoscoConsulta,'email', array('style'=>'color:red;')); ?>
					</div><div class="box_campo_orcamento box_como_soube">
						<?php echo $form->textField($trabalheConoscoConsulta,'email'); ?>
					</div>
				
					<div>
						<div>
							<?php echo $form->labelEx($trabalheConoscoConsulta,'data_nascimento').$form->error($trabalheConoscoConsulta,'data_nascimento', array('style'=>'color:red;')); ?>
						</div><div class="box_campo_orcamento">
							<?php echo $form->textField($trabalheConoscoConsulta,'data_nascimento'); ?>
						</div>

						<div>
							<?php echo $form->labelEx($trabalheConoscoConsulta,'sexo').$form->error($trabalheConoscoConsulta,'sexo', array('style'=>'color:red;')); ?>
						</div><div class="box_campo_orcamento">
							<?php echo $form->radioButtonList($trabalheConoscoConsulta, 'sexo', array('M'=>'Masculino', 'F'=>'Feminino')); ?>
						</div>
					</div>	
				
					<!--  ESTADO-CIVIL ESTADO-ESCOLARIDADE  -->
					<div >
						<div>
							<?php echo $form->labelEx($trabalheConoscoConsulta,'estado_civil_id').$form->error($trabalheConoscoConsulta,'estado_civil_id', array('style'=>'color:red;')); ?>
						</div><div class="box_campo_orcamento box_estado">
							<?php echo $form->dropDownList($trabalheConoscoConsulta, 'estado_civil_id', CHtml::listData(EstadoCivil::model()->findAll('ativo = 1'), 'id', 'descricao'),array('empty'=>'')); ?>
						</div>

						<div>
							<?php echo $form->labelEx($trabalheConoscoConsulta,'escolaridade_id').$form->error($trabalheConoscoConsulta,'escolaridade_id', array('style'=>'color:red;')); ?>
						</div><div class="box_campo_orcamento box_estado">
							<?php echo $form->dropDownList($trabalheConoscoConsulta, 'escolaridade_id', CHtml::listData(Escolaridade::model()->findAll('ativo = 1'), 'id', 'descricao'),array('empty'=>'')); ?>
						</div>
					</div>
				
					<!-- ESTADO E CIDADE  -->
					<div>
						<div>
							<?php echo $form->labelEx($trabalheConoscoConsulta,'estado').$form->error($trabalheConoscoConsulta,'estado', array('style'=>'color:red;')); ?>
						</div><div class="box_campo_orcamento">
							<?php echo $form->textField($trabalheConoscoConsulta,'estado'); ?>
						</div>

						<div>
							<?php echo $form->labelEx($trabalheConoscoConsulta,'cidade').$form->error($trabalheConoscoConsulta,'cidade', array('style'=>'color:red;')); ?>
						</div><div class="box_campo_orcamento">
							<?php echo $form->textField($trabalheConoscoConsulta,'cidade'); ?>
						</div>
	    			</div>
				
					<!-- ENDERECO NUMERO  -->
					<div>
						<div>
							<?php echo $form->labelEx($trabalheConoscoConsulta,'endereco').$form->error($trabalheConoscoConsulta,'endereco', array('style'=>'color:red;')); ?>
						</div><div class="box_campo_orcamento">
							<?php echo $form->textField($trabalheConoscoConsulta,'endereco'); ?>
						</div>

						<div>
							<?php echo $form->labelEx($trabalheConoscoConsulta,'numero').$form->error($trabalheConoscoConsulta,'numero', array('style'=>'color:red;')); ?>
						</div><div class="box_campo_orcamento">
							<?php echo $form->textField($trabalheConoscoConsulta,'numero'); ?>
						</div>
					</div>
				
					<!-- CEP COMPLEMENTO  -->
					<div>
						<div>
							<?php echo $form->labelEx($trabalheConoscoConsulta,'cep').$form->error($trabalheConoscoConsulta,'cep', array('style'=>'color:red;')); ?>
						</div><div class="box_campo_orcamento">
							<?php echo $form->textField($trabalheConoscoConsulta,'cep'); ?>
						</div>

						<div>
							<?php echo $form->labelEx($trabalheConoscoConsulta,'complemento').$form->error($trabalheConoscoConsulta,'complemento', array('style'=>'color:red;')); ?>
						</div><div class="box_campo_orcamento">
							<?php echo $form->textField($trabalheConoscoConsulta,'complemento'); ?>
						</div>
					</div>
				
					<!-- BAIRRO FONE  -->
					<div>
						<div>
							<?php echo $form->labelEx($trabalheConoscoConsulta,'bairro').$form->error($trabalheConoscoConsulta,'bairro', array('style'=>'color:red;')); ?>
						</div><div class="box_campo_orcamento">
							<?php echo $form->textField($trabalheConoscoConsulta,'bairro'); ?>
						</div>
						
						<div>
							<?php echo $form->labelEx($trabalheConoscoConsulta,'telefone_fixo').$form->error($trabalheConoscoConsulta,'telefone_fixo', array('style'=>'color:red;')); ?>
						</div><div class="box_campo_orcamento">
							<?php echo $form->textField($trabalheConoscoConsulta,'telefone_fixo'); ?>
						</div>
					</div>
				
					<!-- CELULAR FAX  -->
					<div>
						<div>
							<?php echo $form->labelEx($trabalheConoscoConsulta,'telefone_celular').$form->error($trabalheConoscoConsulta,'telefone_celular', array('style'=>'color:red;')); ?>
						</div><div class="box_campo_orcamento">
							<?php echo $form->textField($trabalheConoscoConsulta,'telefone_celular'); ?>
						</div>

						<div>
							<?php echo $form->labelEx($trabalheConoscoConsulta,'telefone_fax').$form->error($trabalheConoscoConsulta,'telefone_fax', array('style'=>'color:red;')); ?>
						</div><div class="box_campo_orcamento">
							<?php echo $form->textField($trabalheConoscoConsulta,'telefone_fax'); ?>
						</div>
	    			</div>
				
					<div>
						<?php echo $form->labelEx($trabalheConoscoConsulta,'observacao').$form->error($trabalheConoscoConsulta, 'observacao', array('style'=>'color:red;')); ?>
					</div><div class="box_campo_orcamento">
						<?php echo $form->textArea($trabalheConoscoConsulta,'observacao'); ?>
					</div>

					<div class="box_button_orcamento">
						<?php echo CHtml::submitButton($trabalheConoscoConsulta->isNewRecord ? '' : ''); ?>
					</div>
				<?php $this->endWidget(); ?>  	
			</div>
		</div>
	</div>