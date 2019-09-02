<?php
namespace craft\contentmigrations;

use craft\db\Migration;
use dgrigg\migrationassistant\MigrationAssistant;

/**
 * Generated migration
 */
class m190723_115331_migration_entry_home extends Migration
{
    /**
    Migration manifest:
    
    ENTRY
        - home
            */

private $json = <<<'JSON'
{"content":{"entries":[{"slug":"home","section":"home","sites":{"default":{"slug":"home","section":"home","enabled":"1","site":"default","enabledForSite":"1","postDate":{"date":"2019-05-30 22:01:00.000000","timezone_type":3,"timezone":"America/Los_Angeles"},"expiryDate":null,"title":"Home","entryType":"home","uid":"a75dfd31-b86a-4887-b4b1-f18505d5fa8b","fields":{"text":"this is a test"}}}}]}}
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
        echo "m190723_115331_migration_entry_home cannot be reverted.\n";
        return false;
    }
}
