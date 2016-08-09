<?php exit;?>a:3:{s:8:"template";a:4:{i:0;s:42:"/var/www/html/mall/themes/xiaomi/index.dwt";i:1;s:56:"/var/www/html/mall/themes/xiaomi/library/page_header.lbi";i:2;s:57:"/var/www/html/mall/themes/xiaomi/library/cat_articles.lbi";i:3;s:56:"/var/www/html/mall/themes/xiaomi/library/page_footer.lbi";}s:7:"expires";i:1470718733;s:8:"maketime";i:1470715133;}<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="幸运土猫 商城 流浪猫 救助 义卖" />
<meta name="Description" content="幸运土猫超市" />
<title>幸运土猫超市</title>
<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<script src="themes/xiaomi/js/jquery.js"></script>
<link rel="stylesheet" type="text/css" href="themes/xiaomi/css/index.min.css?2014050501" />
<script type="text/javascript">
/*<![CDATA[*/
var isCategoryToggled = "toggled";
var isSekillOpen = 1;
var isCommentOpen = 1;
/*]]>*/
</script>
<link rel="alternate" type="application/rss+xml" title="RSS|幸运土猫超市" href="feed.php" />
</head>
<body>
<link rel="stylesheet" href="themes/xiaomi/css/base.min.css?2014050501" />
<script src="themes/xiaomi/js/jquery.js"></script>
<script type="text/javascript">
var process_request = "正在处理您的请求...";
</script>
<script type="text/javascript">
var isWidescreen=screen.width<1200;
if (isWidescreen){
document.getElementsByTagName("body")[0].className="w950";
document.write("<link rel='stylesheet' type='text/css' href='themes/xiaomi/css/980base.css'>");
}
</script>
<div class="site-topbar">
  <div class="container">
    <div class="topbar-nav">
            <a href="#" 
            >小米网</a>
            <span class="sep">|</span>
                  <a href="#" 
            >MIUI</a>
            <span class="sep">|</span>
                  <a href="#" 
            >米聊</a>
            <span class="sep">|</span>
                  <a href="#" 
            >游戏</a>
            <span class="sep">|</span>
                  <a href="#" 
            >多看阅读</a>
            <span class="sep">|</span>
                  <a href="mobile" 
            >小米网移动版</a>
                </div>
    <div class="topbar-info J_userInfo"> 554fcae493e564ee0dc75bdf2ebf94camember_info|a:1:{s:4:"name";s:11:"member_info";}554fcae493e564ee0dc75bdf2ebf94ca </div>
  </div>
</div>
<div class="site-header container" id="site_header">
  <div class="site-logo"> <a class="logo" href="index.php"><img src="themes/xiaomi/images/logo.gif" /> </a> </div>
  <div class="header-info">
    <div class="search-section">
      <script type="text/javascript">
    
    <!--
    function checkSearchForm()
    {
        if(document.getElementById('keyword').value)
        {
            return true;
        }
        else
        {
            alert("请输入搜索关键词！");
            return false;
        }
    }
    -->
    
    </script>
	<script language="javascript">
	function drop_cart_goods(id)
	{
		$.ajax({
						type:"POST",
						url:"flow.php?step=drop_cart_goods&id=" + id,
						cache:false,
						dataType:'json',     //接受数据格式
						data:'',
						success:function(result){
							$('#J_miniCartList').html(result.message);
							$('.J_cartNum').html('(' + result.goods_num + ')');
						}
					});
	}
	
	</script>
      <form id="J_searchForm" class="search-form clearfix" action="search.php" method="get" onSubmit="return checkSearchForm()" >
        <input class="search-text" type="search" name="keywords" id="keyword" autocomplete="off" value="" placeholder="搜索您需要的商品" />
        <input type="submit" class="search-btn iconfont" value="&#xe630;" />
        <!--[if IE 6]><div class="ie6-fix"></div><![endif]-->
        <div class="hot-words">  <a href="search.php?keywords=%E6%96%B0%E6%89%8B%E5%AE%B6%E9%95%BF">新手家长</a>  <a href="search.php?keywords=%E7%8E%A9%E5%85%B7">玩具</a>  <a href="search.php?keywords=%E7%BB%9D%E8%82%B2">绝育</a>  </div>
      </form>
    </div>
    <div class="cart-section"> <a id="J_miniCart" class="mini-cart" href="flow.php"><i class="iconfont">&#xe609;</i>购物车<span class="mini-cart-num J_cartNum">(554fcae493e564ee0dc75bdf2ebf94cacart_count|a:1:{s:4:"name";s:10:"cart_count";}554fcae493e564ee0dc75bdf2ebf94ca)</span></a>
      <div id="J_miniCartList" class="mini-cart-list">
        		554fcae493e564ee0dc75bdf2ebf94cacart_data|a:1:{s:4:"name";s:9:"cart_data";}554fcae493e564ee0dc75bdf2ebf94ca      </div>
    </div>
  </div>
  <div class="header-nav clearfix">
    <div id="J_categoryContainer" class="nav-category"> <a class="btn-category-list" href="catalog.php">全部商品分类</a>
      <div class="nav-category-section" style="display: none;">
        <ul class="nav-category-list">
          		  <li class="nav-category-item ">
            <div class="nav-category-content"><a class="title" href="category.php?id=32">领养一只猫咪</a>
              <div class="links">
			  			  			  <a href="category.php?id=39">成年猫</a>
			  			  			  			  <a href="category.php?id=40">幼猫</a>
			  			  			  </div>
			                <div class="nav-category-children">
                <ul class="children-list">
				                  <li><a href="category.php?id=39"><img src="themes/xiaomi/images/index/cat_39.jpg" alt=""><span class="text">成年猫</span></a></li>
				                    <li><a href="category.php?id=40"><img src="themes/xiaomi/images/index/cat_40.jpg" alt=""><span class="text">幼猫</span></a></li>
				                  </ul>
                <div class="children-special-section">
                  <h4>热门商品</h4>
                  <ul>
				                    </ul>
                </div>
              </div>
			              </div>
          </li>
		  		  <li class="nav-category-item ">
            <div class="nav-category-content"><a class="title" href="category.php?id=27">喵星人生活馆</a>
              <div class="links">
			  			  			  <a href="category.php?id=28">主食</a>
			  			  			  			  <a href="category.php?id=29">零食/营养品</a>
			  			  			  			  <a href="category.php?id=30">玩具</a>
			  			  			  			  			  			  			  </div>
			                <div class="nav-category-children">
                <ul class="children-list">
				                  <li><a href="category.php?id=28"><img src="themes/xiaomi/images/index/cat_28.jpg" alt=""><span class="text">主食</span></a></li>
				                    <li><a href="category.php?id=29"><img src="themes/xiaomi/images/index/cat_29.jpg" alt=""><span class="text">零食/营养品</span></a></li>
				                    <li><a href="category.php?id=30"><img src="themes/xiaomi/images/index/cat_30.jpg" alt=""><span class="text">玩具</span></a></li>
				                    <li><a href="category.php?id=37"><img src="themes/xiaomi/images/index/cat_37.jpg" alt=""><span class="text">猫砂</span></a></li>
				                    <li><a href="category.php?id=31"><img src="themes/xiaomi/images/index/cat_31.jpg" alt=""><span class="text">生活用品</span></a></li>
				                  </ul>
                <div class="children-special-section">
                  <h4>热门商品</h4>
                  <ul>
				                      <li><a href="goods.php?id=16">NOW!无谷幼猫猫粮... ￥296</a></li>
                                      <li><a href="goods.php?id=14">NOW!无谷成猫猫粮... ￥296</a></li>
                                    </ul>
                </div>
              </div>
			              </div>
          </li>
		  		  <li class="nav-category-item ">
            <div class="nav-category-content"><a class="title" href="category.php?id=38">蓝星人主题馆</a>
              <div class="links">
			  			  			  <a href="category.php?id=34">家居用品</a>
			  			  			  			  <a href="category.php?id=36">服饰鞋帽</a>
			  			  			  			  <a href="category.php?id=35">玻璃瓷器</a>
			  			  			  			  			  </div>
			                <div class="nav-category-children">
                <ul class="children-list">
				                  <li><a href="category.php?id=34"><img src="themes/xiaomi/images/index/cat_34.jpg" alt=""><span class="text">家居用品</span></a></li>
				                    <li><a href="category.php?id=36"><img src="themes/xiaomi/images/index/cat_36.jpg" alt=""><span class="text">服饰鞋帽</span></a></li>
				                    <li><a href="category.php?id=35"><img src="themes/xiaomi/images/index/cat_35.jpg" alt=""><span class="text">玻璃瓷器</span></a></li>
				                    <li><a href="category.php?id=41"><img src="themes/xiaomi/images/index/cat_41.jpg" alt=""><span class="text">杂货铺</span></a></li>
				                  </ul>
                <div class="children-special-section">
                  <h4>热门商品</h4>
                  <ul>
				                    </ul>
                </div>
              </div>
			              </div>
          </li>
		  		  <li class="nav-category-item ">
            <div class="nav-category-content"><a class="title" href="category.php?id=42">帮助身边的流浪猫</a>
              <div class="links">
			  			  			  <a href="category.php?id=43">群护猫粮</a>
			  			  			  			  <a href="category.php?id=44">绝育优惠</a>
			  			  			  </div>
			                <div class="nav-category-children">
                <ul class="children-list">
				                  <li><a href="category.php?id=43"><img src="themes/xiaomi/images/index/cat_43.jpg" alt=""><span class="text">群护猫粮</span></a></li>
				                    <li><a href="category.php?id=44"><img src="themes/xiaomi/images/index/cat_44.jpg" alt=""><span class="text">绝育优惠</span></a></li>
				                  </ul>
                <div class="children-special-section">
                  <h4>热门商品</h4>
                  <ul>
				                    </ul>
                </div>
              </div>
			              </div>
          </li>
		  		  <li class="nav-category-item ">
            <div class="nav-category-content"><a class="title" href="category.php?id=45">土猫团购</a>
              <div class="links">
			  			  </div>
			              </div>
          </li>
		            
        </ul>
      </div>
    </div>
    <div class="nav-main">
      <ul class="nav-main-list J_menuNavMain clearfix">
        <li class="nav-main-item current"> <a  href="index.php"><span class="text">首页</span></a> </li>
                <li class="nav-main-item "> <a  href="category.php?id=32" ><span class="text">领养猫咪</span><span class="arrow"></span></a> 554fcae493e564ee0dc75bdf2ebf94camenu_goods|a:2:{s:4:"name";s:10:"menu_goods";s:3:"url";s:18:"category.php?id=32";}554fcae493e564ee0dc75bdf2ebf94ca </li>
                <li class="nav-main-item "> <a  href="category.php?id=27" ><span class="text">喵星人</span><span class="arrow"></span></a> 554fcae493e564ee0dc75bdf2ebf94camenu_goods|a:2:{s:4:"name";s:10:"menu_goods";s:3:"url";s:18:"category.php?id=27";}554fcae493e564ee0dc75bdf2ebf94ca </li>
                <li class="nav-main-item "> <a  href="category.php?id=38" ><span class="text">蓝星人</span><span class="arrow"></span></a> 554fcae493e564ee0dc75bdf2ebf94camenu_goods|a:2:{s:4:"name";s:10:"menu_goods";s:3:"url";s:18:"category.php?id=38";}554fcae493e564ee0dc75bdf2ebf94ca </li>
                <li class="nav-main-item "> <a  href="category.php?id=42" ><span class="text">帮助流浪猫</span><span class="arrow"></span></a> 554fcae493e564ee0dc75bdf2ebf94camenu_goods|a:2:{s:4:"name";s:10:"menu_goods";s:3:"url";s:18:"category.php?id=42";}554fcae493e564ee0dc75bdf2ebf94ca </li>
                <li class="nav-main-item "> <a  href="exchange.php" ><span class="text">积分商城</span><span class="arrow"></span></a> 554fcae493e564ee0dc75bdf2ebf94camenu_goods|a:2:{s:4:"name";s:10:"menu_goods";s:3:"url";s:12:"exchange.php";}554fcae493e564ee0dc75bdf2ebf94ca </li>
              </ul>
    </div>
  </div>
  <div class="open-buy-info"></div>
</div>
<script>
/*css*/
if (window.screen.width < 1280)
{	
	document.write("<link rel='stylesheet' type='text/css' href='themes/xiaomi/css/980base.css'>");
	document.write("<link rel='stylesheet' type='text/css' href='themes/xiaomi/css/980index.css'>");
}
</script>
<div class="container">
  <div class="row">
    <div class="col col-16 offset4">
      <div class="home-slider">
        <div id="J_homeSlider" class="xm-slider">
		          <div class="slide"> <a href="http://www.luckycats.org.cn" target="_blank"><img src="data/afficheimg/20160729odwfgk.jpg" /></a> </div>
		           <div class="slide"> <a href="http://www.luckycats.org.cn" target="_blank"><img src="data/afficheimg/20160729kqulbf.jpg" /></a> </div>
		           <div class="slide"> <a href="http://www.luckycats.org.cn" target="_blank"><img src="data/afficheimg/20160729ediikr.jpg" /></a> </div>
		  
         
        </div>
      </div>
      <div class="home-hd-show clearfix">
	          <div class="hd-show-item hd-show-item-first"> <a href="affiche.php?ad_id=1&uri=http://www.luckycats.org.cn"><img alt="3" src="data/afficheimg/1469738732577278040.png" /></a> </div>
	          <div class="hd-show-item "> <a href="affiche.php?ad_id=2&uri=http://www.luckycats.org.cn"><img alt="3" src="data/afficheimg/1469738768076779430.png" /></a> </div>
	          <div class="hd-show-item "> <a href="affiche.php?ad_id=3&uri=http://www.luckycats.org.cn"><img alt="3" src="data/afficheimg/1469738793783057965.png" /></a> </div>
	  	
     
      </div>
    </div>
  </div>
  <div class="home-star-goods">
    <div class="xm-plain-box J_starGoodsCarousel">
      <div class="box-hd">
        <h3 class="title">明星单品</h3>
        <div class="more">
          <div class="xm-recommend-page clearfix"> <a class="page-btn-prev page-btn-prev-disabled iconfont J_carouselPrev" href="javascript: void(0);">&#xe604;</a><a class="page-btn-next iconfont J_carouselNext" href="javascript: void(0);">&#xe605;</a> </div>
        </div>
      </div>
      <div class="box-bd">
        <div class="xm-star-goods-list-wrap J_carouselWrap">
          <div class="xm-star-goods-list clearfix J_carouselList">
		  			
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <div class="home-new-goods">
    <div class="xm-plain-box">
      <div class="box-hd">
        <h3 class="title">新品上架</h3>
        <div class="more"> <a class="more-link" href="search.php?intro=new">更多<i class="iconfont">&#xe605;</i></a> </div>
      </div>
      <div class="box-bd">
        <div class="row">
          <div class="col col-15">
            <div class="brick-list">
              <div class="brick-item brick-item-l">
                <div class="item">
					                    <div class="item-content"> <a href="affiche.php?ad_id=4&uri=http://www.luckycats.org.cn"> <span class="item-thumb"> <img src="data/afficheimg/1469753737711899265.png" alt="首页-新品上架广告" /> </span> </a> </div>
				  	
	                  </div>
              </div>
              <div class="brick-item brick-item-m">
                <div class="item">
								                  <div class="item-content"> <span class="item-info"> <span class="item-title"><a href="goods.php?id=16">NOW!无谷幼猫猫粮8磅</a></span> <span class="item-price">￥296</span> </span> <span class="item-thumb"> <a href="goods.php?id=16"><img src="images/201607/thumb_img/16_thumb_G_1469822908080.jpg" alt="NOW!无谷幼猫猫粮8磅" style="width:220px" /></a> </span> </div>
					
		   							
		   				        </div>
              </div>
              <div class="brick-item brick-item-m">
                <div class="brick-item brick-item-s">
                  <div class="item">
				  					
		   				                    <div class="item-content"> <span class="item-info"> <span class="item-title"><a href="goods.php?id=14">NOW!无谷成猫猫粮8磅</a></span> <span class="item-price">￥296</span> </span> <span class="item-thumb"> <a href="goods.php?id=14"><img src="images/201607/thumb_img/14_thumb_G_1469755360081.jpg" alt="NOW!无谷成猫猫粮8磅" style="width:135px" /></a> </span> </div>
						
		                     </div>
                </div>
                <div class="brick-item brick-item-s">
                  <div class="item">
				  					
		   					
		                     </div>
                </div>
              </div>
              <div class="brick-item brick-item-m">
                <div class="item">
									
		   							
		   				        </div>
              </div>
              <div class="brick-item brick-item-m">
                <div class="item">
									
		   							
		   				        </div>
              </div>
              <div class="brick-item brick-item-m">
                <div class="item">
									
		   							
		   				        </div>
              </div>
              <div class="brick-item brick-item-m">
                <div class="item">
									
		   							
		   				        </div>
              </div>
              <div class="brick-item brick-item-m">
                <div class="item">
									
		   							
		   				        </div>
              </div>
            </div>
          </div>
          <div class="col col-5">
            <div class="channel-section">
              <ul class="channel-list">
              
				  
				  
               
              </ul>
            </div>
            
            <div class="news-section">
              <h3>新闻公告</h3>
              <ul>
                
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <div class="home-hot-goods">
    <div class="xm-plain-box">
      <div class="box-hd">
        <h3 class="title">大家都喜欢</h3>
      </div>
      <div class="box-bd">
        <div class="row">
          <div class="col col-15">
            <div class="brick-list">
              <div class="brick-item brick-item-l">
                <div class="item">
					                    <div class="item-content"> <a href="affiche.php?ad_id=5&uri=http://www.luckycats.org.cn"> <span class="item-thumb"> <img src="data/afficheimg/1469754546325719752.png" alt="首页-推荐产品广告" /> </span> </a> </div>
				  	
	                  </div>
              </div>
              <div class="brick-item brick-item-m">
                <div class="item">
								                  <div class="item-content"> <span class="item-info"> <span class="item-title"><a href="goods.php?id=16">NOW!无谷幼猫猫粮8磅</a></span> <span class="item-price">￥296</span> </span> <span class="item-thumb"> <a href="goods.php?id=16"><img src="images/201607/thumb_img/16_thumb_G_1469822908080.jpg" alt="NOW!无谷幼猫猫粮8磅" style="width:220px" /></a> </span> </div>
					
		   							
		   				        </div>
              </div>
              <div class="brick-item brick-item-m">
                <div class="item">
									
		   						                  <div class="item-content"> <span class="item-info"> <span class="item-title"><a href="goods.php?id=14">NOW!无谷成猫猫粮8磅</a></span> <span class="item-price">￥296</span> </span> <span class="item-thumb"> <a href="goods.php?id=14"><img src="images/201607/thumb_img/14_thumb_G_1469755360081.jpg" alt="NOW!无谷成猫猫粮8磅" style="width:220px" /></a> </span> </div>
				  	
		   		                </div>
              </div>
              <div class="brick-item brick-item-m">
                <div class="item">
									
		   							
		   		                </div>
              </div>
              <div class="brick-item brick-item-m">
                <div class="item">
									
		   							
		   		                </div>
              </div>
            </div>
          </div>
          <div class="col col-5">
            <div class="board-section">
              <h3><span>HOT</span>热销商品排行</h3>
              <ul class="board-list">
			                  <li class="top"> <span class="item-info"> <span class="item-title"><a href="goods.php?id=16">NOW!无谷幼猫猫粮8磅</a></span> <span class="item-price">￥296</span> </span> <span class="item-thumb"> <a href="goods.php?id=16"><img src="images/201607/thumb_img/16_thumb_G_1469822908080.jpg" alt="NOW!无谷幼猫猫粮8磅" style="width:70px" /></a> </span> <span class="item-num">1</span> </li>
			                  <li class="top"> <span class="item-info"> <span class="item-title"><a href="goods.php?id=14">NOW!无谷成猫猫粮8磅</a></span> <span class="item-price">￥296</span> </span> <span class="item-thumb"> <a href="goods.php?id=14"><img src="images/201607/thumb_img/14_thumb_G_1469755360081.jpg" alt="NOW!无谷成猫猫粮8磅" style="width:70px" /></a> </span> <span class="item-num">2</span> </li>
			  	
             
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <div class="home-commented-goods">
    <div class="xm-plain-box">
      <div class="box-hd">
        <h3 class="title">热评产品</h3>
      </div>
      <div class="box-bd">
        <div class="xm-commented-goods-list-wrap">
          <div class="xm-commented-goods-list clearfix">
		   	
            
          </div>
        </div>
      </div>
    </div>
  </div>
  
  
  
  
  
</div>
<div class="site-footer">
  <div class="container">
    <div class="footer-service">
      <ul class="list-service clearfix">
        <li> <a target="_blank"> <i class="iconfont">&#xe63a;</i> <strong>1小时快修服务</strong> <span>小米之家承诺1小时内完成维修</span> </a> </li>
        <li> <a target="_blank"> <i class="iconfont">&#xe638;</i> <strong>7天无理由退货</strong> <span>收到商品7天内无理由退货服务</span> </a> </li>
        <li> <a target="_blank"> <i class="iconfont">&#xe651;</i> <strong>15天免费换货</strong> <span>故障、质量问题免费换新货承诺</span> </a> </li>
        <li> <a target="_blank"> <i class="iconfont">&#xe64d;</i> <strong>满100元包邮</strong> <span>在线支付满百元免邮费（除电视）</span> </a> </li>
        <li> <a target="_blank"> <i class="iconfont">&#xe63b;</i> <strong>451家售后网点</strong> <span>遍布全国31个省市的售后服务点</span> </a> </li>
      </ul>
    </div>
    <div class="footer-links clearfix">
	      <dl class="col-links col-links-first">
        <dt>购物指南</dt>
                  <dd><a href="article.php?id=7" title="购物常见问题">购物常见问题</a></dd>
                  <dd><a href="article.php?id=8" title="订单状态">订单状态</a></dd>
                  <dd><a href="article.php?id=9" title="购物流程">购物流程</a></dd>
              </dl>
	        <dl class="col-links ">
        <dt>支付方式</dt>
                  <dd><a href="article.php?id=10" title="货到付款">货到付款</a></dd>
                  <dd><a href="article.php?id=11" title="配送支付智能查询">配送支付智能查询</a></dd>
                  <dd><a href="article.php?id=12" title="在线支付">在线支付</a></dd>
              </dl>
	        <dl class="col-links ">
        <dt>配送方式</dt>
                  <dd><a href="article.php?id=13" title="配送范围与费用">配送范围与费用</a></dd>
                  <dd><a href="article.php?id=14" title="签收须知">签收须知</a></dd>
                  <dd><a href="article.php?id=15" title="快递送货">快递送货</a></dd>
              </dl>
	        <dl class="col-links ">
        <dt>售后服务</dt>
                  <dd><a href="article.php?id=16" title="退换货流程">退换货流程</a></dd>
                  <dd><a href="article.php?id=17" title="退换货政策">退换货政策</a></dd>
                  <dd><a href="article.php?id=18" title="服务政策">服务政策</a></dd>
              </dl>
	        <dl class="col-links ">
        <dt>关于我们</dt>
                  <dd><a href="article.php?id=22" title="新浪微博">新浪微博</a></dd>
                  <dd><a href="article.php?id=23" title="QQ空间">QQ空间</a></dd>
                  <dd><a href="article.php?id=24" title="官方微信">官方微信</a></dd>
              </dl>
	        
      <div class="col-contact">
        <p class="phone">400-800-8888</p>
        <p>周一至周日 8:00-18:00<br />
          （仅收市话费）</p>
		  
		 		         <a class="btn btn-primary btn-small" href="http://wpa.qq.com/msgrd?V=1&amp;Uin=275194004&amp;Site=幸运土猫超市&amp;Menu=yes" target="_blank">24小时在线客服</a> 
						 		</div>
    </div>
    <div class="footer-info clearfix" style="width:100%">
      <div class="info-text" style="position:relative; text-align:center;width:100%">
        <p>
				<a href="article.php?id=26" >免责条款</a><span class="sep">|</span>				<a href="article.php?id=26" >隐私保护</a><span class="sep">|</span>				<a href="article.php?id=26" >咨询热点 </a><span class="sep">|</span>				<a href="article.php?id=26" >联系我们</a><span class="sep">|</span>				<a href="article.php?id=26" >公司简介</a><span class="sep">|</span>				<a href="article.php?id=26" >批发方案</a><span class="sep">|</span>				<a href="article.php?id=26" >配送方式</a>				</p>
        <p>
		&copy; 2005-2016 幸运土猫超市 版权所有，并保留所有权利。<br />
		北京市昌平区回龙观        Tel: 400-800-8888               <a href="http://wpa.qq.com/msgrd?V=1&amp;Uin=275194004&amp;Site=幸运土猫超市&amp;Menu=yes" target="_blank"><img src="http://wpa.qq.com/pa?p=1:275194004:4" height="16" border="0" alt="QQ" /> 275194004</a>
                                                                                <br />
  		</p>
      </div>
      
      <div class="info-links" style="text-align:center"> <a target="_blank"><img src="http://p.www.xiaomi.com/zt/12052601/cnnicVerifyseal.png" alt="可信网站" /></a> <a target="_blank"><img alt="诚信网站" src="http://p.www.xiaomi.com/zt/12052601/szfwVerifyseal.gif" /></a> <a target="_blank"><img alt="诚信网站" src="http://p.www.xiaomi.com/zt/12052601/save.jpg" /></a> </div>
    </div>
  </div>
</div>
<script>
        function createurlcdn(url, t) {
            t = t || 5;
            var date = new Date();
            var hour = date.getHours();
            hour = (hour < 10 ? "0" : "") + hour;
            var min = date.getMinutes();
            min = ( parseInt(min / t) < 10 ? "0" : "") + parseInt(min / 5);
            var day = date.getDate();
            day = (day < 10 ? "0" : "") + day;
            var version = day + hour + min;
            document.write('<script src="' + url + '?ver=' + version + 'xiaomi"><\/script>');
        }
        createurlcdn("themes/xiaomi/js/categoryTree.js",5);
    </script>
<script src="themes/xiaomi/js/base.min.js?2014042901"></script>
<script>
        XIAOMI.namespace("GLOBAL_CONFIG,GLOBAL_VAR");
        XIAOMI.GLOBAL_CONFIG = {
            orderSite:"",
            wwwSite:"",
            damiaoSite:"",
            logoutUrl:"",
            quickLoginUrl:"",
            //图片上传路径地址
            uploadUrl:"",
            //图片远程存储地址
            imgSaveUrl:"",
            //评论查询地址
            commentUrl:"",
            //评论Api地址
            commentApiUrl:"",
            //侧边栏数据接口
            sideBarApiUrl:""
        }
        XIAOMI.app.setLoginInfo.orderUrl = XIAOMI.GLOBAL_CONFIG.orderSite + '/user/order';
        XIAOMI.app.setLoginInfo.logoutUrl = XIAOMI.GLOBAL_CONFIG.logoutUrl;
        XIAOMI.app.setLoginInfo.init(XIAOMI.GLOBAL_CONFIG);
        //全站需要直接执行的函数
        jQuery(function ($) {
            var oLogin = new XIAOMI.app.miniLogin();
            oLogin.init();
            // 搜索
            XIAOMI.app.search.init();
            // miniCart
            XIAOMI.app.miniCart.init();
            // 更新miniCart数量
            XIAOMI.app.updateMiniCart();
            // 商品分类导航
            XIAOMI.app.navMenus.init($('.J_menuNavMain'), {
                menuSelector: '.nav-main-item',
                submenuSelector: '.nav-main-children',
                effect: 'toggle',
                triggerEvent: 'hover'
            });
            XIAOMI.app.navCategory.init();
            // 绑定尾部公共事件
            XIAOMI.app.footer.init();
        });
    </script>
<script type="text/javascript" src="themes/xiaomi/js/index.min.js?2014042901"></script>
</body>
</html>
