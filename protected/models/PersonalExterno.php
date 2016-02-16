<?php

/**
 * This is the model class for table "personal_externo".
 *
 * The followings are the available columns in table 'personal_externo':
 * @property string $id
 * @property string $nombre
 * @property string $empresa
 * @property string $genero
 * @property string $id_tipo_pe
 *
 * The followings are the available model relations:
 * @property TipoPersonalExterno $idTipoPe
 * @property Visitas[] $visitases
 */
class PersonalExterno extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'personal_externo';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre, empresa, genero, id_tipo_pe', 'required'),
			array('nombre, empresa', 'length', 'max'=>120),
			array('genero', 'length', 'max'=>1),
			array('id_tipo_pe', 'length', 'max'=>20),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, nombre, empresa, genero, id_tipo_pe', 'safe', 'on'=>'search'),
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
			'idTipoPe' => array(self::BELONGS_TO, 'TipoPersonalExterno', 'id_tipo_pe'),
			'visitases' => array(self::HAS_MANY, 'Visitas', 'id_pe'),
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
			'empresa' => 'Empresa',
			'genero' => 'Genero',
			'id_tipo_pe' => 'Id Tipo Pe',
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
		$criteria->compare('empresa',$this->empresa,true);
		$criteria->compare('genero',$this->genero,true);
		$criteria->compare('id_tipo_pe',$this->id_tipo_pe,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return PersonalExterno the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
