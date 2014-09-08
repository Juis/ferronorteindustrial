	<div class="pagina-interna">
		<div class="conteudo_produtos">
			<div class="titulo_produto">
				<div class="orcamentos-titulo">
					<strong>Orçamento</strong>
					<em>Para adicionar itens ao seu orçamento vá até a lista de produtos disponíveis em nosso site.</em>
					<em>*campos obrigatórios</em>
				</div>
				<h3>
					<p>&nbsp;</p>
					<span>você tem itens adicionados</span><b>0</b>
				</h3>
			</div>

			<ul class="produtos_adicionados"></ul>
			<div class="conteudo_orcamento">
				<?php $form = $this->beginWidget('CActiveForm', array(
							'id'=>'orcamento-form',
							'enableAjaxValidation'=>true,
							'clientOptions'=>array(
				      			'validateOnSubmit'=>true,
					     	),
						)
					);
				?>

					<div >
						<?php echo $form->labelEx($orcamentoConsulta,'nome').$form->error($orcamentoConsulta,'nome', array('style'=>'color:red;')); ?>
					</div><div class="box_campo_orcamento" style="width:398px; float: none; ">
						<?php echo $form->textField($orcamentoConsulta,'nome'); ?>
					</div>
			
					<div >
						<?php echo $form->labelEx($orcamentoConsulta,'email').$form->error($orcamentoConsulta,'email', array('style'=>'color:red;')); ?>
					</div><div class="box_campo_orcamento" style="width:398px; float: none; ">
						<?php echo $form->textField($orcamentoConsulta,'email'); ?>
					</div>
			
					<div >
						<?php echo $form->labelEx($orcamentoConsulta,'empresa').$form->error($orcamentoConsulta,'empresa', array('style'=>'color:red;')); ?>
					</div><div class="box_campo_orcamento" style="width:398px; float: none; ">
						<?php echo $form->textField($orcamentoConsulta,'empresa'); ?>
					</div>
			
					<div >
						<?php echo $form->labelEx($orcamentoConsulta,'cnpj').$form->error($orcamentoConsulta,'cnpj', array('style'=>'color:red;')); ?>
					</div><div class="box_campo_orcamento" style="width:398px; float: none; ">
						<?php echo $form->textField($orcamentoConsulta,'cnpj'); ?>
					</div>
			
			
					<div >
						<?php echo $form->labelEx($orcamentoConsulta,'pais').$form->error($orcamentoConsulta,'pais', array('style'=>'color:red;')); ?>
					</div><div class="box_campo_orcamento " style="width:398px; float: none; ">
						<?php echo $form->textField($orcamentoConsulta,'pais'); ?>
					</div>

					<div >
						<?php echo $form->labelEx($orcamentoConsulta,'estado').$form->error($orcamentoConsulta,'estado', array('style'=>'color:red;')); ?>
					</div><div class="box_campo_orcamento " style="width:398px; float: none; ">
						<?php echo $form->textField($orcamentoConsulta,'estado'); ?>
					</div>

					<div >
						<?php echo $form->labelEx($orcamentoConsulta,'cidade').$form->error($orcamentoConsulta,'cidade', array('style'=>'color:red;')); ?>
					</div><div class="box_campo_orcamento " style="width:398px; float: none; ">
						<?php echo $form->textField($orcamentoConsulta,'cidade'); ?>
					</div>
			
					<div >
						<?php echo $form->labelEx($orcamentoConsulta,'website').$form->error($orcamentoConsulta,'website', array('style'=>'color:red;')); ?>
					</div><div class="box_campo_orcamento" style="width:398px; float: none; ">
						<?php echo $form->textField($orcamentoConsulta,'website'); ?>
					</div>
			
					<div>
						<?php echo $form->labelEx($orcamentoConsulta,'telefone_fixo').$form->error($orcamentoConsulta, 'telefone_fixo', array('style'=>'color:red;')); ?>
					</div><div class="box_campo_orcamento box_telefone">
						<?php echo $form->textField($orcamentoConsulta,'telefone_fixo').'<b>somente numeros</b>'; ?>
					</div>
			
					<div >
						<?php echo $form->labelEx($orcamentoConsulta,'telefone_celular').$form->error($orcamentoConsulta, 'telefone_celular', array('style'=>'color:red;')); ?>
					</div><div class="box_campo_orcamento box_telefone">
						<?php echo $form->textField($orcamentoConsulta,'telefone_celular').'<b>somente numeros</b>'; ?>
					</div>
			
					<div>
						<?php echo $form->labelEx($orcamentoConsulta,'outros').$form->error($orcamentoConsulta, 'outros', array('style'=>'color:red;')); ?>
						<span>Descreva-nos com maior detalhes o que voce deseja e os fins de uso. Incluir dados como quantidades, tamanho, entre outros:</span>
					</div><div class="box_campo_orcamento box_campo_descricao">
						<?php echo $form->textArea($orcamentoConsulta,'outros'); ?>
					</div>
			
					<div class="box_button_orcamento">
						<?php echo CHtml::submitButton($orcamentoConsulta->isNewRecord ? '' : ''); ?>
					</div>
				<?php $this->endWidget(); ?>
			</div>	
		</div>
	</div>