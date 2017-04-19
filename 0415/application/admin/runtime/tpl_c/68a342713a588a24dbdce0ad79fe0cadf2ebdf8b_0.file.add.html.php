<?php
/* Smarty version 3.1.30, created on 2017-04-16 14:17:31
  from "/Users/apple/site/0415/0415/application/admin/view/topic/add.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58f30c7b076a87_40923282',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '68a342713a588a24dbdce0ad79fe0cadf2ebdf8b' => 
    array (
      0 => '/Users/apple/site/0415/0415/application/admin/view/topic/add.html',
      1 => 1492220696,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:common/layout.html' => 1,
  ),
),false)) {
function content_58f30c7b076a87_40923282 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_138656865658f30c7b0764a2_07779602', "content");
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:common/layout.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "content"} */
class Block_138656865658f30c7b0764a2_07779602 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="aw-content-wrap">
        <form method="post" action="?m=admin&c=topic&a=addHandleAction" 
        enctype="multipart/form-data" id="settings_form">
        
        <div class="mod">
            <div class="mod-head">
                <h3>
                    <ul class="nav nav-tabs">
                        <li><a href="topic.html">话题管理</a></li>
                        <li class="active"><a href="javascript:;">新建话题</a></li>
                    </ul>
                </h3>
            </div>

            <div class="tab-content mod-content">
                <table class="table table-striped">
                    <tbody><tr>
                        <td>
                            <div class="form-group">
                                <span class="col-sm-4 col-xs-3 control-label">缩略图:</span>
                                <div class="col-sm-5 col-xs-8">
                                    <input type="file" name="topic_thumb">
                                </div>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <div class="form-group">
                                <span class="col-sm-4 col-xs-3 control-label">话题标题:</span>
                                <div class="col-sm-5 col-xs-8">
                                    <input type="text" name="topic_title" class="form-control">
                                </div>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <div class="form-group">
                                <span class="col-sm-4 col-xs-3 control-label">话题描述:</span>
                                <div class="col-sm-5 col-xs-8">
                                    <textarea name="topic_desc" class="form-control"></textarea>
                                </div>
                            </div>
                        </td>
                    </tr>

                    </tbody><tfoot>
                    <tr>
                        <td>
                            <input type="submit" class="btn btn-primary center-block" value="保存设置">
                        </td>
                    </tr>
                    </tfoot>
                </table>
            </div>
        </div>
        </form>
    </div>
<?php
}
}
/* {/block "content"} */
}
