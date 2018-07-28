<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:93:"C:\Users\asus\Desktop\thinkphp\public/../application/index\view\jurisdiction\jurisdiction.php";i:1532403278;}*/ ?>
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
    </style>
</head>
<body  class="gray-bg">
<?php $authorizelist = explode(',', $_GET['authorizelist']);?>    
<div class="wrapper wrapper-content fadeInRight">
    <div class="tabs-container">
        <div class="tabs-right">

            <ul class="nav nav-tabs" id="authorizeNavtabs" style="margin-left:0">
                 <?php
                 $num = 0;
                    foreach ($admin_permissions as $k => $v) {
                        if($num==0){
                            $str = 'aria-expanded="true"';
                            $class = 'class="active"';
                        }else{
                           $str = $class = '';
                        }
                        $num ++;
                        echo '<li '. $class .' ><a data-toggle="tab" href="#'.$k.'" '.$str .' >'.$v['_title'].'</a></li>';
                    }
                    ?>
            </ul>
           <div class="tab-content form-horizontal">
            
                <?php
                    $num = 0;
                    foreach ($admin_permissions as $k => $v) {
                        if($num==0){
                            $class = 'active';
                        }else{
                          $class = '';
                        }
                        $num ++;
                ?>
                <div id="<?php echo $k;?>" class="tab-pane <?php echo $class;?>">
                    <div class="panel-body">
                        <h3><?php echo $v['_title'];?></h3>
                       

                  <?php 
                        $i = 0;
                        $count = count($v);
                        foreach ($v as $kk => $vv) {
                            if ($i != 0) {
                                if ($i % 2 == 1) {
                                    echo '<div class="hr-line-dashed"></div>';
                                    echo '<div class="row" style="height:30px">';
                                }
                                echo '<div class="col-xs-6">';
                                echo '<label class="col-xs-6 control-label">' . $vv . '</label>';
                                $ischecked = '';
                                if (in_array($k . '.' . $kk, $authorizelist)) {
                                    $ischecked = 'checked';
                                }
                                echo '<div class="col-xs-6 switch"><input type="checkbox" name="authorize[]" value="' . $k . '.' . $kk . '" data-size="small" data-on-text="开启" data-off-text="关闭" ' . $ischecked . '  /></div>';
                                echo '</div>';
                                if ($i % 2 == 0 || $i + 1 == $count) {
                                    echo '</div>';
                                }
                            }
                            $i++;
                        }?>
                    </div>
                </div>
            <?php }?>
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