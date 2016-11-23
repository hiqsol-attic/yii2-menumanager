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

use ReflectionClass;
use Yii;
use yii\base\InvalidConfigException;
use yii\base\View;

/**
 * Menu is a manageable collection of child [[Menu]]s.
 */
class Menu extends \hiqdev\yii2\collection\Object implements \yii\base\ViewContextInterface
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
     * Returns default items defined in class
     *
     * @return array
     */
    public function items()
    {
        return [];
    }

    /**
     * Initializes object with default items.
     *
     * Don not forget to call parent implementation when overriding this method.
     */
    public function init()
    {
        parent::init();

        $this->addItems($this->items());
    }

    /**
     * Renders menu with given options.
     *
     * @param mixed $options
     * @return string rendered menu.
     */
    public function render($options = [])
    {
        if (is_string($options)) {
            $options = ['class' => $options];
        }
        if (empty($options['class'])) {
            $options['class'] = \yii\widgets\Menu::class;
        }
        $options['items'] = $this->getItems();

        return static::callStatic('widget', $options);
    }

    /**
     * Calls static method of class from config.
     * Uses Yii container to get class definition.
     *
     * @param string $method
     * @param mixed $config
     * @throws InvalidConfigException
     * @return mixed
     */
    public static function callStatic($method, $config)
    {
        if (is_string($config)) {
            $config = ['class' => $config];
        }
        if (empty($config['class'])) {
            throw new InvalidConfigException('no class given');
        }
        $class = $config['class'];
        $container = Yii::$container;
        if ($container->has($class)) {
            $definition = $container->getDefinitions()[$class];
            if (is_array($definition)) {
                $config = array_merge($definition, $config);
                $class = $definition['class'];
            } else {
                $class = $definition;
            }
        }
        unset($config['class']);

        return call_user_func([$class, $method], $config);
    }

    /**
     * Creates menu and sets $config
     *
     * @param array $config
     * @return static
     */
    public static function create(array $config = [])
    {
        $config['class'] = get_called_class();

        return Yii::createObject($config);
    }

    /**
     * Renders a view.
     * @param string $view the view name.
     * @param array $params the parameters (name-value pairs) to be available in the view.
     * @return string the rendering result.
     */
    public function renderView($view, $params = [])
    {
        return $this->getView()->render($view, $params, $this);
    }

    /**
     * @var View the view object to be used to render views.
     */
    private $_view;

    /**
     * Returns the view object to be used to render views or view files.
     * If not set, it will default to the "view" application component.
     * @return View|\yii\web\View the view object to be used to render views.
     */
    public function getView()
    {
        if ($this->_view === null) {
            $this->_view = Yii::$app->getView();
        }
        return $this->_view;
    }

    /**
     * Sets the view object to be used by this menu.
     * @param View $view the view object to be used to render views.
     */
    public function setView($view)
    {
        $this->_view = $view;
    }

    /**
     * @var string the root directory that contains view files for this menu.
     */
    protected $_viewPath;

    /**
     * Sets the directory that contains the view files.
     * @param string $path the root directory of view files.
     */
    public function setViewPath($path)
    {
        $this->_viewPath = Yii::getAlias($path);
    }

    /**
     * Returns the directory containing view files for this menu.
     * The default implementation returns `views/menus` in the current module.
     * @return string the directory containing the view files for this controller.
     */
    public function getViewPath()
    {
        if ($this->_viewPath === null) {
            $ref = new ReflectionClass($this);
            $this->_viewPath = dirname(dirname($ref->getFileName())) . '/views/menus';
        }
        return $this->_viewPath;
    }

}
