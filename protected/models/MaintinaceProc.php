<?php

/**
 * This is the model class for table "maintinace_proc".
 *
 * The followings are the available columns in table 'maintinace_proc':
 * @property integer $id
 * @property string $SN
 * @property string $mpu
 * @property string $ventination
 * @property string $sensor
 * @property string $internel
 * @property string $cleaning
 * @property string $comment
 *
 * The followings are the available model relations:
 * @property DeviceInfo $sN
 */
class MaintinaceProc extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return MaintinaceProc the static model class
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
		return 'maintinace_proc';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('mpu, ventination, sensor, internel, cleaning', 'required'),
			array('SN', 'length', 'max'=>100),
			array('mpu, ventination, sensor, internel, cleaning', 'length', 'max'=>1),
			array('comment', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, SN, mpu, ventination, sensor, internel, cleaning, comment', 'safe', 'on'=>'search'),
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
			'mpu' => 'Mpu',
			'ventination' => 'Ventination',
			'sensor' => 'Sensor',
			'internel' => 'Internel',
			'cleaning' => 'Cleaning',
			'comment' => 'Comment',
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
		$criteria->compare('mpu',$this->mpu,true);
		$criteria->compare('ventination',$this->ventination,true);
		$criteria->compare('sensor',$this->sensor,true);
		$criteria->compare('internel',$this->internel,true);
		$criteria->compare('cleaning',$this->cleaning,true);
		$criteria->compare('comment',$this->comment,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}