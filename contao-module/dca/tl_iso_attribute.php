<?php

/**
 * Palettes
 */
foreach ($GLOBALS['TL_DCA']['tl_iso_attribute']['palettes'] as $attribute => $config) {
    if ($attribute == '__selector__') {
        continue;
    }

    $GLOBALS['TL_DCA']['tl_iso_attribute']['palettes'][$attribute] .= ';{template_legend},customTpl';
}

/**
 * Fields
 */
$GLOBALS['TL_DCA']['tl_iso_attribute']['fields']['customTpl'] = array(
    'label'            => &$GLOBALS['TL_LANG']['tl_iso_attribute']['customTpl'],
    'exclude'          => true,
    'inputType'        => 'select',
    'options_callback' => function () {
        return $this->getTemplateGroup('form_');
    },
    'eval'             => array('includeBlankOption' => true, 'chosen' => true, 'tl_class' => 'w50'),
    'sql'              => "varchar(64) NOT NULL default ''",
);
