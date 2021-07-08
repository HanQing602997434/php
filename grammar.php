
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
            global关键词用于在函数内访问全局变量
            <?php
            $x=5;
            $y=10;

            function mytest() {
                global $x,$y;
                $y=$x+$y;
            }

            mytest();
            echo $y; // 输出15
            ?>

            php同时在名为$GLOBALS[index]的数组中存储了所有的全局变量。下标存有变量名。
            这个数组在函数内也可以访问，并能够用于直接更新全局变量。

            上面的例子可以这样重写：
            <?php
            $x=5;
            $y=10;

            function mytest() {
                $GLOBALS['y']=$GLOBALS['x']+$GLOBALS['y'];
            }

            mytest();
            echo $y; // 输出15
            ?>

        php static关键词
            通常，当函数完成/执行后，会删除所有变量。不过有时我们需要不删除某个局部变量。
            实现这一点需要更进一步的工作，在首次声明变量时使用static关键词：
            <?php

            function mytest() {
                static $x=0;
                echo $x;
                $x++;
            }

            mytest();
            mytest();
            mytest();

            ?>

    php echo和print语句
        在php中，有两种基本的输出方式：echo和print。
        
        echo和print之间的差异：
            echo - 能够输出一个以上的字符串
            print - 只能输出一个字符串，并始终返回1

            echo比print稍快，因为它不返回任何值

        pho echo语句：
            echo是一个语言结构，有无括号均可使用：echo和echo()。

            显示字符串：
            <?php
            echo "<h2>php is fun!</h2>";
            echo "Hello world!<br>";
            echo "I am about to learn php!<br>";
            echo "This", "string", "was", "made", "with multiple parameters.";
            ?>

            显示变量：
            <?php
            $txt1="learn php";
            $txt2="hahaha";
            $cars=array("Volvo","BMW","SAAB");

            echo $txt1;
            echo "<br>";
            echo "study php $txt2";
            echo "<br>";
            echo "my cars is a {$cars[0]}";
            ?>

        php print语句：
            print也是语言结构，有无括号均可使用：print或print()。

            显示字符串：
            <?php
            print "<h2>php is fun!</h2>";
            print "Hello world!<br>";
            print "I am about to learn php";
            ?>
*/

?>