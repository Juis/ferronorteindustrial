<?php

class OrcamentoController extends CController{
	public function actionIndex(){
        $produtoConsulta = new Produto('search');

        # grid
        $produtoConsulta->unsetAttributes();
        if(isset($_GET['Produto'])){
            $produtoConsulta->attributes=$_GET['Produto'];
        }

        $carrinhoConsulta = new Carrinho('Carrinho');
        $criteria=new CDbCriteria;
		$criteria->select='sum(1) AS quantidade';
		$criteria->condition = 'sessionid=:sessionid';
		$criteria->params = array(':sessionid' => Yii::app()->session->sessionID);
		$row = $carrinhoConsulta->model()->find($criteria);
		if(!$row['quantidade']){
			$row['quantidade'] = 0;
		}

        $this->render('index',array(
        		'produtoConsulta'=>$produtoConsulta,
        		'quantidade'=>$row['quantidade']
    		)
    	);
	}

	public function actionAddProduto($linha=null){
		$carrinhoConsulta = new Carrinho('Carrinho');
		if(isset($_POST['Carrinho'])){
			$carrinhoConsulta->attributes=$_POST['Carrinho'];
			$carrinhoConsulta->sessionid = Yii::app()->session->sessionID;
			if($carrinhoConsulta->validate()){
				if(!$carrinhoConsulta->save(false)){
					throw new CHttpException(404,'Não foi possivel registrar o produto!');	
				}

		        $this->redirect('/projetos/ferronorteindustrial/orcamento');
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