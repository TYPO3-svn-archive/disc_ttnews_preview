<?php


class ux_tx_ttnews extends tx_ttnews {
	function main_news($content, $conf) {
		//if($GLOBALS['TSFE']->beUserLogin && t3lib_div::_GP('enable_ttnews_preview'))  {
		if(t3lib_div::_GP('enable_ttnews_preview'))  {
			$GLOBALS['TSFE']->showHiddenRecords = 1;
		}
		return parent::main_news($content,$conf);
	}
	
}
?>
