<?php
namespace craft\contentmigrations;

use craft\db\Migration;
use dgrigg\migrationassistant\MigrationAssistant;

/**
 * Generated migration
 */
class m190531_125348_migration_usergroup_test extends Migration
{
    /**
    Migration manifest:
    
    USERGROUP
        - test
            */

private $json = <<<'JSON'
{"settings":{"dependencies":[],"elements":{"userGroups":[{"name":"Test","handle":"test","fieldLayout":[],"requiredFields":[],"permissions":["accesscp","accesscpwhensystemisoff","accessplugin-migrationassistant","accesssitewhensystemisoff","customizesources","performupdates"],"settings":{"requireEmailVerification":true,"allowPublicRegistration":false,"defaultGroup":null,"photoVolumeUid":null,"photoSubpath":"","groups":{"e1875835-61e6-4e29-a130-e5fcf38ec12c":{"name":"Test","handle":"test","permissions":["accesssitewhensystemisoff","accesscpwhensystemisoff","performupdates","accessplugin-migrationassistant","accesscp","customizesources"]}}}}]}}}
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
        echo "m190531_125348_migration_usergroup_test cannot be reverted.\n";
        return false;
    }
}
