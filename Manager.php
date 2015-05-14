<?php
/**
 * @link    http://hiqdev.com/yii2-menumanager
 * @license http://hiqdev.com/yii2-menumanager/license
 * @copyright Copyright (c) 2015 HiQDev
 */

namespace hiqdev\menumanager;

use Yii;
use yii\base\BootstrapInterface;
use yii\helpers\StringHelper;

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
 * Yii::$app->menuManager->breadcrumbs->setItems([
 *     ['label' => Yii::t('app', 'Domains'), 'url' => ['index']],
 *     $this->title,
 * ]);
 * ~~~
 */
class Manager extends \hiqdev\collection\Manager implements BootstrapInterface
{
    /**
     * @inheritdoc
     */
    protected $_itemClass = 'hiqdev\menumanager\Menu';

    public function bootstrap($app)
    {
        /// XXX REALLY NEEDS CACHING !!!
        foreach ($app->extensions as $name => $extension) {
            foreach ($extension['alias'] as $alias => $path) {
                $file = "$path/Menu.php";
                if (!file_exists($file)) {
                    continue;
                }
                $class = strtr(substr($alias,1) . '/' . 'Menu', '/','\\');
                $ref = new \ReflectionClass($class);
                if (    $ref->isSubclassOf('hiqdev\menumanager\Menu')
                    &&  $ref->implementsInterface('yii\base\BootstrapInterface')
                ) {
                    Yii::createObject($class)->bootstrap($app);
                }
            }
        }
    }
}
