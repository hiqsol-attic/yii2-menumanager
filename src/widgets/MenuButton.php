<?php

namespace hiqdev\menumanager\widgets;

use yii\widgets\Menu;
use yii\helpers\Html;

class MenuButton extends \yii\base\Widget
{
    public $icon = '<i class="fa fa-bars"></i>&nbsp;&nbsp;<span class="caret"></span>';

    public $items;

    public $menuClass = Menu::class;

    public function run()
    {
        $this->getView()->registerCss("
        @media (max-width: 767px) {
            .menu-button .dropdown-menu {
                position: relative!important;
            }
        }
        ");
        $this->getView()->registerJs("
        $.fn.hasScrollBar = function() {
            return this.get(0).scrollWidth > this.width();
        }
        if ($('div.table-responsive').hasScrollBar() === true) {
           $('.menu-button .dropdown-menu').css('position', 'relative'); 
        }
        ");

        $class = $this->menuClass;
        $html = Html::beginTag('div', ['class' => 'menu-button dropdown visible-lg-inline visible-md-inline visible-sm-inline visible-xs-inline']);
        $html .= Html::button($this->icon, [
            'class' => 'btn btn-default btn-xs dropdown-toggle',
            'data-toggle' => 'dropdown',
        ]);
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
