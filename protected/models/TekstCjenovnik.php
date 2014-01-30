<?php

/**
 * This is the model class for table "tekstCjenovnik".
 *
 * The followings are the available columns in table 'tekstCjenovnik':
 * @property integer $id
 * @property string $tekst
 * @property string $jezik
 */
class TekstCjenovnik extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return TekstCjenovnik the static model class
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
		return 'tekstCjenovnik';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('tekst, jezik', 'required'),
			array('jezik', 'length', 'max'=>30),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, tekst, jezik', 'safe', 'on'=>'search'),
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
			'tekst' => 'Tekst',
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
		$criteria->compare('tekst',$this->tekst,true);
		$criteria->compare('jezik',$this->jezik,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}