<?php
/**
 * @author    : Death-Satan
 * @date      : 2021/8/19
 * @createTime: 15:19
 * @company   : Death撒旦
 * @link      https://www.cnblogs.com/death-satan
 */


namespace SaTan\Think\Sms;


use InvalidArgumentException;
use think\helper\Arr;

class Sms extends \think\Manager
{

    protected $namespace ='\\SaTan\\Think\\Sms\\driver\\';

    /**
     * @param null|string $name
     * @return Driver
     */
    public function disk(string $name = null): Driver
    {
        return $this->driver($name);
    }

    protected function driver (string $name = null)
    {
        return parent::driver($name); // TODO: Change the autogenerated stub
    }

    protected function resolveType(string $name)
    {
        return $this->getDiskConfig($name, 'type', 'aliyun');
    }

    protected function resolveConfig(string $name)
    {
        return $this->getDiskConfig($name);
    }

    /**
     * @inheritDoc
     */
    public function getDefaultDriver ()
    {
        return $this->getConfig('default');
    }

    /**
     * 获取缓存配置
     * @access public
     * @param null|string $name    名称
     * @param mixed       $default 默认值
     * @return mixed
     */
    public function getConfig(string $name = null, $default = null)
    {
        if (!is_null($name)) {
            return $this->app->config->get('sms.' . $name, $default);
        }

        return $this->app->config->get('filesystem');
    }

    /**
     * 获取磁盘配置
     * @param string $disk
     * @param null   $name
     * @param null   $default
     * @return array
     */
    public function getDiskConfig($disk, $name = null, $default = null)
    {
        if ($config = $this->getConfig("drives.{$disk}")) {
            return Arr::get($config, $name, $default);
        }

        throw new InvalidArgumentException("drives [$disk] not found.");
    }
}