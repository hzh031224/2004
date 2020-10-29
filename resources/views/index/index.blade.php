<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
	<title>品优购，优质！优质！</title>
	 <link rel="icon" href="assets/img/favicon.ico">

    <link rel="stylesheet" type="text/css" href="/index/css/webbase.css" />
    <link rel="stylesheet" type="text/css" href="/index/css/pages-JD-index.css" />
    <link rel="stylesheet" type="text/css" href="/index/css/widget-jquery.autocomplete.css" />
    <link rel="stylesheet" type="text/css" href="/index/css/widget-cartPanelView.css" />
</head>

<body>
	<!-- 头部栏位 -->
	<!--页面顶部-->
<div id="nav-bottom">
		@extends('layout.tou')
		@section('title'.'首页')
		@section('contents')
		<!--头部-->
		<div class="header">
			<div class="py-container">
				<div class="yui3-g Logo">
					<div class="yui3-u Left logoArea">
						<a class="logo-bd" title="品优购" href="JD-index.html" target="_blank"></a>
					</div>
					<div class="yui3-u Center searchArea">
						<div class="search">
							<form action="" class="sui-form form-inline">
								<!--searchAutoComplete-->
								<div class="input-append">
									<input type="text" id="autocomplete" type="text" class="input-error input-xxlarge" />
									<button class="sui-btn btn-xlarge btn-danger" type="button">搜索</button>
								</div>
							</form>
						</div>
						<div class="hotwords">
							<ul>
								<li class="f-item">品优购首发</li>
								<li class="f-item">亿元优惠</li>
								<li class="f-item">9.9元团购</li>
								<li class="f-item">每满99减30</li>
								<li class="f-item">亿元优惠</li>
								<li class="f-item">9.9元团购</li>
								<li class="f-item">办公用品</li>

							</ul>
						</div>
					</div>
					<div class="yui3-u Right shopArea">
						<div class="fr shopcar">
							<div class="show-shopcar" id="shopcar">
								<span class="car"></span>
								<a class="sui-btn btn-default btn-xlarge" href="{{('cart')}}">
									<span>我的购物车</span>
									<i class="shopnum">0</i>
								</a>
								<div class="clearfix shopcarlist" id="shopcarlist" style="display:none">
									<p>"啊哦，你的购物车还没有商品哦！"</p>
									<p>"啊哦，你的购物车还没有商品哦！"</p>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="yui3-g NavList">
					<div class="yui3-u Left all-sort">
						<h4>全部商品分类</h4>
					</div>
					<div class="yui3-u Center navArea">
						<ul class="nav">
							<li class="f-item">服装城</li>
							<li class="f-item">美妆馆</li>
							<li class="f-item">品优超市</li>
							<li class="f-item">全球购</li>
							<li class="f-item">闪购</li>
							<li class="f-item">团购</li>
							<li class="f-item">有趣</li>
							<li class="f-item"><a href="seckill-index.html" target="_blank">秒杀</a></li>
						</ul>
					</div>
					<div class="yui3-u Right"></div>
				</div>
			</div>
		</div>
	</div>
</div>


	<!--列表-->
	<div class="sort">
		<div class="py-container">
			<div class="yui3-g SortList ">
				<div class="yui3-u Left all-sort-list">
					<div class="all-sort-list2">
						<div class="item bo" pid="" cat_id="s">
							<h3><a href="javascript:;" class="showHide">+</a><a href=""></a></h3>
						</div>
					</div>
				</div>
				<div class="yui3-u Center banerArea">
					<!--banner轮播-->
					<div id="myCarousel" data-ride="carousel" data-interval="4000" class="sui-carousel slide">
					  <ol class="carousel-indicators">
					    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					    <li data-target="#myCarousel" data-slide-to="1"></li>
					    <li data-target="#myCarousel" data-slide-to="2"></li>
					  </ol>
					  <div class="carousel-inner">
					    <div class="active item">
					    <a href="http://baidu2.wypxj.com/">
					    	<img src="/index/img/banner1.jpg"  />
					      </a>
					    </div>
					    <div class="item">
						 <a href="http://baidu2.wypxj.com/">
						<img src="/index/img/banner2.jpg"  />
					     </a>
					    </div>
					    <div class="item">
						 <a href="http://baidu2.wypxj.com/">
						<img src="/index/img/banner3.jpg"  />
						</a>
					     
					    </div>
					  </div><a href="#myCarousel" data-slide="prev" class="carousel-control left">‹</a><a href="#myCarousel" data-slide="next" class="carousel-control right">›</a>
					</div>
				</div>
				<div class="yui3-u Right">
					<div class="news">
						<h4><em class="fl">品优购快报</em><span class="fr tip">更多 ></span></h4>
						<div class="clearix"></div>
						<ul class="news-list unstyled">
							<li>
								<span class="bold">[特惠]</span>备战开学季 全民半价购数码
							</li>
							<li>
								<span class="bold">[公告]</span>备战开学季 全民半价购数码
							</li>
						</ul>
					</div>
					<ul class="yui3-g Lifeservice">
						<li class="yui3-u-1-4 life-item tab-item">
							<i class="list-item list-item-1"></i>
							<span class="service-intro">话费</span>
						</li>
						<li class="yui3-u-1-4 life-item tab-item">
							<i class="list-item list-item-2"></i>
							<span class="service-intro">机票</span>
						</li>
						<li class="yui3-u-1-4 life-item tab-item">
							<i class="list-item list-item-3"></i>
							<span class="service-intro">电影票</span>
						</li>
						<li class="yui3-u-1-4 life-item tab-item">
							<i class="list-item list-item-4"></i>
							<span class="service-intro">游戏</span>
						</li>
						<li class="yui3-u-1-4 life-item notab-item">
							<i class="list-item list-item-5"></i>
							<span class="service-intro">彩票</span>
						</li>
						<li class="yui3-u-1-4 life-item notab-item">
							<i class="list-item list-item-6"></i>
							<span class="service-intro">加油站</span>
						</li>
						<li class="yui3-u-1-4 life-item notab-item">
							<i class="list-item list-item-7"></i>
							<span class="service-intro">酒店</span>
						</li>
						<li class="yui3-u-1-4 life-item notab-item">
							<i class="list-item list-item-8"></i>
							<span class="service-intro">火车票</span>
						</li>
						<li class="yui3-u-1-4 life-item  notab-item">
							<i class="list-item list-item-9"></i>
							<span class="service-intro">众筹</span>
						</li>
						<li class="yui3-u-1-4 life-item notab-item">
							<i class="list-item list-item-10"></i>
							<span class="service-intro">理财</span>
						</li>
						<li class="yui3-u-1-4 life-item notab-item">
							<i class="list-item list-item-11"></i>
							<span class="service-intro">礼品卡</span>
						</li>
						<li class="yui3-u-1-4 life-item notab-item">
							<i class="list-item list-item-12"></i>
							<span class="service-intro">白条</span>
						</li>
					</ul>
					<div class="life-item-content">
						<div class="life-detail">
							<i class="close">关闭</i>
							<p>话费充值</p>
							<form action="" class="sui-form form-horizontal">
								号码：<input type="text" id="inputphoneNumber" placeholder="输入你的号码" />
							</form>
							<button class="sui-btn btn-danger">快速充值</button>
						</div>
						<div class="life-detail">
							<i class="close">关闭</i> 机票
						</div>
						<div class="life-detail">
							<i class="close">关闭</i> 电影票
						</div>
						<div class="life-detail">
							<i class="close">关闭</i> 游戏
						</div>
					</div>
					<div class="ads">
						<img src="/index/img/ad1.png" />
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--推荐-->
	<div class="show">
		<div class="py-container">
			<ul class="yui3-g Recommend">
				<li class="yui3-u-1-6  clock">
					<div class="time">
						<img src="/index/img/clock.png" />
						<h3>今日推荐</h3>
					</div>
				</li>
				<li class="yui3-u-5-24">
					<a href="list.html" target="_blank"><img src="/index/img/today01.png" /></a>
				</li>
				<li class="yui3-u-5-24">
					<img src="/index/img/today02.png" />
				</li>
				<li class="yui3-u-5-24">
					<img src="/index/img/today03.png" />
				</li>
				<li class="yui3-u-5-24">
					<img src="/index/img/today04.png" />
				</li>
			</ul>
		</div>
	</div>
	<!--喜欢-->
	<div class="like">
		<div class="py-container">
			<div class="title">
				<h3 class="fl">猜你喜欢</h3>
				<b class="border"></b>
				<a href="javascript:;" class="fr tip changeBnt" id="xxlChg"><i></i></a>
			</div>
			<div class="bd">
				<ul class="clearfix yui3-g Favourate picLB" id="picLBxxl">
				@foreach($data as $v)
					<li class="yui3-u-1-6">
						<dl class="picDl huozhe">
							<dd>
								<a href="{{url('/index/list/'.$v->goods_id)}}" class="pic"><img src="{{env('UPDATE_URL')}}{{$v->goods_img}}" alt="" /></a>
								<div class="like-text">
									<p>{{$v->goods_name}}</p>
									<h3>{{$v->goods_price}}</h3>
								</div>
							</dd>
							<dd>
								<a href="" class="pic"><img src="/index/img/like_01.png" alt="" /></a>
								<div class="like-text">
									<p>{{$v->goods_desc}}</p>
									<h3>{{$v->goods_price}}</h3>
								</div>
							</dd>
						</dl>
					</li>
				@endforeach
				</ul>
			</div>
		</div>
	</div>
	<!-- 底部栏位 -->
	<!--页面底部-->
<div class="clearfix footer">
	<div class="py-container">
		<div class="footlink">
			<div class="Mod-service">
				<ul class="Mod-Service-list">
					<li class="grid-service-item intro  intro1">

						<i class="serivce-item fl"></i>
						<div class="service-text">
							<h4>正品保障</h4>
							<p>正品保障，提供发票</p>
						</div>

					</li>
					<li class="grid-service-item  intro intro2">

						<i class="serivce-item fl"></i>
						<div class="service-text">
							<h4>正品保障</h4>
							<p>正品保障，提供发票</p>
						</div>

					</li>
					<li class="grid-service-item intro  intro3">

						<i class="serivce-item fl"></i>
						<div class="service-text">
							<h4>正品保障</h4>
							<p>正品保障，提供发票</p>
						</div>

					</li>
					<li class="grid-service-item  intro intro4">

						<i class="serivce-item fl"></i>
						<div class="service-text">
							<h4>正品保障</h4>
							<p>正品保障，提供发票</p>
						</div>

					</li>
					<li class="grid-service-item intro intro5">

						<i class="serivce-item fl"></i>
						<div class="service-text">
							<h4>正品保障</h4>
							<p>正品保障，提供发票</p>
						</div>

					</li>
				</ul>
			</div>
			<div class="clearfix Mod-list">
				<div class="yui3-g">
					<div class="yui3-u-1-6">
						<h4>购物指南</h4>
						<ul class="unstyled">
							<li>购物流程</li>
							<li>会员介绍</li>
							<li>生活旅行/团购</li>
							<li>常见问题</li>
							<li>购物指南</li>
						</ul>

					</div>
					<div class="yui3-u-1-6">
						<h4>配送方式</h4>
						<ul class="unstyled">
							<li>上门自提</li>
							<li>211限时达</li>
							<li>配送服务查询</li>
							<li>配送费收取标准</li>
							<li>海外配送</li>
						</ul>
					</div>
					<div class="yui3-u-1-6">
						<h4>支付方式</h4>
						<ul class="unstyled">
							<li>货到付款</li>
							<li>在线支付</li>
							<li>分期付款</li>
							<li>邮局汇款</li>
							<li>公司转账</li>
						</ul>
					</div>
					<div class="yui3-u-1-6">
						<h4>售后服务</h4>
						<ul class="unstyled">
							<li>售后政策</li>
							<li>价格保护</li>
							<li>退款说明</li>
							<li>返修/退换货</li>
							<li>取消订单</li>
						</ul>
					</div>
					<div class="yui3-u-1-6">
						<h4>特色服务</h4>
						<ul class="unstyled">
							<li>夺宝岛</li>
							<li>DIY装机</li>
							<li>延保服务</li>
							<li>品优购E卡</li>
							<li>品优购通信</li>
						</ul>
					</div>
					<div class="yui3-u-1-6">
						<h4>帮助中心</h4>
						<img src="/index/img/wx_cz.jpg">
					</div>
				</div>
			</div>
			<div class="Mod-copyright">
				<ul class="helpLink">
					<li>关于我们<span class="space"></span></li>
					<li>联系我们<span class="space"></span></li>
					<li>关于我们<span class="space"></span></li>
					<li>商家入驻<span class="space"></span></li>
					<li>营销中心<span class="space"></span></li>
					<li>友情链接<span class="space"></span></li>
					<li>关于我们<span class="space"></span></li>
					<li>营销中心<span class="space"></span></li>
					<li>友情链接<span class="space"></span></li>
					<li>关于我们</li>
				</ul>
				<p>地址：北京市昌平区建材城西路金燕龙办公楼一层 邮编：100096 电话：400-618-4000 传真：010-82935100</p>
				<p>京ICP备08001421号京公网安备110108007702</p>
			</div>
		</div>
	</div>
</div>
<!--页面底部END-->
	<!-- 楼层位置 -->
	<div id="floor-index" class="floor-index">
		<ul>
			<li>
				<a class="num" href="javascript:;" style="display: none;">1F</a>
				<a class="word" href="javascript;;" style="display: block;">家用电器</a>
			</li>
			<li>
				<a class="num" href="javascript:;" style="display: none;">2F</a>
				<a class="word" href="javascript;;" style="display: block;">手机通讯</a>
			</li>
			<li>
				<a class="num" href="javascript:;" style="display: none;">3F</a>
				<a class="word" href="javascript;;" style="display: block;">电脑办公</a>
			</li>
			<li>
				<a class="num" href="javascript:;" style="display: none;">4F</a>
				<a class="word" href="javascript;;" style="display: block;">家居家具</a>
			</li>
			<li>
				<a class="num" href="javascript:;" style="display: none;">5F</a>
				<a class="word" href="javascript;;" style="display: block;">运动户外</a>
			</li>
		</ul>
	</div>
	<!--侧栏面板开始-->
<div class="J-global-toolbar">
	<div class="toolbar-wrap J-wrap">
		<div class="toolbar">
			<div class="toolbar-panels J-panel">

				<!-- 购物车 -->
				<div style="visibility: hidden;" class="J-content toolbar-panel tbar-panel-cart toolbar-animate-out">
					<h3 class="tbar-panel-header J-panel-header">
						<a href="" class="title"><i></i><em class="title">购物车</em></a>
						<span class="close-panel J-close" onclick="cartPanelView.tbar_panel_close('cart');" ></span>
					</h3>
					<div class="tbar-panel-main">
						<div class="tbar-panel-content J-panel-content">
							<div id="J-cart-tips" class="tbar-tipbox hide">
								<div class="tip-inner">
									<span class="tip-text">还没有登录，登录后商品将被保存</span>
									<a href="#none" class="tip-btn J-login">登录</a>
								</div>
							</div>
							<div id="J-cart-render">
								<!-- 列表 -->
								<div id="cart-list" class="tbar-cart-list">
								</div>
							</div>
						</div>
					</div>
					<!-- 小计 -->
					<div id="cart-footer" class="tbar-panel-footer J-panel-footer">
						<div class="tbar-checkout">
							<div class="jtc-number"> <strong class="J-count" id="cart-number">0</strong>件商品 </div>
							<div class="jtc-sum"> 共计：<strong class="J-total" id="cart-sum">¥0</strong> </div>
							<a class="jtc-btn J-btn" href="#none" target="_blank">去购物车结算</a>
						</div>
					</div>
				</div>

				<!-- 我的关注 -->
				<div style="visibility: hidden;" data-name="follow" class="J-content toolbar-panel tbar-panel-follow">
					<h3 class="tbar-panel-header J-panel-header">
						<a href="#" target="_blank" class="title"> <i></i> <em class="title">我的关注</em> </a>
						<span class="close-panel J-close" onclick="cartPanelView.tbar_panel_close('follow');"></span>
					</h3>
					<div class="tbar-panel-main">
						<div class="tbar-panel-content J-panel-content">
							<div class="tbar-tipbox2">
								<div class="tip-inner"> <i class="i-loading"></i> </div>
							</div>
						</div>
					</div>
					<div class="tbar-panel-footer J-panel-footer"></div>
				</div>

				<!-- 我的足迹 -->
				<div style="visibility: hidden;" class="J-content toolbar-panel tbar-panel-history toolbar-animate-in">
					<h3 class="tbar-panel-header J-panel-header">
						<a href="#" target="_blank" class="title"> <i></i> <em class="title">我的足迹</em> </a>
						<span class="close-panel J-close" onclick="cartPanelView.tbar_panel_close('history');"></span>
					</h3>
					<div class="tbar-panel-main">
						<div class="tbar-panel-content J-panel-content">
							<div class="jt-history-wrap">
								<ul>
									<!--<li class="jth-item">
										<a href="#" class="img-wrap"> <img src=".portal//index/img/like_03.png" height="100" width="100" /> </a>
										<a class="add-cart-button" href="#" target="_blank">加入购物车</a>
										<a href="#" target="_blank" class="price">￥498.00</a>
									</li>
									<li class="jth-item">
										<a href="#" class="img-wrap"> <img src="portal//index/img/like_02.png" height="100" width="100" /></a>
										<a class="add-cart-button" href="#" target="_blank">加入购物车</a>
										<a href="#" target="_blank" class="price">￥498.00</a>
									</li>-->
								</ul>
								<a href="#" class="history-bottom-more" target="_blank">查看更多足迹商品 &gt;&gt;</a>
							</div>
						</div>
					</div>
					<div class="tbar-panel-footer J-panel-footer"></div>
				</div>

			</div>

			<div class="toolbar-header"></div>

			<!-- 侧栏按钮 -->
			<div class="toolbar-tabs J-tab">
				<div onclick="cartPanelView.tabItemClick('cart')" class="toolbar-tab tbar-tab-cart" data="购物车" tag="cart" >
					<i class="tab-ico"></i>
					<em class="tab-text"></em>
					<span class="tab-sub J-count " id="tab-sub-cart-count">0</span>
				</div>
				<div onclick="cartPanelView.tabItemClick('follow')" class="toolbar-tab tbar-tab-follow" data="我的关注" tag="follow" >
					<i class="tab-ico"></i>
					<em class="tab-text"></em>
					<span class="tab-sub J-count hide">0</span>
				</div>
				<div onclick="cartPanelView.tabItemClick('history')" class="toolbar-tab tbar-tab-history" data="我的足迹" tag="history" >
					<i class="tab-ico"></i>
					<em class="tab-text"></em>
					<span class="tab-sub J-count hide">0</span>
				</div>
			</div>

			<div class="toolbar-footer">
				<div class="toolbar-tab tbar-tab-top" > <a href="#"> <i class="tab-ico  "></i> <em class="footer-tab-text">顶部</em> </a> </div>
				<div class="toolbar-tab tbar-tab-feedback" > <a href="#" target="_blank"> <i class="tab-ico"></i> <em class="footer-tab-text ">反馈</em> </a> </div>
			</div>

			<div class="toolbar-mini"></div>

		</div>

		<div id="J-toolbar-load-hook"></div>

	</div>
</div>
<!--购物车单元格 模板-->
<script type="text/template" id="tbar-cart-item-template">
	<div class="tbar-cart-item" >
		<div class="jtc-item-promo">
			<em class="promo-tag promo-mz">满赠<i class="arrow"></i></em>
			<div class="promo-text">已购满600元，您可领赠品</div>
		</div>
		<div class="jtc-item-goods">
			<span class="p-img"><a href="#" target="_blank"><img src="{2}" alt="{1}" height="50" width="50" /></a></span>
			<div class="p-name">
				<a href="#">{1}</a>
			</div>
			<div class="p-price"><strong>¥{3}</strong>×{4} </div>
			<a href="#none" class="p-del J-del">删除</a>
		</div>
	</div>
</script>
<!--侧栏面板结束-->
<script type="text/javascript" src="/index/js/plugins/jquery/jquery.min.js"></script>
<script type="text/javascript">
$(function(){
	$("#service").hover(function(){
		$(".service").show();
	},function(){
		$(".service").hide();
	});
	$("#shopcar").hover(function(){
		$("#shopcarlist").show();
	},function(){
		$("#shopcarlist").hide();
	});
	$(".showHide").click(function(){
		// alert(1);
        var _this = $(this);
		// alert(2);
        var cat_id = _this.parents("div").attr('cat_id');
        // var pid = _this.parents("div").attr('pid');

		// alert(3);
        if(_this.text()=='+'){
			// alert(4);
        var child = $("a[pid='"+cat_id+"']");
		// console.log(child);
		// alert(5);
        //判断当前节点下是否有子类
            if(cat_id.length>0){
				alert(8);
                child.show();
                _this.text("-");
            }
        // 把当前节点下子类展示
        }else{
			// alert(7);
            _this.text('+');
            childHide(cat_id);
        }
    })
    function childHide(cat_id){
        //根据cat_id找到下子类和子类id
        var child = $("a[pid='"+cat_id+"']");
        child.each(function(){
            //$(this);是子类tr
            var c_id = $(this).attr('cat_id');
            $(this).find("[class='showHide']").text('+');
            //递归
            childHide(c_id);
            $(this).hide();
        })
    }

})
</script>
<script type="text/javascript" src="/index/js/model/cartModel.js"></script>
<script type="text/javascript" src="/index/js/czFunction.js"></script>
<script type="text/javascript" src="/index/js/jquery.easing/jquery.easing.min.js"></script>
<script type="text/javascript" src="/index/js/sui/sui.min.js"></script>
<script type="text/javascript" src="/index/js/pages/index.js"></script>
<script type="text/javascript" src="/index/js/widget/cartPanelView.js"></script>
<script type="text/javascript" src="/index/js/widget/jquery.autocomplete.js"></script>
<script type="text/javascript" src="/index/js/widget/nav.js"></script>
</body>

</html>
@endsection
<script src="/index/js/plugins/jquery/jquery.min.js">
    //点击符号
  
</script>
