<?php

class m140512_113820_components extends CDbMigration
{
	public function up()
	{
		$this->createTable('components', array(
		'id' => 'INT NOT NULL AUTO_INCREMENT PRIMARY KEY',
		'SN' => 'VARCHAR(100)',
		  'loop' => 'VARCHAR(1) NULL',
		  'laser' => 'VARCHAR(1) NULL',
		  'ethernet' => 'VARCHAR(1) NULL',
		  'fiber_optic' => 'VARCHAR(1) NULL',
		  'flash' => 'VARCHAR(1) NULL',
		  'CCTV' => 'VARCHAR(1) NULL',
		  'resolution' => 'VARCHAR(20) NULL',
		  'ventination' => 'VARCHAR(20) NULL',
		  'ph_cam_resolution' => 'VARCHAR(20) NULL',
		  'op_system' => 'VARCHAR(15) NULL',
		  'mpu' => 'VARCHAR(1) NULL',
		  'INDEX `SN_idx` (`SN` ASC)',
		  'FOREIGN KEY (SN) REFERENCES device_info(SN)'
		  ), 'ENGINE = InnoDB');

	}

	public function down()
	{
		echo "m140512_113820_components does not support migration down.\n";
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
