<?php
namespace craft\contentmigrations;

use craft\db\Migration;
use dgrigg\migrationassistant\MigrationAssistant;

/**
 * Generated migration
 */
class m190902_102534_migration_sites extends Migration
{
    /**
    Migration manifest:
    
    SITE
        - french
        - danish
            */

private $json = <<<'JSON'
{"settings":{"dependencies":{"sites":[{"name":"French","handle":"french","group":"Craft3","language":"fr","hasUrls":"1","baseUrl":"$DEFAULT_SITE_URL","primary":"0","sortOrder":"2"},{"name":"Danish","handle":"danish","group":"Craft3","language":"da","hasUrls":"1","baseUrl":"@web/","primary":"0","sortOrder":"3"}]},"elements":{"sites":[{"name":"French","handle":"french","group":"Craft3","language":"fr","hasUrls":"1","baseUrl":"$DEFAULT_SITE_URL","primary":"0","sortOrder":"2"},{"name":"Danish","handle":"danish","group":"Craft3","language":"da","hasUrls":"1","baseUrl":"@web/","primary":"0","sortOrder":"3"}]}}}
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
        echo "m190902_102534_migration_sites cannot be reverted.\n";
        return false;
    }
}
