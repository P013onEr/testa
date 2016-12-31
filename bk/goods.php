<!doctype html>
<html class="no-js">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>发布商品</title>
  <meta name="description" content="这是一个form页面">
  <meta name="keywords" content="form">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="renderer" content="webkit">
  <meta http-equiv="Cache-Control" content="no-siteapp" />
  <link rel="icon" type="image/png" href="AmazeUI/assets/i/favicon.png">
  <link rel="apple-touch-icon-precomposed" href="AmazeUI/assets/i/app-icon72x72@2x.png">
  <meta name="apple-mobile-web-app-title" content="Amaze UI" />
  <link rel="stylesheet" href="AmazeUI/assets/css/amazeui.min.css"/>
  <link rel="stylesheet" href="AmazeUI/assets/css/admin.css">
</head>
<body>
<!--[if lte IE 9]>
<p class="browsehappy">你正在使用<strong>过时</strong>的浏览器，Amaze UI 暂不支持。 请 <a href="http://browsehappy.com/" target="_blank">升级浏览器</a>
  以获得更好的体验！</p>
<![endif]-->

<header class="am-topbar am-topbar-inverse admin-header">
  <div class="am-topbar-brand">
    <strong>Amaze UI</strong> <small>后台管理模板</small>
  </div>

  <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only" data-am-collapse="{target: '#topbar-collapse'}"><span class="am-sr-only">导航切换</span> <span class="am-icon-bars"></span></button>

  <div class="am-collapse am-topbar-collapse" id="topbar-collapse">

    <ul class="am-nav am-nav-pills am-topbar-nav am-topbar-right admin-header-list">
      <li><a href="javascript:;"><span class="am-icon-envelope-o"></span> 收件箱 <span class="am-badge am-badge-warning">5</span></a></li>
      <li class="am-dropdown" data-am-dropdown>
        <a class="am-dropdown-toggle" data-am-dropdown-toggle href="javascript:;">
          <span class="am-icon-users"></span> 管理员 <span class="am-icon-caret-down"></span>
        </a>
        <ul class="am-dropdown-content">
          <li><a href="#"><span class="am-icon-user"></span> 资料</a></li>
          <li><a href="#"><span class="am-icon-cog"></span> 设置</a></li>
          <li><a href="#"><span class="am-icon-power-off"></span> 退出</a></li>
        </ul>
      </li>
      <li class="am-hide-sm-only"><a href="javascript:;" id="admin-fullscreen"><span class="am-icon-arrows-alt"></span> <span class="admin-fullText">开启全屏</span></a></li>
    </ul>
  </div>
</header>

<div class="am-cf admin-main">
  <!-- sidebar start -->
  <div class="admin-sidebar am-offcanvas" id="admin-offcanvas">
    <div class="am-offcanvas-bar admin-offcanvas-bar">
      <ul class="am-list admin-sidebar-list">
        <li><a href="admin-index.html"><span class="am-icon-home"></span> 首页</a></li>
        <li class="admin-parent">
          <a class="am-cf" data-am-collapse="{target: '#collapse-nav'}"><span class="am-icon-file"></span> 页面模块 <span class="am-icon-angle-right am-fr am-margin-right"></span></a>
          <ul class="am-list am-collapse admin-sidebar-sub am-in" id="collapse-nav">
            <li><a href="admin-user.html" class="am-cf"><span class="am-icon-check"></span> 个人资料<span class="am-icon-star am-fr am-margin-right admin-icon-yellow"></span></a></li>
            <li><a href="admin-help.html"><span class="am-icon-puzzle-piece"></span> 帮助页</a></li>
            <li><a href="admin-gallery.html"><span class="am-icon-th"></span> 相册页面<span class="am-badge am-badge-secondary am-margin-right am-fr">24</span></a></li>
            <li><a href="admin-log.html"><span class="am-icon-calendar"></span> 系统日志</a></li>
            <li><a href="admin-404.html"><span class="am-icon-bug"></span> 404</a></li>
          </ul>
        </li>
        <li><a href="admin-table.html"><span class="am-icon-table"></span> 表格</a></li>
        <li><a href="admin-form.html"><span class="am-icon-pencil-square-o"></span> 表单</a></li>
        <li><a href="#"><span class="am-icon-sign-out"></span> 注销</a></li>
      </ul>

      <div class="am-panel am-panel-default admin-sidebar-panel">
        <div class="am-panel-bd">
          <p><span class="am-icon-bookmark"></span> 公告</p>
          <p>时光静好，与君语；细水流年，与君同。—— Amaze UI</p>
        </div>
      </div>

      <div class="am-panel am-panel-default admin-sidebar-panel">
        <div class="am-panel-bd">
          <p><span class="am-icon-tag"></span> wiki</p>
          <p>Welcome to the Amaze UI wiki!</p>
        </div>
      </div>
    </div>
  </div>
  <!-- sidebar end -->

<!-- content start -->
<div class="admin-content">
  <div class="admin-content-body">
    <div class="am-cf am-padding am-padding-bottom-0">
      <div class="am-fl am-cf">
        <strong class="am-text-primary am-text-lg">表单</strong> /
        <small>form</small>
      </div>
    </div>

    <hr>

    <div class="am-tabs am-margin" data-am-tabs>
      <ul class="am-tabs-nav am-nav am-nav-tabs">
        <li class="am-active"><a href="#tab1">基本信息</a></li>
        <li><a href="#tab2">详细描述</a></li>
        <li><a href="#tab3">SEO 选项</a></li>
      </ul>

          <form action="goods_save.php" method="post">
          	
	          <div class="am-g am-margin-top">
	            <div class="am-u-sm-4 am-u-md-2 am-text-right">
	              商品主图
	            </div>
	            <div class="am-u-sm-8 am-u-md-10">
	                <div class="am-form-group am-form-icon">
	                  <input type="input" value="http://img13.360buyimg.com/n4/s260x260_jfs/t889/319/780063454/143420/1699a5eb/55485c20N032c1bc2.jpg" name="avatar">
	                </div>
	                <div class="am-form-group am-form-icon">
	                  <input type="input" value="一款不一样的手机" name="title">
	                </div>
	            </div>
	          </div>
	          <input type="submit" class="am-btn am-btn-primary am-btn-xs" value="Submit" />
          </form>

          <div class="am-g am-margin-top">
            <div class="am-u-sm-4 am-u-md-2 am-text-right">
              发布日期
            </div>
            <div class="am-u-sm-8 am-u-md-10">
              <form action="" class="am-form am-form-inline">
                <div class="am-form-group am-form-icon">
                  <i class="am-icon-calendar"></i>
                  <input type="date" class="am-form-field am-input-sm" placeholder="日期">
                </div>
              </form>
            </div>
          </div>

          <div class="am-g am-margin-top">
            <div class="am-u-sm-4 am-u-md-2 am-text-right">
              发布时间
            </div>
            <div class="am-u-sm-8 am-u-md-10">
              <form action="" class="am-form am-form-inline">
                <div class="am-form-group am-form-icon">
                  <i class="am-icon-calendar"></i>
                  <input type="datetime-local" class="am-form-field am-input-sm" placeholder="时间">
                </div>
              </form>
            </div>
          </div>

        </div>

        <div class="am-tab-panel am-fade" id="tab2">
          <form class="am-form">
            <div class="am-g am-margin-top">
              <div class="am-u-sm-4 am-u-md-2 am-text-right">
                文章标题
              </div>
              <div class="am-u-sm-8 am-u-md-4">
                <input type="text" class="am-input-sm">
              </div>
              <div class="am-hide-sm-only am-u-md-6">*必填，不可重复</div>
            </div>

            <div class="am-g am-margin-top">
              <div class="am-u-sm-4 am-u-md-2 am-text-right">
                文章作者
              </div>
              <div class="am-u-sm-8 am-u-md-4 am-u-end col-end">
                <input type="text" class="am-input-sm">
              </div>
            </div>

            <div class="am-g am-margin-top">
              <div class="am-u-sm-4 am-u-md-2 am-text-right">
                信息来源
              </div>
              <div class="am-u-sm-8 am-u-md-4">
                <input type="text" class="am-input-sm">
              </div>
              <div class="am-hide-sm-only am-u-md-6">选填</div>
            </div>

            <div class="am-g am-margin-top">
              <div class="am-u-sm-4 am-u-md-2 am-text-right">
                内容摘要
              </div>
              <div class="am-u-sm-8 am-u-md-4">
                <input type="text" class="am-input-sm">
              </div>
              <div class="am-u-sm-12 am-u-md-6">不填写则自动截取内容前255字符</div>
            </div>

            <div class="am-g am-margin-top-sm">
              <div class="am-u-sm-12 am-u-md-2 am-text-right admin-form-text">
                内容描述
              </div>
              <div class="am-u-sm-12 am-u-md-10">
                <textarea rows="10" placeholder="请使用富文本编辑插件"></textarea>
              </div>
            </div>

          </form>
        </div>

        <div class="am-tab-panel am-fade" id="tab3">
          <form class="am-form">
            <div class="am-g am-margin-top-sm">
              <div class="am-u-sm-4 am-u-md-2 am-text-right">
                SEO 标题
              </div>
              <div class="am-u-sm-8 am-u-md-4 am-u-end">
                <input type="text" class="am-input-sm">
              </div>
            </div>

            <div class="am-g am-margin-top-sm">
              <div class="am-u-sm-4 am-u-md-2 am-text-right">
                SEO 关键字
              </div>
              <div class="am-u-sm-8 am-u-md-4 am-u-end">
                <input type="text" class="am-input-sm">
              </div>
            </div>

            <div class="am-g am-margin-top-sm">
              <div class="am-u-sm-4 am-u-md-2 am-text-right">
                SEO 描述
              </div>
              <div class="am-u-sm-8 am-u-md-4 am-u-end">
                <textarea rows="4"></textarea>
              </div>
            </div>
          </form>
        </div>

      </div>
    </div>

    <div class="am-margin">
      
      <button type="button" class="am-btn am-btn-primary am-btn-xs">放弃保存</button>
    </div>
  </div>

  <footer class="admin-content-footer">
    <hr>
    <p class="am-padding-left">© 2014 AllMobilize, Inc. Licensed under MIT license.</p>
  </footer>
</div>
<!-- content end -->

</div>

<a href="#" class="am-icon-btn am-icon-th-list am-show-sm-only admin-menu" data-am-offcanvas="{target: '#admin-offcanvas'}"></a>

<footer>
  <hr>
  <p class="am-padding-left">© 2014 AllMobilize, Inc. Licensed under MIT license.</p>
</footer>

<!--[if lt IE 9]>
<script src="http://libs.baidu.com/jquery/1.11.1/jquery.min.js"></script>
<script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
<script src="AmazeUI/assets/js/amazeui.ie8polyfill.min.js"></script>
<![endif]-->

<!--[if (gte IE 9)|!(IE)]><!-->
<script src="AmazeUI/assets/js/jquery.min.js"></script>
<!--<![endif]-->
<script src="AmazeUI/assets/js/amazeui.min.js"></script>
<script src="AmazeUI/assets/js/app.js"></script>
</body>
</html>
