<?php
/**
 * @author    : Death-Satan
 * @date      : 2021/8/19
 * @createTime: 15:32
 * @company   : Death撒旦
 * @link      https://www.cnblogs.com/death-satan
 */


namespace SaTan\Think\Sms;

use Satan\Think\Sms\interfaces\SmsInterface;

/**
 * Class SmsClient
 * @package SaTan\Think\Sms
 * @mixin \SmsInterface
 * @method sendSms(int $phone,string $sign_name,string $template_code,array $TemplateParam,array $extras=[])
 * @method sendBatchSms(array $phones,string $sign_name,string $template_code,array $TemplateParam,array $extras=[])
 * @method addSmsSign(string $sign_name,string $sign_source,string $remark,array $extras=[])
 * @method deleteSmsSign(string $sign_name)
 * @method modifySmsSign(string $sign_name,string $sign_source,string $remark,array $extras=[])
 * @method querySmsSign(string $sign_name='',array $extras=[])
 * @method addSmsTemplate(string $template_name,int $template_type,string $template_content,string $remark,array $extras=[])
 * @method deleteSmsTemplate(string $template_code,array $extras=[])
 * @method modifySmsTemplate(string $template_code,int $template_type,string $template_name,string $template_content,string $remark,array $extras=[])
 * @method querySmsTemplate(string $template,array $extras=[])
 */
class SmsClient
{
    protected SmsInterface $sms;
    public function __construct (SmsInterface $sms)
    {
        $this->sms = $sms;
    }
    /**
     * 执行sms
     * @param string $function
     * @param array  $vars
     *
     * @return mixed
     */
    protected function call_sms(string $function,array $vars)
    {
        return call_user_func_array([$this->sms,$function],$vars);
    }
    public function __call ($name, $arguments)
    {
        return $this->call_sms($name,$arguments);
    }
    /**
     * 发送短信
     * @param int          $phone 手机号
     * @param string       $sign_name 签名名称
     * @param string       $template_code 模板id
     * @param array $TemplateParam 模板变量
     * @param array        $extras  额外变量
     */
    public function send(int $phone,string $sign_name,string $template_code,array $TemplateParam,array $extras=[])
    {
        return $this->call_sms('sendSms',get_defined_vars());
    }
    /**
     * 批量发送短信
     * @param array  $phones 手机号[一维数组]
     * @param string $sign_name 签名名称
     * @param string $template_code 模板id
     * @param array  $TemplateParam 模板变量
     * @param array  $extras 额外变量
     */
    public function batchSend(array $phones,string $sign_name,string $template_code,array $TemplateParam,array $extras=[])
    {
        return $this->call_sms('sendBatchSms',get_defined_vars());
    }
}