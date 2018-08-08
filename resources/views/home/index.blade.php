<!DOCTYPE html>
<html>
    
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta name="renderer" content="webkit">
        <meta http-equiv="Cache-Control" content="no-transform" />
        <meta http-equiv="Cache-Control" content="no-siteapp" />
        <title>
            1号店(yhd.com)_全球超市，轻松到家！
        </title>
        <meta name="Keywords" content="1号店,一号店,网上超市,1号店网上超市,yhd.com">
        <meta name="Description" content="1号店(yhd.com)网上超市精选全球好货，提供休闲零食、母婴玩具、进口食品、服饰内衣，1号生鲜、家电家居、手机电脑、宠物用品等各个品类的优质商品。1号店（yhd.com）全球超市，轻松到家！">
        <!--css start-->
        <link href="/home/css/339.css" rel="stylesheet" type="text/css" />
        <link href="/home/css/340.css" rel="stylesheet" type="text/css" />
        <!--css end-->
        <!--js start-->
        <script type="text/javascript">
            var URLPrefix = {
                "shop": "//shop.yhd.com",
                "busystock": "//gps.yhd.com",
                "cms": "//cms.yhd.com",
                "img": "//image.yihaodian.com",
                "pms": "//pms.yhd.com",
                "my_statics": "//static.yihaodian.com/member",
                "passportmall": "https://passport.1mall.com",
                "shoping_pms": "//pms.yihaodian.com",
                "shoping_shop": "//shop.yhd.com",
                "search": "//search.yhd.com",
                "sitedomain": ".yhd.com",
                "tryUrl": "//try.yhd.com",
                "shoping_self": "//www.yhd.com",
                "tracker": "tracker.yhd.com",
                "commentZoneMall": "//e.1mall.com/front-pe",
                "productDetailHost": "//www.yhd.com",
                "central": "//www.yhd.com",
                "search_list": "//search.yhd.com",
                "cartDomain": "//cart.yhd.com",
                "footFriendLink": "//www.yhd.com/friendlink/index.do",
                "centralShop": "//shop.yhd.com",
                "shoping_passport": "https://passport.yhd.com",
                "shoping_my_statics": "//static.yihaodian.com/statics",
                "uploadPostUrl": "//upload.yihaodian.com/upload/UploadAction",
                "shoping_my": "//my.yhd.com",
                "shoping_search": "//search.yhd.com:80",
                "shoping_opposite": "//www.1mall.com",
                "shoping_central": "//www.yhd.com",
                "my": "//my.yhd.com",
                "search_keyword": "//search.yhd.com",
                "mymall": "//my.1mall.com",
                "selfroot": "//www.yhd.com",
                "products_stock": "//gps.yhd.com/busystock",
                "sitedomainmall": ".1mall.com",
                "item": "//item.yhd.com/",
                "tuangou": "//www.yhd.com/tuangou/index.do",
                "commentZoneYhd": "//e.yhd.com/front-pe",
                "centralImgDomain": ".yihaodianimg.com",
                "productDetailUrl": "//www.yhd.com",
                "passport": "https://passport.yhd.com",
                "statics": "//img.yihaodianimg.com/front-homepage",
                "mobile": "http://m.yhd.com",
                "mall": "//www.1mall.com"
            };

            var headerType = "index_v1";

            var imagePath = "//img.yihaodianimg.com/front-homepage/global/images";

            var currSiteId = 1;

            var currSiteType = 1;

            var globalEnv = "PRODUCTION";

            var siteStyle = 1;

            var siteFlag = 0;

            var isIndex = 1;

            var indexFlag = 1;

            var currProvinceId = 1;

            var currVersionNum = "a1a49dd";

            var lazyLoadImageObjArry = lazyLoadImageObjArry || [];

            var isFixTopNav = true;

            (function(flag) {

                if (flag) {

                    window.globalPrismFlag = '1';

                    window.globalPrismFeedbackURL = '//cms.yhd.com/cms/view.do?topicId=43';

                    window.globalPrismQRName = '';

                    window.globalPrismQRTitle = '手机购物更优惠';

                    window.globalPrismQRPng = 'images/1.png';

                    window.globalPrismMemberLink = '//home.yhd.com/myyhdindex/index.do';

                    window.globalPrismCartLink = '//cart.yhd.com/cart/cart.do';

                    window.globalPrismCouponLink = '//coupon.yhd.com/myCoupon';

                    window.globalPrismTopAdvFlag = '1';

                }

            })(true);

           /* < !--增加一个开关来控制是否显示搜索框下拉,
            为时才不调用-->

            <!--搜索热词开关-->

            <!--用于控制宽窄屏属性-->*/

            var isWidescreen = (screen.width >= 1280);

            < !--过滤-->

            var SensitiveWords = "京东自有品牌=自有品牌,京东海外直采=海外直采,京东定制=,京东自营=自营,JD超市=,【京东配送】=,京东配送=,【京东超市】=,京东超市=,【京东早教】=,【京东玩具】=,\(免息\)=,\(白条\)=,\(三期免息\)=,\(六期免息\)=,\(九期免息\)=,\(十二期免息\)=,\(二十四期免息\)=,\(3期免息\)=,\(6期免息\)=,\(9期免息\)=,\(12期免息\)=,\(24期免息\)=,\(分期免息\)=,（免息）=,（白条）=,（三期免息）=,（六期免息）=,（九期免息）=,（十二期免息）=,（二十四期免息）=,（3期免息）=,（6期免息）=,（9期免息）=,（12期免息）=,（24期免息）=,（分期免息）=,【免息】=,【白条】=,【三期免息】=,【六期免息】=,【九期免息】=,【十二期免息】=,【二十四期免息】=,【3期免息】=,【6期免息】=,【9期免息】=,【12期免息】=,【24期免息】=,【分期免息】=,三期免息=,六期免息=,九期免息=,十二期免息=,二十四期免息=,3期免息=,6期免息=,9期免息=,12期免息=,24期免息=,分期免息=,免息=,白条=,分期=";
        </script>
        <!--js end-->
        <!-- head include start -->
        <script type="text/javascript">
            (function() {

                try {

                    window.__flagPrivilege = 1;

                } catch(err) {}

            })();
        </script>
        <!-- head include end -->
    </head>
    
    <body id="comParamId" data-param='{"globalPageCode":"-1","currPageId":"0"}'>
        <div class="mod_topbanner_wrap" style="background-color:#24180c;" clstag="pageclick|keycount|home_201709224|21">
            <div class="wrap index_topbanner">
                <a class="big_topbanner" style="display: none;" href="https://sale.yhd.com/act/3S1vMJxmsTkOc.html"
                target="_blank" title="大闸蟹超级品类日" data-bgColor="#24180c">
                    <img alt="大闸蟹超级品类日" src="/home/gif/196.gif" shortimg="picture/38.jpg" wideimg="picture/39.jpg"
                    data-nwp="1">
                </a>
                <a class="small_topbanner" style="display: block;" href="https://sale.yhd.com/act/3S1vMJxmsTkOc.html"
                target="_blank" title="大闸蟹超级品类日" data-bgColor="#24180c">
                    <img alt="大闸蟹超级品类日" src="/home/gif/196.gif" shortimg="picture/40.jpg" wideimg="picture/41.jpg"
                    data-nwp="1">
                </a>
                <a href="javascript:;" class="close_btn">
                    ×
                </a>
            </div>
        </div>
        <div class="hd_header_wrap">
            <!--topbar-->
            <div class="hd_top_bar">
                <div class="wrap clearfix">
                    <div class="hd_indxProvce hd_has_child" id="headerSelectProvince" clstag="pageclick|keycount|global_201709226|1">
                        <a class="hd_topbar_city" id="currProvince" href="javascript:void(0);">
                            <i class="hd_iconfont">
                                &#xe621;
                            </i>
                            <span>
                                送货地址：
                            </span>
                            <em>
                            </em>
                        </a>
                        <div class="hd_city_select hd_city_opacity" style="display: none" id="hd_city_select"
                        data-hot="2817,上海市,2&&2816,北京市,1&&1601,广州市,19&&1607,深圳市,19&&904,南京市,12&&1213,杭州市,15&&1381,武汉市,17&&1930,成都市,22&&48131,重庆市,4&&988,苏州市,12&&51035,天津市,3&&1116,合肥市,14&&1233,温州市,15&&984,无锡市,12&&1158,宁波市,15&&978,常州市,12">
                            <a href="javascript:;" class="hd_city_close">
                                ×
                            </a>
                            <div class="hd_cur_city_wrap clearfix">
                                <span class="hd_cur_city">
                                    搜索城市：
                                </span>
                                <div class="hd_city_search">
                                    <div class="hd_city_input">
                                        <em class="hd_iconfont">
                                            
                                        </em>
                                        <input type="text" placeholder="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;请输入城市名称">
                                        <span class="hd_citys_close">
                                            x
                                        </span>
                                    </div>
                                    <div class="hd_city_suggest" style="display: none;">
                                    </div>
                                </div>
                            </div>
                            <!--热门城市-->
                            <div class="hd_hot_city_wrap clearfix">
                                <em class="hd_hotcity_icon">
                                </em>
                                <span class="hd_hot_city">
                                    热门城市：
                                </span>
                                <div class="hd_hotcity_list clearfix">
                                </div>
                            </div>
                            <!--按字母查找-->
                            <div class="hd_letter_search clearfix">
                                <p class="hd_letter_tit">
                                    按字母查找
                                </p>
                                <div class="hd_city_initial clearfix">
                                </div>
                            </div>
                            <div class="hd_city_list" id="hd_city_list_context">
                                <ul>
                                    <li class="clearfix">
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="hd_topbar_right">
                        <ul>
                            <li id="global_unlogin">
                                <div class="hd_unlogin">
                                    <span class="hd_hi">
                                        Hi,请
                                    </span>
                                    <a href="https://passport.yhd.com/passport/login_input.do" class="hd_login_link"
                                    clstag="pageclick|keycount|global_201709226|2">
                                        登录&nbsp;
                                    </a>
                                    <a href="https://passport.yhd.com/passport/register_input.do" class="hd_regist_link"
                                    clstag="pageclick|keycount|global_201709226|3">
                                        &nbsp;注册
                                    </a>
                                </div>
                            </li>
                            <li id="global_login" class="hd_has_child" style="display:none" data-type="2017"
                            clstag="pageclick|keycount|global_201709226|4">
                                <div class="hd_login">
                                    <span class="hd_hi">
                                        Hi,
                                    </span>
                                    <a href="//home.yhd.com/myyhdindex/index.do" target="_blank" class="hd_login_name">
                                        __nickName__
                                    </a>
                                    <a href="//vip.yhd.com" target="_blank" class="hd_vip hd_vip__gradeStyle__">
                                        __gradeDesc__
                                    </a>
                                    <i class="hd_iconfont">
                                        &#xe627;
                                    </i>
                                </div>
                                <div class="hd_user_privilege">
                                    <a href="javascript:;" class="hd_login_out">
                                        退出
                                    </a>
                                    <div class="clearfix">
                                    </div>
                                    <div class="hd_privilege_tit">
                                        <span>
                                            我可尊享
                                            <em>
                                                5
                                            </em>
                                            项特权
                                        </span>
                                    </div>
                                    <div class="hd_privilege_wrap hd_privilege_slide">
                                        <a href="javascript:;" class="prev_btn hd_iconfont">
                                            
                                        </a>
                                        <div class="hd_privilege clearfix">
                                            <div class="hd_privilege_list" style="left: -60px; margin-left: 0px;">
                                            </div>
                                        </div>
                                        <a href="javascript:;" class="next_btn hd_iconfont">
                                            
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li clstag="pageclick|keycount|global_201709226|5">
                                <div class="hd_menu hd_notice" id="hdUserMsg" style="display: none" data-cfg="1">
                                    <a href="//edm.yhd.com/pcMsg/myMessage.action;" rel="nofollow" target='_blank'>
                                        我的消息&nbsp;(
                                        <em class="hd_has_num">
                                            0
                                        </em>
                                        )
                                    </a>
                                </div>
                            </li>
                            <li clstag="pageclick|keycount|global_201709226|6">
                                <div class="hd_menu">
                                    <a href="//home.yhd.com/order/toOrderList.do" target="_blank" rel="nofollow">
                                        <i class="hd_iconfont">
                                            &#xe612;
                                        </i>
                                        我的订单
                                    </a>
                                </div>
                            </li>
                            <li class="hd_has_child" clstag="pageclick|keycount|global_201709226|7">
                                <div class="hd_menu">
                                    <a href="//cms.yhd.com/cms/view.do?topicId=43" target="_blank">
                                        客户服务
                                    </a>
                                    <i class="hd_iconfont">
                                        &#xe627;
                                    </i>
                                </div>
                                <div class="hd_menu_list">
                                    <a href="//home.yhd.com/order/toOrderList.do" target="_blank" title="包裹跟踪">
                                        包裹跟踪
                                    </a>
                                    <a href="//rma.yhd.com/return/returnApplyList.do" target="_blank" title="在线退换货">
                                        在线退换货
                                    </a>
                                </div>
                            </li>
                            <li class="hd_has_child">
                                <div class="hd_title">
                                    <a href="javascript:;">
                                        <i class="iconfont180315">
                                            &#xe62a;
                                        </i>
                                        APP下载
                                    </a>
                                </div>
                                <div class="hd_qrcode_bg">
                                    <div class="triangle">
                                    </div>
                                    <p>
                                        扫描二维码
                                    </p>
                                    <p>
                                        下载1号店APP
                                    </p>
                                    <a href="//app.yhd.com" target="_blank">
                                        <img src="/home/images/1.png" />
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="wrap hd_header">
                <div class="hd_logo_area" clstag="pageclick|keycount|home_201709224|22">
                    <a target="_blank" class="hd_logo" href="https://sale.yhd.com/act/3S1vMJxmsTkOc.html">
                        <img alt="阳澄湖大闸蟹1元妙" src="/home/gif/198.gif">
                    </a>
                </div>
                <div class="hd_header_right">
                    <div class="clearfix">
                        <div class="hd_head_search">
                            <div class="hd_search_form" id="hdSearchForm">
                                <div class="hd_fixed_wrap">
                                    <a href="//www.yhd.com" class="hd_fixed_logo">
                                        <img src="/home/picture/42.jpg" alt="" width="205" height="70">
                                    </a>
                                    <div class="hd_search_wrap clearfix">
                                        <label for="keyword" style="display:none;">
                                        </label>
                                        <input class="hd_search_ipt" name="keyword" id="keyword" type="text" value=""
                                        placeholder="" original="" url="" data-sskn='[
                                        {"text":"大闸蟹1元秒 爆款5折抢","url":"https://sale.yhd.com/act/3S1vMJxmsTkOc.html"}
                                        ]' style="color:#333333;" maxLength="100" AUTOCOMPLETE="off" x-webkit-speech=""
                                        onwebkitspeechchange="emptySearchBar();" x-webkit-grammar="builtin:translate"
                                        />
                                        <button type="button" class="hd_search_btn" onclick="javascript:searchMeForClick();"
                                        clstag="pageclick|keycount|global_201709226|8">
                                            <i class="hd_iconfont">
                                                &#xe624;
                                            </i>
                                        </button>
                                    </div>
                                    <!--搜索提示 begin-->
                                    <div id="searchSuggest" class="hd_search_tips_result" style="display:none"
                                    onmouseover="$('#searchSuggest').show()" clstag="pageclick|keycount|global_201709226|9">
                                    </div>
                                    <!--搜索提示 end-->
                                </div>
                            </div>
                            <p id="hotKeywordsShow" class="hd_hot_search" clstag="pageclick|keycount|201708178|2">
                            </p>
                            <!--搜索推荐-->
                        </div>
                        <div class="hd_mini_cart" id="miniCart" data-version="1" clstag="pageclick|keycount|home_201709224|19">
                            <u class="hd_c_num none" id="in_cart_num">
                            </u>
                            <a class="hd_prism_cart" href="//cart.yhd.com/cart/cart.do" data-ref="YHD_TOP_MINICART">
                                <em class="hd_iconfont">
                                    &#xe618;
                                </em>
                                <span>
                                    购物车
                                </span>
                            </a>
                            <div class="hd_cart_show none" id="showMiniCartDetail">
                            </div>
                        </div>
                    </div>
                    <div class="hd_header_nav">
                        <ul class="clearfix">
                            <li clstag="pageclick|keycount|home_201709224|1">
                                <a href="//qianggou.yhd.com/" title="1号抢购" target="_blank">
                                    1号抢购
                                </a>
                            </li>
                            <li clstag="pageclick|keycount|home_201709224|2">
                                <a href="//t.yhd.com/" title="1号团" target="_blank">
                                    1号团
                                </a>
                            </li>
                            <li clstag="pageclick|keycount|home_201709224|3">
                                <a href="//coupon.yhd.com/couponCenter/home" title="领券中心" target="_blank">
                                    领券中心
                                </a>
                            </li>
                            <li clstag="pageclick|keycount|home_201709224|4">
                                <a href="//channel.yhd.com/recharge.html" title="充值中心" target="_blank">
                                    充值中心
                                </a>
                            </li>
                            <li clstag="pageclick|keycount|home_201709224|5">
                                <a href="//channel.yhd.com/import.html" title="全球进口" target="_blank">
                                    全球进口
                                </a>
                            </li>
                            <li clstag="pageclick|keycount|home_201709224|6">
                                <a href="https://sale.yhd.com/act/5i3JXqdTUljgb.html" title="1号生鲜" target="_blank">
                                    1号生鲜
                                </a>
                            </li>
                            <li clstag="pageclick|keycount|home_201709224|7">
                                <a href="https://sale.yhd.com/act/uf0DFM6Iahpn.html" title="美妆个护" target="_blank">
                                    美妆个护
                                </a>
                            </li>
                            <li clstag="pageclick|keycount|home_201709224|8">
                                <a href="https://sale.yhd.com/act/LPHwt8z1A5x.html" title="家居馆" target="_blank">
                                    家居馆
                                </a>
                            </li>
                            <li clstag="pageclick|keycount|home_201709224|9">
                                <a href="https://sale.yhd.com/act/PnGHmKZ4u16pab.html" title="电器城" target="_blank">
                                    电器城
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--content start-->
        <div class='advertisement_wrap' id='newUserPopup' style='display:none'>
            <div class='advertisement_pic'>
                <a href="" target='_blank' clstag="pageclick|keycount|shouye_201710104|48"
                ext="">
                    <img src="">
                    <a class='close_btn' href='javascript:void(0);' clstag="pageclick|keycount|shouye_201710104|49">
                    </a>
                </a>
            </div>
        </div>
        <div class="first_screen_main">
            <!--大促皮肤 begin -->
            <div class="promotion_skin" id="promotion_skin">
                <!--窄屏下不用传大促背景图 -->
                <div class="left_promotion_skin" data-src="/home/picture/43.jpg">
                </div>
                <div class="right_promotion_skin" data-src="/home/picture/44.jpg">
                </div>
            </div>
            <div class="wrap position_wrap">
                <div class="mod_hd_allsort">
                    <ul class="hd_allsort hd_more_allsort" id="allsort">
                        <li clstag="pageclick|keycount|category_201709225|1" data-mrt="1" categoryId="1741"
                        index="1" nav-type="5">
                            <h3 class="hd_gray_bg">
                                <i class="hd_iconfont hd_floor_color">
                                    
                                </i>
                                <a title="全球进口" href="http://channel.yhd.com/import.html" target="_blank"
                                data-ref="CatMenu_Search_100000014_1741_911">
                                    全球进口
                                </a>
                            </h3>
                            <div class="hd_show_sort hd_allsort clearfix global_loading">
                            </div>
                        </li>
                        <li clstag="pageclick|keycount|category_201709225|2" data-mrt="1" categoryId="1621"
                        index="2" nav-type="5">
                            <h3 class="hd_gray_bg">
                                <i class="hd_iconfont hd_floor_color">
                                    
                                </i>
                                <a title="食品" href="http://search.yhd.com/c1320-0-0" target="_blank" data-ref="CatMenu_Search_100000014_1621_3025">
                                    食品
                                </a>
                                /
                                <a title="酒" href="http://search.yhd.com/c12259-0-0" target="_blank" data-ref="CatMenu_Search_100000014_1621_3026">
                                    酒
                                </a>
                                /
                                <a title="生鲜" href="http://search.yhd.com/c12218-0-0" target="_blank"
                                data-ref="CatMenu_Search_100000014_1621_3027">
                                    生鲜
                                </a>
                            </h3>
                            <div class="hd_show_sort hd_allsort clearfix global_loading">
                            </div>
                        </li>
                        <li clstag="pageclick|keycount|category_201709225|3" data-mrt="1" categoryId="1504"
                        index="3" nav-type="5">
                            <h3 class="hd_gray_bg">
                                <i class="hd_iconfont hd_floor_color">
                                    
                                </i>
                                <a title="母婴" href="http://sale.yhd.com/act/VwKQZXJWq5Yj.html" target="_blank"
                                data-ref="CatMenu_Search_100000014_1504_2801">
                                    母婴
                                </a>
                                /
                                <a title="玩具" href="http://search.yhd.com/c6233-0-0" target="_blank" data-ref="CatMenu_Search_100000014_1504_2802">
                                    玩具
                                </a>
                                /
                                <a title="童装" href="http://search.yhd.com/c11842-0-0" target="_blank"
                                data-ref="CatMenu_Search_100000014_1504_2803">
                                    童装
                                </a>
                            </h3>
                            <div class="hd_show_sort hd_allsort clearfix global_loading">
                            </div>
                        </li>
                        <li clstag="pageclick|keycount|category_201709225|4" data-mrt="1" categoryId="3212"
                        index="4" nav-type="5">
                            <h3 class="hd_gray_bg">
                                <i class="hd_iconfont hd_floor_color">
                                    
                                </i>
                                <a title="纸巾" href="http://search.yhd.com/c1671-0-0" target="_blank" data-ref="CatMenu_Search_100000014_3212_5269">
                                    纸巾
                                </a>
                                /
                                <a title="厨卫清洁" href="http://sale.yhd.com/act/8zwSJDcQ0gLT.html" target="_blank"
                                data-ref="CatMenu_Search_100000014_3212_5270">
                                    厨卫清洁
                                </a>
                                /
                                <a title="宠物" href="http://search.yhd.com/c6994-0-0" target="_blank" data-ref="CatMenu_Search_100000014_3212_5271">
                                    宠物
                                </a>
                            </h3>
                            <div class="hd_show_sort hd_allsort clearfix global_loading">
                            </div>
                        </li>
                        <li clstag="pageclick|keycount|category_201709225|5" data-mrt="1" categoryId="1746"
                        index="5" nav-type="5">
                            <h3 class="hd_gray_bg">
                                <i class="hd_iconfont hd_floor_color">
                                    
                                </i>
                                <a title="家居家纺" href="http://search.yhd.com/c0-0-1004097/mbname-b/a-s1-v4-p1-price-d0-f0-m1-rt0-pid-mid0-color-size-k/"
                                target="_blank" data-ref="CatMenu_Search_100000014_1746_5045">
                                    家居家纺
                                </a>
                                /
                                <a title="厨具" href="http://search.yhd.com/c0-0-1003989/" target="_blank"
                                data-ref="CatMenu_Search_100000014_1746_5046">
                                    厨具
                                </a>
                                /
                                <a title="家具" href="http://search.yhd.com/c0-0-1004247/" target="_blank"
                                data-ref="CatMenu_Search_100000014_1746_5047">
                                    家具
                                </a>
                            </h3>
                            <div class="hd_show_sort hd_allsort clearfix global_loading">
                            </div>
                        </li>
                        <li clstag="pageclick|keycount|category_201709225|6" data-mrt="1" categoryId="1740"
                        index="6" nav-type="5">
                            <h3 class="hd_gray_bg">
                                <i class="hd_iconfont hd_floor_color">
                                    
                                </i>
                                <a title="美妆" href="http://sale.yhd.com/act/uf0DFM6Iahpn.html" target="_blank"
                                data-ref="CatMenu_Search_100000014_1740_5204">
                                    美妆
                                </a>
                                /
                                <a title="个人清洁" href="http://search.yhd.com/c16750-0-0" target="_blank"
                                data-ref="CatMenu_Search_100000014_1740_5205">
                                    个人清洁
                                </a>
                            </h3>
                            <div class="hd_show_sort hd_allsort clearfix global_loading">
                            </div>
                        </li>
                        <li clstag="pageclick|keycount|category_201709225|7" data-mrt="1" categoryId="1737"
                        index="7" nav-type="5">
                            <h3 class="hd_gray_bg">
                                <i class="hd_iconfont hd_floor_color">
                                    
                                </i>
                                <a title="女装" href="http://search.yhd.com/c0-0/k%25E5%25A5%25B3%25E8%25A3%2585/"
                                target="_blank" data-ref="CatMenu_Search_100000014_1737_4146">
                                    女装
                                </a>
                                /
                                <a title="男装" href="http://search.yhd.com/c0-0/k%25E7%2594%25B7%25E8%25A3%2585/"
                                target="_blank" data-ref="CatMenu_Search_100000014_1737_4147">
                                    男装
                                </a>
                                /
                                <a title="内衣" href="http://search.yhd.com/c0-0/k%25E5%2586%2585%25E8%25A1%25A3/"
                                target="_blank" data-ref="CatMenu_Search_100000014_1737_4148">
                                    内衣
                                </a>
                                /
                                <a title="珠宝" href="http://search.yhd.com/c6144-0-0" target="_blank" data-ref="CatMenu_Search_100000014_1737_4149">
                                    珠宝
                                </a>
                            </h3>
                            <div class="hd_show_sort hd_allsort clearfix global_loading">
                            </div>
                        </li>
                        <li clstag="pageclick|keycount|category_201709225|8" data-mrt="1" categoryId="1739"
                        index="8" nav-type="5">
                            <h3 class="hd_gray_bg">
                                <i class="hd_iconfont hd_floor_color">
                                    
                                </i>
                                <a title="鞋靴" href="http://search.yhd.com/c11729-0-0" target="_blank"
                                data-ref="CatMenu_Search_100000014_1739_4049">
                                    鞋靴
                                </a>
                                /
                                <a title="箱包" href="http://search.yhd.com/c1672-0-0" target="_blank" data-ref="CatMenu_Search_100000014_1739_4050">
                                    箱包
                                </a>
                                /
                                <a title="运动户外" href="http://search.yhd.com/c1318-0-0" target="_blank"
                                data-ref="CatMenu_Search_100000014_1739_4051">
                                    运动户外
                                </a>
                            </h3>
                            <div class="hd_show_sort hd_allsort clearfix global_loading">
                            </div>
                        </li>
                        <li clstag="pageclick|keycount|category_201709225|9" data-mrt="1" categoryId="1443"
                        index="9" nav-type="5">
                            <h3 class="hd_gray_bg">
                                <i class="hd_iconfont hd_floor_color">
                                    
                                </i>
                                <a title="手机" href="http://search.yhd.com/c9987-0-0" target="_blank" data-ref="CatMenu_Search_100000014_1443_3121">
                                    手机
                                </a>
                                /
                                <a title="数码" href="http://search.yhd.com/c652-0-0" target="_blank" data-ref="CatMenu_Search_100000014_1443_3122">
                                    数码
                                </a>
                                /
                                <a title="电脑办公" href="http://search.yhd.com/c670-0-0" target="_blank"
                                data-ref="CatMenu_Search_100000014_1443_3123">
                                    电脑办公
                                </a>
                            </h3>
                            <div class="hd_show_sort hd_allsort clearfix global_loading">
                            </div>
                        </li>
                        <li clstag="pageclick|keycount|category_201709225|10" data-mrt="1" categoryId="1749"
                        index="10" nav-type="5">
                            <h3 class="hd_gray_bg">
                                <i class="hd_iconfont hd_floor_color">
                                    
                                </i>
                                <a title="家用电器" href="http://search.yhd.com/c737-0-0/mbname-b/a-s1-v4-p1-price-d0-f0-m1-rt0-pid-mid0-color-size-k/"
                                target="_blank" data-ref="CatMenu_Search_100000014_1749_4980">
                                    家用电器
                                </a>
                                /
                                <a title="汽车用品" href="http://search.yhd.com/c6728-0-0" target="_blank"
                                data-ref="CatMenu_Search_100000014_1749_4981">
                                    汽车用品
                                </a>
                            </h3>
                            <div class="hd_show_sort hd_allsort clearfix global_loading">
                            </div>
                        </li>
                        <li clstag="pageclick|keycount|category_201709225|11" data-mrt="1" categoryId="1753"
                        index="11" nav-type="5">
                            <h3 class="hd_gray_bg">
                                <i class="hd_iconfont hd_floor_color">
                                    &#xe649;
                                </i>
                                <a title="医药/保健滋补/成人" href="http://search.yhd.com/c9192-0-0" target="_blank"
                                data-ref="CatMenu_Search_100000014_1753_4687">
                                    医药/保健滋补/成人
                                </a>
                            </h3>
                            <div class="hd_show_sort hd_allsort clearfix global_loading">
                            </div>
                        </li>
                        <li clstag="pageclick|keycount|category_201709225|12" data-mrt="1" categoryId="2555"
                        index="12" nav-type="5">
                            <h3 class="hd_gray_bg">
                                <i class="hd_iconfont hd_floor_color">
                                    &#xe64a;
                                </i>
                                <a title="图书" href="http://search.yhd.com/c1713-0-0" target="_blank" data-ref="CatMenu_Search_100000014_2555_4655">
                                    图书
                                </a>
                            </h3>
                            <div class="hd_show_sort hd_allsort clearfix global_loading">
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- 个人中心开始 -->
                <div class="mod_personal_center vip2_center" id="index_account">
                    <div class="avata_pic_wrap">
                        <a id="index_account_icon_login" style="display: none;" href="//home.yhd.com/myyhdindex/index.do"
                        target="_blank">
                        </a>
                        <a id="index_account_icon_unlogin" href="//home.yhd.com/myyhdindex/index.do"
                        target="_blank">
                            <img src="/home/picture/45.jpg">
                        </a>
                    </div>
                    <div class="info_wrap">
                        <div class="login_box" style="display:none;" id="index_account_info_login">
                            <div class="user_info clearfix">
                                <em>
                                    Hi，__nickName__
                                </em>
                                <a href="//vip.yhd.com" target="_blank" class="hd_vip">
                                    __gradeDesc__
                                </a>
                            </div>
                            <div class="tips">
                                <span style="color:#999">
                                    你我相识已__registDays__天
                                </span>
                            </div>
                            <div class="clearfix treasure">
                                <a href="//home.yhd.com/myyhdgold/index.do" target="_blank" class="gold_coin">
                                    <em>
                                        __coins__
                                    </em>
                                    <p>
                                        金币
                                    </p>
                                </a>
                                <a href="//coupon.yhd.com/myCoupon" target="_blank">
                                    <em>
                                        __coupon__
                                    </em>
                                    <p>
                                        优惠券
                                    </p>
                                </a>
                            </div>
                        </div>
                        <div class="unlogin_box" id="index_account_info_unlogin" style="display:block;">
                            <div class="title">
                                Hi~你好!
                            </div>
                            <div class="tips">
                            </div>
                            <div class="btn_wrap">
                                <a href="https://passport.yhd.com/passport/login_input.do" class="login_btn">
                                    登录
                                </a>
                                <a href="https://passport.yhd.com/passport/register_input.do" class="regist_btn">
                                    注册
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="notice_list" id="index_notice" clstag="pageclick|keycount|home_201709224|20">
                        <a title="优选" href="https://sale.yhd.com/act/fhmMlDq03GE.html" target="_blank">
                            <em>
                                【优选】
                            </em>
                            <span>
                                美好生活造起来
                            </span>
                        </a>
                        <a title="优选" href="//channel.yhd.com/kitchen.html" target="_blank">
                            【优选】
                            <span>
                                厨房用品，优惠大集结
                            </span>
                        </a>
                        <a title="优选" href="//channel.yhd.com/import.html" target="_blank">
                            【优选】
                            <span>
                                全球新货上不停，等你来选
                            </span>
                        </a>
                    </div>
                </div>
                <!-- 个人中心结束 -->
            </div>
            <script type="text/javascript">
                var lunboMaxNum = 8;
            </script>
            <div class="mod_promo_show" id="promo_show">
                <div class="promo_wrapper">
                    <ul id="slider" data-init="0" data-bgflag="1">
                        <li style="" data-bgcolor="#24180c" flag="1" data-advId="21971">
                            <a href="https://sale.yhd.com/act/3S1vMJxmsTkOc.html" adtags="21971.47547480"
                            data-advExp="0" target="_blank" title="大闸蟹超级品类日" data-img="picture/46.jpg"
                            class="global_loading" data-tag="0" clstag="pageclick|keycount|home_201709224|10">
                                <div class="promo_img" style="background-image: url(/home/picture/46.jpg)">
                                </div>
                            </a>
                        </li>
                        <li style="display:none;" data-bgcolor="#291b12" flag="2" data-advId="21972">
                            <a href="https://sale.yhd.com/act/FuR6Phb2n0.html" adtags="21972.47547594"
                            data-advExp="0" target="_blank" title="大闸蟹超级品类日" data-img="picture/48.jpg"
                            class="global_loading" data-tag="0" clstag="pageclick|keycount|home_201709224|11">
                                <div class="promo_img" style="background-image: url(/home/picture/48.jpg)">
                                </div>
                            </a>
                        </li>
                        <li style="display:none;" data-bgcolor="#291b12" flag="4" data-advId="21974">
                            <a href="https://sale.yhd.com/act/YsmnARkHaNc.html" adtags="21974.47547550"
                            data-advExp="0" target="_blank" title="大闸蟹超级品类日" data-img="picture/50.jpg"
                            class="global_loading" data-tag="0" clstag="pageclick|keycount|home_201709224|12">
                                <div class="promo_img" style="background-image: url(/home/picture/50.jpg)">
                                </div>
                            </a>
                        </li>
                        <li style="display:none;" data-bgcolor="#291b12" flag="6" data-advId="21976">
                            <a href="//sale.yhd.com/act/RywSjnCcbDH3tTUf.html" adtags="21976.47547552"
                            data-advExp="0" target="_blank" title="大闸蟹超级品类日" data-img="picture/52.jpg"
                            class="global_loading" data-tag="0" clstag="pageclick|keycount|home_201709224|13">
                                <div class="promo_img" style="background-image: url(/home/picture/52.jpg)">
                                </div>
                            </a>
                        </li>
                        <li style="display:none;" data-bgcolor="#291b12" flag="7" data-advId="21977">
                            <a href="https://sale.yhd.com/act/EKXI7GF5AmQ2ci1Z.html" adtags="21977.47547551"
                            data-advExp="0" target="_blank" title="大闸蟹超级品类日" data-img="picture/54.jpg"
                            class="global_loading" data-tag="0" clstag="pageclick|keycount|home_201709224|14">
                                <div class="promo_img" style="background-image: url(/home/picture/54.jpg)">
                                </div>
                            </a>
                        </li>
                        <li style="display:none;" data-bgcolor="#291b12" flag="8" data-advId="21978">
                            <a href="https://sale.yhd.com/act/adOVJRAgbCmTw.html" adtags="21978.47547492"
                            data-advExp="0" target="_blank" title="大闸蟹超级品类日" data-img="picture/56.jpg"
                            class="global_loading" data-tag="0" clstag="pageclick|keycount|home_201709224|15">
                                <div class="promo_img" style="background-image: url(/home/picture/56.jpg)">
                                </div>
                            </a>
                        </li>
                        <li style="display:none;" data-bgcolor="#291b12" flag="9" data-advId="21979">
                            <a href="//sale.yhd.com/act/wUt6VOY0XDx57HW.html" adtags="21979.47547494"
                            data-advExp="0" target="_blank" title="大闸蟹超级品类日" data-img="picture/58.jpg"
                            class="global_loading" data-tag="0" clstag="pageclick|keycount|home_201709224|16">
                                <div class="promo_img" style="background-image: url(/home/picture/58.jpg)">
                                </div>
                            </a>
                        </li>
                        <li style="display:none;" data-bgcolor="#291b12" flag="10" data-advId="28063">
                            <a href="https://sale.yhd.com/act/TylzXJsw8LVk.html" adtags="28063.47547496"
                            data-advExp="0" target="_blank" title="大闸蟹超级品类日" data-img="picture/60.jpg"
                            class="global_loading" data-tag="0" clstag="pageclick|keycount|home_201709224|17">
                                <div class="promo_img" style="background-image: url(/home/picture/60.jpg)">
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="promonum_show">
                    <ol class="clearfix" id="lunboNum" style="display:none;">
                        <li flag="1" href="javascript:void(0);" data-advId="21971">
                            <i>
                            </i>
                        </li>
                        <li flag="2" href="javascript:void(0);" data-advId="21972">
                            <i>
                            </i>
                        </li>
                        <li flag="4" href="javascript:void(0);" data-advId="21974">
                            <i>
                            </i>
                        </li>
                        <li flag="6" href="javascript:void(0);" data-advId="21976">
                            <i>
                            </i>
                        </li>
                        <li flag="7" href="javascript:void(0);" data-advId="21977">
                            <i>
                            </i>
                        </li>
                        <li flag="8" href="javascript:void(0);" data-advId="21978">
                            <i>
                            </i>
                        </li>
                        <li flag="9" href="javascript:void(0);" data-advId="21979">
                            <i>
                            </i>
                        </li>
                        <li flag="10" href="javascript:void(0);" data-advId="28063">
                            <i>
                            </i>
                        </li>
                    </ol>
                </div>
                <a href="javascript:void(0);" class="show_next">
                    <i class="index_iconfont">
                        &#xe62b;
                    </i>
                </a>
                <a href="javascript:void(0);" class="show_pre">
                    <i class="index_iconfont">
                        &#xe62f;
                    </i>
                </a>
            </div>
        </div>
        <div class="wrap mod_seckill clearfix" id="qianggouMod">
        </div>
        <!-- 大促纵向排版 begin -->
        <!-- 新增大促楼层一拖15 -->
        <!--大促品牌日 begin -->
        <div class="wrap mod_brand_sale clearfix">
            <div class="left_banner" clstag="pageclick|keycount|shouye_201710104|14">
                <a title="每日上新！" target="_blank" href="//s.yhd.com/" adtags="21987.47547215"
                data-advExp="0">
                    <img shortimg="picture/62.jpg" wideimg="picture/63.jpg" original="picture/62.jpg"
                    src="/home/gif/196.gif" alt="1号闪购" short="picture/62.jpg" wide="picture/63.jpg">
                    <div class="brand_caption">
                        <h4>
                            1号闪购
                        </h4>
                        <p class="cut_line">
                        </p>
                        <p class="sub_tit">
                            每日10:00上新！
                        </p>
                    </div>
                </a>
            </div>
            <div class="group_buy" id="tuangouMod" data-tpa="YHD_PCSY_TUAN" style="background-image:url(/home/images/3.png);">
                <h4>
                    <a title="#fc7850" target="_blank" href="//t.yhd.com" data-tpc="CC_TG_LWBT">
                        <em>
                            <u class="left_triangle">
                            </u>
                            <u class="right_triangle">
                            </u>
                            <i class="index_iconfont">
                                &#xe625;
                            </i>
                            团购
                        </em>
                    </a>
                </h4>
                <div class="clearfix">
                    <div class="group_today" clstag="pageclick|keycount|shouye_201710104|15">
                        <a title="啤酒活动" target="_blank" href="https://sale.yhd.com/act/LZWu1okAi2dtBh.html"
                        adtags="21989.47547499" data-advExp="0">
                            <img shortimg="picture/67.jpg" wideimg="picture/68.jpg" src="/home/gif/196.gif"
                            alt="啤酒活动" short="picture/67.jpg" wide="picture/68.jpg">
                        </a>
                    </div>
                    <div class="fr">
                        <div class="group_variety" clstag="pageclick|keycount|shouye_201710104|16">
                            <a data-advTypeDetail="0" data-advType="9" title="量贩团" target="_blank"
                            href="https://sale.yhd.com/act/AQDKvcMiNpg7.html" adtags="21990.47547160"
                            data-advExp="0">
                                <p class="group_tit">
                                    量贩团
                                </p>
                                <p class="sub_tit">
                                    诺优能奶粉
                                </p>
                                <img src="/home/gif/196.gif" alt="量贩团" original="picture/71.jpg" width="110"
                                height="110">
                            </a>
                        </div>
                        <div class="group_brand" clstag="pageclick|keycount|shouye_201710104|17">
                            <a data-advTypeDetail="0" data-advType="9" title="品牌抢购" target="_blank"
                            href="https://sale.yhd.com/act/p0XkGDyzej.html" adtags="21991.47547042"
                            data-advExp="0">
                                <p class="group_tit">
                                    品牌抢购
                                </p>
                                <p class="sub_tit">
                                    爆款直降
                                </p>
                                <img src="/home/gif/196.gif" alt="品牌抢购" original="picture/72.jpg" width="110"
                                height="110">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="area_rank" style="background-image: url(/home/images/3.png);" id="floorRank">
                <h4>
                    <a href="//channel.yhd.com/ranklist.html" target="_blank" clstag="pageclick|keycount|shouye_201710104|18">
                        <em>
                            <u class="left_triangle">
                            </u>
                            <u class="right_triangle">
                            </u>
                            <i class="index_iconfont">
                                &#xe61d;
                            </i>
                            排行榜
                        </em>
                    </a>
                    <a href="//channel.yhd.com/ranklist.html" class="more" target="_blank"
                    clstag="pageclick|keycount|shouye_201710104|18">
                        查看更多
                        <span>
                            &gt;
                        </span>
                    </a>
                </h4>
                <div class="area_rank_list" id="floorRanklist">
                    <div class="rank_tab" id="floorRank_tab">
                        <span class="discount_info">
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="wrap mod_on_new clearfix">
            <div class="left_banner" clstag="pageclick|keycount|home_201709224|23">
                <a href="//channel.yhd.com/likenew.html" title="爱上新" target="_blank" adtags="21993.47547363"
                data-advExp="0">
                    <img shortimg="picture/73.jpg" wideimg="picture/74.jpg" src="/home/gif/196.gif"
                    alt="爱上新" short="picture/73.jpg" wide="picture/74.jpg">
                </a>
            </div>
            <div class="brand_buy" style="background-image: url(/home/images/3.png);">
                <h4>
                    <a href="//sale.yhd.com/act/T3cLNu1rim2CW0.html" title="个人护理" target="_blank">
                        <em>
                            <u class="left_triangle">
                            </u>
                            <u class="right_triangle">
                            </u>
                            <i class="index_iconfont">
                                &#xe622;
                            </i>
                            个人护理
                        </em>
                    </a>
                </h4>
                <div class="clearfix">
                    <a title="个人护理" href="//sale.yhd.com/act/T3cLNu1rim2CW0.html" class="brand_banner"
                    target="_blank" adtags="21995.47547699" data-advExp="0" clstag="pageclick|keycount|2017091213|24">
                        <img shortimg="picture/77.jpg" wideimg="picture/78.jpg" src="/home/gif/196.gif"
                        alt="个护综合会场" short="picture/77.jpg" wide="picture/78.jpg">
                    </a>
                    <div class="brand_right">
                        <ul>
                            <li clstag="pageclick|keycount|2017091213|24">
                                <a title="爆款直降" href="https://sale.yhd.com/act/B2z4lcAxarVu3v.html" target="_blank"
                                adtags="21996.47547647" data-advExp="0">
                                    <p class="pro_tit">
                                        洗发护发会场
                                    </p>
                                    <p class="pro_sub_tit">
                                        爆款直降
                                    </p>
                                    <img original="picture/81.jpg" src="/home/gif/196.gif" alt="洗发护发会场" width="90"
                                    height="90">
                                </a>
                            </li>
                            <li clstag="pageclick|keycount|2017091213|25">
                                <a title="单品低至9.9" href="https://sale.yhd.com/act/pBPnRa2IgbmSvQo.html"
                                target="_blank" adtags="21997.47547664" data-advExp="0">
                                    <p class="pro_tit">
                                        身体沐浴会场
                                    </p>
                                    <p class="pro_sub_tit">
                                        单品低至9.9
                                    </p>
                                    <img original="picture/82.jpg" src="/home/gif/196.gif" alt="身体沐浴会场" width="90"
                                    height="90">
                                </a>
                            </li>
                            <li clstag="pageclick|keycount|2017091213|26">
                                <a title="超级爆款" href="//sale.yhd.com/act/7bsZO0xSvWmJFq.html" target="_blank"
                                adtags="21998.47547665" data-advExp="0">
                                    <p class="pro_tit">
                                        口腔女性会场
                                    </p>
                                    <p class="pro_sub_tit">
                                        超级爆款
                                    </p>
                                    <img original="picture/83.jpg" src="/home/gif/196.gif" alt="口腔女性会场" width="90"
                                    height="90">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="life_pie" style="background-image: url(/home/images/3.png);">
                <h4>
                    <a href="//channel.yhd.com/kitchen.html" title="生活派" target="_blank">
                        <em>
                            <u class="left_triangle">
                            </u>
                            <u class="right_triangle">
                            </u>
                            <i class="index_iconfont">
                                &#xe620;
                            </i>
                            生活派
                        </em>
                    </a>
                </h4>
                <div class="clearfix">
                    <a title="京造品质好物" href="https://sale.yhd.com/act/fhmMlDq03GE.html" target="_blank"
                    class="brand_banner" adtags="22000.47546250" data-advExp="0" clstag="pageclick|keycount|home_201709224|27">
                        <img shortimg="picture/84.jpg" wideimg="picture/84.jpg" src="/home/gif/196.gif"
                        alt="1号匠造">
                        <p class="pro_tit">
                            1号匠造
                        </p>
                        <p class="pro_sub_tit">
                            京造品质好物
                        </p>
                    </a>
                    <div class="brand_right">
                        <ul>
                            <li clstag="pageclick|keycount|home_201709224|28">
                                <a title="佳沛奇异果" href="//channel.yhd.com/kitchen.html" target="_blank"
                                adtags="22001.47541247" data-advExp="0">
                                    <p class="pro_tit">
                                        品质厨房
                                    </p>
                                    <p class="pro_sub_tit">
                                        佳沛奇异果
                                    </p>
                                    <img shortimg="images/7.png" wideimg="images/7.png" src="/home/gif/196.gif"
                                    alt="品质厨房" width="90" height="90">
                                </a>
                            </li>
                            <li clstag="pageclick|keycount|home_201709224|29">
                                <a title="萌趣玩具来袭" href="https://sale.yhd.com/act/txK7CzSgyF3L.html" target="_blank"
                                adtags="22002.47538147" data-advExp="0">
                                    <p class="pro_tit">
                                        欢乐一夏
                                    </p>
                                    <p class="pro_sub_tit">
                                        萌趣玩具来袭
                                    </p>
                                    <img shortimg="picture/86.jpg" wideimg="picture/86.jpg" src="/home/gif/196.gif"
                                    alt="欢乐一夏" width="90" height="90">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="clearfix life_pic">
                    <a title="萌宝福利社" href="https://sale.yhd.com/act/zPbnlYuLc7iMH1.html" target="_blank"
                    adtags="22003.47541919" data-advExp="0" clstag="pageclick|keycount|home_201709224|31">
                        <img original="picture/88.jpg" src="/home/gif/196.gif" alt="萌宝福利社">
                        <p>
                            萌宝福利社
                        </p>
                        <p class="go">
                            GO
                            <em class="index_iconfont">
                                &#xe629;
                            </em>
                        </p>
                    </a>
                    <a title="深夜食堂" class="specialty" href="//sale.yhd.com/act/zj8SN4WnglRw.html"
                    target="_blank" adtags="22004.47531306" data-advExp="0" clstag="pageclick|keycount|home_201709224|30">
                        <img original="picture/89.jpg" src="/home/gif/196.gif" alt="深夜食堂">
                        <p>
                            深夜食堂
                        </p>
                        <p class="go">
                            GO
                            <em class="index_iconfont">
                                &#xe629;
                            </em>
                        </p>
                    </a>
                </div>
            </div>
        </div>
        <div class="wrap mod_adv_pic" id="hengfu1" clstag="pageclick|keycount|home_201709224|32"
        data-singlemodule="1">
            <a href="https://sale.yhd.com/act/3S1vMJxmsTkOc.html" title="主会场" target="_blank"
            adtags="22007.47547473" data-advExp="0" data-ref="22007_47547473_1" shortimg="picture/90.jpg"
            wideimg="picture/90.jpg">
            </a>
        </div>
        <div id="needLazyLoad">
            <div class="wrap mod_lift_floor mod_global_imported" id="floorJKLC" lazyLoad_textarea="textareaFloorJKLC">
                <textarea style="display:none;" autocomplete="off" id="textareaFloorJKLC">
                    <h4>
                        <a href="//channel.yhd.com/import.html" target="_blank" title="全球进口">
                            全球进口
                            <i class="index_iconfont">
                                &#xe644;
                            </i>
                        </a>
                    </h4>
                    <div class="clearfix">
                        <div class="global_food" style="background: #952b1e;background: -webkit-linear-gradient(#952b1e 0%, #892d22 100%);background: -o-linear-gradient(#952b1e 0%, #892d22 100%);background: linear-gradient(#952b1e 0%, #892d22 100%);filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#952b1e', endColorstr='#892d22',GradientType=0 );">
                            <div class="left_banner" clstag="pageclick|keycount|home_201709224|33">
                                <a title="圣培露" href="//mall.yhd.com/index-1000014286.html" adtags="22017.47519773"
                                data-advExp="0" target="_blank">
                                    <img alt="圣培露" shortimg="picture/92.jpg" wideimg="picture/92.jpg" src="/home/gif/196.gif"
                                    class="banner_pic" width="316" height="450">
                                </a>
                                <div class="banner_link">
                                    <ul class="clearfix">
                                        <li>
                                            <a title="进口饼干" target="_blank" href="//mall.yhd.com/index-677838.html">
                                                进口饼干
                                            </a>
                                        </li>
                                        <li>
                                            <a title="进口坚果" target="_blank" href="//search.yhd.com/c0-0/k%25E8%25BF%259B%25E5%258F%25A3%25E5%259D%259A%25E6%259E%259C/">
                                                进口坚果
                                            </a>
                                        </li>
                                        <li>
                                            <a title="进口糖巧" target="_blank" href="//search.yhd.com/c0-0/k%25E8%25BF%259B%25E5%258F%25A3%25E7%25B3%2596%25E5%25B7%25A7/">
                                                进口糖巧
                                            </a>
                                        </li>
                                        <li>
                                            <a title="进口咖啡" target="_blank" href="//search.yhd.com/c15053-0-0/mbname-b/a-s1-v0-p1-price-d0-f0b-m1-rt0-pid-mid0-color-size-k/">
                                                进口咖啡
                                            </a>
                                        </li>
                                        <li>
                                            <a title="进口水饮" target="_blank" href="//search.yhd.com/c0-0/k%25E8%25BF%259B%25E5%258F%25A3%25E9%25A5%25AE%25E7%2594%25A8%25E6%25B0%25B4/">
                                                进口水饮
                                            </a>
                                        </li>
                                        <li>
                                            <a title="进口方便面" target="_blank" href="//search.yhd.com/c0-0-1004198/mbname-b/a-s1-v4-p1-price-d0-f0-m1-rt0-pid-mid0-color-size-k/">
                                                进口方便面
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="center_con">
                                <div class="fl">
                                    <a title="领券满199减100" href="//sale.yhd.com/act/vurZVGUoSBOjM.html" target="_blank"
                                    adtags="22018.47547213" data-advExp="0" clstag="pageclick|keycount|home_201709224|34"
                                    class="global_pic">
                                        <img original="picture/94.jpg" src="/home/gif/196.gif" alt="进口食品">
                                    </a>
                                    <div class="pro_item_wrap clearfix">
                                        <div class="pro_shoppe">
                                            <a title="爆款直降" href="https://sale.yhd.com/act/gJOfHyA6U4ZET.html" target="_blank"
                                            adtags="22023.47545350" data-advExp="0" clstag="pageclick|keycount|home_201709224|36">
                                                <p class="pro_tit">
                                                    茱蒂丝
                                                </p>
                                                <p class="pro_sub_tit">
                                                    爆款直降
                                                </p>
                                                <img original="picture/95.jpg" src="/home/gif/196.gif" width="130" height="130"
                                                alt="茱蒂丝">
                                            </a>
                                        </div>
                                        <div class="pro_shoppe">
                                            <a title="每满99减50" href="//sale.yhd.com/act/4vQYrRjKwSxNn.html" target="_blank"
                                            adtags="22024.47547477" data-advExp="0" clstag="pageclick|keycount|home_201709224|37">
                                                <p class="pro_tit">
                                                    进口粮油米面
                                                </p>
                                                <p class="pro_sub_tit">
                                                    每满99减50
                                                </p>
                                                <img original="picture/96.jpg" src="/home/gif/196.gif" width="130" height="130"
                                                alt="进口粮油米面">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="right_con">
                                    <div class="pro_shoppe" clstag="pageclick|keycount|home_201709224|35">
                                        <a title="每满99减50" href="//sale.yhd.com/act/iERDvdreLK.html" target="_blank"
                                        adtags="22019.47547465" data-advExp="0">
                                            <p class="pro_tit">
                                                进口休闲零食
                                            </p>
                                            <p class="pro_sub_tit">
                                                每满99减50
                                            </p>
                                            <img original="picture/97.jpg" src="/home/gif/196.gif" width="130" height="130"
                                            alt="进口休闲零食">
                                        </a>
                                    </div>
                                    <div class="pro_shoppe">
                                        <a title="每满99减50" href="//sale.yhd.com/act/vN1hUSKZfJmBo.html" target="_blank"
                                        adtags="22025.47547466" data-advExp="0" clstag="pageclick|keycount|home_201709224|38">
                                            <p class="pro_tit">
                                                进口水饮冲调
                                            </p>
                                            <p class="pro_sub_tit">
                                                每满99减50
                                            </p>
                                            <img original="picture/98.jpg" src="/home/gif/196.gif" width="130" height="130"
                                            alt="进口水饮冲调">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="global_category">
                            <ul class="clearfix">
                                <li class="jk_mh">
                                    <a title="进口美护" href="//search.yhd.com/p/pt226453161-pl1" target="_blank"
                                    adtags="22026.47547226" data-advExp="0" clstag="pageclick|keycount|home_201709224|39">
                                        <p class="pro_tit">
                                            大牌美护
                                        </p>
                                        <p class="pro_sub_tit">
                                            满499减150
                                        </p>
                                        <p class="pro_color">
                                        </p>
                                        <img original="images/9.png" src="/home/gif/196.gif" width="130" height="130"
                                        alt="大牌美护">
                                    </a>
                                </li>
                                <li class="jk_my">
                                    <a title="进口母婴" href="https://search.yhd.com/c0-0-1004487/" target="_blank"
                                    adtags="22027.47527389" data-advExp="0" clstag="pageclick|keycount|home_201709224|40">
                                        <p class="pro_tit">
                                            进口母婴
                                        </p>
                                        <p class="pro_sub_tit">
                                            MOM&BABY
                                        </p>
                                        <p class="pro_color">
                                        </p>
                                        <img original="images/10.png" src="/home/gif/196.gif" width="130" height="130"
                                        alt="进口母婴">
                                    </a>
                                </li>
                                <li class="jk_sx">
                                    <a title="进口生鲜" href="//search.yhd.com/c0-0/k%25E8%25BF%259B%25E5%258F%25A3%25E7%2594%259F%25E9%25B2%259C/"
                                    target="_blank" adtags="22028.47527392" data-advExp="0" clstag="pageclick|keycount|home_201709224|41">
                                        <p class="pro_tit">
                                            进口生鲜
                                        </p>
                                        <p class="pro_sub_tit">
                                            FRESH
                                        </p>
                                        <p class="pro_color">
                                        </p>
                                        <img original="images/11.png" src="/home/gif/196.gif" width="130" height="130"
                                        alt="进口生鲜">
                                    </a>
                                </li>
                                <li class="jk_jj">
                                    <a title="进口家居" href="//search.yhd.com/c0-0-1005289/" target="_blank"
                                    adtags="22029.47527395" data-advExp="0" clstag="pageclick|keycount|home_201709224|42">
                                        <p class="pro_tit">
                                            进口家居
                                        </p>
                                        <p class="pro_sub_tit">
                                            HOME
                                        </p>
                                        <p class="pro_color">
                                        </p>
                                        <img original="images/12.png" src="/home/gif/196.gif" width="130" height="130"
                                        alt="进口家居">
                                    </a>
                                </li>
                                <li class="jk_cw">
                                    <a title="进口厨卫清洁" href="//search.yhd.com/c0-0/k进口厨卫清洁/" target="_blank"
                                    adtags="22030.47527396" data-advExp="0" clstag="pageclick|keycount|home_201709224|43">
                                        <p class="pro_tit">
                                            进口厨卫清洁
                                        </p>
                                        <p class="pro_sub_tit">
                                            CLEANING
                                        </p>
                                        <p class="pro_color">
                                        </p>
                                        <img original="images/13.png" src="/home/gif/196.gif" width="130" height="130"
                                        alt="进口厨卫清洁">
                                    </a>
                                </li>
                                <li class="jk_bj">
                                    <a title="进口保健品" href="//search.yhd.com/c0-0-1004356/mbname-b/a32939::4422-s1-v4-p1-price-d0-f0-m1-rt0-pid-mid0-color-size-k/"
                                    target="_blank" adtags="22031.47527402" data-advExp="0" clstag="pageclick|keycount|home_201709224|44">
                                        <p class="pro_tit">
                                            进口保健品
                                        </p>
                                        <p class="pro_sub_tit">
                                            HEALTH
                                        </p>
                                        <p class="pro_color">
                                        </p>
                                        <img original="images/14.png" src="/home/gif/196.gif" width="130" height="130"
                                        alt="进口保健品">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </textarea>
            </div>
            <div class="wrap mod_lift_floor mod_index_floor clearfix china_food" id="floorGCSP"
            lazyLoad_textarea="textareaFloorGCSP" style="height:430px;">
                <textarea style="display:none;" autocomplete="off" id="textareaFloorGCSP">
                    <div class="left_con" clstag="pageclick|keycount|home_201709222|1">
                        <h4>
                            <a title="国产食品" href="//search.yhd.com/c1320-0-0/mbname-b/a-s1-v4-p1-price-d0-f06-m1-rt0-pid-mid0-color-size-k%E9%A3%9F%E5%93%81/"
                            target="_blank">
                                国产食品
                                <i>
                                    &gt;
                                </i>
                            </a>
                        </h4>
                        <p class="en_tit">
                            国产食品
                        </p>
                        <div class="floor_silder">
                            <ul>
                                <li class="img_first" data-advId="22033">
                                    <a title="国产食品" target="_blank" href="https://sale.yhd.com/act/nr6D7BaKXO.html"
                                    adtags="22033.47540855" data-advExp="0" data-ref="22033_47540855_1">
                                        <p class="caption">
                                            国食粮油
                                        </p>
                                        <p class="sub_tit">
                                            直降/满减
                                        </p>
                                        <img width="130" height="130" original="picture/99.jpg" src="/home/gif/196.gif"
                                        alt="国食粮油">
                                    </a>
                                    <div class="color_mask">
                                    </div>
                                </li>
                                <li class="img_second" data-advId="22034">
                                    <a title="部分199减100" target="_blank" href="https://sale.yhd.com/act/Sof2TJzr5Y3R.html"
                                    adtags="22034.47511020" data-advExp="0" data-ref="22034_47511020_1">
                                        <p class="caption">
                                            1号坚果
                                        </p>
                                        <p class="sub_tit">
                                            部分199减100
                                        </p>
                                        <img width="130" height="130" original="picture/100.jpg" src="/home/gif/196.gif"
                                        alt="1号坚果">
                                    </a>
                                    <div class="color_mask">
                                    </div>
                                </li>
                                <li class="img_third" data-advId="22035">
                                    <a title="爆款直降" target="_blank" href="https://mall.yhd.com/index-1000040122.html"
                                    adtags="22035.47534986" data-advExp="0" data-ref="22035_47534986_1">
                                        <p class="caption">
                                            金龙鱼
                                        </p>
                                        <p class="sub_tit">
                                            爆款直降
                                        </p>
                                        <img width="130" height="130" original="picture/101.jpg" src="/home/gif/196.gif"
                                        alt="金龙鱼">
                                    </a>
                                    <div class="color_mask">
                                    </div>
                                </li>
                            </ul>
                            <div class="turn_show clearfix">
                                <div class="prev_btn index_iconfont">
                                    &#xe62e;
                                </div>
                                <div class="show_num">
                                    <span>
                                        1
                                    </span>
                                    /
                                    <em>
                                    </em>
                                </div>
                                <div class="next_btn index_iconfont">
                                    &#xe629;
                                </div>
                            </div>
                        </div>
                        <div class="comment">
                            <div class="comment_left">
                                <i class="index_iconfont">
                                    &#xe663;
                                </i>
                            </div>
                            <div class="comment_list">
                                <ul>
                                    <li class="ellipsis">
                                        <a title="休闲食品" target="_blank" href="//search.yhd.com/c0-0-1003327/mbname-b/a-s1-v4-p1-price-d0-f06-m1-rt0-pid-mid0-color-size-k/">
                                            休闲食品
                                        </a>
                                    </li>
                                    <li class="ellipsis">
                                        <a title="粮油米面" target="_blank" href="https://search.yhd.com/c0-0-1003638/mbname-b/a-s1-v4-p1-price-d0-f0-m1-rt0-pid-mid0-color-size-k/">
                                            粮油米面
                                        </a>
                                    </li>
                                    <li class="ellipsis">
                                        <a title="杂粮" target="_blank" href="https://search.yhd.com/c0-0-1003657/">
                                            杂粮
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="center_con">
                        <div class="keywords">
                            <ul class="clearfix" clstag="pageclick|keycount|home_201709222|2">
                                <li>
                                    |
                                    <a title="粮油调味" target="_blank" href="//search.yhd.com/c0-0/k%25E7%25B2%25AE%25E6%25B2%25B9%25E8%25B0%2583%25E5%2591%25B3/"
                                    data-ref="22039_47504314_1">
                                        粮油调味
                                    </a>
                                </li>
                                <li>
                                    |
                                    <a title="休闲零食" target="_blank" href="//search.yhd.com/c0-0/k%25E4%25BC%2591%25E9%2597%25B2%25E9%259B%25B6%25E9%25A3%259F/"
                                    data-ref="22040_47504319_1">
                                        休闲零食
                                    </a>
                                </li>
                                <li>
                                    |
                                    <a title="米面" target="_blank" href="//search.yhd.com/c0-0/k%25E5%25A4%25A7%25E7%25B1%25B3/"
                                    data-ref="22041_47504321_1">
                                        米面
                                    </a>
                                </li>
                                <li>
                                    |
                                    <a title="饼干糕点" target="_blank" href="//search.yhd.com/c0-0/k%25E9%25A5%25BC%25E5%25B9%25B2%25E7%25B3%2595%25E7%2582%25B9/"
                                    data-ref="22042_47504323_1">
                                        饼干糕点
                                    </a>
                                </li>
                                <li>
                                    |
                                    <a title="肉干肉脯" target="_blank" href="//search.yhd.com/c0-0/k%25E8%2582%2589%25E5%25B9%25B2%25E8%2582%2589%25E8%2584%25AF/"
                                    data-ref="22043_47504328_1">
                                        肉干肉脯
                                    </a>
                                </li>
                                <li>
                                    |
                                    <a title="南北干货" target="_blank" href="//search.yhd.com/c0-0/k%25E5%258D%2597%25E5%258C%2597%25E5%25B9%25B2%25E8%25B4%25A7/"
                                    data-ref="22044_47504331_1">
                                        南北干货
                                    </a>
                                </li>
                                <li>
                                    |
                                    <a title="方便速食" target="_blank" href="//search.yhd.com/c0-0/k%25E6%2596%25B9%25E4%25BE%25BF%25E9%2580%259F%25E9%25A3%259F/"
                                    data-ref="22045_47516761_1">
                                        方便速食
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="clearfix">
                            <div class="pro_wrap">
                                <a title="美味1起享" target="_blank" href="//sale.yhd.com/act/nr6D7BaKXO.html"
                                adtags="22048.47545100" data-advExp="0" clstag="pageclick|keycount|home_201709222|3">
                                    <p class="pro_tit">
                                        美味1起享
                                    </p>
                                    <p class="pro_sub_tit">
                                        直降/满减
                                    </p>
                                    <img src="/home/gif/196.gif" alt="美味1起享" original="picture/102.jpg" width="130"
                                    height="130">
                                </a>
                            </div>
                            <div class="pro_wrap">
                                <a title="爆款直降" target="_blank" href="https://sale.yhd.com/act/Sof2TJzr5Y3R.html"
                                adtags="22049.47525682" data-advExp="0" clstag="pageclick|keycount|home_201709222|4">
                                    <p class="pro_tit">
                                        1号零食
                                    </p>
                                    <p class="pro_sub_tit">
                                        爆款直降
                                    </p>
                                    <img src="/home/gif/196.gif" alt="1号零食" original="picture/103.jpg" width="130"
                                    height="130">
                                </a>
                            </div>
                            <div class="pro_wrap" id="gcspAjaxDiv">
                                <a title="低至5折起" target="_blank" href="//sale.yhd.com/act/MWpAXvIrSRsJVdmo.html"
                                adtags="22050.47511015" data-advExp="0" clstag="pageclick|keycount|home_201709222|5">
                                    <p class="pro_tit">
                                        调味品
                                    </p>
                                    <p class="pro_sub_tit">
                                        低至5折起
                                    </p>
                                    <img src="/home/gif/196.gif" alt="调味品" original="picture/104.jpg" width="130"
                                    height="130">
                                </a>
                            </div>
                        </div>
                        <div class="clearfix">
                            <div class="pro_wrap">
                                <a title="爆款直降" target="_blank" adtags="22051.47540883" data-advExp="0"
                                href="https://sale.yhd.com/act/7DCOmot8NS4qU.html" data-ref="22051_47540883_1"
                                clstag="pageclick|keycount|home_201709222|6">
                                    <p class="pro_tit">
                                        粮油米面
                                    </p>
                                    <p class="pro_sub_tit">
                                        爆款直降
                                    </p>
                                    <img src="/home/gif/196.gif" alt="粮油米面" original="picture/105.jpg" width="130"
                                    height="130">
                                </a>
                            </div>
                            <div class="pro_wrap">
                                <a title="部分2件8折" target="_blank" adtags="22052.47544908" data-advExp="0"
                                href="//sale.yhd.com/act/MU6tN3EKFdHI5Ri.html" data-ref="22052_47544908_1"
                                clstag="pageclick|keycount|home_201709222|7">
                                    <p class="pro_tit">
                                        营养保健
                                    </p>
                                    <p class="pro_sub_tit">
                                        部分2件8折
                                    </p>
                                    <img src="/home/gif/196.gif" alt="营养保健" original="images/15.png" width="130"
                                    height="130">
                                </a>
                            </div>
                            <div class="brand_wrap">
                                <div class="brand_cover">
                                    <ul>
                                        <li>
                                            <a title="光明" target="_blank" href="//mall.yhd.com/index-1000014602.html"
                                            adtags="22053.47520469" data-advExp="0" data-ref="22053_47520469_1" clstag="pageclick|keycount|home_201709222|8">
                                                <img src="/home/gif/196.gif" alt="光明" original="picture/106.jpg">
                                            </a>
                                        </li>
                                        <li>
                                            <a title="金龙鱼" target="_blank" href="//mall.yhd.com/index-1000040122.html"
                                            adtags="22054.47504968" data-advExp="0" data-ref="22054_47504968_1" clstag="pageclick|keycount|home_201709222|9">
                                                <img src="/home/gif/196.gif" alt="金龙鱼" original="picture/107.jpg">
                                            </a>
                                        </li>
                                        <li>
                                            <a title="十月稻田 " target="_blank" href="//mall.yhd.com/index-1000014142.html"
                                            adtags="22055.47520492" data-advExp="0" data-ref="22055_47520492_1" clstag="pageclick|keycount|home_201709222|10">
                                                <img src="/home/gif/196.gif" alt="十月稻田 " original="picture/108.jpg">
                                            </a>
                                        </li>
                                        <li>
                                            <a title="康师傅" target="_blank" href="//mall.yhd.com/index-1000010461.html"
                                            adtags="22056.47504970" data-advExp="0" data-ref="22056_47504970_1" clstag="pageclick|keycount|home_201709222|11">
                                                <img src="/home/gif/196.gif" alt="康师傅" original="picture/109.jpg">
                                            </a>
                                        </li>
                                        <li>
                                            <a title="福临门 " target="_blank" href="//mall.yhd.com/index-1000077335.html"
                                            adtags="22057.47520604" data-advExp="0" data-ref="22057_47520604_1" clstag="pageclick|keycount|home_201709222|12">
                                                <img src="/home/gif/196.gif" alt="福临门 " original="picture/110.jpg">
                                            </a>
                                        </li>
                                        <li>
                                            <a title="乐事" target="_blank" href="//mall.yhd.com/index-1000010322.html"
                                            adtags="22058.47504973" data-advExp="0" data-ref="22058_47504973_1" clstag="pageclick|keycount|home_201709222|13">
                                                <img src="/home/gif/196.gif" alt="乐事" original="picture/111.jpg">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="hot_con">
                        <p class="hot_tit">
                            热门商品
                        </p>
                        <div class="rank_list">
                            <ul clstag="pageclick|keycount|home_201709222|12">
                                <li data-singlemodule="1">
                                    <a class="pro_img clearfix" title="统一 方便面 汤达人 日式豚骨味方便面 五连包" target="_blank"
                                    href="//item.yhd.com/1003979.html" adtags="22059.47521905" data-advExp="0"
                                    data-ref="22059_47521905_1">
                                        <img alt="统一 方便面 汤达人 日式豚骨味方便面 五连包" src="/home/gif/196.gif" original="picture/112.jpg"
                                        width="60" height="60">
                                        <i>
                                            1
                                        </i>
                                        <div class="rank_detail">
                                            <p class="pro_name">
                                                统一 方便面 汤达人 日式豚骨味方便面 五连包
                                            </p>
                                            <p class="pro_price" data-skuId="1003979">
                                                ¥
                                                <em>
                                                </em>
                                            </p>
                                        </div>
                                    </a>
                                </li>
                                <li data-singlemodule="1">
                                    <a class="pro_img clearfix" title="李锦记 锦珍生抽 非转基因酿造酱油 调味调料 1.65L" target="_blank"
                                    href="//item.yhd.com/3391487.html" adtags="22060.47504330" data-advExp="0"
                                    data-ref="22060_47504330_1">
                                        <img alt="李锦记 锦珍生抽 非转基因酿造酱油 调味调料 1.65L" src="/home/gif/196.gif" original="picture/113.jpg"
                                        width="60" height="60">
                                        <i class="rank_second">
                                            2
                                        </i>
                                        <div class="rank_detail">
                                            <p class="pro_name">
                                                李锦记 锦珍生抽 非转基因酿造酱油 调味调料 1.65L
                                            </p>
                                            <p class="pro_price" data-skuId="3391487">
                                                ¥
                                                <em>
                                                </em>
                                            </p>
                                        </div>
                                    </a>
                                </li>
                                <li data-singlemodule="1">
                                    <a class="pro_img clearfix" title="十月稻田 稻花香米 5kg（东北大米 当季新米）" target="_blank"
                                    href="//item.yhd.com/989387.html" adtags="22061.47504332" data-advExp="0"
                                    data-ref="22061_47504332_1">
                                        <img alt="十月稻田 稻花香米 5kg（东北大米 当季新米）" src="/home/gif/196.gif" original="picture/114.jpg"
                                        width="60" height="60">
                                        <i class="rank_third">
                                            3
                                        </i>
                                        <div class="rank_detail">
                                            <p class="pro_name">
                                                十月稻田 稻花香米 5kg（东北大米 当季新米）
                                            </p>
                                            <p class="pro_price" data-skuId="989387">
                                                ¥
                                                <em>
                                                </em>
                                            </p>
                                        </div>
                                    </a>
                                </li>
                                <li data-singlemodule="1">
                                    <a class="pro_img clearfix" title="鲁花 5S 压榨一级 花生油 4L（新老包装随机发放）" target="_blank"
                                    href="//item.yhd.com/964416.html" adtags="22062.47504333" data-advExp="0"
                                    data-ref="22062_47504333_1">
                                        <img alt="鲁花 5S 压榨一级 花生油 4L（新老包装随机发放）" src="/home/gif/196.gif" original="picture/115.jpg"
                                        width="60" height="60">
                                        <div class="rank_detail">
                                            <p class="pro_name">
                                                鲁花 5S 压榨一级 花生油 4L（新老包装随机发放）
                                            </p>
                                            <p class="pro_price" data-skuId="964416">
                                                ¥
                                                <em>
                                                </em>
                                            </p>
                                        </div>
                                    </a>
                                </li>
                                <li data-singlemodule="1">
                                    <a class="pro_img clearfix" title="乐事（Lay’s）无限薯片 休闲零食 104g*3组合装（原味+烤肉+番茄）百事食品"
                                    target="_blank" href="//item.yhd.com/963181.html" adtags="22063.47504335"
                                    data-advExp="0" data-ref="22063_47504335_1">
                                        <img alt="乐事（Lay’s）无限薯片 休闲零食 104g*3组合装（原味+烤肉+番茄）百事食品" src="/home/gif/196.gif"
                                        original="picture/116.jpg" width="60" height="60">
                                        <div class="rank_detail">
                                            <p class="pro_name">
                                                乐事（Lay’s）无限薯片 休闲零食 104g*3组合装（原味+烤肉+番茄）百事食品
                                            </p>
                                            <p class="pro_price" data-skuId="963181">
                                                ¥
                                                <em>
                                                </em>
                                            </p>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </textarea>
            </div>
            <div class="wrap mod_columns_wrap mod_lift_floor clearfix">
                <div class="fl mod_columns_floor live_fresh" id="floorHSSX" lazyLoad_textarea="textareaFloorHSSX">
                    <textarea style="display:none;" autocomplete="off" id="textareaFloorHSSX">
                        <div class="floor_tit clearfix">
                            <h4>
                                <a href="https://sale.yhd.com/act/5i3JXqdTUljgb.html" target="_blank"
                                title="1号生鲜" clstag="pageclick|keycount|home_201709222|13">
                                    1号生鲜
                                    <em>
                                        &gt;
                                    </em>
                                </a>
                            </h4>
                            <div class="keywords">
                                <ul class="clearfix" clstag="pageclick|keycount|home_201709222|14">
                                    <li>
                                        <a title="冷冻速食" target="_blank" href="//search.yhd.com/c13591-0-0">
                                            冷冻速食
                                        </a>
                                        |
                                    </li>
                                    <li>
                                        <a title="肉禽海鲜" target="_blank" href="//search.yhd.com/c0-0-1008414/">
                                            肉禽海鲜
                                        </a>
                                        |
                                    </li>
                                    <li>
                                        <a title="低温乳品" target="_blank" href="//search.yhd.com/c13598-0-0">
                                            低温乳品
                                        </a>
                                        |
                                    </li>
                                    <li>
                                        <a title="蔬菜" target="_blank" href="https://search.yhd.com/c0-0/k%25E8%2594%25AC%25E8%258F%259C/">
                                            蔬菜
                                        </a>
                                        |
                                    </li>
                                    <li>
                                        <a title="水果" target="_blank" href="//search.yhd.com/c0-0/k%25E6%2596%25B0%25E9%25B2%259C%25E6%25B0%25B4%25E6%259E%259C/">
                                            水果
                                        </a>
                                        |
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="clearfix">
                            <div class="left_slider">
                                <ul>
                                    <li class="cur" data-advId="22190">
                                        <a title="阳澄湖大闸蟹1元秒" href="https://sale.yhd.com/act/3S1vMJxmsTkOc.html"
                                        target="_blank" adtags="22190.47547065" data-advExp="0" clstag="pageclick|keycount|home_201709222|15">
                                            <p class="caption">
                                                大闸蟹超品日
                                            </p>
                                            <p class="sub_tit">
                                                阳澄湖大闸蟹1元秒
                                            </p>
                                            <img original="images/16.png" src="/home/gif/196.gif" alt="大闸蟹超品日">
                                        </a>
                                    </li>
                                    <li data-advId="22191">
                                        <a title="爆款直降" href="https://sale.yhd.com/act/NU1qcwlGHb.html" target="_blank"
                                        adtags="22191.47546057" data-advExp="0" clstag="pageclick|keycount|home_201709222|16">
                                            <p class="caption">
                                                嗨翻夏日
                                            </p>
                                            <p class="sub_tit">
                                                爆款直降
                                            </p>
                                            <img original="images/17.png" src="/home/gif/196.gif" alt="嗨翻夏日">
                                        </a>
                                    </li>
                                    <li data-advId="22192">
                                        <a title="爆款直降" href="https://sale.yhd.com/act/Dn6pB807v1Ftkah3.html"
                                        target="_blank" adtags="22192.47546085" data-advExp="0" clstag="pageclick|keycount|home_201709222|17">
                                            <p class="caption">
                                                夏日么么茶
                                            </p>
                                            <p class="sub_tit">
                                                爆款直降
                                            </p>
                                            <img original="picture/117.jpg" src="/home/gif/196.gif" alt="夏日么么茶">
                                        </a>
                                    </li>
                                </ul>
                                <div class="slider_nav clearfix">
                                    <a href="javascript:;" class="cur" data-advId="22190">
                                        <em>
                                        </em>
                                    </a>
                                    <a href="javascript:;" data-advId="22191">
                                        <em>
                                        </em>
                                    </a>
                                    <a href="javascript:;" data-advId="22192">
                                        <em>
                                        </em>
                                    </a>
                                </div>
                            </div>
                            <div class="pro_con" data-tpc="YHD_HSSX_HDGG_1">
                                <div class="pro_wrap">
                                    <a title="59元选3件" href="https://sale.yhd.com/act/osf4p0MJ7dCkUL.html"
                                    target="_blank" adtags="22193.47541254" data-advExp="0" clstag="pageclick|keycount|home_201709222|18">
                                        <p class="pro_tit">
                                            1号生鲜会场
                                        </p>
                                        <p class="pro_sub_tit">
                                            59元选3件
                                        </p>
                                        <img original="images/18.png" src="/home/gif/196.gif" alt="1号生鲜会场" width="105"
                                        height="105">
                                    </a>
                                </div>
                                <div class="pro_wrap">
                                    <a title="大闸蟹1元秒" href="https://sale.yhd.com/act/3S1vMJxmsTkOc.html" target="_blank"
                                    adtags="22195.47547070" data-advExp="0" clstag="pageclick|keycount|home_201709222|19">
                                        <p class="pro_tit">
                                            大闸蟹超品日
                                        </p>
                                        <p class="pro_sub_tit">
                                            大闸蟹1元秒
                                        </p>
                                        <img original="images/19.png" src="/home/gif/196.gif" alt="大闸蟹超品日" width="105"
                                        height="105">
                                    </a>
                                </div>
                            </div>
                            <div class="pro_con" data-tpc="YHD_HSSX_HDGG_2">
                                <div class="pro_wrap" id="hssxAjaxDiv">
                                    <a title="爆款直降" href="https://sale.yhd.com/act/NU1qcwlGHb.html" target="_blank"
                                    adtags="22194.47546110" data-advExp="0" clstag="pageclick|keycount|home_201709222|20">
                                        <p class="pro_tit">
                                            嗨翻夏日
                                        </p>
                                        <p class="pro_sub_tit">
                                            爆款直降
                                        </p>
                                        <img original="images/20.png" src="/home/gif/196.gif" alt="嗨翻夏日" width="105"
                                        height="105">
                                    </a>
                                </div>
                                <div class="pro_wrap">
                                    <a title="爆款直降" href="https://sale.yhd.com/act/Dn6pB807v1Ftkah3.html"
                                    target="_blank" adtags="22196.47539574" data-advExp="0" clstag="pageclick|keycount|home_201709222|21">
                                        <p class="pro_tit">
                                            初夏盛宴
                                        </p>
                                        <p class="pro_sub_tit">
                                            爆款直降
                                        </p>
                                        <img original="images/21.png" src="/home/gif/196.gif" alt="初夏盛宴" width="105"
                                        height="105">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </textarea>
                </div>
                <div class="fr mod_columns_floor wine_drink" id="floorJSYL" lazyLoad_textarea="textareaFloorJSYL">
                    <textarea style="display:none;" autocomplete="off" id="textareaFloorJSYL">
                        <div class="floor_tit clearfix">
                            <h4>
                                <a href="//search.yhd.com/c1585-0-0/mbname-b/a-s1-v0-p1-price-d0-f0-m1-rt0-pid-mid0-color-size-k/"
                                target="_blank" title="酒水饮料" clstag="pageclick|keycount|home_201709222|22">
                                    酒水饮料
                                    <em>
                                        &gt;
                                    </em>
                                </a>
                            </h4>
                            <div class="keywords" clstag="pageclick|keycount|home_201709222|23">
                                <ul class="clearfix">
                                    <li>
                                        <a title="冲调谷物" target="_blank" title="酒水饮料" href="//search.yhd.com/c0-0/k%25E5%2586%25B2%25E8%25B0%2583%25E8%25B0%25B7%25E7%2589%25A9/"
                                        data-ref="22203_47522695_1">
                                            冲调谷物
                                        </a>
                                        |
                                    </li>
                                    <li>
                                        <a title="茗茶" target="_blank" title="酒水饮料" href="//search.yhd.com/c0-0/k%25E8%258C%2597%25E8%258C%25B6/"
                                        data-ref="22202_47522694_1">
                                            茗茶
                                        </a>
                                        |
                                    </li>
                                    <li>
                                        <a title="咖啡" target="_blank" title="酒水饮料" href="//search.yhd.com/c0-0/k%25E5%2592%2596%25E5%2595%25A1/"
                                        data-ref="22201_47512303_1">
                                            咖啡
                                        </a>
                                        |
                                    </li>
                                    <li>
                                        <a title="牛奶乳品" target="_blank" title="酒水饮料" href="//search.yhd.com/c0-0/k%25E7%2589%259B%25E5%25A5%25B6%25E4%25B9%25B3%25E5%2593%2581/"
                                        data-ref="22200_47512300_1">
                                            牛奶乳品
                                        </a>
                                        |
                                    </li>
                                    <li>
                                        <a title="酒" target="_blank" title="酒水饮料" href="//search.yhd.com/c0-0/k%25E9%2585%2592/"
                                        data-ref="22199_47512298_1">
                                            酒
                                        </a>
                                        |
                                    </li>
                                    <li>
                                        <a title="饮料饮品" target="_blank" title="酒水饮料" href="//search.yhd.com/c0-0/k%25E9%25A5%25AE%25E6%2596%2599/"
                                        data-ref="22198_47541904_1">
                                            饮料饮品
                                        </a>
                                        |
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="clearfix">
                            <div class="left_slider">
                                <ul>
                                    <li class="cur" data-advId="22205">
                                        <a title="啤酒节" href="https://sale.yhd.com/act/LZWu1okAi2dtBh.html" target="_blank"
                                        adtags="22205.47547433" data-advExp="0" clstag="pageclick|keycount|home_201709222|24">
                                            <p class="caption">
                                                啤酒节
                                            </p>
                                            <p class="sub_tit">
                                                满199减100
                                            </p>
                                            <img original="picture/118.jpg" src="/home/gif/196.gif" alt="啤酒节">
                                        </a>
                                    </li>
                                </ul>
                                <div class="slider_nav clearfix">
                                    <a href="javascript:;" class="cur">
                                        <em>
                                        </em>
                                    </a>
                                </div>
                            </div>
                            <div class="pro_con">
                                <div class="pro_wrap">
                                    <a title="部分2件5折" href="//sale.yhd.com/act/yM7odzASrq.html" target="_blank"
                                    adtags="22208.47526847" data-advExp="0" clstag="pageclick|keycount|home_201709222|27">
                                        <p class="pro_tit">
                                            水饮冲调
                                        </p>
                                        <p class="pro_sub_tit">
                                            部分2件5折
                                        </p>
                                        <img original="picture/119.jpg" src="/home/gif/196.gif" alt="水饮冲调" width="105"
                                        height="105">
                                    </a>
                                </div>
                                <div class="pro_wrap">
                                    <a title="牛奶乳品" href="//sale.yhd.com/act/7yAO1GsVLj.html" target="_blank"
                                    adtags="22210.47534987" data-advExp="0" clstag="pageclick|keycount|home_201709222|28">
                                        <p class="pro_tit">
                                            牛奶乳品
                                        </p>
                                        <p class="pro_sub_tit">
                                            第二件半价
                                        </p>
                                        <img original="picture/120.jpg" src="/home/gif/196.gif" alt="牛奶乳品" width="105"
                                        height="105">
                                    </a>
                                </div>
                            </div>
                            <div class="pro_con">
                                <div class="pro_wrap">
                                    <a title="酒类综合会场" href="https://sale.yhd.com/act/bZK3mfTYR8pQNlL.html"
                                    target="_blank" adtags="22209.47545588" data-advExp="0" clstag="pageclick|keycount|home_201709222|29">
                                        <p class="pro_tit">
                                            酒类综合会场
                                        </p>
                                        <p class="pro_sub_tit">
                                            满199减100
                                        </p>
                                        <img original="picture/121.jpg" src="/home/gif/196.gif" alt="酒类综合会场" width="105"
                                        height="105">
                                    </a>
                                </div>
                                <div class="brand_wrap">
                                    <div class="brand_cover">
                                        <ul>
                                            <li data-advId="22211">
                                                <a title="可口可乐" href="//mall.yhd.com/index-1000014286.html" target="_blank"
                                                adtags="22211.47535268" data-advExp="0">
                                                    <img original="picture/122.jpg" src="/home/gif/196.gif" alt="可口可乐" clstag="pageclick|keycount|home_201709222|30">
                                                </a>
                                            </li>
                                            <li data-advId="22212">
                                                <a title="纽仕兰" href="https://mall.yhd.com/index-1000012961.html" target="_blank"
                                                adtags="22212.47535258" data-advExp="0">
                                                    <img original="picture/123.jpg" src="/home/gif/196.gif" alt="纽仕兰" clstag="pageclick|keycount|home_201709222|31">
                                                </a>
                                            </li>
                                            <li data-advId="22213">
                                                <a title="洋河" href="//mall.yhd.com/index-1000015502.html" target="_blank"
                                                adtags="22213.47517503" data-advExp="0">
                                                    <img original="picture/124.jpg" src="/home/gif/196.gif" alt="洋河" clstag="pageclick|keycount|home_201709222|32">
                                                </a>
                                            </li>
                                            <li data-advId="22214">
                                                <a title="百威" href="//mall.yhd.com/index-1000005823.html" target="_blank"
                                                adtags="22214.47517502" data-advExp="0">
                                                    <img original="images/22.png" src="/home/gif/196.gif" alt="百威" clstag="pageclick|keycount|home_201709222|33">
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </textarea>
                </div>
            </div>
            <div class="wrap mod_lift_floor mod_index_floor clearfix care_makeup"
            id="floorGHMZ" lazyLoad_textarea="textareaFloorGHMZ" style="height:430px;">
                <textarea style="display:none;" autocomplete="off" id="textareaFloorGHMZ">
                    <div class="left_con" clstag="pageclick|keycount|home_201709222|52">
                        <h4>
                            <a title="BEAUTY MAKEUP" href="https://sale.yhd.com/act/uf0DFM6Iahpn.html"
                            target="_blank">
                                美妆个护
                                <i>
                                    &gt;
                                </i>
                            </a>
                        </h4>
                        <p class="en_tit">
                            BEAUTY MAKEUP
                        </p>
                        <div class="floor_silder">
                            <ul>
                                <li class="img_first" data-advId="22065">
                                    <a title="粉嫩美白季" target="_blank" href="//mall.yhd.com/index-1000002499.html"
                                    adtags="22065.47547026" data-advExp="0">
                                        <p class="caption">
                                            OLAY
                                        </p>
                                        <p class="sub_tit">
                                            粉嫩美白季
                                        </p>
                                        <img width="130" height="130" original="picture/125.jpg" src="/home/gif/196.gif"
                                        alt="OLAY">
                                    </a>
                                    <div class="color_mask">
                                    </div>
                                </li>
                                <li class="img_second" data-advId="22067">
                                    <a title="每满199减60" target="_blank" href="https://sale.yhd.com/act/jZOduCBIskU.html"
                                    adtags="22067.47542185" data-advExp="0">
                                        <p class="caption">
                                            欧莱雅
                                        </p>
                                        <p class="sub_tit">
                                            每满199减60
                                        </p>
                                        <img width="130" height="130" original="picture/126.jpg" src="/home/gif/196.gif"
                                        alt="欧莱雅">
                                    </a>
                                    <div class="color_mask">
                                    </div>
                                </li>
                            </ul>
                            <div class="turn_show clearfix">
                                <div class="prev_btn index_iconfont">
                                    &#xe62e;
                                </div>
                                <div class="show_num">
                                    <span>
                                        1
                                    </span>
                                    /
                                    <em>
                                    </em>
                                </div>
                                <div class="next_btn index_iconfont">
                                    &#xe629;
                                </div>
                            </div>
                        </div>
                        <div class="comment">
                            <div class="comment_left">
                                <i class="index_iconfont">
                                    &#xe663;
                                </i>
                            </div>
                            <div class="comment_list">
                                <ul>
                                    <li class="ellipsis">
                                        <a title="洗白洗亮的小秘密~" target="_blank" href="//search.yhd.com/c0-0/k%25E6%25B4%2597%25E6%258A%25A4/">
                                            洗白洗亮的小秘密~
                                        </a>
                                    </li>
                                    <li class="ellipsis">
                                        <a title="让肌肤度过换季难关" target="_blank" href="https://sale.yhd.com/act/JuErMD1TyVCqla4Q.html">
                                            让肌肤度过换季难关
                                        </a>
                                    </li>
                                    <li class="ellipsis">
                                        <a title="体验美妙无比的女性魅力" target="_blank" href="https://sale.yhd.com/act/02bvZ6iglX5.html">
                                            体验美妙无比的女性魅力
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="center_con">
                        <div class="keywords" clstag="pageclick|keycount|home_201709222|65">
                            <ul class="clearfix">
                                <li>
                                    |
                                    <a title="美发护发" target="_blank" href="//search.yhd.com/c0-0-1003626/">
                                        美发护发
                                    </a>
                                </li>
                                <li>
                                    |
                                    <a title="口腔护理" target="_blank" href="//search.yhd.com/c0-0/k%E5%8F%A3%E8%85%94%E6%8A%A4%E7%90%86/">
                                        口腔护理
                                    </a>
                                </li>
                                <li>
                                    |
                                    <a title="洁面卸妆" target="_blank" href="//search.yhd.com/c0-0/k%25E6%25B4%2581%25E9%259D%25A2%25E5%258D%25B8%25E5%25A6%2586/">
                                        洁面卸妆
                                    </a>
                                </li>
                                <li>
                                    |
                                    <a title="沐浴清洁" target="_blank" href="//search.yhd.com/c0-0-1003624/">
                                        沐浴清洁
                                    </a>
                                </li>
                                <li>
                                    |
                                    <a title="面护彩妆" target="_blank" href="//search.yhd.com/c0-0/k%25E6%258A%25A4%25E8%2582%25A4%25E5%25BD%25A9%25E5%25A6%2586/">
                                        面护彩妆
                                    </a>
                                </li>
                                <li>
                                    |
                                    <a title="身体护理" target="_blank" href="//search.yhd.com/c0-0-1003631/">
                                        身体护理
                                    </a>
                                </li>
                                <li>
                                    |
                                    <a title="女性护理" target="_blank" href="//search.yhd.com/c0-0-1003628/">
                                        女性护理
                                    </a>
                                </li>
                                <li>
                                    |
                                    <a title="男士护理" target="_blank" href="//search.yhd.com/c0-0/k男士护理">
                                        男士护理
                                    </a>
                                </li>
                                <li>
                                    |
                                    <a title="美容工具" target="_blank" href="//search.yhd.com/c0-0-1003617/">
                                        美容工具
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="clearfix">
                            <div class="pro_wrap">
                                <a title="满199减100" target="_blank" href="//sale.yhd.com/act/T3cLNu1rim2CW0.html"
                                adtags="22080.47543094" data-advExp="0" clstag="pageclick|keycount|home_201709222|53">
                                    <p class="pro_tit">
                                        全民洗护
                                    </p>
                                    <p class="pro_sub_tit">
                                        满199减100
                                    </p>
                                    <img src="/home/gif/196.gif" alt="全民洗护" original="picture/127.jpg" width="130"
                                    height="130">
                                </a>
                            </div>
                            <div class="pro_wrap">
                                <a title="面部护肤会场" target="_blank" href="https://sale.yhd.com/act/tZ8sGOkx2y1UAwN.html"
                                adtags="22081.47541451" data-advExp="0" clstag="pageclick|keycount|home_201709222|54">
                                    <p class="pro_tit">
                                        面部护肤会场
                                    </p>
                                    <p class="pro_sub_tit">
                                        夏日美肌呵护
                                    </p>
                                    <img src="/home/gif/196.gif" alt="面部护肤会场" original="picture/128.jpg" width="130"
                                    height="130">
                                </a>
                            </div>
                            <div class="pro_wrap" id="ghmzAjaxDiv">
                                <a title="口腔女性会场" target="_blank" href="https://sale.yhd.com/act/JVyo5gzk3mYZrp.html"
                                adtags="22082.47541450" data-advExp="0" clstag="pageclick|keycount|home_201709222|55">
                                    <p class="pro_tit">
                                        口腔女性会场
                                    </p>
                                    <p class="pro_sub_tit">
                                        精致生活每个细节
                                    </p>
                                    <img src="/home/gif/196.gif" alt="口腔女性会场" original="picture/129.jpg" width="130"
                                    height="130">
                                </a>
                            </div>
                        </div>
                        <div class="clearfix">
                            <div class="pro_wrap">
                                <a title="低至9.9元" target="_blank" href="//sale.yhd.com/act/pBPnRa2IgbmSvQo.html"
                                adtags="22083.47541449" data-advExp="0" clstag="pageclick|keycount|home_201709222|56">
                                    <p class="pro_tit">
                                        小妖精的露肉季
                                    </p>
                                    <p class="pro_sub_tit">
                                        低至9.9元
                                    </p>
                                    <img src="/home/gif/196.gif" alt="小妖精的露肉季" original="picture/130.jpg" width="130"
                                    height="130">
                                </a>
                            </div>
                            <div class="pro_wrap">
                                <a title="爆款直降" target="_blank" href="https://sale.yhd.com/act/02bvZ6iglX5.html"
                                adtags="22084.47539713" data-advExp="0" clstag="pageclick|keycount|home_201709222|57">
                                    <p class="pro_tit">
                                        彩妆香水美容工具
                                    </p>
                                    <p class="pro_sub_tit">
                                        爆款直降
                                    </p>
                                    <img src="/home/gif/196.gif" alt="彩妆香水美容工具" original="picture/131.jpg" width="130"
                                    height="130">
                                </a>
                            </div>
                            <div class="brand_wrap">
                                <div class="brand_cover">
                                    <ul>
                                        <li>
                                            <a title="资生堂" target="_blank" href="//search.yhd.com/c0-0/k%E8%B5%84%E7%94%9F%E5%A0%82/"
                                            adtags="22085.47524297" data-advExp="0" clstag="pageclick|keycount|home_201709222|58">
                                                <img src="/home/gif/196.gif" alt="资生堂" original="picture/132.jpg">
                                            </a>
                                        </li>
                                        <li>
                                            <a title="欧莱雅" target="_blank" href="https://sale.yhd.com/act/jZOduCBIskU.html"
                                            adtags="22086.47524298" data-advExp="0" clstag="pageclick|keycount|home_201709222|59">
                                                <img src="/home/gif/196.gif" alt="欧莱雅" original="picture/133.jpg">
                                            </a>
                                        </li>
                                        <li>
                                            <a title="苏菲" target="_blank" href="//search.yhd.com/c0-0/k%25E8%258B%258F%25E8%258F%25B2/"
                                            adtags="22087.47524299" data-advExp="0" clstag="pageclick|keycount|home_201709222|60">
                                                <img src="/home/gif/196.gif" alt="苏菲" original="picture/134.jpg">
                                            </a>
                                        </li>
                                        <li>
                                            <a title="飘柔" target="_blank" href="//search.yhd.com/c0-0/k%25E9%25A3%2598%25E6%259F%2594/"
                                            adtags="22088.47511006" data-advExp="0" clstag="pageclick|keycount|home_201709222|61">
                                                <img src="/home/gif/196.gif" alt="飘柔" original="picture/135.jpg">
                                            </a>
                                        </li>
                                        <li>
                                            <a title="狮王" target="_blank" href="//search.yhd.com/c0-0/k%25E7%258B%25AE%25E7%258E%258B/"
                                            adtags="22089.47511007" data-advExp="0" clstag="pageclick|keycount|home_201709222|62">
                                                <img src="/home/gif/196.gif" alt="狮王" original="picture/136.jpg">
                                            </a>
                                        </li>
                                        <li>
                                            <a title="舒肤佳" target="_blank" href="//search.yhd.com/c0-0/k%25E8%2588%2592%25E8%2582%25A4%25E4%25BD%25B3/"
                                            adtags="22090.47511009" data-advExp="0" clstag="pageclick|keycount|home_201709222|63">
                                                <img src="/home/gif/196.gif" alt="舒肤佳" original="picture/137.jpg">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="hot_con">
                        <p class="hot_tit">
                            热门商品
                        </p>
                        <div class="rank_list" clstag="pageclick|keycount|home_201709222|64">
                            <ul>
                                <li data-singlemodule="1">
                                    <a class="pro_img clearfix" title="清扬(CLEAR)去屑洗发水套装 多效水润养护型750mlx2送多效水润100mlx2"
                                    target="_blank" href="//item.yhd.com/3596576.html" adtags="22091.47512194"
                                    data-advExp="0">
                                        <img alt="清扬(CLEAR)去屑洗发水套装 多效水润养护型750mlx2送多效水润100mlx2" src="/home/gif/196.gif"
                                        original="picture/138.jpg" width="60" height="60">
                                        <i>
                                            1
                                        </i>
                                        <div class="rank_detail">
                                            <p class="pro_name">
                                                清扬(CLEAR)去屑洗发水套装 多效水润养护型750mlx2送多效水润100mlx2
                                            </p>
                                            <p class="pro_price" data-skuId="3596576">
                                                ¥
                                                <em>
                                                </em>
                                            </p>
                                        </div>
                                    </a>
                                </li>
                                <li data-singlemodule="1">
                                    <a class="pro_img clearfix" title="多芬(DOVE)滋养美肤沐浴露套装 深层营润1000g+樱花甜香1000g送清透水润190mlx2+50ml洗护旅行装"
                                    target="_blank" href="//item.yhd.com/3853859.html" adtags="22092.47512197"
                                    data-advExp="0">
                                        <img alt="多芬(DOVE)滋养美肤沐浴露套装 深层营润1000g+樱花甜香1000g送清透水润190mlx2+50ml洗护旅行装"
                                        src="/home/gif/196.gif" original="picture/139.jpg" width="60" height="60">
                                        <i class="rank_second">
                                            2
                                        </i>
                                        <div class="rank_detail">
                                            <p class="pro_name">
                                                多芬(DOVE)滋养美肤沐浴露套装 深层营润1000g+樱花甜香1000g送清透水润190mlx2+50ml洗护旅行装
                                            </p>
                                            <p class="pro_price" data-skuId="3853859">
                                                ¥
                                                <em>
                                                </em>
                                            </p>
                                        </div>
                                    </a>
                                </li>
                                <li data-singlemodule="1">
                                    <a class="pro_img clearfix" title="高露洁（Colgate） 360°口腔健康 牙膏 200g×2（健康牙龈）(新老包装随机发放)"
                                    target="_blank" href="//item.yhd.com/579711.html" adtags="22093.47512198"
                                    data-advExp="0">
                                        <img alt="高露洁（Colgate） 360°口腔健康 牙膏 200g×2（健康牙龈）(新老包装随机发放)" src="/home/gif/196.gif"
                                        original="picture/140.jpg" width="60" height="60">
                                        <i class="rank_third">
                                            3
                                        </i>
                                        <div class="rank_detail">
                                            <p class="pro_name">
                                                高露洁（Colgate） 360°口腔健康 牙膏 200g×2（健康牙龈）(新老包装随机发放)
                                            </p>
                                            <p class="pro_price" data-skuId="579711">
                                                ¥
                                                <em>
                                                </em>
                                            </p>
                                        </div>
                                    </a>
                                </li>
                                <li data-singlemodule="1">
                                    <a class="pro_img clearfix" title="护舒宝超净棉系列卫生巾日夜组合装84片（240mm*60p+ 夜用317mm 16p+超长夜用425mm*8p, 4-6个月用量）"
                                    target="_blank" href="//item.yhd.com/4874374.html" adtags="22094.47512199"
                                    data-advExp="0">
                                        <img alt="护舒宝超净棉系列卫生巾日夜组合装84片（240mm*60p+ 夜用317mm 16p+超长夜用425mm*8p, 4-6个月用量）"
                                        src="/home/gif/196.gif" original="picture/141.jpg" width="60" height="60">
                                        <div class="rank_detail">
                                            <p class="pro_name">
                                                护舒宝超净棉系列卫生巾日夜组合装84片（240mm*60p+ 夜用317mm 16p+超长夜用425mm*8p, 4-6个月用量）
                                            </p>
                                            <p class="pro_price" data-skuId="4874374">
                                                ¥
                                                <em>
                                                </em>
                                            </p>
                                        </div>
                                    </a>
                                </li>
                                <li data-singlemodule="1">
                                    <a class="pro_img clearfix" title="苏菲弹力贴身纤巧日用卫生巾230mm10片*8包+苏菲超熟睡夜用柔棉感420mm4片*4包（箱装）"
                                    target="_blank" href="//item.yhd.com/2977988.html" adtags="22095.47512200"
                                    data-advExp="0">
                                        <img alt="苏菲弹力贴身纤巧日用卫生巾230mm10片*8包+苏菲超熟睡夜用柔棉感420mm4片*4包（箱装）" src="/home/gif/196.gif"
                                        original="picture/142.jpg" width="60" height="60">
                                        <div class="rank_detail">
                                            <p class="pro_name">
                                                苏菲弹力贴身纤巧日用卫生巾230mm10片*8包+苏菲超熟睡夜用柔棉感420mm4片*4包（箱装）
                                            </p>
                                            <p class="pro_price" data-skuId="2977988">
                                                ¥
                                                <em>
                                                </em>
                                            </p>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </textarea>
            </div>
            <div class="wrap mod_columns_wrap mod_lift_floor clearfix">
                <div class="fl mod_columns_floor baby_toy" id="floorMYWJ" lazyLoad_textarea="textareaFloorMYWJ">
                    <textarea style="display:none;" autocomplete="off" id="textareaFloorMYWJ">
                        <div class="floor_tit clearfix">
                            <h4>
                                <a href="https://sale.yhd.com/act/VwKQZXJWq5Yj.html" title="母婴玩具" target="_blank"
                                data-ref="22215_47504291_1" clstag="pageclick|keycount|home_201709222|34">
                                    母婴玩具
                                    <em>
                                        &gt;
                                    </em>
                                </a>
                            </h4>
                            <div class="keywords">
                                <ul class="clearfix" clstag="pageclick|keycount|home_201709222|35">
                                    <li>
                                        <a title="童车安全" target="_blank" title="母婴玩具" href="//search.yhd.com/c0-0-1004602/"
                                        data-ref="22222_47519347_1">
                                            童车安全
                                        </a>
                                        |
                                    </li>
                                    <li>
                                        <a title="宝宝喂养" target="_blank" title="母婴玩具" href="//search.yhd.com/c0-0-1004603/"
                                        data-ref="22221_47519346_1">
                                            宝宝喂养
                                        </a>
                                        |
                                    </li>
                                    <li>
                                        <a title="洗护清洁" target="_blank" title="母婴玩具" href="//search.yhd.com/c0-0-1004604/"
                                        data-ref="22220_47519344_1">
                                            洗护清洁
                                        </a>
                                        |
                                    </li>
                                    <li>
                                        <a title="营养辅食" target="_blank" title="母婴玩具" href="//search.yhd.com/c0-0-1004517/"
                                        data-ref="22219_47519342_1">
                                            营养辅食
                                        </a>
                                        |
                                    </li>
                                    <li>
                                        <a title="玩具乐器" target="_blank" title="母婴玩具" href="//search.yhd.com/c0-0-1005085/"
                                        data-ref="22218_47519337_1">
                                            玩具乐器
                                        </a>
                                        |
                                    </li>
                                    <li>
                                        <a title="尿裤" target="_blank" title="母婴玩具" href="//search.yhd.com/c0-0-1004550/"
                                        data-ref="22217_47519336_1">
                                            尿裤
                                        </a>
                                        |
                                    </li>
                                    <li>
                                        <a title="奶粉" target="_blank" title="母婴玩具" href="//search.yhd.com/c0-0-1004488/"
                                        data-ref="22216_47519335_1">
                                            奶粉
                                        </a>
                                        |
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="clearfix">
                            <div class="left_slider">
                                <ul>
                                    <li class="cur" data-advId="22224">
                                        <a title="宝宝的营养菜单" href="https://sale.yhd.com/act/EnvHfPw6roIplLca.html"
                                        target="_blank" data-ref="22224_47546415_1" adtags="22224.47546415" data-advExp="0"
                                        clstag="pageclick|keycount|home_201709222|36">
                                            <p class="caption">
                                                营养辅食
                                            </p>
                                            <p class="sub_tit">
                                                宝宝的营养菜单
                                            </p>
                                            <img original="picture/143.jpg" src="/home/gif/196.gif" alt="营养辅食">
                                        </a>
                                    </li>
                                    <li data-advId="22225">
                                        <a title="尿裤联盟" href="//sale.yhd.com/act/zw3d0eMs5BPLV.html" target="_blank"
                                        data-ref="22225_47545822_1" adtags="22225.47545822" data-advExp="0" clstag="pageclick|keycount|home_201709222|37">
                                            <p class="caption">
                                                尿裤联盟
                                            </p>
                                            <p class="sub_tit">
                                                国产尿裤 宝妈智选
                                            </p>
                                            <img original="picture/144.jpg" src="/home/gif/196.gif" alt="尿裤联盟">
                                        </a>
                                    </li>
                                </ul>
                                <div class="slider_nav clearfix">
                                    <a href="javascript:;" class="cur" data-advId="22224">
                                        <em>
                                        </em>
                                    </a>
                                    <a href="javascript:;" data-advId="22225">
                                        <em>
                                        </em>
                                    </a>
                                </div>
                            </div>
                            <div class="pro_con">
                                <div class="pro_wrap">
                                    <a title="爆款直降" href="//sale.yhd.com/act/Mwrh4Iy0KP.html" target="_blank"
                                    data-ref="22226_47547708_1" adtags="22226.47547708" data-advExp="0" clstag="pageclick|keycount|home_201709222|39">
                                        <p class="pro_tit">
                                            奶粉大牌
                                        </p>
                                        <p class="pro_sub_tit">
                                            爆款直降
                                        </p>
                                        <img original="picture/145.jpg" src="/home/gif/196.gif" alt="奶粉大牌" width="105"
                                        height="105">
                                    </a>
                                </div>
                                <div class="pro_wrap">
                                    <a title="爆款直降" href="//sale.yhd.com/act/oQUqwegvP1W.html" target="_blank"
                                    data-ref="22228_47544463_1" adtags="22228.47544463" data-advExp="0" clstag="pageclick|keycount|home_201709222|40">
                                        <p class="pro_tit">
                                            母婴用品中心
                                        </p>
                                        <p class="pro_sub_tit">
                                            爆款直降
                                        </p>
                                        <img original="picture/146.jpg" src="/home/gif/196.gif" alt="母婴用品中心" width="105"
                                        height="105">
                                    </a>
                                </div>
                            </div>
                            <div class="pro_con">
                                <div class="pro_wrap" id="mywjAjaxDiv">
                                    <a title="裤爱宝贝" href="https://sale.yhd.com/act/swUepFVZgy4Em.html" target="_blank"
                                    data-ref="22227_47543844_1" adtags="22227.47543844" data-advExp="0" clstag="pageclick|keycount|home_201709222|41">
                                        <p class="pro_tit">
                                            裤爱宝贝
                                        </p>
                                        <p class="pro_sub_tit">
                                            爆款直降
                                        </p>
                                        <img original="picture/147.jpg" src="/home/gif/196.gif" alt="裤爱宝贝" width="105"
                                        height="105">
                                    </a>
                                </div>
                                <div class="pro_wrap">
                                    <a title="爆款直降" href="https://sale.yhd.com/act/txK7CzSgyF3L.html" target="_blank"
                                    adtags="22229.47544868" data-advExp="0" data-ref="22229_47544868_1" clstag="pageclick|keycount|home_201709222|42">
                                        <p class="pro_tit">
                                            自营玩具
                                        </p>
                                        <p class="pro_sub_tit">
                                            爆款直降
                                        </p>
                                        <img original="picture/148.jpg" src="/home/gif/196.gif" alt="自营玩具" width="105"
                                        height="105">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </textarea>
                </div>
                <div class="fr mod_columns_floor kitchen_clean" id="floorCWQJ" lazyLoad_textarea="textareaFloorCWQJ">
                    <textarea style="display:none;" autocomplete="off" id="textareaFloorCWQJ">
                        <div class="floor_tit clearfix">
                            <h4>
                                <a href="//sale.yhd.com/act/YwoDQK8jS6.html" target="_blank" title="厨卫清洁"
                                data-ref="22230_47519216_1" clstag="pageclick|keycount|home_201709222|43">
                                    厨卫清洁
                                    <em>
                                        &gt;
                                    </em>
                                </a>
                            </h4>
                            <div class="keywords">
                                <ul class="clearfix" clstag="pageclick|keycount|home_201709222|44">
                                    <li>
                                        <a title="皮具护理" target="_blank" title="厨卫清洁" href="//search.yhd.com/c1670-0-0/mbname-b/a-s1-v0-p1-price-d0-f0-m1-rt0-pid-mid0-color-size-k/"
                                        data-ref="22237_47504142_1">
                                            皮具护理
                                        </a>
                                        |
                                    </li>
                                    <li>
                                        <a title="一次性用品" target="_blank" title="厨卫清洁" href="//search.yhd.com/c11970-0-0/mbname-b/a-s1-v0-p1-price-d0-f0-m1-rt0-pid-mid0-color-size-k/"
                                        data-ref="22236_47504145_1">
                                            一次性用品
                                        </a>
                                        |
                                    </li>
                                    <li>
                                        <a title="清洁工具" target="_blank" title="厨卫清洁" href="//search.yhd.com/c1667-0-0/mbname-b/a-s1-v0-p1-price-d0-f0-m1-rt0-pid-mid0-color-size-k/"
                                        data-ref="22234_47504162_1">
                                            清洁工具
                                        </a>
                                        |
                                    </li>
                                    <li>
                                        <a title="家庭清洁" target="_blank" title="厨卫清洁" href="//search.yhd.com/c1663-0-0/mbname-b/a-s1-v0-p1-price-d0-f0-m1-rt0-pid-mid0-color-size-k/"
                                        data-ref="22233_47519026_1">
                                            家庭清洁
                                        </a>
                                        |
                                    </li>
                                    <li>
                                        <a title="纸品湿巾" target="_blank" title="厨卫清洁" href="//search.yhd.com/c1671-0-0"
                                        data-ref="22232_47519025_1">
                                            纸品湿巾
                                        </a>
                                        |
                                    </li>
                                    <li>
                                        <a title="洗衣液" target="_blank" title="厨卫清洁" href="//search.yhd.com/c1662-0-0/mbname-b/a-s1-v0-p1-price-d0-f0-m1-rt0-pid-mid0-color-size-k/"
                                        data-ref="22231_47519024_1">
                                            洗衣液
                                        </a>
                                        |
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="clearfix">
                            <div class="left_slider">
                                <ul>
                                    <li class="cur" data-advId="22238">
                                        <a title="只为品质生活" href="//sale.yhd.com/act/GIHBMdaFRL0msCh.html" target="_blank"
                                        adtags="22238.47545821" data-advExp="0" data-ref="22238_47545821_1" clstag="pageclick|keycount|home_201709222|45">
                                            <p class="caption">
                                                维达
                                            </p>
                                            <p class="sub_tit">
                                                只为品质生活
                                            </p>
                                            <img original="picture/149.jpg" src="/home/gif/196.gif" alt="维达">
                                        </a>
                                    </li>
                                    <li data-advId="22239">
                                        <a title="爆款直降" href="https://sale.yhd.com/act/K0R3fJTqroMe.html" target="_blank"
                                        adtags="22239.47545827" data-advExp="0" data-ref="22239_47545827_1" clstag="pageclick|keycount|home_201709222|46">
                                            <p class="caption">
                                                蓝月亮
                                            </p>
                                            <p class="sub_tit">
                                                爆款直降
                                            </p>
                                            <img original="picture/150.jpg" src="/home/gif/196.gif" alt="蓝月亮">
                                        </a>
                                    </li>
                                </ul>
                                <div class="slider_nav clearfix">
                                    <a href="javascript:;" class="cur" data-advId="22238">
                                        <em>
                                        </em>
                                    </a>
                                    <a href="javascript:;" data-advId="22239">
                                        <em>
                                        </em>
                                    </a>
                                </div>
                            </div>
                            <div class="pro_con">
                                <div class="pro_wrap">
                                    <a title="量贩享好价" href="https://sale.yhd.com/act/fsPQJ2olauLMDXy.html"
                                    target="_blank" adtags="22241.47545824" data-advExp="0" data-ref="22241_47545824_1"
                                    clstag="pageclick|keycount|home_201709222|48">
                                        <p class="pro_tit">
                                            纸品馆
                                        </p>
                                        <p class="pro_sub_tit">
                                            爆款直降
                                        </p>
                                        <img original="picture/151.jpg" src="/home/gif/196.gif" alt="纸品馆" width="105"
                                        height="105">
                                    </a>
                                </div>
                                <div class="pro_wrap">
                                    <a title="超值折扣" href="https://sale.yhd.com/act/7G0cPkvKs64yIO.html" target="_blank"
                                    adtags="22243.47545825" data-advExp="0" data-ref="22243_47545825_1" clstag="pageclick|keycount|home_201709222|49">
                                        <p class="pro_tit">
                                            衣清馆
                                        </p>
                                        <p class="pro_sub_tit">
                                            超值折扣
                                        </p>
                                        <img original="picture/152.jpg" src="/home/gif/196.gif" alt="衣清馆" width="105"
                                        height="105">
                                    </a>
                                </div>
                            </div>
                            <div class="pro_con">
                                <div class="pro_wrap">
                                    <a title="家庭清洁 爆款盛宴" href="https://sale.yhd.com/act/0KylxMVjGTkqw62.html"
                                    target="_blank" adtags="22242.47545823" data-advExp="0" data-ref="22242_47545823_1"
                                    clstag="pageclick|keycount|home_201709222|50">
                                        <p class="pro_tit">
                                            家清馆
                                        </p>
                                        <p class="pro_sub_tit">
                                            家庭清洁
                                        </p>
                                        <img original="picture/153.jpg" src="/home/gif/196.gif" alt="家清馆" width="105"
                                        height="105">
                                    </a>
                                </div>
                                <div class="pro_wrap" id="cwqjAjaxDiv">
                                    <a title="爆款直降" href="https://sale.yhd.com/act/WKuVAxlFXZRLfn.html" target="_blank"
                                    adtags="22244.47545826" data-advExp="0" data-ref="22244_47545826_1" clstag="pageclick|keycount|home_201709222|51">
                                        <p class="pro_tit">
                                            清洁工具
                                        </p>
                                        <p class="pro_sub_tit">
                                            爆款直降
                                        </p>
                                        <img original="picture/154.jpg" src="/home/gif/196.gif" alt="清洁工具" width="105"
                                        height="105">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </textarea>
                </div>
            </div>
            <div class="wrap mod_lift_floor mod_index_floor clearfix home_life" id="floorJJSH"
            lazyLoad_textarea="textareaFloorJJSH" style="height:430px;">
                <textarea style="display:none;" autocomplete="off" id="textareaFloorJJSH">
                    <div class="left_con" clstag="pageclick|keycount|home_201709222|66">
                        <h4>
                            <a title="HOME" href="https://sale.yhd.com/act/LPHwt8z1A5x.html" target="_blank">
                                家居生活
                                <i>
                                    &gt;
                                </i>
                            </a>
                        </h4>
                        <p class="en_tit">
                            HOME
                        </p>
                        <div class="floor_silder">
                            <ul>
                                <li class="img_first" data-advId="22098">
                                    <a title="让家更整洁" target="_blank" href="//mall.yhd.com/index-48569.html"
                                    adtags="22098.47531638" data-advExp="0">
                                        <p class="caption">
                                            居家收纳
                                        </p>
                                        <p class="sub_tit">
                                            爆款来袭
                                        </p>
                                        <img width="130" height="130" original="picture/155.jpg" src="/home/gif/196.gif"
                                        alt="居家收纳">
                                    </a>
                                    <div class="color_mask">
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="comment">
                            <div class="comment_left">
                                <i class="index_iconfont">
                                    &#xe663;
                                </i>
                            </div>
                            <div class="comment_list">
                                <ul>
                                    <li class="ellipsis">
                                        <a title="小小收纳大学问" target="_blank" href="https://search.yhd.com/c0-0/k%25E6%2594%25B6%25E7%25BA%25B3/">
                                            小小收纳大学问
                                        </a>
                                    </li>
                                    <li class="ellipsis">
                                        <a title="灯饰点亮生活" target="_blank" href="//search.yhd.com/c0-0/k%25E7%2581%25AF%25E9%25A5%25B0/">
                                            灯饰点亮生活
                                        </a>
                                    </li>
                                    <li class="ellipsis">
                                        <a title="极简 悠生活" target="_blank" href="//search.yhd.com/c0-0/k%25E6%259E%2581%25E7%25AE%2580%25E5%25AE%25B6%25E5%2585%25B7/">
                                            极简 悠生活
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="center_con">
                        <div class="keywords" clstag="pageclick|keycount|home_201709222|67">
                            <ul class="clearfix">
                                <li>
                                    |
                                    <a title="床上用品" target="_blank" href="//search.yhd.com/c0-0-1004100/">
                                        床上用品
                                    </a>
                                </li>
                                <li>
                                    |
                                    <a title="厨具锅具" target="_blank" href="//search.yhd.com/c0-0/k%25E9%2594%2585%25E5%2585%25B7/">
                                        厨具锅具
                                    </a>
                                </li>
                                <li>
                                    |
                                    <a title="厨房装修" target="_blank" href="//search.yhd.com/c0-0-1004369/">
                                        厨房装修
                                    </a>
                                </li>
                                <li>
                                    |
                                    <a title="收纳洗晒" target="_blank" href="https://search.yhd.com/c0-0-1004184/">
                                        收纳洗晒
                                    </a>
                                </li>
                                <li>
                                    |
                                    <a title="大牌家具" target="_blank" href="//search.yhd.com/c0-0/k%E5%AE%B6%E5%85%B7/">
                                        大牌家具
                                    </a>
                                </li>
                                <li>
                                    |
                                    <a title="汽车用品" target="_blank" href="//search.yhd.com/c6745-0-0/mbname-b/a-s1-v0-p1-price-d0-f0-m1-rt0-pid-mid0-color-size-k/">
                                        汽车用品
                                    </a>
                                </li>
                                <li>
                                    |
                                    <a title="鲜花" target="_blank" href="//search.yhd.com/c0-0/k%25E7%25A4%25BC%25E5%2593%2581%25E9%25B2%259C%25E8%258A%25B1/">
                                        鲜花
                                    </a>
                                </li>
                                <li>
                                    |
                                    <a title="灯具五金" target="_blank" href="//search.yhd.com/c0-0/k%E7%81%AF%E5%85%B7%E4%BA%94%E9%87%91">
                                        灯具五金
                                    </a>
                                </li>
                                <li>
                                    |
                                    <a title="开关插座" target="_blank" href="//search.yhd.com/c9926-0-0">
                                        开关插座
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="clearfix">
                            <div class="pro_wrap">
                                <a title="爆款直降" target="_blank" href="https://sale.yhd.com/act/LPHwt8z1A5x.html"
                                adtags="22112.47546945" data-advExp="0" adtags="22112.47546945" data-advExp="0"
                                clstag="pageclick|keycount|home_201709222|68">
                                    <p class="pro_tit">
                                        爆款直降
                                    </p>
                                    <p class="pro_sub_tit">
                                        爆款直降
                                    </p>
                                    <img src="/home/gif/196.gif" alt="爆款直降" original="images/23.png" width="130"
                                    height="130">
                                </a>
                            </div>
                            <div class="pro_wrap">
                                <a title="爆款直降" target="_blank" href="https://sale.yhd.com/act/BfsZ0pzxIXEN.html"
                                adtags="22113.47541101" data-advExp="0" adtags="22113.47541101" data-advExp="0"
                                clstag="pageclick|keycount|home_201709222|69">
                                    <p class="pro_tit">
                                        车品狂欢
                                    </p>
                                    <p class="pro_sub_tit">
                                        爆款直降
                                    </p>
                                    <img src="/home/gif/196.gif" alt="车品狂欢" original="picture/156.jpg" width="130"
                                    height="130">
                                </a>
                            </div>
                            <div class="pro_wrap">
                                <a title="满400减30" target="_blank" href="https://sale.yhd.com/act/aTHqliudIGJK.html"
                                adtags="22114.47544586" data-advExp="0" adtags="22114.47544586" data-advExp="0"
                                clstag="pageclick|keycount|home_201709222|70">
                                    <p class="pro_tit">
                                        厨房好货 聚惠来袭
                                    </p>
                                    <p class="pro_sub_tit">
                                        满400减30
                                    </p>
                                    <img src="/home/gif/196.gif" alt="厨房好货 聚惠来袭" original="picture/157.jpg" width="130"
                                    height="130">
                                </a>
                            </div>
                        </div>
                        <div class="pro_con clearfix">
                            <div class="pro_wrap">
                                <a title="爆款直降" target="_blank" href="https://sale.yhd.com/act/lASYR4DMBQKdxOh.html"
                                adtags="22115.47514918" data-advExp="0" clstag="pageclick|keycount|home_201709222|71">
                                    <p class="pro_tit">
                                        居家生活
                                    </p>
                                    <p class="pro_sub_tit">
                                        爆款直降
                                    </p>
                                    <img src="/home/gif/196.gif" alt="居家生活" original="images/24.png" width="252"
                                    height="194">
                                </a>
                            </div>
                            <div class="pro_wrap">
                                <a title="夏日家居购物季" target="_blank" href="https://sale.yhd.com/act/PBcUDgz4t6IZSMF.html"
                                adtags="22116.47507410" data-advExp="0" clstag="pageclick|keycount|home_201709222|72">
                                    <p class="pro_tit">
                                        品质悦享生活
                                    </p>
                                    <p class="pro_sub_tit">
                                        爆款直降
                                    </p>
                                    <img src="/home/gif/196.gif" alt="品质悦享生活" original="images/25.png" width="252"
                                    height="194">
                                </a>
                            </div>
                            <div class="pro_wrap" id="jjshAjaxDiv">
                                <a title="精品家具" target="_blank" href="//mall.yhd.com/index-1000001834.html"
                                adtags="22117.47511432" data-advExp="0" clstag="pageclick|keycount|home_201709222|73">
                                    <p class="pro_tit">
                                        家具购物节
                                    </p>
                                    <p class="pro_sub_tit">
                                        好物精选
                                    </p>
                                    <img src="/home/gif/196.gif" alt="家具购物节" original="picture/158.jpg" width="252"
                                    height="194">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="hot_con">
                        <p class="hot_tit">
                            热门商品
                        </p>
                        <div class="rank_list" clstag="pageclick|keycount|home_201709222|74">
                            <ul>
                                <li data-singlemodule="1">
                                    <a class="pro_img clearfix" title="富安娜（FUANNA）出品圣之花 夏凉席子可折叠冰丝席三件套空调席防滑绑带 冰丝提花席 雅顿1.5米床 咖啡"
                                    target="_blank" href="//item.yhd.com/2371802.html" adtags="22118.47503940"
                                    data-advExp="0">
                                        <img alt="富安娜（FUANNA）出品圣之花 夏凉席子可折叠冰丝席三件套空调席防滑绑带 冰丝提花席 雅顿1.5米床 咖啡" src="/home/gif/196.gif"
                                        original="picture/159.jpg" width="60" height="60">
                                        <i>
                                            1
                                        </i>
                                        <div class="rank_detail">
                                            <p class="pro_name">
                                                富安娜（FUANNA）出品圣之花 夏凉席子可折叠冰丝席三件套空调席防滑绑带 冰丝提花席 雅顿1.5米床 咖啡
                                            </p>
                                            <p class="pro_price" data-skuId="2371802">
                                                ¥
                                                <em>
                                                </em>
                                            </p>
                                        </div>
                                    </a>
                                </li>
                                <li data-singlemodule="1">
                                    <a class="pro_img clearfix" title="诺伊曼（noyoke）枕头枕芯 大按摩颗粒泰国乳胶枕头 成人枕" target="_blank"
                                    href="//item.yhd.com/2314853.html" adtags="22119.47519130" data-advExp="0">
                                        <img alt="诺伊曼（noyoke）枕头枕芯 大按摩颗粒泰国乳胶枕头 成人枕" src="/home/gif/196.gif" original="picture/160.jpg"
                                        width="60" height="60">
                                        <i class="rank_second">
                                            2
                                        </i>
                                        <div class="rank_detail">
                                            <p class="pro_name">
                                                诺伊曼（noyoke）枕头枕芯 大按摩颗粒泰国乳胶枕头 成人枕
                                            </p>
                                            <p class="pro_price" data-skuId="2314853">
                                                ¥
                                                <em>
                                                </em>
                                            </p>
                                        </div>
                                    </a>
                                </li>
                                <li data-singlemodule="1">
                                    <a class="pro_img clearfix" title="天堂伞 加大加固强力拒水一甩干三折商务伞3311E碰藏青色" target="_blank"
                                    href="//item.yhd.com/4865226.html" adtags="22120.47512314" data-advExp="0">
                                        <img alt="天堂伞 加大加固强力拒水一甩干三折商务伞3311E碰藏青色" src="/home/gif/196.gif" original="picture/161.jpg"
                                        width="60" height="60">
                                        <i class="rank_third">
                                            3
                                        </i>
                                        <div class="rank_detail">
                                            <p class="pro_name">
                                                天堂伞 加大加固强力拒水一甩干三折商务伞3311E碰藏青色
                                            </p>
                                            <p class="pro_price" data-skuId="4865226">
                                                ¥
                                                <em>
                                                </em>
                                            </p>
                                        </div>
                                    </a>
                                </li>
                                <li data-singlemodule="1">
                                    <a class="pro_img clearfix" title="宜眠坊（ESF）床垫 席梦思弹簧床垫 软硬适中 J01 1.8*2.0*0.2米"
                                    target="_blank" href="//item.yhd.com/1317235.html" adtags="22121.47504972"
                                    data-advExp="0">
                                        <img alt="宜眠坊（ESF）床垫 席梦思弹簧床垫 软硬适中 J01 1.8*2.0*0.2米" src="/home/gif/196.gif"
                                        original="picture/162.jpg" width="60" height="60">
                                        <div class="rank_detail">
                                            <p class="pro_name">
                                                宜眠坊（ESF）床垫 席梦思弹簧床垫 软硬适中 J01 1.8*2.0*0.2米
                                            </p>
                                            <p class="pro_price" data-skuId="1317235">
                                                ¥
                                                <em>
                                                </em>
                                            </p>
                                        </div>
                                    </a>
                                </li>
                                <li data-singlemodule="1">
                                    <a class="pro_img clearfix" title="HD LED吸顶灯24W雪花系列三段调光卧室餐厅吸顶灯圆形现代简约"
                                    target="_blank" href="//item.yhd.com/1599502.html" adtags="22122.47519109"
                                    data-advExp="0">
                                        <img alt="HD LED吸顶灯24W雪花系列三段调光卧室餐厅吸顶灯圆形现代简约" src="/home/gif/196.gif" original="picture/163.jpg"
                                        width="60" height="60">
                                        <div class="rank_detail">
                                            <p class="pro_name">
                                                HD LED吸顶灯24W雪花系列三段调光卧室餐厅吸顶灯圆形现代简约
                                            </p>
                                            <p class="pro_price" data-skuId="1599502">
                                                ¥
                                                <em>
                                                </em>
                                            </p>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </textarea>
            </div>
            <div class="wrap mod_lift_floor mod_index_floor clearfix phone_electric"
            id="floorSJJD" lazyLoad_textarea="textareaFloorSJJD" style="height:430px;">
                <textarea style="display:none;" autocomplete="off" id="textareaFloorSJJD">
                    <div class="left_con" clstag="pageclick|keycount|home_201709222|75">
                        <h4>
                            <a title="智能生活" href="https://sale.yhd.com/act/PnGHmKZ4u16pab.html" target="_blank">
                                手机家电
                                <i>
                                    &gt;
                                </i>
                            </a>
                        </h4>
                        <p class="en_tit">
                            智能生活
                        </p>
                        <div class="floor_silder">
                            <ul>
                                <li class="img_first" data-advId="22124">
                                    <a title="指尖世界杯" target="_blank" href="//sale.yhd.com/act/F5eg1rZJnIGBW8YA.html"
                                    adtags="22124.47541887" data-advExp="0">
                                        <p class="caption">
                                            大牌新品欢乐购
                                        </p>
                                        <p class="sub_tit">
                                            爆款直降1000+
                                        </p>
                                        <img width="130" height="130" original="images/26.png" src="/home/gif/196.gif"
                                        alt="大牌新品欢乐购">
                                    </a>
                                    <div class="color_mask">
                                    </div>
                                </li>
                                <li class="img_second" data-advId="22125">
                                    <a title="精选爆款" target="_blank" href="//search.yhd.com/c652-0-0" adtags="22125.47531759"
                                    data-advExp="0">
                                        <p class="caption">
                                            数码好货
                                        </p>
                                        <p class="sub_tit">
                                            精选爆款
                                        </p>
                                        <img width="130" height="130" original="picture/164.jpg" src="/home/gif/196.gif"
                                        alt="数码好货">
                                    </a>
                                    <div class="color_mask">
                                    </div>
                                </li>
                                <li class="img_third" data-advId="22126">
                                    <a title="领券最高减1000" target="_blank" href="https://sale.yhd.com/act/aPxu6LYhiDGbc.html"
                                    adtags="22126.47541993" data-advExp="0">
                                        <p class="caption">
                                            想要清凉一夏
                                        </p>
                                        <p class="sub_tit">
                                            领券最高减1000
                                        </p>
                                        <img width="130" height="130" original="images/27.png" src="/home/gif/196.gif"
                                        alt="想要清凉一夏">
                                    </a>
                                    <div class="color_mask">
                                    </div>
                                </li>
                            </ul>
                            <div class="turn_show clearfix">
                                <div class="prev_btn index_iconfont">
                                    &#xe62e;
                                </div>
                                <div class="show_num">
                                    <span>
                                        1
                                    </span>
                                    /
                                    <em>
                                    </em>
                                </div>
                                <div class="next_btn index_iconfont">
                                    &#xe629;
                                </div>
                            </div>
                        </div>
                        <div class="comment">
                            <div class="comment_left">
                                <i class="index_iconfont">
                                    &#xe663;
                                </i>
                            </div>
                            <div class="comment_list" data-tpc="SJJD_CJG">
                                <ul>
                                    <li class="ellipsis">
                                        <a title="品质生活选智能" target="_blank" href="//search.yhd.com/c12345-0-0/mbname-b/a-s1-v4-p1-price-d0-f0d6-m1-rt0-pid-mid0-color-size-k/">
                                            品质生活选智能
                                        </a>
                                    </li>
                                    <li class="ellipsis">
                                        <a title="享受生活" target="_blank" href="//mall.yhd.com/index-1000001281.html">
                                            美的厨房美的享受
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="center_con">
                        <div class="keywords" clstag="pageclick|keycount|home_201709222|76">
                            <ul class="clearfix">
                                <li>
                                    |
                                    <a title="iPhone" target="_blank" href="//search.yhd.com/c0-0/mbnameApple-b170258/a-s1-v4-p1-price-d0-f0-m1-rt0-pid-mid0-color-size-k%E6%89%8B%E6%9C%BA/">
                                        iPhone
                                    </a>
                                </li>
                                <li>
                                    |
                                    <a title="荣耀" target="_blank" href="//search.yhd.com/c0-0/k%25E8%258D%25A3%25E8%2580%2580/">
                                        荣耀
                                    </a>
                                </li>
                                <li>
                                    |
                                    <a title="小米/MI" target="_blank" href="//search.yhd.com/c655-0-0/mbname%E5%B0%8F%E7%B1%B3%EF%BC%88MI%EF%BC%89-b18374/a-s1-v4-p1-price-d0-f0-m1-rt0-pid-mid0-color-size-k/">
                                        小米/MI
                                    </a>
                                </li>
                                <li>
                                    |
                                    <a title="华为" target="_blank" href="//search.yhd.com/c0-0/mbname-b/a-s1-v4-p1-price-d0-f06-m1-rt0-pid-mid0-color-size-k%E5%8D%8E%E4%B8%BA/">
                                        华为
                                    </a>
                                </li>
                                <li>
                                    |
                                    <a title="轻薄笔记本" target="_blank" href="//search.yhd.com/c672-0-0/mbname-b/a90357::1107-s1-v4-p1-price-d0-f0-m1-rt0-pid-mid0-color-size-k/">
                                        轻薄笔记本
                                    </a>
                                </li>
                                <li>
                                    |
                                    <a title="鼠标" target="_blank" href="//search.yhd.com/c0-0-1003334/">
                                        鼠标
                                    </a>
                                </li>
                                <li>
                                    |
                                    <a title="智能设备" target="_blank" href="//search.yhd.com/c12345-0-0/mbname-b/a-s1-v0-p1-price-d0-f0b-m1-rt0-pid-mid0-color-size-k/">
                                        智能设备
                                    </a>
                                </li>
                                <li>
                                    |
                                    <a title="电饭煲" target="_blank" href="//search.yhd.com/c0-0/k%25E7%2594%25B5%25E9%25A5%25AD%25E7%2585%25B2/">
                                        电饭煲
                                    </a>
                                </li>
                                <li>
                                    |
                                    <a title="空调" target="_blank" href="//search.yhd.com/c870-0-0/mbname-b/a-s1-v0-p1-price-d0-f0-m1-rt0-pid-mid0-color-size-k/">
                                        空调
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="clearfix" data-tpc="SJJD_HDGGW_ST">
                            <div class="pro_wrap">
                                <a title="低价献礼" target="_blank" href="//sale.yhd.com/act/FfbteO1dKAY7h.html"
                                adtags="22139.47541131" data-advExp="0" clstag="pageclick|keycount|home_201709222|77">
                                    <p class="pro_tit">
                                        Apple产品专营
                                    </p>
                                    <p class="pro_sub_tit">
                                        爆款直降千元
                                    </p>
                                    <img src="/home/gif/196.gif" alt="Apple产品专营" original="images/28.png" width="130"
                                    height="130">
                                </a>
                            </div>
                            <div class="pro_wrap">
                                <a title="爆款每满千减百" target="_blank" href="//sale.yhd.com/act/GNFLgUyQZjwfP.html"
                                adtags="22140.47545359" data-advExp="0" clstag="pageclick|keycount|home_201709222|78">
                                    <p class="pro_tit">
                                        电脑办公
                                    </p>
                                    <p class="pro_sub_tit">
                                        爆款每满千减百
                                    </p>
                                    <img src="/home/gif/196.gif" alt="电脑办公" original="images/29.png" width="130"
                                    height="130">
                                </a>
                            </div>
                            <div class="pro_wrap">
                                <a title="爆款直降1000元" target="_blank" href="//sale.yhd.com/act/JLNR8kxFTdbCEh0.html"
                                adtags="22141.47545141" data-advExp="0" clstag="pageclick|keycount|home_201709222|79">
                                    <p class="pro_tit">
                                        狂欢再续
                                    </p>
                                    <p class="pro_sub_tit">
                                        爆款直降1000元
                                    </p>
                                    <img src="/home/gif/196.gif" alt="狂欢再续" original="picture/165.jpg" width="130"
                                    height="130">
                                </a>
                            </div>
                        </div>
                        <div class="clearfix" data-tpc="SJJD_HDGGW_XT">
                            <div class="pro_wrap">
                                <a title="领券最高减1000" target="_blank" href="https://sale.yhd.com/act/cdyl8k3TvNjSJgu.html"
                                adtags="22142.47541236" data-advExp="0" clstag="pageclick|keycount|home_201709222|80">
                                    <p class="pro_tit">
                                        优选家电
                                    </p>
                                    <p class="pro_sub_tit">
                                        领券最高减1000
                                    </p>
                                    <img src="/home/gif/196.gif" alt="优选家电" original="picture/166.jpg" width="130"
                                    height="130">
                                </a>
                            </div>
                            <div class="pro_wrap">
                                <a title="荣耀超级品牌日" target="_blank" href="//sale.yhd.com/act/2fbswkEa5c.html"
                                adtags="22143.47541132" data-advExp="0" clstag="pageclick|keycount|home_201709222|81">
                                    <p class="pro_tit">
                                        荣耀超级品牌日
                                    </p>
                                    <p class="pro_sub_tit">
                                        爆品最高立省500
                                    </p>
                                    <img src="/home/gif/196.gif" alt="荣耀超级品牌日" original="images/30.png" width="130"
                                    height="130">
                                </a>
                            </div>
                            <div class="brand_wrap">
                                <div class="brand_cover">
                                    <ul>
                                        <li>
                                            <a title="一加手机" target="_blank" href="//sale.yhd.com/act/iHDGLKNX3y5bcB4.html"
                                            adtags="22144.47545830" data-advExp="0" clstag="pageclick|keycount|home_201709222|82">
                                                <img src="/home/gif/196.gif" alt="一加手机" original="picture/167.jpg">
                                            </a>
                                        </li>
                                        <li>
                                            <a title="佳能官方旗舰店" target="_blank" href="//mall.yhd.com/index-1000000877.html"
                                            adtags="22145.47516875" data-advExp="0" clstag="pageclick|keycount|home_201709222|83">
                                                <img src="/home/gif/196.gif" alt="佳能官方旗舰店" original="picture/168.jpg">
                                            </a>
                                        </li>
                                        <li>
                                            <a title="Apple产品专营店" target="_blank" href="//sale.yhd.com/act/FfbteO1dKAY7h.html"
                                            adtags="22146.47504202" data-advExp="0" clstag="pageclick|keycount|home_201709222|84">
                                                <img src="/home/gif/196.gif" alt="Apple产品专营店" original="picture/169.jpg">
                                            </a>
                                        </li>
                                        <li>
                                            <a title="美的风扇" target="_blank" href="//mall.yhd.com/index-1000002583.html"
                                            adtags="22147.47504284" data-advExp="0" clstag="pageclick|keycount|home_201709222|85">
                                                <img src="/home/gif/196.gif" alt="美的风扇" original="picture/170.jpg">
                                            </a>
                                        </li>
                                        <li>
                                            <a title="飞利浦" target="_blank" href="//mall.yhd.com/index-1000003691.html"
                                            adtags="22148.47520592" data-advExp="0" clstag="pageclick|keycount|home_201709222|86">
                                                <img src="/home/gif/196.gif" alt="飞利浦" original="gif/314.gif">
                                            </a>
                                        </li>
                                        <li>
                                            <a title="格力" target="_blank" href="//mall.yhd.com/index-1000003445.html"
                                            adtags="22149.47545832" data-advExp="0" clstag="pageclick|keycount|home_201709222|87">
                                                <img src="/home/gif/196.gif" alt="格力" original="picture/171.jpg">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="hot_con">
                        <p class="hot_tit">
                            热门商品
                        </p>
                        <div class="rank_list" clstag="pageclick|keycount|home_201709222|88">
                            <ul>
                                <li data-singlemodule="1">
                                    <a class="pro_img clearfix" title="华为 HUAWEI Mate 10 6GB+128GB 亮黑色 移动联通电信4G手机 双卡双待"
                                    target="_blank" href="//item.yhd.com/5544038.html" adtags="22150.47545829"
                                    data-advExp="0">
                                        <img alt="华为 HUAWEI Mate 10 6GB+128GB 亮黑色 移动联通电信4G手机 双卡双待" src="/home/gif/196.gif"
                                        original="picture/172.jpg" width="60" height="60">
                                        <i>
                                            1
                                        </i>
                                        <div class="rank_detail">
                                            <p class="pro_name">
                                                华为 HUAWEI Mate 10 6GB+128GB 亮黑色 移动联通电信4G手机 双卡双待
                                            </p>
                                            <p class="pro_price" data-skuId="5544038">
                                                ¥
                                                <em>
                                                </em>
                                            </p>
                                        </div>
                                    </a>
                                </li>
                                <li data-singlemodule="1">
                                    <a class="pro_img clearfix" title="Apple iPhone 8 Plus (A1864) 64GB 深空灰色 移动联通电信4G手机"
                                    target="_blank" href="//item.yhd.com/5089275.html" adtags="22151.47545828"
                                    data-advExp="0">
                                        <img alt="Apple iPhone 8 Plus (A1864) 64GB 深空灰色 移动联通电信4G手机" src="/home/gif/196.gif"
                                        original="picture/173.jpg" width="60" height="60">
                                        <i class="rank_second">
                                            2
                                        </i>
                                        <div class="rank_detail">
                                            <p class="pro_name">
                                                Apple iPhone 8 Plus (A1864) 64GB 深空灰色 移动联通电信4G手机
                                            </p>
                                            <p class="pro_price" data-skuId="5089275">
                                                ¥
                                                <em>
                                                </em>
                                            </p>
                                        </div>
                                    </a>
                                </li>
                                <li data-singlemodule="1">
                                    <a class="pro_img clearfix" title="Apple iPad 平板电脑 2018年新款9.7英寸（32G WLAN版/A10 芯片/Retina显示屏/Touch ID技术 MRJN2CH/A）金色"
                                    target="_blank" href="//item.yhd.com/6749532.html" adtags="22152.47512450"
                                    data-advExp="0">
                                        <img alt="Apple iPad 平板电脑 2018年新款9.7英寸（32G WLAN版/A10 芯片/Retina显示屏/Touch ID技术 MRJN2CH/A）金色"
                                        src="/home/gif/196.gif" original="picture/174.jpg" width="60" height="60">
                                        <i class="rank_third">
                                            3
                                        </i>
                                        <div class="rank_detail">
                                            <p class="pro_name">
                                                Apple iPad 平板电脑 2018年新款9.7英寸（32G WLAN版/A10 芯片/Retina显示屏/Touch ID技术 MRJN2CH/A）金色
                                            </p>
                                            <p class="pro_price" data-skuId="6749532">
                                                ¥
                                                <em>
                                                </em>
                                            </p>
                                        </div>
                                    </a>
                                </li>
                                <li data-singlemodule="1">
                                    <a class="pro_img clearfix" title="佳能（Canon）EOS 80D 单反套机（EF-S 18-200mm f/3.5-5.6 IS） 2420万有效像素 45点十字对焦 WIFI/NFC"
                                    target="_blank" href="//item.yhd.com/2554856.html" adtags="22153.47528460"
                                    data-advExp="0">
                                        <img alt="佳能（Canon）EOS 80D 单反套机（EF-S 18-200mm f/3.5-5.6 IS） 2420万有效像素 45点十字对焦 WIFI/NFC"
                                        src="/home/gif/196.gif" original="picture/175.jpg" width="60" height="60">
                                        <div class="rank_detail">
                                            <p class="pro_name">
                                                佳能（Canon）EOS 80D 单反套机（EF-S 18-200mm f/3.5-5.6 IS） 2420万有效像素 45点十字对焦 WIFI/NFC
                                            </p>
                                            <p class="pro_price" data-skuId="2554856">
                                                ¥
                                                <em>
                                                </em>
                                            </p>
                                        </div>
                                    </a>
                                </li>
                                <li data-singlemodule="1">
                                    <a class="pro_img clearfix" title="美的（Midea）大1匹 变频 智弧 冷暖 智能壁挂式空调 KFR-26GW/WDAA3@"
                                    target="_blank" href="//item.yhd.com/2883289.html" adtags="22154.47522601"
                                    data-advExp="0">
                                        <img alt="美的（Midea）大1匹 变频 智弧 冷暖 智能壁挂式空调 KFR-26GW/WDAA3@" src="/home/gif/196.gif"
                                        original="picture/176.jpg" width="60" height="60">
                                        <div class="rank_detail">
                                            <p class="pro_name">
                                                美的（Midea）大1匹 变频 智弧 冷暖 智能壁挂式空调 KFR-26GW/WDAA3@
                                            </p>
                                            <p class="pro_price" data-skuId="2883289">
                                                ¥
                                                <em>
                                                </em>
                                            </p>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </textarea>
            </div>
            <div class="wrap mod_lift_floor mod_index_floor clearfix popular_store"
            id="floorLXBH" lazyLoad_textarea="textareaFloorLXBH" style="height:430px;">
                <textarea style="display:none;" autocomplete="off" id="textareaFloorLXBH">
                    <div class="left_con" clstag="pageclick|keycount|home_201709222|89">
                        <h4>
                            <a title="时尚女装" href="https://search.yhd.com/c0-0/k%25E5%25A5%25B3%25E8%25A3%2585/"
                            target="_blank">
                                服饰鞋包
                                <i>
                                    &gt;
                                </i>
                            </a>
                        </h4>
                        <p class="en_tit">
                            时尚女装
                        </p>
                        <div class="floor_silder">
                            <ul>
                                <li class="img_first" data-advId="22156">
                                    <a title="低至39元" target="_blank" href="//search.yhd.com/c0-0/k%25E7%2594%25B7%25E8%25A3%2585%25E5%25A4%258F/"
                                    adtags="22156.47544479" data-advExp="0">
                                        <p class="caption">
                                            男神的新衣
                                        </p>
                                        <p class="sub_tit">
                                            低至39元
                                        </p>
                                        <img width="130" height="130" original="picture/177.jpg" src="/home/gif/196.gif"
                                        alt="男神的新衣">
                                    </a>
                                    <div class="color_mask">
                                    </div>
                                </li>
                                <li class="img_second" data-advId="22158">
                                    <a title="领券200减10" target="_blank" href="//mall.yhd.com/index-21787.html"
                                    adtags="22158.47541022" data-advExp="0">
                                        <p class="caption">
                                            卡蒙帽子
                                        </p>
                                        <p class="sub_tit">
                                            领券200减10
                                        </p>
                                        <img width="130" height="130" original="picture/178.jpg" src="/home/gif/196.gif"
                                        alt="卡蒙帽子">
                                    </a>
                                    <div class="color_mask">
                                    </div>
                                </li>
                            </ul>
                            <div class="turn_show clearfix">
                                <div class="prev_btn index_iconfont">
                                    &#xe62e;
                                </div>
                                <div class="show_num">
                                    <span>
                                        1
                                    </span>
                                    /
                                    <em>
                                    </em>
                                </div>
                                <div class="next_btn index_iconfont">
                                    &#xe629;
                                </div>
                            </div>
                        </div>
                        <div class="comment">
                            <div class="comment_left">
                                <i class="index_iconfont">
                                    &#xe663;
                                </i>
                            </div>
                            <div class="comment_list">
                                <ul>
                                    <li class="ellipsis">
                                        <a title="领券满159享85折" target="_blank" href="//mall.yhd.com/index-111309.html">
                                            顶瓜瓜内衣
                                        </a>
                                    </li>
                                    <li class="ellipsis">
                                        <a title="adidas 经典钜惠" target="_blank" href="//mall.yhd.com/index-58463.html">
                                            adidas 经典钜惠
                                        </a>
                                    </li>
                                    <li class="ellipsis">
                                        <a title="型格男装 好货来袭" target="_blank" href="//sale.yhd.com/act/xMSwj0pQNIDZhHct.html">
                                            型格男装 好货来袭
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="center_con">
                        <div class="keywords" clstag="pageclick|keycount|home_201709222|90">
                            <ul class="clearfix">
                                <li>
                                    |
                                    <a title="adidas" target="_blank" href="https://mall.yhd.com/index-58463.html">
                                        adidas
                                    </a>
                                </li>
                                <li>
                                    |
                                    <a title="Coach " target="_blank" href="//mall.yhd.com/index-33683.html">
                                        Coach
                                    </a>
                                </li>
                                <li>
                                    |
                                    <a title="百丽集团" target="_blank" href="//mall.yhd.com/index-29668.html">
                                        百丽集团
                                    </a>
                                </li>
                                <li>
                                    |
                                    <a title="天梭 " target="_blank" href="//search.yhd.com/c0-0/k%25E5%25A4%25A9%25E6%25A2%25AD/">
                                        天梭
                                    </a>
                                </li>
                                <li>
                                    |
                                    <a title="连衣裙" target="_blank" href="//search.yhd.com/c0-0/k%25E8%25BF%259E%25E8%25A1%25A3%25E8%25A3%2599/">
                                        连衣裙
                                    </a>
                                </li>
                                <li>
                                    |
                                    <a title="女士内裤" target="_blank" href="//search.yhd.com/c0-0/k%25E5%25A5%25B3%25E5%25A3%25AB%25E5%2586%2585%25E8%25A3%25A4/">
                                        女士内裤
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="clearfix">
                            <div class="pro_wrap">
                                <a title="新品不止5折" target="_blank" href="//mall.yhd.com/index-29869.html"
                                adtags="22171.47543951" data-advExp="0" clstag="pageclick|keycount|home_201709222|91">
                                    <p class="pro_tit">
                                        烟花烫女装
                                    </p>
                                    <p class="pro_sub_tit">
                                        新品不止5折
                                    </p>
                                    <img src="/home/gif/196.gif" alt="烟花烫女装" original="picture/179.jpg" width="130"
                                    height="130">
                                </a>
                            </div>
                            <div class="pro_wrap">
                                <a title="最低5折" target="_blank" href="//mall.yhd.com/index-673842.html"
                                adtags="22172.47541810" data-advExp="0" clstag="pageclick|keycount|home_201709222|92">
                                    <p class="pro_tit">
                                        施华洛世奇
                                    </p>
                                    <p class="pro_sub_tit">
                                        最低5折
                                    </p>
                                    <img src="/home/gif/196.gif" alt="施华洛世奇" original="gif/325.gif" width="130"
                                    height="130">
                                </a>
                            </div>
                            <div class="pro_wrap">
                                <a title="年中特惠" target="_blank" href="//mall.yhd.com/index-57589.html"
                                adtags="22173.47542194" data-advExp="0" clstag="pageclick|keycount|home_201709222|93">
                                    <p class="pro_tit">
                                        暴龙眼镜
                                    </p>
                                    <p class="pro_sub_tit">
                                        年中特惠
                                    </p>
                                    <img src="/home/gif/196.gif" alt="暴龙眼镜" original="images/31.png" width="130"
                                    height="130">
                                </a>
                            </div>
                        </div>
                        <div class="pro_con clearfix">
                            <div class="pro_wrap">
                                <a title="夏清仓 低至5折" target="_blank" href="//mall.yhd.com/index-1000002369.html"
                                adtags="22174.47542808" data-advExp="0" clstag="pageclick|keycount|home_201709222|94">
                                    <p class="pro_tit">
                                        MICHAEL KORS
                                    </p>
                                    <p class="pro_sub_tit">
                                        夏清仓 低至5折
                                    </p>
                                    <img src="/home/gif/196.gif" alt="MICHAEL KORS" original="images/32.png" width="252"
                                    height="194">
                                </a>
                            </div>
                            <div class="pro_wrap">
                                <a title="新品低至199" target="_blank" href="//mall.yhd.com/index-29668.html"
                                adtags="22175.47537311" data-advExp="0" clstag="pageclick|keycount|home_201709222|95">
                                    <p class="pro_tit">
                                        百丽集团官方旗舰店
                                    </p>
                                    <p class="pro_sub_tit">
                                        新品低至199
                                    </p>
                                    <img src="/home/gif/196.gif" alt="百丽集团官方旗舰店" original="images/33.png" width="252"
                                    height="194">
                                </a>
                            </div>
                            <div class="pro_wrap" id="lxbhAjaxDiv">
                                <a title="adidas 低至5折" target="_blank" href="//mall.yhd.com/index-58463.html"
                                adtags="22176.47543754" data-advExp="0" clstag="pageclick|keycount|home_201709222|96">
                                    <p class="pro_tit">
                                        adidas官方旗舰店
                                    </p>
                                    <p class="pro_sub_tit">
                                        adidas 低至5折
                                    </p>
                                    <img src="/home/gif/196.gif" alt="adidas官方旗舰店" original="images/34.png" width="252"
                                    height="194">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="hot_con">
                        <p class="hot_tit">
                            热门商品
                        </p>
                        <div class="rank_list" clstag="pageclick|keycount|home_201709222|97">
                            <ul>
                                <li data-singlemodule="1">
                                    <a class="pro_img clearfix" title="颜域品牌女装2018夏季装新款简约荷叶领收腰显瘦雪纺宽松连衣裙20S8288 蓝花【预售5月8号】 L/40"
                                    adtags="22177.47538738" data-advExp="0" target="_blank" href="//item.yhd.com/26508205187.html">
                                        <img alt="颜域品牌女装2018夏季装新款简约荷叶领收腰显瘦雪纺宽松连衣裙20S8288 蓝花【预售5月8号】 L/40" src="/home/gif/196.gif"
                                        original="picture/180.jpg" width="60" height="60">
                                        <i>
                                            1
                                        </i>
                                        <div class="rank_detail">
                                            <p class="pro_name">
                                                颜域品牌女装2018夏季装新款简约荷叶领收腰显瘦雪纺宽松连衣裙20S8288 蓝花【预售5月8号】 L/40
                                            </p>
                                            <p class="pro_price" data-skuId="26508205187">
                                                ¥
                                                <em>
                                                </em>
                                            </p>
                                        </div>
                                    </a>
                                </li>
                                <li data-singlemodule="1">
                                    <a class="pro_img clearfix" title="阿迪达斯 UltraBOOST LACELESS w 女子跑步鞋 BY8906 如图 36"
                                    adtags="22178.47539660" data-advExp="0" target="_blank" href="//item.yhd.com/26358777743.html">
                                        <img alt="阿迪达斯 UltraBOOST LACELESS w 女子跑步鞋 BY8906 如图 36" src="/home/gif/196.gif"
                                        original="picture/181.jpg" width="60" height="60">
                                        <i class="rank_second">
                                            2
                                        </i>
                                        <div class="rank_detail">
                                            <p class="pro_name">
                                                阿迪达斯 UltraBOOST LACELESS w 女子跑步鞋 BY8906 如图 36
                                            </p>
                                            <p class="pro_price" data-skuId="26358777743">
                                                ¥
                                                <em>
                                                </em>
                                            </p>
                                        </div>
                                    </a>
                                </li>
                                <li data-singlemodule="1">
                                    <a class="pro_img clearfix" title="星期六（ST&SAT）专柜同款羊皮革绑带尖头粗跟中后空女单鞋 黑色 37"
                                    adtags="22179.47536967" data-advExp="0" target="_blank" href="//item.yhd.com/11325125696.html">
                                        <img alt="星期六（ST&SAT）专柜同款羊皮革绑带尖头粗跟中后空女单鞋 黑色 37" src="/home/gif/196.gif" original="picture/182.jpg"
                                        width="60" height="60">
                                        <i class="rank_third">
                                            3
                                        </i>
                                        <div class="rank_detail">
                                            <p class="pro_name">
                                                星期六（ST&SAT）专柜同款羊皮革绑带尖头粗跟中后空女单鞋 黑色 37
                                            </p>
                                            <p class="pro_price" data-skuId="11325125696">
                                                ¥
                                                <em>
                                                </em>
                                            </p>
                                        </div>
                                    </a>
                                </li>
                                <li data-singlemodule="1">
                                    <a class="pro_img clearfix" title="Michael Kors 迈克科尔斯 MK女包 女士小号单肩手提斜挎笑脸包 向日葵黄色30T3GLMM2L SUNFLOWER"
                                    adtags="22180.47536966" data-advExp="0" target="_blank" href="//item.yhd.com/12695550240.html">
                                        <img alt="Michael Kors 迈克科尔斯 MK女包 女士小号单肩手提斜挎笑脸包 向日葵黄色30T3GLMM2L SUNFLOWER"
                                        src="/home/gif/196.gif" original="picture/183.jpg" width="60" height="60">
                                        <div class="rank_detail">
                                            <p class="pro_name">
                                                Michael Kors 迈克科尔斯 MK女包 女士小号单肩手提斜挎笑脸包 向日葵黄色30T3GLMM2L SUNFLOWER
                                            </p>
                                            <p class="pro_price" data-skuId="12695550240">
                                                ¥
                                                <em>
                                                </em>
                                            </p>
                                        </div>
                                    </a>
                                </li>
                                <li data-singlemodule="1">
                                    <a class="pro_img clearfix" title="PANDORA 潘多拉 繁花庭园琉璃串珠 791652" adtags="22181.47522784"
                                    data-advExp="0" target="_blank" href="//item.yhd.com/3929037.html">
                                        <img alt="PANDORA 潘多拉 繁花庭园琉璃串珠 791652" src="/home/gif/196.gif" original="picture/184.jpg"
                                        width="60" height="60">
                                        <div class="rank_detail">
                                            <p class="pro_name">
                                                PANDORA 潘多拉 繁花庭园琉璃串珠 791652
                                            </p>
                                            <p class="pro_price" data-skuId="3929037">
                                                ¥
                                                <em>
                                                </em>
                                            </p>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </textarea>
            </div>
        </div>
        <div class="wrap mod_lift_floor mod_you_like" id="floor_knowU" lazyLoad_textarea="textareafloor_knowU">
            <h4>
                <u>
                </u>
                <span>
                    懂你想要
                </span>
                <i>
                </i>
            </h4>
            <div class="you_like_list">
                <ul class="clearfix youlikelist">
                </ul>
                <div class="global_loading">
                </div>
                <div class="loading_status none">
                    <span>
                        已经到底啦
                    </span>
                </div>
            </div>
        </div>
        <div class="mod_floor_lift" id="floor_lift" data-tpa="YHD_PCSY_FLOORNAV">
            <ul>
                <li>
                    <a href="javascript:;" class="floor_link0">
                        全球进口
                    </a>
                </li>
                <li>
                    <a href="javascript:;" class="floor_link1">
                        国产食品
                    </a>
                </li>
                <li>
                    <a href="javascript:;" class="floor_link2">
                        活色生鲜
                    </a>
                </li>
                <li>
                    <a href="javascript:;" class="floor_link4">
                        个护美妆
                    </a>
                </li>
                <li>
                    <a href="javascript:;" class="floor_link5">
                        母婴玩具
                    </a>
                </li>
                <li>
                    <a href="javascript:;" class="floor_link7">
                        家居生活
                    </a>
                </li>
                <li>
                    <a href="javascript:;" class="floor_link8">
                        手机家电
                    </a>
                </li>
                <li>
                    <a href="javascript:;" class="floor_link9">
                        服饰鞋包
                    </a>
                </li>
                <li>
                    <a href="javascript:;" class="floor_link10">
                        懂你想要
                    </a>
                </li>
            </ul>
        </div>
        <!--content end-->
        <div class="ft_wrap">
            <div class="wrap ft_footer_service clearfix" id="footerIcon" data-tpa="YHD_GLOBAl_FOOTERICON">
                <a target="_blank">
                    <img alt="" src="/home/picture/185.jpg" />
                    <b>
                        正品保障
                    </b>
                    <span>
                        正品行货 放心选购
                    </span>
                </a>
                <a target="_blank">
                    <img alt="" src="/home/picture/186.jpg" />
                    <b>
                        满86包邮
                    </b>
                    <span>
                        满86元 免运费
                    </span>
                </a>
                <a target="_blank">
                    <img alt="" src="/home/picture/187.jpg" />
                    <b>
                        售后无忧
                    </b>
                    <span>
                        7天无理由退货
                    </span>
                </a>
                <a target="_blank">
                    <img alt="" src="/home/picture/188.jpg" />
                    <b>
                        准时送达
                    </b>
                    <span>
                        收货时间由你做主
                    </span>
                </a>
            </div>
            <div class="wrap ft_service_link clearfix">
                <div id="bottomHelpLinkId" class="ft_help_list clearfix" data-tpa="YHD_GLOBAl_FOOTER_HELP">
                    <dl>
                        <dt>
                            新手入门
                        </dt>
                        <dd>
                            <a href="//cms.yhd.com/cms/view.do?topicId=12" target="_blank">
                                购物流程
                            </a>
                        </dd>
                        <dd>
                            <a href="//cms.yhd.com/cms/view.do?topicId=17" target="_blank">
                                会员制度
                            </a>
                        </dd>
                        <dd>
                            <a href="//cms.yhd.com/cms/view.do?topicId=38" target="_blank">
                                订单查询
                            </a>
                        </dd>
                        <dd>
                            <a href="//cms.yhd.com/cms/view.do?topicId=36" target="_blank">
                                发票制度
                            </a>
                        </dd>
                        <dd>
                            <a href="//seo.yhd.com/sitelink/sitemap.html" target="_blank">
                                网站地图
                            </a>
                        </dd>
                    </dl>
                    <dl>
                        <dt>
                            支付方式
                        </dt>
                        <dd>
                            <a href="//cms.yhd.com/cms/view.do?topicId=25" target="_blank">
                                货到付款
                            </a>
                        </dd>
                        <dd>
                            <a href="//cms.yhd.com/cms/view.do?topicId=26" target="_blank">
                                网上支付
                            </a>
                        </dd>
                        <dd>
                            <a href="//cms.yhd.com/cms/view.do?topicId=28" target="_blank">
                                礼品卡支付
                            </a>
                        </dd>
                        <dd>
                            <a href="//cms.yhd.com/cms/view.do?topicId=29" target="_blank">
                                其它支付
                            </a>
                        </dd>
                    </dl>
                    <dl>
                        <dt>
                            配送服务
                        </dt>
                        <dd>
                            <a href="//cms.yhd.com/cms/view.do?topicId=21" target="_blank">
                                配送进度查询
                            </a>
                        </dd>
                        <dd>
                            <a href="//cms.yhd.com/cms/view.do?topicId=20" target="_blank">
                                商品验货与签收
                            </a>
                        </dd>
                    </dl>
                    <dl>
                        <dt>
                            售后保障
                        </dt>
                        <dd>
                            <a href="//cms.yhd.com/cms/view.do?topicId=31" target="_blank">
                                退换货政策
                            </a>
                        </dd>
                        <dd>
                            <a href="//cms.yhd.com/cms/view.do?topicId=43" target="_blank">
                                联系客服
                            </a>
                        </dd>
                    </dl>
                </div>
                <!--footer 二维码 begin -->
                <div class="ft_code_wrap clearfix" data-tpa="YHD_GLOBAl_HEADER_MOBILE"
                id="footerQRcode">
                    <div class="ft_mobile_code clearfix">
                        <p>
                            APP更优惠
                        </p>
                        <a href="//app.yhd.com" target="_blank">
                            <img src="/home/images/1.png?1=1" alt="APP更优惠二维码" />
                        </a>
                    </div>
                    <div class="ft_mobile_code clearfix">
                        <p>
                            加微信查订单
                        </p>
                        <img src="/home/picture/189.jpg" alt="加微信查订单二维码" />
                    </div>
                </div>
            </div>
            <div id="footer">
                <p class="ft_footer_link">
                </p>
                <p class="ft_footer_link">
                    <a href="http://www.miibeian.gov.cn/" target="_blank">
                        沪ICP备16050468号
                    </a>
                    |
                    <a href="//cms.yhd.com/cms/view.do?topicId=16" target="_blank">
                        经营证照
                    </a>
                    |
                    <a href="/home/picture/190.jpg" target="_blank">
                        互联网药品信息服务资格证
                    </a>
                    |
                    <a target="_blank">
                        违法和不良信息举报电话：0527-88100253
                    </a>
                    |
                    <a href="/home/picture/191.jpg" target="_blank">
                        沪B2-20170039
                    </a>
                    |
                    <a href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=31010502002939"
                    target="_blank">
                        沪公网安备 31010502002939号
                    </a>
                    |
                    <a href="//seo.yhd.com/sitelink/sitelink.html" target="_blank">
                        友情链接
                    </a>
                    |
                    <a href="//cms.yhd.com/cms/view.do?topicId=105" target="_blank">
                        出版物经营许可证
                    </a>
                </p>
                <p>
                    Copyright© 1号店网上超市 2007-2017，All Rights Reserved
                </p>
                <small id="footerbanner2LazyLoad" class="ft_pic_link">
                    <a href="http://net.china.com.cn/index.htm" target="_blank">
                        <img alt="" src="/home/picture/192.jpg">
                    </a>
                    <a href="http://shwg.dianping.com/index.html" target="_blank">
                        <img alt="" src="/home/picture/193.jpg">
                    </a>
                    <a href="http://www.shjbzx.cn" target="_blank">
                        <img alt="" src="/home/picture/194.jpg">
                    </a>
                    <a href="https://search.szfw.org/cert/l/CX20150608010268010812" target="_blank">
                        <img alt="" src="/home/picture/195.jpg">
                    </a>
                    <a href="https://ss.knet.cn/verifyseal.dll?sn=e13050631010040492h5mq000000&ct=df&a=1&pa=500267"
                    target="_blank">
                        <img alt="" src="/home/images/36.png">
                    </a>
                    <a href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=31010502002939"
                    target="_blank">
                        <img alt="" src="/home/images/37.png">
                    </a>
                </small>
            </div>
        </div>
        <!--js start-->
        <!--无页面级头部js时, 全局头部js下移-->
        <script type="text/javascript" src="/home/js/335.js" charset="utf-8">
        </script>
        <script type="text/javascript" src="/home/js/336.js" charset="utf-8">
        </script>
        <script type="text/javascript" src="/home/js/337.js" charset="utf-8">
        </script>
        <!-- foot include start -->
        <script>
            (function($) {

})(jQuery)
        </script>
        <script type="text/javascript">
            var jaq = jaq || [];

            jaq.push(['account', 'JA2017_111805']); //站点编号
            jaq.push(['domain', 'yhd.com']); //站点域名
            (function() {

                var ja = document.createElement('script');

                ja.type = 'text/javascript';

                ja.async = true;

                ja.src = '/home/js/338.js';

                var s = document.getElementsByTagName('script')[0];

                s.parentNode.insertBefore(ja, s);

            })();
        </script>
        <!-- foot include end -->
    </body>

</html>