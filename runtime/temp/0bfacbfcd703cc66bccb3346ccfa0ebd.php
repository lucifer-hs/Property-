<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:71:"D:\wamp64\www\property\public/../application/admin\view\worker\lst.html";i:1528378634;s:61:"D:\wamp64\www\property\application\admin\view\public\top.html";i:1527944631;s:62:"D:\wamp64\www\property\application\admin\view\public\left.html";i:1528374126;}*/ ?>
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Amaze UI Admin index Examples</title>
    <meta name="description" content="这是一个 index 页面">
    <meta name="keywords" content="index">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="icon" type="image/png" href="/property/public/static/admin//assets/i/favicon.png">
    <link rel="apple-touch-icon-precomposed" href="/property/public/static/admin//assets/i/app-icon72x72@2x.png">
    <meta name="apple-mobile-web-app-title" content="Amaze UI" />
    <link rel="stylesheet" href="/property/public/static/admin//assets/css/amazeui.min.css" />
    <link rel="stylesheet" href="/property/public/static/admin//assets/css/admin.css">
    <link rel="stylesheet" href="/property/public/static/admin//assets/css/app.css">
    <style type="text/css">
    ul.pagination li{
        float: left;
    display: inline-block;
    }
        .pagination{text-align:center;margin-top:20px;margin-bottom: 20px;}  
        .pagination li{margin:0px 10px; border:1px solid #e6e6e6;padding: 3px 8px;display: inline-block; width: 40px}  
        .pagination .active{background-color: #23ABF0;color: #fff;}  
        .pagination .disabled{color:#aaa;}  
</style>
</head>

<body data-type="generalComponents">


   <header class="am-topbar am-topbar-inverse admin-header">
        <div class="am-topbar-brand">
            <a href="javascript:;" class="tpl-logo">
                <img src="/property/public/static/admin//assets/img/logo.png" alt="">
            </a>
        </div>
        <div class="am-icon-list tpl-header-nav-hover-ico am-fl am-margin-right">

        </div>

        <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only" data-am-collapse="{target: '#topbar-collapse'}"><span class="am-sr-only">导航切换</span> <span class="am-icon-bars"></span></button>

        <div class="am-collapse am-topbar-collapse" id="topbar-collapse">

            <ul class="am-nav am-nav-pills am-topbar-nav am-topbar-right admin-header-list tpl-header-list">
                <li class="am-dropdown" data-am-dropdown data-am-dropdown-toggle>
                    <a class="am-dropdown-toggle tpl-header-list-link" href="javascript:;">
                        <span class="am-icon-bell-o"></span> 提醒 <span class="am-badge tpl-badge-success am-round">5</span></span>
                    </a>
                    <ul class="am-dropdown-content tpl-dropdown-content">
                        <li class="tpl-dropdown-content-external">
                            <h3>你有 <span class="tpl-color-success">5</span> 条提醒</h3><a href="###">查看全部</a></li>
                        <li class="tpl-dropdown-list-bdbc"><a href="#" class="tpl-dropdown-list-fl"><span class="am-icon-btn am-icon-plus tpl-dropdown-ico-btn-size tpl-badge-success"></span> 小区整洁较上周提高2%</a>
                            <span class="tpl-dropdown-list-fr">3小时前</span>
                        </li>
                        <li class="tpl-dropdown-list-bdbc"><a href="#" class="tpl-dropdown-list-fl"><span class="am-icon-btn am-icon-check tpl-dropdown-ico-btn-size tpl-badge-danger"></span> 维修工作已完成，请查验</a>
                            <span class="tpl-dropdown-list-fr">15分钟前</span>
                        </li>
                        <li class="tpl-dropdown-list-bdbc"><a href="#" class="tpl-dropdown-list-fl"><span class="am-icon-btn am-icon-bell-o tpl-dropdown-ico-btn-size tpl-badge-warning"></span>有部分用户余额不足</a>
                            <span class="tpl-dropdown-list-fr">2天前</span>
                        </li>
                    </ul>
                </li>
                <li class="am-dropdown" data-am-dropdown data-am-dropdown-toggle>
                    <a class="am-dropdown-toggle tpl-header-list-link" href="javascript:;">
                        <span class="am-icon-comment-o"></span> 消息 <span class="am-badge tpl-badge-danger am-round">9</span></span>
                    </a>
                    <ul class="am-dropdown-content tpl-dropdown-content">
                        <li class="tpl-dropdown-content-external">
                            <h3>你有 <span class="tpl-color-danger">9</span> 条新消息</h3><a href="###">全部</a></li>
                        <li>
                            <a href="#" class="tpl-dropdown-content-message">
                                <span class="tpl-dropdown-content-photo">
                      <img src="/property/public/static/admin//assets/img/user02.png" alt=""> </span>
                                <span class="tpl-dropdown-content-subject">
                      <span class="tpl-dropdown-content-from"> 禁言小张 </span>
                                <span class="tpl-dropdown-content-time">10分钟前 </span>
                                </span>
                                <span class="tpl-dropdown-content-font"> Amaze UI 的诞生，依托于 GitHub 及其他技术社区上一些优秀的资源；Amaze UI 的成长，则离不开用户的支持。 </span>
                            </a>
                            <a href="#" class="tpl-dropdown-content-message">
                                <span class="tpl-dropdown-content-photo">
                      <img src="/property/public/static/admin//assets/img/user03.png" alt=""> </span>
                                <span class="tpl-dropdown-content-subject">
                      <span class="tpl-dropdown-content-from"> Steam </span>
                                <span class="tpl-dropdown-content-time">18分钟前</span>
                                </span>
                                <span class="tpl-dropdown-content-font"> 为了能最准确的传达所描述的问题， 建议你在反馈时附上演示，方便我们理解。 </span>
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="am-dropdown" data-am-dropdown data-am-dropdown-toggle>
                    <a class="am-dropdown-toggle tpl-header-list-link" href="javascript:;">
                        <span class="am-icon-calendar"></span> 进度 <span class="am-badge tpl-badge-primary am-round">4</span></span>
                    </a>
                    <ul class="am-dropdown-content tpl-dropdown-content">
                        <li class="tpl-dropdown-content-external">
                            <h3>你有 <span class="tpl-color-primary">4</span> 个任务进度</h3><a href="###">全部</a></li>
                        <li>
                            <a href="javascript:;" class="tpl-dropdown-content-progress">
                                <span class="task">
                        <span class="desc"> 用户中心 </span>
                                <span class="percent">45%</span>
                                </span>
                                <span class="progress">
                        <div class="am-progress tpl-progress am-progress-striped"><div class="am-progress-bar am-progress-bar-success" style="width:45%"></div></div>
                    </span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;" class="tpl-dropdown-content-progress">
                                <span class="task">
                        <span class="desc">新闻内容页 </span>
                                <span class="percent">30%</span>
                                </span>
                                <span class="progress">
                       <div class="am-progress tpl-progress am-progress-striped"><div class="am-progress-bar am-progress-bar-secondary" style="width:30%"></div></div>
                    </span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;" class="tpl-dropdown-content-progress">
                                <span class="task">
                        <span class="desc">管理中心 </span>
                                <span class="percent">60%</span>
                                </span>
                                <span class="progress">
                        <div class="am-progress tpl-progress am-progress-striped"><div class="am-progress-bar am-progress-bar-warning" style="width:60%"></div></div>
                    </span>
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="am-hide-sm-only"><a href="javascript:;" id="admin-fullscreen" class="tpl-header-list-link"><span class="am-icon-arrows-alt"></span> <span class="admin-fullText">开启全屏</span></a></li>

                <li class="am-dropdown" data-am-dropdown data-am-dropdown-toggle>
                    <a class="am-dropdown-toggle tpl-header-list-link" href="javascript:;">
                        <span class="tpl-header-list-user-nick"><?php echo session('username'); ?></span><span class="tpl-header-list-user-ico"> <img src="/property/public/static/admin//assets/img/user01.png"></span>
                    </a>
                    <ul class="am-dropdown-content">
                        <li><a href="#"><span class="am-icon-bell-o"></span> 资料</a></li>
                        <li><a href="#"><span class="am-icon-cog"></span> 设置</a></li>
                        <li><a href="<?php echo url('Login/logout'); ?>"><span class="am-icon-power-off"></span> 退出</a></li>
                    </ul>
                </li>
                <li><a href="<?php echo url('Login/logout'); ?>" class="tpl-header-list-link"><span class="am-icon-sign-out tpl-header-list-ico-out-size"></span></a></li>
            </ul>
        </div>
    </header>
    <div class="tpl-page-container tpl-page-header-fixed">

 <div class="tpl-left-nav tpl-left-nav-hover">
            <div class="tpl-left-nav-title">
                Two-Way简物业 列表
            </div>
            <div class="tpl-left-nav-list">
                <ul class="tpl-left-nav-menu">
                    <li class="tpl-left-nav-item">
                        <a href="index.html" class="nav-link active">
                            <i class="am-icon-home"></i>
                            <span>首页</span>
                        </a>
                    </li>
                    <li class="tpl-left-nav-item">
                        <a href="chart.html" class="nav-link tpl-left-nav-link-list">
                            <i class="am-icon-bar-chart"></i>
                            <span>数据分析</span>
                            <i class="tpl-left-nav-content tpl-badge-danger">
               12
             </i>
                        </a>
                    </li>

                    <li class="tpl-left-nav-item">
                        <a href="javascript:;" class="nav-link tpl-left-nav-link-list">
                            <i class="am-icon-table"></i>
                            <span>基础服务</span>
                            <i class="am-icon-angle-right tpl-left-nav-more-ico am-fr am-margin-right"></i>
                        </a>
                        <ul class="tpl-left-nav-sub-menu">
                            <li>
								<a href="table-font-list.html">
                                    <i class="am-icon-angle-right"></i>
                                    <span>商家管理</span>
                                    <i class="am-icon-star tpl-left-nav-content-ico am-fr am-margin-right"></i>
                                </a>
                                <a href="table-images-list.html">
                                    <i class="am-icon-angle-right"></i>
                                    <span>访客管理</span>
                                    <i class="tpl-left-nav-content tpl-badge-success">
               							18
             						</i>
								</a>
                                    <a href="form-news.html">
                                        <i class="am-icon-angle-right"></i>
                                        <span>资讯管理</span>
                                        <i class="tpl-left-nav-content tpl-badge-primary">
            						    	5
             							</i>
             						</a>
									<a href="form-news.html">
                                        <i class="am-icon-angle-right"></i>
                                        <span>投诉管理</span>
                                        <i class="tpl-left-nav-content tpl-badge-primary">
            							   3
             							</i>
									</a>
									<a href="form-news.html">
                                        <i class="am-icon-angle-right"></i>
                                        <span>缴费管理</span>
                                        <i class="tpl-left-nav-content tpl-badge-primary">
            							   39
             							</i>
									</a>
                                    <a href="form-news-list.html">
                                        <i class="am-icon-angle-right"></i>
                                        <span>客服管理</span>

                                    </a>
                                    <a href="form-news-list.html">
                                        <i class="am-icon-angle-right"></i>
                                        <span>医疗管理</span>

                                    </a>
                            </li>
                        </ul>
                    </li>
					
					<li class="tpl-left-nav-item">
                        <a href="javascript:;" class="nav-link tpl-left-nav-link-list">
                            <i class="am-icon-coff"></i>
                            <span>特色服务</span>
                            <i class="am-icon-angle-right tpl-left-nav-more-ico am-fr am-margin-right"></i>
                        </a>
                        <ul class="tpl-left-nav-sub-menu">
                            <li>
								<a href="table-font-list.html">
                                    <i class="am-icon-angle-right"></i>
                                    <span>失物招领管理</span>
                                </a>
                                <a href="table-images-list.html">
                                    <i class="am-icon-angle-right"></i>
                                    <span>闲置托管管理</span>
                                    <i class="tpl-left-nav-content tpl-badge-success">
               							8
             						</i>
								</a>
                                    <a href="form-news.html">
                                        <i class="am-icon-angle-right"></i>
                                        <span>租赁管理</span>
             						</a>
									<a href="form-news.html">
                                        <i class="am-icon-angle-right"></i>
                                        <span>门禁管理</span>
									</a>
                            </li>
                        </ul>
                    </li>
					
					<li class="tpl-left-nav-item">
                        <a href="javascript:;" class="nav-link tpl-left-nav-link-list">
                            <i class="am-icon-wpforms"></i>
                            <span>信息管理</span>
                            <i class="am-icon-angle-right tpl-left-nav-more-ico am-fr am-margin-right tpl-left-nav-more-ico-rotate"></i>
                        </a>
                        <ul class="tpl-left-nav-sub-menu" style="display: block;">
                            <li>
                                <a href="<?php echo url('department/index'); ?>">
                                    <i class="am-icon-angle-right"></i>
                                    <span>部门信息管理</span>
                                    <i class="am-icon-star tpl-left-nav-content-ico am-fr am-margin-right"></i>
                                </a>
                                <a href="<?php echo url('worker/index'); ?>">
                                    <i class="am-icon-angle-right"></i>
                                    <span>员工信息管理</span>
                                </a>
                                <a href="<?php echo url('information/index'); ?>">
                                    <i class="am-icon-angle-right"></i>
                                    <span>业主信息管理</span>
                                </a>
                            </li>
                        </ul>
                    </li>
					<li class="tpl-left-nav-item">
                        <a href="javascript:;" class="nav-link tpl-left-nav-link-list">
                            <i class="am-icon-money"></i>
                            <span>缴费管理</span>
                            <i class="am-icon-angle-right tpl-left-nav-more-ico am-fr am-margin-right tpl-left-nav-more-ico-rotate"></i>
                        </a>
                        <ul class="tpl-left-nav-sub-menu" style="display: block;">
                            <li>
                                <a href="<?php echo url('information/index'); ?>">
                                    <i class="am-icon-angle-right"></i>
                                    <span>缴费类型管理</span>
                                    <i class="am-icon-star tpl-left-nav-content-ico am-fr am-margin-right"></i>
                                </a>

                                <a href="<?php echo url('information/index'); ?>">
                                    <i class="am-icon-angle-right"></i>
                                    <span>缴费信息管理</span>
                                </a>
                            </li>
                        </ul>
                    </li>
					 <li class="tpl-left-nav-item">
                        <a href="javascript:;" class="nav-link tpl-left-nav-link-list">
                            <i class="am-icon-sett"></i>
                            <span>系统管理</span>
                            <i class="am-icon-angle-right tpl-left-nav-more-ico am-fr am-margin-right"></i>
                        </a>
                        <ul class="tpl-left-nav-sub-menu">
                            <li>
								<a href="table-font-list.html">
                                    <i class="am-icon-banshou"></i>
                                    <span>系统设置</span>
                                </a>
                                <a href="table-images-list.html">
                                    <i class="am-icon-huancun"></i>
                                    <span>清理缓存</span>
								</a>
                                    <a href="form-news.html">
                                        <i class="am-icon-beifen"></i>
                                        <span>数据备份</span>
             						</a>
									<a href="form-news.html">
                                        <i class="am-icon-huanyuan"></i>
                                        <span>数据还原</span>
									</a>
                            </li>
                        </ul>
                    </li>

                    <li class="tpl-left-nav-item">
                        <a href="login.html" class="nav-link tpl-left-nav-link-list">
                            <i class="am-icon-key"></i>
                            <span>登录</span>

                        </a>
                    </li>
                </ul>
            </div>
        </div>


        <div class="tpl-content-wrapper">
            <div class="tpl-content-page-title">
                员工信息管理文字列表
            </div>
            <ol class="am-breadcrumb">
                <li><a href="#" class="am-icon-home">首页</a></li>
                <li><a href="#">员工信息管理</a></li>
                <li class="am-active">文字列表</li>
            </ol>
            <div class="tpl-portlet-components">
                <div class="portlet-title">
                    <div class="caption font-green bold">
                        <span class="am-icon-code"></span> 列表
                    </div>                   
                </div>
                <div class="tpl-block">
                    <div class="am-g">
                        <div class="am-u-sm-12 am-u-md-6">
                            <div class="am-btn-toolbar">
                                <div class="am-btn-group am-btn-group-xs">
                                    <a href="/property/public/admin/Worker/add.html" class="am-btn am-btn-default am-btn-success"><span class="am-icon-plus"></span> 新增</a>
                                    <button type="button" class="am-btn am-btn-default am-btn-secondary"><span class="am-icon-save"></span> 保存</button>
                                    <button type="button" class="am-btn am-btn-default am-btn-warning"><span class="am-icon-archive"></span> 审核</button>
                                    <button type="button" class="am-btn am-btn-default am-btn-danger"><span class="am-icon-trash-o"></span> 删除</button>
                                </div>
                            </div>
                        </div>
                        <form action="" method="post">
                        <div class="am-u-sm-12 am-u-md-3">
                            <div class="am-form-group">
                                    <select name="style" data-am-selected="{btnSize: 'sm'}" >
                                        <option value="1">所有类别</option>
                                          <?php for ($i=0;$i<9;$i++){ ?>
                                                <option  value="M<?php echo $i;?>" >M<?php echo $i;?></option>
                                            <?php   } ?>
                                        </select>
                            </div>
                        </div>
                        <div class="am-u-sm-12 am-u-md-3">
                            <div class="am-input-group am-input-group-sm">
                                <input type="text" class="am-form-field" name="find"  >
                                <span class="am-input-group-btn">
                                <button class="am-btn  am-btn-default am-btn-success tpl-am-btn-success am-icon-search" type="submit"></button>
                              </span>
                            </div>
                        </div>
                        </form>
                    </div>
                    <div class="am-g">
                        <div class="am-u-sm-12">
                            <form class="am-form" method="post">
                                 
                                <table class="am-table am-table-striped am-table-hover table-main">
                                    <thead>
                                        <tr>
                                            <th class="table-check"><input type="checkbox" class="tpl-table-fz-check"></th>
                                            <th class="table-id">ID</th>
                                            <th class="table-title">用户名</th>
                                            <th class="table-type">等级</th>
                                            <th class="table-author am-hide-sm-only">真实姓名</th>
                                            <th class="table-type">所属部门</th>
                                            <th class="table-type">电话</th>
                                            <th class="table-type">地址</th>
                                            <th class="table-date am-hide-sm-only">修改日期</th>
                                            <th class="table-set">操作</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                         <?php if(is_array($gl) || $gl instanceof \think\Collection || $gl instanceof \think\Paginator): $i = 0; $__LIST__ = $gl;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                        <tr>
                                           
                                            <td><input type="checkbox"></td>
                                            <td><?php echo $vo['gl_id']; ?></td>
                                            <td><?php echo $vo['gl_user']; ?></td>
                                            <td><?php echo $vo['gl_p']; ?></td>
                                            <td class="am-hide-sm-only"><?php echo $vo['gl_name']; ?></td>
                                            <td><?php echo $vo['bn_name']; ?></td>
                                            <td><?php echo $vo['gl_call']; ?></td>
                                             <td><?php echo $vo['gl_adress']; ?></td>
                                            <td class="am-hide-sm-only"><?php echo date("Y-m-d",$vo['time']); ?></td>
                                            <td>
                                          
                                                <div class="am-btn-toolbar">
                                                    <div class="am-btn-group am-btn-group-xs">
                                                        <a  href="<?php echo url('see',array('id'=>$vo['gl_id'])); ?>" class="am-btn am-btn-default am-btn-xs am-text-secondary"><span class="am-icon-pencil-square-o"></span> 查看</a>
                                                        <a  href="<?php echo url('edit',array('id'=>$vo['gl_id'])); ?>"  class="am-btn am-btn-default am-btn-xs am-hide-sm-only"><span class="am-icon-copy"></span> 编辑</a>
                                                        <a  href="<?php echo url('del',array('id'=>$vo['gl_id'])); ?>"  class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only"><span class="am-icon-trash-o"></span> 删除</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                         <?php endforeach; endif; else: echo "" ;endif; ?>
                                    </tbody>
                                </table>
                                <div class="am-cf">

                                    <div class="am-fr">
                                       
                                            <?php echo $gl->render(); ?>
                                      
                                    </div>
                                </div>
                                <hr>
                           
                            </form>
                        </div>

                    </div>
                </div>
                <div class="tpl-alert"></div>
            </div>










        </div>

    </div>


    <script src="/property/public/static/admin//assets/js/jquery-2.1.1.js"></script>
    <script src="/property/public/static/admin//assets/js/amazeui.min.js"></script>
    <script src="/property/public/static/admin//assets/js/app.js"></script>
	
</body>
</html>