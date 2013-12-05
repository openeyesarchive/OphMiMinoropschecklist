<?php

class m131205_132039_table_versioning extends CDbMigration
{
	public function up()
	{
		$this->execute("
CREATE TABLE `et_ophmiminoropschecklist_timeout_version` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `event_id` int(10) unsigned NOT NULL,
  `patient_name_checked` tinyint(1) unsigned NOT NULL,
  `procedure_planned` tinyint(1) unsigned NOT NULL,
  `site_marked_x` tinyint(1) unsigned NOT NULL,
  `last_modified_user_id` int(10) unsigned NOT NULL DEFAULT '1',
  `last_modified_date` datetime NOT NULL DEFAULT '1901-01-01 00:00:00',
  `created_user_id` int(10) unsigned NOT NULL DEFAULT '1',
  `created_date` datetime NOT NULL DEFAULT '1901-01-01 00:00:00',
  PRIMARY KEY (`id`),
  KEY `acv_et_ophmiminoropschecklist_timeout_lmui_fk` (`last_modified_user_id`),
  KEY `acv_et_ophmiminoropschecklist_timeout_cui_fk` (`created_user_id`),
  KEY `acv_et_ophmiminoropschecklist_timeout_ev_fk` (`event_id`),
  CONSTRAINT `acv_et_ophmiminoropschecklist_timeout_lmui_fk` FOREIGN KEY (`last_modified_user_id`) REFERENCES `user` (`id`),
  CONSTRAINT `acv_et_ophmiminoropschecklist_timeout_cui_fk` FOREIGN KEY (`created_user_id`) REFERENCES `user` (`id`),
  CONSTRAINT `acv_et_ophmiminoropschecklist_timeout_ev_fk` FOREIGN KEY (`event_id`) REFERENCES `event` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin
		");

		$this->alterColumn('et_ophmiminoropschecklist_timeout_version','id','int(10) unsigned NOT NULL');
		$this->dropPrimaryKey('id','et_ophmiminoropschecklist_timeout_version');

		$this->createIndex('et_ophmiminoropschecklist_timeout_aid_fk','et_ophmiminoropschecklist_timeout_version','id');
		$this->addForeignKey('et_ophmiminoropschecklist_timeout_aid_fk','et_ophmiminoropschecklist_timeout_version','id','et_ophmiminoropschecklist_timeout','id');

		$this->addColumn('et_ophmiminoropschecklist_timeout_version','version_date',"datetime not null default '1900-01-01 00:00:00'");

		$this->addColumn('et_ophmiminoropschecklist_timeout_version','version_id','int(10) unsigned NOT NULL');
		$this->addPrimaryKey('version_id','et_ophmiminoropschecklist_timeout_version','version_id');
		$this->alterColumn('et_ophmiminoropschecklist_timeout_version','version_id','int(10) unsigned NOT NULL AUTO_INCREMENT');
	}

	public function down()
	{
		$this->dropTable('et_ophmiminoropschecklist_timeout_version');
	}
}
