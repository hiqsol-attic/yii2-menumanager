<?php

/*
 * Menu Manager for Yii2
 *
 * @link      https://github.com/hiqdev/yii2-menumanager
 * @package   yii2-menumanager
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015, HiQDev (https://hiqdev.com/)
 */

namespace hiqdev\menumanager;

/**
 * Menu Item.
 */
class Item extends \hiqdev\collection\Manager
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
