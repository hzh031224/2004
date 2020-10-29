<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE">
	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
	<title>产品详情页</title>
	 <link rel="icon" href="assets//index/img/favicon.ico">

    <link rel="stylesheet" type="text/css" href="/index/css/webbase.css" />
    <link rel="stylesheet" type="text/css" href="/index/css/pages-item.css" />
    <link rel="stylesheet" type="text/css" href="/index/css/pages-zoom.css" />
    <link rel="stylesheet" type="text/css" href="/index/css/widget-cartPanelView.css" />
</head>

<body>
	<!-- 头部栏位 -->
	<!--页面顶部-->
<div id="nav-bottom">
	<!--顶部-->
	<div class="nav-top">
		@extends('layout.tou')
		@section('title'.'首页头部')
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
								<a class="sui-btn btn-default btn-xlarge" href="cart.html" target="_blank">
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

	<div class="py-container">
		<div id="item">
			<div class="crumb-wrap">
				<ul class="sui-breadcrumb">
					<li>
						<a href="#">手机、数码、通讯</a>
					</li>
					<li>
						<a href="#">手机</a>
					</li>
					<li>
						<a href="#">{{$res->goods_name}}</a>
					</li>
				</ul>
			</div>
			<!--product-info-->
			<div class="product-info">
				<div class="fl preview-wrap">
					<!--放大镜效果-->
					<div class="zoom">
						<!--默认第一个预览-->
						<div id="preview" class="spec-preview">
							<span class="jqzoom"><img jqimg="/index/img/_/b1.png" src="{{env('UPDATE_URL')}}{{$res->goods_img}}" height="400px" width="400"/></span>
						</div>
						<!--下方的缩略图-->
						<div class="spec-scroll">
							<a class="prev">&lt;</a>
							<!--左右按钮-->
							<div class="items">
								<ul>
									<li><img src="{{env('UPDATE_URL')}}{{$res->goods_img}}" bimg="img/_/b1.png"  onmousemove="preview(this)" /></li>
								</ul>
							</div>
							<a class="next">&gt;</a>
						</div>
					</div>
				</div>
				<div class="fr itemInfo-wrap">
					<div class="sku-name">
						<h4>{{$res->goods_name}}</h4>
					</div>
					<div class="news"><span>推荐选择下方[移动优惠购],手机套餐齐搞定,不用换号,每月还有花费返</span></div>
					<div class="summary">
						<div class="summary-wrap">
							<div class="fl title">
								<i>价　　格</i>
							</div>
							<div class="fl price">
								<i>¥</i>
								<em>{{$res->shop_price}}</em>
								<span>降价通知</span>
							</div>
							<div class="fr remark">
								<i>累计评价</i><em>612188</em>
							</div>
						</div>
						<div class="summary-wrap">
							<div class="fl title">
								<i>促　　销</i>
							</div>
							<div class="fl fix-width">
								<i class="red-bg">加价购</i>
								<em class="t-gray">满999.00另加20.00元，或满1999.00另加30.00元，或满2999.00另加40.00元，即可在购物车换
购热销商品</em>
							</div>
						</div>
					</div>
					<div class="support">
						<div class="summary-wrap">
							<div class="fl title">
								<i>支　　持</i>
							</div>
							<div class="fl fix-width">
								<em class="t-gray">以旧换新，闲置手机回收  4G套餐超值抢  礼品购</em>
							</div>
						</div>
						<div class="summary-wrap">
							<div class="fl title">
								<i>配 送 至</i>
							</div>
							<div class="fl fix-width">
								<em class="t-gray">满999.00另加20.00元，或满1999.00另加30.00元，或满2999.00另加40.00元，即可在购物车换购热销商品</em>
							</div>
						</div>
					</div>
					<div class="clearfix choose">
						<div id="specification" class="summary-wrap clearfix">
							<dl>
								<dt>
									<div class="fl title">
									<i>选择颜色</i>
								</div>
								</dt>
								<dd><a href="javascript:;" class="selected">金色<span title="点击取消选择">&nbsp;</span>
</a></dd>
								<dd><a href="javascript:;">银色</a></dd>
								<dd><a href="javascript:;">黑色</a></dd>
							</dl>
							<dl>
								<dt>
									<div class="fl title">
									<i>内存容量</i>
								</div>
								</dt>
								<dd><a href="javascript:;" class="selected">16G<span title="点击取消选择">&nbsp;</span>
</a></dd>
								<dd><a href="javascript:;">64G</a></dd>
								<dd><a href="javascript:;" class="locked">128G</a></dd>
							</dl>
							<dl>
								<dt>
									<div class="fl title">
									<i>选择版本</i>
								</div>
								</dt>
								<dd><a href="javascript:;" class="selected">公开版<span title="点击取消选择">&nbsp;</span>
</a></dd>
								<dd><a href="javascript:;">移动版</a></dd>							
							</dl>
							<dl>
								<dt>
									<div class="fl title">
									<i>购买方式</i>
								</div>
								</dt>
								<dd><a href="javascript:;" class="selected">官方标配<span title="点击取消选择">&nbsp;</span>
</a></dd>
								<dd><a href="javascript:;">移动优惠版</a></dd>	
								<dd><a href="javascript:;"  class="locked">电信优惠版</a></dd>
							</dl>
							<dl>
								<dt>
									<div class="fl title">
									<i>套　　装</i>
								</div>
								</dt>
								<dd><a href="javascript:;" class="selected">保护套装<span title="点击取消选择">&nbsp;</span>
</a></dd>
								<dd><a href="javascript:;"  class="locked">充电套装</a></dd>	
								
							</dl>
							
							
						</div>	
						<form action="{{('/cart/cart_do')}}" method="get">
						@csrf
						<div class="summary-wrap">
						<input  type="hidden" name="goods_id" value="{{$res->goods_id}}" >
							<div class="fl title">
								<div class="control-group">
									<div class="controls">
										<input autocomplete="off" type="text" name="buy_number" value="1" minnum="1" class="itxt" />
										<a href="javascript:void(0)" class="increment plus">+</a>
										<a href="javascript:void(0)" class="increment mins">-</a>
									</div>
								</div>
							</div>
							<div class="fl">
								<ul class="btn-choose unstyled">
									<li>
										<input type="submit" id="cart_do" goods_id="{{$res->goods_id}}" value="加入购物车"  class="sui-btn  btn-danger addshopcar">
									</li>
								</ul>
							</div>
						</div>
						</form>
					</div>
				</div>
			</div>
			<!--product-detail-->
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

})
</script>
<script type="text/javascript" src="/index/js/model/cartModel.js"></script>
<script type="text/javascript" src="/index/js/plugins/jquery/jquery.min.js"></script>
<script type="text/javascript" src="/index/js/plugins/sui/sui.min.js"></script>
<script type="text/javascript" src="/index/js/plugins/jquery.jqzoom/jquery.jqzoom.js"></script>
<script type="text/javascript" src="/index/js/plugins/jquery.jqzoom/zoom.js"></script>
<script type="text/javascript" src="index/index.js"></script>
</body>

</html>
<script>
	$(document).on("click","#cart_do",function(){
		var _this = $(this);
		// alert(1);
		var goods = _this.attr('goods_id');
        $.get(
            "{:url('/cart/cart_do')}",
            {goods_id:goods_id},
        )
        })
    })
</script>
@endsection
