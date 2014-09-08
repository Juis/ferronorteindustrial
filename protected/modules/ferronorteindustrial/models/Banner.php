<?php

/**
 * This is the model class for table "banner".
 *
 * The followings are the available columns in table 'banner':
 * @property integer $id
 * @property integer $empresa_id
 * @property string $nome
 * @property string $banner_url
 * @property integer $posicao
 * @property integer $ativo
 * @property string $data_cadastro
 * @property integer $usuario_cadastro
 * @property string $data_altera
 * @property integer $usuario_altera
 *
 * The followings are the available model relations:
 * @property Empresa $empresa
 */
class Banner extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'banner';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('empresa_id, nome, banner_url, posicao, data_cadastro, usuario_cadastro', 'required'),
			array('empresa_id, posicao, ativo, usuario_cadastro, usuario_altera', 'numerical', 'integerOnly'=>true),
			array('nome, banner_url', 'length', 'max'=>100),
			array('data_altera', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, empresa_id, nome, banner_url, posicao, ativo, data_cadastro, usuario_cadastro, data_altera, usuario_altera', 'safe', 'on'=>'search'),
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
			'empresa' => array(self::BELONGS_TO, 'Empresa', 'empresa_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'empresa_id' => 'Empresa',
			'nome' => 'Nome',
			'banner_url' => 'Banner Url',
			'posicao' => 'Posicao',
			'ativo' => 'Ativo',
			'data_cadastro' => 'Data Cadastro',
			'usuario_cadastro' => 'Usuario Cadastro',
			'data_altera' => 'Data Altera',
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
		$criteria->compare('empresa_id',$this->empresa_id);
		$criteria->compare('nome',$this->nome,true);
		$criteria->compare('banner_url',$this->banner_url,true);
		$criteria->compare('posicao',$this->posicao);
		$criteria->compare('ativo',$this->ativo);
		$criteria->compare('data_cadastro',$this->data_cadastro,true);
		$criteria->compare('usuario_cadastro',$this->usuario_cadastro);
		$criteria->compare('data_altera',$this->data_altera,true);
		$criteria->compare('usuario_altera',$this->usuario_altera);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Banner the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
