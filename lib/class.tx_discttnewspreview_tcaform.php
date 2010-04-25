<?php
class tx_discttnewspreview_tcaform {
	/**
	*@desc
	*/
	function user_preview_form($PA, $fobj){
		GLOBAL $TYPO3_CONF_VARS;
		$conf = unserialize($TYPO3_CONF_VARS['EXT']['extConf']['disc_ttnews_preview']);
		$url = 'http://'.$_SERVER["HTTP_HOST"].'/index.php?id='.$conf['preview_pid'].'&enable_ttnews_preview=1&no_cache=1&tx_ttnews[tt_news]='.intval($PA['row']['uid']);
		$c .= '<div class="typo3-newRecordLink"><a href="'.$url.'" onClick="$(\'tx_discttnewspreview\').show(); $(this).hide(); return true;" class="inlineNewButton" target="tx_discttnewspreview"><img src="sysext/t3skin/icons/gfx/zoom.gif" width="16" height="16" alt="Click here to load preview" />Se preview af siden (husk at gemme siden først)</a></div>';
		$c .= '<iframe style="display: none;" id="tx_discttnewspreview" name="tx_discttnewspreview" width="1024px" height="600px" xsrc="'.$url.'">Din browser understøtter ikke iframes</iframe>';
		return $c;
	}
}
?>