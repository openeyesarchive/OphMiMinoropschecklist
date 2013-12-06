<?php

class m131206_150655_soft_deletion extends CDbMigration
{
	public function up()
	{
		$this->addColumn('et_ophmiminoropschecklist_timeout','deleted','tinyint(1) unsigned not null');
		$this->addColumn('et_ophmiminoropschecklist_timeout_version','deleted','tinyint(1) unsigned not null');
	}

	public function down()
	{
		$this->dropColumn('et_ophmiminoropschecklist_timeout','deleted');
		$this->dropColumn('et_ophmiminoropschecklist_timeout_version','deleted');
	}
}
