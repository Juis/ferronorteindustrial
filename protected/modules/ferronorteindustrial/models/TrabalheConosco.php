<?php

/**
 * This is the model class for table "trabalhe_conosco".
 *
 * The followings are the available columns in table 'trabalhe_conosco':
 * @property integer $id
 * @property integer $empresa_id
 * @property integer $estado_civil_id
 * @property integer $escolaridade_id
 * @property string $nome
 * @property string $estado
 * @property string $cidade
 * @property string $como_soube
 * @property string $email
 * @property string $data_nascimento
 * @property string $sexo
 * @property string $endereco
 * @property integer $numero
 * @property string $cep
 * @property string $complemento
 * @property string $bairro
 * @property string $telefone_fixo
 * @property string $telefone_celular
 * @property string $telefone_fax
 * @property string $observacao
 * @property string $data_cadastro
 *
 * The followings are the available model relations:
 * @property Empresa $empresa
 * @property Escolaridade $escolaridade
 * @property EstadoCivil $estadoCivil
 */
class TrabalheConosco extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'trabalhe_conosco';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('empresa_id, estado_civil_id, escolaridade_id, nome, estado, cidade, data_cadastro', 'required'),
			array('empresa_id, estado_civil_id, escolaridade_id, numero', 'numerical', 'integerOnly'=>true),
			array('nome, estado, cidade, bairro', 'length', 'max'=>100),
			array('como_soube, endereco', 'length', 'max'=>200),
			array('email', 'length', 'max'=>45),
			array('email','email'),
			array('data_nascimento', 'length', 'max'=>10),
			array('sexo', 'length', 'max'=>1),
			array('cep', 'length', 'max'=>9),
			array('complemento', 'length', 'max'=>255),
			array('telefone_fixo, telefone_celular, telefone_fax', 'length', 'max'=>30),
			array('observacao', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, empresa_id, estado_civil_id, escolaridade_id, nome, estado, cidade, como_soube, email, data_nascimento, sexo, endereco, numero, cep, complemento, bairro, telefone_fixo, telefone_celular, telefone_fax, observacao, data_cadastro', 'safe', 'on'=>'search'),
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
			'escolaridade' => array(self::BELONGS_TO, 'Escolaridade', 'escolaridade_id'),
			'estadoCivil' => array(self::BELONGS_TO, 'EstadoCivil', 'estado_civil_id'),
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
			'estado_civil_id' => 'Estado Civil',
			'escolaridade_id' => 'Escolaridade',
			'nome' => 'Nome',
			'estado' => 'Estado',
			'cidade' => 'Cidade',
			'como_soube' => 'Como soube do Ferro Norte?',
			'email' => 'Email',
			'data_nascimento' => 'Data Nascimento',
			'sexo' => 'Sexo',
			'endereco' => 'Endereco',
			'numero' => 'Numero',
			'cep' => 'Cep',
			'complemento' => 'Complemento',
			'bairro' => 'Bairro',
			'telefone_fixo' => 'Telefone Fixo',
			'telefone_celular' => 'Telefone Celular',
			'telefone_fax' => 'Telefone Fax',
			'observacao' => 'Observacao',
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
		$criteria->compare('estado_civil_id',$this->estado_civil_id);
		$criteria->compare('escolaridade_id',$this->escolaridade_id);
		$criteria->compare('nome',$this->nome,true);
		$criteria->compare('estado',$this->estado,true);
		$criteria->compare('cidade',$this->cidade,true);
		$criteria->compare('como_soube',$this->como_soube,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('data_nascimento',$this->data_nascimento,true);
		$criteria->compare('sexo',$this->sexo,true);
		$criteria->compare('endereco',$this->endereco,true);
		$criteria->compare('numero',$this->numero);
		$criteria->compare('cep',$this->cep,true);
		$criteria->compare('complemento',$this->complemento,true);
		$criteria->compare('bairro',$this->bairro,true);
		$criteria->compare('telefone_fixo',$this->telefone_fixo,true);
		$criteria->compare('telefone_celular',$this->telefone_celular,true);
		$criteria->compare('telefone_fax',$this->telefone_fax,true);
		$criteria->compare('observacao',$this->observacao,true);
		$criteria->compare('data_cadastro',$this->data_cadastro,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return TrabalheConosco the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
