<?php

########################################################################
# Extension Manager/Repository config file for ext: "wt_gallery"
#
# Auto generated 05-04-2009 22:04
#
# Manual updates:
# Only the data in the array - anything else is removed by next write.
# "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'wt_gallery',
	'description' => 'Easy to use gallery with separate single- , category- and listview. Configurable via typoscript, show EXIF or TXT information, Cooliris (Piclens) and Imagelightbox integration, see screenshots in manual!',
	'category' => 'plugin',
	'shy' => 0,
	'version' => '3.0.6',
	'dependencies' => 'wt_doorman',
	'conflicts' => '',
	'priority' => '',
	'loadOrder' => '',
	'module' => '',
	'state' => 'alpha',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearcacheonload' => 0,
	'lockType' => '',
	'author' => 'Alex Kellner',
	'author_email' => 'alexander.kellner@einpraegsam.net',
	'author_company' => '',
	'CGLcompliance' => '',
	'CGLcompliance_note' => '',
	'constraints' => array(
		'depends' => array(
			'php' => '4.2.0-0.0.0',
			'typo3' => '3.5.0-0.0.0',
			'wt_doorman' => '0.2.1-0.0.0',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:33:{s:12:"ext_icon.gif";s:4:"bbfc";s:17:"ext_localconf.php";s:4:"39e5";s:14:"ext_tables.php";s:4:"cc70";s:28:"ext_typoscript_constants.txt";s:4:"24c5";s:24:"ext_typoscript_setup.txt";s:4:"63c4";s:13:"locallang.xml";s:4:"06c3";s:16:"locallang_db.xml";s:4:"4b74";s:14:"doc/manual.sxw";s:4:"b445";s:14:"pi1/ce_wiz.gif";s:4:"bf2c";s:35:"pi1/class.tx_wtgallery_category.php";s:4:"1b69";s:35:"pi1/class.tx_wtgallery_cooliris.php";s:4:"8092";s:31:"pi1/class.tx_wtgallery_list.php";s:4:"22ce";s:30:"pi1/class.tx_wtgallery_pi1.php";s:4:"5177";s:38:"pi1/class.tx_wtgallery_pi1_wizicon.php";s:4:"e978";s:33:"pi1/class.tx_wtgallery_single.php";s:4:"9596";s:13:"pi1/clear.gif";s:4:"cc11";s:17:"pi1/locallang.xml";s:4:"a07e";s:22:"be/flexform_ds_pi1.xml";s:4:"bf2a";s:47:"lib/class.tx_wtgallery_category_pagebrowser.php";s:4:"dd8c";s:38:"lib/class.tx_wtgallery_coolirisrss.php";s:4:"4052";s:30:"lib/class.tx_wtgallery_div.php";s:4:"79d3";s:41:"lib/class.tx_wtgallery_dynamicmarkers.php";s:4:"357a";s:43:"lib/class.tx_wtgallery_list_pagebrowser.php";s:4:"4a08";s:43:"lib/user_wtgallery_category_pagebrowser.php";s:4:"6269";s:39:"lib/user_wtgallery_list_pagebrowser.php";s:4:"24c2";s:23:"templates/category.html";s:4:"6bbe";s:23:"templates/cooliris.html";s:4:"e82c";s:19:"templates/list.html";s:4:"8a9c";s:21:"templates/single.html";s:4:"1730";s:31:"files/css/wtgallery_example.css";s:4:"1a88";s:28:"files/css/wtgallery_main.css";s:4:"8927";s:22:"files/swf/cooliris.swf";s:4:"1e98";s:22:"files/static/setup.txt";s:4:"e0ff";}',
	'suggests' => array(
	),
);

?>