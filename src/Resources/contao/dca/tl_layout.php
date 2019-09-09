<?php

use \Contao\CoreBundle\DataContainer\PaletteManipulator;

PaletteManipulator::create()
    ->addLegend('fontawesome_legend', 'picturefill_legend', PaletteManipulator::POSITION_AFTER)
    ->addField('fontawesome', 'fontawesome_legend', PaletteManipulator::POSITION_APPEND)
    ->addField('fontawesome_kiturl', 'fontawesome', PaletteManipulator::POSITION_AFTER)
    ->applyToPalette('default', 'tl_layout');

$GLOBALS['TL_DCA']['tl_layout']['fields']['fontawesome'] = array
(
    'label' => &$GLOBALS['TL_LANG']['tl_layout']['fontawesome'],
    'exclude' => true,
    'inputType' => 'checkbox',
    'sql' => "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_layout']['fields']['fontawesome_kiturl'] = array
(
    'label' => &$GLOBALS['TL_LANG']['tl_layout']['fontawesome_kiturl'],
    'exclude' => true,
    'inputType' => 'text',
    'sql' => "varchar(255) NOT NULL default ''"
);