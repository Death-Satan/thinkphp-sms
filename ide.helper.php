<?php
/**
 * ide 提示文件
 * @author    : Death-Satan
 * @date      : 2021/8/19
 * @createTime: 18:58
 * @company   : Death撒旦
 * @link      https://www.cnblogs.com/death-satan
 */
namespace SaTan\Think\Sms{
    class SmsClient
    {
        /**
         * 发送短信
         * @param int          $phone 手机号
         * @param string       $sign_name 签名名称
         * @param string       $template_code 模板id
         * @param array $TemplateParam 模板变量
         * @param array        $extras  额外变量
         * @return mixed
         */
        public function sendSms(int $phone,string $sign_name,string $template_code,array $TemplateParam,array $extras=[]){}
        /**
         * 批量发送短信
         * @param array  $phones 手机号[一维数组]
         * @param string $sign_name 签名名称
         * @param string $template_code 模板id
         * @param array  $TemplateParam 模板变量
         * @param array  $extras 额外变量
         */
        public function sendBatchSms(array $phones,string $sign_name,string $template_code,array $TemplateParam,array $extras=[]){}
        /**
         * 添加签名
         * @param string $sign_name 签名名称
         * @param string $sign_source 签名来源
         * @param string $remark 申请备注
         * @param array  $extras
         * @return mixed
         */
        public function addSmsSign(string $sign_name,string $sign_source,string $remark,array $extras=[]){}
        /**
         * 删除签名
         * @param string $sign_name 签名
         *
         * @return mixed
         */
        public function deleteSmsSign(string $sign_name){}
        /**
         * 修改签名
         * @param string $sign_name 签名
         * @param string $sign_source 签名来源
         * @param string $remark 备注
         * @param array  $extras 额外变量
         *
         * @return mixed
         */
        public function modifySmsSign(string $sign_name,string $sign_source,string $remark,array $extras=[]){}
        /**
         * 查询签名状态
         * @param string $sign_name 签名
         * @param array  $extras 额外参数
         *
         * @return mixed
         */
        public function querySmsSign(string $sign_name='',array $extras=[]){}
        /**
         * 新增模板
         * @param string $template_name 模板名
         * @param int    $template_type 模板类型
         * @param string $template_content 模板内容
         * @param string $remark 备注|申请原因
         * @param array  $extras 额外参数
         *
         * @return mixed
         */
        public function addSmsTemplate(string $template_name,int $template_type,string $template_content,string $remark,array $extras=[]){}
        /**
         * 删除模板
         * @param string $template_code 模板code
         * @param array  $extras 额外参数
         *
         * @return mixed
         */
        public function deleteSmsTemplate(string $template_code,array $extras=[]){}
        /**
         * 更改模板
         * @param string $template_code 模板id|模板code
         * @param int    $template_type 模板类型
         * @param string $template_name 模板名
         * @param string $template_content 模板内容
         * @param string $remark 备注|申请原因
         * @param array  $extras 额外参数
         *
         * @return mixed
         */
        public function modifySmsTemplate(string $template_code,int $template_type,string $template_name,string $template_content,string $remark,array $extras=[]){}
        /**
         * 查询模板状态
         * @param string $template 模板id|模板code
         * @param array  $extras 额外参数
         *
         * @return mixed
         */
        public function querySmsTemplate(string $template,array $extras=[]){}
    }
    class Sms{
        /**
         * 发送短信
         * @param int          $phone 手机号
         * @param string       $sign_name 签名名称
         * @param string       $template_code 模板id
         * @param array $TemplateParam 模板变量
         * @param array        $extras  额外变量
         * @return Object
         */
        public function sendSms(int $phone,string $sign_name,string $template_code,array $TemplateParam,array $extras=[]){}
        /**
         * 批量发送短信
         * @param array  $phones 手机号[一维数组]
         * @param string $sign_name 签名名称
         * @param string $template_code 模板id
         * @param array  $TemplateParam 模板变量
         * @param array  $extras 额外变量
         * @return Object
         */
        public function sendBatchSms(array $phones,string $sign_name,string $template_code,array $TemplateParam,array $extras=[]){}
        /**
         * 添加签名
         * @param string $sign_name 签名名称
         * @param string $sign_source 签名来源
         * @param string $remark 申请备注
         * @param array  $extras
         * @return Object
         */
        public function addSmsSign(string $sign_name,string $sign_source,string $remark,array $extras=[]){}
        /**
         * 删除签名
         * @param string $sign_name 签名
         *
         * @return Object
         */
        public function deleteSmsSign(string $sign_name){}
        /**
         * 修改签名
         * @param string $sign_name 签名
         * @param string $sign_source 签名来源
         * @param string $remark 备注
         * @param array  $extras 额外变量
         *
         * @return Object
         */
        public function modifySmsSign(string $sign_name,string $sign_source,string $remark,array $extras=[]){}
        /**
         * 查询签名状态
         * @param string $sign_name 签名
         * @param array  $extras 额外参数
         *
         * @return Object
         */
        public function querySmsSign(string $sign_name='',array $extras=[]){}
        /**
         * 新增模板
         * @param string $template_name 模板名
         * @param int    $template_type 模板类型
         * @param string $template_content 模板内容
         * @param string $remark 备注|申请原因
         * @param array  $extras 额外参数
         *
         * @return Object
         */
        public function addSmsTemplate(string $template_name,int $template_type,string $template_content,string $remark,array $extras=[]){}
        /**
         * 删除模板
         * @param string $template_code 模板code
         * @param array  $extras 额外参数
         *
         * @return Object
         */
        public function deleteSmsTemplate(string $template_code,array $extras=[]){}
        /**
         * 更改模板
         * @param string $template_code 模板id|模板code
         * @param int    $template_type 模板类型
         * @param string $template_name 模板名
         * @param string $template_content 模板内容
         * @param string $remark 备注|申请原因
         * @param array  $extras 额外参数
         *
         * @return Object
         */
        public function modifySmsTemplate(string $template_code,int $template_type,string $template_name,string $template_content,string $remark,array $extras=[]){}
        /**
         * 查询模板状态
         * @param string $template 模板id|模板code
         * @param array  $extras 额外参数
         *
         * @return Object
         */
        public function querySmsTemplate(string $template,array $extras=[]){}
    }
    class SmsAction{
        /**
         * 发送短信
         * @param $phone
         *
         * @return Object|void
         */
        public static function send($phone)
        {
        }

        /**
         * 设置模板变量
         * @param array $template_param
         * @return self
         */
        public static function setTemplateParam (array $template_param):self
        {
        }

        /**
         * @param array $extra
         */
        public static function setExtra (array $extra): self
        {
        }
        /**
         * 验证手机号验证码
         * @param string $phone
         * @param string $code
         *
         * @return bool
         */
        public static function verify(string $phone,string $code):bool
        {
            return true;
        }
    }
}
namespace think{
    use SaTan\Think\Sms\Sms;

    class App extends Container {
        public Sms $sms;
    }
}