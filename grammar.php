
<?php

//# php
/*
    php脚本可以放置于文档中的任何位置

    php脚本以<?php开头，以?>结尾
        <?php
        //hello world
        ?>

    php文件的默认文件扩展名是“.php”

    php文件通常包含HTML标签以及一些php脚本代码

    php语句以分号结尾(;)。php代码块的关闭标签也会自动表明分号（因此在php代码块的最后一行不必使用分号）。

    php三种注释：// # /*
    
    php大小写敏感：
        php所有用户定义的函数、类和关键词（例如if else echo等）都对大小写不敏感
        php所有变量都对大小写敏感

    php变量：
        变量以$符号开头，其后是变量的名称
        变量名称必须以字母或下划线开头
        变量名称不能以数字开头
        变量名称只能包含字母数字字符和下划线（A-z、0-9以及_）
        变量名称对大小写敏感（$y和$Y是两个不同的变量）

    创建php变量
        php没有创建变量的命令，会在首次赋值时被创建
            $text="Hello World!";
            $x=5;
            $y=10.5;

    php是一门类型松散的语言
        我们不必告知php变量的数据类型
        php根据它的值，自动把变量转换成正确的数据类型

    php变量作用域
        在php中，可以在脚本的任意位置对变量进行声明
        变量的作用域指的是变量能够被引用/使用的那部分脚本
        php有三种不同的变量作用域
            local(局部)
            global(全局)
            static(静态)

    local和global作用域
        函数之外声明的变量拥有global作用域，只能在函数以外进行访问
        函数内部声明的变量拥有local作用域，只能在函数内部进行访问
        <?php
        $x=5;//全局作用域

        function mytest() {
            $y=10;//局部作用域
            echo "<p>测试函数内部的变量：</p>"
            echo "变量x是：$x"
            echo "<br>"
            echo "变量y是：$y"
        }

        mytest();

        echo "<p>测试函数之外的变量：</p>"
        echo "变量x是：$x"
        echo "<br>"
        echo "变量y是：$y"
        ?>

    php global关键词
        
*/

?>