<?php

/**
 * This is the model class for table "visitas".
 *
 * The followings are the available columns in table 'visitas':
 * @property string $id
 * @property string $hr_entrada
 * @property string $hr_salida
 * @property string $motivo
 * @property string $fecha
 * @property string $id_pe
 * @property string $id_nino
 *
 * The followings are the available model relations:
 * @property PersonalExterno $personalExterno
 * @property PersonalExterno $idPe
 * @property Ninos $idNino
 */
class Visitas extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'visitas';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('hr_entrada, motivo, fecha', 'required'),
			array('id_pe, id_nino', 'length', 'max'=>20),
			array('hr_salida', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, hr_entrada, hr_salida, motivo, fecha, id_pe, id_nino', 'safe', 'on'=>'search'),
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
			'personalExterno' => array(self::HAS_ONE, 'PersonalExterno', 'id'),
			'idPe' => array(self::BELONGS_TO, 'PersonalExterno', 'id_pe'),
			'idNino' => array(self::BELONGS_TO, 'Ninos', 'id_nino'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'hr_entrada' => 'Hr Entrada',
			'hr_salida' => 'Hr Salida',
			'motivo' => 'Motivo',
			'fecha' => 'Fecha',
			'id_pe' => 'Id Pe',
			'id_nino' => 'Id Nino',
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
		$criteria->compare('hr_entrada',$this->hr_entrada,true);
		$criteria->compare('hr_salida',$this->hr_salida,true);
		$criteria->compare('motivo',$this->motivo,true);
		$criteria->compare('fecha',$this->fecha,true);
		$criteria->compare('id_pe',$this->id_pe,true);
		$criteria->compare('id_nino',$this->id_nino,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Visitas the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
