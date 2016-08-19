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
    protected $_itemClass = 'hiqdev\menumanager\Menu';

    public function setSaveToView($name)
    {
        Yii::$app->view->$name = $this;
    }

    /**
     *
     */
    public $label;
    public $url;
    public $icon;
    public $active;
    public $visible;
    public $options;

    public function fields()
    {
        $keys          = Yii::getObjectVars($this);
        $keys['items'] = $this->_items;
        $fields        = [];
        foreach ($keys as $k => $v) {
            if (!empty($v)) {
                $fields[$k] = $k;
            }
        }

        return $fields;
    }

    public function getItemsArray()
    {
        return $this->toArray()['items'];
    }

    /**
     * @var string which menu to add to.
     */
    protected $_addTo;

    /**
     * Getter for addTo.
     *
     * @return string add to
     */
    public function getAddTo()
    {
        return $this->_addTo;
    }

    /**
     * @var array where in the menu to add to.
     */
    protected $_where = [];

    /**
     * Getter for where.
     *
     * @return array where.
     */
    public function getWhere()
    {
        return $this->_where;
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
        parent::init();
        $this->addItems($this->items());
    }

    public function render($options = [])
    {
        if (!is_array($options)) {
            $options = ['class' => $options];
        }
        $class = $options['class'] ?: \yii\widgets\Menu::class;
        unset($options['class']);
        $options['items'] = array_values($this->getItems());

        return $class::widget($options);
    }
}
