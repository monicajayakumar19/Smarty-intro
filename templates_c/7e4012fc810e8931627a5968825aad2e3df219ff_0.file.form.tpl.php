<?php
/* Smarty version 3.1.34-dev-7, created on 2020-03-12 09:09:07
  from 'C:\xampp\htdocs\projects\Smarty-intro\templates\form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e69ee23a65659_91443225',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7e4012fc810e8931627a5968825aad2e3df219ff' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projects\\Smarty-intro\\templates\\form.tpl',
      1 => 1584000429,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e69ee23a65659_91443225 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
ob_start();
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>




<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20914318665e69ee23a62069_85085271', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block 'body'} */
class Block_20914318665e69ee23a62069_85085271 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_20914318665e69ee23a62069_85085271',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <h1>Registraton Page </h1>
    <div class="container">
    <div class="row">
    <div class="col-lg-4 ">
    <div class="panel panel-info">
    <div class="panel panel-heading"> REGISTRATION FORM </div>
    <div class="panel-body">
    <form action="crud.php" method="POST">
       <div class="form-group">
    <label for="id"> EMPLOYEE ID </label>
    <input type="text" name="emp_id" class="form-control">
    </div>
    <div class="form-group">
    <label for="id"> EMPLOYEE NAME </label>
    <input type="text" name="emp_name" class="form-control">
    
    </div>
    <div class="form-group">
    <label for=""> PASSWORD </label>
    <input type="text" name="pass" class="form-control">
    </div>
    <div class="form-group">
    <label for=""> CITY</label>
    <input type="text" name="city" class="form-control">
    </div>
    <div class="form-group">
    <label for=""> STATUS </label>
    <input type="text" name="status" class="form-control">
    </div>
    <button class="btn btn-primary"> REGISTER </button>

    </div>
    </div>
    </div>
    </div>
    
    </div>
    

    </form>
 
<?php
}
}
/* {/block 'body'} */
}
