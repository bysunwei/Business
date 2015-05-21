<?php
/**
 * Created by PhpStorm.
 * User: sunwei
 * Date: 2015/5/21
 * Time: 11:02
 */
function getdropinner($id)
{
    $cat = M("Nav");
    $where["pid"] = $id;
    $where["isshow"] = '1';
    $catname = $cat->where($where)->select();
    $retcatname = "";
    foreach ($catname as $value) {
        $retcatname = $retcatname . '<li><a target="_blank" href="./index.php/index/' . $value['url'] . '"">' . $value["name"] . "</a></li>";
    }
    return $retcatname;
}