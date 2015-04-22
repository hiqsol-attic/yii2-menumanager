<?php
/**
 * @link    http://hiqdev.com/yii2-menumanager
 * @license http://hiqdev.com/yii2-menumanager/license
 * @copyright Copyright (c) 2015 HiQDev
 */

namespace hiqdev\menumanager;

/**
 * Menu Manager
 *
 * Usage, in config:
 * ~~~
 * 'components' => [
 *     'menuManager' => [
 *         'class' => 'hiqdev\menumanager\Manager',
 *         'items' => [
 *             'main'        => [],
 *             'sidebar'     => [
 *                 'items' => [
 *                     'header' => [
 *                         'label' => Yii::t('app', 'MAIN NAVIGATION'),
 *                         'options' => ['class' => 'header'],
 *                     ],
 *                 ],
 *             ],
 *             'breadcrumbs' => [],
 *         ],
 *     ]
 * ]
 * ~~~
 * Usage, in code:
 * ~~~
 * Yii::$app->menuManager->sidebar->add([
 *     'label'  => 'Dashboard',
 *     'url'    => ['/hipanel'],
 *     'icon'   => 'fa-dashboard',
 *     'active' => Yii::$app->request->url === Yii::$app->homeUrl
 * ],['after'=>'header']);
 *
 * Yii::$app->menuManager->breadcrumbs->madd([
 *     ['label' => Yii::t('app', 'Domains'), 'url' => ['index']],
 *     ['label' => $this->title],
 * ]);
 * ~~~
 */
class Manager extends \hiqdev\collection\Manager
{
    /**
     * @inheritdoc
     */
    public $itemClass = 'hiqdev\menumanager\Menu';
}
