<?php

namespace Chibko\Contao\Fontawesome;

class FontAwesome
{
    public function checkFontAwesome(\PageModel $objPage, \LayoutModel $objLayout, \PageRegular $objPageRegular)
    {
        if ($objLayout->fontawesome) {
            if ($objLayout->bootstrap) {
                $GLOBALS['TL_JS_EXT'][] = $objLayout->fontawesome_kiturl;
            } else {
                $GLOBALS['TL_HEAD'][] = $objLayout->fontawesome_kiturl;
            }
        }
    }
}
?>