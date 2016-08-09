<?php exit;?>a:3:{s:8:"template";a:3:{i:0;s:50:"/var/www/html/mall/mobile/themes/default/goods.dwt";i:1;s:61:"/var/www/html/mall/mobile/themes/default/library/comments.lbi";i:2;s:64:"/var/www/html/mall/mobile/themes/default/library/page_footer.lbi";}s:7:"expires";i:1470314537;s:8:"maketime";i:1470310937;}<!DOCTYPE html>
<html>
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<meta charset="utf-8" />
<title>NOW!无谷幼猫猫粮8磅_主食_喵星人生活馆_幸运土猫超市 触屏版</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black" />
<meta name="format-detection" content="telephone=no" />
<link href="themes/default/images/touch-icon.png" rel="apple-touch-icon-precomposed" />
<link href="themes/default/images/favicon.ico" rel="shortcut icon" type="image/x-icon" />
<link href="themes/default/ectouch.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="data/static/js/common.js"></script><script type="text/javascript" src="themes/default/js/jquery-1.4.4.min.js"></script>
<script type="text/javascript">
// 筛选商品属性
jQuery(function($) {
	$(".info").click(function(){
		$('.goodsBuy .fields').slideToggle("fast");
	});
})
function changenum(diff) {
	var num = parseInt(document.getElementById('goods_number').value);
	var goods_number = num + Number(diff);
	if( goods_number >= 1){
		document.getElementById('goods_number').value = goods_number;//更新数量
		changePrice();
	}
}
</script>
</head>
<body>
<header id="header">
  <div class="header_l header_return"> <a class="ico_10" href="cat_all.php"> 返回 </a> </div>
  <h1> 商品详情 </h1>
  <div class="header_r header_search"> <a class="ico_15" href="ectouch.php?act=share&content=NOW!无谷幼猫猫粮8磅&pic=images/201607/source_img/16_G_1469822908887.jpg"> 分享 </a> </div>
</header>
 
<script src="themes/default/js/TouchSlide.js"></script>
<section class="goods_slider">
  <div class="blank2"></div>
  <div id="slideBox" class="slideBox">
    <div class="scroller"> 
      <!--<div><a href="javascript:showPic()"><img src="images/201607/thumb_img/16_thumb_G_1469822908080.jpg"  alt="NOW!无谷幼猫猫粮8磅" /></a></div>-->
      <ul>
        <li><a href="javascript:showPic()"><img alt="" src="http://180.76.138.232/mall/images/201607/source_img/16_G_1469822908887.jpg"/></a></li>
         
         
         
         
              </ul>
    </div>
    <div class="icons">
      <ul>
        <i class="current"></i> 
         
         
        <i class="current"></i> 
         
              </ul>
    </div>
  </div>
  <div class="blank2"></div>
</section>
<script type="text/javascript">
TouchSlide({ 
	slideCell:"#slideBox",
	titCell:".icons ul", //开启自动分页 autoPage:true ，此时设置 titCell 为导航元素包裹层
	mainCell:".scroller ul", 
	effect:"leftLoop", 
	autoPage:true,//自动分页
	autoPlay:false //自动播放
});
function showPic(){
	var data = document.getElementById("slideBox").className;
	var reCat = /ui-gallery/;
	//str1.indexOf(str2);
	if( reCat.test(data) ){
		document.getElementById("slideBox").className = 'slideBox';
	}else{
		document.getElementById("slideBox").className = 'slideBox ui-gallery';
		//document.getElementById("slideBox").style.position = 'fixed';
	}
}
</script> 
 
<section class="goodsInfo">
  <a class="collect" id="collect_box" href="javascript:collect(16)" style="display: inline;"></a>
  <div class="title">
    <h1> NOW!无谷幼猫猫粮8磅 </h1>
  </div>
  <ul>
        <li>本店售价：<b class="price">￥329.0</b>　    <del>￥394.0</del> 
    </li>
     
	    <li>注册用户：<b class="price" id="ECS_RANKPRICE_1">￥329.0</b></li>
        <li>VIP：<b class="price" id="ECS_RANKPRICE_2">￥263.2</b></li>
      </ul>
      
  <ul>
    <li>月销量：0件</li>
  </ul>
</section>
<div class="wrap">
  <section class="goodsBuy radius5">
    <input id="goodsBuy-open" type="checkbox">
    <label class="info" for="goodsBuy-open">
    <div>请选择<span></span><i></i></div>
    <div class="selected"> </div>
    </label>
    <form action="javascript:addToCart(16)" method="post" name="ECS_FORMBUY" id="ECS_FORMBUY" >
     <div class="fields">	 
        <ul class="ul1">
          <li>商品总价：<font id="ECS_GOODS_AMOUNT" class="price"></font></li>
          <li></li>
        </ul>
        <ul class="ul2">
           
           
          
        </ul>
        <ul class="quantity">
          <h2>数量：</h2>
          <div class="items"> <span class="ui-number radius5"> 
                        <button type="button" class="decrease radius5" onclick="changenum(- 1)">-</button>
            <input class="num" name="number" id="goods_number" autocomplete="off" value="1" min="1" max="" type="number" />
            <button type="button" class="increase radius5" onclick="changenum(1)">+</button>
             
            </span> </div>
        </ul>
      </div>
      <div class="option" > 
        <script type="text/javascript">
            function showDiv(){
                document.getElementById('popDiv').style.display = 'block';
				document.getElementById('hidDiv').style.display = 'block';
				document.getElementById('cartNum').innerHTML = document.getElementById('goods_number').value;
				document.getElementById('cartPrice').innerHTML = document.getElementById('ECS_GOODS_AMOUNT').innerHTML;
            }
            function closeDiv(){
                document.getElementById('popDiv').style.display = 'none';
				document.getElementById('hidDiv').style.display = 'none';
            }
     </script>
        <button type="button" class="btn buy radius5" onClick="addToCart_quick(16)">立即购买</button>
        <button type="button" class="btn cart radius5" onclick="addToCart(16);">
        <div class="ico_01"></div>
        加入购物车</button>
        
        <div class="tipMask" id="hidDiv" style="display:none" ></div>
        <div class="popGeneral" id="popDiv" >
          <div class="tit">
            <h4>商品加入购物车</h4>
            <span class="ico_08" onclick="closeDiv()"><a href="javascript:"></a></span> </div>
          <div id="main">
            <div id="left"> <img width="115" height="115" src="http://180.76.138.232/mall/images/201607/source_img/16_G_1469822908887.jpg"> </div>
            <div id="right">
              <p>NOW!无谷幼猫猫粮8磅</p>
              <span> 加入数量： <b id="cartNum"></b></span> <span> 总计金额： <b id="cartPrice"></b></span> 
            </div>
          </div>
          <div class="popbtn"> <a class="bnt1 flex_in radius5" onclick="closeDiv()" href="javascript:void(0);">继续购物</a> <a class="bnt2 flex_in radius5" href="flow.php">去结算</a> </div>
        </div>
         
      </div>
    </form>
  </section>
  <div class="guarantee">微信支付商家,正品保证,假一罚三,七天无条件退换货。</div>
</div>
<script type="text/javascript">
//介绍 评价 咨询切换
var tab_now = 1;
function tab(id){
	document.getElementById('tabs' + tab_now).className = document.getElementById('tabs' + tab_now).className.replace('current', '');
	document.getElementById('tabs' + id).className = document.getElementById('tabs' + id).className.replace('', 'current');
	tab_now = id;
	if (id == 1) {
		document.getElementById('tab1').className = '';
		document.getElementById('tab2').className = 'hidden';
		document.getElementById('tab3').className = 'hidden';
	}else if (id == 2) {
		document.getElementById('tab1').className = 'hidden';
		document.getElementById('tab2').className = '';
		document.getElementById('tab3').className = 'hidden';
	}else if (id == 3) {
		document.getElementById('tab1').className = 'hidden';
		document.getElementById('tab2').className = 'hidden';
		document.getElementById('tab3').className = '';
	}
}
</script> 
<section class="s-detail">
  <header>
    <ul style="position: static;" id="detail_nav">
      <li id="tabs1" onClick="tab(1)" class="current"> 详情 </li>
      <li id="tabs2" onClick="tab(2)" class=""> 评价 <span class="review-count">(0)</span> </li>
      <li id="tabs3" onClick="tab(3)" class=""> 热销 </li>
    </ul>
  </header>
  <div id="tab1" class="">
    <div class="desc wrap">
      <div class="blank2"></div>
      <p align="left">
	<img src="/mall/includes/kindeditor/php/../../../images/upload/image/20160730/20160730121620_99434.jpg" alt="" /><img src="http://180.76.138.232/mall/images/upload/image/20160730/20160730121621_13665.jpg" alt="" /> 
</p>
<p>
	<br />
</p>
<img src="/mall/includes/kindeditor/php/../../../images/upload/image/20160730/20160730121620_16422.jpg" alt="" /> 
<p>
	<br />
</p>
<p align="left">
	<br />
</p>
<p align="left">
	<br />
</p>
<div align="left">
	<span style="font-family:microsoft yahei;"><span style="font-size:18.0px;">猫狗们挚爱NOW的新鲜味道，就像爱厨房刚出锅的美食一样。</span></span> 
</div>
<div align="left">
	<span style="font-family:microsoft yahei;"><span style="font-size:18.0px;">只采用人类级上等新鲜食材，比如新鲜的火鸡、三文鱼和鸭肉，富含欧米茄3&6油脂的新鲜椰子油、芥花籽油，加上健康的浆果、水果和蔬菜（豌豆、菠菜、蔓越莓、南瓜、黑莓、苜蓿芽、海藻、扁豆和胡萝卜等）。不采用谷物、炼制肉、人造防腐剂等。</span></span> 
</div>
<div align="left">
	<span style="font-family:microsoft yahei;"><span style="font-size:18.0px;">“新鲜”的独有妙处，就是所有食材只经一次烹调，且维生素、矿物质、益生菌和益生元均在宠粮颗粒制成后添加，保留最多最有效的营养成分，使爱宠受益匪浅。</span></span> 
</div>
<div align="left">
	<span style="font-family:microsoft yahei;"><span style="font-size:18.0px;">蛋白质和脂肪含量适中，有效防止食物和营养不耐受，减轻消化和排泄负担，呵护敏感肠胃，达到长期健康。</span></span> 
</div>
<div align="left">
	<span style="font-family:microsoft yahei;"><span style="font-size:18.0px;"> </span></span> 
</div>
<div align="left">
	<span style="font-family:microsoft yahei;"><span style="font-size:18.0px;">NOW FRESH幼猫、成猫和老猫配方：</span></span> 
</div>
<div align="left">
	<span style="color:#000000;font-family:microsoft yahei;font-size:18.181818px;line-height:20.994318px;">采用人类食用</span><span style="font-family:microsoft yahei;"><span style="font-size:18.0px;">级鲜肉，且蛋白质和脂肪含量适中的无谷天然猫粮</span></span> 
</div>
<div align="left">
	<span style="font-family:microsoft yahei;"><span style="font-size:18.0px;">呵护爱猫终生健康，防止食物和营养不耐受，减轻消化排泄负担</span></span> 
</div>
<div align="left">
	<span style="font-family:microsoft yahei;"><span style="font-size:18.0px;">新鲜食材，适口性佳；一次烹饪，营养最大化</span></span> 
</div>
<div align="left">
	<span style="font-family:microsoft yahei;"><span style="font-size:18.0px;">独有配方，特效防软便</span></span> 
</div>
<div align="left">
	<span style="font-family:microsoft yahei;"><span style="font-size:18.0px;">欧米茄油脂，护肤美毛，减少毛球</span></span> 
</div>
<div align="left">
	<span style="font-family:microsoft yahei;"><span style="font-size:18.0px;">零添加谷物、炼制肉、副产品及化学防腐剂等。</span></span> 
</div>
<div align="left">
	<span style="font-family:microsoft yahei;"><span style="font-size:18.0px;"> </span></span> 
</div>
<div align="left">
	<strong><span style="font-family:microsoft yahei;"><span style="font-size:18.0px;">商品介绍：</span></span></strong> 
</div>
<div align="left">
	<span style="font-family:microsoft yahei;"><span style="font-size:18.0px;"> </span></span> 
</div>
<div align="left">
	<span style="font-family:microsoft yahei;"><span style="font-size:18.0px;">Now!新鲜火鸡、三文鱼和鸭肉，加上富含欧米茄3&6的新鲜椰子油和芥花籽油，健康美味，难以抗拒。平衡的蛋白质和脂肪，满足幼猫成长需要。独有配方，呵护幼猫脆弱肠胃，特效防软便。</span></span> 
</div>
<div align="left">
	<span style="font-family:microsoft yahei;"><span style="font-size:18.0px;"> </span></span> 
</div>
<div align="left">
	<strong><span style="font-family:microsoft yahei;"><span style="font-size:18.0px;">特点介绍：</span></span></strong> 
</div>
<div align="left">
	<span style="font-family:microsoft yahei;"><span style="font-size:18.0px;"> </span></span> 
</div>
<div align="left">
	<span style="font-family:microsoft yahei;"><span style="font-size:18.0px;">益生元益生菌，帮助消化吸收</span></span> 
</div>
<div align="left">
	<span style="font-family:microsoft yahei;"><span style="font-size:18.0px;">小颗粒，适口性佳，防口炎</span></span> 
</div>
<div align="left">
	<span style="font-family:microsoft yahei;"><span style="font-size:18.0px;">DHA/EPA，促进幼猫的大脑发育</span></span> 
</div>
<div align="left">
	<span style="font-family:microsoft yahei;"><span style="font-size:18.0px;">添加牛磺酸，支持视力和心脏功能</span></span> 
</div>
<div align="left">
	<span style="font-family:microsoft yahei;"><span style="font-size:18.0px;">欧米茄油脂，护肤美毛，减少毛球</span></span> 
</div>
<div align="left">
	<span style="font-family:microsoft yahei;"><span style="font-size:18.0px;">天然抗氧化剂，增强免疫力</span></span> 
</div>
<div align="left">
	<span style="font-family:microsoft yahei;"><span style="font-size:18.0px;">不含谷物、麸质、小麦、牛肉、玉米或大豆</span></span> 
</div>
<div align="left">
	<span style="font-family:microsoft yahei;"><span style="font-size:18.0px;">不含炼制肉、副产品或人造化学防腐剂。</span></span> 
</div>
<div align="left">
	<span style="font-family:microsoft yahei;"><span style="font-size:18.0px;"></span></span> 
</div>
<div align="left">
	<strong><span style="font-family:microsoft yahei;"><span style="font-size:18.0px;">成份：</span></span></strong> 
</div>
<div align="left">
	<span style="font-family:microsoft yahei;"><span style="font-size:18.0px;"> </span></span> 
</div>
<div align="left">
	<span style="font-family:microsoft yahei;"><span style="font-size:18.0px;">去
骨火鸡肉，马铃薯粉，青豆，土豆，全干蛋粉，芥花籽油（由含有天然维生素E的混合生育醇保存），青豆纤维，番茄，天然香精，亚麻籽，椰油（由含有天然维生
素E的混合生育醇保存），去骨三文鱼，去骨鸭肉，胡萝卜，南瓜，苹果，香蕉，蓝莓，蔓越莓，黑莓，番木瓜，菠萝，葡萄柚，小扁豆，西兰花，菠菜，松软干
酪，苜蓿芽，二硷式磷酸钙，干苜蓿，干海草灰，碳酸钙，磷酸，氯化钠，软磷脂，氯化钾，DL-蛋氨酸，牛磺酸，干海藻粉，维生素（维生素E补充剂，Vc-
2-多聚磷酸脂，（维生素C来源），烟碱，肌醇，维生素A补充剂，维生素B1硝酸盐，D-泛亚酸，盐酸吡哆醇，核黄素，β-胡萝卜素，维生素D3补充剂，
叶酸，生物素，维生素B12补充剂），矿物质（蛋白锌，硫酸亚铁，氯化锌，蛋白铁，硫酸铜，蛋白铜，蛋白锰，氯化锰，碘酸钙，亚硒酸钠），L-赖氨酸，干
菊苣根粉，干乳酸肠球菌发酵产品，干屎肠球菌发酵产品，干黑曲霉菌发酵产品，干米麴菌发酵产品，酵母提取物，丝兰萃取物，L-肉碱，万寿菊，干迷迭香不适
合人类。</span></span> 
</div>
<div align="left">
	<span style="font-family:microsoft yahei;"><span style="font-size:18.0px;"> </span></span> 
</div>
<div align="left">
	<strong><span style="font-family:microsoft yahei;"><span style="font-size:18.0px;">营养分析值：</span></span></strong> 
</div>
<div align="left">
	<span style="font-family:microsoft yahei;"><span style="font-size:18.0px;"> </span></span> 
</div>
<div align="left">
	<span style="font-family:microsoft yahei;"><span style="font-size:18.0px;">天然蛋白质（不低于）---33%</span></span><span style="font-size:18.0px;font-family:microsoft yahei;line-height:1.5;"> </span> 
</div>
<div align="left">
	<span style="font-family:microsoft yahei;"><span style="font-size:18.0px;">天然脂肪（不低于）---20% </span></span> 
</div>
<div align="left">
	<span style="font-family:microsoft yahei;"><span style="font-size:18.0px;">天然纤维（不高于）---2.5% </span></span> 
</div>
<div align="left">
	<span style="font-family:microsoft yahei;"><span style="font-size:18.0px;"> </span></span><span style="font-size:18.0px;font-family:microsoft yahei;line-height:1.5;">水份（不高于）---10%</span> 
</div>
<div align="left">
	<span style="font-family:microsoft yahei;"><span style="font-size:18.0px;"> </span></span><span style="font-size:18.0px;font-family:microsoft yahei;line-height:1.5;">灰质（不高于）---6%</span> 
</div>
<div align="left">
	<span style="font-family:microsoft yahei;"><span style="font-size:18.0px;"> </span></span><span style="font-size:18.0px;font-family:microsoft yahei;line-height:1.5;">镁（不高于）---0.09%</span> 
</div>
<div align="left">
	<span style="font-family:microsoft yahei;"><span style="font-size:18.0px;"> </span></span><span style="font-size:18.0px;font-family:microsoft yahei;line-height:1.5;">牛磺酸（不低于）---2500 mg/kg</span> 
</div>
<div align="left">
	<span style="font-family:microsoft yahei;"><span style="font-size:18.0px;"> </span></span><span style="font-size:18.0px;font-family:microsoft yahei;line-height:1.5;">二十二碳六烯酸（不低于）---0.01%</span> 
</div>
<div align="left">
	<span style="font-family:microsoft yahei;"><span style="font-size:18.0px;"> </span></span><span style="font-size:18.0px;font-family:microsoft yahei;line-height:1.5;">二十碳五烯酸（不低于）---0.02%</span> 
</div>
<div align="left">
	<span style="font-family:microsoft yahei;"><span style="font-size:18.0px;"> </span></span><span style="font-size:18.0px;font-family:microsoft yahei;line-height:1.5;">益生元（不低于）---0.23%</span> 
</div>
<div align="left">
	<span style="font-family:microsoft yahei;"><span style="font-size:18.0px;"> </span></span><span style="font-size:18.0px;font-family:microsoft yahei;line-height:1.5;">欧米茄6脂肪酸（不低于）---2.4%</span> 
</div>
<div align="left">
	<span style="font-family:microsoft yahei;"><span style="font-size:18.0px;"> </span></span><span style="font-size:18.0px;font-family:microsoft yahei;line-height:1.5;">欧米茄3脂肪酸（不低于）---0.48%</span> 
</div>
<div align="left">
	<span style="font-family:microsoft yahei;"><span style="font-size:18.0px;"> </span></span><span style="font-size:18.0px;font-family:microsoft yahei;line-height:1.5;">微生物-（不低于）--90000000 CFU/磅</span> 
</div>
<div align="left">
	<span style="font-family:microsoft yahei;"><span style="font-size:18.0px;"> </span></span><span style="font-size:18.0px;font-family:microsoft yahei;line-height:1.5;">（嗜酸乳酸菌、乳酸肠球菌）</span> 
</div>
<div align="left">
	<span style="font-family:microsoft yahei;"><span style="font-size:18.0px;"> </span></span><span style="font-size:18.0px;font-family:microsoft yahei;line-height:1.5;">卡路里含量：代谢能（计算）=3947千卡/千克，454千卡/杯</span> 
</div>
<p>
	<br />
</p>    </div>
  </div>
  <div id="tab2" class="hidden">
    <div class="wrap">
      <div class="blank2"></div>
      <script type="text/javascript" src="data/static/js/transport.js"></script><script type="text/javascript" src="data/static/js/utils.js"></script><div id="ECS_COMMENT"> 554fcae493e564ee0dc75bdf2ebf94cacomments|a:3:{s:4:"name";s:8:"comments";s:4:"type";i:0;s:2:"id";i:16;}554fcae493e564ee0dc75bdf2ebf94ca</div>
 </div>
  </div>
  <div id="tab3" class="hidden">
    <div class="wrap">
      <ul class="m-recommend ">
        <div class="blank2"></div>
              </ul>
    </div>
  </div>
</section>
<div id="content" class="footer mr-t20">
  <div class="in">
    <div class="search_box">
      <form method="post" action="search.php" name="searchForm" id="searchForm_id">
        <input name="keywords" type="text" id="keywordfoot" />
        <button class="ico_07" type="submit" value="搜索" onclick="return check('keywordfoot')"> </button>
      </form>
    </div>
    <a href="./" class="homeBtn"> <span class="ico_05"> </span> </a> <a href="#top" class="gotop"> <span class="ico_06"> </span> <p> TOP </p>
    </a>
  </div>
  <p class="link region"> <a href="http://180.76.138.232/mall/?computer=1"> 电脑版 </a> <a href="./"> 触屏版 </a> <a href="#"> 苹果客户端 </a> <a class="#"> Android客户端 </a> </p>
  <p class="region"> 
     
    &copy; 2005-2016 幸运土猫超市 版权所有，并保留所有权利。 </p>
  <div class="favLink region"> <a href="http://www.jm-wp.com"> powered by JM-WP </a> </div>
</div>
<link href="themes/default/css/global_nav.css?v=20140408" type="text/css" rel="stylesheet"/>
<div class="global-nav">
    <div class="global-nav__nav-wrap">
        <div class="global-nav__nav-item">
            <a href="./" class="global-nav__nav-link">
                <i class="global-nav__iconfont global-nav__icon-index">&#xf0001;</i>
                <span class="global-nav__nav-tit">首页</span>
            </a>
        </div>
        <div class="global-nav__nav-item">
            <a href="cat_all.php" class="global-nav__nav-link">
                <i class="global-nav__iconfont global-nav__icon-category">&#xf0002;</i>
                <span class="global-nav__nav-tit">分类</span>
            </a>
        </div>
        <div class="global-nav__nav-item">
            <a href="javascript:get_search_box();" class="global-nav__nav-link">
                <i class="global-nav__iconfont global-nav__icon-search">&#xf0003;</i>
                <span class="global-nav__nav-tit">搜索</span>
            </a>
        </div>
        <div class="global-nav__nav-item">
            <a href="flow.php?step=cart" class="global-nav__nav-link">
                <i class="global-nav__iconfont global-nav__icon-shop-cart">&#xf0004;</i>
                <span class="global-nav__nav-tit">购物车</span>
                <span class="global-nav__nav-shop-cart-num" id="carId">554fcae493e564ee0dc75bdf2ebf94cacart_info_number|a:1:{s:4:"name";s:16:"cart_info_number";}554fcae493e564ee0dc75bdf2ebf94ca</span>
            </a>
        </div>
        <div class="global-nav__nav-item">
            <a href="user.php?act=order_list" class="global-nav__nav-link">
                <i class="global-nav__iconfont global-nav__icon-my-yhd">&#xf0005;</i>
                <span class="global-nav__nav-tit">我的订单</span>
            </a>
        </div>
    </div>
    <div class="global-nav__operate-wrap">
        <span class="global-nav__yhd-logo"></span>
        <span class="global-nav__operate-cart-num" id="globalId">554fcae493e564ee0dc75bdf2ebf94cacart_info_number|a:1:{s:4:"name";s:16:"cart_info_number";}554fcae493e564ee0dc75bdf2ebf94ca</span>
    </div>
</div>
<script type="text/javascript" src="themes/default/js/zepto.min.js?v=20140408"></script>
<script type="text/javascript">
Zepto(function($){
   var $nav = $('.global-nav'), $btnLogo = $('.global-nav__operate-wrap');
   //点击箭头，显示隐藏导航
   $btnLogo.on('click',function(){
     if($btnLogo.parent().hasClass('global-nav--current')){
       navHide();
     }else{
       navShow();
     }
   });
   var navShow = function(){
     $nav.addClass('global-nav--current');
   }
   var navHide = function(){
     $nav.removeClass('global-nav--current');
   }
   
   $(window).on("scroll", function() {
		if($nav.hasClass('global-nav--current')){
			navHide();
		}
	});
})
function get_search_box(){
	try{
		document.getElementById('get_search_box').click();
	}catch(err){
		document.getElementById('keywordfoot').focus();
 	}
}
</script>
 
 
<script type="text/javascript">
var goods_id = 16;
var goodsattr_style = 1;
var gmt_end_time = 0;
var day = "天";
var hour = "小时";
var minute = "分钟";
var second = "秒";
var end = "结束";
var goodsId = 16;
var now_time = 1470282137;
onload = function(){
  changePrice();
  fixpng();
  try {onload_leftTime();}
  catch (e) {}
}
/**
 * 点选可选属性或改变数量时修改商品价格的函数
 */
function changePrice()
{
  var attr = getSelectedAttributes(document.forms['ECS_FORMBUY']);
  var qty = document.forms['ECS_FORMBUY'].elements['number'].value;
  Ajax.call('goods.php', 'act=price&id=' + goodsId + '&attr=' + attr + '&number=' + qty, changePriceResponse, 'GET', 'JSON');
}
/**
 * 接收返回的信息
 */
function changePriceResponse(res)
{
  if (res.err_msg.length > 0)
  {
    alert(res.err_msg);
  }
  else
  {
    document.forms['ECS_FORMBUY'].elements['number'].value = res.qty;
    if (document.getElementById('ECS_GOODS_AMOUNT'))
      document.getElementById('ECS_GOODS_AMOUNT').innerHTML = res.result;
  }
}
</script>
</body>
</html>