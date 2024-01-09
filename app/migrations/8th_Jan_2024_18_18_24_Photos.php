<?php

namespace Thunder;

defined('ROOTPATH') OR exit('Access Denied!');

/**
 * Photos class: SampleMigration
 */
class Photos extends Migration {
	
	public function up()
	{

		/** create a table **/
		$this->addColumn('id int(11) NOT NULL AUTO_INCREMENT');
		$this->addColumn('username varchar(30) NULL');
		$this->addColumn('email varchar(100) NULL');
		$this->addColumn('role varchar(20) NULL');
		$this->addColumn('password varchar(255) NULL');
		$this->addColumn('date_created datetime NULL');
		$this->addColumn('date_updated datetime NULL');
		$this->addPrimaryKey('id');
		$this->addKey('user_id');
		/*
		$this->addUniqueKey();
		*/
		$this->createTable('photos');

	} 

	public function down()
	{
		$this->dropTable('photos');
	}

}