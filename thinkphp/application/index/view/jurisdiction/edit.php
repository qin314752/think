{include file="public/_meta" /}
{include file="public/_footer" /}
<div class="page-container">
  <form action="" method="post" class="demoform form form-horizontal" id="form-article-add">
    <div class="row cl">
      <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>产品标题：</label>
      <div class="formControls col-xs-8 col-sm-9">
        <input type="text" class="input-text" value=" " datatype="s5-16" errormsg="昵称至少5个字符,最多16个字符！" placeholder="" id="" name="">
      </div>
    </div>
    <div class="row cl">
      <label class="form-label col-xs-4 col-sm-2">权限：</label>
      <div class="formControls col-xs-8 col-sm-9">
        <button type="button" style="width: 80px;height: 30px; border-radius: 2px;   border: 1px solid #d2d2d2;color: inherit;background:#fff ">编辑权限</button>  
      </div>
    </div>
    <div class="row cl">
      <div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-2">
        <button onClick="article_save();" class="btn btn-secondary radius" type="button"><i class="Hui-iconfont">&#xe632;</i> 保存</button>
        <button onClick="layer_close();" class="btn btn-default radius" type="button">&nbsp;&nbsp;取消&nbsp;&nbsp;</button>
      </div>
    </div>
  </form>
</div>



<!--请在下方写此页面业务相关的脚本-->

<script type="text/javascript">
$(function(){


$(".demoform").Validform();
});
</script>
</body>
</html>