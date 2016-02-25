<?php

/*
 * Menu Manager for Yii2
 *
 * @link      https://github.com/hiqdev/yii2-menumanager
 * @package   yii2-menumanager
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015-2016, HiQDev (http://hiqdev.com/)
 */

namespace hiqdev\menumanager;

/**
 * Menu Item.
 */
class Item extends \hiqdev\yii2\collection\Manager
{
    /**
     * {@inheritdoc}
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
