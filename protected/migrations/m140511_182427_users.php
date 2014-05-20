<?php

class m140511_182427_users extends CDbMigration
{
	public function up()
	{
		$this->createTable('users', array(
		'id' => 'int(6) AUTO_INCREMENT NOT NULL PRIMARY KEY',
		'username' => 'VARCHAR(20) NOT NULL',
		'password' => 'varchar(50) NOT NULL',
		'user_qid' => 'int(11) DEFAULT NULL',
		'create_time' => 'TIMESTAMP DEFAULT CURRENT_TIMESTAMP',
		'UNIQUE INDEX `username_UNIQUE` (`username` ASC)'
		), 'ENGINE=InnoDB');

	}

	public function down()
	{
		echo "m140511_182427_users does not support migration down.\n";
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
