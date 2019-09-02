<?php
namespace craft\contentmigrations;

use craft\db\Migration;
use dgrigg\migrationassistant\MigrationAssistant;

/**
 * Generated migration
 */
class m190902_102611_migration_home extends Migration
{
    /**
    Migration manifest:
    
    SECTION
        - home
            */

private $json = <<<'JSON'
{"settings":{"dependencies":{"sections":[{"name":"Home","handle":"home","type":"single","enableVersioning":"1","propagateEntries":"1","sites":{"default":{"site":"default","hasUrls":"1","uriFormat":"__home__","enabledByDefault":"1","template":"_index.twig"}},"entrytypes":[{"sectionHandle":"home","hasTitleField":"0","titleLabel":"","titleFormat":"{section.name|raw}","name":"Home","handle":"home","fieldLayout":{"Tab 1":["text","localeMatrix"]},"requiredFields":[]}]}]},"elements":{"sections":[{"name":"Home","handle":"home","type":"single","enableVersioning":"1","propagateEntries":"1","sites":{"default":{"site":"default","hasUrls":"1","uriFormat":"__home__","enabledByDefault":"1","template":"_index.twig"}},"entrytypes":[{"sectionHandle":"home","hasTitleField":"0","titleLabel":"","titleFormat":"{section.name|raw}","name":"Home","handle":"home","fieldLayout":{"Tab 1":["text","localeMatrix"]},"requiredFields":[]}]}]}}}
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
        echo "m190902_102611_migration_home cannot be reverted.\n";
        return false;
    }
}
