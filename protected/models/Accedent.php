<?php

/**
 * This is the model class for table "accedent".
 *
 * The followings are the available columns in table 'accedent':
 * @property integer $id
 * @property string $SN
 * @property string $number
 * @property string $date
 * @property string $car_id
 * @property string $car_insurance
 * @property string $driver_id
 *
 * The followings are the available model relations:
 * @property DeviceInfo $sN
 */
class Accedent extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Accedent the static model class
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
		return 'accedent';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('SN', 'length', 'max'=>100),
			array('number', 'length', 'max'=>10),
			array('car_id, driver_id', 'length', 'max'=>15),
			array('car_insurance', 'length', 'max'=>45),
			array('date', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, SN, number, date, car_id, car_insurance, driver_id', 'safe', 'on'=>'search'),
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
			'sN' => array(self::BELONGS_TO, 'DeviceInfo', 'SN'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'SN' => 'Sn',
			'number' => 'Number',
			'date' => 'Date',
			'car_id' => 'Car',
			'car_insurance' => 'Car Insurance',
			'driver_id' => 'Driver',
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
		$criteria->compare('SN',$this->SN,true);
		$criteria->compare('number',$this->number,true);
		$criteria->compare('date',$this->date,true);
		$criteria->compare('car_id',$this->car_id,true);
		$criteria->compare('car_insurance',$this->car_insurance,true);
		$criteria->compare('driver_id',$this->driver_id,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}