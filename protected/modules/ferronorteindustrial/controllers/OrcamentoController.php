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
        		'produtoConsulta'=>$produtoConsulta
    		)
    	);
	}

	public function actionAddProduto($linha){
		/*$x = Yii::app()->request->getParam('Quantidade');
		var_dump($_GET);
		if(isset($x)){
			$carrinhoInsert = new Carrinho();
			$carrinhoInsert->produto_id = (int)$linha;
			$carrinhoInsert->quantidade = (int)$x[$linha];
			$carrinhoInsert->sessionid = Yii::app()->request->cookies['PHPSESSID']->value;
			$carrinhoInsert->save(false);
			Yii::app()->user->setFlash('success', 'produto registrado!');
		}else{
			Yii::app()->user->setFlash('error', 'nao entrou post quantidade 2!!!');
		}*/
		$carrinhoConsulta = new Carrinho('Carrinho');
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