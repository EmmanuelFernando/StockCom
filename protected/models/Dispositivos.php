<?php

/**
 * This is the model class for table "dispositivos".
 *
 * The followings are the available columns in table 'dispositivos':
 * @property integer $id
 * @property integer $codigo
 * @property string $fecha
 * @property integer $tipos_id
 * @property integer $marcas_id
 * @property integer $modelos_id
 * @property integer $estado_id
 *
 * The followings are the available model relations:
 * @property Estados $estado
 * @property TiposDispositivos $tipos
 * @property Marcas $marcas
 * @property Modelos $modelos
 */
class Dispositivos extends CActiveRecord
{
    
    public $nombre_tipos;

    /**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Registro the static model class
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
		return 'dispositivos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
                        array('codigo, fecha, tipos_id, marcas_id, modelos_id, estado_id', 'required'),
			array('codigo, tipos_id, marcas_id, modelos_id, estado_id', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, codigo, fecha, tipos_id, marcas_id, modelos_id, estado_id', 'safe', 'on'=>'search'),
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
			'estado' => array(self::BELONGS_TO, 'Estados', 'estado_id'),
			'tipos' => array(self::BELONGS_TO, 'TiposDispositivos', 'tipos_id'),
			'marcas' => array(self::BELONGS_TO, 'Marcas', 'marcas_id'),
			'modelos' => array(self::BELONGS_TO, 'Modelos', 'modelos_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'codigo' => 'Codigo',
			'fecha' => 'Fecha',
			'tipos_id' => 'Tipos',
			'marcas_id' => 'Marcas',
			'modelos_id' => 'Modelos',
			'estado_id' => 'Estados',
                        
                        'tipos.descripcion' => 'Tipo',
			'marcas.descripcion' => 'Marca',
			'modelos.descripcion' => 'Modelo',
			'estado.descripcion' => 'Estado',
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
		$criteria->compare('codigo',$this->codigo);
		$criteria->compare('fecha',$this->fecha,true);
		$criteria->compare('tipos_id',$this->tipos_id);
		$criteria->compare('marcas_id',$this->marcas_id);
		$criteria->compare('modelos_id',$this->modelos_id);
		$criteria->compare('estado_id',$this->estado_id);
                
                $criteria->compare('tipos.descripcion',$this->tipos_id);
		$criteria->compare('marcas.descripcion',$this->marcas_id);
		$criteria->compare('modelos.descripcion',$this->modelos_id);
		$criteria->compare('estado.descripcion',$this->estado_id);
                
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Dispositivos the static model class
	 */
/*	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}*/
}
