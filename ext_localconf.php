<?php
if (!defined ('TYPO3_MODE')) 	die ('Access denied.');

$TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/tt_news/pi/class.tx_ttnews.php'] = t3lib_extMgm::extPath('disc_ttnews_preview','lib/class.ux_tx_ttnews.php');
?>