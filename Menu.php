<?php
/**
 * @link    http://hiqdev.com/yii2-menumanager
 * @license http://hiqdev.com/yii2-menumanager/license
 * @copyright Copyright (c) 2015 HiQDev
 */

namespace hiqdev\menumanager;

use Yii;

/**
 * Menu is a manageable collection of child [[Menu]]s
 */
class Menu extends \hiqdev\collection\Manager
{

    /**
     * @inheritdoc
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
        $keys = Yii::getObjectVars($this);
        $keys['items'] = $this->_items;
        $fields = [];
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
}
