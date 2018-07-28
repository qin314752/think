{include file="public/_meta" /}
{include file="public/_footer" /}
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