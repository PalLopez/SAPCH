<?php

/**
 * This is the model class for table "ninos".
 *
 * The followings are the available columns in table 'ninos':
 * @property string $id
 * @property string $nombre
 * @property string $genero
 * @property string $id_villa
 *
 * The followings are the available model relations:
 * @property Villas $idVilla
 * @property NinosSalidas $ninosSalidas
 * @property Visitas[] $visitases
 */
class Ninos extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'ninos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre, genero, id_villa', 'required'),
			array('nombre', 'length', 'max'=>120),
			array('genero', 'length', 'max'=>1),
			array('id_villa', 'length', 'max'=>20),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, nombre, genero, id_villa', 'safe', 'on'=>'search'),
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
			'idVilla' => array(self::BELONGS_TO, 'Villas', 'id_villa'),
			'ninosSalidas' => array(self::HAS_ONE, 'NinosSalidas', 'id_nino'),
			'visitases' => array(self::HAS_MANY, 'Visitas', 'id_nino'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'nombre' => 'Nombre',
			'genero' => 'Genero',
			'id_villa' => 'Id Villa',
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
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('genero',$this->genero,true);
		$criteria->compare('id_villa',$this->id_villa,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Ninos the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
