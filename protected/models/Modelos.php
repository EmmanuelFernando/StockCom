<?php

/**
 * This is the model class for table "modelos".
 *
 * The followings are the available columns in table 'modelos':
 * @property integer $id
 * @property integer $marcas_id
 * @property string $descripcion
 *
 * The followings are the available model relations:
 * @property Dispositivos[] $dispositivoses
 * @property Marcas $marcas
 */
class Modelos extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Modelos the static model class
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
		return 'modelos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('marcas_id, descripcion', 'required'),
			array('marcas_id', 'numerical', 'integerOnly'=>true),
			array('descripcion', 'length', 'max'=>30),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, marcas_id, descripcion', 'safe', 'on'=>'search'),
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
			'dispositivos' => array(self::HAS_MANY, 'Dispositivos', 'modelos_id'),
			'marcas' => array(self::BELONGS_TO, 'Marcas', 'marcas_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'marcas_id' => 'Marcas',
			'descripcion' => 'Descripcion',
                    
                        'marcas.descripcion' => 'Marca',
			'modelos.descripcion' => 'Modelo',
                    
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
		$criteria->compare('marcas_id',$this->marcas_id);
		$criteria->compare('descripcion',$this->descripcion,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

}
