<?php /* Smarty version Smarty-3.1.16, created on 2014-02-24 15:01:34
         compiled from ".\templates\instroduce.html" */ ?>
<?php /*%%SmartyHeaderCode:9361530b57f39f3759-95095342%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd3a3bf801272b6415c960f19aecac2288b0733ba' => 
    array (
      0 => '.\\templates\\instroduce.html',
      1 => 1393254093,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9361530b57f39f3759-95095342',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_530b57f3add158_60539114',
  'variables' => 
  array (
    'cookie' => 0,
    'list' => 0,
    'pageup' => 0,
    'pagedown' => 0,
    'pageconfig' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530b57f3add158_60539114')) {function content_530b57f3add158_60539114($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

  <div class="part pt-main" style="width:960px;">

    <div class="group gp1">
	
		<div class="mod mod-searchBar" >
		  
			  <div class="mod mod01 mod-notic">
                <div class="mhd"><b></b>
                  <h2>公司简介</h2>
                </div>
			  <div class="mod mod-ksfw" style="height: 240px;">
                <ul>
                  <li style="background: url(./templates/img/ksfw.fw.png) no-repeat;"><a href="list.php?op=instroduce">企业背景</a></li>
                  <li style="background: url(./templates/img/ksfw.fw.png) no-repeat;"><a href="list.php?op=culture">企业文化</a></li>
                  <li style="background: url(./templates/img/ksfw.fw.png) no-repeat;"><a href="list.php?op=say">董事长致辞</a></li>
                  <li style="background: url(./templates/img/ksfw.fw.png) no-repeat;"><a href="list.php?op=net">分公司网络</a></li>
                  <li style="background: url(./templates/img/ksfw.fw.png) no-repeat;"><a href="list.php?op=fa">发展历程</a></li>

<!--                   <a href="/rlzy/zpxx/"><li class="ksfw05">资产信托</li></a>
                  <a href="/rlzy/zpxx/"><li class="ksfw06">自营业务</li></a> -->
                </ul>
              </div>
			 <!--  <div class="tab-cont">
				<div class="cont hover">
					<form  method="get" name="xxss"  class="formSea01">
					  <p>
						用户名:<input type="text" maxlength="26" size="20px; name="k""/>
					  </p>
                      <p>
                       密&nbsp;&nbsp;码:<input type="text" maxlength="26" size="20px; name="k""/>
                      </p>
					  <p style="float:left;">
						
						&nbsp; <span class="btn01bg" style="margin-top:-40px;">
						  <input type="button" value="登录" class="btn01" />
						</span>
						</p>
                        <p>
                        
                        &nbsp; <span class="btn01bg" style="margin-top:-40px;">
                          <input type="button" value="注册" class="btn01" />
                        </span>
                        </p>
					</form>
					
				</div>
					
			  </div> -->
			  
				
			</div>
			   
		  </div>
		  
		  
      <!-- <div class="mod mod-ksfw">
        <ul>
          <a href="mailto:zhizj@csg.cn;"><li class="ksfw01">资金信托</li></a>
          <a href="/kfzx/kfly/"><li class="ksfw02">票据信托</li></a>
          <a href="/download/"><li class="ksfw03">财产信托</li></a>
          <a href="/rlzy/zpxx/"><li class="ksfw04">公益信托</li></a>
          <a href="/rlzy/zpxx/"><li class="ksfw05">资产信托</li></a>
          <a href="/rlzy/zpxx/"><li class="ksfw06">自营业务</li></a>
        </ul>
      </div> -->
     
    </div>
    <div class="group gp2" style="width:720px;">
      <div class="mod mod-cpxx mod02" >
        <div class="mhd" style="background: url(./templates/img/lanmu.png) 0 -94px no-repeat;"> 
           <h2>企业背景<?php if ($_smarty_tpl->tpl_vars['cookie']->value) {?><a href="cp.php?op=instroduce" style="float:right;color:#333;">发布</a><?php }?></h2>
        </div>
            <div class="mbd">
           <ul class="disc01" style="height:260px;">         
            　<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['sec1'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['name'] = 'sec1';
$_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['list']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['total']);
?>
                <li style="line-height:6px;">
                    <span><?php echo $_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sec1']['index']]['dateline'];?>
</span>
                    <a href='more.php?id=<?php echo $_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sec1']['index']]['id'];?>
&op=instroduce'  title='<?php echo $_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sec1']['index']]['subject'];?>
'>
                    <?php echo $_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sec1']['index']]['subject'];?>
</a>
                </li>
　　          
　　          <?php endfor; endif; ?>
            
          </ul>
            <p style="float:right;"><?php echo $_smarty_tpl->tpl_vars['pageup']->value;?>
<?php echo $_smarty_tpl->tpl_vars['pagedown']->value;?>
<?php echo $_smarty_tpl->tpl_vars['pageconfig']->value;?>
</p><br/>
            </div>
           

      </div> 
      
    </div>
  </div>
     <br/>
  <p style="text-align:center;margin-top:10px;">友情链接：<a href="#">四川信托</a> <a href="#">新华信托</a> <a href="#">建设银行</a> <a href="#">华润信托</a> <a href="#">平安信托</a> <a href="#">工商银行</a> <a href="#">中国银行</a> <a href="#">吉林信托</a> <a href="#">大业信托</a></p>
<br/>
  </div>

</div>


<div class="pft">
	<p>版权所有：广州鑫泽投资管理有限公司</p>
	<p>公司总部：广州市天河区体育东路140号南方证券大厦506  </p>
    <p>E-mail:gdxinzetouzi@163.com </p>
    <p>工作时间：工作日08:30-17:30</p>
</div>


<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"0","bdSize":"16"},"slide":{"type":"slide","bdImg":"0","bdPos":"left","bdTop":"100"}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=86835285.js?cdnversion='+~(-new Date()/36e5)];</script>
<script type="text/javascript" src="../../ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script>!window.jQuery && document.write('<script src="./templates/js/jquery-1.7.1.min.js"><\/script>')</script>
<!--[if lt IE 9]>
    <script src="js/selectivizr-and-extra-selectors.min.js"></script>
    <script src="../../ie7-js.googlecode.com/svn/version/2.1(beta4)/IE8.js"></script>
<![endif]-->
<script src="./templates/js/respond.min.js"></script>
<script src="./templates/js/jquery.easing-1.3.min.js"></script>
<script src="./templates/sliders/elastslider/jquery.eislideshow.js"></script>
<script src="./templates/js/jquery.jcarousel.min.js"></script>
<script src="./templates/js/jquery.cycle.all.min.js"></script>
<script src="./templates/js/custom.js"></script>
<script src="./templates/themeChanger/js/colorpicker.js"></script>
<script src="./templates/themeChanger/js/themeChanger.js"></script>
</body>
</html>

<?php }} ?>
