---
layout: page
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