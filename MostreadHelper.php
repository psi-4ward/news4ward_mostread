<?php

/**
 * @copyright 4ward.media 2014 <http://www.4wardmedia.de>
 * @author Christoph Wiechert <wio@psitrax.de>
 */

namespace Psi\News4ward;

class MostreadHelper
{

    public function mostreadParseArticle($obj, $article, $objTemplate)
    {
        // Use the aliased class!
        if(! $obj instanceof \News4ward\Module\Reader) return;

        \Database::getInstance()->prepare('UPDATE tl_news4ward_article SET hits = hits + 1 WHERE id=?')->execute($article['id']);
    }

}