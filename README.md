fis-plus.plugin
===============
支持{%placeholder%}标签，用于控制smarty渲染时，控制输出使用。目前支持，控制modjs的输出。

## 用法
1.{%placeholder type="modjs"%}
* type属性：表明占位标签类型。目前支持modjs。
* type属性为空，什么都不输出。

## 使用场景
* 控制modjs的输出。默认FIS-PLUS中 modjs输出在body标签结束后。
* script标签中js中使用require会导致报错。
* 使用{%placeholder type="modjs"%}可以讲modjs输出到{%placeholder%}标签所在位（例如head标签中），保证script标签中js正常使用require语法。

## demo

    ```shell
     cd common
     fisp release -c
     fisp server start
     http://127.0.0.1:8080/common/test


## how to use in your project
1. cd common/plugin
2. 将compiler.placeholder.php和 FISResource.class.php放到common模块的plugin中
3. 就好啦~