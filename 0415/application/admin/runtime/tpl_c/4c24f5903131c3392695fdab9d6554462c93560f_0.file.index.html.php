<?php
/* Smarty version 3.1.30, created on 2017-04-16 14:16:23
  from "/Users/apple/site/0415/0415/application/admin/view/category/index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58f30c37663208_67160271',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4c24f5903131c3392695fdab9d6554462c93560f' => 
    array (
      0 => '/Users/apple/site/0415/0415/application/admin/view/category/index.html',
      1 => 1492140884,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:common/layout.html' => 1,
  ),
),false)) {
function content_58f30c37663208_67160271 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_32792354758f30c37662ce4_26554649', "content");
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:common/layout.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "content"} */
class Block_32792354758f30c37662ce4_26554649 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="aw-content-wrap">
        <div class="mod">
            <div class="mod-head">
                <h3>
                    <span class="pull-left">分类管理</span>
                </h3>
            </div>

            <div class="tab-content mod-body">
                <div class="alert alert-success hide error_message"></div>

                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>分类标题</th>
                            <th>排序</th>
                            <th>操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        <form method="post" action="#" id="category_form"></form>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cat_list']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
                        <tr>
                        <td style="text-align:left">
                            <a href="#"><?php echo preg_replace('!^!m',str_repeat('&nbsp;&nbsp;',$_smarty_tpl->tpl_vars['v']->value['level']),$_smarty_tpl->tpl_vars['v']->value['cat_name']);?>
</a>
                        </td>
                        <td>
                            <div class="col-sm-6 clo-xs-12 col-lg-offset-3">
                                0
                            </div>
                        </td>
                        <td>
                            <a title="" href="?m=admin&c=category&a=editAction&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['cat_id'];?>
"class="icon icon-edit md-tip" data-toggle="tooltip"  data-original-title="编辑"></a>
                            <a title="" href="?m=admin&c=category&a=deleteAction&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['cat_id'];?>
" class="icon icon-trash md-tip" data-toggle="tooltip" data-original-title="删除"></a>
                            
                        </td>
                    </tr>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                        </tbody>
                        <tfoot class="mod-foot-center">
                        <tr>
                            <td colspan="3">
                            <form onsubmit="return false" method="post" action="http://localhost/wecenter/?/admin/ajax/save_category/" id="add_category_form">
                               
                                <div class="pull-right" style="margin-right: 150px">
                                 <a class="btn-primary btn" href="?m=admin&c=category&a=addAction">添加分类</a>
                                </div>
                            </form>
                            </td>
                        </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
        <div class="hide" id="target-category">
            <option value="1">默认分类</option>    
        </div>
    </div>

<?php
}
}
/* {/block "content"} */
}
