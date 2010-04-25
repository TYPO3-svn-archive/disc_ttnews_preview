<?php
if (!defined ('TYPO3_MODE')) 	die ('Access denied.');


require_once(t3lib_extMgm::extPath($_EXTKEY).'lib/class.tx_discttnewspreview_tcaform.php');
$tempColumns = Array (
	"tx_discttnewspreview_preview" => Array (
		"exclude" => 1,
		"label" => "Preview",
		
		"config" => Array (
			
			"type" => "user",
			"userFunc" => "tx_discttnewspreview_tcaform->user_preview_form",
			
			)
		),
	);


t3lib_div::loadTCA("tt_news");
t3lib_extMgm::addTCAcolumns("tt_news",$tempColumns,1);
t3lib_extMgm::addToAllTCAtypes("tt_news","--div--;Preview,tx_discttnewspreview_preview;;;;1-1-1");


?>