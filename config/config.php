<?php

if (TL_MODE == 'FE') {
    $GLOBALS['TL_HOOKS']['generatePage'][] = array('Fontawesome\FontAwesome','checkFontAwesome');
}

if (TL_MODE == 'BE') {
	$GLOBALS['TL_CSS'][] = 'system/modules/xfontawesome/assets/css/font-awesome.min.css|static';
}


