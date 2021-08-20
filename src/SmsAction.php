<?php
/**
 * @author    : Death-Satan
 * @date      : 2021/8/20
 * @createTime: 11:28
 * @company   : Death撒旦
 * @link      https://www.cnblogs.com/death-satan
 */


namespace SaTan\Think\Sms;


use think\App;
use think\exception\ClassNotFoundException;

/**
 * Class SmsAction
 * @package SaTan\Think\Sms
 */
abstract class SmsAction
{
    protected App $app;
    public function __construct (App $app)
    {
        $this->app = $app;
    }

    /**
     * 驱动
     * @var string
     */
    protected string $disk = '';

    /**
     * 签名名称
     * @var string
     */
    protected string $sign_name = '';
    /**
     * 模板id
     * @var string
     */
    protected string $template_code = '';
    /**
     * 模板变量
     * @var array
     */
    protected array $template_param = [];
    /**
     * 额外参数
     * @var array
     */
    protected array $extra = [];

    /**
     * 发送短信
     * @param $phone
     *
     * @return Object|void
     */
    public function send($phone)
    {
        return $this->app->sms->disk($this->disk)
            ->sendSms($phone,$this->sign_name,$this->template_code,$this->template_param,$this->extra);
    }

    /**
     * 设置模板变量
     * @param array $template_param
     * @return self
     */
    public function setTemplateParam (array $template_param):self
    {
        $this->template_param = $template_param;
        return $this;
    }

    /**
     * @param array $extra
     */
    public function setExtra (array $extra): self
    {
        $this->extra = $extra;
        return $this;
    }
    /**
     * 验证手机号验证码
     * @param string $phone
     * @param string $code
     *
     * @return bool
     */
    public function verify(string $phone,string $code):bool
    {
        return true;
    }

    /**
     * is triggered when invoking inaccessible methods in a static context.
     *
     * @param $name      string
     * @param $arguments array
     *
     * @return mixed
     * @link https://php.net/manual/en/language.oop5.overloading.php#language.oop5.overloading.methods
     */
    public static function __callStatic ($name, $arguments)
    {
        $instance = new static(\app());
        if (!method_exists($instance,$name)){
            throw new ClassNotFoundException(sprintf('class: %s not find function: %s',static::class,$name));
        }
        return call_user_func_array([$instance,$name],$arguments);
    }

}