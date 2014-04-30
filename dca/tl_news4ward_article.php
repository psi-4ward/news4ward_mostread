<?php

/**
 * @copyright 4ward.media 2014 <http://www.4wardmedia.de>
 * @author Christoph Wiechert <wio@psitrax.de>
 */

$GLOBALS['TL_DCA']['tl_news4ward_article']['fields']['hits'] = array
(
    'label'         => &$GLOBALS['TL_LANG']['tl_news4ward_article']['hits'],
    'inputType'     => 'text',
    'exlude'        => true,
    'sorting'       => true,
    'default'       => 0,
    'eval'          => array('mandatory'=>true, 'rgxp'=>'digit' , 'tl_class'=>'w50')
);

$GLOBALS['TL_DCA']['tl_news4ward_article']['palettes']['default'] = str_replace(';{layout_legend}', ',hits;{layout_legend}', $GLOBALS['TL_DCA']['tl_news4ward_article']['palettes']['default']);