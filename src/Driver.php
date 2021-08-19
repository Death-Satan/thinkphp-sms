<?php
/**
 * @author    : Death-Satan
 * @date      : 2021/8/19
 * @createTime: 15:20
 * @company   : Death撒旦
 * @link      https://www.cnblogs.com/death-satan
 */
namespace SaTan\Think\Sms;

use Satan\Think\Sms\interfaces\SmsInterface;

/**
 * Class Driver
 * @package SaTan\Think\Sms
 * @mixin SmsClient
 */
abstract class Driver
{
    /**
     * 配置参数
     * @var array
     */
    protected $config = [];

    /**
     * 操作类
     * @var SmsClient
     */
    protected SmsClient $SmsClient;
    public function __construct (array $config)
    {
        $this->config = array_merge($this->config,$config);
        $sms = $this->createSms();
        $this->SmsClient = $this->createClient($sms);
    }
    abstract protected function createSms():SmsInterface;
    /**
     * 创建sms client
     * @param SmsInterface $sms
     *
     * @return SmsClient
     */
    protected function createClient(SmsInterface $sms):SmsClient
    {
        return new SmsClient($sms);
    }

    public function __call ($name, $arguments)
    {
        return $this->SmsClient->{$name}(...$arguments);
    }


}