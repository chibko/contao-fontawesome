<?php

if (TL_MODE == 'FE') {
    $GLOBALS['TL_HOOKS']['generatePage'][] = array('FontAwesome','checkFontAwesome');
}

if (TL_MODE == 'BE') {
	$GLOBALS['TL_CSS'][] = 'system/modules/xFontawesome/assets/css/font-awesome.min.css|static';
}


