<?php
/**
 * The common simplified chinese file of ZenTaoPMS.
 *
 * @copyright   Copyright 2009-2015 青岛易软天创网络科技有限公司(QingDao Nature Easy Soft Network Technology Co,LTD, www.cnezsoft.com)
 * @license     ZPL (http://zpl.pub/page/zplv12.html)
 * @author      Chunsheng Wang <chunsheng@cnezsoft.com>
 * @package     ZenTaoPMS
 * @version     $Id: zh-cn.php 5116 2013-07-12 06:37:48Z chencongzhi520@gmail.com $
 * @link        http://www.zentao.net
 */
$lang->arrow     = '&nbsp;<i class="icon-angle-right"></i>&nbsp;';
$lang->colon     = '-';
$lang->comma     = '，';
$lang->dot       = '。';
$lang->at        = ' 于 ';
$lang->downArrow = '↓';
$lang->null      = '空';
$lang->ellipsis  = '…';
$lang->percent   = '%';
$lang->dash      = '-';

$lang->zentaoPMS      = '禅道';
$lang->logoImg        = 'zt-logo.png';
$lang->welcome        = "%s项目管理系统";
$lang->logout         = '退出';
$lang->login          = '登录';
$lang->help           = '帮助';
$lang->aboutZenTao    = '关于禅道';
$lang->profile        = '个人档案';
$lang->changePassword = '更改密码';
$lang->runInfo        = "<div class='row'><div class='u-1 a-center' id='debugbar'>时间: %s 毫秒, 内存: %s KB, 查询: %s.  </div></div>";
$lang->agreement      = "已阅读并同意<a href='http://zpl.pub/page/zplv12.html' target='_blank'>《Z PUBLIC LICENSE授权协议1.2》</a>。<span class='text-danger'>未经许可，不得去除、隐藏或遮掩禅道软件的任何标志及链接。</span>";
$lang->designedByAIUX = "<a href='https://api.zentao.net/goto.php?item=aiux' class='link-aiux' target='_blank'>Designed by <strong>艾体验</strong></a>";

$lang->reset        = '重填';
$lang->cancel       = '取消';
$lang->refresh      = '刷新';
$lang->edit         = '编辑';
$lang->delete       = '删除';
$lang->close        = '关闭';
$lang->unlink       = '移除';
$lang->import       = '导入';
$lang->export       = '导出';
$lang->setFileName  = '文件名：';
$lang->submitting   = '稍候...';
$lang->save         = '保存';
$lang->saveSuccess  = '保存成功';
$lang->confirm      = '确认';
$lang->preview      = '查看';
$lang->goback       = '返回';
$lang->goPC         = 'PC版';
$lang->more         = '更多';
$lang->day          = '天';
$lang->customConfig = '自定义';
$lang->public       = '公共';
$lang->trunk        = '主干';
$lang->sort         = '排序';
$lang->required     = '必填';
$lang->noData       = '暂无';

$lang->actions         = '操作';
$lang->restore         = '恢复默认';
$lang->comment         = '备注';
$lang->history         = '历史记录';
$lang->attatch         = '附件';
$lang->reverse         = '切换顺序';
$lang->switchDisplay   = '切换显示';
$lang->expand          = '展开全部';
$lang->collapse        = '收起';
$lang->saveSuccess     = '保存成功';
$lang->fail            = '失败';
$lang->addFiles        = '上传了附件 ';
$lang->files           = '附件 ';
$lang->pasteText       = '多项录入';
$lang->uploadImages    = '多图上传 ';
$lang->timeout         = '连接超时，请检查网络环境，或重试！';
$lang->repairTable     = '数据库表可能损坏，请用phpmyadmin或myisamchk检查修复。';
$lang->duplicate       = '已有相同标题的%s';
$lang->ipLimited       = "<html><head><meta http-equiv='Content-Type' content='text/html; charset=utf-8' /></head><body>抱歉，管理员限制当前IP登录，请联系管理员解除限制。</body></html>";
$lang->unfold          = '+';
$lang->fold            = '-';
$lang->homepage        = '设为模块首页';
$lang->noviceTutorial  = '新手教程';
$lang->changeLog       = '修改日志';
$lang->manual          = '手册';
$lang->manualUrl       = 'https://www.zentao.net/book/zentaopmshelp.html?fullScreen=zentao';
$lang->customMenu      = '自定义导航';
$lang->customField     = '自定义表单项';
$lang->lineNumber      = '行号';
$lang->tutorialConfirm = '检测到你尚未退出新手教程模式，是否现在退出？';

$lang->preShortcutKey  = '[快捷键:←]';
$lang->nextShortcutKey = '[快捷键:→]';
$lang->backShortcutKey = '[快捷键:Alt+↑]';

$lang->select        = '选择';
$lang->selectAll     = '全选';
$lang->selectReverse = '反选';
$lang->loading       = '稍候...';
$lang->notFound      = '抱歉，您访问的对象并不存在！';
$lang->notPage       =  '抱歉，您访问的功能正在开发中！';
$lang->showAll       = '[[全部显示]]';
$lang->selectedItems = '已选择 <strong>{0}</strong> 项';

$lang->future      = '未来';
$lang->year        = '年';
$lang->workingHour = '工时';

$lang->idAB         = 'ID';
$lang->priAB        = 'P';
$lang->statusAB     = '状态';
$lang->openedByAB   = '创建';
$lang->assignedToAB = '指派';
$lang->typeAB       = '类型';

$lang->common = new stdclass();
$lang->common->common = '公有模块';

/* 主导航菜单。*/
$lang->mainNav = new stdclass();
$lang->mainNav->my        = '<i class="icon icon-menu-my"></i> 地盘|my|index|';
$lang->mainNav->program   = '<i class="icon icon-menu-project"></i> 项目|program|index|';
//$lang->mainNav->reporting = '<i class="icon icon-menu-report"></i> 报表|report|index|';
//$lang->mainNav->attend    = '<i class="icon icon-file"></i> 办公|attend|personal|';
$lang->mainNav->system    = '<i class="icon icon-menu-users"></i> 组织|custom|estimate|';
$lang->mainNav->admin     = '<i class="icon icon-menu-backend"></i> 后台|admin|index|';
//$lang->mainNav->recent    = '<i class="icon icon-menu-recent"></i> 近期|recent|index|';

$lang->reporting = new stdclass();
$lang->dividerMenu = ',admin,';

/* Scrum menu. */
$lang->menu = new stdclass();
//$lang->menu->program = '主页|program|index';
$lang->menu->product = $lang->productCommon . '|product|index|locate=no';
$lang->menu->project = '迭代|project|index|locate=no';
$lang->menu->doc     = '文档|doc|index|';
$lang->menu->qa      = '测试|qa|index';
$lang->menu->company = new stdclass();

$lang->program = new stdclass();

/* System menu. */
$lang->system = new stdclass();
$lang->system->menu = new stdclass();
$lang->system->subMenu = new stdclass();
$lang->system->subMenu->setmodel = new stdclass();
//$lang->system->menu->setmodel    = array('link' => 'cmmi|custom|setcmmi|', 'class' => 'dropdown dropdown-hover');
$lang->system->menu->estimate    = array('link' => '估算|custom|estimate|');
$lang->system->menu->stage       = array('link' => '阶段|stage|browse|', 'subModule' => 'stage');
$lang->system->menu->measurement = array('link' => '度量|measurement|settips|', 'subModule' => 'sqlbuilder,measurement,report');
$lang->system->menu->auditcl     = array('link' => 'QA|auditcl|browse|', 'subModule' => 'auditcl');
$lang->system->menu->cmcl        = array('link' => '配置|cmcl|browse|', 'subModule' => ',cmcl,baseline,');
$lang->system->menu->process     = array('link' => '过程|process|browse|', 'subModule' => ',activity,output,classify,');
$lang->system->menu->reviewcl    = array('link' => '评审|reviewcl|browse|category=PP|', 'subModule' => ',reviewcl,reviewsetting,');
$lang->system->menu->subject     = array('link' => '科目|subject|browse|');
$lang->system->menu->holiday     = array('link' => '节假日|holiday|browse|');
$lang->system->subMenu->setmodel->scrum  ='scrum|custom|setscrum|';
$lang->system->dividerMenu = ',auditcl,subject,';

//if($this->cookie->systemModel == 'scrum')
//{
//    $lang->system->menu = new stdclass();
//    $lang->system->subMenu->setmodel = new stdclass();
//    $lang->system->menu->setmodel = array('link' => 'scrum|custom|setscrum|', 'class' => 'dropdown dropdown-hover');
//    $lang->system->menu->subject  = array('link' => '科目|subject|browse|');
//    $lang->system->menu->measurement = array('link' => '度量|measurement|settips|', 'subModule' => 'sqlbuilder,measurement');
//    $lang->system->menu->holiday     = array('link' => '节假日|holiday|browse|');
//    
//    $lang->system->subMenu->setmodel->cmmi  ='cmmi|custom|setcmmi|';
//    $lang->mainNav->system = '<i class="icon icon-menu-users"></i> 组织|measurement|settips|';
//    unset($lang->system->dividerMenu);
//}

$lang->stage = new stdclass();
$lang->stage->menu = new stdclass();
$lang->stage->menu->browse  = array('link' => '阶段列表|stage|browse|', 'alias' => 'create,edit,batchcreate');
$lang->stage->menu->settype = '阶段类型|stage|settype|';

$lang->measurement = new stdclass();
$lang->measurement->menu = new stdclass();
$lang->measurement->menu->settips  = '区间提示|measurement|settips|';
$lang->measurement->menu->define   = array('link' => '度量定义|measurement|browse|type=basic', 'alias' => 'createbasic');
$lang->measurement->menu->data     = array('link' => '度量数据|sqlbuilder|browsesqlview|', 'subModule' => 'sqlbuilder');
$lang->measurement->menu->template = array('link' => '报表模板|measurement|template|', 'subModule' => 'report', 'alias' => 'createtemplate');

$lang->sqlbuilder = new stdclass();
$lang->sqlbuilder->menu = $lang->measurement->menu;

$lang->cmcl = new stdclass();
$lang->cmcl->menu = new stdclass();
$lang->cmcl->menu->browse   = array('link' => '审计清单|cmcl|browse|', 'subModule' => 'cmcl');
$lang->cmcl->menu->catalog  = '文档目录|baseline|catalog|';
$lang->cmcl->menu->template = array('link' => '文档模板|baseline|template|', 'alias' => 'createtemplate,edittemplate,view,editbook,managebook');

$lang->baseline = new stdclass();
$lang->baseline->menu = $lang->cmcl->menu;

$lang->process = new stdclass();
$lang->process->menu = new stdclass();
$lang->process->menu->browse   = array('link' => '标准过程|process|browse|', 'subModule' => 'process');
$lang->process->menu->activity = array('link' => '活动|activity|browse|', 'subModule' => 'activity');
$lang->process->menu->output   = array('link' => '文档|output|browse|', 'subModule' => 'output');
$lang->process->menu->classify = array('link' => '分类项|classify|browse|', 'subModule' => 'classify');

$lang->activity = new stdclass();
$lang->output   = new stdclass();
$lang->classify = new stdclass();
$lang->activity->menu = $lang->process->menu;
$lang->output->menu   = $lang->process->menu;
$lang->classify->menu = $lang->process->menu;

$lang->reviewcl = new stdclass();
$lang->reviewcl->menu = new stdclass();
$lang->reviewcl->menu->browse   = array('link' => '检查清单|reviewcl|browse|category=PP', 'subModule' => 'reviewcl');
$lang->reviewcl->menu->version  = array('link' => '版本规则|reviewsetting|version|');
$lang->reviewcl->menu->reviewer = array('link' => '评审人|reviewsetting|reviewer|');

$lang->reviewsetting = new stdclass();
$lang->reviewsetting->menu = $lang->reviewcl->menu;

/* 查询条中可以选择的对象列表。*/
$lang->searchObjects['bug']         = 'Bug';
$lang->searchObjects['story']       = "{$lang->storyCommon}";
$lang->searchObjects['task']        = '任务';
$lang->searchObjects['testcase']    = '用例';
$lang->searchObjects['project']     = $lang->projectCommon;
$lang->searchObjects['product']     = $lang->productCommon;
$lang->searchObjects['user']        = '用户';
$lang->searchObjects['build']       = '版本';
$lang->searchObjects['release']     = '发布';
$lang->searchObjects['productplan'] = $lang->productCommon . '计划';
$lang->searchObjects['testtask']    = '测试单';
$lang->searchObjects['doc']         = '文档';
$lang->searchObjects['caselib']     = '用例库';
$lang->searchObjects['testreport']  = '测试报告';
$lang->searchTips                   = '编号(ctrl+g)';

/* 导入支持的编码格式。*/
$lang->importEncodeList['gbk']   = 'GBK';
$lang->importEncodeList['big5']  = 'BIG5';
$lang->importEncodeList['utf-8'] = 'UTF-8';

/* 导出文件的类型列表。*/
$lang->exportFileTypeList['csv']  = 'csv';
$lang->exportFileTypeList['xml']  = 'xml';
$lang->exportFileTypeList['html'] = 'html';

$lang->exportTypeList['all']      = '全部记录';
$lang->exportTypeList['selected'] = '选中记录';

/* 语言 */
$lang->lang = 'Language';

/* 风格列表。*/
$lang->theme                = '主题';
$lang->themes['default']    = '禅道蓝（默认）';
$lang->themes['green']      = '叶兰绿';
$lang->themes['red']        = '赤诚红';
$lang->themes['purple']     = '玉烟紫';
$lang->themes['pink']       = '芙蕖粉';
$lang->themes['blackberry'] = '露莓黑';
$lang->themes['classic']    = '经典蓝';

/* 首页菜单设置。*/
$lang->index = new stdclass();
$lang->index->menu = new stdclass();

$lang->index->menu->product = "浏览{$lang->productCommon}|product|browse";
$lang->index->menu->project = "浏览{$lang->projectCommon}|project|browse";

/* 我的地盘菜单设置。*/
$lang->my = new stdclass();
$lang->my->menu = new stdclass();

$lang->my->menu->index            = '首页|my|index';
//$lang->my->menu->todo             = '待办|my|todo|';
$lang->my->menu->effort           = '日志|my|effort|';
//$lang->my->menu->calendar       = array('link' => '日程|my|calendar|', 'subModule' => 'todo', 'alias' => 'todo');
$lang->my->menu->program          = array('link' => '项目|my|program|');
$lang->my->menu->task             = array('link' => '任务|my|task|', 'subModule' => 'task');
$lang->my->menu->bug              = array('link' => 'Bug|my|bug|', 'subModule' => 'bug');
$lang->my->menu->testtask         = array('link' => '测试|my|testtask|', 'subModule' => 'testcase,testtask', 'alias' => 'testcase');
$lang->my->menu->story            = array('link' => "{$lang->storyCommon}|my|story|", 'subModule' => 'story');
$lang->my->menu->myProject        = "{$lang->projectCommon}|my|project|";
$lang->my->menu->dynamic          = '动态|my|dynamic|';
//$lang->my->menu->profile        = array('link' => '档案|my|profile', 'alias' => 'editprofile');
//$lang->my->menu->changePassword = '密码|my|changepassword';
//$lang->my->menu->manageContacts = '联系人|my|managecontacts';
//$lang->my->menu->score          = array('link' => '积分|my|score', 'subModule' => 'score');

$lang->my->dividerMenu = ',program,requirement,dynamic,';

$lang->todo       = new stdclass();
$lang->todo->menu = $lang->my->menu;

$lang->score       = new stdclass();
$lang->score->menu = $lang->my->menu;

/* 产品视图设置。*/
$lang->product = new stdclass();
$lang->product->menu = new stdclass();

$lang->product->menu->story   = array('link' => "{$lang->storyCommon}|product|browse|productID=%s", 'alias' => 'batchedit', 'subModule' => 'story');
$lang->product->menu->plan    = array('link' => '计划|productplan|browse|productID=%s', 'subModule' => 'productplan');
$lang->product->menu->release = array('link' => '发布|release|browse|productID=%s',     'subModule' => 'release');
$lang->product->menu->roadmap = '路线图|product|roadmap|productID=%s';
$lang->product->menu->project = "{$lang->projectCommon}|product|project|status=all&productID=%s";
$lang->product->menu->dynamic = '动态|product|dynamic|productID=%s';
$lang->product->menu->doc     = array('link' => '文档|doc|objectLibs|type=product&objectID=%s&from=product', 'subModule' => 'doc');
$lang->product->menu->branch  = '@branch@|branch|manage|productID=%s';
$lang->product->menu->module  = '模块|tree|browse|productID=%s&view=story';
$lang->product->menu->view    = array('link' => '概况|product|view|productID=%s', 'alias' => 'edit');

$lang->product->dividerMenu = ',plan,project,doc,';

$lang->productplan = new stdclass();
$lang->release     = new stdclass();
$lang->branch      = new stdclass();
$lang->story       = new stdclass();

$lang->branch->menu      = $lang->product->menu;
$lang->story->menu       = $lang->product->menu;
$lang->productplan->menu = $lang->product->menu;
$lang->release->menu     = $lang->product->menu;

/* 项目视图菜单设置。*/
$lang->project = new stdclass();
$lang->project->menu = new stdclass();

$lang->project->menu->task    = array('link' => '任务|project|task|projectID=%s', 'subModule' => 'task,tree', 'alias' => 'importtask,importbug');
$lang->project->menu->kanban  = array('link' => '看板|project|kanban|projectID=%s');
$lang->project->menu->burn    = array('link' => '燃尽图|project|burn|projectID=%s');
$lang->project->menu->list    = array('link' => '更多|project|grouptask|projectID=%s', 'alias' => 'grouptask,tree', 'class' => 'dropdown dropdown-hover');
$lang->project->menu->story   = array('link' => "{$lang->storyCommon}|project|story|projectID=%s", 'subModule' => 'story', 'alias' => 'linkstory,storykanban');
$lang->project->menu->qa      = array('link' => '测试|project|bug|projectID=%s', 'subModule' => 'bug,build,testtask', 'alias' => 'build,testtask', 'class' => 'dropdown dropdown-hover');
$lang->project->menu->doc     = array('link' => '文档|doc|objectLibs|type=project&objectID=%s&from=project', 'subModule' => 'doc');
$lang->project->menu->action  = array('link' => '动态|project|dynamic|projectID=%s', 'subModule' => 'dynamic', 'class' => 'dropdown dropdown-hover');
$lang->project->menu->product = $lang->productCommon . '|project|manageproducts|projectID=%s';
$lang->project->menu->team    = array('link' => '团队|project|team|projectID=%s', 'alias' => 'managemembers');
$lang->project->menu->view    = array('link' => '概况|project|view|projectID=%s', 'alias' => 'edit,start,suspend,putoff,close');

$lang->project->subMenu = new stdclass();
$lang->project->subMenu->list = new stdclass();
$lang->project->subMenu->list->groupTask = '分组视图|project|groupTask|projectID=%s';
$lang->project->subMenu->list->tree      = '树状图|project|tree|projectID=%s';

$lang->project->subMenu->qa = new stdclass();
$lang->project->subMenu->qa->bug      = 'Bug|project|bug|projectID=%s';
$lang->project->subMenu->qa->build    = array('link' => '版本|project|build|projectID=%s', 'subModule' => 'build');
$lang->project->subMenu->qa->testtask = array('link' => '测试单|project|testtask|projectID=%s', 'subModule' => 'testreport,testtask');

$lang->project->dividerMenu = ',story,team,product,';

$lang->task  = new stdclass();
$lang->build = new stdclass();
$lang->task->menu  = $lang->project->menu;
$lang->build->menu = $lang->project->menu;

/* QA视图菜单设置。*/
$lang->qa = new stdclass();
$lang->qa->menu = new stdclass();

$lang->qa->menu->bug       = array('link' => 'Bug|bug|browse|productID=%s');
$lang->qa->menu->testcase  = array('link' => '用例|testcase|browse|productID=%s', 'class' => 'dropdown dropdown-hover');
$lang->qa->menu->testtask  = array('link' => '测试单|testtask|browse|productID=%s');
$lang->qa->menu->testsuite = array('link' => '套件|testsuite|browse|productID=%s');
$lang->qa->menu->report    = array('link' => '报告|testreport|browse|productID=%s');
$lang->qa->menu->caselib   = array('link' => '用例库|caselib|browse');

$lang->qa->subMenu = new stdclass();
$lang->qa->subMenu->testcase = new stdclass();
$lang->qa->subMenu->testcase->feature = array('link' => '功能测试|testcase|browse|productID=%s', 'alias' => 'view,create,batchcreate,edit,batchedit,showimport,groupcase,importfromlib', 'subModule' => 'tree,story');
$lang->qa->subMenu->testcase->unit    = array('link' => '单元测试|testtask|browseUnits|productID=%s');

$lang->bug = new stdclass();
$lang->bug->menu = new stdclass();
$lang->bug->subMenu = $lang->qa->subMenu;

$lang->bug->menu->bug       = array('link' => 'Bug|bug|browse|productID=%s', 'alias' => 'view,create,batchcreate,edit,resolve,close,activate,report,batchedit,batchactivate,confirmbug,assignto', 'subModule' => 'tree');
$lang->bug->menu->testcase  = array('link' => '用例|testcase|browse|productID=%s', 'class' => 'dropdown dropdown-hover');
$lang->bug->menu->testtask  = array('link' => '测试单|testtask|browse|productID=%s');
$lang->bug->menu->testsuite = array('link' => '套件|testsuite|browse|productID=%s');
$lang->bug->menu->report    = array('link' => '报告|testreport|browse|productID=%s');
$lang->bug->menu->caselib   = array('link' => '用例库|caselib|browse');

$lang->testcase = new stdclass();
$lang->testcase->menu = new stdclass();
$lang->testcase->subMenu = $lang->qa->subMenu;
$lang->testcase->menu->bug       = array('link' => 'Bug|bug|browse|productID=%s');
$lang->testcase->menu->testcase  = array('link' => '用例|testcase|browse|productID=%s', 'alias' => 'view,create,batchcreate,edit,batchedit,showimport,groupcase,importfromlib', 'subModule' => 'tree,story', 'class' => 'dropdown dropdown-hover');
$lang->testcase->menu->testtask  = array('link' => '测试单|testtask|browse|productID=%s');
$lang->testcase->menu->testsuite = array('link' => '套件|testsuite|browse|productID=%s');
$lang->testcase->menu->report    = array('link' => '报告|testreport|browse|productID=%s');
$lang->testcase->menu->caselib   = array('link' => '用例库|caselib|browse');

$lang->testtask = new stdclass();
$lang->testtask->menu = new stdclass();
$lang->testtask->subMenu = $lang->qa->subMenu;
$lang->testtask->menu->bug       = array('link' => 'Bug|bug|browse|productID=%s');
$lang->testtask->menu->testcase  = array('link' => '用例|testcase|browse|productID=%s', 'class' => 'dropdown dropdown-hover');
$lang->testtask->menu->testtask  = array('link' => '测试单|testtask|browse|productID=%s', 'subModule' => 'testtask', 'alias' => 'view,create,edit,linkcase,cases,start,close,batchrun,groupcase,report');
$lang->testtask->menu->testsuite = array('link' => '套件|testsuite|browse|productID=%s');
$lang->testtask->menu->report    = array('link' => '报告|testreport|browse|productID=%s');
$lang->testtask->menu->caselib   = array('link' => '用例库|caselib|browse');

$lang->testsuite = new stdclass();
$lang->testsuite->menu = new stdclass();
$lang->testsuite->subMenu = $lang->qa->subMenu;
$lang->testsuite->menu->bug       = array('link' => 'Bug|bug|browse|productID=%s');
$lang->testsuite->menu->testcase  = array('link' => '用例|testcase|browse|productID=%s', 'class' => 'dropdown dropdown-hover');
$lang->testsuite->menu->testtask  = array('link' => '测试单|testtask|browse|productID=%s');
$lang->testsuite->menu->testsuite = array('link' => '套件|testsuite|browse|productID=%s', 'alias' => 'view,create,edit,linkcase');
$lang->testsuite->menu->report    = array('link' => '报告|testreport|browse|productID=%s');
$lang->testsuite->menu->caselib   = array('link' => '用例库|caselib|browse');

$lang->testreport = new stdclass();
$lang->testreport->menu = new stdclass();
$lang->testreport->subMenu = $lang->qa->subMenu;
$lang->testreport->menu->bug       = array('link' => 'Bug|bug|browse|productID=%s');
$lang->testreport->menu->testcase  = array('link' => '用例|testcase|browse|productID=%s', 'class' => 'dropdown dropdown-hover');
$lang->testreport->menu->testtask  = array('link' => '测试单|testtask|browse|productID=%s');
$lang->testreport->menu->testsuite = array('link' => '套件|testsuite|browse|productID=%s');
$lang->testreport->menu->report    = array('link' => '报告|testreport|browse|productID=%s', 'alias' => 'view,create,edit');
$lang->testreport->menu->caselib   = array('link' => '用例库|caselib|browse');

$lang->caselib = new stdclass();
$lang->caselib->menu = new stdclass();
$lang->caselib->subMenu = $lang->qa->subMenu;
$lang->caselib->menu->bug       = array('link' => 'Bug|bug|browse|');
$lang->caselib->menu->testcase  = array('link' => '用例|testcase|browse|', 'class' => 'dropdown dropdown-hover');
$lang->caselib->menu->testtask  = array('link' => '测试单|testtask|browse|');
$lang->caselib->menu->testsuite = array('link' => '套件|testsuite|browse|');
$lang->caselib->menu->report    = array('link' => '报告|testreport|browse|');
$lang->caselib->menu->caselib   = array('link' => '用例库|caselib|browse|libID=%s', 'alias' => 'create,createcase,view,edit,batchcreatecase,showimport', 'subModule' => 'tree,testcase');

$lang->ci = new stdclass();
$lang->ci->menu = new stdclass();
$lang->ci->menu->code     = array('link' => '代码|repo|browse|repoID=%s', 'alias' => 'diff,view,revision,log,blame,showsynccomment');
$lang->ci->menu->build    = array('link' => '构建|job|browse', 'subModule' => 'compile,job');
$lang->ci->menu->jenkins  = array('link' => 'Jenkins|jenkins|browse', 'alias' => 'create,edit');
$lang->ci->menu->maintain = array('link' => '版本库|repo|maintain', 'alias' => 'create,edit');
$lang->ci->menu->rules    = array('link' => '指令|repo|setrules');

$lang->repo          = new stdclass();
$lang->jenkins       = new stdclass();
$lang->compile       = new stdclass();
$lang->job           = new stdclass();
$lang->repo->menu    = $lang->ci->menu;
$lang->jenkins->menu = $lang->ci->menu;
$lang->compile->menu = $lang->ci->menu;
$lang->job->menu     = $lang->ci->menu;

/* 文档视图菜单设置。*/
$lang->doc = new stdclass();
$lang->doc->menu = new stdclass();

$lang->svn = new stdclass();
$lang->git = new stdclass();

/* 统计视图菜单设置。*/
$lang->report = new stdclass();
$lang->report->menu = new stdclass();

$lang->report->menu->annual  = array('link' => '年度总结|report|annualData', 'target' => '_blank');
$lang->report->menu->product = array('link' => $lang->productCommon . '|report|productsummary');
$lang->report->menu->prj     = array('link' => $lang->projectCommon . '|report|projectdeviation');
$lang->report->menu->test    = array('link' => '测试|report|bugcreate', 'alias' => 'bugassign');
$lang->report->menu->staff   = array('link' => '组织|report|workload');

$lang->report->notice = new stdclass();
$lang->report->notice->help = '注：统计报表的数据来源于列表页面的检索结果，生成统计报表前请先在列表页面进行检索。比如列表页面我们检索的是%tab%，那么报表就是基于之前检索的%tab%的结果集进行统计。';

/* 组织结构视图菜单设置。*/
$lang->company = new stdclass();
$lang->dept    = new stdclass();
$lang->group   = new stdclass();
$lang->user    = new stdclass();
$lang->company->menu = new stdclass();
$lang->dept->menu    = new stdclass();
$lang->group->menu   = new stdclass();
$lang->user->menu    = new stdclass();

$lang->company = new stdclass();
$lang->company->menu = new stdclass();
$lang->company->menu->browseUser  = array('link' => '用户|company|browse', 'subModule' => ',user,');
$lang->company->menu->dept        = array('link' => '部门|dept|browse', 'subModule' => 'dept');
$lang->company->menu->browseGroup = array('link' => '权限|group|browse', 'subModule' => 'group');
$lang->company->menu->dynamic     = '动态|company|dynamic|';
$lang->company->menu->view        = array('link' => '公司|company|view');

/* 后台管理菜单设置。*/
$lang->admin = new stdclass();
$lang->admin->menu = new stdclass();
$lang->admin->menu->index     = array('link' => '首页|admin|index', 'alias' => 'register,certifytemail,certifyztmobile,ztcompany');
$lang->admin->menu->company   = array('link' => '组织|company|browse|', 'subModule' => ',user,dept,group,', 'alias' => ',dynamic,view,');
$lang->admin->menu->message   = array('link' => '通知|message|index', 'subModule' => 'message,mail,webhook');
//$lang->admin->menu->custom    = array('link' => '自定义|custom|set', 'subModule' => 'custom');
//$lang->admin->menu->sso       = array('link' => '集成|admin|sso', 'subModule' => '');
//$lang->admin->menu->dev       = array('link' => '二次开发|dev|api', 'alias' => 'db', 'subModule' => 'dev,entry');
//$lang->admin->menu->translate = array('link' => '翻译|dev|translate');
$lang->admin->menu->data      = array('link' => '数据|backup|index', 'subModule' => 'backup,action');
$lang->admin->menu->safe      = array('link' => '安全|admin|safe', 'alias' => 'checkweak');
$lang->admin->menu->system    = array('link' => '系统|cron|index', 'subModule' => 'cron,search');

$lang->company->menu = $lang->company->menu;
$lang->dept->menu    = $lang->company->menu;
$lang->group->menu   = $lang->company->menu;
$lang->user->menu    = $lang->company->menu;

$lang->admin->subMenu = new stdclass();
$lang->admin->subMenu->message = new stdclass();
$lang->admin->subMenu->message->mail    = array('link' => '邮件|mail|index', 'subModule' => 'mail');
$lang->admin->subMenu->message->webhook = array('link' => 'Webhook|webhook|browse', 'subModule' => 'webhook');
$lang->admin->subMenu->message->browser = array('link' => '浏览器|message|browser');
$lang->admin->subMenu->message->setting = array('link' => '设置|message|setting');

$lang->admin->subMenu->sso = new stdclass();
$lang->admin->subMenu->sso->ranzhi = '然之协同|admin|sso';

$lang->admin->subMenu->dev = new stdclass();
$lang->admin->subMenu->dev->api    = array('link' => 'API|dev|api');
$lang->admin->subMenu->dev->db     = array('link' => '数据库|dev|db');
$lang->admin->subMenu->dev->editor = array('link' => '编辑器|dev|editor');
$lang->admin->subMenu->dev->entry  = array('link' => '应用|entry|browse', 'subModule' => 'entry');

$lang->admin->subMenu->data = new stdclass();
$lang->admin->subMenu->data->backup = array('link' => '备份|backup|index', 'subModule' => 'backup');
$lang->admin->subMenu->data->trash  = '回收站|action|trash';

$lang->admin->subMenu->system = new stdclass();
$lang->admin->subMenu->system->cron     = array('link' => '定时|cron|index', 'subModule' => 'cron');
$lang->admin->subMenu->system->timezone = array('link' => '时区|custom|timezone', 'subModule' => 'custom');

$lang->convert   = new stdclass();
$lang->upgrade   = new stdclass();
$lang->action    = new stdclass();
$lang->backup    = new stdclass();
$lang->extension = new stdclass();
$lang->custom    = new stdclass();
$lang->mail      = new stdclass();
$lang->cron      = new stdclass();
$lang->dev       = new stdclass();
$lang->entry     = new stdclass();
$lang->webhook   = new stdclass();
$lang->message   = new stdclass();
$lang->search    = new stdclass();

/* 菜单分组。*/
$lang->menugroup = new stdclass();
$lang->menugroup->release     = 'product';
$lang->menugroup->story       = 'product';
$lang->menugroup->branch      = 'product';
$lang->menugroup->productplan = 'product';
$lang->menugroup->task        = 'project';
$lang->menugroup->build       = 'project';
$lang->menugroup->convert     = 'admin';
$lang->menugroup->upgrade     = 'admin';
$lang->menugroup->user        = 'company';
$lang->menugroup->group       = 'company';
$lang->menugroup->bug         = 'qa';
$lang->menugroup->testcase    = 'qa';
$lang->menugroup->case        = 'qa';
$lang->menugroup->testtask    = 'qa';
$lang->menugroup->testsuite   = 'qa';
$lang->menugroup->caselib     = 'qa';
$lang->menugroup->testreport  = 'qa';
$lang->menugroup->report      = 'reporting';
$lang->menugroup->people      = 'admin';
$lang->menugroup->dept        = 'company';
$lang->menugroup->todo        = 'my';
$lang->menugroup->score       = 'my';
$lang->menugroup->action      = 'admin';
$lang->menugroup->backup      = 'admin';
$lang->menugroup->cron        = 'admin';
$lang->menugroup->extension   = 'admin';
$lang->menugroup->custom      = 'admin';
$lang->menugroup->mail        = 'admin';
$lang->menugroup->dev         = 'admin';
$lang->menugroup->entry       = 'admin';
$lang->menugroup->webhook     = 'admin';
$lang->menugroup->message     = 'admin';

$lang->menugroup->repo    = 'ci';
$lang->menugroup->jenkins = 'ci';
$lang->menugroup->compile = 'ci';
$lang->menugroup->job     = 'ci';

/* Nav group.*/
$lang->navGroup = new stdclass();
$lang->navGroup->my     = 'my';
$lang->navGroup->todo   = 'my';
$lang->navGroup->effort = 'my';

$lang->navGroup->product     = 'program';
$lang->navGroup->story       = 'program';
$lang->navGroup->branch      = 'program';
$lang->navGroup->productplan = 'program';
$lang->navGroup->release     = 'program';
$lang->navGroup->tree        = 'program';
$lang->navGroup->project     = 'program';
$lang->navGroup->task        = 'program';
$lang->navGroup->qa          = 'program';
$lang->navGroup->bug         = 'program';
$lang->navGroup->doc         = 'program';
$lang->navGroup->testcase    = 'program';
$lang->navGroup->testtask    = 'program';
$lang->navGroup->testreport  = 'program';
$lang->navGroup->testsuite   = 'program';
$lang->navGroup->caselib     = 'program';
$lang->navGroup->feedback    = 'program';
$lang->navGroup->deploy      = 'program';

$lang->navGroup->programplan    = 'program';
$lang->navGroup->workestimation = 'program';
$lang->navGroup->budget         = 'program';
$lang->navGroup->review         = 'program';
$lang->navGroup->reviewissue    = 'program';
$lang->navGroup->weekly         = 'program';
$lang->navGroup->milestone      = 'program';
$lang->navGroup->pssp           = 'program';
$lang->navGroup->design         = 'program';
$lang->navGroup->repo           = 'program';
$lang->navGroup->issue          = 'program';
$lang->navGroup->risk           = 'program';
$lang->navGroup->auditplan      = 'program';
$lang->navGroup->cm             = 'program';
$lang->navGroup->nc             = 'program';
$lang->navGroup->job            = 'program';
$lang->navGroup->jenkins        = 'program';
$lang->navGroup->compile        = 'program';
$lang->navGroup->build          = 'program';

$lang->navGroup->durationestimation = 'program';

$lang->navGroup->stage         = 'system';
$lang->navGroup->measurement   = 'system';
$lang->navGroup->report        = 'system';
$lang->navGroup->sqlbuilder    = 'system';
$lang->navGroup->auditcl       = 'system';
$lang->navGroup->cmcl          = 'system';
$lang->navGroup->process       = 'system';
$lang->navGroup->activity      = 'system';
$lang->navGroup->output        = 'system';
$lang->navGroup->classify      = 'system';
$lang->navGroup->subject       = 'system';
$lang->navGroup->baseline      = 'system';
$lang->navGroup->reviewcl      = 'system';
$lang->navGroup->reviewsetting = 'system';
$lang->navGroup->holiday       = 'system';

$lang->navGroup->attend   = 'attend';
$lang->navGroup->leave    = 'attend';
$lang->navGroup->makeup   = 'attend';
$lang->navGroup->overtime = 'attend';
$lang->navGroup->lieu     = 'attend';

$lang->navGroup->admin     = 'admin';
$lang->navGroup->company   = 'admin';
$lang->navGroup->dept      = 'admin';
$lang->navGroup->ldap      = 'admin';
$lang->navGroup->group     = 'admin';
$lang->navGroup->webhook   = 'admin';
$lang->navGroup->sms       = 'admin';
$lang->navGroup->message   = 'admin';
$lang->navGroup->user      = 'admin';
$lang->navGroup->custom    = 'admin';
$lang->navGroup->cron      = 'admin';
$lang->navGroup->backup    = 'admin';
$lang->navGroup->mail      = 'admin';
$lang->navGroup->dev       = 'admin';
$lang->navGroup->extension = 'admin';
$lang->navGroup->action    = 'admin';
$lang->navGroup->search    = 'admin';

/* 错误提示信息。*/
$lang->error = new stdclass();
$lang->error->companyNotFound = "您访问的域名 %s 没有对应的公司。";
$lang->error->length          = array("『%s』长度错误，应当为『%s』", "『%s』长度应当不超过『%s』，且大于『%s』。");
$lang->error->reg             = "『%s』不符合格式，应当为:『%s』。";
$lang->error->unique          = "『%s』已经有『%s』这条记录了。如果您确定该记录已删除，请到后台-数据-回收站还原。";
$lang->error->gt              = "『%s』应当大于『%s』。";
$lang->error->ge              = "『%s』应当不小于『%s』。";
$lang->error->notempty        = "『%s』不能为空。";
$lang->error->empty           = "『%s』必须为空。";
$lang->error->equal           = "『%s』必须为『%s』。";
$lang->error->int             = array("『%s』应当是数字。", "『%s』应当介于『%s-%s』之间。");
$lang->error->float           = "『%s』应当是数字，可以是小数。";
$lang->error->email           = "『%s』应当为合法的EMAIL。";
$lang->error->URL             = "『%s』应当为合法的URL。";
$lang->error->date            = "『%s』应当为合法的日期。";
$lang->error->datetime        = "『%s』应当为合法的日期。";
$lang->error->code            = "『%s』应当为字母或数字的组合。";
$lang->error->account         = "『%s』只能是字母和数字的组合三位以上。";
$lang->error->passwordsame    = "两次密码应当相等。";
$lang->error->passwordrule    = "密码应该符合规则，长度至少为六位。";
$lang->error->accessDenied    = '您没有访问权限';
$lang->error->pasteImg        = '您的浏览器不支持粘贴图片！';
$lang->error->noData          = '没有数据';
$lang->error->editedByOther   = '该记录可能已经被改动。请刷新页面重新编辑！';
$lang->error->tutorialData    = '新手模式下不会插入数据，请退出新手模式操作';
$lang->error->noCurlExt       = '服务器未安装Curl模块。';

/* 分页信息。*/
$lang->pager = new stdclass();
$lang->pager->noRecord     = "暂时没有记录";
$lang->pager->digest       = "共 <strong>%s</strong> 条记录，%s <strong>%s/%s</strong> &nbsp; ";
$lang->pager->recPerPage   = "每页 <strong>%s</strong> 条";
$lang->pager->first        = "<i class='icon-step-backward' title='首页'></i>";
$lang->pager->pre          = "<i class='icon-play icon-flip-horizontal' title='上一页'></i>";
$lang->pager->next         = "<i class='icon-play' title='下一页'></i>";
$lang->pager->last         = "<i class='icon-step-forward' title='末页'></i>";
$lang->pager->locate       = "GO!";
$lang->pager->previousPage = "上一页";
$lang->pager->nextPage     = "下一页";
$lang->pager->summery      = "第 <strong>%s-%s</strong> 项，共 <strong>%s</strong> 项";
$lang->pager->pageOfText   = '第 {0} 页';
$lang->pager->firstPage    = '第一页';
$lang->pager->lastPage     = '最后一页';
$lang->pager->goto         = '跳转';
$lang->pager->pageOf       = '第 <strong>{page}</strong> 页';
$lang->pager->totalPage    = '共 <strong>{totalPage}</strong> 页';
$lang->pager->totalCount   = '共 <strong>{recTotal}</strong> 项';
$lang->pager->pageSize     = '每页 <strong>{recPerPage}</strong> 项';
$lang->pager->itemsRange   = '第 <strong>{start}</strong> ~ <strong>{end}</strong> 项';
$lang->pager->pageOfTotal  = '第 <strong>{page}</strong>/<strong>{totalPage}</strong> 页';

$lang->colorPicker = new stdclass();
$lang->colorPicker->errorTip = '不是有效的颜色值';

$lang->proVersion     = "<a href='https://api.zentao.net/goto.php?item=proversion&from=footer' target='_blank' id='proLink' class='text-important'>专业版 <i class='text-danger icon-pro-version'></i></a> &nbsp; ";
$lang->downNotify     = "下载桌面提醒";
$lang->downloadClient = "下载客户端";
$lang->clientHelp     = "客户端使用说明";
$lang->clientHelpLink = "http://www.zentao.net/book/zentaopmshelp/302.html#2";
$lang->website        = "https://www.zentao.net";

$lang->suhosinInfo     = "警告：数据太多，请在php.ini中修改<font color=red>sohusin.post.max_vars</font>和<font color=red>sohusin.request.max_vars</font>（大于%s的数）。 保存并重新启动apache或php-fpm，否则会造成部分数据无法保存。";
$lang->maxVarsInfo     = "警告：数据太多，请在php.ini中修改<font color=red>max_input_vars</font>（大于%s的数）。 保存并重新启动apache或php-fpm，否则会造成部分数据无法保存。";
$lang->pasteTextInfo   = "粘贴文本到文本域中，每行文字作为一条数据的标题。";
$lang->noticeImport    = "导入数据中，含有已经存在系统的数据，请确认这些数据要覆盖或者全新插入。";
$lang->importConfirm   = "导入确认";
$lang->importAndCover  = "覆盖";
$lang->importAndInsert = "全新插入";

$lang->noResultsMatch    = "没有匹配结果";
$lang->searchMore        = "搜索此关键字的更多结果：";
$lang->chooseUsersToMail = "选择要发信通知的用户...";
$lang->browserNotice     = '你目前使用的浏览器可能无法得到最佳浏览效果，建议使用Chrome、火狐、IE9+、Opera、Safari浏览器。';
$lang->noticePasteImg    = "可以在编辑器直接贴图。";
$lang->pasteImgFail      = "贴图失败，请稍后重试。";
$lang->pasteImgUploading = "正在上传图片，请稍后...";

/* 时间格式设置。*/
if(!defined('DT_DATETIME1'))  define('DT_DATETIME1',  'Y-m-d H:i:s');
if(!defined('DT_DATETIME2'))  define('DT_DATETIME2',  'y-m-d H:i');
if(!defined('DT_MONTHTIME1')) define('DT_MONTHTIME1', 'n/d H:i');
if(!defined('DT_MONTHTIME2')) define('DT_MONTHTIME2', 'n月d日 H:i');
if(!defined('DT_DATE1'))      define('DT_DATE1',     'Y-m-d');
if(!defined('DT_DATE2'))      define('DT_DATE2',     'Ymd');
if(!defined('DT_DATE3'))      define('DT_DATE3',     'Y年m月d日');
if(!defined('DT_DATE4'))      define('DT_DATE4',     'n月j日');
if(!defined('DT_DATE5'))      define('DT_DATE5',     'j/n');
if(!defined('DT_TIME1'))      define('DT_TIME1',     'H:i:s');
if(!defined('DT_TIME2'))      define('DT_TIME2',     'H:i');

/* datepicker 时间*/
$lang->datepicker = new stdclass();

$lang->datepicker->dpText = new stdclass();
$lang->datepicker->dpText->TEXT_OR          = '或 ';
$lang->datepicker->dpText->TEXT_PREV_YEAR   = '去年';
$lang->datepicker->dpText->TEXT_PREV_MONTH  = '上月';
$lang->datepicker->dpText->TEXT_PREV_WEEK   = '上周';
$lang->datepicker->dpText->TEXT_YESTERDAY   = '昨天';
$lang->datepicker->dpText->TEXT_THIS_MONTH  = '本月';
$lang->datepicker->dpText->TEXT_THIS_WEEK   = '本周';
$lang->datepicker->dpText->TEXT_TODAY       = '今天';
$lang->datepicker->dpText->TEXT_NEXT_YEAR   = '明年';
$lang->datepicker->dpText->TEXT_NEXT_MONTH  = '下月';
$lang->datepicker->dpText->TEXT_CLOSE       = '关闭';
$lang->datepicker->dpText->TEXT_DATE        = '选择时间段';
$lang->datepicker->dpText->TEXT_CHOOSE_DATE = '选择日期';

$lang->datepicker->dayNames     = array('星期日', '星期一', '星期二', '星期三', '星期四', '星期五', '星期六');
$lang->datepicker->abbrDayNames = array('日', '一', '二', '三', '四', '五', '六');
$lang->datepicker->monthNames   = array('一月', '二月', '三月', '四月', '五月', '六月', '七月', '八月', '九月', '十月', '十一月', '十二月');

/* Common action icons 通用动作图标 */
$lang->icons['todo']      = 'check';
$lang->icons['product']   = 'cube';
$lang->icons['bug']       = 'bug';
$lang->icons['task']      = 'check-sign';
$lang->icons['tasks']     = 'tasks';
$lang->icons['project']   = 'stack';
$lang->icons['doc']       = 'file-text';
$lang->icons['doclib']    = 'folder-close';
$lang->icons['story']     = 'lightbulb';
$lang->icons['release']   = 'tags';
$lang->icons['roadmap']   = 'code-fork';
$lang->icons['plan']      = 'flag';
$lang->icons['dynamic']   = 'volume-up';
$lang->icons['build']     = 'tag';
$lang->icons['test']      = 'check';
$lang->icons['testtask']  = 'check';
$lang->icons['group']     = 'group';
$lang->icons['team']      = 'group';
$lang->icons['company']   = 'sitemap';
$lang->icons['user']      = 'user';
$lang->icons['dept']      = 'sitemap';
$lang->icons['tree']      = 'sitemap';
$lang->icons['usecase']   = 'sitemap';
$lang->icons['testcase']  = 'sitemap';
$lang->icons['result']    = 'list-alt';
$lang->icons['mail']      = 'envelope';
$lang->icons['trash']     = 'trash';
$lang->icons['extension'] = 'th-large';
$lang->icons['app']       = 'th-large';

$lang->icons['results']            = 'list-alt';
$lang->icons['create']             = 'plus';
$lang->icons['post']               = 'edit';
$lang->icons['batchCreate']        = 'plus-sign';
$lang->icons['batchEdit']          = 'edit-sign';
$lang->icons['batchClose']         = 'off';
$lang->icons['edit']               = 'edit';
$lang->icons['delete']             = 'close';
$lang->icons['copy']               = 'copy';
$lang->icons['report']             = 'bar-chart';
$lang->icons['export']             = 'export';
$lang->icons['report-file']        = 'file-powerpoint';
$lang->icons['import']             = 'import';
$lang->icons['finish']             = 'checked';
$lang->icons['resolve']            = 'check';
$lang->icons['start']              = 'play';
$lang->icons['restart']            = 'play';
$lang->icons['run']                = 'play';
$lang->icons['runCase']            = 'play';
$lang->icons['batchRun']           = 'play-sign';
$lang->icons['assign']             = 'hand-right';
$lang->icons['assignTo']           = 'hand-right';
$lang->icons['change']             = 'fork';
$lang->icons['link']               = 'link';
$lang->icons['close']              = 'off';
$lang->icons['activate']           = 'magic';
$lang->icons['review']             = 'glasses';
$lang->icons['confirm']            = 'search';
$lang->icons['confirmBug']         = 'search';
$lang->icons['putoff']             = 'calendar';
$lang->icons['suspend']            = 'pause';
$lang->icons['pause']              = 'pause';
$lang->icons['cancel']             = 'ban-circle';
$lang->icons['recordEstimate']     = 'time';
$lang->icons['customFields']       = 'cogs';
$lang->icons['manage']             = 'cog';
$lang->icons['unlock']             = 'unlock-alt';
$lang->icons['confirmStoryChange'] = 'search';
$lang->icons['score']              = 'tint';

include (dirname(__FILE__) . '/menuOrder.php');

global $config;
if(isset($config->global->flow) and $config->global->flow == 'onlyStory')
{
    /* Remove project, report and qa module. */
    unset($lang->menu->project);
    unset($lang->menu->report);
    unset($lang->menu->qa);

    unset($lang->menuOrder[15]);
    unset($lang->menuOrder[20]);
    unset($lang->menuOrder[35]);

    /* Adjust sub menu of my dashboard. */
    unset($lang->my->menu->bug);
    unset($lang->my->menu->testtask);
    unset($lang->my->menu->task);
    unset($lang->my->menu->myProject);

    /* Adjust sub menu of product module. */
    unset($lang->product->menu->project);
    unset($lang->product->menu->doc);

    /* Rename product module. */
    $lang->menu->product = "{$lang->productCommon}|product|index";

    /* Adjust search items. */
    unset($lang->searchObjects['bug']);
    unset($lang->searchObjects['task']);
    unset($lang->searchObjects['testcase']);
    unset($lang->searchObjects['project']);
    unset($lang->searchObjects['build']);
    unset($lang->searchObjects['testtask']);
    unset($lang->searchObjects['testsuite']);
    unset($lang->searchObjects['caselib']);
    unset($lang->searchObjects['testreport']);
}

if(isset($config->global->flow) and $config->global->flow == 'onlyTask')
{
    /* Remove product, report and qa module. */
    unset($lang->menu->product);
    unset($lang->menu->report);
    unset($lang->menu->qa);

    unset($lang->menuOrder[10]);
    unset($lang->menuOrder[20]);
    unset($lang->menuOrder[35]);

    /* Adjust sub menu of my dashboard. */
    unset($lang->my->menu->bug);
    unset($lang->my->menu->testtask);
    unset($lang->my->menu->story);

    /* Adjust sub menu of project  module. */
    unset($lang->project->menu->story);
    unset($lang->project->menu->build);
    unset($lang->project->menu->qa);
    unset($lang->project->menu->product);
    unset($lang->project->menu->doc);

    /* Remove sub menu of product module. */
    unset($lang->product->menu);
    unset($lang->product->menuOrder);

    unset($lang->searchObjects['story']);
    unset($lang->searchObjects['product']);
    unset($lang->searchObjects['testcase']);
    unset($lang->searchObjects['release']);
    unset($lang->searchObjects['productplan']);
    unset($lang->searchObjects['testsuite']);
    unset($lang->searchObjects['caselib']);
    unset($lang->searchObjects['testreport']);
}

if(isset($config->global->flow) and $config->global->flow == 'onlyTest')
{
    /* Remove project and test module. */
    unset($lang->menu->project);
    unset($lang->menu->qa);
    unset($lang->menu->report);

    unset($lang->menuOrder[15]);
    unset($lang->menuOrder[20]);
    unset($lang->menuOrder[35]);

    /* Rename product module. */
    $lang->menu->product = "{$lang->productCommon}|product|index";

    /* Adjust sub menu of my dashboard. */
    unset($lang->my->menu->task);
    unset($lang->my->menu->myProject);
    unset($lang->my->menu->story);

    /* Remove sub menu of project module. */
    unset($lang->project->menu);
    unset($lang->project->menuOrder);
    $lang->project->menu = new stdclass();
    $lang->project->menu->list = array('alias' => '');

    /* Add bug, testcase and testtask module. */
    $lang->menu->bug       = 'Bug|bug|index';
    $lang->menu->testcase  = '功能测试|testcase|browse';
    $lang->menu->unit      = '单元测试|testtask|browseUnits';
    $lang->menu->testsuite = '套件|testsuite|index';
    $lang->menu->testtask  = '测试单|testtask|index';
    $lang->menu->caselib   = '用例库|caselib|browse';

    $lang->menuOrder[6]  = 'bug';
    $lang->menuOrder[7]  = 'testcase';
    $lang->menuOrder[8]  = 'unit';
    $lang->menuOrder[9]  = 'testsuite';
    $lang->menuOrder[10] = 'testtask';
    $lang->menuOrder[11] = 'caselib';
    $lang->menuOrder[12] = 'product';

    /* Adjust sub menu of bug module. */
    $lang->bug->menu = new stdclass();
    $lang->bug->menu->all           = '所有|bug|browse|productID=%s&branch=%s&browseType=all&param=%s';
    $lang->bug->menu->unclosed      = '未关闭|bug|browse|productID=%s&branch=%s&browseType=unclosed&param=%s';
    $lang->bug->menu->openedbyme    = '由我创建|bug|browse|productID=%s&branch=%s&browseType=openedbyme&param=%s';
    $lang->bug->menu->assigntome    = '指派给我|bug|browse|productID=%s&branch=%s&browseType=assigntome&param=%s';
    $lang->bug->menu->resolvedbyme  = '由我解决|bug|browse|productID=%s&branch=%s&browseType=resolvedbyme&param=%s';
    $lang->bug->menu->toclosed      = '待关闭|bug|browse|productID=%s&branch=%s&browseType=toclosed&param=%s';
    $lang->bug->menu->unresolved    = '未解决|bug|browse|productID=%s&branch=%s&browseType=unresolved&param=%s';
    $lang->bug->menu->more          = array('link' => '更多|bug|browse|productID=%s&branch=%s&browseType=unconfirmed&param=%s', 'class' => 'dropdown dropdown-hover');

    $lang->bug->subMenu = new stdclass();
    $lang->bug->subMenu->more = new stdclass();
    $lang->bug->subMenu->more->unconfirmed   = '未确认|bug|browse|productID=%s&branch=%s&browseType=unconfirmed&param=%s';
    $lang->bug->subMenu->more->assigntonull  = '未指派|bug|browse|productID=%s&branch=%s&browseType=assigntonull&param=%s';
    $lang->bug->subMenu->more->longlifebugs  = '久未处理|bug|browse|productID=%s&branch=%s&browseType=longlifebugs&param=%s';
    $lang->bug->subMenu->more->postponedbugs = '被延期|bug|browse|productID=%s&branch=%s&browseType=postponedbugs&param=%s';
    $lang->bug->subMenu->more->overduebugs   = '过期Bug|bug|browse|productID=%s&branch=%s&browseType=overduebugs&param=%s';
    $lang->bug->subMenu->more->needconfirm   = "{$lang->storyCommon}变动|bug|browse|productID=%s&branch=%s&browseType=needconfirm&param=%s";

    $lang->bug->menuOrder[5]  = 'product';
    $lang->bug->menuOrder[10] = 'all';
    $lang->bug->menuOrder[15] = 'unclosed';
    $lang->bug->menuOrder[20] = 'openedbyme';
    $lang->bug->menuOrder[25] = 'assigntome';
    $lang->bug->menuOrder[30] = 'resolvedbyme';
    $lang->bug->menuOrder[35] = 'toclosed';
    $lang->bug->menuOrder[40] = 'unresolved';
    $lang->bug->menuOrder[45] = 'unconfirmed';
    $lang->bug->menuOrder[50] = 'assigntonull';
    $lang->bug->menuOrder[55] = 'longlifebugs';
    $lang->bug->menuOrder[60] = 'postponedbugs';
    $lang->bug->menuOrder[65] = 'overduebugs';
    $lang->bug->menuOrder[70] = 'needconfirm';

    /* Adjust sub menu of testcase. */
    $lang->testcase->menu = new stdclass();
    $lang->testcase->menu->all     = '所有|testcase|browse|productID=%s&branch=%s&browseType=all';
    $lang->testcase->menu->wait    = '待评审|testcase|browse|productID=%s&branch=%s&browseType=wait';
    $lang->testcase->menu->bysuite = array('link' => '套件|testsuite|create|productID=%s', 'class' => 'dropdown dropdown-hover');

    $lang->testcase->subMenu = new stdclass();
    $lang->testcase->subMenu->bysuite = new stdclass();
    $lang->testcase->subMenu->bysuite->create = '建套件|testsuite|create|productID=%s';

    $lang->testcase->menuOrder[5]  = 'product';
    $lang->testcase->menuOrder[10] = 'all';
    $lang->testcase->menuOrder[15] = 'wait';
    $lang->testcase->menuOrder[20] = 'suite';

    /* Adjust sub menu of bug module. */
    $lang->testsuite->menu = new stdclass();

    $lang->testsuite->menuOrder[5]  = 'product';

    /* Adjust sub menu of testtask. */
    $lang->testtask->menu = new stdclass();
    $lang->testtask->menu->totalStatus = '所有|testtask|browse|productID=%s&branch=%s&type=%s,totalStatus';
    $lang->testtask->menu->wait        = '待测版本|testtask|browse|productID=%s&branch=%s&type=%s,wait';
    $lang->testtask->menu->doing       = '测试中版本|testtask|browse|productID=%s&branch=%s&type=%s,doing';
    $lang->testtask->menu->blocked     = '被阻塞版本|testtask|browse|productID=%s&branch=%s&type=%s,blocked';
    $lang->testtask->menu->done        = '已测版本|testtask|browse|productID=%s&branch=%s&type=%s,done';
    $lang->testtask->menu->report      = array('link' => '报告|testreport|browse', 'alias' => 'view,create,edit');

    $lang->testtask->menuOrder[5]  = 'product';
    $lang->testtask->menuOrder[10] = 'scope';
    $lang->testtask->menuOrder[15] = 'totalStatus';
    $lang->testtask->menuOrder[20] = 'wait';
    $lang->testtask->menuOrder[25] = 'doing';
    $lang->testtask->menuOrder[30] = 'blocked';
    $lang->testtask->menuOrder[35] = 'done';
    $lang->testtask->menuOrder[40] = 'report';

    $lang->testreport->menu      = $lang->testtask->menu;
    $lang->testreport->menuOrder = $lang->testtask->menuOrder;

    /* Adjust sub menu of caselib module. */
    $lang->caselib->menu = new stdclass();
    $lang->caselib->menu->all  = '所有|caselib|browse|libID=%s&browseType=all';
    $lang->caselib->menu->wait = '待评审|caselib|browse|libID=%s&browseType=wait';
    $lang->caselib->menu->view = '概况|caselib|view|libID=%s';

    $lang->caselib->menuOrder[5]  = 'lib';
    $lang->caselib->menuOrder[10] = 'all';
    $lang->caselib->menuOrder[15] = 'wait';
    $lang->caselib->menuOrder[20] = 'view';

    /* Adjust sub menu of product module. */
    unset($lang->product->menu->story);
    unset($lang->product->menu->project);
    unset($lang->product->menu->release);
    unset($lang->product->menu->dynamic);
    unset($lang->product->menu->plan);
    unset($lang->product->menu->roadmap);
    unset($lang->product->menu->doc);
    unset($lang->product->menu->module);
    unset($lang->product->menu->index);

    $lang->product->menu->build = array('link' => '版本|product|build', 'subModule' => 'build');

    $lang->product->menuOrder[5]  = 'build';
    $lang->product->menuOrder[10] = 'view';
    $lang->product->menuOrder[15] = 'order';

    $lang->build->menu      = $lang->product->menu;
    $lang->build->menuOrder = $lang->product->menuOrder;

    /* Adjust menu group. */
    $lang->menugroup->bug        = 'bug';
    $lang->menugroup->testcase   = 'testcase';
    $lang->menugroup->case       = 'testcase';
    $lang->menugroup->testtask   = 'testtask';
    $lang->menugroup->testsuite  = 'testsuite';
    $lang->menugroup->caselib    = 'caselib';
    $lang->menugroup->testreport = 'testtask';
    $lang->menugroup->build      = 'product';

    /* Adjust search objects. */
    unset($lang->searchObjects['story']);
    unset($lang->searchObjects['task']);
    unset($lang->searchObjects['release']);
    unset($lang->searchObjects['project']);
    unset($lang->searchObjects['productplan']);
}

/* Cmmi menu. */
$lang->menu->cmmi = new stdclass();
$lang->menu->cmmi->workestimation = array('link' => '估算|workestimation|index|program={PROGRAM}', 'subModule' => 'durationestimation,budget');
$lang->menu->cmmi->programplan    = array('link' => '计划|programplan|browse|program={PROGRAM}', 'subModule' => 'programplan');
$lang->menu->cmmi->project        = array('link' => $lang->projectCommon . '|project|task|projectID={PROJECT}', 'subModule' => ',project,task,');
$lang->menu->cmmi->review         = array('link' => '评审|review|browse|program={PROGRAM}', 'subModule' => ',reviewissue,');
$lang->menu->cmmi->weekly         = array('link' => '报告|weekly|index|program={PROGRAM}', 'subModule' => ',milestone,');
$lang->menu->cmmi->doc            = array('link' => '文档|doc|index|program={PROGRAM}');
$lang->menu->cmmi->product        = array('link' => '需求|product|browse|product={PRODUCT}&branch=&browseType=unclosed&queryID=0&storyType=requirement', 'subModule' => ',story,');
$lang->menu->cmmi->design         = '设计|design|browse|product={PRODUCT}';
$lang->menu->cmmi->ci             = '集成|repo|browse|';
$lang->menu->cmmi->qa             = array('link' => '测试|bug|browse|product={PRODUCT}', 'subModule' => ',testcase,testtask,testsuite,testreport,caselib,');
$lang->menu->cmmi->release        = array('link' => '发布|release|browse|product={PRODUCT}', 'subModule' => 'release');
$lang->menu->cmmi->issue          = '问题|issue|browse|';
$lang->menu->cmmi->risk           = '风险|risk|browse|';
$lang->menu->cmmi->report         = array('link' => '度量|report|programsummary|program={PROGRAM}', 'subModule' => ',report,');
$lang->menu->cmmi->auditplan      = array('link' => 'QA|auditplan|browse|', 'subModule' => 'nc');
$lang->menu->cmmi->cm             = array('link' => '配置|cm|browse|program={PROGRAM}', 'subModule' => 'cm');
$lang->menu->cmmi->pssp           = '过程|pssp|browse|program={PROGRAM}';

$lang->cmmiproduct    = new stdclass();
$lang->workestimation = new stdclass();
$lang->budget         = new stdclass();
$lang->programplan    = new stdclass();
$lang->review         = new stdclass();
$lang->weekly         = new stdclass();
$lang->milestone      = new stdclass();
$lang->design         = new stdclass();
$lang->auditplan      = new stdclass();
$lang->cm             = new stdclass();
$lang->nc             = new stdclass();
$lang->pssp           = new stdclass();
$lang->issue          = new stdclass();
$lang->risk           = new stdclass();
$lang->durationestimation = new stdclass();

$lang->workestimation->menu = new stdclass();
$lang->budget->menu         = new stdclass();
$lang->programplan->menu    = new stdclass();
$lang->review->menu         = new stdclass();
$lang->weekly->menu         = new stdclass();
$lang->milestone->menu      = new stdclass();
$lang->cmmiproduct->menu    = new stdclass();
$lang->design->menu         = new stdclass();
$lang->auditplan->menu      = new stdclass();
$lang->cm->menu             = new stdclass();
$lang->pssp->menu           = new stdclass();
$lang->issue->menu          = new stdclass();
$lang->risk->menu           = new stdclass();
$lang->durationestimation->menu = new stdclass();

$lang->workestimation->menu->index    = '工作量估算|workestimation|index|program={PROGRAM}';
$lang->workestimation->menu->duration = array('link' => '工期估算|durationestimation|index|program={PROGRAM}', 'subModule' => 'durationestimation');
$lang->workestimation->menu->budget   = array('link' => '费用估算|budget|summary|', 'subModule' => 'budget');

$lang->durationestimation->menu = $lang->workestimation->menu;
$lang->budget->menu = $lang->workestimation->menu;

$lang->programplan->menu->gantt = array('link' => '甘特图|programplan|browse|programID={PROGRAM}&productID={PRODUCT}&type=gantt');
$lang->programplan->menu->lists = '阶段列表|programplan|browse|programID={PROGRAM}&productID={PRODUCT}&type=lists';

$lang->review->menu->review = array('link' => '基线评审列表|review|browse|program={PROGRAM}', 'subModule' => 'review');
$lang->review->menu->issue  = array('link' => '问题列表|reviewissue|issue|program={PROGRAM}', 'subModule' => 'reviewissue');

$lang->reviewissue = new stdclass();
$lang->reviewissue->menu = $lang->review->menu;

$lang->weekly->menu->browse = '周报|weekly|index|program={PROGRAM}';
$lang->weekly->menu->issue  = '里程碑报告|milestone|index|program={PROGRAM}';

$lang->cmmiproduct->menu->requirement = '用户需求|product|browse|product={PRODUCT}&branch=&browseType=unclosed&queryID=0&storyType=requirement';
$lang->cmmiproduct->menu->story       = '软件需求|product|browse|product={PRODUCT}&branch=&browseType=unclosed&queryID=0&storyType=story';
$lang->cmmiproduct->menu->track       = '跟踪矩阵|story|track|product={PRODUCT}';

$lang->auditplan->menu->browse = array('link' => '质量保证计划|auditplan|browse|', 'alias' => 'create,edit');
$lang->auditplan->menu->nc     = array('link' => '不符合项|nc|browse|program={PROGRAM}', 'subModule' => 'nc');

$lang->story->menu         = $lang->cmmiproduct->menu;
$lang->milestone->menu     = $lang->weekly->menu;
$lang->nc->menu            = $lang->auditplan->menu;

$lang->cm->menu->browse = array('link' => '基线|cm|browse|program={PROGRAM}', 'alias' => 'create,edit');
$lang->cm->menu->report = '基线状态报告|cm|report|program={PROGRAM}';

$lang->noMenuModule     = array('my', 'todo', 'effort', 'program', 'report', 'attend', 'leave', 'makeup', 'overtime', 'lieu', 'holiday', 'custom', 'auditcl', 'subject', 'admin', 'mail', 'extension', 'dev', 'backup', 'action', 'cron', 'issue', 'risk', 'pssp', 'sms', 'message', 'webhook', 'search');
$lang->haveMenuMethod   = array('custom');
