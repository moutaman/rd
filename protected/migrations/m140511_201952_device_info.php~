<?php

class m140511_201952_device_info extends CDbMigration
{
	public function up()
	{
		$this->createTable('device_info', array(
		  'id' => 'INT NOT NULL AUTO_INCREMENT PRIMARY KEY',
		  'SN' => 'VARCHAR(100) NOT NULL',
		  'number' => 'VARCHAR(10) NOT NULL',
		  'manufacturer' => 'VARCHAR(20) NULL',
		  'country_of_origin' => 'VARCHAR(15) NULL',
		  'provider' => 'VARCHAR(45) NULL',
		  'speed' => 'VARCHAR(5) NOT NULL',
		  'type' => 'VARCHAR(10) NOT NULL',
		  'status' => 'VARCHAR(20) NULL',
		  'safety_pole' => 'VARCHAR(15) NOT NULL',
		  'warrenty' => 'VARCHAR(1) NOT NULL',
		  'insurance' => 'VARCHAR(1) NOT NULL',
		  'comment' => 'VARCHAR(45) NULL',
		  'street' => 'INT NOT NULL',
		  'longLocation' => 'decimal(18,14) DEFAULT NULL',
		  'latLocation' => 'decimal(18,14) DEFAULT NULL',
		  'UNIQUE INDEX `SN_UNIQUE` (`SN` ASC)',
		  'UNIQUE INDEX `number_UNIQUE` (`number` ASC)',
		  'INDEX `street_idx` (`street` ASC)',
		  'FOREIGN KEY (street) REFERENCES streets(id)'
		  ), 'ENGINE = InnoDB');

	}

	public function down()
	{
		echo "m140511_201952_device_info does not support migration down.\n";
		return false;
	}

	/*
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
	}

	public function safeDown()
	{
	}
	*/
}
