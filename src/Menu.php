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

use Yii;

/**
 * Menu is a manageable collection of child [[Menu]]s.
 */
class Menu extends \hiqdev\yii2\collection\Object
{
    /**
     * {@inheritdoc}
     */
    protected $_itemClass = self::class;

    public function setSaveToView($name)
    {
        Yii::$app->view->$name = $this;
    }

    public $label;
    public $url;
    public $icon;
    public $active;
    public $visible;
    public $options;

    /**
     * @var string parent menu.
     */
    public $_parent;

    /**
     * Getter for addTo.
     * @return string add to
     */
    public function getParent()
    {
        return $this->_parent;
    }

    public function setAdd(array $items)
    {
        foreach ($items as $item) {
            $menu = Yii::createObject($item['menu']);
            $this->addItems($menu->getItems(), isset($item['where']) ? $item['where'] : null);
        }
    }

    /**
     * Default items.
     *
     * @return array
     */
    public function items()
    {
        return [];
    }

    /**
     * Inits with default items.
     */
    public function init()
    {
        $this->addItems($this->items());
    }

    public function render($options = [])
    {
        if (is_string($options)) {
            $options = ['class' => $options];
        }
        $class = $options['class'] ?: \yii\widgets\Menu::class;
        $options['items'] = $this->getItems();

        return $class::widget($options);
    }

    public static function create(array $config = [])
    {
        $config['class'] = get_called_class();

        return Yii::createObject($config);
    }
}
