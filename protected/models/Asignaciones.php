<?php

/**
 * This is the model class for table "asignaciones".
 *
 * The followings are the available columns in table 'asignaciones':
 * @property integer $id
 * @property integer $destino_id
 * @property integer $bien_id
 * @property integer $tipo_id
 * @property string $fecha
 * @property integer $existencia
 *
 * The followings are the available model relations:
 * @property TipoAsignaciones $tipo
 * @property Destinos $destino
 * @property Bienes $bien
 */
class Asignaciones extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'asignaciones';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('destino_id, bien_id, tipo_id, fecha, existencia', 'required'),
			array('destino_id, bien_id, tipo_id, existencia', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, destino_id, bien_id, tipo_id, fecha, existencia', 'safe', 'on'=>'search'),
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
			'tipo' => array(self::BELONGS_TO, 'TipoAsignaciones', 'tipo_id'),
			'destino' => array(self::BELONGS_TO, 'Destinos', 'destino_id'),
			'bien' => array(self::BELONGS_TO, 'Bienes', 'bien_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'destino_id' => 'Destino',
			'bien_id' => 'Bien',
			'tipo_id' => 'Tipo',
			'fecha' => 'Fecha',
			'existencia' => 'Existencia',
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
		$criteria->compare('destino_id',$this->destino_id);
		$criteria->compare('bien_id',$this->bien_id);
		$criteria->compare('tipo_id',$this->tipo_id);
		$criteria->compare('fecha',$this->fecha,true);
		$criteria->compare('existencia',$this->existencia);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Asignaciones the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
