<?php

/**
 * This is the model class for table "produto".
 *
 * The followings are the available columns in table 'produto':
 * @property integer $id
 * @property integer $categoria_id
 * @property string $nome
 * @property string $descricao
 * @property string $unidade
 * @property string $imagem_url
 * @property integer $ativo
 * @property string $data_cadastro
 * @property string $data_altera
 * @property integer $usuario_cadastro
 * @property integer $usuario_altera
 *
 * The followings are the available model relations:
 * @property Carrinho[] $carrinhos
 * @property Categoria $categoria
 */
class Produto extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'produto';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('categoria_id, nome, descricao, unidade, imagem_url, data_cadastro, usuario_cadastro', 'required'),
			array('categoria_id, ativo, usuario_cadastro, usuario_altera', 'numerical', 'integerOnly'=>true),
			array('nome, imagem_url', 'length', 'max'=>100),
			array('descricao', 'length', 'max'=>255),
			array('unidade', 'length', 'max'=>5),
			array('data_altera', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, categoria_id, nome, descricao, unidade, imagem_url, ativo, data_cadastro, data_altera, usuario_cadastro, usuario_altera', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'carrinhos' => array(self::HAS_MANY, 'Carrinho', 'produto_id'),
			'categoria' => array(self::BELONGS_TO, 'Categoria', 'categoria_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'categoria_id' => 'Categoria',
			'nome' => 'Nome',
			'descricao' => 'Descricao',
			'unidade' => 'Unidade',
			'imagem_url' => 'Imagem Url',
			'ativo' => 'Ativo',
			'data_cadastro' => 'Data Cadastro',
			'data_altera' => 'Data Altera',
			'usuario_cadastro' => 'Usuario Cadastro',
			'usuario_altera' => 'Usuario Altera',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('categoria_id',$this->categoria_id);
		$criteria->compare('nome',$this->nome,true);
		$criteria->compare('descricao',$this->descricao,true);
		$criteria->compare('unidade',$this->unidade,true);
		$criteria->compare('imagem_url',$this->imagem_url,true);
		$criteria->compare('ativo',$this->ativo);
		$criteria->compare('data_cadastro',$this->data_cadastro,true);
		$criteria->compare('data_altera',$this->data_altera,true);
		$criteria->compare('usuario_cadastro',$this->usuario_cadastro);
		$criteria->compare('usuario_altera',$this->usuario_altera);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Produto the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
