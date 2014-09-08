<?php

class EmpresaController extends Controller{
	public function actionIndex(){
		$empresa = Empresa::model()->find("nome = 'FERRO NORTE INDUSTRIAL'");

		$this->render('index', array(
				'empresa' => $empresa
			)
		);
	}
}