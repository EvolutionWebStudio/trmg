<?php

/**
 * This is the model class for table "clanci".
 *
 * The followings are the available columns in table 'clanci':
 * @property integer $idclanci
 * @property string $naslov
 * @property string $autor
 * @property string $datum
 * @property string $clanak
 * @property string $baner
 * @property string $slika
 * @property string $kategorija
 * @property string $sekcija
 */
class Clanci extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Clanci the static model class
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
		return 'clanci';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('autor', 'length', 'max'=>45),
			array('naslov, datum, clanak, baner, slika, kategorija, sekcija, alias, jezik, meta_title, meta_keywords, meta_description', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idclanci, naslov, autor, datum, clanak, baner, slika, kategorija', 'safe', 'on'=>'search'),
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
			'idclanci' => 'Idclanci',
			'naslov' => 'Naslov',
			'autor' => 'Autor',
			'datum' => 'Datum',
			'clanak' => 'Clanak',
			'baner' => 'Baner',
			'slika' => 'Slika',
			'kategorija' => 'Kategorija',
			'sekcija' => 'Sekcija',
            'alias'=>'Alias',
            'jezik'=>'Jezik'
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

		$criteria->compare('idclanci',$this->idclanci);
		$criteria->compare('naslov',$this->naslov,true);
		$criteria->compare('autor',$this->autor,true);
		$criteria->compare('datum',$this->datum,true);
		$criteria->compare('clanak',$this->clanak,true);
		$criteria->compare('baner',$this->baner,true);
		$criteria->compare('slika',$this->slika,true);
		$criteria->compare('kategorija',$this->kategorija,true);
        $criteria->compare('alias',$this->alias,true);
        $criteria->compare('jezik',$this->jezik,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}