<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>YerShop 安装</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- Le styles -->
        <link href="/Public/static/bootstrap/css/bootstrap.css" rel="stylesheet">
        <link href="/Public/static/bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
        <link href="/Public/Install/css/install.css" rel="stylesheet">

        <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="assets/js/html5shiv.js"></script>
        <![endif]-->
        <script src="/Public/static/jquery-1.10.2.min.js"></script>
        <script src="/Public/static/bootstrap/js/bootstrap.js"></script>
    </head>

    <body data-spy="scroll" data-target=".bs-docs-sidebar">
        <!-- Navbar
        ================================================== -->
        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="brand" target="_blank" href="http://www.onethink.cn">OneThink</a>
                    <div class="nav-collapse collapse">
                    	<ul id="step" class="nav">
                    		
    <li class="active"><a href="javascript:;">安装协议</a></li>
    <li><a href="javascript:;">环境检测</a></li>
    <li><a href="javascript:;">创建数据库</a></li>
    <li><a href="javascript:;">安装</a></li>
    <li><a href="javascript:;">完成</a></li>

                    	</ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="jumbotron masthead">
            <div class="container">
                
    <h1>YerShop 安装协议</h1>
    <p>版权所有 (c) 2015，YerShop保留所有权利。</p>
    <p>感谢您选择YerShop，希望我们的努力能为您提供一个简单、强大的站点解决方案。YerShop系统网址为 <a href="http://www.yershop.com" target="_blank" class="red">http://yershop.com</a>，产品官方网站网址为 <a href="http://www.yershop.com" target="_blank">YerShop</a>。</p>
    <p>用户须知：本协议是您与YerShop公司之间关于您使用YerShop产品及服务的法律协议。无论您是个人或组织、盈利与否、用途如何（包括以学习和研究为目的），均需仔细阅读本协议，包括免除或者限制YerShop责任的免责条款及对您的权利限制。请您审阅并接受或不接受本服务条款。如您不同意本服务条款及/或YerShop随时对其的修改，您应不使用或主动取消YerShop产品。否则，您的任何对YerShop的相关服务的注册、登陆、下载、查看等使用行为将被视为您对本服务条款全部的完全接受，包括接受YerShop对服务条款随时所做的任何修改。</p>
    <p>本服务条款一旦发生变更, YerShop将在产品官网上公布修改内容。修改后的服务条款一旦在网站公布即有效代替原来的服务条款。您可随时登陆官网查阅最新版服务条款。如果您选择接受本条款，即表示您同意接受协议各项条件的约束。如果您不同意本服务条款，则不能获得使用本服务的权利。您若有违反本条款规定，YerShop公司有权随时中止或终止您对YerShop产品的使用资格并保留追究相关法律责任的权利。</p>
    <p>在理解、同意、并遵守本协议的全部条款后，方可开始使用YerShop产品。您也可能与YerShop公司直接签订另一书面协议，以补充或者取代本协议的全部或者任何部分。</p>
    <p>YerShop公司拥有YerShop的全部知识产权，包括商标和著作权。本软件只供许可协议，并非出售。YerShop只允许您在遵守本协议各项条款的情况下复制、下载、安装、使用或者以其他方式受益于本软件的功能或者知识产权。</p>
<h5>I. YerShop使用许可的权利、约束与限制</h5>
 <p>1. 您可以在完全遵守本最终用户授权协议的基础上，将本软件应用于非商业用途(包括个人用户：不具备法人资格的自然人，以个人名义从事电子商务开设网店的；非盈利性用途：从事非盈利活动的商业机构及非盈利性组织，将 YerShop产品用且仅用于产品演示、展示及发布，而并不是用来买卖及盈利的运营活动的)。 </p>
 <p>2. 您可以在协议规定的约束和限制范围内修改 YerShop源代码(如果被提供的话)或界面风格以适应您的网站要求。</p> 
 <p>3. 您拥有使用本软件构建的商店中全部会员资料、文章、商品及相关信息的所有权，并独立承担与其内容的相关法律义务。</p> 
 <p>4. 获得商业授权之后，您可以将本软件应用于商业用途，同时依据所购买的授权类型中确定的技术支持期限、技术支持方式和技术支持内容，自授权时刻起，在技术支持期限内拥有通过指定的方式获得指定范围内的技术支持服务。商业授权用户享有反映和提出意见的权力，相关意见将被作为首要考虑，但没有一定被采纳的承诺或保证。</p>
 <p>5. 未获商业授权之前，不得将本软件用于商业用途(包括但不限于企业法人经营的企业网站、经营性网站)。 </p>
 <p>6. 不得对本软件或与之关联的商业授权进行出租、出售、抵押或发放子许可证。 </p>
 <p>7. 无论如何，即无论用途如何、是否经过修改或美化、修改程度如何，只要使用 YerShop的整体或任何部分，未经书面许可，网站页面页脚处的 YerShop名称和上yershop公司下属网站(http://www.yershop.com) 的链接都必须保留，而不能清除或修 <p>8. 禁止在 YerShop的整体或任何部分基础上以发展任何派生版本、修改版本或第三方版本用于重新分发。</p> 
 <p>9. 如果您未能遵守本协议的条款，您的授权将被终止，所被许可的权利将被收回，并承担相应法律责任。 
</p>

            </div>
        </div>


        <!-- Footer
        ================================================== -->
        <footer class="footer navbar-fixed-bottom">
            <div class="container">
                <div>
                	
    <a class="btn-an orange" href="<?php echo U('Install/step1');?>">同意安装协议</a>
    <a class="btn-an blue" href="http://www.yershop.com">不同意</a>

                </div>
            </div>
        </footer>
    </body>
</html>