---
layout: self
title: 留言板
subtitle: 你的留言是对我们最大的支持！
---

<div style="text-align: center;">
<form action="" method="GET">
    <p>昵称：<input type="text" name="name"></p>
    <p>
    性别：<input type="radio" name="sex" value="男"> 男
    <input type="radio" name="sex" value="女">女
    </p>
    <p>年龄: <select name="age" id="">
        <option value="18岁以上">18岁以上</option>
        <option value="18岁以下">18岁以下</option>
    </select></p>
    <p>留言内容:</p>
    <p><textarea name="content" id="" cols="30" rows="10"></textarea></p>
    <p>
    <button>留言</button>
    <input type="reset" value="重置">
    </p>
</form>
</div>

<!-- <?php
$link = mysqli_connect("127.0.0.1","root","root","liuyan") or exit("数据库连接失败！");
mysqli_set_charset($link,'utf8');
$sql = "SELECT * FROM content";
$res = mysqli_query($link,$sql);
$row = mysqli_fetch_row($res);
echo mysqli_errno($link),"<br>";
echo mysqli_error($link),"<br>";
$data = [];
while($row)
{
    $data = $row;
}
var_dump($row);
mysqli_close($link); -->

<!-- {% include page/about.html %} -->
