	<div class="pagina-interna">	
		<div class="conteudo_contato">
			<strong>CONTATO</strong>
			<p>A gama de produtos com os quais o Grupo Ferronorte trabalha é bastante extensa. Caso queria maiores informações e/ou detalhes técnicos, ou mesmo solicitar orçamentos e/ou projetos, teremos todo prazer em falar com você.</p><p>Por gentileza, preencha o formulário abaixo. Entraremos em contato o mais breve possível.</p>
			
			<div class="conteudo_endereco">
				<span>CONTATO</span>
				<p>TEL.:<?php echo $empresaConsulta->telefone; ?></p>
				<p>Email: <?php echo $empresaConsulta->email; ?></p>
			</div>
			
			<div class="conteudo_endereco">
				<span>NOSSO ENDEREÇO</span>
				<?php echo $empresaConsulta->endereco; ?>
			</div>
		</div>
		
		<div class="form_contato">
			<?php $form = $this->beginWidget('CActiveForm', array(
						'id'=>'contato-form',
						'enableAjaxValidation'=>true,
						'clientOptions'=>array(
			      			'validateOnSubmit'=>true,
				     	),
					)
				);
			?>
				<div >
					<?php echo $form->labelEx($contatoConsulta,'nome').$form->error($contatoConsulta,'nome', array('style'=>'color:red;')); ?>
				</div><div class="info">
					<?php echo $form->textField($contatoConsulta,'nome'); ?>
				</div>

				<div >
					<?php echo $form->labelEx($contatoConsulta,'email').$form->error($contatoConsulta,'email', array('style'=>'color:red;')); ?>
				</div><div class="info">
					<?php echo $form->textField($contatoConsulta,'email'); ?>
				</div>

				<div >
					<?php echo $form->labelEx($contatoConsulta,'telefone').$form->error($contatoConsulta,'telefone', array('style'=>'color:red;')); ?>
				</div><div class="info">
					<?php echo $form->textField($contatoConsulta,'telefone'); ?>
				</div>

				<div >
					<?php echo $form->labelEx($contatoConsulta,'assunto').$form->error($contatoConsulta,'assunto', array('style'=>'color:red;')); ?>
				</div><div class="info">
					<?php echo $form->textField($contatoConsulta,'assunto'); ?>
				</div>

				<div>
					<?php echo $form->labelEx($contatoConsulta,'mensagem').$form->error($contatoConsulta, 'mensagem', array('style'=>'color:red;')); ?>
				</div><div class="info">
					<?php echo $form->textArea($contatoConsulta,'mensagem'); ?>
				</div>

				<div class="box_button_orcamento">
					<?php echo CHtml::submitButton(''); ?>
				</div>
			<?php $this->endWidget(); ?>
		</div>
	</div>