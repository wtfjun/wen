<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>深圳大学文化产业研究院</title>
<meta name="author" content="深圳大学文化产业研究院" />
<meta name="copyright" content="深圳大学文化产业研究院" />
<meta name="url" content="http://ici.szu.edu.cn" />
<meta name="GOOGLEBOT" content="all" />
<meta name="robots" content="all" />
<meta name="description" content="深圳大学文化产业研究院成立于2009年5月，为深圳大学首个跨学院、多学科的综合性研究机构" />
<meta name="keywords" content="深圳大学,文化产业,研究院" />
<link rel="shortcut icon" href="favicon.ico" /> 
<link href="/Public/css/app.css" rel="stylesheet" type="text/css">

</head>

<body>
<script type="text/javascript" src="/Public/js/jquery.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('.dropdown').mouseenter(function(){
			$('.sublinks').stop(false, true).hide();
		
			var submenu = $(this).parent().next();
	
			submenu.css({
				position:'absolute',
				top: $(this).offset().top + $(this).height() + 'px',
				left: $(this).offset().left + 'px',
				zIndex:1000
			});
			
			submenu.stop().slideDown(300);
			
			submenu.mouseleave(function(){
				$(this).slideUp(300);
			});
		});
	});
</script>

<div class="header">
<form action="news.asp" method="get">

<table width="960" height="295" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td colspan="2" valign="top"><table width="250" border="0" align="right" cellpadding="0" cellspacing="0">
      <tr>
        <td width="130"><input name="keyword" type="text" placeholder="请输入搜索关键字" class="inputsearch" /></td>
        <td width="26"><input type="submit" name="Submit" value="GO" class="btgo" /></td>
        <td width="104" align="right" class="a1"><a href="#">中文</a> / <a href="abouten.asp">English</a></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td valign="bottom" class="menu">
    <ul>
		<li><a href="index.asp" class="dropdown">首 页</a></li>
	</ul>
    <ul>
		<li><a href="/Home/index/page" class="dropdown">研究院概况</a></li>
		<li class="sublinks">
			<a href="page.php">院长致辞</a>
            <a href="page.asp?id=2">机构简介</a>
            <a href="page.asp?id=3">组织架构</a>
            <a href="page.asp?id=543">领导团队</a>
            <a href="page.asp?id=544">顾问团队</a>
            <a href="news_about.asp?id=51">大事历记</a>		</li>
	</ul>
    <ul>
		<li><a href="news.asp?id=2" class="dropdown">新闻动态</a></li>
		<li class="sublinks">
            <a href="news.asp?id=6">本院动态</a>
            <a href="news.asp?id=5">业界新闻</a>		</li>
	</ul>
    <ul>
		<li><a href="teamnews_view.asp?id=540" class="dropdown">学术团队</a></li>
		<li class="sublinks">
            <a href="teamnews_view.asp?id=540">学术委员会</a>
            <a href="teamnews.asp?id=53">专职研究员</a>
            <a href="teamnews.asp?id=23">兼职研究员</a>
            <a href="teamnews.asp?id=24">特约研究员</a>
			<a href="teamnews.asp?id=72">博后流动站</a>
		</li>
	</ul>
    <ul>
		<li><a href="xspage.asp?id=518" class="dropdown">学术研究</a></li>
		<li class="sublinks">
        	<a href="xspage.asp?id=518">科研项目</a>
			<a href="xspage.asp?id=517">学术论文</a>
			<a href="xsnews.asp?id=9">论坛讲座</a>
			<a href="xspage.asp?id=545">书刊出版</a>
			<!--<a href="pdf_list.asp?id=1">院刊在线</a>-->
			<a href="xspage.asp?id=557">获奖信息</a>		</li>
	</ul>
	<ul>
		<li><a href="event_view.asp?id=20" class="dropdown">品牌建设</a></li>
		<li class="sublinks">
			<a href="event_view.asp?id=20">创新论坛</a>
			<a href="event_view.asp?id=22">调研报告</a>
			<a href="event_view.asp?id=23">城市创意指数</a>
		</li>
	</ul>
    <ul>
		<li><a href="edupage.asp?id=556" class="dropdown">人才培养</a></li>
		<li class="sublinks">
			<a href="edupage2.asp?id=556">荔园课库</a>
			<!--<a href="special.asp">项目风采</a>
			<a href="edunews.asp?id=13">在线课堂</a>
			<a href="edunews.asp?id=14">培训动态</a>-->
			<a href="edunews.asp?id=73">研究生培养</a>
		</li>
	</ul>
	<ul>
		<li><a href="news.asp?id=75" class="dropdown">合作交流</a></li>
		<li class="sublinks">
			<a href="news.asp?id=75">学术交流</a>
			<a href="news.asp?id=76">学术合作</a>
		</li>
	</ul>
	</td>
    <td width="100" align="center" valign="bottom" class="menu" style="padding-bottom:5px"><a href="http://e.weibo.com/szuicif/profile" target="_blank" style="color:#FFFFFF"><img src="/Public/images/weibo.gif" border="0" /></a></td>
  </tr>
</table>

</form>
</div>
<script type="text/javascript" src="/Public/js/flash.js"></script>
<script language="javascript" type="text/javascript" src="/Public/js/vticker.js"></script>
<script type="text/javascript">
var data = [{title:'蓝皮书',desc:'',src:'/Public/images/20151215219468826.jpg',href:'event_view.asp?id=27'},{title:'2015中国城市创意指数（CCCI2015）',desc:'',src:'/Public/images/2015127143863963.jpg',href:'event_view.asp?id=26'},{title:'2015文化科技创新论坛（CTIS2015）',desc:'',src:'/Public/images/20151112169186631.jpg',href:'event_view.asp?id=25'},{title:'2014中国城市创意指数（CCCI2014）',desc:'',src:'/Public/images/201412212219591221.jpg',href:'event_view.asp?id=23'},{title:'蓝皮书',desc:'',src:'/Public/images/2014128144266078.jpg',href:'event_view.asp?id=22'}];
$(document).ready(function(){
	$('#flash').d_imagechange({
		data:data,
		playTime:4000,
		width:380,
		height:215,
		btnWidth:20,
		btnHeight:20,
		btnMargin:5,
		btnTop:10,
		desc:false
	});
	//滚动新闻
	$('#scroll_div').vTicker({
		speed: 1500,
		pause: 3000,
		showItems: 5,
		mousePause: true,
		height: 210,
		direction: 'up'
	});
});
function inputPass(id)
{
	var val = prompt("提示：该栏目需要密码才可以进入\r\n","请输入密码");
	if(val){
		$.ajax({
			type     : "POST",
			url      : "ajax.asp",
			data     : "id="+id+"&val="+val+"&flag=password",
			dataType : "html",
			success  : function(ajaxData){
				switch(ajaxData){
					case "True" :
						location.href="down.asp?id=18";
						break;
					case "False" :
						alert("密码错误，请重新输入。");
						$("#a_pass").click();
					break;
				}
			}
		});
	}
}
</script>
<div style="height:10px; overflow:hidden"></div>

<table width="920" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="244" valign="top">
		<table width="100%" border="0" cellspacing="0" cellpadding="0">
			<tr>
			  <td colspan="2"><a href="video.asp?id=17" style="color:#fff;"><img src="/Public/images/onlinemovie.jpg" width="244" height="25" border="0" /></a></td>
			</tr>        
		</table>
<div style="width:244px; height:215px; background:#333333; overflow:hidden;">

	<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="244" height="215">
		<param name="movie" value="http://player.youku.com/player.php/sid/XNDQ0NzA0MTg4/v.swf" />
		<param name="quality" value="high" />
		<param name="wmode" value="opaque" />
		<param name="allowfullscreen" value="true" />
		<!--[if !IE]>-->
		<Object type="application/x-shockwave-flash" data="http://player.youku.com/player.php/sid/XNDQ0NzA0MTg4/v.swf" width="244" height="215">
		<!--<![endif]-->
			<param name="quality" value="high" />
			<param name="wmode" value="opaque" />
			<param name="allowfullscreen" value="true" />
		<!--[if !IE]>-->
		</Object>
		<!--<![endif]-->
	</object>

</div>

<div style="height:10px; overflow:hidden"></div>

<table width="100%" border="0" cellspacing="0" cellpadding="0" style="display:none;">
  <tr>
    <td class="newstitle" style="padding-bottom:5px">
	<a href="pdf_list.asp?id=1"><img src="/Public/images/szhk.jpg" border="0" /></a><br />
	
	<div><a title="国内" href="mnews_view.asp?id=523&cid=342" target="_blank"><span>·</span>[2014年第11期] 国内</a></div>
   	
	<div><a title="国际" href="mnews_view.asp?id=522&cid=342" target="_blank"><span>·</span>[2014年第11期] 国际</a></div>
   	
	<div><a title="创意，陪你走过毕业季" href="mnews_view.asp?id=492&cid=340" target="_blank"><span>·</span>[2014年第11期] 创意，陪你走过毕业季</a></div>
   	
	<div><a title="艺拓国际" href="mnews_view.asp?id=491&cid=339" target="_blank"><span>·</span>[2014年第11期] 艺拓国际</a></div>
   	
	<div><a title="第十一次全国国民阅读调查报告（二）" href="mnews_view.asp?id=490&cid=337" target="_blank"><span>·</span>[2014年第11期] 第十一次全国国民阅读</a></div>
   	
	<div><a title="政策法规" href="mnews_view.asp?id=489&cid=336" target="_blank"><span>·</span>[2014年第11期] 政策法规</a></div>
   	
	<div><a title="会议论坛" href="mnews_view.asp?id=488&cid=336" target="_blank"><span>·</span>[2014年第11期] 会议论坛</a></div>
   	
	<div><a title="地方动态" href="mnews_view.asp?id=487&cid=336" target="_blank"><span>·</span>[2014年第11期] 地方动态</a></div>
   	
    </tr>

</table>

<div style="height:10px; overflow:hidden"></div>
<table width="100%" border="0" cellspacing="0" cellpadding="0" style="min-height:236px;">
        <tr>
          <td height="25" bgcolor="#017F40" class="title2">社会服务</td>
          <td align="right" bgcolor="#017F40" class="more1"><a href="news.asp?id=71" style="color:#fff;">更多</a>&nbsp;</td>
        </tr>
        <tr>
          <td colspan="3" valign="top" class="newstitle" style="padding-bottom:5px; padding-top:4px">

		
		<div><a title="【结项】《亚太新媒体艺术中心可行性研究》"  href="news_view.asp?id=3693"><span>·</span>【结项】《亚太新媒体艺术中心可行...</a></div>
		
		<div><a title="【结项】《前海企业所得税优惠目录文化创意产业咨询服务》"  href="news_view.asp?id=3691"><span>·</span>【结项】《前海企业所得税优惠目录...</a></div>
		
		<div><a title="【在研】《南山文化软实力评估报告》"  href="news_view.asp?id=3690"><span>·</span>【在研】《南山文化软实力评估报告...</a></div>
		
		<div><a title="【结项】《文化创意产业创新资源全球分布调查研究》"  href="news_view.asp?id=3689"><span>·</span>【结项】《文化创意产业创新资源全...</a></div>
		
		<div><a title="【结项】《深圳市坪山新区文化创意产业发展空间规划》"  href="news_view.asp?id=3688"><span>·</span>【结项】《深圳市坪山新区文化创意...</a></div>
		
		<div><a title="【结项】《深圳市南山区文化产业发展策略研究》"  href="news_view.asp?id=3687"><span>·</span>【结项】《深圳市南山区文化产业发...</a></div>
		
		<div><a title="【结项】《深圳市龙岗区文化创意产业发展“十三五”规划》"  href="news_view.asp?id=3686"><span>·</span>【结项】《深圳市龙岗区文化创意产...</a></div>
		
		<div><a title="【在研】《国有文化集团“内部控制机制研究”》"  href="news_view.asp?id=3685"><span>·</span>【在研】《国有文化集团“内部控制...</a></div>
		


</td>
        </tr>
      </table>

<div style="height:11px; overflow:hidden"></div>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td height="25" bgcolor="#017F40" class="title2">媒体关注</td>
          <td align="right" bgcolor="#017F40" class="more1"><a href="news.asp?id=63" style="color:#fff;">更多</a>&nbsp;</td>
        </tr>
        <tr>
          <td colspan="3" valign="top" class="newstitle" style="padding-bottom:5px; padding-top:4px">

		
		<div><a title="【中国社会科学网】第十二届文博会深大荔园分会场开幕 海岸集团捐赠深圳大学1000万元创业基金"  href="news_view.asp?id=4175"><span>·</span>【中国社会科学网】第十二届文博会...</a></div>
		
		<div><a title="【中国社会科学网】创客运动与文化创意产业发展 ——中国中外文论学会文化创意产业研究会第二届学术年会在深圳大学召开"  href="news_view.asp?id=4174"><span>·</span>【中国社会科学网】创客运动与文化...</a></div>
		
		<div><a title="【蛇口消息报】深圳大学创业学院揭牌成立 海岸集团捐资扶持大学生"  href="news_view.asp?id=4173"><span>·</span>【蛇口消息报】深圳大学创业学院揭...</a></div>
		
		<div><a title="【深圳商报】专家探讨创客教育模式"  href="news_view.asp?id=4172"><span>·</span>【深圳商报】专家探讨创客教育模式...</a></div>
		
		<div><a title="【深圳商报】专访深圳大学副校长李凤亮 创业学院培养创业型人才"  href="news_view.asp?id=4171"><span>·</span>【深圳商报】专访深圳大学副校长李...</a></div>
		
		<div><a title="【深圳商报】深大创业学院成立海岸集团捐资千万扶持大学生创业"  href="news_view.asp?id=4170"><span>·</span>【深圳商报】深大创业学院成立海岸...</a></div>
		
		<div><a title="【深圳特区报】深大荔园分会场开幕"  href="news_view.asp?id=4169"><span>·</span>【深圳特区报】深大荔园分会场开幕...</a></div>
		
		<div><a title="【腾讯·大粤网】南山文博会分会场——深大荔园"  href="news_view.asp?id=4168"><span>·</span>【腾讯·大粤网】南山文博会分会场...</a></div>
		
		<div><a title="【南方日报】李凤亮：开源创新加速推进文化科技融合深圳文化产业或迎来爆发式增长"  href="news_view.asp?id=4027"><span>·</span>【南方日报】李凤亮：开源创新加速...</a></div>
		
		<div><a title="【中国社会科学报】大力助推文化创新 打造新型特色智库——访深圳大学副校长、文化产业研究院院长李凤亮教授"  href="news_view.asp?id=4026"><span>·</span>【中国社会科学报】大力助推文化创...</a></div>
		

</td>
        </tr>
      </table>
</td>
    <td width="380" valign="top" style="padding-left:9px; padding-right:9px">
	
	<div id="flash"></div>
	
	<!--<table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td height="25" bgcolor="#017F40" class="title2">动态字幕</td>
        <td align="right" bgcolor="#017F40" class="more1"><a href="#"></a></td>
      </tr>
      <tr>
        <td colspan="2" class="newstitle2" align="left">
        <marquee behavior="scroll" direction="left" loop="-1" scrolldelay="200" onmouseover="this.stop();" onmouseout="this.start();">
        	<a href='news_view.asp?id=530' target='_blank' title='动态字幕'>欢迎来到深圳大学文化产业研究院 欢迎来到深圳大学文化产业研究院 </a>
        </marquee>
        </td>
      </tr>
    </table>-->
	<div style="height:10px; overflow:hidden"></div>
      <table width="380" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="214" height="35"><span class="title1" style="background:url(images/point1.jpg) no-repeat left 1px; padding-left:30px">本院动态</span></td>
        <td width="168" align="right" class="more1"><a href="news.asp?id=6">更多...</a></td>
      </tr>
      <tr>
        <td colspan="2" class="newstitle">
        <div id="scroll_div" style="width:360px; height:217px; overflow:hidden;">
            <ul style="list-style:none; margin:0; padding:0; height:135px;">
                
                <li style="list-style:none; margin:0; padding:0;width:360px; height:25px; overflow:hidden;">
                <div><a title="2016文化科技创新论坛（CTIS2016） ——“文化科技融合与创新生态构建”邀请及论文征集函" href="news_view.asp?id=4287" target="_blank"><span>·</span>2016文化科技创新论坛（CTIS2...</a><font style="font-size:12px; font-family:Arial, Helvetica, sans-serif">(2016-07-09)</font> </div>
                </li>
                
                <li style="list-style:none; margin:0; padding:0;width:360px; height:25px; overflow:hidden;">
                <div><a title="深圳市投资推广署招商三处一行来访" href="news_view.asp?id=4284" target="_blank"><span>·</span>深圳市投资推广署招商三处一行来访...</a><font style="font-size:12px; font-family:Arial, Helvetica, sans-serif">(2016-06-23)</font> </div>
                </li>
                
                <li style="list-style:none; margin:0; padding:0;width:360px; height:25px; overflow:hidden;">
                <div><a title="我院执行副院长周建新教授在第一届“中大-腾讯”互联网人类学论坛上做主题发言" href="news_view.asp?id=4283" target="_blank"><span>·</span>我院执行副院长周建新教授在第一届“中...</a><font style="font-size:12px; font-family:Arial, Helvetica, sans-serif">(2016-06-20)</font> </div>
                </li>
                
                <li style="list-style:none; margin:0; padding:0;width:360px; height:25px; overflow:hidden;">
                <div><a title="美国哥伦比亚大学王海龙博士来我院进行文化交流" href="news_view.asp?id=4281" target="_blank"><span>·</span>美国哥伦比亚大学王海龙博士来我院进行...</a><font style="font-size:12px; font-family:Arial, Helvetica, sans-serif">(2016-06-14)</font> </div>
                </li>
                
                <li style="list-style:none; margin:0; padding:0;width:360px; height:25px; overflow:hidden;">
                <div><a title="我院执行副院长周建新教授赴上杭参会并做主题发言" href="news_view.asp?id=4282" target="_blank"><span>·</span>我院执行副院长周建新教授赴上杭参会并...</a><font style="font-size:12px; font-family:Arial, Helvetica, sans-serif">(2016-06-13)</font> </div>
                </li>
                
                <li style="list-style:none; margin:0; padding:0;width:360px; height:25px; overflow:hidden;">
                <div><a title="我院举行博士后开题报告会" href="news_view.asp?id=4253" target="_blank"><span>·</span>我院举行博士后开题报告会...</a><font style="font-size:12px; font-family:Arial, Helvetica, sans-serif">(2016-06-09)</font> </div>
                </li>
                
                <li style="list-style:none; margin:0; padding:0;width:360px; height:25px; overflow:hidden;">
                <div><a title="周建新教授参加2016京交会·世界客商“一带一路”经贸文化论坛" href="news_view.asp?id=4252" target="_blank"><span>·</span>周建新教授参加2016京交会·世界客...</a><font style="font-size:12px; font-family:Arial, Helvetica, sans-serif">(2016-06-08)</font> </div>
                </li>
                
                <li style="list-style:none; margin:0; padding:0;width:360px; height:25px; overflow:hidden;">
                <div><a title="我校与澳大利亚科廷大学启动“创意经济与媒体科技”博士合作项目" href="news_view.asp?id=4251" target="_blank"><span>·</span>我校与澳大利亚科廷大学启动“创意经济...</a><font style="font-size:12px; font-family:Arial, Helvetica, sans-serif">(2016-06-08)</font> </div>
                </li>
                
                <li style="list-style:none; margin:0; padding:0;width:360px; height:25px; overflow:hidden;">
                <div><a title="荔园文创讲堂（第26期） 视觉人类学如何呈现文明：纽约自然历史博物馆、大都会博物馆个案剖析" href="news_view.asp?id=4232" target="_blank"><span>·</span>荔园文创讲堂（第26期） 视觉人类学...</a><font style="font-size:12px; font-family:Arial, Helvetica, sans-serif">(2016-06-07)</font> </div>
                </li>
                
                <li style="list-style:none; margin:0; padding:0;width:360px; height:25px; overflow:hidden;">
                <div><a title="深圳大学文化产业研究院与通明瓷爱谷文化创意园共建“文化产业创新创客基地”" href="news_view.asp?id=4166" target="_blank"><span>·</span>深圳大学文化产业研究院与通明瓷爱谷文...</a><font style="font-size:12px; font-family:Arial, Helvetica, sans-serif">(2016-05-17)</font> </div>
                </li>
                
                <li style="list-style:none; margin:0; padding:0;width:360px; height:25px; overflow:hidden;">
                <div><a title="创客运动与文化创意产业发展 ——中国中外文论学会文化创意产业研究会第二届学术年会在深圳大学召开" href="news_view.asp?id=4165" target="_blank"><span>·</span>创客运动与文化创意产业发展 ——中国...</a><font style="font-size:12px; font-family:Arial, Helvetica, sans-serif">(2016-05-17)</font> </div>
                </li>
                
                <li style="list-style:none; margin:0; padding:0;width:360px; height:25px; overflow:hidden;">
                <div><a title="我院与龙岗DCC文化创意园合作项目 ——“文化产业创新实践基地”正式揭牌" href="news_view.asp?id=4164" target="_blank"><span>·</span>我院与龙岗DCC文化创意园合作项目 ...</a><font style="font-size:12px; font-family:Arial, Helvetica, sans-serif">(2016-05-16)</font> </div>
                </li>
                
                <li style="list-style:none; margin:0; padding:0;width:360px; height:25px; overflow:hidden;">
                <div><a title="关于第十二届文博会深大荔园分会场系列活动之 “创客运动与文化创意产业发展”学术研讨会活动通知" href="news_view.asp?id=4161" target="_blank"><span>·</span>关于第十二届文博会深大荔园分会场系列...</a><font style="font-size:12px; font-family:Arial, Helvetica, sans-serif">(2016-05-09)</font> </div>
                </li>
                
                <li style="list-style:none; margin:0; padding:0;width:360px; height:25px; overflow:hidden;">
                <div><a title="关于第十二届文博会深大荔园分会场系列活动之第四届建筑文化节活动通知" href="news_view.asp?id=4160" target="_blank"><span>·</span>关于第十二届文博会深大荔园分会场系列...</a><font style="font-size:12px; font-family:Arial, Helvetica, sans-serif">(2016-05-09)</font> </div>
                </li>
                
                <li style="list-style:none; margin:0; padding:0;width:360px; height:25px; overflow:hidden;">
                <div><a title="关于第十二届文博会深大荔园分会场系列活动之海峡两岸高校大学生创客交流营活动通知" href="news_view.asp?id=4159" target="_blank"><span>·</span>关于第十二届文博会深大荔园分会场系列...</a><font style="font-size:12px; font-family:Arial, Helvetica, sans-serif">(2016-05-09)</font> </div>
                </li>
                
                <li style="list-style:none; margin:0; padding:0;width:360px; height:25px; overflow:hidden;">
                <div><a title="关于第十二届文博会深大荔园分会场系列活动之首届全国智能制造（工业4.0）创新创业大赛半决赛活动通知" href="news_view.asp?id=4158" target="_blank"><span>·</span>关于第十二届文博会深大荔园分会场系列...</a><font style="font-size:12px; font-family:Arial, Helvetica, sans-serif">(2016-05-09)</font> </div>
                </li>
                
                <li style="list-style:none; margin:0; padding:0;width:360px; height:25px; overflow:hidden;">
                <div><a title="关于第十二届文博会深大荔园分会场系列活动之2016深圳大学服装设计专业优秀服装发布会活动通知" href="news_view.asp?id=4157" target="_blank"><span>·</span>关于第十二届文博会深大荔园分会场系列...</a><font style="font-size:12px; font-family:Arial, Helvetica, sans-serif">(2016-05-09)</font> </div>
                </li>
                
                <li style="list-style:none; margin:0; padding:0;width:360px; height:25px; overflow:hidden;">
                <div><a title="关于第十二届文博会深大荔园分会场系列活动之海峡两岸高校大学生创客交易展活动通知" href="news_view.asp?id=4156" target="_blank"><span>·</span>关于第十二届文博会深大荔园分会场系列...</a><font style="font-size:12px; font-family:Arial, Helvetica, sans-serif">(2016-05-09)</font> </div>
                </li>
                
                <li style="list-style:none; margin:0; padding:0;width:360px; height:25px; overflow:hidden;">
                <div><a title="关于第十二届文博会深大荔园分会场系列活动之3号艺栈艺术家作品巡展活动通知" href="news_view.asp?id=4155" target="_blank"><span>·</span>关于第十二届文博会深大荔园分会场系列...</a><font style="font-size:12px; font-family:Arial, Helvetica, sans-serif">(2016-05-09)</font> </div>
                </li>
                
                <li style="list-style:none; margin:0; padding:0;width:360px; height:25px; overflow:hidden;">
                <div><a title="第十二届文博会深大荔园分会场开幕式活动通知" href="news_view.asp?id=4154" target="_blank"><span>·</span>第十二届文博会深大荔园分会场开幕式活...</a><font style="font-size:12px; font-family:Arial, Helvetica, sans-serif">(2016-05-09)</font> </div>
                </li>
                
            </ul>
        </div></td>
      </tr>
    </table>
	
	<div style="height:14px; overflow:hidden"></div>
      <table width="380" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="218" height="35"><span class="title1"  style="background:url(images/point1.jpg) no-repeat left 1px; padding-left:30px">业界新闻</span></td>
          <td width="162" align="right" class="more1"><a href="news.asp?id=5">更多...</a></td>
        </tr>
        <tr>
          <td colspan="2" class="newstitle">
          	
			<div><a title="自媒体迎来变革期：从量变走向质变" href="news_view.asp?id=4286" target="_blank"><span>·</span>自媒体迎来变革期：从量变走向质变...</a><font  style="font-size:12px; font-family:Arial, Helvetica, sans-serif">(2016-07-01)</font> </div>
			
			<div><a title="网上付钱学说话，你试过了没有？" href="news_view.asp?id=4285" target="_blank"><span>·</span>网上付钱学说话，你试过了没有？...</a><font  style="font-size:12px; font-family:Arial, Helvetica, sans-serif">(2016-07-01)</font> </div>
			
			<div><a title="电视综艺呼唤“创客精神”" href="news_view.asp?id=4271" target="_blank"><span>·</span>电视综艺呼唤“创客精神”...</a><font  style="font-size:12px; font-family:Arial, Helvetica, sans-serif">(2016-06-24)</font> </div>
			
			<div><a title="聚焦搜索平台竞价排名：“李鬼”泛滥 信息陷阱害人不浅" href="news_view.asp?id=4272" target="_blank"><span>·</span>聚焦搜索平台竞价排名：“李鬼”泛滥 ...</a><font  style="font-size:12px; font-family:Arial, Helvetica, sans-serif">(2016-06-24)</font> </div>
			
			<div><a title="&quot;分答&quot;邀请网友录&quot;遗言&quot; 人生最后60秒你想说点啥" href="news_view.asp?id=4270" target="_blank"><span>·</span>&quot;分答&quot;邀请网友...</a><font  style="font-size:12px; font-family:Arial, Helvetica, sans-serif">(2016-06-24)</font> </div>
			
			<div><a title="未来5年网络入户带宽将超百兆" href="news_view.asp?id=4275" target="_blank"><span>·</span>未来5年网络入户带宽将超百兆...</a><font  style="font-size:12px; font-family:Arial, Helvetica, sans-serif">(2016-06-23)</font> </div>
			
			<div><a title="为何“多莉”在中国游不远？" href="news_view.asp?id=4274" target="_blank"><span>·</span>为何“多莉”在中国游不远？...</a><font  style="font-size:12px; font-family:Arial, Helvetica, sans-serif">(2016-06-23)</font> </div>
			
			<div><a title="“中国好声音”归属风波又添新证据" href="news_view.asp?id=4273" target="_blank"><span>·</span>“中国好声音”归属风波又添新证据...</a><font  style="font-size:12px; font-family:Arial, Helvetica, sans-serif">(2016-06-23)</font> </div>
			
			<div><a title="国家网信办部署开展跟帖评论专项整治" href="news_view.asp?id=4278" target="_blank"><span>·</span>国家网信办部署开展跟帖评论专项整治...</a><font  style="font-size:12px; font-family:Arial, Helvetica, sans-serif">(2016-06-22)</font> </div>
			          </td>
        </tr>
      </table></td>
    <td valign="top">
	
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td height="25" bgcolor="#017F40" class="title2">论坛讲座</td>
          <td align="right" bgcolor="#017F40" class="more1">&nbsp;</td>
        </tr>
        <tr>
          <td colspan="3"  class="newstitle" style="padding-bottom:5px; padding-top:7px">
          
          <div style="width:280px; height:215px; background:#333333; overflow:hidden;">
		
            <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="280" height="215">
                <param name="movie" value="http://player.youku.com/player.php/sid/XMTM5NjM2MDA0OA==/v.swf" />
                <param name="quality" value="high" />
                <param name="wmode" value="opaque" />
                <param name="allowfullscreen" value="true" />
                <!--[if !IE]>-->
                <Object type="application/x-shockwave-flash" data="http://player.youku.com/player.php/sid/XMTM5NjM2MDA0OA==/v.swf" width="280" height="215">
                <!--<![endif]-->
                    <param name="quality" value="high" />
                    <param name="wmode" value="opaque" />
                    <param name="allowfullscreen" value="true" />
                <!--[if !IE]>-->
                </Object>
                <!--<![endif]-->
            </object>
        
        </div>
</td>
        </tr>
      </table>
    
	<table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td height="25" bgcolor="#017F40" class="title2">学者观点</td>
          <td align="right" bgcolor="#017F40" class="more1"><a href="news.asp?id=19" style="color:#fff;">更多</a>&nbsp;</td>
        </tr>
        <tr>
          <td colspan="3"  class="newstitle" style="padding-bottom:5px; padding-top:7px">
          
          
		<div><a title="周建新：客家族谱应当成为文化产业" href="news_view.asp?id=4268" target="_blank"><span>·</span>周建新：客家族谱应当成为文化产业...</a> </div>
		
		<div><a title="前海蛇口自贸区文化创新： 定位与路径" href="news_view.asp?id=4163" target="_blank"><span>·</span>前海蛇口自贸区文化创新： 定位与...</a> </div>
		
		<div><a title="黄韧：作为岭南文化走廊内客家族群性经济网络记忆的曹主造像" href="news_view.asp?id=4152" target="_blank"><span>·</span>黄韧：作为岭南文化走廊内客家族群...</a> </div>
		
		<div><a title="周志民：文化科技产品接受意愿的整合模型研究——以电子书阅读器为例" href="news_view.asp?id=4137" target="_blank"><span>·</span>周志民：文化科技产品接受意愿的整...</a> </div>
		
		<div><a title="周志民：Becoming Friends in online Brand Communities Evidence From China" href="news_view.asp?id=4039" target="_blank"><span>·</span>周志民：Becoming Fri...</a> </div>
		
</td>
        </tr>
      </table>
	  
	  <div style="height:21px; overflow:hidden"></div>
	
	<table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td height="25" bgcolor="#017F40" class="title2">教育培训</td>
        <td align="right" bgcolor="#017F40" class="more1"><a href="news.asp?id=4" style="color:#fff;">更多</a>&nbsp;</td>
      </tr>
      <tr>
        <td colspan="3" class="newstitle" style="padding-bottom:5px; padding-top:7px">
         
		<div><a title="2016深圳大学艺术文化学暑期精品课程班圆满结束" href="news_view.asp?id=4288" target="_blank"><span>·</span>2016深圳大学艺术文化学暑期精品...</a></div>
		
		<div><a title="深圳大学文化产业研究院2016年艺术文化学暑期精品课程招生录取名单" href="news_view.asp?id=4269" target="_blank"><span>·</span>深圳大学文化产业研究院2016年艺...</a></div>
		
		<div><a title="大鹏新区南澳办事处户籍居民创业意识培训圆满结束" href="news_view.asp?id=4260" target="_blank"><span>·</span>大鹏新区南澳办事处户籍居民创业意识...</a></div>
		
		<div><a title="深圳大学文化产业研究院2016年暑期夏令营招生简章" href="news_view.asp?id=4214" target="_blank"><span>·</span>深圳大学文化产业研究院2016年暑...</a></div>
		
		<div><a title="深圳大学文化产业研究院博士后招聘简章" href="news_view.asp?id=4167" target="_blank"><span>·</span>深圳大学文化产业研究院博士后招聘简...</a></div>
		
		  </td>
      </tr>
    </table>
	
	  <div style="height:10px; overflow:hidden"></div>
      
    <!--<table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td height="25" bgcolor="#017F40" class="title2">思奇沙龙</td>
        <td align="right" bgcolor="#017F40" class="more1"><a href="event.asp?id=1" style="color:#fff;">更多</a>&nbsp;</td>
      </tr>
      <tr>
        <td colspan="3" class="newstitle" style="padding-bottom:5px; padding-top:7px">
         
		  </td>
      </tr>
    </table>
	<div style="height:10px; overflow:hidden"></div>-->
      <table width="100%" border="0" cellspacing="0" cellpadding="0" style="display:none;">
        <tr>
          <td height="25" bgcolor="#017F40" class="title2">活动专题</td>
          <td align="right" bgcolor="#017F40" class="more1"><a href="event.asp?id=2" style="color:#fff;">更多</a>&nbsp;</td>
        </tr>
        <tr>
          <td  colspan="3" valign="top" class="newstitle" style="padding-bottom:5px; padding-top:7px">
          
		<div><a title="蓝皮书" href="event_view.asp?id=27" target="_blank"><span>·</span>蓝皮书...</a></div>
		
		<div><a title="2015中国城市创意指数（CCCI2015）" href="event_view.asp?id=26" target="_blank"><span>·</span>2015中国城市创意指数（CCCI201...</a></div>
		
		<div><a title="2015文化科技创新论坛（CTIS2015）" href="event_view.asp?id=25" target="_blank"><span>·</span>2015文化科技创新论坛（CTIS201...</a></div>
		
		<div><a title="2014中国城市创意指数（CCCI2014）" href="event_view.asp?id=23" target="_blank"><span>·</span>2014中国城市创意指数（CCCI201...</a></div>
		
		<div><a title="蓝皮书" href="event_view.asp?id=22" target="_blank"><span>·</span>蓝皮书...</a></div>
		
</td>
        </tr>
      </table>


<div style="height:10px; overflow:hidden"></div>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td height="25" bgcolor="#017F40" class="title2">资料下载</td>
          <td align="right" bgcolor="#017F40" class="more1"><a href="down.asp?id=18" style="color:#fff;">更多</a>&nbsp;</td>
        </tr>
        <tr>
          <td colspan="3" valign="top" class="newstitle" style="padding-bottom:5px; padding-top:7px">
		 
		<div><a title="国家文化产业示范基地管理办法" href="/UploadFile/File/20144231015136475.pdf"><span>·</span>国家文化产业示范基地管理办法...</a></div>
		
		<div><a title="国务院关于加快发展对外文化贸易的意见" href="/UploadFile/File/20143261113493140.pdf"><span>·</span>国务院关于加快发展对外文化贸易的...</a></div>
		
		<div><a title="国务院关于推进文化创意和设计服务与相关产业融合发展的若干意见" href="/UploadFile/File/2014326111363772.pdf"><span>·</span>国务院关于推进文化创意和设计服务...</a></div>
		
		<div><a title="中共广东省委办公厅 广东省人民政府办公厅印发《关于促进我省文化与科技融合发展的意见》的通知" href="/UploadFile/File/20134231332423807.pdf"><span>·</span>中共广东省委办公厅 广东省人民政...</a></div>
		
		<div><a title="促进文化产业与科技创新融合" href="/UploadFile/File/20134192339266938.pdf"><span>·</span>促进文化产业与科技创新融合...</a></div>
		

</td>
        </tr>
      </table>


	  
	  </td>
  </tr>
</table>

<div style="width:920px; margin-left:auto; margin-right:auto; margin-bottom:10px; margin-top:10px">
  
    <table width="920" border="0" cellspacing="0" cellpadding="0" style="line-height:25px; border:1px dotted #cccccc">
    <tr>
      <td width="80" align="center" bgcolor="#eeeeee" style="border-right:3px solid #FFFFFF"><strong>友情链接</strong></td>
      <td bgcolor="#eeeeee" style="padding:7px"><a href="http://www.szu.edu.cn/" target="_blank"><img src="/Public/images/link1.jpg" style="border:1px solid #eeeeee" /></a>&nbsp;&nbsp;<a href="http://www.mcprc.gov.cn/sjzz/whkjs_sjzz/" target="_blank"><img src="/Public/images/link2.jpg" style="border:1px solid #eeeeee" /></a>&nbsp; <a href="http://www.mcprc.gov.cn/whzx/bnsjdt/whcys/" target="_blank"><img src="/Public/images/link3.jpg" style="border:1px solid #eeeeee" /></a>&nbsp;&nbsp;<a href="http://www.icipku.org/" target="_blank"><img src="/Public/images/link4.jpg" style="border:1px solid #eeeeee" /></a>&nbsp;&nbsp;<a href="http://www.rcci.org.cn/" target="_blank"><img src="/Public/images/link10.jpg" style="border:1px solid #eeeeee" /></a><br />
      <a href="http://www.cnci.gov.cn/" target="_blank"><img src="/Public/images/link5.jpg" style="border:1px solid #eeeeee" /></a>&nbsp;&nbsp;<a href="http://www.cdi.net.cn/" target="_blank"><img src="/Public/images/link6.jpg" border="0" style="border:1px solid #eeeeee" /></a>&nbsp;&nbsp;<a href="http://ccira.icicn.net/" target="_blank"><img src="/Public/images/link7.jpg" border="0" style="border:1px solid #eeeeee" /></a>&nbsp;&nbsp;<a href="http://www.0755hz.cn/zdhz/15nian05/20141214/szwenboh2015.html" target="_blank"><img src="/Public/images/link8.jpg" style="border:1px solid #eeeeee" /></a>&nbsp;&nbsp;<a href="http://www.thecreativeindustries.co.uk/" target="_blank"><img src="/Public/images/link9.jpg" style="border:1px solid #eeeeee" /></a></td>
    </tr>
  </table>
</div>


<div class="footer">
	版权所有：深圳大学文化产业研究院 2010-2012&nbsp;&nbsp;&nbsp;
    地址：深圳大学粤海门广场B栋一楼&nbsp;&nbsp;&nbsp;
    邮编：518060&nbsp;&nbsp;&nbsp;
    您是第 56 位访客&nbsp;&nbsp;&nbsp;
    技术支持：<a href="http://www.ajrice.com" target="_blank">阿基米科技</a>

</body>
</html>footer.html