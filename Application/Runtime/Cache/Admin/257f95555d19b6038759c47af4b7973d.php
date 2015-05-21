<?php if (!defined('THINK_PATH')) exit();?><div class="bjui-pageContent">
    <form action="/index.php/Admin/Inner/addad" class="pageForm" data-toggle="validate"  enctype="multipart/form-data" >
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
                    <label for="j_dialog_position" class="control-label x90">位置：</label>
                    <select name="ad_position" id="j_dialog_position" data-toggle="selectpicker">
                        <option value="1">首页幻灯片</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <label class="control-label x85">图片：</label>
                    <input name="ad_img" type="file" size="30" value=""   />
                </td>
            </tr>
            <tr>
                <td>
                    <label for="j_dialog_url" class="control-label x90">链接地址：</label>
                    <input type="text" name="ad_url" id="j_dialog_url" value="<?php echo ($navinfo["url"]); ?>" size="20">
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