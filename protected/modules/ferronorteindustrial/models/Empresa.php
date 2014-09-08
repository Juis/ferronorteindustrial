<?php

/**
 * This is the model class for table "empresa".
 *
 * The followings are the available columns in table 'empresa':
 * @property integer $id
 * @property string $nome
 * @property string $cnpj
 * @property string $logo_url
 * @property string $descricao
 * @property string $telefone
 * @property string $email
 * @property string $endereco
 * @property integer $ativo
 * @property string $data_cadastro
 * @property integer $usuario_cadastro
 * @property string $data_altera
 * @property integer $usuario_altera
 *
 * The followings are the available model relations:
 * @property Banner[] $banners
 * @property Noticia[] $noticias
 * @property Orcamento[] $orcamentos
 * @property TrabalheConosco[] $trabalheConoscos
 */
class Empresa extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'empresa';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nome, cnpj, logo_url, descricao, telefone, email, endereco, data_cadastro, usuario_cadastro', 'required'),
			array('ativo, usuario_cadastro, usuario_altera', 'numerical', 'integerOnly'=>true),
			array('nome, logo_url', 'length', 'max'=>100),
			array('cnpj', 'length', 'max'=>14),
			array('telefone', 'length', 'max'=>30),
			array('email', 'length', 'max'=>45),
			array('endereco', 'length', 'max'=>255),
			array('data_altera', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, nome, cnpj, logo_url, descricao, telefone, email, endereco, ativo, data_cadastro, usuario_cadastro, data_altera, usuario_altera', 'safe', 'on'=>'search'),
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
			'banners' => array(self::HAS_MANY, 'Banner', 'empresa_id'),
			'noticias' => array(self::HAS_MANY, 'Noticia', 'empresa_id'),
			'orcamentos' => array(self::HAS_MANY, 'Orcamento', 'empresa_id'),
			'trabalheConoscos' => array(self::HAS_MANY, 'TrabalheConosco', 'empresa_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'nome' => 'Nome',
			'cnpj' => 'Cnpj',
			'logo_url' => 'Logo Url',
			'descricao' => 'Descricao',
			'telefone' => 'Telefone',
			'email' => 'Email',
			'endereco' => 'Endereco',
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
		$criteria->compare('nome',$this->nome,true);
		$criteria->compare('cnpj',$this->cnpj,true);
		$criteria->compare('logo_url',$this->logo_url,true);
		$criteria->compare('descricao',$this->descricao,true);
		$criteria->compare('telefone',$this->telefone,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('endereco',$this->endereco,true);
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
	 * @return Empresa the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
