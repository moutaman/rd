<?php

class m140511_192952_regions extends CDbMigration
{
	public function up()
	{
		$this->createTable('regions', array(
		'id' => 'INT NOT NULL AUTO_INCREMENT PRIMARY KEY',
		'region_code' => 'VARCHAR(6) NOT NULL',
		'name' => 'VARCHAR(40)',
		'admin' => 'INT',
		'INDEX `admin_idx` (`admin` ASC)',
		'UNIQUE INDEX `name_UNIQUE` (`name` ASC)',
		'FOREIGN KEY (admin) REFERENCES users(id)'
		), 'ENGINE=InnoDB');

		$this->createTable('streets', array(
		'id' => 'INT NOT NULL AUTO_INCREMENT PRIMARY KEY',
		'name' => 'VARCHAR(50)',
		'region' => 'INT',
		'UNIQUE INDEX `name_UNIQUE` (`name` ASC)',
		'INDEX `region_idx` (`region` ASC)',
		'FOREIGN KEY (region) REFERENCES regions(id)'
		), 'ENGINE=InnoDB');

	}

	public function down()
	{
		echo "m140511_192952_regions does not support migration down.\n";
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
