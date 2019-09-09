<?php

namespace Chibko\Contao\Fontawesome;

class FontAwesome
{
    public function checkFontAwesome(\PageModel $objPage, \LayoutModel $objLayout, \PageRegular $objPageRegular)
    {
        if ($objLayout->fontawesome) {
            $GLOBALS['TL_HEAD'][] = $objLayout->fontawesome_kiturl;
        }
    }
}


?>