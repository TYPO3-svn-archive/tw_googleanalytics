<?php

########################################################################
# Extension Manager/Repository config file for ext "tw_googleanalytics".
#
# Auto generated 09-02-2013 15:51
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'tollwerk Google Analytics',
	'description' => 'Frontend plugin for advanced Google Analytics integration with a wide range of features including pageView and event tracking, custom variables, cross domain tracking, tracking of file downloads and external domains and much more. The extension is built on extbase / fluid and supports the asynchronous tracking code only (ga.js).',
	'category' => 'plugin',
	'author' => 'Joschi Kuphal',
	'author_email' => 'joschi@tollwerk.de',
	'author_company' => 'tollwerk® GmbH',
	'shy' => '',
	'priority' => '',
	'module' => '',
	'state' => 'stable',
	'internal' => '',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearCacheOnLoad' => 0,
	'lockType' => '',
	'version' => '1.0.2',
	'constraints' => array(
		'depends' => array(
			'extbase' => '1.3.0-0.0.0',
			'fluid' => '1.3.0-0.0.0',
			'php' => '5.2.0-0.0.0',
			'typo3' => '4.5.0-0.0.0',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:16:{s:12:"ext_icon.gif";s:4:"fb0a";s:17:"ext_localconf.php";s:4:"367c";s:14:"ext_tables.php";s:4:"3b80";s:14:"ext_tables.sql";s:4:"194c";s:48:"Classes/Controller/GoogleanalyticsController.php";s:4:"9193";s:37:"Classes/ViewHelpers/RawViewHelper.php";s:4:"78aa";s:38:"Configuration/TypoScript/constants.txt";s:4:"f91c";s:34:"Configuration/TypoScript/setup.txt";s:4:"015d";s:46:"Resources/Private/Language/de.locallang_db.xlf";s:4:"4c75";s:46:"Resources/Private/Language/fr.locallang_db.xlf";s:4:"2d5f";s:40:"Resources/Private/Language/locallang.xlf";s:4:"18b7";s:43:"Resources/Private/Language/locallang_db.xlf";s:4:"ace3";s:54:"Resources/Private/Templates/Googleanalytics/Track.html";s:4:"c14c";s:41:"Resources/Public/Js/tw_googleanalytics.js";s:4:"8e23";s:14:"doc/manual.pdf";s:4:"dac6";s:14:"doc/manual.sxw";s:4:"ec1c";}',
);

?>