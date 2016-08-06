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


<div class="title3">顾问团队<span style="float:right;"><a href="javascript:history.go(-1)"> 
<img src="/Public/images/back.jpg" border="0" /></a></span></div>

<table width="920" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="244" valign="top" class="leftmenu">
    	<a href="page?id=1">院长致辞</a><br />
<a href="page?id=2">机构简介</a><br />
<a href="page?id=3">组织架构</a><br />
<a href="page?id=4">领导团队</a><br />
<a href="page?id=5">顾问团队</a><br />
<a href="page?id=6">大事历记</a><br />
<a href="page?id=7">ENGLISH</a>
    </td>
    <td valign="top" class="word1"><p><span style="font-size: 13px; "><span style="font-family: 宋体; ">厉无畏 &nbsp;全国政协副主席、民革中央常务副主席、上海市创意产业协会会长<br />
</span></span><span style="font-size: 13px; "><span style="font-family: 宋体; ">王文章 &nbsp;文化部党组成员、副部长<br />
</span></span><span style="font-size: 13px; "><span style="font-family: 宋体; ">于 &nbsp;平 &nbsp;文化部文化科技司司长<br />
</span></span><span style="font-family: 宋体; font-size: 13px; ">刘玉珠 &nbsp;文化部文化产业司司长<br />
</span><span style="font-family: 宋体; font-size: 13px; ">张新建 &nbsp;文化部网络信息中心副主任<br />
</span><span style="font-size: 13px; "><span style="font-family: 宋体; ">熊澄宇 &nbsp;清华大学国家文化产业研究中心主任<br />
</span></span><span style="font-family: 宋体; font-size: 13px; ">方健宏 &nbsp;广东省文化厅党组书记、厅长<br />
</span><span style="font-family: 宋体; font-size: 13px; ">吴以环 &nbsp;深圳市人民政府副市长<br />
</span><span style="font-size: 13px; "><span style="font-family: 宋体; ">陈 &nbsp;威 &nbsp;深圳市文体旅游局党组书记、局长<br />
</span></span><span style="font-size: 13px; "><span style="font-family: 宋体; ">彭立勋 &nbsp;深圳市社会科学院原院长<br />
</span></span><span style="font-size: 13px; "><span style="font-family: 宋体; ">董小明 &nbsp;深圳市文联原主席<br />
</span></span><span style="font-size: 13px; "><span style="font-family: 宋体; ">李小甘 &nbsp;中共深圳市南山区委书记<br />
</span></span><span style="font-family: 宋体; font-size: 13px; ">胡经之 &nbsp;深圳大学教授，著名文化学者<br />
</span><span style="font-family: 宋体; font-size: 13px; ">何道宽 &nbsp;深圳大学教授，资深翻译家</span></p>
<p>&nbsp;</p>
<div>&nbsp;</div></td>
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