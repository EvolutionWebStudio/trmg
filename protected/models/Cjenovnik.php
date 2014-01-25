<?php

/**
 * This is the model class for table "cjenovnik".
 *
 * The followings are the available columns in table 'cjenovnik':
 * @property integer $id
 * @property string $period_od
 * @property string $period_do
 * @property string $tip
 * @property double $cjena_km_soba
 * @property double $cjena_eur_soba
 * @property double $cjena_km_apartman
 * @property double $cjena_eur_apartman
 * @property double $cjena_km_mali
 * @property double $cjena_eur_mali
 * @property double $cjena_km_veliki
 * @property double $cjena_eur_veliki
 */
class Cjenovnik extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Cjenovnik the static model class
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
		return 'cjenovnik';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('period_od, period_do, tip, cjena_km_soba, cjena_eur_soba, cjena_km_apartman, cjena_eur_apartman, cjena_km_mali, cjena_eur_mali, cjena_km_veliki, cjena_eur_veliki', 'required'),
			array('cjena_km_soba, cjena_eur_soba, cjena_km_apartman, cjena_eur_apartman, cjena_km_mali, cjena_eur_mali, cjena_km_veliki, cjena_eur_veliki', 'numerical'),
			array('tip', 'length', 'max'=>256),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, period_od, period_do, tip, cjena_km_soba, cjena_eur_soba, cjena_km_apartman, cjena_eur_apartman, cjena_km_mali, cjena_eur_mali, cjena_km_veliki, cjena_eur_veliki', 'safe', 'on'=>'search'),
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
			'period_od' => 'Period Od',
			'period_do' => 'Period Do',
			'tip' => 'Tip',
			'cjena_km_soba' => 'Cjena Km Soba',
			'cjena_eur_soba' => 'Cjena Eur Soba',
			'cjena_km_apartman' => 'Cjena Km Apartman',
			'cjena_eur_apartman' => 'Cjena Eur Apartman',
			'cjena_km_mali' => 'Cjena Km Mali',
			'cjena_eur_mali' => 'Cjena Eur Mali',
			'cjena_km_veliki' => 'Cjena Km Veliki',
			'cjena_eur_veliki' => 'Cjena Eur Veliki',
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
		$criteria->compare('period_od',$this->period_od,true);
		$criteria->compare('period_do',$this->period_do,true);
		$criteria->compare('tip',$this->tip,true);
		$criteria->compare('cjena_km_soba',$this->cjena_km_soba);
		$criteria->compare('cjena_eur_soba',$this->cjena_eur_soba);
		$criteria->compare('cjena_km_apartman',$this->cjena_km_apartman);
		$criteria->compare('cjena_eur_apartman',$this->cjena_eur_apartman);
		$criteria->compare('cjena_km_mali',$this->cjena_km_mali);
		$criteria->compare('cjena_eur_mali',$this->cjena_eur_mali);
		$criteria->compare('cjena_km_veliki',$this->cjena_km_veliki);
		$criteria->compare('cjena_eur_veliki',$this->cjena_eur_veliki);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}