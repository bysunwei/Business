<?php if (!defined('THINK_PATH')) exit();?><div class="bjui-pageContent">
    <form action="/index.php/Admin/Inner/updatenav" class="pageForm" data-toggle="validate">
        <input type="hidden" name="id" value="<?php echo ($navinfo["id"]); ?>">
        <table class="table table-condensed table-hover">
            <tbody>
            <tr>
                <td>
                    <label for="j_dialog_name" class="control-label x90">名称：</label>
                    <input type="text" name="name" id="j_dialog_name" value="<?php echo ($navinfo["name"]); ?>" data-rule="required" size="20">
                </td>
            </tr>

            <tr>
                <td>
                    <label for="j_dialog_show" class="control-label x90">是否显示：</label>
                    <select name="isshow" id="j_dialog_show" data-toggle="selectpicker">
                        <option value="0" <?php if($navinfo['isshow'] == 0): ?>selected<?php else: endif; ?>>隐藏</option>
                        <option value="1" <?php if($navinfo['isshow'] == 1): ?>selected<?php else: endif; ?>>显示</option>

                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="j_dialog_url" class="control-label x90">链接地址：</label>
                    <input type="text" name="url" id="j_dialog_url" value="<?php echo ($navinfo["url"]); ?>" size="20">
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