<?php
namespace craft\contentmigrations;

use craft\db\Migration;
use dgrigg\migrationassistant\MigrationAssistant;

/**
 * Generated migration
 */
class m190902_102600_migration_fields extends Migration
{
    /**
    Migration manifest:
    
    FIELD
        - localeMatrix
            */

private $json = <<<'JSON'
{"settings":{"dependencies":[],"elements":{"fields":[{"group":"Common","name":"Locale Matrix","handle":"localeMatrix","instructions":"","translationMethod":"site","translationKeyFormat":null,"required":null,"searchable":"1","type":"craft\\fields\\Matrix","typesettings":{"minBlocks":"","maxBlocks":"","contentTable":"{{%matrixcontent_localematrix}}","localizeBlocks":"","blockTypes":{"new1":{"name":"Test","handle":"test","fields":{"new1":{"name":"Heading","handle":"heading","instructions":"","required":"0","type":"craft\\fields\\PlainText","translationMethod":"language","translationKeyFormat":null,"typesettings":{"placeholder":"","code":"","multiline":"","initialRows":"4","charLimit":"","columnType":"text"}},"new2":{"name":"Description","handle":"description","instructions":"","required":"0","type":"craft\\fields\\PlainText","translationMethod":"language","translationKeyFormat":null,"typesettings":{"placeholder":"","code":"","multiline":"","initialRows":"4","charLimit":"","columnType":"text"}},"new3":{"name":"Entry","handle":"entry","instructions":"","required":"0","type":"craft\\fields\\Entries","translationMethod":"site","translationKeyFormat":null,"typesettings":{"sources":["products"],"source":null,"targetSiteId":null,"viewMode":null,"limit":"1","selectionLabel":"","localizeRelations":""}}}}}}}]}}}
JSON;

	/**
	 * Any migration code in here is wrapped inside of a transaction.
	 * Returning false will rollback the migration
	 *
	 * @return bool
	 */
	public function safeUp()
	{
	    return MigrationAssistant::getInstance()->migrations->import($this->json);    }

    public function safeDown()
    {
        echo "m190902_102600_migration_fields cannot be reverted.\n";
        return false;
    }
}
