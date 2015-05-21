<?php if (!defined('THINK_PATH')) exit();?><div class="bjui-pageContent">
    <form action="/index.php/Admin/Inner/updatead" class="pageForm" data-toggle="validate" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo ($adinfo["id"]); ?>">
        <table class="table table-condensed table-hover">
            <tbody>
            <tr>
                <td>
                    <label for="j_dialog_name" class="control-label x90">名称：</label>
                    <input type="text" name="name" id="j_dialog_name" value="<?php echo ($adinfo["name"]); ?>" data-rule="required" size="20">
                </td>
            </tr>

            <tr>
                <td>
                    <label for="j_dialog_show" class="control-label x90">广告位置：</label>
                    <select name="ad_position" id="j_dialog_show" data-toggle="selectpicker">
                        <option value="1" <?php if($adinfo['position'] == 1): ?>selected<?php else: endif; ?>>幻灯片</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="j_dialog_img" class="control-label x90">图片：</label>
                    <input type="file" name="ad_img" id="j_dialog_img" value="<?php echo ($adinfo["ad_img"]); ?>" size="20">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="j_dialog_link" class="control-label x90">链接地址：</label>
                    <input type="text" name="link" id="j_dialog_link" value="<?php echo ($adinfo["ad_link"]); ?>" size="20">
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