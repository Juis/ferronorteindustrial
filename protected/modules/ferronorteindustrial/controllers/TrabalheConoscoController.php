<?php

class TrabalheConoscoController extends CController{
	public function actionIndex(){
		$trabalheConoscoConsulta = new TrabalheConosco('TrabalheConosco');
		$this->performAjaxValidation($trabalheConoscoConsulta);

		if(isset($_POST['TrabalheConosco'])){
			$trabalheConoscoConsulta->attributes=$_POST['TrabalheConosco'];
			$trabalheConoscoConsulta->empresa_id = 1;
			$trabalheConoscoConsulta->data_cadastro = date('Y-m-d H:i:s');
			if($trabalheConoscoConsulta->validate()){
				if(!$trabalheConoscoConsulta->save()){
					throw new CHttpException(404,'Erro ao registrar o formulário de fale conosco!');	
				}
				Yii::app()->user->setFlash('success', 'Registro enviado para a empresa, aguarde receber o orçamento em seu email ' . $trabalheConoscoConsulta->email);
			}
		}

		$this->render('index',array(
        		'trabalheConoscoConsulta'=>$trabalheConoscoConsulta
    		)
    	);
	}

	/**
	 * Performs the AJAX validation.
	 * @param TrabalheConosco $model the model to be validated
 	*/
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='trabalheConosco-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}