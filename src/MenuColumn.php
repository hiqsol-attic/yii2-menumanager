<?php
/**
 * Menu Manager for Yii2
 *
 * @link      https://github.com/hiqdev/yii2-menumanager
 * @package   yii2-menumanager
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015-2016, HiQDev (http://hiqdev.com/)
 */

namespace hiqdev\menumanager;

use hiqdev\menumanager\widgets\MenuButton;
use yii\grid\DataColumn;

class MenuColumn extends DataColumn
{
    /**
     * {@inheritdoc}
     */
    public $format = 'raw';

    /**
     * {@inheritdoc}
     */
    public $header = '&nbsp;';

    /**
     * {@inheritdoc}
     */
    public $contentOptions = [
        'class' => 'text-center',
    ];

    public $menuClass;

    /**
     * {@inheritdoc}
     */
    public function getDataCellValue($model, $key, $index)
    {
        if ($this->value !== null) {
            return parent::getDataCellValue($model, $key, $index);
        } else {
            $class = $this->menuClass;
            return $class::widget(['model' => $model], MenuButton::class);
        }
    }
}
