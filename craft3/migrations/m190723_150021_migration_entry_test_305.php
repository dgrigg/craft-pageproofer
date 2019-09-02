<?php
namespace craft\contentmigrations;

use craft\db\Migration;
use dgrigg\migrationassistant\MigrationAssistant;

/**
 * Generated migration
 */
class m190723_150021_migration_entry_test_305 extends Migration
{
    /**
    Migration manifest:

    ENTRY
        - test-305
            */

private $json = <<<'JSON'
{"content":{"entries":[{"slug":"test-305","section":"entries","sites":{"default":{"slug":"test-305","section":"entries","enabled":"0","site":"default","enabledForSite":"1","postDate":{"date":"2019-07-23 15:05:00.000000","timezone_type":3,"timezone":"America/Toronto"},"expiryDate":null,"title":"test 3:05","entryType":"entries","uid":"f4af73e8-2609-44f2-8f79-9907225e8105"}}}]}}
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
        echo "m190723_150021_migration_entry_test_305 cannot be reverted.\n";
        return false;
    }
}
