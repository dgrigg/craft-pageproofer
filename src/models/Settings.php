<?php
/**
 * PageProofer plugin for Craft CMS 3.x
 *
 * The easiest way to request changes and report bugs on your website!
 *
 * @link      https://pageproofer.com
 * @copyright Copyright (c) 2020 Derrick Grigg
 */

namespace dgrigg\pageproofer\models;

use dgrigg\pageproofer\PageProofer;

use Craft;
use craft\base\Model;

/**
 * PageProofer Settings Model
 *
 * This is a model used to define the plugin's settings.
 *
 * Models are containers for data. Just about every time information is passed
 * between services, controllers, and templates in Craft, it’s passed via a model.
 *
 * https://craftcms.com/docs/plugins/models
 *
 * @author    Derrick Grigg
 * @package   PageProofer
 * @since     1.0.0
 */
class Settings extends Model
{
    // Public Properties
    // =========================================================================

    /**
     * Some field model attribute
     *
     * @var string
     */
    public $apiKey = '';

    public $enabled = true;

    // Public Methods
    // =========================================================================

    /**
     * Returns the validation rules for attributes.
     *
     * Validation rules are used by [[validate()]] to check if attribute values are valid.
     * Child classes may override this method to declare different validation rules.
     *
     * More info: http://www.yiiframework.com/doc-2.0/guide-input-validation.html
     *
     * @return array
     */
    public function rules()
    {
        return [

        ];
    }
}
