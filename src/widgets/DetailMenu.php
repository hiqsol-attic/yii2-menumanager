<?php
/**
 * Menu Manager for Yii2
 *
 * @link      https://github.com/hiqdev/yii2-menumanager
 * @package   yii2-menumanager
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015-2016, HiQDev (http://hiqdev.com/)
 */

namespace hiqdev\menumanager\widgets;

use yii\base\Widget;

class DetailMenu extends Widget
{
    public $options = [];

    public $items = [];

    public $model;

    public $menuClass = Menu::class;

    public function run()
    {
        $class = $this->menuClass;
        return $class::widget([
            'items' => $this->items,
            'options' => array_merge(['class' => 'nav'], $this->options),
        ]);
    }
}
