<?php /* Smarty version Smarty-3.1.16, created on 2014-02-24 14:39:45
         compiled from ".\templates\more.html" */ ?>
<?php /*%%SmartyHeaderCode:116605305667ab087e2-58049719%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '82798d17b50f57fb11655d897fe08ab4193b0669' => 
    array (
      0 => '.\\templates\\more.html',
      1 => 1393251580,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '116605305667ab087e2-58049719',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5305667ab937a0_57904988',
  'variables' => 
  array (
    'name' => 0,
    'viewnum' => 0,
    'subject' => 0,
    'message' => 0,
    'cookie' => 0,
    'url' => 0,
    'url1' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5305667ab937a0_57904988')) {function content_5305667ab937a0_57904988($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

  <div class="part pt-main" style="width:960px;">

    <div class="group gp1">
	
		<div class="mod mod-searchBar" >
		  
			  <div class="mod mod01 mod-notic">
                <div class="mhd"><b></b>
                  <h2>公司简介</h2>
                </div>
			  <div class="mod mod-ksfw" style="height: 240px;">
                 <ul>
                  <li class="ksfw01"><a href="product.html">理财产品</a></li>
                  <li class="ksfw02"><a href="invest.html">项目投资</a></li>
                  <li class="ksfw03"><a href="/download/">第三方支付</a></li>
                  <li class="ksfw04"><a href="/rlzy/zpxx/">公益信托</a></li>
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
			  
               <style>
               .mod-notic .mbd {
                height: 168px;
                padding: 8px 9px;
                background: url(http://www.dytrustee.com/styles/index/images/notic.png) repeat;
               }
               </style>
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
          <h2><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
<span style="float:right;color:#333">点击量:<?php echo $_smarty_tpl->tpl_vars['viewnum']->value;?>
<span></h2>
        </div>
        <div  style="width:720px;">

          <br>
          <p style="text-align:center;font-size:14px;"><?php echo $_smarty_tpl->tpl_vars['subject']->value;?>
</p>
          <br/>
          <p style="margin-left:10px;"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</p>
          <br/>

            </div>
          <?php if ($_smarty_tpl->tpl_vars['cookie']->value) {?> <span style="float:right;"><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
">修改</a>|<a href="<?php echo $_smarty_tpl->tpl_vars['url1']->value;?>
">删除</a></span><?php }?>

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
