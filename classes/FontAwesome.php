<?php


if (!defined('TL_ROOT')) die('You cannot access this file directly!');


class FontAwesome
{
	public function checkFontAwesome(\PageModel $objPage, \LayoutModel $objLayout, \PageRegular $objPageRegular)
	{
		
        if($objLayout->fontawesome)		{
			$GLOBALS['TL_CSS'][] = 'system/modules/xFontawesome/assets/css/font-awesome.min.css|static';
		} 
	}
}


?>