<?php


if (class_exists('NamespaceClassLoader')) {
    NamespaceClassLoader::add('Fontawesome', 'system/modules/xfontawesome/library');
}
/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Classes
    'Fontawesome\FontAwesome'     => 'system/modules/xfontawesome/library/Fontawesome/classes/FontAwesome.php',
));
