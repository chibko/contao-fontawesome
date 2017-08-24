<?php


namespace Fontawesome;

class FontAwesome
{
	public function checkFontAwesome(\PageModel $objPage, \LayoutModel $objLayout, \PageRegular $objPageRegular)
	{
		
        if($objLayout->fontawesome)		{
			$GLOBALS['TL_CSS'][] = 'system/modules/xfontawesome/assets/css/font-awesome.min.css|static';
		} 
	}
}


?>