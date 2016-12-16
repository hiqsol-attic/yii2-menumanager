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

use hiqdev\menumanager\Menu as MenuDef;
use yii\base\Widget;

class DetailMenu extends Widget
{
    public $options = [];

    public $items = [];

    /**
     * @var string|array class name or configuration for widget to run
     */
    public $widget = Menu::class;

    public function run()
    {
        return MenuDef::callStatic('widget', $this->widget, [
            'items' => $this->items,
            'options' => array_merge(['class' => 'nav'], $this->options),
        ]);
    }
}
