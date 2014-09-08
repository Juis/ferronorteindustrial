<?php

/**
 * This is the model class for table "orcamento".
 *
 * The followings are the available columns in table 'orcamento':
 * @property integer $id
 * @property integer $empresa_id
 * @property string $nome
 * @property string $email
 * @property string $empresa
 * @property string $cnpj
 * @property string $pais
 * @property string $estado
 * @property string $cidade
 * @property string $telefone_fixo
 * @property string $telefone_celular
 * @property string $website
 * @property string $outros
 * @property string $data_cadastro
 *
 * The followings are the available model relations:
 * @property Empresa $empresa0
 */
class Orcamento extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'orcamento';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('empresa_id, nome, email, empresa, cnpj, pais, estado, cidade, telefone_fixo, telefone_celular, data_cadastro', 'required'),
			array('empresa_id, cnpj, telefone_fixo, telefone_celular', 'numerical', 'integerOnly'=>true),
			array('nome, empresa, pais, estado, cidade', 'length', 'max'=>100),
			array('email', 'length', 'max'=>45),
			array('cnpj', 'length', 'max'=>14),
			array('telefone_fixo, telefone_celular', 'length', 'max'=>30),
			array('website', 'length', 'max'=>255),
			array('outros', 'safe'),
			array('email','email'),
			array('website','url'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, empresa_id, nome, email, empresa, cnpj, pais, estado, cidade, telefone_fixo, telefone_celular, website, outros, data_cadastro', 'safe', 'on'=>'search'),
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
			'empresa0' => array(self::BELONGS_TO, 'Empresa', 'empresa_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'empresa_id' => 'Empresa ID',
			'nome' => 'Nome Completo',
			'email' => 'Email',
			'empresa' => 'Empresa',
			'cnpj' => 'CNPJ/Escrição Estadual',
			'pais' => 'Pais',
			'estado' => 'Estado',
			'cidade' => 'Cidade',
			'telefone_fixo' => 'Telefone Fixo',
			'telefone_celular' => 'Telefone Celular',
			'website' => 'Website',
			'outros' => '<strong>PARA PEÇAS QUE NÃO ESTEJAM NA LISTA DE PRODUTOS</strong>',
			'data_cadastro' => 'Data Cadastro',
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
		$criteria->compare('email',$this->email,true);
		$criteria->compare('empresa',$this->empresa,true);
		$criteria->compare('cnpj',$this->cnpj,true);
		$criteria->compare('pais',$this->pais,true);
		$criteria->compare('estado',$this->estado,true);
		$criteria->compare('cidade',$this->cidade,true);
		$criteria->compare('telefone_fixo',$this->telefone_fixo,true);
		$criteria->compare('telefone_celular',$this->telefone_celular,true);
		$criteria->compare('website',$this->website,true);
		$criteria->compare('outros',$this->outros,true);
		$criteria->compare('data_cadastro',$this->data_cadastro,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Orcamento the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
