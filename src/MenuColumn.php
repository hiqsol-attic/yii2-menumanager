<?php

namespace hiqdev\menumanager;

use hiqdev\menumanager\widgets\MenuButton;
use yii\grid\DataColumn;

class MenuColumn extends DataColumn
{
    /**
     * @inheritdoc
     */
    public $format = 'raw';

    /**
     * @inheritdoc
     */
    public $header = '&nbsp;';

    /**
     * @inheritdoc
     */
    public $contentOptions = [
        'class' => 'text-center',
    ];

    public $menuClass;

    /**
     * @inheritdoc
     */
    public function getDataCellValue($model, $key, $index)
    {
        if ($this->value !== null) {
            return parent::getDataCellValue($model, $key, $index);
        } else {
            $class = $this->menuClass;
            return $class::create(['model' => $model])->render(MenuButton::class);
        }
    }
}
