类的实例化
基本概念:
	创建一个类后并不能直接的对属性和方法进行引用，必须对类进行实例化，即创建一个对象
	PHP中用new 关键字创建对象
	注意:类中的方法用"->"来访问
代码示例:
	$stu=new student(参数列表);
通过$stu对象调用student类中的属性和方法
	$stu->getStudentInfo();
