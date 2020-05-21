<?php
/**
 * PageProofer plugin for Craft CMS 3.x
 *
 * The easiest way to request changes and report bugs on your website!
 *
 * @link      https://pageproofer.com
 * @copyright Copyright (c) 2020 Derrick Grigg
 */

namespace dgrigg\pageproofer\assetbundles\pageproofer;

use Craft;
use craft\web\AssetBundle;
use craft\web\assets\cp\CpAsset;

/**
 * PageProoferAsset AssetBundle
 *
 * AssetBundle represents a collection of asset files, such as CSS, JS, images.
 *
 * Each asset bundle has a unique name that globally identifies it among all asset bundles used in an application.
 * The name is the [fully qualified class name](http://php.net/manual/en/language.namespaces.rules.php)
 * of the class representing it.
 *
 * An asset bundle can depend on other asset bundles. When registering an asset bundle
 * with a view, all its dependent asset bundles will be automatically registered.
 *
 * http://www.yiiframework.com/doc-2.0/guide-structure-assets.html
 *
 * @author    Derrick Grigg
 * @package   PageProofer
 * @since     1.0.0
 */
class PageProoferAsset extends AssetBundle
{
    // Public Methods
    // =========================================================================

    /**
     * Initializes the bundle.
     */
    public function init()
    {
        // define the path that your publishable resources live
        $this->sourcePath = "@dgrigg/pageproofer/assetbundles/pageproofer/dist";

        // define the dependencies
        $this->depends = [
            CpAsset::class,
        ];

        // define the relative path to CSS/JS files that should be registered with the page
        // when this asset bundle is registered
        $this->js = [
            'js/PageProofer.js',
        ];

        $this->css = [
            'css/PageProofer.css',
        ];

        parent::init();
    }
}
