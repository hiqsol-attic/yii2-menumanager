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

class DetailMenu extends \yii\base\Widget
{
    public $options = [];

    public $items = [];

    /**
     * @var string|array class name or configuration for widget to run
     */
    public $widget = null;

    public function run()
    {
        $config = array_merge(Menu::normalizeConfig($this->widget), [
            'items' => $this->items,
            'options' => array_merge(['class' => 'nav'], $this->options),
        ]);

        return call_user_func([$config['class'], 'widget'], $config);
    }
}
