hiqdev/yii2-menumanager
-----------------------

## [0.0.2] - 2016-12-06

- Changed - redone Menu and MenuManager
    - [707f555] 2016-12-06 removed Menu::setSaveToView [sol@hiqdev.com]
    - [38dccd9] 2016-12-06 csfixed [sol@hiqdev.com]
    - [98935b0] 2016-11-29 Added non-breaking space to link template [andreyklochok@gmail.com]
    - [49c84d2] 2016-11-25 Menu methods renamed: add() -> addMenus(), merge() -> mergeMenus() [d.naumenko.a@gmail.com]
    - [5f4b586] 2016-11-24 Refactored Menu::add, added Menu::merge. PHPDocs enhanced [d.naumenko.a@gmail.com]
    - [664097c] 2016-11-23 PHPDocs updated [d.naumenko.a@gmail.com]
    - [ae21195] 2016-11-21 Changed linkTemplate, added {icon} [andreyklochok@gmail.com]
    - [49417ea] 2016-11-21 Changed icons [andreyklochok@gmail.com]
    - [b35fc48] 2016-11-21 Added fa-fw if icon class is fontawesome [andreyklochok@gmail.com]
    - [1614714] 2016-11-16 used di definitions when rendering menu with use of callStatic [sol@hiqdev.com]
    - [2140cb4] 2016-11-09 Changed menu class [andreyklochok@gmail.com]
    - [0fee9a1] 2016-11-09 Changed link template, added linkOptions to renderItem method [andreyklochok@gmail.com]
    - [bdc864f] 2016-11-08 + MenuButton widget [sol@hiqdev.com]
    - [eef44ab] 2016-11-08 + Menu::create static function [sol@hiqdev.com]
    - [561d9d5] 2016-11-08 Added check if .table-responsive has horizontal scroll and added to .dropdown-menu position relative. [andreyklochok@gmail.com]
    - [a48d14c] 2016-10-11 removed `array_values` when getting items [sol@hiqdev.com]
    - [a1502a0] 2016-09-23 Fixed active parent items [andreyklochok@gmail.com]
    - [f46b3bf] 2016-09-22 added `Menu::setAdd` for extending menu [sol@hiqdev.com]
    - [429082d] 2016-09-22 removed minimum-stability dev [sol@hiqdev.com]
    - [3cf4d8f] 2016-09-22 BC BREAK simplified Menu and MenuManager [sol@hiqdev.com]
    - [14fc642] 2016-09-22 allowed yii2-collection dev version [sol@hiqdev.com]
- Added DetailMenu
    - [e744f34] 2016-11-21 Added DetailMenu [andreyklochok@gmail.com]
- Added view rendering in Menu
    - [b467f9e] 2016-11-15 + view rendering at Menu [sol@hiqdev.com]
    - [50570cd] 2016-11-10 Change actions from dropdown to popver [andreyklochok@gmail.com]
- Added MenuColumn
    - [eaf3786] 2016-11-08 Added MenuColumn [andreyklochok@gmail.com]
- Added MenuButton
    - [065b808] 2016-11-08 Changed MenuButton style [andreyklochok@gmail.com]

## [0.0.1] - 2016-08-22

- Added `render()`
    - [256e474] 2016-08-22 csfixed [sol@hiqdev.com]
    - [ab3794e] 2016-08-22 changed to `chkipper` [sol@hiqdev.com]
    - [9bae54b] 2016-08-19 + render() to Menu class [sol@hiqdev.com]
    - [8160f97] 2016-08-19 added render and redone bootstrapping to initing [sol@hiqdev.com]
- Changed to `composer-config-plugin` instead of `yii2-pluginmanager`
    - [917ae49] 2016-08-19 + hisite config [sol@hiqdev.com]
    - [09f3463] 2016-08-11 removed all Yii::t [sol@hiqdev.com]
    - [e262927] 2016-05-18 removed use of pluginManager [sol@hiqdev.com]
    - [5b00b14] 2016-02-25 removed dependency on plugin manager [sol@hiqdev.com]
    - [97de71f] 2016-02-25 inited tests [sol@hiqdev.com]
    - [8b713be] 2016-02-25 phpcsfixed [sol@hiqdev.com]
    - [3cc386c] 2016-02-25 rehideved [sol@hiqdev.com]
    - [6a3ea2f] 2016-01-25 Try to guess which module is parent for current page and ramin accordion opened [andreyklochok@gmail.com]
    - [6865ada] 2015-11-23 Changed namespace to yii2-collection [d.naumenko.a@gmail.com]
    - [ecd10d8] 2015-11-05 Placeholders for cacheing removed [d.naumenko.a@gmail.com]
- Added Menu widget
    - [b17cebe] 2015-09-14 + Menu widget [sol@hiqdev.com]
- Added Menu::items() for defining default items with function when statically not enough
    - [3059361] 2015-09-14 + items() for defining default items with function when statically not enough [sol@hiqdev.com]
    - [bb28b9f] 2015-08-26 php-cs-fixed [sol@hiqdev.com]
    - [c310c30] 2015-08-26 moved to src [sol@hiqdev.com]
    - [79090a7] 2015-08-26 fixed PHP warning [sol@hiqdev.com]
- Added basics
    - [0f5e627] 2015-06-12 hideved [sol@hiqdev.com]
    - [14a43d5] 2015-06-12 hideved [sol@hiqdev.com]
    - [aceb5f7] 2015-06-12 renamed to MenuManager.php [sol@hiqdev.com]
    - [f9ee03d] 2015-05-20 + prevent double bootstrap [sol@hiqdev.com]
    - [5576bf7] 2015-05-15 + require plugin manager [sol@hiqdev.com]
    - [6a64d62] 2015-05-15 changed for plugin manager [sol@hiqdev.com]
    - [1377a4b] 2015-05-14 first working version [sol@hiqdev.com]
    - [23422b3] 2015-04-23 try [sol@hiqdev.com]
    - [a80c87e] 2015-04-23 try [sol@hiqdev.com]
    - [2168a4f] 2015-04-23 try [sol@hiqdev.com]
    - [5ab9d61] 2015-04-23 try [sol@hiqdev.com]
    - [d73b106] 2015-04-23 + require hiqdev/yii2-collection [sol@hiqdev.com]
    - [d6ad547] 2015-04-22 doc [sol@hiqdev.com]
    - [e30a46d] 2015-04-22 inited [sol@hiqdev.com]

## [Development started] - 2015-04-22

[5b00b14]: https://github.com/hiqdev/yii2-menumanager/commit/5b00b14
[97de71f]: https://github.com/hiqdev/yii2-menumanager/commit/97de71f
[8b713be]: https://github.com/hiqdev/yii2-menumanager/commit/8b713be
[3cc386c]: https://github.com/hiqdev/yii2-menumanager/commit/3cc386c
[6a3ea2f]: https://github.com/hiqdev/yii2-menumanager/commit/6a3ea2f
[6865ada]: https://github.com/hiqdev/yii2-menumanager/commit/6865ada
[ecd10d8]: https://github.com/hiqdev/yii2-menumanager/commit/ecd10d8
[b17cebe]: https://github.com/hiqdev/yii2-menumanager/commit/b17cebe
[3059361]: https://github.com/hiqdev/yii2-menumanager/commit/3059361
[bb28b9f]: https://github.com/hiqdev/yii2-menumanager/commit/bb28b9f
[c310c30]: https://github.com/hiqdev/yii2-menumanager/commit/c310c30
[79090a7]: https://github.com/hiqdev/yii2-menumanager/commit/79090a7
[0f5e627]: https://github.com/hiqdev/yii2-menumanager/commit/0f5e627
[14a43d5]: https://github.com/hiqdev/yii2-menumanager/commit/14a43d5
[aceb5f7]: https://github.com/hiqdev/yii2-menumanager/commit/aceb5f7
[f9ee03d]: https://github.com/hiqdev/yii2-menumanager/commit/f9ee03d
[5576bf7]: https://github.com/hiqdev/yii2-menumanager/commit/5576bf7
[6a64d62]: https://github.com/hiqdev/yii2-menumanager/commit/6a64d62
[1377a4b]: https://github.com/hiqdev/yii2-menumanager/commit/1377a4b
[23422b3]: https://github.com/hiqdev/yii2-menumanager/commit/23422b3
[a80c87e]: https://github.com/hiqdev/yii2-menumanager/commit/a80c87e
[2168a4f]: https://github.com/hiqdev/yii2-menumanager/commit/2168a4f
[5ab9d61]: https://github.com/hiqdev/yii2-menumanager/commit/5ab9d61
[d73b106]: https://github.com/hiqdev/yii2-menumanager/commit/d73b106
[d6ad547]: https://github.com/hiqdev/yii2-menumanager/commit/d6ad547
[e30a46d]: https://github.com/hiqdev/yii2-menumanager/commit/e30a46d
[9bae54b]: https://github.com/hiqdev/yii2-menumanager/commit/9bae54b
[8160f97]: https://github.com/hiqdev/yii2-menumanager/commit/8160f97
[917ae49]: https://github.com/hiqdev/yii2-menumanager/commit/917ae49
[09f3463]: https://github.com/hiqdev/yii2-menumanager/commit/09f3463
[e262927]: https://github.com/hiqdev/yii2-menumanager/commit/e262927
[256e474]: https://github.com/hiqdev/yii2-menumanager/commit/256e474
[ab3794e]: https://github.com/hiqdev/yii2-menumanager/commit/ab3794e
[429082d]: https://github.com/hiqdev/yii2-menumanager/commit/429082d
[3cf4d8f]: https://github.com/hiqdev/yii2-menumanager/commit/3cf4d8f
[38dccd9]: https://github.com/hiqdev/yii2-menumanager/commit/38dccd9
[98935b0]: https://github.com/hiqdev/yii2-menumanager/commit/98935b0
[49c84d2]: https://github.com/hiqdev/yii2-menumanager/commit/49c84d2
[5f4b586]: https://github.com/hiqdev/yii2-menumanager/commit/5f4b586
[664097c]: https://github.com/hiqdev/yii2-menumanager/commit/664097c
[ae21195]: https://github.com/hiqdev/yii2-menumanager/commit/ae21195
[49417ea]: https://github.com/hiqdev/yii2-menumanager/commit/49417ea
[b35fc48]: https://github.com/hiqdev/yii2-menumanager/commit/b35fc48
[e744f34]: https://github.com/hiqdev/yii2-menumanager/commit/e744f34
[1614714]: https://github.com/hiqdev/yii2-menumanager/commit/1614714
[b467f9e]: https://github.com/hiqdev/yii2-menumanager/commit/b467f9e
[50570cd]: https://github.com/hiqdev/yii2-menumanager/commit/50570cd
[2140cb4]: https://github.com/hiqdev/yii2-menumanager/commit/2140cb4
[0fee9a1]: https://github.com/hiqdev/yii2-menumanager/commit/0fee9a1
[561d9d5]: https://github.com/hiqdev/yii2-menumanager/commit/561d9d5
[065b808]: https://github.com/hiqdev/yii2-menumanager/commit/065b808
[eaf3786]: https://github.com/hiqdev/yii2-menumanager/commit/eaf3786
[bdc864f]: https://github.com/hiqdev/yii2-menumanager/commit/bdc864f
[eef44ab]: https://github.com/hiqdev/yii2-menumanager/commit/eef44ab
[a48d14c]: https://github.com/hiqdev/yii2-menumanager/commit/a48d14c
[a1502a0]: https://github.com/hiqdev/yii2-menumanager/commit/a1502a0
[f46b3bf]: https://github.com/hiqdev/yii2-menumanager/commit/f46b3bf
[14fc642]: https://github.com/hiqdev/yii2-menumanager/commit/14fc642
[707f555]: https://github.com/hiqdev/yii2-menumanager/commit/707f555
