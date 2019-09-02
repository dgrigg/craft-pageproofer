<?php
namespace craft\contentmigrations;

use craft\db\Migration;
use dgrigg\migrationassistant\MigrationAssistant;

/**
 * Generated migration
 */
class m190902_102548_migration_products extends Migration
{
    /**
    Migration manifest:
    
    SECTION
        - products
            */

private $json = <<<'JSON'
{"settings":{"dependencies":{"sections":[{"name":"Products","handle":"products","type":"channel","enableVersioning":"1","propagateEntries":"1","sites":{"default":{"site":"default","hasUrls":"1","uriFormat":"products/{slug}","enabledByDefault":"1","template":""},"french":{"site":"french","hasUrls":"1","uriFormat":"products/{slug}","enabledByDefault":"1","template":""},"danish":{"site":"danish","hasUrls":"1","uriFormat":"products/{slug}","enabledByDefault":"1","template":""}},"entrytypes":[{"sectionHandle":"products","hasTitleField":"1","titleLabel":"Title","name":"Products","handle":"products","fieldLayout":[],"requiredFields":[]}]}]},"elements":{"sections":[{"name":"Products","handle":"products","type":"channel","enableVersioning":"1","propagateEntries":"1","sites":{"default":{"site":"default","hasUrls":"1","uriFormat":"products/{slug}","enabledByDefault":"1","template":""},"french":{"site":"french","hasUrls":"1","uriFormat":"products/{slug}","enabledByDefault":"1","template":""},"danish":{"site":"danish","hasUrls":"1","uriFormat":"products/{slug}","enabledByDefault":"1","template":""}},"entrytypes":[{"sectionHandle":"products","hasTitleField":"1","titleLabel":"Title","name":"Products","handle":"products","fieldLayout":[],"requiredFields":[]}]}]}}}
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
        echo "m190902_102548_migration_products cannot be reverted.\n";
        return false;
    }
}
