<!DOCTYPE html>
<html>

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

		<title>@yield('title')</title>

		<link href="/home/css/amazeui.css" rel="stylesheet" type="text/css" />
		<link href="/home/css/admin.css" rel="stylesheet" type="text/css" />

		<link href="/home/basic/css/demo.css" rel="stylesheet" type="text/css" />

		<link href="/home/css/css/hmstyle.css" rel="stylesheet" type="text/css"/>
		<link href="/home/css/css/skin.css" rel="stylesheet" type="text/css" />
		<script src="/home/assets/js/jquery.min.js"></script>
		<script src="/home/assets/js/amazeui.min.js"></script>


	</head>

	<body>
		<div class="hmtop">		

				<!--logo-->

				<div class="nav white">
					<div class="logo"><img src="/home/images/logo.png" /></div>
					<div class="logoBig">
						<li><img src="/home/images/logobig.png" /></li>
					</div>
				</div>

				<div class="clear"></div>
			
			<div class="shopNav">
				<div class="slideall">
					
				@section('content')

				@show	   
					 
		        				
			 <div class="footer ">
                        <div class="footer-hd ">
                            <p>
                                <a href="# ">恒望科技</a>
                                <b>|</b>
                                <a href="# ">商城首页</a>
                                <b>|</b>
                                <a href="# ">支付宝</a>
                                <b>|</b>
                                <a href="# ">物流</a>
                            </p>
                        </div>
                        <div class="footer-bd ">
                            <p>
                                <a href="# ">关于恒望</a>
                                <a href="# ">合作伙伴</a>
                                <a href="# ">联系我们</a>
                                <a href="# ">网站地图</a>
                                <em>© 2015-2025 Hengwang.com 版权所有. 更多模板 <a href="http://www.cssmoban.com/" target="_blank" title="模板之家">模板之家</a> - Collect from <a href="http://www.cssmoban.com/" title="网页模板" target="_blank">网页模板</a></em>
                            </p>
                        </div>
                    </div>		
						
				</div>
				
			</div>
			
        </div>
	</body>

</html>