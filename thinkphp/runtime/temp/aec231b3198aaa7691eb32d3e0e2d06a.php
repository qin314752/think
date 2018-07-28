<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:86:"C:\Users\asus\Desktop\thinkphp\public/../application/index\view\jurisdiction\index.php";i:1532675232;s:70:"C:\Users\asus\Desktop\thinkphp\application\index\view\public\_meta.php";i:1532418849;s:72:"C:\Users\asus\Desktop\thinkphp\application\index\view\public\_footer.php";i:1532675088;}*/ ?>
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
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 管理员管理 <span class="c-gray en">&gt;</span> 权限管理 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="page-container">
	<div class="cl pd-5 bg-1 bk-gray mt-20"> <span class="l"> <a href="javascript:;" onclick="admin_permission_add('新增','edit','','310')" class="btn btn-primary radius"><i class="Hui-iconfont">&#xe600;</i> 新增</a></span>  </div>
	<table class="table table-border table-bordered table-bg">
		<thead>
			<tr>
				<th scope="col" colspan="7">权限节点</th>
			</tr>
			<tr class="text-c">
				<th width="200">权限名称</th>
				<th>字段名</th>
				<th width="100">操作</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($data as $k=>$v){?>
			<tr class="text-c">
				<td><?php echo $v['name']?></td>
				<td><?php echo $v['authorizelist']?></td>
				<td><a title="编辑" href="javascript:;" onclick="admin_permission_edit('编辑','edit',<?php echo $v['tbid']?>)" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6df;</i></a> <a title="删除" href="javascript:;" onclick="admin_permission_del('删除','delete',<?php echo $v['tbid']?>)" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i></a></td>
			</tr>
		<?php }?>
		</tbody>
	</table>
</div>


<script src="/js/sweetalert.min.js"></script>

<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript">
	

/*管理员-权限-添加*/
function admin_permission_add(title,url,w,h){
	 layer.open({
               	type:2,
				title: '新增',
		        closeBtn: false,
		        area: ['100%', '100%'],
		        shade: false,
		        move: false,
		        closeBtn:1, 
		        shade:[0.5,'#000'],
                content: 'edit',
            });
	}
function getAuthorizeInfo(){
        if($('#authorizelist').val() != ''){
            $.ajax({
                url: 'department.ajax.php',
                type: 'GET',
                dataType: 'JSON',
                data: {
                    ac: 'getAuthorizeInfo',
                    authorizelist: $('#authorizelist').val()
                }
            }).done(function(cb) {
                $('#authorizeInfo').show();
                $('#authorizeInfo span').remove();
                $(cb).each(function(index, el) {
                    $('#authorizeInfo').append('<span class="label" style="line-height:2.2">'+this+'</span> ');
                });
            });
        }else{
            $('#authorizeInfo span').remove().hide();
        }
    }
/*管理员-权限-编辑*/
function admin_permission_edit(title,url,id){
	 layer.open({
               	type:2,
				title: title,
		        closeBtn: false,
		        area: ['100%', '100%'],
		        shade: false,
		        move: false,
		        closeBtn:1, 
		        shade:[0.5,'#000'],
                content: url+'?tbid='+id,
            });
}

/*管理员-权限-删除*/
function admin_permission_del(title,url,id){
	layer.confirm('确认要删除吗？',function(index){
		$.ajax({
			type: 'POST',
			url: url,
			dataType: 'json',
			data:{
				tbid:id
			},
			success: function(data){
				if(data=='y'){
					layer.msg('已删除!',{icon:1,time:1500});
					location.replace(location.href);
				}else{
					layer.msg('失败!',{icon:0,time:1500});
				}
			},
			error:function(data) {
				console.log(data);
			},
		});		
	});
}
</script>
</body>
</html>