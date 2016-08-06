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
<div style="height:10px; overflow:hidden"></div>


<div class="title3">机构简介<span style="float:right;"><a href="javascript:history.go(-1)"> 
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
    <td align="left" valign="top" class="word1">
	
	<p style="text-align: center;">
    <strong>Institute for Cultural Industries Shenzhen University (SICI)</strong><br/>Creative Engine&nbsp;&nbsp; Campus Pioneer
</p>
<p>
    Shenzhen University (SZU) is the only comprehensive university in the Shenzhen Special Economic Zone (SSEZ). It boasts of quite a number of disciplines conducive to the development of cultural industries. Years of efforts of the University have resulted in the distinctive features of top-notch scholarship and innovation in these industries. The Institute for Cultural Industries Shenzhen University (SICI) aims to integrate teaching, research and production with a distinctive pattern of “innovation, creativity and entrepreneurship”. As a result, a cluster of creative academic-industrial entities embodying the above-mentioned features and spirit came into being, namely, Art Tribe, Design Tribe, Media Tribe, Architecture Tribe, Performing Arts Tribe and Film Tribe.
</p>
<p>
    SICI incorporating these tribes was founded in May 2009. It is the first multi-disciplinary research institution of SZU. Backed by the various colleges of the University related with cultural industries, SICI has attracted more than 50 experts from the disciplines of art, design, media, advertising, architecture, film, animation, tourism, economics, management and law. These trained researchers with unique insight, foresight and broad vision are quick to act and to accomplish ambitious goals.
</p>
<p>
    The present dean of SICI is Professor Li Fengliang, vice president of SZU. The deputy deans areProfessor ZhouJianxin and Professor Zhou Zhimin. The Advisory Board and Academic Committee of SICI are composed of prestigious scholars and artists from both in and outside SZU, as well as well-known figures from other areas of China including officials in the cultural and publicity departments of governments at various levels.
</p>
<p>
    The establishment of the SICI aims to become a model for the integration of academic studies, scientific research and industrial production; furthermore, it aims to accumulate experience in contribution to the management and reform of research institutions via its path-breaking innovations.
</p>
<p>
    One of the clarion calls of the city is to build Shenzhen by enviable cultural attainments. In answer to this call, SICI has made a strategic plan to vigorously engage in cultural industries. The mission of the SICI is to vigorous engage in research of cultural industries, serve local economic growth and promote academic exchanges. Measures have been taken to solicit research fellows from within and without the University, to form crack forces to co-sponsor projects with outside institutions. The goal of these efforts is to unfold research, to provide counseling in various areas such as policy-making, social service and international exchanges. Efforts are also made to secure joint research projects and university-enterprise cooperation. Attention is paid to yielding both academic influence and social benefits in the development of cultural industries.&nbsp;&nbsp;
</p>
<p>
    With SZU campus as the branch of China (Shenzhen) International Cultural Industries Fair (ICIF), SICI sponsors forums and lectures during the Fair. It initiated the formulation of Shenzhen Liyuan Cultural Industries Development co., ltd, and is honored as a “Teaching and Research Base for Cultural Industries of Shenzhen”, a “Research Base for Cultural Creative Industries of Shenzhen”, and a “Key Research Institute of Humanities and Social Sciences at Universities of Guangdong Province”. In October 2010, SICI is rewarded a special grant by the central authorities for regional universities of China because of its merits in functioning as a platform of innovative research for the booming cultural industries. In October 2011, “Research on the Inner Mechanism and Strategic Pathways for the Integrated Innovation of Culture and Technology” received supports from the National Social Science Foundation as a key project. In 2013, the National Center for Cultural Innovation Research got approved to construct by Ministry of Culture.
</p>
<p>
    It is hoped that SICI will become a center of academic research, data bank and training in cultural industries. Rooted in Shenzhen, its broad vision is to serve the Province of Guangdong and other areas of China. The natural result is a higher profile and greater influence of SZU in the research and development of China’s cultural industries. <br/>2. Mission and vision <br/>（1）Positioning<br/>Our mission statement is to “vigorously engage in research of cultural industries, serve local economic growth and build a platform for academic exchanges”. Our goal is to become “State-level Innovation and Development Research Base for Cultural Industries”. Our policies for this goal are to turn SICI into a research center, data bank and training base for cultural industries. Situated in Shenzhen, SICI reaches out to serve Guangdong and the whole country. It is believed that SICI will become a research and innovation platform of cultural industries and model of this kind by combing academic studies, scientific research and industrial production.<br/>（2）Philosophy<br/>•&nbsp;“Service-oriented, academia-prospered”, serve the local development, advance the academic research, and build up a top-notch academic field of cultural industries research.<br/>•&nbsp;“Communication, cooperation, and win-win”, promote the cooperation with universities and regions, and build up a high-level platform for international creative research exchange.<br/>•&nbsp;“Co-ownership, co-development, and sharing”, in line with the principle of&nbsp;&nbsp; “harmonious”, “service” and “innovation”, to develop new management culture.<br/>（3）Three distinct research domain<br/>•&nbsp;Research on new industrial development of cultural industries<br/>•&nbsp;Research on the regional cultural industries development<br/>•&nbsp;Research on cultural industries policy and intellectual property right<br/>（4）Four Tasks<br/>•&nbsp;Academic Research<br/>By mobilizing forces in and out the University and tapping all its potential, SICI aims to distinguish itself in independent and joint projects, first order research contingents, outstanding academic achievements and famous brands of creative products. With SZU campus as the branch of China (Shenzhen) International Cultural Industries Fair (ICIF), SICI sponsors forums and lectures during the Fair. With the various activities during the Fair and other year-round channels, SICI serves as platform of exchanges and cooperation for high-end research institutions at home and abroad.<br/>Focusing on the “Research on the Integrated Innovation of Culture and Technology”, SICI is devoted to develop: “Liyuan Book Series of Culture and Creativity”, “The Blue Book of Integrated Innovation of Culture and Technology”, “Creative Brands of China Forum”, “Liyuan Cultural Industries Seminars”, and “Liyuan Night of Culture”. Rooted in Shenzhen, SICI reaches out to serve the whole country, and to level up the publicity and influences.<br/>•&nbsp;Counseling<br/>&nbsp;As a think tank, SICI helps in the policy making of the Ministry of Culture and local authorities. Its counseling covers areas of decision making, growth of cultural enterprises and their major activities, long-term study of benchmarking cultural enterprises in service to cultural institutions and enterprises of Shenzhen and China. In all of its counseling, SICI commits to providing “instant, sustained and meticulous service”. <br/>•&nbsp;Training<br/>Based on the disciplines such as “art theories”, Academy of Shenzhen-Hong Kong Creative Work is established under SICI to go in for specialized training in cultural industries for their personnel. Various resources are integrated to offer programs focusing on certificate training, non-certificate training and in-service training for employees in cultural industries and elsewhere.<br/>•&nbsp;Industrial practices<br/>SICI engages in the industrial practices on the University campus by academic research and counseling. The service in these areas includes guidance in the formulation of cultural enterprises, designing of campus cultural products, development of a cultural industries park, operation of a University Press and campus bookstores. The advantages will be mobilized of SZU campus as a branch of the China (Shenzhen) International Cultural Industries Fair. It is hoped that in all of this practical operation and management new models for university cultural industries will take shape.<br/>3.Structure <br/>Advisory Board&nbsp; Dean&nbsp; Academic Committee<br/>Vice-deans, assistant of Dean/secretary-general<br/>Administration Office, Academic Research Department, Project Development Department, Education and Training Department, Information and Publishing Department<br/>Research Center for Creative Industries Planning and Management<br/>Research Center for Arts and Cultural Policy Studies<br/>Research Center for Regional Cultural Industries<br/>Research Center for Cultural Branding Strategy<br/>Research Center for Art Certification and Restoration<br/>4.Leadership<br/>Li Fengliang&nbsp;&nbsp;&nbsp; Vice president of SZU, dean of SICI，dean of National Center&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <br/>for Cultural Innovation Research<br/>ZhouJianxin Executive deputy dean of SICI, deputy dean of National <br/>Center for Cultural Innovation Research<br/>Zhou Zhimin&nbsp;&nbsp; Deputy dean of SICI<br/>LiuYixuan&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Assistant of dean, secretary-general of SICI<br/>Wen Wen&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Director of Project Development Department of SICI<br/>HuPenglin&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Vice director of Project Development Department of SICI<br/>Huang Yurong&nbsp;&nbsp; Director of Academic Research Department of SICI<br/>Huang YongjianDirector of Education and Training Department of SICI<br/>Qin Qing&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Vice director of Education and Training Department of SICI<br/>Zhong Yaqin&nbsp;&nbsp;&nbsp;&nbsp; Director of Information and Publishing Department of SICI,&nbsp;&nbsp; <br/>secretary-general of National Center for Cultural Innovation&nbsp;&nbsp;&nbsp; <br/>Research<br/>5.Advisory Board <br/>Li Wuwei&nbsp;&nbsp; Vice-chairman of the National Committee of the CPPCC, Executive Vice-chairman of the RCCK Central Committee and Director of Shanghai Creative Industry Association<br/>Wang Wenzhang&nbsp;&nbsp; Member of the Party Leadership Group, Vice Minister, Ministry of Culture, PRC<br/>Yu Ping&nbsp; Director&nbsp; Department of Science and Technology for Culture, Ministry of Culture, PRC<br/>Liu Yuzhu&nbsp;&nbsp; Director, Department of Cultural Industries, Ministry of Culture, PRC<br/>Zhang Xinjian&nbsp; Director, Department of Network Information, Ministry of Culture, PRC<br/>XiongChengyu&nbsp;&nbsp; Director, National Research Center for Cultural Industries, Tsinghua University<br/>Fang Jianhong&nbsp; Secretary of the Party Leadership Group, Director, Bureau of Culture, Guangdong Province<br/>Wu Yihuan&nbsp; Vice Mayor, the People’s Government of Shenzhen<br/>Chen Wei&nbsp;&nbsp; Secretary of the Party Leadership Group, Director, Tourism Bureau of Shenzhen <br/>PengLixun&nbsp;&nbsp; Former Director of Shenzhen Association of Social Sciences&nbsp;&nbsp; <br/>Dong Xiaoming&nbsp; Former Chair of Shenzhen Literary Federation<br/>Li Xiaogan&nbsp;&nbsp; Secretary of the CPC Nanshan District Committee, Shenzhen <br/>Hu Jingzhi&nbsp;&nbsp; Professor of Shenzhen University, renowned scholar in cultural studies<br/>He Daokuan&nbsp;&nbsp; Professor of Shenzhen University, senior interpreter<br/>&nbsp;<br/>People - Academic Committee<br/>Director<br/>Jiang Shuzhuo&nbsp; CPC Secretary of Ji’nan University, Director of Overseas Chinese Literature and Chinese-Language Media Research Center<br/>Vice Director <br/>Jin Yuanpu&nbsp;&nbsp; Executive Director of Cultural and Creative Industries Studies Center, Renmin University of China<br/>Le Zheng&nbsp; Deputy Secretary-General, Director of Policy Research Office of Shenzhen CPC Committee<br/>Committee members<br/>Chen Shaofeng&nbsp; Vice Dean of Institute for Cultural Industries, Peking University <br/>Fan Zhou&nbsp; Dean of Institute for Cultural Industries, Communication University <br/>Zhang Xiaoming&nbsp; Vice Director of Research Center of Cultural Industries, Chinese Academy of Social Sciences <br/>Hu Huilin&nbsp; Director of Research Center of Cultural Industries, Shanghai Jiao Tong University<br/>OuyangYouquan&nbsp; Director of Brand Research Center of Chinese Cultural Industries, Central South University<br/>HuaJian&nbsp; Director of Research Center of Cultural Industries, Shanghai Academy of Social Sciences<br/>Wu Zhong&nbsp; Vice director of Publicity Department of Shenzhen CPC Committee, director of Shenzhen Association of Social Sciences<br/>Zhong Yinteng&nbsp; Vice director of United Front Work, Shenzhen CPC Committee, Director of Shenzhen Overseas Compatriots Office<br/>Yin Changlong&nbsp; Vice director of Shenzhen Publishing and Distributing Group <br/>Yang Honghai&nbsp; Vice Chair of Shenzhen Literary Federation<br/>Li Fengliang&nbsp;&nbsp;&nbsp; Vice president of SZU, dean of SICI<br/>Wu Yumin&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Dean of the College of Communication, deputy dean of SICI<br/>Qi Fengge&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Former dean of the Art and Design College, deputy dean of SICI<br/>Zhong Xi&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Deputy dean of the Teachers College, deputy dean of SICI<br/>Full-time Researchers<br/>Li Fengliang, Zhou Jianxin, Zhou Zhimin, Wu Yumin, Qi Fengge, Zhong Xi, Liu Yixuan, Ding Wei, Cui Bo, GuXueer, Huang Yongjian, Xu Lei<br/>Liu Shixiong, Huang Yurong, Zhong Yaqin, Qin Qing, Wen Wen, Hu Penglin
</p>
<p>
    Part-time Researchers<br/>Che Da，Chen Lina, Chen Xue, Chen Yiyong, Chen Zhenwang, Cui Shijuan, DuanJie, GaoFei, He Jianping, Huang Chunping, Huang Yubo, Jin Yeyang, Li Leilei, Li Ping, Liu Kun, Niu Ben, Pan Yanping, PengHuaxin, TianShaoxu, Wang Changkui, Wang Shuaili, Wei Dazhi, XuHui, Yan Ping, Ye Jianhua, Zhan Di, Zhang Han, Zhang Mu, Zhu Xiequn, ZouPingxue, Zhang Zhen, Wang Yuan, Chen Min, XueMeng, Shi Mingyu, Wei Xia, Wang Jianlei
</p>
<p>
    Contract Researcher&nbsp;&nbsp;&nbsp;&nbsp; Li Tianduo<br/>
</p>
<p>
    &nbsp;
</p>
	
	
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