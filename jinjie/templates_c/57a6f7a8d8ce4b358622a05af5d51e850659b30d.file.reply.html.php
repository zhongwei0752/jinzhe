<?php /* Smarty version Smarty-3.1.16, created on 2014-02-24 14:30:11
         compiled from ".\templates\reply.html" */ ?>
<?php /*%%SmartyHeaderCode:147675305a5bca8e115-42299385%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '57a6f7a8d8ce4b358622a05af5d51e850659b30d' => 
    array (
      0 => '.\\templates\\reply.html',
      1 => 1393251448,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '147675305a5bca8e115-42299385',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5305a5bcaffb53_03637843',
  'variables' => 
  array (
    'cookie' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5305a5bcaffb53_03637843')) {function content_5305a5bcaffb53_03637843($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

  <div class="part pt-main" style="width:960px;">

    <div class="group gp1">
	
		<div class="mod mod-searchBar" >
		  
			  <div class="mod mod01 mod-notic">
                <div class="mhd"><b></b>
                  <h2>客服中心</h2>
                </div>
			  <div class="mod mod-ksfw" style="height: 120px;">
                <ul>
                  <li style="background: url(./templates/img/ksfw.fw.png) no-repeat;"><a href="./templates/custom.html">在线客服</a></li>
                  <li style="background: url(./templates/img/ksfw.fw.png) no-repeat;"><a href="list.php?op=reply">客户留言</a></li>

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
         <h2>发布留言<?php if ($_smarty_tpl->tpl_vars['cookie']->value) {?><a href="replymore.php" style="float:right;color:#333;">查看评论</a><?php }?></h2>
        </div>
         <div class="mbd">
          <br/>
            <span style="color:red;">*</span>标&nbsp;&nbsp;&nbsp;&nbsp;题：<input type="text" name="subject" id="subject" style="width:300px;"><br/>
            <span style="color:red;">*</span>联系方式：<input type="text" name="tel" id="tel" style="width:300px;"><br/>
            <span style="color:red;">*</span>姓&nbsp;&nbsp;&nbsp;&nbsp;名：<input type="text" id="name" name="name" style="width:130px;">&nbsp;<span style="color:red;">*</span>问题类型:
            <select style="width:100px;" id="qclass">
              <option value ="咨询">咨询</option>
              <option value ="回复">回复</option>
              <option value="建议">建议</option>
            </select><br/>
             <span style="float:left;"><span style="color:red;">*</span>内&nbsp;&nbsp;&nbsp;&nbsp;容：</span><textarea name="message" style="width:300px;height:100px;" id="content"></textarea>
             <div class="mod mod01 mod-notic" style="height:180px;">
                      <span class="btn01bg" style="margin-top:10px;margin-left:160px;">
                          <input type="button" id="submit" value="提交" class="btn01" />
                        </span>
                    
                    </div>
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
<script language="JavaScript" type="text/JavaScript"> 
    $("#submit").click(function(){
        var subject=$('#subject').val();
        var tel=$('#tel').val();
        var name=$('#name').val();
        var qclass=$('#qclass').val();
        var content=$('#content').val();
        if(!subject||!tel||!name||!qclass||!content){
            alert("选项有空值");
        }else{
            $.ajax({
                   type: "POST",
                   url: "deal.php",
                   data: "reply=1&subject="+$('#subject').val()+"&tel="+$('#tel').val()+"&name="+$('#name').val()+"&qclass="+$('#qclass').val()+"&content="+$('#content').val()+"",//提交表单，相当于CheckCorpID.ashx?ID=XXX
                    async: true,                    
                      success: function (data) {
                        alert("发布成功");
                          window.location.reload();


               
                      
                      }
                });
          }
    });  
</script>
</body>
</html>

<?php }} ?>
