<?php /* Smarty version Smarty-3.1.15, created on 2013-10-07 23:47:53
         compiled from "templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13932158465252f37c7c3b14-50409929%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '90093ad09988b466f409a1871733c5589014713e' => 
    array (
      0 => 'templates/index.tpl',
      1 => 1381182111,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13932158465252f37c7c3b14-50409929',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5252f37c8080c6_69801331',
  'variables' => 
  array (
    'logs' => 0,
    'log' => 0,
    'result' => 0,
    'team' => 0,
    'cookie' => 0,
    'success' => 0,
    'teams' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5252f37c8080c6_69801331')) {function content_5252f37c8080c6_69801331($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>




<div class="module">
  <?php echo $_smarty_tpl->getSubTemplate ("messages.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


  <?php if ($_GET['password']=="webteam") {?>
    
  
    <table width=100% class="teams">
        <tr style="font-weight:bold"><td>TeamID</td><td>Team</td><td>Points</td><td>Locations</td><td>Time</td></tr>
        <?php  $_smarty_tpl->tpl_vars['log'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['log']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['logs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['log']->key => $_smarty_tpl->tpl_vars['log']->value) {
$_smarty_tpl->tpl_vars['log']->_loop = true;
?>
          <tr><td><?php echo $_smarty_tpl->tpl_vars['log']->value['tid'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['log']->value['name'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['log']->value['points'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['log']->value['location'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['log']->value['time'];?>
</td></tr>
        <?php }
if (!$_smarty_tpl->tpl_vars['log']->_loop) {
?>
          <tr><td colspan=100% class="tcenter">No logs</td></tr>
        <?php } ?>
      </table>
  
  <?php } else { ?>
  
    <?php if ($_smarty_tpl->tpl_vars['result']->value) {?>
      <div class="location tcenter">
      
        <?php if (!$_smarty_tpl->tpl_vars['team']->value) {?>
        
      
          <form class="tcenter" method="post"><br/>
          
            <h1>Insert your TeamID</h1><br/>
            <input type="text" size=30 class="tcenter" maxlength=5 name="id" value="<?php echo $_smarty_tpl->tpl_vars['cookie']->value;?>
"/>
            <input type="submit" value="Send"/><br/><br/>
            <small>If you don't remember it, find it on the event's main page!</small>
          </form><br/>
        <?php } else { ?>
      
        <form class="tcenter" method="get" action="index.php">
          <input type="submit" value="Go to main page"/>
        </form>
        <?php }?>
      </div>
    
    <?php } else { ?>
      <?php if (!$_smarty_tpl->tpl_vars['team']->value) {?>
        <?php if (!$_smarty_tpl->tpl_vars['success']->value) {?>
        <form class="tcenter" method="post"><br/>
          <h1>Register team</h1><br/><br/>
          <input type="text" size=30 maxlength=30 name="team"/>
          <input type="submit" value="Register team"/><br/><br/>
          <small>Use only letters, digits and spaces in team name. Max 30 chars.</small>
        </form><br/>
    
      
        <?php }?>
      <?php } else { ?><br/>
        <h1 class="tcenter">Your TeamID: <?php echo $_smarty_tpl->tpl_vars['team']->value;?>

        <br/>
        <small>Contact our team if that is wrong & good luck!</small></h1>
      <?php }?>
      <br/><br/>
      <table width=100% class="teams">
        <tr style="font-weight:bold"><td>TeamID</td><td>Team</td><td>Points</td><td>Places</td></tr>
        <?php  $_smarty_tpl->tpl_vars['team'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['team']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['teams']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['team']->key => $_smarty_tpl->tpl_vars['team']->value) {
$_smarty_tpl->tpl_vars['team']->_loop = true;
?>
          <tr><td><?php echo $_smarty_tpl->tpl_vars['team']->value['id'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['team']->value['name'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['team']->value['points'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['team']->value['places'];?>
</td></tr>
        <?php }
if (!$_smarty_tpl->tpl_vars['team']->_loop) {
?>
          <tr><td colspan=100% class="tcenter">No teams</td></tr>
        <?php } ?>
      </table><br/><Br/>
      <?php if (!$_smarty_tpl->tpl_vars['team']->value) {?>
      <div class="tcenter">
        <img src="images/qr1.png"/>
      </div>
      <?php }?>
    <?php }?>
  <?php }?>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
