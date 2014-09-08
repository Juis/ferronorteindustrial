<?php

class ContatoController extends Controller{
	public function actionIndex(){
		$contatoConsulta = new Contato('Contato');
		$empresaConsulta = Empresa::model()->find("nome = 'FERRO NORTE INDUSTRIAL'");

		$this->performAjaxValidation($contatoConsulta);
		$this->render('index',array(
        		'contatoConsulta'=>$contatoConsulta,
        		'empresaConsulta'=>$empresaConsulta
    		)
    	);
	}

	/**
	 * Performs the AJAX validation.
	 * @param TrabalheConosco $model the model to be validated
 	*/
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='contato-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}