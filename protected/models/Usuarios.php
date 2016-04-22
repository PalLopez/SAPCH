<?php

/**
 * This is the model class for table "usuarios".
 *
 * The followings are the available columns in table 'usuarios':
 * @property string $id
 * @property string $nombre
 * @property string $tipo_usuario
 * @property integer $num_empleado
 * @property string $genero
 * @property string $contrasena
 * @property string $id_area
 *
 * The followings are the available model relations:
 * @property EntradasSalidas[] $entradasSalidases
 * @property Areas $idArea
 */
class Usuarios extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'usuarios';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre, tipo_usuario, num_empleado, genero, contrasena', 'required'),
			array('num_empleado', 'numerical', 'integerOnly'=>true),
			array('nombre, contrasena', 'length', 'max'=>120),
			array('tipo_usuario', 'length', 'max'=>2),
			array('genero', 'length', 'max'=>1),
			array('id_area', 'length', 'max'=>20),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, nombre, tipo_usuario, num_empleado, genero, contrasena, id_area', 'safe', 'on'=>'search'),
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
			'entradasSalidases' => array(self::HAS_MANY, 'EntradasSalidas', 'id_usuario'),
			'idArea' => array(self::BELONGS_TO, 'Areas', 'id_area'),
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
			'tipo_usuario' => 'Tipo de Usuario',
			'num_empleado' => 'Num. Empleado',
			'genero' => 'Genero',
			'contrasena' => 'Contraseña',
			'id_area' => 'Área',
		);
	}

	public function beforeSave(){

		$this->contrasena = sha1($this->contrasena);

		return parent::beforeSave();

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
		$criteria->compare('tipo_usuario',$this->tipo_usuario,true);
		$criteria->compare('num_empleado',$this->num_empleado);
		$criteria->compare('genero',$this->genero,true);
		$criteria->compare('contrasena',$this->contrasena,true);
		$criteria->compare('id_area',$this->id_area,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Usuarios the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
