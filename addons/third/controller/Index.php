<?php

namespace addons\third\controller;

/**
 * 第三方登录
 */
class Index extends \think\addons\Controller
{

    public function _initialize()
    {
        parent::_initialize();
    }

    public function index()
    {
        $this->error("当前插件暂无前台页面");
    }

}
