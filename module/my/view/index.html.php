<?php
/**
 * The html template file of index method of index module of ZenTaoPMS.
 *
 * @copyright   Copyright 2009-2015 青岛易软天创网络科技有限公司(QingDao Nature Easy Soft Network Technology Co,LTD, www.cnezsoft.com)
 * @license     ZPL (http://zpl.pub/page/zplv12.html)
 * @author      Chunsheng Wang <chunsheng@cnezsoft.com>
 * @package     ZenTaoPMS
 * @version     $Id: index.html.php 1947 2011-06-29 11:58:03Z wwccss $
 */
?>
<?php include '../../common/view/header.html.php';?>
<?php js::set('skipThemeGuide', $skipThemeGuide);?>
<?php echo $this->fetch('block', 'dashboard', 'module=my');?>
<?php echo html::a($this->createLink('my', 'guidechangeTheme', '', '', true), $lang->theme, '', 'class="iframe hidden" id="changeTheme" data-width="600px"');?>
<?php include '../../common/view/footer.html.php';?>
