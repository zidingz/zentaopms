<?php
/**
 * The browse view file of repo module of ZenTaoPMS.
 *
 * @copyright   Copyright 2009-2017 青岛易软天创网络科技有限公司(QingDao Nature Easy Soft Network Technology Co,LTD, www.cnezsoft.com)
 * @license     ZPL (http://zpl.pub/page/zplv12.html)
 * @author      Gang Liu <liugang@cnezsoft.com>
 * @package     repo
 * @version     $Id$
 * @link        http://www.zentao.net
 */
?>
<?php include '../../common/view/header.html.php';?>
<div id="mainMenu" class="clearfix">
  <div class='pull-right'>
    <?php if(common::hasPriv('repo', 'create')) echo html::a(helper::createLink('repo', 'create'), "<i class='icon icon-plus'></i> " . $this->lang->repo->create, '', "class='btn btn-primary'");?>
  </div>
</div>
<div id='mainContent'>
  <form class='main-table' id='ajaxForm' method='post'>
    <table id='repoList' class='table has-sort-head table-fixed'>
      <thead>
        <tr>
          <?php $vars = "orderBy=%s&recTotal={$pager->recTotal}&recPerPage={$pager->recPerPage}&pageID={$pager->pageID}"; ?>
          <th class='w-60px'><?php common::printOrderLink('id', $orderBy, $vars, $lang->repo->id); ?></th>
          <th class='w-120px'><?php common::printOrderLink('SCM', $orderBy, $vars, $lang->repo->type); ?></th>
          <th class='w-200px text-left'><?php common::printOrderLink('name', $orderBy, $vars, $lang->repo->name); ?></th>
          <th class='w-400px text-left'><?php common::printOrderLink('product', $orderBy, $vars, $lang->repo->product); ?></th>
          <th class='text-left'><?php echo $lang->repo->path; ?></th>
          <th class='w-100px c-actions-4'><?php echo $lang->actions; ?></th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($repoList as $repo):?>
        <tr>
          <td class='text-center'><?php echo $repo->id; ?></td>
          <td class='text'><?php echo zget($lang->repo->scmList, $repo->SCM); ?></td>
          <td class='text' title='<?php echo $repo->name; ?>'><?php echo html::a($this->createLink('repo', 'browse', "repoID={$repo->id}&branchID=&objectID=$objectID"), $repo->name);?></td>
          <td class='text'>
          <?php
          $productList = explode(',', str_replace(' ', '', $repo->product));
          if(isset($productList) and $productList[0])
          {
              foreach($productList as $productID) echo ' ' . html::a($this->createLink('product', 'browse', "productID=$productID"), zget($products, $productID, $productID));
          }
          ?>
          </td>
          <td class='text' title='<?php echo $repo->path; ?>'><?php echo $repo->path; ?></td>
          <td class='text-left c-actions'>
            <?php
            common::printIcon('repo', 'edit', "repoID=$repo->id&objectID=$objectID", '', 'list', 'edit');
            if(strtolower($repo->SCM) == "gitlab") common::printIcon('gitlab', 'importIssue', "repo={$repo->id}", '', 'list', 'link');
            if(common::hasPriv('repo', 'delete')) echo html::a($this->createLink('repo', 'delete', "repoID=$repo->id&objectID=$objectID"), '<i class="icon-trash"></i>', 'hiddenwin', "title='{$lang->repo->delete}' class='btn'");
            ?>
          </td>
        </tr>
        <?php endforeach;?>
      </tbody>
    </table>
    <?php if($repoList):?>
    <div class='table-footer'><?php $pager->show('rignt', 'pagerjs');?></div>
    <?php endif;?>
  </form>
</div>
<?php include '../../common/view/footer.html.php'; ?>
