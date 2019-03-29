
<?php
require_once '../vendor/autoload.php';
use Cate\Nested;
$cate = [
    ['id' => 1, 'name' => '标题', 'pid' => 0],
    ['id' => 2, 'name' => "编号标题", 'pid' => 1],
    ['id' => 3, 'name' => "框线标题", 'pid' => 1],
    ['id' => 4, 'name' => "底色标题", 'pid' => 1],
    ['id' => 5, 'name' => "图片标题", 'pid' => 1],
    ['id' => 6, 'name' => "纯序号", 'pid' => 1],
    ['id' => 7, 'name' => '正文', 'pid' => 0],
    ['id' => 8, 'name' => '引用', 'pid' => 7],
    ['id' => 9, 'name' => '段落文字', 'pid' => 7],
    ['id' => 10, 'name' => '边框内容', 'pid' => 7],
    ['id' => 11, 'name' => '序号/轴线', 'pid' => 7],
    ['id' => 12, 'name' => '单页', 'pid' => 7],
    ['id' => 13, 'name' => '竖排', 'pid' => 7],
    ['id' => 14, 'name' => '引导', 'pid' => 0],
    ['id' => 15, 'name' => '分割线', 'pid' => 14],
    ['id' => 16, 'name' => '引导关注', 'pid' => 14],
    ['id' => 17, 'name' => '引导阅读原文', 'pid' => 14],
    ['id' => 18, 'name' => '引导分享', 'pid' => 14],
    ['id' => 19, 'name' => '引导赞', 'pid' => 14],
    ['id' => 20, 'name' => '二维码', 'pid' => 14],
];

$parentsID = Nested::getParentsID($cate, 2);

print_r($parentsID);
?>