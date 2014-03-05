fis-plus.plugin
===============
支持{%placeholder%}标签，用于控制smarty渲染时，控制输出使用。目前支持，控制modjs的输出。

##用法
1.{%placeholder mode="modjs"%}
* mode属性：表明占位标签类型。目前支持modjs。
* mode属性为空，什么都不输出。

##使用场景
* 控制modjs的输出。默认FIS-PLUS中 modjs输出在body标签结束后。
* script标签中js中使用require会导致报错。
* 使用{%placeholder mode="modjs"%}可以讲modjs同步输出到head标签中，保证script标签中js正常使用require语法。
