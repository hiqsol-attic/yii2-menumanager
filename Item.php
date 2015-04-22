<?php
/**
 * @link    http://hiqdev.com/yii2-menumanager
 * @license http://hiqdev.com/yii2-menumanager/license
 * @copyright Copyright (c) 2015 HiQDev
 */

namespace hiqdev\menumanager;

/**
 * Menu Item
 */
class Item extends \hiqdev\collection\Manager
{
    /**
     * @inheritdoc
     */
    public $itemClass = 'hiqdev\menumanager\Item';

    /**
     *
     */
    public $label;

    /**
     *
     */
    public $url;

    /**
     *
     */
    public $icon;

    /**
     *
     */
    public $active;
}
