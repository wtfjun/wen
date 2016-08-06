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
		<li><a href="page?id=2" class="dropdown">研究院概况</a></li>
		<li class="sublinks">
			<a href="page?id=1">院长致辞</a>
            <a href="page?id=2">机构简介</a>
            <a href="page?id=3">组织架构</a>
            <a href="page?id=4">领导团队</a>
            <a href="page?id=5">顾问团队</a>
            <a href="page?id=6">大事历记</a>		</li>
	</ul>
    <ul>
		<li><a href="news?id=1" class="dropdown">新闻动态</a></li>
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
<div style="height:10px; overflow:hidden"></div>


<div class="title3">新闻动态<span style="float:right;"><a href="javascript:history.go(-1)"> 
<img src="/Public/images/back.jpg" border="0" /></a></span></div>

<table width="920" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="244" valign="top" class="leftmenu">
     <a href="news?id=1">业界新闻</a><br />
    
      <a href="news?id=2">本院动态</a><br />
    
      <a href="news?id=3">媒体关注</a><br />
    
      <a href="news?id=4">重大项目</a><br />
    
      <a href="news?id=5">社会服务</a><br />
    
    </td>
    <td valign="top" class="word1">
    <div class="title4">自媒体迎来变革期：从量变走向质变 <span>2016-07-01 15:50</span></div>
	<div class="word3"><p style="text-align: center;"><span style="color: rgb(128, 128, 128); font-family: 宋体; font-size: 13px; line-height: 25px; orphans: 2; text-align: center; text-indent: 26px; widows: 2; background-color: rgb(247, 250, 255);">深圳大学文化产业研究院 &nbsp; &nbsp;时间: 2016-7-1 &nbsp; 来源：中国新闻出版广电报</span></p><p><span style="color: rgb(128, 128, 128); font-family: 宋体; font-size: 13px; line-height: 25px; orphans: 2; text-align: center; text-indent: 26px; widows: 2; background-color: rgb(247, 250, 255);"></span></p><p style="padding: 0px; margin-top: 0px; margin-bottom: 10px; border: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 32px; color: rgb(57, 57, 57); font-family: 宋体; white-space: normal; text-indent: 2em; background-color: rgb(255, 255, 255);">在“人人都可以成为自媒体”的时代，自媒体似乎没有门槛。但最近，自媒体行业正在发生一些改变。《中国新闻出版广电报》记者从中国人民大学创意产业技术研究院召开的互联网文化沙龙上了解到，以微信公众号为代表的自媒体总阅读量正在下降，与此同时，优质自媒体的阅读量不降反升。</p><p style="padding: 0px; margin-top: 0px; margin-bottom: 10px; border: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 32px; color: rgb(57, 57, 57); font-family: 宋体; white-space: normal; background-color: rgb(255, 255, 255);">&nbsp;“这意味着自媒体内容质量正在上升。”中国人民大学创业学院副院长、新闻学博士陈姚认为。</p><p style="padding: 0px; margin-top: 0px; margin-bottom: 10px; border: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 32px; color: rgb(57, 57, 57); font-family: 宋体; white-space: normal; background-color: rgb(255, 255, 255);"><strong style="padding: 0px; margin: 0px; border: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">&nbsp; 进入洗牌期</strong></p><p style="padding: 0px; margin-top: 0px; margin-bottom: 10px; border: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 32px; color: rgb(57, 57, 57); font-family: 宋体; white-space: normal; background-color: rgb(255, 255, 255);"><strong style="padding: 0px; margin: 0px; border: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">&nbsp; 自媒体商业价值提高</strong></p><p style="padding: 0px; margin-top: 0px; margin-bottom: 10px; border: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 32px; color: rgb(57, 57, 57); font-family: 宋体; white-space: normal; background-color: rgb(255, 255, 255);">&nbsp; “去年从8月到11月，微信公众号总阅读量每个月都要下降10多亿。今年一季度开始，每个月公众号发文量也在以50%的量级下降。这引起了业内不小的震动。”长期研究新媒体传播的陈姚对自媒体下滑的现象记忆犹新。很多人因此高呼自媒体“不行了”，但很快他们发现，“不行”的只是内容不好的自媒体，优质自媒体的用户、阅读量仍在继续上升。“今年以来公众号文章数量下降，但阅读量以20%左右的速度增长，平均点赞率达到了10%左右，在不断上升。”陈姚认为，这说明自媒体内容生产模式正在急剧转变。</p><p style="padding: 0px; margin-top: 0px; margin-bottom: 10px; border: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 32px; color: rgb(57, 57, 57); font-family: 宋体; white-space: normal; background-color: rgb(255, 255, 255);">&nbsp; 优质自媒体最直接的价值体现在商业收入的上升。前不久，熊猫传媒集团董事长申晨策划了一个案例，他打出了“我们欠郭德纲一杯酒”的口号，着眼情怀，用一条微信来推送，当天，这条微信产生了50万元的购买量。据申晨透露，2015年一年，他们给优秀的自媒体人带来了7000多万元收入，同时带来了35亿元的购买量。</p><p style="padding: 0px; margin-top: 0px; margin-bottom: 10px; border: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 32px; color: rgb(57, 57, 57); font-family: 宋体; white-space: normal; background-color: rgb(255, 255, 255);">&nbsp; “在未来，一点资讯、朋友圈、百度百家、微博里的内容可以直接转化成自媒体的商业收入。”除了直接的广告收入外，自媒体人还可以参与购买收入分成。可以说，只要内容“给力”，不愁没有变现的机会。</p><p style="padding: 0px; margin-top: 0px; margin-bottom: 10px; border: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 32px; color: rgb(57, 57, 57); font-family: 宋体; white-space: normal; background-color: rgb(255, 255, 255);"><strong style="padding: 0px; margin: 0px; border: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">&nbsp; 平台纷纷成立</strong></p><p style="padding: 0px; margin-top: 0px; margin-bottom: 10px; border: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 32px; color: rgb(57, 57, 57); font-family: 宋体; white-space: normal; background-color: rgb(255, 255, 255);"><strong style="padding: 0px; margin: 0px; border: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">&nbsp; 版权意识需加强</strong></p><p style="padding: 0px; margin-top: 0px; margin-bottom: 10px; border: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 32px; color: rgb(57, 57, 57); font-family: 宋体; white-space: normal; background-color: rgb(255, 255, 255);">&nbsp; 对于好内容的需求不仅是广告主，各大互联网自媒体平台也对优质内容表现出了渴求的姿态。今年1月20日，一点资讯发布“点金计划”，宣布对自媒体大规模补贴计划。3月1日，腾讯推出了企鹅媒体平台，推出2亿元的自媒体扶持计划。4月12日，北京电视台和360公司一起推出北京时间，号称是视频版的“今日头条”，加大对自媒体内容的布局。5月10日，阿里巴巴旗下UC公众号也推出了自媒体服务计划，宣布要让媒体像天猫品牌商家一样拥有自己的“内容店铺”。</p><p style="padding: 0px; margin-top: 0px; margin-bottom: 10px; border: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 32px; color: rgb(57, 57, 57); font-family: 宋体; white-space: normal; background-color: rgb(255, 255, 255);">&nbsp; 在自媒体内容价值提升的同时，很多自媒体人对版权保护重视度也需要提高。根据清华大学教授沈阳的研究报告，目前“10万+”以上的公众号的文章中96%没有原创标识。这说明自媒体原创保护和认证意识不足，特别是跨平台侵权事件经常发生，需要进一步加强研究。</p><p style="padding: 0px; margin-top: 0px; margin-bottom: 10px; border: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 32px; color: rgb(57, 57, 57); font-family: 宋体; white-space: normal; background-color: rgb(255, 255, 255);">&nbsp; 针对如何加强自媒体内容版权保护与管理的问题，中国文字著作权协会总干事张洪波建议自媒体人在进行内容的传播和使用上进行主动授权，一旦遭遇侵权，在进行司法诉讼的同时也要充分发挥行政执法的优势，采取积极主动的维权行为。(记者 任晓宁)</p><p><span style="color: rgb(128, 128, 128); font-family: 宋体; font-size: 13px; line-height: 25px; orphans: 2; text-align: center; text-indent: 26px; widows: 2; background-color: rgb(247, 250, 255);"><br/></span><br/></p></div>
	</td>
  </tr>
</table>


<div class="footer">
	版权所有：深圳大学文化产业研究院 2010-2012&nbsp;&nbsp;&nbsp;
    地址：深圳大学粤海门广场B栋一楼&nbsp;&nbsp;&nbsp;
    邮编：518060&nbsp;&nbsp;&nbsp;
    您是第 56 位访客&nbsp;&nbsp;&nbsp;
    技术支持：<a href="http://www.ajrice.com" target="_blank">阿基米科技</a>

</body>
</html>footer.html