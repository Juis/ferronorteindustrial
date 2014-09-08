<?php

class HomeController extends Controller{
	public function actionIndex(){
		$empresa = Empresa::model()->find("nome = 'FERRO NORTE INDUSTRIAL'");
		$banner = Banner::model()->findAll("ativo = 1");

		$this->render('index', array(
				'empresa' => $empresa,
				'banner' => $banner
			)
		);
	}
}