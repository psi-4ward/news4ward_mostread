<?php

/**
 * @copyright 4ward.media 2014 <http://www.4wardmedia.de>
 * @author Christoph Wiechert <wio@psitrax.de>
 */

$GLOBALS['TL_HOOKS']['News4wardParseArticle'][] = array('\News4ward\MostreadHelper', 'mostreadParseArticle');
