<?php

namespace alkurn\pager\assets;

use yii\web\AssetBundle;

/**
 * This is "InfiniteAjaxScrollAsset" class.
 *
 * This class is an asset bundle for {@link http://infiniteajaxscroll.com/ JQuery Infinite Ajax Scroll plugin}.
 *
 * @link      http://alkurn.github.io/yii2-pager Y2SP project page.
 * @license   https://github.com/alkurn/yii2-pager/blob/master/LICENSE.md MIT
 *
 * @author    Ganesh Alkurn <ganesh.alkurn@gmail.com>
 */
class InfiniteAjaxScrollAsset extends AssetBundle
{
    /**
     * @var array List of bundle class names that this bundle depends on.
     */
    public $depends = [
        'yii\web\JqueryAsset',
    ];

    /**
     * @inheritdoc
     */
    public function init()
    {
        $this->sourcePath = '@vendor/webcreate/jquery-ias/src';
        $this->js = [
            'callbacks.js',
            'jquery-ias.js',
            'extension/history.js',
            'extension/noneleft.js',
            'extension/paging.js',
            'extension/spinner.js',
            'extension/trigger.js'
        ];
    }
}
