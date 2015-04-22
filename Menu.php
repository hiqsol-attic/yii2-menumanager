<?php
/**
 * @link    http://hiqdev.com/yii2-menumanager
 * @license http://hiqdev.com/yii2-menumanager/license
 * @copyright Copyright (c) 2015 HiQDev
 */

namespace hiqdev\menumanager;

/**
 * Menu is a manageable collection of [[Item]]s
 */
class Menu extends \hiqdev\collection\Manager
{
    /**
     * @inheritdoc
     */
    public $itemClass = 'hiqdev\menumanager\Item';
}
