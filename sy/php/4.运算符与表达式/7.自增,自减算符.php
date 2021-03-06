自增、自减算符
基本概念:自增或自减运算符与我们在C、C#、java中的运算符是一样的，即"++" 或"--"
使用详解:
	一种是先将变量增加或都减少1后再将值赋给原变量，叫做前置递增或递减运算符
	另一种是将运算符放在变量后面，即先返回变量的当前值，然后变量的当前值增加或者减少1，叫做后置递增或递减运算符
代码示例:
<?php
$a=10;
echo "\$a++的值为：".$a++."<br>"; 		//$a的值变为11
echo "\$a的值为：".$a."<br>";
echo "++\$a的值为：".++$a."<br>";		//$a的值变为12
?>
运行结果:
$a++的值为：10
$a的值为：11
++$a的值为：12