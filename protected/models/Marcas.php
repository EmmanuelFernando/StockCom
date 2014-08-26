<?php

/**
 * This is the model class for table "marcas".
 *
 * The followings are the available columns in table 'marcas':
 * @property integer $id
 * @property integer $tipos_id
 * @property string $descripcion
 *
 * The followings are the available model relations:
 * @property Dispositivos[] $dispositivoses
 * @property TiposDispositivos $tipos
 * @property Modelos[] $modeloses
 */
class Marcas extends CActiveRecord
{
        /**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Marcas the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
        
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'marcas';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('tipos_id, descripcion', 'required'),
			array('tipos_id', 'numerical', 'integerOnly'=>true),
			array('descripcion', 'length', 'max'=>30),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, tipos_id, descripcion', 'safe', 'on'=>'search'),
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
			'dispositivos' => array(self::HAS_MANY, 'Dispositivos', 'marcas_id'),
			'tipos' => array(self::BELONGS_TO, 'TiposDispositivos', 'tipos_id'),
			'modelos' => array(self::HAS_MANY, 'Modelos', 'marcas_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'tipos_id' => 'Tipos',
			'descripcion' => 'Descripcion',
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
		$criteria->compare('tipos_id',$this->tipos_id);
		$criteria->compare('descripcion',$this->descripcion,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	
}
