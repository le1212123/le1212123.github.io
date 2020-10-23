---
layout: self
title:  "JavaScript"
subtitle: "web前端开发师必备知识"
date:   2020-10-23 20:14:21 +0530
categories: ["WEB基础知识"]
---
 
# js

 > JavaScript

## 输出

	alert() 弹出警告框。
	confirm() 弹出确认框。返回值 = bool 确定（true）
	document.write() 方法将内容写到 HTML 文档中。
	innerHTML 写入到 HTML 元素。
	console.log() 写入到浏览器的控制台。

	输入框: 取回来的值是字符型
	prompt("tis",【"default"】) 弹出提示框。确认返回值为输入的值。取消返回 null。


## 常用函数
	isNaN();
	判断值是否不是数字

	isNumeric()
	判断值是否是数字

	可用于表单的邮箱验证；
	indexOf() 
	返回某个指定的字符串值在字符串中首次出现的位置。
	lastIndexOf() 
	返回一个指定的字符串值最后出现的位置

	getById.checkValidity()	
	如果 input 元素中的数据是合法的返回 true，否则返回 false。(max min)
	
	getById.setCustomValidity()
	为validationMessage属性存放错误信息

	JSON.parse() 
	将字符串转换为 JavaScript 对象:

	setTimeout("回调函数",毫秒数(int))
	setTimeout("funcname",毫秒数(int))
	消耗毫秒数后执行回调函数

	clearTimeout() 
	停止执行setTimeout()方法的函数代码。

	setInterval() 
	指定毫秒数不停地执行指定的代码。

	clearInterval() 
	停止 setInterval() 方法执行的函数代码。

	funcname.call() 和 funcname.apply()
	两个方法可用于调用函数
	第一个参数必须是对象本身,后面是实参

	toUpperCase()
	将小写字母转为大写字母。

	match()
	查找字符串中特定的字符，找到的话则返回这个字符。

	replace(搜索值,替换值) 
	替换字符

	toUpperCase();   
	文本转换为大写

	toLowerCase();  
	文本转换为小写

	split()
	指定字符分割字符串转换为数组

## 常用属性
	arr.length 
	设置或返回数组中元素的数目。

	getById.validationMessage	
	浏览器错误提示信息(checkValidity)


	constructor 
	返回值对应的构造函数
	"value".construct;// function String() { [native code] }

	arguments.length 
	回函数调用过程接收到的参数个数
	可以不用设置形参

	arguments[int]
	函数内使用，返回第n个参数
	
	funcname.toString() 
	将函数作为一个字符串返回:

	innerHTML 
	初始内容，可改可不改

	funcName.prototype.name
	给对象的构造函数添加新的属性和方法

## 事件

	onmouseover  
	鼠标移到区域事件（this）

	onmouseout   
	鼠标移出区域事件 (this)

- 表单常用事件(其他元素也可以适用)

	onchange 
	文本内容改变弹出提示事件 *（this）

	onselect 
	文本框选中事件（this）

	onfocus 
	鼠标聚集事件（this）

	onblur 
	鼠标移开事件（this）
 
	onload 
	网页加载事件

	onunload 
	网页离开事件

	onkeydown	
	用户按下键盘按键

	onsubmit = "return funcname()"
	form表单提交事件(form)
	
	onmousedown
	鼠标按下
	
	onmouseup
	鼠标弹起

	onresize
	窗口或框架被调整大小时发生。

一.
《div class="div" **onmouseout**="onOut(this)" **onmouseover**="onOver(this)"》《/div》

    <script>
		function onOver(ooj){
			ooj.innerHTML = "hello";
		}
		function onOut(ooj){
			ooj.innerHTML = "world";
		}
    </script>

二.

**form**

    <input type="text" **onchange**="alert('hello,内容改变了')">

    <input type="text" **onselect**="changeDemo(this)" **onfocus**="changDemo02(this)">

**/form**

	<script>
		function changeDemo(bg){
			bg.style.background="blue";
		}
        function changDemo02(bg){
			bg.style.background= "red";
		}
	</script>


	修改其他元素内容：绑id (getElementById())
	修改自身元素的内容： 使用 this

## 表单

	var x = document.getElementById("name").value;
	绑定表单输入框的值(id)，可验证输入

    var x = document.forms["myForm"]["fname"].value;
    绑定表单输入框的值(name)，可验证输入
    return false;// 阻止表单提交
	["myForm"] 表单的name
	["fname"]	输入框的name
	使用：常常配合表单提交事件

## js定义函数
	1.使用关键字 function name (){}
	可先调用再定义
	2.函数表达式(匿名函数)
	var x = function(a, b) {return a * b};

	js的函数形参和实参的个数可以不匹配
	
	return 只能返回一个值(最后的值)
	返回多个值可以用数组
	不可先调用再定义

### 原因: js预解析（面试题）

	js引擎会把js里面的所有 var function (定义变量和函数)提升到当前作用域的最前面，剩余依次罗列
	变量只是提升，不参与赋值



## 自调用函数
	如果表达式后面紧跟 () ，则会自动调用。
	不能自调用声明的函数。

	匿名自我调用的函数
	(function () {
    	...
	})();

## 箭头函数
	使用箭头函数的时候，默认绑定外层 this 的值，所以在箭头函数中 this 的值和外层的 this 是一样的。
	 const 比使用 var 更安全，因为函数表达式始终是一个常量。
	const x = (x, y) => x * y;
	调用 x(5,5);

## js对象
	1、定义：
	var objname = {sex:"男",demo:"function(){}"}
	调用属性(常用名词): 
	objname.sex; 
	对象名['属性名']
	调用方法(常用动词): objname.demo();

	2、定义: var obj =  new Object();
	追加属性:obj.sex = "男";
	追加方法:obj.demo = function() {}
	调用同上。

	3、定义: 利用构造函数(保存对象的公共属性和方法)创建对象，可以创建一次创建多个对象
	构造函数名首字母必须大写
	不需要return就可以返回结果
	function Demo(a,b) {
	this.name = a;
	this.sex = b
	this.sing = function() {}
	}

	调用返回的是对象:var obj = new Demo("小乐",18);
	调用先new(实例化)，其他同上

## 遍历对象 for in
	for (变量 in 对象) {}
	for(var k in obj){
	console.log(k); // 输出的是属性名
	console.log(obj[k]); // 输出的是属性值
	}

>  js中的预定义对象

	Date 对象:
	创建 Date 对象： new Date()

	Date 对象方法：所有方法都是从Date获取
	date.getDate()	返回一个月中的某一天
	getDay()	返回一周中的某一天 (0 ~ 6)。
	getFullYear()	返回年份。
	getHours()		返回小时 (0 ~ 23)。
	getMilliseconds()	返回毫秒(0 ~ 999)。
	getMinutes()	返回 分钟 (0 ~ 59)。
	getMonth()		返回月份 (0 ~ 11)。
	getSeconds()	的秒数 (0 ~ 59)。

	Array 对象:
	创建: new Array();
	JavaScript变量都是对象。数组元素是对象。函数是对象。
	可存对象元素，函数
	
	Boolean 对象:
	作用: 用于将非布尔值转换为布尔值
	new Boolean(要转换的值);

	Math（算数） 对象
	使用：不需要定义,当成常用属性使用
	Math.round(); // 四舍五入
	random()
	返回 0 到 1 之间的随机数。

	RegExp （是正则表达式) 对象
	$patt = new RegExp("正则表达式",修饰符);
	i - 不区分大小写的匹配。
	g - 全文的搜索（而不是在找到第一个就停止查找,而是找到所有的匹配）

	test()方法搜索字符串指定的值，根据结果并返回真或假。
	new RegExp("e").test("The best things in life are free");// 1

	exec() 方法检索字符串中的指定值。返回值是被找到的值。如果没有发现匹配，则返回 null。
	new RegExp("e").exec("The best things in life are free");// e

> window对象模型

	window.open() - 打开新窗口
	window.close() - 关闭当前窗口
	window.moveTo() - 移动当前窗口
	window.resizeTo() - 调整当前窗口的尺寸

	location属性：
	location.href	返回当前页面的 URL。
	location.assign 加载新的文档。
	location.hostname 返回 web 主机的域名
	location.pathname 返回当前页面的路径和文件名
	location.port 	返回 web 主机的端口 （80 或 443）
	location.protocol 返回所使用的 web 协议（http: 或 https:）

	history属性：
	history.back(void) 加载历史列表中的前一个 URL。(点击后退按钮)
	history forward() 加载历史列表中的下一个 URL。(点击前进按钮)
	history.go(int) int：1=前进一个页面 -1=后退一个页面 0=刷新

## ①.运算符

	!! JavaScript 的加法和连接都使用 + 运算符。
	字符串 + 任何数值都是拼接字符串

    <p id="sumid">  </p>
    <button onclick="mysum()">结果</button>

    <script>
       function mysum(){
        var i = 10;
        var j = 10;
        var m = i+j;
    document.getElementById("sumid").innerHTML=m;
         }
    </script>

## ②.判断语句if...else

     <script>
     var i = 10;
     if(i >10){
      document.write("我就喜欢i >= 10");

       }else if(i<10){
        document.write("为什么i<10?");
          }else{
     document.write("i到底是多少，原来是10")}
     </script>

## 判断语句③.switch

    <script>
    var i = 5;
     switch (i){
           case 1:
               document.write("i=1");
               break;//跳出当前
           case 2:
               document.write("i=2");
               break;
           default :
               document.write("条件不满足case");
               break;
     </script>

## ④.for循环

    <script>
	var i=[1,2,3];
	for (var j = 0;j<3;j++){
		document.write(i[j]+"<br>");
	}
     </script>

## ⑤.while循环

     一.
     <script>
		var i=1;
		while(i<10){
			document.write("i="+i+"<br>");
			i++;
		}
     </script>

     二.
     <script>
		var i=1;
		do{
			document.write("i="+i+"<br>");
			i++;
		}
		while(i<10){	
		}
     </script>

## ⑥.跳转语句

    <script>
	for(var i=0;i<10;i++){
		if(i==5){
			break;//continue
		}
		document.write("i="+i+"<br>");
	}
    </script>

## ⑦：调用函数

     <script>
	function demo(){
		var a = 10;
		var b = 20;
		var sum = a+b;
		alert(sum);
	}
	//demo();直接在script跳出。
     </script>

	<button onclick="demo()">结果</button>
	<p>也可以在from,input跳出</p>

## ⑧：带参数的函数

     一.
     <script>
	function demo(a,b){
		var sum = a+b;
		alert(sum);	
	}
	demo(10,20);
     </script>

     二.
    <script>
	function demo(name,age){
		alert("hellow:"+name+"我的年龄是:"+age);	
	}
    </script>

	<button onclick="demo('make',20)">按钮</button>

## ⑨：带返回值的函数

     <p id="pid"> </p>

     <script>
	function demo(a,b){
		if (a>b) {
			return "a比较大";
		}else{
			return "b比较大";
		}
	}
	document.getElementById("pid").innerHTML=demo(10,12);
     </script>

## ⑩：异常捕获

**form**

	<input id="txt" type="text">
	<input type="button" value="按钮" onclick="demo()">
	
**/form**

     <script>
	function demo(){
		var e = document.getElementById("txt").value;
		try{
			if (e=="") {
			throw "请输入";
		}
	}catch (err){
		alert(err);
	    }
            }
     </script>



## ⑬：选标签属性

	<img id="imgid" src="1.jpg">
	<button onclick="demo()"按钮></button>

	<script>
		function demo(){
			document.getElementById("imgid").src="2.jpg"
		}
	</script>

## ⑭：修改CSS

    <script>
    function demo(){
        document.getElementById("div").style.color = "blue";
      }
     </script>

## ⑮：增删句柄

     <button id="btn">按钮</button>

	<script>
		var x = document.getElementById("btn");
		x.addEventListener("click",hello);//添加句柄
		x.addEventListener("click",world);
		x.removeEventListener("click",hello);//删除句柄
		function hello(){
			alert("hello");
		}
		function world(){
			alert("world");
		}
	</script>

## ⑯：事件处理

1.html处理。

     <div id="div">
		<button id="btn1" onclick="demo()">按钮</button>
	</div>

	<script>
		function demo(){
			alert("hello html事件处理")
		}
	</script>

2.DOM 0级处理事件

    <div id="div">
		<button id="btn1">按钮</button>
	</div>

	<script>
	var btn1 = document.getElementById("btn1");
	btn1.onclick =  function (){alert("DOM0级处理事件1")};//被覆盖掉
	btn1.onclick =  function (){alert("DOM0级处理事件2")};
	</script>

3.DOM 2级处理事件

    <div id="div">
		<button id="btn1">按钮</button>
	</div>
	<script>
		var btn1 = document.getElementById("btn1");
		btn1.addEventListener("click",demo01);//增加
		btn1.addEventListener("click",demo02);
		btn1.addEventListener("click",demo03);
		function demo01() {
			alert("DOM2级处理事件1");
		}
		function demo02() {
			alert("DOM2级处理事件2");
		}
		function demo03() {
			alert("DOM2级处理事件3");
		}
		btn1.removeEventListener("click",demo02);//删除
	</script>

4.IE事件处理程序

    <div id="div"><button id="btn1">按钮</button></div>

	<script>
		var btn1 = document.getElementById("btn1");
		if(btn1.addEventListener){
			btn1.addEventListener("click",demo);
		}else if(btn1.attachEven){
			btn1.attachEven("onclick",demo);
		}else{
			btn1.onclick = demo();
		}
		function demo() {
			alert("hello");	
		}
	</script>

## 变量

	多个: var name1, name2,...

	let 声明的变量只在 let 命令所在的代码块内有效。(循环)不可以重置值

	声明变量类型:
	var name = new 类型(String)

	未声明的变量无法删除,声明的变量可以删除

	typeof 操作符来检测变量的数据类型:
	typeof "value" 

	变量的作用域:
	全局变量哪里都可以使用
	局部(函数)变量，函数内部可以使用，外部无法使用
	函数内部没有声明的(var)变量会变成全局变量
	函数的形参也是局部变量

## 常量

	
## 对象

	定义:
	var objName = {
	sx1: "value",
	sx2: "value",
	sx3: "value",
	funcName : function()
	{

	}

	}

	属性的使用:
	don..write(objName.sx1); 
	don..write(objName["sx1"]);
	方法的使用:
	don..write(objName.funcName());


## 正则表达式

	search() 
	用于检索字符串中指定的子字符串,或者检索子串的起始位置。
    var str = "hello word"; 
    var n = str.search(/word/);// 6

	replace() 
	接收字符串作为参数，或替换字符串

	<p id="demo">hello!</p>
	var str = document.getElementById("demo").innerHTML; 
    var txt = str.replace(/hello/,"hi");
    document.getElementById("demo").innerHTML = txt;// hi!

## 严格模式
	"use strict"
	脚本或函数的头部添加 use strict; 表达式来声明。

	为什么使用严格模式:
	消除代码运行的一些不安全之处，保证代码运行的安全；
	提高编译器效率，增加运行速度；
	许多大项目已经开始全面拥抱它。

## this
	对象方法中，this 表示当前对象
	单独使用，this 表示全局对象。
	在函数中，this 表示全局对象。
	在函数中，在严格模式下，this 是未定义的(undefined)。
	在事件中，this 表示接收事件的元素。

	函数对象中的方法apply() 和 call()中:
	this 即绑定的对象，可以将 this 引用到任何对象。
	call方法可以把对象2的属性当成参数传送到另一个方法中，另一方法this的属性 = 对象2的属性

## JSON 通常用于服务端向网页传递数据 
	语法规则
	数据为 键/值 对。
	数据由逗号分隔。
	大括号保存对象
	方括号保存数组
	"sites":[
    {"name":"Google", "url":"www.google.com"},
    {"name":"Taobao", "url":"www.taobao.com"}
		]

## javascript:void(0)
	void 操作符指定要计算一个表达式但是不返回值。
	a = void(代码) 没有返回值（a=undefined）

## js DOM

- 查找HTML元素
- 
	通过id: document.getElementById("idname")

	通过标签: 在div里查找p标签
	var x = document.getElementById("div");
	var y = x.getElementsByTagName("p");
	第一个p标签：y[0]

	通过类名查找:
	document.getElementsByClassName("classname");

- 修改 HTML 属性:查HTML元素.src=" "; 

- 修改 HTML CSS:查HTML元素.style.color=" "; 

- 使用 HTML DOM 来分配事件：
	查HTML元素.事件 = 匿名函数(调用函数)
	document.getElementById("myBtn").onclick=function(){displayDate()};

- 创建新的HTML元素:appendChild
- 
- 添加新元素到尾部
	var para = document.createElement("p");// 创建 <p> 元素:
	var node = document.createTextNode("这是一个新的段落。");// content
	para.appendChild(node);// 将文本节点添加到元素中：
	var el = doc.ById;// 查找已存在的元素（添加在哪里）
	el.appendChild(para);// 添加到已存在的元素中:
- 添加新元素到头部，使用 insertBefore() 方法:

- 移除已存在的元素:removeChild
- 要知道该元素的父元素

- 替换 HTML 元素：replaceChild
- 先拼接新的元素和节点
- parent.replaceChild(新元素, 替换元素);

## 设置Cookie

// 设置Cookie：document.cookie="username=John Doe";

	function setCookie(cname,cvalue)
	{
	document.cookie = cname+"="+cvalue;
	}

// 获取Cookie:切割字符为数组：document.cookie;

	function getCookie(cname)
	{
	var name = cname + "=";
	var ca = document.cookie.split(';');
	for(var i=0; i<ca.length; i++) {
		var c = ca[i].trim();
		document.write(ca);Z
		if (c.indexOf(name)==0) { return c.substring(name.length,c.length); }
	}
	return "";
	}

// 页面加载调用

	function checkCookie()	
	{ 	
	var user=getCookie("username");
	if (user!=""){
		alert("欢迎 " + user + " 再次访问");
	}
	else {
		user = prompt("请输入你的名字:","");
  		if (user!="" && user!=null){
    		setCookie("username",user);
    	}
	}
	}

## js中的进制

### 八进制:逢8进1，0~8，数字前加0表示八进制

### 十六进制:0~9 a~f，数字前加0x表示16进制

## 数据类型转换

	数字转换字符串型
	1、变量.toString();
	2、String(变量);
	3*、变量 + '';
	
	其他类型转换数字型
	1*、parseInt(变量)；// 整数 取整 会去掉单位
	2*、parseFloat(变量); // 小数浮点数 会去掉单位
	3、Number(变量); // 强制转换为数字型
	4、变量 - 0; || * 1 

	其他类型转换为布尔型
	Boolean(变量);
	转换为false的情况: 空字符串 0 NaN null undefined
	剩下的都是true

## js中的数组
	创建数组
	1、var 数组名 = new Array();
	2*、var 数组名 = [];

	新增数组元素
	1、arr.length = num;
	2、追加数组元素
	
	数组的冒泡排序(从小到大 从大到小)
	2个for循环(外长度-1 内长度-1-i) 2个初始值为0 交换变量

> js内置对象
	内置对象的使用:
	内置对象名.方法名();
	内置对象名.属性;
 
	数学对象:
	