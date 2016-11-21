<?php

namespace hiqdev\menumanager\widgets;

use yii\base\Widget;

class DetailMenu extends Widget
{
    public $options = [];

    public $items = [];

    public $model;

    public $menuClass = Menu::class;

    public function run()
    {
        $class = $this->menuClass;
        return $class::widget([
            'items' => $this->items,
            'options' => array_merge(['class' => 'nav'], $this->options),
        ]);
    }
}
