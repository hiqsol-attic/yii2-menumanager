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
use yii\base\BootstrapInterface;

/**
 * Menu Manager.
 *
 * Configuration:
 * ```
 * 'components' => [
 *     'menuManager' => [
 *         'class' => 'hiqdev\menumanager\MenuManager',
 *         'items' => [
 *             'main'        => [],
 *             'sidebar'     => [
 *                 'items' => [
 *                     'header' => [
 *                         'label' => 'MAIN NAVIGATION',
 *                         'options' => ['class' => 'header'],
 *                     ],
 *                 ],
 *             ],
 *             'breadcrumbs' => [],
 *         ],
 *     ]
 * ]
 * ```
 *
 * Usage:
 * ```
 * Yii::$app->menuManager->sidebar->add([
 *     'label'  => 'Dashboard',
 *     'url'    => ['/hipanel'],
 *     'icon'   => 'fa-dashboard',
 *     'active' => Yii::$app->request->url === Yii::$app->homeUrl
 * ],['after'=>'header']);
 *
 * Yii::$app->menuManager->breadcrumbs->setItems([
 *     ['label' => 'Domains', 'url' => ['index']],
 *     $this->title,
 * ]);
 * ```
 */
class MenuManager extends \hiqdev\yii2\collection\Manager implements BootstrapInterface
{
    /**
     * {@inheritdoc}
     */
    protected $_itemClass = 'hiqdev\menumanager\Menu';

    /**
     * @var bool is already bootstrapped.
     */
    protected $_isBootstrapped = false;

    public $menus = [];

    /**
     * {@inheritdoc}
     */
    public function bootstrap($app)
    {
        if ($this->_isBootstrapped) {
            return;
        }
        foreach ($this->menus as $config) {
            $menu = Yii::createObject($config);
            $this->{$menu->addTo}->addItems($menu->items, $menu->where);
        }
        $this->toArray();

        $this->_isBootstrapped = true;
    }
}
