<?php

/**
 * This is the model class for table "salidas".
 *
 * The followings are the available columns in table 'salidas':
 * @property string $id
 * @property string $fecha_inicio
 * @property string $fecha_fin
 * @property string $hr_salida
 * @property string $hr_regreso
 * @property string $motivo
 * @property string $lugar
 *
 * The followings are the available model relations:
 * @property NinosSalidas[] $ninosSalidases
 */
class Salidas extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'salidas';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('fecha_inicio, fecha_fin, hr_salida, motivo, lugar', 'required'),
			array('lugar', 'length', 'max'=>120),
			array('hr_regreso', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, fecha_inicio, fecha_fin, hr_salida, hr_regreso, motivo, lugar', 'safe', 'on'=>'search'),
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
			'ninosSalidases' => array(self::HAS_MANY, 'NinosSalidas', 'id_salida'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'fecha_inicio' => 'Fecha Inicio',
			'fecha_fin' => 'Fecha Fin',
			'hr_salida' => 'Hr Salida',
			'hr_regreso' => 'Hr Regreso',
			'motivo' => 'Motivo',
			'lugar' => 'Lugar',
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

		$criteria->compare('id',$this->id,true);
		$criteria->compare('fecha_inicio',$this->fecha_inicio,true);
		$criteria->compare('fecha_fin',$this->fecha_fin,true);
		$criteria->compare('hr_salida',$this->hr_salida,true);
		$criteria->compare('hr_regreso',$this->hr_regreso,true);
		$criteria->compare('motivo',$this->motivo,true);
		$criteria->compare('lugar',$this->lugar,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Salidas the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
