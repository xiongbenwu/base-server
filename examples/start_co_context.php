<?php

require __DIR__ . '/../vendor/autoload.php';
enableRuntimeCoroutine();

goWithContext(function () {
    //设置上下文
    setContextValue("one", "1");
    setContextValue("two", "3");
    goWithContext(function () {
        setContextValue("one", "2");
        //获取自己的上下文
        var_dump(getContextValue("one")); //2
        //会递归到父类
        var_dump(getContextValueWithParent("one")); //2
        var_dump(getContextValueWithParent("two")); //3
    });
    var_dump(getContextValue("one")); //1
});