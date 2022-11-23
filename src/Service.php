<?php

namespace app\wechat;

/**
 * 组件注册服务
 * Class Service
 * @package app\wechat
 */
class Service extends \think\Service
{
    /**
     * 指定版本号
     * @var string
     */
    const VERSION = '0.0.1';

    /**
     * 组件服务启动
     * @return void
     */
    public function boot(): void
    {
        $addons = $this->app->config->get('app.addons', []);
        $addons['admin'] = __DIR__ . DIRECTORY_SEPARATOR;
        $this->app->config->set(['addons' => $addons], 'app');
        include_once __DIR__ . DIRECTORY_SEPARATOR . 'sys.php';
    }
}