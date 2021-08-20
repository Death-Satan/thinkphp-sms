<?php
/**
 * @author    : Death-Satan
 * @date      : 2021/8/20
 * @createTime: 13:03
 * @company   : Death撒旦
 * @link      https://www.cnblogs.com/death-satan
 */


namespace SaTan\Think\Sms\traits;


use SaTan\Think\Sms\SmsAction;
use think\Model;

/**
 * Trait Sms
 * @package SaTan\Think\Sms\traits
 * @mixin Model
 */
trait Sms
{

    /**
     * sms动作类
     * @var string
     */
    protected string $SmsAction;

    /**
     * sms动作类
     * @return SmsAction
     */
    public function sms():SmsAction
    {
       $app = app();
       return $app->invokeClass($this->SmsAction,[$app]);
    }

    /**
     * 发送短信
     * @param string $field 字段名
     * @param array $extra 额外参数
     */
    public function sms_send(string $field,array $extra=[]): object
    {
        return $this->sms()->setExtra($extra)->send($this->value($field));
    }

    /**
     * 验证
     * @param $field
     * @param $code
     */
    public function verify_sms($field,array $extra=[]): bool
    {
        return $this->sms()->setExtra($extra)->verify($this->value($field));
    }
}