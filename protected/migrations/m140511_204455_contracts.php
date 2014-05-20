<?php

class m140511_204455_contracts extends CDbMigration
{
	public function up()
	{
		$this->createTable('data_coll_cont', array(
		'id' => 'INT NOT NULL AUTO_INCREMENT PRIMARY KEY',
		'SN' => 'VARCHAR(100) NULL',
		'number' => 'VARCHAR(10) NULL',
		'start_date' => 'DATE NOT NULL',
		'end_date' => 'DATE NOT NULL',
		'comment' => 'TEXT NULL',
		'INDEX `SN_idx` (`SN` ASC)',
		'FOREIGN KEY (SN) REFERENCES device_info(SN)'
		), 'ENGINE = InnoDB');


		$this->createTable('insurance_cont', array(
		'id' => 'INT NOT NULL AUTO_INCREMENT',
		'SN' => 'VARCHAR(100) NULL',
		'start_date' => 'DATE NOT NULL',
		'end_date' => 'DATE NOT NULL',
		'PRIMARY KEY (`id`)',
		'INDEX `SN_idx` (`SN` ASC)',
		'FOREIGN KEY (SN) REFERENCES device_info(SN)'
		), 'ENGINE = InnoDB');

		$this->createTable('warrenty_cont', array(
		'id' => 'INT NOT NULL AUTO_INCREMENT PRIMARY KEY',
		'SN' => 'VARCHAR(100) NULL',
		'start_date' => 'DATE NOT NULL',
		'end_date' => 'DATE NOT NULL',
		'INDEX `SN_idx` (`SN` ASC)',
		'FOREIGN KEY (SN) REFERENCES device_info(SN)',
		), 'ENGINE = InnoDB');

		$this->createTable('maintinace_proc', array(
		'id' => 'INT NOT NULL AUTO_INCREMENT',
		'SN' => 'VARCHAR(100) NULL',
		'mpu' => 'VARCHAR(1) NOT NULL',
		'ventination' => 'VARCHAR(1) NOT NULL',
		'sensor' => 'VARCHAR(1) NOT NULL',
		'internel' => 'VARCHAR(1) NOT NULL',
		'cleaning' => 'VARCHAR(1) NOT NULL',
		'comment' => 'VARCHAR(45) NULL',
		'PRIMARY KEY (`id`)',
		'INDEX `SN_idx` (`SN` ASC)',
		'FOREIGN KEY (SN) REFERENCES device_info(SN)',
		), 'ENGINE = InnoDB');

		$this->createTable('check_in_history', array(
		'id' => 'INT NOT NULL PRIMARY KEY',
		'SN' => 'VARCHAR(100) NULL',
		'check_date' => 'DATE NULL',
		'checker' => 'INT',
		'checked_comp' => 'VARCHAR(45) NULL',
		'INDEX `SN_idx` (`SN` ASC)',
		'FOREIGN KEY (SN) REFERENCES device_info(SN)',
		'FOREIGN KEY (checker) REFERENCES users(id)',
		), 'ENGINE = InnoDB');

		$this->createTable('maintinace_cont', array(
		 'id' => 'INT NOT NULL AUTO_INCREMENT PRIMARY KEY',
		 'SN' => 'VARCHAR(100) NULL',
		 'start_date' => 'DATE NULL',
		 'end_date' => 'DATE NULL',
		 'INDEX `SN_idx` (`SN` ASC)',
		 'FOREIGN KEY (SN) REFERENCES device_info(SN)'
		), 'ENGINE = InnoDB');


		$this->createTable('accedent', array(
		  'id' => 'INT NOT NULL AUTO_INCREMENT PRIMARY KEY',
		  'SN' => 'VARCHAR(100) NULL',
		  'number' => 'VARCHAR(10) NULL',
		  'date' => 'DATE NULL',
		  'car_id' => 'VARCHAR(15) NULL',
		  'car_insurance' => 'VARCHAR(45) NULL',
		  'driver_id' => 'VARCHAR(15) NULL',
		  'INDEX `SN_idx` (`SN` ASC)',
		  'FOREIGN KEY (SN) REFERENCES device_info(SN)'
		), 'ENGINE = InnoDB');
	}

	public function down()
	{
		$this->dropTable('data_coll_cont');
		$this->dropTable('insurance_cont');
		$this->dropTable('warrenty_cont');
		$this->dropTable('maintinace_proc');
		$this->dropTable('check_in_history');
		$this->dropTable('maintinace_cont');
		$this->dropTable('accedent');
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
