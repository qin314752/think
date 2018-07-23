<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:93:"C:\Users\asus\Desktop\thinkphp\public/../application/index\view\jurisdiction\jurisdiction.php";i:1532324142;}*/ ?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />

<link rel="stylesheet" type="text/css" href="/admin/static/h-ui/css/H-ui.min.css" />
<link rel="stylesheet" type="text/css" href="/admin/static/h-ui.admin/css/H-ui.admin.css" />
<link rel="stylesheet" type="text/css" href="/admin/lib/Hui-iconfont/1.0.8/iconfont.css" />
<link rel="stylesheet" type="text/css" href="/admin/static/h-ui.admin/skin/default/skin.css" id="skin" />
<link rel="stylesheet" type="text/css" href="static/h-ui.admin/css/style.css" />
   

<link rel="shortcut icon" href="http://mt.mtjfsc.com//admin/favicon.ico?v=1.0" />
<link href="/admin/css/bootstrap.min.css" rel="stylesheet" />
<link href="/admin/css/style.css" rel="stylesheet" />
<link rel="stylesheet" href="/admin/css/bootstrap-switch.min.css" />
<title>人员管理 - 名天积分商城管理后台</title>
    <style media="screen">
        .tab-content {
            position: fixed;
            width: 74%;
            top: 0;
            left: 0;
            min-height: 100%;
        }
        .tabs-container .tabs-right .panel-body{
            margin-right: 0;
            width: 100%;
            height: 600px!important;
            overflow:auto
        }
        .tab-pane{
            min-height:600px;
        }
       /* .panel-body{
            min-height: 418px;
        }
        .tab-content {
            position: fixed;
            width: 74%;
            top: 0;
            left: 0;
            min-height: 100%;
        }
        .tabs-container .tabs-right .panel-body{
            margin-right: 0;
            width: 100%;
        }
        .tab-pane{
            min-height: 500px;
        }*/
    </style>
</head>
<body  class="gray-bg">
<div class="wrapper wrapper-content fadeInRight">
    <div class="tabs-container">
        <div class="tabs-right">
            <ul class="nav nav-tabs" id="authorizeNavtabs" style="margin-left:0">
                <li class="active"><a data-toggle="tab" href="#tab-admin" aria-expanded="true">员工管理</a></li>
                <li><a data-toggle="tab" href="#tab-member">会员管理</a></li>
                <li><a data-toggle="tab" href="#tab-checkin">商户入驻审核</a></li>
                <li><a data-toggle="tab" href="#tab-recycle">商户回收会员积分管理</a></li>
                <li><a data-toggle="tab" href="#tab-shop">商户列表</a></li>
            </ul>
            <div class="tab-content form-horizontal">
                <div id="tab-admin" class="tab-pane active">
                    <div class="panel-body">
                        <h3>员工管理</h3>
                        <div class="hr-line-dashed"></div>
                        <div class="row" style="height:30px">
                            <div class="col-xs-6">
                                <label class="col-xs-6 control-label">部门管理[浏览]</label>
                                 <div class="col-xs-6 switch">
                                            <input type="checkbox" name="authorize[]" value="checkin.browse" data-size="small" data-on-text="开启" data-off-text="关闭" checked="" />
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <label class="col-xs-6 control-label">部门管理[编辑]</label>
                                <div class="col-xs-6 switch">
                                            <input type="checkbox" name="authorize[]" value="checkin.browse" data-size="small" data-on-text="开启" data-off-text="关闭" checked="" />
                                </div>
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="row" style="height:30px">
                            <div class="col-xs-6">
                                <label class="col-xs-6 control-label">员工管理[浏览]</label>
                            <div class="col-xs-6 switch">
                                            <input type="checkbox" name="authorize[]" value="checkin.browse" data-size="small" data-on-text="开启" data-off-text="关闭" checked="" />
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <label class="col-xs-6 control-label">员工管理[编辑]</label>
                             <div class="col-xs-6 switch">
                                            <input type="checkbox" name="authorize[]" value="checkin.browse" data-size="small" data-on-text="开启" data-off-text="关闭" checked="" />
                                </div>
                            </div>
                        </div>
<div class="hr-line-dashed"></div>
                        <div class="row" style="height:30px">
                            <div class="col-xs-6">
                                <label class="col-xs-6 control-label">员工管理[浏览]</label>
                            <div class="col-xs-6 switch">
                                            <input type="checkbox" name="authorize[]" value="checkin.browse" data-size="small" data-on-text="开启" data-off-text="关闭" checked="" />
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <label class="col-xs-6 control-label">员工管理[编辑]</label>
                             <div class="col-xs-6 switch">
                                            <input type="checkbox" name="authorize[]" value="checkin.browse" data-size="small" data-on-text="开启" data-off-text="关闭" checked="" />
                                </div>
                            </div>
                        </div>
<div class="hr-line-dashed"></div>
                        <div class="row" style="height:30px">
                            <div class="col-xs-6">
                                <label class="col-xs-6 control-label">员工管理[浏览]</label>
                            <div class="col-xs-6 switch">
                                            <input type="checkbox" name="authorize[]" value="checkin.browse" data-size="small" data-on-text="开启" data-off-text="关闭" checked="" />
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <label class="col-xs-6 control-label">员工管理[编辑]</label>
                             <div class="col-xs-6 switch">
                                            <input type="checkbox" name="authorize[]" value="checkin.browse" data-size="small" data-on-text="开启" data-off-text="关闭" checked="" />
                                </div>
                            </div>
                        </div>
<div class="hr-line-dashed"></div>
                        <div class="row" style="height:30px">
                            <div class="col-xs-6">
                                <label class="col-xs-6 control-label">员工管理[浏览]</label>
                            <div class="col-xs-6 switch">
                                            <input type="checkbox" name="authorize[]" value="checkin.browse" data-size="small" data-on-text="开启" data-off-text="关闭" checked="" />
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <label class="col-xs-6 control-label">员工管理[编辑]</label>
                             <div class="col-xs-6 switch">
                                            <input type="checkbox" name="authorize[]" value="checkin.browse" data-size="small" data-on-text="开启" data-off-text="关闭" checked="" />
                                </div>
                            </div>
                        </div>
<div class="hr-line-dashed"></div>
                        <div class="row" style="height:30px">
                            <div class="col-xs-6">
                                <label class="col-xs-6 control-label">员工管理[浏览]</label>
                            <div class="col-xs-6 switch">
                                            <input type="checkbox" name="authorize[]" value="checkin.browse" data-size="small" data-on-text="开启" data-off-text="关闭" checked="" />
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <label class="col-xs-6 control-label">员工管理[编辑]</label>
                             <div class="col-xs-6 switch">
                                            <input type="checkbox" name="authorize[]" value="checkin.browse" data-size="small" data-on-text="开启" data-off-text="关闭" checked="" />
                                </div>
                            </div>
                        </div>
<div class="hr-line-dashed"></div>
                        <div class="row" style="height:30px">
                            <div class="col-xs-6">
                                <label class="col-xs-6 control-label">员工管理[浏览]</label>
                            <div class="col-xs-6 switch">
                                            <input type="checkbox" name="authorize[]" value="checkin.browse" data-size="small" data-on-text="开启" data-off-text="关闭" checked="" />
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <label class="col-xs-6 control-label">员工管理[编辑]</label>
                             <div class="col-xs-6 switch">
                                            <input type="checkbox" name="authorize[]" value="checkin.browse" data-size="small" data-on-text="开启" data-off-text="关闭" checked="" />
                                </div>
                            </div>
                        </div>
<div class="hr-line-dashed"></div>
                        <div class="row" style="height:30px">
                            <div class="col-xs-6">
                                <label class="col-xs-6 control-label">员工管理[浏览]</label>
                            <div class="col-xs-6 switch">
                                            <input type="checkbox" name="authorize[]" value="checkin.browse" data-size="small" data-on-text="开启" data-off-text="关闭" checked="" />
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <label class="col-xs-6 control-label">员工管理[编辑]</label>
                             <div class="col-xs-6 switch">
                                            <input type="checkbox" name="authorize[]" value="checkin.browse" data-size="small" data-on-text="开启" data-off-text="关闭" checked="" />
                                </div>
                            </div>
                        </div>
<div class="hr-line-dashed"></div>
                        <div class="row" style="height:30px">
                            <div class="col-xs-6">
                                <label class="col-xs-6 control-label">员工管理[浏览]</label>
                            <div class="col-xs-6 switch">
                                            <input type="checkbox" name="authorize[]" value="checkin.browse" data-size="small" data-on-text="开启" data-off-text="关闭" checked="" />
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <label class="col-xs-6 control-label">员工管理[编辑]</label>
                             <div class="col-xs-6 switch">
                                            <input type="checkbox" name="authorize[]" value="checkin.browse" data-size="small" data-on-text="开启" data-off-text="关闭" checked="" />
                                </div>
                            </div>
                        </div>
<div class="hr-line-dashed"></div>
                        <div class="row" style="height:30px">
                            <div class="col-xs-6">
                                <label class="col-xs-6 control-label">员工管理[浏览]</label>
                            <div class="col-xs-6 switch">
                                            <input type="checkbox" name="authorize[]" value="checkin.browse" data-size="small" data-on-text="开启" data-off-text="关闭" checked="" />
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <label class="col-xs-6 control-label">员工管理[编辑]</label>
                             <div class="col-xs-6 switch">
                                            <input type="checkbox" name="authorize[]" value="checkin.browse" data-size="small" data-on-text="开启" data-off-text="关闭" checked="" />
                                </div>
                            </div>
                        </div>
<div class="hr-line-dashed"></div>
                        <div class="row" style="height:30px">
                            <div class="col-xs-6">
                                <label class="col-xs-6 control-label">员工管理[浏览]</label>
                            <div class="col-xs-6 switch">
                                            <input type="checkbox" name="authorize[]" value="checkin.browse" data-size="small" data-on-text="开启" data-off-text="关闭" checked="" />
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <label class="col-xs-6 control-label">员工管理[编辑]</label>
                             <div class="col-xs-6 switch">
                                            <input type="checkbox" name="authorize[]" value="checkin.browse" data-size="small" data-on-text="开启" data-off-text="关闭" checked="" />
                                </div>
                            </div>
                        </div>
<div class="hr-line-dashed"></div>
                        <div class="row" style="height:30px">
                            <div class="col-xs-6">
                                <label class="col-xs-6 control-label">员工管理[浏览]</label>
                            <div class="col-xs-6 switch">
                                            <input type="checkbox" name="authorize[]" value="checkin.browse" data-size="small" data-on-text="开启" data-off-text="关闭" checked="" />
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <label class="col-xs-6 control-label">员工管理[编辑]</label>
                             <div class="col-xs-6 switch">
                                            <input type="checkbox" name="authorize[]" value="checkin.browse" data-size="small" data-on-text="开启" data-off-text="关闭" checked="" />
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
                <div id="tab-member" class="tab-pane">
                    <div class="panel-body">
                        <h3>会员管理</h3>
                        <div class="hr-line-dashed"></div>
                        <div class="row" style="height:30px">
                            <div class="col-xs-6">
                                <label class="col-xs-6 control-label">浏览</label>
                             <div class="col-xs-6 switch">
                                            <input type="checkbox" name="authorize[]" value="checkin.browse" data-size="small" data-on-text="开启" data-off-text="关闭" checked="" />
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <label class="col-xs-6 control-label">查看会员资料</label>
                              <div class="col-xs-6 switch">
                                            <input type="checkbox" name="authorize[]" value="checkin.browse" data-size="small" data-on-text="开启" data-off-text="关闭" checked="" />
                                </div>
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="row" style="height:30px">
                            <div class="col-xs-6">
                                <label class="col-xs-6 control-label">积分记录</label>
                            <div class="col-xs-6 switch">
                                            <input type="checkbox" name="authorize[]" value="checkin.browse" data-size="small" data-on-text="开启" data-off-text="关闭" checked="" />
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <label class="col-xs-6 control-label">发送消息</label>
                                 <div class="col-xs-6 switch">
                                            <input type="checkbox" name="authorize[]" value="checkin.browse" data-size="small" data-on-text="开启" data-off-text="关闭" checked="" />
                                </div>
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="row" style="height:30px">
                            <div class="col-xs-6">
                                <label class="col-xs-6 control-label">冻结</label>
                               <div class="col-xs-6 switch">
                                            <input type="checkbox" name="authorize[]" value="checkin.browse" data-size="small" data-on-text="开启" data-off-text="关闭" checked="" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="tab-checkin" class="tab-pane">
                    <div class="panel-body">
                        <h3>商户入驻审核</h3>
                        <div class="hr-line-dashed"></div>
                        <div class="row" style="height:30px">
                            <div class="col-xs-6">
                                <label class="col-xs-6 control-label">浏览</label>
                                <div class="col-xs-6 switch">
                                            <input type="checkbox" name="authorize[]" value="checkin.browse" data-size="small" data-on-text="开启" data-off-text="关闭" checked="" />
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <label class="col-xs-6 control-label">审核</label>
                               <div class="col-xs-6 switch">
                                            <input type="checkbox" name="authorize[]" value="checkin.browse" data-size="small" data-on-text="开启" data-off-text="关闭" checked="" />
                                </div>
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="row" style="height:30px">
                            <div class="col-xs-6">
                                <label class="col-xs-6 control-label">编辑</label>
                             <div class="col-xs-6 switch">
                                            <input type="checkbox" name="authorize[]" value="checkin.browse" data-size="small" data-on-text="开启" data-off-text="关闭" checked="" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              
            </div>
        </div>
    </div>
</div>
<script src="/admin/js/jquery.min.js"></script>
<script src="/admin/js/bootstrap.min.js"></script>
<script src="/admin/js/bootstrap-switch.min.js"></script>
    <script>
      $(function(){
        $('[name="authorize[]"]').bootstrapSwitch();
        $('#authorizeNavtabs a:first').tab('show');
      });
      function getAuthorize(){
        var authorize = [];
        $('[name="authorize[]"]:checked').each(function(index, el) {
          authorize.push($(this).val());
        });
        return authorize.join(',');
      }
    </script>
</body>
</html>