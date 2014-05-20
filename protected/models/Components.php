<?php

/**
 * This is the model class for table "components".
 *
 * The followings are the available columns in table 'components':
 * @property integer $id
 * @property string $SN
 * @property string $loop
 * @property string $laser
 * @property string $ethernet
 * @property string $fiber_optic
 * @property string $flash
 * @property string $CCTV
 * @property string $resolution
 * @property string $ventination
 * @property string $ph_cam_resolution
 * @property string $op_system
 * @property string $mpu
 *
 * The followings are the available model relations:
 * @property DeviceInfo $sN
 */
class Components extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Components the static model class
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
		return 'components';
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
			array('loop, laser, ethernet, fiber_optic, flash, CCTV, mpu', 'length', 'max'=>1),
			array('resolution, ventination, ph_cam_resolution', 'length', 'max'=>20),
			array('op_system', 'length', 'max'=>15),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, SN, loop, laser, ethernet, fiber_optic, flash, CCTV, resolution, ventination, ph_cam_resolution, op_system, mpu', 'safe', 'on'=>'search'),
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
			'loop' => 'Loop',
			'laser' => 'Laser',
			'ethernet' => 'Ethernet',
			'fiber_optic' => 'Fiber Optic',
			'flash' => 'Flash',
			'CCTV' => 'Cctv',
			'resolution' => 'Resolution',
			'ventination' => 'Ventination',
			'ph_cam_resolution' => 'Ph Cam Resolution',
			'op_system' => 'Op System',
			'mpu' => 'Mpu',
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
		$criteria->compare('loop',$this->loop,true);
		$criteria->compare('laser',$this->laser,true);
		$criteria->compare('ethernet',$this->ethernet,true);
		$criteria->compare('fiber_optic',$this->fiber_optic,true);
		$criteria->compare('flash',$this->flash,true);
		$criteria->compare('CCTV',$this->CCTV,true);
		$criteria->compare('resolution',$this->resolution,true);
		$criteria->compare('ventination',$this->ventination,true);
		$criteria->compare('ph_cam_resolution',$this->ph_cam_resolution,true);
		$criteria->compare('op_system',$this->op_system,true);
		$criteria->compare('mpu',$this->mpu,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}