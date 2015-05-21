<?php if (!defined('THINK_PATH')) exit();?><script>
    $(function(){
        $('#j_dialog_pid').change(function() {
            var p1 = $(this).children('option:selected').attr("level");//这就是selected的值
            $("#j_dialog_level").val(parseInt(p1)+1)
        })
    })
</script>
<div class="bjui-pageContent">
    <form action="/index.php/Admin/Inner/addnav" class="pageForm" data-toggle="validate"   >
        <table class="table table-condensed table-hover">
            <tbody>
            <tr>
                <td>
                    <label for="j_dialog_name" class="control-label x90">名称：</label>
                    <input type="text" name="name" id="j_dialog_name" value="" data-rule="required" size="20">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="j_dialog_pid" class="control-label x90">上级菜单：</label>
                    <select name="pid" id="j_dialog_pid" data-toggle="selectpicker">
                        <option value="0">顶层</option>
                        <?php if(is_array($navlist)): $i = 0; $__LIST__ = $navlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$navvo): $mod = ($i % 2 );++$i;?><option level="<?php echo ($navvo["level"]); ?>" value="<?php echo ($navvo["id"]); ?>" <?php if($navvo["level"] == 3): ?>disabled style=" cursor: not-allowed;"<?php else: endif; ?>><?php echo ($navvo["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="j_dialog_level" class="control-label x90">层级：</label>
                    <input type="text" name="level" id="j_dialog_level" value="0" data-rule="required" size="20" readonly>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="j_dialog_show" class="control-label x90">是否显示：</label>
                    <select name="isshow" id="j_dialog_show" data-toggle="selectpicker">
                        <option value="0" >隐藏</option>
                        <option value="1" >显示</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="j_dialog_url" class="control-label x90">链接地址：</label>
                    <input type="text" name="url" id="j_dialog_url" value="" size="20">
                </td>
            </tr>
            </tbody>
        </table>
    </form>
</div>
<div class="bjui-pageFooter">
    <ul>
        <li><button type="button" class="btn-close">关闭</button></li>
        <li><button type="submit" class="btn-default">保存</button></li>
    </ul>
</div>