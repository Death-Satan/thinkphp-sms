<?php
/**
 * @author    : Death-Satan
 * @date      : 2021/8/19
 * @createTime: 15:07
 * @company   : Death撒旦
 * @link      https://www.cnblogs.com/death-satan
 */


namespace SaTan\Think\Sms;


use think\App;
use think\db\BaseQuery;
use think\Model;

class ThinkService extends \think\Service
{
    public function register (): void
    {
        $this->app->bind('sms',function (App $app){
            return new Sms($app);
        });
        $this->commands([
            \SaTan\Think\Sms\commands\Sms::class
        ]);
    }
}