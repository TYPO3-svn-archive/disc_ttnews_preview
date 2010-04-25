<?php

########################################################################
# Extension Manager/Repository config file for ext "disc_ttnews_preview".
#
# Auto generated 25-04-2010 12:24
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'DISC :: News Preview in Backend',
	'description' => 'Possibility to preview newsitem in the backend.',
	'category' => 'be',
	'shy' => 0,
	'version' => '0.1.0',
	'dependencies' => '',
	'conflicts' => '',
	'priority' => '',
	'loadOrder' => '',
	'module' => '',
	'state' => 'beta',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearcacheonload' => 0,
	'lockType' => '',
	'author' => 'Jon HÃ¸rup Langeland',
	'author_email' => 'kemo@discworld.dk',
	'author_company' => '',
	'CGLcompliance' => '',
	'CGLcompliance_note' => '',
	'constraints' => array(
		'depends' => array(
			'tt_news' => '',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:11:{s:9:"ChangeLog";s:4:"1243";s:10:"README.txt";s:4:"ee2d";s:21:"ext_conf_template.txt";s:4:"9a4d";s:12:"ext_icon.gif";s:4:"1bdc";s:17:"ext_localconf.php";s:4:"3cf7";s:14:"ext_tables.php";s:4:"9ff0";s:14:"ext_tables.sql";s:4:"c0e5";s:19:"doc/wizard_form.dat";s:4:"7f0c";s:20:"doc/wizard_form.html";s:4:"a244";s:42:"lib/class.tx_discttnewspreview_tcaform.php";s:4:"f765";s:26:"lib/class.ux_tx_ttnews.php";s:4:"80e1";}',
);

?>