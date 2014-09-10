<?php

class OrcamentoController extends CController{
	public function actionIndex(){
        $produtoConsulta = new Produto('search');

        # grid
        $produtoConsulta->unsetAttributes();
        if(isset($_GET['Produto'])){
            $produtoConsulta->attributes=$_GET['Produto'];
        }

        $this->render('index',array(
        		'produtoConsulta'=>$produtoConsulta,
        		'quantidade'=>0
    		)
    	);
	}

	public function actionAddProduto($linha){
		$carrinhoConsulta = new Carrinho('Carrinho');
		if(isset($_POST['Carrinho'])){
			$carrinhoConsulta->attributes=$_POST['Carrinho'];
			$carrinhoConsulta->sessionid = Yii::app()->session->sessionID;
			if($carrinhoConsulta->validate()){
				if(!$carrinhoConsulta->save(false)){
					throw new CHttpException(404,'Não foi possivel registrar o produto!');	
				}

				$produtoConsulta = new Produto('search');
		        $produtoConsulta->unsetAttributes();
		        if(isset($_GET['Produto'])){
		            $produtoConsulta->attributes=$_GET['Produto'];
		        }

		        $this->render('index',array(
		        		'produtoConsulta'=>$produtoConsulta
		    		)
		    	);
			}
		}

		$this->render('addProduto',array(
        		'id'=>$linha,
        		'carrinhoConsulta' => $carrinhoConsulta
    		)
    	);
		#$this->actionIndex();
	}

	public function actionUpdate(){
		echo '0';
	}

	public function actionVer(){
		if(!Yii::app()->session->get('produto')){

		}else{

		}
	}

	public function actionOrcamento(){
		$orcamentoConsulta = new Orcamento;
		$this->performAjaxValidation($orcamentoConsulta);
		$this->render('orcamento',array(
        		'orcamentoConsulta'=>$orcamentoConsulta
    		)
    	);
	}

	/**
	 * Performs the AJAX validation.
	 * @param Orcamento $model the model to be validated
 	*/
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='orcamento-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}