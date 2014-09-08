<?php

/**
 * This is the model class for table "carrinho".
 *
 * The followings are the available columns in table 'carrinho':
 * @property integer $id
 * @property integer $produto_id
 * @property integer $quantidade
 * @property string $sessionid
 *
 * The followings are the available model relations:
 * @property Produto $produto
 */
class Carrinho extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'carrinho';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('produto_id, quantidade, sessionid', 'required'),
			array('produto_id, quantidade', 'numerical', 'integerOnly'=>true),
			array('sessionid', 'length', 'max'=>24),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, produto_id, quantidade, sessionid', 'safe', 'on'=>'search'),
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
			'produto' => array(self::BELONGS_TO, 'Produto', 'produto_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'produto_id' => 'Produto',
			'quantidade' => 'Quantidade',
			'sessionid' => 'Sessionid',
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
		$criteria->compare('produto_id',$this->produto_id);
		$criteria->compare('quantidade',$this->quantidade);
		$criteria->compare('sessionid',$this->sessionid,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Carrinho the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}