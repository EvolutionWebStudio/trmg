<?php

/**
 * This is the model class for table "vijesti".
 *
 * The followings are the available columns in table 'vijesti':
 * @property integer $id
 * @property string $naslov
 * @property string $sadrzaj
 * @property string $autor
 * @property string $datum
 * @property string $jezik
 * @property string $meta_keywords
 */
class Vijesti extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Vijesti the static model class
	 */
     public $image;
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'vijesti';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('naslov, sadrzaj, jezik, meta_description, meta_keywords, meta_title ', 'required'),
			array('naslov', 'length', 'max' =>120),
			array('autor, jezik', 'length', 'max'=>45),
            array('meta_keywords','length','max'=>255),
			array('meta_title','length','max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, naslov, sadrzaj, autor, datum, jezik, meta_keywords, meta_title, meta_description', 'safe', 'on'=>'search'),
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
			'autor' => 'Autor',
			'datum' => 'Datum',
			'jezik' => 'Jezik',
			'meta_keywords' => 'Ključne riječi',
			'meta_description' => 'Opis',
			'meta_title' => 'Naslov',
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
		$criteria->compare('autor',$this->autor,true);
		$criteria->compare('datum',$this->datum,true);
		$criteria->compare('jezik',$this->jezik,true);
		$criteria->compare('meta_keywords',$this->meta_keywords,true);
		$criteria->compare('meta_description',$this->meta_description,true);
		$criteria->compare('meta_title',$this->meta_title,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}