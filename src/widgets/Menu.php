<?php

namespace hiqdev\menumanager\widgets;

use Closure;
use Yii;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;
use yii\helpers\Html;

/**
 * Enhanced menu widget with icons, visible callback
 */
class Menu extends \yii\widgets\Menu
{

    /**
     * @var string Class that will be added for parents "li"
     */
    public $treeClass = 'treeview';

    /**
     * @var boolean activate parents by default
     */
    public $activateParents = true;

    /**
     * @var string default icon class
     */
    public $defaultIcon = 'fa-angle-double-right';

    /**
     * @inheritdoc
     */
    protected function renderItems($items)
    {
        $n = count($items);
        $lines = [];
        foreach ($items as $i => $item) {
            $options = array_merge($this->itemOptions, ArrayHelper::getValue($item, 'options', []));
            $tag = ArrayHelper::remove($options, 'tag', 'li');
            $class = [];
            if ($item['active']) {
                $class[] = $this->activeCssClass;
            }
            if ($i === 0 && $this->firstItemCssClass !== null) {
                $class[] = $this->firstItemCssClass;
            }
            if ($i === $n - 1 && $this->lastItemCssClass !== null) {
                $class[] = $this->lastItemCssClass;
            }
            $menu = $this->renderItem($item);
            if (!empty($item['items'])) {
                $class[] = $this->treeClass;
                $menu .= strtr($this->submenuTemplate, [
                    '{items}' => $this->renderItems($item['items']),
                ]);
            }
            if (!empty($class)) {
                if (empty($options['class'])) {
                    $options['class'] = implode(' ', $class);
                } else {
                    $options['class'] .= ' ' . implode(' ', $class);
                }
            }
            $lines[] = Html::tag($tag, $menu, $options);
        }

        return implode("\n", $lines);
    }

    /**
     * @inheritdoc
     */
    protected function renderItem($item)
    {
        return strtr(ArrayHelper::getValue($item, 'template', isset($item['url']) ? $this->linkTemplate : $this->labelTemplate), [
            '{url}'   => isset($item['url']) ? Url::to($item['url']) : null,
            '{icon}'  => $item['icon'] === false ? '' : sprintf("<i class=\"%s\"></i>", static::iconClass($item['icon'] ?: $this->defaultIcon)),
            '{label}' => $item['label'],
            '{arrow}' => !empty($item['items']) ? '<i class="fa pull-right fa-angle-left"></i>' : '',
        ]);
    }

    public static function iconClass($icon)
    {
        return (substr($icon, 0, 3) === 'fa-' ? 'fa ' : '') . $icon;
    }

    /**
     * @inheritdoc
     */
    protected function normalizeItems($items, &$active)
    {
        foreach ($items as $i => &$item) {
            if ($item['visible'] instanceof Closure) {
                $item['visible'] = call_user_func($item['visible']);
            }
        }
        return parent::normalizeItems($items, $active);
    }

}
