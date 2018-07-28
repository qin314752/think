<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:85:"C:\Users\asus\Desktop\thinkphp\public/../application/index\view\jurisdiction\edit.php";i:1532670410;s:70:"C:\Users\asus\Desktop\thinkphp\application\index\view\public\_meta.php";i:1532418849;s:72:"C:\Users\asus\Desktop\thinkphp\application\index\view\public\_footer.php";i:1532675088;}*/ ?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<link rel="Bookmark" href="/favicon.ico" >
<link rel="Shortcut Icon" href="/favicon.ico" />
<!--[if lt IE 9]>
<script type="text/javascript" src="/admin/lib/html5shiv.js"></script>
<script type="text/javascript" src="/admin/lib/respond.min.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="/admin/static/h-ui/css/H-ui.min.css" />
<link rel="stylesheet" type="text/css" href="/admin/static/h-ui.admin/css/H-ui.admin.css" />
<link rel="stylesheet" type="text/css" href="/admin/lib/Hui-iconfont/1.0.8/iconfont.css" />
<link rel="stylesheet" type="text/css" href="/admin/static/h-ui.admin/skin/default/skin.css" id="skin" />
<link rel="stylesheet" type="text/css" href="/admin/static/h-ui.admin/css/style.css" />
<link rel="stylesheet" type="text/css" href="/css/admin.css" />

<link rel="stylesheet" type="text/css" href="/css/sweetalert.css"/>
<!--[if IE 6]>
<script type="text/javascript" src="/admin/lib/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<title>H-ui.admin v3.1</title>
<meta name="keywords" content="H-ui.admin v3.1,H-ui网站后台模版,后台模版下载,后台管理系统模版,HTML后台模版下载">
<meta name="description" content="H-ui.admin v3.1，是一款由国人开发的轻量级扁平化网站后台模板，完全免费开源的网站后台管理系统模版，适合中小型CMS后台系统。">
</head>
<body>
<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="/admin/lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="/admin/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="/admin/static/h-ui/js/H-ui.min.js"></script>
<script type="text/javascript" src="/admin/static/h-ui.admin/js/H-ui.admin.js"></script> 
<!--/_footer 作为公共模版分离出去-->
<script type="text/javascript" src="/js/Validform_v5.3.2.js"></script> 
<!-- 分页 -->
<script type="text/javascript" src="/admin/lib/laypage/1.2/laypage.js"></script>
<script type="text/javascript" src="/admin/lib/datatables/1.10.0/jquery.dataTables.min.js"></script> 
<script type="text/javascript" src="/admin/lib/My97DatePicker/4.8/WdatePicker.js"></script> 
<?php ?>
<div class="page-container">
  <form class="demoform form form-horizontal" action="jurisdiction_data" id='demoform'>
    <div class="row cl">
      <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>产品标题：</label>
      <div class="formControls col-xs-8 col-sm-9">
        <input type="text" name='name' class="input-text" value="<?php if(isset($data['name'])){echo $data['name'];}?>" datatype="s1-16" errormsg="昵称至少1个字符,最多16个字符！" >
      </div>
    </div>
    <input type="hidden" name="tbid" value="<?php if(isset($data['tbid'])){echo $data['tbid'];}?>">
    <div class="row cl">
      <label class="form-label col-xs-4 col-sm-2">权限：</label>
      <div class="formControls col-xs-8 col-sm-9">
        <p class="form-control-static" id="authorizeInfo" -style="display:none"><?php if(isset($data['authorizeInfo'])){echo $data['authorizeInfo'];}?></p>
        <input type="hidden" name="authorizelist" id="authorizelist" dataType="*" nullmsg="还没有选择任何权限，请编辑权限" value="<?php if(isset($data['authorizelist'])){echo $data['authorizelist'];}?>">
        <button type="button" style="width: 80px;height: 30px; border-radius: 2px;   border: 1px solid #d2d2d2;color: inherit;background:#fff " onclick="edit()">编辑权限</button>  
      </div>
    </div>
    <div class="row cl">
      <div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-2">
        <button class="btn btn-secondary radius" id='btn-submit' type="submit"><i class="Hui-iconfont">&#xe632;</i> 保存</button>
        <button onClick="layer_close();" class="btn btn-default radius" type="button">&nbsp;&nbsp;取消&nbsp;&nbsp;</button>
      </div>
    </div>
  </form>
</div>



<!--请在下方写此页面业务相关的脚本-->

<script type="text/javascript">

function edit(){
  layer.open({
            type:2,
            title: '新增',
            closeBtn: false,
            area: ['60%', '80%'],
            shade: false,
            move: false,
            closeBtn:1, 
            shade:[0.5,'#000'],
            content: 'Jurisdiction?authorizelist='+$('#authorizelist').val(),
            btn: ['确认', '取消'],
            yes: function(index, layero){
                $('#authorizelist').val(window.frames[$(layero).find('iframe').attr('name')].getAuthorize());
                getAuthorizeInfo();
                layer.close(index);
            },
            btn2: function(index){
                layer.close(index);
            }
        });

}
function getAuthorizeInfo(){
        if($('#authorizelist').val() != ''){
            $.ajax({
                url: 'getAuthorizeInfo',
                type: 'GET',
                dataType: 'JSON',
                data: {
                    authorizelist: $('#authorizelist').val(),
                    str:1,
                }
            }).done(function(cb) {
                $('#authorizeInfo').show();
                $('#authorizeInfo span').remove();
                $(cb).each(function(index, el) {
                    $('#authorizeInfo').append('<span class="Jurisdiction_edit_span" style="line-height:2.2">'+this+'</span> ');
                });
            });
        }else{
            $('#authorizeInfo span').remove().hide();
        }
    }
</script>
<script type="text/javascript">
  

    $('#demoform').Validform({
        btnSubmit: '#btn-submit',
        postonce: false,
        showAllError: true,
        ajaxPost: true,
        tiptype: function(msg, o){
           
        },
        callback: function(data){
          if(data=='y'){
            alert('成功');
          }else{
            alert(data);
          }
        }
        
    });
  
       
</script>
</body>
</html>