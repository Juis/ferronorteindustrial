<?php
	$this->beginWidget('zii.widgets.jui.CJuiDialog', array(
    'id'=>'addProduto',
    'options'=>array(
    'title'=>'Produto ID# '. $id,
    'autoOpen'=>true,
    'modal'=>true,
    'width'=>'700px',
    'height'=>'auto',
    'position'=>'center',
    'closeOnEscape' => true,
    'close'=>'ferronorteindustrial/orcamento'
	),
));
?>
<?php $form = $this->beginWidget('CActiveForm', array(
			'id'=>'orcamento-form',
			'enableAjaxValidation'=>true,
     		'enableClientValidation'=>false,
         	'clientOptions' => array('validationUrl' => Yii::app()->baseUrl.'/index.php/module/action/'),
		)
	);
?>
<div >
	<?php echo $form->labelEx($carrinhoConsulta,'quantidade').$form->error($carrinhoConsulta,'quantidade', array('style'=>'color:red;'));?>
</div><div class="box_campo_orcamento" style="width:398px; float: none; ">
	<?php echo $form->textField($carrinhoConsulta,'quantidade'); ?>
</div>
<div class="box_campo_orcamento" style="width:398px; float: none; ">
	<?php echo $form->textField($carrinhoConsulta,'produto_id', array('value'=>$id, 'hidden'=>'hidden')); ?>
</div>
<div class="box_button_orcamento">
	<?php echo CHtml::submitButton($carrinhoConsulta->isNewRecord ? '' : '', array('onclick'=>'function() { $("#addProduto").dialog( "close" ); }')); ?>
</div>
<?php $this->endWidget(); ?>
<?php $this->endWidget('zii.widgets.jui.CJuiDialog'); ?>	