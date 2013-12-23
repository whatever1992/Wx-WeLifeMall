<?php /* Smarty version Smarty-3.1.15, created on 2013-12-24 02:29:18
         compiled from "/var/www/wx-welifemall/htdocs/templates/order_analysis.html" */ ?>
<?php /*%%SmartyHeaderCode:24687509852b880fe487948-47698418%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b3faa918a1e081fc8a6625156233e8b07c75e800' => 
    array (
      0 => '/var/www/wx-welifemall/htdocs/templates/order_analysis.html',
      1 => 1387791956,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24687509852b880fe487948-47698418',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52b880fe506393_13104623',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52b880fe506393_13104623')) {function content_52b880fe506393_13104623($_smarty_tpl) {?>﻿<!DOCTYPE html>

<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->

<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->

<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

<!-- BEGIN HEAD -->

<head>

	<meta charset="utf-8" />

	<title>故乡人后台管理</title>

	<meta content="width=device-width, initial-scale=1.0" name="viewport" />

	<meta content="" name="description" />

	<meta content="" name="author" />

	<!-- BEGIN GLOBAL MANDATORY STYLES -->

	<link href="media/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>

	<link href="media/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>

	<link href="media/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>

	<link href="media/css/style-metro.css" rel="stylesheet" type="text/css"/>

	<link href="media/css/style.css" rel="stylesheet" type="text/css"/>

	<link href="media/css/style-responsive.css" rel="stylesheet" type="text/css"/>

	<link href="media/css/default.css" rel="stylesheet" type="text/css" id="style_color"/>

	<link href="media/css/uniform.default.css" rel="stylesheet" type="text/css"/>

	<!-- END GLOBAL MANDATORY STYLES -->

	<!-- BEGIN PAGE LEVEL STYLES -->

	<link href="media/css/jquery.gritter.css" rel="stylesheet" type="text/css"/>

	<!-- END PAGE LEVEL STYLES -->

	<link rel="shortcut icon" href="media/image/favicon.ico" />

</head>

<!-- END HEAD -->

<!-- BEGIN BODY -->

<body class="page-header-fixed">

	<!-- BEGIN HEADER -->

	<div class="header navbar navbar-inverse navbar-fixed-top">

		<!-- BEGIN TOP NAVIGATION BAR -->

		<div class="navbar-inner">

			<div class="container-fluid">

				<!-- BEGIN LOGO -->

				<a class="brand" href="index.php">

				<img src="media/image/logo.png" alt="logo" />

				</a>

				<!-- END LOGO -->

				<!-- BEGIN RESPONSIVE MENU TOGGLER -->

				<a href="javascript:;" class="btn-navbar collapsed" data-toggle="collapse" data-target=".nav-collapse">

				<img src="media/image/menu-toggler.png" alt="" />

				</a>          

				<!-- END RESPONSIVE MENU TOGGLER -->            

			</div>
		</div>
	</div>

	<!-- END HEADER -->

	<!-- BEGIN CONTAINER -->

	<div class="page-container row-fluid">

		<!-- BEGIN SIDEBAR -->

		<div class="page-sidebar nav-collapse collapse">

			<!-- BEGIN SIDEBAR MENU -->        

			<ul class="page-sidebar-menu">

				<li>

					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->

					<div class="sidebar-toggler hidden-phone"></div>

					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->

				</li>
				
				<br /> <br />

				<li class="start ">

					<a href="index.php">

					<i class="icon-home"></i> 

					<span class="title">主页</span>

					</a>

				</li>

				<li class="">

					<a href="javascript:;">

					<i class="icon-cogs"></i> 

					<span class="title">会员管理</span>

					<span class="arrow "></span>

					</a>

					<ul class="sub-menu">

						<li >

							<a href="address_and_phone.php">

							管理地址和手机</a>

						</li>

					</ul>

				</li>

				<li class="active ">

					<a href="javascript:;">

					<i class="icon-bookmark-empty"></i> 

					<span class="title">订单管理</span>

					<span class="selected"></span>

					<span class="arrow open"></span>

					</a>

					<ul class="sub-menu">

						<li>

							<a href="order_manage.php">

							订单管理</a>

						</li>

						<li class="active">

							<a href="order_analysis.php">

							订单统计</a>

						</li>

						<li >

							<a href="delivery.php">

							快递员</a>

						</li>

						<li >

							<a href="fees.php">

							同城快递配送费用</a>

						</li>

					</ul>

				</li>

	<li>

					<a class="active" href="javascript:;">

					<i class="icon-sitemap"></i> 

					<span class="title">产品管理</span>

					<span class="arrow "></span>

					</a>

					<ul class="sub-menu">

						<li>

							<a href="javascript:;">

							菜品管理

							<span class="arrow"></span>

							</a>

							<ul class="sub-menu">

								<li><a href="add.php">添加菜品</a></li>

								<li><a href="delete.php">删除菜品</a></li>

								<li><a href="change.php">修改菜品</a></li>

							</ul>

						</li>

						<li>

							<a href="today_menu.php">

							今日菜单设置

							</a>

						</li>

					</ul>

				</li>

			</ul>

			<!-- END SIDEBAR MENU -->

		</div>

		<!-- END SIDEBAR -->

		<!-- BEGIN PAGE -->

		<div class="page-content">

			<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->


			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->

			<div class="container-fluid">

				<!-- BEGIN PAGE HEADER-->

				<div class="row-fluid">

					<div class="span12">

						<!-- BEGIN PAGE TITLE & BREADCRUMB-->

						<h3 class="page-title">

							订单管理 <small>订单统计</small>

						</h3>

						<ul class="breadcrumb">

							<li>

								<i class="icon-home"></i>

								<a href="index.php">Home</a> 

								<i class="icon-angle-right"></i>

							</li>

							<li>

								<a href="#">订单管理</a>

								<i class="icon-angle-right"></i>

							</li>

							<li><a href="#">订单统计</a></li>

						</ul>

						<!-- END PAGE TITLE & BREADCRUMB-->

					</div>

				</div>

				<!-- END PAGE HEADER-->

				<!-- BEGIN PAGE CONTENT-->

				<div class="row-fluid">

					<div class="span12">

					<!-- BEGIN SAMPLE TABLE PORTLET-->

						<div class="portlet box blue">

							<div class="portlet-title">

								<div class="caption"><i class="icon-cogs"></i>订单统计</div>

							</div>

							<div class="portlet-body flip-scroll">

								<table class="table-bordered table-striped table-condensed flip-content">

									<thead class="flip-content">

										<tr>

											<th>序号</th>

											<th class="numeric">订单号</th>

											<th>收货人</th>

											<th>收货人电话</th>

											<th>收货地址</th>

											<th>操作员</th>

											<th class="numeric">商品金额</th>

											<th class="numeric">运费</th>

											<th class="numeric">实付余额</th>

											<th>日期</th>
											<th>送达时间</th>
										</tr>

									</thead>

									<tbody>

										<tr>

											<td>序号</td>

											<td class="numeric">订单号</td>

											<td>收货人</td>

											<td>收货人电话</td>

											<td>收货地址</td>

											<td>操作员</td>

											<td class="numeric">商品金额</td>

											<td class="numeric">运费</td>

											<td class="numeric">实付余额</td>

											<td>日期</td>
											
											<td>送达时间</td>

										</tr>

									</tbody>

								</table>

							</div>

						</div>

						<!-- END SAMPLE TABLE PORTLET-->

					</div>

				</div>

				<!-- END PAGE CONTENT-->

			</div>

			<!-- END PAGE CONTAINER-->       

		</div>

		<!-- BEGIN PAGE -->     

	</div>

	<!-- END CONTAINER -->


	<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->

	<!-- BEGIN CORE PLUGINS -->

	<script src="media/js/jquery-1.10.1.min.js" type="text/javascript"></script>

	<script src="media/js/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>

	<!-- IMPORTANT! Load jquery-ui-1.10.1.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->

	<script src="media/js/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>      

	<script src="media/js/bootstrap.min.js" type="text/javascript"></script>

	<!--[if lt IE 9]>

	<script src="media/js/excanvas.min.js"></script>

	<script src="media/js/respond.min.js"></script>  

	<![endif]-->   

	<script src="media/js/jquery.slimscroll.min.js" type="text/javascript"></script>

	<script src="media/js/jquery.blockui.min.js" type="text/javascript"></script>  

	<script src="media/js/jquery.cookie.min.js" type="text/javascript"></script>

	<script src="media/js/jquery.uniform.min.js" type="text/javascript" ></script>

	<!-- END CORE PLUGINS -->

	<!-- BEGIN PAGE LEVEL PLUGINS -->

	<script type="text/javascript" src="media/js/jquery.gritter.js"></script>

	<script type="text/javascript" src="media/js/jquery.pulsate.min.js"></script>

	<script type="text/javascript" src="media/js/jquery.bootpag.min.js"></script>

	<!-- END PAGE LEVEL PLUGINS -->

	<!-- BEGIN PAGE LEVEL SCRIPTS -->

	<script src="media/js/app.js"></script>

	<script src="media/js/ui-general.js"></script>     

	<!-- END PAGE LEVEL SCRIPTS -->

	<script>

		jQuery(document).ready(function() {       

		   // initiate layout and plugins

		   App.init();

		   UIGeneral.init();

		});

	</script>

	<!-- END JAVASCRIPTS -->

<script type="text/javascript">  var _gaq = _gaq || [];  _gaq.push(['_setAccount', 'UA-37564768-1']);  _gaq.push(['_setDomainName', 'keenthemes.com']);  _gaq.push(['_setAllowLinker', true]);  _gaq.push(['_trackPageview']);  (function() {    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;    ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);  })();</script></body>

<!-- END BODY -->

</html><?php }} ?>
