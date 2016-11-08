<?php

namespace hiqdev\menumanager\widgets;

use yii\widgets\Menu;
use yii\helpers\Html;

class MenuButton extends \yii\base\Widget
{
    public $icon = '<i class="fa fa-ellipsis-v"></i>';

    public $items;

    public $menuClass = Menu::class;

    public function run()
    {
        $class = $this->menuClass;
        $html = Html::beginTag('div', ['class' => 'dropdown']);
        $html .= Html::a($this->icon, '#', ['data-toggle' => 'dropdown']);
        $html .= $class::widget([
            'items' => $this->items,
            'options' => [
                'class' => 'dropdown-menu',
            ],
        ]);
        $html .= Html::endTag('div');

        return $html;
    }
}
