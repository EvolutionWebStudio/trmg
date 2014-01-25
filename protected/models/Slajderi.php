<?php

/**
 * This is the model class for table "slajderi".
 *
 * The followings are the available columns in table 'slajderi':
 * @property integer $id
 * @property string $naslov
 * @property string $sadrzaj
 * @property string $jezik
 */
class Slajderi extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Slajderi the static model class
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
		return 'slajderi';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('naslov, sadrzaj, jezik', 'required'),
			array('naslov', 'length', 'max'=>45),
			array('jezik', 'length', 'max'=>30),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, naslov, sadrzaj, jezik', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'naslov' => 'Naslov',
			'sadrzaj' => 'Sadrzaj',
			'jezik' => 'Jezik',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('naslov',$this->naslov,true);
		$criteria->compare('sadrzaj',$this->sadrzaj,true);
		$criteria->compare('jezik',$this->jezik,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}