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
 *     'url'    => ['/site/index'],
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
class MenuManager extends \hiqdev\yii2\collection\Manager
{
    /**
     * {@inheritdoc}
     */
    protected $_itemClass = Menu::class;

    public function getItem($name)
    {
        $item = &$this->_items[$name];
        if (is_string($item)) {
            $item = ['class' => $item];
        }
        $item = $this->createItem($name, $item ?: []);

        return $item;
    }

    public function render($name, $options = [])
    {
        return $this->get($name)->render($options);
    }
}

