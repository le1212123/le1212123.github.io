<?php
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
mysqli_close($link);